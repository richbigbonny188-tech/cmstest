<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_manufacturers.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06477cf601_91719421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01bd95c844fbbcf7888c0b83ce632bb3cb18f893' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_manufacturers.html',
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
function content_694c06477cf601_91719421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_manufacturers"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_401955502694c06477c0c78_97728660', "box_manufacturers_if");
?>

<?php }
/* {block "box_manufacturers_top"} */
class Block_956572938694c06477c6d58_76972965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"manufacturers",'headline'=>$_smarty_tpl->tpl_vars['txt']->value['heading_manufacturers']), 0, true);
?>
			<?php
}
}
/* {/block "box_manufacturers_top"} */
/* {block "box_manufacturers_content"} */
class Block_1344539886694c06477c8b10_36108984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['manufacturerList']) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['manufacturerList'], 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
</a><br />
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['content_data']->value['manufacturerDropdown']) {?>
					<form name="manufacturers" id="manufacturers" method="get" action="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['formAction'];?>
">
						<select name="manufacturers_id" onchange="if(this.value!=''){this.form.submit();}" size="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['manufacturerDropdownSize'];?>
" class="lightbox_visibility_hidden input-select">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['manufacturerDropdown'], 'manufacturer');
$_smarty_tpl->tpl_vars['manufacturer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['manufacturer']->value['id'] === $_smarty_tpl->tpl_vars['content_data']->value['manufacturerDropdownDefault']) {?>selected<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['text'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</form>
				<?php }?>
			<?php
}
}
/* {/block "box_manufacturers_content"} */
/* {block "box_manufacturers_bottom"} */
class Block_1264398831694c06477ce855_97953907 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
}
/* {/block "box_manufacturers_bottom"} */
/* {block "box_manufacturers"} */
class Block_1889419059694c06477c6677_74323485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956572938694c06477c6d58_76972965', "box_manufacturers_top", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1344539886694c06477c8b10_36108984', "box_manufacturers_content", $this->tplIndex);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1264398831694c06477ce855_97953907', "box_manufacturers_bottom", $this->tplIndex);
?>

		<?php
}
}
/* {/block "box_manufacturers"} */
/* {block "box_manufacturers_if"} */
class Block_401955502694c06477c0c78_97728660 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_manufacturers_if' => 
  array (
    0 => 'Block_401955502694c06477c0c78_97728660',
  ),
  'box_manufacturers' => 
  array (
    0 => 'Block_1889419059694c06477c6677_74323485',
  ),
  'box_manufacturers_top' => 
  array (
    0 => 'Block_956572938694c06477c6d58_76972965',
  ),
  'box_manufacturers_content' => 
  array (
    0 => 'Block_1344539886694c06477c8b10_36108984',
  ),
  'box_manufacturers_bottom' => 
  array (
    0 => 'Block_1264398831694c06477ce855_97953907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['manufacturerList']) > 0 || smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['manufacturerDropdown']) > 1) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1889419059694c06477c6677_74323485', "box_manufacturers", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "box_manufacturers_if"} */
}
