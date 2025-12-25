<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\image_slider.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06473ede92_63601336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55bcc87abc9566f86e61922316905bb3a824c076' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\image_slider.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."image_slider_scripts.html' => 1,
  ),
),false)) {
function content_694c06473ede92_63601336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035727725694c06473e2b35_93136949', "image_slider");
?>

<?php }
/* {block "image_slider"} */
class Block_2035727725694c06473e2b35_93136949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image_slider' => 
  array (
    0 => 'Block_2035727725694c06473e2b35_93136949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="swiper-container" data-gambio-widget="swiper" data-swiper-disable-translucence-fix="true" data-swiper-breakpoints='[{"breakpoint": 100, "usePreviewBullets": true, "slidesPerView": 1}]' data-swiper-slider-options='{"effect": "fade", "speed": 600, "nextButton": ".js-teaser-slider-next", "prevButton": ".js-teaser-slider-prev", "autoplay": <?php echo $_smarty_tpl->tpl_vars['content_data']->value['SET_INTERVAL'];?>
}'>
		<div class="swiper-wrapper">
					</div>
		<div class="swiper-pagination"></div>
		<div class="js-teaser-slider-prev swiper-button-prev"></div>
		<div class="js-teaser-slider-next swiper-button-next"></div>
	</div>
	
		<?php if ($_smarty_tpl->tpl_vars['content_data']->value['json_serialized_slider']) {?>
		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."image_slider_scripts.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php }
}
}
/* {/block "image_slider"} */
}
