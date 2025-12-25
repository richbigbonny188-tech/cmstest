--
-- Dumping data for table `addon_values_storage`
--

TRUNCATE TABLE `addon_values_storage`;

INSERT INTO `addon_values_storage` (`addon_value_id`, `container_type`, `container_id`, `addon_key`, `addon_value`)
VALUES (1, 'OrderItemInterface', 1, 'identifier', '6{1}2{2}5'),
	(2, 'OrderItemInterface', 2, 'identifier', '5'),
	(3, 'OrderItemInterface', 3, 'identifier', '2'),
	(4, 'OrderItemInterface', 4, 'identifier', '1'),
	(5, 'OrderItemInterface', 5, 'identifier', '8{1}8'),
	(6, 'OrderItemInterface', 6, 'identifier', '10{1}10'),
	(7, 'OrderItemInterface', 7, 'identifier', '4'),
	(8, 'OrderItemInterface', 8, 'identifier', '18{1}18'),
	(9, 'OrderItemInterface', 9, 'identifier', '19{1}3{3}23'),
	(10, 'OrderItemInterface', 10, 'identifier', '9'),
	(11, 'OrderItemInterface', 11, 'identifier', '10{1}10'),
	(12, 'OrderItemInterface', 12, 'identifier', '14'),
	(13, 'OrderItemInterface', 13, 'identifier', '15'),
	(14, 'OrderItemInterface', 14, 'identifier', '17'),
	(15, 'OrderItemInterface', 15, 'identifier', '6{1}2{2}5'),
	(16, 'OrderItemInterface', 16, 'identifier', '21'),
	(17, 'OrderItemInterface', 17, 'identifier', '11{1}3'),
	(18, 'OrderItemInterface', 18, 'identifier', '22'),
	(19, 'OrderItemInterface', 19, 'identifier', '18{1}18'),
	(20, 'OrderItemInterface', 20, 'identifier', '107x239'),
	(21, 'OrderItemInterface', 21, 'identifier', '7');


--
-- Dumping data for table `address_book`
--

REPLACE INTO `address_book` (`address_book_id`, `customers_id`, `entry_gender`, `entry_company`, `entry_firstname`,
                             `entry_lastname`, `entry_street_address`, `entry_house_number`, `entry_additional_info`,
                             `entry_suburb`, `entry_postcode`, `entry_city`, `entry_state`, `entry_country_id`,
                             `entry_zone_id`, `address_date_added`, `address_last_modified`, `address_class`)
VALUES (3, 3, 'm', '', 'Sven', 'Schulte', 'teststraße 1', '', '', '', '12345', 'test', '', 81, 0, '2017-01-26 00:00:00',
        '2017-01-25 23:00:00', ''),
	(4, 4, 'f', 'Gambio GmbH', 'Susanne', 'Meier', 'Parallelweg, 30', '', '', '', '28219', 'Bremen', '', 81, 0,
	 '2017-01-26 00:00:00', '2017-01-25 23:00:00', ''),
	(5, 5, 'm', '', 'Halil', 'Yilmaz', 'Lanstraße 23', '', '', '', '12345', 'Test', '', 81, 0, '2017-01-26 00:00:00',
	 '2017-01-25 23:00:00', ''),
	(6, 6, 'm', '', 'Teddy', 'Tester', 'Testweg 42', '', '', '', '23456', 'Testhausen', '', 81, 0,
	 '2017-01-27 00:00:00',
	 '2017-01-26 23:00:00', '');

--
-- Dumping data for table `agreements`
--

TRUNCATE TABLE `agreements`;

INSERT INTO `agreements` (`agreements_id`, `customers_name`, `customers_email`, `language_id`, `ip_address`, `text`,
                          `legal_text_version`, `content_group`, `date_added`, `last_modified`)
VALUES (1, 'Sven Schulte', 'gjhgjh@web.de', 1, '', 'I accept your general business conditions', '', 3,
        '2020-05-04 13:53:06', '2020-05-04 13:53:06'),
	(2, 'Sven Schulte', 'gjhgjh@web.de', 1, '', 'I accept your right of withdrawal conditions', '', 3889895,
	 '2020-05-04 13:53:06', '2020-05-04 13:53:06'),
	(3, 'Susanne Meier', 'euzteuz@web.de', 1, '', 'I accept your general business conditions', '', 3,
	 '2020-05-04 13:55:56',
	 '2020-05-04 13:55:56'),
	(4, 'Susanne Meier', 'euzteuz@web.de', 1, '', 'I accept your right of withdrawal conditions', '', 3889895,
	 '2020-05-04 13:55:56', '2020-05-04 13:55:56'),
	(5, 'Halil Yilmaz', '123gjhjg@web.de', 1, '', 'I accept your general business conditions', '', 3,
	 '2020-05-04 14:02:33',
	 '2020-05-04 14:02:33'),
	(6, 'Halil Yilmaz', '123gjhjg@web.de', 1, '', 'I accept your right of withdrawal conditions', '', 3889895,
	 '2020-05-04 14:02:33', '2020-05-04 14:02:33'),
	(7, 'Sven Schulte', 'gjhgjh@web.de', 1, '', 'I accept your general business conditions', '', 3,
	 '2020-05-04 14:03:40',
	 '2020-05-04 14:03:40'),
	(8, 'Sven Schulte', 'gjhgjh@web.de', 1, '', 'I accept your right of withdrawal conditions', '', 3889895,
	 '2020-05-04 14:03:40', '2020-05-04 14:03:40');



--
-- Dumping data for table `categories`
--

TRUNCATE TABLE `categories`;

INSERT INTO `categories` (`categories_id`, `categories_image`, `categories_ogimage`, `parent_id`, `categories_status`,
                          `categories_template`, `group_permission_0`, `group_permission_1`, `group_permission_2`,
                          `group_permission_3`, `listing_template`, `sort_order`, `products_sorting`,
                          `products_sorting2`, `date_added`, `last_modified`, `categories_icon`, `categories_icon_w`,
                          `categories_icon_h`, `group_ids`, `gm_show_attributes`, `gm_show_graduated_prices`,
                          `gm_show_qty`, `gm_priority`, `gm_changefreq`, `gm_sitemap_entry`, `gm_show_qty_info`,
                          `show_sub_categories`, `show_sub_categories_images`, `show_sub_categories_names`,
                          `show_categories_image_in_description`, `show_sub_products`, `view_mode_tiled`,
                          `feature_mode`, `feature_display_mode`, `show_category_filter`)
VALUES (1, '', '', 0, 1, 'default', 0, 0, 0, 0, 'default', 0, 'p.products_sort', 'ASC', '2020-04-30 14:39:38',
        '2020-05-06 06:40:37', '', 0, 0, '', 0, 0, 1, '0.5', 'weekly', 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0),
	(2, '', '', 0, 1, 'default', 0, 0, 0, 0, 'default', 0, 'p.products_sort', 'ASC', '2020-04-30 14:39:37',
	 '2020-05-06 06:40:11', '', 0, 0, '', 0, 0, 1, '0.5', 'weekly', 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0),
	(3, '', '', 0, 1, 'default', 0, 0, 0, 0, 'default', 0, 'p.products_sort', 'ASC', '2020-04-30 14:39:36',
	 '2020-05-06 06:40:47', '', 0, 0, '', 0, 0, 1, '0.5', 'weekly', 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0),
	(4, '', '', 1, 1, 'default', 0, 0, 0, 0, 'default', 0, 'p.products_sort', 'ASC', '2020-04-30 16:44:48',
	 '2020-05-06 06:41:56', 'item_ltr.gif', 0, 0, '', 0, 0, 1, '0.0', 'always', 1, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0);

--
-- Dumping data for table `categories_description`
--

TRUNCATE TABLE `categories_description`;

INSERT INTO `categories_description` (`categories_id`, `language_id`, `categories_name`, `categories_heading_title`,
                                      `categories_description`, `categories_description_bottom`,
                                      `categories_meta_title`, `categories_meta_description`,
                                      `categories_meta_keywords`, `gm_alt_text`, `gm_url_keywords`)
VALUES (1, 1, 'Category 1', '', '', '', '', '', '', '', 'category-1'),
	(1, 2, 'Kategorie 1', '', '', '', '', '', '', '', 'kategorie-1'),
	(2, 1, 'Category 2', '', '', '', '', '', '', '', 'category-2'),
	(2, 2, 'Kategorie 2', '', '', '', '', '', '', '', 'kategorie-2'),
	(3, 1, 'Category 3', '', '', '', '', '', '', '', 'category-3'),
	(3, 2, 'Kategorie 3', '', '', '', '', '', '', '', 'kategorie-3'),
	(4, 1, 'Subcategory 1', 'Subcategory 1', '', '', '', '', '', '', 'subcategory-1'),
	(4, 2, 'Unterkategorie 1', 'Unterkategorie 1', '', '', '', '', '', '', 'unterkategorie-1');


--
-- Dumping data for table `categories_index`
--

TRUNCATE TABLE `categories_index`;

INSERT INTO `categories_index` (`products_id`, `categories_index`)
VALUES (1, '-0--3-'),
	(2, '-0--3-'),
	(3, '-0--2-'),
	(4, '-0--2-'),
	(5, '-0--1-'),
	(6, '-0--1-'),
	(7, '-0-'),
	(8, '-0-'),
	(9, '-0-'),
	(10, '-0-'),
	(11, '-0-'),
	(12, '-0-');



--
-- Dumping data for table `customers`
--

REPLACE INTO `customers` (`customers_id`, `customers_cid`, `customers_vat_id`, `customers_vat_id_status`,
                         `customers_warning`, `customers_status`, `customers_gender`, `customers_firstname`,
                         `customers_lastname`, `customers_dob`, `customers_email_address`,
                         `customers_default_address_id`, `customers_telephone`, `customers_fax`, `customers_password`,
                         `customers_newsletter`, `customers_newsletter_mode`, `member_flag`, `delete_user`,
                         `account_type`, `password_request_key`, `payment_unallowed`, `shipping_unallowed`,
                         `refferers_id`, `customers_date_added`, `customers_last_modified`, `customers_is_tradesperson`)
VALUES (3, '3', '', 0, NULL, 2, 'm', 'Sven', 'Schulte', '2017-01-26 00:00:00', 'gjhgjh@web.de', 3, '', '',
	 '$2y$10$BVMXcZskD.p/Pc6o15XnFu1JXtO2s1lYaSR2F3bVxpxcaL5K9ZiQ6', NULL, '0', '0', '1', 0, '', '', '', 0,
	 '2017-01-26 12:44:20', '2020-05-04 10:53:58', 0),
	(4, '4', '', 0, NULL, 2, 'f', 'Susanne', 'Meier', '2017-01-26 00:00:00', 'euzteuz@web.de', 4, '', '',
	 '$2y$10$BVMXcZskD.p/Pc6o15XnFu1JXtO2s1lYaSR2F3bVxpxcaL5K9ZiQ6', NULL, '0', '0', '1', 0, '', '', '', 0,
	 '2017-01-26 12:47:39', '2020-05-04 10:53:58', 0),
	(5, '5', '', 0, NULL, 2, 'm', 'Halil', 'Yilmaz', '2017-01-26 00:00:00', '123gjhjg@web.de', 5, '', '',
	 '$2y$10$BVMXcZskD.p/Pc6o15XnFu1JXtO2s1lYaSR2F3bVxpxcaL5K9ZiQ6', NULL, '0', '0', '1', 0, '', '', '', 0,
	 '2017-01-26 12:49:19', '2020-05-04 10:53:58', 0),
	(6, '6', '', 0, NULL, 1, 'm', 'Teddy', 'Tester', '2017-01-26 00:00:00', 'tester@gambiocloud.com', 6, '', '',
	 '$2y$10$BVMXcZskD.p/Pc6o15XnFu1JXtO2s1lYaSR2F3bVxpxcaL5K9ZiQ6', NULL, '0', '0', '1', 1, '', '', '', 0,
	 '2017-01-27 12:27:37', '2020-05-04 10:53:58', 0);


--
-- Dumping data for table `customers_info`
--

REPLACE INTO `customers_info` (`customers_info_id`, `customers_info_date_of_last_logon`,
                              `customers_info_number_of_logons`, `customers_info_date_account_created`,
                              `customers_info_date_account_last_modified`)
VALUES (3, '2020-05-04 12:03:00', 5, '2017-01-26 12:44:20', '2020-05-04 12:03:00'),
	(4, '2020-05-04 11:54:48', 2, '2017-01-26 12:47:39', '2020-05-04 11:54:48'),
	(5, '2020-05-04 12:01:01', 3, '2017-01-26 12:49:19', '2020-05-04 12:01:01'),
	(6, '2017-01-26 00:00:00', 0, '2017-01-27 12:27:37', '2017-01-27 11:27:37');



--
-- Dumping data for table `emails`
--

TRUNCATE TABLE `emails`;

INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (1, 'Technischer Support',
        'Sehr geehrter Herr Sven Schulte,\r\n\r\nSie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:\r\n\r\n- Kundenwarenkorb: Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.\r\n- Adressbuch: Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.\r\n- Vorherige Bestellungen: Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.\r\n- Meinungen über Produkte: Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.\r\n\r\nFalls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.\r\nAchtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.\r\n\r\n\r\n\r\n\r\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: 100%; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; font-size: 13px; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;4&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n												&lt;div style=&quot;overflow: hidden; margin-bottom: 25px; display: block; float: right;&quot;&gt;&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;&lt;/div&gt;\r\n											&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-family:arial,helvetica,sans-serif;&quot;&gt;&lt;span style=&quot;font-size: 13px;&quot;&gt;\r\n							&lt;strong&gt;Sehr geehrter Herr Sven Schulte, &lt;/strong&gt;&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Sie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;- Kundenwarenkorb:&lt;/strong&gt; Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.&lt;br /&gt;\r\n							&lt;strong&gt;- Adressbuch:&lt;/strong&gt; Wir k&amp;ouml;nnen jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.&lt;br /&gt;\r\n							&lt;strong&gt;- Vorherige Bestellungen:&lt;/strong&gt; Sie k&amp;ouml;nnen jederzeit Ihre vorherigen Bestellungen &amp;uuml;berpr&amp;uuml;fen.&lt;br /&gt;\r\n							&lt;strong&gt;- Meinungen &amp;uuml;ber Produkte:&lt;/strong&gt; Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.&lt;br /&gt;\r\n							Achtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n																				&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n		&lt;br /&gt;\r\n		&amp;nbsp;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
        0, '2017-01-26 12:44:20', '2017-01-26 12:44:22'),
	(2, 'Technischer Support',
	 'Sehr geehrte Frau Susanne Meier,\r\n\r\nSie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:\r\n\r\n- Kundenwarenkorb: Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.\r\n- Adressbuch: Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.\r\n- Vorherige Bestellungen: Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.\r\n- Meinungen über Produkte: Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.\r\n\r\nFalls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.\r\nAchtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.\r\n\r\n\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: 100%; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; font-size: 13px; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;4&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n												&lt;div style=&quot;overflow: hidden; margin-bottom: 25px; display: block; float: right;&quot;&gt;&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;&lt;/div&gt;\r\n											&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-family:arial,helvetica,sans-serif;&quot;&gt;&lt;span style=&quot;font-size: 13px;&quot;&gt;\r\n							&lt;strong&gt;Sehr geehrte Frau Susanne Meier, &lt;/strong&gt;&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Sie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;- Kundenwarenkorb:&lt;/strong&gt; Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.&lt;br /&gt;\r\n							&lt;strong&gt;- Adressbuch:&lt;/strong&gt; Wir k&amp;ouml;nnen jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.&lt;br /&gt;\r\n							&lt;strong&gt;- Vorherige Bestellungen:&lt;/strong&gt; Sie k&amp;ouml;nnen jederzeit Ihre vorherigen Bestellungen &amp;uuml;berpr&amp;uuml;fen.&lt;br /&gt;\r\n							&lt;strong&gt;- Meinungen &amp;uuml;ber Produkte:&lt;/strong&gt; Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.&lt;br /&gt;\r\n							Achtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n																				&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n		&lt;br /&gt;\r\n		&amp;nbsp;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-01-26 12:47:39', '2017-01-26 12:47:40'),
	(3, 'Technischer Support',
	 'Sehr geehrter Herr Halil Yilmaz,\r\n\r\nSie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:\r\n\r\n- Kundenwarenkorb: Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.\r\n- Adressbuch: Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.\r\n- Vorherige Bestellungen: Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.\r\n- Meinungen über Produkte: Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.\r\n\r\nFalls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.\r\nAchtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.\r\n\r\n\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: 100%; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; font-size: 13px; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table align=&quot;center&quot; border=&quot;0&quot; cellpadding=&quot;4&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n												&lt;div style=&quot;overflow: hidden; margin-bottom: 25px; display: block; float: right;&quot;&gt;&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;&lt;/div&gt;\r\n											&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-family:arial,helvetica,sans-serif;&quot;&gt;&lt;span style=&quot;font-size: 13px;&quot;&gt;\r\n							&lt;strong&gt;Sehr geehrter Herr Halil Yilmaz, &lt;/strong&gt;&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Sie haben soeben Ihr Kundenkonto erfolgreich erstellt. Als registrierter Kunde haben Sie folgende Vorteile in unserem Shop:&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;- Kundenwarenkorb:&lt;/strong&gt; Jeder Artikel bleibt registriert bis Sie zur Kasse gehen oder die Produkte aus dem Warenkorb entfernen.&lt;br /&gt;\r\n							&lt;strong&gt;- Adressbuch:&lt;/strong&gt; Wir k&amp;ouml;nnen jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.&lt;br /&gt;\r\n							&lt;strong&gt;- Vorherige Bestellungen:&lt;/strong&gt; Sie k&amp;ouml;nnen jederzeit Ihre vorherigen Bestellungen &amp;uuml;berpr&amp;uuml;fen.&lt;br /&gt;\r\n							&lt;strong&gt;- Meinungen &amp;uuml;ber Produkte:&lt;/strong&gt; Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an testshopimage@gambio.de.&lt;br /&gt;\r\n							Achtung: Diese E-Mail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine E-Mail an testshopimage@gambio.de.&lt;br /&gt;\r\n							&lt;br /&gt;\r\n																				&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n		&lt;br /&gt;\r\n		&amp;nbsp;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-01-26 12:49:19', '2017-01-26 12:49:20');
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (4, 'Ihre Bestellung 400210, am Friday, 27. January 2017',
        'Gambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\nZahlungsmethode: Rechnung\r\nBestellnummer: 400210\r\nDatum: Friday, 27. January 2017\r\nKundennummer:7\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Lennard Kläfker,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\n\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x T-Shirt mit Schal-Kragen  29,95 EUR\r\nFarbe:schwarzGröße:S\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Stuhl Meridian Spring mit Kissen  29,95 EUR\r\nFarbe:schwarz\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Ferngesteuerter Feuerwehrwagen  25,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Classic Shopper Spiel Set  15,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Regenbogen-Kissen \"Mika\"  14,90 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Baby Strampler  7,95 EUR\r\nMuster:gestreiftGröße:56\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Bunte Dekosteine  3,99 EUR\r\nFarbe:gold\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Lidschatten Puder  1,00 EUR\r\nFarbe:bronze\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Sportschuh Damen/Herren  49,95 EUR\r\nFarbe:schwarzGröße:36\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Platinum Smokey Grill  59,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Teakholz Terassenstuhl  79,90 EUR\r\nFarbe:blau\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Drache  79,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Fleece Jacke  169,95 EUR\r\n\r\n\r\nLieferzeit: ca. 1 Woche\r\n\r\n1 x Platinum Grill  279,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Diamant Damenuhr Square  349,90 EUR\r\nFarbe:goldArmband:Gold\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Classic Professional 880 Standmixer  399,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Sessel mit floralen Ornamenten  679,98 EUR\r\nFarbe:schwarz\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Maritimes Kabinett-Schränkchen  1.200,00 EUR\r\n\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n\r\nZwischensumme: 3.479,12 EUR\r\nSelbstabholung (Selbstabholung der Ware in unserer Geschäftsstelle.): 0,00 EUR\r\ninkl. 19% MwSt.: 555,49 EUR\r\nSumme netto: 2.923,63 EUR\r\nSumme:  3.479,12 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Lennard Kl&auml;fker\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n									\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Lennard Kl&auml;fker&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Lennard Kl&auml;fker&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Rechnung&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400210&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Friday, 27. January 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;Kundennummer:&lt;/strong&gt; 7&lt;br /&gt;																				&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;T-Shirt mit Schal-Kragen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;Gr&ouml;&szlig;e:S&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							HE8882662&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Stuhl Meridian Spring mit Kissen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58342&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Ferngesteuerter Feuerwehrwagen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD021851&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 25,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 25,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Classic Shopper Spiel Set&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD27159&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 15,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 15,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Regenbogen-Kissen &quot;Mika&quot;&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KI993744&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 14,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 14,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Baby Strampler&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Muster:gestreift&lt;br /&gt;Gr&ouml;&szlig;e:56&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD27996&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 7,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 7,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Bunte Dekosteine&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:gold&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							Q98272&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 3,99 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 3,99 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Lidschatten Puder&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:bronze&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KO0283732&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sportschuh Damen/Herren&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;Gr&ouml;&szlig;e:36&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							SD780012&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 49,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 49,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Platinum Smokey Grill&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD31441&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 59,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 59,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Teakholz Terassenstuhl&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:blau&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							WB20012045&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Drache&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD24388&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Fleece Jacke&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 1 Woche\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58116&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 169,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 169,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Platinum Grill&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD51449&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 279,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 279,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Diamant Damenuhr Square&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:gold&lt;br /&gt;Armband:Gold&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							DU78570855&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 349,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 349,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Classic Professional 880 Standmixer&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58062&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 399,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 399,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sessel mit floralen Ornamenten&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							8800335&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 679,98 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 679,98 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Maritimes Kabinett-Schr&auml;nkchen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							DE4027511&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.200,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.200,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 3.479,12 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Selbstabholung (Selbstabholung der Ware in unserer Gesch&auml;ftsstelle.): 0,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 555,49 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 2.923,63 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 3.479,12 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
        0, '2017-01-27 12:46:04', '2017-01-27 12:46:06');
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (5, 'Ihre Bestellung 400210, am Friday, 27. January 2017',
        'Gambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\nZahlungsmethode: Rechnung\r\nBestellnummer: 400210\r\nDatum: Friday, 27. January 2017\r\nKundennummer:7\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Lennard Kläfker,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\n\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x T-Shirt mit Schal-Kragen  29,95 EUR\r\nFarbe:schwarzGröße:S\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Stuhl Meridian Spring mit Kissen  29,95 EUR\r\nFarbe:schwarz\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Ferngesteuerter Feuerwehrwagen  25,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Classic Shopper Spiel Set  15,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Regenbogen-Kissen \"Mika\"  14,90 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Baby Strampler  7,95 EUR\r\nMuster:gestreiftGröße:56\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Bunte Dekosteine  3,99 EUR\r\nFarbe:gold\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Lidschatten Puder  1,00 EUR\r\nFarbe:bronze\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Sportschuh Damen/Herren  49,95 EUR\r\nFarbe:schwarzGröße:36\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Platinum Smokey Grill  59,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Teakholz Terassenstuhl  79,90 EUR\r\nFarbe:blau\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Drache  79,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Fleece Jacke  169,95 EUR\r\n\r\n\r\nLieferzeit: ca. 1 Woche\r\n\r\n1 x Platinum Grill  279,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Diamant Damenuhr Square  349,90 EUR\r\nFarbe:goldArmband:Gold\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Classic Professional 880 Standmixer  399,95 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n1 x Sessel mit floralen Ornamenten  679,98 EUR\r\nFarbe:schwarz\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n1 x Maritimes Kabinett-Schränkchen  1.200,00 EUR\r\n\r\n\r\nLieferzeit: ca. 2 Wochen\r\n\r\n\r\nZwischensumme: 3.479,12 EUR\r\nSelbstabholung (Selbstabholung der Ware in unserer Geschäftsstelle.): 0,00 EUR\r\ninkl. 19% MwSt.: 555,49 EUR\r\nSumme netto: 2.923,63 EUR\r\nSumme:  3.479,12 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nLennard Kläfker\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Lennard Kl&auml;fker\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n									\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Lennard Kl&auml;fker&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Lennard Kl&auml;fker&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Rechnung&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400210&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Friday, 27. January 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;Kundennummer:&lt;/strong&gt; 7&lt;br /&gt;																				&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;T-Shirt mit Schal-Kragen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;Gr&ouml;&szlig;e:S&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							HE8882662&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Stuhl Meridian Spring mit Kissen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58342&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 29,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Ferngesteuerter Feuerwehrwagen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD021851&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 25,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 25,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Classic Shopper Spiel Set&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD27159&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 15,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 15,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Regenbogen-Kissen &quot;Mika&quot;&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KI993744&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 14,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 14,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Baby Strampler&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Muster:gestreift&lt;br /&gt;Gr&ouml;&szlig;e:56&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD27996&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 7,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 7,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Bunte Dekosteine&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:gold&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							Q98272&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 3,99 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 3,99 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Lidschatten Puder&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:bronze&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KO0283732&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sportschuh Damen/Herren&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;Gr&ouml;&szlig;e:36&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							SD780012&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 49,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 49,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Platinum Smokey Grill&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD31441&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 59,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 59,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Teakholz Terassenstuhl&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:blau&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							WB20012045&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Drache&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD24388&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 79,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Fleece Jacke&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 1 Woche\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58116&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 169,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 169,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Platinum Grill&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD51449&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 279,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 279,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Diamant Damenuhr Square&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:gold&lt;br /&gt;Armband:Gold&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							DU78570855&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 349,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 349,90 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Classic Professional 880 Standmixer&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KD58062&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 399,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 399,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sessel mit floralen Ornamenten&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:schwarz&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							8800335&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 679,98 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 679,98 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Maritimes Kabinett-Schr&auml;nkchen&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 2 Wochen\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							DE4027511&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.200,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.200,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 3.479,12 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Selbstabholung (Selbstabholung der Ware in unserer Gesch&auml;ftsstelle.): 0,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 555,49 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 2.923,63 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 3.479,12 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
        0, '2017-01-27 12:46:06', '2017-01-27 12:46:07');
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (6, 'Ihre Bestellung 400211, am Monday, 06. February 2017',
        'Muster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\nTelefonnummer: 1111111111\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400211\r\nDatum: Monday, 06. February 2017\r\n\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Max Mustermann,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x Lidschatten Puder  1,00 EUR\r\nFarbe:bronze\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 1,00 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 1,26 EUR\r\nSumme netto: 6,64 EUR\r\nSumme:  7,90 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Max Mustermann\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400211&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Monday, 06. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n														&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 1111111111&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Lidschatten Puder&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:bronze&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KO0283732&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 1,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 1,26 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 6,64 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 7,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
        0, '2017-02-06 17:12:23', '2017-02-06 17:12:24'),
	(7, 'Ihre Bestellung 400211, am Monday, 06. February 2017',
	 'Muster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\nTelefonnummer: 1111111111\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400211\r\nDatum: Monday, 06. February 2017\r\n\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Max Mustermann,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x Lidschatten Puder  1,00 EUR\r\nFarbe:bronze\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 1,00 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 1,26 EUR\r\nSumme netto: 6,64 EUR\r\nSumme:  7,90 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Max Mustermann\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400211&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Monday, 06. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n														&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 1111111111&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Lidschatten Puder&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;Farbe:bronze&lt;br /&gt;\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KO0283732&lt;br /&gt;\r\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 1,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 1,26 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 6,64 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 7,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-02-06 17:12:24', '2017-02-06 17:12:25'),
	(8, 'Ihre Bestellung 400212, am Monday, 06. February 2017',
	 'Muster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\nTelefonnummer: 1111111111\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400212\r\nDatum: Monday, 06. February 2017\r\n\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Max Mustermann,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n51 x Testartikel 10  1.017,45 EUR\r\n Größe: M\r\n Farbe: Rot\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 1.017,45 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 163,55 EUR\r\nSumme netto: 860,80 EUR\r\nSumme:  1.024,35 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Max Mustermann\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400212&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Monday, 06. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n														&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 1111111111&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;51x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Testartikel 10&lt;/strong&gt;&lt;br /&gt;\r\n													Gr&ouml;&szlig;e: M&lt;br /&gt;\r\n													Farbe: Rot&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							ABC1239-m-red&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 19,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.017,45 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 1.017,45 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 163,55 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 860,80 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 1.024,35 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-02-06 17:29:45', '2017-02-06 17:29:46'),
	(9, 'Ihre Bestellung 400212, am Monday, 06. February 2017',
	 'Muster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\nTelefonnummer: 1111111111\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400212\r\nDatum: Monday, 06. February 2017\r\n\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Max Mustermann,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n51 x Testartikel 10  1.017,45 EUR\r\n Größe: M\r\n Farbe: Rot\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 1.017,45 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 163,55 EUR\r\nSumme netto: 860,80 EUR\r\nSumme:  1.024,35 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nMuster &amp; co.\nMax Mustermann\nMusterstraße 1\n28000 Musterstadt\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://testshopimage.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;testshopimage&quot; title=&quot;testshopimage&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Max Mustermann\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Muster &amp;amp; co.&lt;br /&gt;Max Mustermann&lt;br /&gt;Musterstra&szlig;e 1&lt;br /&gt;28000 Musterstadt&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400212&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Monday, 06. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n														&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 1111111111&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;51x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Testartikel 10&lt;/strong&gt;&lt;br /&gt;\r\n													Gr&ouml;&szlig;e: M&lt;br /&gt;\r\n													Farbe: Rot&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							ABC1239-m-red&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 19,95 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 1.017,45 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 1.017,45 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 163,55 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 860,80 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 1.024,35 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://testshopimage.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-02-06 17:29:46', '2017-02-06 17:29:47');
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (10, 'Ihre Bestellung 400213, am Wednesday, 08. February 2017',
        'Gambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\nTelefonnummer: 4212234678\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400213\r\nDatum: Wednesday, 08. February 2017\r\nKundennummer:10\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Daniel Schnadt,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x Regenbogen-Kissen \"Mika\"  9,00 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 9,00 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 2,54 EUR\r\nSumme netto: 13,36 EUR\r\nSumme:  15,90 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://image20170208.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://image20170208.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;image20170208&quot; title=&quot;image20170208&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Daniel Schnadt\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Daniel Schnadt&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Daniel Schnadt&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400213&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Wednesday, 08. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;Kundennummer:&lt;/strong&gt; 10&lt;br /&gt;							&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 4212234678&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Regenbogen-Kissen &quot;Mika&quot;&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KI993744&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 9,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 9,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 9,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 2,54 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 13,36 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 15,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://image20170208.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
        0, '2017-02-08 14:57:08', '2017-02-08 14:57:09'),
	(11, 'Ihre Bestellung 400213, am Wednesday, 08. February 2017',
	 'Gambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\nTelefonnummer: 4212234678\r\n\r\n\r\nZahlungsmethode: Vorkasse (Überweisung)\r\nBestellnummer: 400213\r\nDatum: Wednesday, 08. February 2017\r\nKundennummer:10\r\n----------------------------------------------------------------------\r\n\r\nSehr geehrter Herr Daniel Schnadt,\r\n\r\nvielen Dank für Ihre Bestellung in unserem Onlineshop.\r\n\r\nUnsere Bankverbindung:\r\nMusterbank\r\nIBAN 1234567891112131415\r\nBIC ABCDEFGH\r\n\r\n\r\nIhre bestellten Produkte zur Kontrolle:\r\n----------------------------------------------------------------------\r\n1 x Regenbogen-Kissen \"Mika\"  9,00 EUR\r\n\r\n\r\nLieferzeit: ca. 3-4 Tage\r\n\r\n\r\nZwischensumme: 9,00 EUR\r\nVersandkosten nach Preis/Gewicht (Standard): 6,90 EUR\r\ninkl. 19% MwSt.: 2,54 EUR\r\nSumme netto: 13,36 EUR\r\nSumme:  15,90 EUR\r\n\r\n\r\n\r\nRechnungsadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\nVersandadresse\r\n----------------------------------------------------------------------\r\nGambio GmbH\nDaniel Schnadt\nParallelweg, 30\n28219 Bremen\nGermany\r\n\r\n\r\n\r\n\r\n§ Muster-Widerrufsformular\r\nUnser Muster-Widerrufsformular im PDF-Format: https://image20170208.gambiocloud.com/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=de \r\n\r\nUm die zum Download angebotenen PDF-Dateien zu öffnen, benötigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen können. Die aktuelle Version des Adobe Readers finden Sie hier: http://get.adobe.com/de/reader/\r\n\r\n\r\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\r\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\r\n		&lt;table style=&quot;width: 100%; overflow: hidden;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;td&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;text-align: right;&quot;&gt;\r\n						&lt;img   src=&quot;https://image20170208.gambiocloud.com/images/logos/email_logo.gif&quot; alt=&quot;image20170208&quot; title=&quot;image20170208&quot; /&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;h1&gt;\r\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Sehr geehrter Herr Daniel Schnadt\r\n						,&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/h1&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;vielen Dank f&amp;uuml;r Ihre Bestellung in unserem Online-Shop!&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				 Unsere Bankverbindung:&lt;br /&gt;\r\n					Musterbank&lt;br /&gt;\r\nIBAN 1234567891112131415&lt;br /&gt;\r\nBIC ABCDEFGH\r\n							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n\r\n		&lt;br /&gt;\r\n\r\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\r\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Ihre Bestellung: &lt;/span&gt;&lt;/span&gt;\r\n		&lt;/h3&gt;\r\n\r\n		&lt;table width=&quot;100%&quot;&gt;\r\n			&lt;tr&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Rechnungsadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Daniel Schnadt&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Lieferadresse&lt;/strong&gt;\r\n							&lt;br /&gt;\r\n							Gambio GmbH&lt;br /&gt;Daniel Schnadt&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\r\n						&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align:top&quot;&gt;\r\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\r\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							&lt;strong&gt;Zahlungsmethode:&lt;/strong&gt; Vorkasse (&Uuml;berweisung)&lt;br /&gt;							&lt;strong&gt;Bestellnummer:&lt;/strong&gt; 400213&lt;br /&gt;\r\n							&lt;strong&gt;Bestelldatum:&lt;/strong&gt; Wednesday, 08. February 2017&lt;br /&gt;\r\n							&lt;br /&gt;\r\n							&lt;strong&gt;Kundennummer:&lt;/strong&gt; 10&lt;br /&gt;							&lt;strong&gt;Telefonnummer:&lt;/strong&gt; 4212234678&lt;br /&gt;													&lt;/span&gt;\r\n					&lt;/span&gt;\r\n				&lt;/td&gt;\r\n			&lt;/tr&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\r\n			&lt;tbody&gt;\r\n				&lt;tr&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Anzahl&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Artikel-Nr.&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Einzelpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Gesamtpreis&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/th&gt;\r\n				&lt;/tr&gt;\r\n\r\n				&lt;!----&gt;\r\n				&lt;tr&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Regenbogen-Kissen &quot;Mika&quot;&lt;/strong&gt;&lt;br /&gt;\r\n						\r\n						\r\n													&lt;br /&gt;\r\n																			Lieferzeit: ca. 3-4 Tage\r\n												&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n							KI993744&lt;br /&gt;\r\n							&lt;em&gt;&lt;/em&gt;\r\n						&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 9,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\r\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt; 9,00 EUR&lt;/span&gt;&lt;/span&gt;\r\n					&lt;/td&gt;\r\n				&lt;/tr&gt;\r\n				&lt;!----&gt;\r\n\r\n			&lt;/tbody&gt;\r\n		&lt;/table&gt;\r\n\r\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Zwischensumme: 9,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Versandkosten nach Preis/Gewicht (Standard): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;inkl. 19% MwSt.: 2,54 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Summe netto: 13,36 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Summe&lt;/b&gt;: &lt;b&gt; 15,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n					&lt;/div&gt;\r\n\r\n		&lt;br style=&quot;clear: right;&quot; /&gt;\r\n\r\n		\r\n		\r\n		\r\n\r\n		\r\n		\r\n				&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				&lt;strong&gt;&amp;sect; Muster-Widerrufsformular&lt;/strong&gt;&lt;br /&gt;\r\n				 Unser Muster-Widerrufsformular im PDF-Format: &lt;a href=&quot;https://image20170208.gambiocloud.com/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=de&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		\r\n		&lt;p&gt;\r\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\r\n				Um die zum Download angebotenen PDF-Dateien zu &amp;ouml;ffnen, ben&amp;ouml;tigen Sie ein Zusatzprogramm,\r\n				wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&amp;ouml;nnen.\r\n				Die aktuelle Version des Adobe Readers finden Sie &lt;a href=&quot;http://get.adobe.com/de/reader/&quot; target=&quot;_blank&quot;&gt;hier&lt;/a&gt;.&lt;br /&gt;\r\n			&lt;/span&gt;&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;br /&gt;\r\n	&lt;/div&gt;\r\n\r\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\r\n		&lt;br /&gt;&lt;br /&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n',
	 0, '2017-02-08 14:57:09', '2017-02-08 14:57:10'),
	(12, 'Your order 1, Montag, 04. Mai 2020',
	 'Sven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 1\nDate: Monday, 04. May 2020\nCustomer ID:3\n----------------------------------------------------------------------\n\nDear Mr Sven Schulte,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n1 x Sneaker Swag 1 64,95 EUR\nColor:goldBracelet:gold\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 64,95 EUR\nSelf Pickup. (Self Pickup from our company.): 0,00 EUR\nincl. 19% tax: 10,37 EUR\nTotal, No Tax: 54,58 EUR\nTotal: 64,95 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Sven Schulte,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 1&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 3&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 1&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:gold&lt;br /&gt;Bracelet:gold&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;64,95 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;64,95 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 64,95 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Self Pickup. (Self Pickup from our company.): 0,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 10,37 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 54,58 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;64,95 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 13:53:05', NULL),
	(13, 'Your order 1, Montag, 04. Mai 2020',
	 'Sven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 1\nDate: Monday, 04. May 2020\nCustomer ID:3\n----------------------------------------------------------------------\n\nDear Mr Sven Schulte,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n1 x Sneaker Swag 1 64,95 EUR\nColor:goldBracelet:gold\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 64,95 EUR\nSelf Pickup. (Self Pickup from our company.): 0,00 EUR\nincl. 19% tax: 10,37 EUR\nTotal, No Tax: 54,58 EUR\nTotal: 64,95 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Sven Schulte,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 1&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 3&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 1&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:gold&lt;br /&gt;Bracelet:gold&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;64,95 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;64,95 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 64,95 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Self Pickup. (Self Pickup from our company.): 0,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 10,37 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 54,58 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;64,95 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 13:53:05', NULL);
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (14, 'Your order 2, Montag, 04. Mai 2020',
        'Gambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 2\nDate: Monday, 04. May 2020\nCustomer ID:4\n----------------------------------------------------------------------\n\nDear Miss/Ms/Mrs Susanne Meier,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n4 x Sneaker Swag 2 60,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n2 x Sneaker Swag 5 30,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n3 x Sneaker Swag 6 45,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 135,00 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 22,65 EUR\nTotal, No Tax: 119,25 EUR\nTotal: 141,90 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nGambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nGambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Miss/Ms/Mrs Susanne Meier,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Gambio GmbH&lt;br /&gt;Susanne Meier&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Gambio GmbH&lt;br /&gt;Susanne Meier&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 2&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 4&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;4x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 2&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;60,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;2x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 5&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;30,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;3x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 6&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;45,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 135,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 22,65 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 119,25 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;141,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
        1, '2020-05-04 13:55:56', NULL),
	(15, 'Your order 2, Montag, 04. Mai 2020',
	 'Gambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 2\nDate: Monday, 04. May 2020\nCustomer ID:4\n----------------------------------------------------------------------\n\nDear Miss/Ms/Mrs Susanne Meier,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n4 x Sneaker Swag 2 60,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n2 x Sneaker Swag 5 30,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n3 x Sneaker Swag 6 45,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 135,00 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 22,65 EUR\nTotal, No Tax: 119,25 EUR\nTotal: 141,90 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nGambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nGambio GmbH\nSusanne Meier\nParallelweg, 30\n28219 Bremen\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Miss/Ms/Mrs Susanne Meier,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Gambio GmbH&lt;br /&gt;Susanne Meier&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Gambio GmbH&lt;br /&gt;Susanne Meier&lt;br /&gt;Parallelweg, 30&lt;br /&gt;28219 Bremen&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 2&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 4&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;4x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 2&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;60,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;2x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 5&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;30,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;3x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 6&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;45,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 135,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 22,65 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 119,25 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;141,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 13:55:56', NULL),
	(16, 'Your order 3, Montag, 04. Mai 2020',
	 'Halil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 3\nDate: Monday, 04. May 2020\nCustomer ID:5\n----------------------------------------------------------------------\n\nDear Mr Halil Yilmaz,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n1 x Test Article 2 19,99 EUR\nColor:green\n\nShipping time: ca. 3-4 days\n\n1 x Test Article 4 19,99 EUR\nColor:blue\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 39,98 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 7,48 EUR\nTotal, No Tax: 39,40 EUR\nTotal: 46,88 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nHalil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nHalil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Halil Yilmaz,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Halil Yilmaz&lt;br /&gt;Lanstra&szlig;e 23&lt;br /&gt;12345 Test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Halil Yilmaz&lt;br /&gt;Lanstra&szlig;e 23&lt;br /&gt;12345 Test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 3&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 5&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Test Article 2&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:green&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Test Article 4&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:blue&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 39,98 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 7,48 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 39,40 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;46,88 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 14:02:33', NULL);
INSERT INTO `emails` (`email_id`, `subject`, `content_plain`, `content_html`, `is_pending`, `creation_date`,
                      `sent_date`)
VALUES (17, 'Your order 3, Montag, 04. Mai 2020',
        'Halil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 3\nDate: Monday, 04. May 2020\nCustomer ID:5\n----------------------------------------------------------------------\n\nDear Mr Halil Yilmaz,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n1 x Test Article 2 19,99 EUR\nColor:green\n\nShipping time: ca. 3-4 days\n\n1 x Test Article 4 19,99 EUR\nColor:blue\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 39,98 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 7,48 EUR\nTotal, No Tax: 39,40 EUR\nTotal: 46,88 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nHalil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nHalil Yilmaz\nLanstraße 23\n12345 Test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
        '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Halil Yilmaz,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Halil Yilmaz&lt;br /&gt;Lanstra&szlig;e 23&lt;br /&gt;12345 Test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Halil Yilmaz&lt;br /&gt;Lanstra&szlig;e 23&lt;br /&gt;12345 Test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 3&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 5&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Test Article 2&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:green&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;1x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Test Article 4&lt;/strong&gt;&lt;br /&gt;\n						\n													&lt;br /&gt;Color:blue&lt;br /&gt;\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;br /&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;19,99 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 39,98 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 7,48 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 39,40 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;46,88 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
        1, '2020-05-04 14:02:33', NULL),
	(18, 'Your order 4, Montag, 04. Mai 2020',
	 'Sven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 4\nDate: Monday, 04. May 2020\nCustomer ID:3\n----------------------------------------------------------------------\n\nDear Mr Sven Schulte,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n3 x Sneaker Swag 3 45,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 45,00 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 8,28 EUR\nTotal, No Tax: 43,62 EUR\nTotal: 51,90 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Sven Schulte,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 4&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 3&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;3x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 3&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;45,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 45,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 8,28 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 43,62 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;51,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 14:03:40', NULL),
	(19, 'Your order 4, Montag, 04. Mai 2020',
	 'Sven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\nPayment method: Cash\nOrder No.: 4\nDate: Monday, 04. May 2020\nCustomer ID:3\n----------------------------------------------------------------------\n\nDear Mr Sven Schulte,\n\nthank you for your order in our onlineshop.\n\n\n\n\nYou ordered the following products:\n----------------------------------------------------------------------\n3 x Sneaker Swag 3 45,00 EUR\n\n\nShipping time: ca. 3-4 days\n\n\nSubtotal: 45,00 EUR\nTable Rate (Best way): 6,90 EUR\nincl. 19% tax: 8,28 EUR\nTotal, No Tax: 43,62 EUR\nTotal: 51,90 EUR\n\n\n\nPayment address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\nShipping address\n----------------------------------------------------------------------\nSven Schulte\nteststraße 1\n12345 test\nGermany\n\n\n\n\n§ Model Withdrawal Form\nOur model withdrawal form as PDF document: http://gambio-cloud.local/request_port.php?module=ShopContent&action=download&coID=3889895&withdrawal_form=1&language=en \n\nTo open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find here: http://get.adobe.com/uk/reader/\n\n\n',
	 '&lt;meta charset=&quot;UTF-8&quot; /&gt;\n&lt;div style=&quot;height: auto; margin: 0 !important; padding: 0 !important; max-width: 9000px !important; font-family: arial, verdana, sans-serif; background-color: #e5e5e5;&quot;&gt;\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 720px; padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #999999; text-align: right;&quot;&gt;&amp;nbsp;&lt;/div&gt;\n\n	&lt;div style=&quot;margin-left: auto; margin-right: auto; width: 630px; padding: 25px 45px 25px; background-color: white; margin-top: 15px; margin-bottom: 15px; display: block;&quot;&gt;\n		&lt;table style=&quot;width: 100%; display: block;overflow: hidden;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;td&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td&gt;\n						&lt;img   src=&quot;http://gambio-cloud.local/images/logos/email_logo.gif&quot; alt=&quot;basimagebase1&quot; title=&quot;basimagebase1&quot; /&gt;					&lt;/td&gt;\n				&lt;/tr&gt;\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;h1&gt;\n							&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Dear Mr Sven Schulte,&lt;/span&gt;&lt;/span&gt;\n					&lt;/h1&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;thank you for your order in our onlineshop!&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n									\n							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n\n		&lt;br /&gt;\n\n		&lt;h3 style=&quot;border-bottom: 1px solid #ddd; padding: 5px 0px&quot;&gt;\n			&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Your order: &lt;/span&gt;&lt;/span&gt;\n		&lt;/h3&gt;\n\n		&lt;table width=&quot;100%&quot;&gt;\n			&lt;tr&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Payment	address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Shipping address&lt;/strong&gt;\n							&lt;br /&gt;\n							Sven Schulte&lt;br /&gt;teststra&szlig;e 1&lt;br /&gt;12345 test&lt;br /&gt;Germany\n						&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n				&lt;td width=&quot;33%&quot; style=&quot;text-align: right; vertical-align: top&quot;&gt;\n					&lt;span style=&quot;font-size:12px;&quot;&gt;\n						&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							&lt;strong&gt;Paymentmethod:&lt;/strong&gt; Cash&lt;br /&gt;							&lt;strong&gt;Order No.:&lt;/strong&gt; 4&lt;br /&gt;\n							&lt;strong&gt;Order date:&lt;/strong&gt; Monday, 04. May 2020&lt;br /&gt;\n							&lt;br /&gt;\n							&lt;strong&gt;Customer ID:&lt;/strong&gt; 3&lt;br /&gt;																				&lt;/span&gt;\n					&lt;/span&gt;\n				&lt;/td&gt;\n			&lt;/tr&gt;\n		&lt;/table&gt;\n\n		&lt;table cellspacing=&quot;0&quot; style=&quot;width: 100%; font-size: 12px; margin-top: 25px; padding: 0;&quot;&gt;\n			&lt;tbody&gt;\n				&lt;tr&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;pcs.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 0 3px 3px; font-size: 13px; text-align: left;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Article-No.&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Single price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n					&lt;th style=&quot;font-weight: bold; border-bottom: 2px solid #000; padding: 3px 4px 3px 3px; font-size: 13px; text-align: right;&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total price&lt;/span&gt;&lt;/span&gt;\n					&lt;/th&gt;\n				&lt;/tr&gt;\n\n				&lt;!----&gt;\n				&lt;tr&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;3x&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;strong&gt;Sneaker Swag 3&lt;/strong&gt;&lt;br /&gt;\n						\n						\n													&lt;br /&gt;\n																			Shipping time: ca. 3-4 days\n												&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n							ABC123&lt;br /&gt;\n							&lt;em&gt;&lt;/em&gt;\n						&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;15,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n					&lt;td style=&quot;border-bottom: 1px solid #ddd; padding: 5px 4px; text-align: right; vertical-align: top&quot;&gt;\n						&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;45,00 EUR&lt;/span&gt;&lt;/span&gt;\n					&lt;/td&gt;\n				&lt;/tr&gt;\n				&lt;!----&gt;\n\n			&lt;/tbody&gt;\n		&lt;/table&gt;\n\n		&lt;div style=&quot;float: right; text-align: right&quot;&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Subtotal: 45,00 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Table Rate (Best way): 6,90 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;incl. 19% tax: 8,28 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;Total, No Tax: 43,62 EUR&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n							&lt;span style=&quot;font-size:13px&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;b&gt;Total&lt;/b&gt;: &lt;b&gt;51,90 EUR&lt;/b&gt;&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\n					&lt;/div&gt;\n\n		&lt;br style=&quot;clear: right;&quot; /&gt;\n\n		\n		\n		\n\n		\n		\n				&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				&lt;strong&gt;&amp;sect; Model Withdrawal Form&lt;/strong&gt;&lt;br /&gt;\n				 Our model withdrawal form as PDF document: &lt;a href=&quot;http://gambio-cloud.local/request_port.php?module=ShopContent&amp;action=download&amp;coID=3889895&amp;withdrawal_form=1&amp;language=en&quot;&gt;DOWNLOAD&lt;/a&gt;&lt;br /&gt;							&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		\n		&lt;p&gt;\n			&lt;span style=&quot;font-size:12px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;\n				To open the downloadable PDF-files, you need an additional program such as the Adobe Reader,\n				which you can download online for free. The current version of the Adobe Reader you can find\n				&lt;a href=&quot;http://get.adobe.com/uk/reader/&quot; target=&quot;_blank&quot;&gt;here&lt;/a&gt;.&lt;br /&gt;\n			&lt;/span&gt;&lt;/span&gt;\n		&lt;/p&gt;\n		&lt;br /&gt;\n	&lt;/div&gt;\n\n	&lt;div style=&quot;padding-bottom: 5px; padding-top: 5px; font-size: 9pt; color: #444444; font-family: arial; text-align: center;&quot;&gt;\n		&lt;br /&gt;&lt;br /&gt;\n		&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;span style=&quot;font-family: verdana,geneva,sans-serif;&quot;&gt;&lt;/span&gt;&lt;/span&gt;\n		&lt;br /&gt;&lt;br /&gt;\n	&lt;/div&gt;\n&lt;/div&gt;\n',
	 1, '2020-05-04 14:03:40', NULL);


--
-- Dumping data for table `email_attachments`
--

TRUNCATE TABLE `email_attachments`;

INSERT INTO `email_attachments` (`email_id`, `path`, `name`)
VALUES (4, 'uploads/attachments/email_id_4-AGB.pdf', 'AGB.pdf'),
	(4, 'uploads/attachments/email_id_4-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(4, 'uploads/attachments/email_id_4-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(5, 'uploads/attachments/email_id_5-AGB.pdf', 'AGB.pdf'),
	(5, 'uploads/attachments/email_id_5-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(5, 'uploads/attachments/email_id_5-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(6, 'uploads/attachments/email_id_6-AGB.pdf', 'AGB.pdf'),
	(6, 'uploads/attachments/email_id_6-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(6, 'uploads/attachments/email_id_6-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(7, 'uploads/attachments/email_id_7-AGB.pdf', 'AGB.pdf'),
	(7, 'uploads/attachments/email_id_7-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(7, 'uploads/attachments/email_id_7-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(8, 'uploads/attachments/email_id_8-AGB.pdf', 'AGB.pdf'),
	(8, 'uploads/attachments/email_id_8-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(8, 'uploads/attachments/email_id_8-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(9, 'uploads/attachments/email_id_9-AGB.pdf', 'AGB.pdf'),
	(9, 'uploads/attachments/email_id_9-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(9, 'uploads/attachments/email_id_9-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(10, 'uploads/attachments/email_id_10-AGB.pdf', 'AGB.pdf'),
	(10, 'uploads/attachments/email_id_10-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(10, 'uploads/attachments/email_id_10-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(11, 'uploads/attachments/email_id_11-AGB.pdf', 'AGB.pdf'),
	(11, 'uploads/attachments/email_id_11-Widerrufsrecht.pdf', 'Widerrufsrecht.pdf'),
	(11, 'uploads/attachments/email_id_11-Muster-Widerrufsformular.pdf', 'Muster-Widerrufsformular.pdf'),
	(12, 'uploads/attachments/email_id_12-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(12, 'uploads/attachments/email_id_12-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(12, 'uploads/attachments/email_id_12-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(12, 'uploads/attachments/email_id_12-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(13, 'uploads/attachments/email_id_13-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(13, 'uploads/attachments/email_id_13-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(13, 'uploads/attachments/email_id_13-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(13, 'uploads/attachments/email_id_13-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(14, 'uploads/attachments/email_id_14-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(14, 'uploads/attachments/email_id_14-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(14, 'uploads/attachments/email_id_14-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(14, 'uploads/attachments/email_id_14-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(15, 'uploads/attachments/email_id_15-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(15, 'uploads/attachments/email_id_15-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(15, 'uploads/attachments/email_id_15-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(15, 'uploads/attachments/email_id_15-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(16, 'uploads/attachments/email_id_16-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(16, 'uploads/attachments/email_id_16-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(16, 'uploads/attachments/email_id_16-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(16, 'uploads/attachments/email_id_16-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(17, 'uploads/attachments/email_id_17-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(17, 'uploads/attachments/email_id_17-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(17, 'uploads/attachments/email_id_17-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(17, 'uploads/attachments/email_id_17-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(18, 'uploads/attachments/email_id_18-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(18, 'uploads/attachments/email_id_18-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(18, 'uploads/attachments/email_id_18-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(18, 'uploads/attachments/email_id_18-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf'),
	(19, 'uploads/attachments/email_id_19-General_Terms_&_Conditions.pdf', 'General_Terms_&_Conditions.pdf'),
	(19, 'uploads/attachments/email_id_19-Privacy_Notice.pdf', 'Privacy_Notice.pdf'),
	(19, 'uploads/attachments/email_id_19-Cancellation_right.pdf', 'Cancellation_right.pdf'),
	(19, 'uploads/attachments/email_id_19-Model_withdrawal_form.pdf', 'Model_withdrawal_form.pdf');



--
-- Dumping data for table `email_contacts`
--

TRUNCATE TABLE `email_contacts`;

INSERT INTO `email_contacts` (`email_id`, `email_address`, `contact_type`, `contact_name`)
VALUES (1, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(1, 'gjhgjh@web.de', 'recipient', 'Sven Schulte'),
	(1, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(2, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(2, 'euzteuz@web.de', 'recipient', 'Susanne Meier'),
	(2, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(3, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(3, '123gjhjg@web.de', 'recipient', 'Halil Yilmaz'),
	(3, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(4, 'juhu@web.de', 'reply_to', 'Lennard Kläfker'),
	(4, 'testshopimage@gambio.de', 'recipient', 'testshopimage'),
	(4, 'juhu@web.de', 'sender', 'Lennard Kläfker'),
	(5, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(5, 'juhu@web.de', 'recipient', 'Lennard Kläfker'),
	(5, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(6, 'testshopimage@gambio.de', 'reply_to', 'Max Mustermann'),
	(6, 'testshopimage@gambio.de', 'recipient', 'testshopimage'),
	(6, 'testshopimage@gambio.de', 'sender', 'Max Mustermann'),
	(7, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(7, 'testshopimage@gambio.de', 'recipient', 'Max Mustermann'),
	(7, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(8, 'testshopimage@gambio.de', 'reply_to', 'Max Mustermann'),
	(8, 'testshopimage@gambio.de', 'recipient', 'testshopimage'),
	(8, 'testshopimage@gambio.de', 'sender', 'Max Mustermann'),
	(9, 'testshopimage@gambio.de', 'reply_to', 'Muster &amp; co.'),
	(9, 'testshopimage@gambio.de', 'recipient', 'Max Mustermann'),
	(9, 'testshopimage@gambio.de', 'sender', 'Muster &amp; co.'),
	(10, 'schnadt@gambio.de', 'reply_to', 'Daniel Schnadt'),
	(10, 'marcus.goede@meco-media.com', 'recipient', 'image20170208'),
	(10, 'schnadt@gambio.de', 'sender', 'Daniel Schnadt'),
	(11, 'marcus.goede@meco-media.com', 'reply_to', 'Muster &amp; co.'),
	(11, 'schnadt@gambio.de', 'recipient', 'Daniel Schnadt'),
	(11, 'marcus.goede@meco-media.com', 'sender', 'Muster &amp; co.'),
	(12, 'gjhgjh@web.de', 'sender', 'Sven Schulte'),
	(12, 'finn@thebuilders.de', 'recipient', 'basimagebase1'),
	(12, 'gjhgjh@web.de', 'reply_to', 'Sven Schulte'),
	(13, 'finn@thebuilders.de', 'sender', 'Muster &amp; co.'),
	(13, 'gjhgjh@web.de', 'recipient', 'Sven Schulte'),
	(13, 'finn@thebuilders.de', 'reply_to', 'Muster &amp; co.'),
	(14, 'euzteuz@web.de', 'sender', 'Susanne Meier'),
	(14, 'finn@thebuilders.de', 'recipient', 'basimagebase1'),
	(14, 'euzteuz@web.de', 'reply_to', 'Susanne Meier'),
	(15, 'finn@thebuilders.de', 'sender', 'Muster &amp; co.'),
	(15, 'euzteuz@web.de', 'recipient', 'Susanne Meier'),
	(15, 'finn@thebuilders.de', 'reply_to', 'Muster &amp; co.'),
	(16, '123gjhjg@web.de', 'sender', 'Halil Yilmaz'),
	(16, 'finn@thebuilders.de', 'recipient', 'basimagebase1'),
	(16, '123gjhjg@web.de', 'reply_to', 'Halil Yilmaz'),
	(17, 'finn@thebuilders.de', 'sender', 'Muster &amp; co.'),
	(17, '123gjhjg@web.de', 'recipient', 'Halil Yilmaz'),
	(17, 'finn@thebuilders.de', 'reply_to', 'Muster &amp; co.'),
	(18, 'gjhgjh@web.de', 'sender', 'Sven Schulte'),
	(18, 'finn@thebuilders.de', 'recipient', 'basimagebase1'),
	(18, 'gjhgjh@web.de', 'reply_to', 'Sven Schulte'),
	(19, 'finn@thebuilders.de', 'sender', 'Muster &amp; co.'),
	(19, 'gjhgjh@web.de', 'recipient', 'Sven Schulte'),
	(19, 'finn@thebuilders.de', 'reply_to', 'Muster &amp; co.');


--
-- Dumping data for table `feature`
--

TRUNCATE TABLE `feature`;

INSERT INTO `feature` (`feature_id`)
VALUES (1),
	(2),
	(3),
	(5),
	(6),
	(7),
	(8),
	(9),
	(10),
	(11),
	(12),
	(13),
	(14),
	(15);


--
-- Dumping data for table `feature_description`
--

TRUNCATE TABLE `feature_description`;

INSERT INTO `feature_description` (`feature_id`, `language_id`, `feature_name`, `feature_admin_name`)
VALUES (1, 2, 'Material', 'Material'),
	(2, 2, 'Produktart', 'Produktart'),
	(3, 2, 'Farbe', 'Farbe'),
	(5, 2, 'Typ', 'Typ'),
	(6, 2, 'Hersteller', 'Hersteller'),
	(7, 2, 'Alter', 'Alter'),
	(8, 2, 'Geschlecht', 'Geschlecht'),
	(9, 2, 'Größe', 'Größe'),
	(10, 2, 'Schnitt', 'Schnitt'),
	(11, 2, 'Ärmellänge', 'Ärmellänge'),
	(12, 2, 'Verschluss', 'Verschluss'),
	(13, 2, 'Schuhgröße', 'Schuhgröße'),
	(14, 2, 'Breite', 'Breite'),
	(15, 2, 'Muster', 'Muster');


--
-- Dumping data for table `feature_index`
--

TRUNCATE TABLE `feature_index`;

INSERT INTO `feature_index` (`feature_set_id`, `date_created`, `feature_value_index`)
VALUES (2, NULL, '-1--2--3--4--5--6--7-'),
	(4, NULL, '-9--10--11-'),
	(5, NULL, '-1--3--12--13--14--15--16-'),
	(6, NULL, '-12--13--17--18--19-'),
	(7, NULL, '-20--21--22-'),
	(8, NULL, '-21--22--23-'),
	(9, NULL, '-20--21--22--23-'),
	(10, NULL, '-24-'),
	(11, NULL, '-7--12--25--26--27--28--29--30-'),
	(12, NULL, '-12--18--32--33--34--35--36--37--38--39-'),
	(13, NULL, '-16--40--41-'),
	(14, NULL, '-12--14--18--21--42--43--44--45--46--47--48--49--50-');

--
-- Dumping data for table `feature_set`
--

TRUNCATE TABLE `feature_set`;

INSERT INTO `feature_set` (`feature_set_id`)
VALUES (2),
	(4),
	(5),
	(6),
	(7),
	(8),
	(9),
	(10),
	(11),
	(12),
	(13),
	(14);


--
-- Dumping data for table `feature_set_to_products`
--

TRUNCATE TABLE `feature_set_to_products`;

INSERT INTO `feature_set_to_products` (`feature_set_id`, `products_id`)
VALUES (2, 8),
	(4, 9),
	(5, 10),
	(6, 11),
	(7, 12),
	(8, 13),
	(9, 14),
	(10, 15),
	(11, 16),
	(4, 17),
	(12, 19),
	(13, 22),
	(14, 23);


--
-- Dumping data for table `feature_set_values`
--

TRUNCATE TABLE `feature_set_values`;

INSERT INTO `feature_set_values` (`feature_set_id`, `feature_value_id`)
VALUES (2, 1),
	(2, 2),
	(2, 3),
	(2, 4),
	(2, 5),
	(2, 6),
	(2, 7),
	(4, 9),
	(4, 10),
	(4, 11),
	(5, 1),
	(5, 3),
	(5, 12),
	(5, 13),
	(5, 14),
	(5, 15),
	(5, 16),
	(6, 12),
	(6, 13),
	(6, 17),
	(6, 18),
	(6, 19),
	(7, 20),
	(7, 21),
	(7, 22),
	(8, 21),
	(8, 22),
	(8, 23),
	(9, 20),
	(9, 21),
	(9, 22),
	(9, 23),
	(10, 24),
	(11, 7),
	(11, 12),
	(11, 25),
	(11, 26),
	(11, 27),
	(11, 28),
	(11, 29),
	(11, 30),
	(12, 12),
	(12, 18),
	(12, 32),
	(12, 33),
	(12, 34),
	(12, 35),
	(12, 36),
	(12, 37),
	(12, 38),
	(12, 39),
	(13, 16),
	(13, 40),
	(13, 41),
	(14, 12),
	(14, 14),
	(14, 18),
	(14, 21),
	(14, 42),
	(14, 43),
	(14, 44),
	(14, 45),
	(14, 46),
	(14, 47),
	(14, 48),
	(14, 49),
	(14, 50);


--
-- Dumping data for table `feature_value`
--

TRUNCATE TABLE `feature_value`;

INSERT INTO `feature_value` (`feature_value_id`, `feature_id`, `sort_order`)
VALUES (1, 1, 0),
	(2, 1, 0),
	(3, 2, 0),
	(4, 3, 0),
	(5, 3, 0),
	(6, 3, 0),
	(7, 3, 0),
	(9, 5, 0),
	(10, 6, 0),
	(11, 2, 0),
	(12, 3, 0),
	(13, 3, 0),
	(14, 3, 0),
	(15, 1, 0),
	(16, 3, 0),
	(17, 1, 0),
	(18, 3, 0),
	(19, 2, 0),
	(20, 7, 0),
	(21, 8, 0),
	(22, 8, 0),
	(23, 7, 0),
	(24, 2, 0),
	(25, 9, 0),
	(26, 9, 0),
	(27, 9, 0),
	(28, 9, 0),
	(29, 10, 0),
	(30, 2, 0),
	(31, 11, 0),
	(32, 1, 0),
	(33, 12, 0),
	(34, 13, 0),
	(35, 13, 0),
	(36, 13, 0),
	(37, 13, 0),
	(38, 13, 0),
	(39, 3, 0),
	(40, 14, 0),
	(41, 2, 0),
	(42, 9, 0),
	(43, 9, 0),
	(44, 9, 0),
	(45, 9, 0),
	(46, 9, 0),
	(47, 2, 0),
	(48, 11, 0),
	(49, 15, 0),
	(50, 15, 0);


--
-- Dumping data for table `feature_value_description`
--

TRUNCATE TABLE `feature_value_description`;

INSERT INTO `feature_value_description` (`feature_value_id`, `language_id`, `feature_value_text`)
VALUES (1, 2, 'Holz'),
	(2, 2, 'Stoff'),
	(3, 2, 'Stühle'),
	(4, 2, 'grau'),
	(5, 2, 'grün'),
	(6, 2, 'orange'),
	(7, 2, 'schwarz'),
	(9, 2, 'Kohlegrills'),
	(10, 2, 'Platinum'),
	(11, 2, 'Grills'),
	(12, 2, 'rot'),
	(13, 2, 'beige'),
	(14, 2, 'blau'),
	(15, 2, 'Teakholz'),
	(16, 2, 'braun'),
	(17, 2, 'Materialmix'),
	(18, 2, 'farbmix'),
	(19, 2, 'Sessel'),
	(20, 2, '12 - 24 Monate'),
	(21, 2, 'Junge'),
	(22, 2, 'Mädchen'),
	(23, 2, '3 - 5 Jahre'),
	(24, 2, 'Jacken'),
	(25, 2, 'S'),
	(26, 2, 'M'),
	(27, 2, 'L'),
	(28, 2, 'XL'),
	(29, 2, 'klassisch'),
	(30, 2, 'Shirts & Tops'),
	(31, 2, 'kurzarm'),
	(32, 2, 'Kunststoff'),
	(33, 2, 'Schnürschuhe'),
	(34, 2, '36'),
	(35, 2, '37'),
	(36, 2, '38'),
	(37, 2, '39'),
	(38, 2, '40'),
	(39, 2, 'weiß'),
	(40, 2, '80cm bis 120cm'),
	(41, 2, 'Schränke'),
	(42, 2, '56'),
	(43, 2, '68'),
	(44, 2, '80'),
	(45, 2, '92'),
	(46, 2, '104'),
	(47, 2, 'Strampler'),
	(48, 2, 'langarm'),
	(49, 2, 'bedruckt'),
	(50, 2, 'gestreift');



--
-- Dumping data for table `gm_prd_img_alt`
--

TRUNCATE TABLE `gm_prd_img_alt`;

INSERT INTO `gm_prd_img_alt` (`img_alt_id`, `image_id`, `products_id`, `language_id`, `gm_alt_text`)
VALUES (381, 212, 12, 1, ''),
	(382, 212, 12, 2, ''),
	(383, 213, 12, 1, ''),
	(384, 213, 12, 2, ''),
	(385, 214, 12, 1, ''),
	(386, 214, 12, 2, ''),
	(435, 239, 9, 1, ''),
	(436, 239, 9, 2, ''),
	(437, 240, 9, 1, ''),
	(438, 240, 9, 2, ''),
	(439, 241, 9, 1, ''),
	(440, 241, 9, 2, ''),
	(441, 242, 7, 1, ''),
	(442, 242, 7, 2, ''),
	(443, 243, 7, 1, ''),
	(444, 243, 7, 2, ''),
	(445, 244, 11, 1, ''),
	(446, 244, 11, 2, ''),
	(447, 245, 11, 1, ''),
	(448, 245, 11, 2, ''),
	(449, 246, 11, 1, ''),
	(450, 246, 11, 2, ''),
	(451, 247, 11, 1, ''),
	(452, 247, 11, 2, ''),
	(463, 253, 8, 1, ''),
	(464, 253, 8, 2, ''),
	(465, 254, 8, 1, ''),
	(466, 254, 8, 2, ''),
	(467, 255, 8, 1, ''),
	(468, 255, 8, 2, ''),
	(473, 258, 10, 1, ''),
	(474, 258, 10, 2, ''),
	(475, 259, 10, 1, ''),
	(476, 259, 10, 2, ''),
	(645, 49, 6, 1, ''),
	(646, 49, 6, 2, ''),
	(647, 50, 6, 1, ''),
	(648, 50, 6, 2, ''),
	(649, 51, 6, 1, ''),
	(650, 51, 6, 2, '');



--
-- Dumping data for table `orders`
--

TRUNCATE TABLE `orders`;

INSERT INTO `orders` (`orders_id`, `customers_id`, `customers_cid`, `customers_vat_id`, `customers_status`,
                      `customers_status_name`, `customers_status_image`, `customers_status_discount`, `customers_name`,
                      `customers_firstname`, `customers_lastname`, `customers_gender`, `customers_company`,
                      `customers_street_address`, `customers_house_number`, `customers_additional_info`,
                      `customers_suburb`, `customers_city`, `customers_postcode`, `customers_state`,
                      `customers_country`, `customers_telephone`, `customers_email_address`,
                      `customers_address_format_id`, `delivery_name`, `delivery_firstname`, `delivery_lastname`,
                      `delivery_gender`, `delivery_company`, `delivery_street_address`, `delivery_house_number`,
                      `delivery_additional_info`, `delivery_suburb`, `delivery_city`, `delivery_postcode`,
                      `delivery_state`, `delivery_country`, `delivery_country_iso_code_2`, `delivery_address_format_id`,
                      `billing_name`, `billing_firstname`, `billing_lastname`, `billing_gender`, `billing_company`,
                      `billing_street_address`, `billing_house_number`, `billing_additional_info`, `billing_suburb`,
                      `billing_city`, `billing_postcode`, `billing_state`, `billing_country`,
                      `billing_country_iso_code_2`, `billing_address_format_id`, `payment_method`, `cc_type`,
                      `cc_owner`, `cc_number`, `cc_expires`, `cc_start`, `cc_issue`, `cc_cvv`, `comments`,
                      `last_modified`, `date_purchased`, `orders_status`, `orders_date_finished`, `currency`,
                      `currency_value`, `account_type`, `payment_class`, `shipping_method`, `shipping_class`,
                      `order_total_weight`, `customers_ip`, `language`, `afterbuy_success`, `afterbuy_id`,
                      `refferers_id`, `conversion_type`, `orders_ident_key`,
                      `gm_order_send_date`, `gm_send_order_status`, `gm_cancel_date`, `abandonment_download`,
                      `abandonment_service`, `orders_hash`, `exported`, `gambio_hub_module`, `gambio_hub_module_title`,
                      `gambio_hub_transaction_code`)
VALUES (400210, 3, '3', '', 2, 'New customer', 'customer_status.gif', '0.00', 'Sven Schulte', 'Sven', 'Schulte', 'm',
        '', 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', '', 'gjhgjh@web.de', 5, 'Sven Schulte', 'Sven',
        'Schulte', 'm', '', 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', 'DE', 5, 'Sven Schulte', 'Sven',
        'Schulte', 'm', '', 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', 'DE', 5, 'cash', '', '', '', '',
        '', '', '123', '', '2020-05-04 11:53:05', '2020-05-04 13:53:04', 1, NULL, 'EUR', '1.00000000', 0, 'cash',
        'Self Pickup. (Self Pickup from our company.)', 'selfpickup_selfpickup', 0.0000, '', 'english', 0, 0, '0', 2,
        NULL,
        '2020-05-04 11:53:05', 0, '2017-01-26 00:00:00', 0, 0, '3222213271', 0, '', '', ''),
	(400211, 4, '4', '', 2, 'New customer', 'customer_status.gif', '0.00', 'Susanne Meier', 'Susanne', 'Meier', 'f',
	 'Gambio GmbH', 'Parallelweg, 30', '', '', '', 'Bremen', '28219', '', 'Germany', '', 'euzteuz@web.de', 5,
	 'Susanne Meier', 'Susanne', 'Meier', 'f', 'Gambio GmbH', 'Parallelweg, 30', '', '', '', 'Bremen', '28219', '',
	 'Germany', 'DE', 5, 'Susanne Meier', 'Susanne', 'Meier', 'f', 'Gambio GmbH', 'Parallelweg, 30', '', '', '',
	 'Bremen',
	 '28219', '', 'Germany', 'DE', 5, 'cash', '', '', '', '', '', '', '123', '', '2020-05-04 11:55:56',
	 '2020-05-04 13:55:56', 1, NULL, 'EUR', '1.00000000', 0, 'cash', 'Table Rate (Best way)', 'table_table', 0.0000, '',
	 'english', 0, 0, '0', 2, NULL,
	 '2020-05-04 11:55:56', 0, '2017-01-26 00:00:00', 0, 0, '3067791464', 0, '', '', ''),
	(400212, 5, '5', '', 2, 'New customer', 'customer_status.gif', '0.00', 'Halil Yilmaz', 'Halil', 'Yilmaz', 'm', '',
	 'Lanstraße 23', '', '', '', 'Test', '12345', '', 'Germany', '', '123gjhjg@web.de', 5, 'Halil Yilmaz', 'Halil',
	 'Yilmaz', 'm', '', 'Lanstraße 23', '', '', '', 'Test', '12345', '', 'Germany', 'DE', 5, 'Halil Yilmaz', 'Halil',
	 'Yilmaz', 'm', '', 'Lanstraße 23', '', '', '', 'Test', '12345', '', 'Germany', 'DE', 5, 'cash', '', '', '', '', '',
	 '',
	 '123', '', '2020-05-04 12:02:33', '2020-05-04 14:02:33', 1, NULL, 'EUR', '1.00000000', 0, 'cash',
	 'Table Rate (Best way)', 'table_table', 0.0000, '', 'english', 0, 0, '0', 2, NULL,
	 '2020-05-04 12:02:33', 0, '2017-01-26 00:00:00', 0, 0, '2750539624', 0, '', '', ''),
	(400213, 3, '3', '', 2, 'New customer', 'customer_status.gif', '0.00', 'Sven Schulte', 'Sven', 'Schulte', 'm', '',
	 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', '', 'gjhgjh@web.de', 5, 'Sven Schulte', 'Sven',
	 'Schulte',
	 'm', '', 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', 'DE', 5, 'Sven Schulte', 'Sven', 'Schulte',
	 'm',
	 '', 'teststraße 1', '', '', '', 'test', '12345', '', 'Germany', 'DE', 5, 'cash', '', '', '', '', '', '', '123', '',
	 '2020-05-04 12:03:40', '2020-05-04 14:03:40', 1, NULL, 'EUR', '1.00000000', 0, 'cash', 'Table Rate (Best way)',
	 'table_table', 0.0000, '', 'english', 0, 0, '0', 2, NULL,
	 '2020-05-04 12:03:40', 0, '2017-01-26 00:00:00', 0, 0, '2424520048', 0, '', '', '');

--
-- Dumping data for table `orders_products`
--

TRUNCATE TABLE `orders_products`;

INSERT INTO `orders_products` (`orders_products_id`, `orders_id`, `products_id`, `products_model`, `products_name`,
                               `products_price`, `products_discount_made`, `products_shipping_time`, `final_price`,
                               `products_tax`, `products_quantity`, `allow_tax`, `product_type`,
                               `properties_combi_price`, `properties_combi_model`, `checkout_information`)
VALUES (1, 400210, 6, 'ABC123', 'Sneaker Swag 1', '64.9500', '0.00', 'ca. 3-4 days', '64.9500', '19.0000', '1.0000', 1,
        1, '0.0000', '', ''),
	(2, 400211, 5, 'ABC123', 'Sneaker Swag 2', '15.0000', '0.00', 'ca. 3-4 days', '60.0000', '19.0000', '4.0000', 1, 1,
	 '0.0000', '', ''),
	(3, 400211, 2, 'ABC123', 'Sneaker Swag 5', '15.0000', '0.00', 'ca. 3-4 days', '30.0000', '19.0000', '2.0000', 1, 1,
	 '0.0000', '', ''),
	(4, 400211, 1, 'ABC123', 'Sneaker Swag 6', '15.0000', '0.00', 'ca. 3-4 days', '45.0000', '19.0000', '3.0000', 1, 1,
	 '0.0000', '', ''),
	(5, 400212, 8, 'ABC123', 'Test Article 2', '19.9900', '0.00', 'ca. 3-4 days', '19.9900', '19.0000', '1.0000', 1, 1,
	 '0.0000', '', ''),
	(6, 400212, 10, 'ABC123', 'Test Article 4', '19.9900', '0.00', 'ca. 3-4 days', '19.9900', '19.0000', '1.0000', 1, 1,
	 '0.0000', '', ''),
	(7, 400213, 4, 'ABC123', 'Sneaker Swag 3', '15.0000', '0.00', 'ca. 3-4 days', '45.0000', '19.0000', '3.0000', 1, 1,
	 '0.0000', '', '');



--
-- Dumping data for table `orders_status`
--

TRUNCATE TABLE `orders_status`;

INSERT INTO `orders_status` (`orders_status_id`, `language_id`, `orders_status_name`, `color`)
VALUES (0, 1, 'Not validated', 'e0412c'),
	(0, 2, 'Nicht bestätigt', 'e0412c'),
	(1, 1, 'Pending', 'f5ae49'),
	(1, 2, 'Offen', 'f5ae49'),
	(2, 1, 'Processing', '0c7fda'),
	(2, 2, 'In Bearbeitung', '0c7fda'),
	(3, 1, 'Delivered', '45a845'),
	(3, 2, 'Versendet', '45a845'),
	(99, 1, 'Canceled', 'e0412c'),
	(99, 2, 'Storniert', 'e0412c'),
	(149, 1, 'Invoice created', '45a845'),
	(149, 2, 'Rechnung erstellt', '45a845'),
	(160, 1, 'ipayment temporary', '2196F3'),
	(160, 2, 'ipayment temporaer', '2196F3'),
	(161, 1, 'ipayment paid', '45a845'),
	(161, 2, 'ipayment bezahlt', '45a845'),
	(162, 1, 'ipayment error', 'e0412c'),
	(162, 2, 'ipayment Fehler', 'e0412c');


--
-- Dumping data for table `orders_status_history`
--

TRUNCATE TABLE `orders_status_history`;

INSERT INTO `orders_status_history` (`orders_status_history_id`, `orders_id`, `orders_status_id`, `date_added`,
                                     `customer_notified`, `comments`, `customer_id`)
VALUES (1, 400210, 1, '2020-05-04 13:53:04', 1, '', 0),
	(2, 400211, 1, '2020-05-04 13:55:56', 1, '', 0),
	(3, 400212, 1, '2020-05-04 14:02:33', 1, '', 0),
	(4, 400213, 1, '2020-05-04 14:03:40', 1, '', 0);



--
-- Dumping data for table `orders_tax_sum_items`
--

TRUNCATE TABLE `orders_tax_sum_items`;

INSERT INTO `orders_tax_sum_items` (`orders_tax_sum_item_id`, `tax_class`, `tax_zone`, `tax_rate`, `gross`, `net`,
                                    `tax`, `currency`, `order_id`, `insert_date`, `last_change_datetime`,
                                    `tax_description`)
VALUES (1, 'Standardsatz', 'Steuerzone EU', '19.0000', '64.9489', '54.5789', '10.3700', 'EUR', 1, '2020-05-04 13:53:06',
        '2020-05-04 13:53:06', '19% MwSt.'),
	(2, 'Standardsatz', 'Steuerzone EU', '19.0000', '141.8605', '119.2105', '22.6500', 'EUR', 2, '2020-05-04 13:55:56',
	 '2020-05-04 13:55:56', '19% MwSt.'),
	(3, 'Standardsatz', 'Steuerzone EU', '19.0000', '46.8484', '39.3684', '7.4800', 'EUR', 3, '2020-05-04 14:02:33',
	 '2020-05-04 14:02:33', '19% MwSt.'),
	(4, 'Standardsatz', 'Steuerzone EU', '19.0000', '51.8589', '43.5789', '8.2800', 'EUR', 4, '2020-05-04 14:03:41',
	 '2020-05-04 14:03:41', '19% MwSt.');



--
-- Dumping data for table `orders_total`
--

TRUNCATE TABLE `orders_total`;

INSERT INTO `orders_total` (`orders_total_id`, `orders_id`, `title`, `text`, `value`, `class`, `sort_order`)
VALUES (1, 400210, 'Subtotal:', '64,95 EUR', '64.9500', 'ot_subtotal', 10),
	(2, 400210, 'Self Pickup. (Self Pickup from our company.):', '0,00 EUR', '0.0000', 'ot_shipping', 30),
	(3, 400210, 'incl. 19% tax:', '10,37 EUR', '10.3700', 'ot_tax', 97),
	(4, 400210, 'Total, No Tax:', '54,58 EUR', '54.5800', 'ot_total_netto', 98),
	(5, 400210, '<b>Total</b>:', '<b>64,95 EUR</b>', '64.9500', 'ot_total', 99),
	(6, 400211, 'Subtotal:', '135,00 EUR', '135.0000', 'ot_subtotal', 10),
	(7, 400211, 'Table Rate (Best way):', '6,90 EUR', '6.9000', 'ot_shipping', 30),
	(8, 400211, 'incl. 19% tax:', '22,65 EUR', '22.6500', 'ot_tax', 97),
	(9, 400211, 'Total, No Tax:', '119,25 EUR', '119.2500', 'ot_total_netto', 98),
	(10, 400211, '<b>Total</b>:', '<b>141,90 EUR</b>', '141.9000', 'ot_total', 99),
	(11, 400212, 'Subtotal:', '39,98 EUR', '39.9800', 'ot_subtotal', 10),
	(12, 400212, 'Table Rate (Best way):', '6,90 EUR', '6.9000', 'ot_shipping', 30),
	(13, 400212, 'incl. 19% tax:', '7,48 EUR', '7.4800', 'ot_tax', 97),
	(14, 400212, 'Total, No Tax:', '39,40 EUR', '39.4000', 'ot_total_netto', 98),
	(15, 400212, '<b>Total</b>:', '<b>46,88 EUR</b>', '46.8800', 'ot_total', 99),
	(16, 400213, 'Subtotal:', '45,00 EUR', '45.0000', 'ot_subtotal', 10),
	(17, 400213, 'Table Rate (Best way):', '6,90 EUR', '6.9000', 'ot_shipping', 30),
	(18, 400213, 'incl. 19% tax:', '8,28 EUR', '8.2800', 'ot_tax', 97),
	(19, 400213, 'Total, No Tax:', '43,62 EUR', '43.6200', 'ot_total_netto', 98),
	(20, 400213, '<b>Total</b>:', '<b>51,90 EUR</b>', '51.9000', 'ot_total', 99);


--
-- Dumping data for table `personal_offers_by_customers_status_1`
--

TRUNCATE TABLE `personal_offers_by_customers_status_1`;

INSERT INTO `personal_offers_by_customers_status_1` (`price_id`, `products_id`, `quantity`, `personal_offer`)
VALUES (1, 6, '1.0000', '0.0000'),
	(2, 7, '1.0000', '0.0000'),
	(3, 8, '1.0000', '0.0000'),
	(4, 9, '1.0000', '0.0000'),
	(5, 10, '1.0000', '0.0000'),
	(6, 11, '1.0000', '0.0000'),
	(7, 12, '1.0000', '0.0000');

--
-- Dumping data for table `personal_offers_by_customers_status_2`
--

TRUNCATE TABLE `personal_offers_by_customers_status_2`;

INSERT INTO `personal_offers_by_customers_status_2` (`price_id`, `products_id`, `quantity`, `personal_offer`)
VALUES (1, 6, '1.0000', '0.0000'),
	(2, 7, '1.0000', '0.0000'),
	(3, 8, '1.0000', '0.0000'),
	(4, 9, '1.0000', '0.0000'),
	(5, 10, '1.0000', '0.0000'),
	(6, 11, '1.0000', '0.0000'),
	(7, 12, '1.0000', '0.0000');


--
-- Dumping data for table `personal_offers_by_customers_status_3`
--

TRUNCATE TABLE `personal_offers_by_customers_status_3`;

INSERT INTO `personal_offers_by_customers_status_3` (`price_id`, `products_id`, `quantity`, `personal_offer`)
VALUES (1, 6, '1.0000', '83.1933'),
	(2, 7, '1.0000', '10.0840'),
	(3, 8, '1.0000', '21.0084'),
	(4, 9, '1.0000', '37.8151'),
	(5, 10, '1.0000', '65.5462'),
	(6, 11, '1.0000', '462.1849'),
	(7, 12, '1.0000', '0.0000');



--
-- Dumping data for table `products`
--

TRUNCATE TABLE `products`;

INSERT INTO `products` (`products_id`, `products_ean`, `products_quantity`, `products_shippingtime`, `products_model`,
                        `group_permission_0`, `group_permission_1`, `group_permission_2`, `group_permission_3`,
                        `products_sort`, `products_image`, `products_price`, `products_discount_allowed`,
                        `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`,
                        `products_status`, `products_tax_class_id`, `product_template`, `options_template`,
                        `manufacturers_id`, `products_ordered`, `products_fsk18`, `products_vpe`, `products_vpe_status`,
                        `products_vpe_value`, `products_startpage`, `products_startpage_sort`, `group_ids`,
                        `nc_ultra_shipping_costs`, `gm_show_date_added`, `gm_show_price_offer`, `gm_show_weight`,
                        `gm_price_status`, `gm_min_order`, `gm_graduated_qty`, `gm_options_template`, `gm_priority`,
                        `gm_changefreq`, `gm_show_qty_info`, `gm_sitemap_entry`, `products_image_w`, `products_image_h`,
                        `gm_show_image`, `properties_dropdown_mode`, `properties_show_price`,
                        `use_properties_combis_weight`, `use_properties_combis_quantity`,
                        `use_properties_combis_shipping_time`, `product_type`)
VALUES (1, '', '995.0000', 1, 'ABC123', 0, 0, 0, 0, 6, 'sneaker-swag-2.jpg', '75.5882', '0.00', '2008-08-08 17:19:46',
        '2020-05-05 08:38:06', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html',
        0, '4.0000', 0, 0, 0, '0.0000', 1, 6, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000',
        'product_options_dropdown.html', '0.5', 'daily', 1, 1, 150, 100, 1, '', '', 0, 0, 0, 1),
	(2, '', '996.0000', 1, 'ABC123', 0, 0, 0, 0, 5, 'sneaker-swag-6.jpg', '75.5882', '0.00', '2020-03-06 14:11:53',
	 '2020-05-05 08:38:01', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '2.0000', 0, 0, 0, '0.0000', 1, 5, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 150, 100, 1, '', '', 0, 0, 0, 1),
	(3, '', '998.0000', 1, 'ABC123', 0, 0, 0, 0, 4, 'sneaker-swag-5.jpg', '75.5882', '0.00', '2020-03-06 14:12:13',
	 '2020-05-05 08:37:58', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '0.0000', 0, 0, 0, '0.0000', 1, 4, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 150, 100, 1, '', '', 0, 0, 0, 1),
	(4, '', '995.0000', 1, 'ABC123', 0, 0, 0, 0, 3, 'sneaker-swag-4.jpg', '75.5882', '0.00', '2020-03-06 14:12:23',
	 '2020-05-05 08:37:48', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '3.0000', 0, 0, 0, '0.0000', 1, 3, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 150, 100, 1, '', '', 0, 0, 0, 1),
	(5, '', '994.0000', 1, 'ABC123', 0, 0, 0, 0, 2, 'sneaker-swag-3.jpg', '75.5882', '0.00', '2020-03-06 14:12:31',
	 '2020-05-05 08:37:43', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '4.0000', 0, 0, 0, '0.0000', 1, 2, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 150, 100, 1, '', '', 0, 0, 0, 1),
	(6, '', '997.0000', 1, 'ABC123', 0, 0, 0, 0, 1, 'Sneaker_Swag_1-Edit.jpg', '75.5882', '0.00', '2020-03-06 14:12:41',
	 '2020-05-06 06:47:57', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '1.0000', 0, 0, 0, '0.0000', 1, 1, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 150, 100, 1, '', 'false', 0, 0, 0, 1),
	(7, '', '998.0000', 1, 'ABC123', 0, 0, 0, 0, 7, 'combined.png', '16.7983', '0.00', '2020-04-28 09:47:39',
	 '2020-04-30 14:48:39', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '0.0000', 0, 0, 0, '0.0000', 0, 7, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1),
	(8, '', '997.0000', 1, 'ABC123', 0, 0, 0, 0, 8, 'product-image-1.png', '16.7983', '0.00', '2020-04-28 09:50:07',
	 '2020-05-04 12:02:33', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '1.0000', 0, 0, 0, '0.0000', 0, 8, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1),
	(9, '', '998.0000', 1, 'ABC123', 0, 0, 0, 0, 9, 'product-image.png', '16.7983', '0.00', '2020-04-28 10:58:24',
	 '2020-05-04 10:38:58', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '0.0000', 0, 0, 0, '0.0000', 0, 9, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1),
	(10, '', '997.0000', 1, 'ABC123', 0, 0, 0, 0, 10, 'product-image.png', '16.7983', '0.00', '2020-04-28 11:00:38',
	 '2020-05-04 12:02:33', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '1.0000', 0, 0, 0, '0.0000', 0, 10, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1),
	(11, '', '998.0000', 1, 'ABC123', 0, 0, 0, 0, 11, 'product-image.png', '16.7983', '0.00', '2020-04-28 11:00:38',
	 '2020-04-30 14:48:39', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '0.0000', 0, 0, 0, '0.0000', 0, 11, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1),
	(12, '', '998.0000', 1, 'ABC123', 0, 0, 0, 0, 12, 'product-image.png', '16.7983', '0.00', '2020-04-28 11:06:12',
	 '2020-05-04 07:14:45', '2017-01-26 00:00:00', '0.0000', 1, 1, 'standard.html', 'product_options_dropdown.html', 0,
	 '0.0000', 0, 0, 0, '0.0000', 0, 12, '', '0.0000', 0, 1, 0, 0, '1.0000', '1.0000', 'product_options_dropdown.html',
	 '0.5', 'daily', 1, 1, 130, 130, 1, '', '', 0, 0, 0, 1);


--
-- Dumping data for table `products_description`
--

TRUNCATE TABLE `products_description`;

INSERT INTO `products_description` (`products_id`, `language_id`, `products_name`, `products_description`,
                                    `products_short_description`, `products_keywords`, `products_meta_title`,
                                    `products_meta_description`, `products_meta_keywords`, `products_url`,
                                    `products_viewed`, `gm_alt_text`, `gm_url_keywords`, `checkout_information`)
VALUES (1, 1, 'Sneaker Swag 6', '<p>test article description</p>', '<p>test article short description</p>', '', '', '',
        '', '', 1, 'product image', 'Sneaker-Swag-6', ''),
	(1, 2, 'Sneaker Swag 6',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Sneaker-Swag-6', ''),
	(2, 1, 'Sneaker Swag 5', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 4, 'product image', 'Sneaker-Swag-5', ''),
	(2, 2, 'Sneaker Swag 5',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 1, 'Artikelbild', 'Sneaker-Swag-5', ''),
	(3, 1, 'Sneaker Swag 4', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 1, 'product image', 'Sneaker-Swag-4', ''),
	(3, 2, 'Sneaker Swag 4',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Sneaker-Swag-4', ''),
	(4, 1, 'Sneaker Swag 3', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 33, 'product image', 'Sneaker-Swag-3', ''),
	(4, 2, 'Sneaker Swag 3',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 1, 'Artikelbild', 'Sneaker-Swag-3', ''),
	(5, 1, 'Sneaker Swag 2', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 5, 'product image', 'Sneaker-Swag-2', ''),
	(5, 2, 'Sneaker Swag 2',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Sneaker-Swag-2', ''),
	(6, 1, 'Sneaker Swag 1', '<p>\r\n	test article description\r\n</p>',
	 '<p>\r\n	test article short description\r\n</p>', '', '', '', '', '', 6, '', 'Sneaker-Swag-1', ''),
	(6, 2, 'Sneaker Swag 1',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>\r\n	Testartikel Kurzbeschreibung\r\n</p>', '', '', '', '', '', 5, '', 'Sneaker-Swag-1', ''),
	(7, 1, 'Test Article 1', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 1, 'product image', 'Test-Article-1', ''),
	(7, 2, 'Testartikel 1',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Testartikel-1', ''),
	(8, 1, 'Test Article 2', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 1, 'product image', 'Test-Article-2', ''),
	(8, 2, 'Testartikel 2',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Testartikel-2', ''),
	(9, 1, 'Test Article 3', '<p>test article description</p>', '<p>test article short description</p>', '', '', '', '',
	 '',
	 0, 'product image', 'Test-Article-3', ''),
	(9, 2, 'Testartikel 3',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 1, 'Artikelbild', 'Testartikel-3', ''),
	(10, 1, 'Test Article 4', '<p>test article description</p>', '<p>test article short description</p>', '', '', '',
	 '',
	 '', 1, 'product image', 'Test-Article-4', ''),
	(10, 2, 'Testartikel 4',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Testartikel-4', ''),
	(11, 1, 'Test Article 5', '<p>test article description</p>', '<p>test article short description</p>', '', '', '',
	 '',
	 '', 0, 'product image', 'Test-Article-5', ''),
	(11, 2, 'Testartikel 5',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Testartikel-5', ''),
	(12, 1, 'Test Article 6', '<p>test article description</p>', '<p>test article short description</p>', '', '', '',
	 '',
	 '', 0, 'product image', 'Test-Article-6', ''),
	(12, 2, 'Testartikel 6',
	 '[TAB:Seite 1] Testartikel Beschreibung Seite 1 [TAB:Seite 2] Testartikel Beschreibung Seite 2 [TAB:Seite 3] Testartikel Beschreibung Seite 3',
	 '<p>Testartikel Kurzbeschreibung</p>', '', '', '', '', '', 0, 'Artikelbild', 'Testartikel-6', '');



--
-- Dumping data for table `products_images`
--

TRUNCATE TABLE `products_images`;

INSERT INTO `products_images` (`image_id`, `products_id`, `image_nr`, `image_name`, `gm_show_image`)
VALUES (1, 1, 1, 'sneaker-swag-3.jpg', 1),
	(2, 1, 2, 'sneaker-swag-4.jpg', 1),
	(3, 1, 3, 'sneaker-swag-5.jpg', 1),
	(4, 2, 1, 'sneaker-swag-2.jpg', 1),
	(5, 2, 2, 'sneaker-swag-3.jpg', 1),
	(6, 2, 3, 'sneaker-swag-4.jpg', 1),
	(7, 3, 1, 'sneaker-swag-2.jpg', 1),
	(8, 3, 2, 'sneaker-swag-3.jpg', 1),
	(9, 3, 3, 'sneaker-swag-4.jpg', 1),
	(10, 4, 1, 'sneaker-swag-2.jpg', 1),
	(11, 4, 2, 'sneaker-swag-3.jpg', 1),
	(12, 4, 3, 'sneaker-swag-5.jpg', 1),
	(13, 5, 1, 'sneaker-swag-2.jpg', 1),
	(14, 5, 2, 'sneaker-swag-4.jpg', 1),
	(15, 5, 3, 'sneaker-swag-5.jpg', 1),
	(19, 7, 1, 'shirt-yellow.png', 1),
	(20, 7, 2, 'shirt-red.png', 1),
	(21, 7, 3, 'shirt-black.png', 1),
	(22, 8, 1, 'product-image-2.png', 1),
	(23, 8, 2, 'product-image-3.png', 1),
	(24, 8, 3, 'product-image-4.png', 1),
	(25, 9, 1, 'product-image-1.png', 1),
	(26, 9, 2, 'product-image-2.png', 1),
	(27, 9, 3, 'product-image-3.png', 1),
	(28, 10, 1, 'product-image-1.png', 1),
	(29, 10, 2, 'product-image-2.png', 1),
	(30, 10, 3, 'product-image-3.png', 1),
	(31, 11, 1, 'product-image-1.png', 1),
	(32, 11, 2, 'product-image-2.png', 1),
	(33, 11, 3, 'product-image-3.png', 1),
	(34, 12, 1, 'product-image-1.png', 1),
	(35, 12, 2, 'product-image-2.png', 1),
	(36, 12, 3, 'product-image-3.png', 1),
	(49, 6, 1, 'Sneaker_Swag_2-Edit.jpg', 1),
	(50, 6, 2, 'Sneaker_Swag_3-Edit.jpg', 1),
	(51, 6, 3, 'Sneaker_Swag_4-Edit.jpg', 1);

--
-- Dumping data for table `product_image_list_combi`
--

TRUNCATE TABLE `product_image_list_combi`;

INSERT INTO `product_image_list_combi` (`products_properties_combis_id`, `product_image_list_id`)
VALUES (277, 1),
	(278, 2),
	(279, 3),
	(280, 1),
	(281, 2),
	(282, 3),
	(283, 1),
	(284, 2),
	(285, 3);


--
-- Dumping data for table `products_item_codes`
--

TRUNCATE TABLE `products_item_codes`;

INSERT INTO `products_item_codes` (`products_id`, `code_isbn`, `code_upc`, `code_mpn`, `code_jan`,
                                   `google_export_condition_id`, `google_export_availability_id`, `brand_name`,
                                   `identifier_exists`, `gender`, `age_group`, `expiration_date`)
VALUES (1, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (2, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (3, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (4, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (5, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (6, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (7, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (8, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (9, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (10, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (11, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01'),
    (12, '', '', '', '', 1, 0, '', 0, '', '', '1000-01-01');



--
-- Dumping data for table `products_properties_admin_select`
--

TRUNCATE TABLE `products_properties_admin_select`;

INSERT INTO `products_properties_admin_select` (`products_properties_admin_select_id`, `products_id`, `properties_id`,
                                                `properties_values_id`)
VALUES (169, 6, 1, 1),
	(170, 6, 1, 2),
	(171, 6, 1, 3),
	(172, 6, 1, 7),
	(173, 6, 1, 8),
	(174, 6, 1, 9),
	(175, 6, 1, 10),
	(176, 6, 1, 11),
	(177, 6, 2, 4),
	(178, 6, 2, 5),
	(179, 6, 2, 6),
	(180, 7, 1, 12),
	(181, 7, 1, 13),
	(182, 7, 1, 14);



--
-- Dumping data for table `products_properties_combis`
--

TRUNCATE TABLE `products_properties_combis`;

INSERT INTO `products_properties_combis` (`products_properties_combis_id`, `products_id`, `sort_order`, `combi_model`,
                                          `combi_ean`, `combi_quantity`, `combi_shipping_status_id`, `combi_weight`,
                                          `combi_price_type`, `combi_price`, `products_vpe_id`, `vpe_value`)
VALUES (253, 6, 1, '39-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(254, 6, 2, '39-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(255, 6, 3, '39-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(256, 6, 4, '40-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(257, 6, 5, '40-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(258, 6, 6, '40-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(259, 6, 7, '41-gold', '', '1000.0000', 0, '0.0000', 'calc', '4.2017', 0, '0.0000'),
	(260, 6, 8, '41-red', '', '1000.0000', 0, '0.0000', 'calc', '4.2017', 0, '0.0000'),
	(261, 6, 9, '41-black', '', '1000.0000', 0, '0.0000', 'calc', '5.8824', 0, '0.0000'),
	(262, 6, 10, '42-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(263, 6, 11, '42-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(264, 6, 12, '42-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(265, 6, 13, '43-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(266, 6, 14, '43-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(267, 6, 15, '43-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(268, 6, 16, '44-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(269, 6, 17, '44-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(270, 6, 18, '44-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(271, 6, 19, '45-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(272, 6, 20, '45-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(273, 6, 21, '45-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(274, 6, 22, '46-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(275, 6, 23, '46-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(276, 6, 24, '46-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(277, 7, 1, 's-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(278, 7, 2, 's-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(279, 7, 3, 's-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(280, 7, 4, 'm-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(281, 7, 5, 'm-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(282, 7, 6, 'm-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000'),
	(283, 7, 7, 'l-gold', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(284, 7, 8, 'l-red', '', '1000.0000', 0, '0.0000', 'calc', '0.0000', 0, '0.0000'),
	(285, 7, 9, 'l-black', '', '1000.0000', 0, '0.0000', 'calc', '1.6807', 0, '0.0000');



--
-- Dumping data for table `products_properties_combis_values`
--

TRUNCATE TABLE `products_properties_combis_values`;

INSERT INTO `products_properties_combis_values` (`products_properties_combis_values_id`,
                                                 `products_properties_combis_id`, `properties_values_id`)
VALUES (571, 253, 1),
	(572, 253, 4),
	(525, 254, 1),
	(526, 254, 5),
	(527, 255, 1),
	(528, 255, 6),
	(529, 256, 2),
	(530, 256, 4),
	(531, 257, 2),
	(532, 257, 5),
	(533, 258, 2),
	(534, 258, 6),
	(535, 259, 3),
	(536, 259, 4),
	(537, 260, 3),
	(538, 260, 5),
	(539, 261, 3),
	(540, 261, 6),
	(542, 262, 4),
	(541, 262, 7),
	(544, 263, 5),
	(543, 263, 7),
	(546, 264, 6),
	(545, 264, 7),
	(548, 265, 4),
	(547, 265, 8),
	(550, 266, 5),
	(549, 266, 8),
	(552, 267, 6),
	(551, 267, 8),
	(554, 268, 4),
	(553, 268, 9),
	(556, 269, 5),
	(555, 269, 9),
	(558, 270, 6),
	(557, 270, 9),
	(560, 271, 4),
	(559, 271, 10),
	(562, 272, 5),
	(561, 272, 10),
	(564, 273, 6),
	(563, 273, 10),
	(566, 274, 4),
	(565, 274, 11),
	(568, 275, 5),
	(567, 275, 11),
	(570, 276, 6),
	(569, 276, 11),
	(592, 277, 4),
	(591, 277, 12),
	(594, 278, 5),
	(593, 278, 12),
	(596, 279, 6),
	(595, 279, 12),
	(598, 280, 4),
	(597, 280, 13),
	(600, 281, 5),
	(599, 281, 13),
	(602, 282, 6),
	(601, 282, 13),
	(604, 283, 4),
	(603, 283, 14),
	(606, 284, 5),
	(605, 284, 14),
	(608, 285, 6),
	(607, 285, 14);



--
-- Dumping data for table `products_properties_index`
--

TRUNCATE TABLE `products_properties_index`;

INSERT INTO `products_properties_index` (`products_id`, `language_id`, `properties_id`, `products_properties_combis_id`,
                                         `properties_values_id`, `properties_name`, `properties_admin_name`,
                                         `properties_sort_order`, `values_name`, `values_price`, `value_sort_order`)
VALUES (6, 1, 1, 253, 1, 'Size', 'Größe', 1, '39', '0.0000', 1),
	(6, 1, 2, 253, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 253, 1, 'Größe', 'Größe', 1, '39', '0.0000', 1),
	(6, 2, 2, 253, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 254, 1, 'Size', 'Größe', 1, '39', '0.0000', 1),
	(6, 1, 2, 254, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 2, 1, 254, 1, 'Größe', 'Größe', 1, '39', '0.0000', 1),
	(6, 2, 2, 254, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 1, 1, 255, 1, 'Size', 'Größe', 1, '39', '0.0000', 1),
	(6, 1, 2, 255, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 2, 1, 255, 1, 'Größe', 'Größe', 1, '39', '0.0000', 1),
	(6, 2, 2, 255, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 1, 1, 256, 2, 'Size', 'Größe', 1, '40', '0.0000', 2),
	(6, 1, 2, 256, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 256, 2, 'Größe', 'Größe', 1, '40', '0.0000', 2),
	(6, 2, 2, 256, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 257, 2, 'Size', 'Größe', 1, '40', '0.0000', 2),
	(6, 1, 2, 257, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 2, 1, 257, 2, 'Größe', 'Größe', 1, '40', '0.0000', 2),
	(6, 2, 2, 257, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 1, 1, 258, 2, 'Size', 'Größe', 1, '40', '0.0000', 2),
	(6, 1, 2, 258, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 2, 1, 258, 2, 'Größe', 'Größe', 1, '40', '0.0000', 2),
	(6, 2, 2, 258, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 1, 1, 259, 3, 'Size', 'Größe', 1, '41', '5.0000', 3),
	(6, 1, 2, 259, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 259, 3, 'Größe', 'Größe', 1, '41', '5.0000', 3),
	(6, 2, 2, 259, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 260, 3, 'Size', 'Größe', 1, '41', '5.0000', 3),
	(6, 1, 2, 260, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 2, 1, 260, 3, 'Größe', 'Größe', 1, '41', '5.0000', 3),
	(6, 2, 2, 260, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 1, 1, 261, 3, 'Size', 'Größe', 1, '41', '5.0000', 3),
	(6, 1, 2, 261, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 2, 1, 261, 3, 'Größe', 'Größe', 1, '41', '5.0000', 3),
	(6, 2, 2, 261, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 1, 2, 262, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 262, 7, 'Size', 'Größe', 1, '42', '0.0000', 4),
	(6, 2, 2, 262, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 262, 7, 'Größe', 'Größe', 1, '42', '0.0000', 4),
	(6, 1, 2, 263, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 1, 1, 263, 7, 'Size', 'Größe', 1, '42', '0.0000', 4),
	(6, 2, 2, 263, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 2, 1, 263, 7, 'Größe', 'Größe', 1, '42', '0.0000', 4),
	(6, 1, 2, 264, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 1, 1, 264, 7, 'Size', 'Größe', 1, '42', '0.0000', 4),
	(6, 2, 2, 264, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 2, 1, 264, 7, 'Größe', 'Größe', 1, '42', '0.0000', 4),
	(6, 1, 2, 265, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 265, 8, 'Size', 'Größe', 1, '43', '0.0000', 5),
	(6, 2, 2, 265, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 265, 8, 'Größe', 'Größe', 1, '43', '0.0000', 5),
	(6, 1, 2, 266, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 1, 1, 266, 8, 'Size', 'Größe', 1, '43', '0.0000', 5),
	(6, 2, 2, 266, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 2, 1, 266, 8, 'Größe', 'Größe', 1, '43', '0.0000', 5),
	(6, 1, 2, 267, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 1, 1, 267, 8, 'Size', 'Größe', 1, '43', '0.0000', 5),
	(6, 2, 2, 267, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 2, 1, 267, 8, 'Größe', 'Größe', 1, '43', '0.0000', 5),
	(6, 1, 2, 268, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 268, 9, 'Size', 'Größe', 1, '44', '0.0000', 6),
	(6, 2, 2, 268, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 268, 9, 'Größe', 'Größe', 1, '44', '0.0000', 6),
	(6, 1, 2, 269, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 1, 1, 269, 9, 'Size', 'Größe', 1, '44', '0.0000', 6),
	(6, 2, 2, 269, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 2, 1, 269, 9, 'Größe', 'Größe', 1, '44', '0.0000', 6),
	(6, 1, 2, 270, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 1, 1, 270, 9, 'Size', 'Größe', 1, '44', '0.0000', 6),
	(6, 2, 2, 270, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 2, 1, 270, 9, 'Größe', 'Größe', 1, '44', '0.0000', 6),
	(6, 1, 2, 271, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 271, 10, 'Size', 'Größe', 1, '45', '0.0000', 7),
	(6, 2, 2, 271, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 271, 10, 'Größe', 'Größe', 1, '45', '0.0000', 7),
	(6, 1, 2, 272, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 1, 1, 272, 10, 'Size', 'Größe', 1, '45', '0.0000', 7),
	(6, 2, 2, 272, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 2, 1, 272, 10, 'Größe', 'Größe', 1, '45', '0.0000', 7),
	(6, 1, 2, 273, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 1, 1, 273, 10, 'Size', 'Größe', 1, '45', '0.0000', 7),
	(6, 2, 2, 273, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 2, 1, 273, 10, 'Größe', 'Größe', 1, '45', '0.0000', 7),
	(6, 1, 2, 274, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 1, 1, 274, 11, 'Size', 'Größe', 1, '46', '0.0000', 8),
	(6, 2, 2, 274, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(6, 2, 1, 274, 11, 'Größe', 'Größe', 1, '46', '0.0000', 8),
	(6, 1, 2, 275, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(6, 1, 1, 275, 11, 'Size', 'Größe', 1, '46', '0.0000', 8),
	(6, 2, 2, 275, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(6, 2, 1, 275, 11, 'Größe', 'Größe', 1, '46', '0.0000', 8),
	(6, 1, 2, 276, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(6, 1, 1, 276, 11, 'Size', 'Größe', 1, '46', '0.0000', 8),
	(6, 2, 2, 276, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(6, 2, 1, 276, 11, 'Größe', 'Größe', 1, '46', '0.0000', 8),
	(7, 1, 2, 277, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 1, 1, 277, 12, 'Size', 'Größe', 1, 'S', '0.0000', 9),
	(7, 2, 2, 277, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 2, 1, 277, 12, 'Größe', 'Größe', 1, 'S', '0.0000', 9),
	(7, 1, 2, 278, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(7, 1, 1, 278, 12, 'Size', 'Größe', 1, 'S', '0.0000', 9),
	(7, 2, 2, 278, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(7, 2, 1, 278, 12, 'Größe', 'Größe', 1, 'S', '0.0000', 9),
	(7, 1, 2, 279, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(7, 1, 1, 279, 12, 'Size', 'Größe', 1, 'S', '0.0000', 9),
	(7, 2, 2, 279, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(7, 2, 1, 279, 12, 'Größe', 'Größe', 1, 'S', '0.0000', 9),
	(7, 1, 2, 280, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 1, 1, 280, 13, 'Size', 'Größe', 1, 'M', '0.0000', 10),
	(7, 2, 2, 280, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 2, 1, 280, 13, 'Größe', 'Größe', 1, 'M', '0.0000', 10),
	(7, 1, 2, 281, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(7, 1, 1, 281, 13, 'Size', 'Größe', 1, 'M', '0.0000', 10),
	(7, 2, 2, 281, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(7, 2, 1, 281, 13, 'Größe', 'Größe', 1, 'M', '0.0000', 10),
	(7, 1, 2, 282, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(7, 1, 1, 282, 13, 'Size', 'Größe', 1, 'M', '0.0000', 10),
	(7, 2, 2, 282, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(7, 2, 1, 282, 13, 'Größe', 'Größe', 1, 'M', '0.0000', 10),
	(7, 1, 2, 283, 4, 'Color', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 1, 1, 283, 14, 'Size', 'Größe', 1, 'L', '2.0000', 11),
	(7, 2, 2, 283, 4, 'Farbe', 'Farbe', 2, 'Gold', '0.0000', 1),
	(7, 2, 1, 283, 14, 'Größe', 'Größe', 1, 'L', '2.0000', 11),
	(7, 1, 2, 284, 5, 'Color', 'Farbe', 2, 'Red', '0.0000', 2),
	(7, 1, 1, 284, 14, 'Size', 'Größe', 1, 'L', '2.0000', 11),
	(7, 2, 2, 284, 5, 'Farbe', 'Farbe', 2, 'Rot', '0.0000', 2),
	(7, 2, 1, 284, 14, 'Größe', 'Größe', 1, 'L', '2.0000', 11),
	(7, 1, 2, 285, 6, 'Color', 'Farbe', 2, 'Black', '2.0000', 3),
	(7, 1, 1, 285, 14, 'Size', 'Größe', 1, 'L', '2.0000', 11),
	(7, 2, 2, 285, 6, 'Farbe', 'Farbe', 2, 'Schwarz', '2.0000', 3),
	(7, 2, 1, 285, 14, 'Größe', 'Größe', 1, 'L', '2.0000', 11);



--
-- todo: truncate products_properties_combis_defaults
--
TRUNCATE TABLE `products_properties_combis_defaults`;



--
-- Dumping data for table `products_to_categories`
--

TRUNCATE TABLE `products_to_categories`;

INSERT INTO `products_to_categories` (`products_id`, `categories_id`)
VALUES (1, 3),
	(2, 3),
	(3, 2),
	(4, 2),
	(5, 1),
	(6, 0),
	(6, 1),
	(7, 0),
	(8, 0),
	(9, 0),
	(10, 0),
	(11, 0),
	(12, 0);


--
-- Dumping data for table `products_xsell`
--

TRUNCATE TABLE `products_xsell`;

INSERT INTO `products_xsell` (`ID`, `products_id`, `products_xsell_grp_name_id`, `xsell_id`, `sort_order`)
VALUES (1, 23, 0, 13, 1),
	(2, 23, 0, 21, 1),
	(3, 23, 0, 17, 1),
	(4, 23, 0, 7, 1),
	(5, 23, 0, 11, 1),
	(6, 7, 1, 23, 1),
	(7, 21, 0, 23, 1),
	(8, 21, 0, 13, 1),
	(9, 21, 0, 17, 1),
	(10, 21, 0, 7, 1),
	(11, 21, 0, 11, 1),
	(12, 13, 1, 23, 1),
	(13, 13, 1, 21, 1),
	(14, 13, 1, 17, 1),
	(15, 13, 1, 7, 1),
	(16, 13, 1, 11, 1),
	(17, 17, 1, 23, 1),
	(18, 17, 1, 21, 1),
	(19, 17, 1, 13, 1),
	(20, 17, 1, 7, 1),
	(21, 17, 1, 11, 1),
	(23, 7, 1, 13, 1),
	(24, 7, 1, 17, 1),
	(25, 7, 1, 11, 1),
	(26, 11, 1, 23, 1),
	(27, 11, 1, 21, 1),
	(28, 11, 1, 13, 1),
	(29, 11, 1, 17, 1),
	(30, 11, 1, 7, 1),
	(31, 8, 1, 14, 1),
	(32, 8, 1, 16, 1),
	(33, 8, 1, 15, 1),
	(34, 8, 1, 18, 1),
	(35, 8, 1, 22, 1),
	(36, 14, 1, 8, 1),
	(37, 14, 1, 16, 1),
	(38, 14, 1, 15, 1),
	(39, 14, 1, 18, 1),
	(40, 14, 1, 22, 1),
	(41, 16, 1, 8, 1),
	(42, 16, 1, 14, 1),
	(43, 16, 1, 15, 1),
	(44, 16, 1, 18, 1),
	(45, 16, 1, 22, 1),
	(46, 15, 1, 8, 1),
	(47, 15, 1, 14, 1),
	(48, 15, 1, 16, 1),
	(49, 15, 1, 18, 1),
	(50, 15, 1, 22, 1),
	(51, 18, 1, 8, 1),
	(52, 18, 1, 14, 1),
	(53, 18, 1, 16, 1),
	(54, 18, 1, 15, 1),
	(55, 18, 1, 22, 1),
	(56, 22, 1, 8, 1),
	(57, 22, 1, 14, 1),
	(58, 22, 1, 16, 1),
	(59, 22, 1, 15, 1),
	(60, 22, 1, 18, 1),
	(61, 6, 1, 12, 1),
	(62, 6, 1, 19, 1),
	(63, 6, 1, 10, 1),
	(64, 6, 1, 20, 1),
	(65, 6, 1, 9, 1),
	(66, 19, 1, 6, 1),
	(67, 19, 1, 12, 1),
	(68, 19, 1, 10, 1),
	(69, 19, 1, 20, 1),
	(70, 19, 1, 9, 1),
	(71, 12, 1, 6, 1),
	(72, 12, 1, 19, 1),
	(73, 12, 1, 10, 1),
	(74, 12, 1, 20, 1),
	(75, 12, 1, 9, 1),
	(76, 10, 1, 6, 1),
	(77, 10, 1, 19, 1),
	(78, 10, 1, 12, 1),
	(79, 10, 1, 20, 1),
	(80, 10, 1, 9, 1),
	(81, 20, 1, 6, 1),
	(82, 20, 1, 19, 1),
	(83, 20, 1, 12, 1),
	(84, 20, 1, 10, 1),
	(85, 20, 1, 9, 1),
	(86, 9, 1, 6, 1),
	(87, 9, 1, 19, 1),
	(88, 9, 1, 12, 1),
	(89, 9, 1, 10, 1),
	(90, 9, 1, 20, 1),
	(91, 7, 1, 21, 1);


--
-- Dumping data for table `products_xsell_grp_name`
--

TRUNCATE TABLE `products_xsell_grp_name`;

INSERT INTO `products_xsell_grp_name` (`products_xsell_grp_name_id`, `xsell_sort_order`, `language_id`, `groupname`)
VALUES (1, 0, 1, ''),
	(1, 0, 2, 'Test');



--
-- Dumping data for table `properties_description`
--

TRUNCATE TABLE `properties_description`;

INSERT INTO `properties_description` (`properties_description_id`, `properties_id`, `language_id`, `properties_name`,
                                      `properties_admin_name`)
VALUES (1, 1, 2, 'Größe', 'Größe'),
	(2, 1, 1, 'Size', 'Größe'),
	(3, 2, 2, 'Farbe', 'Farbe'),
	(4, 2, 1, 'Color', 'Farbe');

--
-- Dumping data for table `properties_values`
--

TRUNCATE TABLE `properties_values`;

INSERT INTO `properties_values` (`properties_values_id`, `properties_id`, `sort_order`, `value_model`, `value_price`, `display_image`)
VALUES (1, 1, 1, '39', '0.0000', ''),
	(2, 1, 2, '40', '0.0000', ''),
	(3, 1, 3, '41', '5.0000', ''),
	(4, 2, 1, 'gold', '0.0000', ''),
	(5, 2, 2, 'red', '0.0000', ''),
	(6, 2, 3, 'black', '2.0000', ''),
	(7, 1, 4, '42', '0.0000', ''),
	(8, 1, 5, '43', '0.0000', ''),
	(9, 1, 6, '44', '0.0000', ''),
	(10, 1, 7, '45', '0.0000', ''),
	(11, 1, 8, '46', '0.0000', ''),
	(12, 1, 9, 's', '0.0000', ''),
	(13, 1, 10, 'm', '0.0000', ''),
	(14, 1, 11, 'l', '2.0000', '');



--
-- Dumping data for table `properties_values_description`
--

TRUNCATE TABLE `properties_values_description`;

INSERT INTO `properties_values_description` (`properties_values_description_id`, `properties_values_id`, `language_id`,
                                             `values_name`)
VALUES (1, 1, 2, '39'),
	(2, 1, 1, '39'),
	(3, 2, 2, '40'),
	(4, 2, 1, '40'),
	(5, 3, 2, '41'),
	(6, 3, 1, '41'),
	(7, 4, 2, 'Gold'),
	(8, 4, 1, 'Gold'),
	(9, 5, 2, 'Rot'),
	(10, 5, 1, 'Red'),
	(11, 6, 2, 'Schwarz'),
	(12, 6, 1, 'Black'),
	(13, 7, 2, '42'),
	(14, 7, 1, '42'),
	(15, 8, 2, '43'),
	(16, 8, 1, '43'),
	(17, 9, 2, '44'),
	(18, 9, 1, '44'),
	(19, 10, 2, '45'),
	(20, 10, 1, '45'),
	(21, 11, 2, '46'),
	(22, 11, 1, '46'),
	(23, 12, 2, 'S'),
	(24, 12, 1, 'S'),
	(25, 13, 2, 'M'),
	(26, 13, 1, 'M'),
	(27, 14, 2, 'L'),
	(28, 14, 1, 'L');


--
-- Dumping data for table `reviews`
--

TRUNCATE TABLE `reviews`;

INSERT INTO `reviews` (`reviews_id`, `products_id`, `customers_id`, `customers_name`, `reviews_rating`, `date_added`,
                       `last_modified`, `reviews_read`)
VALUES (1, 5, 3, 'Sven Schulte', 3, '2017-01-26 12:44:57', '2020-05-04 10:44:29', 0),
	(2, 6, 3, 'Sven Schulte', 5, '2017-01-26 12:46:01', '2019-05-28 09:58:50', 0),
	(3, 5, 4, 'Susanne Meier', 5, '2017-01-26 12:48:07', '2020-05-04 10:44:29', 0),
	(4, 5, 5, 'Halil Yilmaz', 4, '2017-01-26 12:49:49', '2020-05-04 10:44:29', 0),
	(5, 6, 4, 'Susanne Meier', 4, '2017-01-26 12:50:36', '2019-05-28 09:58:50', 0),
	(6, 7, 3, 'Sven Schulte', 5, '2017-01-26 12:53:21', '2019-05-28 09:58:50', 0),
	(7, 7, 4, 'Susanne Meier', 4, '2017-01-26 12:53:43', '2019-05-28 09:58:50', 0),
	(8, 7, 5, 'Halil Yilmaz', 3, '2017-01-26 12:54:07', '2019-05-28 09:58:50', 0),
	(9, 8, 3, 'Sven Schulte', 4, '2017-01-26 12:54:55', '2019-05-28 09:58:50', 0),
	(10, 8, 5, 'Halil Yilmaz', 4, '2017-01-26 12:55:23', '2019-05-28 09:58:50', 0),
	(11, 8, 4, 'Susanne Meier', 3, '2017-01-26 12:55:43', '2019-05-28 09:58:50', 0),
	(12, 9, 3, 'Sven Schulte', 3, '2017-01-26 12:56:47', '2019-05-28 09:58:50', 0),
	(13, 9, 4, 'Susanne Meier', 4, '2017-01-26 12:57:26', '2019-05-28 09:58:50', 0),
	(14, 9, 5, 'Halil Yilmaz', 3, '2017-01-26 12:57:50', '2019-05-28 09:58:50', 0),
	(15, 10, 5, 'Halil Yilmaz', 3, '2017-01-26 12:58:27', '2019-05-28 09:58:50', 0),
	(16, 10, 3, 'Sven Schulte', 5, '2017-01-26 12:59:06', '2019-05-28 09:58:50', 0),
	(17, 10, 4, 'Susanne Meier', 4, '2017-01-26 12:59:38', '2019-05-28 09:58:50', 0),
	(18, 11, 4, 'Susanne Meier', 3, '2017-01-26 13:00:16', '2019-05-28 09:58:50', 0),
	(19, 11, 5, 'Halil Yilmaz', 4, '2017-01-26 13:00:46', '2019-05-28 09:58:50', 0),
	(20, 11, 3, 'Sven Schulte', 4, '2017-01-26 13:01:24', '2019-05-28 09:58:50', 0),
	(21, 12, 5, 'Halil Yilmaz', 4, '2017-01-26 13:02:05', '2019-05-28 09:58:50', 0),
	(22, 12, 4, 'Susanne Meier', 3, '2017-01-26 13:02:27', '2019-05-28 09:58:50', 0),
	(23, 12, 3, 'Sven Schulte', 4, '2017-01-26 13:02:58', '2019-05-28 09:58:50', 0),
	(24, 1, 4, 'Susanne Meier', 3, '2017-01-26 13:03:40', '2020-05-04 10:48:25', 0),
	(25, 2, 3, 'Sven Schulte', 3, '2017-01-26 13:04:15', '2020-05-04 10:48:25', 0),
	(26, 3, 5, 'Halil Yilmaz', 4, '2017-01-26 13:04:46', '2020-05-04 10:48:25', 0),
	(27, 4, 5, 'Halil Yilmaz', 4, '2017-01-26 13:47:28', '2020-05-04 10:48:25', 0),
	(28, 5, 3, 'Sven Schulte', 5, '2017-01-26 13:48:11', '2020-05-04 10:48:25', 0),
	(29, 6, 4, 'Susanne Meier', 4, '2017-01-26 13:48:25', '2020-05-04 10:48:25', 0),
	(30, 7, 4, 'Susanne Meier', 4, '2017-01-26 13:49:15', '2020-05-04 10:48:25', 0),
	(31, 8, 3, 'Sven Schulte', 3, '2017-01-26 13:50:09', '2020-05-04 10:48:25', 0),
	(32, 9, 5, 'Halil Yilmaz', 4, '2017-01-26 13:50:43', '2020-05-04 10:48:25', 0),
	(33, 10, 4, 'Susanne Meier', 4, '2017-01-26 13:51:19', '2020-05-04 10:48:25', 0),
	(34, 11, 3, 'Sven Schulte', 5, '2017-01-26 13:52:00', '2020-05-04 10:48:25', 0),
	(35, 12, 5, 'Halil Yilmaz', 5, '2017-01-26 13:52:38', '2020-05-04 10:48:25', 0),
	(36, 1, 5, 'Halil Yilmaz', 3, '2017-01-26 13:53:12', '2020-05-04 10:48:45', 0),
	(37, 2, 4, 'Susanne Meier', 4, '2017-01-26 13:53:36', '2020-05-04 10:48:45', 0),
	(38, 3, 3, 'Sven Schulte', 4, '2017-01-26 13:54:32', '2020-05-04 10:48:45', 0),
	(39, 4, 4, 'Susanne Meier', 4, '2017-01-26 13:55:10', '2020-05-04 10:48:45', 0),
	(40, 5, 3, 'Sven Schulte', 5, '2017-01-26 13:55:44', '2020-05-04 10:48:45', 0),
	(41, 6, 5, 'Halil Yilmaz', 4, '2017-01-26 13:56:07', '2020-05-04 10:48:45', 0),
	(42, 7, 5, 'Halil Yilmaz', 3, '2017-01-26 13:56:45', '2020-05-04 10:48:45', 0),
	(43, 8, 3, 'Sven Schulte', 5, '2017-01-26 13:57:34', '2020-05-04 10:48:45', 0),
	(44, 9, 4, 'Susanne Meier', 5, '2017-01-26 13:57:57', '2020-05-04 10:48:45', 0),
	(45, 1, 4, 'Susanne Meier', 4, '2017-01-26 13:58:33', '2020-05-04 10:47:31', 0),
	(46, 1, 5, 'Halil Yilmaz', 4, '2017-01-26 13:58:53', '2020-05-04 10:47:31', 0),
	(47, 1, 3, 'Sven Schulte', 5, '2017-01-26 13:59:33', '2020-05-04 10:47:31', 0),
	(48, 2, 3, 'Sven Schulte', 3, '2017-01-26 14:00:53', '2020-05-04 10:47:07', 0),
	(49, 2, 5, 'Halil Yilmaz', 4, '2017-01-26 14:01:27', '2020-05-04 10:47:07', 0),
	(50, 2, 4, 'Susanne Meier', 4, '2017-01-26 14:01:49', '2020-05-04 10:47:07', 0),
	(51, 3, 4, 'Susanne Meier', 3, '2017-01-26 14:02:34', '2020-05-04 10:46:44', 0),
	(52, 3, 5, 'Halil Yilmaz', 3, '2017-01-26 14:02:59', '2020-05-04 10:46:44', 0),
	(53, 3, 3, 'Sven Schulte', 5, '2017-01-26 14:03:50', '2020-05-04 10:46:44', 0),
	(54, 4, 5, 'Halil Yilmaz', 4, '2017-02-06 12:41:50', '2020-05-04 10:45:39', 0),
	(55, 4, 3, 'Sven Schulte', 4, '2017-02-06 12:42:35', '2020-05-04 10:45:39', 0),
	(56, 4, 4, 'Susanne Meier', 5, '2017-02-06 12:45:20', '2020-05-04 10:45:39', 0);



--
-- Dumping data for table `reviews_description`
--

TRUNCATE TABLE `reviews_description`;

INSERT INTO `reviews_description` (`reviews_id`, `languages_id`, `reviews_text`)
VALUES (1, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(2, 2, 'Eine qualitativ und optisch absolut hochwertige Uhr! Empfehlenswert! '),
	(3, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(4, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(5, 2, 'Superschöne Uhr, die zu jedem Outfit passt. Bin begeistert! '),
	(6, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(7, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(8, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(9, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(10, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(11, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(12, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(13, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(14, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(15, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(16, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(17, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(18, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(19, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(20, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(21, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(22, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(23, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(24, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(25, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(26, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(27, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(28, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(29, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(30, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(31, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(32, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(33, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(34, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(35, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(36, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(37, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(38, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(39, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(40, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(41, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(42, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(43, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(44, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(45, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(46, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(47, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(48, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(49, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(50, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(51, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(52, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(53, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! '),
	(54, 2, 'Die Qualität entspricht nicht ganz meinen Erwartungen, für den Preis aber in Ordnung. '),
	(55, 2,
	 'Das Preis-Leistungs-Verhältnis ist sehr gut! Schneller Versand und der Artikel ist exakt wie beschrieben. '),
	(56, 2, 'Tolles Produkt, bin sehr zufrieden! Kann ich nur weiterempfehlen! ');



--
-- Dumping data for table `sliders`
--

TRUNCATE TABLE `sliders`;

INSERT INTO `sliders` (`slider_id`, `name`, `speed`, `start_page`)
VALUES (1, 'Home', '3.000', 1);

--
-- Dumping data for table `slider_image`
--

-- TRUNCATE TABLE `slider_image`;

-- INSERT INTO `slider_image` (`slider_image_id`, `slider_set_id`, `sort_order`, `image_file`, `image_preview_file`, `link_url`, `link_window_target`) VALUES
-- (69, 1, 0, 'teaser-slider-1.png', '', 'login_admin.php', '_self'),
-- (70, 1, 0, 'teaser-slider-2.png', '', 'login_admin.php', '_self'),
-- (71, 1, 0, 'teaser-slider-3.png', '', 'login_admin.php', '_self');


--
-- Dumping data for table `slider_image_description`
--

-- TRUNCATE TABLE `slider_image_description`;

-- INSERT INTO `slider_image_description` (`slider_image_id`, `language_id`, `image_title`, `image_alt_text`) VALUES
-- (69, 2, '', ''),
-- (70, 2, '', ''),
-- (71, 2, '', '');

--
-- Dumping data for table `slider_set`
--

TRUNCATE TABLE `slider_set`;

INSERT INTO `slider_set` (`slider_set_id`, `set_name`, `slider_speed`, `width`, `height`)
VALUES (1, 'Home', 3000, 700, 500);


--
-- Dumping data for table `slides`
--

TRUNCATE TABLE `slides`;

INSERT INTO `slides` (`slide_id`, `language_id`, `slider_id`, `thumbnail`, `title`, `alt_text`, `url`, `url_target`,
                      `sort_order`)
VALUES (1, 2, 1, '', 'Slide 3', 'Slide 3 - Alternativtext', '', '_blank', 3),
	(2, 1, 1, '', 'Slide 3', 'Slide 3 - Alternative Text', '', '_blank', 3),
	(3, 2, 1, '', 'Slide 2', 'Slide 2 - Alternativtext', '', '_blank', 2),
	(4, 1, 1, '', 'Slide 2', 'Slide 2 - Alternative Text', '', '_blank', 2),
	(5, 2, 1, '', 'Slide 1', 'Slide 1 - Alternativtext', '', '_blank', 1),
	(6, 1, 1, '', 'Slide 1', 'Slide 1 - Alternative Text', '', '_blank', 1);



--
-- Dumping data for table `slide_images`
--

TRUNCATE TABLE `slide_images`;

INSERT INTO `slide_images` (`slide_image_id`, `slide_id`, `language_id`, `breakpoint`, `image`)
VALUES (1, 1, 2, 'xs', 'shop-slider-3-xs.png'),
	(2, 1, 2, 'sm', 'shop-slider-3-sm.png'),
	(3, 1, 2, 'md', 'shop-slider-3-md.png'),
	(4, 1, 2, 'lg', 'shop-slider-3-lg.png'),
	(5, 2, 1, 'xs', 'shop-slider-3-xs.png'),
	(6, 2, 1, 'sm', 'shop-slider-3-sm.png'),
	(7, 2, 1, 'md', 'shop-slider-3-md.png'),
	(8, 2, 1, 'lg', 'shop-slider-3-lg.png'),
	(9, 3, 2, 'xs', 'shop-slider-2-xs.png'),
	(10, 3, 2, 'sm', 'shop-slider-2-sm.png'),
	(11, 3, 2, 'md', 'shop-slider-2-md.png'),
	(12, 3, 2, 'lg', 'shop-slider-2-lg.png'),
	(13, 4, 1, 'xs', 'shop-slider-2-xs.png'),
	(14, 4, 1, 'sm', 'shop-slider-2-sm.png'),
	(15, 4, 1, 'md', 'shop-slider-2-md.png'),
	(16, 4, 1, 'lg', 'shop-slider-2-lg.png'),
	(17, 5, 2, 'xs', 'shop-slider-1-xs.png'),
	(18, 5, 2, 'sm', 'shop-slider-1-sm.png'),
	(19, 5, 2, 'md', 'shop-slider-1-md.png'),
	(20, 5, 2, 'lg', 'shop-slider-1-lg.png'),
	(21, 6, 1, 'xs', 'shop-slider-1-xs.png'),
	(22, 6, 1, 'sm', 'shop-slider-1-sm.png'),
	(23, 6, 1, 'md', 'shop-slider-1-md.png'),
	(24, 6, 1, 'lg', 'shop-slider-1-lg.png');


--
-- Dumping data for table `specials`
--

TRUNCATE TABLE `specials`;

INSERT INTO `specials` (`specials_id`, `products_id`, `specials_quantity`, `specials_new_products_price`,
                        `specials_date_added`, `specials_last_modified`, `begins_date`, `started`, `expires_date`,
                        `date_status_change`, `status`)
VALUES (1, 7, '1854.0000', '12.6050', NULL, '2020-05-05 08:40:45', NULL, 1, NULL, NULL, 1),
	(2, 8, '1855.0000', '12.6050', NULL, '2020-05-05 08:41:22', NULL, 1, NULL, NULL, 1),
	(3, 9, '1857.0000', '12.6050', NULL, '2020-05-05 08:41:47', NULL, 1, NULL, NULL, 1),
	(4, 10, '1854.0000', '12.6050', NULL, '2020-05-05 08:41:50', NULL, 1, NULL, NULL, 1),
	(5, 11, '1853.0000', '12.6050', NULL, '2020-05-05 08:41:53', NULL, 1, NULL, NULL, 1),
	(6, 12, '1856.0000', '12.6050', NULL, '2020-05-05 08:41:55', NULL, 1, NULL, NULL, 1);



/*
 * --------------------------------------------------------------
 *   database.sql 2021-03-16
 *   Gambio GmbH
 *   http://www.gambio.de
 *   Copyright (c) 2021 Gambio GmbH
 *   Released under the GNU General Public License (Version 2)
 *   [http://www.gnu.org/licenses/gpl-2.0.html]
 * --------------------------------------------------------------
 */


--
-- Dumping data for table `user_configuration`
--

TRUNCATE TABLE `user_configuration`;

INSERT INTO `user_configuration` (`customer_id`, `configuration_key`, `configuration_value`)
VALUES (0, 'editor-category-1-category_description-de', 'ckeditor'),
	(0, 'editor-category-1-category_description-en', 'ckeditor'),
	(0, 'editor-category-1-category_description_bottom-de', 'ckeditor'),
	(0, 'editor-category-1-category_description_bottom-en', 'ckeditor'),
	(0, 'editor-category-2-category_description-de', 'ckeditor'),
	(0, 'editor-category-2-category_description-en', 'ckeditor'),
	(0, 'editor-category-2-category_description_bottom-de', 'ckeditor'),
	(0, 'editor-category-2-category_description_bottom-en', 'ckeditor'),
	(0, 'editor-category-3-category_description-de', 'ckeditor'),
	(0, 'editor-category-3-category_description-en', 'ckeditor'),
	(0, 'editor-category-3-category_description_bottom-de', 'ckeditor'),
	(0, 'editor-category-3-category_description_bottom-en', 'ckeditor'),
	(0, 'editor-category-4-category_description-de', 'ckeditor'),
	(0, 'editor-category-4-category_description-en', 'ckeditor'),
	(0, 'editor-category-4-category_description_bottom-de', 'ckeditor'),
	(0, 'editor-category-4-category_description_bottom-en', 'ckeditor'),
	(0, 'editor-product-6-checkout_information-de', 'ckeditor'),
	(0, 'editor-product-6-checkout_information-en', 'ckeditor'),
	(0, 'editor-product-6-products_description-de', 'ckeditor'),
	(0, 'editor-product-6-products_description-en', 'ckeditor'),
	(0, 'editor-product-6-products_short_description-de', 'ckeditor'),
	(0, 'editor-product-6-products_short_description-en', 'ckeditor'),
	(1, 'categoryOverviewDropdownBtn', 'edit'),
	(1, 'menuVisibility', 'expand'),
	(1, 'multiCategoryOverviewDropdownBtn', 'BUTTON_MOVE'),
	(1, 'productOverviewDropdownBtn', 'BUTTON_PROPERTIES'),
	(1, 'relatedProductActionDropdownBtn', 'BUTTON_PROPERTIES'),
	(1, 'statisticsTab', '0');



--
-- Dumping data for table `content_manager`
--

TRUNCATE TABLE `content_manager`;

INSERT INTO `content_manager` (`content_id`, `categories_id`, `parent_id`, `group_ids`, `languages_id`,
                               `content_version`, `content_name`, `content_title`, `content_heading`, `content_text`,
                               `sort_order`, `file_flag`, `content_file`, `download_file`, `content_status`,
                               `content_group`, `content_delete`, `gm_link`, `gm_link_target`, `gm_priority`,
                               `gm_changefreq`, `gm_last_modified`, `gm_sitemap_entry`, `gm_robots_entry`,
                               `gm_url_keywords`, `contents_meta_title`, `contents_meta_description`,
                               `contents_meta_keywords`, `opengraph_image`, `content_position`, `content_type`,
                               `protected`)
VALUES (1, 0, 0, '', 1, '', 'Session interrupted (PayPal)', 'Loss of session', 'Your session has been interrupted',
        'For PayPal payments to work as expected it is essential that your browser sends a session identification (session cookie) when returning from PayPal authorization. Your browser did not send this identification, therefore your shopping session has been terminated. Please deactivate any &ldquo;anti virus&rdquo; or &ldquo;internet security&ldquo; software you may be running on your computer. Afterwards, you can log in to the shop system again and continue your shopping experience.<br />\r\n&nbsp;',
        0, 0, '', '', 1, 3300001, 1, '', '', '0.0', 'always', '2020-04-27 11:40:29', 0, 1, 'session-lost', '', '', '',
        NULL, 'pages_info', 'content', '1'),
	(2, 0, 0, '', 2, '', 'Sitzungsunterbrechung (PayPal)', 'Sitzung unterbrochen', 'Die Sitzung wurde unterbrochen',
	 'F&uuml;r das korrekte Funktionieren der Zahlung &uuml;ber PayPal ist es notwendig, dass Ihr Browser bei der R&uuml;ckkehr in den Shop nach der PayPal-Autorisierung weiterhin die Kennung der zuvor verwendeten Sitzung (Session-Cookie) sendet. Dies erfolgt gegenw&auml;rtig nicht. Ein m&ouml;glicher Grund k&ouml;nnte die Verwendung von &bdquo;Antiviren&ldquo;-Software oder sonstiger &bdquo;Internet Security&ldquo;-Software sein. Bitte deaktivieren Sie daher derlei Einflussfaktoren. Anschlie&szlig;end k&ouml;nnen Sie sich erneut in den Shop einloggen und Ihren Einkauf fortsetzen.<br />\r\n&nbsp;',
	 0, 0, '', '', 1, 3300001, 1, '', '', '0.0', 'always', '2020-04-27 11:40:29', 0, 1, 'session-lost', '', '', '',
	 NULL,
	 'pages_info', 'content', '1'),
	(3, 0, 0, '', 1, '', 'Privacy Notice', 'Privacy Notice', 'Privacy Notice', '<p>
	The legal texts of a webshop provide the legal framework for all its transactions. But they can also often prove to be a stumbling block for online merchants, as faulty legal texts are a frequent cause for cease-and-decist orders. Keeping your legal texts up to date can be time-consuming and work-intensive.<br />
	<br />
	Indivdual legal texts, drawn up by specialized lawyers, including assumption of liability and an update-service are therefore included in all cloud plans - without additional costs!<br />
	Just register via the Cloud Portal (under Vouchers) to use the offers from our partners.
</p>
', 0, 1, '', '', 1, 2, 0, '', '_blank', '0.0', 'weekly', '2008-08-25 15:21:28', 0, 1, 'privacy-notice', '', '', '',
	 NULL, 'pages_info', 'content', '1'),
	(4, 0, 0, '', 1, '', 'General Terms & Conditions', 'General Terms & Conditions', 'General Terms & Conditions', '<p>
	The legal texts of a webshop provide the legal framework for all its transactions. But they can also often prove to be a stumbling block for online merchants, as faulty legal texts are a frequent cause for cease-and-decist orders. Keeping your legal texts up to date can be time-consuming and work-intensive.<br />
	<br />
	Indivdual legal texts, drawn up by specialized lawyers, including assumption of liability and an update-service are therefore included in all cloud plans - without additional costs!<br />
	Just register via the Cloud Portal (under Vouchers) to use the offers from our partners.
</p>
', 0, 1, '', '', 1, 3, 0, '', '_blank', '0.0', 'weekly', '2008-08-25 15:21:47', 0, 1, 'conditions-of-use', '', '', '',
	 NULL, 'pages_info', 'content', '1'),
	(5, 0, 0, '', 1, '', 'Legal Information', 'Legal Information', 'Legal Information', '<p>
	The legal texts of a webshop provide the legal framework for all its transactions. But they can also often prove to be a stumbling block for online merchants, as faulty legal texts are a frequent cause for cease-and-decist orders. Keeping your legal texts up to date can be time-consuming and work-intensive.<br />
	<br />
	Indivdual legal texts, drawn up by specialized lawyers, including assumption of liability and an update-service are therefore included in all cloud plans - without additional costs!<br />
	Just register via the Cloud Portal (under Vouchers) to use the offers from our partners.
</p>
', 0, 1, '', '', 1, 4, 0, '', '_blank', '0.0', 'weekly', '2008-08-25 15:22:50', 0, 1, 'imprint', '', '', '', NULL,
	 'pages_info', 'content', '1'),
	(6, 0, 0, '', 1, '', 'Index', 'Index', 'Welcome',
	 '<h1>Welcome to your Shop</h1>\r\n<p>This Onlineshop was created with <a href=\"https://www.gambio.de\"><strong>Gambio Shopsoftware</strong></a>.</p>\r\n<p>This text can be edited at Content Manager -&gt; Index in the backend.</p>',
	 0, 4, '', '', 1, 5, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:41', 1, 0, 'welcome', '', '', '', NULL,
	 'elements_start', 'content', '1'),
	(7, 0, 0, '', 2, '', 'Privatsphäre und Datenschutz', 'Privatsphäre und Datenschutz', 'Privatsphäre und Datenschutz', '<p>
	Die Rechtstexte eines Onlineshops bilden den rechtlichen Rahmen f&uuml;r alle Gesch&auml;fte. Sie sind aber auch immer wieder ein Stolperstein f&uuml;r Onlineh&auml;ndler, denn fehlerhafte Rechtstexte sind ein h&auml;ufiger Grund f&uuml;r Abmahnungen. Die eigenen Rechtstexte immer auf dem neuesten Stand zu halten kann zeitaufw&auml;ndig und arbeitsintensiv sein.<br />
	<br />
	Individuelle Rechtstexte, von Fachanw&auml;lten erstellt, mit anwaltlicher Haftungs&uuml;bernahme sowie Update-Service, sind daher in allen Cloud-Tarifen bereits enthalten - ohne Zusatzkosten!<br />
	Melde dich einfach &uuml;ber das Cloud Portal (unter Gutscheine) an, um die Angebote unserer Rechtstexte-Partner zu nutzen.
</p>
', 3, 1, '', '', 1, 2, 0, '', '_blank', '0.0', 'weekly', '2008-08-26 17:59:30', 0, 1, 'privatsphaere-und-datenschutz',
	 '', '', '', NULL, 'pages_info', 'content', '1'),
	(8, 0, 0, '', 2, '', 'AGB', 'AGB', 'Allgemeine Geschäftsbedingungen', '<p>
	Die Rechtstexte eines Onlineshops bilden den rechtlichen Rahmen f&uuml;r alle Gesch&auml;fte. Sie sind aber auch immer wieder ein Stolperstein f&uuml;r Onlineh&auml;ndler, denn fehlerhafte Rechtstexte sind ein h&auml;ufiger Grund f&uuml;r Abmahnungen. Die eigenen Rechtstexte immer auf dem neuesten Stand zu halten kann zeitaufw&auml;ndig und arbeitsintensiv sein.<br />
	<br />
	Individuelle Rechtstexte, von Fachanw&auml;lten erstellt, mit anwaltlicher Haftungs&uuml;bernahme sowie Update-Service, sind daher in allen Cloud-Tarifen bereits enthalten - ohne Zusatzkosten!<br />
	Melde dich einfach &uuml;ber das Cloud Portal (unter Gutscheine) an, um die Angebote unserer Rechtstexte-Partner zu nutzen.
</p>
', 1, 1, '', '', 1, 3, 0, '', '_blank', '0.0', 'weekly', '2012-01-30 13:45:57', 0, 1,
	 'allgemeine-geschaeftsbedingungen', '', '', '', NULL, 'pages_info', 'content', '1'),
	(9, 0, 0, '', 2, '', 'Suchen', 'Suchen', '', '', 0, 3, '', '', 0, 30, 1, 'advanced_search.php', '_top', '0.0',
	 'always',
	 '2020-04-28 11:52:40', 0, 0, 'suchen', '', '', '', NULL, 'pages_main', 'link', '0'),
	(10, 0, 0, '', 1, '', 'Search', 'Search', '', '', 0, 3, '', '', 0, 30, 1, 'advanced_search.php', '_top', '0.0',
	 'always', '2020-04-28 11:52:41', 0, 0, 'search', '', '', '', NULL, 'pages_main', 'link', '0'),
	(11, 0, 0, '', 2, '', 'Impressum', 'Impressum', 'Impressum', '<p>
	Die Rechtstexte eines Onlineshops bilden den rechtlichen Rahmen f&uuml;r alle Gesch&auml;fte. Sie sind aber auch immer wieder ein Stolperstein f&uuml;r Onlineh&auml;ndler, denn fehlerhafte Rechtstexte sind ein h&auml;ufiger Grund f&uuml;r Abmahnungen. Die eigenen Rechtstexte immer auf dem neuesten Stand zu halten kann zeitaufw&auml;ndig und arbeitsintensiv sein.<br />
	<br />
	Individuelle Rechtstexte, von Fachanw&auml;lten erstellt, mit anwaltlicher Haftungs&uuml;bernahme sowie Update-Service, sind daher in allen Cloud-Tarifen bereits enthalten - ohne Zusatzkosten!<br />
	Melde dich einfach &uuml;ber das Cloud Portal (unter Gutscheine) an, um die Angebote unserer Rechtstexte-Partner zu nutzen.
</p>
', 0, 1, '', '', 1, 4, 0, '', '_top', '0.0', 'weekly', '2008-07-29 16:01:46', 0, 1, 'impressum', '', '', '', NULL,
	 'pages_info', 'content', '1'),
	(12, 0, 0, '', 2, '', 'Index', 'Index', 'Willkommen',
	 '<h1>Herzlich willkommen in deinem Shop</h1>\r\n<p>Dieser Onlineshop wurde mit der <a href="https://www.gambio.de"><strong>Gambio Shopsoftware</strong></a> erstellt.</p>\r\n<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Index bearbeiten.</p>',
	 0, 4, '', '', 1, 5, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 1, 0, 'willkommen', '', '', '', NULL,
	 'elements_start', 'content', '1'),
	(13, 0, 0, '', 2, '', 'Gutscheine', 'Gutscheine', 'Gutscheine - Fragen und Antworten',
	 '<table cellSpacing=0 cellPadding=0>\r\n<tbody>\r\n<tr>\r\n<td class=main><STRONG>Gutscheine kaufen </STRONG></td></tr>\r\n<tr>\r\n<td class=main>Gutscheine können, falls sie im Shop angeboten werden, wie normale Artikel gekauft werden. Sobald du einen Gutschein gekauft hast und dieser nach erfolgreicher Zahlung freigeschaltet wurde, erscheint der Betrag unter deinem Warenkorb. Nun kannst du über den Link " Gutschein versenden " den gewünschten Betrag per E-Mail versenden. </td></tr></tbody></table>\r\n<table cellSpacing=0 cellPadding=0>\r\n<tbody>\r\n<tr>\r\n<td class=main><STRONG>Wie man Gutscheine versendet </STRONG></td></tr>\r\n<tr>\r\n<td class=main>Um einen Gutschein zu versenden, klicke bitte auf den Link "Gutschein versenden" in deinem Einkaufskorb. Um einen Gutschein zu versenden, benötigen wir folgende Angaben von deinen: Vor- und Nachname des Empfängers. Eine gültige E-Mail Adresse des Empfängers. Den gewünschten Betrag (Du kannst auch Teilbeträge deines Guthabens versenden). Eine kurze Nachricht an den Empfänger. Bitte überprüfe deine Angaben noch einmal vor dem Versenden. Du hast vor dem Versenden jederzeit die Möglichkeit deine Angaben zu korrigieren. </td></tr></tbody></table>\r\n<table cellSpacing=0 cellPadding=0>\r\n<tbody>\r\n<tr>\r\n<td class=main><STRONG>Mit Gutscheinen Einkaufen. </STRONG></td></tr>\r\n<tr>\r\n<td class=main>Sobald du über ein Guthaben verfügst, kannst du dieses zum Bezahlen deiner Bestellung verwenden. Während des Bestellvorganges hast du die Möglichkeit dein Guthaben einzulösen. Falls das Guthaben unter dem Warenwert liegt musst du deine bevorzugte Zahlungsweise für den Differenzbetrag wählen. Übersteigt dein Guthaben den Warenwert, steht deinen das Restguthaben selbstverständlich für deine nächste Bestellung zur Verfügung. </td></tr></tbody></table>\r\n<table cellSpacing=0 cellPadding=0>\r\n<tbody>\r\n<tr>\r\n<td class=main><STRONG>Gutscheine verbuchen. </STRONG></td></tr>\r\n<tr>\r\n<td class=main>Wenn du einen Gutschein per E-Mail erhalten hast, kannst du den Betrag wie folgt verbuchen:. <br />1. Klicke auf den in der E-Mail angegebenen Link. Falls du noch nicht über ein persönliches Kundenkonto verfügst, hast du die Möglichkeit ein Konto zu eröffnen. <br />2. Nachdem du ein Produkt in den Warenkorb gelegt hast, kann du dort deinen Gutscheincode eingeben.</td></tr></tbody></table>\r\n<table cellSpacing=0 cellPadding=0>\r\n<tbody>\r\n<tr>\r\n<td class=main><STRONG>Falls es zu Problemen komm sollte: </STRONG></td></tr>\r\n<tr>\r\n<td class=main>Falls es wider Erwarten zu Problemen mit einem Gutschein komm sollte, kontaktiere uns bitte per E-Mail : you@yourdomain.com. Bitte beschreibe möglichst genau das Problem, wichtige Angaben sind unter anderem: deine Kundennummer, der Gutscheincode, Fehlermeldungen des Systems sowie der von deinen benutzte Browser. </td></tr></tbody></table>',
	 0, 1, '', '', 0, 6, 0, '', '', '', '', '2020-04-28 11:52:40', 1, 0, 'gutscheine-fragen-und-antworten', '', '', '',
	 NULL, 'pages_info', 'content', '1'),
	(14, 0, 0, '', 1, '', 'Vouchers', 'Vouchers', 'Vouchers', '<p>Enter your Vouchers information here.</p>', 0, 1, '',
	 '',
	 0, 6, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:41', 1, 0, 'vouchers', '', '', '', NULL, 'pages_info',
	 'content', '1'),
	(15, 0, 0, '', 2, '', 'Über uns', 'Über uns', 'Über uns',
	 '<p>F&uuml;ge hier deine Informationen &uuml;ber dich bzw. Deinem Unternehmen ein.</p>', 1, 3, '', '', 0, 82, 1,
	 '',
	 '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'ueber-uns', '', '', '', NULL, 'pages_main', 'content',
	 '0'),
	(16, 0, 0, '', 1, '', 'About us', 'About us', 'About us',
	 '<p>Fill in the informations about you or your corporation.</p>', 1, 3, '', '', 0, 82, 1, '', '_blank', '0.0',
	 'always', '2020-04-28 11:52:41', 0, 0, 'about-us', '', '', '', NULL, 'pages_main', 'content', '0'),
	(17, 0, 0, '', 2, '', 'Kontakt', 'Kontakt', 'Kontakt', '<p>F&uuml;gen Sie hier Ihre Kontaktinformationen ein.</p>',
	 0,
	 1, '', '', 1, 7, 0, '', '_blank', '0.0', 'always', '2008-08-26 18:00:45', 1, 0, 'mein-kontakt', '', '', '', NULL,
	 'pages_info', 'content', '1'),
	(18, 0, 0, '', 1, '', 'Contact', 'Contact', 'Contact', '<p>Enter your Contact information here.</p>', 0, 1, '', '',
	 1,
	 7, 0, '', '_blank', '0.0', 'always', '2008-08-25 15:23:42', 1, 0, 'contact', '', '', '', NULL, 'pages_info',
	 'content',
	 '1'),
	(19, 0, 0, '', 1, '', 'Sitemap', 'Sitemap', '', '', 0, 0, 'sitemap.php', '', 1, 8, 0, '', '', '', '',
	 '2020-04-27 11:40:29', 1, 0, 'sitemap', '', '', '', NULL, 'pages_info_box', 'file', '1'),
	(20, 0, 0, '', 2, '', 'Sitemap', 'Sitemap', 'Sitemap', '', 0, 0, 'sitemap.php', '', 1, 8, 0, '', '_blank', '', '',
	 '2020-04-27 11:40:29', 1, 0, 'sitemap', '', '', '', NULL, 'pages_info_box', 'file', '1'),
	(21, 0, 0, '', 1, '', 'Callback Service', 'Callback Service', 'Callback Service',
	 '<p>This text can be edited at Content Manager -&gt; Pages -&gt; Info pages -&gt; Callback Service in the backend.</p>',
	 5, 1, 'gm_callback_service.php', '', 1, 14, 0, '', '_blank', '0.0', 'always', '2008-08-26 18:02:29', 1, 0,
	 'callback-service', '', '', '', NULL, 'pages_info', 'file', '1'),
	(22, 0, 0, '', 2, '', 'Callback Service', 'Callback Service', 'Callback Service',
	 '<p>Den Inhalt dieses Bereiches kannst du im Gambio Admin unter Content Manager -&gt; Seiten -&gt; Infoseiten -&gt; Callback Service bearbeiten.</p>',
	 5, 1, 'gm_callback_service.php', '', 1, 14, 0, '', '_blank', '0.0', 'always', '2008-08-26 18:02:29', 1, 0,
	 'callback-service', '', '', '', NULL, 'pages_info', 'file', '1'),
	(23, 0, 0, '', 2, '', 'Zusatzbox 1', 'Zusatzbox 1', 'Zusatzbox 1',
	 '<p style=\"text-align: center;\"><a href=\"http://validator.w3.org/check?uri=referer\"><img height=\"31\" width=\"88\" alt=\"Valid XHTML 1.0 Transitional\" src=\"https://www.w3.org/Icons/valid-xhtml10\" /></a></p>',
	 0, 4, '', '', 0, 61, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-1', '', '', '',
	 NULL,
	 'elements_boxes', 'content', '1'),
	(24, 0, 0, '', 2, '', 'Zusatzbox 2', 'Zusatzbox 2', 'Zusatzbox 2 Titel', '<p>Zusatzbox 2 Inhalt</p>\r\n<br />', 0,
	 4,
	 '', '', 0, 62, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-2-titel', '', '', '',
	 NULL,
	 'elements_boxes', 'content', '1'),
	(25, 0, 0, '', 2, '', 'Zusatzbox 3', 'Zusatzbox 3', 'Zusatzbox 3 Titel', '<p>Zusatzbox 3 Inhalt</p>', 0, 4, '', '',
	 0,
	 63, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-3-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(26, 0, 0, '', 2, '', 'Zusatzbox 4', 'Zusatzbox 4', 'Zusatzbox 4 Titel', '<p>Zusatzbox 4 Inhalt</p>', 0, 4, '', '',
	 0,
	 64, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-4-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(27, 0, 0, '', 2, '', 'Zusatzbox 5', 'Zusatzbox 5', 'Zusatzbox 5 Titel', '<p>Zusatzbox 5 Inhalt</p>', 0, 4, '', '',
	 0,
	 65, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-5-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(28, 0, 0, '', 2, '', 'Zusatzbox 6', 'Zusatzbox 6', 'Zusatzbox 6 Titel', '<p>Zusatzbox 6 Inhalt</p>', 0, 4, '', '',
	 0,
	 66, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-6-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(29, 0, 0, '', 2, '', 'Zusatzbox 7', 'Zusatzbox 7', 'Zusatzbox 7 Titel', '<p>Zusatzbox 7 Inhalt</p>', 0, 4, '', '',
	 0,
	 67, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-7-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(30, 0, 0, '', 2, '', 'Zusatzbox 8', 'Zusatzbox 8', 'Zusatzbox 8 Titel', '<p>Zusatzbox 8 Inhalt</p>', 0, 4, '', '',
	 0,
	 68, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-8-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(31, 0, 0, '', 2, '', 'Zusatzbox 9', 'Zusatzbox 9', 'Zusatzbox 9 Titel', '<p>Zusatzbox 9 Inhalt</p>', 0, 4, '', '',
	 0,
	 69, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'zusatzbox-9-titel', '', '', '', NULL,
	 'elements_boxes', 'content', '1'),
	(32, 0, 0, '', 1, '', 'Extrabox 1', 'Extrabox 1', 'Extrabox 1 Title',
	 '<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"https://www.w3.org/Icons/valid-xhtml10\" alt=\"Valid XHTML 1.0 Transitional\" height=\"31\" width=\"88\" /></a>',
	 0, 4, '', '', 0, 61, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:41', 0, 0, 'extrabox-1-title', '', '', '',
	 NULL, 'elements_boxes', 'content', '1'),
	(33, 0, 0, '', 1, '', 'Extrabox 2', 'Extrabox 2', 'Extrabox 2 Title', 'Content Extrabox 2', 0, 4, '', '', 0, 62, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-2-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(34, 0, 0, '', 1, '', 'Extrabox 3', 'Extrabox 3', 'Extrabox 3 Title', 'Content Extrabox 3', 0, 4, '', '', 0, 63, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-3-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(35, 0, 0, '', 1, '', 'Extrabox 4', 'Extrabox 4', 'Extrabox 4 Title', 'Content Extrabox 4', 0, 4, '', '', 0, 64, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-4-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(36, 0, 0, '', 1, '', 'Extrabox 5', 'Extrabox 5', 'Extrabox 5 Title', 'Content Extrabox 5', 0, 4, '', '', 0, 65, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-5-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(37, 0, 0, '', 1, '', 'Extrabox 6', 'Extrabox 6', 'Extrabox 6 Title', 'Content Extrabox 6', 0, 4, '', '', 0, 66, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-6-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(38, 0, 0, '', 1, '', 'Extrabox 7', 'Extrabox 7', 'Extrabox 7 Title', 'Content Extrabox 7', 0, 4, '', '', 0, 67, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-7-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(39, 0, 0, '', 1, '', 'Extrabox 8', 'Extrabox 8', 'Extrabox 8 Title', 'Content Extrabox 8', 0, 4, '', '', 0, 68, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-8-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(40, 0, 0, '', 1, '', 'Extrabox 9', 'Extrabox 9', 'Extrabox 9 Title', 'Content Extrabox 9', 0, 4, '', '', 0, 69, 0,
	 '',
	 '', '', '', '2020-04-28 11:52:41', 0, 0, 'extrabox-9-title', '', '', '', NULL, 'elements_boxes', 'content', '1'),
	(41, 0, 0, '', 1, '', 'Header', 'Header', '',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Header -&gt; Header in the backend.</p>', 0, 4,
	 '',
	 '', 1, 4321001, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'header', '', '', '', NULL,
	 'elements_header',
	 'content', '1'),
	(42, 0, 0, '', 2, '', 'Header', 'Header', '',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Header -&gt; Header bearbeiten.</p>',
	 0, 4, '', '', 1, 4321001, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'header', '', '', '', NULL,
	 'elements_header', 'content', '1'),
	(43, 0, 0, '', 1, '', 'Index (center)', 'Index (center)', '', '', 0, 4, '', '', 0, 10, 0, '', '_blank', '0.0',
	 'always',
	 '2020-04-28 11:52:41', 0, 0, 'index-center', '', '', '', NULL, 'elements_start', 'content', '1'),
	(44, 0, 0, '', 2, '', 'Index (Mitte)', 'Index (Mitte)', '', '', 0, 4, '', '', 0, 10, 0, '', '_blank', '0.0',
	 'always',
	 '2020-04-28 11:52:40', 0, 0, 'index-mitte', '', '', '', NULL, 'elements_start', 'content', '1'),
	(45, 0, 0, '', 1, '', 'Index (bottom)', 'Index (bottom)', '', '', 0, 4, '', '', 0, 11, 0, '', '_blank', '0.0',
	 'always',
	 '2020-04-28 11:52:41', 0, 0, 'index-bottom', '', '', '', NULL, 'elements_start', 'content', '1'),
	(46, 0, 0, '', 2, '', 'Index (unten)', 'Index (unten)', '', '', 0, 4, '', '', 0, 11, 0, '', '_blank', '0.0',
	 'always',
	 '2020-04-28 11:52:40', 0, 0, 'index-unten', '', '', '', NULL, 'elements_start', 'content', '1'),
	(47, 0, 0, '', 1, '', 'Footer Header', 'Footer Header', '',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Footer -&gt; Footer Header in the backend.</p>',
	 0,
	 4, '', '', 1, 199, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:41', 0, 0, 'footer-header', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(48, 0, 0, '', 2, '', 'Footer Kopfzeile', 'Footer Kopfzeile', '',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Footer -&gt; Footer Kopfzeile bearbeiten.</p>',
	 0, 4, '', '', 1, 199, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'footer-kopfzeile', '', '',
	 '',
	 NULL, 'elements_footer', 'content', '1'),
	(49, 0, 0, '', 1, '', 'Checkout confirmation information', 'Checkout confirmation information', '', '', 0, 4, '',
	 '', 1,
	 198, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:41', 0, 0, 'checkout-confirmation-information', '', '',
	 '',
	 NULL, 'elements_others', 'content', '1'),
	(50, 0, 0, '', 2, '', 'Bestellzusammenfassung Information', 'Bestellzusammenfassung Information', '', '', 0, 4, '',
	 '',
	 1, 198, 0, '', '_blank', '0.0', 'always', '2020-04-28 11:52:40', 0, 0, 'bestellzusammenfassung-information', '',
	 '',
	 '', NULL, 'elements_others', 'content', '1'),
	(51, 0, 0, '', 1, '', 'Shipping & payment conditions', 'Shipping & payment conditions',
	 'Shipping & payment conditions',
	 'Enter your information about shipping and payment conditions here. <br /><br />{$shipping_and_payment_matrix}<br /><br />{$klarna_hub_terms_and_conditions}<br />',
	 0, 1, '', '', 1, 3889891, 0, '', '_blank', '1.0', 'weekly', '2014-06-10 11:46:44', 0, 1,
	 'Shipping-and-payment-conditions', '', '', '', NULL, 'pages_info', 'content', '1'),
	(52, 0, 0, '', 2, '', 'Versand- & Zahlungsbedingungen', 'Versand- & Zahlungsbedingungen',
	 'Versand- & Zahlungsbedingungen',
	 'F&uuml;ge hier deine Informationen zu Versand- &amp; Zahlungsbedingungen ein. <br /><br />{$shipping_and_payment_matrix}<br /><br />{$klarna_hub_terms_and_conditions}<br />',
	 0, 1, '', '', 1, 3889891, 0, '', '_blank', '1.0', 'weekly', '2014-06-10 11:46:44', 0, 1,
	 'Versand-und-Zahlungsbedingungen', '', '', '', NULL, 'pages_info', 'content', '1'),
	(53, 0, 0, '', 1, '', 'Right of Withdrawal / Model Withdrawal Form', 'Right of Withdrawal / Model Withdrawal Form',
	 'Right of Withdrawal / Model Withdrawal Form', '<img alt="" src="templates/EyeCandy/img/icon_arrow.gif" style="margin-bottom:2px" /> <a href="{$PAGE_URL}#withdrawal_rights"><u>Right of Withdrawal</u></a> <br />
<br />
<img alt="" src="templates/EyeCandy/img/icon_arrow.gif" style="margin-bottom:2px" /> <a href="{$PAGE_URL}#withdrawal_form"><u>Model Withdrawal Form</u></a> <br />
<br />
<br />
<h2 style="border-bottom: 1px solid #DADADA; padding-bottom: 5px; color: #666666; font-size: 14px;"><a name="withdrawal_rights"></a>Right of Withdrawal <span style="font-size: 13px; font-weight: normal;">(<a href="{$PDF_URL}"><u>Download as PDF</u></a>)</span></h2>
<span style="color: #666666">{$WITHDRAWAL_TEXT}</span><br />
<br />
<br />
{* withdrawal_form_start *}
<h2 style="border-bottom: 1px solid #DADADA; padding-bottom: 5px; color: #666666; font-size: 14px;"><a name="withdrawal_form"></a>Model Withdrawal Form</h2>
{* withdrawal_pdf_link_start *}<span style=" color: #666666;">Our model withdrawal form as PDF document: <a href="{$PDF_FORM_URL}"><u>DOWNLOAD</u></a></span><br />
{* withdrawal_pdf_link_end *} {* withdrawal_form_link_start *}<span style=" color: #666666;">Our online model withdrawal form: <a href="{$WEBFORM_URL}"><u>ONLINE-FORM</u></a></span><br />
{* withdrawal_form_link_end *} <br />
<br />
{* withdrawal_form_end *}<span style="color: #999999"><em>To open the downloadable PDF-files, you need an additional program such as the Adobe Reader, which you can download online for free. The current version of the Adobe Reader you can find <a href="http://get.adobe.com/uk/reader/" target="_blank" style="color: #999999"><u>here</u></a>.</em></span><br />
<br />', 0, 1, '', '', 1, 3889895, 0, '', '_blank', '1.0', 'weekly', '2008-08-26 18:02:53', 0, 1,
	 'Right-of-Withdrawal--Model-Withdrawal-Form', '', '', '', NULL, 'pages_info', 'content', '1'),
	(54, 0, 0, '', 2, '', 'Widerrufsrecht & Muster-Widerrufsformular', 'Widerrufsrecht & Muster-Widerrufsformular',
	 'Widerrufsrecht & Muster-Widerrufsformular', '<img style="margin-bottom:2px" src="templates/EyeCandy/img/icon_arrow.gif" alt="" /> <a href="{$PAGE_URL}#withdrawal_rights"><u>Widerrufsrecht</u></a> <br />
<br />
<img style="margin-bottom:2px" src="templates/EyeCandy/img/icon_arrow.gif" alt="" /> <a href="{$PAGE_URL}#withdrawal_form"><u>Muster-Widerrufsformular</u></a> <br />
<br />
<br />
<h2 style="border-bottom: 1px solid #DADADA; padding-bottom: 5px; color: #666666; font-size: 14px;"><a name="withdrawal_rights"></a>Widerrufsrecht <span style="font-size: 13px; font-weight: normal;">(<a href="{$PDF_URL}"><u>Als PDF downloaden</u></a>)</span></h2>
<span style="color: #666666">{$WITHDRAWAL_TEXT}</span><br />
<br />
<br />
{* withdrawal_form_start *}
<h2 style="border-bottom: 1px solid #DADADA; padding-bottom: 5px; color: #666666; font-size: 14px;"><a name="withdrawal_form"></a>Muster-Widerrufsformular</h2>
{* withdrawal_pdf_link_start *}<span style=" color: #666666;">Unser Muster-Widerrufsformular im PDF-Format: <a href="{$PDF_FORM_URL}"><u>DOWNLOAD</u></a></span><br />
{* withdrawal_pdf_link_end *} {* withdrawal_form_link_start *}<span style=" color: #666666;">Unser Muster-Widerrufsformular zum online Ausf&uuml;llen: <a href="{$WEBFORM_URL}"><u>ONLINE-FORMULAR</u></a></span><br />
{* withdrawal_form_link_end *} <br />
<br />
{* withdrawal_form_end *}<span style="color: #999999"><em>Um die zum Download angebotenen PDF-Dateien zu &ouml;ffnen, ben&ouml;tigen Sie ein Zusatzprogramm, wie zum Beispiel den Adobe Reader, welchen Sie im Internet kostenfrei herunterladen k&ouml;nnen. Die aktuelle Version des Adobe Readers finden Sie <a href="http://get.adobe.com/de/reader/" target="_blank" style="color: #999999"><u>hier</u></a>.</em></span><br />
<br />', 0, 1, '', '', 1, 3889895, 0, '', '_blank', '1.0', 'weekly', '2008-08-26 18:02:53', 0, 1,
	 'Widerrufsrecht-und-Muster-Widerrufsformular', '', '', '', NULL, 'pages_info', 'content', '1'),
	(55, 0, 0, '', 1, '', 'Withdrawal 1', 'Withdrawal 1', 'Withdrawal 1', '<p>
	The legal texts of a webshop provide the legal framework for all its transactions. But they can also often prove to be a stumbling block for online merchants, as faulty legal texts are a frequent cause for cease-and-decist orders. Keeping your legal texts up to date can be time-consuming and work-intensive.<br />
	<br />
	Indivdual legal texts, drawn up by specialized lawyers, including assumption of liability and an update-service are therefore included in all cloud plans - without additional costs!<br />
	Just register via the Cloud Portal (under Vouchers) to use the offers from our partners.
</p>
', 1, 5, '', '', 1, 3889896, 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:41', 0, 0, 'withdrawal-1', '', '', '',
	 NULL, 'elements_withdrawal', 'content', '1'),
	(56, 0, 0, '', 1, '', 'Withdrawal 2', 'Withdrawal 2', 'Withdrawal 2', 'Withdrawal 2 content', 2, 5, '', '', 0,
	 3889897,
	 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:41', 0, 0, 'withdrawal-2', '', '', '', NULL,
	 'elements_withdrawal',
	 'content', '1'),
	(57, 0, 0, '', 1, '', 'Withdrawal 3', 'Withdrawal 3', 'Withdrawal 3', 'Withdrawal 3 content', 3, 5, '', '', 0,
	 3889898,
	 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:41', 0, 0, 'withdrawal-3', '', '', '', NULL,
	 'elements_withdrawal',
	 'content', '1'),
	(58, 0, 0, '', 1, '', 'Withdrawal 4', 'Withdrawal 4', 'Withdrawal 4', 'Withdrawal 4 content', 4, 5, '', '', 0,
	 3889899,
	 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:41', 0, 0, 'withdrawal-4', '', '', '', NULL,
	 'elements_withdrawal',
	 'content', '1'),
	(59, 0, 0, '', 2, '', 'Widerrufsrecht 1', 'Widerrufsrecht 1', 'Widerrufsrecht 1', '<p>
	Die Rechtstexte eines Onlineshops bilden den rechtlichen Rahmen f&uuml;r alle Gesch&auml;fte. Sie sind aber auch immer wieder ein Stolperstein f&uuml;r Onlineh&auml;ndler, denn fehlerhafte Rechtstexte sind ein h&auml;ufiger Grund f&uuml;r Abmahnungen. Die eigenen Rechtstexte immer auf dem neuesten Stand zu halten kann zeitaufw&auml;ndig und arbeitsintensiv sein.<br />
	<br />
	Individuelle Rechtstexte, von Fachanw&auml;lten erstellt, mit anwaltlicher Haftungs&uuml;bernahme sowie Update-Service, sind daher in allen Cloud-Tarifen bereits enthalten - ohne Zusatzkosten!<br />
	Melde dich einfach &uuml;ber das Cloud Portal (unter Gutscheine) an, um die Angebote unserer Rechtstexte-Partner zu nutzen.
</p>
', 1, 5, '', '', 1, 3889896, 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:40', 0, 0, 'widerrufsrecht-1', '', '',
	 '', NULL, 'elements_withdrawal', 'content', '1'),
	(60, 0, 0, '', 2, '', 'Widerrufsrecht 2', 'Widerrufsrecht 2', 'Widerrufsrecht 2', 'Widerrufsrecht 2 Inhalt', 2, 5,
	 '',
	 '', 0, 3889897, 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:40', 0, 0, 'widerrufsrecht-2', '', '', '', NULL,
	 'elements_withdrawal', 'content', '1'),
	(61, 0, 0, '', 2, '', 'Widerrufsrecht 3', 'Widerrufsrecht 3', 'Widerrufsrecht 3', 'Widerrufsrecht 3 Inhalt', 3, 5,
	 '',
	 '', 0, 3889898, 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:40', 0, 0, 'widerrufsrecht-3', '', '', '', NULL,
	 'elements_withdrawal', 'content', '1'),
	(62, 0, 0, '', 2, '', 'Widerrufsrecht 4', 'Widerrufsrecht 4', 'Widerrufsrecht 4', 'Widerrufsrecht 4 Inhalt', 4, 5,
	 '',
	 '', 0, 3889899, 0, '', '_blank', '1.0', 'never', '2020-04-28 11:52:40', 0, 0, 'widerrufsrecht-4', '', '', '', NULL,
	 'elements_withdrawal', 'content', '1'),
	(63, 0, 0, '', 1, '', 'Free Content 1', 'Free Content 1', '',
	 '<div class=\"row\">\r\n <div class=\"col-xs-6 col-md-12\">\r\n    <a class=\"teaser lightbox_iframe\" href=\"https://gambiocloud.com/de/hilfe/modal#\"><img alt=\"\" class=\"img-responsive\" src=\"images/next-to-slider-content-1.png\" /> </a>\r\n </div>\r\n\r\n  <div class=\"col-xs-6 col-md-12\">\r\n    <a class=\"teaser\" href=\"login_admin.php\"><img alt=\"\" class=\"img-responsive\" src=\"images/next-to-slider-content-2.png\" /> </a>\r\n </div>\r\n</div>\r\n',
	 0, 4, '', '', 1, 4321002, 0, '', '', '0.5', 'weekly', '2020-04-28 13:46:21', 0, 0, 'free-content-1', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(64, 0, 0, '', 1, '', 'Free Content 2', 'Free Content 2', '',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Homepage -&gt; Free Content 2 in the backend.</p>',
	 0, 4, '', '', 1, 4321003, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'free-content-2', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(65, 0, 0, '', 1, '', 'Free Content 3', 'Free Content 3', '',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Homepage -&gt; Free Content 3 in the backend.</p>',
	 0, 4, '', '', 1, 4321004, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'free-content-3', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(66, 0, 0, '', 2, '', 'Freier Inhalt 1', 'Freier Inhalt 1', '',
	 '<div class=\"row\">\r\n <div class=\"col-xs-6 col-md-12\">\r\n    <a class=\"teaser lightbox_iframe\" href=\"https://gambiocloud.com/de/hilfe/modal#\"><img alt=\"\" class=\"img-responsive\" src=\"images/next-to-slider-content-1.png\" /> </a>\r\n </div>\r\n\r\n  <div class=\"col-xs-6 col-md-12\">\r\n    <a class=\"teaser\" href=\"login_admin.php\"><img alt=\"\" class=\"img-responsive\" src=\"images/next-to-slider-content-2.png\" /> </a>\r\n </div>\r\n</div>\r\n',
	 0, 4, '', '', 1, 4321002, 0, '', '', '0.5', 'weekly', '2020-04-28 13:46:21', 0, 0, 'freier-inhalt-1', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(67, 0, 0, '', 2, '', 'Freier Inhalt 2', 'Freier Inhalt 2', '',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Startseite -&gt; Freier Content 2 bearbeiten.</p>',
	 0, 4, '', '', 1, 4321003, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'freier-inhalt-2', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(68, 0, 0, '', 2, '', 'Freier Inhalt 3', 'Freier Inhalt 3', '',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Startseite -&gt; Freier Content 3 bearbeiten.</p>',
	 0, 4, '', '', 1, 4321004, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'freier-inhalt-3', '', '', '',
	 NULL,
	 'elements_start', 'content', '1'),
	(69, 0, 0, '', 1, '', 'Footer column 2', 'Footer column 2', 'Footer column 2',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Footer -&gt; Footer column 2 in the backend.</p>',
	 0, 4, '', '', 1, 4321005, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'footer-column-2', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(70, 0, 0, '', 1, '', 'Footer column 3', 'Footer column 3', 'Footer column 3',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Footer -&gt; Footer column 3 in the backend.</p>',
	 0, 4, '', '', 1, 4321006, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'footer-column-3', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(71, 0, 0, '', 1, '', 'Footer column 4', 'Footer column 4', 'Footer column 4',
	 '<p>This text can be edited at Content Manager -&gt; Elements -&gt; Footer -&gt; Footer column 4 in the backend.</p>',
	 0, 4, '', '', 1, 4321007, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'footer-column-4', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(72, 0, 0, '', 2, '', 'Footer 2. Spalte', 'Footer Spalte 2', 'Footer Spalte 2',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Footer -&gt; Footer Spalte 2 bearbeiten.</p>',
	 0, 4, '', '', 1, 4321005, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'footer-spalte-2', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(73, 0, 0, '', 2, '', 'Footer Spalte 3', 'Footer Spalte 3', 'Footer Spalte 3',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Footer -&gt; Footer Spalte 3 bearbeiten.</p>',
	 0, 4, '', '', 1, 4321006, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'footer-spalte-3', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(74, 0, 0, '', 2, '', 'Footer Spalte 4', 'Footer Spalte 4', 'Footer Spalte 4',
	 '<p>Diesen Text kannst du im Gambio Admin unter Content Manager -&gt; Elemente -&gt; Footer -&gt; Footer Spalte 4 bearbeiten.</p>',
	 0, 4, '', '', 1, 4321007, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0, 'footer-spalte-4', '', '', '',
	 NULL,
	 'elements_footer', 'content', '1'),
	(75, 0, 0, '', 2, '', 'Datenweitergabe an Transportunternehmen', 'Datenweitergabe an Transportunternehmen',
	 'Datenweitergabe an Transportunternehmen',
	 'Meine E-Mail-Adresse und Telefonnummer darf zwecks meiner Information &uuml;ber den Versandstatus meiner Bestellung an das Transportunternehmen ({$VERSANDART_NAME}) weitergegeben werden.',
	 0, 1, '', '', 0, 3210123, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 0, 0,
	 'datenweitergabe-an-transportunternehmen', '', '', '', NULL, 'elements_others', 'content', '1'),
	(76, 0, 0, '', 1, '', 'Data transfer to carriers', 'Data transfer to carriers', 'Data transfer to carriers',
	 'My email address and telephone number may be passed on to the carrier ({$VERSANDART_NAME}) so I can receive information about the shipping status of my order.',
	 0, 1, '', '', 0, 3210123, 0, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 0, 0, 'data-transfer-to-carriers', '',
	 '',
	 '', NULL, 'elements_others', 'content', '1'),
	(77, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-13882d', '', '', 0, 0, '', '', 1,
	 4311000,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-13882d', '', '', '', NULL,
	 'elements_styleedit',
	 'content', ''),
	(78, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-13882d', '',
	 '<img alt=\"\" src=\"https://via.placeholder.com/1200\" class=\"img-responsive\">', 0, 0, '', '', 1, 4311000, 1,
	 '',
	 '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-13882d', '', '', '', NULL, 'elements_styleedit',
	 'content', ''),
	(79, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-cbf7bd', '',
	 '<div class=\"row\"> <div class=\"col-md-6\"> <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1> <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p> <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p> </div> <div class=\"col-md-6\"> <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p> <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. </p> </div> </div>',
	 0, 0, '', '', 1, 4311001, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-cbf7bd', '', '', '',
	 NULL, 'elements_styleedit', 'content', ''),
	(80, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-cbf7bd', '',
	 '<div class=\"row\"> <div class=\"col-md-6\"> <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1> <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p> <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p> </div> <div class=\"col-md-6\"> <p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.</p> <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. </p> </div> </div>',
	 0, 0, '', '', 1, 4311001, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-cbf7bd', '', '', '',
	 NULL, 'elements_styleedit', 'content', ''),
	(81, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-8f8dce', '',
	 '<p><strong>Lorem</strong><br><strong>Ipsum dolor</strong><br><strong>sit amet</strong></p>', 0, 0, '', '', 1,
	 4311002,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-8f8dce', '', '', '', NULL,
	 'elements_styleedit',
	 'content', ''),
	(82, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-8f8dce', '',
	 '<p><strong>Lorem</strong><br><strong>Ipsum dolor</strong><br><strong>sit amet</strong></p>', 0, 0, '', '', 1,
	 4311002,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-8f8dce', '', '', '', NULL,
	 'elements_styleedit',
	 'content', ''),
	(83, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-1ef6ff', '', '', 0, 0, '', '', 1,
	 4311003,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-1ef6ff', '', '', '', NULL,
	 'elements_styleedit',
	 'content', ''),
	(84, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-1ef6ff', '',
	 '<p><a href=\"#\">Shop now</a></p>', 0, 0, '', '', 1, 4311003, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40',
	 1, 0,
	 'styleedit-1ef6ff', '', '', '', NULL, 'elements_styleedit', 'content', ''),
	(85, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-a4e9d5', '', '', 0, 0, '', '', 1,
	 4311004,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-a4e9d5', '', '', '', NULL,
	 'elements_styleedit',
	 'content', ''),
	(86, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-a4e9d5', '',
	 '<p><a href=\"#\">Shop now</a></p>', 0, 0, '', '', 1, 4311004, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40',
	 1, 0,
	 'styleedit-a4e9d5', '', '', '', NULL, 'elements_styleedit', 'content', ''),
	(87, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-a4e9d5', '', '', 0, 0, '', '', 1,
	 4311005,
	 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:41', 1, 0, 'styleedit-a4e9d5-4311005', '', '', '', NULL,
	 'elements_styleedit', 'content', ''),
	(88, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-a4e9d5', '',
	 '<p><a href=\"#\">Shop now</a></p>', 0, 0, '', '', 1, 4311005, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40',
	 1, 0,
	 'styleedit-a4e9d5-4311005', '', '', '', NULL, 'elements_styleedit', 'content', ''),
	(89, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 1, '', '', 'StyleEdit-7df417', '',
	 '<div class=\"content vertical-align-center horizontal-align-center text-center\">   <p>Lorem<br>Ipsum</p> </div>',
	 0,
	 0, '', '', 1, 4311006, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-7df417', '', '', '',
	 NULL,
	 'elements_styleedit', 'content', ''),
	(90, 0, 0, 'c_0_group,c_1_group,c_2_group,c_3_group,', 2, '', '', 'StyleEdit-7df417', '',
	 '<div class=\"content vertical-align-center horizontal-align-center text-center\">\n  <p>Lorem<br>Ipsum</p>\n</div>',
	 0, 0, '', '', 1, 4311006, 1, '', '', '0.5', 'weekly', '2020-04-28 11:52:40', 1, 0, 'styleedit-7df417', '', '', '',
	 NULL, 'elements_styleedit', 'content', ''),
	(91, 0, 0, '', 2, '', '%SALE%', '%SALE%', '', '', 0, 3, '', '', 1, 3300002, 1, 'specials.php', '_top', '0.5',
	 'weekly',
	 '2020-04-28 13:40:55', 0, 0, 'sale', '', '', '', NULL, 'pages_main', 'link', ''),
	(92, 0, 0, '', 1, '', '%SALE%', '%SALE%', '', '', 0, 3, '', '', 1, 3300002, 1, 'specials.php', '_top', '0.5',
	 'weekly',
	 '2020-04-28 13:40:55', 0, 0, 'sale', '', '', '', NULL, 'pages_main', 'link', ''),
	(93, 0, 0, '', 1, '', 'Free Content 1 (Malibu)', 'Free Content 1 (Malibu)', '',
	 '<div class="row"><div class="col-xs-6 col-md-12"><a class="teaser lightbox_iframe" href="https://gambiocloud.com/de/hilfe/modal#"><img alt="" class="img-responsive" src="images/next-to-slider-content-1.png" /> </a> </div> <div class="col-xs-6 col-md-12"> <a class="teaser" href="login_admin.php"><img alt="" class="img-responsive" src="images/next-to-slider-content-2.png" /> </a> </div></div>',
	 0, 4, '', '', 1, 4321008, 0, '', '', '0.5', 'weekly', '2020-04-28 13:46:21', 0, 0, 'free-content-1-malibu', '', '',
	 '',
	 '1', 'elements_start', 'content', ''),
	(94, 0, 0, '', 2, '', 'Freier Inhalt 1 (Malibu)', 'Freier Inhalt 1 (Malibu)', '',
	 '<div class="row"><div class="col-xs-6 col-md-12"><a class="teaser lightbox_iframe" href="https://gambiocloud.com/de/hilfe/modal#"><img alt="" class="img-responsive" src="images/next-to-slider-content-1.png" /> </a> </div> <div class="col-xs-6 col-md-12"> <a class="teaser" href="login_admin.php"><img alt="" class="img-responsive" src="images/next-to-slider-content-2.png" /> </a> </div></div>',
	 0, 4, '', '', 1, 4321008, 0, '', '', '0.5', 'weekly', '2020-04-28 13:46:21', 0, 0, 'freier-inhalt-1-malibu', '',
	 '',
	 '', '1', 'elements_start', 'content', '');



--
-- Dumping data for table `content_manager_aliases`
--

TRUNCATE TABLE `content_manager_aliases`;

INSERT INTO `content_manager_aliases` (`content_group`, `content_alias`)
VALUES (4321008, 'Malibu-below-slider'),
	(4321009, 'Footer-column-1'),
	(4321005, 'Footer-column-2'),
	(4321006, 'Footer-column-3'),
	(4321007, 'Footer-column-4'),
	(4311000, '4311000'),
	(4311001, '4311001'),
	(4311002, '4311002'),
	(4311003, '4311003'),
	(4311004, '4311004'),
	(4311005, '4311005'),
	(4311006, '4311006');
