<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_gallery.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b50ec25_91339589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ba3957586d1d4381a922fbfabb8cbc2c80cbe6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_gallery.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_gallery_main.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_listing_manufacturer.html' => 1,
  ),
),false)) {
function content_694d6d5b50ec25_91339589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_946251199694d6d5b4e7ad9_02124132', "product_info_template_standard_images");
?>

<?php }
/* {block "product_info_template_standard_product_images_manufacturer_ribbon_include"} */
class Block_653629027694d6d5b509274_44137831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing_manufacturer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ribbon'=>"manufacturer",'id'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value['manufacturer'][0]['ID'],'text'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value['manufacturer'][0]['IMAGE_ALT'],'img'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value['manufacturer'][0]['IMAGE'],'url'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value['manufacturer'][0]['URL']), 0, true);
?>
					<?php
}
}
/* {/block "product_info_template_standard_product_images_manufacturer_ribbon_include"} */
/* {block "product_info_template_standard_product_images_manufacturer_ribbon_if"} */
class Block_642734496694d6d5b4f8446_33121677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_ribbons.php','function'=>'smarty_function_product_ribbons',),2=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                <?php echo smarty_function_product_ribbons(array('showManufacturerImages'=>smarty_modifier_gm_get_conf('SHOW_MANUFACTURER_IMAGE_PRODUCT_DETAILS'),'showProductRibbons'=>smarty_modifier_gm_get_conf('SHOW_PRODUCT_RIBBONS'),'product_id'=>$_smarty_tpl->tpl_vars['productId']->value,'out'=>'arr_ribbons'),$_smarty_tpl);?>

				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['arr_ribbons']->value['manufacturer']) > 0) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_653629027694d6d5b509274_44137831', "product_info_template_standard_product_images_manufacturer_ribbon_include", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "product_info_template_standard_product_images_manufacturer_ribbon_if"} */
/* {block "product_info_template_standard_images"} */
class Block_946251199694d6d5b4e7ad9_02124132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_images' => 
  array (
    0 => 'Block_946251199694d6d5b4e7ad9_02124132',
  ),
  'product_info_template_standard_product_images_manufacturer_ribbon_if' => 
  array (
    0 => 'Block_642734496694d6d5b4f8446_33121677',
  ),
  'product_info_template_standard_product_images_manufacturer_ribbon_include' => 
  array (
    0 => 'Block_653629027694d6d5b509274_44137831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

		<div class="product-info-stage col-xs-12 col-md-8<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) < 2) {?> centered<?php }?>">

			<div id="image-collection-container">
				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_gallery_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_642734496694d6d5b4f8446_33121677', "product_info_template_standard_product_images_manufacturer_ribbon_if", $this->tplIndex);
?>


		</div>
	<?php
}
}
/* {/block "product_info_template_standard_images"} */
}
