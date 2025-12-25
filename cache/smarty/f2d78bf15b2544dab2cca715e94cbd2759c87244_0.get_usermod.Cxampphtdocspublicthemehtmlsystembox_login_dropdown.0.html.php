<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystembox_login_dropdown.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647428df1_86044296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d78bf15b2544dab2cca715e94cbd2759c87244' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystembox_login_dropdown.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647428df1_86044296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_login_dropdown"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"buttons",'name'=>"button"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"box_login",'name'=>"login"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207042067694c064741fa16_10317568', "box_login_dropdown");
?>

<?php }
/* {block "box_login_dropdown_arrow"} */
class Block_1764999187694c064741fcb7_13663902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="arrow"></li>
		<?php
}
}
/* {/block "box_login_dropdown_arrow"} */
/* {block "box_login_dropdown_heading"} */
class Block_768742383694c06474200e2_42094265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="dropdown-header hidden-xs"><?php echo $_smarty_tpl->tpl_vars['login']->value['heading_login'];?>
</li>
		<?php
}
}
/* {/block "box_login_dropdown_heading"} */
/* {block "box_login_dropdown_form_username"} */
class Block_1550154558694c0647421237_69204163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group">
							<input autocomplete="username" type="email" id="box-login-dropdown-login-username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_email'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FIELD_EMAIL_NAME'];?>
" />
						</div>
					<?php
}
}
/* {/block "box_login_dropdown_form_username"} */
/* {block "box_login_dropdown_form_password"} */
class Block_696618786694c0647421fa5_62719917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="form-group password-form-field" data-gambio-widget="show_password">
                            <input autocomplete="current-password" type="password" id="box-login-dropdown-login-password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_pwd'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FIELD_PWD_NAME'];?>
" />
                            <button class="btn show-password hidden" type="button">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </button>
                        </div>
					<?php
}
}
/* {/block "box_login_dropdown_form_password"} */
/* {block "box_login_dropdown_form_submit"} */
class Block_698140571694c0647423fa8_86588061 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<input type="submit" class="btn btn-primary btn-block" value="<?php echo $_smarty_tpl->tpl_vars['button']->value['login'];?>
" />
								<?php
}
}
/* {/block "box_login_dropdown_form_submit"} */
/* {block "box_login_dropdown_form_create_account"} */
class Block_369548785694c0647424e50_63968187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li>
											<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_create_account'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['LINK_CREATE_ACCOUNT'];?>
">
												<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_create_account'];?>

											</a>
										</li>
									<?php
}
}
/* {/block "box_login_dropdown_form_create_account"} */
/* {block "box_login_dropdown_form_lost_password"} */
class Block_590948688694c06474267e6_77815988 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li>
											<a title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_password_forgotten'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['LINK_LOST_PASSWORD'];?>
">
												<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_password_forgotten'];?>

											</a>
										</li>
									<?php
}
}
/* {/block "box_login_dropdown_form_lost_password"} */
/* {block "box_login_dropdown_footer"} */
class Block_1366559199694c0647423a34_18372539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_698140571694c0647423fa8_86588061', "box_login_dropdown_form_submit", $this->tplIndex);
?>

								<ul>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_369548785694c0647424e50_63968187', "box_login_dropdown_form_create_account", $this->tplIndex);
?>

									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590948688694c06474267e6_77815988', "box_login_dropdown_form_lost_password", $this->tplIndex);
?>

								</ul>
							<?php
}
}
/* {/block "box_login_dropdown_footer"} */
/* {block "box_login_dropdown_form_options"} */
class Block_995703096694c0647423494_66830945 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="dropdown-footer row">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1366559199694c0647423a34_18372539', "box_login_dropdown_footer", $this->tplIndex);
?>

						</div>
					<?php
}
}
/* {/block "box_login_dropdown_form_options"} */
/* {block "box_login_dropdown_form"} */
class Block_195284602694c0647420780_22434831 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li>
				<form action="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_ACTION_URL'];?>
" method="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_METHOD'];?>
" class="form-horizontal">
					<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_RETURN_URL'];?>
">
					<input type="hidden" name="return_url_hash" value="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FORM_RETURN_URL_HASH'];?>
">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1550154558694c0647421237_69204163', "box_login_dropdown_form_username", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_696618786694c0647421fa5_62719917', "box_login_dropdown_form_password", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_995703096694c0647423494_66830945', "box_login_dropdown_form_options", $this->tplIndex);
?>

				</form>
			</li>
		<?php
}
}
/* {/block "box_login_dropdown_form"} */
/* {block "box_login_dropdown"} */
class Block_207042067694c064741fa16_10317568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_login_dropdown' => 
  array (
    0 => 'Block_207042067694c064741fa16_10317568',
  ),
  'box_login_dropdown_arrow' => 
  array (
    0 => 'Block_1764999187694c064741fcb7_13663902',
  ),
  'box_login_dropdown_heading' => 
  array (
    0 => 'Block_768742383694c06474200e2_42094265',
  ),
  'box_login_dropdown_form' => 
  array (
    0 => 'Block_195284602694c0647420780_22434831',
  ),
  'box_login_dropdown_form_username' => 
  array (
    0 => 'Block_1550154558694c0647421237_69204163',
  ),
  'box_login_dropdown_form_password' => 
  array (
    0 => 'Block_696618786694c0647421fa5_62719917',
  ),
  'box_login_dropdown_form_options' => 
  array (
    0 => 'Block_995703096694c0647423494_66830945',
  ),
  'box_login_dropdown_footer' => 
  array (
    0 => 'Block_1366559199694c0647423a34_18372539',
  ),
  'box_login_dropdown_form_submit' => 
  array (
    0 => 'Block_698140571694c0647423fa8_86588061',
  ),
  'box_login_dropdown_form_create_account' => 
  array (
    0 => 'Block_369548785694c0647424e50_63968187',
  ),
  'box_login_dropdown_form_lost_password' => 
  array (
    0 => 'Block_590948688694c06474267e6_77815988',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="dropdown-menu dropdown-menu-login arrow-top">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1764999187694c064741fcb7_13663902', "box_login_dropdown_arrow", $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_768742383694c06474200e2_42094265', "box_login_dropdown_heading", $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195284602694c0647420780_22434831', "box_login_dropdown_form", $this->tplIndex);
?>

	</ul>
<?php
}
}
/* {/block "box_login_dropdown"} */
}
