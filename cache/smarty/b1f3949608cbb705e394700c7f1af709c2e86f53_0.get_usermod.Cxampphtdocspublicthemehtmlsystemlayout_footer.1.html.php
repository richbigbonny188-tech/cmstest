<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481f8d87_39564520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f3949608cbb705e394700c7f1af709c2e86f53' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.1.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481f8d87_39564520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1863006476694c06481f5a88_60514507', "box_content_list_items");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_footer.0.html");
}
/* {block "box_content_list_items"} */
class Block_1863006476694c06481f5a88_60514507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_content_list_items' => 
  array (
    0 => 'Block_1863006476694c06481f5a88_60514507',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
?>

	<?php echo smarty_function_load_language_text(array('section'=>"cookie_consent_panel",'name'=>"txt"),$_smarty_tpl);?>

	<?php if (cookie_consent_panel_is_installed()) {?>
		<li><a href="javascript:;" trigger-cookie-consent-panel><?php echo $_smarty_tpl->tpl_vars['txt']->value['label_cpc_footer_link_text'];?>
</a></li>
	<?php }
}
}
/* {/block "box_content_list_items"} */
}
