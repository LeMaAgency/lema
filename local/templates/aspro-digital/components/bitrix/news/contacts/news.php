<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$this->setFrameMode(true);?>
<?
use \Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$arItemFilter = CDigital::GetIBlockAllElementsFilter($arParams);
$arItemSelect = array('ID', 'NAME', 'IBLOCK_ID', 'IBLOCK_SECTION_ID', 'PROPERTY_MAP');
$arItems = CCache::CIblockElement_GetList(array("CACHE" => array("TAG" => CCache::GetIBlockCacheTag($arParams["IBLOCK_ID"]))), $arItemFilter, false, false, $arItemSelect);

$arAllSections = array();
if($arItems)
	$arAllSections = CDigital::GetSections($arItems, $arParams);
?>
<?if($arParams['SHOW_TOP_MAP'] != 'Y'):?>
	<div class="contacts-page-top">
		<div class="contacts row maxwidth-theme">
			<?$bHasSections = (isset($arAllSections['ALL_SECTIONS']) && $arAllSections['ALL_SECTIONS']);?>
			<?$bHasChildSections = (isset($arAllSections['CHILD_SECTIONS']) && $arAllSections['CHILD_SECTIONS']);?>
			<?if($bHasSections):?>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6 col-sm-4">
							<select class="<?=($bHasChildSections ? 'region' : 'city');?>">
								<option value="0" selected><?=Loc::getMessage('CHOISE_ITEM', array('#ITEM#' => ($bHasChildSections ? Loc::getMessage('REGION') : Loc::getMessage('CITY'))))?></option>
								<?foreach($arAllSections['ALL_SECTIONS'] as $arSection):?>
									<option value="<?=$arSection['SECTION']['ID'];?>"><?=$arSection['SECTION']['NAME'];?></option>
								<?endforeach;?>
							</select>
						</div>
						<?if($bHasChildSections):?>
							<div class="col-md-6 col-sm-4">
								<select class="city">
									<option value="0" selected><?=Loc::getMessage('CHOISE_ITEM', array('#ITEM#' => Loc::getMessage('CITY')))?></option>
									<?foreach($arAllSections['CHILD_SECTIONS'] as $arSection):?>
										<option style="display:none;" value="<?=$arSection['ID'];?>" data-parent_section="<?=$arSection['IBLOCK_SECTION_ID'];?>"><?=$arSection['NAME'];?></option>
									<?endforeach;?>
								</select>
							</div>
						<?endif;?>
					</div>
				</div>
			<?endif;?>
			<div class="col-md-<?=($bHasSections ? 6 : 12);?>">
				<div class="row">
					<div class="col-md-6">
						<table>
							<tr>
								<td class="icon"><i class="fa big-icon grey s45 fa-phone"></i></td>
								<td> <span class="dark_table"><?=Loc::getMessage('SPRAVKA');?></span>
									<br />
									<span itemprop="telephone"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-phone-one.php", Array(), Array("MODE" => "html", "NAME" => "Phone"));?></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="col-md-6">
						<table>
							<tr>
								<td class="icon"><i class="fa big-icon grey s45 fa-envelope"></i></td>
								<td> <span class="dark_table">E-mail</span>
									<br />
									<span itemprop="email"><?$APPLICATION->IncludeFile(SITE_DIR."include/contacts-site-email.php", Array(), Array("MODE" => "html", "NAME" => "Email"));?></span>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?endif;?>
<div class="ajax_items">
	<?if((isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") || (strtolower($_REQUEST['ajax']) == 'y')){
		$APPLICATION->RestartBuffer();?>
	<?}?>
	<?if($arItems):?>
		<?CDigital::CheckComponentTemplatePageBlocksParams($arParams, __DIR__);?>
		<?@include_once('page_blocks/'.$arParams["SECTIONS_TYPE_VIEW"].'.php');?>
		<?CDigital::checkRestartBuffer();?>
	<?endif;?>
</div>