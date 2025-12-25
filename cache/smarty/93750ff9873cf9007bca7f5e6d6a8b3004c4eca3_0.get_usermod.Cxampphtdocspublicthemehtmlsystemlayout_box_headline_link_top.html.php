<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_box_headline_link_top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647a93916_12024462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93750ff9873cf9007bca7f5e6d6a8b3004c4eca3' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_box_headline_link_top.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647a93916_12024462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1588748038694c0647a92419_34671785', "layout_box_headline_link_top");
}
/* {block "layout_box_headline_link_top_header"} */
class Block_688650781694c0647a92c74_60694157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="panel-heading">
				<span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['icon_left']->value;?>
"></span><?php if ($_smarty_tpl->tpl_vars['headline']->value && $_smarty_tpl->tpl_vars['headline']->value != '') {?> <?php echo $_smarty_tpl->tpl_vars['headline']->value;
}?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" class="pull-right" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
					<span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['icon_right']->value;?>
"></span>
				</a>
			</div>
		<?php
}
}
/* {/block "layout_box_headline_link_top_header"} */
/* {block "layout_box_headline_link_top"} */
class Block_1588748038694c0647a92419_34671785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_box_headline_link_top' => 
  array (
    0 => 'Block_1588748038694c0647a92419_34671785',
  ),
  'layout_box_headline_link_top_header' => 
  array (
    0 => 'Block_688650781694c0647a92c74_60694157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="box<?php if ($_smarty_tpl->tpl_vars['class']->value && $_smarty_tpl->tpl_vars['class']->value != '') {?> box-<?php echo $_smarty_tpl->tpl_vars['class']->value;
}?> panel panel-default">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688650781694c0647a92c74_60694157', "layout_box_headline_link_top_header", $this->tplIndex);
?>

		<div class="panel-body">
<?php
}
}
/* {/block "layout_box_headline_link_top"} */
}
