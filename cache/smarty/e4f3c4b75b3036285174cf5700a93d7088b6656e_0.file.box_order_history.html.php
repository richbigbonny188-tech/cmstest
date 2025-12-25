<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:02:30
  from 'C:\xampp\htdocs\public\theme\html\system\box_order_history.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6e26424d07_72437174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4f3c4b75b3036285174cf5700a93d7088b6656e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_order_history.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_top.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_bottom.html' => 1,
  ),
),false)) {
function content_694d6e26424d07_72437174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_order_history"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_458643109694d6e264183f5_89835641', "box_order_history_if");
?>

<?php }
/* {block "box_order_history_top"} */
class Block_748386776694d6e2641d014_34631017 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"order-history",'headline'=>$_smarty_tpl->tpl_vars['txt']->value['heading_order_history']), 0, true);
?>
			<?php
}
}
/* {/block "box_order_history_top"} */
/* {block "box_order_history_content"} */
class Block_1237264716694d6e2641dc16_42496921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['orderHistoryProducts'], 'orderHistoryProduct');
$_smarty_tpl->tpl_vars['orderHistoryProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderHistoryProduct']->value) {
$_smarty_tpl->tpl_vars['orderHistoryProduct']->do_else = false;
?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['orderHistoryProduct']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['orderHistoryProduct']->value['title']) {?>title="<?php echo $_smarty_tpl->tpl_vars['orderHistoryProduct']->value['title'];?>
"<?php }?>>
						<?php echo $_smarty_tpl->tpl_vars['orderHistoryProduct']->value['text'];?>

					</a><br />
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
}
/* {/block "box_order_history_content"} */
/* {block "box_order_history_bottom"} */
class Block_1234957283694d6e264224f8_88733652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
}
/* {/block "box_order_history_bottom"} */
/* {block "box_order_history"} */
class Block_1347754260694d6e2641cd39_95799983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748386776694d6e2641d014_34631017', "box_order_history_top", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1237264716694d6e2641dc16_42496921', "box_order_history_content", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1234957283694d6e264224f8_88733652', "box_order_history_bottom", $this->tplIndex);
?>

		<?php
}
}
/* {/block "box_order_history"} */
/* {block "box_order_history_if"} */
class Block_458643109694d6e264183f5_89835641 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_order_history_if' => 
  array (
    0 => 'Block_458643109694d6e264183f5_89835641',
  ),
  'box_order_history' => 
  array (
    0 => 'Block_1347754260694d6e2641cd39_95799983',
  ),
  'box_order_history_top' => 
  array (
    0 => 'Block_748386776694d6e2641d014_34631017',
  ),
  'box_order_history_content' => 
  array (
    0 => 'Block_1237264716694d6e2641dc16_42496921',
  ),
  'box_order_history_bottom' => 
  array (
    0 => 'Block_1234957283694d6e264224f8_88733652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['orderHistoryProducts']) > 0) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1347754260694d6e2641cd39_95799983', "box_order_history", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "box_order_history_if"} */
}
