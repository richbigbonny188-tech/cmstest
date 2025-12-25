<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_login_dropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06474163d6_11303618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e09457cea89f0debd60f127f49f5b8b9b5ef13b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_login_dropdown.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06474163d6_11303618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035482484694c064740b358_58057937', "box_login_dropdown_footer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."box_login_dropdown.0.html");
}
/* {block "box_login_dropdown_footer"} */
class Block_2035482484694c064740b358_58057937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_login_dropdown_footer' => 
  array (
    0 => 'Block_2035482484694c064740b358_58057937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php echo smarty_function_load_language_text(array('section'=>"SingleSignon",'name'=>"sso"),$_smarty_tpl);?>


	<?php if ($_smarty_tpl->tpl_vars['content_data']->value['sso']) {?>
		<div class="dropdown-sso"
        <?php if ($_smarty_tpl->tpl_vars['content_data']->value['cookieConsentIsInstalled'] && $_smarty_tpl->tpl_vars['content_data']->value['ssoCookieConsentPurposeIsActive']) {?>
             type="as-oil"
             data-purposes="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['ssoCookieConsentPurposeId'];?>
"
             data-managed="as-oil"
             style="display: none;"
        <?php }?>
        >
			<div class="separator">
				<span><?php echo $_smarty_tpl->tpl_vars['sso']->value['quick_login_with'];?>
</span>
			</div>
			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['sso']['googleLoginUrl']) {?>
					<div class="col-xs-3">
						<a class="sso-link sso-link-google" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_google'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['sso']['googleLoginUrl'];?>
">
							<i class="ssoicon fa fa-google" aria-hidden="true"></i>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['sso']['facebookLoginUrl']) {?>
					<div class="col-xs-3">
						<a class="sso-link sso-link-facebook" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_facebook'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['sso']['facebookLoginUrl'];?>
">
							<i class="ssoicon fa fa-facebook-official" aria-hidden="true"></i>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['sso']['paypalLoginUrl']) {?>
					<div class="col-xs-3">
						<a class="sso-link sso-link-paypal" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_paypal'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['sso']['paypalLoginUrl'];?>
">
							<i class="ssoicon fa fa-paypal" aria-hidden="true"></i>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['content_data']->value['sso']['amazonLoginUrl']) {?>
					<div class="col-xs-3">
						<a class="sso-link sso-link-amazon" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_amazon'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['sso']['amazonLoginUrl'];?>
">
							<i class="ssoicon fa fa-amazon" aria-hidden="true"></i>
						</a>
					</div>
				<?php }?>
			</div>
		</div>
	<?php }
}
}
/* {/block "box_login_dropdown_footer"} */
}
