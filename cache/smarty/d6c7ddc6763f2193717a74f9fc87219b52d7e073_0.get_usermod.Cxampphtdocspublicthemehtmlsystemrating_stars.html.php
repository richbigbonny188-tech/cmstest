<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemrating_stars.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647c9df19_16931091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6c7ddc6763f2193717a74f9fc87219b52d7e073' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemrating_stars.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647c9df19_16931091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_466585608694c0647c9c815_36421194', "rating_stars");
}
/* {block "rating_stars"} */
class Block_466585608694c0647c9c815_36421194 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'rating_stars' => 
  array (
    0 => 'Block_466585608694c0647c9c815_36421194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

	<span class="rating-stars rating-stars-<?php echo $_smarty_tpl->tpl_vars['rating_rounded']->value*10;?>
" title="<?php if ($_smarty_tpl->tpl_vars['rating_rounded']->value <= 0) {
echo $_smarty_tpl->tpl_vars['general']->value['RATING_SUMMARY_NO_RATING'];
} else {
echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['general']->value['RATING_SUMMARY'],"###RATING###",$_smarty_tpl->tpl_vars['rating_rounded']->value),"###COUNT###",$_smarty_tpl->tpl_vars['rating_count']->value);
}?>">
		<span class="gm-star"></span>
		<span class="gm-star"></span>
		<span class="gm-star"></span>
		<span class="gm-star"></span>
		<span class="gm-star"></span>
		<span class="rating-stars-mask">
			<span class="rating-stars-inside">
				<span class="gm-star"></span>
				<span class="gm-star"></span>
				<span class="gm-star"></span>
				<span class="gm-star"></span>
				<span class="gm-star"></span>
			</span>
		</span>
	</span>
<?php
}
}
/* {/block "rating_stars"} */
}
