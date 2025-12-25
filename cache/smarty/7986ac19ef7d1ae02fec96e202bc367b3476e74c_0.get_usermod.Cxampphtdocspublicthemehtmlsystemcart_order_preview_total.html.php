<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_order_preview_total.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd50f4e33_60366641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7986ac19ef7d1ae02fec96e202bc367b3476e74c' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_order_preview_total.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_order_couponinfo.html' => 1,
  ),
),false)) {
function content_694d6dd50f4e33_60366641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"order_details"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"gambioultra",'name'=>"gambioultra"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"gift_cart",'name'=>"gift"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['content_data']->value['customer_status_allow_checkout'] == '1') {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1180368096694d6dd50a8593_49822541', "cart_order_preview_total");
?>

<?php }
}
/* {block "cart_order_preview_total_title"} */
class Block_1273638110694d6dd50a8e63_32571801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h4 class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_sum_head'];?>
</h4>
		<?php
}
}
/* {/block "cart_order_preview_total_title"} */
/* {block "cart_order_preview_total_table_tbody_weight"} */
class Block_1116474818694d6dd50abef7_09057697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<tr>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['content_data']->value['SHOW_SHIPPING_WEIGHT_INFO'] == 1) {?>
											<img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
images/icon_cart_shipping_costs_info.png" alt="<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_weight_info'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_weight_info'];?>
" />
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_weight'];?>
:
									</td>
									<td class="shipping-weight-value">
										<?php echo $_smarty_tpl->tpl_vars['content_data']->value['SHIPPING_WEIGHT'];?>
 <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_unit'];?>

									</td>
								</tr>
							<?php
}
}
/* {/block "cart_order_preview_total_table_tbody_weight"} */
/* {block "order_total_table_tbody_ordertotals"} */
class Block_1438437333694d6dd50b0d06_72658679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['ordertotals'], 'titem');
$_smarty_tpl->tpl_vars['titem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['titem']->value) {
$_smarty_tpl->tpl_vars['titem']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_tax' && $_smarty_tpl->tpl_vars['content_data']->value['TAX_FREE_TEXT']) {
continue 1;
}?>
								<?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_gm_tax_free') {
continue 1;
}?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['titem']->value['title'];?>

										<?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_coupon' && $_SESSION['cc_id'] && $_smarty_tpl->tpl_vars['content_data']->value['show_coupon_info']) {?>
											<span id="ot-coupon-info-toggle" onclick="$('#ot-coupon-info-row').toggle();"><i class="far fa-question-circle"></i></span>
										<?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_gv' && $_smarty_tpl->tpl_vars['content_data']->value['voucher_info']) {?>
											<span id="ot-gv-info-toggle" onclick="$('#ot-gv-info-row').toggle();"><i class="far fa-question-circle"></i></span>
                                        <?php }?>
										
										<?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_shipping') {?>
											<?php if ($_smarty_tpl->tpl_vars['content_data']->value['SHIPPING_INFO_SHIPPING_COSTS_VALUE'] != '') {?>
												<a href="#shipping-information-layer"
												   title="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_CONTENT_TITLE']->value;?>
"
												   class="js-open-modal" data-modal-type="alert"
												   data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['general']->value['SHIPPING_COSTS_LAYER_TITLE'];?>
", "sectionSelector": ".content_text", "bootstrapClass": "modal-lg", "refreshOnClose": true}'
												><span id="ot-shipping-info-toggle"><i class="fa fa-pencil"></i></span></a>
											<?php }?>
										<?php }?>
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['titem']->value['text'];?>
</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_coupon' && $_SESSION['cc_id'] && $_smarty_tpl->tpl_vars['content_data']->value['show_coupon_info']) {?>
									<tr id="ot-coupon-info-row" style="display: none">
										<td class="colspan-2 additional-info">
											<div class="ot-coupon-info">
												<div class="ot-coupon-info-block">
													<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_order_couponinfo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
												</div>
											</div>
										</td>
									</tr>
								<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['titem']->value['code'] === 'ot_gv' && $_smarty_tpl->tpl_vars['content_data']->value['voucher_info']) {?>
									<tr id="ot-gv-info-row" style="display: none">
										<td class="colspan-2 additional-info">
											<div class="ot-gv-info">
												<div class="ot-gv-info-block">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['voucher_info'], 'vinfo');
$_smarty_tpl->tpl_vars['vinfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vinfo']->value) {
$_smarty_tpl->tpl_vars['vinfo']->do_else = false;
?>
														<?php echo $_smarty_tpl->tpl_vars['vinfo']->value['coupon_code'];?>
 (<?php echo $_smarty_tpl->tpl_vars['vinfo']->value['coupon_amount'];?>
)
                                                    	<?php if ($_smarty_tpl->tpl_vars['vinfo']->value['remove_url']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['vinfo']->value['remove_url'];?>
"><i class="fas fa-times"></i></a><?php }?><br>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</div>
											</div>
										</td>
									</tr>
                                <?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
}
/* {/block "order_total_table_tbody_ordertotals"} */
/* {block "cart_order_preview_total_table_tbody_tax_free"} */
class Block_679909296694d6dd50cca88_00743804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<tr>
									<td colspan="2" class="colspan-2">
										<span class="order-total-shipping">
											<?php echo $_smarty_tpl->tpl_vars['content_data']->value['TAX_FREE_TEXT'];?>

										</span>
									</td>
								</tr>
							<?php
}
}
/* {/block "cart_order_preview_total_table_tbody_tax_free"} */
/* {block "cart_order_alert_no_shipping_allowed"} */
class Block_418928160694d6dd50ce6c0_67802949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if (!in_array('ot_shipping',array_column($_smarty_tpl->tpl_vars['content_data']->value['ordertotals'],'code')) && $_SESSION['cart']->content_type !== "virtual" && $_smarty_tpl->tpl_vars['content_data']->value['OT_SHIPPING_INSTALLED'] === true) {?>
								<tr>
									<td colspan="2" class="colspan-2">
										<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_not_allowed_warning'];?>

										<a href="#shipping-information-layer"
										   title="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_AND_PAYMENT_CONTENT_TITLE']->value;?>
"
										   class="js-open-modal" data-modal-type="alert"
										   data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['general']->value['SHIPPING_COSTS_LAYER_TITLE'];?>
", "sectionSelector": ".content_text", "bootstrapClass": "modal-lg", "refreshOnClose": true}'
										><span id="ot-shipping-info-toggle"><i class="fa fa-pencil"></i></span></a>
									</td>
								</tr>
							<?php }?>
						<?php
}
}
/* {/block "cart_order_alert_no_shipping_allowed"} */
/* {block "cart_order_preview_total_table_tbody_footer_sum"} */
class Block_656012423694d6dd50db2e2_38885848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td>
										<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_sum'];?>

									</td>
								<?php
}
}
/* {/block "cart_order_preview_total_table_tbody_footer_sum"} */
/* {block "cart_order_preview_total_table_tbody_footer_total"} */
class Block_1679585575694d6dd50dc546_49772223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<td>
										<?php echo $_smarty_tpl->tpl_vars['content_data']->value['TOTAL'];?>

									</td>
								<?php
}
}
/* {/block "cart_order_preview_total_table_tbody_footer_total"} */
/* {block "cart_order_preview_total_table_tbody_footer"} */
class Block_1413312657694d6dd50daaf6_86096239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<tr class="footer total sum">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_656012423694d6dd50db2e2_38885848', "cart_order_preview_total_table_tbody_footer_sum", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679585575694d6dd50dc546_49772223', "cart_order_preview_total_table_tbody_footer_total", $this->tplIndex);
?>

							</tr>
						<?php
}
}
/* {/block "cart_order_preview_total_table_tbody_footer"} */
/* {block "snippets_order_total_checkout_button"} */
class Block_553236272694d6dd50def17_45010322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.xtc_href_link.php','function'=>'smarty_modifier_xtc_href_link',),));
?>

										<a title="<?php echo $_smarty_tpl->tpl_vars['button']->value['checkout'];?>
" class="btn btn-primary btn-block button-submit" href="<?php echo smarty_modifier_xtc_href_link('checkout_shipping.php','','SSL');?>
"><?php echo $_smarty_tpl->tpl_vars['button']->value['checkout'];?>
</a>
									<?php
}
}
/* {/block "snippets_order_total_checkout_button"} */
/* {block "snippets_order_total_checkout_button_disabled"} */
class Block_133972006694d6dd50ee613_91020085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<span title="<?php echo $_smarty_tpl->tpl_vars['button']->value['checkout_disabled'];?>
" class="btn btn-primary btn-block button-disabled"><?php echo $_smarty_tpl->tpl_vars['button']->value['checkout'];?>
</span>
                                    <?php
}
}
/* {/block "snippets_order_total_checkout_button_disabled"} */
/* {block "snippets_order_total_shared_shoppingcart"} */
class Block_116557259694d6dd50f1ca7_92685292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<a href=".share-cart-layer" data-gambio-widget="share_cart_button_handler" title="<?php echo $_smarty_tpl->tpl_vars['general_txt']->value['NAVBAR_SHARE_CART'];?>
" class="js-open-modal cart-action-link share-shopping-cart" data-modal-finish-event="SHARE_CART_MODAL_READY" data-modal-type="alert" data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['sharedCart']->value['title'];?>
", "dialogClass": "layer-medium", "buttons": [] }'><span class="fa fa-share"></span> <?php echo $_smarty_tpl->tpl_vars['general']->value['NAVBAR_SHARE_CART'];?>
</a>
									<?php
}
}
/* {/block "snippets_order_total_shared_shoppingcart"} */
/* {block "cart_order_preview_total_table_tbody"} */
class Block_214301981694d6dd50aacf4_99306704 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

					<tbody>
						<?php if ($_smarty_tpl->tpl_vars['content_data']->value['SHOW_SHIPPING_WEIGHT'] == 1) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1116474818694d6dd50abef7_09057697', "cart_order_preview_total_table_tbody_weight", $this->tplIndex);
?>

						<?php }?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1438437333694d6dd50b0d06_72658679', "order_total_table_tbody_ordertotals", $this->tplIndex);
?>


						<?php if ($_smarty_tpl->tpl_vars['content_data']->value['TAX_FREE_TEXT']) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679909296694d6dd50cca88_00743804', "cart_order_preview_total_table_tbody_tax_free", $this->tplIndex);
?>

						<?php }?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418928160694d6dd50ce6c0_67802949', "cart_order_alert_no_shipping_allowed", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413312657694d6dd50daaf6_86096239', "cart_order_preview_total_table_tbody_footer", $this->tplIndex);
?>


						<tr class="footer total checkout-button">
							<td class="colspan-2">
								<?php if ($_smarty_tpl->tpl_vars['content_data']->value['customer_status_allow_checkout'] == '1' && $_SESSION['allow_checkout'] == 'true') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_553236272694d6dd50def17_45010322', "snippets_order_total_checkout_button", $this->tplIndex);
?>

								<?php } else { ?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133972006694d6dd50ee613_91020085', "snippets_order_total_checkout_button_disabled", $this->tplIndex);
?>

								<?php }?>

								<?php if (smarty_modifier_gm_get_conf('MODULE_CENTER_SHAREDSHOPPINGCART_INSTALLED') == '1') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116557259694d6dd50f1ca7_92685292', "snippets_order_total_shared_shoppingcart", $this->tplIndex);
?>

								<?php }?>
							</td>
						</tr>
					</tbody>
				<?php
}
}
/* {/block "cart_order_preview_total_table_tbody"} */
/* {block "cart_order_preview_total_table"} */
class Block_2099475861694d6dd50aa530_30819270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<table class="order-total table">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214301981694d6dd50aacf4_99306704', "cart_order_preview_total_table_tbody", $this->tplIndex);
?>

			</table>
		<?php
}
}
/* {/block "cart_order_preview_total_table"} */
/* {block "cart_order_preview_total"} */
class Block_1180368096694d6dd50a8593_49822541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_order_preview_total' => 
  array (
    0 => 'Block_1180368096694d6dd50a8593_49822541',
  ),
  'cart_order_preview_total_title' => 
  array (
    0 => 'Block_1273638110694d6dd50a8e63_32571801',
  ),
  'cart_order_preview_total_table' => 
  array (
    0 => 'Block_2099475861694d6dd50aa530_30819270',
  ),
  'cart_order_preview_total_table_tbody' => 
  array (
    0 => 'Block_214301981694d6dd50aacf4_99306704',
  ),
  'cart_order_preview_total_table_tbody_weight' => 
  array (
    0 => 'Block_1116474818694d6dd50abef7_09057697',
  ),
  'order_total_table_tbody_ordertotals' => 
  array (
    0 => 'Block_1438437333694d6dd50b0d06_72658679',
  ),
  'cart_order_preview_total_table_tbody_tax_free' => 
  array (
    0 => 'Block_679909296694d6dd50cca88_00743804',
  ),
  'cart_order_alert_no_shipping_allowed' => 
  array (
    0 => 'Block_418928160694d6dd50ce6c0_67802949',
  ),
  'cart_order_preview_total_table_tbody_footer' => 
  array (
    0 => 'Block_1413312657694d6dd50daaf6_86096239',
  ),
  'cart_order_preview_total_table_tbody_footer_sum' => 
  array (
    0 => 'Block_656012423694d6dd50db2e2_38885848',
  ),
  'cart_order_preview_total_table_tbody_footer_total' => 
  array (
    0 => 'Block_1679585575694d6dd50dc546_49772223',
  ),
  'snippets_order_total_checkout_button' => 
  array (
    0 => 'Block_553236272694d6dd50def17_45010322',
  ),
  'snippets_order_total_checkout_button_disabled' => 
  array (
    0 => 'Block_133972006694d6dd50ee613_91020085',
  ),
  'snippets_order_total_shared_shoppingcart' => 
  array (
    0 => 'Block_116557259694d6dd50f1ca7_92685292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273638110694d6dd50a8e63_32571801', "cart_order_preview_total_title", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2099475861694d6dd50aa530_30819270', "cart_order_preview_total_table", $this->tplIndex);
?>

	<?php
}
}
/* {/block "cart_order_preview_total"} */
}
