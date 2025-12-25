<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_price.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd4d387_65687137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b322934b181058d65077e8c1ca786eb1de88de6d' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_price.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd4d387_65687137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197871693694d6d5bd4ceb0_69894027', "product_info_price_vpe");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_price.0.html");
}
/* {block "product_info_price_vpe"} */
class Block_197871693694d6d5bd4ceb0_69894027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_price_vpe' => 
  array (
    0 => 'Block_197871693694d6d5bd4ceb0_69894027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<br />
<span class="tax-shipping-text gm_products_vpe products-vpe">
        <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_VPE']->value;?>

    </span>
<?php
}
}
/* {/block "product_info_price_vpe"} */
}
