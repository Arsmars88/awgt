<?php

namespace Sprint\Migration;

use Bitrix\Main\Loader;

Loader::includeModule('catalog');

class Version_create_products20191105203936 extends Version
{
    protected $description = "Создание товаров";

    public function up()
    {
        $helper = new HelperManager();
        $iblock = $helper->Iblock()->getIblock('products', 'catalogs');
        if ($iblock) {
            $type_price = \CCatalogGroup::GetBaseGroup();
            for ($i = 1; $i < 30; $i++) {
                $fields = [
                    'CODE' => 'product_' . $i,
                    'NAME' => 'Товар ' . $i,
                    'DETAIL_TEXT_TYPE' => 'html',
                    'DETAIL_TEXT' => '<h3>Детальное описание товара</h3><p>Товар ' . $i . '</p>',
                    'PREVIEW_TEXT' => 'Текст анонса товара ' . $i,
                    'DETAIL_PICTURE' => \CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"] .'/local/templates/test/img/'.($i%10).'.jpg'),
                    'PREVIEW_PICTURE' => \CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"] .'/local/templates/test/img/'.(($i+1)%10).'.jpg'),

                ];

                $props = [
                    'COLOR' => 'Цвет ' . $i,
                    'SIZE' => 'Размер ' . $i
                ];
                $element = $helper->Iblock()->addElementIfNotExists($iblock['ID'], $fields, $props);
                if ($element) {
                    $arFields = Array(
                        "ID" => $element,
                        "TYPE" => \Bitrix\Catalog\ProductTable::TYPE_PRODUCT,
                        "AVAILABLE" => 'Y',
                        "QUANTITY" => 100
                    );
                    if (\Bitrix\Catalog\ProductTable::Add($arFields)) {
                        $arFieldsPrice = Array(
                            "PRODUCT_ID" => $element,
                            "CATALOG_GROUP_ID" => $type_price['ID'],
                            "PRICE" => $i * 5,
                            "CURRENCY" => "RUB",
                        );
                        \Bitrix\Catalog\Model\Price::add($arFieldsPrice);

                        $this->outSuccess('Добавлн товар ID ' . $element);
                    }
                }
            }
        } else
            $this->outError('Инфоблок не найден');
    }

    public function down()
    {
        $helper = new HelperManager();
        $iblock = $helper->Iblock()->getIblock('products', 'catalogs');
        if ($iblock) {
            $code = 'product_';
            for ($i = 1; $i < 30; $i++)
                $helper->Iblock()->deleteElementIfExists($iblock['ID'], $code.$i);
        } else
            $this->outError('Инфоблок не найден');
    }
}