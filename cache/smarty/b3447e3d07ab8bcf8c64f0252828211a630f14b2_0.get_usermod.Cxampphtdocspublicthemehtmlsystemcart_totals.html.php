<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd536efe7_29422599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3447e3d07ab8bcf8c64f0252828211a630f14b2' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_totals.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd536efe7_29422599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1127393030694d6dd53682a6_53389551', "cart_totals_checkout_buttons");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."cart_totals.1.html");
}
/* {block "cart_totals_checkout_buttons"} */
class Block_1127393030694d6dd53682a6_53389551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_totals_checkout_buttons' => 
  array (
    0 => 'Block_1127393030694d6dd53682a6_53389551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php if ($_smarty_tpl->tpl_vars['KLARNAOSM_CART']->value) {?>
        <div class="klarnaosm klarnaosm_cart" 
             data-klarnaosm-namespace="GXModules/Gambio/KlarnaOSM/Build/Shop/Themes/All/Javascript"
             data-klarnaosm-widget="klarnaosmcart"
        >
            <?php echo $_smarty_tpl->tpl_vars['KLARNAOSM_CART']->value;?>

        </div>
    <?php }
}
}
/* {/block "cart_totals_checkout_buttons"} */
}
