<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bbbba27_79156239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e4d888262801031a799f39243785a3b4d43c67f' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.3.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bbbba27_79156239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1654431894694d6d5bbbaa93_33181144', "product_info_template_standard_sticky_box_product_box_bottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_template_standard.2.html");
}
/* {block "product_info_template_standard_sticky_box_product_box_bottom"} */
class Block_1654431894694d6d5bbbaa93_33181144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_product_box_bottom' => 
  array (
    0 => 'Block_1654431894694d6d5bbbaa93_33181144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<div class="paypal-installments paypal-installments-product" data-ppinst-pos="product" data-partner-attribution-id="GambioGmbH_Cart_Hub_PPXO"></div>
	<div id="easycredit-ratenrechner-product" class="easycredit-rr-container"
		 data-easycredithub-namespace="GXModules/Gambio/Hub/Build/Shop/Themes/All/Javascript/easycredithub"
		 data-easycredithub-widget="easycreditloader"></div>
<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_box_bottom"} */
}
