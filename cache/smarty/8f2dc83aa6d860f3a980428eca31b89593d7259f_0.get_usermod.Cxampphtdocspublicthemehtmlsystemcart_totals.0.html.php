<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd53b3512_62744864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f2dc83aa6d860f3a980428eca31b89593d7259f' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd53b3512_62744864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"shopping_cart"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general_txt"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"gift_cart",'name'=>"gift"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128855839694d6dd53a55c0_11073087', "cart_totals");
?>

<?php }
/* {block "cart_totals_checkout_buttons"} */
class Block_1167837701694d6dd53a67a8_89782398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="checkout-buttons">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_buttons']->value, 'cobutton', false, NULL, 'cob', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['cobutton']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cobutton']->value) {
$_smarty_tpl->tpl_vars['cobutton']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['total'];
?>
					<?php if ($_smarty_tpl->tpl_vars['cobutton']->value['script']) {?>
						<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['script'];?>

					<?php } else { ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['url'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['img'];?>
" />
						</a>
					<?php }?>
					<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cob']->value['last'] : null)) {?><div class="checkout-buttons-or"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_or'];?>
</div><?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				<?php if ((isset($_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value))) {?>
                <div class="paypal-ec-button-container">
                    <img class="paypal-ec-button" src="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value['src'];?>
" alt="PayPal ECS"
                         data-gambio-widget="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value['widget'];?>
"
                         data-paypal_ec_button-page="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value['page'];?>
"
                         data-paypal_ec_button-redirect="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value['redirect'];?>
"
                         data-paypal_ec_button-display-cart="<?php echo $_smarty_tpl->tpl_vars['PAYPAL_EC_BUTTON']->value['display_cart'];?>
" />
                </div>
				<?php }?>
			</div>
		<?php
}
}
/* {/block "cart_totals_checkout_buttons"} */
/* {block "cart_totals_paypal"} */
class Block_440013531694d6dd53b2839_33714202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "cart_totals_paypal"} */
/* {block "cart_totals"} */
class Block_128855839694d6dd53a55c0_11073087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_totals' => 
  array (
    0 => 'Block_128855839694d6dd53a55c0_11073087',
  ),
  'cart_totals_checkout_buttons' => 
  array (
    0 => 'Block_1167837701694d6dd53a67a8_89782398',
  ),
  'cart_totals_paypal' => 
  array (
    0 => 'Block_440013531694d6dd53b2839_33714202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['customer_status_allow_checkout']->value == '1') {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1167837701694d6dd53a67a8_89782398', "cart_totals_checkout_buttons", $this->tplIndex);
?>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_440013531694d6dd53b2839_33714202', "cart_totals_paypal", $this->tplIndex);
?>

<?php
}
}
/* {/block "cart_totals"} */
}
