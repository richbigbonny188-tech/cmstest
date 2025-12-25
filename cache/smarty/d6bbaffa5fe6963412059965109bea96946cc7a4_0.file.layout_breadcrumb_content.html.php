<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'C:\xampp\htdocs\public\theme\html\system\layout_breadcrumb_content.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06480775f4_70657764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6bbaffa5fe6963412059965109bea96946cc7a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\layout_breadcrumb_content.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06480775f4_70657764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_781398327694c0648073727_03220066', "layout_breadcrumb_content");
?>

<?php }
/* {block "layout_breadcrumb_content_norichsnippets"} */
class Block_527434118694c06480744d6_81789380 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="breadcrumb_navi">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb_array']->value, 'value_array', false, NULL, 'crumbs', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['value_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value_array']->value) {
$_smarty_tpl->tpl_vars['value_array']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['total'];
?>
				<span class="breadcrumbEntry">
						<?php if ($_smarty_tpl->tpl_vars['value_array']->value['link']) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['value_array']->value['link'];?>
" class="headerNavigation">
								<span><?php echo $_smarty_tpl->tpl_vars['value_array']->value['title'];?>
</span>
							</a>
						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['value_array']->value['title'];?>
</span>
                        <?php }?>
					</span>
                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_crumbs']->value['last'] : null)) {
} else { ?><span class="breadcrumbSeparator"><?php echo $_smarty_tpl->tpl_vars['breadcrumb_separator']->value;?>
</span><?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
    <?php
}
}
/* {/block "layout_breadcrumb_content_norichsnippets"} */
/* {block "layout_breadcrumb_content"} */
class Block_781398327694c0648073727_03220066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_breadcrumb_content' => 
  array (
    0 => 'Block_781398327694c0648073727_03220066',
  ),
  'layout_breadcrumb_content_norichsnippets' => 
  array (
    0 => 'Block_527434118694c06480744d6_81789380',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['is_active']->value) {?>
		<?php echo '<script'; ?>
 type="application/ld+json"><?php echo $_smarty_tpl->tpl_vars['breadcrumb_ldjson']->value;
echo '</script'; ?>
>
	<?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_527434118694c06480744d6_81789380', "layout_breadcrumb_content_norichsnippets", $this->tplIndex);
?>

<?php
}
}
/* {/block "layout_breadcrumb_content"} */
}
