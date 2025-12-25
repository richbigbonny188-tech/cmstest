<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_description.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5be53f23_04921629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d34541a7579769e73eb559836096468ebe66775' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_description.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_customizer_position.html' => 2,
  ),
),false)) {
function content_694d6d5be53f23_04921629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"product_info"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"reviews",'name'=>"reviews"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22612619694d6d5be07f11_30661112', "product_info_product_description");
?>

<?php }
/* {block "product_info_product_description_tab_assign"} */
class Block_931477819694d6d5be08869_39249134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),));
?>

		<?php $_smarty_tpl->_assignInScope('ARR_PRODUCTS_DESCRIPTION', smarty_modifier_explode("<div id=\"tabbed_description_part\">",$_smarty_tpl->tpl_vars['PRODUCTS_DESCRIPTION']->value));?>
	<?php
}
}
/* {/block "product_info_product_description_tab_assign"} */
/* {block "product_info_product_description_show_description_tab_assign"} */
class Block_494110713694d6d5be11fd3_99370935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

		<?php if (($_smarty_tpl->tpl_vars['GM_GPRINT']->value && smarty_modifier_gm_get_conf('CUSTOMIZER_POSITION') === '1') || trim($_smarty_tpl->tpl_vars['ARR_PRODUCTS_DESCRIPTION']->value[0]) !== '') {?>
			<?php $_smarty_tpl->_assignInScope('show_description_tab', true);?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('show_description_tab', false);?>
		<?php }?>
	<?php
}
}
/* {/block "product_info_product_description_show_description_tab_assign"} */
/* {block "product_info_product_description_tabs_description"} */
class Block_575702228694d6d5be22f90_27610174 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li class="active">
											<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_description'];?>
" onclick="return false">
												<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_description'];?>

											</a>
										</li>
									<?php
}
}
/* {/block "product_info_product_description_tabs_description"} */
/* {block "product_info_product_description_tabs_description_if"} */
class Block_793357825694d6d5be221d2_43959976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['show_description_tab']->value) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_575702228694d6d5be22f90_27610174', "product_info_product_description_tabs_description", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tabs_description_if"} */
/* {block "product_info_product_description_tabs_tab"} */
class Block_650540523694d6d5be26929_37871641 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first'] : null)) {?> class="active"<?php }?>>
											<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['title'];?>
" onclick="return false">
												<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['title'];?>

											</a>
										</li>
									<?php
}
}
/* {/block "product_info_product_description_tabs_tab"} */
/* {block "product_info_product_description_tabs_tab_foreach"} */
class Block_99721580694d6d5be25d81_73618449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab_item', false, NULL, 'tabs_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tab_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->value) {
$_smarty_tpl->tpl_vars['tab_item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['index'];
?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_650540523694d6d5be26929_37871641', "product_info_product_description_tabs_tab", $this->tplIndex);
?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
}
/* {/block "product_info_product_description_tabs_tab_foreach"} */
/* {block "product_info_product_description_tabs_customizer"} */
class Block_340526178694d6d5be29e17_86572889 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

										<li<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> class="active"<?php }?>>
											<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_customizer_tab'];?>
" onclick="return false">
												<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_customizer_tab'];?>

											</a>
										</li>
									<?php
}
}
/* {/block "product_info_product_description_tabs_customizer"} */
/* {block "product_info_product_description_tabs_customizer_if"} */
class Block_641548477694d6d5be28153_83074617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

								<?php if ($_smarty_tpl->tpl_vars['GM_GPRINT']->value && smarty_modifier_gm_get_conf('CUSTOMIZER_POSITION') === '2') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_340526178694d6d5be29e17_86572889', "product_info_product_description_tabs_customizer", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tabs_customizer_if"} */
/* {block "product_info_product_description_tabs_rating_if"} */
class Block_381358997694d6d5be2dac0_17629763 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

								<?php if ($_smarty_tpl->tpl_vars['showRating']->value && smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true') {?>
									<li<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> class="active"<?php }?> id="reviews-tab">
										<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_reviews'];?>
" onclick="return false">
											<?php echo $_smarty_tpl->tpl_vars['reviews']->value['heading_reviews'];?>
 <?php if ($_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'] > 0) {?>(<?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'];?>
)<?php }?>
										</a>
									</li>
								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tabs_rating_if"} */
/* {block "product_info_product_description_tabs"} */
class Block_122701475694d6d5be219f4_26538101 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<ul class="nav nav-tabs">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793357825694d6d5be221d2_43959976', "product_info_product_description_tabs_description_if", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99721580694d6d5be25d81_73618449', "product_info_product_description_tabs_tab_foreach", $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641548477694d6d5be28153_83074617', "product_info_product_description_tabs_customizer_if", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_381358997694d6d5be2dac0_17629763', "product_info_product_description_tabs_rating_if", $this->tplIndex);
?>

						</ul>
					<?php
}
}
/* {/block "product_info_product_description_tabs"} */
/* {block "product_info_product_description_tab_panels_description_heading"} */
class Block_5465703694d6d5be313f1_62148874 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-heading">
													<a href="#" onclick="return false"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_description'];?>
</a>
												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_description_heading"} */
/* {block "product_info_product_description_tab_panels_description_body_customizer_include"} */
class Block_1700125024694d6d5be33b23_48151152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_customizer_position.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>1), 0, true);
?>
													<?php
}
}
/* {/block "product_info_product_description_tab_panels_description_body_customizer_include"} */
/* {block "product_info_product_description_tab_panels_description_body"} */
class Block_405298831694d6d5be32a44_39914622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-body active">
													<?php echo $_smarty_tpl->tpl_vars['ARR_PRODUCTS_DESCRIPTION']->value[0];?>


													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700125024694d6d5be33b23_48151152', "product_info_product_description_tab_panels_description_body_customizer_include", $this->tplIndex);
?>

												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_description_body"} */
/* {block "product_info_product_description_tab_panels_description"} */
class Block_1261488407694d6d5be30c47_89606417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="tab-pane active">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5465703694d6d5be313f1_62148874', "product_info_product_description_tab_panels_description_heading", $this->tplIndex);
?>


											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_405298831694d6d5be32a44_39914622', "product_info_product_description_tab_panels_description_body", $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block "product_info_product_description_tab_panels_description"} */
/* {block "product_info_product_description_tab_panels_description_if"} */
class Block_1418746753694d6d5be2ffb4_22884570 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['show_description_tab']->value) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1261488407694d6d5be30c47_89606417', "product_info_product_description_tab_panels_description", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tab_panels_description_if"} */
/* {block "product_info_product_description_tab_panels_tab_heading"} */
class Block_482226051694d6d5be396c6_58357307 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-heading">
													<a href="#" onclick="return false"><?php echo $_smarty_tpl->tpl_vars['tab_item']->value['title'];?>
</a>
												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_tab_heading"} */
/* {block "product_info_product_description_tab_panels_tab_body"} */
class Block_633931711694d6d5be3aa25_93809016 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-body<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first'] : null)) {?> active<?php }?>">
													<?php echo $_smarty_tpl->tpl_vars['tab_item']->value['content'];?>

												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_tab_body"} */
/* {block "product_info_product_description_tab_panels_tab"} */
class Block_1834179008694d6d5be37ce2_74827472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first'] : null)) {?> active<?php }?>">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_482226051694d6d5be396c6_58357307', "product_info_product_description_tab_panels_tab_heading", $this->tplIndex);
?>

											
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_633931711694d6d5be3aa25_93809016', "product_info_product_description_tab_panels_tab_body", $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block "product_info_product_description_tab_panels_tab"} */
/* {block "product_info_product_description_tab_panels_tab_foreach"} */
class Block_423971610694d6d5be363e5_26689975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab_item', false, NULL, 'tabs_loop', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['tab_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_item']->value) {
$_smarty_tpl->tpl_vars['tab_item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_tabs_loop']->value['index'];
?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1834179008694d6d5be37ce2_74827472', "product_info_product_description_tab_panels_tab", $this->tplIndex);
?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php
}
}
/* {/block "product_info_product_description_tab_panels_tab_foreach"} */
/* {block "product_info_product_description_tab_panels_customizer_heading"} */
class Block_49102727694d6d5be40cd8_94907153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-heading">
													<a href="#" onclick="return false"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_customizer_tab'];?>
</a>
												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_customizer_heading"} */
/* {block "product_info_product_description_tab_panels_customizer_body"} */
class Block_1576514963694d6d5be424b0_09334020 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

												<div class="tab-body<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> active<?php }?>">
													<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_customizer_position.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>2), 0, true);
?>
												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_customizer_body"} */
/* {block "product_info_product_description_tab_panels_customizer"} */
class Block_736375441694d6d5be3ee55_27128806 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

										<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> active<?php }?>">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49102727694d6d5be40cd8_94907153', "product_info_product_description_tab_panels_customizer_heading", $this->tplIndex);
?>

											
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1576514963694d6d5be424b0_09334020', "product_info_product_description_tab_panels_customizer_body", $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block "product_info_product_description_tab_panels_customizer"} */
/* {block "product_info_product_description_tab_panels_customizer_if"} */
class Block_163971388694d6d5be3d9c2_80145623 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

								<?php if ($_smarty_tpl->tpl_vars['GM_GPRINT']->value && smarty_modifier_gm_get_conf('CUSTOMIZER_POSITION') === '2') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_736375441694d6d5be3ee55_27128806', "product_info_product_description_tab_panels_customizer", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tab_panels_customizer_if"} */
/* {block "product_info_product_description_tab_panels_rating_heading"} */
class Block_617664940694d6d5be4a681_20464472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<div class="tab-heading">
													<a href="#" onclick="return false"><?php echo $_smarty_tpl->tpl_vars['reviews']->value['heading_reviews'];?>
 <?php if ($_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'] > 0) {?>(<?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'];?>
)<?php }?></a>
												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating_heading"} */
/* {block "product_info_product_description_tab_panels_rating_body_content"} */
class Block_1684436836694d6d5be4f369_05489180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<div id="product-ratings" class="product-info-rating">
															<?php echo $_smarty_tpl->tpl_vars['MODULE_products_reviews']->value;?>

														</div>
													<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating_body_content"} */
/* {block "product_info_product_description_tab_panels_rating_body"} */
class Block_954371158694d6d5be4d645_69857072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

												<div class="tab-body<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> active<?php }?>">
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1684436836694d6d5be4f369_05489180', "product_info_product_description_tab_panels_rating_body_content", $this->tplIndex);
?>

												</div>
											<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating_body"} */
/* {block "product_info_product_description_tab_panels_rating"} */
class Block_494924739694d6d5be489a8_06749390 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

										<div class="tab-pane<?php if (!$_smarty_tpl->tpl_vars['show_description_tab']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) === 0) {?> active<?php }?>">
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_617664940694d6d5be4a681_20464472', "product_info_product_description_tab_panels_rating_heading", $this->tplIndex);
?>

											
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_954371158694d6d5be4d645_69857072', "product_info_product_description_tab_panels_rating_body", $this->tplIndex);
?>

										</div>
									<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating"} */
/* {block "product_info_product_description_tab_panels_rating_if"} */
class Block_324604133694d6d5be46ad0_14090272 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

								<?php if ($_smarty_tpl->tpl_vars['showRating']->value && smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true' && $_smarty_tpl->tpl_vars['reviews']->value != '') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_494924739694d6d5be489a8_06749390', "product_info_product_description_tab_panels_rating", $this->tplIndex);
?>

								<?php }?>
							<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating_if"} */
/* {block "product_info_product_description_tab_panels"} */
class Block_1820141469694d6d5be2fc66_12324753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="tab-content">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1418746753694d6d5be2ffb4_22884570', "product_info_product_description_tab_panels_description_if", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_423971610694d6d5be363e5_26689975', "product_info_product_description_tab_panels_tab_foreach", $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163971388694d6d5be3d9c2_80145623', "product_info_product_description_tab_panels_customizer_if", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324604133694d6d5be46ad0_14090272', "product_info_product_description_tab_panels_rating_if", $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block "product_info_product_description_tab_panels"} */
/* {block "product_info_product_description_tabs_container"} */
class Block_2131335315694d6d5be1f5a4_68104075 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

				<div class="nav-tabs-container<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) > 0 || ($_smarty_tpl->tpl_vars['showRating']->value && smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true')) {?> has-multi-tabs<?php }?>"
					 data-gambio-widget="tabs">
			
					<!-- Nav tabs -->
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122701475694d6d5be219f4_26538101', "product_info_product_description_tabs", $this->tplIndex);
?>

			
					<!-- Tab panes -->
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1820141469694d6d5be2fc66_12324753', "product_info_product_description_tab_panels", $this->tplIndex);
?>

				</div>
			<?php
}
}
/* {/block "product_info_product_description_tabs_container"} */
/* {block "product_info_product_description_tabs_container_if"} */
class Block_1349184217694d6d5be194a5_66319440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

		<?php if ($_smarty_tpl->tpl_vars['show_description_tab']->value || smarty_modifier_count($_smarty_tpl->tpl_vars['tabs']->value) > 0 || ($_smarty_tpl->tpl_vars['GM_GPRINT']->value && smarty_modifier_gm_get_conf('CUSTOMIZER_POSITION') !== '3') || ($_smarty_tpl->tpl_vars['showRating']->value && smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true')) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2131335315694d6d5be1f5a4_68104075', "product_info_product_description_tabs_container", $this->tplIndex);
?>

		<?php }?>
	<?php
}
}
/* {/block "product_info_product_description_tabs_container_if"} */
/* {block "product_info_product_description"} */
class Block_22612619694d6d5be07f11_30661112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_description' => 
  array (
    0 => 'Block_22612619694d6d5be07f11_30661112',
  ),
  'product_info_product_description_tab_assign' => 
  array (
    0 => 'Block_931477819694d6d5be08869_39249134',
  ),
  'product_info_product_description_show_description_tab_assign' => 
  array (
    0 => 'Block_494110713694d6d5be11fd3_99370935',
  ),
  'product_info_product_description_tabs_container_if' => 
  array (
    0 => 'Block_1349184217694d6d5be194a5_66319440',
  ),
  'product_info_product_description_tabs_container' => 
  array (
    0 => 'Block_2131335315694d6d5be1f5a4_68104075',
  ),
  'product_info_product_description_tabs' => 
  array (
    0 => 'Block_122701475694d6d5be219f4_26538101',
  ),
  'product_info_product_description_tabs_description_if' => 
  array (
    0 => 'Block_793357825694d6d5be221d2_43959976',
  ),
  'product_info_product_description_tabs_description' => 
  array (
    0 => 'Block_575702228694d6d5be22f90_27610174',
  ),
  'product_info_product_description_tabs_tab_foreach' => 
  array (
    0 => 'Block_99721580694d6d5be25d81_73618449',
  ),
  'product_info_product_description_tabs_tab' => 
  array (
    0 => 'Block_650540523694d6d5be26929_37871641',
  ),
  'product_info_product_description_tabs_customizer_if' => 
  array (
    0 => 'Block_641548477694d6d5be28153_83074617',
  ),
  'product_info_product_description_tabs_customizer' => 
  array (
    0 => 'Block_340526178694d6d5be29e17_86572889',
  ),
  'product_info_product_description_tabs_rating_if' => 
  array (
    0 => 'Block_381358997694d6d5be2dac0_17629763',
  ),
  'product_info_product_description_tab_panels' => 
  array (
    0 => 'Block_1820141469694d6d5be2fc66_12324753',
  ),
  'product_info_product_description_tab_panels_description_if' => 
  array (
    0 => 'Block_1418746753694d6d5be2ffb4_22884570',
  ),
  'product_info_product_description_tab_panels_description' => 
  array (
    0 => 'Block_1261488407694d6d5be30c47_89606417',
  ),
  'product_info_product_description_tab_panels_description_heading' => 
  array (
    0 => 'Block_5465703694d6d5be313f1_62148874',
  ),
  'product_info_product_description_tab_panels_description_body' => 
  array (
    0 => 'Block_405298831694d6d5be32a44_39914622',
  ),
  'product_info_product_description_tab_panels_description_body_customizer_include' => 
  array (
    0 => 'Block_1700125024694d6d5be33b23_48151152',
  ),
  'product_info_product_description_tab_panels_tab_foreach' => 
  array (
    0 => 'Block_423971610694d6d5be363e5_26689975',
  ),
  'product_info_product_description_tab_panels_tab' => 
  array (
    0 => 'Block_1834179008694d6d5be37ce2_74827472',
  ),
  'product_info_product_description_tab_panels_tab_heading' => 
  array (
    0 => 'Block_482226051694d6d5be396c6_58357307',
  ),
  'product_info_product_description_tab_panels_tab_body' => 
  array (
    0 => 'Block_633931711694d6d5be3aa25_93809016',
  ),
  'product_info_product_description_tab_panels_customizer_if' => 
  array (
    0 => 'Block_163971388694d6d5be3d9c2_80145623',
  ),
  'product_info_product_description_tab_panels_customizer' => 
  array (
    0 => 'Block_736375441694d6d5be3ee55_27128806',
  ),
  'product_info_product_description_tab_panels_customizer_heading' => 
  array (
    0 => 'Block_49102727694d6d5be40cd8_94907153',
  ),
  'product_info_product_description_tab_panels_customizer_body' => 
  array (
    0 => 'Block_1576514963694d6d5be424b0_09334020',
  ),
  'product_info_product_description_tab_panels_rating_if' => 
  array (
    0 => 'Block_324604133694d6d5be46ad0_14090272',
  ),
  'product_info_product_description_tab_panels_rating' => 
  array (
    0 => 'Block_494924739694d6d5be489a8_06749390',
  ),
  'product_info_product_description_tab_panels_rating_heading' => 
  array (
    0 => 'Block_617664940694d6d5be4a681_20464472',
  ),
  'product_info_product_description_tab_panels_rating_body' => 
  array (
    0 => 'Block_954371158694d6d5be4d645_69857072',
  ),
  'product_info_product_description_tab_panels_rating_body_content' => 
  array (
    0 => 'Block_1684436836694d6d5be4f369_05489180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931477819694d6d5be08869_39249134', "product_info_product_description_tab_assign", $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_494110713694d6d5be11fd3_99370935', "product_info_product_description_show_description_tab_assign", $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1349184217694d6d5be194a5_66319440', "product_info_product_description_tabs_container_if", $this->tplIndex);
?>

<?php
}
}
/* {/block "product_info_product_description"} */
}
