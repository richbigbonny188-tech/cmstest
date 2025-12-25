<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_cart_dropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481a6550_13555007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '815f5b7144974f9200710cc2ed25dd1d3c0a8ebb' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_cart_dropdown.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481a6550_13555007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_cart"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1443720301694c0648191df0_73784828', "layout_header_cart_dropdown");
}
/* {block "layout_header_cart_dropdown_arrow"} */
class Block_807774107694c0648192996_12819428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="arrow"></li>
		<?php
}
}
/* {/block "layout_header_cart_dropdown_arrow"} */
/* {block "layout_header_cart_dropdown_header"} */
class Block_1420571816694c06481938d0_56750812 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<li class="dropdown-header">
						<?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_cart'];?>

					</li>
				<?php
}
}
/* {/block "layout_header_cart_dropdown_header"} */
/* {block "layout_header_cart_dropdown_header_if"} */
class Block_1903823296694c06481930c3_24982933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['empty']->value == 'false') {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1420571816694c06481938d0_56750812', "layout_header_cart_dropdown_header", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "layout_header_cart_dropdown_header_if"} */
/* {block "layout_header_cart_dropdown_checkout_info"} */
class Block_2022429256694c0648195330_30828377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['customer_status_allow_checkout_info']->value;
}
}
/* {/block "layout_header_cart_dropdown_checkout_info"} */
/* {block "layout_header_cart_dropdown_checkout_info_if"} */
class Block_518441038694c0648194b87_26733845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['customer_status_allow_checkout_info']->value) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022429256694c0648195330_30828377', "layout_header_cart_dropdown_checkout_info", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "layout_header_cart_dropdown_checkout_info_if"} */
/* {block "box_car_dropdown_product_image"} */
class Block_2112581901694c064819b819_44203448 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<img alt="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['NAME'];?>
" data-holder-rendered="true" src="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['IMAGE'];?>
" class="img-responsive" />
																<?php
}
}
/* {/block "box_car_dropdown_product_image"} */
/* {block "box_car_dropdown_product_no_image"} */
class Block_1706925821694c064819c5d3_43902495 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																	<div class="fa fa-picture-o no-pic"></div>
																<?php
}
}
/* {/block "box_car_dropdown_product_no_image"} */
/* {block "box_car_dropdown_product_quantity_and_unit"} */
class Block_725344128694c064819d338_01281128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php echo $_smarty_tpl->tpl_vars['products_data']->value['QTY'];
if ($_smarty_tpl->tpl_vars['products_data']->value['UNIT']) {?> <?php echo $_smarty_tpl->tpl_vars['products_data']->value['UNIT'];
} else { ?>x<?php }?>
															<?php
}
}
/* {/block "box_car_dropdown_product_quantity_and_unit"} */
/* {block "box_car_dropdown_product_name"} */
class Block_1110220264694c064819e478_23370000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['products_data']->value['NAME'];
}
}
/* {/block "box_car_dropdown_product_name"} */
/* {block "box_car_dropdown_product_vpe"} */
class Block_314734396694c064819f2f1_28851211 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																		<br /><span class="products-vpe"><?php echo $_smarty_tpl->tpl_vars['products_data']->value['VPE'];?>
</span>
																	<?php
}
}
/* {/block "box_car_dropdown_product_vpe"} */
/* {block "box_car_dropdown_product_vpe_if"} */
class Block_1386257918694c064819ec37_39079548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<?php if ($_smarty_tpl->tpl_vars['products_data']->value['VPE']) {?>
																	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314734396694c064819f2f1_28851211', "box_car_dropdown_product_vpe", $this->tplIndex);
?>

																<?php }?>
															<?php
}
}
/* {/block "box_car_dropdown_product_vpe_if"} */
/* {block "box_car_dropdown_product_price"} */
class Block_1863759512694c064819fdb3_10854731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['products_data']->value['PRICE'];
}
}
/* {/block "box_car_dropdown_product_price"} */
/* {block "box_car_dropdown_product"} */
class Block_725160559694c064819a9e8_78400827 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

													<a class="" href="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['LINK'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['products_data']->value['NAME'];?>
">
														<span class="img col-xs-3">
															<?php if ($_smarty_tpl->tpl_vars['products_data']->value['IMAGE']) {?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112581901694c064819b819_44203448', "box_car_dropdown_product_image", $this->tplIndex);
?>

															<?php } else { ?>
																<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1706925821694c064819c5d3_43902495', "box_car_dropdown_product_no_image", $this->tplIndex);
?>

															<?php }?>
														</span>
														<span class="name <?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?>hyphenate<?php }?> col-xs-5">
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_725344128694c064819d338_01281128', "box_car_dropdown_product_quantity_and_unit", $this->tplIndex);
?>

															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1110220264694c064819e478_23370000', "box_car_dropdown_product_name", $this->tplIndex);
?>

															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1386257918694c064819ec37_39079548', "box_car_dropdown_product_vpe_if", $this->tplIndex);
?>

														</span>
														<span class="price col-xs-4">
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863759512694c064819fdb3_10854731', "box_car_dropdown_product_price", $this->tplIndex);
?>

														</span>
													</a>
												<?php
}
}
/* {/block "box_car_dropdown_product"} */
/* {block "box_car_dropdown_product_list_item"} */
class Block_902343505694c0648199a95_59263701 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

											<li class="row<?php if ($_smarty_tpl->tpl_vars['counter']->value == 0) {?> first<?php } elseif ($_smarty_tpl->tpl_vars['counter']->value == smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value)-1) {?> last<?php }?>">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_725160559694c064819a9e8_78400827', "box_car_dropdown_product", $this->tplIndex);
?>

											</li>
										<?php
}
}
/* {/block "box_car_dropdown_product_list_item"} */
/* {block "box_car_dropdown_product_list"} */
class Block_495572747694c0648198b27_95674434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<ul class="products-list">
									
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'products_data', false, 'counter', 'aussen', array (
));
$_smarty_tpl->tpl_vars['products_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value => $_smarty_tpl->tpl_vars['products_data']->value) {
$_smarty_tpl->tpl_vars['products_data']->do_else = false;
?>
									
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902343505694c0648199a95_59263701', "box_car_dropdown_product_list_item", $this->tplIndex);
?>

				
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</ul>
							<?php
}
}
/* {/block "box_car_dropdown_product_list"} */
/* {block "layout_header_cart_dropdown_cart_button"} */
class Block_454921270694c06481a24a4_25084437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.xtc_href_link.php','function'=>'smarty_modifier_xtc_href_link',),));
?>

									<div class="cart-button">
										<a class="btn btn-block btn-primary" href="<?php echo smarty_modifier_xtc_href_link('shopping_cart.php');?>
" title="<?php echo $_smarty_tpl->tpl_vars['button']->value['to_cart'];?>
">
											<?php echo $_smarty_tpl->tpl_vars['button']->value['to_cart'];?>

										</a>
									</div>
								<?php
}
}
/* {/block "layout_header_cart_dropdown_cart_button"} */
/* {block "layout_header_cart_dropdown_footer"} */
class Block_2132887490694c06481a0d78_68581384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="dropdown-footer">
							
								<?php if ($_smarty_tpl->tpl_vars['customer_status_allow_checkout']->value == '1') {?>
									<?php if ($_smarty_tpl->tpl_vars['discount']->value) {?>
										<div class="discount row">
											<span class="col-xs-5">
												<?php echo $_smarty_tpl->tpl_vars['discount']->value['rate'];?>

											</span>
												<span class="col-xs-7 text-right">
												<?php echo $_smarty_tpl->tpl_vars['discount']->value['price'];?>

											</span>
										</div>
									<?php }?>
									<div class="total row">
										<span class="col-xs-4">
											<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_total'];?>

										</span>
										<span class="col-xs-8">
											<?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

										</span>
									</div>
									<div class="tax">
										<?php echo $_smarty_tpl->tpl_vars['UST']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['SHIPPING_INFO']->value) {
echo $_smarty_tpl->tpl_vars['SHIPPING_INFO']->value;
}?>
									</div>
								<?php }?>
								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_454921270694c06481a24a4_25084437', "layout_header_cart_dropdown_cart_button", $this->tplIndex);
?>

				
							</div>
						<?php
}
}
/* {/block "layout_header_cart_dropdown_footer"} */
/* {block "box_car_dropdown_product_list_if"} */
class Block_1749032344694c06481961c9_51264012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

						<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_495572747694c0648198b27_95674434', "box_car_dropdown_product_list", $this->tplIndex);
?>

						<?php }?>
					
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2132887490694c06481a0d78_68581384', "layout_header_cart_dropdown_footer", $this->tplIndex);
?>

					<?php
}
}
/* {/block "box_car_dropdown_product_list_if"} */
/* {block "box_cart_drop_down_empty_cart"} */
class Block_2021576822694c06481a59d1_85241793 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="cart-empty">
							<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_empty_cart'];?>

						</div>
					<?php
}
}
/* {/block "box_cart_drop_down_empty_cart"} */
/* {block "layout_header_cart_dropdown_inside"} */
class Block_1782510762694c06481947c6_59108549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="cart-dropdown-inside">
		
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_518441038694c0648194b87_26733845', "layout_header_cart_dropdown_checkout_info_if", $this->tplIndex);
?>

				
				<?php if ($_smarty_tpl->tpl_vars['empty']->value == 'false') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1749032344694c06481961c9_51264012', "box_car_dropdown_product_list_if", $this->tplIndex);
?>

				
				<?php } else { ?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2021576822694c06481a59d1_85241793', "box_cart_drop_down_empty_cart", $this->tplIndex);
?>

				<?php }?>
				
			</li>
		<?php
}
}
/* {/block "layout_header_cart_dropdown_inside"} */
/* {block "layout_header_cart_dropdown"} */
class Block_1443720301694c0648191df0_73784828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_header_cart_dropdown' => 
  array (
    0 => 'Block_1443720301694c0648191df0_73784828',
  ),
  'layout_header_cart_dropdown_arrow' => 
  array (
    0 => 'Block_807774107694c0648192996_12819428',
  ),
  'layout_header_cart_dropdown_header_if' => 
  array (
    0 => 'Block_1903823296694c06481930c3_24982933',
  ),
  'layout_header_cart_dropdown_header' => 
  array (
    0 => 'Block_1420571816694c06481938d0_56750812',
  ),
  'layout_header_cart_dropdown_inside' => 
  array (
    0 => 'Block_1782510762694c06481947c6_59108549',
  ),
  'layout_header_cart_dropdown_checkout_info_if' => 
  array (
    0 => 'Block_518441038694c0648194b87_26733845',
  ),
  'layout_header_cart_dropdown_checkout_info' => 
  array (
    0 => 'Block_2022429256694c0648195330_30828377',
  ),
  'box_car_dropdown_product_list_if' => 
  array (
    0 => 'Block_1749032344694c06481961c9_51264012',
  ),
  'box_car_dropdown_product_list' => 
  array (
    0 => 'Block_495572747694c0648198b27_95674434',
  ),
  'box_car_dropdown_product_list_item' => 
  array (
    0 => 'Block_902343505694c0648199a95_59263701',
  ),
  'box_car_dropdown_product' => 
  array (
    0 => 'Block_725160559694c064819a9e8_78400827',
  ),
  'box_car_dropdown_product_image' => 
  array (
    0 => 'Block_2112581901694c064819b819_44203448',
  ),
  'box_car_dropdown_product_no_image' => 
  array (
    0 => 'Block_1706925821694c064819c5d3_43902495',
  ),
  'box_car_dropdown_product_quantity_and_unit' => 
  array (
    0 => 'Block_725344128694c064819d338_01281128',
  ),
  'box_car_dropdown_product_name' => 
  array (
    0 => 'Block_1110220264694c064819e478_23370000',
  ),
  'box_car_dropdown_product_vpe_if' => 
  array (
    0 => 'Block_1386257918694c064819ec37_39079548',
  ),
  'box_car_dropdown_product_vpe' => 
  array (
    0 => 'Block_314734396694c064819f2f1_28851211',
  ),
  'box_car_dropdown_product_price' => 
  array (
    0 => 'Block_1863759512694c064819fdb3_10854731',
  ),
  'layout_header_cart_dropdown_footer' => 
  array (
    0 => 'Block_2132887490694c06481a0d78_68581384',
  ),
  'layout_header_cart_dropdown_cart_button' => 
  array (
    0 => 'Block_454921270694c06481a24a4_25084437',
  ),
  'box_cart_drop_down_empty_cart' => 
  array (
    0 => 'Block_2021576822694c06481a59d1_85241793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="dropdown-menu arrow-top cart-dropdown<?php if ($_smarty_tpl->tpl_vars['empty']->value != 'false') {?> cart-empty<?php }?>">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_807774107694c0648192996_12819428', "layout_header_cart_dropdown_arrow", $this->tplIndex);
?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1903823296694c06481930c3_24982933', "layout_header_cart_dropdown_header_if", $this->tplIndex);
?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1782510762694c06481947c6_59108549', "layout_header_cart_dropdown_inside", $this->tplIndex);
?>

	</ul>
<?php
}
}
/* {/block "layout_header_cart_dropdown"} */
}
