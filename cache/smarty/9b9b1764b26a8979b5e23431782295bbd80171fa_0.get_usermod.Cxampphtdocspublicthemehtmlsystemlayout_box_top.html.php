<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_box_top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06477f81b0_98344141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b9b1764b26a8979b5e23431782295bbd80171fa' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_box_top.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06477f81b0_98344141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2060113146694c06477f6986_90653052', "layout_box_top");
}
/* {block "layout_box_top_heading"} */
class Block_698642118694c06477f7706_84134312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="panel-heading">
				<?php if ($_smarty_tpl->tpl_vars['headline']->value && $_smarty_tpl->tpl_vars['headline']->value != '') {?>
					<?php echo $_smarty_tpl->tpl_vars['headline']->value;?>

				<?php } else { ?>
					&nbsp;
				<?php }?>
			</div>
		<?php
}
}
/* {/block "layout_box_top_heading"} */
/* {block "layout_box_top"} */
class Block_2060113146694c06477f6986_90653052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_box_top' => 
  array (
    0 => 'Block_2060113146694c06477f6986_90653052',
  ),
  'layout_box_top_heading' => 
  array (
    0 => 'Block_698642118694c06477f7706_84134312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="box<?php if ($_smarty_tpl->tpl_vars['class']->value && $_smarty_tpl->tpl_vars['class']->value != '') {?> box-<?php echo $_smarty_tpl->tpl_vars['class']->value;
}?> panel panel-default"<?php if ($_smarty_tpl->tpl_vars['linkcrypter']->value && $_smarty_tpl->tpl_vars['linkcrypter']->value != '') {?> data-gambio-widget="link_crypter"<?php }?>>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_698642118694c06477f7706_84134312', "layout_box_top_heading", $this->tplIndex);
?>

		<div class="panel-body">
<?php
}
}
/* {/block "layout_box_top"} */
}
