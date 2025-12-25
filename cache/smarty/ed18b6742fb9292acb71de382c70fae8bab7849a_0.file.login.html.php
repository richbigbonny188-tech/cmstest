<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:11
  from 'C:\xampp\htdocs\public\theme\html\system\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd7964de8_33206558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed18b6742fb9292acb71de382c70fae8bab7849a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\login.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd7964de8_33206558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2106724051694d6dd79418b0_07749156', "login");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."login.0.html");
}
/* {block "login"} */
class Block_2106724051694d6dd79418b0_07749156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_2106724051694d6dd79418b0_07749156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php echo smarty_function_load_language_text(array('section'=>"SingleSignon",'name'=>"sso"),$_smarty_tpl);?>


	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['ssoData']->value)) {?>
		<div class="sso-logins"
        <?php if ($_smarty_tpl->tpl_vars['cookieConsentIsInstalled']->value && $_smarty_tpl->tpl_vars['ssoCookieConsentPurposeIsActive']->value) {?>
             type="as-oil"
             data-purposes="<?php echo $_smarty_tpl->tpl_vars['ssoCookieConsentPurposeId']->value;?>
"
             data-managed="as-oil"
             style="display: none;"
        <?php }?>
        >
			<h4><?php echo $_smarty_tpl->tpl_vars['sso']->value['login_heading'];?>
</h4>
			<p class="sso-note"><?php echo $_smarty_tpl->tpl_vars['sso']->value['note_sso'];?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['ssoData']->value['googleLoginUrl']) {?>
				<a class="sso-link sso-link-google" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_google'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['ssoData']->value['googleLoginUrl'];?>
">
					<i class="ssoicon fa fa-google" aria-hidden="true"></i><span class="ssolabel"><?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_google'];?>
</span>
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['ssoData']->value['facebookLoginUrl']) {?>
				<a class="sso-link sso-link-facebook" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_facebook'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['ssoData']->value['facebookLoginUrl'];?>
">
					<i class="ssoicon fa fa-facebook-official" aria-hidden="true"></i><span class="ssolabel"><?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_facebook'];?>
</span>
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['ssoData']->value['paypalLoginUrl']) {?>
				<a class="sso-link sso-link-paypal" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_paypal'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['ssoData']->value['paypalLoginUrl'];?>
">
					<i class="ssoicon fa fa-paypal" aria-hidden="true"></i><span class="ssolabel"><?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_paypal'];?>
</span>
				</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['ssoData']->value['amazonLoginUrl']) {?>
				<a class="sso-link sso-link-amazon" title="<?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_amazon'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['ssoData']->value['amazonLoginUrl'];?>
">
					<i class="ssoicon fa fa-amazon" aria-hidden="true"></i><span class="ssolabel"><?php echo $_smarty_tpl->tpl_vars['sso']->value['login_with_amazon'];?>
</span>
				</a>
			<?php }?>
		</div>
	<?php }
}
}
/* {/block "login"} */
}
