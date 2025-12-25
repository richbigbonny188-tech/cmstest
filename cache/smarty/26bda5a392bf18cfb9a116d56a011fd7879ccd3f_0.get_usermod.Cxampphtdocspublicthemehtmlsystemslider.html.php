<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:04
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemslider.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c06481b81a4_27496152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26bda5a392bf18cfb9a116d56a011fd7879ccd3f' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemslider.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c06481b81a4_27496152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1188665830694c06481b3e91_91433314', "slider");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."slider.0.html");
}
/* {block "slider"} */
class Block_1188665830694c06481b3e91_91433314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'slider' => 
  array (
    0 => 'Block_1188665830694c06481b3e91_91433314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),1=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.detect_page.php','function'=>'smarty_modifier_detect_page',),2=>array('file'=>'C:\\xampp\\htdocs\\GXModules\\Gambio\\ContentZones\\Shop\\SmartyPlugins\\function.content_zone.php','function'=>'smarty_function_content_zone',),3=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.content_manager_alias.php','function'=>'smarty_function_content_manager_alias',),));
?>

	<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-use-content-zone-for-hero"),$_smarty_tpl);
$_prefixVariable19 = ob_get_clean();
$_smarty_tpl->_assignInScope('useContentZone', $_prefixVariable19);?>
    <?php ob_start();
echo smarty_modifier_detect_page('') == "Index";
$_prefixVariable20 = ob_get_clean();
$_smarty_tpl->_assignInScope('isHomePage', $_prefixVariable20);?>
    <?php if ($_smarty_tpl->tpl_vars['useContentZone']->value && $_smarty_tpl->tpl_vars['isHomePage']->value) {?>
        <div class="container-fluid">
            <?php echo smarty_function_content_zone(array('id'=>"replace-teaser-slider-for-hero"),$_smarty_tpl);?>

        </div>
	<?php } else { ?>
		<div class="slider-container-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div id="stage" data-gambio-widget="slider_flyover">
							<div id="slider"
								 data-gambio-widget="slider_responsive"
								 data-slider_responsive-source="#json-serialized-slider"
								 data-slider_responsive-effect="fade"
								 data-slider_responsive-speed="600">
								<?php echo $_smarty_tpl->tpl_vars['slider']->value;?>

							</div>
						</div>
					</div>
					<div class="col-md-4 teaser-group-right-to-slider">
						<?php echo smarty_function_content_manager_alias(array('alias'=>"Malibu-below-slider"),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</div>
	<?php }
}
}
/* {/block "slider"} */
}
