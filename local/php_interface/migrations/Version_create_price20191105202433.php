<?php

namespace Sprint\Migration;
use Bitrix\Main\Loader;

Loader::includeModule('catalog');

class Version_create_price20191105202433 extends Version
{
    protected $description = "Создание типа цены";

    public function up()
    {
        $result = \Bitrix\Main\GroupTable::getList(array(
            'select'  => array('ID')
        ));
        $groups = [];
        while ($arGroup = $result->fetch()) {
            $groups[] =  $arGroup['ID'];
        }

        $arFields = array(
            "NAME" => "Розничная",
            "BASE" => 'Y',
            "USER_GROUP" => $groups,
            "USER_GROUP_BUY" => $groups,
        );

        $ID = \CCatalogGroup::Add($arFields);
        if ($ID<=0)
            $this->outError("Ошибка добавления типа цены");
        else
            $this->outSuccess('Тип цены добавлен');
    }

    public function down()
    {
    }
}