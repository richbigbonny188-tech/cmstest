<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647ac9ac8_31786820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc61508b33457f911af3f41bf966bfdea2581729' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\home.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647ac9ac8_31786820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1273156070694c0647ac7b85_98279181', "home");
}
/* {block "home_error"} */
class Block_447077550694c0647ac7f41_74650856 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="container">
			<?php echo $_smarty_tpl->tpl_vars['MODULE_error']->value;?>

		</div>
	<?php
}
}
/* {/block "home_error"} */
/* {block "home"} */
class Block_1273156070694c0647ac7b85_98279181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'home' => 
  array (
    0 => 'Block_1273156070694c0647ac7b85_98279181',
  ),
  'home_error' => 
  array (
    0 => 'Block_447077550694c0647ac7f41_74650856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXModules\\Gambio\\ContentZones\\Shop\\SmartyPlugins\\function.content_zone.php','function'=>'smarty_function_content_zone',),));
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_447077550694c0647ac7f41_74650856', "home_error", $this->tplIndex);
?>


	<?php echo smarty_function_content_zone(array('id'=>"home"),$_smarty_tpl);?>


<?php
}
}
/* {/block "home"} */
}
