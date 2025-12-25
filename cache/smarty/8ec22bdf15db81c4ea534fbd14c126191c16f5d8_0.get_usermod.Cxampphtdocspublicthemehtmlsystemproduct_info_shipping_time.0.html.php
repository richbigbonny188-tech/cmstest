<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_shipping_time.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bccd490_47780057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ec22bdf15db81c4ea534fbd14c126191c16f5d8' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_shipping_time.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bccd490_47780057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['SHIPPING_NAME']->value || $_smarty_tpl->tpl_vars['SHOW_SHIPPING_TIME']->value) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1047073820694d6d5bcc04d8_03393821', "product_info_shipping_time");
?>

<?php }
}
/* {block "product_info_shipping_time_label"} */
class Block_2015442736694d6d5bcc0e17_00699411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<label>
					<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_shippingtime'];?>

				</label>
			<?php
}
}
/* {/block "product_info_shipping_time_label"} */
/* {block "product_info_shipping_time_image"} */
class Block_1010032508694d6d5bcc2e87_39390415 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<span class="img-shipping-time">
						<img src="<?php echo $_smarty_tpl->tpl_vars['SHIPPING_IMAGE']->value;?>
" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['SHIPPING_IMAGE_ALT']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					</span>
				<?php
}
}
/* {/block "product_info_shipping_time_image"} */
/* {block "product_info_shipping_time_name"} */
class Block_1475781339694d6d5bcc4f66_70266070 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<span class="products-shipping-time-value">
					<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['SHIPPING_NAME']->value, ENT_QUOTES, 'UTF-8', true);?>

				</span>
			<?php
}
}
/* {/block "product_info_shipping_time_name"} */
/* {block "product_info_shipping_time_link"} */
class Block_1303500062694d6d5bcc6bc8_57917888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.popuplink.php','function'=>'smarty_function_popuplink',),));
?>

                <a class="js-open-modal text-small abroad-shipping-info"<?php if (!$_smarty_tpl->tpl_vars['ABROAD_SHIPPING_INFO_LINK_ACTIVE']->value) {?> style="display:none"<?php }?> data-modal-type="iframe" data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_shippingtime'];?>
"}' href="<?php ob_start();
echo (defined('SHIPPING_INFOS') ? constant('SHIPPING_INFOS') : null);
$_prefixVariable9 = ob_get_clean();
echo smarty_function_popuplink(array('coID'=>$_prefixVariable9),$_smarty_tpl);?>
" rel="nofollow">
                    (<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_abroad_shipping_info'];?>
)
                </a>
            <?php
}
}
/* {/block "product_info_shipping_time_link"} */
/* {block "product_info_shipping_time_available"} */
class Block_1373820239694d6d5bccb270_58210862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<br /><?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_after_available'];?>

				<?php
}
}
/* {/block "product_info_shipping_time_available"} */
/* {block "product_info_shipping_time"} */
class Block_1047073820694d6d5bcc04d8_03393821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_shipping_time' => 
  array (
    0 => 'Block_1047073820694d6d5bcc04d8_03393821',
  ),
  'product_info_shipping_time_label' => 
  array (
    0 => 'Block_2015442736694d6d5bcc0e17_00699411',
  ),
  'product_info_shipping_time_image' => 
  array (
    0 => 'Block_1010032508694d6d5bcc2e87_39390415',
  ),
  'product_info_shipping_time_name' => 
  array (
    0 => 'Block_1475781339694d6d5bcc4f66_70266070',
  ),
  'product_info_shipping_time_link' => 
  array (
    0 => 'Block_1303500062694d6d5bcc6bc8_57917888',
  ),
  'product_info_shipping_time_available' => 
  array (
    0 => 'Block_1373820239694d6d5bccb270_58210862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<dt class="col-xs-4 text-left">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015442736694d6d5bcc0e17_00699411', "product_info_shipping_time_label", $this->tplIndex);
?>

		</dt>
		<dd class="col-xs-8">
			<?php if ($_smarty_tpl->tpl_vars['SHIPPING_IMAGE']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010032508694d6d5bcc2e87_39390415', "product_info_shipping_time_image", $this->tplIndex);
?>

			<?php }?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1475781339694d6d5bcc4f66_70266070', "product_info_shipping_time_name", $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1303500062694d6d5bcc6bc8_57917888', "product_info_shipping_time_link", $this->tplIndex);
?>


			<?php if ($_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVIABLE']->value) {?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1373820239694d6d5bccb270_58210862', "product_info_shipping_time_available", $this->tplIndex);
?>

			<?php }?>
		</dd>
	<?php
}
}
/* {/block "product_info_shipping_time"} */
}
