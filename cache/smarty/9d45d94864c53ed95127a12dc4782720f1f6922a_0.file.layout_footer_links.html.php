<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_footer_links.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06477330a2_71090314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d45d94864c53ed95127a12dc4782720f1f6922a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_footer_links.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06477330a2_71090314 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1583272749694c064772f915_51697679', "layout_footer_links_list");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_footer_links.0.html");
}
/* {block "layout_footer_links_list"} */
class Block_1583272749694c064772f915_51697679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_footer_links_list' => 
  array (
    0 => 'Block_1583272749694c064772f915_51697679',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
?>

    <?php echo smarty_function_load_language_text(array('section'=>"cookie_consent_panel",'name'=>"txt"),$_smarty_tpl);?>

    <?php if (cookie_consent_panel_is_installed()) {?>
<ul class="nav">
    <li><a href="javascript:;" trigger-cookie-consent-panel><?php echo $_smarty_tpl->tpl_vars['txt']->value['label_cpc_footer_link_text'];?>
</a></li>
</ul>
    <?php }
}
}
/* {/block "layout_footer_links_list"} */
}
