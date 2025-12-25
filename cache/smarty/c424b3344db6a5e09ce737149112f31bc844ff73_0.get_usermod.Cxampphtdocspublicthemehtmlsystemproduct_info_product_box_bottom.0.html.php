<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_box_bottom.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bdc8d29_68775234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c424b3344db6a5e09ce737149112f31bc844ff73' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_box_bottom.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bdc8d29_68775234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_713052383694d6d5bda9143_70757396', "product_info_product_box_bottom");
?>

<?php }
/* {block "product_info_product_box_bottom_quantity"} */
class Block_2033370626694d6d5bdabb37_93370887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<label class="control-label sr-only">
									<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>

								</label>
							<?php
}
}
/* {/block "product_info_product_box_bottom_quantity"} */
/* {block "product_info_product_box_bottom_quantity_if"} */
class Block_1069625724694d6d5bdaae74_55672133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2033370626694d6d5bdabb37_93370887', "product_info_product_box_bottom_quantity", $this->tplIndex);
?>

						<?php }?>
					<?php
}
}
/* {/block "product_info_product_box_bottom_quantity_if"} */
/* {block "product_info_product_box_bottom_input"} */
class Block_765787924694d6d5bdad368_67462221 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="input-group">
							<a class="btn btn-default btn-lg btn-minus"><span class="fa fa-minus"></span></a>
							<input type="number" step="<?php echo $_smarty_tpl->tpl_vars['QTY_STEPPING']->value;?>
" class="form-control input-lg pull-right js-calculate-qty" value="<?php echo $_smarty_tpl->tpl_vars['QUANTITY']->value;?>
" id="attributes-calc-quantity" name="products_qty"<?php if ($_smarty_tpl->tpl_vars['DISABLED_QUANTITY']->value) {?> disabled="disabled"<?php }?> />
							<a class="input-group-btn btn btn-default btn-lg btn-plus"><span class="fa fa-plus"></span></a>
						</div>
					<?php
}
}
/* {/block "product_info_product_box_bottom_input"} */
/* {block "product_info_product_box_bottom_quantity_container"} */
class Block_658879182694d6d5bdaa394_28310516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="input-number" data-type="float" data-stepping="<?php echo $_smarty_tpl->tpl_vars['QTY_STEPPING']->value;?>
">
	
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069625724694d6d5bdaae74_55672133', "product_info_product_box_bottom_quantity_if", $this->tplIndex);
?>

	
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_765787924694d6d5bdad368_67462221', "product_info_product_box_bottom_input", $this->tplIndex);
?>

	
				</div>
			<?php
}
}
/* {/block "product_info_product_box_bottom_quantity_container"} */
/* {block "product_info_product_box_bottom_add_to_cart"} */
class Block_1355899658694d6d5bdaf9e7_61432226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="button-container">
					<input name="btn-add-to-cart" type="submit" class="btn btn-lg btn-buy btn-block js-btn-add-to-cart<?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> btn-inactive inactive<?php }?>" value="<?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
" <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> disabled<?php }?>/>
					<button name="btn-add-to-cart-fake" onClick="void(0)" class="btn-add-to-cart-fake btn btn-lg btn-buy btn-block <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> btn-inactive inactive<?php }?>" value="" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
" style="display: none; margin-top: 0" <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
</button>
				</div>
			<?php
}
}
/* {/block "product_info_product_box_bottom_add_to_cart"} */
/* {block "product_info_product_box_bottom_add_to_cart_not_for_sale"} */
class Block_182007430694d6d5bdb6401_13869471 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="button-container">
                    <input name="btn-add-to-cart" type="button" class="btn btn-lg btn-buy btn-block btn-inactive inactive" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['not_for_sale'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['button']->value['not_for_sale'];?>
" disabled/>
                </div>
            <?php
}
}
/* {/block "product_info_product_box_bottom_add_to_cart_not_for_sale"} */
/* {block "module_product_info_standard_sticky_box_paypal_ec_button"} */
class Block_585693474694d6d5bdb82a7_29124807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
"/>
		</div>
		<?php }?>
		<?php
}
}
/* {/block "module_product_info_standard_sticky_box_paypal_ec_button"} */
/* {block "product_info_product_box_bottom_paypal"} */
class Block_276705209694d6d5bdbc1d9_23056977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php
}
}
/* {/block "product_info_product_box_bottom_paypal"} */
/* {block "product_info_product_box_bottom_wishlist"} */
class Block_868114071694d6d5bdbdc76_29142077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="wishlist-container">
							<a href="#" class="btn-wishlist btn btn-block btn-sm " title="<?php echo $_smarty_tpl->tpl_vars['button']->value['add_to_wishlist'];?>
">
								<span class="col-xs-2 btn-icon">
									<i class="fa fa-heart-o"></i> 
								</span>
								
								<span class="col-xs-10 btn-text">
									<?php echo $_smarty_tpl->tpl_vars['button']->value['add_to_wishlist'];?>

								</span>
							</a>
						</div>
					<?php
}
}
/* {/block "product_info_product_box_bottom_wishlist"} */
/* {block "product_info_product_box_bottom_wishlist_if"} */
class Block_1846018315694d6d5bdbcde3_81316816 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['SHOW_WISHLIST']->value) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_868114071694d6d5bdbdc76_29142077', "product_info_product_box_bottom_wishlist", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "product_info_product_box_bottom_wishlist_if"} */
/* {block "product_info_product_box_bottom_price_offer"} */
class Block_828483577694d6d5bdc1628_68528488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="price-offer-container">
							<a class="btn-price-offer btn btn-block btn-sm">
								<span class="col-xs-2 btn-icon">
									<i class="fa fa-bullhorn"></i>
								</span>

								<span class="col-xs-10 btn-text">
									<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_price_offer'];?>

								</span>
							</a>
						</div>
					<?php
}
}
/* {/block "product_info_product_box_bottom_price_offer"} */
/* {block "product_info_product_box_bottom_price_offer_if"} */
class Block_1338133651694d6d5bdc0538_09559337 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['GM_PRICE_OFFER']->value != '') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_828483577694d6d5bdc1628_68528488', "product_info_product_box_bottom_price_offer", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "product_info_product_box_bottom_price_offer_if"} */
/* {block "product_info_product_box_bottom_tell_a_friend"} */
class Block_1814661789694d6d5bdc41e1_48869631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="product-question-container">
							<a class="btn-product-question btn btn-block btn-sm" data-gambio-widget="product_question" data-product_question-product-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_ID']->value;?>
">
								<span class="col-xs-2 btn-icon">
									<i class="fa fa-comment-o"></i>
								</span>

								<span class="col-xs-10 btn-text">
									<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_tell_a_friend'];?>

								</span>
							</a>
						</div>
					<?php
}
}
/* {/block "product_info_product_box_bottom_tell_a_friend"} */
/* {block "product_info_product_box_bottom_tell_a_friend_if"} */
class Block_811423566694d6d5bdc3228_64627150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['GM_TELL_A_FRIEND']->value != '') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1814661789694d6d5bdc41e1_48869631', "product_info_product_box_bottom_tell_a_friend", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "product_info_product_box_bottom_tell_a_friend_if"} */
/* {block "product_info_product_box_bottom_text_phrases"} */
class Block_274664408694d6d5bdc62f8_05494737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo '<script'; ?>
 id="product-details-text-phrases" type="application/json">
				{
					"productsInCartSuffix": "<?php echo $_smarty_tpl->tpl_vars['txt']->value['products_in_cart_suffix'];?>
", "showCart": "<?php echo $_smarty_tpl->tpl_vars['txt']->value['show_cart'];?>
"
				}
			<?php echo '</script'; ?>
>
		<?php
}
}
/* {/block "product_info_product_box_bottom_text_phrases"} */
/* {block "product_info_product_box_bottom"} */
class Block_713052383694d6d5bda9143_70757396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom' => 
  array (
    0 => 'Block_713052383694d6d5bda9143_70757396',
  ),
  'product_info_product_box_bottom_quantity_container' => 
  array (
    0 => 'Block_658879182694d6d5bdaa394_28310516',
  ),
  'product_info_product_box_bottom_quantity_if' => 
  array (
    0 => 'Block_1069625724694d6d5bdaae74_55672133',
  ),
  'product_info_product_box_bottom_quantity' => 
  array (
    0 => 'Block_2033370626694d6d5bdabb37_93370887',
  ),
  'product_info_product_box_bottom_input' => 
  array (
    0 => 'Block_765787924694d6d5bdad368_67462221',
  ),
  'product_info_product_box_bottom_add_to_cart' => 
  array (
    0 => 'Block_1355899658694d6d5bdaf9e7_61432226',
  ),
  'product_info_product_box_bottom_add_to_cart_not_for_sale' => 
  array (
    0 => 'Block_182007430694d6d5bdb6401_13869471',
  ),
  'module_product_info_standard_sticky_box_paypal_ec_button' => 
  array (
    0 => 'Block_585693474694d6d5bdb82a7_29124807',
  ),
  'product_info_product_box_bottom_paypal' => 
  array (
    0 => 'Block_276705209694d6d5bdbc1d9_23056977',
  ),
  'product_info_product_box_bottom_wishlist_if' => 
  array (
    0 => 'Block_1846018315694d6d5bdbcde3_81316816',
  ),
  'product_info_product_box_bottom_wishlist' => 
  array (
    0 => 'Block_868114071694d6d5bdbdc76_29142077',
  ),
  'product_info_product_box_bottom_price_offer_if' => 
  array (
    0 => 'Block_1338133651694d6d5bdc0538_09559337',
  ),
  'product_info_product_box_bottom_price_offer' => 
  array (
    0 => 'Block_828483577694d6d5bdc1628_68528488',
  ),
  'product_info_product_box_bottom_tell_a_friend_if' => 
  array (
    0 => 'Block_811423566694d6d5bdc3228_64627150',
  ),
  'product_info_product_box_bottom_tell_a_friend' => 
  array (
    0 => 'Block_1814661789694d6d5bdc41e1_48869631',
  ),
  'product_info_product_box_bottom_text_phrases' => 
  array (
    0 => 'Block_274664408694d6d5bdc62f8_05494737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<input type="hidden" name="products_id" id="products-id" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_ID']->value;?>
" />
		<?php if ($_smarty_tpl->tpl_vars['IS_FOR_SALE']->value) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_658879182694d6d5bdaa394_28310516', "product_info_product_box_bottom_quantity_container", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355899658694d6d5bdaf9e7_61432226', "product_info_product_box_bottom_add_to_cart", $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['PRODUCTS_PRICE_STATUS']->value === '2' && $_smarty_tpl->tpl_vars['PRODUCTS_PRICE']->value !== $_smarty_tpl->tpl_vars['general']->value['GM_SHOW_NO_PRICE']) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182007430694d6d5bdb6401_13869471', "product_info_product_box_bottom_add_to_cart_not_for_sale", $this->tplIndex);
?>

		<?php }?>
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585693474694d6d5bdb82a7_29124807', "module_product_info_standard_sticky_box_paypal_ec_button", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276705209694d6d5bdbc1d9_23056977', "product_info_product_box_bottom_paypal", $this->tplIndex);
?>


		<div class="product-info-links">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1846018315694d6d5bdbcde3_81316816', "product_info_product_box_bottom_wishlist_if", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1338133651694d6d5bdc0538_09559337', "product_info_product_box_bottom_price_offer_if", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_811423566694d6d5bdc3228_64627150', "product_info_product_box_bottom_tell_a_friend_if", $this->tplIndex);
?>

		</div>
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_274664408694d6d5bdc62f8_05494737', "product_info_product_box_bottom_text_phrases", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "product_info_product_box_bottom"} */
}
