<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:02:29
  from 'C:\xampp\htdocs\public\theme\html\system\checkout_shipping.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6e25eb3984_35180635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732dec92835bd7d18ac0b3c8ad92f9ac294aafd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\checkout_shipping.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:GXModules/Gambio/CheckoutLoadingSpinner/Shop/Html/loading-spinner.html' => 1,
  ),
),false)) {
function content_694d6e25eb3984_35180635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1042926745694d6e25ea2620_95134601', "checkout_shipping_form");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."checkout_shipping.0.html");
}
/* {block "checkout_shipping_form"} */
class Block_1042926745694d6e25ea2620_95134601 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_shipping_form' => 
  array (
    0 => 'Block_1042926745694d6e25ea2620_95134601',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php if ($_smarty_tpl->tpl_vars['checkout_loading_spinner_is_enabled']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("get_usermod:GXModules/Gambio/CheckoutLoadingSpinner/Shop/Html/loading-spinner.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('text'=>$_smarty_tpl->tpl_vars['checkout_loading_spinner_text']->value,'timeout'=>$_smarty_tpl->tpl_vars['checkout_loading_spinner_timeout']->value), 0, false);
?>

                <?php echo '<script'; ?>
 src="GXModules/Gambio/CheckoutLoadingSpinner/Shop/Themes/All/Javascript/extenders/checkout_shipping.js"><?php echo '</script'; ?>
>
    <?php }
}
}
/* {/block "checkout_shipping_form"} */
}
