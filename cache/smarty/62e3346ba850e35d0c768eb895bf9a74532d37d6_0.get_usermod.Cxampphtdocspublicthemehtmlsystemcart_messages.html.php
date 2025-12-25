<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_messages.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd52ecd12_66304728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62e3346ba850e35d0c768eb895bf9a74532d37d6' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_messages.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."alert_message.html' => 5,
  ),
),false)) {
function content_694d6dd52ecd12_66304728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1402509051694d6dd52e3676_00822044', "cart_messages");
?>

<?php }
/* {block "cart_messages"} */
class Block_1402509051694d6dd52e3676_00822044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_messages' => 
  array (
    0 => 'Block_1402509051694d6dd52e3676_00822044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['info_message']->value,'type'=>"warning"), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['text_removed_products']->value,'type'=>"warning"), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['cart_content_note_disabled']->value,'type'=>"warning",'allow_links'=>true), 0, true);
?>
	
	<?php if ($_smarty_tpl->tpl_vars['cart_content_note']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['cart_content_note']->value,'type'=>"warning"), 0, true);
?>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['customer_status_allow_checkout']->value == '0' && $_smarty_tpl->tpl_vars['customer_status_allow_checkout_info']->value != '') {?>
		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['customer_status_allow_checkout_info']->value,'type'=>"warning"), 0, true);
?>
	<?php }
}
}
/* {/block "cart_messages"} */
}
