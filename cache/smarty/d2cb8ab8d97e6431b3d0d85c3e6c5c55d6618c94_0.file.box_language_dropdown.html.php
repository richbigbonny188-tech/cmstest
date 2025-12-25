<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_language_dropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064745bc26_00081682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2cb8ab8d97e6431b3d0d85c3e6c5c55d6618c94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_language_dropdown.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064745bc26_00081682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_524624768694c0647459e13_05637664', "box_language_dropdown");
}
/* {block "box_language_dropdown_option"} */
class Block_1945897142694c064745ab22_17599555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<option value="<?php echo $_smarty_tpl->tpl_vars['language_data']->value['CODE'];?>
"<?php if ($_smarty_tpl->tpl_vars['language_data']->value['ID'] == $_smarty_tpl->tpl_vars['content_data']->value['CURRENT_LANGUAGES_ID']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['language_data']->value['NAME'];?>
</option>
			<?php
}
}
/* {/block "box_language_dropdown_option"} */
/* {block "box_language_dropdown"} */
class Block_524624768694c0647459e13_05637664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_language_dropdown' => 
  array (
    0 => 'Block_524624768694c0647459e13_05637664',
  ),
  'box_language_dropdown_option' => 
  array (
    0 => 'Block_1945897142694c064745ab22_17599555',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<select name="language" class="form-control" id="language-select">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['languages_data'], 'language_data', false, NULL, 'language', array (
));
$_smarty_tpl->tpl_vars['language_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language_data']->value) {
$_smarty_tpl->tpl_vars['language_data']->do_else = false;
?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1945897142694c064745ab22_17599555', "box_language_dropdown_option", $this->tplIndex);
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
<?php
}
}
/* {/block "box_language_dropdown"} */
}
