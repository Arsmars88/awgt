<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
<? $APPLICATION->SetTitle("Главная"); ?>
    <div style="width: 80%;margin-left: auto; margin-right: auto;">

        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog",
            ".default",
            array(
                "ACTION_VARIABLE" => "action",
                "ADD_PICT_PROP" => "-",
                "ADD_PROPERTIES_TO_BASKET" => "Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "ADD_TO_BASKET_ACTION" => "ADD",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "BACKGROUND_IMAGE" => "-",
                "BASKET_URL" => "/personal/basket.php",
                "BRAND_PROPERTY" => "BRAND_REF",
                "BROWSER_TITLE" => "-",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COMPATIBLE_MODE" => "Y",
                "CONVERT_CURRENCY" => "Y",
                "CURRENCY_ID" => "RUB",
                "CUSTOM_FILTER" => "",
                "DATA_LAYER_NAME" => "dataLayer",
                "DETAIL_URL" => "",
                "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "ELEMENT_SORT_FIELD" => "sort",
                "ELEMENT_SORT_FIELD2" => "id",
                "ELEMENT_SORT_ORDER" => "asc",
                "ELEMENT_SORT_ORDER2" => "desc",
                "ENLARGE_PRODUCT" => "PROP",
                "ENLARGE_PROP" => "-",
                "FILTER_NAME" => "arrFilter",
                "HIDE_NOT_AVAILABLE" => "N",
                "HIDE_NOT_AVAILABLE_OFFERS" => "N",
                "IBLOCK_ID" => "6",
                "IBLOCK_TYPE" => "catalogs",
                "INCLUDE_SUBSECTIONS" => "Y",
                "LABEL_PROP" => array(),
                "LABEL_PROP_MOBILE" => "",
                "LABEL_PROP_POSITION" => "top-left",
                "LAZY_LOAD" => "N",
                "LINE_ELEMENT_COUNT" => "3",
                "LOAD_ON_SCROLL" => "N",
                "MESSAGE_404" => "",
                "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                "MESS_BTN_BUY" => "Купить",
                "MESS_BTN_DETAIL" => "Подробнее",
                "MESS_BTN_LAZY_LOAD" => "Показать ещё",
                "MESS_BTN_SUBSCRIBE" => "Подписаться",
                "MESS_NOT_AVAILABLE" => "Нет в наличии",
                "META_DESCRIPTION" => "-",
                "META_KEYWORDS" => "-",
                "OFFERS_CART_PROPERTIES" => array(
                    0 => "ARTNUMBER",
                    1 => "COLOR_REF",
                    2 => "SIZES_SHOES",
                    3 => "SIZES_CLOTHES",
                ),
                "OFFERS_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "OFFERS_LIMIT" => "5",
                "OFFERS_PROPERTY_CODE" => array(
                    0 => "COLOR_REF",
                    1 => "SIZES_SHOES",
                    2 => "SIZES_CLOTHES",
                    3 => "",
                ),
                "OFFERS_SORT_FIELD" => "sort",
                "OFFERS_SORT_FIELD2" => "id",
                "OFFERS_SORT_ORDER" => "asc",
                "OFFERS_SORT_ORDER2" => "desc",
                "OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
                "OFFER_TREE_PROPS" => array(
                    0 => "COLOR_REF",
                    1 => "SIZES_SHOES",
                    2 => "SIZES_CLOTHES",
                ),
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => "round",
                "PAGER_TITLE" => "Товары",
                "PAGE_ELEMENT_COUNT" => "6",
                "PARTIAL_PRODUCT_PROPERTIES" => "N",
                "PRICE_CODE" => array(
                    0 => "Розничная",
                ),
                "PRICE_VAT_INCLUDE" => "Y",
                "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
                "PRODUCT_DISPLAY_MODE" => "Y",
                "PRODUCT_ID_VARIABLE" => "id",
                "PRODUCT_PROPERTIES" => array(
                    0 => "NEWPRODUCT",
                    1 => "MATERIAL",
                ),
                "PRODUCT_PROPS_VARIABLE" => "prop",
                "PRODUCT_QUANTITY_VARIABLE" => "",
                "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "PRODUCT_SUBSCRIPTION" => "Y",
                "PROPERTY_CODE" => array(
                    0 => "NEWPRODUCT",
                    1 => "",
                ),
                "PROPERTY_CODE_MOBILE" => "",
                "RCM_PROD_ID" => "",
                "RCM_TYPE" => "bestsell",
                "SECTION_CODE" => "",
                "SECTION_ID" => "",
                "SECTION_ID_VARIABLE" => "SECTION_ID",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array(
                    0 => "",
                    1 => "",
                ),
                "SEF_MODE" => "Y",
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SHOW_ALL_WO_SECTION" => "Y",
                "SHOW_CLOSE_POPUP" => "N",
                "SHOW_DISCOUNT_PERCENT" => "Y",
                "SHOW_FROM_SECTION" => "N",
                "SHOW_MAX_QUANTITY" => "N",
                "SHOW_OLD_PRICE" => "N",
                "SHOW_PRICE_COUNT" => "1",
                "SHOW_SLIDER" => "Y",
                "SLIDER_INTERVAL" => "3000",
                "SLIDER_PROGRESS" => "N",
                "TEMPLATE_THEME" => "blue",
                "USE_ENHANCED_ECOMMERCE" => "N",
                "USE_MAIN_ELEMENT_SECTION" => "N",
                "USE_PRICE_COUNT" => "N",
                "USE_PRODUCT_QUANTITY" => "N",
                "COMPONENT_TEMPLATE" => ".default",
                "DISPLAY_COMPARE" => "N",
                "COMMON_SHOW_CLOSE_POPUP" => "N",
                "MESS_BTN_COMPARE" => "Сравнение",
                "SIDEBAR_SECTION_SHOW" => "Y",
                "SIDEBAR_DETAIL_SHOW" => "N",
                "SIDEBAR_PATH" => "",
                "USER_CONSENT" => "N",
                "USER_CONSENT_ID" => "0",
                "USER_CONSENT_IS_CHECKED" => "Y",
                "USER_CONSENT_IS_LOADED" => "N",
                "SEF_FOLDER" => "/",
                "DETAIL_STRICT_SECTION_CHECK" => "N",
                "ADD_ELEMENT_CHAIN" => "N",
                "USE_SALE_BESTSELLERS" => "Y",
                "USE_FILTER" => "Y",
                "FILTER_VIEW_MODE" => "VERTICAL",
                "FILTER_HIDE_ON_MOBILE" => "N",
                "INSTANT_RELOAD" => "N",
                "USE_REVIEW" => "N",
                "USE_COMPARE" => "N",
                "PRICE_VAT_SHOW_VALUE" => "N",
                "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
                "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
                "TOP_ADD_TO_BASKET_ACTION" => "ADD",
                "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
                "DETAIL_ADD_TO_BASKET_ACTION" => array(
                    0 => "BUY",
                ),
                "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
                    0 => "BUY",
                ),
                "SEARCH_PAGE_RESULT_COUNT" => "50",
                "SEARCH_RESTART" => "N",
                "SEARCH_NO_WORD_LOGIC" => "Y",
                "SEARCH_USE_LANGUAGE_GUESS" => "Y",
                "SEARCH_CHECK_DATES" => "Y",
                "SHOW_TOP_ELEMENTS" => "Y",
                "TOP_ELEMENT_COUNT" => "9",
                "TOP_LINE_ELEMENT_COUNT" => "3",
                "TOP_ELEMENT_SORT_FIELD" => "sort",
                "TOP_ELEMENT_SORT_ORDER" => "asc",
                "TOP_ELEMENT_SORT_FIELD2" => "id",
                "TOP_ELEMENT_SORT_ORDER2" => "desc",
                "TOP_VIEW_MODE" => "SECTION",
                "SECTION_COUNT_ELEMENTS" => "Y",
                "SECTION_TOP_DEPTH" => "2",
                "SECTIONS_VIEW_MODE" => "LIST",
                "SECTIONS_SHOW_PARENT_NAME" => "Y",
                "LIST_META_KEYWORDS" => "-",
                "LIST_META_DESCRIPTION" => "-",
                "LIST_BROWSER_TITLE" => "-",
                "SECTION_BACKGROUND_IMAGE" => "-",
                "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "LIST_ENLARGE_PRODUCT" => "STRICT",
                "LIST_SHOW_SLIDER" => "Y",
                "LIST_SLIDER_INTERVAL" => "3000",
                "LIST_SLIDER_PROGRESS" => "N",
                "DETAIL_META_KEYWORDS" => "-",
                "DETAIL_META_DESCRIPTION" => "-",
                "DETAIL_BROWSER_TITLE" => "-",
                "DETAIL_SET_CANONICAL_URL" => "N",
                "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                "DETAIL_BACKGROUND_IMAGE" => "-",
                "SHOW_DEACTIVATED" => "N",
                "DETAIL_USE_VOTE_RATING" => "N",
                "DETAIL_USE_COMMENTS" => "N",
                "DETAIL_BRAND_USE" => "N",
                "DETAIL_DISPLAY_NAME" => "Y",
                "DETAIL_IMAGE_RESOLUTION" => "16by9",
                "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
                "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
                "DETAIL_SHOW_SLIDER" => "N",
                "DETAIL_DETAIL_PICTURE_MODE" => array(
                    0 => "POPUP",
                    1 => "MAGNIFIER",
                ),
                "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
                "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
                "MESS_PRICE_RANGES_TITLE" => "Цены",
                "MESS_DESCRIPTION_TAB" => "Описание",
                "MESS_PROPERTIES_TAB" => "Характеристики",
                "MESS_COMMENTS_TAB" => "Комментарии",
                "DETAIL_SHOW_POPULAR" => "Y",
                "DETAIL_SHOW_VIEWED" => "Y",
                "LINK_IBLOCK_TYPE" => "",
                "LINK_IBLOCK_ID" => "",
                "LINK_PROPERTY_SID" => "",
                "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                "USE_GIFTS_DETAIL" => "Y",
                "USE_GIFTS_SECTION" => "Y",
                "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
                "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
                "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
                "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
                "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
                "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                "GIFTS_SHOW_OLD_PRICE" => "Y",
                "GIFTS_SHOW_NAME" => "Y",
                "GIFTS_SHOW_IMAGE" => "Y",
                "GIFTS_MESS_BTN_BUY" => "Выбрать",
                "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
                "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
                "USE_STORE" => "N",
                "USE_BIG_DATA" => "Y",
                "BIG_DATA_RCM_TYPE" => "personal",
                "USE_ELEMENT_COUNTER" => "Y",
                "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
                "FILTER_FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_PROPERTY_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "FILTER_PRICE_CODE" => array(),
                "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                "TOP_ENLARGE_PRODUCT" => "STRICT",
                "TOP_SHOW_SLIDER" => "Y",
                "TOP_SLIDER_INTERVAL" => "3000",
                "TOP_SLIDER_PROGRESS" => "N",
                "SEF_URL_TEMPLATES" => array(
                    "sections" => "/dd/",
                    "section" => "",
                    "element" => "#SECTION_ID#/#ELEMENT_ID#/",
                    "compare" => "compare.php?action=#ACTION_CODE#",
                    "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
                ),
                "VARIABLE_ALIASES" => array(
                    "compare" => array(
                        "ACTION_CODE" => "action",
                    ),
                )
            ),
            false
        ); ?>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>