<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_media.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5b29eae9_04382252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ccd2f03f78d11c80c7c5422a168c841a3b2841' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_media.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5b29eae9_04382252 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"products_media"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['module_content']->value && $_smarty_tpl->tpl_vars['module_content']->value != '') {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_968701142694d6d5b293296_07256495', "product_info_media");
?>

<?php }
}
/* {block "product_info_media_item"} */
class Block_726019648694d6d5b295307_89517548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<dl>
						<?php if ($_smarty_tpl->tpl_vars['module_data']->value['CONTENT_NAME'] !== '') {?>
							<dt>
								<?php if ($_smarty_tpl->tpl_vars['module_data']->value['TYPE'] !== 'text') {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['BUTTON_URL'];?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['CONTENT_NAME'];?>
">
										<i class="<?php echo $_smarty_tpl->tpl_vars['module_data']->value['FA_ICON'];?>
" aria-hidden="true"></i> <?php echo $_smarty_tpl->tpl_vars['module_data']->value['CONTENT_NAME'];?>

									</a>
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['module_data']->value['CONTENT_NAME'];?>

								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['module_data']->value['FILESIZE']) {?>
									&nbsp;(<?php echo $_smarty_tpl->tpl_vars['module_data']->value['FILESIZE'];?>
)
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['module_data']->value['DESCRIPTION']) {?>
									:&nbsp;
								<?php }?>
							</dt>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['module_data']->value['DESCRIPTION']) {?>
							<dd>
								<?php echo $_smarty_tpl->tpl_vars['module_data']->value['DESCRIPTION'];?>

							</dd>
						<?php }?>
		
					</dl>
				<?php
}
}
/* {/block "product_info_media_item"} */
/* {block "product_info_media"} */
class Block_968701142694d6d5b293296_07256495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_media' => 
  array (
    0 => 'Block_968701142694d6d5b293296_07256495',
  ),
  'product_info_media_item' => 
  array (
    0 => 'Block_726019648694d6d5b295307_89517548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="product-documents clearfix">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_content']->value, 'module_data', false, NULL, 'aussen', array (
));
$_smarty_tpl->tpl_vars['module_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_data']->value) {
$_smarty_tpl->tpl_vars['module_data']->do_else = false;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726019648694d6d5b295307_89517548', "product_info_media_item", $this->tplIndex);
?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php
}
}
/* {/block "product_info_media"} */
}
