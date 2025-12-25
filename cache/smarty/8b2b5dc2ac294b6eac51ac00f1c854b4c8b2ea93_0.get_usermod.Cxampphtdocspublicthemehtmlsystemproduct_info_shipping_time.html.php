<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_shipping_time.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bcafd23_42374794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b2b5dc2ac294b6eac51ac00f1c854b4c8b2ea93' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_shipping_time.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bcafd23_42374794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1494631333694d6d5bc98093_70349899', "product_info_shipping_time");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_shipping_time.0.html");
}
/* {block "product_info_shipping_time_image"} */
class Block_840214499694d6d5bc991c7_41159593 extends Smarty_Internal_Block
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
class Block_861021477694d6d5bca2e14_05732838 extends Smarty_Internal_Block
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
class Block_471460552694d6d5bca3807_24886102 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.popuplink.php','function'=>'smarty_function_popuplink',),));
?>

    <a class="js-open-modal text-small abroad-shipping-info"<?php if (!$_smarty_tpl->tpl_vars['ABROAD_SHIPPING_INFO_LINK_ACTIVE']->value) {?> style="display:none"<?php }?> data-modal-type="iframe" data-modal-settings='{"title": "<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_shippingtime'];?>
"}' href="<?php ob_start();
echo (defined('SHIPPING_INFOS') ? constant('SHIPPING_INFOS') : null);
$_prefixVariable8 = ob_get_clean();
echo smarty_function_popuplink(array('coID'=>$_prefixVariable8),$_smarty_tpl);?>
" rel="nofollow">
        (<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_abroad_shipping_info'];?>
)
    </a>
    <?php
}
}
/* {/block "product_info_shipping_time_link"} */
/* {block "product_info_shipping_time_available"} */
class Block_2140002656694d6d5bcada38_86240533 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <br /><?php echo $_smarty_tpl->tpl_vars['txt']->value['shipping_after_available'];?>

    <?php
}
}
/* {/block "product_info_shipping_time_available"} */
/* {block "product_info_shipping_time"} */
class Block_1494631333694d6d5bc98093_70349899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_shipping_time' => 
  array (
    0 => 'Block_1494631333694d6d5bc98093_70349899',
  ),
  'product_info_shipping_time_image' => 
  array (
    0 => 'Block_840214499694d6d5bc991c7_41159593',
  ),
  'product_info_shipping_time_name' => 
  array (
    0 => 'Block_861021477694d6d5bca2e14_05732838',
  ),
  'product_info_shipping_time_link' => 
  array (
    0 => 'Block_471460552694d6d5bca3807_24886102',
  ),
  'product_info_shipping_time_available' => 
  array (
    0 => 'Block_2140002656694d6d5bcada38_86240533',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['SHIPPING_NAME']->value || $_smarty_tpl->tpl_vars['SHOW_SHIPPING_TIME']->value) {?>
<div class="product-definition-shipping-time">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title></title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><rect class="cls-1" width="40" height="40"/><path d="M33.28,19h0l-1.87-6H26.5V8H4v17.5H5.81V27.4H4v1.88H9a3.12,3.12,0,0,0,6.12,0H27.31a3.13,3.13,0,0,0,6.13,0H36v-8ZM26.5,14.84H30L31.29,19H26.5ZM12.06,29.9a1.25,1.25,0,1,1,1.25-1.25A1.25,1.25,0,0,1,12.06,29.9Zm12.57-2.5h-9.7a3.13,3.13,0,0,0-5.73,0H7.69V25.53H24.63Zm0-8.43v4.68H5.88V9.9H24.63ZM30.38,29.9a1.25,1.25,0,1,1,1.25-1.25A1.25,1.25,0,0,1,30.38,29.9Zm3.75-7.18H32.25v1.87h1.88V27.4h-.89a3.13,3.13,0,0,0-5.73,0h-1V20.84h6.09l1.54,1.31Z"/></g></g></svg>
    <strong><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_shippingtime'];?>
</strong><br>
    <?php if ($_smarty_tpl->tpl_vars['SHIPPING_IMAGE']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_840214499694d6d5bc991c7_41159593', "product_info_shipping_time_image", $this->tplIndex);
?>

    <?php }?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_861021477694d6d5bca2e14_05732838', "product_info_shipping_time_name", $this->tplIndex);
?>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_471460552694d6d5bca3807_24886102', "product_info_shipping_time_link", $this->tplIndex);
?>

    
    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_DATE_AVIABLE']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140002656694d6d5bcada38_86240533', "product_info_shipping_time_available", $this->tplIndex);
?>

    <?php }?>
</div>
<?php }
}
}
/* {/block "product_info_shipping_time"} */
}
