<?php
/* Smarty version 4.5.2, created on 2025-12-25 18:02:26
  from 'C:\xampp\htdocs\cache\mail_template_create_account_mail-2.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_694d6e22dfa1c0_78902039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca35caff155d7bf4079918e37c44d63d48bef05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cache\\mail_template_create_account_mail-2.txt',
      1 => 1766682146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_694d6e22dfa1c0_78902039 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['GENDER']->value == 'm') {?>Sehr geehrter Herr <?php } elseif ($_smarty_tpl->tpl_vars['GENDER']->value == 'f') {?>Sehr geehrte Frau <?php } else { ?>Hallo <?php }
echo $_smarty_tpl->tpl_vars['NAME']->value;?>
,

Sie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:

- Kundenwarenkorb: Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.
- Adressbuch: Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.
- Vorherige Bestellungen: Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.
- Meinungen über Produkte: Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.

Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an <?php echo $_smarty_tpl->tpl_vars['content']->value['MAIL_REPLY_ADDRESS'];?>
.
Achtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an <?php echo $_smarty_tpl->tpl_vars['content']->value['MAIL_REPLY_ADDRESS'];?>
.

<?php if ($_smarty_tpl->tpl_vars['SEND_GIFT']->value == true) {?>
Als kleines Willkommensgeschenk senden wir Ihnen einen Gutschein über: <?php echo $_smarty_tpl->tpl_vars['GIFT_AMMOUNT']->value;?>


Ihr persönlicher Gutschein-Code lautet <?php echo $_smarty_tpl->tpl_vars['GIFT_CODE']->value;?>
. Sie können diese Gutschrift an der Kasse während des Bestellvorganges verbuchen.

Um den Gutschein einzulösen klicken Sie bitte auf [Gutschein Einlösen].
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['SEND_COUPON']->value == true) {?>
Als kleines Willkommensgeschenk senden wir Ihnen einen Kupon.

Kuponbeschreibung: <?php echo $_smarty_tpl->tpl_vars['COUPON_DESC']->value;?>


Geben Sie einfach Ihren persönlichen Code <?php echo $_smarty_tpl->tpl_vars['COUPON_CODE']->value;?>
 während des Bezahlvorganges ein.
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['EMAIL_SIGNATURE_TEXT']->value;?>

<?php }
}
