<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_additional_fields.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b75d394_55061011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8138e1815ac715574eb97d1d7082ba932cd8976' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_additional_fields.html',
      1 => 1766590022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b75d394_55061011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1221131808694d6d5b751f14_75810074', "product_info_additional_fields_if");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_additional_fields.0.html");
}
/* {block "product_info_additional_fields_list_item"} */
class Block_1925447773694d6d5b7575c0_67784678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="additional-fields-item">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</strong>
                                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</span>
                                </div>
                            <?php
}
}
/* {/block "product_info_additional_fields_list_item"} */
/* {block "product_info_additional_fields_list_item_if"} */
class Block_1128481061694d6d5b7563a0_58998471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['value']) {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925447773694d6d5b7575c0_67784678', "product_info_additional_fields_list_item", $this->tplIndex);
?>

                        <?php }?>
                    <?php
}
}
/* {/block "product_info_additional_fields_list_item_if"} */
/* {block "product_info_additional_fields_list"} */
class Block_328780801694d6d5b755b16_13887849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1128481061694d6d5b7563a0_58998471', "product_info_additional_fields_list_item_if", $this->tplIndex);
?>

                <?php
}
}
/* {/block "product_info_additional_fields_list"} */
/* {block "product_info_additional_fields"} */
class Block_1711658365694d6d5b753779_59147746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additional_fields_data_array']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_328780801694d6d5b755b16_13887849', "product_info_additional_fields_list", $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block "product_info_additional_fields"} */
/* {block "product_info_additional_fields_if"} */
class Block_1221131808694d6d5b751f14_75810074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_additional_fields_if' => 
  array (
    0 => 'Block_1221131808694d6d5b751f14_75810074',
  ),
  'product_info_additional_fields' => 
  array (
    0 => 'Block_1711658365694d6d5b753779_59147746',
  ),
  'product_info_additional_fields_list' => 
  array (
    0 => 'Block_328780801694d6d5b755b16_13887849',
  ),
  'product_info_additional_fields_list_item_if' => 
  array (
    0 => 'Block_1128481061694d6d5b7563a0_58998471',
  ),
  'product_info_additional_fields_list_item' => 
  array (
    0 => 'Block_1925447773694d6d5b7575c0_67784678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['additional_fields_data_array']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1711658365694d6d5b753779_59147746', "product_info_additional_fields", $this->tplIndex);
?>

    <?php }
}
}
/* {/block "product_info_additional_fields_if"} */
}
