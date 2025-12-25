<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:11
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlogin.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd79c9c47_26311533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60bab579b1f650def02b63749c9558ca5122fdd6' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlogin.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."checkout_process_funnel.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."alert_message.html' => 1,
  ),
),false)) {
function content_694d6dd79c9c47_26311533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"login"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_740279766694d6dd7991785_82674200', "login");
?>

<?php }
/* {block "login_checkout_funnel"} */
class Block_536892131694d6dd7998440_50178147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."checkout_process_funnel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step'=>1), 0, true);
?>
				<?php
}
}
/* {/block "login_checkout_funnel"} */
/* {block "login_checkout_funnel_if"} */
class Block_25204226694d6dd79920a0_72525896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_GET['checkout_started'] === "1") {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_536892131694d6dd7998440_50178147', "login_checkout_funnel", $this->tplIndex);
?>

			<?php }?>
		<?php
}
}
/* {/block "login_checkout_funnel_if"} */
/* {block "login_title"} */
class Block_1257163626694d6dd799f401_37194439 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<h1><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_login'];?>
</h1>
		<?php
}
}
/* {/block "login_title"} */
/* {block "login_alert"} */
class Block_14234661694d6dd79a1ce1_28607945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."alert_message.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('message'=>$_smarty_tpl->tpl_vars['info_message']->value,'type'=>$_smarty_tpl->tpl_vars['message_type']->value), 0, true);
?>
				<?php
}
}
/* {/block "login_alert"} */
/* {block "login_account_title"} */
class Block_1109813230694d6dd79a4df7_38685428 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<h4><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_new'];?>
</h4>
									<?php
}
}
/* {/block "login_account_title"} */
/* {block "login_account_guestonly_text"} */
class Block_902908004694d6dd79a6dd9_85469750 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_new_guest_only'];?>

										<?php
}
}
/* {/block "login_account_guestonly_text"} */
/* {block "login_account_accountonly_text"} */
class Block_35244011694d6dd79a8eb0_99892619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_new_account_only'];?>

										<?php
}
}
/* {/block "login_account_accountonly_text"} */
/* {block "login_account_both_text"} */
class Block_1021903913694d6dd79aaf28_61484633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_new'];?>
<br><br>
											<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_new_guest_option'];?>

										<?php
}
}
/* {/block "login_account_both_text"} */
/* {block "login_account_button"} */
class Block_2000268917694d6dd79ad003_61197844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="login-buttons">
										<a href="<?php echo $_smarty_tpl->tpl_vars['NEW_ACCOUNT_URL']->value;?>
" class="btn btn-default btn-block"><?php echo $_smarty_tpl->tpl_vars['button']->value['register'];?>
</a>
									</div>
								<?php
}
}
/* {/block "login_account_button"} */
/* {block "login_account"} */
class Block_1006382568694d6dd79a4555_70353560 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="col-lg-6">
								<div class="fieldset-content">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1109813230694d6dd79a4df7_38685428', "login_account_title", $this->tplIndex);
?>

									<?php if ($_smarty_tpl->tpl_vars['account_option']->value == 'guest') {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_902908004694d6dd79a6dd9_85469750', "login_account_guestonly_text", $this->tplIndex);
?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['account_option']->value == 'account') {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35244011694d6dd79a8eb0_99892619', "login_account_accountonly_text", $this->tplIndex);
?>

									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['account_option']->value == 'both') {?>
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1021903913694d6dd79aaf28_61484633', "login_account_both_text", $this->tplIndex);
?>

									<?php }?>
								</div>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2000268917694d6dd79ad003_61197844', "login_account_button", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "login_account"} */
/* {block "login_customer_title"} */
class Block_730361005694d6dd79af8c6_65009554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<h4><?php echo $_smarty_tpl->tpl_vars['txt']->value['title_returning'];?>
</h4>
									<?php
}
}
/* {/block "login_customer_title"} */
/* {block "login_customer_email"} */
class Block_678007195694d6dd79b0da1_31587133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<div class="form-group mandatory">
											<input autocomplete="username" type="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_email'];?>
" id="login-<?php echo $_smarty_tpl->tpl_vars['INPUT_MAIL_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['INPUT_MAIL_NAME']->value;?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['INPUT_MAIL_VALUE']->value;?>
" />
										</div>
									<?php
}
}
/* {/block "login_customer_email"} */
/* {block "login_customer_password"} */
class Block_1386226376694d6dd79b2b17_13988789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <div class="form-group mandatory password-form-field" data-gambio-widget="show_password">
                                            <input autocomplete="current-password" type="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_password'];?>
" id="login-<?php echo $_smarty_tpl->tpl_vars['INPUT_PASSWORD_NAME']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['INPUT_PASSWORD_NAME']->value;?>
" class="form-control" value="" />
                                            <button class="btn show-password hidden" type="button">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                        </div>
									<?php
}
}
/* {/block "login_customer_password"} */
/* {block "login_customer_lost_password"} */
class Block_2036183843694d6dd79b45d7_10393559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<a href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOST_PASSWORD']->value;?>
" class=""><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_lost_password'];?>
</a>
									<?php
}
}
/* {/block "login_customer_lost_password"} */
/* {block "login_customer_button"} */
class Block_1497063352694d6dd79b5e23_33487490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="login-buttons">
										<input type="submit" name="" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['login'];?>
" class="btn btn-primary btn-block">
									</div>
								<?php
}
}
/* {/block "login_customer_button"} */
/* {block "login_customer"} */
class Block_180598152694d6dd79af014_62447880 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="col-lg-6">
								<div class="fieldset-content">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_730361005694d6dd79af8c6_65009554', "login_customer_title", $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_678007195694d6dd79b0da1_31587133', "login_customer_email", $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1386226376694d6dd79b2b17_13988789', "login_customer_password", $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2036183843694d6dd79b45d7_10393559', "login_customer_lost_password", $this->tplIndex);
?>

								</div>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1497063352694d6dd79b5e23_33487490', "login_customer_button", $this->tplIndex);
?>

							</div>
						<?php
}
}
/* {/block "login_customer"} */
/* {block "login_login"} */
class Block_802126728694d6dd79a3c99_35671803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="row row-login">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1006382568694d6dd79a4555_70353560', "login_account", $this->tplIndex);
?>

						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180598152694d6dd79af014_62447880', "login_customer", $this->tplIndex);
?>

					</div>
				<?php
}
}
/* {/block "login_login"} */
/* {block "login_checkout_button"} */
class Block_727137141694d6dd79c4ff8_92269071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ($_smarty_tpl->tpl_vars['cobutton']->value['script']) {?>
										<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['script'];?>

									<?php } else { ?>
										<a style="display: inline-block; vertical-align: middle;" href="<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['url'];?>
">
											<img src="<?php echo $_smarty_tpl->tpl_vars['cobutton']->value['img'];?>
">
										</a>
									<?php }?>
								<?php
}
}
/* {/block "login_checkout_button"} */
/* {block "login_checkout_buttons"} */
class Block_900413066694d6dd79be249_80800232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<div class="cols3">
						<div class="col first h300">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['checkout_buttons']->value, 'cobutton', false, NULL, 'cob', array (
));
$_smarty_tpl->tpl_vars['cobutton']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cobutton']->value) {
$_smarty_tpl->tpl_vars['cobutton']->do_else = false;
?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_727137141694d6dd79c4ff8_92269071', "login_checkout_button", $this->tplIndex);
?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<?php
}
}
/* {/block "login_checkout_buttons"} */
/* {block "login_form"} */
class Block_585158865694d6dd79a0ce6_25666982 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

			<form id="<?php echo $_smarty_tpl->tpl_vars['FORM_ID']->value;?>
" action="<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION_URL']->value;?>
" method="post" class="">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14234661694d6dd79a1ce1_28607945', "login_alert", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_802126728694d6dd79a3c99_35671803', "login_login", $this->tplIndex);
?>


				<?php if (is_array($_smarty_tpl->tpl_vars['checkout_buttons']->value) && smarty_modifier_count($_smarty_tpl->tpl_vars['checkout_buttons']->value) > 0) {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_900413066694d6dd79be249_80800232', "login_checkout_buttons", $this->tplIndex);
?>

				<?php }?>
			</form>
		<?php
}
}
/* {/block "login_form"} */
/* {block "login"} */
class Block_740279766694d6dd7991785_82674200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login' => 
  array (
    0 => 'Block_740279766694d6dd7991785_82674200',
  ),
  'login_checkout_funnel_if' => 
  array (
    0 => 'Block_25204226694d6dd79920a0_72525896',
  ),
  'login_checkout_funnel' => 
  array (
    0 => 'Block_536892131694d6dd7998440_50178147',
  ),
  'login_title' => 
  array (
    0 => 'Block_1257163626694d6dd799f401_37194439',
  ),
  'login_form' => 
  array (
    0 => 'Block_585158865694d6dd79a0ce6_25666982',
  ),
  'login_alert' => 
  array (
    0 => 'Block_14234661694d6dd79a1ce1_28607945',
  ),
  'login_login' => 
  array (
    0 => 'Block_802126728694d6dd79a3c99_35671803',
  ),
  'login_account' => 
  array (
    0 => 'Block_1006382568694d6dd79a4555_70353560',
  ),
  'login_account_title' => 
  array (
    0 => 'Block_1109813230694d6dd79a4df7_38685428',
  ),
  'login_account_guestonly_text' => 
  array (
    0 => 'Block_902908004694d6dd79a6dd9_85469750',
  ),
  'login_account_accountonly_text' => 
  array (
    0 => 'Block_35244011694d6dd79a8eb0_99892619',
  ),
  'login_account_both_text' => 
  array (
    0 => 'Block_1021903913694d6dd79aaf28_61484633',
  ),
  'login_account_button' => 
  array (
    0 => 'Block_2000268917694d6dd79ad003_61197844',
  ),
  'login_customer' => 
  array (
    0 => 'Block_180598152694d6dd79af014_62447880',
  ),
  'login_customer_title' => 
  array (
    0 => 'Block_730361005694d6dd79af8c6_65009554',
  ),
  'login_customer_email' => 
  array (
    0 => 'Block_678007195694d6dd79b0da1_31587133',
  ),
  'login_customer_password' => 
  array (
    0 => 'Block_1386226376694d6dd79b2b17_13988789',
  ),
  'login_customer_lost_password' => 
  array (
    0 => 'Block_2036183843694d6dd79b45d7_10393559',
  ),
  'login_customer_button' => 
  array (
    0 => 'Block_1497063352694d6dd79b5e23_33487490',
  ),
  'login_checkout_buttons' => 
  array (
    0 => 'Block_900413066694d6dd79be249_80800232',
  ),
  'login_checkout_button' => 
  array (
    0 => 'Block_727137141694d6dd79c4ff8_92269071',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="row">
		<div class="col-lg-10 col-lg-offset-1">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25204226694d6dd79920a0_72525896', "login_checkout_funnel_if", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1257163626694d6dd799f401_37194439', "login_title", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_585158865694d6dd79a0ce6_25666982', "login_form", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block "login"} */
}
