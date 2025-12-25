<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bbd6263_54393660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358c26ef1bfcba3cc19b2b515e7a1f78c7a35323' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.2.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bbd6263_54393660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1256048995694d6d5bbd49b8_77825829', "rating_stars");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_template_standard.1.html");
}
/* {block "rating_stars"} */
class Block_1256048995694d6d5bbd49b8_77825829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rating_stars' => 
  array (
    0 => 'Block_1256048995694d6d5bbd49b8_77825829',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductListingBadge']->value) {?>
        <span class="product-rating-asterisk">*</span>
    <?php }
}
}
/* {/block "rating_stars"} */
}
