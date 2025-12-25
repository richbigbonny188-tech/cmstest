<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\products_reviews.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b7c5b86_08214308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '082d543a0b7a84a6210410be6bb2887bca7e0b09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\products_reviews.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b7c5b86_08214308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_507378827694d6d5b7ba2f1_96809303', "products_reviews_title_if");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_761607650694d6d5b7bc385_99420268', "products_reviews_list");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_333075907694d6d5b7bde48_75387730', "products_reviews_no_reviews_title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1434356418694d6d5b7c0de7_90040724', "products_reviews_no_reviews_text");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_933606252694d6d5b7c2cc5_30181458', "products_reviews_not_allowed_title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130074286694d6d5b7c46c1_67622116', "products_reviews_not_allowed_text");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."products_reviews.0.html");
}
/* {block "products_reviews_title_if"} */
class Block_507378827694d6d5b7ba2f1_96809303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_title_if' => 
  array (
    0 => 'Block_507378827694d6d5b7ba2f1_96809303',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_title_if"} */
/* {block "products_reviews_list"} */
class Block_761607650694d6d5b7bc385_99420268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_list' => 
  array (
    0 => 'Block_761607650694d6d5b7bc385_99420268',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_list"} */
/* {block "products_reviews_no_reviews_title"} */
class Block_333075907694d6d5b7bde48_75387730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_no_reviews_title' => 
  array (
    0 => 'Block_333075907694d6d5b7bde48_75387730',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_no_reviews_title"} */
/* {block "products_reviews_no_reviews_text"} */
class Block_1434356418694d6d5b7c0de7_90040724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_no_reviews_text' => 
  array (
    0 => 'Block_1434356418694d6d5b7c0de7_90040724',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_no_reviews_text"} */
/* {block "products_reviews_not_allowed_title"} */
class Block_933606252694d6d5b7c2cc5_30181458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_not_allowed_title' => 
  array (
    0 => 'Block_933606252694d6d5b7c2cc5_30181458',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextBefore']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_not_allowed_title"} */
/* {block "products_reviews_not_allowed_text"} */
class Block_130074286694d6d5b7c46c1_67622116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'products_reviews_not_allowed_text' => 
  array (
    0 => 'Block_130074286694d6d5b7c46c1_67622116',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value) {?>
        <div class="product-rating-verification-hint">
            <p><?php echo $_smarty_tpl->tpl_vars['omnibusPolicyProductInfoTextAfter']->value;?>
</p>
        </div>
    <?php }
}
}
/* {/block "products_reviews_not_allowed_text"} */
}
