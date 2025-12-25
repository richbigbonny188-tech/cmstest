<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemsidebar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481e03d1_03037535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7eeb318b01fb334e388e19858e3c96b6a20727a' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemsidebar.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481e03d1_03037535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1991384242694c06481de083_18351616', "index_inner_wrapper_left_aside");
}
/* {block "index_inner_wrapper_left_content"} */
class Block_498794425694c06481de3a1_96964345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.menuboxes.php','function'=>'smarty_function_menuboxes',),));
?>

            <?php if ($_smarty_tpl->tpl_vars['SHOW_LEFT_COLUMN']->value) {?>
                <?php echo smarty_function_menuboxes(array('first'=>1,'last'=>100,'exclude'=>"content"),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smarty_function_menuboxes(array('only'=>"categories,filter"),$_smarty_tpl);?>

            <?php }?>
        <?php
}
}
/* {/block "index_inner_wrapper_left_content"} */
/* {block "index_inner_wrapper_left_trusted_shops"} */
class Block_1561720704694c06481df336_26700180 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if (strpos($_smarty_tpl->tpl_vars['TRUSTED_SHOPS_REVIEW_STICKER']->value,"variant: 'skyscraper_vertical'") !== false || strpos($_smarty_tpl->tpl_vars['TRUSTED_SHOPS_REVIEW_STICKER']->value,"variant: 'vertical'") !== false) {?>
                <?php echo $_smarty_tpl->tpl_vars['TRUSTED_SHOPS_REVIEW_STICKER']->value;?>

            <?php }?>
        <?php
}
}
/* {/block "index_inner_wrapper_left_trusted_shops"} */
/* {block "index_inner_wrapper_left_aside"} */
class Block_1991384242694c06481de083_18351616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'index_inner_wrapper_left_aside' => 
  array (
    0 => 'Block_1991384242694c06481de083_18351616',
  ),
  'index_inner_wrapper_left_content' => 
  array (
    0 => 'Block_498794425694c06481de3a1_96964345',
  ),
  'index_inner_wrapper_left_trusted_shops' => 
  array (
    0 => 'Block_1561720704694c06481df336_26700180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <aside id="left">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_498794425694c06481de3a1_96964345', "index_inner_wrapper_left_content", $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1561720704694c06481df336_26700180', "index_inner_wrapper_left_trusted_shops", $this->tplIndex);
?>

    </aside>
<?php
}
}
/* {/block "index_inner_wrapper_left_aside"} */
}
