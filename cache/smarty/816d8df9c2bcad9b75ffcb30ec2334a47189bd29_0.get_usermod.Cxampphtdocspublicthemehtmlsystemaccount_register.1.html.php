<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:29
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemaccount_register.1.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6de9bcced4_53280824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '816d8df9c2bcad9b75ffcb30ec2334a47189bd29' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemaccount_register.1.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6de9bcced4_53280824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1081817790694d6de9bc77c0_22065206', "account_register_personal_email");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."account_register.0.html");
}
/* {block "hidden_anti_spam"} */
class Block_227816525694d6de9bcabc2_46565725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <input type="hidden" id="c747fd04ba117510f399b5f43ba8155087c19523" name="c747fd04ba117510f399b5f43ba8155087c19523" value="<?php echo $_smarty_tpl->tpl_vars['form_data']->value['secret_token_anti_spam'];?>
">
                <input type="hidden" id="ae6b85682663ab4570bd10c67b83d21fe77cdf97" name="ae6b85682663ab4570bd10c67b83d21fe77cdf97" value="<?php echo $_smarty_tpl->tpl_vars['form_data']->value['fake_hash'];?>
">
    <?php
}
}
/* {/block "hidden_anti_spam"} */
/* {block "account_register_personal_email"} */
class Block_1081817790694d6de9bc77c0_22065206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_register_personal_email' => 
  array (
    0 => 'Block_1081817790694d6de9bc77c0_22065206',
  ),
  'hidden_anti_spam' => 
  array (
    0 => 'Block_227816525694d6de9bcabc2_46565725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_227816525694d6de9bcabc2_46565725', "hidden_anti_spam", $this->tplIndex);
?>

<?php
}
}
/* {/block "account_register_personal_email"} */
}
