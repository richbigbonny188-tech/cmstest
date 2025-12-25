<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_secondary_navigation_search.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647565958_00490747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08e861fe802ae4a1f3d0cfba0fb1a42e3fb4427d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_secondary_navigation_search.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647565958_00490747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.categories.php','function'=>'smarty_function_categories',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_search"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php echo smarty_function_categories(array('out'=>'ARR_categories'),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1927812097694c0647560742_57426330', "layout_secondary_navigation_search");
?>

<?php }
/* {block "layout_secondary_navigation_search_form_submit"} */
class Block_1223554043694c0647562e98_77338627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<button type="submit">
							<img src="<?php echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
images/svgs/search.svg" class="gx-search-input svg--inject" alt="">
						</button>
					<?php
}
}
/* {/block "layout_secondary_navigation_search_form_submit"} */
/* {block "layout_secondary_navigation_search_form"} */
class Block_1458164052694c0647560a84_81435289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

			<form action="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_ACTION_URL'];?>
" method="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_METHOD'];?>
" <?php if (smarty_modifier_gm_get_conf('ENABLE_LIVE_SEARCH') == 'true') {?>data-gambio-widget="live_search"<?php }?>>
		
				<div class="navbar-search-input-group input-group">

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1223554043694c0647562e98_77338627', "layout_secondary_navigation_search_form_submit", $this->tplIndex);
?>


					<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['INPUT_NAME'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_default_value'];?>
" class="form-control search-input" autocomplete="off" />

				</div>
		
				
				<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['ARR_categories']->value) > 0) {?>
					<input type="hidden" value="1" name="inc_subcat" />
				<?php }?>
				
				<div class="search-result-container"></div>
		
			</form>
		<?php
}
}
/* {/block "layout_secondary_navigation_search_form"} */
/* {block "layout_secondary_navigation_search"} */
class Block_1927812097694c0647560742_57426330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_secondary_navigation_search' => 
  array (
    0 => 'Block_1927812097694c0647560742_57426330',
  ),
  'layout_secondary_navigation_search_form' => 
  array (
    0 => 'Block_1458164052694c0647560a84_81435289',
  ),
  'layout_secondary_navigation_search_form_submit' => 
  array (
    0 => 'Block_1223554043694c0647562e98_77338627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="navbar-search collapse">
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458164052694c0647560a84_81435289', "layout_secondary_navigation_search_form", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "layout_secondary_navigation_search"} */
}
