<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_description.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bdeeba1_77937109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ea9e794642065fe75af347bbc76973aea627883' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_product_description.html',
      1 => 1766590022,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
    'get_usermod:".((string)$_smarty_tpl->tpl_vars[\'tpl_path\']->value)."rating_stars.html' => 1,
  ),
),false)) {
function content_694d6d5bdeeba1_77937109 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1538417981694d6d5bde4080_15791371', "product_info_product_description_tab_panels_rating_body_content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_product_description.0.html");
}
/* {block "product_info_product_description_tab_panels_rating_body_content"} */
class Block_1538417981694d6d5bde4080_15791371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_product_description_tab_panels_rating_body_content' => 
  array (
    0 => 'Block_1538417981694d6d5bde4080_15791371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.number_format.php','function'=>'smarty_modifier_number_format',),));
?>

<div class="product-info-rating-heading">
    <div class="average">
        <?php echo smarty_modifier_number_format($_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],1,",",'');?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender("get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."rating_stars.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('rating_rounded'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['averageRating'],'rating_count'=>$_smarty_tpl->tpl_vars['AGGREGATE_REVIEW_DATA']->value['count']), 0, true);
?>
</div>
<div id="product-ratings" class="product-info-rating">
    <?php echo $_smarty_tpl->tpl_vars['MODULE_products_reviews']->value;?>

</div>
<?php
}
}
/* {/block "product_info_product_description_tab_panels_rating_body_content"} */
}
