<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_stock.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bce7942_60165394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0116fc1708427e4f48153a56739b6d183078af4' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_stock.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bce7942_60165394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793550961694d6d5bce4650_73274587', "product_info_stock");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_stock.0.html");
}
/* {block "product_info_stock_quantity"} */
class Block_2112639365694d6d5bce5ed2_48945184 extends Smarty_Internal_Block
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
class Block_2062388646694d6d5bce69f6_56413503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>

    <?php
}
}
/* {/block "product_info_stock_unit"} */
/* {block "product_info_stock_pieces"} */
class Block_923647419694d6d5bce70b6_06159698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_pieces'];?>

    <?php
}
}
/* {/block "product_info_stock_pieces"} */
/* {block "product_info_stock"} */
class Block_793550961694d6d5bce4650_73274587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_stock' => 
  array (
    0 => 'Block_793550961694d6d5bce4650_73274587',
  ),
  'product_info_stock_quantity' => 
  array (
    0 => 'Block_2112639365694d6d5bce5ed2_48945184',
  ),
  'product_info_stock_unit' => 
  array (
    0 => 'Block_2062388646694d6d5bce69f6_56413503',
  ),
  'product_info_stock_pieces' => 
  array (
    0 => 'Block_923647419694d6d5bce70b6_06159698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-definition-stock-quantity products-quantity" <?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY']->value) {?> style="display: none"<?php }?>>
    <strong><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_stock'];?>
</strong>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112639365694d6d5bce5ed2_48945184', "product_info_stock_quantity", $this->tplIndex);
?>

    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062388646694d6d5bce69f6_56413503', "product_info_stock_unit", $this->tplIndex);
?>

    <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_923647419694d6d5bce70b6_06159698', "product_info_stock_pieces", $this->tplIndex);
?>

    <?php }?>
</div>
<?php
}
}
/* {/block "product_info_stock"} */
}
