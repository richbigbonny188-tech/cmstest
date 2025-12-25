<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\megadropdown.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06475490d7_46111803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25852f60a793844d95283ec75f2c4b9c7afb900e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\megadropdown.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06475490d7_46111803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '909475747694c064752d172_22337736';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2008273212694c064752e4c8_47484155', "megadropdown");
}
/* {block "megadropdown_categories_list_children_subitem"} */
class Block_175869654694c0647540665_29276521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

																		<li class=""><a id="megadropdown_<?php echo $_smarty_tpl->tpl_vars['children_item']->value['data']['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['children_item']->value['data']['url'];?>
"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['children_item']->value['data']['name'],"&amp;","&"),"&","&amp;");
if ($_smarty_tpl->tpl_vars['children_item']->value['data']['products_count']) {?> (<?php echo $_smarty_tpl->tpl_vars['children_item']->value['data']['products_count'];?>
)<?php }?></a></li>
																	<?php
}
}
/* {/block "megadropdown_categories_list_children_subitem"} */
/* {block "megadropdown_categories_list_children_sublist"} */
class Block_1795388288694c064753f577_43486984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

															<ul>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_item']->value['children'], 'children_item');
$_smarty_tpl->tpl_vars['children_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['children_item']->value) {
$_smarty_tpl->tpl_vars['children_item']->do_else = false;
?>
																	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175869654694c0647540665_29276521', "megadropdown_categories_list_children_subitem", $this->tplIndex);
?>

																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															</ul>
														<?php
}
}
/* {/block "megadropdown_categories_list_children_sublist"} */
/* {block "megadropdown_categories_list_children_item"} */
class Block_1228431492694c0647539d96_25766574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

												<li class="top_li">
													<a id="megadropdown_<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;");
if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count']) {?> (<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count'];?>
)<?php }?></a>
													<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['categories_item']->value['children']) > 0) {?>
														<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795388288694c064753f577_43486984', "megadropdown_categories_list_children_sublist", $this->tplIndex);
?>

													<?php }?>
												</li>
											<?php
}
}
/* {/block "megadropdown_categories_list_children_item"} */
/* {block "megadropdown_categories_list_children"} */
class Block_1745470818694c0647538c35_11405432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA'], 'categories_item', false, NULL, 'cat_data', array (
));
$_smarty_tpl->tpl_vars['categories_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories_item']->value) {
$_smarty_tpl->tpl_vars['categories_item']->do_else = false;
?>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1228431492694c0647539d96_25766574', "megadropdown_categories_list_children_item", $this->tplIndex);
?>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php
}
}
/* {/block "megadropdown_categories_list_children"} */
/* {block "megadropdown_categories_list_no_children_item"} */
class Block_2130007885694c0647545144_55629996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

													<li><a id="megadropdown_<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;");
if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count']) {?> (<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count'];?>
)<?php }?></a></li>
													<?php
}
}
/* {/block "megadropdown_categories_list_no_children_item"} */
/* {block "megadropdown_categories_list_no_children"} */
class Block_1942800069694c0647544529_20392003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li>
											<ul>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA'], 'categories_item', false, NULL, 'cat_data', array (
));
$_smarty_tpl->tpl_vars['categories_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories_item']->value) {
$_smarty_tpl->tpl_vars['categories_item']->do_else = false;
?>
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2130007885694c0647545144_55629996', "megadropdown_categories_list_no_children_item", $this->tplIndex);
?>

												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</ul>
										</li>
									<?php
}
}
/* {/block "megadropdown_categories_list_no_children"} */
/* {block "megadropdown_categories_list"} */
class Block_1458733112694c0647534286_28028200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.has_children.php','function'=>'smarty_modifier_has_children',),));
?>

							<ul>
								<?php if (smarty_modifier_has_children($_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA'])) {?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1745470818694c0647538c35_11405432', "megadropdown_categories_list_children", $this->tplIndex);
?>

								<?php } else { ?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1942800069694c0647544529_20392003', "megadropdown_categories_list_no_children", $this->tplIndex);
?>

								<?php }?>
							</ul>
						<?php
}
}
/* {/block "megadropdown_categories_list"} */
/* {block "megadropdown_categories"} */
class Block_1477012424694c06475335c6_37626034 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div id="megadropdown_box_id_<?php echo $_smarty_tpl->tpl_vars['content_data']->value['current_category_id'];?>
" class="megadropdown clearfix" style="display:none">
				<div class="megadropdown-shadow clearfix">
					<div class="megadropdown-inside clearfix">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1458733112694c0647534286_28028200', "megadropdown_categories_list", $this->tplIndex);
?>

					</div>
				</div>
			</div>
		<?php
}
}
/* {/block "megadropdown_categories"} */
/* {block "megadropdown_parents"} */
class Block_411224036694c0647548668_97115194 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo $_smarty_tpl->tpl_vars['content_data']->value['categories_parents_ids'];?>

	<?php
}
}
/* {/block "megadropdown_parents"} */
/* {block "megadropdown"} */
class Block_2008273212694c064752e4c8_47484155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'megadropdown' => 
  array (
    0 => 'Block_2008273212694c064752e4c8_47484155',
  ),
  'megadropdown_categories' => 
  array (
    0 => 'Block_1477012424694c06475335c6_37626034',
  ),
  'megadropdown_categories_list' => 
  array (
    0 => 'Block_1458733112694c0647534286_28028200',
  ),
  'megadropdown_categories_list_children' => 
  array (
    0 => 'Block_1745470818694c0647538c35_11405432',
  ),
  'megadropdown_categories_list_children_item' => 
  array (
    0 => 'Block_1228431492694c0647539d96_25766574',
  ),
  'megadropdown_categories_list_children_sublist' => 
  array (
    0 => 'Block_1795388288694c064753f577_43486984',
  ),
  'megadropdown_categories_list_children_subitem' => 
  array (
    0 => 'Block_175869654694c0647540665_29276521',
  ),
  'megadropdown_categories_list_no_children' => 
  array (
    0 => 'Block_1942800069694c0647544529_20392003',
  ),
  'megadropdown_categories_list_no_children_item' => 
  array (
    0 => 'Block_2130007885694c0647545144_55629996',
  ),
  'megadropdown_parents' => 
  array (
    0 => 'Block_411224036694c0647548668_97115194',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA']) > 0) {?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1477012424694c06475335c6_37626034', "megadropdown_categories", $this->tplIndex);
?>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_411224036694c0647548668_97115194', "megadropdown_parents", $this->tplIndex);
?>

<?php
}
}
/* {/block "megadropdown"} */
}
