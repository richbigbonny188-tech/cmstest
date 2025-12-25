<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:02:26
  from 'C:\xampp\htdocs\cache\mail_template_create_account_mail-2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6e22de2080_97560918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977d6ec815b4bdba3a94346c3df5c302376b2aee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cache\\mail_template_create_account_mail-2.html',
      1 => 1766682146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6e22de2080_97560918 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="UTF-8" />
<div style="height: 100%; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;">
	<div style="margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;">&nbsp;</div>

	<div style="margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; font-size: 13px; margin-top: 15px; margin-bottom: 15px; display: block;">
		<table align="center" border="0" cellpadding="4" cellspacing="0" width="100%">
			<tbody>
				<tr>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['gm_logo_mail']->value) {?>
						<div style="overflow: hidden; margin-bottom: 25px; display: block; float: right;"><?php echo $_smarty_tpl->tpl_vars['gm_logo_mail']->value;?>
</div>
						<?php }?>
					</td>
				</tr>
				<tr>
					<td>
						<span style="font-family:arial,helvetica,sans-serif;"><span style="font-size: 13px;">
							<strong><?php if ($_smarty_tpl->tpl_vars['GENDER']->value == 'm') {?>Sehr geehrter Herr <?php } elseif ($_smarty_tpl->tpl_vars['GENDER']->value == 'f') {?>Sehr geehrte Frau <?php } else { ?>Hallo <?php }
echo $_smarty_tpl->tpl_vars['NAME']->value;?>
, </strong><br />
							<br />
							Sie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:<br />
							<br />
							<strong>- Kundenwarenkorb:</strong> Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.<br />
							<strong>- Adressbuch:</strong> Wir k&ouml;nnen jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.<br />
							<strong>- Vorherige Bestellungen:</strong> Sie k&ouml;nnen jederzeit Ihre vorherigen Bestellungen &uuml;berpr&uuml;fen.<br />
							<strong>- Meinungen &uuml;ber Produkte:</strong> Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.<br />
							<br />
							Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an <?php echo $_smarty_tpl->tpl_vars['content']->value['MAIL_REPLY_ADDRESS'];?>
.<br />
							Achtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an <?php echo $_smarty_tpl->tpl_vars['content']->value['MAIL_REPLY_ADDRESS'];?>
.<br />
							<br />
							<?php if ($_smarty_tpl->tpl_vars['SEND_GIFT']->value == true) {?><br />
							Als kleines Willkommensgeschenk senden wir Ihnen einen Gutschein &uuml;ber: <strong><?php echo $_smarty_tpl->tpl_vars['GIFT_AMMOUNT']->value;?>
</strong><br />
							<br />
							Ihr pers&ouml;nlicher Gutschein-Code lautet <strong><?php echo $_smarty_tpl->tpl_vars['GIFT_CODE']->value;?>
</strong>. Sie k&ouml;nnen diese Gutschrift an der Kasse w&auml;hrend des Bestellvorganges verbuchen.<br />
							<br />
							Um den Gutschein einzul&ouml;sen klicken Sie bitte auf <a href="<?php echo $_smarty_tpl->tpl_vars['GIFT_LINK']->value;?>
">[Gutschein Einl&ouml;sen]</a>.<br /><br /><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['SEND_COUPON']->value == true) {?>Als kleines Willkommensgeschenk senden wir Ihnen einen Kupon.<br />
							Kuponbeschreibung: <strong><?php echo $_smarty_tpl->tpl_vars['COUPON_DESC']->value;?>
</strong><br />
							Geben Sie einfach Ihren pers&ouml;nlichen Code <?php echo $_smarty_tpl->tpl_vars['COUPON_CODE']->value;?>
 w&auml;hrend des Bezahlvorganges ein. <?php }?>
						</span></span>
					</td>
				</tr>
			</tbody>
		</table>
		<br />
		&nbsp;
	</div>

	<div style="padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;">
		<br /><br />
		<span style="font-size:13px;"><span style="font-family: verdana,geneva,sans-serif;"><?php echo $_smarty_tpl->tpl_vars['EMAIL_SIGNATURE_HTML']->value;?>
</span></span>
		<br /><br />
	</div>
</div>
<?php }
}
