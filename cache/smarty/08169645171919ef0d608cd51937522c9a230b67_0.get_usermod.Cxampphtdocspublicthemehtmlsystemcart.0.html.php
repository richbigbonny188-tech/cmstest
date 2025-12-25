<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd52c2659_40554384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08169645171919ef0d608cd51937522c9a230b67' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_messages.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_empty.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_totals.html' => 1,
  ),
),false)) {
function content_694d6dd52c2659_40554384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"shopping_cart"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"checkout_shipping",'name'=>"shipping"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"gift_cart",'name'=>"gift"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general_txt"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"shared_shopping_cart",'name'=>"sharedCart"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1864697627694d6dd5296336_62795185', "cart");
?>

<?php }
/* {block "cart_title"} */
class Block_2036781139694d6dd5296c43_05755413 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="no-underline"><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_cart'];?>
</h1>
	<?php
}
}
/* {/block "cart_title"} */
/* {block "cart_alert"} */
class Block_4215285694d6dd5298497_18933568 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="global-error-messages">
			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
	<?php
}
}
/* {/block "cart_alert"} */
/* {block "cart-top-content-zone"} */
class Block_2060539544694d6dd5299e85_23945318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXModules\\Gambio\\ContentZones\\Shop\\SmartyPlugins\\function.content_zone.php','function'=>'smarty_function_content_zone',),));
?>

		<?php echo smarty_function_content_zone(array('id'=>"cart-top"),$_smarty_tpl);?>

	<?php
}
}
/* {/block "cart-top-content-zone"} */
/* {block "cart_empty_cart"} */
class Block_1303743939694d6dd529f8f3_93645765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="cart-empty<?php if ($_smarty_tpl->tpl_vars['cart_empty']->value != true) {?> hidden<?php }?>" >
					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_empty.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
				</div>
			<?php
}
}
/* {/block "cart_empty_cart"} */
/* {block "cart_not_empty_cart_info_message"} */
class Block_1148695711694d6dd52a4456_27914665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['tax_included']->value) {?>
									<?php echo strtr($_smarty_tpl->tpl_vars['info_message_1']->value,array('%minmaxorder%'=>"<strong>".((string)$_smarty_tpl->tpl_vars['min_order']->value)."</strong>",'%orderamount%'=>"<strong>".((string)$_smarty_tpl->tpl_vars['order_amount']->value)."</strong>"));?>

								<?php } else { ?>
                                    <?php echo strtr($_smarty_tpl->tpl_vars['info_message_1']->value,array('%minmaxorder%'=>"<strong>".((string)$_smarty_tpl->tpl_vars['min_order']->value)."</strong> (".((string)$_smarty_tpl->tpl_vars['txt']->value['text_net']).")",'%orderamount%'=>"<strong>".((string)$_smarty_tpl->tpl_vars['order_amount']->value)."</strong> (".((string)$_smarty_tpl->tpl_vars['txt']->value['text_net']).")"));?>

								<?php }?>
							<?php
}
}
/* {/block "cart_not_empty_cart_info_message"} */
/* {block "cart_not_empty_cart_info_message_if"} */
class Block_788198069694d6dd52a2b63_14869542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="alert alert-info info-message col-xs-12 <?php if ($_smarty_tpl->tpl_vars['info_message_1']->value == '') {?>hidden<?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['info_message_1']->value != '') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148695711694d6dd52a4456_27914665', "cart_not_empty_cart_info_message", $this->tplIndex);
?>

                        <?php }?>
					</div>
                <?php
}
}
/* {/block "cart_not_empty_cart_info_message_if"} */
/* {block "cart_not_empty_cart_order_details"} */
class Block_412035435694d6dd52b7528_16359503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo $_smarty_tpl->tpl_vars['MODULE_order_details']->value;?>

							<?php
}
}
/* {/block "cart_not_empty_cart_order_details"} */
/* {block "cart_not_empty_cart_checkout_button"} */
class Block_972197346694d6dd52b8a29_29510468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="shopping-cart-button col-xs-12 col-md-4 pull-right <?php if ($_smarty_tpl->tpl_vars['MODULE_gift_cart']->value != '') {?>has-gift-cart<?php }?>">
									<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_totals.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								</div>
							<?php
}
}
/* {/block "cart_not_empty_cart_checkout_button"} */
/* {block "cart_not_empty_cart_shipping_and_payment"} */
class Block_314970952694d6dd52bc455_85405275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="shopping-cart-shipping-payment-text col-xs-12 col-md-8">
											<img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
images/svgs/chevron-right.svg" class="chevron-right svg--inject" alt=""> <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_about_shipping_and_payment'];?>

											<a class="grey_link js-open-modal" href="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_INFO_LINK']->value;?>
"
												   title="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_CONTENT_TITLE']->value;?>
"
												   data-modal-type="info"
												   data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_CONTENT_TITLE']->value;?>
",
													"sectionSelector": ".content_text", "bootstrapClass": "modal-lg"}'>
												<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_CONTENT_TITLE']->value;?>

											</a>.
										</div>
									<?php
}
}
/* {/block "cart_not_empty_cart_shipping_and_payment"} */
/* {block "cart_not_empty_cart_shipping_and_payment_if"} */
class Block_1218103561694d6dd52bb590_99534215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['customer_status_allow_checkout']->value == '1') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314970952694d6dd52bc455_85405275', "cart_not_empty_cart_shipping_and_payment", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "cart_not_empty_cart_shipping_and_payment_if"} */
/* {block "cart_not_empty_cart_form"} */
class Block_220729808694d6dd52b6112_20776720 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

							<div class="hidden-options">
								<?php echo $_smarty_tpl->tpl_vars['HIDDEN_OPTIONS']->value;?>

							</div>
					
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_412035435694d6dd52b7528_16359503', "cart_not_empty_cart_order_details", $this->tplIndex);
?>

				
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_972197346694d6dd52b8a29_29510468', "cart_not_empty_cart_checkout_button", $this->tplIndex);
?>

				
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1218103561694d6dd52bb590_99534215', "cart_not_empty_cart_shipping_and_payment_if", $this->tplIndex);
?>

				
						</form>
												<form id="redeem-gift-coupon-code" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['FORM_REDEEM_GIFT_COUPON_CODE_ACTION_URL']->value;?>
"></form>
					<?php
}
}
/* {/block "cart_not_empty_cart_form"} */
/* {block "cart_not_empty_cart"} */
class Block_1041552143694d6dd52a1f29_89973907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788198069694d6dd52a2b63_14869542', "cart_not_empty_cart_info_message_if", $this->tplIndex);
?>


				<div class="cart-not-empty<?php if ($_smarty_tpl->tpl_vars['cart_empty']->value == true) {?> hidden<?php }?>" >
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_220729808694d6dd52b6112_20776720', "cart_not_empty_cart_form", $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block "cart_not_empty_cart"} */
/* {block "cart_wrapper"} */
class Block_49243855694d6dd529f0c4_60146355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div data-gambio-widget="product_cart_handler" data-product_cart_handler-actions="[]" class="clearfix">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1303743939694d6dd529f8f3_93645765', "cart_empty_cart", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1041552143694d6dd52a1f29_89973907', "cart_not_empty_cart", $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block "cart_wrapper"} */
/* {block "cart-bottom-content-zone"} */
class Block_489997582694d6dd52c0660_59666934 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXModules\\Gambio\\ContentZones\\Shop\\SmartyPlugins\\function.content_zone.php','function'=>'smarty_function_content_zone',),));
?>

		<?php echo smarty_function_content_zone(array('id'=>"cart-bottom"),$_smarty_tpl);?>

	<?php
}
}
/* {/block "cart-bottom-content-zone"} */
/* {block "cart"} */
class Block_1864697627694d6dd5296336_62795185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart' => 
  array (
    0 => 'Block_1864697627694d6dd5296336_62795185',
  ),
  'cart_title' => 
  array (
    0 => 'Block_2036781139694d6dd5296c43_05755413',
  ),
  'cart_alert' => 
  array (
    0 => 'Block_4215285694d6dd5298497_18933568',
  ),
  'cart-top-content-zone' => 
  array (
    0 => 'Block_2060539544694d6dd5299e85_23945318',
  ),
  'cart_wrapper' => 
  array (
    0 => 'Block_49243855694d6dd529f0c4_60146355',
  ),
  'cart_empty_cart' => 
  array (
    0 => 'Block_1303743939694d6dd529f8f3_93645765',
  ),
  'cart_not_empty_cart' => 
  array (
    0 => 'Block_1041552143694d6dd52a1f29_89973907',
  ),
  'cart_not_empty_cart_info_message_if' => 
  array (
    0 => 'Block_788198069694d6dd52a2b63_14869542',
  ),
  'cart_not_empty_cart_info_message' => 
  array (
    0 => 'Block_1148695711694d6dd52a4456_27914665',
  ),
  'cart_not_empty_cart_form' => 
  array (
    0 => 'Block_220729808694d6dd52b6112_20776720',
  ),
  'cart_not_empty_cart_order_details' => 
  array (
    0 => 'Block_412035435694d6dd52b7528_16359503',
  ),
  'cart_not_empty_cart_checkout_button' => 
  array (
    0 => 'Block_972197346694d6dd52b8a29_29510468',
  ),
  'cart_not_empty_cart_shipping_and_payment_if' => 
  array (
    0 => 'Block_1218103561694d6dd52bb590_99534215',
  ),
  'cart_not_empty_cart_shipping_and_payment' => 
  array (
    0 => 'Block_314970952694d6dd52bc455_85405275',
  ),
  'cart-bottom-content-zone' => 
  array (
    0 => 'Block_489997582694d6dd52c0660_59666934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2036781139694d6dd5296c43_05755413', "cart_title", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4215285694d6dd5298497_18933568', "cart_alert", $this->tplIndex);
?>



	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2060539544694d6dd5299e85_23945318', "cart-top-content-zone", $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49243855694d6dd529f0c4_60146355', "cart_wrapper", $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_489997582694d6dd52c0660_59666934', "cart-bottom-content-zone", $this->tplIndex);
?>

	
	<?php echo $_smarty_tpl->tpl_vars['MODULE_gift_cart']->value;?>

	<div class="hidden">
		<?php echo $_smarty_tpl->tpl_vars['MODULE_shared_cart']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['cart_shipping_costs_selection']->value;?>

	</div>

<?php
}
}
/* {/block "cart"} */
}
