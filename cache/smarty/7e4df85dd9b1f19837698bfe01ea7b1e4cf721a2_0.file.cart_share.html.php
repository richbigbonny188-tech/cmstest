<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:08
  from 'C:\xampp\htdocs\public\theme\html\system\cart_share.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd479f704_67985274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4df85dd9b1f19837698bfe01ea7b1e4cf721a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\cart_share.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd479f704_67985274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"shared_shopping_cart"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['ACTIVATE_SHARED_CART']->value == 'true') {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1452861640694d6dd4790d27_45555668', "cart_share");
?>

<?php }
}
/* {block "cart_share_url_label"} */
class Block_1871227679694d6dd4792fa2_02351644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<label for="shared_cart_url">URL:</label>
									<?php
}
}
/* {/block "cart_share_url_label"} */
/* {block "cart_share_url_input"} */
class Block_777875703694d6dd4794bf0_62351625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<input type="text" value="" class="form-control shared_cart_url" id="shared_cart_url" />
									<?php
}
}
/* {/block "cart_share_url_input"} */
/* {block "cart_share_url"} */
class Block_641756337694d6dd4792808_61419566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="row">
								<div class="shared_cart_label">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1871227679694d6dd4792fa2_02351644', "cart_share_url_label", $this->tplIndex);
?>

								</div>
								<div class="col-sm-12">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_777875703694d6dd4794bf0_62351625', "cart_share_url_input", $this->tplIndex);
?>

								</div>
							</div>
						<?php
}
}
/* {/block "cart_share_url"} */
/* {block "cart_share_generation_button"} */
class Block_1861624141694d6dd4795eb1_80476561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="row">
								<div class="col-sm-12">
									<input data-gambio-_widget="share_cart" data-clipboard-target="#shared_cart_url" type="button" value="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_copy'];?>
" class="btn btn-primary" />
								</div>
							</div>
						<?php
}
}
/* {/block "cart_share_generation_button"} */
/* {block "cart_share_notice"} */
class Block_1760504235694d6dd479bcd0_35192143 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="text-center text">
										<p><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_notice'];?>
</p>
									</div>
								<?php
}
}
/* {/block "cart_share_notice"} */
/* {block "cart_share_notice_wrapper"} */
class Block_390533113694d6dd479b1e9_19678031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="share-cart-response-wrapper" style="display: none;">
								<!-- NOTICE -->
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760504235694d6dd479bcd0_35192143', "cart_share_notice", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "cart_share_notice_wrapper"} */
/* {block "cart_share_form"} */
class Block_2136733735694d6dd4791f74_78823705 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<form action="shop.php?do=SharedShoppingCart/StoreShoppingCart">
					<div class="share-cart-content-wrapper">
		
						<!-- URL INPUT FIELD -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641756337694d6dd4792808_61419566', "cart_share_url", $this->tplIndex);
?>

		
						<!-- LINK GENERATION BUTTON -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861624141694d6dd4795eb1_80476561', "cart_share_generation_button", $this->tplIndex);
?>

		
						<!-- COPY WRAPPER -->
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_390533113694d6dd479b1e9_19678031', "cart_share_notice_wrapper", $this->tplIndex);
?>

					</div>
				</form>
			<?php
}
}
/* {/block "cart_share_form"} */
/* {block "cart_share"} */
class Block_1452861640694d6dd4790d27_45555668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_share' => 
  array (
    0 => 'Block_1452861640694d6dd4790d27_45555668',
  ),
  'cart_share_form' => 
  array (
    0 => 'Block_2136733735694d6dd4791f74_78823705',
  ),
  'cart_share_url' => 
  array (
    0 => 'Block_641756337694d6dd4792808_61419566',
  ),
  'cart_share_url_label' => 
  array (
    0 => 'Block_1871227679694d6dd4792fa2_02351644',
  ),
  'cart_share_url_input' => 
  array (
    0 => 'Block_777875703694d6dd4794bf0_62351625',
  ),
  'cart_share_generation_button' => 
  array (
    0 => 'Block_1861624141694d6dd4795eb1_80476561',
  ),
  'cart_share_notice_wrapper' => 
  array (
    0 => 'Block_390533113694d6dd479b1e9_19678031',
  ),
  'cart_share_notice' => 
  array (
    0 => 'Block_1760504235694d6dd479bcd0_35192143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="redeem-code-wrapper share-cart-layer">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2136733735694d6dd4791f74_78823705', "cart_share_form", $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block "cart_share"} */
}
