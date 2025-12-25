<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c064820af44_63182575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1179adbaca1a5b115d72c1c4f8f9e00b5db4ec8' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemlayout_footer.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c064820af44_63182575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28211278694c0648206883_84639271', "layout_footer");
}
/* {block "layout_footer_header"} */
class Block_1821253142694c0648207ac1_20772469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXModules\\Gambio\\ContentZones\\Shop\\SmartyPlugins\\function.content_zone.php','function'=>'smarty_function_content_zone',),));
?>

                <div class="footer-header">
                    <?php echo smarty_function_content_zone(array('id'=>"footer-header"),$_smarty_tpl);?>

                </div>
            <?php
}
}
/* {/block "layout_footer_header"} */
/* {block "layout_footer_header"} */
class Block_1723096036694c06482083a4_22603835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="footer-header">
                    <?php echo $_smarty_tpl->tpl_vars['HTML']->value;?>

                </div>
            <?php
}
}
/* {/block "layout_footer_header"} */
/* {block "layout_footer_inside_content1"} */
class Block_1284587265694c0648208b29_01425739 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="footer-col-2"><?php if ($_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321005']->value) {?>
								<div class="box box-content panel panel-default">
								<div class="panel-heading">
									<div class="panel-title footer-column-title">
										<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321005']->value;?>

									</div>
								</div>
								<div class="panel-body">
									<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321005']->value;?>

								</div>
								</div><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321005']->value;
}?>
						</div>
					<?php
}
}
/* {/block "layout_footer_inside_content1"} */
/* {block "layout_footer_inside_content2"} */
class Block_1502047873694c06482093f3_22889289 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="footer-col-1"><?php echo $_smarty_tpl->tpl_vars['MORE_ABOUT']->value;?>
</div>
					<?php
}
}
/* {/block "layout_footer_inside_content2"} */
/* {block "layout_footer_inside_content3"} */
class Block_1581785155694c0648209832_32588971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="footer-col-3"><?php if ($_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321006']->value) {?>
							<div class="box box-content panel panel-default">
								<div class="panel-heading">
									<div class="panel-title footer-column-title">
										<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321006']->value;?>

									</div>
								</div>
								<div class="panel-body">
									<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321006']->value;?>

								</div>
							</div><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321006']->value;
}?>
						</div>
					<?php
}
}
/* {/block "layout_footer_inside_content3"} */
/* {block "layout_footer_inside_content4"} */
class Block_1768215167694c064820a095_77442535 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="footer-col-4"><?php if ($_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321007']->value) {?>
							<div class="box box-content panel panel-default">
								<div class="panel-heading">
									<div class="panel-title footer-column-title">
										<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_HEADER_4321007']->value;?>

									</div>
								</div>
								<div class="panel-body">
									<?php echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321007']->value;?>

								</div>
							</div><?php } else {
echo $_smarty_tpl->tpl_vars['FOOTER_COL_4321007']->value;
}?>
						</div>
					<?php
}
}
/* {/block "layout_footer_inside_content4"} */
/* {block "layout_footer_inside"} */
class Block_776145950694c06482088f1_23897457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="inside">
				<div class="row">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284587265694c0648208b29_01425739', "layout_footer_inside_content1", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1502047873694c06482093f3_22889289', "layout_footer_inside_content2", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1581785155694c0648209832_32588971', "layout_footer_inside_content3", $this->tplIndex);
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768215167694c064820a095_77442535', "layout_footer_inside_content4", $this->tplIndex);
?>

				</div>
			</div>
		<?php
}
}
/* {/block "layout_footer_inside"} */
/* {block "layout_footer_inside_copyright"} */
class Block_1190076231694c064820aa59_00496643 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<div class="footer-bottom"><?php echo $_smarty_tpl->tpl_vars['COPYRIGHT_FOOTER']->value;?>
</div>
		<?php
}
}
/* {/block "layout_footer_inside_copyright"} */
/* {block "layout_footer"} */
class Block_28211278694c0648206883_84639271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_footer' => 
  array (
    0 => 'Block_28211278694c0648206883_84639271',
  ),
  'layout_footer_header' => 
  array (
    0 => 'Block_1821253142694c0648207ac1_20772469',
    1 => 'Block_1723096036694c06482083a4_22603835',
  ),
  'layout_footer_inside' => 
  array (
    0 => 'Block_776145950694c06482088f1_23897457',
  ),
  'layout_footer_inside_content1' => 
  array (
    0 => 'Block_1284587265694c0648208b29_01425739',
  ),
  'layout_footer_inside_content2' => 
  array (
    0 => 'Block_1502047873694c06482093f3_22889289',
  ),
  'layout_footer_inside_content3' => 
  array (
    0 => 'Block_1581785155694c0648209832_32588971',
  ),
  'layout_footer_inside_content4' => 
  array (
    0 => 'Block_1768215167694c064820a095_77442535',
  ),
  'layout_footer_inside_copyright' => 
  array (
    0 => 'Block_1190076231694c064820aa59_00496643',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

    <?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-footer-header-use-content-zone"),$_smarty_tpl);
$_prefixVariable21 = ob_get_clean();
$_smarty_tpl->_assignInScope('useContentZone', $_prefixVariable21);?>
	<footer id="footer">
        <?php if ($_smarty_tpl->tpl_vars['useContentZone']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1821253142694c0648207ac1_20772469', "layout_footer_header", $this->tplIndex);
?>

        <?php } elseif ($_smarty_tpl->tpl_vars['HTML']->value) {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1723096036694c06482083a4_22603835', "layout_footer_header", $this->tplIndex);
?>

        <?php }?>
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_776145950694c06482088f1_23897457', "layout_footer_inside", $this->tplIndex);
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1190076231694c064820aa59_00496643', "layout_footer_inside_copyright", $this->tplIndex);
?>

	</footer>
<?php
}
}
/* {/block "layout_footer"} */
}
