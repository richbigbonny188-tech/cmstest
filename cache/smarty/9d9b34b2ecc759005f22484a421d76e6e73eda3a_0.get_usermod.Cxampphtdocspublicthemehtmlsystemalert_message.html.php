<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemalert_message.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd531c4b8_47605805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d9b34b2ecc759005f22484a421d76e6e73eda3a' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemalert_message.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd531c4b8_47605805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1668340482694d6dd5306830_98347940', "alert_message");
?>

<?php }
/* {block "alert_message_message"} */
class Block_1872520593694d6dd5312771_67023305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

			<div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }?> <?php if ($_smarty_tpl->tpl_vars['hidden']->value) {?>hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['allow_links']->value == true) {?>
                    <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['message']->value,"&nbsp;",'');?>

                <?php } else { ?>
                    <?php echo smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['message']->value),"&nbsp;",'');?>

                <?php }?>
			</div>
		<?php
}
}
/* {/block "alert_message_message"} */
/* {block "alert_message"} */
class Block_1668340482694d6dd5306830_98347940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'alert_message' => 
  array (
    0 => 'Block_1668340482694d6dd5306830_98347940',
  ),
  'alert_message_message' => 
  array (
    0 => 'Block_1872520593694d6dd5312771_67023305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

	<?php $_smarty_tpl->_assignInScope('errorImageName', smarty_modifier_regex_replace(strval($_smarty_tpl->tpl_vars['message']->value),"/(.+?)([a-z]+?)(\.gif.+)/s","\\2"));?>
	
	<?php if ($_smarty_tpl->tpl_vars['errorImageName']->value === 'error' || $_smarty_tpl->tpl_vars['errorImageName']->value === 'warning') {?>
		<?php $_smarty_tpl->_assignInScope('type', "danger");?>
	<?php } elseif ($_smarty_tpl->tpl_vars['errorImageName']->value === 'success') {?>
		<?php $_smarty_tpl->_assignInScope('type', "success");?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['message']->value || $_smarty_tpl->tpl_vars['hidden']->value) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872520593694d6dd5312771_67023305', "alert_message_message", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "alert_message"} */
}
