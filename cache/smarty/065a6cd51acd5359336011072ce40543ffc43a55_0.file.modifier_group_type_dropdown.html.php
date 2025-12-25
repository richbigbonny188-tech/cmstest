<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:00:41
  from 'C:\xampp\htdocs\public\theme\html\system\modifier_group_type_dropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6db949d177_20648338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '065a6cd51acd5359336011072ce40543ffc43a55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\modifier_group_type_dropdown.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6db949d177_20648338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"properties_dropdown"),$_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1417365756694d6db9478180_00464281', "modifier_group_type_dropdown");
?>

<?php }
/* {block "modifier_group_type_dropdown"} */
class Block_1417365756694d6db9478180_00464281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modifier_group_type_dropdown' => 
  array (
    0 => 'Block_1417365756694d6db9478180_00464281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_assignInScope('show_additional_price', $_smarty_tpl->tpl_vars['content_data']->value['show_additional_price']);?>
    <div class="modifier-group modifier-<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['type'];?>
-group modifier-type__dropdown form-group form-group-big-select"<?php if (!$_smarty_tpl->tpl_vars['content_data']->value['modifier']['visible']) {?> style="display: none;"<?php }?>>
        <label class="modifier-label control-label">
            <?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['label'];?>
:
        </label>
        <div class="modifier-content">
            <select name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['modifier']['name'];?>
" class="form-control js-calculate">
                <?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['type'] == 'property') {?>
                    <option value="0" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['PLEASE_SELECT'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['txt']->value['PLEASE_SELECT'];?>

                    </option>
                <?php }?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['modifier']['items'], 'modifier');
$_smarty_tpl->tpl_vars['modifier']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modifier']->value) {
$_smarty_tpl->tpl_vars['modifier']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['content_data']->value['modifier']['selected']['value'] == $_smarty_tpl->tpl_vars['modifier']->value['value']) {?> selected="selected"<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value && (isset($_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'])) && $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'] != '') {?>data-price="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'];?>
"<?php }?> data-label="<?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>
"<?php if (!$_smarty_tpl->tpl_vars['modifier']->value['selectable']) {?> disabled<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['modifier']->value['info'];?>

                        <?php if ($_smarty_tpl->tpl_vars['show_additional_price']->value && (isset($_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'])) && $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'] != '') {?> (<?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['price'];?>
)<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['stock']) {?> <?php echo $_smarty_tpl->tpl_vars['modifier']->value['additionalInfo']['stock'];
}?>
                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22.66 12.64"><defs></defs><title>chevron-down</title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><path class="cls-1" d="M11.33,12.64a1.33,1.33,0,0,1-.93-.38l-10-10A1.31,1.31,0,0,1,2.24.39l9.09,9.08L20.42.39a1.31,1.31,0,0,1,1.86,1.85l-10,10A1.33,1.33,0,0,1,11.33,12.64Z"/></g></g></svg>
        </div>
    </div>
<?php
}
}
/* {/block "modifier_group_type_dropdown"} */
}
