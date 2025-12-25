<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\product_listing.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647cd4485_74536046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bee2ea4edb258ccd7a96bce1201c48316034582c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_listing.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647cd4485_74536046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199131013694c0647cd2c61_60303850', "product_listing_product_price_rating");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing.0.html");
}
/* {block "product_listing_product_price_rating"} */
class Block_199131013694c0647cd2c61_60303850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_listing_product_price_rating' => 
  array (
    0 => 'Block_199131013694c0647cd2c61_60303850',
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
