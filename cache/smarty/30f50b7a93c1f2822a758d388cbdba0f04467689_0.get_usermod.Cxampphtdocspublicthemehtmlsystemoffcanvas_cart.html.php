<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemoffcanvas_cart.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0648184bb0_79724836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30f50b7a93c1f2822a758d388cbdba0f04467689' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemoffcanvas_cart.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_header_cart_dropdown.html' => 1,
  ),
),false)) {
function content_694c0648184bb0_79724836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1485563048694c0648184011_17688857', "index_outer_wrapper_header_inside_offcanvas_cart");
}
/* {block "index_outer_wrapper_header_inside_offcanvas_cart"} */
class Block_1485563048694c0648184011_17688857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_outer_wrapper_header_inside_offcanvas_cart' => 
  array (
    0 => 'Block_1485563048694c0648184011_17688857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="offcanvas-cart-overlay"></div>
    <div id="offcanvas-cart-content">

        <button data-toggle="cart" class="offcanvas-cart-close c-hamburger c-hamburger--htx">
            <span></span>
            <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_menu'];?>

        </button>
        <!-- layout_header_cart_dropdown begin -->
        <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_header_cart_dropdown.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <!-- layout_header_cart_dropdown end -->

    </div>
<?php
}
}
/* {/block "index_outer_wrapper_header_inside_offcanvas_cart"} */
}
