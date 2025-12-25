<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_best_sellers.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06478ab7c1_74241115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45b193545dbe5bfb436557637c84ca20b1ff67f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_best_sellers.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_top.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_bottom.html' => 1,
  ),
),false)) {
function content_694c06478ab7c1_74241115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1708950455694c064788fb77_71734901';
echo smarty_function_load_language_text(array('section'=>"box_best_sellers"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745985981694c0647891886_77625993', "box_best_sellers");
?>

<?php }
/* {block "box_best_sellers_top"} */
class Block_688988733694c0647891f66_66053085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('class'=>"bestsellers",'headline'=>$_smarty_tpl->tpl_vars['txt']->value['heading_best_sellers']), 0, true);
?>
		<?php
}
}
/* {/block "box_best_sellers_top"} */
/* {block "box_best_sellers_product_image_thumbnail"} */
class Block_191941691694c064789e997_99111697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<span class="img-thumbnail">
																<span class="align-helper"></span>
																<img src="<?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_IMAGE'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_NAME'];?>
" />
															</span>
														<?php
}
}
/* {/block "box_best_sellers_product_image_thumbnail"} */
/* {block "box_best_sellers_product_image_no_thumbnail"} */
class Block_1302074568694c06478a00f1_42005679 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
&nbsp;<?php
}
}
/* {/block "box_best_sellers_product_image_no_thumbnail"} */
/* {block "box_best_sellers_product_image_thumbnail_if"} */
class Block_2118992070694c064789d748_86462355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<?php if ($_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_IMAGE'] && $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_IMAGE'] != '') {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191941691694c064789e997_99111697', "box_best_sellers_product_image_thumbnail", $this->tplIndex);
?>

													<?php } else { ?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1302074568694c06478a00f1_42005679', "box_best_sellers_product_image_no_thumbnail", $this->tplIndex);
?>

													<?php }?>
												<?php
}
}
/* {/block "box_best_sellers_product_image_thumbnail_if"} */
/* {block "box_best_sellers_product_image"} */
class Block_1835697259694c064789d135_79493863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<span class="col-xs-4">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2118992070694c064789d748_86462355', "box_best_sellers_product_image_thumbnail_if", $this->tplIndex);
?>

											</span>
										<?php
}
}
/* {/block "box_best_sellers_product_image"} */
/* {block "box_best_sellers_product_info_name"} */
class Block_1134044081694c06478a1801_25988912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

													<span class="<?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?>hyphenate<?php }?>"><?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_NAME'];?>
</span>
												<?php
}
}
/* {/block "box_best_sellers_product_info_name"} */
/* {block "box_best_sellers_product_info_vpe"} */
class Block_1143630149694c06478a7916_24355922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<br />
																	<span class="products-vpe"><?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_VPE'];?>
</span>
																<?php
}
}
/* {/block "box_best_sellers_product_info_vpe"} */
/* {block "box_best_sellers_product_info_vpe_if"} */
class Block_524973501694c06478a6dc9_94172475 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<?php if ($_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_VPE']) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1143630149694c06478a7916_24355922', "box_best_sellers_product_info_vpe", $this->tplIndex);
?>

															<?php }?>
														<?php
}
}
/* {/block "box_best_sellers_product_info_vpe_if"} */
/* {block "box_best_sellers_product_info_price"} */
class Block_2141846171694c06478a62d9_79239619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_PRICE'];?>

														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_524973501694c06478a6dc9_94172475', "box_best_sellers_product_info_vpe_if", $this->tplIndex);
?>

													<?php
}
}
/* {/block "box_best_sellers_product_info_price"} */
/* {block "box_best_sellers_product_info"} */
class Block_377993274694c06478a1273_59734232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<span class="col-xs-8">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1134044081694c06478a1801_25988912', "box_best_sellers_product_info_name", $this->tplIndex);
?>

												<br />
												<span class="price">
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141846171694c06478a62d9_79239619', "box_best_sellers_product_info_price", $this->tplIndex);
?>

												</span>
											</span>
										<?php
}
}
/* {/block "box_best_sellers_product_info"} */
/* {block "box_best_sellers_product"} */
class Block_169528992694c0647896347_64808789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<a href="<?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_LINK'];?>
"<?php if ($_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_META_DESCRIPTION'] != '') {?> title="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_META_DESCRIPTION'],80,"..."),'"','&quot;');?>
"<?php } else { ?> title="<?php echo $_smarty_tpl->tpl_vars['products_item']->value['PRODUCTS_NAME'];?>
"<?php }?>>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1835697259694c064789d135_79493863', "box_best_sellers_product_image", $this->tplIndex);
?>

										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377993274694c06478a1273_59734232', "box_best_sellers_product_info", $this->tplIndex);
?>

									</a>
								<?php
}
}
/* {/block "box_best_sellers_product"} */
/* {block "box_best_sellers_content"} */
class Block_1088256480694c0647894958_96574458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<ol>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['PRODUCTS_DATA'], 'products_item', false, NULL, 'aussen', array (
));
$_smarty_tpl->tpl_vars['products_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['products_item']->value) {
$_smarty_tpl->tpl_vars['products_item']->do_else = false;
?>
							<li class="row">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169528992694c0647896347_64808789', "box_best_sellers_product", $this->tplIndex);
?>

							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php
}
}
/* {/block "box_best_sellers_content"} */
/* {block "box_best_sellers_content_if"} */
class Block_1495707640694c0647892b91_11126785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

			<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['PRODUCTS_DATA']) > 0) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1088256480694c0647894958_96574458', "box_best_sellers_content", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "box_best_sellers_content_if"} */
/* {block "box_best_sellers_bottom"} */
class Block_780658587694c06478aa0b3_57785193 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php
}
}
/* {/block "box_best_sellers_bottom"} */
/* {block "box_best_sellers"} */
class Block_1745985981694c0647891886_77625993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_best_sellers' => 
  array (
    0 => 'Block_1745985981694c0647891886_77625993',
  ),
  'box_best_sellers_top' => 
  array (
    0 => 'Block_688988733694c0647891f66_66053085',
  ),
  'box_best_sellers_content_if' => 
  array (
    0 => 'Block_1495707640694c0647892b91_11126785',
  ),
  'box_best_sellers_content' => 
  array (
    0 => 'Block_1088256480694c0647894958_96574458',
  ),
  'box_best_sellers_product' => 
  array (
    0 => 'Block_169528992694c0647896347_64808789',
  ),
  'box_best_sellers_product_image' => 
  array (
    0 => 'Block_1835697259694c064789d135_79493863',
  ),
  'box_best_sellers_product_image_thumbnail_if' => 
  array (
    0 => 'Block_2118992070694c064789d748_86462355',
  ),
  'box_best_sellers_product_image_thumbnail' => 
  array (
    0 => 'Block_191941691694c064789e997_99111697',
  ),
  'box_best_sellers_product_image_no_thumbnail' => 
  array (
    0 => 'Block_1302074568694c06478a00f1_42005679',
  ),
  'box_best_sellers_product_info' => 
  array (
    0 => 'Block_377993274694c06478a1273_59734232',
  ),
  'box_best_sellers_product_info_name' => 
  array (
    0 => 'Block_1134044081694c06478a1801_25988912',
  ),
  'box_best_sellers_product_info_price' => 
  array (
    0 => 'Block_2141846171694c06478a62d9_79239619',
  ),
  'box_best_sellers_product_info_vpe_if' => 
  array (
    0 => 'Block_524973501694c06478a6dc9_94172475',
  ),
  'box_best_sellers_product_info_vpe' => 
  array (
    0 => 'Block_1143630149694c06478a7916_24355922',
  ),
  'box_best_sellers_bottom' => 
  array (
    0 => 'Block_780658587694c06478aa0b3_57785193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['content_data']->value['PRODUCTS_DATA']) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688988733694c0647891f66_66053085', "box_best_sellers_top", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1495707640694c0647892b91_11126785', "box_best_sellers_content_if", $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_780658587694c06478aa0b3_57785193', "box_best_sellers_bottom", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "box_best_sellers"} */
}
