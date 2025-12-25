<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_stock.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd012e3_89500520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de068f158b2ebe0bce8367a6409f1a21325cf448' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_stock.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd012e3_89500520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790251330694d6d5bcfa154_58581239', "product_info_stock");
?>

<?php }
/* {block "product_info_stock_quantity"} */
class Block_87259197694d6d5bcfcaf6_60652699 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <span class="products-quantity-value">
                <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value;?>

            </span>
        <?php
}
}
/* {/block "product_info_stock_quantity"} */
/* {block "product_info_stock_unit"} */
class Block_1163186507694d6d5bcfe340_96121724 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>

            <?php
}
}
/* {/block "product_info_stock_unit"} */
/* {block "product_info_stock_pieces"} */
class Block_1311515544694d6d5bcff5f6_77742167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_pieces'];?>

            <?php
}
}
/* {/block "product_info_stock_pieces"} */
/* {block "product_info_stock"} */
class Block_1790251330694d6d5bcfa154_58581239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_stock' => 
  array (
    0 => 'Block_1790251330694d6d5bcfa154_58581239',
  ),
  'product_info_stock_quantity' => 
  array (
    0 => 'Block_87259197694d6d5bcfcaf6_60652699',
  ),
  'product_info_stock_unit' => 
  array (
    0 => 'Block_1163186507694d6d5bcfe340_96121724',
  ),
  'product_info_stock_pieces' => 
  array (
    0 => 'Block_1311515544694d6d5bcff5f6_77742167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <dt class="col-xs-4 text-left products-quantity" <?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value) {?> style="display: none"<?php }?>>
        <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_stock'];?>

    </dt>
    <dd class="col-xs-8" products-quantity <?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value) {?> style="display: none"<?php }?>>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87259197694d6d5bcfcaf6_60652699', "product_info_stock_quantity", $this->tplIndex);
?>

        <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1163186507694d6d5bcfe340_96121724', "product_info_stock_unit", $this->tplIndex);
?>

        <?php } else { ?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1311515544694d6d5bcff5f6_77742167', "product_info_stock_pieces", $this->tplIndex);
?>

        <?php }?>
    </dd>
<?php
}
}
/* {/block "product_info_stock"} */
}
