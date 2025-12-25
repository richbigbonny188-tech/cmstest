<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_specials.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647a88fd2_63974585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5722092ccb5717def90a7fe7e0a53425ca9dfc6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_specials.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_headline_link_top.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."layout_box_bottom.html' => 1,
  ),
),false)) {
function content_694c0647a88fd2_63974585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_specials"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105050517694c0647a78d88_82678060', "box_specials");
?>

<?php }
/* {block "box_specials_top"} */
class Block_1163382861694c0647a790f7_90895885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_headline_link_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>"specials",'headline'=>$_smarty_tpl->tpl_vars['txt']->value['heading_specials'],'link'=>$_smarty_tpl->tpl_vars['content_data']->value['SPECIALS_LINK'],'title'=>$_smarty_tpl->tpl_vars['txt']->value['heading_specials'],'icon_right'=>"arrow-circle-right "), 0, true);
?>
	<?php
}
}
/* {/block "box_specials_top"} */
/* {block "box_specials_promotion_image"} */
class Block_88951401694c0647a7d4b3_46884391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE'];?>
" alt="<?php echo (($tmp = $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'] ?? null : $tmp);?>
" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'] ?? null : $tmp);?>
" />
						<?php
}
}
/* {/block "box_specials_promotion_image"} */
/* {block "box_specials_promotion_image_container"} */
class Block_118471833694c0647a7abd4_86994933 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div class="promotion-box-image">
					<a href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_LINK'];?>
" title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'] ?? null : $tmp);?>
">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88951401694c0647a7d4b3_46884391', "box_specials_promotion_image", $this->tplIndex);
?>

					</a>
				</div>
			<?php
}
}
/* {/block "box_specials_promotion_image_container"} */
/* {block "box_specials_promotion_title"} */
class Block_1939577227694c0647a7ef82_34042107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

				<br />
				<span class="promotion-box-title <?php if (smarty_modifier_gm_get_conf('ENABLE_JS_HYPHENATION') == 'true') {?>hyphenate<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_LINK'];?>
"<?php if ($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_META_DESCRIPTION'] != '') {?> title="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_META_DESCRIPTION'],80,"..."),'"','&quot;');?>
"<?php } else { ?> title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'] ?? null : $tmp);?>
"<?php }?>>
						<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'];?>

					</a>
				</span>
				<br />
			<?php
}
}
/* {/block "box_specials_promotion_title"} */
/* {block "box_specials_promotion_price"} */
class Block_1941439432694c0647a84b06_05466516 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

				<br />
				<span class="promotion-box-price">
					<a href="<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_LINK'];?>
"<?php if ($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_META_DESCRIPTION'] != '') {?> title="<?php echo smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_META_DESCRIPTION'],80,"..."),'"','&quot;');?>
"<?php } else { ?> title="<?php echo (($tmp = $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE_ALT'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_NAME'] ?? null : $tmp);?>
"<?php }?>>
						<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_PRICE'];?>

					</a>
				</span>
				<br />
			<?php
}
}
/* {/block "box_specials_promotion_price"} */
/* {block "box_specials_promotion_vpe"} */
class Block_634154720694c0647a87b20_49963186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<span class="promotion-box-vpe">
						<?php echo $_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_VPE'];?>

					</span>
					<br />
				<?php
}
}
/* {/block "box_specials_promotion_vpe"} */
/* {block "box_specials_content"} */
class Block_611224567694c0647a7a4d9_73589023 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_IMAGE']) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118471833694c0647a7abd4_86994933', "box_specials_promotion_image_container", $this->tplIndex);
?>

		<?php }?>
		<div>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1939577227694c0647a7ef82_34042107', "box_specials_promotion_title", $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1941439432694c0647a84b06_05466516', "box_specials_promotion_price", $this->tplIndex);
?>

			
			<?php if ($_smarty_tpl->tpl_vars['content_data']->value['box_content']['PRODUCTS_VPE']) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_634154720694c0647a87b20_49963186', "box_specials_promotion_vpe", $this->tplIndex);
?>

			<?php }?>
		</div>
	<?php
}
}
/* {/block "box_specials_content"} */
/* {block "box_specials_bottom"} */
class Block_112767970694c0647a884e8_12838848 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."layout_box_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php
}
}
/* {/block "box_specials_bottom"} */
/* {block "box_specials"} */
class Block_105050517694c0647a78d88_82678060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_specials' => 
  array (
    0 => 'Block_105050517694c0647a78d88_82678060',
  ),
  'box_specials_top' => 
  array (
    0 => 'Block_1163382861694c0647a790f7_90895885',
  ),
  'box_specials_content' => 
  array (
    0 => 'Block_611224567694c0647a7a4d9_73589023',
  ),
  'box_specials_promotion_image_container' => 
  array (
    0 => 'Block_118471833694c0647a7abd4_86994933',
  ),
  'box_specials_promotion_image' => 
  array (
    0 => 'Block_88951401694c0647a7d4b3_46884391',
  ),
  'box_specials_promotion_title' => 
  array (
    0 => 'Block_1939577227694c0647a7ef82_34042107',
  ),
  'box_specials_promotion_price' => 
  array (
    0 => 'Block_1941439432694c0647a84b06_05466516',
  ),
  'box_specials_promotion_vpe' => 
  array (
    0 => 'Block_634154720694c0647a87b20_49963186',
  ),
  'box_specials_bottom' => 
  array (
    0 => 'Block_112767970694c0647a884e8_12838848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1163382861694c0647a790f7_90895885', "box_specials_top", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_611224567694c0647a7a4d9_73589023', "box_specials_content", $this->tplIndex);
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112767970694c0647a884e8_12838848', "box_specials_bottom", $this->tplIndex);
?>

<?php
}
}
/* {/block "box_specials"} */
}
