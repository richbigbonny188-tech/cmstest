<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06480fdd99_32970544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '643776504bdac81546fcbf27fba30b4b30ac3173' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_secondary_navigation.html' => 2,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header_logo.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header_navbar_buttons.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header_custom_content.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header_cart.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."offcanvas_cart.html' => 1,
  ),
),false)) {
function content_694c06480fdd99_32970544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395588612694c06480e2639_80964429', "index_outer_wrapper_header_top_navigation");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1002854993694c06480e38b6_17156053', "index_outer_wrapper_header_inside");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1704156150694c06480f42a0_64275518', "index_outer_wrapper_header_topbar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_802481802694c06480f4d11_81648457', "index_outer_wrapper_header_cookiebar");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727113127694c06480f5701_43832663', "index_outer_wrapper_header_noscript_warning");
?>


<?php if (smarty_modifier_gm_get_conf('CAT_MENU_TOP') == 'true') {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1889142356694c06480f9dc0_33390257', "index_outer_wrapper_header_categories_top_if");
?>

 <?php } else { ?>
     <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515646988694c06480fd367_63744439', "index_content_top");
?>

<?php }
}
/* {block "index_outer_wrapper_header_top_navigation"} */
class Block_395588612694c06480e2639_80964429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_top_navigation' => 
  array (
    0 => 'Block_395588612694c06480e2639_80964429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

	<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-topbar"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideTopbar', $_prefixVariable6);?>
	<?php if (!$_smarty_tpl->tpl_vars['hideTopbar']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_secondary_navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
/* {/block "index_outer_wrapper_header_top_navigation"} */
/* {block "index_outer_wrapper_header_inside_header_logo"} */
class Block_198495925694c06480e51b7_62444471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header_logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo_url'=>$_smarty_tpl->tpl_vars['logo_url']->value,'logo_link'=>$_smarty_tpl->tpl_vars['logo_link']->value), 0, true);
?>
					<?php
}
}
/* {/block "index_outer_wrapper_header_inside_header_logo"} */
/* {block "index_outer_wrapper_header_inside_header_buttons"} */
class Block_567672415694c06480e5b81_47314360 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header_navbar_buttons.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php
}
}
/* {/block "index_outer_wrapper_header_inside_header_buttons"} */
/* {block "index_outer_wrapper_header_categories_top"} */
class Block_1031197068694c06480e7516_17898985 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

							<?php $_smarty_tpl->_assignInScope('CATEGORIES_TOP', smarty_modifier_replace($_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value,"###CONTENT_TOP###",$_smarty_tpl->tpl_vars['CONTENT_TOP']->value));?>
							<?php echo $_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value;?>

						<?php
}
}
/* {/block "index_outer_wrapper_header_categories_top"} */
/* {block "index_content_top"} */
class Block_1005756886694c06480e8ae8_80447560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['CONTENT_TOP']->value;
}
}
/* {/block "index_content_top"} */
/* {block "layout_header_categories_nav"} */
class Block_1327786485694c06480e6353_48975009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

				<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-categories-col"),$_smarty_tpl);
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideCategoriesCol', $_prefixVariable11);?>
				<?php if (!$_smarty_tpl->tpl_vars['hideCategoriesCol']->value) {?>
				<nav class="navbar-categories navbar-default" data-gambio-widget="menu">
					<?php if ($_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031197068694c06480e7516_17898985', "index_outer_wrapper_header_categories_top", $this->tplIndex);
?>

					<?php } else { ?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1005756886694c06480e8ae8_80447560', "index_content_top", $this->tplIndex);
?>

					<?php }?>
				</nav>
				<?php }?>
			<?php
}
}
/* {/block "layout_header_categories_nav"} */
/* {block "index_outer_wrapper_header_inside_header"} */
class Block_894298035694c06480e3b17_25470629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

			<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-logo-col"),$_smarty_tpl);
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideLogo', $_prefixVariable7);?>
			<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-search-col"),$_smarty_tpl);
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideSearch', $_prefixVariable8);?>
			<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-custom-1-col"),$_smarty_tpl);
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideCustom', $_prefixVariable9);?>
			<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-cart-col"),$_smarty_tpl);
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideCart', $_prefixVariable10);?>

			<div class="navbar-header">
				<?php if (!$_smarty_tpl->tpl_vars['hideLogo']->value) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198495925694c06480e51b7_62444471', "index_outer_wrapper_header_inside_header_logo", $this->tplIndex);
?>

				<?php }?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_567672415694c06480e5b81_47314360', "index_outer_wrapper_header_inside_header_buttons", $this->tplIndex);
?>

			</div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1327786485694c06480e6353_48975009', "layout_header_categories_nav", $this->tplIndex);
?>

		<?php
}
}
/* {/block "index_outer_wrapper_header_inside_header"} */
/* {block "index_outer_wrapper_header_inside_top_search"} */
class Block_515586088694c06480ea3c0_48001621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TOP_SEARCH']->value;
}
}
/* {/block "index_outer_wrapper_header_inside_top_search"} */
/* {block "index_outer_wrapper_header_inside_top_search_if"} */
class Block_1931665356694c06480e9bf2_07248240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if (!$_smarty_tpl->tpl_vars['hideSearch']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515586088694c06480ea3c0_48001621', "index_outer_wrapper_header_inside_top_search", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "index_outer_wrapper_header_inside_top_search_if"} */
/* {block "index_outer_wrapper_header_inside_custom_content"} */
class Block_1519941912694c06480eb634_07590784 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.content_manager.php','function'=>'smarty_function_content_manager',),));
?>

					<?php ob_start();
echo smarty_function_content_manager(array('group'=>4321001),$_smarty_tpl);
$_prefixVariable12 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header_custom_content.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_prefixVariable12), 0, true);
?>
				<?php
}
}
/* {/block "index_outer_wrapper_header_inside_custom_content"} */
/* {block "index_outer_wrapper_header_inside_custom_content_if"} */
class Block_1950284346694c06480eaeb7_37013009 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if (!$_smarty_tpl->tpl_vars['hideCustom']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519941912694c06480eb634_07590784', "index_outer_wrapper_header_inside_custom_content", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "index_outer_wrapper_header_inside_custom_content_if"} */
/* {block "index_outer_wrapper_header_inside_shopping_cart"} */
class Block_2005036898694c06480ef8d1_59561863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header_cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				<?php
}
}
/* {/block "index_outer_wrapper_header_inside_shopping_cart"} */
/* {block "index_outer_wrapper_header_inside_shopping_cart_if"} */
class Block_1020246559694c06480eef11_66853582 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    		<!-- layout_header honeygrid -->
			<?php if (!$_smarty_tpl->tpl_vars['hideCart']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2005036898694c06480ef8d1_59561863', "index_outer_wrapper_header_inside_shopping_cart", $this->tplIndex);
?>

			<?php }?>
			<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-secondary-col"),$_smarty_tpl);
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideSecondaryCol', $_prefixVariable13);?>
			<?php if (!$_smarty_tpl->tpl_vars['hideSecondaryCol']->value) {?>
			<div class="navbar-secondary hidden-xs">
				<?php ob_start();
$_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_secondary_navigation.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('top_bar_navigation', ob_get_clean());
?>
				<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['top_bar_navigation']->value,'navbar-topbar"','"');?>

			</div>
			<?php }?>
		<?php
}
}
/* {/block "index_outer_wrapper_header_inside_shopping_cart_if"} */
/* {block "index_outer_wrapper_header_inside"} */
class Block_1002854993694c06480e38b6_17156053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_inside' => 
  array (
    0 => 'Block_1002854993694c06480e38b6_17156053',
  ),
  'index_outer_wrapper_header_inside_header' => 
  array (
    0 => 'Block_894298035694c06480e3b17_25470629',
  ),
  'index_outer_wrapper_header_inside_header_logo' => 
  array (
    0 => 'Block_198495925694c06480e51b7_62444471',
  ),
  'index_outer_wrapper_header_inside_header_buttons' => 
  array (
    0 => 'Block_567672415694c06480e5b81_47314360',
  ),
  'layout_header_categories_nav' => 
  array (
    0 => 'Block_1327786485694c06480e6353_48975009',
  ),
  'index_outer_wrapper_header_categories_top' => 
  array (
    0 => 'Block_1031197068694c06480e7516_17898985',
  ),
  'index_content_top' => 
  array (
    0 => 'Block_1005756886694c06480e8ae8_80447560',
  ),
  'index_outer_wrapper_header_inside_top_search_if' => 
  array (
    0 => 'Block_1931665356694c06480e9bf2_07248240',
  ),
  'index_outer_wrapper_header_inside_top_search' => 
  array (
    0 => 'Block_515586088694c06480ea3c0_48001621',
  ),
  'index_outer_wrapper_header_inside_custom_content_if' => 
  array (
    0 => 'Block_1950284346694c06480eaeb7_37013009',
  ),
  'index_outer_wrapper_header_inside_custom_content' => 
  array (
    0 => 'Block_1519941912694c06480eb634_07590784',
  ),
  'index_outer_wrapper_header_inside_shopping_cart_if' => 
  array (
    0 => 'Block_1020246559694c06480eef11_66853582',
  ),
  'index_outer_wrapper_header_inside_shopping_cart' => 
  array (
    0 => 'Block_2005036898694c06480ef8d1_59561863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="inside">

		<div class="row">

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_894298035694c06480e3b17_25470629', "index_outer_wrapper_header_inside_header", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1931665356694c06480e9bf2_07248240', "index_outer_wrapper_header_inside_top_search_if", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1950284346694c06480eaeb7_37013009', "index_outer_wrapper_header_inside_custom_content_if", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1020246559694c06480eef11_66853582', "index_outer_wrapper_header_inside_shopping_cart_if", $this->tplIndex);
?>


		</div>

	</div>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."offcanvas_cart.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "index_outer_wrapper_header_inside"} */
/* {block "index_outer_wrapper_header_topbar"} */
class Block_1704156150694c06480f42a0_64275518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_topbar' => 
  array (
    0 => 'Block_1704156150694c06480f42a0_64275518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['TOPBAR']->value;
}
}
/* {/block "index_outer_wrapper_header_topbar"} */
/* {block "index_outer_wrapper_header_cookiebar"} */
class Block_802481802694c06480f4d11_81648457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_cookiebar' => 
  array (
    0 => 'Block_802481802694c06480f4d11_81648457',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['COOKIEBAR']->value;
}
}
/* {/block "index_outer_wrapper_header_cookiebar"} */
/* {block "index_outer_wrapper_header_noscript_warning"} */
class Block_727113127694c06480f5701_43832663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_noscript_warning' => 
  array (
    0 => 'Block_727113127694c06480f5701_43832663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<noscript>
		<div class="alert alert-danger noscript-notice">
			<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_noscript_notice'];?>

		</div>
	</noscript>
<?php
}
}
/* {/block "index_outer_wrapper_header_noscript_warning"} */
/* {block "index_outer_wrapper_header_categories_top"} */
class Block_811978202694c06480fa777_42639771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                 <?php $_smarty_tpl->_assignInScope('CATEGORIES_TOP', smarty_modifier_replace($_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value,"###CONTENT_TOP###",$_smarty_tpl->tpl_vars['CONTENT_TOP']->value));?>
                 <?php echo $_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value;?>

             <?php
}
}
/* {/block "index_outer_wrapper_header_categories_top"} */
/* {block "index_content_top"} */
class Block_1891336130694c06480fc247_80220483 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['CONTENT_TOP']->value;
}
}
/* {/block "index_content_top"} */
/* {block "index_outer_wrapper_header_categories_top_if"} */
class Block_1889142356694c06480f9dc0_33390257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_categories_top_if' => 
  array (
    0 => 'Block_1889142356694c06480f9dc0_33390257',
  ),
  'index_outer_wrapper_header_categories_top' => 
  array (
    0 => 'Block_811978202694c06480fa777_42639771',
  ),
  'index_content_top' => 
  array (
    0 => 'Block_1891336130694c06480fc247_80220483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['CATEGORIES_TOP']->value) {?>
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811978202694c06480fa777_42639771', "index_outer_wrapper_header_categories_top", $this->tplIndex);
?>

         <?php } else { ?>
             <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1891336130694c06480fc247_80220483', "index_content_top", $this->tplIndex);
?>

         <?php }?>
    <?php
}
}
/* {/block "index_outer_wrapper_header_categories_top_if"} */
/* {block "index_content_top"} */
class Block_515646988694c06480fd367_63744439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_content_top' => 
  array (
    0 => 'Block_515646988694c06480fd367_63744439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['CONTENT_TOP']->value;
}
}
/* {/block "index_content_top"} */
}
