<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme;
$bOrder = ($arTheme['ORDER_VIEW']['VALUE'] == 'Y' && $arTheme['ORDER_VIEW']['DEPENDENT_PARAMS']['ORDER_BASKET_VIEW']['VALUE']=='HEADER' ? true : false);
$bCabinet = ($arTheme["CABINET"]["VALUE"]=='Y' ? true : false);
$bPhone = (intval($arTheme['HEADER_PHONES']) > 0 ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
$fixedMenuClass = ($arTheme['TOP_MENU_FIXED']['VALUE'] == 'Y' ? ' canfixed' : '');
$basketViewClass = strtolower($arTheme["ORDER_BASKET_VIEW"]["VALUE"]);
?>

<header class="header-v10<?=$fixedMenuClass?><?=$basketViewClass?>">
	<div class="mega_fixed_menu">
		<div class="maxwidth-theme">
			<div class="col-md-12">
				<div class="menu-only">
					<nav class="mega-menu">
						<i class="svg svg-close"></i>
						<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
							array(
								"COMPONENT_TEMPLATE" => ".default",
								"PATH" => SITE_DIR."include/header/menu.php",
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => "include_area.php"
							),
							false, array("HIDE_ICONS" => "Y")
						);?>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<div class="logo_and_menu-row">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="burger pull-left"><i class="svg svg-burger mask"></i></div>
				<div class="logo-block col-md-2 col-sm-3">
					<div class="logo<?=$logoClass?>">
						<?=CDigital::ShowLogo();?>
					</div>
				</div>
				<div class="col-md-2 hidden-sm hidden-xs">
					<div class="top-description">
						<?$APPLICATION->IncludeFile(SITE_DIR."include/header/header-text.php", array(), array(
								"MODE" => "html",
								"NAME" => "Text in title",
								"TEMPLATE" => "include_area",
							)
						);?>
					</div>
				</div>
				<div class="right-icons pull-right">
					<div class="pull-right show-fixed">
						<div class="wrap_icon">
							<button class="top-btn inline-search-show twosmallfont">
								<i class="svg svg-search lg" aria-hidden="true"></i>
							</button>
						</div>
					</div>
					<?if($bOrder):?>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CDigital::showBasketLink('with_price', 'lg', GetMessage('BASKET'), true);?>
							</div>
						</div>
					<?endif;?>
					<?if($bCabinet):?>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CDigital::showCabinetLink(true, true, 'lg', GetMessage('MY_CABINET'), '', 'with_name');?>
							</div>
						</div>
					<?endif;?>
					<div class="pull-right">
						<div class="wrap_icon inner-table-block">
							<div class="phone-block">
								<?CDigital::ShowHeaderPhones();?>
								<span class="callback-block animate-load twosmallfont colored" data-event="jqm" data-param-id="<?=CCache::$arIBlocks[SITE_ID]["aspro_digital_form"]["aspro_digital_callback"][0]?>" data-name="callback"><?=GetMessage("S_CALLBACK")?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="line-row visible-xs"></div>
</header>