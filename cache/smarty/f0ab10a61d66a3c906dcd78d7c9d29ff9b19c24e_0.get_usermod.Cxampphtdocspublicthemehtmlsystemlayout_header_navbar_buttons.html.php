<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_navbar_buttons.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064811e3b7_36846577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ab10a61d66a3c906dcd78d7c9d29ff9b19c24e' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_navbar_buttons.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064811e3b7_36846577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2013366737694c064811a3a1_38651697', "layout_header_navbar_buttons");
?>

<?php }
/* {block "layout_header_navbar_buttons_basket"} */
class Block_89073901694c064811cef4_82273029 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_assignInScope('offcanvasCart', true);?>
		<button type="button" class="navbar-toggle cart-icon" <?php if ($_smarty_tpl->tpl_vars['offcanvasCart']->value) {?>data-toggle="cart"<?php }?>>
			<svg width="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title>cart</title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path d="M31,13.66a1.08,1.08,0,0,0-1.07-1H26.08V11.28a6.31,6.31,0,0,0-12.62,0v1.36H9.27a1,1,0,0,0-1,1L5.21,32A3.8,3.8,0,0,0,9,35.8H30.19A3.8,3.8,0,0,0,34,31.94Zm-15.42-1V11.28a4.2,4.2,0,0,1,8.39,0v1.35Zm-1.06,5.59a1.05,1.05,0,0,0,1.06-1.06v-2.4H24v2.4a1.06,1.06,0,0,0,2.12,0v-2.4h2.84L31.86,32a1.68,1.68,0,0,1-1.67,1.68H9a1.67,1.67,0,0,1-1.68-1.61l2.94-17.31h3.19v2.4A1.06,1.06,0,0,0,14.51,18.22Z"/></g></g></svg>
			<span class="cart-products-count<?php if ($_smarty_tpl->tpl_vars['qty']->value == 0) {?> hidden<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['qty']->value;?>

        </span>
		</button>
	<?php
}
}
/* {/block "layout_header_navbar_buttons_basket"} */
/* {block "layout_header_navbar_buttons"} */
class Block_2013366737694c064811a3a1_38651697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_header_navbar_buttons' => 
  array (
    0 => 'Block_2013366737694c064811a3a1_38651697',
  ),
  'layout_header_navbar_buttons_basket' => 
  array (
    0 => 'Block_89073901694c064811cef4_82273029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.cart_products_qty.php','function'=>'smarty_function_cart_products_qty',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

	<?php echo smarty_function_cart_products_qty(array('out'=>'qty'),$_smarty_tpl);?>

	
	<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-show-search-top-nav"),$_smarty_tpl);
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_assignInScope('showTopSearch', $_prefixVariable14);?>
	<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-hide-search-col"),$_smarty_tpl);
$_prefixVariable15 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideSearch', $_prefixVariable15);?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89073901694c064811cef4_82273029', "layout_header_navbar_buttons_basket", $this->tplIndex);
?>

<?php
}
}
/* {/block "layout_header_navbar_buttons"} */
}
