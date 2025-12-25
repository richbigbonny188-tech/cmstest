<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\topbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647f23ab6_13940411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5941bae76a672af47dbe09aa74e11db04caebcc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\topbar.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647f23ab6_13940411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['content_data']->value['topbarNotification']->isActive()) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1623697899694c0647f22be0_86870328', "topbar");
?>

<?php }
}
/* {block "topbar"} */
class Block_1623697899694c0647f22be0_86870328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'topbar' => 
  array (
    0 => 'Block_1623697899694c0647f22be0_86870328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="topbar-notification"
		     style="background-color: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['content_data']->value['topbarNotification']->getColor(), ENT_QUOTES, 'UTF-8', true);?>
;"
		     data-gambio-widget="notifications">
			<span class="notification-content">
				<?php echo $_smarty_tpl->tpl_vars['content_data']->value['topbarNotification']->getContentByLanguageId($_smarty_tpl->tpl_vars['languages_id']->value);?>

			</span>
			<span class="fa-stack hide-topbar-notification">
				<i class="fa fa-circle fa-inverse fa-stack-2x"></i>
				<i class="fa fa-close fa-stack-1x"></i>
			</span>
		</div>
	<?php
}
}
/* {/block "topbar"} */
}
