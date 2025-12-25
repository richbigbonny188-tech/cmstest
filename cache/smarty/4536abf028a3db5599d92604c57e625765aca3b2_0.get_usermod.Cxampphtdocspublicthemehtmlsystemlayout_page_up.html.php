<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_page_up.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647eeaaa1_34360119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4536abf028a3db5599d92604c57e625765aca3b2' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_page_up.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647eeaaa1_34360119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1778212929694c0647eea195_84805641', "layout_page_up");
}
/* {block "layout_page_up"} */
class Block_1778212929694c0647eea195_84805641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_page_up' => 
  array (
    0 => 'Block_1778212929694c0647eea195_84805641',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<a class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-gambio-widget="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['PAGE_UP'];?>
" href="#">
		
	</a>
<?php
}
}
/* {/block "layout_page_up"} */
}
