<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_breadcrumb.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481d3cd1_48386554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3eb030bd769686aa7897e2f5c4a5dd3f38920e' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_breadcrumb.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481d3cd1_48386554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1750293260694c06481d34f1_77396317', "layout_breadcrumb");
}
/* {block "layout_breadcrumb"} */
class Block_1750293260694c06481d34f1_77396317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_breadcrumb' => 
  array (
    0 => 'Block_1750293260694c06481d34f1_77396317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value;?>

<?php
}
}
/* {/block "layout_breadcrumb"} */
}
