<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_gallery_swiper.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b5a0582_56911559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dad2596089802efd21652a6cfd6fde97925fbbc' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_gallery_swiper.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_gallery_swiper_slide.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_listing_product.html' => 1,
  ),
),false)) {
function content_694d6d5b5a0582_56911559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"swiper",'name'=>"swiper"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956741812694d6d5b546129_47655266', "magnific_popup_jquery_configuration");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2008432352694d6d5b54b2c1_18554919', "product_info_gallery_swiper");
?>

<?php }
/* {block "magnific_popup_jquery_configuration"} */
class Block_956741812694d6d5b546129_47655266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'magnific_popup_jquery_configuration' => 
  array (
    0 => 'Block_956741812694d6d5b546129_47655266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['swiperImages']->value) {?>
		<?php echo '<script'; ?>
>
            
            window.addEventListener('DOMContentLoaded', function(){
				$.extend(true, $.magnificPopup.defaults, { 
					tClose: '<?php echo $_smarty_tpl->tpl_vars['swiper']->value['close_on_esc'];?>
', // Alt text on close button
					tLoading: '<?php echo $_smarty_tpl->tpl_vars['swiper']->value['loading'];?>
', // Text that is displayed during loading. Can contain %curr% and %total% keys
					
					gallery: { 
						tPrev: '<?php echo $_smarty_tpl->tpl_vars['swiper']->value['previous_button'];?>
', // Alt text on left arrow
						tNext: '<?php echo $_smarty_tpl->tpl_vars['swiper']->value['next_button'];?>
', // Alt text on right arrow
						tCounter: '<?php echo $_smarty_tpl->tpl_vars['swiper']->value['counter'];?>
' // Markup for "1 of 7" counter
						
					}
				});
			});
            
		<?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "magnific_popup_jquery_configuration"} */
/* {block "product_info_gallery_swiper_products_open_if"} */
class Block_1277873498694d6d5b54bb79_53421771 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['swiperProducts']->value) {?>
			<div class="productlist-swiper row">
		<?php }?>
	<?php
}
}
/* {/block "product_info_gallery_swiper_products_open_if"} */
/* {block "product_info_gallery_swiper_images_src_assign"} */
class Block_1423972289694d6d5b551da3_76469472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_assignInScope('image_src', $_smarty_tpl->tpl_vars['image_data']->value['IMAGE'] && $_smarty_tpl->tpl_vars['image_data']->value['IMAGE'] != '' ? $_smarty_tpl->tpl_vars['image_data']->value['IMAGE'] : '');?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_images_src_assign"} */
/* {block "product_info_gallery_swiper_images_popup_assign"} */
class Block_330994993694d6d5b556487_93727637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

											<?php $_smarty_tpl->_assignInScope('image_src', smarty_modifier_replace($_smarty_tpl->tpl_vars['image_src']->value,'info_images','popup_images'));?>
										<?php
}
}
/* {/block "product_info_gallery_swiper_images_popup_assign"} */
/* {block "product_info_gallery_swiper_images_popup_if"} */
class Block_774595907694d6d5b5551c2_57601432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['popup']->value == 'true') {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_330994993694d6d5b556487_93727637', "product_info_gallery_swiper_images_popup_assign", $this->tplIndex);
?>

									<?php }?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_images_popup_if"} */
/* {block "product_info_gallery_swiper_images_template_include"} */
class Block_1125176903694d6d5b55e337_66004454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<?php ob_start();
echo $_smarty_tpl->tpl_vars['image_data']->value['IMAGE_NR'] ? $_smarty_tpl->tpl_vars['image_data']->value['IMAGE_NR'] : "0";
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['image_data']->value['PADDING_TOP'] ? $_smarty_tpl->tpl_vars['image_data']->value['PADDING_TOP'] : "0";
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['image_data']->value['ZOOM_IMAGE'] ? $_smarty_tpl->tpl_vars['image_data']->value['ZOOM_IMAGE'] : '';
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper_slide.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('img_id'=>$_prefixVariable1,'img_top'=>$_prefixVariable2,'img_src'=>$_smarty_tpl->tpl_vars['image_src']->value,'img_alt'=>smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['image_data']->value['IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_data']->value['PRODUCTS_NAME'] ?? null : $tmp),'"','&quot;'),'img_title'=>smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['image_data']->value['IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_data']->value['PRODUCTS_NAME'] ?? null : $tmp),'"','&quot;'),'img_zoom'=>$_prefixVariable3), 0, true);
?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_images_template_include"} */
/* {block "product_info_gallery_swiper_images"} */
class Block_2140561329694d6d5b550255_52464808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['swiperImages']->value, 'image_data');
$_smarty_tpl->tpl_vars['image_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_data']->value) {
$_smarty_tpl->tpl_vars['image_data']->do_else = false;
?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1423972289694d6d5b551da3_76469472', "product_info_gallery_swiper_images_src_assign", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_774595907694d6d5b5551c2_57601432', "product_info_gallery_swiper_images_popup_if", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1125176903694d6d5b55e337_66004454', "product_info_gallery_swiper_images_template_include", $this->tplIndex);
?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
}
/* {/block "product_info_gallery_swiper_images"} */
/* {block "product_info_gallery_swiper_meta_assign"} */
class Block_1749897872694d6d5b56afb8_99421644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_META_DESCRIPTION']) {?>
										<?php $_smarty_tpl->_assignInScope('p_meta', smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_META_DESCRIPTION'],80,"..."),'"','&quot;'));?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('p_meta', $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME']);?>
									<?php }?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_meta_assign"} */
/* {block "product_info_gallery_swiper_short_description_assign"} */
class Block_729176639694d6d5b56f831_54068775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<?php if ($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_SHORT_DESCRIPTION']) {?>
										<?php $_smarty_tpl->_assignInScope('p_short_desc', smarty_modifier_replace(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_SHORT_DESCRIPTION']),80,"..."),'"','&quot;'));?>
									<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_DESCRIPTION']) {?>
										<?php $_smarty_tpl->_assignInScope('p_short_desc', smarty_modifier_replace(smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_DESCRIPTION']),80,"..."),'"','&quot;'));?>
									<?php } else { ?>
										<?php $_smarty_tpl->_assignInScope('p_short_desc', '');?>
									<?php }?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_short_description_assign"} */
/* {block "product_info_gallery_swiper_product_images_plugin"} */
class Block_1434272988694d6d5b57bbb2_84494133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_images.php','function'=>'smarty_function_product_images',),));
?>

									<?php echo smarty_function_product_images(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_ID'],'out'=>'imagetest','p_name'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME'],'p_image'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_IMAGE']),$_smarty_tpl);?>

								<?php
}
}
/* {/block "product_info_gallery_swiper_product_images_plugin"} */
/* {block "product_info_gallery_swiper_product_ribbons_plugin"} */
class Block_1117172587694d6d5b5825d9_17841514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_ribbons.php','function'=>'smarty_function_product_ribbons',),));
?>

									<?php echo smarty_function_product_ribbons(array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_ID'],'out'=>'arr_ribbons'),$_smarty_tpl);?>

								<?php
}
}
/* {/block "product_info_gallery_swiper_product_ribbons_plugin"} */
/* {block "product_info_gallery_swiper_product_template_include"} */
class Block_2099664235694d6d5b5840a9_96155888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

									<?php ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_IMAGE'] ? $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_IMAGE'] : '';
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_VPE'] ? $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_VPE'] : '';
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing_product.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_swiper'=>"true",'ribbons'=>'arr_ribbons','p_image'=>$_prefixVariable4,'p_imgs'=>$_smarty_tpl->tpl_vars['imagetest']->value,'p_url'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_LINK'],'p_img_title'=>smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME'] ?? null : $tmp),'"','&quot;'),'p_img_alt'=>smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME'] ?? null : $tmp),'"','&quot;'),'p_meta'=>$_smarty_tpl->tpl_vars['p_meta']->value,'p_name_full'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME'],'p_headline'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_NAME'],$_smarty_tpl->tpl_vars['content_data']->value['TRUNCATE_PRODUCTS_NAME'],"..."),'p_short_desc'=>$_smarty_tpl->tpl_vars['p_short_desc']->value,'p_price'=>$_smarty_tpl->tpl_vars['product']->value['PRODUCTS_PRICE'],'p_vpe'=>$_prefixVariable5,'data_index'=>(($_smarty_tpl->tpl_vars['content_data']->value['ID_PREFIX']).("_")).($_smarty_tpl->tpl_vars['product']->value['PRODUCTS_ID'])), 0, true);
?>
								<?php
}
}
/* {/block "product_info_gallery_swiper_product_template_include"} */
/* {block "product_info_gallery_swiper_products"} */
class Block_222107635694d6d5b5697a8_74834657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['swiperProducts']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1749897872694d6d5b56afb8_99421644', "product_info_gallery_swiper_meta_assign", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_729176639694d6d5b56f831_54068775', "product_info_gallery_swiper_short_description_assign", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1434272988694d6d5b57bbb2_84494133', "product_info_gallery_swiper_product_images_plugin", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117172587694d6d5b5825d9_17841514', "product_info_gallery_swiper_product_ribbons_plugin", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2099664235694d6d5b5840a9_96155888', "product_info_gallery_swiper_product_template_include", $this->tplIndex);
?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php
}
}
/* {/block "product_info_gallery_swiper_products"} */
/* {block "product_info_gallery_swiper_images_if"} */
class Block_1745121975694d6d5b54e912_21661924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['swiperImages']->value) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140561329694d6d5b550255_52464808', "product_info_gallery_swiper_images", $this->tplIndex);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['swiperProducts']->value) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_222107635694d6d5b5697a8_74834657', "product_info_gallery_swiper_products", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "product_info_gallery_swiper_images_if"} */
/* {block "product_info_gallery_swiper_mustache"} */
class Block_712516710694d6d5b593ce1_44964547 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php echo '<script'; ?>
 type="text/mustache">
					<template>
						
							{{#.}}
								<div class="swiper-slide {{className}}">
									<div class="swiper-slide-inside">
										<img {{{srcattr}}} alt="{{title}}" title="{{title}}" />
									</div>
								</div>
							{{/.}}
						
					</template>
				<?php echo '</script'; ?>
>
			<?php
}
}
/* {/block "product_info_gallery_swiper_mustache"} */
/* {block "product_info_gallery_swiper_controls_prev"} */
class Block_2001381418694d6d5b59b9a2_96511311 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="js-<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
-button-prev swiper-button-prev"></div>
			<?php
}
}
/* {/block "product_info_gallery_swiper_controls_prev"} */
/* {block "product_info_gallery_swiper_controls_next"} */
class Block_1095255005694d6d5b59cad9_75321264 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="js-<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
-button-next swiper-button-next"></div>
			<?php
}
}
/* {/block "product_info_gallery_swiper_controls_next"} */
/* {block "product_info_gallery_swiper_controls_if"} */
class Block_1014347244694d6d5b594e60_30498023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (sizeof($_smarty_tpl->tpl_vars['swiperImages']->value) > 4 || ($_smarty_tpl->tpl_vars['showControls']->value === 'true' && sizeof($_smarty_tpl->tpl_vars['swiperImages']->value) > 1)) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001381418694d6d5b59b9a2_96511311', "product_info_gallery_swiper_controls_prev", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1095255005694d6d5b59cad9_75321264', "product_info_gallery_swiper_controls_next", $this->tplIndex);
?>

		<?php }?>
	<?php
}
}
/* {/block "product_info_gallery_swiper_controls_if"} */
/* {block "product_info_gallery_swiper_products_close_if"} */
class Block_1913518923694d6d5b59e163_41435475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['swiperProducts']->value) {?>
			</div>
		<?php }?>
	<?php
}
}
/* {/block "product_info_gallery_swiper_products_close_if"} */
/* {block "product_info_gallery_swiper"} */
class Block_2008432352694d6d5b54b2c1_18554919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_gallery_swiper' => 
  array (
    0 => 'Block_2008432352694d6d5b54b2c1_18554919',
  ),
  'product_info_gallery_swiper_products_open_if' => 
  array (
    0 => 'Block_1277873498694d6d5b54bb79_53421771',
  ),
  'product_info_gallery_swiper_images_if' => 
  array (
    0 => 'Block_1745121975694d6d5b54e912_21661924',
  ),
  'product_info_gallery_swiper_images' => 
  array (
    0 => 'Block_2140561329694d6d5b550255_52464808',
  ),
  'product_info_gallery_swiper_images_src_assign' => 
  array (
    0 => 'Block_1423972289694d6d5b551da3_76469472',
  ),
  'product_info_gallery_swiper_images_popup_if' => 
  array (
    0 => 'Block_774595907694d6d5b5551c2_57601432',
  ),
  'product_info_gallery_swiper_images_popup_assign' => 
  array (
    0 => 'Block_330994993694d6d5b556487_93727637',
  ),
  'product_info_gallery_swiper_images_template_include' => 
  array (
    0 => 'Block_1125176903694d6d5b55e337_66004454',
  ),
  'product_info_gallery_swiper_products' => 
  array (
    0 => 'Block_222107635694d6d5b5697a8_74834657',
  ),
  'product_info_gallery_swiper_meta_assign' => 
  array (
    0 => 'Block_1749897872694d6d5b56afb8_99421644',
  ),
  'product_info_gallery_swiper_short_description_assign' => 
  array (
    0 => 'Block_729176639694d6d5b56f831_54068775',
  ),
  'product_info_gallery_swiper_product_images_plugin' => 
  array (
    0 => 'Block_1434272988694d6d5b57bbb2_84494133',
  ),
  'product_info_gallery_swiper_product_ribbons_plugin' => 
  array (
    0 => 'Block_1117172587694d6d5b5825d9_17841514',
  ),
  'product_info_gallery_swiper_product_template_include' => 
  array (
    0 => 'Block_2099664235694d6d5b5840a9_96155888',
  ),
  'product_info_gallery_swiper_mustache' => 
  array (
    0 => 'Block_712516710694d6d5b593ce1_44964547',
  ),
  'product_info_gallery_swiper_controls_if' => 
  array (
    0 => 'Block_1014347244694d6d5b594e60_30498023',
  ),
  'product_info_gallery_swiper_controls_prev' => 
  array (
    0 => 'Block_2001381418694d6d5b59b9a2_96511311',
  ),
  'product_info_gallery_swiper_controls_next' => 
  array (
    0 => 'Block_1095255005694d6d5b59cad9_75321264',
  ),
  'product_info_gallery_swiper_products_close_if' => 
  array (
    0 => 'Block_1913518923694d6d5b59e163_41435475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1277873498694d6d5b54bb79_53421771', "product_info_gallery_swiper_products_open_if", $this->tplIndex);
?>

	
	<div<?php if ($_smarty_tpl->tpl_vars['hover']->value === 'true') {?> data-gambio-<?php if ($_smarty_tpl->tpl_vars['startWidget']->value) {?>widget<?php } else { ?>_widget<?php }?>="product_hover"<?php }?>>
		<div id="<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
" class="swiper-container" data-gambio-<?php if ($_smarty_tpl->tpl_vars['startWidget']->value) {?>widget<?php } else { ?>_widget<?php }?>="swiper" data-swiper-target="<?php echo $_smarty_tpl->tpl_vars['swiperTarget']->value;?>
" data-swiper-controls="<?php echo $_smarty_tpl->tpl_vars['swiperControls']->value;?>
" data-swiper-slider-options='{<?php if ($_smarty_tpl->tpl_vars['swiperImages']->value) {?>"breakpoints": [], "initialSlide": <?php if ($_smarty_tpl->tpl_vars['initialSlideIndex']->value) {
echo $_smarty_tpl->tpl_vars['initialSlideIndex']->value;
} else { ?>0<?php }?>, <?php }?>"pagination": ".js-<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
-pagination", "nextButton": ".js-<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
-button-next", "prevButton": ".js-<?php echo $_smarty_tpl->tpl_vars['swiperId']->value;?>
-button-prev"<?php echo $_smarty_tpl->tpl_vars['swiperOptions']->value;?>
}' <?php echo $_smarty_tpl->tpl_vars['additionalData']->value;?>
>
			<div class="swiper-wrapper"<?php if ($_smarty_tpl->tpl_vars['maxHeight']->value) {?> style="height: <?php echo $_smarty_tpl->tpl_vars['maxHeight']->value;?>
px;"<?php }?> >
			
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745121975694d6d5b54e912_21661924', "product_info_gallery_swiper_images_if", $this->tplIndex);
?>

			</div>
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712516710694d6d5b593ce1_44964547', "product_info_gallery_swiper_mustache", $this->tplIndex);
?>

			
	</div>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1014347244694d6d5b594e60_30498023', "product_info_gallery_swiper_controls_if", $this->tplIndex);
?>

	
	</div>
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1913518923694d6d5b59e163_41435475', "product_info_gallery_swiper_products_close_if", $this->tplIndex);
?>

<?php
}
}
/* {/block "product_info_gallery_swiper"} */
}
