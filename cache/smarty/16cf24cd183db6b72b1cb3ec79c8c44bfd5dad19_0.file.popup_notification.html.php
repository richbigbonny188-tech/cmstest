<?php
/* Smarty version 4.5.2, created on 2025-12-24 16:27:03
  from 'C:\xampp\htdocs\public\theme\html\system\popup_notification.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694c0647f406e9_73658397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16cf24cd183db6b72b1cb3ec79c8c44bfd5dad19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\popup_notification.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694c0647f406e9_73658397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"labels",'name'=>"label"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['content_data']->value['popupNotification']->isActive()) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1895792863694c0647f3ea12_75834832', "popup_notification");
?>

<?php }
}
/* {block "popup_notification_modal_header"} */
class Block_273780402694c0647f3f084_16386543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="modal-header">
										<span class="col-xs-11 title"><?php echo $_smarty_tpl->tpl_vars['label']->value['hint'];?>
:</span>
										<i class="fa fa-close col-xs-1 hide-popup-notification"></i>
									</div>
								<?php
}
}
/* {/block "popup_notification_modal_header"} */
/* {block "popup_notification_modal_body"} */
class Block_1901131377694c0647f3f915_53270959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<div class="modal-body">
										<?php echo $_smarty_tpl->tpl_vars['content_data']->value['popupNotification']->getContentByLanguageId($_smarty_tpl->tpl_vars['languages_id']->value);?>

									</div>
								<?php
}
}
/* {/block "popup_notification_modal_body"} */
/* {block "popup_notification_modal"} */
class Block_810486745694c0647f3edb6_99693202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="modal-dialog">
							<div class="modal-content">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_273780402694c0647f3f084_16386543', "popup_notification_modal_header", $this->tplIndex);
?>

								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1901131377694c0647f3f915_53270959', "popup_notification_modal_body", $this->tplIndex);
?>

							</div>
						</div>
					<?php
}
}
/* {/block "popup_notification_modal"} */
/* {block "popup_notification"} */
class Block_1895792863694c0647f3ea12_75834832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'popup_notification' => 
  array (
    0 => 'Block_1895792863694c0647f3ea12_75834832',
  ),
  'popup_notification_modal' => 
  array (
    0 => 'Block_810486745694c0647f3edb6_99693202',
  ),
  'popup_notification_modal_header' => 
  array (
    0 => 'Block_273780402694c0647f3f084_16386543',
  ),
  'popup_notification_modal_body' => 
  array (
    0 => 'Block_1901131377694c0647f3f915_53270959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="mfp-bg iframe_layer mfp-ready popup-notification"></div>
		<div style="overflow-x: hidden; overflow-y: auto;"
		     tabindex="-1"
		     class="mfp-wrap mfp-close-btn-in mfp-auto-cursor iframe_layer mfp-ready popup-notification"
		     data-gambio-widget="notifications">
			<div class="mfp-container mfp-inline-holder">
				<div class="mfp-content">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_810486745694c0647f3edb6_99693202', "popup_notification_modal", $this->tplIndex);
?>

				</div>
			</div>
		</div>
	<?php
}
}
/* {/block "popup_notification"} */
}
