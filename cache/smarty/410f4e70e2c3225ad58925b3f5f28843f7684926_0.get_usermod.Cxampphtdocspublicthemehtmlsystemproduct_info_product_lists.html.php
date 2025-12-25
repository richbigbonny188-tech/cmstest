<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5be74e00_41151939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '410f4e70e2c3225ad58925b3f5f28843f7684926' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_lists.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5be74e00_41151939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043882267694d6d5be6cf99_96466169', "product_info_product_lists");
?>

<?php }
/* {block "product_info_product_lists_cross_selling"} */
class Block_527644659694d6d5be6d810_55504815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['MODULE_cross_selling']->value;?>

	<?php
}
}
/* {/block "product_info_product_lists_cross_selling"} */
/* {block "product_info_product_lists_reverse_cross_selling"} */
class Block_1524445212694d6d5be6e606_02834395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['MODULE_reverse_cross_selling']->value;?>

	<?php
}
}
/* {/block "product_info_product_lists_reverse_cross_selling"} */
/* {block "product_info_product_lists_also_purchased"} */
class Block_1753215490694d6d5be6f1d3_50338706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['MODULE_also_purchased']->value;?>

	<?php
}
}
/* {/block "product_info_product_lists_also_purchased"} */
/* {block "product_info_product_lists_products_added"} */
class Block_971487780694d6d5be710d0_89848817 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div>
					<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_ADDED']->value;?>

				</div>
			<?php
}
}
/* {/block "product_info_product_lists_products_added"} */
/* {block "product_info_product_lists_products_added_if"} */
class Block_1470594279694d6d5be70100_39413395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_ADDED']->value) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971487780694d6d5be710d0_89848817', "product_info_product_lists_products_added", $this->tplIndex);
?>

		<?php }?>
	<?php
}
}
/* {/block "product_info_product_lists_products_added_if"} */
/* {block "product_info_product_lists_products_url"} */
class Block_1735314611694d6d5be73504_93542915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div>
					<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_URL']->value;?>

				</div>
			<?php
}
}
/* {/block "product_info_product_lists_products_url"} */
/* {block "product_info_product_lists_products_url_if"} */
class Block_1179616564694d6d5be727d4_34805019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_URL']->value) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1735314611694d6d5be73504_93542915', "product_info_product_lists_products_url", $this->tplIndex);
?>

		<?php }?>
	<?php
}
}
/* {/block "product_info_product_lists_products_url_if"} */
/* {block "product_info_product_lists"} */
class Block_1043882267694d6d5be6cf99_96466169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_lists' => 
  array (
    0 => 'Block_1043882267694d6d5be6cf99_96466169',
  ),
  'product_info_product_lists_cross_selling' => 
  array (
    0 => 'Block_527644659694d6d5be6d810_55504815',
  ),
  'product_info_product_lists_reverse_cross_selling' => 
  array (
    0 => 'Block_1524445212694d6d5be6e606_02834395',
  ),
  'product_info_product_lists_also_purchased' => 
  array (
    0 => 'Block_1753215490694d6d5be6f1d3_50338706',
  ),
  'product_info_product_lists_products_added_if' => 
  array (
    0 => 'Block_1470594279694d6d5be70100_39413395',
  ),
  'product_info_product_lists_products_added' => 
  array (
    0 => 'Block_971487780694d6d5be710d0_89848817',
  ),
  'product_info_product_lists_products_url_if' => 
  array (
    0 => 'Block_1179616564694d6d5be727d4_34805019',
  ),
  'product_info_product_lists_products_url' => 
  array (
    0 => 'Block_1735314611694d6d5be73504_93542915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527644659694d6d5be6d810_55504815', "product_info_product_lists_cross_selling", $this->tplIndex);
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524445212694d6d5be6e606_02834395', "product_info_product_lists_reverse_cross_selling", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1753215490694d6d5be6f1d3_50338706', "product_info_product_lists_also_purchased", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1470594279694d6d5be70100_39413395', "product_info_product_lists_products_added_if", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1179616564694d6d5be727d4_34805019', "product_info_product_lists_products_url_if", $this->tplIndex);
?>

<?php
}
}
/* {/block "product_info_product_lists"} */
}
