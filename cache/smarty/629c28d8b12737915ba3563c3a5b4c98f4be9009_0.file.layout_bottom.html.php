<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_bottom.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647edff66_60135076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '629c28d8b12737915ba3563c3a5b4c98f4be9009' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_bottom.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_page_up.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."modal.html' => 1,
  ),
),false)) {
function content_694c0647edff66_60135076 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679286289694c0647edad65_37978147', "layout_bottom");
?>

<?php }
/* {block "layout_bottom_page_up"} */
class Block_1754827019694c0647edb258_78705723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_page_up.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('key'=>"pageup"), 0, true);
?>
			<?php
}
}
/* {/block "layout_bottom_page_up"} */
/* {block "layout_bottom_modal"} */
class Block_709063323694c0647edc251_28134090 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('key'=>"layer"), 0, true);
?>
			<?php
}
}
/* {/block "layout_bottom_modal"} */
/* {block "layout_bottom_content"} */
class Block_1238383102694c0647edcf39_36393394 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_data']->value['CONTENT'];
}
}
/* {/block "layout_bottom_content"} */
/* {block "layout_bottom_parse_time"} */
class Block_1005215953694c0647ede0e4_83924281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_data']->value['PARSE_TIME'];
}
}
/* {/block "layout_bottom_parse_time"} */
/* {block "layout_bottom_parse_time_if"} */
class Block_817141818694c0647edd8b4_73629376 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['PARSE_TIME']) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1005215953694c0647ede0e4_83924281', "layout_bottom_parse_time", $this->tplIndex);
?>

				<?php }?>
			<?php
}
}
/* {/block "layout_bottom_parse_time_if"} */
/* {block "layout_bottom_debug_bar_body"} */
class Block_2052662347694c0647ededa7_27623965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['debug_bar']) {?>
					<?php echo $_smarty_tpl->tpl_vars['content_data']->value['debug_bar_body_content'];?>

				<?php }?>
			<?php
}
}
/* {/block "layout_bottom_debug_bar_body"} */
/* {block "layout_bottom"} */
class Block_679286289694c0647edad65_37978147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_bottom' => 
  array (
    0 => 'Block_679286289694c0647edad65_37978147',
  ),
  'layout_bottom_page_up' => 
  array (
    0 => 'Block_1754827019694c0647edb258_78705723',
  ),
  'layout_bottom_modal' => 
  array (
    0 => 'Block_709063323694c0647edc251_28134090',
  ),
  'layout_bottom_content' => 
  array (
    0 => 'Block_1238383102694c0647edcf39_36393394',
  ),
  'layout_bottom_parse_time_if' => 
  array (
    0 => 'Block_817141818694c0647edd8b4_73629376',
  ),
  'layout_bottom_parse_time' => 
  array (
    0 => 'Block_1005215953694c0647ede0e4_83924281',
  ),
  'layout_bottom_debug_bar_body' => 
  array (
    0 => 'Block_2052662347694c0647ededa7_27623965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1754827019694c0647edb258_78705723', "layout_bottom_page_up", $this->tplIndex);
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_709063323694c0647edc251_28134090', "layout_bottom_modal", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1238383102694c0647edcf39_36393394', "layout_bottom_content", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_817141818694c0647edd8b4_73629376', "layout_bottom_parse_time_if", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2052662347694c0647ededa7_27623965', "layout_bottom_debug_bar_body", $this->tplIndex);
?>

		</body>
	</html>
<?php
}
}
/* {/block "layout_bottom"} */
}
