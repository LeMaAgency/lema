<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"catalog", 
	array(
		"IBLOCK_TYPE" => "aspro_digital_catalog",
		"IBLOCK_ID" => "27",
		"NEWS_COUNT" => "24",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/product/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "FORM_ORDER",
			1 => "PRICE",
			2 => "PRICEOLD",
			3 => "STATUS",
			4 => "ARTICLE",
			5 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"SORT_PROP" => array(
			0 => "name",
			1 => "PRICE",
		),
		"SORT_PROP_DEFAULT" => "name",
		"SORT_DIRECTION" => "asc",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "FORM_QUESTION",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "PRICEOLD",
			4 => "STATUS",
			5 => "ARTICLE",
			6 => "LINK_PROJECTS",
			7 => "LINK_FAQ",
			8 => "LINK_SALE",
			9 => "SUPPLIED",
			10 => "CATEGORY",
			11 => "USERS",
			12 => "PLACE_CLOUD",
			13 => "UPDATES",
			14 => "RECOMMEND",
			15 => "DURATION",
			16 => "LINK_TARIF",
			17 => "LINK_GOODS",
			18 => "LINK_SERVICES",
			19 => "LANGUAGES",
			20 => "BRAND",
			21 => "TYPE",
			22 => "COLOR",
			23 => "SIZE",
			24 => "DOCUMENTS",
			25 => "VIDEO",
			26 => "VIDEO_IFRAME",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_DETAIL" => "Y",
		"IMAGE_POSITION" => "top",
		"COUNT_IN_LINE" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"USE_SHARE" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_PROJECTS" => "Проекты",
		"T_CHARACTERISTICS" => "",
		"COMPONENT_TEMPLATE" => "catalog",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FILTER_URL_TEMPLATE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"FILE_404" => "",
		"SECTIONS_COUNT_IN_LINE" => "2",
		"VIEW_TYPE_SECTION" => "list_block",
		"VIEW_TYPE" => "table",
		"SHOW_CHILD_SECTIONS" => "Y",
		"IMAGE_CATALOG_POSITION" => "left",
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_BRAND_PROP_CODE" => array(
			0 => "TIZERS",
			1 => "",
		),
		"T_SERVICES" => "",
		"T_FAQ" => "",
		"T_TARIF" => "",
		"T_DESC" => "",
		"T_DEV" => "Производитель",
		"T_ITEMS" => "",
		"GALLERY_TYPE" => "big",
		"SECTIONS_TYPE_VIEW" => "sections_1",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SECTION_TYPE_VIEW" => "section_2",
		"LINE_ELEMENT_COUNT" => "3",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"SHOW_BRAND_DETAIL" => "Y",
		"FORM_ID_ORDER_SERVISE" => "",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>