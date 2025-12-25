<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\modifier_group_type_image.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b16f127_24463118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32b082d589fe63a90b7d7f8dddb95e9d136320d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\modifier_group_type_image.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b16f127_24463118 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_888301486694d6d5b13d903_61786550', "modifier_group_type_image");
?>

<?php }
/* {block "modifier_group_type_image"} */
class Block_888301486694d6d5b13d903_61786550 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modifier_group_type_image' => 
  array (
    0 => 'Block_888301486694d6d5b13d903_61786550',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('show_additional_price', $_smarty_tpl->tpl_vars['content_data']->value['show_additional_price']);?>
    <div class="modifier-group modifier-<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['type'];?>
-group modifier-type__image"<?php if (!$_smarty_tpl->tpl_vars['content_data']->value['modifier']['visible']) {?> style="display: none;"<?php }?>>
        <label class="modifier-label">
            <?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['label'];?>
:
            <span class="selected-value" data-default-value="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['info'];?>
"><?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['info']) {
echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['info'];
}?></span>
            <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value) {?><span class="selected-value-price" data-default-price="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['additionalInfo']['price'];?>
"><?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['id']) {
echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['additionalInfo']['price'];
}?></span><?php }?>
        </label>
        <div class="modifier-content">
            <ul class="modifiers-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['modifier']['items'], 'modifier', false, NULL, 'modifierItems', array (
));
$_smarty_tpl->tpl_vars['modifier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modifier']->value) {
$_smarty_tpl->tpl_vars['modifier']->do_else = false;
?>
                    <li class="<?php if (!$_smarty_tpl->tpl_vars['modifier']->value['selectable']) {?>un-selectable<?php } elseif ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['value'] == $_smarty_tpl->tpl_vars['modifier']->value['value']) {?>active<?php }?>">
                        <a href="javascript:;" class="modifier-item<?php if (!$_smarty_tpl->tpl_vars['modifier']->value['selectable']) {?> un-selectable<?php }?>" data-value="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value) {?>data-price="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'];?>
"<?php }?> data-label="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>
" class="img-responsive">
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['name'];?>
" class="hidden-input" value="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['value'];?>
">
        </div>
    </div>
<?php
}
}
/* {/block "modifier_group_type_image"} */
}
