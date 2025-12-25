<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_listing.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647ce9e43_60357063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c27be5d4b25cc392fcd28d558bf33f190cfff641' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_listing.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647ce9e43_60357063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1343444942694c0647cdbfa4_59146252', "product_listing");
}
/* {block "product_listing_product_image"} */
class Block_1618861429694c0647cdc815_72746021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_images.php','function'=>'smarty_function_product_images',),));
?>

				<?php echo smarty_function_product_images(array('product_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID'],'p_name'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_NAME'],'p_image'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE'],'out'=>'p_imgs'),$_smarty_tpl);?>

			<?php
}
}
/* {/block "product_listing_product_image"} */
/* {block "product_listing_product_ribbon"} */
class Block_325532972694c0647ce0247_38098625 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_ribbons.php','function'=>'smarty_function_product_ribbons',),));
?>

				<?php echo smarty_function_product_ribbons(array('product_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID'],'showManufacturerImages'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['showManufacturerImages'],'showProductRibbons'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['showProductRibbons'],'out'=>'ribbons'),$_smarty_tpl);?>

			<?php
}
}
/* {/block "product_listing_product_ribbon"} */
/* {block "product_listing_product"} */
class Block_1185840749694c0647ce3aa2_97381822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['productTemplate']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_swiper'=>"true",'showRating'=>$_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['showRating'],'ribbons'=>$_smarty_tpl->tpl_vars['ribbons']->value,'p_image'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE'],'p_imgs'=>$_smarty_tpl->tpl_vars['p_imgs']->value,'p_url'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_LINK'],'p_img_title'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE_ALT'],'p_img_alt'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE_ALT'],'p_meta'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHORTENED_META_DESCRIPTION'],'p_name_full'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_NAME'],'p_headline'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['HEADLINE'],'p_short_desc'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHORTENED_PRODUCTS_DESCRIPTION'],'p_price'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_PRICE'],'p_vpe'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_VPE'],'p_shipping_name'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['DELIVERY'],'p_shipping_range'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHIPPING_RANGE'],'data_index'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['INDEX'],'p_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID']), 0, true);
?>
			<?php
}
}
/* {/block "product_listing_product"} */
/* {block "snippets_product_listing_listing_product_mustache"} */
class Block_1189496473694c0647ce8e74_81702434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo '<script'; ?>
 type="text/mustache">
				<template>
										
						{{#.}}
							<div class="swiper-slide {{className}}">
								<div class="swiper-slide-inside">
									<img class="img-responsive" {{{srcattr}}} alt="{{title}}" title="{{title}}" data-magnifier-src="{{src}}" />
								</div>
							</div>
						{{/.}}
					
									</template>
			<?php echo '</script'; ?>
>
		<?php
}
}
/* {/block "snippets_product_listing_listing_product_mustache"} */
/* {block "product_listing"} */
class Block_1343444942694c0647cdbfa4_59146252 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_listing' => 
  array (
    0 => 'Block_1343444942694c0647cdbfa4_59146252',
  ),
  'product_listing_product_image' => 
  array (
    0 => 'Block_1618861429694c0647cdc815_72746021',
  ),
  'product_listing_product_ribbon' => 
  array (
    0 => 'Block_325532972694c0647ce0247_38098625',
  ),
  'product_listing_product' => 
  array (
    0 => 'Block_1185840749694c0647ce3aa2_97381822',
  ),
  'snippets_product_listing_listing_product_mustache' => 
  array (
    0 => 'Block_1189496473694c0647ce8e74_81702434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="productlist productlist-viewmode productlist-viewmode-grid row" data-gambio-widget="product_hover">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['products'], 'PRODUCT');
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = false;
?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1618861429694c0647cdc815_72746021', "product_listing_product_image", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_325532972694c0647ce0247_38098625', "product_listing_product_ribbon", $this->tplIndex);
?>

		
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1185840749694c0647ce3aa2_97381822', "product_listing_product", $this->tplIndex);
?>

		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189496473694c0647ce8e74_81702434', "snippets_product_listing_listing_product_mustache", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "product_listing"} */
}
