<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_customizer_position.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd17048_60296624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c349b6e508d45505b7e708b572f37eaa214eb10' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_customizer_position.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd17048_60296624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2039206300694d6d5bd0e4a2_08134848', "product_info_customizer_position");
}
/* {block "product_info_customizer_position"} */
class Block_2039206300694d6d5bd0e4a2_08134848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_customizer_position' => 
  array (
    0 => 'Block_2039206300694d6d5bd0e4a2_08134848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.gm_gprint.php','function'=>'smarty_function_gm_gprint',),));
?>

	<?php echo smarty_function_gm_gprint(array('position'=>$_smarty_tpl->tpl_vars['position']->value),$_smarty_tpl);?>

<?php
}
}
/* {/block "product_info_customizer_position"} */
}
