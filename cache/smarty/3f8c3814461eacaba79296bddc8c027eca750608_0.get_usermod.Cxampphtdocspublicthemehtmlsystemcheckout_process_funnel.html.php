<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:11
  from 'get_usermod:Cxampphtdocspublicthemehtmlsystemcheckout_process_funnel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6dd7a0b666_78071102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8c3814461eacaba79296bddc8c027eca750608' => 
    array (
      0 => 'get_usermod:Cxampphtdocspublicthemehtmlsystemcheckout_process_funnel.html',
      1 => 1766590021,
      2 => 'get_usermod',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6dd7a0b666_78071102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo smarty_function_load_language_text(array('section'=>"checkout_payment",'name'=>"payment"),$_smarty_tpl);?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_401490587694d6dd79f91d2_82502808', "checkout_process_funnel");
}
/* {block "checkout_process_funnel_your_data"} */
class Block_2095039259694d6dd79f9b49_64495312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="col-xs-<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>4 active<?php } else { ?>2<?php }?>">
				<span class="step-text <?php if ($_smarty_tpl->tpl_vars['step']->value !== 1) {?>hidden-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['text_yourdata'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['step']->value !== 1) {?><span class="step-text visble-xs"><i class="fa fa-user"></i></span><?php }?>
			</li>
		<?php
}
}
/* {/block "checkout_process_funnel_your_data"} */
/* {block "checkout_process_funnel_ship"} */
class Block_1535039995694d6dd79fdaf5_41999040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="col-xs-<?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>4 active<?php } else { ?>2<?php }?>">
				<span class="step-text <?php if ($_smarty_tpl->tpl_vars['step']->value !== 2) {?>hidden-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['text_ship'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['step']->value !== 2) {?><span class="step-text visble-xs"><i class="fa fa-truck"></i></span><?php }?>
			</li>
		<?php
}
}
/* {/block "checkout_process_funnel_ship"} */
/* {block "checkout_process_funnel_pay"} */
class Block_55753485694d6dd7a011f7_23785472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="col-xs-<?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>4 active<?php } else { ?>2<?php }?>">
				<span class="step-text <?php if ($_smarty_tpl->tpl_vars['step']->value !== 3) {?>hidden-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['text_pay'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['step']->value !== 3) {?><span class="step-text visble-xs"><i class="fa fa-money"></i></span><?php }?>
			</li>
		<?php
}
}
/* {/block "checkout_process_funnel_pay"} */
/* {block "checkout_process_funnel_confirm"} */
class Block_778982608694d6dd7a048a9_49282721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="col-xs-<?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>4 active<?php } else { ?>2<?php }?>">
				<span class="step-text <?php if ($_smarty_tpl->tpl_vars['step']->value !== 4) {?>hidden-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['text_confirm'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['step']->value !== 4) {?><span class="step-text visble-xs"><i class="fa fa-handshake-o"></i></span><?php }?>
			</li>
		<?php
}
}
/* {/block "checkout_process_funnel_confirm"} */
/* {block "checkout_process_funnel_success"} */
class Block_76516898694d6dd7a07e41_87673399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<li class="col-xs-<?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?>4 active<?php } else { ?>2<?php }?>">
				<span class="step-text <?php if ($_smarty_tpl->tpl_vars['step']->value !== 5) {?>hidden-xs<?php }?>"><?php echo $_smarty_tpl->tpl_vars['payment']->value['text_finished'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['step']->value !== 5) {?><span class="step-text visble-xs"><i class="fa fa-check"></i></span><?php }?>
			</li>
		<?php
}
}
/* {/block "checkout_process_funnel_success"} */
/* {block "checkout_process_funnel"} */
class Block_401490587694d6dd79f91d2_82502808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'checkout_process_funnel' => 
  array (
    0 => 'Block_401490587694d6dd79f91d2_82502808',
  ),
  'checkout_process_funnel_your_data' => 
  array (
    0 => 'Block_2095039259694d6dd79f9b49_64495312',
  ),
  'checkout_process_funnel_ship' => 
  array (
    0 => 'Block_1535039995694d6dd79fdaf5_41999040',
  ),
  'checkout_process_funnel_pay' => 
  array (
    0 => 'Block_55753485694d6dd7a011f7_23785472',
  ),
  'checkout_process_funnel_confirm' => 
  array (
    0 => 'Block_778982608694d6dd7a048a9_49282721',
  ),
  'checkout_process_funnel_success' => 
  array (
    0 => 'Block_76516898694d6dd7a07e41_87673399',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="checkout-processfunnel row">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2095039259694d6dd79f9b49_64495312', "checkout_process_funnel_your_data", $this->tplIndex);
?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1535039995694d6dd79fdaf5_41999040', "checkout_process_funnel_ship", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55753485694d6dd7a011f7_23785472', "checkout_process_funnel_pay", $this->tplIndex);
?>

	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778982608694d6dd7a048a9_49282721', "checkout_process_funnel_confirm", $this->tplIndex);
?>


		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76516898694d6dd7a07e41_87673399', "checkout_process_funnel_success", $this->tplIndex);
?>

	</ul>
<?php
}
}
/* {/block "checkout_process_funnel"} */
}
