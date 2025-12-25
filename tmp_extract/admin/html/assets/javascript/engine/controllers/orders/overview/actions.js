'use strict';

/* --------------------------------------------------------------
 actions.js 2024-01-13
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2024 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * Main Table Actions
 *
 * This module creates the bulk and row actions for the table.
 */
gx.controllers.module('actions', [jse.source + '/vendor/jquery-deparam/jquery-deparam.min.js', 'user_configuration_service', gx.source + '/libs/button_dropdown'], function (data) {

    'use strict';

    // ------------------------------------------------------------------------
    // VARIABLES
    // ------------------------------------------------------------------------

    /**
     * Module Selector
     *
     * @type {jQuery}
     */

    var $this = $(this);

    /**
     * Module Instance
     *
     * @type {Object}
     */
    var module = {};

    // ------------------------------------------------------------------------
    // FUNCTIONS
    // ------------------------------------------------------------------------

    /**
     * Create Bulk Actions
     *
     * This callback can be called once during the initialization of this module.
     */
    function _createBulkActions() {
        // Add actions to the bulk-action dropdown.
        var $bulkActions = $('.bulk-action');
        var defaultBulkAction = $this.data('defaultBulkAction') || 'change-status';

        jse.libs.button_dropdown.bindDefaultAction($bulkActions, jse.core.registry.get('userId'), 'ordersOverviewBulkAction', jse.libs.user_configuration_service);

        // Change status
        jse.libs.button_dropdown.addAction($bulkActions, {
            text: jse.core.lang.translate('BUTTON_MULTI_CHANGE_ORDER_STATUS', 'orders'),
            class: 'change-status',
            data: { configurationValue: 'change-status' },
            isDefault: defaultBulkAction === 'change-status',
            callback: function callback(e) {
                return e.preventDefault();
            }
        });

        // Cancel
        jse.libs.button_dropdown.addAction($bulkActions, {
            text: jse.core.lang.translate('BUTTON_MULTI_CANCEL', 'orders'),
            class: 'cancel',
            data: { configurationValue: 'cancel' },
            isDefault: defaultBulkAction === 'cancel',
            callback: function callback(e) {
                return e.preventDefault();
            }
        });

        // Send order confirmation.
        jse.libs.button_dropdown.addAction($bulkActions, {
            text: jse.core.lang.translate('BUTTON_MULTI_SEND_ORDER', 'orders'),
            class: 'bulk-email-order',
            data: { configurationValue: 'bulk-email-order' },
            isDefault: defaultBulkAction === 'bulk-email-order',
            callback: function callback(e) {
                return e.preventDefault();
            }
        });

        if (data.isPdfCreatorInstalled === 1) {
            if (data.invoicesGranted) {
                // Send invoice.
                jse.libs.button_dropdown.addAction($bulkActions, {
                    text: jse.core.lang.translate('BUTTON_MULTI_SEND_INVOICE', 'orders'),
                    class: 'bulk-email-invoice',
                    data: { configurationValue: 'bulk-email-invoice' },
                    isDefault: defaultBulkAction === 'bulk-email-invoice',
                    callback: function callback(e) {
                        return e.preventDefault();
                    }
                });

                // Download invoices.
                jse.libs.button_dropdown.addAction($bulkActions, {
                    text: jse.core.lang.translate('TITLE_DOWNLOAD_INVOICES', 'orders'),
                    class: 'bulk-download-invoice',
                    data: { configurationValue: 'bulk-download-invoice' },
                    isDefault: defaultBulkAction === 'bulk-download-invoice',
                    callback: function callback(e) {
                        return e.preventDefault();
                    }
                });

                // Download packing slips.
                jse.libs.button_dropdown.addAction($bulkActions, {
                    text: jse.core.lang.translate('TITLE_DOWNLOAD_PACKINGSLIP', 'orders'),
                    class: 'bulk-download-packing-slip',
                    data: { configurationValue: 'bulk-download-packing-slip' },
                    isDefault: defaultBulkAction === 'bulk-download-packing-slip',
                    callback: function callback(e) {
                        return e.preventDefault();
                    }
                });
            }
        }

        $this.datatable_default_actions('ensure', 'bulk');
    }

    /**
     * Create Table Row Actions
     *
     * This function must be call with every table draw.dt event.
     */
    function _createRowActions() {
        // Re-create the checkbox widgets and the row actions.
        var defaultRowAction = $this.data('defaultRowAction') || 'edit';

        jse.libs.button_dropdown.bindDefaultAction($this.find('.btn-group.dropdown'), jse.core.registry.get('userId'), 'ordersOverviewRowAction', jse.libs.user_configuration_service);

        $this.find('.btn-group.dropdown').each(function () {
            var orderId = $(this).parents('tr').data('id');
            var editUrl = 'orders.php?' + $.param({
                oID: orderId,
                action: 'edit',
                overview: $.deparam(window.location.search.slice(1))
            });

            // Edit
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('TEXT_SHOW', 'orders'),
                href: editUrl,
                class: 'edit',
                data: { configurationValue: 'edit' },
                isDefault: defaultRowAction === 'edit'
            });

            // Change Status
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('TEXT_GM_STATUS', 'orders'),
                class: 'change-status',
                data: { configurationValue: 'change-status' },
                isDefault: defaultRowAction === 'change-status',
                callback: function callback(e) {
                    return e.preventDefault();
                }
            });

            // Cancel
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('BUTTON_GM_CANCEL', 'orders'),
                class: 'cancel',
                data: { configurationValue: 'cancel' },
                isDefault: defaultRowAction === 'cancel',
                callback: function callback(e) {
                    return e.preventDefault();
                }
            });
            if (data.isPdfCreatorInstalled === 1) {
                if (data.invoicesGranted) {
                    // Email Invoice
                    jse.libs.button_dropdown.addAction($(this), {
                        text: jse.core.lang.translate('TITLE_INVOICE_MAIL', 'orders'),
                        class: 'email-invoice',
                        data: { configurationValue: 'email-invoice' },
                        isDefault: defaultRowAction === 'email-invoice',
                        callback: function callback(e) {
                            return e.preventDefault();
                        }
                    });

                    if (data.hasInvoices === undefined) {
                        // Create Invoice
                        jse.libs.button_dropdown.addAction($(this), {
                            text: jse.core.lang.translate('TITLE_CREATE_INVOICE', 'orders'),
                            href: 'gm_pdf_order.php?oID=' + orderId + '&type=invoice',
                            target: '_blank',
                            class: 'create-invoice',
                            data: { configurationValue: 'create-invoice' },
                            isDefault: defaultRowAction === 'create-invoice',
                            callback: function callback(e) {
                                return e.preventDefault();
                            }
                        });
                    } else if (orderId in data.hasInvoices) {
                        // Show Invoice
                        jse.libs.button_dropdown.addAction($(this), {
                            text: jse.core.lang.translate('TITLE_SHOW_INVOICE', 'orders'),
                            class: 'show-invoice',
                            data: { configurationValue: 'show-invoice' },
                            isDefault: defaultRowAction === 'show-invoice',
                            callback: function callback(e) {
                                return e.preventDefault();
                            }
                        });
                    } else {
                        // Create Invoice
                        jse.libs.button_dropdown.addAction($(this), {
                            text: jse.core.lang.translate('TITLE_CREATE_INVOICE', 'orders'),
                            href: 'gm_pdf_order.php?oID=' + orderId + '&type=invoice',
                            target: '_blank',
                            class: 'create-invoice',
                            data: { configurationValue: 'create-invoice' },
                            isDefault: defaultRowAction === 'create-invoice',
                            callback: function callback(e) {
                                return e.preventDefault();
                            }
                        });
                    }

                    if (data.hasPackingSlips === undefined || !(orderId in data.hasPackingSlips)) {
                        // Create Packing Slip
                        jse.libs.button_dropdown.addAction($(this), {
                            text: jse.core.lang.translate('TITLE_CREATE_PACKINGSLIP', 'orders'),
                            href: 'gm_pdf_order.php?oID=' + orderId + '&type=packingslip',
                            target: '_blank',
                            class: 'packing-slip',
                            data: { configurationValue: 'packing-slip' },
                            isDefault: defaultRowAction === 'packing-slip'
                        });
                    } else {
                        // Show Packing Slip
                        jse.libs.button_dropdown.addAction($(this), {
                            text: jse.core.lang.translate('TITLE_SHOW_PACKINGSLIP', 'orders'),
                            class: 'show-packing-slip',
                            data: { configurationValue: 'show-packing-slip' },
                            isDefault: defaultRowAction === 'show-packing-slip',
                            callback: function callback(e) {
                                return e.preventDefault();
                            }
                        });
                    }
                }
            }

            // Email Order
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('TITLE_SEND_ORDER', 'orders'),
                class: 'email-order',
                data: { configurationValue: 'email-order' },
                isDefault: defaultRowAction === 'email-order',
                callback: function callback(e) {
                    return e.preventDefault();
                }
            });

            // Show Order Acceptance
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('TITLE_ORDER', 'orders'),
                href: 'gm_send_order.php?oID=' + orderId + '&type=order',
                target: '_blank',
                class: 'show-acceptance',
                data: { configurationValue: 'show-acceptance' },
                isDefault: defaultRowAction === 'show-acceptance'
            });

            if (data.withdrawalsGranted) {
                // Create Withdrawal
                jse.libs.button_dropdown.addAction($(this), {
                    text: jse.core.lang.translate('TEXT_CREATE_WITHDRAWAL', 'orders'),
                    href: '../withdrawal.php?order_id=' + orderId,
                    target: '_blank',
                    class: 'create-withdrawal',
                    data: { configurationValue: 'create-withdrawal' },
                    isDefault: defaultRowAction === 'create-withdrawal'
                });
            }

            // Add Tracking Code
            jse.libs.button_dropdown.addAction($(this), {
                text: jse.core.lang.translate('TXT_PARCEL_TRACKING_SENDBUTTON_TITLE', 'parcel_services'),
                class: 'add-tracking-number',
                data: { configurationValue: 'add-tracking-number' },
                isDefault: defaultRowAction === 'add-tracking-number',
                callback: function callback(e) {
                    return e.preventDefault();
                }
            });

            $this.datatable_default_actions('ensure', 'row');
        });
    }

    // ------------------------------------------------------------------------
    // INITIALIZATION
    // ------------------------------------------------------------------------

    module.init = function (done) {
        $(window).on('JSENGINE_INIT_FINISHED', function () {
            // If there is only a singular item, data.hasInvoices automatically becomes an array,
            // if there is more, it becomes a string(as this is an edge case, since arrays are
            // not natively supported by this implementation) so this is a fix for that scenario.
            if (typeof data.hasInvoices === 'string' && data.hasInvoices !== '') {
                data.hasInvoices = data.hasInvoices.replace(/\\/g, "");
                data.hasInvoices = JSON.parse(data.hasInvoices);
            }

            if (typeof data.hasPackingSlips === 'string' && data.hasPackingSlips !== '') {
                data.hasPackingSlips = data.hasPackingSlips.replace(/\\/g, "");
                data.hasPackingSlips = JSON.parse(data.hasPackingSlips);
            }

            $this.on('draw.dt', _createRowActions);
            _createRowActions();
            _createBulkActions();
        });

        done();
    };

    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm9yZGVycy9vdmVydmlldy9hY3Rpb25zLmpzIl0sIm5hbWVzIjpbImd4IiwiY29udHJvbGxlcnMiLCJtb2R1bGUiLCJqc2UiLCJzb3VyY2UiLCJkYXRhIiwiJHRoaXMiLCIkIiwiX2NyZWF0ZUJ1bGtBY3Rpb25zIiwiJGJ1bGtBY3Rpb25zIiwiZGVmYXVsdEJ1bGtBY3Rpb24iLCJsaWJzIiwiYnV0dG9uX2Ryb3Bkb3duIiwiYmluZERlZmF1bHRBY3Rpb24iLCJjb3JlIiwicmVnaXN0cnkiLCJnZXQiLCJ1c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZSIsImFkZEFjdGlvbiIsInRleHQiLCJsYW5nIiwidHJhbnNsYXRlIiwiY2xhc3MiLCJjb25maWd1cmF0aW9uVmFsdWUiLCJpc0RlZmF1bHQiLCJjYWxsYmFjayIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImlzUGRmQ3JlYXRvckluc3RhbGxlZCIsImludm9pY2VzR3JhbnRlZCIsImRhdGF0YWJsZV9kZWZhdWx0X2FjdGlvbnMiLCJfY3JlYXRlUm93QWN0aW9ucyIsImRlZmF1bHRSb3dBY3Rpb24iLCJmaW5kIiwiZWFjaCIsIm9yZGVySWQiLCJwYXJlbnRzIiwiZWRpdFVybCIsInBhcmFtIiwib0lEIiwiYWN0aW9uIiwib3ZlcnZpZXciLCJkZXBhcmFtIiwid2luZG93IiwibG9jYXRpb24iLCJzZWFyY2giLCJzbGljZSIsImhyZWYiLCJoYXNJbnZvaWNlcyIsInVuZGVmaW5lZCIsInRhcmdldCIsImhhc1BhY2tpbmdTbGlwcyIsIndpdGhkcmF3YWxzR3JhbnRlZCIsImluaXQiLCJkb25lIiwib24iLCJyZXBsYWNlIiwiSlNPTiIsInBhcnNlIl0sIm1hcHBpbmdzIjoiOztBQUFBOzs7Ozs7Ozs7O0FBVUE7Ozs7O0FBS0FBLEdBQUdDLFdBQUgsQ0FBZUMsTUFBZixDQUNJLFNBREosRUFHSSxDQUNPQyxJQUFJQyxNQURYLG1EQUVJLDRCQUZKLEVBR09KLEdBQUdJLE1BSFYsMkJBSEosRUFTSSxVQUFVQyxJQUFWLEVB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O0FBUUFyQixrQkFBTXdCLHlCQUFOLENBQWdDLFFBQWhDLEVBQTBDLEtBQTFDO0FBQ0gsU0EvSUQ7QUFnSkg7O0FBRUQ7QUFDQTtBQUNBOztBQUVBNUIsV0FBT21ELElBQVAsR0FBYyxVQUFVQyxJQUFWLEVBQWdCO0FBQzFCL0MsVUFBRW9DLE1BQUYsRUFBVVksRUFBVixDQUFhLHdCQUFiLEVBQXVDLFlBQU07QUFDekM7QUFDQTtBQUNBO0FBQ0EsZ0JBQUksT0FBT2xELEtBQUsyQyxXQUFaLEtBQTRCLFFBQTVCLElBQXdDM0MsS0FBSzJDLFdBQUwsS0FBcUIsRUFBakUsRUFBcUU7QUFDakUzQyxxQkFBSzJDLFdBQUwsR0FBbUIzQyxLQUFLMkMsV0FBTCxDQUFpQlEsT0FBakIsQ0FBeUIsS0FBekIsRUFBZ0MsRUFBaEMsQ0FBbkI7QUFDQW5ELHFCQUFLMkMsV0FBTCxHQUFtQlMsS0FBS0MsS0FBTCxDQUFXckQsS0FBSzJDLFdBQWhCLENBQW5CO0FBQ0g7O0FBRUosZ0JBQUksT0FBTzNDLEtBQUs4QyxlQUFaLEtBQWdDLFFBQWhDLElBQTRDOUMsS0FBSzhDLGVBQUwsS0FBeUIsRUFBekUsRUFBNkU7QUFDNUU5QyxxQkFBSzhDLGVBQUwsR0FBdUI5QyxLQUFLOEMsZUFBTCxDQUFxQkssT0FBckIsQ0FBNkIsS0FBN0IsRUFBb0MsRUFBcEMsQ0FBdkI7QUFDQW5ELHFCQUFLOEMsZUFBTCxHQUF1Qk0sS0FBS0MsS0FBTCxDQUFXckQsS0FBSzhDLGVBQWhCLENBQXZCO0FBQ0E7O0FBRUU3QyxrQkFBTWlELEVBQU4sQ0FBUyxTQUFULEVBQW9CeEIsaUJBQXBCO0FBQ0FBO0FBQ0F2QjtBQUNILFNBakJEOztBQW1CQThDO0FBQ0gsS0FyQkQ7O0FBdUJBLFdBQU9wRCxNQUFQO0FBRUgsQ0F4U0wiLCJmaWxlIjoib3JkZXJzL292ZXJ2aWV3L2FjdGlvbnMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuIGFjdGlvbnMuanMgMjAyNC0wMS0xM1xuIEdhbWJpbyBHbWJIXG4gaHR0cDovL3d3dy5nYW1iaW8uZGVcbiBDb3B5cmlnaHQgKGMpIDIwMjQgR2FtYmlvIEdtYkhcbiBSZWxlYXNlZCB1bmRlciB0aGUgR05VIEdlbmVyYWwgUHVibGljIExpY2Vuc2UgKFZlcnNpb24gMilcbiBbaHR0cDovL3d3dy5nbnUub3JnL2xpY2Vuc2VzL2dwbC0yLjAuaHRtbF1cbiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICovXG5cbi8qKlxuICogTWFpbiBUYWJsZSBBY3Rpb25zXG4gKlxuICogVGhpcyBtb2R1bGUgY3JlYXRlcyB0aGUgYnVsayBhbmQgcm93IGFjdGlvbnMgZm9yIHRoZSB0YWJsZS5cbiAqL1xuZ3guY29udHJvbGxlcnMubW9kdWxlKFxuICAgICdhY3Rpb25zJyxcblxuICAgIFtcbiAgICAgICAgYCR7anNlLnNvdXJjZX0vdmVuZG9yL2pxdWVyeS1kZXBhcmFtL2pxdWVyeS1kZXBhcmFtLm1pbi5qc2AsXG4gICAgICAgICd1c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZScsXG4gICAgICAgIGAke2d4LnNvdXJjZX0vbGlicy9idXR0b25fZHJvcGRvd25gXG4gICAgXSxcblxuICAgIGZ1bmN0aW9uIChkYXRhKSB7XG5cbiAgICAgICAgJ3VzZSBzdHJpY3QnO1xuXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgICAgICAvLyBWQVJJQUJMRVNcbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIE1vZHVsZSBTZWxlY3RvclxuICAgICAgICAgKlxuICAgICAgICAgKiBAdHlwZSB7alF1ZXJ5fVxuICAgICAgICAgKi9cbiAgICAgICAgY29uc3QgJHRoaXMgPSAkKHRoaXMpO1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBNb2R1bGUgSW5zdGFuY2VcbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge09iamVjdH1cbiAgICAgICAgICovXG4gICAgICAgIGNvbnN0IG1vZHVsZSA9IHt9O1xuXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgICAgICAvLyBGVU5DVElPTlNcbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIENyZWF0ZSBCdWxrIEFjdGlvbnNcbiAgICAgICAgICpcbiAgICAgICAgICogVGhpcyBjYWxsYmFjayBjYW4gYmUgY2FsbGVkIG9uY2UgZHVyaW5nIHRoZSBpbml0aWFsaXphdGlvbiBvZiB0aGlzIG1vZHVsZS5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9jcmVhdGVCdWxrQWN0aW9ucygpIHtcbiAgICAgICAgICAgIC8vIEFkZCBhY3Rpb25zIHRvIHRoZSBidWxrLWFjdGlvbiBkcm9wZG93bi5cbiAgICAgICAgICAgIGNvbnN0ICRidWxrQWN0aW9ucyA9ICQoJy5idWxrLWFjdGlvbicpO1xuICAgICAgICAgICAgY29uc3QgZGVmYXVsdEJ1bGtBY3Rpb24gPSAkdGhpcy5kYXRhKCdkZWZhdWx0QnVsa0FjdGlvbicpIHx8ICdjaGFuZ2Utc3RhdHVzJztcblxuICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmJpbmREZWZhdWx0QWN0aW9uKCRidWxrQWN0aW9ucywganNlLmNvcmUucmVnaXN0cnkuZ2V0KCd1c2VySWQnKSxcbiAgICAgICAgICAgICAgICAnb3JkZXJzT3ZlcnZpZXdCdWxrQWN0aW9uJywganNlLmxpYnMudXNlcl9jb25maWd1cmF0aW9uX3NlcnZpY2UpO1xuXG4gICAgICAgICAgICAvLyBDaGFuZ2Ugc3RhdHVzXG4gICAgICAgICAgICBqc2UubGlicy5idXR0b25fZHJvcGRvd24uYWRkQWN0aW9uKCRidWxrQWN0aW9ucywge1xuICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdCVVRUT05fTVVMVElfQ0hBTkdFX09SREVSX1NUQVRVUycsICdvcmRlcnMnKSxcbiAgICAgICAgICAgICAgICBjbGFzczogJ2NoYW5nZS1zdGF0dXMnLFxuICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdjaGFuZ2Utc3RhdHVzJ30sXG4gICAgICAgICAgICAgICAgaXNEZWZhdWx0OiBkZWZhdWx0QnVsa0FjdGlvbiA9PT0gJ2NoYW5nZS1zdGF0dXMnLFxuICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vIENhbmNlbFxuICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkYnVsa0FjdGlvbnMsIHtcbiAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnQlVUVE9OX01VTFRJX0NBTkNFTCcsICdvcmRlcnMnKSxcbiAgICAgICAgICAgICAgICBjbGFzczogJ2NhbmNlbCcsXG4gICAgICAgICAgICAgICAgZGF0YToge2NvbmZpZ3VyYXRpb25WYWx1ZTogJ2NhbmNlbCd9LFxuICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdEJ1bGtBY3Rpb24gPT09ICdjYW5jZWwnLFxuICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vIFNlbmQgb3JkZXIgY29uZmlybWF0aW9uLlxuICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkYnVsa0FjdGlvbnMsIHtcbiAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnQlVUVE9OX01VTFRJX1NFTkRfT1JERVInLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgY2xhc3M6ICdidWxrLWVtYWlsLW9yZGVyJyxcbiAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnYnVsay1lbWFpbC1vcmRlcid9LFxuICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdEJ1bGtBY3Rpb24gPT09ICdidWxrLWVtYWlsLW9yZGVyJyxcbiAgICAgICAgICAgICAgICBjYWxsYmFjazogZSA9PiBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICBpZiAoZGF0YS5pc1BkZkNyZWF0b3JJbnN0YWxsZWQgPT09IDEpIHtcbiAgICAgICAgICAgICAgICBpZiAoZGF0YS5pbnZvaWNlc0dyYW50ZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgLy8gU2VuZCBpbnZvaWNlLlxuICAgICAgICAgICAgICAgICAgICBqc2UubGlicy5idXR0b25fZHJvcGRvd24uYWRkQWN0aW9uKCRidWxrQWN0aW9ucywge1xuICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDoganNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ0JVVFRPTl9NVUxUSV9TRU5EX0lOVk9JQ0UnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2J1bGstZW1haWwtaW52b2ljZScsXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnYnVsay1lbWFpbC1pbnZvaWNlJ30sXG4gICAgICAgICAgICAgICAgICAgICAgICBpc0RlZmF1bHQ6IGRlZmF1bHRCdWxrQWN0aW9uID09PSAnYnVsay1lbWFpbC1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBEb3dubG9hZCBpbnZvaWNlcy5cbiAgICAgICAgICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkYnVsa0FjdGlvbnMsIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdUSVRMRV9ET1dOTE9BRF9JTlZPSUNFUycsICdvcmRlcnMnKSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnYnVsay1kb3dubG9hZC1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdidWxrLWRvd25sb2FkLWludm9pY2UnfSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdEJ1bGtBY3Rpb24gPT09ICdidWxrLWRvd25sb2FkLWludm9pY2UnLFxuICAgICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGUgPT4gZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIERvd25sb2FkIHBhY2tpbmcgc2xpcHMuXG4gICAgICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJGJ1bGtBY3Rpb25zLCB7XG4gICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVElUTEVfRE9XTkxPQURfUEFDS0lOR1NMSVAnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2J1bGstZG93bmxvYWQtcGFja2luZy1zbGlwJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdidWxrLWRvd25sb2FkLXBhY2tpbmctc2xpcCd9LFxuICAgICAgICAgICAgICAgICAgICAgICAgaXNEZWZhdWx0OiBkZWZhdWx0QnVsa0FjdGlvbiA9PT0gJ2J1bGstZG93bmxvYWQtcGFja2luZy1zbGlwJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICR0aGlzLmRhdGF0YWJsZV9kZWZhdWx0X2FjdGlvbnMoJ2Vuc3VyZScsICdidWxrJyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogQ3JlYXRlIFRhYmxlIFJvdyBBY3Rpb25zXG4gICAgICAgICAqXG4gICAgICAgICAqIFRoaXMgZnVuY3Rpb24gbXVzdCBiZSBjYWxsIHdpdGggZXZlcnkgdGFibGUgZHJhdy5kdCBldmVudC5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9jcmVhdGVSb3dBY3Rpb25zKCkge1xuICAgICAgICAgICAgLy8gUmUtY3JlYXRlIHRoZSBjaGVja2JveCB3aWRnZXRzIGFuZCB0aGUgcm93IGFjdGlvbnMuXG4gICAgICAgICAgICBjb25zdCBkZWZhdWx0Um93QWN0aW9uID0gJHRoaXMuZGF0YSgnZGVmYXVsdFJvd0FjdGlvbicpIHx8ICdlZGl0JztcblxuICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmJpbmREZWZhdWx0QWN0aW9uKCR0aGlzLmZpbmQoJy5idG4tZ3JvdXAuZHJvcGRvd24nKSxcbiAgICAgICAgICAgICAgICBqc2UuY29yZS5yZWdpc3RyeS5nZXQoJ3VzZXJJZCcpLCAnb3JkZXJzT3ZlcnZpZXdSb3dBY3Rpb24nLCBqc2UubGlicy51c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZSk7XG5cbiAgICAgICAgICAgICR0aGlzLmZpbmQoJy5idG4tZ3JvdXAuZHJvcGRvd24nKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICBjb25zdCBvcmRlcklkID0gJCh0aGlzKS5wYXJlbnRzKCd0cicpLmRhdGEoJ2lkJyk7XG4gICAgICAgICAgICAgICAgY29uc3QgZWRpdFVybCA9ICdvcmRlcnMucGhwPycgKyAkLnBhcmFtKHtcbiAgICAgICAgICAgICAgICAgICAgb0lEOiBvcmRlcklkLFxuICAgICAgICAgICAgICAgICAgICBhY3Rpb246ICdlZGl0JyxcbiAgICAgICAgICAgICAgICAgICAgb3ZlcnZpZXc6ICQuZGVwYXJhbSh3aW5kb3cubG9jYXRpb24uc2VhcmNoLnNsaWNlKDEpKVxuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgLy8gRWRpdFxuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVEVYVF9TSE9XJywgJ29yZGVycycpLFxuICAgICAgICAgICAgICAgICAgICBocmVmOiBlZGl0VXJsLFxuICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2VkaXQnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnZWRpdCd9LFxuICAgICAgICAgICAgICAgICAgICBpc0RlZmF1bHQ6IGRlZmF1bHRSb3dBY3Rpb24gPT09ICdlZGl0J1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgLy8gQ2hhbmdlIFN0YXR1c1xuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVEVYVF9HTV9TVEFUVVMnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnY2hhbmdlLXN0YXR1cycsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdjaGFuZ2Utc3RhdHVzJ30sXG4gICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2NoYW5nZS1zdGF0dXMnLFxuICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZSA9PiBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIC8vIENhbmNlbFxuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnQlVUVE9OX0dNX0NBTkNFTCcsICdvcmRlcnMnKSxcbiAgICAgICAgICAgICAgICAgICAgY2xhc3M6ICdjYW5jZWwnLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnY2FuY2VsJ30sXG4gICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2NhbmNlbCcsXG4gICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIGlmIChkYXRhLmlzUGRmQ3JlYXRvckluc3RhbGxlZCA9PT0gMSkge1xuICAgICAgICAgICAgICAgICAgICBpZiAoZGF0YS5pbnZvaWNlc0dyYW50ZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIC8vIEVtYWlsIEludm9pY2VcbiAgICAgICAgICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdUSVRMRV9JTlZPSUNFX01BSUwnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3M6ICdlbWFpbC1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnZW1haWwtaW52b2ljZSd9LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2VtYWlsLWludm9pY2UnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNhbGxiYWNrOiBlID0+IGUucHJldmVudERlZmF1bHQoKVxuICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChkYXRhLmhhc0ludm9pY2VzID09PSB1bmRlZmluZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAvLyBDcmVhdGUgSW52b2ljZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVElUTEVfQ1JFQVRFX0lOVk9JQ0UnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY6IGBnbV9wZGZfb3JkZXIucGhwP29JRD0ke29yZGVySWR9JnR5cGU9aW52b2ljZWAsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhcmdldDogJ19ibGFuaycsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnY3JlYXRlLWludm9pY2UnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnY3JlYXRlLWludm9pY2UnfSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgaXNEZWZhdWx0OiBkZWZhdWx0Um93QWN0aW9uID09PSAnY3JlYXRlLWludm9pY2UnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZSA9PiBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSBpZiAob3JkZXJJZCBpbiBkYXRhLmhhc0ludm9pY2VzKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gU2hvdyBJbnZvaWNlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkKHRoaXMpLCB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdUSVRMRV9TSE9XX0lOVk9JQ0UnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGNsYXNzOiAnc2hvdy1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YToge2NvbmZpZ3VyYXRpb25WYWx1ZTogJ3Nob3ctaW52b2ljZSd9LFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBpc0RlZmF1bHQ6IGRlZmF1bHRSb3dBY3Rpb24gPT09ICdzaG93LWludm9pY2UnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjYWxsYmFjazogZSA9PiBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgLy8gQ3JlYXRlIEludm9pY2VcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBqc2UubGlicy5idXR0b25fZHJvcGRvd24uYWRkQWN0aW9uKCQodGhpcyksIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDoganNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ1RJVExFX0NSRUFURV9JTlZPSUNFJywgJ29yZGVycycpLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBocmVmOiBgZ21fcGRmX29yZGVyLnBocD9vSUQ9JHtvcmRlcklkfSZ0eXBlPWludm9pY2VgLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YXJnZXQ6ICdfYmxhbmsnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2NyZWF0ZS1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZGF0YToge2NvbmZpZ3VyYXRpb25WYWx1ZTogJ2NyZWF0ZS1pbnZvaWNlJ30sXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2NyZWF0ZS1pbnZvaWNlJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGUgPT4gZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG5cblx0ICAgICAgICAgICAgICAgICAgICBpZiAoZGF0YS5oYXNQYWNraW5nU2xpcHMgPT09IHVuZGVmaW5lZCB8fCAhKG9yZGVySWQgaW4gZGF0YS5oYXNQYWNraW5nU2xpcHMpKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAvLyBDcmVhdGUgUGFja2luZyBTbGlwXG4gICAgICAgICAgICAgICAgICAgICAgICBqc2UubGlicy5idXR0b25fZHJvcGRvd24uYWRkQWN0aW9uKCQodGhpcyksIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVElUTEVfQ1JFQVRFX1BBQ0tJTkdTTElQJywgJ29yZGVycycpLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGhyZWY6IGBnbV9wZGZfb3JkZXIucGhwP29JRD0ke29yZGVySWR9JnR5cGU9cGFja2luZ3NsaXBgLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIHRhcmdldDogJ19ibGFuaycsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3M6ICdwYWNraW5nLXNsaXAnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdwYWNraW5nLXNsaXAnfSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpc0RlZmF1bHQ6IGRlZmF1bHRSb3dBY3Rpb24gPT09ICdwYWNraW5nLXNsaXAnXG4gICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgZWxzZSB7XG5cdCAgICAgICAgICAgICAgICAgICAgICAgIC8vIFNob3cgUGFja2luZyBTbGlwXG5cdCAgICAgICAgICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuXHQgICAgICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDoganNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ1RJVExFX1NIT1dfUEFDS0lOR1NMSVAnLCAnb3JkZXJzJyksXG5cdCAgICAgICAgICAgICAgICAgICAgICAgICAgICBjbGFzczogJ3Nob3ctcGFja2luZy1zbGlwJyxcblx0ICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdzaG93LXBhY2tpbmctc2xpcCd9LFxuXHQgICAgICAgICAgICAgICAgICAgICAgICAgICAgaXNEZWZhdWx0OiBkZWZhdWx0Um93QWN0aW9uID09PSAnc2hvdy1wYWNraW5nLXNsaXAnLFxuXHQgICAgICAgICAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGUgPT4gZS5wcmV2ZW50RGVmYXVsdCgpXG5cdCAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xuXHQgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIC8vIEVtYWlsIE9yZGVyXG4gICAgICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkKHRoaXMpLCB7XG4gICAgICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdUSVRMRV9TRU5EX09SREVSJywgJ29yZGVycycpLFxuICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2VtYWlsLW9yZGVyJyxcbiAgICAgICAgICAgICAgICAgICAgZGF0YToge2NvbmZpZ3VyYXRpb25WYWx1ZTogJ2VtYWlsLW9yZGVyJ30sXG4gICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2VtYWlsLW9yZGVyJyxcbiAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGUgPT4gZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgLy8gU2hvdyBPcmRlciBBY2NlcHRhbmNlXG4gICAgICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLmFkZEFjdGlvbigkKHRoaXMpLCB7XG4gICAgICAgICAgICAgICAgICAgIHRleHQ6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdUSVRMRV9PUkRFUicsICdvcmRlcnMnKSxcbiAgICAgICAgICAgICAgICAgICAgaHJlZjogYGdtX3NlbmRfb3JkZXIucGhwP29JRD0ke29yZGVySWR9JnR5cGU9b3JkZXJgLFxuICAgICAgICAgICAgICAgICAgICB0YXJnZXQ6ICdfYmxhbmsnLFxuICAgICAgICAgICAgICAgICAgICBjbGFzczogJ3Nob3ctYWNjZXB0YW5jZScsXG4gICAgICAgICAgICAgICAgICAgIGRhdGE6IHtjb25maWd1cmF0aW9uVmFsdWU6ICdzaG93LWFjY2VwdGFuY2UnfSxcbiAgICAgICAgICAgICAgICAgICAgaXNEZWZhdWx0OiBkZWZhdWx0Um93QWN0aW9uID09PSAnc2hvdy1hY2NlcHRhbmNlJ1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgaWYgKGRhdGEud2l0aGRyYXdhbHNHcmFudGVkKSB7XG4gICAgICAgICAgICAgICAgICAgIC8vIENyZWF0ZSBXaXRoZHJhd2FsXG4gICAgICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICAgICAgdGV4dDoganNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ1RFWFRfQ1JFQVRFX1dJVEhEUkFXQUwnLCAnb3JkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgICAgICBocmVmOiBgLi4vd2l0aGRyYXdhbC5waHA/b3JkZXJfaWQ9JHtvcmRlcklkfWAsXG4gICAgICAgICAgICAgICAgICAgICAgICB0YXJnZXQ6ICdfYmxhbmsnLFxuICAgICAgICAgICAgICAgICAgICAgICAgY2xhc3M6ICdjcmVhdGUtd2l0aGRyYXdhbCcsXG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnY3JlYXRlLXdpdGhkcmF3YWwnfSxcbiAgICAgICAgICAgICAgICAgICAgICAgIGlzRGVmYXVsdDogZGVmYXVsdFJvd0FjdGlvbiA9PT0gJ2NyZWF0ZS13aXRoZHJhd2FsJ1xuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAvLyBBZGQgVHJhY2tpbmcgQ29kZVxuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5hZGRBY3Rpb24oJCh0aGlzKSwge1xuICAgICAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnVFhUX1BBUkNFTF9UUkFDS0lOR19TRU5EQlVUVE9OX1RJVExFJywgJ3BhcmNlbF9zZXJ2aWNlcycpLFxuICAgICAgICAgICAgICAgICAgICBjbGFzczogJ2FkZC10cmFja2luZy1udW1iZXInLFxuICAgICAgICAgICAgICAgICAgICBkYXRhOiB7Y29uZmlndXJhdGlvblZhbHVlOiAnYWRkLXRyYWNraW5nLW51bWJlcid9LFxuICAgICAgICAgICAgICAgICAgICBpc0RlZmF1bHQ6IGRlZmF1bHRSb3dBY3Rpb24gPT09ICdhZGQtdHJhY2tpbmctbnVtYmVyJyxcbiAgICAgICAgICAgICAgICAgICAgY2FsbGJhY2s6IGUgPT4gZS5wcmV2ZW50RGVmYXVsdCgpXG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICAkdGhpcy5kYXRhdGFibGVfZGVmYXVsdF9hY3Rpb25zKCdlbnN1cmUnLCAncm93Jyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgICAgICAvLyBJTklUSUFMSVpBVElPTlxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAgICAgICBtb2R1bGUuaW5pdCA9IGZ1bmN0aW9uIChkb25lKSB7XG4gICAgICAgICAgICAkKHdpbmRvdykub24oJ0pTRU5HSU5FX0lOSVRfRklOSVNIRUQnLCAoKSA9PiB7XG4gICAgICAgICAgICAgICAgLy8gSWYgdGhlcmUgaXMgb25seSBhIHNpbmd1bGFyIGl0ZW0sIGRhdGEuaGFzSW52b2ljZXMgYXV0b21hdGljYWxseSBiZWNvbWVzIGFuIGFycmF5LFxuICAgICAgICAgICAgICAgIC8vIGlmIHRoZXJlIGlzIG1vcmUsIGl0IGJlY29tZXMgYSBzdHJpbmcoYXMgdGhpcyBpcyBhbiBlZGdlIGNhc2UsIHNpbmNlIGFycmF5cyBhcmVcbiAgICAgICAgICAgICAgICAvLyBub3QgbmF0aXZlbHkgc3VwcG9ydGVkIGJ5IHRoaXMgaW1wbGVtZW50YXRpb24pIHNvIHRoaXMgaXMgYSBmaXggZm9yIHRoYXQgc2NlbmFyaW8uXG4gICAgICAgICAgICAgICAgaWYgKHR5cGVvZiBkYXRhLmhhc0ludm9pY2VzID09PSAnc3RyaW5nJyAmJiBkYXRhLmhhc0ludm9pY2VzICE9PSAnJykge1xuICAgICAgICAgICAgICAgICAgICBkYXRhLmhhc0ludm9pY2VzID0gZGF0YS5oYXNJbnZvaWNlcy5yZXBsYWNlKC9cXFxcL2csIFwiXCIpO1xuICAgICAgICAgICAgICAgICAgICBkYXRhLmhhc0ludm9pY2VzID0gSlNPTi5wYXJzZShkYXRhLmhhc0ludm9pY2VzKTtcbiAgICAgICAgICAgICAgICB9XG5cdFxuXHQgICAgICAgICAgICBpZiAodHlwZW9mIGRhdGEuaGFzUGFja2luZ1NsaXBzID09PSAnc3RyaW5nJyAmJiBkYXRhLmhhc1BhY2tpbmdTbGlwcyAhPT0gJycpIHtcblx0XHQgICAgICAgICAgICBkYXRhLmhhc1BhY2tpbmdTbGlwcyA9IGRhdGEuaGFzUGFja2luZ1NsaXBzLnJlcGxhY2UoL1xcXFwvZywgXCJcIik7XG5cdCAgICAgICAgICAgIFx0ZGF0YS5oYXNQYWNraW5nU2xpcHMgPSBKU09OLnBhcnNlKGRhdGEuaGFzUGFja2luZ1NsaXBzKTtcblx0ICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgICR0aGlzLm9uKCdkcmF3LmR0JywgX2NyZWF0ZVJvd0FjdGlvbnMpO1xuICAgICAgICAgICAgICAgIF9jcmVhdGVSb3dBY3Rpb25zKCk7XG4gICAgICAgICAgICAgICAgX2NyZWF0ZUJ1bGtBY3Rpb25zKCk7XG4gICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgZG9uZSgpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHJldHVybiBtb2R1bGU7XG5cbiAgICB9KTtcbiJdfQ==
