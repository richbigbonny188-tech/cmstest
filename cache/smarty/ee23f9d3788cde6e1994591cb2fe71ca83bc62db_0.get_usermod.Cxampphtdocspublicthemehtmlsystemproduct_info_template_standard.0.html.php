<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bc6d204_72725306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee23f9d3788cde6e1994591cb2fe71ca83bc62db' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."rating_stars.html' => 2,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_listing_ribbon.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_model.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_shipping_time.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_stock.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_customizer_position.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_legal_age.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_price.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_product_box_bottom.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_product_description.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_social_share.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_product_lists.html' => 1,
  ),
),false)) {
function content_694d6d5bc6d204_72725306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"product_info"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"customers_status",'name'=>"customer"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_574489444694d6d5bc10e42_74709077', "product_info_template_standard");
?>

<?php }
/* {block "product_info_template_standard_navigator"} */
class Block_1047335454694d6d5bc11764_21031507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['PRODUCT_NAVIGATOR']->value;?>

	<?php
}
}
/* {/block "product_info_template_standard_navigator"} */
/* {block "product_info_template_standard_modal"} */
class Block_115644056694d6d5bc13586_85433682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="product_image_layer">
			<?php echo $_smarty_tpl->tpl_vars['IMAGE_GALLERY_MODAL']->value;?>

			</div>
					<?php
}
}
/* {/block "product_info_template_standard_modal"} */
/* {block "product_info_template_standard_product_name_span"} */
class Block_124110726694d6d5bc16d09_58831663 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

									<span<?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?> class="hyphenate"<?php }?>><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value;?>
</span>
								<?php
}
}
/* {/block "product_info_template_standard_product_name_span"} */
/* {block "product_info_template_standard_product_review_data"} */
class Block_392570296694d6d5bc1a7e0_13081329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

                                                <a href="#product-ratings"<?php if (smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true') {?> onclick="document.getElementById('reviews-tab').click()"<?php }?>>
												    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."rating_stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_rounded'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],'rating_count'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count']), 0, true);
?>
                                                </a>
											<?php
}
}
/* {/block "product_info_template_standard_product_review_data"} */
/* {block "product_info_template_standard_product_review_data_if"} */
class Block_1741181007694d6d5bc19248_67431954 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div>
										<?php if ($_smarty_tpl->tpl_vars['showRating']->value && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] != 0) {?>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_392570296694d6d5bc1a7e0_13081329', "product_info_template_standard_product_review_data", $this->tplIndex);
?>

										<?php }?>
									</div>
								<?php
}
}
/* {/block "product_info_template_standard_product_review_data_if"} */
/* {block "product_info_template_standard_product_name"} */
class Block_461627139694d6d5bc15611_20680354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

							<div class="product-info-title-mobile <?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?>hyphenate<?php }?> col-xs-12 visible-xs-block visible-sm-block">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124110726694d6d5bc16d09_58831663', "product_info_template_standard_product_name_span", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1741181007694d6d5bc19248_67431954', "product_info_template_standard_product_review_data_if", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "product_info_template_standard_product_name"} */
/* {block "product_info_template_standard_product_ribbons"} */
class Block_770879462694d6d5bc1e8f6_85644571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.product_ribbons.php','function'=>'smarty_function_product_ribbons',),));
?>

							<?php echo smarty_function_product_ribbons(array('showManufacturerImages'=>$_smarty_tpl->tpl_vars['showManufacturerImages']->value,'showProductRibbons'=>$_smarty_tpl->tpl_vars['showProductRibbons']->value,'product_id'=>$_smarty_tpl->tpl_vars['PRODUCTS_ID']->value,'out'=>'arr_ribbons'),$_smarty_tpl);?>

						<?php
}
}
/* {/block "product_info_template_standard_product_ribbons"} */
/* {block "product_info_template_standard_product_images_if"} */
class Block_932755207694d6d5bc23522_73962433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php echo $_smarty_tpl->tpl_vars['IMAGE_GALLERY']->value;?>

						<?php
}
}
/* {/block "product_info_template_standard_product_images_if"} */
/* {block "product_info_template_standard_sticky_box_overlays"} */
class Block_371798584694d6d5bc26cf7_01015516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="loading-overlay"></div>
									<div class="magnifier-overlay"></div>
									<div class="magnifier-target">
										<div class="preloader"></div>
									</div>
								<?php
}
}
/* {/block "product_info_template_standard_sticky_box_overlays"} */
/* {block "product_info_template_standard_sticky_box_ribbon_include"} */
class Block_1301717099694d6d5bc28a62_41334900 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing_ribbon.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ribbons'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value), 0, true);
?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_ribbon_include"} */
/* {block "product_info_template_standard_sticky_box_ribbon_if"} */
class Block_1557165706694d6d5bc27964_22299219 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['arr_ribbons']->value['ribbons']) {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1301717099694d6d5bc28a62_41334900', "product_info_template_standard_sticky_box_ribbon_include", $this->tplIndex);
?>

									<?php }?>
								<?php
}
}
/* {/block "product_info_template_standard_sticky_box_ribbon_if"} */
/* {block "product_info_template_standard_sticky_box_ts_rating"} */
class Block_1375954466694d6d5bc2abe2_26397910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php echo $_smarty_tpl->tpl_vars['TS_PRODUCT_RATING']->value;?>

								<?php
}
}
/* {/block "product_info_template_standard_sticky_box_ts_rating"} */
/* {block "product_info_template_standard_sticky_box_rating2"} */
class Block_514182134694d6d5bc2f2c4_43220485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

															<span>
																<span style="display: none"><?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'];?>
</span>
																<span style="display: none"><?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'];?>
</span>
															</span>
															<a href="#product-ratings"<?php if (smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true') {?> onclick="document.getElementById('reviews-tab').click()"<?php }?>>
																<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."rating_stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_rounded'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],'rating_count'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count']), 0, true);
?>
															</a>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating2"} */
/* {block "product_info_template_standard_sticky_box_rating_if"} */
class Block_825509702694d6d5bc2d733_69362502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['showRating']->value && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] != 0) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_514182134694d6d5bc2f2c4_43220485', "product_info_template_standard_sticky_box_rating2", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating_if"} */
/* {block "product_info_template_standard_sticky_box_rating"} */
class Block_565067445694d6d5bc2cfd0_10863117 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="hidden-xs hidden-sm ribbon-spacing">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_825509702694d6d5bc2d733_69362502', "product_info_template_standard_sticky_box_rating_if", $this->tplIndex);
?>

											</div>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating"} */
/* {block "product_info_template_standard_sticky_box_product_title"} */
class Block_1524591428694d6d5bc33953_70411590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

											<h1 class="product-info-title-desktop <?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?>hyphenate<?php }?> hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['RICH_SNIPPET_ARRAY']->value['product_itemprop_name_start'];
echo $_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value;
echo $_smarty_tpl->tpl_vars['RICH_SNIPPET_ARRAY']->value['product_itemprop_name_end'];?>
</h1>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_title"} */
/* {block "product_info_template_standard_sticky_box_model_include"} */
class Block_1745853404694d6d5bc3d3d2_62569787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_model.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_model_include"} */
/* {block "product_info_template_standard_sticky_box_shipping_time_include"} */
class Block_2114746126694d6d5bc3ee33_21562907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_shipping_time.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_shipping_time_include"} */
/* {block "product_info_template_standard_sticky_box_stock_include"} */
class Block_1123795079694d6d5bc40987_28907062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_stock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_stock_include"} */
/* {block "product_info_template_standard_sticky_box_additional_fields"} */
class Block_68842900694d6d5bc420f4_57344340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php echo $_smarty_tpl->tpl_vars['additional_fields']->value;?>

														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_additional_fields"} */
/* {block "product_info_template_standard_sticky_box_weight"} */
class Block_1336322203694d6d5bc43d59_25183268 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<dt><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight'];?>
</dt>
																	<dd class="products-details-weight-container"><span><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_WEIGHT']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_unit'];?>
 <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {
echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;
} else {
echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_qty_unit'];
}?></dd>
																<?php
}
}
/* {/block "product_info_template_standard_sticky_box_weight"} */
/* {block "product_info_template_standard_sticky_box_weight_if"} */
class Block_1785181122694d6d5bc43059_19388690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ($_smarty_tpl->tpl_vars['SHOW_PRODUCTS_WEIGHT']->value) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1336322203694d6d5bc43d59_25183268', "product_info_template_standard_sticky_box_weight", $this->tplIndex);
?>

															<?php }?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_weight_if"} */
/* {block "product_info_template_standard_sticky_box_min_order"} */
class Block_1408276790694d6d5bc486c9_92497734 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<dt class="product-details-order-min"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_min_order'];?>
</dt>
																	<dd class="product-details-order-min"><?php echo $_smarty_tpl->tpl_vars['GM_MIN_ORDER']->value;?>
</dd>
																<?php
}
}
/* {/block "product_info_template_standard_sticky_box_min_order"} */
/* {block "product_info_template_standard_sticky_box_min_order_if"} */
class Block_119130246694d6d5bc478c7_43153518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ($_smarty_tpl->tpl_vars['GM_MIN_ORDER']->value) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1408276790694d6d5bc486c9_92497734', "product_info_template_standard_sticky_box_min_order", $this->tplIndex);
?>

															<?php }?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_min_order_if"} */
/* {block "product_info_template_standard_sticky_box_product_options"} */
class Block_213264243694d6d5bc3cb67_77112138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<dl class="dl-horizontal">
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745853404694d6d5bc3d3d2_62569787', "product_info_template_standard_sticky_box_model_include", $this->tplIndex);
?>


														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2114746126694d6d5bc3ee33_21562907', "product_info_template_standard_sticky_box_shipping_time_include", $this->tplIndex);
?>


														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1123795079694d6d5bc40987_28907062', "product_info_template_standard_sticky_box_stock_include", $this->tplIndex);
?>

	
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68842900694d6d5bc420f4_57344340', "product_info_template_standard_sticky_box_additional_fields", $this->tplIndex);
?>

							
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1785181122694d6d5bc43059_19388690', "product_info_template_standard_sticky_box_weight_if", $this->tplIndex);
?>


														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119130246694d6d5bc478c7_43153518', "product_info_template_standard_sticky_box_min_order_if", $this->tplIndex);
?>

													</dl>
												<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_options"} */
/* {block "product_info_template_standard_sticky_box_product_options_if"} */
class Block_857778361694d6d5bc376a2_62751994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if (($_smarty_tpl->tpl_vars['SHOW_PRODUCTS_MODEL']->value && trim($_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value) != '') || $_smarty_tpl->tpl_vars['SHIPPING_NAME']->value || $_smarty_tpl->tpl_vars['SHOW_SHIPPING_TIME']->value || $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value || $_smarty_tpl->tpl_vars['SHOW_PRODUCTS_QUANTITY']->value || $_smarty_tpl->tpl_vars['additional_fields']->value) {?>
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213264243694d6d5bc3cb67_77112138', "product_info_template_standard_sticky_box_product_options", $this->tplIndex);
?>

											<?php }?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_options_if"} */
/* {block "product_info_template_standard_sticky_box_properties_selection_form"} */
class Block_1971573592694d6d5bc4b0d9_10548142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['properties_selection_form']->value;?>

										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_properties_selection_form"} */
/* {block "product_info_template_standard_sticky_box_modifier_groups_selection_form"} */
class Block_675240865694d6d5bc4bfa7_98326666 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['MODULE_modifier_groups']->value;?>

										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_modifier_groups_selection_form"} */
/* {block "product_info_template_standard_sticky_box_module_product_options"} */
class Block_22775470694d6d5bc4d9f0_32168661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['MODULE_product_options']->value;?>

										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_module_product_options"} */
/* {block "product_info_template_standard_sticky_box_customizer"} */
class Block_1518567876694d6d5bc4e3e5_63328794 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_customizer_position.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>3), 0, true);
?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_customizer"} */
/* {block "product_info_template_standard_sticky_box_legal_age"} */
class Block_705904899694d6d5bc4f6b6_17736606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_legal_age.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_legal_age"} */
/* {block "product_info_template_standard_sticky_box_graduated_price"} */
class Block_1909147156694d6d5bc51742_71375571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php echo $_smarty_tpl->tpl_vars['MODULE_graduated_price']->value;?>

												<?php
}
}
/* {/block "product_info_template_standard_sticky_box_graduated_price"} */
/* {block "product_info_template_standard_sticky_box_graduated_price_if"} */
class Block_775824283694d6d5bc50283_30363344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['MODULE_graduated_price']->value != '' && $_smarty_tpl->tpl_vars['QUANTITY']->value) {?>
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1909147156694d6d5bc51742_71375571', "product_info_template_standard_sticky_box_graduated_price", $this->tplIndex);
?>

											<?php }?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_graduated_price_if"} */
/* {block "product_info_template_standard_sticky_box_cart_error_message"} */
class Block_1681130082694d6d5bc532b7_41577984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php if ($_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value != '') {?>
                                                <div class="cart-error-msg alert alert-danger" role="alert" style="display: block;"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value;?>
</div>
                                            <?php } else { ?>
                                                <div class="cart-error-msg alert alert-danger" role="alert"></div>
                                            <?php }?>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_cart_error_message"} */
/* {block "product_info_template_standard_sticky_box_price_include"} */
class Block_576802872694d6d5bc55fe1_90016477 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_price.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_price_include"} */
/* {block "product_info_template_standard_sticky_box_quantity_unit"} */
class Block_652265591694d6d5bc59637_23053138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                            <label class="quantity-unit-label">
																			    <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>
:
                                                                            </label>
																		<?php
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_unit"} */
/* {block "product_info_template_standard_sticky_box_quantity_unit_if"} */
class Block_326323578694d6d5bc58964_49900379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {?>
																		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652265591694d6d5bc59637_23053138', "product_info_template_standard_sticky_box_quantity_unit", $this->tplIndex);
?>

																	<?php }?>
																<?php
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_unit_if"} */
/* {block "product_info_template_standard_sticky_box_quantity_unit_else"} */
class Block_339653048694d6d5bc5afa2_56658610 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_unit_else"} */
/* {block "product_info_template_standard_sticky_box_product_box_bottom"} */
class Block_794772112694d6d5bc5bd89_17233847 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
															<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_box_bottom"} */
/* {block "product_info_template_standard_sticky_box_quantity_if"} */
class Block_1657009815694d6d5bc57ba6_68816435 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ($_smarty_tpl->tpl_vars['QUANTITY']->value) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_326323578694d6d5bc58964_49900379', "product_info_template_standard_sticky_box_quantity_unit_if", $this->tplIndex);
?>

															<?php } else { ?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_339653048694d6d5bc5afa2_56658610', "product_info_template_standard_sticky_box_quantity_unit_else", $this->tplIndex);
?>

															<?php }?>
														
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_794772112694d6d5bc5bd89_17233847', "product_info_template_standard_sticky_box_product_box_bottom", $this->tplIndex);
?>

														<?php
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_if"} */
/* {block "product_info_template_standard_sticky_box_price_calc_container"} */
class Block_862458723694d6d5bc55892_83711215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<div class="price-calc-container" id="attributes-calc-price">

														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_576802872694d6d5bc55fe1_90016477', "product_info_template_standard_sticky_box_price_include", $this->tplIndex);
?>

							
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1657009815694d6d5bc57ba6_68816435', "product_info_template_standard_sticky_box_quantity_if", $this->tplIndex);
?>

							
													</div>
												<?php
}
}
/* {/block "product_info_template_standard_sticky_box_price_calc_container"} */
/* {block "product_info_template_standard_sticky_box_price_container"} */
class Block_263081735694d6d5bc550d3_67046796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<div class="price-container">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862458723694d6d5bc55892_83711215', "product_info_template_standard_sticky_box_price_calc_container", $this->tplIndex);
?>

											</div>
										<?php
}
}
/* {/block "product_info_template_standard_sticky_box_price_container"} */
/* {block "product_info_template_standard_sticky_box_form"} */
class Block_595192132694d6d5bc2bcf3_86870318 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<form action="<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION_URL']->value;?>
" class="form-horizontal js-product-form<?php if ($_smarty_tpl->tpl_vars['GM_GPRINT']->value) {?> customizer<?php }?> product-info">
										<input type="hidden" id="update-gallery-hash" name="galleryHash" value="">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_565067445694d6d5bc2cfd0_10863117', "product_info_template_standard_sticky_box_rating", $this->tplIndex);
?>

										
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524591428694d6d5bc33953_70411590', "product_info_template_standard_sticky_box_product_title", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_857778361694d6d5bc376a2_62751994', "product_info_template_standard_sticky_box_product_options_if", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1971573592694d6d5bc4b0d9_10548142', "product_info_template_standard_sticky_box_properties_selection_form", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_675240865694d6d5bc4bfa7_98326666', "product_info_template_standard_sticky_box_modifier_groups_selection_form", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22775470694d6d5bc4d9f0_32168661', "product_info_template_standard_sticky_box_module_product_options", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1518567876694d6d5bc4e3e5_63328794', "product_info_template_standard_sticky_box_customizer", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_705904899694d6d5bc4f6b6_17736606', "product_info_template_standard_sticky_box_legal_age", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_775824283694d6d5bc50283_30363344', "product_info_template_standard_sticky_box_graduated_price_if", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681130082694d6d5bc532b7_41577984', "product_info_template_standard_sticky_box_cart_error_message", $this->tplIndex);
?>

					
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263081735694d6d5bc550d3_67046796', "product_info_template_standard_sticky_box_price_container", $this->tplIndex);
?>

					
									</form>
								<?php
}
}
/* {/block "product_info_template_standard_sticky_box_form"} */
/* {block "product_info_template_standard_sticky_box"} */
class Block_611874866694d6d5bc24a17_23530587 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

							<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-product-info-details-sticky"),$_smarty_tpl);
$_prefixVariable7 = ob_get_clean();
$_smarty_tpl->_assignInScope('stickybox', $_prefixVariable7);?>
							<div class="product-info-details col-xs-12 col-md-4" data-gambio-widget="<?php if ($_smarty_tpl->tpl_vars['stickybox']->value) {?>stickybox <?php }?>product_min_height_fix">
				
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371798584694d6d5bc26cf7_01015516', "product_info_template_standard_sticky_box_overlays", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1557165706694d6d5bc27964_22299219', "product_info_template_standard_sticky_box_ribbon_if", $this->tplIndex);
?>

				
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1375954466694d6d5bc2abe2_26397910', "product_info_template_standard_sticky_box_ts_rating", $this->tplIndex);
?>

								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_595192132694d6d5bc2bcf3_86870318', "product_info_template_standard_sticky_box_form", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "product_info_template_standard_sticky_box"} */
/* {block "product_info_template_standard_description"} */
class Block_1029640932694d6d5bc5f058_75378672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="product-info-description col-md-8" data-gambio-widget="tabs">
								<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_description.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('reviews'=>$_smarty_tpl->tpl_vars['MODULE_products_reviews']->value), 0, true);
?>
							</div>
						<?php
}
}
/* {/block "product_info_template_standard_description"} */
/* {block "product_info_template_standard_available"} */
class Block_1242664221694d6d5bc61df7_72092667 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="products_info_available col-md-8">
										<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVIABLE']->value;?>

									</div>
								<?php
}
}
/* {/block "product_info_template_standard_available"} */
/* {block "product_info_template_standard_available_if"} */
class Block_1510316291694d6d5bc60db1_71863370 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVIABLE']->value != '') {?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1242664221694d6d5bc61df7_72092667', "product_info_template_standard_available", $this->tplIndex);
?>

							<?php }?>
						<?php
}
}
/* {/block "product_info_template_standard_available_if"} */
/* {block "product_info_template_standard_social_share"} */
class Block_1895825158694d6d5bc63493_20134494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="product-info-share col-md-8">
								<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_social_share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							</div>
						<?php
}
}
/* {/block "product_info_template_standard_social_share"} */
/* {block "product_info_template_standard_reviews"} */
class Block_524354327694d6d5bc66a68_87702593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div id="product-ratings" class="product-info-rating col-md-8">
											<?php echo $_smarty_tpl->tpl_vars['MODULE_products_reviews']->value;?>

										</div>
									<?php
}
}
/* {/block "product_info_template_standard_reviews"} */
/* {block "product_info_template_standard_reviews_if"} */
class Block_1680224725694d6d5bc64c46_92777452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

							<?php if ($_smarty_tpl->tpl_vars['showRating']->value && smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') !== 'true') {?>
								<?php if ($_smarty_tpl->tpl_vars['MODULE_products_reviews']->value != '') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_524354327694d6d5bc66a68_87702593', "product_info_template_standard_reviews", $this->tplIndex);
?>

								<?php }?>
							<?php }?>
						<?php
}
}
/* {/block "product_info_template_standard_reviews_if"} */
/* {block "product_info_template_standard_content_row"} */
class Block_1845513523694d6d5bc14ec0_10517866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="row">
						
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_461627139694d6d5bc15611_20680354', "product_info_template_standard_product_name", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_770879462694d6d5bc1e8f6_85644571', "product_info_template_standard_product_ribbons", $this->tplIndex);
?>


						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_932755207694d6d5bc23522_73962433', "product_info_template_standard_product_images_if", $this->tplIndex);
?>

						
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611874866694d6d5bc24a17_23530587', "product_info_template_standard_sticky_box", $this->tplIndex);
?>

			
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1029640932694d6d5bc5f058_75378672', "product_info_template_standard_description", $this->tplIndex);
?>

			
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1510316291694d6d5bc60db1_71863370', "product_info_template_standard_available_if", $this->tplIndex);
?>

			
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1895825158694d6d5bc63493_20134494', "product_info_template_standard_social_share", $this->tplIndex);
?>

			
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1680224725694d6d5bc64c46_92777452', "product_info_template_standard_reviews_if", $this->tplIndex);
?>

			
					</div><!-- // .row -->
				<?php
}
}
/* {/block "product_info_template_standard_content_row"} */
/* {block "product_info_template_standard_content"} */
class Block_239323381694d6d5bc14734_06629605 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="product-info-content col-xs-12" data-gambio-widget="cart_handler" data-cart_handler-page="product-info">

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1845513523694d6d5bc14ec0_10517866', "product_info_template_standard_content_row", $this->tplIndex);
?>

			</div><!-- // .product-info-content -->
		<?php
}
}
/* {/block "product_info_template_standard_content"} */
/* {block "product_info_template_standard_product_lists"} */
class Block_1794882529694d6d5bc6a272_84721956 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="product-info-listings col-xs-12 clearfix" data-gambio-widget="product_hover">
				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_lists.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			</div>
		<?php
}
}
/* {/block "product_info_template_standard_product_lists"} */
/* {block "product_info_template_standard"} */
class Block_574489444694d6d5bc10e42_74709077 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard' => 
  array (
    0 => 'Block_574489444694d6d5bc10e42_74709077',
  ),
  'product_info_template_standard_navigator' => 
  array (
    0 => 'Block_1047335454694d6d5bc11764_21031507',
  ),
  'product_info_template_standard_modal' => 
  array (
    0 => 'Block_115644056694d6d5bc13586_85433682',
  ),
  'product_info_template_standard_content' => 
  array (
    0 => 'Block_239323381694d6d5bc14734_06629605',
  ),
  'product_info_template_standard_content_row' => 
  array (
    0 => 'Block_1845513523694d6d5bc14ec0_10517866',
  ),
  'product_info_template_standard_product_name' => 
  array (
    0 => 'Block_461627139694d6d5bc15611_20680354',
  ),
  'product_info_template_standard_product_name_span' => 
  array (
    0 => 'Block_124110726694d6d5bc16d09_58831663',
  ),
  'product_info_template_standard_product_review_data_if' => 
  array (
    0 => 'Block_1741181007694d6d5bc19248_67431954',
  ),
  'product_info_template_standard_product_review_data' => 
  array (
    0 => 'Block_392570296694d6d5bc1a7e0_13081329',
  ),
  'product_info_template_standard_product_ribbons' => 
  array (
    0 => 'Block_770879462694d6d5bc1e8f6_85644571',
  ),
  'product_info_template_standard_product_images_if' => 
  array (
    0 => 'Block_932755207694d6d5bc23522_73962433',
  ),
  'product_info_template_standard_sticky_box' => 
  array (
    0 => 'Block_611874866694d6d5bc24a17_23530587',
  ),
  'product_info_template_standard_sticky_box_overlays' => 
  array (
    0 => 'Block_371798584694d6d5bc26cf7_01015516',
  ),
  'product_info_template_standard_sticky_box_ribbon_if' => 
  array (
    0 => 'Block_1557165706694d6d5bc27964_22299219',
  ),
  'product_info_template_standard_sticky_box_ribbon_include' => 
  array (
    0 => 'Block_1301717099694d6d5bc28a62_41334900',
  ),
  'product_info_template_standard_sticky_box_ts_rating' => 
  array (
    0 => 'Block_1375954466694d6d5bc2abe2_26397910',
  ),
  'product_info_template_standard_sticky_box_form' => 
  array (
    0 => 'Block_595192132694d6d5bc2bcf3_86870318',
  ),
  'product_info_template_standard_sticky_box_rating' => 
  array (
    0 => 'Block_565067445694d6d5bc2cfd0_10863117',
  ),
  'product_info_template_standard_sticky_box_rating_if' => 
  array (
    0 => 'Block_825509702694d6d5bc2d733_69362502',
  ),
  'product_info_template_standard_sticky_box_rating2' => 
  array (
    0 => 'Block_514182134694d6d5bc2f2c4_43220485',
  ),
  'product_info_template_standard_sticky_box_product_title' => 
  array (
    0 => 'Block_1524591428694d6d5bc33953_70411590',
  ),
  'product_info_template_standard_sticky_box_product_options_if' => 
  array (
    0 => 'Block_857778361694d6d5bc376a2_62751994',
  ),
  'product_info_template_standard_sticky_box_product_options' => 
  array (
    0 => 'Block_213264243694d6d5bc3cb67_77112138',
  ),
  'product_info_template_standard_sticky_box_model_include' => 
  array (
    0 => 'Block_1745853404694d6d5bc3d3d2_62569787',
  ),
  'product_info_template_standard_sticky_box_shipping_time_include' => 
  array (
    0 => 'Block_2114746126694d6d5bc3ee33_21562907',
  ),
  'product_info_template_standard_sticky_box_stock_include' => 
  array (
    0 => 'Block_1123795079694d6d5bc40987_28907062',
  ),
  'product_info_template_standard_sticky_box_additional_fields' => 
  array (
    0 => 'Block_68842900694d6d5bc420f4_57344340',
  ),
  'product_info_template_standard_sticky_box_weight_if' => 
  array (
    0 => 'Block_1785181122694d6d5bc43059_19388690',
  ),
  'product_info_template_standard_sticky_box_weight' => 
  array (
    0 => 'Block_1336322203694d6d5bc43d59_25183268',
  ),
  'product_info_template_standard_sticky_box_min_order_if' => 
  array (
    0 => 'Block_119130246694d6d5bc478c7_43153518',
  ),
  'product_info_template_standard_sticky_box_min_order' => 
  array (
    0 => 'Block_1408276790694d6d5bc486c9_92497734',
  ),
  'product_info_template_standard_sticky_box_properties_selection_form' => 
  array (
    0 => 'Block_1971573592694d6d5bc4b0d9_10548142',
  ),
  'product_info_template_standard_sticky_box_modifier_groups_selection_form' => 
  array (
    0 => 'Block_675240865694d6d5bc4bfa7_98326666',
  ),
  'product_info_template_standard_sticky_box_module_product_options' => 
  array (
    0 => 'Block_22775470694d6d5bc4d9f0_32168661',
  ),
  'product_info_template_standard_sticky_box_customizer' => 
  array (
    0 => 'Block_1518567876694d6d5bc4e3e5_63328794',
  ),
  'product_info_template_standard_sticky_box_legal_age' => 
  array (
    0 => 'Block_705904899694d6d5bc4f6b6_17736606',
  ),
  'product_info_template_standard_sticky_box_graduated_price_if' => 
  array (
    0 => 'Block_775824283694d6d5bc50283_30363344',
  ),
  'product_info_template_standard_sticky_box_graduated_price' => 
  array (
    0 => 'Block_1909147156694d6d5bc51742_71375571',
  ),
  'product_info_template_standard_sticky_box_cart_error_message' => 
  array (
    0 => 'Block_1681130082694d6d5bc532b7_41577984',
  ),
  'product_info_template_standard_sticky_box_price_container' => 
  array (
    0 => 'Block_263081735694d6d5bc550d3_67046796',
  ),
  'product_info_template_standard_sticky_box_price_calc_container' => 
  array (
    0 => 'Block_862458723694d6d5bc55892_83711215',
  ),
  'product_info_template_standard_sticky_box_price_include' => 
  array (
    0 => 'Block_576802872694d6d5bc55fe1_90016477',
  ),
  'product_info_template_standard_sticky_box_quantity_if' => 
  array (
    0 => 'Block_1657009815694d6d5bc57ba6_68816435',
  ),
  'product_info_template_standard_sticky_box_quantity_unit_if' => 
  array (
    0 => 'Block_326323578694d6d5bc58964_49900379',
  ),
  'product_info_template_standard_sticky_box_quantity_unit' => 
  array (
    0 => 'Block_652265591694d6d5bc59637_23053138',
  ),
  'product_info_template_standard_sticky_box_quantity_unit_else' => 
  array (
    0 => 'Block_339653048694d6d5bc5afa2_56658610',
  ),
  'product_info_template_standard_sticky_box_product_box_bottom' => 
  array (
    0 => 'Block_794772112694d6d5bc5bd89_17233847',
  ),
  'product_info_template_standard_description' => 
  array (
    0 => 'Block_1029640932694d6d5bc5f058_75378672',
  ),
  'product_info_template_standard_available_if' => 
  array (
    0 => 'Block_1510316291694d6d5bc60db1_71863370',
  ),
  'product_info_template_standard_available' => 
  array (
    0 => 'Block_1242664221694d6d5bc61df7_72092667',
  ),
  'product_info_template_standard_social_share' => 
  array (
    0 => 'Block_1895825158694d6d5bc63493_20134494',
  ),
  'product_info_template_standard_reviews_if' => 
  array (
    0 => 'Block_1680224725694d6d5bc64c46_92777452',
  ),
  'product_info_template_standard_reviews' => 
  array (
    0 => 'Block_524354327694d6d5bc66a68_87702593',
  ),
  'product_info_template_standard_product_lists' => 
  array (
    0 => 'Block_1794882529694d6d5bc6a272_84721956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1047335454694d6d5bc11764_21031507', "product_info_template_standard_navigator", $this->tplIndex);
?>


	<?php if ($_smarty_tpl->tpl_vars['JSONLD']->value) {?>
		<?php echo '<script'; ?>
 type="application/ld+json">
			<?php echo $_smarty_tpl->tpl_vars['JSONLD']->value;?>

		<?php echo '</script'; ?>
>
	<?php }?>
	
	<div class="product-info product-info-default row">
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115644056694d6d5bc13586_85433682', "product_info_template_standard_modal", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239323381694d6d5bc14734_06629605', "product_info_template_standard_content", $this->tplIndex);
?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1794882529694d6d5bc6a272_84721956', "product_info_template_standard_product_lists", $this->tplIndex);
?>

	
	</div><!-- // .product-info -->
<?php
}
}
/* {/block "product_info_template_standard"} */
}
