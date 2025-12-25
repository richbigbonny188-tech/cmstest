<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_modifiers_template_group.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b1e4c85_42661581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '183d57a8900245d9c574fbec385dc2d02e6a0974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_modifiers_template_group.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b1e4c85_42661581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611728776694d6d5b1d23d1_90137807', "product_modifiers_template_group");
}
/* {block "product_modifiers_template_group"} */
class Block_611728776694d6d5b1d23d1_90137807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_modifiers_template_group' => 
  array (
    0 => 'Block_611728776694d6d5b1d23d1_90137807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modifiers-selection">
    <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value['property'])) && count($_smarty_tpl->tpl_vars['groups']->value['property']) > 0) {?>
        <div class="properties-selection-form">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['property'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['groups']->value['attribute'])) && count($_smarty_tpl->tpl_vars['groups']->value['attribute']) > 0) {?>
        <div class="attributes-selection-form">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value['attribute'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
            <?php echo $_smarty_tpl->tpl_vars['group']->value;?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
</div>
<?php
}
}
/* {/block "product_modifiers_template_group"} */
}
