<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:08
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_shipping_costs_shipping_weight_information.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd4de5d43_20222046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac45b24328ff85cb2b1227a9f541a326d118e5d' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_shipping_costs_shipping_weight_information.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd4de5d43_20222046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"order_details"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1650551449694d6dd4de0492_78362349', "cart_shipping_costs_shipping_weight_information");
?>

<?php }
/* {block "cart_shipping_costs_shipping_weight_information_text"} */
class Block_1550656699694d6dd4de0de9_79368455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo $_smarty_tpl->tpl_vars['content_data']->value['shipping_weight'];?>
 <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_unit'];?>

		<?php
}
}
/* {/block "cart_shipping_costs_shipping_weight_information_text"} */
/* {block "cart_shipping_costs_shipping_weight_information_image"} */
class Block_1571609277694d6dd4de39b4_39000035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
images/icon_cart_shipping_costs_info.png" alt="<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_weight_info'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_weight_info'];?>
" />
				<?php
}
}
/* {/block "cart_shipping_costs_shipping_weight_information_image"} */
/* {block "cart_shipping_costs_shipping_weight_information_image_if"} */
class Block_1412728193694d6dd4de28b0_49242149 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['content_data']->value['show_shipping_weight_info'] == 1) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1571609277694d6dd4de39b4_39000035', "cart_shipping_costs_shipping_weight_information_image", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "cart_shipping_costs_shipping_weight_information_image_if"} */
/* {block "cart_shipping_costs_shipping_weight_information"} */
class Block_1650551449694d6dd4de0492_78362349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_shipping_costs_shipping_weight_information' => 
  array (
    0 => 'Block_1650551449694d6dd4de0492_78362349',
  ),
  'cart_shipping_costs_shipping_weight_information_text' => 
  array (
    0 => 'Block_1550656699694d6dd4de0de9_79368455',
  ),
  'cart_shipping_costs_shipping_weight_information_image_if' => 
  array (
    0 => 'Block_1412728193694d6dd4de28b0_49242149',
  ),
  'cart_shipping_costs_shipping_weight_information_image' => 
  array (
    0 => 'Block_1571609277694d6dd4de39b4_39000035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<span class="shipping-calculator-shipping-weight-unit col-xs-12 col-sm-9">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550656699694d6dd4de0de9_79368455', "cart_shipping_costs_shipping_weight_information_text", $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1412728193694d6dd4de28b0_49242149', "cart_shipping_costs_shipping_weight_information_image_if", $this->tplIndex);
?>

	</span>
<?php
}
}
/* {/block "cart_shipping_costs_shipping_weight_information"} */
}
