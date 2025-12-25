<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\box_content_top.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647164d12_30772549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0988aced5cfad300f3c3ae66755e1e3e47f06f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\box_content_top.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647164d12_30772549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_categories_top"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284887315694c0647145087_60698493', "box_content_top");
}
/* {block "box_content_top_custom_entry_name"} */
class Block_1532785356694c0647158bb7_51940488 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_item']->value['NAME'];
}
}
/* {/block "box_content_top_custom_entry_name"} */
/* {block "box_content_top_custom_entry"} */
class Block_599977952694c064714ebe1_05601640 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

							<a <?php if ($_smarty_tpl->tpl_vars['content_item']->value['SELECTED']) {?>class="active"<?php }?> data-id="top_custom-<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
"
							   href="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL'];?>
"
							   <?php if ($_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] && $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'] != '_top') {?>target="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'];?>
"<?php }?>
							   title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['content_item']->value['NAME'],'"',''));?>
">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532785356694c0647158bb7_51940488', "box_content_top_custom_entry_name", $this->tplIndex);
?>

							</a>
						<?php
}
}
/* {/block "box_content_top_custom_entry"} */
/* {block "box_content_top_custom_entries"} */
class Block_1481109007694c0647149a33_85456306 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<li id="mainNavigation" class="custom custom-entries hidden-xs">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CONTENT_LINKS_DATA'], 'content_item', false, 'counter', 'cat_data', array (
));
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599977952694c064714ebe1_05601640', "box_content_top_custom_entry", $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</li>
			<?php
}
}
/* {/block "box_content_top_custom_entries"} */
/* {block "box_content_top_custom_entry2_name"} */
class Block_1160101768694c064715c6b7_15599953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_item']->value['NAME'];
}
}
/* {/block "box_content_top_custom_entry2_name"} */
/* {block "box_content_top_content"} */
class Block_627293290694c064715b392_94343863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

							<a class="dropdown-toggle"
								   href="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL'];?>
"
								   <?php if ($_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET']) {?>target="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'];?>
"<?php }?>
								   title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['content_item']->value['NAME'],'"',''));?>
">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160101768694c064715c6b7_15599953', "box_content_top_custom_entry2_name", $this->tplIndex);
?>

							</a>
						<?php
}
}
/* {/block "box_content_top_content"} */
/* {block "box_content_top_custom_entry2"} */
class Block_1411436520694c064715ab05_75008742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<li class="dropdown custom topmenu-content<?php if ($_smarty_tpl->tpl_vars['content_item']->value['SELECTED']) {?> active<?php }?> visible-xs" data-id="top_custom-<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627293290694c064715b392_94343863', "box_content_top_content", $this->tplIndex);
?>

					</li>
				<?php
}
}
/* {/block "box_content_top_custom_entry2"} */
/* {block "box_content_top_category_name"} */
class Block_1662232450694c06471624d7_29520257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_item']->value['NAME'];
}
}
/* {/block "box_content_top_category_name"} */
/* {block "box_content_top_category"} */
class Block_1023668466694c0647161405_76580121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

														<a class="dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['content_item']->value['URL_TARGET'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['content_item']->value['NAME'],'"',''));?>
">
															<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662232450694c06471624d7_29520257', "box_content_top_category_name", $this->tplIndex);
?>

														</a>
													<?php
}
}
/* {/block "box_content_top_category"} */
/* {block "box_content_top_list_item"} */
class Block_464412727694c0647160ba2_39264959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

												<li class="level-1-child topmenu-content<?php if ($_smarty_tpl->tpl_vars['content_item']->value['SELECTED']) {?> active<?php }?>" data-id="top_custom-<?php echo $_smarty_tpl->tpl_vars['counter']->value;?>
">
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1023668466694c0647161405_76580121', "box_content_top_category", $this->tplIndex);
?>

												</li>
											<?php
}
}
/* {/block "box_content_top_list_item"} */
/* {block "box_content_top_category2"} */
class Block_111508793694c0647163420_26013838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<a class="dropdown-toggle" href="#" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['CATEGORIES_NEXT'];?>
">
														<?php echo $_smarty_tpl->tpl_vars['general']->value['CATEGORIES_NEXT'];?>

													</a>
												<?php
}
}
/* {/block "box_content_top_category2"} */
/* {block "box_content_top_sublist"} */
class Block_294158852694c0647163e56_80714567 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

													<ul class="level-2 dropdown-menu ignore-menu"></ul>
												<?php
}
}
/* {/block "box_content_top_sublist"} */
/* {block "box_content_top_list_item2"} */
class Block_1769126893694c0647163153_52630854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<li class="dropdown dropdown-more" style="display: none">
												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111508793694c0647163420_26013838', "box_content_top_category2", $this->tplIndex);
?>

												<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_294158852694c0647163e56_80714567', "box_content_top_sublist", $this->tplIndex);
?>

											</li>
										<?php
}
}
/* {/block "box_content_top_list_item2"} */
/* {block "box_content_top_list"} */
class Block_1798456982694c06471601c6_20197890 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<ul class="level-1 nav navbar-nav">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CONTENT_LINKS_DATA'], 'content_item', false, 'counter', 'cat_data', array (
));
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_464412727694c0647160ba2_39264959', "box_content_top_list_item", $this->tplIndex);
?>

										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1769126893694c0647163153_52630854', "box_content_top_list_item2", $this->tplIndex);
?>

									</ul>
								<?php
}
}
/* {/block "box_content_top_list"} */
/* {block "box_content_top_categories_nav"} */
class Block_508094467694c064715d693_14745981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

							<nav class="navbar-default navbar-categories <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['content_data']->value['CONTENT_LINKS_DATA']) === 0) {?>hidden-sm hidden-md hidden-lg<?php }?>" data-gambio-widget="menu">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1798456982694c06471601c6_20197890', "box_content_top_list", $this->tplIndex);
?>

							</nav>
						<?php
}
}
/* {/block "box_content_top_categories_nav"} */
/* {block "box_content_top_categories"} */
class Block_323267104694c064715d3b6_98096753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<div id="categories">
					<div class="navbar-collapse collapse">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_508094467694c064715d693_14745981', "box_content_top_categories_nav", $this->tplIndex);
?>

					</div>
				</div>
			<?php
}
}
/* {/block "box_content_top_categories"} */
/* {block "box_content_top_custom_entries_if"} */
class Block_682261051694c0647145851_61092040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if ($_smarty_tpl->tpl_vars['content_data']->value['CAT_MENU_TOP']) {?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481109007694c0647149a33_85456306', "box_content_top_custom_entries", $this->tplIndex);
?>


            <?php echo '<script'; ?>
 id="mainNavigation-menu-template" type="text/mustache">
                
				    <li id="mainNavigation" class="custom custom-entries hidden-xs">
                        <a v-for="(item, index) in items" href="javascript:;" @click="goTo(item.content)">
                            {{item.title}}
                        </a>
                    </li>
                
            <?php echo '</script'; ?>
>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CONTENT_LINKS_DATA'], 'content_item', false, 'counter', 'cat_data', array (
));
$_smarty_tpl->tpl_vars['content_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['counter']->value => $_smarty_tpl->tpl_vars['content_item']->value) {
$_smarty_tpl->tpl_vars['content_item']->do_else = false;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1411436520694c064715ab05_75008742', "box_content_top_custom_entry2", $this->tplIndex);
?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_323267104694c064715d3b6_98096753', "box_content_top_categories", $this->tplIndex);
?>

		<?php }?>
	<?php
}
}
/* {/block "box_content_top_custom_entries_if"} */
/* {block "box_content_top"} */
class Block_284887315694c0647145087_60698493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'box_content_top' => 
  array (
    0 => 'Block_284887315694c0647145087_60698493',
  ),
  'box_content_top_custom_entries_if' => 
  array (
    0 => 'Block_682261051694c0647145851_61092040',
  ),
  'box_content_top_custom_entries' => 
  array (
    0 => 'Block_1481109007694c0647149a33_85456306',
  ),
  'box_content_top_custom_entry' => 
  array (
    0 => 'Block_599977952694c064714ebe1_05601640',
  ),
  'box_content_top_custom_entry_name' => 
  array (
    0 => 'Block_1532785356694c0647158bb7_51940488',
  ),
  'box_content_top_custom_entry2' => 
  array (
    0 => 'Block_1411436520694c064715ab05_75008742',
  ),
  'box_content_top_content' => 
  array (
    0 => 'Block_627293290694c064715b392_94343863',
  ),
  'box_content_top_custom_entry2_name' => 
  array (
    0 => 'Block_1160101768694c064715c6b7_15599953',
  ),
  'box_content_top_categories' => 
  array (
    0 => 'Block_323267104694c064715d3b6_98096753',
  ),
  'box_content_top_categories_nav' => 
  array (
    0 => 'Block_508094467694c064715d693_14745981',
  ),
  'box_content_top_list' => 
  array (
    0 => 'Block_1798456982694c06471601c6_20197890',
  ),
  'box_content_top_list_item' => 
  array (
    0 => 'Block_464412727694c0647160ba2_39264959',
  ),
  'box_content_top_category' => 
  array (
    0 => 'Block_1023668466694c0647161405_76580121',
  ),
  'box_content_top_category_name' => 
  array (
    0 => 'Block_1662232450694c06471624d7_29520257',
  ),
  'box_content_top_list_item2' => 
  array (
    0 => 'Block_1769126893694c0647163153_52630854',
  ),
  'box_content_top_category2' => 
  array (
    0 => 'Block_111508793694c0647163420_26013838',
  ),
  'box_content_top_sublist' => 
  array (
    0 => 'Block_294158852694c0647163e56_80714567',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682261051694c0647145851_61092040', "box_content_top_custom_entries_if", $this->tplIndex);
?>

<?php
}
}
/* {/block "box_content_top"} */
}
