<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:00:30
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_gallery_main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6daea19cc3_36524331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c9752cee239abe8a47a603e2b32e257078266bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_gallery_main.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_gallery_swiper.html' => 3,
  ),
),false)) {
function content_694d6daea19cc3_36524331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) > 0) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403499468694d6dae9fc6f5_57933237', "product_info_gallery_image");
?>

<?php }?>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['thumbnails']->value) > 1) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1286180258694d6daea154b3_61611954', "product_info_gallery_thumbnails");
?>

<?php }
}
/* {block "product_info_gallery_image"} */
class Block_1403499468694d6dae9fc6f5_57933237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_gallery_image' => 
  array (
    0 => 'Block_1403499468694d6dae9fc6f5_57933237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

		<div class="product-info-image <?php if (smarty_modifier_gm_get_conf('SHOW_ZOOM') === 'true') {?>has-zoom<?php }?>" <?php if (smarty_modifier_gm_get_conf('SHOW_ZOOM') === 'true') {?>data-gambio-widget="<?php if (smarty_modifier_gm_get_conf('GALLERY_LIGHTBOX') === 'true') {?>image_gallery_lightbox<?php } else { ?>image_gallery<?php }?> magnifier" data-magnifier-target=".magnifier-target"<?php } else { ?>data-gambio-widget="<?php if (smarty_modifier_gm_get_conf('GALLERY_LIGHTBOX') === 'true') {?>image_gallery_lightbox<?php } else { ?>image_gallery<?php }?>"<?php }?>>
			<div class="product-info-image-inside">
				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('swiperId'=>"product_image_swiper",'startWidget'=>"true",'swiperImages'=>$_smarty_tpl->tpl_vars['images']->value,'swiperControls'=>"#product_thumbnail_swiper, #product_thumbnail_swiper_mobile",'swiperOptions'=>", \"effect\": \"fade\", \"autoplay\": null"), 0, true);
?>
			</div>
			<input type="hidden" id="current-gallery-hash" value="<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
">
		</div>
	<?php
}
}
/* {/block "product_info_gallery_image"} */
/* {block "product_info_gallery_thumbnails"} */
class Block_1286180258694d6daea154b3_61611954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_gallery_thumbnails' => 
  array (
    0 => 'Block_1286180258694d6daea154b3_61611954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="product-info-thumbnails hidden-xs hidden-sm swiper-vertical">
			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('swiperId'=>"product_thumbnail_swiper",'startWidget'=>"true",'swiperImages'=>$_smarty_tpl->tpl_vars['thumbnails']->value,'swiperTarget'=>"#product_image_swiper",'swiperOptions'=>", \"spaceBetween\": 10, \"loop\": false, \"direction\": \"vertical\", \"slidesPerView\": 4, \"autoplay\": null",'additionalData'=>"data-swiper-breakpoints=\"[]\""), 0, true);
?>
		</div>
		<div class="product-info-thumbnails-mobile col-xs-12 visible-xs-block visible-sm-block">
			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('swiperId'=>"product_thumbnail_swiper_mobile",'startWidget'=>"true",'swiperImages'=>$_smarty_tpl->tpl_vars['thumbnails']->value,'swiperTarget'=>"#product_image_swiper",'swiperOptions'=>", \"spaceBetween\": 10, \"loop\": false, \"direction\": \"horizontal\", \"slidesPerView\": 4, \"autoplay\": null",'additionalData'=>"data-swiper-breakpoints=\"[]\""), 0, true);
?>
		</div>
	<?php
}
}
/* {/block "product_info_gallery_thumbnails"} */
}
