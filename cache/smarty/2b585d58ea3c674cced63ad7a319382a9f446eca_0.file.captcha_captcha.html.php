<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:29
  from 'C:\xampp\htdocs\public\theme\html\system\captcha_captcha.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6de9b64859_03905446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b585d58ea3c674cced63ad7a319382a9f446eca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\captcha_captcha.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6de9b64859_03905446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1965392409694d6de9b585f5_44487701', "captcha_captcha");
}
/* {block "captcha_captcha_image"} */
class Block_1802163089694d6de9b5bc06_29013922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<img id="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['NAME'];?>
_image" src="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['URL'];?>
" width="240" height="50" alt="Captcha" />
	<?php
}
}
/* {/block "captcha_captcha_image"} */
/* {block "captcha_captcha_input"} */
class Block_250952642694d6de9b62916_81507604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['NAME'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['NAME'];?>
" class="input-text form-control" />
	<?php
}
}
/* {/block "captcha_captcha_input"} */
/* {block "captcha_captcha"} */
class Block_1965392409694d6de9b585f5_44487701 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'captcha_captcha' => 
  array (
    0 => 'Block_1965392409694d6de9b585f5_44487701',
  ),
  'captcha_captcha_image' => 
  array (
    0 => 'Block_1802163089694d6de9b5bc06_29013922',
  ),
  'captcha_captcha_input' => 
  array (
    0 => 'Block_250952642694d6de9b62916_81507604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1802163089694d6de9b5bc06_29013922', "captcha_captcha_image", $this->tplIndex);
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_250952642694d6de9b62916_81507604', "captcha_captcha_input", $this->tplIndex);
?>

<?php
}
}
/* {/block "captcha_captcha"} */
}
