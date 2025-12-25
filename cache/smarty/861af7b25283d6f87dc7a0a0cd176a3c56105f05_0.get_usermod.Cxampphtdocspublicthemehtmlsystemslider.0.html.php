<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemslider.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481c54f4_71853210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861af7b25283d6f87dc7a0a0cd176a3c56105f05' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemslider.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481c54f4_71853210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_748450592694c06481c3ac0_14801327', "slider_if");
}
/* {block "slider"} */
class Block_976900495694c06481c4603_24907669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="stage" data-gambio-widget="slider_flyover">
				<div id="slider"
				     data-gambio-widget="slider_responsive"
				     data-slider_responsive-source="#json-serialized-slider"
				     data-slider_responsive-effect="fade"
				     data-slider_responsive-speed="600">
					<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

				</div>
			</div>
		<?php
}
}
/* {/block "slider"} */
/* {block "slider_if"} */
class Block_748450592694c06481c3ac0_14801327 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider_if' => 
  array (
    0 => 'Block_748450592694c06481c3ac0_14801327',
  ),
  'slider' => 
  array (
    0 => 'Block_976900495694c06481c4603_24907669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['slider']->value) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_976900495694c06481c4603_24907669', "slider", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "slider_if"} */
}
