<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_listing_ribbon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647c93e65_65013160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d791964263b4d452ce8dc5d9f279141c9105386' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_listing_ribbon.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647c93e65_65013160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_648042273694c0647c901a1_03963071', "product_listing_ribbon");
}
/* {block "product_listing_ribbon_content"} */
class Block_2023048393694c0647c91be7_96647955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<div class="ribbon-<?php echo $_smarty_tpl->tpl_vars['ribbon']->value['class'];?>
">
								<span><?php echo $_smarty_tpl->tpl_vars['ribbon']->value['text'];?>
</span>
							</div>
						<?php
}
}
/* {/block "product_listing_ribbon_content"} */
/* {block "product_listing_ribbon_content_if"} */
class Block_1310629698694c0647c91266_82234865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ($_smarty_tpl->tpl_vars['ribbon']->value['class'] && $_smarty_tpl->tpl_vars['ribbon']->value['text']) {?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2023048393694c0647c91be7_96647955', "product_listing_ribbon_content", $this->tplIndex);
?>

					<?php }?>
				<?php
}
}
/* {/block "product_listing_ribbon_content_if"} */
/* {block "product_listing_ribbon_name"} */
class Block_295757639694c0647c905a2_32191578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ribbons']->value['ribbons'], 'ribbon');
$_smarty_tpl->tpl_vars['ribbon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ribbon']->value) {
$_smarty_tpl->tpl_vars['ribbon']->do_else = false;
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1310629698694c0647c91266_82234865', "product_listing_ribbon_content_if", $this->tplIndex);
?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
}
/* {/block "product_listing_ribbon_name"} */
/* {block "product_listing_ribbon"} */
class Block_648042273694c0647c901a1_03963071 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_listing_ribbon' => 
  array (
    0 => 'Block_648042273694c0647c901a1_03963071',
  ),
  'product_listing_ribbon_name' => 
  array (
    0 => 'Block_295757639694c0647c905a2_32191578',
  ),
  'product_listing_ribbon_content_if' => 
  array (
    0 => 'Block_1310629698694c0647c91266_82234865',
  ),
  'product_listing_ribbon_content' => 
  array (
    0 => 'Block_2023048393694c0647c91be7_96647955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="ribbons">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295757639694c0647c905a2_32191578', "product_listing_ribbon_name", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "product_listing_ribbon"} */
}
