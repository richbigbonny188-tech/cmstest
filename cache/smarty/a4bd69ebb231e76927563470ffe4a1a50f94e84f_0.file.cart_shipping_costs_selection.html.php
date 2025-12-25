<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:08
  from 'C:\xampp\htdocs\public\theme\html\system\cart_shipping_costs_selection.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd4d91b92_03808204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4bd69ebb231e76927563470ffe4a1a50f94e84f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\cart_shipping_costs_selection.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_shipping_costs_shipping_module_selection.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."cart_shipping_costs_shipping_weight_information.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."alert_message.html' => 1,
  ),
),false)) {
function content_694d6dd4d91b92_03808204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"cart_shipping_costs"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('name'=>"order_details",'section'=>"order_details"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862496313694d6dd4d368b7_45642735', "cart_shipping_costs_selection");
?>

<?php }
/* {block "cart_shipping_costs_selection_country_label"} */
class Block_1700439250694d6dd4d3c6a4_07743877 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<label class="control-label col-xs-12 col-sm-3" for="cart-shipping-country">
									<?php echo $_smarty_tpl->tpl_vars['txt']->value['delivery_country'];?>
:
								</label>
							<?php
}
}
/* {/block "cart_shipping_costs_selection_country_label"} */
/* {block "cart_shipping_costs_selection_country_only_one"} */
class Block_823704919694d6dd4d49751_45484241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<?php echo $_smarty_tpl->tpl_vars['country_data']->value['countries_name'];?>

												<input type="hidden" name="cart_shipping_country" value="<?php echo $_smarty_tpl->tpl_vars['country_data']->value['countries_id'];?>
" />
											<?php
}
}
/* {/block "cart_shipping_costs_selection_country_only_one"} */
/* {block "cart_shipping_costs_selection_country_option"} */
class Block_1091315977694d6dd4d4e363_74595795 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

														<option value="<?php echo $_smarty_tpl->tpl_vars['country_data']->value['countries_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['country_data']->value['countries_id'] == $_smarty_tpl->tpl_vars['content_data']->value['selected_country']) {?>selected="selected"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['country_data']->value['countries_name'];?>
">
														<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['country_data']->value['countries_name'],80,"...",true);?>

														</option>
													<?php
}
}
/* {/block "cart_shipping_costs_selection_country_option"} */
/* {block "cart_shipping_costs_selection_country_selection"} */
class Block_1058712784694d6dd4d4cad4_32938905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<select id="cart-shipping-country" name="cart_shipping_country" class="form-control">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['shipping_countries'], 'country_data');
$_smarty_tpl->tpl_vars['country_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_data']->value) {
$_smarty_tpl->tpl_vars['country_data']->do_else = false;
?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1091315977694d6dd4d4e363_74595795', "cart_shipping_costs_selection_country_option", $this->tplIndex);
?>

												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										<?php
}
}
/* {/block "cart_shipping_costs_selection_country_selection"} */
/* {block "cart_shipping_costs_selection_country_container"} */
class Block_1107022960694d6dd4d3dcc0_70671145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<span class="shipping-calculator-country col-xs-12 col-sm-9">
									<?php if (count($_smarty_tpl->tpl_vars['content_data']->value['shipping_countries']) == 1) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['shipping_countries'], 'country_data');
$_smarty_tpl->tpl_vars['country_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country_data']->value) {
$_smarty_tpl->tpl_vars['country_data']->do_else = false;
?>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_823704919694d6dd4d49751_45484241', "cart_shipping_costs_selection_country_only_one", $this->tplIndex);
?>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1058712784694d6dd4d4cad4_32938905', "cart_shipping_costs_selection_country_selection", $this->tplIndex);
?>

									<?php }?>
								</span>
							<?php
}
}
/* {/block "cart_shipping_costs_selection_country_container"} */
/* {block "cart_shipping_costs_selection_country"} */
class Block_964904983694d6dd4d3bd51_33720754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1700439250694d6dd4d3c6a4_07743877', "cart_shipping_costs_selection_country_label", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107022960694d6dd4d3dcc0_70671145', "cart_shipping_costs_selection_country_container", $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block "cart_shipping_costs_selection_country"} */
/* {block "cart_shipping_costs_selection_shipping_label"} */
class Block_175352193694d6dd4d5e405_31069081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<label class="control-label col-xs-12 col-sm-3" for="cart-shipping-module">
									<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_module'];?>
:
								</label>
							<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_label"} */
/* {block "cart_shipping_costs_selection_shipping_selection"} */
class Block_1760660037694d6dd4d5f726_55857057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_shipping_costs_shipping_module_selection.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_selection"} */
/* {block "cart_shipping_costs_selection_shipping"} */
class Block_2056944444694d6dd4d5dbe5_19203403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175352193694d6dd4d5e405_31069081', "cart_shipping_costs_selection_shipping_label", $this->tplIndex);
?>

							
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1760660037694d6dd4d5f726_55857057', "cart_shipping_costs_selection_shipping_selection", $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping"} */
/* {block "cart_shipping_costs_selection_shipping_weight_label"} */
class Block_2366535694d6dd4d80d08_05001071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<label class="control-label col-xs-12 col-sm-3">
										<?php echo $_smarty_tpl->tpl_vars['order_details']->value['shipping_weight'];?>
:
									</label>
								<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_weight_label"} */
/* {block "cart_shipping_costs_selection_shipping_weight_information"} */
class Block_1490721392694d6dd4d83426_83609165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_shipping_costs_shipping_weight_information.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_weight_information"} */
/* {block "cart_shipping_costs_selection_shipping_weight"} */
class Block_555797158694d6dd4d80493_15624757 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="form-group">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2366535694d6dd4d80d08_05001071', "cart_shipping_costs_selection_shipping_weight_label", $this->tplIndex);
?>

								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490721392694d6dd4d83426_83609165', "cart_shipping_costs_selection_shipping_weight_information", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_weight"} */
/* {block "cart_shipping_costs_selection_shipping_costs_label"} */
class Block_359404389694d6dd4d86231_79432857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<label class="control-label col-xs-12 col-sm-3">
										<?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_costs'];?>
:
									</label>
								<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_costs_label"} */
/* {block "cart_shipping_costs_selection_shipping_costs_text"} */
class Block_2035280768694d6dd4d87340_13744073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<span class="shipping-calculator-shipping-costs col-xs-12 col-sm-9 text-bold">
										<?php echo $_smarty_tpl->tpl_vars['content_data']->value['shipping_costs'];?>

									</span>
								<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_costs_text"} */
/* {block "cart_shipping_costs_selection_shipping_costs_alert"} */
class Block_363807987694d6dd4d885b4_22978058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['content_data']->value['shipping_costs_error'],'type'=>"danger"), 0, true);
?>
									<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_costs_alert"} */
/* {block "cart_shipping_costs_selection_shipping_costs_gambioultra"} */
class Block_2037911590694d6dd4d8a5c2_33199110 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

									<span class="shipping-calculator-gambioultra-info col-xs-12 col-sm-9 col-sm-offset-3">
										<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['content_data']->value['ot_gambioultra_info_html'],"<br />",'');?>

									</span>
								<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_costs_gambioultra"} */
/* {block "cart_shipping_costs_selection_shipping_costs"} */
class Block_1421868204694d6dd4d85ac8_65431515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="form-group">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_359404389694d6dd4d86231_79432857', "cart_shipping_costs_selection_shipping_costs_label", $this->tplIndex);
?>

								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035280768694d6dd4d87340_13744073', "cart_shipping_costs_selection_shipping_costs_text", $this->tplIndex);
?>

								
								<?php if ($_smarty_tpl->tpl_vars['content_data']->value['shipping_costs_error'] != '') {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363807987694d6dd4d885b4_22978058', "cart_shipping_costs_selection_shipping_costs_alert", $this->tplIndex);
?>

								<?php }?>
								
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2037911590694d6dd4d8a5c2_33199110', "cart_shipping_costs_selection_shipping_costs_gambioultra", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "cart_shipping_costs_selection_shipping_costs"} */
/* {block "cart_shipping_costs_selection_form"} */
class Block_1316491533694d6dd4d3aa00_18556617 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<form action="#" method="post">
				<div class="form-horizontal shipping-calculation" data-gambio-_widget="shipping_calculator">
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_964904983694d6dd4d3bd51_33720754', "cart_shipping_costs_selection_country", $this->tplIndex);
?>

					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2056944444694d6dd4d5dbe5_19203403', "cart_shipping_costs_selection_shipping", $this->tplIndex);
?>

		
					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['show_shipping_weight'] == 1) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_555797158694d6dd4d80493_15624757', "cart_shipping_costs_selection_shipping_weight", $this->tplIndex);
?>

					<?php }?>
		
					<?php if (count($_smarty_tpl->tpl_vars['content_data']->value['shipping_modules']) > 0) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421868204694d6dd4d85ac8_65431515', "cart_shipping_costs_selection_shipping_costs", $this->tplIndex);
?>

					<?php }?>
		
				</div>
			</form>
		<?php
}
}
/* {/block "cart_shipping_costs_selection_form"} */
/* {block "cart_shipping_costs_selection"} */
class Block_862496313694d6dd4d368b7_45642735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_shipping_costs_selection' => 
  array (
    0 => 'Block_862496313694d6dd4d368b7_45642735',
  ),
  'cart_shipping_costs_selection_form' => 
  array (
    0 => 'Block_1316491533694d6dd4d3aa00_18556617',
  ),
  'cart_shipping_costs_selection_country' => 
  array (
    0 => 'Block_964904983694d6dd4d3bd51_33720754',
  ),
  'cart_shipping_costs_selection_country_label' => 
  array (
    0 => 'Block_1700439250694d6dd4d3c6a4_07743877',
  ),
  'cart_shipping_costs_selection_country_container' => 
  array (
    0 => 'Block_1107022960694d6dd4d3dcc0_70671145',
  ),
  'cart_shipping_costs_selection_country_only_one' => 
  array (
    0 => 'Block_823704919694d6dd4d49751_45484241',
  ),
  'cart_shipping_costs_selection_country_selection' => 
  array (
    0 => 'Block_1058712784694d6dd4d4cad4_32938905',
  ),
  'cart_shipping_costs_selection_country_option' => 
  array (
    0 => 'Block_1091315977694d6dd4d4e363_74595795',
  ),
  'cart_shipping_costs_selection_shipping' => 
  array (
    0 => 'Block_2056944444694d6dd4d5dbe5_19203403',
  ),
  'cart_shipping_costs_selection_shipping_label' => 
  array (
    0 => 'Block_175352193694d6dd4d5e405_31069081',
  ),
  'cart_shipping_costs_selection_shipping_selection' => 
  array (
    0 => 'Block_1760660037694d6dd4d5f726_55857057',
  ),
  'cart_shipping_costs_selection_shipping_weight' => 
  array (
    0 => 'Block_555797158694d6dd4d80493_15624757',
  ),
  'cart_shipping_costs_selection_shipping_weight_label' => 
  array (
    0 => 'Block_2366535694d6dd4d80d08_05001071',
  ),
  'cart_shipping_costs_selection_shipping_weight_information' => 
  array (
    0 => 'Block_1490721392694d6dd4d83426_83609165',
  ),
  'cart_shipping_costs_selection_shipping_costs' => 
  array (
    0 => 'Block_1421868204694d6dd4d85ac8_65431515',
  ),
  'cart_shipping_costs_selection_shipping_costs_label' => 
  array (
    0 => 'Block_359404389694d6dd4d86231_79432857',
  ),
  'cart_shipping_costs_selection_shipping_costs_text' => 
  array (
    0 => 'Block_2035280768694d6dd4d87340_13744073',
  ),
  'cart_shipping_costs_selection_shipping_costs_alert' => 
  array (
    0 => 'Block_363807987694d6dd4d885b4_22978058',
  ),
  'cart_shipping_costs_selection_shipping_costs_gambioultra' => 
  array (
    0 => 'Block_2037911590694d6dd4d8a5c2_33199110',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_assignInScope("content_data.show_shipping_weight_info", 1);?>
	
	<div id="shipping-information-layer" class="hidden">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316491533694d6dd4d3aa00_18556617', "cart_shipping_costs_selection_form", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "cart_shipping_costs_selection"} */
}
