<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_box_bottom.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bd936f9_87769614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4153128fe28a6de5103a957cef8d7440f171878b' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_box_bottom.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bd936f9_87769614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1678268431694d6d5bd85a17_96254335', "product_info_product_box_bottom_wishlist");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1468273501694d6d5bd85fc8_12449639', "product_info_product_box_bottom_price_offer");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_666561246694d6d5bd86e64_49136068', "product_info_product_box_bottom_tell_a_friend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925326375694d6d5bd87a95_57399609', "product_info_product_box_bottom_quantity_container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_973268967694d6d5bd8d8b5_68165713', "product_info_product_box_bottom_add_to_cart");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_box_bottom.0.html");
}
/* {block "product_info_product_box_bottom_wishlist"} */
class Block_1678268431694d6d5bd85a17_96254335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom_wishlist' => 
  array (
    0 => 'Block_1678268431694d6d5bd85a17_96254335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "product_info_product_box_bottom_wishlist"} */
/* {block "product_info_product_box_bottom_price_offer"} */
class Block_1468273501694d6d5bd85fc8_12449639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom_price_offer' => 
  array (
    0 => 'Block_1468273501694d6d5bd85fc8_12449639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn-price-offer" href="#">
    <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_price_offer'];?>

</a>
<?php
}
}
/* {/block "product_info_product_box_bottom_price_offer"} */
/* {block "product_info_product_box_bottom_tell_a_friend"} */
class Block_666561246694d6d5bd86e64_49136068 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom_tell_a_friend' => 
  array (
    0 => 'Block_666561246694d6d5bd86e64_49136068',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn-product-question" data-gambio-widget="product_question" data-product_question-product-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_ID']->value;?>
" href="javascript:void(0)">
    <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_tell_a_friend'];?>

</a>
<?php
}
}
/* {/block "product_info_product_box_bottom_tell_a_friend"} */
/* {block "product_info_product_box_bottom_quantity"} */
class Block_377696923694d6d5bd89339_40525925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <label class="control-label sr-only">
        <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>

    </label>
    <?php
}
}
/* {/block "product_info_product_box_bottom_quantity"} */
/* {block "product_info_product_box_bottom_quantity_if"} */
class Block_928228272694d6d5bd888a3_80171063 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377696923694d6d5bd89339_40525925', "product_info_product_box_bottom_quantity", $this->tplIndex);
?>

    <?php }?>
    <?php
}
}
/* {/block "product_info_product_box_bottom_quantity_if"} */
/* {block "product_info_product_box_bottom_input"} */
class Block_221011758694d6d5bd8b179_72109273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="input-group">
        <a class="btn btn-default btn-lg btn-minus"><span class="fa fa-minus"></span></a>
        <input type="number" step="<?php echo $_smarty_tpl->tpl_vars['QTY_STEPPING']->value;?>
" class="form-control input-lg pull-right js-calculate-qty" value="<?php echo $_smarty_tpl->tpl_vars['QUANTITY']->value;?>
" id="attributes-calc-quantity" name="products_qty"<?php if ($_smarty_tpl->tpl_vars['DISABLED_QUANTITY']->value) {?> disabled="disabled"<?php }?> />
        <a class="input-group-btn btn btn-default btn-lg btn-plus"><span class="fa fa-plus"></span></a>
    </div>
    <?php
}
}
/* {/block "product_info_product_box_bottom_input"} */
/* {block "product_info_product_box_bottom_quantity_container"} */
class Block_1925326375694d6d5bd87a95_57399609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom_quantity_container' => 
  array (
    0 => 'Block_1925326375694d6d5bd87a95_57399609',
  ),
  'product_info_product_box_bottom_quantity_if' => 
  array (
    0 => 'Block_928228272694d6d5bd888a3_80171063',
  ),
  'product_info_product_box_bottom_quantity' => 
  array (
    0 => 'Block_377696923694d6d5bd89339_40525925',
  ),
  'product_info_product_box_bottom_input' => 
  array (
    0 => 'Block_221011758694d6d5bd8b179_72109273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-product-info-hide-quantity-input"),$_smarty_tpl);
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_assignInScope('productInfoHideQuantityInput', $_prefixVariable10);?>
<div class="input-number" data-type="float" data-stepping="<?php echo $_smarty_tpl->tpl_vars['QTY_STEPPING']->value;?>
">
    <?php if ($_smarty_tpl->tpl_vars['productInfoHideQuantityInput']->value) {?>
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['QUANTITY']->value;?>
" id="attributes-calc-quantity" name="products_qty" />
    <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_928228272694d6d5bd888a3_80171063', "product_info_product_box_bottom_quantity_if", $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_221011758694d6d5bd8b179_72109273', "product_info_product_box_bottom_input", $this->tplIndex);
?>

    <?php }?>
</div>
<?php
}
}
/* {/block "product_info_product_box_bottom_quantity_container"} */
/* {block "product_info_product_box_bottom_add_to_cart"} */
class Block_973268967694d6d5bd8d8b5_68165713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_box_bottom_add_to_cart' => 
  array (
    0 => 'Block_973268967694d6d5bd8d8b5_68165713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="button-container">
    <button name="btn-add-to-cart" type="submit" class="btn btn-lg btn-buy btn-block js-btn-add-to-cart<?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> btn-inactive inactive<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
" <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> disabled<?php }?>>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title>cart</title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><rect class="cls-1" width="40" height="40"/><path d="M31,13.66a1.08,1.08,0,0,0-1.07-1H26.08V11.28a6.31,6.31,0,0,0-12.62,0v1.36H9.27a1,1,0,0,0-1,1L5.21,32A3.8,3.8,0,0,0,9,35.8H30.19A3.8,3.8,0,0,0,34,31.94Zm-15.42-1V11.28a4.2,4.2,0,0,1,8.39,0v1.35Zm-1.06,5.59a1.05,1.05,0,0,0,1.06-1.06v-2.4H24v2.4a1.06,1.06,0,0,0,2.12,0v-2.4h2.84L31.86,32a1.68,1.68,0,0,1-1.67,1.68H9a1.67,1.67,0,0,1-1.68-1.61l2.94-17.31h3.19v2.4A1.06,1.06,0,0,0,14.51,18.22Z"/></g></g></svg>
        <?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>

    </button>
    <button name="btn-add-to-cart-fake" onClick="void(0)" class="btn-add-to-cart-fake btn btn-lg btn-buy btn-block <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> btn-inactive inactive<?php }?>" value="" title="<?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
" style="display: none; margin-top: 0" <?php if ($_smarty_tpl->tpl_vars['DEACTIVATE_BUTTON']->value == true) {?> disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['txt']->value['add_to_cart'];?>
</button>
</div>
<?php
}
}
/* {/block "product_info_product_box_bottom_add_to_cart"} */
}
