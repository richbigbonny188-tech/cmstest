<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_newsletter.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06477ebc47_67984798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a622ee9feca1dc4bd6d01b47f6b90fa89c673fd5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_newsletter.html',
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
function content_694c06477ebc47_67984798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_newsletter"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1776050545694c06477e5f10_81624514', "box_newsletter");
?>

<?php }
/* {block "box_newsletter_top"} */
class Block_886090249694c06477e6353_22070345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"newsletter",'headline'=>$_smarty_tpl->tpl_vars['txt']->value['heading_guestnewsletter']), 0, true);
?>
	<?php
}
}
/* {/block "box_newsletter_top"} */
/* {block "box_newsletter_form_email"} */
class Block_225277057694c06477e8b66_13435347 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<input type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_email'];?>
" class="form-control validate" id="newsletter-<?php echo $_smarty_tpl->tpl_vars['content_data']->value['INPUT_NAME'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['INPUT_NAME'];?>
" value="" data-validator-validate="required email" />
									<i class="fa fa-envelope"></i>
								<?php
}
}
/* {/block "box_newsletter_form_email"} */
/* {block "box_newsletter_form_email_container"} */
class Block_541898482694c06477e8801_30635642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group input-container">
							<span class="input-container">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_225277057694c06477e8b66_13435347', "box_newsletter_form_email", $this->tplIndex);
?>

							</span>
						</div>
					<?php
}
}
/* {/block "box_newsletter_form_email_container"} */
/* {block "box_newsletter_form_submit"} */
class Block_1793751545694c06477e9ff4_57528612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<button type="submit" class="btn btn-block btn-primary btn-sm" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['title_newsletter'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['button']->value['login'];?>

								</button>
							<?php
}
}
/* {/block "box_newsletter_form_submit"} */
/* {block "box_newsletter_form_submit_container"} */
class Block_1737252034694c06477e9cc6_71347445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1793751545694c06477e9ff4_57528612', "box_newsletter_form_submit", $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block "box_newsletter_form_submit_container"} */
/* {block "box_newsletter_form_fieldset"} */
class Block_1357346263694c06477e8489_05366785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<fieldset>
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_541898482694c06477e8801_30635642', "box_newsletter_form_email_container", $this->tplIndex);
?>

					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1737252034694c06477e9cc6_71347445', "box_newsletter_form_submit_container", $this->tplIndex);
?>

			
				</fieldset>
			<?php
}
}
/* {/block "box_newsletter_form_fieldset"} */
/* {block "box_newsletter_form"} */
class Block_554643082694c06477e7563_64097783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<form id="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_ID'];?>
" action="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_ACTION_URL'];?>
" method="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_METHOD'];?>
" data-jse-extensions="validator">
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1357346263694c06477e8489_05366785', "box_newsletter_form_fieldset", $this->tplIndex);
?>

		
		</form>
	<?php
}
}
/* {/block "box_newsletter_form"} */
/* {block "box_newsletter_bottom"} */
class Block_105133844694c06477eb0c7_88656698 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block "box_newsletter_bottom"} */
/* {block "box_newsletter"} */
class Block_1776050545694c06477e5f10_81624514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_newsletter' => 
  array (
    0 => 'Block_1776050545694c06477e5f10_81624514',
  ),
  'box_newsletter_top' => 
  array (
    0 => 'Block_886090249694c06477e6353_22070345',
  ),
  'box_newsletter_form' => 
  array (
    0 => 'Block_554643082694c06477e7563_64097783',
  ),
  'box_newsletter_form_fieldset' => 
  array (
    0 => 'Block_1357346263694c06477e8489_05366785',
  ),
  'box_newsletter_form_email_container' => 
  array (
    0 => 'Block_541898482694c06477e8801_30635642',
  ),
  'box_newsletter_form_email' => 
  array (
    0 => 'Block_225277057694c06477e8b66_13435347',
  ),
  'box_newsletter_form_submit_container' => 
  array (
    0 => 'Block_1737252034694c06477e9cc6_71347445',
  ),
  'box_newsletter_form_submit' => 
  array (
    0 => 'Block_1793751545694c06477e9ff4_57528612',
  ),
  'box_newsletter_bottom' => 
  array (
    0 => 'Block_105133844694c06477eb0c7_88656698',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_886090249694c06477e6353_22070345', "box_newsletter_top", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_554643082694c06477e7563_64097783', "box_newsletter_form", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105133844694c06477eb0c7_88656698', "box_newsletter_bottom", $this->tplIndex);
?>

<?php
}
}
/* {/block "box_newsletter"} */
}
