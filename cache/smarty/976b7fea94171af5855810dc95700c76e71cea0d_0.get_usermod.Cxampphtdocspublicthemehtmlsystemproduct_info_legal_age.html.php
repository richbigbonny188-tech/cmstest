<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_legal_age.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd2fc23_07637145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '976b7fea94171af5855810dc95700c76e71cea0d' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_legal_age.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd2fc23_07637145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['PRODUCTS_FSK18']->value == 'true') {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1117773049694d6d5bd2e0b6_05146758', "product_info_legal_age");
?>

<?php }
}
/* {block "product_info_legal_age"} */
class Block_1117773049694d6d5bd2e0b6_05146758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_legal_age' => 
  array (
    0 => 'Block_1117773049694d6d5bd2e0b6_05146758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<dl class="dl-fsk18">
			<dt class="col-xs-2 fsk18-icon">
				<span>18</span>
			</dt>
			<dd class="col-xs-10 fsk18-text">
				<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_under_18'];?>

			</dd>
		</dl>
	<?php
}
}
/* {/block "product_info_legal_age"} */
}
