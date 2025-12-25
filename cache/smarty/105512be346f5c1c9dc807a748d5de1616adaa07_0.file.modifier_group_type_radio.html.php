<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:00:41
  from 'C:\xampp\htdocs\public\theme\html\system\modifier_group_type_radio.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6db94d3a19_34810462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '105512be346f5c1c9dc807a748d5de1616adaa07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\modifier_group_type_radio.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6db94d3a19_34810462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_669677820694d6db94c4881_43148698', "modifier_group_type_radio");
?>

<?php }
/* {block "modifier_group_type_radio"} */
class Block_669677820694d6db94c4881_43148698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modifier_group_type_radio' => 
  array (
    0 => 'Block_669677820694d6db94c4881_43148698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('show_additional_price', $_smarty_tpl->tpl_vars['content_data']->value['show_additional_price']);?>
    <div class="modifier-group modifier-<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['type'];?>
-group modifier-type__radio"<?php if (!$_smarty_tpl->tpl_vars['content_data']->value['modifier']['visible']) {?> style="display: none;"<?php }?>>
        <label class="modifier-label">
            <?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['label'];?>
:
            <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value) {?><span class="selected-value-price" data-default-price="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['additionalInfo']['price'];?>
"><?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['id']) {
echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['additionalInfo']['price'];
}?></span><?php }?>
        </label>
        <div class="modifier-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['modifier']['items'], 'modifier');
$_smarty_tpl->tpl_vars['modifier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modifier']->value) {
$_smarty_tpl->tpl_vars['modifier']->do_else = false;
?>
            <div class="radio modifier-item<?php if (!$_smarty_tpl->tpl_vars['modifier']->value['selectable']) {?> un-selectable<?php }?>" <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value) {?>data-price="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'];?>
"<?php }?>>
                    <label class="radio-wrapper" title="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>
">
                        <span class="modifier-label-text">
                            <?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>

                            <?php if ($_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['stock'] && $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['stock']) {?> <?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['stock'];
}?>
                        </span>
                        <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['value'];?>
" class="js-calculate"<?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['value'] == $_smarty_tpl->tpl_vars['modifier']->value['value']) {?> checked="checked"<?php }?>>
                        <span class="checkmark"></span>
                    </label>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php
}
}
/* {/block "modifier_group_type_radio"} */
}
