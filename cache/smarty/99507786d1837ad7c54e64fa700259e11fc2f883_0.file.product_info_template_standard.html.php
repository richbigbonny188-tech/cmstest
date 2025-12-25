<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'C:\xampp\htdocs\public\theme\html\system\product_info_template_standard.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bb9ad24_46223034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99507786d1837ad7c54e64fa700259e11fc2f883' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\product_info_template_standard.html',
      1 => 1766590022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."rating_stars.html' => 2,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_listing_ribbon.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_social_share.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_shipping_time.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_stock.html' => 1,
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."product_info_product_lists.html' => 1,
  ),
),false)) {
function content_694d6d5bb9ad24_46223034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1631440758694d6d5bb578d4_77034586', "product_info_template_standard_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1540748693694d6d5bb609b3_76563198', "product_info_template_standard_content_row");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314384028694d6d5bb61b68_54793872', "product_info_template_standard_description");
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315695461694d6d5bb62c15_59525222', "product_info_template_standard_reviews_if");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_971760949694d6d5bb63af1_38185821', "product_info_template_standard_sticky_box_rating");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688051981694d6d5bb74ba2_24460535', "product_info_template_standard_product_review_data_if");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_744322287694d6d5bb7d322_89803823', "product_info_template_standard_sticky_box_ribbon_if");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1849118180694d6d5bb7e2a3_95148288', "product_info_template_standard_sticky_box_price_container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1240033823694d6d5bb7f838_88570655', "product_info_template_standard_social_share");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_966738496694d6d5bb80fd7_07246360', "product_info_template_standard_sticky_box_product_options");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_966471202694d6d5bb8dcf5_19638696', "product_info_template_standard_sticky_box_quantity_unit_if");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1589285129694d6d5bb961f3_80006891', "product_info_template_standard_sticky_box_product_title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306730731694d6d5bb99457_73537999', "product_info_template_standard_product_lists");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_template_standard.3.html");
}
/* {block "product_info_template_standard_content"} */
class Block_1631440758694d6d5bb578d4_77034586 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_content' => 
  array (
    0 => 'Block_1631440758694d6d5bb578d4_77034586',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container-fluid<?php if (!$_smarty_tpl->tpl_vars['images']->value) {?> no-gallery-image<?php }?>">
    <div class="row">
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    </div>
</div>
<?php
}
}
/* {/block "product_info_template_standard_content"} */
/* {block "product_info_template_standard_content_row"} */
class Block_1540748693694d6d5bb609b3_76563198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_content_row' => 
  array (
    0 => 'Block_1540748693694d6d5bb609b3_76563198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
    <div class="clearfix">
        <div class="container">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

            <?php
}
}
/* {/block "product_info_template_standard_content_row"} */
/* {block "product_info_template_standard_description"} */
class Block_314384028694d6d5bb61b68_54793872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_description' => 
  array (
    0 => 'Block_314384028694d6d5bb61b68_54793872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        </div>
    </div>
</div>
<div class="clearfix product-info-content-wrapper">
    <div class="container">
        <div class="row">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

            <?php
}
}
/* {/block "product_info_template_standard_description"} */
/* {block "product_info_template_standard_reviews_if"} */
class Block_315695461694d6d5bb62c15_59525222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_reviews_if' => 
  array (
    0 => 'Block_315695461694d6d5bb62c15_59525222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
    </div>
</div>
<?php
}
}
/* {/block "product_info_template_standard_reviews_if"} */
/* {block "product_info_template_standard_sticky_box_rating2"} */
class Block_10857213694d6d5bb67963_07080511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

        <span>
                            <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'];?>
</span>
                            <span style="display: none"><?php echo $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count'];?>
</span>
                        </span>
        <a href="#product-ratings"<?php if (smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true') {?> onclick="document.getElementById('reviews-tab').click()"<?php }?>>
        <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."rating_stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_rounded'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],'rating_count'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count']), 0, true);
?>
        </a>
        <?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating2"} */
/* {block "product_info_template_standard_sticky_box_rating_if"} */
class Block_712931630694d6d5bb64282_43328562 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['showRating']->value && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] != 0) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10857213694d6d5bb67963_07080511', "product_info_template_standard_sticky_box_rating2", $this->tplIndex);
?>

        <?php }?>
        <?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating_if"} */
/* {block "product_info_template_standard_sticky_box_rating"} */
class Block_971760949694d6d5bb63af1_38185821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_rating' => 
  array (
    0 => 'Block_971760949694d6d5bb63af1_38185821',
  ),
  'product_info_template_standard_sticky_box_rating_if' => 
  array (
    0 => 'Block_712931630694d6d5bb64282_43328562',
  ),
  'product_info_template_standard_sticky_box_rating2' => 
  array (
    0 => 'Block_10857213694d6d5bb67963_07080511',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="rating-model-row">
    <div class="hidden-xs hidden-sm product-rating">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_712931630694d6d5bb64282_43328562', "product_info_template_standard_sticky_box_rating_if", $this->tplIndex);
?>

    </div>
    <div class="hidden-xs hidden-sm product-model model-number"<?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value) {?> style="display:none"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_PRODUCTS_MODEL']->value) {?>
	        (<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_model'];?>
 <span class="model-number-text"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value;?>
</span>)
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block "product_info_template_standard_sticky_box_rating"} */
/* {block "product_info_template_standard_product_review_data"} */
class Block_1080542703694d6d5bb764f3_11780342 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\modifier.gm_get_conf.php','function'=>'smarty_modifier_gm_get_conf',),));
?>

        <a href="#product-ratings"<?php if (smarty_modifier_gm_get_conf('SHOW_RATING_AS_TAB') === 'true') {?> onclick="document.getElementById('reviews-tab').click()"<?php }?>>
            <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."rating_stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_rounded'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],'rating_count'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count']), 0, true);
?>
        </a>
        <?php
}
}
/* {/block "product_info_template_standard_product_review_data"} */
/* {block "product_info_template_standard_product_review_data_if"} */
class Block_688051981694d6d5bb74ba2_24460535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_product_review_data_if' => 
  array (
    0 => 'Block_688051981694d6d5bb74ba2_24460535',
  ),
  'product_info_template_standard_product_review_data' => 
  array (
    0 => 'Block_1080542703694d6d5bb764f3_11780342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="rating-model-row">
    <?php if ($_smarty_tpl->tpl_vars['showRating']->value && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] && $_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'] != 0) {?>
    <div class="product-rating">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1080542703694d6d5bb764f3_11780342', "product_info_template_standard_product_review_data", $this->tplIndex);
?>

    </div>
    <?php }?>
    <div class="product-model model-number"<?php if (!$_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value) {?> style="display:none"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_PRODUCTS_MODEL']->value) {?>
            (<?php echo $_smarty_tpl->tpl_vars['txt']->value['text_model'];?>
 <span class="model-number-text"><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_MODEL']->value;?>
</span>)
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block "product_info_template_standard_product_review_data_if"} */
/* {block "product_info_template_standard_sticky_box_ribbon_if"} */
class Block_744322287694d6d5bb7d322_89803823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_ribbon_if' => 
  array (
    0 => 'Block_744322287694d6d5bb7d322_89803823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "product_info_template_standard_sticky_box_ribbon_if"} */
/* {block "product_info_template_standard_sticky_box_ribbon_include"} */
class Block_1616145378694d6d5bb7e932_74258147 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_listing_ribbon.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ribbons'=>$_smarty_tpl->tpl_vars['arr_ribbons']->value), 0, true);
}
}
/* {/block "product_info_template_standard_sticky_box_ribbon_include"} */
/* {block "product_info_template_standard_sticky_box_price_container"} */
class Block_1849118180694d6d5bb7e2a3_95148288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_price_container' => 
  array (
    0 => 'Block_1849118180694d6d5bb7e2a3_95148288',
  ),
  'product_info_template_standard_sticky_box_ribbon_include' => 
  array (
    0 => 'Block_1616145378694d6d5bb7e932_74258147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['arr_ribbons']->value['ribbons']) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1616145378694d6d5bb7e932_74258147', "product_info_template_standard_sticky_box_ribbon_include", $this->tplIndex);
?>

<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "product_info_template_standard_sticky_box_price_container"} */
/* {block "product_info_template_standard_social_share"} */
class Block_1240033823694d6d5bb7f838_88570655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_social_share' => 
  array (
    0 => 'Block_1240033823694d6d5bb7f838_88570655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['SHOW_FACEBOOK']->value || $_smarty_tpl->tpl_vars['SHOW_TWITTER']->value || $_smarty_tpl->tpl_vars['SHOW_PINTEREST']->value || $_smarty_tpl->tpl_vars['SHOW_WHATSAPP']->value) {?>
<div class="product-info-share col-md-12">
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_social_share.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
}
/* {/block "product_info_template_standard_social_share"} */
/* {block "product_info_template_standard_sticky_box_shipping_time_include"} */
class Block_1382660099694d6d5bb812a4_45304479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_shipping_time.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_shipping_time_include"} */
/* {block "product_info_template_standard_sticky_box_stock_include"} */
class Block_366995668694d6d5bb83767_13023261 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_stock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_stock_include"} */
/* {block "product_info_template_standard_sticky_box_additional_fields"} */
class Block_263291193694d6d5bb85090_58814001 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="additional-fields-wrapper">
        <?php echo $_smarty_tpl->tpl_vars['additional_fields']->value;?>

    </div>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_additional_fields"} */
/* {block "product_info_template_standard_sticky_box_weight"} */
class Block_1675454904694d6d5bb86da5_83183895 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-definition-weight">
        <strong><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight'];?>
</strong>
        <span class="products-details-weight-container"><span><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_WEIGHT']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_unit'];?>
 <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value) {
echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;
} else {
echo $_smarty_tpl->tpl_vars['txt']->value['text_weight_qty_unit'];
}?></span>
    </div>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_weight"} */
/* {block "product_info_template_standard_sticky_box_weight_if"} */
class Block_2068720052694d6d5bb86079_64593084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['SHOW_PRODUCTS_WEIGHT']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1675454904694d6d5bb86da5_83183895', "product_info_template_standard_sticky_box_weight", $this->tplIndex);
?>

    <?php }?>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_weight_if"} */
/* {block "product_info_template_standard_sticky_box_min_order"} */
class Block_1118384241694d6d5bb8b8d0_09553000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-definition-min-order">
        <strong class="product-details-order-min"><?php echo $_smarty_tpl->tpl_vars['txt']->value['text_min_order'];?>
</strong>
        <span class="product-details-order-min"><?php echo $_smarty_tpl->tpl_vars['GM_MIN_ORDER']->value;?>
</span>
    </div>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_min_order"} */
/* {block "product_info_template_standard_sticky_box_min_order_if"} */
class Block_1795230538694d6d5bb8ab83_82916322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['GM_MIN_ORDER']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1118384241694d6d5bb8b8d0_09553000', "product_info_template_standard_sticky_box_min_order", $this->tplIndex);
?>

    <?php }?>
    <?php
}
}
/* {/block "product_info_template_standard_sticky_box_min_order_if"} */
/* {block "product_info_template_standard_sticky_box_product_options"} */
class Block_966738496694d6d5bb80fd7_07246360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_product_options' => 
  array (
    0 => 'Block_966738496694d6d5bb80fd7_07246360',
  ),
  'product_info_template_standard_sticky_box_shipping_time_include' => 
  array (
    0 => 'Block_1382660099694d6d5bb812a4_45304479',
  ),
  'product_info_template_standard_sticky_box_stock_include' => 
  array (
    0 => 'Block_366995668694d6d5bb83767_13023261',
  ),
  'product_info_template_standard_sticky_box_additional_fields' => 
  array (
    0 => 'Block_263291193694d6d5bb85090_58814001',
  ),
  'product_info_template_standard_sticky_box_weight_if' => 
  array (
    0 => 'Block_2068720052694d6d5bb86079_64593084',
  ),
  'product_info_template_standard_sticky_box_weight' => 
  array (
    0 => 'Block_1675454904694d6d5bb86da5_83183895',
  ),
  'product_info_template_standard_sticky_box_min_order_if' => 
  array (
    0 => 'Block_1795230538694d6d5bb8ab83_82916322',
  ),
  'product_info_template_standard_sticky_box_min_order' => 
  array (
    0 => 'Block_1118384241694d6d5bb8b8d0_09553000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-definitions">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1382660099694d6d5bb812a4_45304479', "product_info_template_standard_sticky_box_shipping_time_include", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_366995668694d6d5bb83767_13023261', "product_info_template_standard_sticky_box_stock_include", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263291193694d6d5bb85090_58814001', "product_info_template_standard_sticky_box_additional_fields", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2068720052694d6d5bb86079_64593084', "product_info_template_standard_sticky_box_weight_if", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795230538694d6d5bb8ab83_82916322', "product_info_template_standard_sticky_box_min_order_if", $this->tplIndex);
?>

</div>
<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_options"} */
/* {block "product_info_template_standard_sticky_box_quantity_unit"} */
class Block_2100815600694d6d5bb94627_28175855 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value;?>
:
        <?php
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_unit"} */
/* {block "product_info_template_standard_sticky_box_quantity_unit_if"} */
class Block_966471202694d6d5bb8dcf5_19638696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_quantity_unit_if' => 
  array (
    0 => 'Block_966471202694d6d5bb8dcf5_19638696',
  ),
  'product_info_template_standard_sticky_box_quantity_unit' => 
  array (
    0 => 'Block_2100815600694d6d5bb94627_28175855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.template_setting.php','function'=>'smarty_function_template_setting',),));
?>

<?php ob_start();
echo smarty_function_template_setting(array('name'=>"gx-product-info-hide-quantity-input"),$_smarty_tpl);
$_prefixVariable6 = ob_get_clean();
$_smarty_tpl->_assignInScope('productInfoHideQuantityInput', $_prefixVariable6);?>
    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_QUANTITY_UNIT']->value && !$_smarty_tpl->tpl_vars['productInfoHideQuantityInput']->value) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2100815600694d6d5bb94627_28175855', "product_info_template_standard_sticky_box_quantity_unit", $this->tplIndex);
?>

    <?php }
}
}
/* {/block "product_info_template_standard_sticky_box_quantity_unit_if"} */
/* {block "product_info_template_standard_sticky_box_product_title"} */
class Block_1589285129694d6d5bb961f3_80006891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_product_title' => 
  array (
    0 => 'Block_1589285129694d6d5bb961f3_80006891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['SHOW_WISHLIST']->value) {?>
        <a href="#" class="wishlist-button btn-wishlist" title="<?php echo $_smarty_tpl->tpl_vars['button']->value['add_to_wishlist'];?>
">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"><defs><style>.cls-1{fill:none;}</style></defs><title>wishlist</title><g id="Ebene_2" data-name="Ebene 2"><g id="Ebene_1-2" data-name="Ebene 1"><rect class="cls-1" width="40" height="40"/><path d="M19.19,36a1.16,1.16,0,0,0,1.62,0l12.7-12.61A10,10,0,0,0,20,8.7,10,10,0,0,0,6.5,23.42ZM8.12,10.91a7.6,7.6,0,0,1,5.49-2.26A7.46,7.46,0,0,1,19,10.88l0,0,.18.18a1.15,1.15,0,0,0,1.63,0l.18-.18A7.7,7.7,0,0,1,31.89,21.79L20,33.58,8.12,21.79A7.74,7.74,0,0,1,8.12,10.91Z"/></g></g></svg>
            <span class="sr-only"><?php echo $_smarty_tpl->tpl_vars['button']->value['add_to_wishlist'];?>
</span>
        </a>
    <?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "product_info_template_standard_sticky_box_product_title"} */
/* {block "product_info_template_standard_product_lists"} */
class Block_1306730731694d6d5bb99457_73537999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_product_lists' => 
  array (
    0 => 'Block_1306730731694d6d5bb99457_73537999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-info-listings container clearfix" data-gambio-widget="product_hover">
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_lists.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php
}
}
/* {/block "product_info_template_standard_product_lists"} */
}
