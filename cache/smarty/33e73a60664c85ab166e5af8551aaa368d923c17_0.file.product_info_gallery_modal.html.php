<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_gallery_modal.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b609da5_85325813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e73a60664c85ab166e5af8551aaa368d923c17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_gallery_modal.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_gallery_swiper.html' => 2,
  ),
),false)) {
function content_694d6d5b609da5_85325813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1076910599694d6d5b601452_87816961', "product_info_gallery_modal");
?>

<?php }
/* {block "product_info_gallery_modal_thumbnails"} */
class Block_173134749694d6d5b606b43_25227350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="product-info-layer-thumbnails">
				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('swiperId'=>"product-info-layer-thumbnails",'swiperImages'=>$_smarty_tpl->tpl_vars['thumbnails']->value,'swiperTarget'=>"#product-info-layer-image",'swiperOptions'=>", \"spaceBetween\": 10, \"loop\": false, \"slidesPerView\": \"auto\", \"autoplay\": null, \"initialSlide\": \"\"",'additionalData'=>"data-swiper-breakpoints=\"[]\""), 0, true);
?>
			</div>
		<?php
}
}
/* {/block "product_info_gallery_modal_thumbnails"} */
/* {block "product_info_gallery_modal"} */
class Block_1076910599694d6d5b601452_87816961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_gallery_modal' => 
  array (
    0 => 'Block_1076910599694d6d5b601452_87816961',
  ),
  'product_info_gallery_modal_thumbnails' => 
  array (
    0 => 'Block_173134749694d6d5b606b43_25227350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<div class="product-info-layer-image">
		<div class="product-info-image-inside">
						<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) > 0) {?>
				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_swiper.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('swiperId'=>"product-info-layer-image",'popup'=>"true",'swiperImages'=>$_smarty_tpl->tpl_vars['images']->value,'swiperControls'=>"#product-info-layer-thumbnails",'showControls'=>"true",'swiperOptions'=>", \"effect\": \"fade\", \"autoplay\": null, \"initialSlide\": \"\""), 0, true);
?>
			<?php }?>
					</div>
	</div>

		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['thumbnails']->value) > 1) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173134749694d6d5b606b43_25227350', "product_info_gallery_modal_thumbnails", $this->tplIndex);
?>

	<?php }?>
	<?php
}
}
/* {/block "product_info_gallery_modal"} */
}
