<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemindex.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06480d4062_87921279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '375be85a3a0c4008f63a6f502a7b95f209d406f2' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemindex.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."slider.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_breadcrumb.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."sidebar.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_footer.html' => 1,
  ),
),false)) {
function content_694c06480d4062_87921279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"index"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_341900909694c06480b11c9_28762284', "index_head");
?>


<?php if ((defined('SHOP_OFFLINE') ? constant('SHOP_OFFLINE') : null)) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2134035614694c06480b1bd2_66073075', "index_shop_offline");
?>

<?php } else { ?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1376903211694c06480b31f5_98458306', "index_popup_notification");
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_813134470694c06480b36c5_16669955', "index_outer_wrapper");
?>


<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1310871522694c06480d3848_89537025', "index_bottom");
?>

<?php }
/* {block "index_head"} */
class Block_341900909694c06480b11c9_28762284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_head' => 
  array (
    0 => 'Block_341900909694c06480b11c9_28762284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HEAD']->value;
}
}
/* {/block "index_head"} */
/* {block "index_shop_offline"} */
class Block_2134035614694c06480b1bd2_66073075 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_shop_offline' => 
  array (
    0 => 'Block_2134035614694c06480b1bd2_66073075',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.html_shop_offline.php','function'=>'smarty_function_html_shop_offline',),));
echo smarty_function_html_shop_offline(array(),$_smarty_tpl);
}
}
/* {/block "index_shop_offline"} */
/* {block "index_popup_notification"} */
class Block_1376903211694c06480b31f5_98458306 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_popup_notification' => 
  array (
    0 => 'Block_1376903211694c06480b31f5_98458306',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['POPUP_NOTIFICATION']->value;
}
}
/* {/block "index_popup_notification"} */
/* {block "index_outer_wrapper_header_inside_top_search"} */
class Block_138569095694c06480b62d3_62266148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['TOP_SEARCH']->value,"navbar-search",''),"input-group",'');
}
}
/* {/block "index_outer_wrapper_header_inside_top_search"} */
/* {block "index_outer_wrapper_header_inside_top_search_if"} */
class Block_1907374201694c06480b46c7_90643843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

						<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-show-search-top-nav"),$_smarty_tpl);
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('showSearchTopNav', $_prefixVariable3);?>
						<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-search-col"),$_smarty_tpl);
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideSearch', $_prefixVariable4);?>
						<?php if ((!$_smarty_tpl->tpl_vars['hideSearch']->value || $_smarty_tpl->tpl_vars['showSearchTopNav']->value)) {?>
							<div class="meco-overlay-menu-search">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138569095694c06480b62d3_62266148', "index_outer_wrapper_header_inside_top_search", $this->tplIndex);
?>

							</div>
						<?php }?>
					<?php
}
}
/* {/block "index_outer_wrapper_header_inside_top_search_if"} */
/* {block "index_outer_wrapper_header"} */
class Block_1329031945694c06480b3d81_89748939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<header id="header" class="navbar">
					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</header>
				<button id="meco-overlay-menu-toggle" data-toggle="menu" class="c-hamburger c-hamburger--htx visible-xs-block">
					<span></span> <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_menu'];?>

				</button>
				<div id="meco-overlay-menu">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907374201694c06480b46c7_90643843', "index_outer_wrapper_header_inside_top_search_if", $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block "index_outer_wrapper_header"} */
/* {block "index_outer_wrapper_imageslider"} */
class Block_1221293431694c06480bb542_02155727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('slider'=>$_smarty_tpl->tpl_vars['IMGSLIDER']->value), 0, true);
?>
			<?php
}
}
/* {/block "index_outer_wrapper_imageslider"} */
/* {block "index_inner_wrapper_main_breadcrumb"} */
class Block_180321990694c06480bd4f1_41238019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_breadcrumb.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('breadcrumb'=>$_smarty_tpl->tpl_vars['navtrail']->value), 0, true);
?>
									<?php
}
}
/* {/block "index_inner_wrapper_main_breadcrumb"} */
/* {block "index_inner_wrapper_main_banner"} */
class Block_1804233214694c06480be7f9_74542434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div id="shop-top-banner">
											<?php if ($_smarty_tpl->tpl_vars['BANNER_HTML']->value) {?>
												<?php echo $_smarty_tpl->tpl_vars['BANNER_HTML']->value;?>

											<?php } elseif ($_smarty_tpl->tpl_vars['BANNER_IMAGE']->value) {?>
												<a href="<?php echo $_smarty_tpl->tpl_vars['BANNER_LINK']->value;?>
" onclick="window.open(this.href); return false;"><img src="<?php echo $_smarty_tpl->tpl_vars['BANNER_IMAGE']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['BANNER_ALT']->value;?>
"/></a>
											<?php }?>
										</div>
									<?php
}
}
/* {/block "index_inner_wrapper_main_banner"} */
/* {block "index_inner_wrapper_main_content"} */
class Block_943214715694c06480c07b7_80735158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}
}
/* {/block "index_inner_wrapper_main_content"} */
/* {block "index_inner_wrapper_main"} */
class Block_1046291893694c06480bcf75_09378600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div id="main">
								<div class="main-inside">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180321990694c06480bd4f1_41238019', "index_inner_wrapper_main_breadcrumb", $this->tplIndex);
?>


									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1804233214694c06480be7f9_74542434', "index_inner_wrapper_main_banner", $this->tplIndex);
?>


									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_943214715694c06480c07b7_80735158', "index_inner_wrapper_main_content", $this->tplIndex);
?>

								</div>
							</div>
						<?php
}
}
/* {/block "index_inner_wrapper_main"} */
/* {block "index_inner_wrapper_left"} */
class Block_872389416694c06480c6fd3_69579584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "index_inner_wrapper_left"} */
/* {block "index_inner_wrapper_left"} */
class Block_29692361694c06480c7a91_42958208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							<?php
}
}
/* {/block "index_inner_wrapper_left"} */
/* {block "index_inner_wrapper_right_content"} */
class Block_36421919694c06480c92f1_68790709 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.menuboxes.php','function'=>'smarty_function_menuboxes',),));
?>

									<?php echo smarty_function_menuboxes(array('first'=>101,'last'=>200,'exclude'=>"content"),$_smarty_tpl);?>

								<?php
}
}
/* {/block "index_inner_wrapper_right_content"} */
/* {block "index_inner_wrapper_right"} */
class Block_89320204694c06480c8d82_15902167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<aside id="right">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36421919694c06480c92f1_68790709', "index_inner_wrapper_right_content", $this->tplIndex);
?>

							</aside>
						<?php
}
}
/* {/block "index_inner_wrapper_right"} */
/* {block "index_inner_wrapper"} */
class Block_190279149694c06480bc9d3_01897800 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

				<div id="wrapper">
					<div class="row">

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1046291893694c06480bcf75_09378600', "index_inner_wrapper_main", $this->tplIndex);
?>


                                                <?php $_smarty_tpl->_assignInScope('CURRENT_PAGE_IS_LISTING_PAGE', ((isset($_GET['cat'])) || (isset($_GET['filter_id'])) || (isset($_GET['manufacturers_id'])) || $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value == "/products_new.php" || $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value == "/specials.php"));?>
                        <?php $_smarty_tpl->_assignInScope('IS_FILTERING', $_SESSION['coo_filter_manager']->is_active());?>
                        <?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-product-listing-full-width"),$_smarty_tpl);
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('HIDE_MENUBOXES', $_prefixVariable5 && ($_smarty_tpl->tpl_vars['CURRENT_PAGE_IS_LISTING_PAGE']->value || $_smarty_tpl->tpl_vars['IS_FILTERING']->value));?>
                        <?php if ($_smarty_tpl->tpl_vars['HIDE_MENUBOXES']->value) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_872389416694c06480c6fd3_69579584', "index_inner_wrapper_left", $this->tplIndex);
?>

						<?php } else { ?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29692361694c06480c7a91_42958208', "index_inner_wrapper_left", $this->tplIndex);
?>

						<?php }?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89320204694c06480c8d82_15902167', "index_inner_wrapper_right", $this->tplIndex);
?>


					</div>
				</div>
			<?php
}
}
/* {/block "index_inner_wrapper"} */
/* {block "index_inner_wrapper_footer"} */
class Block_797695813694c06480cdd26_99705670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
}
/* {/block "index_inner_wrapper_footer"} */
/* {block "index_inner_wrapper_trusted_shops"} */
class Block_2018970961694c06480d2515_01632112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TRUSTED_SHOPS_REVIEW_STICKER']->value;
}
}
/* {/block "index_inner_wrapper_trusted_shops"} */
/* {block "index_inner_wrapper_trusted_shops_if"} */
class Block_1038718552694c06480cef38_08912134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if (strpos($_smarty_tpl->tpl_vars['TRUSTED_SHOPS_REVIEW_STICKER']->value,"variant: 'skyscraper_horizontal'") !== false) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2018970961694c06480d2515_01632112', "index_inner_wrapper_trusted_shops", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "index_inner_wrapper_trusted_shops_if"} */
/* {block "index_outer_wrapper"} */
class Block_813134470694c06480b36c5_16669955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper' => 
  array (
    0 => 'Block_813134470694c06480b36c5_16669955',
  ),
  'index_outer_wrapper_header' => 
  array (
    0 => 'Block_1329031945694c06480b3d81_89748939',
  ),
  'index_outer_wrapper_header_inside_top_search_if' => 
  array (
    0 => 'Block_1907374201694c06480b46c7_90643843',
  ),
  'index_outer_wrapper_header_inside_top_search' => 
  array (
    0 => 'Block_138569095694c06480b62d3_62266148',
  ),
  'index_outer_wrapper_imageslider' => 
  array (
    0 => 'Block_1221293431694c06480bb542_02155727',
  ),
  'index_inner_wrapper' => 
  array (
    0 => 'Block_190279149694c06480bc9d3_01897800',
  ),
  'index_inner_wrapper_main' => 
  array (
    0 => 'Block_1046291893694c06480bcf75_09378600',
  ),
  'index_inner_wrapper_main_breadcrumb' => 
  array (
    0 => 'Block_180321990694c06480bd4f1_41238019',
  ),
  'index_inner_wrapper_main_banner' => 
  array (
    0 => 'Block_1804233214694c06480be7f9_74542434',
  ),
  'index_inner_wrapper_main_content' => 
  array (
    0 => 'Block_943214715694c06480c07b7_80735158',
  ),
  'index_inner_wrapper_left' => 
  array (
    0 => 'Block_872389416694c06480c6fd3_69579584',
    1 => 'Block_29692361694c06480c7a91_42958208',
  ),
  'index_inner_wrapper_right' => 
  array (
    0 => 'Block_89320204694c06480c8d82_15902167',
  ),
  'index_inner_wrapper_right_content' => 
  array (
    0 => 'Block_36421919694c06480c92f1_68790709',
  ),
  'index_inner_wrapper_footer' => 
  array (
    0 => 'Block_797695813694c06480cdd26_99705670',
  ),
  'index_inner_wrapper_trusted_shops_if' => 
  array (
    0 => 'Block_1038718552694c06480cef38_08912134',
  ),
  'index_inner_wrapper_trusted_shops' => 
  array (
    0 => 'Block_2018970961694c06480d2515_01632112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="outer-wrapper" <?php if ($_smarty_tpl->tpl_vars['TOPBAR']->value && $_smarty_tpl->tpl_vars['TOPBAR']->value != '') {?>class="topbar-active"<?php }?>>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1329031945694c06480b3d81_89748939', "index_outer_wrapper_header", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221293431694c06480bb542_02155727', "index_outer_wrapper_imageslider", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190279149694c06480bc9d3_01897800', "index_inner_wrapper", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_797695813694c06480cdd26_99705670', "index_inner_wrapper_footer", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1038718552694c06480cef38_08912134', "index_inner_wrapper_trusted_shops_if", $this->tplIndex);
?>


		</div>
	<?php
}
}
/* {/block "index_outer_wrapper"} */
/* {block "index_bottom"} */
class Block_1310871522694c06480d3848_89537025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_bottom' => 
  array (
    0 => 'Block_1310871522694c06480d3848_89537025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['BOTTOM']->value;
}
}
/* {/block "index_bottom"} */
}
