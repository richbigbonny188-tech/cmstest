<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemimage_slider_scripts.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06473f6f32_10444687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7b915a4e5e5a783247960fe4bcecfacf33acdbe' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemimage_slider_scripts.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06473f6f32_10444687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566442439694c06473f6036_30924865', "image_slider_scripts");
}
/* {block "image_slider_scripts"} */
class Block_1566442439694c06473f6036_30924865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'image_slider_scripts' => 
  array (
    0 => 'Block_1566442439694c06473f6036_30924865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="application/json" id="json-serialized-slider"><?php echo $_smarty_tpl->tpl_vars['content_data']->value['json_serialized_slider'];
echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="application/json" id="json-placeholder-slide"><?php echo $_smarty_tpl->tpl_vars['content_data']->value['json_placeholder_slide'];
echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		// Render the correct placeholder image depending the viewport width.
		(function() {
			var slider = JSON.parse(document.getElementById('json-serialized-slider').innerHTML);
			var placeholderSlide = JSON.parse(document.getElementById('json-placeholder-slide').innerHTML);
			var breakpoint;
			
			if (window.innerWidth <= 768) {
				breakpoint = 'xs'
			} else if (window.innerWidth <= 992) {
				breakpoint = 'sm';
			} else if (window.innerWidth <= 1200) {
				breakpoint = 'md';
			} else {
				breakpoint = 'lg';
			}
			
			loop:
			for (var index in slider.slides) {
				var slide = slider.slides[index];
				
				if (slide.languageId !== +placeholderSlide.languageId) { // + converts value to int
					continue;
				}
				
				for (var imageIndex in slide.images) {
					var slideImage = slide.images[imageIndex];
					
					if (slideImage.breakpoint === breakpoint && slideImage.image) {
						var slide = document.createElement('div');
						slide.className = 'swiper-slide';
						
						var image = document.createElement('img');
						image.className = 'placeholder-image img-responsive center-block';
						image.setAttribute('src', placeholderSlide.baseUrl + slideImage.image);
						
						slide.appendChild(image);
						
						document.querySelector('#slider .swiper-container .swiper-wrapper').appendChild(slide);
						
						break loop;
					}
				}
			}
		})();
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "image_slider_scripts"} */
}
