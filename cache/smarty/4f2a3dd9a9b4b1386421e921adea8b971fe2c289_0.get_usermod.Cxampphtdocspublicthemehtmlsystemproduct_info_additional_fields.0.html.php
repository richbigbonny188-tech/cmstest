<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_additional_fields.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b779260_93024445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f2a3dd9a9b4b1386421e921adea8b971fe2c289' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_additional_fields.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b779260_93024445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1683123489694d6d5b771708_07703589', "product_info_additional_fields_if");
}
/* {block "product_info_additional_fields_list_item"} */
class Block_819664393694d6d5b775be2_97451512 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<dt class="col-xs-4 text-left"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</dt>
								<dd class="col-xs-8"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</dd>
							<?php
}
}
/* {/block "product_info_additional_fields_list_item"} */
/* {block "product_info_additional_fields_list_item_if"} */
class Block_518310459694d6d5b7749b7_21685032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['item']->value['value']) {?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_819664393694d6d5b775be2_97451512', "product_info_additional_fields_list_item", $this->tplIndex);
?>

						<?php }?>
					<?php
}
}
/* {/block "product_info_additional_fields_list_item_if"} */
/* {block "product_info_additional_fields_list"} */
class Block_507995980694d6d5b773ef8_99708428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_518310459694d6d5b7749b7_21685032', "product_info_additional_fields_list_item_if", $this->tplIndex);
?>

				<?php
}
}
/* {/block "product_info_additional_fields_list"} */
/* {block "product_info_additional_fields"} */
class Block_420616093694d6d5b772923_62430131 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['additional_fields_data_array']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_507995980694d6d5b773ef8_99708428', "product_info_additional_fields_list", $this->tplIndex);
?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
}
/* {/block "product_info_additional_fields"} */
/* {block "product_info_additional_fields_if"} */
class Block_1683123489694d6d5b771708_07703589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_additional_fields_if' => 
  array (
    0 => 'Block_1683123489694d6d5b771708_07703589',
  ),
  'product_info_additional_fields' => 
  array (
    0 => 'Block_420616093694d6d5b772923_62430131',
  ),
  'product_info_additional_fields_list' => 
  array (
    0 => 'Block_507995980694d6d5b773ef8_99708428',
  ),
  'product_info_additional_fields_list_item_if' => 
  array (
    0 => 'Block_518310459694d6d5b7749b7_21685032',
  ),
  'product_info_additional_fields_list_item' => 
  array (
    0 => 'Block_819664393694d6d5b775be2_97451512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['additional_fields_data_array']->value) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420616093694d6d5b772923_62430131', "product_info_additional_fields", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "product_info_additional_fields_if"} */
}
