<?php

namespace Sprint\Migration;

use \Sprint\Migration\Helpers\IblockHelper;
use Bitrix\Main\Loader;

Loader::includeModule('catalog');

class Version_create_iblock20191105184036 extends Version
{
    protected $description = "Создание типа инфоболока и инфоблока для торгового каталога";

    public function up()
    {
        $helper = new HelperManager();
        $iblock_type = $helper->Iblock()->addIblockTypeIfNotExists([
            'ID' => 'catalogs',
            'LANG' => array(
                'en' => array(
                    'NAME' => 'Catalogs',
                    'SECTION_NAME' => 'Sections',
                    'ELEMENT_NAME' => 'Elements'
                ),
                'ru' => array(
                    'NAME' => 'Каталоги',
                    'SECTION_NAME' => 'Разделы',
                    'ELEMENT_NAME' => 'Элементы'
                ),
            ),
        ]);

        if ($iblock_type) {
            $iblock = $helper->Iblock()->addIblockIfNotExists([
                'NAME' => 'Тестовые товары',
                'CODE' => 'products',
                'LID' => ['s1'],
                'IBLOCK_TYPE_ID' => 'catalogs',
                'LIST_PAGE_URL' => '#SITE_DIR#/',
                'DETAIL_PAGE_URL' => '#SITE_DIR#/#ELEMENT_CODE#/',
            ]);
            if ($iblock) {
                $result = \CCatalog::Add(['IBLOCK_ID' => $iblock]);
                if ($result)
                    $this->outSuccess('Тип инфоблока и инфоблок для торгового каталога созданы');
                else
                    $this->outError('Ошибка привязывания информационного блока к модулю торгового каталога');

            }
        }
    }

    public function down()
    {
        $helper = $this->getHelperManager();
        $ok = $helper->Iblock()->deleteIblockIfExists('products');
        if ($ok) {
            $this->outSuccess('Инфоблок удален');
            $ok = $helper->Iblock()->deleteIblockTypeIfExists('catalogs');
            if ($ok) {
                $this->outSuccess('Тип инфоблока удален');
            } else {
                $this->outError('Ошибка удаления типа инфоблока');
            }
        } else {
            $this->outError('Ошибка удаления инфоблока');
        }
    }
}