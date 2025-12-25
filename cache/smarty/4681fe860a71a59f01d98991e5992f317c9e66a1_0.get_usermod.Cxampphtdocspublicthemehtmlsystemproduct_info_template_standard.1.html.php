<?php
/* Smarty version 4.5.2, created on 2025-12-25 17:59:07
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6d5bbf2835_92225414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4681fe860a71a59f01d98991e5992f317c9e66a1' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemproduct_info_template_standard.1.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6d5bbf2835_92225414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1463438736694d6d5bbef233_33386658', "product_info_template_standard_sticky_box_product_title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_728994562694d6d5bbf0fa7_91647139', "product_info_template_standard_sticky_box_product_box_bottom");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."product_info_template_standard.0.html");
}
/* {block "product_info_template_standard_sticky_box_product_title"} */
class Block_1463438736694d6d5bbef233_33386658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_product_title' => 
  array (
    0 => 'Block_1463438736694d6d5bbef233_33386658',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['KLARNAOSM_PRODUCT_TOP']->value) {?>
        <div class="row klarnaosm klarnaosm_product_top"
             data-klarnaosm-namespace="GXModules/Gambio/KlarnaOSM/Build/Shop/Themes/All/Javascript"
             data-klarnaosm-widget="klarnaosmproduct"
        >
            <?php echo $_smarty_tpl->tpl_vars['KLARNAOSM_PRODUCT_TOP']->value;?>

        </div>
    <?php }
}
}
/* {/block "product_info_template_standard_sticky_box_product_title"} */
/* {block "product_info_template_standard_sticky_box_product_box_bottom"} */
class Block_728994562694d6d5bbf0fa7_91647139 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_info_template_standard_sticky_box_product_box_bottom' => 
  array (
    0 => 'Block_728994562694d6d5bbf0fa7_91647139',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php if ($_smarty_tpl->tpl_vars['KLARNAOSM_PRODUCT_BOTTOM']->value) {?>
        <div class="klarnaosm klarnaosm_product_bottom"
             data-klarnaosm-namespace="GXModules/Gambio/KlarnaOSM/Build/Shop/Themes/All/Javascript"
             data-klarnaosm-widget="klarnaosmproduct"
        >
            <?php echo $_smarty_tpl->tpl_vars['KLARNAOSM_PRODUCT_BOTTOM']->value;?>

        </div>
    <?php }
}
}
/* {/block "product_info_template_standard_sticky_box_product_box_bottom"} */
}
