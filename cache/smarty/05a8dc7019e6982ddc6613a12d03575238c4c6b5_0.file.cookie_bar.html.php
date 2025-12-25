<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'C:\xampp\htdocs\public\theme\html\system\cookie_bar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0648029235_77240770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05a8dc7019e6982ddc6613a12d03575238c4c6b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\cookie_bar.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0648029235_77240770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['content_data']->value['active'] && !$_smarty_tpl->tpl_vars['content_data']->value['cookieAlreadySet']) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1140038017694c0648021a86_10516671', "cookie_bar");
?>

<?php }
}
/* {block "cookie_bar_content_text"} */
class Block_1265136322694c0648023477_44873514 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo $_smarty_tpl->tpl_vars['content_data']->value['text'];?>

					<?php
}
}
/* {/block "cookie_bar_content_text"} */
/* {block "cookie_bar_content"} */
class Block_469950261694c0648023028_46547291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<span class="col-sm-9 col-md-10 content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1265136322694c0648023477_44873514', "cookie_bar_content_text", $this->tplIndex);
?>

				</span>
			<?php
}
}
/* {/block "cookie_bar_content"} */
/* {block "cookie_bar_content_button"} */
class Block_507406240694c0648024847_84937758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<a href="<?php if ($_smarty_tpl->tpl_vars['content_data']->value['button_link']) {
echo $_smarty_tpl->tpl_vars['content_data']->value['button_link'];
} else { ?>#<?php }?>"
						   style="background-color: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['content_data']->value['button_background_color'], ENT_QUOTES, 'UTF-8', true);?>
; color: <?php echo $_smarty_tpl->tpl_vars['content_data']->value['button_text_color'];?>
; <?php if ($_smarty_tpl->tpl_vars['content_data']->value['close_button_active']) {?>margin-right: 15px;<?php }?>"
						   class="btn btn-default btn-sm close-button">
							<?php if ($_smarty_tpl->tpl_vars['content_data']->value['button_text'] && $_smarty_tpl->tpl_vars['content_data']->value['button_text'] != '') {?>
								<?php echo $_smarty_tpl->tpl_vars['content_data']->value['button_text'];?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->tpl_vars['button']->value['ok'];?>

							<?php }?>
						</a>
					<?php
}
}
/* {/block "cookie_bar_content_button"} */
/* {block "cookie_bar_close_if"} */
class Block_1098884941694c06480280d5_24688138 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['content_data']->value['close_button_active']) {?>
							<span class="fa-stack">
								<i class="fa fa-circle fa-inverse fa-stack-2x"></i>
								<i class="fa fa-close fa-stack-1x"></i>
							</span>
						<?php }?>
					<?php
}
}
/* {/block "cookie_bar_close_if"} */
/* {block "cookie_bar_close"} */
class Block_1068807473694c06480242e6_34068683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<span class="col-sm-3 col-md-2 close-button">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_507406240694c0648024847_84937758', "cookie_bar_content_button", $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1098884941694c06480280d5_24688138', "cookie_bar_close_if", $this->tplIndex);
?>

				</span>
			<?php
}
}
/* {/block "cookie_bar_close"} */
/* {block "cookie_bar"} */
class Block_1140038017694c0648021a86_10516671 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cookie_bar' => 
  array (
    0 => 'Block_1140038017694c0648021a86_10516671',
  ),
  'cookie_bar_content' => 
  array (
    0 => 'Block_469950261694c0648023028_46547291',
  ),
  'cookie_bar_content_text' => 
  array (
    0 => 'Block_1265136322694c0648023477_44873514',
  ),
  'cookie_bar_close' => 
  array (
    0 => 'Block_1068807473694c06480242e6_34068683',
  ),
  'cookie_bar_content_button' => 
  array (
    0 => 'Block_507406240694c0648024847_84937758',
  ),
  'cookie_bar_close_if' => 
  array (
    0 => 'Block_1098884941694c06480280d5_24688138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="row cookie-bar <?php echo $_smarty_tpl->tpl_vars['content_data']->value['position'];?>
"
			 style="background-color: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['content_data']->value['background_color'], ENT_QUOTES, 'UTF-8', true);?>
; opacity: <?php echo $_smarty_tpl->tpl_vars['content_data']->value['background_opacity'];?>
"
			 data-gambio-widget="cookie_bar">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_469950261694c0648023028_46547291', "cookie_bar_content", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1068807473694c06480242e6_34068683', "cookie_bar_close", $this->tplIndex);
?>

		</div>
	<?php
}
}
/* {/block "cookie_bar"} */
}
