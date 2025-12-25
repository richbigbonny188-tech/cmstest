<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'C:\xampp\htdocs\public\theme\html\system\cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd5276615_39218857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a28d9d41c520a27d68db5d94febe86dacb3b5b1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\cart.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd5276615_39218857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1524241308694d6dd5274b00_24446581', "cart_alert");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart.0.html");
}
/* {block "cart_alert"} */
class Block_1524241308694d6dd5274b00_24446581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_alert' => 
  array (
    0 => 'Block_1524241308694d6dd5274b00_24446581',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['KLARNAOSM_CART_TOP']->value) {?>
        <div class="klarnaosm klarnaosm_cart_top">
            <?php echo $_smarty_tpl->tpl_vars['KLARNAOSM_CART_TOP']->value;?>

        </div>
    <?php }
}
}
/* {/block "cart_alert"} */
}
