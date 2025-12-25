<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:09
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_empty.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd5347ab6_39210812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7851085c7522952027261c2442cc521d95a63df' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcart_empty.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."alert_message.html' => 3,
  ),
),false)) {
function content_694d6dd5347ab6_39210812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart_contains_disabled']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['cart_disabled_message']->value,'type'=>"info",'allow_links'=>true), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['txt']->value['text_removed_products'],'type'=>"info"), 0, true);
?>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['txt']->value['text_empty'],'type'=>"info"), 0, true);
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1870554439694d6dd5343e60_25165620', "cart_empty");
?>

<?php }
/* {block "cart_empty"} */
class Block_1870554439694d6dd5343e60_25165620 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_empty' => 
  array (
    0 => 'Block_1870554439694d6dd5343e60_25165620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<a class="btn btn-default btn-block" href="<?php echo $_smarty_tpl->tpl_vars['BUTTON_BACK_LINK']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['button']->value['continue_shopping'];?>
">
				<?php echo $_smarty_tpl->tpl_vars['button']->value['continue_shopping'];?>

			</a>
		</div>
	</div>
<?php
}
}
/* {/block "cart_empty"} */
}
