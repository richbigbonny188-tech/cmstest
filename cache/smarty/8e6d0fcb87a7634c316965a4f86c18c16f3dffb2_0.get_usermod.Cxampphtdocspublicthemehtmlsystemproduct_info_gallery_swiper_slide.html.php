<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_gallery_swiper_slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b5dfdb4_91487896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e6d0fcb87a7634c316965a4f86c18c16f3dffb2' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_gallery_swiper_slide.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b5dfdb4_91487896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71187261694d6d5b5bfbd0_75037761', "product_info_gallery_swiper_slide");
?>

<?php }
/* {block "product_info_gallery_swiper_slide_mobile"} */
class Block_1679773339694d6d5b5c3c35_10721181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="align-vertical">
							<img
									<?php if ($_smarty_tpl->tpl_vars['img_src2']->value) {?> data-thumb-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src2']->value);?>
"<?php }?>
									src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src']->value);?>
"
									<?php if ($_smarty_tpl->tpl_vars['img_alt']->value) {?> alt="Mobile Preview: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_alt']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_title']->value) {?> title="Mobile Preview: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_title']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_zoom']->value) {?> data-magnifier-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_zoom']->value);?>
"<?php }?>
							/>
						</div>
					<?php
}
}
/* {/block "product_info_gallery_swiper_slide_mobile"} */
/* {block "product_info_gallery_swiper_slide_thumbnail"} */
class Block_1043191662694d6d5b5ca883_70959389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="align-middle">
							<img
									class="img-responsive"
									<?php if ($_smarty_tpl->tpl_vars['img_src2']->value) {?> data-thumb-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src2']->value);?>
"<?php }?>
									src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src']->value);?>
"
									<?php if ($_smarty_tpl->tpl_vars['img_alt']->value) {?> alt="Preview: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_alt']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_title']->value) {?> title="Preview: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_title']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_zoom']->value) {?> data-magnifier-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_zoom']->value);?>
"<?php }?>
							/>
						</div>
					<?php
}
}
/* {/block "product_info_gallery_swiper_slide_thumbnail"} */
/* {block "product_info_gallery_swiper_slide_product"} */
class Block_698181764694d6d5b5d0a38_67454100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<img class="img-responsive"
								<?php if ($_smarty_tpl->tpl_vars['img_top']->value) {?> style="margin-top: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_top']->value);?>
px;"<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['img_src2']->value) {?> data-thumb-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src2']->value);?>
"<?php }?>
								src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src']->value);?>
"
								<?php if ($_smarty_tpl->tpl_vars['img_alt']->value) {?> alt="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_alt']->value);?>
"<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['img_title']->value) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_title']->value);?>
"<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['img_zoom']->value) {?> data-magnifier-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_zoom']->value);?>
"<?php }?>
						/>
					<?php
}
}
/* {/block "product_info_gallery_swiper_slide_product"} */
/* {block "product_info_gallery_swiper_slide_else"} */
class Block_377369896694d6d5b5d7563_33216307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a onclick="return false" href="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_zoom']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['img_title']->value;?>
">
							<img class="img-responsive"
									<?php if ($_smarty_tpl->tpl_vars['img_top']->value) {?> style="margin-top: <?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_top']->value);?>
px;"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_src2']->value) {?> data-thumb-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src2']->value);?>
"<?php }?>
									src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_src']->value);?>
"
									<?php if ($_smarty_tpl->tpl_vars['img_alt']->value) {?> alt="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_alt']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_title']->value) {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_title']->value);?>
"<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['img_zoom']->value) {?> data-magnifier-src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['img_zoom']->value);?>
"<?php }?>
							/>
						</a>
					<?php
}
}
/* {/block "product_info_gallery_swiper_slide_else"} */
/* {block "product_info_gallery_swiper_slide"} */
class Block_71187261694d6d5b5bfbd0_75037761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_gallery_swiper_slide' => 
  array (
    0 => 'Block_71187261694d6d5b5bfbd0_75037761',
  ),
  'product_info_gallery_swiper_slide_mobile' => 
  array (
    0 => 'Block_1679773339694d6d5b5c3c35_10721181',
  ),
  'product_info_gallery_swiper_slide_thumbnail' => 
  array (
    0 => 'Block_1043191662694d6d5b5ca883_70959389',
  ),
  'product_info_gallery_swiper_slide_product' => 
  array (
    0 => 'Block_698181764694d6d5b5d0a38_67454100',
  ),
  'product_info_gallery_swiper_slide_else' => 
  array (
    0 => 'Block_377369896694d6d5b5d7563_33216307',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['is_list']->value === 'true') {?>
		<li class="thumbnails swiper-slide" <?php if ($_smarty_tpl->tpl_vars['img_id']->value) {?> data-index="<?php echo $_smarty_tpl->tpl_vars['img_id']->value;?>
"<?php }?>>
	<?php } else { ?>
		<div class="swiper-slide" <?php if ($_smarty_tpl->tpl_vars['img_id']->value) {?> data-index="<?php echo $_smarty_tpl->tpl_vars['img_id']->value;?>
"<?php }?>>
	<?php }?>
			<div class="swiper-slide-inside <?php if ($_smarty_tpl->tpl_vars['swiperId']->value == 'product_thumbnail_swiper') {?>vertical<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['swiperId']->value == 'product_thumbnail_swiper_mobile') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679773339694d6d5b5c3c35_10721181', "product_info_gallery_swiper_slide_mobile", $this->tplIndex);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['swiperId']->value == 'product_thumbnail_swiper' || $_smarty_tpl->tpl_vars['swiperId']->value == 'product-info-layer-thumbnails') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043191662694d6d5b5ca883_70959389', "product_info_gallery_swiper_slide_thumbnail", $this->tplIndex);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['swiperId']->value === 'product-info-layer-image') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_698181764694d6d5b5d0a38_67454100', "product_info_gallery_swiper_slide_product", $this->tplIndex);
?>

				<?php } else { ?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377369896694d6d5b5d7563_33216307', "product_info_gallery_swiper_slide_else", $this->tplIndex);
?>

				<?php }?>
			</div>
	<?php if ($_smarty_tpl->tpl_vars['is_list']->value === 'true') {?>
		</li>
	<?php } else { ?>
		</div>
	<?php }
}
}
/* {/block "product_info_gallery_swiper_slide"} */
}
