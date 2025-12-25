<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_left_categories_static.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647706b85_68273272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc951f61bbd38392d42f5f5ad6d38153b61ce03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_left_categories_static.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647706b85_68273272 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1258612966694c06476f1651_28031194';
echo smarty_function_load_language_text(array('section'=>"box_categories"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2089559224694c06476f3104_41295423', "layout_left_categories_static");
}
/* {block "layout_left_categories_static_category_icon"} */
class Block_2090859202694c06477030e6_67940356 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																<img src="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['icon'];?>
" alt="" class="cat-image"/>
															<?php
}
}
/* {/block "layout_left_categories_static_category_icon"} */
/* {block "layout_left_categories_static_category_icon_if"} */
class Block_137023232694c06477022f3_59110213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['icon'] && strpos($_smarty_tpl->tpl_vars['categories_item']->value['data']['icon'],"item_ltr") == false) {?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2090859202694c06477030e6_67940356', "layout_left_categories_static_category_icon", $this->tplIndex);
?>

														<?php }?>
													<?php
}
}
/* {/block "layout_left_categories_static_category_icon_if"} */
/* {block "layout_left_categories_static_category_name"} */
class Block_1948809984694c0647703d35_19579237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

														<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;");?>

													<?php
}
}
/* {/block "layout_left_categories_static_category_name"} */
/* {block "layout_left_categories_static_category_count"} */
class Block_980942951694c0647705465_36896338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

																(<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count'];?>
)
															<?php
}
}
/* {/block "layout_left_categories_static_category_count"} */
/* {block "layout_left_categories_static_category_count_if"} */
class Block_418197132694c0647704dd2_32010206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

														<?php if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count']) {?>
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980942951694c0647705465_36896338', "layout_left_categories_static_category_count", $this->tplIndex);
?>

														<?php }?>
													<?php
}
}
/* {/block "layout_left_categories_static_category_count_if"} */
/* {block "layout_left_categories_static_category"} */
class Block_1220563687694c06476fa701_03954600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

												<a href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['icon'] && strpos($_smarty_tpl->tpl_vars['categories_item']->value['data']['icon'],"item_ltr") == false) {?> has-image<?php }?>" <?php if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['meta_description'] != '') {?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace(smarty_modifier_truncate($_smarty_tpl->tpl_vars['categories_item']->value['data']['meta_description'],80,"..."),'"','&quot;'));?>
"<?php } else { ?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;"),'"',''));?>
"<?php }?>>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137023232694c06477022f3_59110213', "layout_left_categories_static_category_icon_if", $this->tplIndex);
?>

													
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1948809984694c0647703d35_19579237', "layout_left_categories_static_category_name", $this->tplIndex);
?>

											
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_418197132694c0647704dd2_32010206', "layout_left_categories_static_category_count_if", $this->tplIndex);
?>

												</a>
											<?php
}
}
/* {/block "layout_left_categories_static_category"} */
/* {block "layout_left_categories_static_list_item"} */
class Block_1105238944694c06476f69b0_65737979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li id="menu_cat_id_<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['id'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['first'] : null)) {?>category-first<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['last'] : null)) {?>category-last<?php }?> <?php if ($_smarty_tpl->tpl_vars['content_data']->value['active_category_id'] == $_smarty_tpl->tpl_vars['categories_item']->value['data']['id']) {?>active<?php }?>" >
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1220563687694c06476fa701_03954600', "layout_left_categories_static_category", $this->tplIndex);
?>

										</li>
									<?php
}
}
/* {/block "layout_left_categories_static_list_item"} */
/* {block "layout_left_categories_static_list"} */
class Block_1800370982694c06476f5382_02275019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
?>

							<?php echo smarty_function_load_language_text(array('section'=>"malibu",'name'=>"malibu"),$_smarty_tpl);?>

							<?php if (!empty($_smarty_tpl->tpl_vars['CURRENT_CATEGORY_NAME']->value)) {?>
								<span class="heading"><?php echo $_smarty_tpl->tpl_vars['CURRENT_CATEGORY_NAME']->value;?>
</span>
							<?php } else { ?>
								<span class="heading"><?php echo $_smarty_tpl->tpl_vars['malibu']->value['category'];?>
</span>
							<?php }?>
							<ul class="nav">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA'], 'categories_item', false, NULL, 'cat_data', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['categories_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories_item']->value) {
$_smarty_tpl->tpl_vars['categories_item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cat_data']->value['total'];
?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1105238944694c06476f69b0_65737979', "layout_left_categories_static_list_item", $this->tplIndex);
?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						<?php
}
}
/* {/block "layout_left_categories_static_list"} */
/* {block "layout_left_categories_static_nav"} */
class Block_304658704694c06476f5141_19530920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<nav class="navbar-categories-left">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1800370982694c06476f5382_02275019', "layout_left_categories_static_list", $this->tplIndex);
?>

					</nav>
				<?php
}
}
/* {/block "layout_left_categories_static_nav"} */
/* {block "layout_left_categories_static_content"} */
class Block_492936929694c06476f4a63_01418031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="box box-categories panel panel-default"<?php if ($_smarty_tpl->tpl_vars['linkcrypter']->value && $_smarty_tpl->tpl_vars['linkcrypter']->value != '') {?> data-gambio-widget="link_crypter"<?php }?>>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_304658704694c06476f5141_19530920', "layout_left_categories_static_nav", $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block "layout_left_categories_static_content"} */
/* {block "layout_left_categories_static"} */
class Block_2089559224694c06476f3104_41295423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_left_categories_static' => 
  array (
    0 => 'Block_2089559224694c06476f3104_41295423',
  ),
  'layout_left_categories_static_content' => 
  array (
    0 => 'Block_492936929694c06476f4a63_01418031',
  ),
  'layout_left_categories_static_nav' => 
  array (
    0 => 'Block_304658704694c06476f5141_19530920',
  ),
  'layout_left_categories_static_list' => 
  array (
    0 => 'Block_1800370982694c06476f5382_02275019',
  ),
  'layout_left_categories_static_list_item' => 
  array (
    0 => 'Block_1105238944694c06476f69b0_65737979',
  ),
  'layout_left_categories_static_category' => 
  array (
    0 => 'Block_1220563687694c06476fa701_03954600',
  ),
  'layout_left_categories_static_category_icon_if' => 
  array (
    0 => 'Block_137023232694c06477022f3_59110213',
  ),
  'layout_left_categories_static_category_icon' => 
  array (
    0 => 'Block_2090859202694c06477030e6_67940356',
  ),
  'layout_left_categories_static_category_name' => 
  array (
    0 => 'Block_1948809984694c0647703d35_19579237',
  ),
  'layout_left_categories_static_category_count_if' => 
  array (
    0 => 'Block_418197132694c0647704dd2_32010206',
  ),
  'layout_left_categories_static_category_count' => 
  array (
    0 => 'Block_980942951694c0647705465_36896338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA']) > 0) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_492936929694c06476f4a63_01418031', "layout_left_categories_static_content", $this->tplIndex);
?>

	<?php }
}
}
/* {/block "layout_left_categories_static"} */
}
