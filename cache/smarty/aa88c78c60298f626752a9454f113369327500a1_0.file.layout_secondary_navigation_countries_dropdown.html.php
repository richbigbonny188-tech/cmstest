<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_secondary_navigation_countries_dropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064749daf8_63269344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa88c78c60298f626752a9454f113369327500a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_secondary_navigation_countries_dropdown.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064749daf8_63269344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1286306691694c064748e194_61162876', "layout_secondary_navigation_countries_dropdown");
}
/* {block "layout_secondary_navigation_countries_dropdown_option"} */
class Block_1283961979694c0647490798_34641469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<option value="<?php echo $_smarty_tpl->tpl_vars['iso_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['content_data']->value['SELECTED_COUNTRY'] == $_smarty_tpl->tpl_vars['iso_code']->value) {?>selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['country_value']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php
}
}
/* {/block "layout_secondary_navigation_countries_dropdown_option"} */
/* {block "layout_secondary_navigation_countries_dropdown"} */
class Block_1286306691694c064748e194_61162876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_secondary_navigation_countries_dropdown' => 
  array (
    0 => 'Block_1286306691694c064748e194_61162876',
  ),
  'layout_secondary_navigation_countries_dropdown_option' => 
  array (
    0 => 'Block_1283961979694c0647490798_34641469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<select name="switch_country" class="form-control" id="countries-select">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['country_data'], 'country_value', false, 'iso_code');
$_smarty_tpl->tpl_vars['country_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['iso_code']->value => $_smarty_tpl->tpl_vars['country_value']->value) {
$_smarty_tpl->tpl_vars['country_value']->do_else = false;
?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283961979694c0647490798_34641469', "layout_secondary_navigation_countries_dropdown_option", $this->tplIndex);
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
<?php
}
}
/* {/block "layout_secondary_navigation_countries_dropdown"} */
}
