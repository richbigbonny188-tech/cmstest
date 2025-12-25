<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer_links.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064774dbf8_90046888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '088cad83c10ced275c5980f38b7ebb2b1fbc2a83' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer_links.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064774dbf8_90046888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"box_content"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317515680694c0647744ba4_84558549', "layout_footer_links");
}
/* {block "layout_footer_links_heading_title"} */
class Block_1141109764694c0647745565_44161114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<span class="panel-title footer-column-title"><?php echo $_smarty_tpl->tpl_vars['txt']->value['heading_content'];?>
</span>
				<?php
}
}
/* {/block "layout_footer_links_heading_title"} */
/* {block "layout_footer_links_heading"} */
class Block_1308613589694c0647745321_02927381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="panel-heading">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1141109764694c0647745565_44161114', "layout_footer_links_heading_title", $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block "layout_footer_links_heading"} */
/* {block "layout_footer_links_content_name"} */
class Block_541899574694c064774b268_12554032 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['content_array']->value['NAME'];
}
}
/* {/block "layout_footer_links_content_name"} */
/* {block "layout_footer_links_content"} */
class Block_1055948807694c0647746d76_45113542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

												<a href="<?php echo $_smarty_tpl->tpl_vars['content_array']->value['URL'];?>
"<?php if ($_smarty_tpl->tpl_vars['content_array']->value['URL_TARGET']) {?> target="<?php echo $_smarty_tpl->tpl_vars['content_array']->value['URL_TARGET'];?>
"<?php }?> title="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) smarty_modifier_replace($_smarty_tpl->tpl_vars['content_array']->value['NAME'],'"',''));?>
">
													<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_541899574694c064774b268_12554032', "layout_footer_links_content_name", $this->tplIndex);
?>

												</a>
											<?php
}
}
/* {/block "layout_footer_links_content"} */
/* {block "layout_footer_links_list_item"} */
class Block_305518555694c0647746b44_68670081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<li>
											<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1055948807694c0647746d76_45113542', "layout_footer_links_content", $this->tplIndex);
?>

										</li>
									<?php
}
}
/* {/block "layout_footer_links_list_item"} */
/* {block "layout_footer_links_list"} */
class Block_11959925694c0647746222_42173444 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

							<ul id="info" class="nav">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['content_data']->value['CONTENT_LINKS_DATA'], 'content_array');
$_smarty_tpl->tpl_vars['content_array']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content_array']->value) {
$_smarty_tpl->tpl_vars['content_array']->do_else = false;
?>
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_305518555694c0647746b44_68670081', "layout_footer_links_list_item", $this->tplIndex);
?>

								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						<?php
}
}
/* {/block "layout_footer_links_list"} */
/* {block "layout_footer_links_nav"} */
class Block_257797339694c0647746009_33390742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<nav>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11959925694c0647746222_42173444', "layout_footer_links_list", $this->tplIndex);
?>


                        <?php echo '<script'; ?>
 id="info-menu-template" type="text/mustache">
                            
                                <ul id="info" class="nav">
                                    <li v-for="(item, index) in items">
                                        <a href="javascript:;" @click="goTo(item.content)">
                                            {{item.title}}
                                        </a>
                                    </li>
                                </ul>
                            
                        <?php echo '</script'; ?>
>
					</nav>
				<?php
}
}
/* {/block "layout_footer_links_nav"} */
/* {block "layout_footer_links_body"} */
class Block_1238407189694c0647745dd1_66530148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="panel-body">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257797339694c0647746009_33390742', "layout_footer_links_nav", $this->tplIndex);
?>

			</div>
		<?php
}
}
/* {/block "layout_footer_links_body"} */
/* {block "layout_footer_links"} */
class Block_1317515680694c0647744ba4_84558549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_footer_links' => 
  array (
    0 => 'Block_1317515680694c0647744ba4_84558549',
  ),
  'layout_footer_links_heading' => 
  array (
    0 => 'Block_1308613589694c0647745321_02927381',
  ),
  'layout_footer_links_heading_title' => 
  array (
    0 => 'Block_1141109764694c0647745565_44161114',
  ),
  'layout_footer_links_body' => 
  array (
    0 => 'Block_1238407189694c0647745dd1_66530148',
  ),
  'layout_footer_links_nav' => 
  array (
    0 => 'Block_257797339694c0647746009_33390742',
  ),
  'layout_footer_links_list' => 
  array (
    0 => 'Block_11959925694c0647746222_42173444',
  ),
  'layout_footer_links_list_item' => 
  array (
    0 => 'Block_305518555694c0647746b44_68670081',
  ),
  'layout_footer_links_content' => 
  array (
    0 => 'Block_1055948807694c0647746d76_45113542',
  ),
  'layout_footer_links_content_name' => 
  array (
    0 => 'Block_541899574694c064774b268_12554032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="box box-content panel panel-default"<?php if ($_smarty_tpl->tpl_vars['linkcrypter']->value && $_smarty_tpl->tpl_vars['linkcrypter']->value != '') {?> data-gambio-widget="link_crypter"<?php }?>>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1308613589694c0647745321_02927381', "layout_footer_links_heading", $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1238407189694c0647745dd1_66530148', "layout_footer_links_body", $this->tplIndex);
?>

	</div>
<?php
}
}
/* {/block "layout_footer_links"} */
}
