<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:08
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_shipping_costs_shipping_module_selection.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd4dca743_11378047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '857176960629b081fc2b87eaa5c20e1b00b0a33c' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_shipping_costs_shipping_module_selection.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd4dca743_11378047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"cart_shipping_costs"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114420149694d6dd4db9692_08132267', "cart_shipping_costs_shipping_module_selection");
}
/* {block "cart_shipping_costs_shipping_module_selection_no_available"} */
class Block_1882418940694d6dd4dbc0e5_85612923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['txt']->value['no_shipping_module_available'];?>

				<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection_no_available"} */
/* {block "cart_shipping_costs_shipping_module_selection_only_one"} */
class Block_1930886959694d6dd4dc0135_15522332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['module_data']->value);?>

						<input type="hidden" name="cart_shipping_module" value="<?php echo $_smarty_tpl->tpl_vars['module_code']->value;?>
" />
					<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection_only_one"} */
/* {block "cart_shipping_costs_shipping_module_selection_option"} */
class Block_1381749912694d6dd4dc6044_62276500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['module_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['module_code']->value == $_smarty_tpl->tpl_vars['content_data']->value['selected_module']) {?>selected="selected"<?php }?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['module_data']->value);?>
">
									<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['module_data']->value),80,"...",true);?>

								</option>
							<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection_option"} */
/* {block "cart_shipping_costs_shipping_module_selection_select"} */
class Block_1189117117694d6dd4dc4a44_06755501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<select class="form-control" id="cart-shipping-module" name="cart_shipping_module">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['shipping_modules'], 'module_data', false, 'module_code');
$_smarty_tpl->tpl_vars['module_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_code']->value => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->do_else = false;
?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1381749912694d6dd4dc6044_62276500', "cart_shipping_costs_shipping_module_selection_option", $this->tplIndex);
?>

						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection_select"} */
/* {block "cart_shipping_costs_shipping_module_selection_no_available_if"} */
class Block_78610005694d6dd4dba172_25201447 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if (count($_smarty_tpl->tpl_vars['content_data']->value['shipping_modules']) == 0) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1882418940694d6dd4dbc0e5_85612923', "cart_shipping_costs_shipping_module_selection_no_available", $this->tplIndex);
?>

			<?php } elseif (count($_smarty_tpl->tpl_vars['content_data']->value['shipping_modules']) == 1) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['shipping_modules'], 'module_data', false, 'module_code');
$_smarty_tpl->tpl_vars['module_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_code']->value => $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->do_else = false;
?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1930886959694d6dd4dc0135_15522332', "cart_shipping_costs_shipping_module_selection_only_one", $this->tplIndex);
?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189117117694d6dd4dc4a44_06755501', "cart_shipping_costs_shipping_module_selection_select", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection_no_available_if"} */
/* {block "cart_shipping_costs_shipping_module_selection"} */
class Block_2114420149694d6dd4db9692_08132267 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_shipping_costs_shipping_module_selection' => 
  array (
    0 => 'Block_2114420149694d6dd4db9692_08132267',
  ),
  'cart_shipping_costs_shipping_module_selection_no_available_if' => 
  array (
    0 => 'Block_78610005694d6dd4dba172_25201447',
  ),
  'cart_shipping_costs_shipping_module_selection_no_available' => 
  array (
    0 => 'Block_1882418940694d6dd4dbc0e5_85612923',
  ),
  'cart_shipping_costs_shipping_module_selection_only_one' => 
  array (
    0 => 'Block_1930886959694d6dd4dc0135_15522332',
  ),
  'cart_shipping_costs_shipping_module_selection_select' => 
  array (
    0 => 'Block_1189117117694d6dd4dc4a44_06755501',
  ),
  'cart_shipping_costs_shipping_module_selection_option' => 
  array (
    0 => 'Block_1381749912694d6dd4dc6044_62276500',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<span class="shipping-calculator-shipping-modules col-xs-12 col-sm-9">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78610005694d6dd4dba172_25201447', "cart_shipping_costs_shipping_module_selection_no_available_if", $this->tplIndex);
?>

	</span>
<?php
}
}
/* {/block "cart_shipping_costs_shipping_module_selection"} */
}
