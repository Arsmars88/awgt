<?php

namespace Sprint\Migration;


class Version_create_properties20191105194509 extends Version
{
    protected $description = "Создание свойств товара";

    public function up()
    {
        $helper = new HelperManager();
        $iblock = $helper->Iblock()->getIblock('products', 'catalogs');
        if ($iblock) {
            if(\CIBlock::GetArrayByID($iblock['ID'], "SECTION_PROPERTY") !== "Y") {
                $ib = new \CIBlock;
                $ib->Update($iblock['ID'], array("SECTION_PROPERTY" => "Y"));
            }
            $helper->Iblock()->addPropertyIfNotExists($iblock['ID'], [
                'NAME' => 'Цвет',
                'CODE' => 'COLOR',
                'PROPERTY_TYPE' => 'S',
                'SMART_FILTER' => 'Y',
                'IBLOCK_ID' => $iblock['ID']
            ]);
            $helper->Iblock()->addPropertyIfNotExists($iblock['ID'], [
                'NAME' => 'Размер',
                'CODE' => 'SIZE',
                'PROPERTY_TYPE' => 'S',
                'SMART_FILTER' => 'Y',
                'IBLOCK_ID' => $iblock['ID']
            ]);

            $this->outSuccess('Свойства для торгового каталога созданы');
        } else
            $this->outError('Инфоблок не найден');
    }

    public function down()
    {
        $helper = new HelperManager();
        $iblock = $helper->Iblock()->getIblock('products', 'catalogs');
        if ($iblock) {
            if ($helper->Iblock()->deletePropertyIfExists($iblock['ID'], 'COLOR') &&
                $helper->Iblock()->deletePropertyIfExists($iblock['ID'], 'SIZE'))
                $this->outSuccess('Свойства для торгового каталога удалены');
            else
                $this->outError('Свойства для торгового каталога не удалены');
        } else
            $this->outError('Инфоблок не найден');
    }
}