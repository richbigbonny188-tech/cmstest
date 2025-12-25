<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:publicthemehtmlsystemproduct_listing_product.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647c2d742_65531652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6becf90ab9f77d8cf9d1ba4d63fc7e7c8d091fc1' => 
    array (
      0 => 'get_usermod:publicthemehtmlsystemproduct_listing_product.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647c2d742_65531652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1615408030694c0647c2c968_40245780', "product_listing_product_price_rating");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing_product.0.html");
}
/* {block "product_listing_product_price_rating"} */
class Block_1615408030694c0647c2c968_40245780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_listing_product_price_rating' => 
  array (
    0 => 'Block_1615408030694c0647c2c968_40245780',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductListingBadge']->value) {?>
        <span class="product-rating-hint"><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductListingBadge']->value;?>
</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['content_data']->value['omnibusPolicyProductListingBadge']) {?>
        <span class="product-rating-hint"><?php echo $_smarty_tpl->tpl_vars['content_data']->value['omnibusPolicyProductListingBadge'];?>
</span>
    <?php }
}
}
/* {/block "product_listing_product_price_rating"} */
}
