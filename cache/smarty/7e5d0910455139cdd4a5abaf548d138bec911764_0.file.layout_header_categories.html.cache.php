<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\layout_header_categories.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064750fdb3_86679610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e5d0910455139cdd4a5abaf548d138bec911764' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_header_categories.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064750fdb3_86679610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1135246173694c06474de222_52536952';
echo smarty_function_load_language_text(array('section'=>"box_categories_top"),$_smarty_tpl);?>

<?php echo smarty_function_load_language_text(array('section'=>"general",'name'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1729383092694c06474e3d67_53140389', "layout_header_categories");
}
/* {block "layout_header_categories_list_start"} */
class Block_901277236694c06474e4f41_48144870 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "layout_header_categories_list_start"} */
/* {block "layout_header_categories_category_name"} */
class Block_739354820694c06474eff93_34165397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;");?>

                                                <?php
}
}
/* {/block "layout_header_categories_category_name"} */
/* {block "layout_header_categories_category_count"} */
class Block_1602525421694c06474f2109_31570710 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                        (<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count'];?>
)
                                                    <?php
}
}
/* {/block "layout_header_categories_category_count"} */
/* {block "layout_header_categories_category"} */
class Block_549673469694c06474ec289_47160707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                            <a class="dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;"),'"',''));?>
">
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_739354820694c06474eff93_34165397', "layout_header_categories_category_name", $this->tplIndex);
?>

                                                <?php if ($_smarty_tpl->tpl_vars['categories_item']->value['data']['products_count']) {?>
                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1602525421694c06474f2109_31570710', "layout_header_categories_category_count", $this->tplIndex);
?>

                                                <?php }?>
                                            </a>
                                        <?php
}
}
/* {/block "layout_header_categories_category"} */
/* {block "layout_header_categories_subcategory_name"} */
class Block_2023593859694c06474f8f90_22355546 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                                            <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['general']->value['ENTER_CATEGORY'],"%s",$_smarty_tpl->tpl_vars['categories_item']->value['data']['name']);?>

                                                                        <?php
}
}
/* {/block "layout_header_categories_subcategory_name"} */
/* {block "layout_header_categories_subcategory"} */
class Block_1602727868694c06474f7555_58148391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                                    <a class="dropdown-toggle" href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
" title="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;"),'"','');?>
">
                                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2023593859694c06474f8f90_22355546', "layout_header_categories_subcategory_name", $this->tplIndex);
?>

                                                                    </a>
                                                                <?php
}
}
/* {/block "layout_header_categories_subcategory"} */
/* {block "layout_header_categories_sublist_item"} */
class Block_928463799694c06474f43a8_45781815 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

                                                            <li class="enter-category hidden-sm hidden-md hidden-lg <?php if (smarty_modifier_gm_get_conf('CATEGORY_DISPLAY_SHOW_ALL_LINK') == 'true') {?>show-more<?php } else { ?>hide-more<?php }?>">
                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1602727868694c06474f7555_58148391', "layout_header_categories_subcategory", $this->tplIndex);
?>

                                                            </li>
                                                        <?php
}
}
/* {/block "layout_header_categories_sublist_item"} */
/* {block "layout_header_categories_subcategory_child_name"} */
class Block_883230060694c0647500ad5_46104518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['child_item']->value['data']['name'];
}
}
/* {/block "layout_header_categories_subcategory_child_name"} */
/* {block "layout_header_categories_subcategory_child_child_name"} */
class Block_1986395234694c0647506062_38160062 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['sub_item']->value['data']['name'];
}
}
/* {/block "layout_header_categories_subcategory_child_child_name"} */
/* {block "layout_header_categories_subcategory_child_child"} */
class Block_1421571294694c06475031f4_20954774 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                                                        <li class="level-3-child<?php if ($_smarty_tpl->tpl_vars['content_data']->value['category_id'] == $_smarty_tpl->tpl_vars['sub_item']->value['data']['id']) {?> active<?php }?>">
                                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['sub_item']->value['data']['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['sub_item']->value['data']['name'],'"',''));?>
">
                                                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1986395234694c0647506062_38160062', "layout_header_categories_subcategory_child_child_name", $this->tplIndex);
?>

                                                                                            </a>
                                                                                        </li>
                                                                                    <?php
}
}
/* {/block "layout_header_categories_subcategory_child_child"} */
/* {block "layout_header_categories_subcategory_child"} */
class Block_2035355873694c06474fece9_31571489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                                    <li class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['child_item']->value['children']) > 0) {?>dropdown <?php }?>level-2-child<?php if ($_smarty_tpl->tpl_vars['content_data']->value['category_id'] == $_smarty_tpl->tpl_vars['child_item']->value['data']['id']) {?> active<?php }?>">
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['child_item']->value['data']['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['child_item']->value['data']['name'],'"',''));?>
">
                                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883230060694c0647500ad5_46104518', "layout_header_categories_subcategory_child_name", $this->tplIndex);
?>

                                                                        </a>
                                                                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['child_item']->value['children']) > 0) {?>
                                                                            <ul  data-level="3" class="level-3 dropdown-menu dropdown-menu-child">
                                                                                <li class="enter-category">
                                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['child_item']->value['data']['url'];?>
" title="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['child_item']->value['data']['name'],'"','');?>
" class="dropdown-toggle">
                                                                                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['general']->value['ENTER_CATEGORY'],"%s",$_smarty_tpl->tpl_vars['child_item']->value['data']['name']);?>

                                                                                    </a>
                                                                                </li>
                                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_item']->value['children'], 'sub_item');
$_smarty_tpl->tpl_vars['sub_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub_item']->value) {
$_smarty_tpl->tpl_vars['sub_item']->do_else = false;
?>
                                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421571294694c06475031f4_20954774', "layout_header_categories_subcategory_child_child", $this->tplIndex);
?>

                                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                            </ul>
                                                                        <?php }?>
                                                                    </li>
                                                                <?php
}
}
/* {/block "layout_header_categories_subcategory_child"} */
/* {block "layout_header_categories_subcategory_no_child"} */
class Block_1023110417694c06475073e6_42359081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
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
                                                                            <li class="<?php if ($_smarty_tpl->tpl_vars['content_data']->value['category_id'] == $_smarty_tpl->tpl_vars['categories_item']->value['data']['id']) {?> active<?php }?>">
                                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],'"',''));?>
">
                                                                                    <?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['name'];?>

                                                                                </a>
                                                                            </li>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </ul>
                                                                </li>
                                                            <?php
}
}
/* {/block "layout_header_categories_subcategory_no_child"} */
/* {block "layout_header_categories_sublist_items_close"} */
class Block_1445295545694c064750b636_61998822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

                                                            <li class="enter-category hidden-more hidden-xs">
                                                                <a class="dropdown-toggle col-xs-6"
                                                                   href="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['url'];?>
"
                                                                   title="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['categories_item']->value['data']['name'],"&amp;","&"),"&","&amp;"),'"','');?>
"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['general']->value['ENTER_CATEGORY'],"%s",$_smarty_tpl->tpl_vars['categories_item']->value['data']['name']);?>
</a>
                                                                <span class="close-menu-container col-xs-6">
                                                        <span class="close-flyout"><i class="fa fa-close"></i></span>
                                                    </span>
                                                            </li>
                                                        <?php
}
}
/* {/block "layout_header_categories_sublist_items_close"} */
/* {block "layout_header_categories_sublist"} */
class Block_1385495407694c06474f3fa0_94559361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                                                    <ul data-level="2" class="level-2 dropdown-menu dropdown-menu-child">
                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_928463799694c06474f43a8_45781815', "layout_header_categories_sublist_item", $this->tplIndex);
?>


                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_item']->value['children'], 'box_elements', false, NULL, 'box_data', array (
));
$_smarty_tpl->tpl_vars['box_elements']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['box_elements']->value) {
$_smarty_tpl->tpl_vars['box_elements']->do_else = false;
?>
                                                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['box_elements']->value) > 0) {?>
                                                                <?php $_smarty_tpl->_assignInScope('children_found', "true");?>
                                                            <?php }?>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                        <?php if ($_smarty_tpl->tpl_vars['children_found']->value) {?>

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_item']->value['children'], 'child_item', false, NULL, 'ele_data', array (
));
$_smarty_tpl->tpl_vars['child_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child_item']->value) {
$_smarty_tpl->tpl_vars['child_item']->do_else = false;
?>
                                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035355873694c06474fece9_31571489', "layout_header_categories_subcategory_child", $this->tplIndex);
?>

                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                        <?php } else { ?>
                                                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1023110417694c06475073e6_42359081', "layout_header_categories_subcategory_no_child", $this->tplIndex);
?>

                                                        <?php }?>

                                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1445295545694c064750b636_61998822', "layout_header_categories_sublist_items_close", $this->tplIndex);
?>

                                                    </ul>
                                                <?php
}
}
/* {/block "layout_header_categories_sublist"} */
/* {block "layout_header_categories_sublist_if"} */
class Block_907420633694c06474f3354_74574529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                                            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['categories_item']->value['children']) > 0) {?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385495407694c06474f3fa0_94559361', "layout_header_categories_sublist", $this->tplIndex);
?>

                                            <?php }?>
                                        <?php
}
}
/* {/block "layout_header_categories_sublist_if"} */
/* {block "layout_header_categories_list_item"} */
class Block_783237555694c06474e6e37_10886839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

                                    <li class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['categories_item']->value['children']) > 0) {?>dropdown <?php }?>level-1-child<?php if ($_smarty_tpl->tpl_vars['content_data']->value['category_id'] == $_smarty_tpl->tpl_vars['categories_item']->value['data']['id']) {?> active<?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['categories_item']->value['children']) > 0) {
}?>" data-id="<?php echo $_smarty_tpl->tpl_vars['categories_item']->value['data']['id'];?>
">
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_549673469694c06474ec289_47160707', "layout_header_categories_category", $this->tplIndex);
?>

                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_907420633694c06474f3354_74574529', "layout_header_categories_sublist_if", $this->tplIndex);
?>

                                    </li>
                                <?php
}
}
/* {/block "layout_header_categories_list_item"} */
/* {block "layout_header_categories_content"} */
class Block_382423483694c064750e838_33342071 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
###CONTENT_TOP###<?php
}
}
/* {/block "layout_header_categories_content"} */
/* {block "layout_header_categories_items_close"} */
class Block_568598276694c064750ecd3_50897078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <li class="dropdown dropdown-more" style="display: none">
                                    <a class="dropdown-toggle" href="#" title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['txt']->value['CATEGORIES_NEXT']);?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['general']->value['CATEGORIES_NEXT'];?>

                                    </a>
                                    <ul class="level-2 dropdown-menu ignore-menu"></ul>
                                </li>
                            <?php
}
}
/* {/block "layout_header_categories_items_close"} */
/* {block "layout_header_categories_list"} */
class Block_27757866694c06474e49f7_54254865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <ul class="level-1 nav navbar-nav">
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_901277236694c06474e4f41_48144870', "layout_header_categories_list_start", $this->tplIndex);
?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CATEGORIES_DATA'], 'categories_item', false, NULL, 'cat_data', array (
));
$_smarty_tpl->tpl_vars['categories_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categories_item']->value) {
$_smarty_tpl->tpl_vars['categories_item']->do_else = false;
?>
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_783237555694c06474e6e37_10886839', "layout_header_categories_list_item", $this->tplIndex);
?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382423483694c064750e838_33342071', "layout_header_categories_content", $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_568598276694c064750ecd3_50897078', "layout_header_categories_items_close", $this->tplIndex);
?>


                        </ul>
                    <?php
}
}
/* {/block "layout_header_categories_list"} */
/* {block "layout_header_categories_nav"} */
class Block_1276069009694c06474e4445_85867511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<nav class="navbar-default navbar-categories" data-gambio-widget="menu">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27757866694c06474e49f7_54254865', "layout_header_categories_list", $this->tplIndex);
?>

                </nav>
			<?php
}
}
/* {/block "layout_header_categories_nav"} */
/* {block "layout_header_categories"} */
class Block_1729383092694c06474e3d67_53140389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_header_categories' => 
  array (
    0 => 'Block_1729383092694c06474e3d67_53140389',
  ),
  'layout_header_categories_nav' => 
  array (
    0 => 'Block_1276069009694c06474e4445_85867511',
  ),
  'layout_header_categories_list' => 
  array (
    0 => 'Block_27757866694c06474e49f7_54254865',
  ),
  'layout_header_categories_list_start' => 
  array (
    0 => 'Block_901277236694c06474e4f41_48144870',
  ),
  'layout_header_categories_list_item' => 
  array (
    0 => 'Block_783237555694c06474e6e37_10886839',
  ),
  'layout_header_categories_category' => 
  array (
    0 => 'Block_549673469694c06474ec289_47160707',
  ),
  'layout_header_categories_category_name' => 
  array (
    0 => 'Block_739354820694c06474eff93_34165397',
  ),
  'layout_header_categories_category_count' => 
  array (
    0 => 'Block_1602525421694c06474f2109_31570710',
  ),
  'layout_header_categories_sublist_if' => 
  array (
    0 => 'Block_907420633694c06474f3354_74574529',
  ),
  'layout_header_categories_sublist' => 
  array (
    0 => 'Block_1385495407694c06474f3fa0_94559361',
  ),
  'layout_header_categories_sublist_item' => 
  array (
    0 => 'Block_928463799694c06474f43a8_45781815',
  ),
  'layout_header_categories_subcategory' => 
  array (
    0 => 'Block_1602727868694c06474f7555_58148391',
  ),
  'layout_header_categories_subcategory_name' => 
  array (
    0 => 'Block_2023593859694c06474f8f90_22355546',
  ),
  'layout_header_categories_subcategory_child' => 
  array (
    0 => 'Block_2035355873694c06474fece9_31571489',
  ),
  'layout_header_categories_subcategory_child_name' => 
  array (
    0 => 'Block_883230060694c0647500ad5_46104518',
  ),
  'layout_header_categories_subcategory_child_child' => 
  array (
    0 => 'Block_1421571294694c06475031f4_20954774',
  ),
  'layout_header_categories_subcategory_child_child_name' => 
  array (
    0 => 'Block_1986395234694c0647506062_38160062',
  ),
  'layout_header_categories_subcategory_no_child' => 
  array (
    0 => 'Block_1023110417694c06475073e6_42359081',
  ),
  'layout_header_categories_sublist_items_close' => 
  array (
    0 => 'Block_1445295545694c064750b636_61998822',
  ),
  'layout_header_categories_content' => 
  array (
    0 => 'Block_382423483694c064750e838_33342071',
  ),
  'layout_header_categories_items_close' => 
  array (
    0 => 'Block_568598276694c064750ecd3_50897078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="categories">
		<div class="navbar-collapse collapse">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1276069009694c06474e4445_85867511', "layout_header_categories_nav", $this->tplIndex);
?>

		</div>
	</div>
<?php
}
}
/* {/block "layout_header_categories"} */
}
