<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:02:29
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcheckout_shipping.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6e25f031e8_80842071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd3423b851af24ab2fe62748489c84e73614b1b' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcheckout_shipping.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."checkout_process_funnel.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."alert_message.html' => 1,
  ),
),false)) {
function content_694d6e25f031e8_80842071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"checkout_shipping"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"parcelshopfinder",'name'=>"parcelshopfinder"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1487467341694d6e25ed4c67_06574317', "checkout_shipping");
?>

<?php }
/* {block "checkout_shipping_funnel"} */
class Block_1993581156694d6e25ed5540_91905358 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."checkout_process_funnel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step'=>2), 0, true);
?>
	<?php
}
}
/* {/block "checkout_shipping_funnel"} */
/* {block "checkout_shipping_alert"} */
class Block_1151965422694d6e25ed7b94_02882925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['error']->value,'type'=>"danger"), 0, true);
?>
		<?php
}
}
/* {/block "checkout_shipping_alert"} */
/* {block "checkout_shipping_form_address_legend"} */
class Block_1700480798694d6e25edafa6_54404920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<legend><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_address'];?>
</legend>
					<?php
}
}
/* {/block "checkout_shipping_form_address_legend"} */
/* {block "checkout_shipping_form_address_amazon_login"} */
class Block_1785576985694d6e25ede4c4_53193923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div id="amzPayAddressBook"
									 data-gambio-widget="amazon_loginpay"
									 data-amazon_loginpay-placeholder-id="amzPayAddressBook"
									 data-amazon_loginpay-seller-id="<?php echo $_smarty_tpl->tpl_vars['amz_seller_id']->value;?>
"
									 data-amazon_loginpay-client-id="<?php echo $_smarty_tpl->tpl_vars['amz_client_id']->value;?>
"
									 data-amazon_loginpay-widgets-src="<?php echo $_smarty_tpl->tpl_vars['amz_widgets_src']->value;?>
"
									 data-amazon_loginpay-countrytxt="<?php echo $_smarty_tpl->tpl_vars['amz_country_txt']->value;?>
"
								>
									<img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
images/loading.gif" alt="loading">
								</div>
								<input type="hidden" name="amz-orderrefid" id="amz-orderrefid" value="">
							<?php
}
}
/* {/block "checkout_shipping_form_address_amazon_login"} */
/* {block "checkout_shipping_form_address_amazon"} */
class Block_1861209705694d6e25ee04c1_99693355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.amazon_payment.php','function'=>'smarty_function_amazon_payment',),));
?>

								<?php echo smarty_function_amazon_payment(array('id'=>'addressBookWidgetDiv'),$_smarty_tpl);?>

							<?php
}
}
/* {/block "checkout_shipping_form_address_amazon"} */
/* {block "checkout_shipping_form_address_no_amazon_label"} */
class Block_1716844037694d6e25ee83f9_05956446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<address><?php echo $_smarty_tpl->tpl_vars['ADDRESS_LABEL']->value;?>
</address>
										<?php
}
}
/* {/block "checkout_shipping_form_address_no_amazon_label"} */
/* {block "checkout_shipping_form_address_no_amazon_parcelshopfinder"} */
class Block_385511020694d6e25ef3719_66284089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<span class="parcel-finder-notice">
															<?php echo $_smarty_tpl->tpl_vars['parcelshopfinder']->value['note_for_button_to_psf'];?>

														</span>
													<?php
}
}
/* {/block "checkout_shipping_form_address_no_amazon_parcelshopfinder"} */
/* {block "checkout_shipping_form_address_no_amazon_parcelshopfinder_if"} */
class Block_1243709477694d6e25ef2724_22647938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php if ($_smarty_tpl->tpl_vars['url_parcelshopfinder']->value) {?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_385511020694d6e25ef3719_66284089', "checkout_shipping_form_address_no_amazon_parcelshopfinder", $this->tplIndex);
?>

												<?php }?>
											<?php
}
}
/* {/block "checkout_shipping_form_address_no_amazon_parcelshopfinder_if"} */
/* {block "checkout_shipping_form_address_no_amazon_address_change"} */
class Block_938083510694d6e25ee96f8_81141166 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.xtc_href_link.php','function'=>'smarty_modifier_xtc_href_link',),));
?>

											<a class="btn btn-default btn-sm" href="<?php echo smarty_modifier_xtc_href_link('checkout_shipping_address.php','','SSL');?>
">
												<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_address_change'];?>

											</a>
										
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1243709477694d6e25ef2724_22647938', "checkout_shipping_form_address_no_amazon_parcelshopfinder_if", $this->tplIndex);
?>

										<?php
}
}
/* {/block "checkout_shipping_form_address_no_amazon_address_change"} */
/* {block "checkout_shipping_form_address_no_amazon"} */
class Block_1213049019694d6e25ee7b29_23218747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="row">
									<div class="col-md-12 indent-sm-1">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1716844037694d6e25ee83f9_05956446', "checkout_shipping_form_address_no_amazon_label", $this->tplIndex);
?>

									</div>
									<div class="col-md-12 indent-sm-1 space-1">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_938083510694d6e25ee96f8_81141166', "checkout_shipping_form_address_no_amazon_address_change", $this->tplIndex);
?>

									</div>
								</div>
							<?php
}
}
/* {/block "checkout_shipping_form_address_no_amazon"} */
/* {block "checkout_shipping_form_address_amazon_if"} */
class Block_2121487888694d6e25edc717_20047239 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_COOKIE['amazon_Login_accessToken'] && $_SESSION['payment'] === 'amazonadvpay') {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1785576985694d6e25ede4c4_53193923', "checkout_shipping_form_address_amazon_login", $this->tplIndex);
?>

						<?php } elseif ($_smarty_tpl->tpl_vars['amazon_checkout_address']->value) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861209705694d6e25ee04c1_99693355', "checkout_shipping_form_address_amazon", $this->tplIndex);
?>

						<?php } else { ?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213049019694d6e25ee7b29_23218747', "checkout_shipping_form_address_no_amazon", $this->tplIndex);
?>

						<?php }?>
					<?php
}
}
/* {/block "checkout_shipping_form_address_amazon_if"} */
/* {block "checkout_shipping_form_address"} */
class Block_1563215696694d6e25eda808_77285492 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<fieldset>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700480798694d6e25edafa6_54404920', "checkout_shipping_form_address_legend", $this->tplIndex);
?>

					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2121487888694d6e25edc717_20047239', "checkout_shipping_form_address_amazon_if", $this->tplIndex);
?>

				</fieldset>
			<?php
}
}
/* {/block "checkout_shipping_form_address"} */
/* {block "checkout_shipping_form_shipping_legend"} */
class Block_1941357175694d6e25ef76a6_38860260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<legend><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_shipping'];?>
</legend>
					<?php
}
}
/* {/block "checkout_shipping_form_shipping_legend"} */
/* {block "checkout_shipping_form_shipping_block"} */
class Block_1410199529694d6e25ef8b96_11734192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php echo $_smarty_tpl->tpl_vars['SHIPPING_BLOCK']->value;?>

							<?php
}
}
/* {/block "checkout_shipping_form_shipping_block"} */
/* {block "checkout_shipping_form_shipping"} */
class Block_564578967694d6e25ef6e90_78113302 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<fieldset data-gambio-widget="radio_selection" data-radio_selection-init="true">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1941357175694d6e25ef76a6_38860260', "checkout_shipping_form_shipping_legend", $this->tplIndex);
?>

					
					<div class="row">
						<div class="col-xs-12 indent-sm-1">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1410199529694d6e25ef8b96_11734192', "checkout_shipping_form_shipping_block", $this->tplIndex);
?>

						</div>
					</div>
				</fieldset>
			<?php
}
}
/* {/block "checkout_shipping_form_shipping"} */
/* {block "checkout_shipping_form_shipping_options_block"} */
class Block_1507553117694d6e25efb4c9_04558313 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo $_smarty_tpl->tpl_vars['SHIPPING_OPTIONS_BLOCK']->value;?>

                                <?php
}
}
/* {/block "checkout_shipping_form_shipping_options_block"} */
/* {block "checkout_shipping_form_shipping_options"} */
class Block_1768965853694d6e25ef9f84_49446248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['SHIPPING_OPTIONS_BLOCK']->value) {?>
                    <fieldset>
                        <legend><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_shipping_options'];?>
</legend>
                        <div class="row">
                            <div class="col-xs-12 indent-sm-1">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1507553117694d6e25efb4c9_04558313', "checkout_shipping_form_shipping_options_block", $this->tplIndex);
?>

                            </div>
                        </div>
                    </fieldset>
                <?php }?>
            <?php
}
}
/* {/block "checkout_shipping_form_shipping_options"} */
/* {block "checkout_shipping_form_buttons_back"} */
class Block_782692698694d6e25efd555_15542954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.xtc_href_link.php','function'=>'smarty_modifier_xtc_href_link',),));
?>

							<a href="<?php echo smarty_modifier_xtc_href_link('shopping_cart.php');?>
" class="btn btn-default btn-block"><?php echo $_smarty_tpl->tpl_vars['button']->value['back'];?>
</a>
						<?php
}
}
/* {/block "checkout_shipping_form_buttons_back"} */
/* {block "checkout_shipping_form_buttons_submit"} */
class Block_511085411694d6e25f00a27_09637729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<input type="submit" class="btn btn-primary btn-block" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['continue'];?>
">
						<?php
}
}
/* {/block "checkout_shipping_form_buttons_submit"} */
/* {block "checkout_shipping_form_buttons"} */
class Block_1975656166694d6e25efcd78_54368121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3 btn-back">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782692698694d6e25efd555_15542954', "checkout_shipping_form_buttons_back", $this->tplIndex);
?>

					</div>
					<div class="col-xs-6 col-sm-3 col-md-3 col-md-offset-<?php if ($_smarty_tpl->tpl_vars['amazon_checkout_address']->value && !$_SESSION['amz_loginpay']) {?>1<?php } else { ?>6<?php }?> text-right btn-continue">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_511085411694d6e25f00a27_09637729', "checkout_shipping_form_buttons_submit", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "checkout_shipping_form_buttons"} */
/* {block "checkout_shipping_form"} */
class Block_231958433694d6e25ed9ca0_07617044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<form action="<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION_URL']->value;?>
" method="post" class="form-horizontal">
			<input type="hidden" name="action" value="process" />
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1563215696694d6e25eda808_77285492', "checkout_shipping_form_address", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_564578967694d6e25ef6e90_78113302', "checkout_shipping_form_shipping", $this->tplIndex);
?>

            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768965853694d6e25ef9f84_49446248', "checkout_shipping_form_shipping_options", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1975656166694d6e25efcd78_54368121', "checkout_shipping_form_buttons", $this->tplIndex);
?>

		</form>
	<?php
}
}
/* {/block "checkout_shipping_form"} */
/* {block "checkout_shipping"} */
class Block_1487467341694d6e25ed4c67_06574317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_shipping' => 
  array (
    0 => 'Block_1487467341694d6e25ed4c67_06574317',
  ),
  'checkout_shipping_funnel' => 
  array (
    0 => 'Block_1993581156694d6e25ed5540_91905358',
  ),
  'checkout_shipping_alert' => 
  array (
    0 => 'Block_1151965422694d6e25ed7b94_02882925',
  ),
  'checkout_shipping_form' => 
  array (
    0 => 'Block_231958433694d6e25ed9ca0_07617044',
  ),
  'checkout_shipping_form_address' => 
  array (
    0 => 'Block_1563215696694d6e25eda808_77285492',
  ),
  'checkout_shipping_form_address_legend' => 
  array (
    0 => 'Block_1700480798694d6e25edafa6_54404920',
  ),
  'checkout_shipping_form_address_amazon_if' => 
  array (
    0 => 'Block_2121487888694d6e25edc717_20047239',
  ),
  'checkout_shipping_form_address_amazon_login' => 
  array (
    0 => 'Block_1785576985694d6e25ede4c4_53193923',
  ),
  'checkout_shipping_form_address_amazon' => 
  array (
    0 => 'Block_1861209705694d6e25ee04c1_99693355',
  ),
  'checkout_shipping_form_address_no_amazon' => 
  array (
    0 => 'Block_1213049019694d6e25ee7b29_23218747',
  ),
  'checkout_shipping_form_address_no_amazon_label' => 
  array (
    0 => 'Block_1716844037694d6e25ee83f9_05956446',
  ),
  'checkout_shipping_form_address_no_amazon_address_change' => 
  array (
    0 => 'Block_938083510694d6e25ee96f8_81141166',
  ),
  'checkout_shipping_form_address_no_amazon_parcelshopfinder_if' => 
  array (
    0 => 'Block_1243709477694d6e25ef2724_22647938',
  ),
  'checkout_shipping_form_address_no_amazon_parcelshopfinder' => 
  array (
    0 => 'Block_385511020694d6e25ef3719_66284089',
  ),
  'checkout_shipping_form_shipping' => 
  array (
    0 => 'Block_564578967694d6e25ef6e90_78113302',
  ),
  'checkout_shipping_form_shipping_legend' => 
  array (
    0 => 'Block_1941357175694d6e25ef76a6_38860260',
  ),
  'checkout_shipping_form_shipping_block' => 
  array (
    0 => 'Block_1410199529694d6e25ef8b96_11734192',
  ),
  'checkout_shipping_form_shipping_options' => 
  array (
    0 => 'Block_1768965853694d6e25ef9f84_49446248',
  ),
  'checkout_shipping_form_shipping_options_block' => 
  array (
    0 => 'Block_1507553117694d6e25efb4c9_04558313',
  ),
  'checkout_shipping_form_buttons' => 
  array (
    0 => 'Block_1975656166694d6e25efcd78_54368121',
  ),
  'checkout_shipping_form_buttons_back' => 
  array (
    0 => 'Block_782692698694d6e25efd555_15542954',
  ),
  'checkout_shipping_form_buttons_submit' => 
  array (
    0 => 'Block_511085411694d6e25f00a27_09637729',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1993581156694d6e25ed5540_91905358', "checkout_shipping_funnel", $this->tplIndex);
?>

	
	<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1151965422694d6e25ed7b94_02882925', "checkout_shipping_alert", $this->tplIndex);
?>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_231958433694d6e25ed9ca0_07617044', "checkout_shipping_form", $this->tplIndex);
?>

<?php
}
}
/* {/block "checkout_shipping"} */
}
