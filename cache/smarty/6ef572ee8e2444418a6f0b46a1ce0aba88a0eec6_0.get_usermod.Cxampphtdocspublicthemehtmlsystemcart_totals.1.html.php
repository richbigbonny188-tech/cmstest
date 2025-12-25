<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd538b2e2_27410237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ef572ee8e2444418a6f0b46a1ce0aba88a0eec6' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.1.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd538b2e2_27410237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319256290694d6dd538a2b8_47151631', "cart_totals_checkout_buttons");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_totals.0.html");
}
/* {block "cart_totals_checkout_buttons"} */
class Block_319256290694d6dd538a2b8_47151631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_totals_checkout_buttons' => 
  array (
    0 => 'Block_319256290694d6dd538a2b8_47151631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<div id="easycredit-ratenrechner-cart" class="easycredit-rr-container"
		 data-easycredithub-namespace="GXModules/Gambio/Hub/Build/Shop/Themes/All/Javascript/easycredithub"
		 data-easycredithub-widget="easycreditloader"></div>
<?php
}
}
/* {/block "cart_totals_checkout_buttons"} */
}
