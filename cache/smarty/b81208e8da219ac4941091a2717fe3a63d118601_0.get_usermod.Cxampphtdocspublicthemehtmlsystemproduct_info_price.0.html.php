<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_price.0.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd6c802_44933990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b81208e8da219ac4941091a2717fe3a63d118601' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_price.0.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd6c802_44933990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"general"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2120428750694d6d5bd63e34_57754032', "product_info_price");
?>

<?php }
/* {block "product_info_price_vpe"} */
class Block_1972151879694d6d5bd67a57_39497330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <br />
                        <span class="tax-shipping-text gm_products_vpe products-vpe">
                            <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_VPE']->value;?>

                        </span>
                        <br />
                    <?php
}
}
/* {/block "product_info_price_vpe"} */
/* {block "product_info_price_price"} */
class Block_2038384267694d6d5bd64723_71963557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_PRICE_STATUS']->value === '1') {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_PRICE_CONTACT_URL']->value;?>
" class="price-on-request"><?php echo $_smarty_tpl->tpl_vars['txt']->value['GM_SHOW_PRICE_ON_REQUEST'];?>
</a>
			<?php } else { ?>
				<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_PRICE']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_VPE']->value && $_smarty_tpl->tpl_vars['PRODUCTS_PRICE']->value !== $_smarty_tpl->tpl_vars['txt']->value['GM_SHOW_NO_PRICE']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1972151879694d6d5bd67a57_39497330', "product_info_price_vpe", $this->tplIndex);
?>

                <?php }?>
            <?php }?>
        <?php
}
}
/* {/block "product_info_price_price"} */
/* {block "product_info_price_tax"} */
class Block_50941466694d6d5bd69964_71527214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_PRICE_STATUS']->value || ($_smarty_tpl->tpl_vars['PRODUCTS_PRICE_STATUS']->value === '2' && $_smarty_tpl->tpl_vars['PRODUCTS_PRICE']->value !== $_smarty_tpl->tpl_vars['txt']->value['GM_SHOW_NO_PRICE'])) {?>
            <p class="tax-shipping-text text-small">
                <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_TAX_INFO']->value;
echo $_smarty_tpl->tpl_vars['PRODUCTS_SHIPPING_LINK']->value;?>

            </p>
        <?php }?>
	<?php
}
}
/* {/block "product_info_price_tax"} */
/* {block "product_info_price"} */
class Block_2120428750694d6d5bd63e34_57754032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_price' => 
  array (
    0 => 'Block_2120428750694d6d5bd63e34_57754032',
  ),
  'product_info_price_price' => 
  array (
    0 => 'Block_2038384267694d6d5bd64723_71963557',
  ),
  'product_info_price_vpe' => 
  array (
    0 => 'Block_1972151879694d6d5bd67a57_39497330',
  ),
  'product_info_price_tax' => 
  array (
    0 => 'Block_50941466694d6d5bd69964_71527214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="current-price-container">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2038384267694d6d5bd64723_71963557', "product_info_price_price", $this->tplIndex);
?>

	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50941466694d6d5bd69964_71527214', "product_info_price_tax", $this->tplIndex);
?>

<?php
}
}
/* {/block "product_info_price"} */
}
