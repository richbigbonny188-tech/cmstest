<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\product_listing_swiper.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647c16286_70417859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a6aefef1fe804c772c50fcc6414a6c8b6dbdd5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_listing_swiper.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647c16286_70417859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1856207518694c0647bfda43_32014031', "product_listing_swiper");
}
/* {block "product_listing_swiper_product"} */
class Block_1080818912694c0647c01e64_02225409 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_images.php','function'=>'smarty_function_product_images',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_ribbons.php','function'=>'smarty_function_product_ribbons',),));
?>

							<?php echo smarty_function_product_images(array('product_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID'],'p_name'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_NAME'],'p_image'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE'],'out'=>'p_imgs'),$_smarty_tpl);?>

							<?php echo smarty_function_product_ribbons(array('showManufacturerImages'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['showManufacturerImages'],'showProductRibbons'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['showProductRibbons'],'product_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID'],'out'=>'ribbons'),$_smarty_tpl);?>

							<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['productTemplate']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_swiper'=>"true",'showRating'=>$_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['showRating'],'ribbons'=>$_smarty_tpl->tpl_vars['ribbons']->value,'p_image'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE'],'p_imgs'=>$_smarty_tpl->tpl_vars['p_imgs']->value,'p_url'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_LINK'],'p_img_title'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE_ALT'],'p_img_alt'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_IMAGE_ALT'],'p_meta'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHORTENED_META_DESCRIPTION'],'p_name_full'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_NAME'],'p_headline'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['HEADLINE'],'p_short_desc'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHORTENED_PRODUCTS_DESCRIPTION'],'p_price'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_PRICE'],'p_vpe'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_VPE'],'p_shipping_name'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['DELIVERY'],'p_shipping_range'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['SHIPPING_RANGE'],'data_index'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['INDEX'],'p_id'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_ID'],'p_model'=>$_smarty_tpl->tpl_vars['PRODUCT']->value['PRODUCTS_MODEL'],'SHOW_PRODUCTS_MODEL'=>$_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['SHOW_PRODUCTS_MODEL']), 0, true);
?>
						<?php
}
}
/* {/block "product_listing_swiper_product"} */
/* {block "product_listing_swiper_pagination"} */
class Block_164150143694c0647c14aa4_33308746 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['pagination'];?>
 swiper-pagination"></div>
					<?php
}
}
/* {/block "product_listing_swiper_pagination"} */
/* {block "product_listing_swiper_mustache"} */
class Block_504402137694c0647c15358_02661939 extends Smarty_Internal_Block
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
/* {/block "product_listing_swiper_mustache"} */
/* {block "product_listing_swiper"} */
class Block_1856207518694c0647bfda43_32014031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_listing_swiper' => 
  array (
    0 => 'Block_1856207518694c0647bfda43_32014031',
  ),
  'product_listing_swiper_product' => 
  array (
    0 => 'Block_1080818912694c0647c01e64_02225409',
  ),
  'product_listing_swiper_pagination' => 
  array (
    0 => 'Block_164150143694c0647c14aa4_33308746',
  ),
  'product_listing_swiper_mustache' => 
  array (
    0 => 'Block_504402137694c0647c15358_02661939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="productlist productlist-swiper row">
	
		<div <?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['widgets'];?>
>
			<div id="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['id'];?>
" class="swiper-container" <?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['engineAttr'];?>
="swiper" <?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['configuration'];?>
 >
				<div class="swiper-wrapper" <?php echo $_smarty_tpl->tpl_vars['maxHeight']->value;?>
 >
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['products'], 'PRODUCT');
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['PRODUCT']->value) {
$_smarty_tpl->tpl_vars['PRODUCT']->do_else = false;
?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1080818912694c0647c01e64_02225409', "product_listing_swiper_product", $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164150143694c0647c14aa4_33308746', "product_listing_swiper_pagination", $this->tplIndex);
?>

				</div>
	
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_504402137694c0647c15358_02661939', "product_listing_swiper_mustache", $this->tplIndex);
?>

		
			</div>
		
			<div class="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['prev'];?>
 swiper-button-prev"></div>
			<div class="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['SWIPER_DATA']['next'];?>
 swiper-button-next"></div>
		</div>
	</div>
<?php
}
}
/* {/block "product_listing_swiper"} */
}
