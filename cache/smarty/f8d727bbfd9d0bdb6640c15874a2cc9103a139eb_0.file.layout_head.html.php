<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_head.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647daa0f2_33700443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d727bbfd9d0bdb6640c15874a2cc9103a139eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_head.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647daa0f2_33700443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1931341685694c0647d99708_97949508', "layout_head");
?>

<?php }
/* {block "layout_head_head_license_comment"} */
class Block_1988401289694c0647d9a185_60865719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					
					<!--

					=========================================================
					Shopsoftware by Gambio GmbH (c) 2005-2021 [www.gambio.de]
					=========================================================

					Gambio GmbH offers you highly scalable E-Commerce-Solutions and Services.
					The Shopsoftware is redistributable under the GNU General Public License (Version 2) [http://www.gnu.org/licenses/gpl-2.0.html].
					based on: E-Commerce Engine Copyright (c) 2006 xt:Commerce, created by Mario Zanier & Guido Winger and licensed under GNU/GPL.
					Information and contribution at http://www.xt-commerce.com

					=========================================================
					Please visit our website: www.gambio.de
					=========================================================

					-->
				<?php
}
}
/* {/block "layout_head_head_license_comment"} */
/* {block "layout_head_head_additional_html_array_first"} */
class Block_305486405694c0647d9a755_77066719 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo $_smarty_tpl->tpl_vars['content_data']->value['additional_html_array']['head']['first'];?>

                <?php
}
}
/* {/block "layout_head_head_additional_html_array_first"} */
/* {block "layout_head_head_viewport_meta"} */
class Block_36232003694c0647d9afe1_63491218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
				<?php
}
}
/* {/block "layout_head_head_viewport_meta"} */
/* {block "layout_head_head_additional_html_array_top"} */
class Block_1996979753694c0647d9b449_83140371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['content_data']->value['additional_html_array']['head']['top'];?>

				<?php
}
}
/* {/block "layout_head_head_additional_html_array_top"} */
/* {block "layout_head_head_hyphenopoly_configuration"} */
class Block_472289240694c0647d9bce0_09218033 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['hyphenopolyLanguage'] && $_smarty_tpl->tpl_vars['content_data']->value['hyphenopolyLoader']) {?>
						<?php echo '<script'; ?>
>
							var Hyphenopoly = {
								require: {
									"<?php echo $_smarty_tpl->tpl_vars['content_data']->value['hyphenopolyLanguage'];?>
": "FORCEHYPHENOPOLY"
								},
								paths: {
									patterndir: "<?php echo $_smarty_tpl->tpl_vars['content_data']->value['BASE_URL'];?>
JSEngine/build/vendor/hyphenopoly/patterns/",
									maindir: "<?php echo $_smarty_tpl->tpl_vars['content_data']->value['BASE_URL'];?>
JSEngine/build/vendor/hyphenopoly/"
								},
								setup: {
									timeout: 1000,
									classnames: {
										"title": {},
										"product-url": {},
										"hyphenate": {},
									}
								}
							};

							<?php echo $_smarty_tpl->tpl_vars['content_data']->value['hyphenopolyLoader'];?>

						<?php echo '</script'; ?>
>
					<?php }?>
				<?php
}
}
/* {/block "layout_head_head_hyphenopoly_configuration"} */
/* {block "layout_head_head_base"} */
class Block_1934967120694c0647d9d816_51475332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<base href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['BASE_URL'];?>
" />
				<?php
}
}
/* {/block "layout_head_head_base"} */
/* {block "layout_head_head_favicon"} */
class Block_1019068434694c0647d9e535_36482440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FAVICON'];?>
" type="image/x-icon" />
						<?php
}
}
/* {/block "layout_head_head_favicon"} */
/* {block "layout_head_head_favicon_if"} */
class Block_685976715694c0647d9df44_84338809 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['FAVICON']) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1019068434694c0647d9e535_36482440', "layout_head_head_favicon", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "layout_head_head_favicon_if"} */
/* {block "layout_head_head_favicon_ipad"} */
class Block_762684628694c0647d9f498_80158073 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['FAVICON_IPAD'];?>
" />
						<?php
}
}
/* {/block "layout_head_head_favicon_ipad"} */
/* {block "layout_head_head_favicon_ipad_if"} */
class Block_269777915694c0647d9eec7_97458301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['FAVICON_IPAD']) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_762684628694c0647d9f498_80158073', "layout_head_head_favicon_ipad", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "layout_head_head_favicon_ipad_if"} */
/* {block "layout_head_head_css_include"} */
class Block_1903037891694c0647da03c6_39957078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<link id="main-css" type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['CSS_FILE'];?>
?<?php echo $_smarty_tpl->tpl_vars['content_data']->value['CSS_PARAMS'];?>
" />
						<?php
}
}
/* {/block "layout_head_head_css_include"} */
/* {block "layout_head_head_css_include"} */
class Block_572093836694c0647da0e73_21413281 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <link id="main-css" type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['MAIN_CSS'];?>
" />
                        <?php
}
}
/* {/block "layout_head_head_css_include"} */
/* {block "layout_head_head_inline_css_if"} */
class Block_257429502694c0647d9fe09_02154543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['REBUILD_CSS']) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1903037891694c0647da03c6_39957078', "layout_head_head_css_include", $this->tplIndex);
?>

					<?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572093836694c0647da0e73_21413281', "layout_head_head_css_include", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "layout_head_head_inline_css_if"} */
/* {block "layout_head_head_additional_html_array_bottom"} */
class Block_1947210368694c0647da17f0_37642163 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['content_data']->value['additional_html_array']['head']['bottom'];?>

				<?php
}
}
/* {/block "layout_head_head_additional_html_array_bottom"} */
/* {block "layout_head_head_fixed_header_assign"} */
class Block_162197552694c0647da1fe9_84952490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

					<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-header-fixed"),$_smarty_tpl);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('fixedHeader', $_prefixVariable2);?>
				<?php
}
}
/* {/block "layout_head_head_fixed_header_assign"} */
/* {block "layout_head_head_debug_bar_header"} */
class Block_1103532241694c0647da3d55_00367908 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['debug_bar']) {?>
						<?php echo $_smarty_tpl->tpl_vars['content_data']->value['debug_bar_header_content'];?>

					<?php }?>
				<?php
}
}
/* {/block "layout_head_head_debug_bar_header"} */
/* {block "layout_head_head"} */
class Block_1184082113694c0647d99ea7_65368322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<head>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1988401289694c0647d9a185_60865719', "layout_head_head_license_comment", $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_305486405694c0647d9a755_77066719', "layout_head_head_additional_html_array_first", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36232003694c0647d9afe1_63491218', "layout_head_head_viewport_meta", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1996979753694c0647d9b449_83140371', "layout_head_head_additional_html_array_top", $this->tplIndex);
?>


								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_472289240694c0647d9bce0_09218033', "layout_head_head_hyphenopoly_configuration", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1934967120694c0647d9d816_51475332', "layout_head_head_base", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_685976715694c0647d9df44_84338809', "layout_head_head_favicon_if", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_269777915694c0647d9eec7_97458301', "layout_head_head_favicon_ipad_if", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257429502694c0647d9fe09_02154543', "layout_head_head_inline_css_if", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947210368694c0647da17f0_37642163', "layout_head_head_additional_html_array_bottom", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162197552694c0647da1fe9_84952490', "layout_head_head_fixed_header_assign", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1103532241694c0647da3d55_00367908', "layout_head_head_debug_bar_header", $this->tplIndex);
?>


			</head>
		<?php
}
}
/* {/block "layout_head_head"} */
/* {block "layout_head_body_additional_html"} */
class Block_207126058694c0647da7641_69302558 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php echo $_smarty_tpl->tpl_vars['content_data']->value['additional_html_array']['body']['top'];?>

				<?php
}
}
/* {/block "layout_head_body_additional_html"} */
/* {block "layout_head_body_additional_warnings"} */
class Block_1800554425694c0647da7ea9_28667125 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['additional_warnings']) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['additional_warnings'], 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
							<table style="background: #fff;" class="box-error" border="0" width="100%" cellspacing="0" cellpadding="2">
								<tbody>
									<tr>
										<td class="errorBox">
											<table style="width: 100%;"><tr><td style="vertical-align: middle; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</td></tr></table>
										</td>
									</tr>
								</tbody>
							</table>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				<?php
}
}
/* {/block "layout_head_body_additional_warnings"} */
/* {block "layout_head_body_shop_offline_warning"} */
class Block_914414204694c0647da9148_05163620 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['content_data']->value['show_shop_offline_warning']) {?>
						<table style="background: #fff;" class="box-warning" border="0" width="100%" cellspacing="0" cellpadding="2">
							<tbody>
								<tr>
									<td class="warningBox"><table style="width: 100%;"><tbody><tr><td style="vertical-align: middle; text-align: center;"><a style="color: inherit; text-decoration: inherit;" href="admin/gm_offline.php"><?php echo $_smarty_tpl->tpl_vars['txt']->value['TEXT_SHOP_STATUS'];?>
</a></td></tr></tbody></table></td>
								</tr>
							</tbody>
						</table>
					<?php }?>
				<?php
}
}
/* {/block "layout_head_body_shop_offline_warning"} */
/* {block "layout_head_body"} */
class Block_2115551659694c0647da4d33_37213229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.page_id.php','function'=>'smarty_function_page_id',),));
?>

			<body class="<?php echo smarty_function_page_id(array(),$_smarty_tpl);?>
"
				  data-gambio-namespace="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['BASE_URL'];
echo $_smarty_tpl->tpl_vars['theme_path']->value;?>
javascripts/system"
				  data-jse-namespace="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['BASE_URL'];?>
JSEngine/build"
				  data-gambio-controller="initialize"
				  data-gambio-widget="input_number responsive_image_loader transitions <?php if ($_smarty_tpl->tpl_vars['fixedHeader']->value) {?>header <?php }?>image_maps modal history dropdown core_workarounds anchor"
				  data-input_number-separator="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['numberSeparator'];?>
"
					<?php echo $_smarty_tpl->tpl_vars['content_data']->value['additional_html_array']['body']['params'];?>
>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207126058694c0647da7641_69302558', "layout_head_body_additional_html", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1800554425694c0647da7ea9_28667125', "layout_head_body_additional_warnings", $this->tplIndex);
?>


				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914414204694c0647da9148_05163620', "layout_head_body_shop_offline_warning", $this->tplIndex);
?>

		<?php
}
}
/* {/block "layout_head_body"} */
/* {block "layout_head"} */
class Block_1931341685694c0647d99708_97949508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_head' => 
  array (
    0 => 'Block_1931341685694c0647d99708_97949508',
  ),
  'layout_head_head' => 
  array (
    0 => 'Block_1184082113694c0647d99ea7_65368322',
  ),
  'layout_head_head_license_comment' => 
  array (
    0 => 'Block_1988401289694c0647d9a185_60865719',
  ),
  'layout_head_head_additional_html_array_first' => 
  array (
    0 => 'Block_305486405694c0647d9a755_77066719',
  ),
  'layout_head_head_viewport_meta' => 
  array (
    0 => 'Block_36232003694c0647d9afe1_63491218',
  ),
  'layout_head_head_additional_html_array_top' => 
  array (
    0 => 'Block_1996979753694c0647d9b449_83140371',
  ),
  'layout_head_head_hyphenopoly_configuration' => 
  array (
    0 => 'Block_472289240694c0647d9bce0_09218033',
  ),
  'layout_head_head_base' => 
  array (
    0 => 'Block_1934967120694c0647d9d816_51475332',
  ),
  'layout_head_head_favicon_if' => 
  array (
    0 => 'Block_685976715694c0647d9df44_84338809',
  ),
  'layout_head_head_favicon' => 
  array (
    0 => 'Block_1019068434694c0647d9e535_36482440',
  ),
  'layout_head_head_favicon_ipad_if' => 
  array (
    0 => 'Block_269777915694c0647d9eec7_97458301',
  ),
  'layout_head_head_favicon_ipad' => 
  array (
    0 => 'Block_762684628694c0647d9f498_80158073',
  ),
  'layout_head_head_inline_css_if' => 
  array (
    0 => 'Block_257429502694c0647d9fe09_02154543',
  ),
  'layout_head_head_css_include' => 
  array (
    0 => 'Block_1903037891694c0647da03c6_39957078',
    1 => 'Block_572093836694c0647da0e73_21413281',
  ),
  'layout_head_head_additional_html_array_bottom' => 
  array (
    0 => 'Block_1947210368694c0647da17f0_37642163',
  ),
  'layout_head_head_fixed_header_assign' => 
  array (
    0 => 'Block_162197552694c0647da1fe9_84952490',
  ),
  'layout_head_head_debug_bar_header' => 
  array (
    0 => 'Block_1103532241694c0647da3d55_00367908',
  ),
  'layout_head_body' => 
  array (
    0 => 'Block_2115551659694c0647da4d33_37213229',
  ),
  'layout_head_body_additional_html' => 
  array (
    0 => 'Block_207126058694c0647da7641_69302558',
  ),
  'layout_head_body_additional_warnings' => 
  array (
    0 => 'Block_1800554425694c0647da7ea9_28667125',
  ),
  'layout_head_body_shop_offline_warning' => 
  array (
    0 => 'Block_914414204694c0647da9148_05163620',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" <?php echo $_smarty_tpl->tpl_vars['content_data']->value['HTML_PARAMS'];?>
>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1184082113694c0647d99ea7_65368322', "layout_head_head", $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2115551659694c0647da4d33_37213229', "layout_head_body", $this->tplIndex);
?>

<?php
}
}
/* {/block "layout_head"} */
}
