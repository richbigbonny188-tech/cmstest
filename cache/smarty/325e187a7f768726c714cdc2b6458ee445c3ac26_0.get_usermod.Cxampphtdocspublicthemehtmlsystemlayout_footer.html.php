<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481e8dc4_70532692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '325e187a7f768726c714cdc2b6458ee445c3ac26' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481e8dc4_70532692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_703474341694c06481e8644_75905282', "layout_footer_inside");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_footer.1.html");
}
/* {block "layout_footer_inside"} */
class Block_703474341694c06481e8644_75905282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_footer_inside' => 
  array (
    0 => 'Block_703474341694c06481e8644_75905282',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['KLARNAOSM_FOOTER_BOTTOM']->value) {?>
        <div class="klarnaosm klarnaosm_footer_bottom inside">
            <?php echo $_smarty_tpl->tpl_vars['KLARNAOSM_FOOTER_BOTTOM']->value;?>

        </div>
    <?php }
}
}
/* {/block "layout_footer_inside"} */
}
