<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:01:29
  from 'C:\xampp\htdocs\public\theme\html\system\account_register.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6de9ba5ad0_60091826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d03b9a8aed4da10e0586cec30ea9e91f3a74152' => 
    array (
      0 => 'C:\\xampp\\htdocs\\public\\theme\\html\\system\\account_register.html',
      1 => 1766590021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6de9ba5ad0_60091826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1060672416694d6de9b8f0a7_00734942', "account_register_form");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "get_usermod:".((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."account_register.1.html");
}
/* {block "account_register_form"} */
class Block_1060672416694d6de9b8f0a7_00734942 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'account_register_form' => 
  array (
    0 => 'Block_1060672416694d6de9b8f0a7_00734942',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\GXMainComponents\\SmartyPlugins\\function.load_language_text.php','function'=>'smarty_function_load_language_text',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['amazon_sso']->value) {?>
		<?php echo smarty_function_load_language_text(array('section'=>"SingleSignon",'name'=>"sso"),$_smarty_tpl);?>

		<?php echo '<script'; ?>
>
			window.onAmazonLoginReady = function() {
				amazon.Login.setClientId('<?php echo $_smarty_tpl->tpl_vars['amazon_sso']->value['client_id'];?>
');
				amazon.Login.setUseCookie(true);
			}
			window.onAmazonPaymentsReady = function() {
				let orderReferenceId;
				new OffAmazonPayments.Widgets.AddressBook({
					sellerId: '<?php echo $_smarty_tpl->tpl_vars['amazon_sso']->value['seller_id'];?>
',
					design: {
						designMode: 'responsive'
					},
					onOrderReferenceCreate: function(orderReference) {
						orderReferenceId = orderReference.getAmazonOrderReferenceId();
					},
					onAddressSelect: function(orderReference) {
						$.ajax({
							type: 'POST',
							url: '<?php echo $_smarty_tpl->tpl_vars['amazon_sso']->value['controller_url'];?>
',
							data: {
								orderReferenceId: orderReferenceId
							},
							dataType: 'json',
							success: function(result) {
								if(result.address.countryStatus === true) {
									$('#amzInvalidCountry').hide('fast');
									$('input[name="gender"]').each(function() { $(this).get(0).checked = false; });
									$('#firstname').val(result.address.firstName);
									$('#lastname').val(result.address.lastName);
									$('#postcode').val(result.address.postalCode);
									$('#city').val(result.address.city);
									if($('#house_number').length > 0) {
										$('#street_address').val(result.address.street);
										$('#house_number').val(result.address.houseNumber);
									}
									else {
										$('#street_address').val(result.address.addressLine2);
									}
									if($('#additional_address_info').length > 0) {
										$('#additional_address_info').text(result.address.addressLine1);
									}
									else {
										$('#company').val(result.address.addressLine1);
									}
									$('#telephone').val(result.address.phone);
									$('#country').val(result.address.countryId);
									let $genderInput = $('input[name="gender"]');
									$genderInput.closest('div.mandatory')
										.addClass('mandatory-unselected')
										.addClass('has-error');
								}
								else {
									$('#amzInvalidCountry').show('fast');
								}
							},
							error: function(result) {
							}
						});
					},
					onReady: function(orderReference) {
						document.getElementById('amazonssoaddress').style.display = 'block';
					},
					onError: function(error) {
						console.info('error loading address widget');
						$('#amazonssoaddress').hide();
					}
				}).bind('addressBookWidgetDiv');

				$(function() {
					$('input[name="gender"]').on('change', function(e) {
						$(this).closest('div.mandatory')
							.removeClass('has-error')
							.removeClass('mandatory-unselected');
					});
				});
			}
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['amazon_sso']->value['widgets_url'];?>
" async><?php echo '</script'; ?>
>
		<form class="dummyform" id="amazonssoaddress">
			<fieldset>
				<legend><?php echo $_smarty_tpl->tpl_vars['sso']->value['choose_address_title'];?>
</legend>
				<div id="addressBookWidgetDiv"><?php echo $_smarty_tpl->tpl_vars['sso']->value['loading_address_book'];?>
</div>
				<div id="amzInvalidCountry"><?php echo $_smarty_tpl->tpl_vars['sso']->value['unsupported_country'];?>
</div>
			</fieldset>
		</form>
	<?php }
}
}
/* {/block "account_register_form"} */
}
