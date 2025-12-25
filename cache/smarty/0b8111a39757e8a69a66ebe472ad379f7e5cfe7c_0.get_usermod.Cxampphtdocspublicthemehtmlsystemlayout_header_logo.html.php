<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_logo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481119c2_88955311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b8111a39757e8a69a66ebe472ad379f7e5cfe7c' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_header_logo.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481119c2_88955311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['logo_url']->value) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1049433908694c064810fcb3_38501706', "layout_header_logo");
?>

<?php }
}
/* {block "layout_header_logo"} */
class Block_1049433908694c064810fcb3_38501706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_header_logo' => 
  array (
    0 => 'Block_1049433908694c064810fcb3_38501706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['logo_link']->value;?>
" title="<?php echo htmlspecialchars((string)(defined('STORE_NAME') ? constant('STORE_NAME') : null), ENT_QUOTES, 'UTF-8', true);?>
">
			<img id="main-header-logo" class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars((string)(defined('STORE_NAME') ? constant('STORE_NAME') : null), ENT_QUOTES, 'UTF-8', true);?>
-Logo">
		</a>
	<?php
}
}
/* {/block "layout_header_logo"} */
}
