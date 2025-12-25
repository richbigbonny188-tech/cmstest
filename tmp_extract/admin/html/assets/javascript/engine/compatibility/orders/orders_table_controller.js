'use strict';

/* --------------------------------------------------------------
 orders_table_controller.js 2024-01-13
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2024 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * ## Orders Table Controller
 *
 * This controller contains the mapping logic of the orders table.
 *
 * @module Compatibility/orders_table_controller
 */
gx.compatibility.module('orders_table_controller', [gx.source + '/libs/action_mapper', gx.source + '/libs/button_dropdown'],

/**  @lends module:Compatibility/orders_table_controller */

function (data) {

    'use strict';

    // ------------------------------------------------------------------------
    // VARIABLES DEFINITION
    // ------------------------------------------------------------------------

    var
    /**
     * Module Selector
     *
     * @var {object}
     */
    $this = $(this),


    /**
     * Default Options
     *
     * @type {object}
     */
    defaults = {},


    /**
     * Final Options
     *
     * @var {object}
     */
    options = $.extend(true, {}, defaults, data),


    /**
     * Array of mapped buttons
     *
     * @var Array
     */
    mappedButtons = [],


    /**
     * The mapper library
     *
     * @var {object}
     */
    mapper = jse.libs.action_mapper,


    /**
     * Module Object
     *
     * @type {object}
     */
    module = {};

    // ------------------------------------------------------------------------
    // PRIVATE METHODS
    // ------------------------------------------------------------------------

    /**
     * Disable/Enable the buttons on the bottom button-dropdown
     * dependent on the checkboxes selection
     * @private
     */
    var _toggleMultiActionButton = function _toggleMultiActionButton() {
        var $checked = $('tr[data-row-id] input[type="checkbox"]:checked');
        $('.js-bottom-dropdown button').prop('disabled', !$checked.length);
    };

    /**
     * Map actions for every row in the table.
     *
     * This method will map the actions for each
     * row of the table.
     *
     * @private
     */
    var _mapRowAction = function _mapRowAction($that) {
        /**
         * Reference to the row action dropdown
         * @var {object | jQuery}
         */
        var $dropdown = $that.find('.js-button-dropdown');

        if ($dropdown.length) {
            _mapRowButtonDropdown($dropdown);
        }
    };

    var _mapRowButtonDropdown = function _mapRowButtonDropdown($dropdown) {
        var actions = ['TEXT_SHOW', 'TEXT_GM_STATUS', 'delete', 'BUTTON_GM_CANCEL', 'BUTTON_CREATE_INVOICE', 'TITLE_INVOICE_MAIL', 'BUTTON_CREATE_PACKING_SLIP', 'TITLE_ORDER', 'TITLE_SEND_ORDER', 'TEXT_CREATE_WITHDRAWAL', 'TXT_PARCEL_TRACKING_SENDBUTTON_TITLE', 'BUTTON_DHL_LABEL', 'MAILBEEZ_OVERVIEW', 'MAILBEEZ_NOTIFICATIONS', 'MAILBEEZ_CONVERSATIONS', 'BUTTON_HERMES'];

        for (var index in actions) {
            _bindEventHandler($dropdown, actions[index], '.single-order-dropdown');
        }
    };

    /**
     * Defines the language section for each text tile
     *
     * @type {object}
     * @private
     */
    var _sectionMapping = {
        'TEXT_SHOW': 'orders',
        'TEXT_GM_STATUS': 'orders',
        'delete': 'buttons',
        'BUTTON_GM_CANCEL': 'orders',
        'BUTTON_CREATE_INVOICE': 'orders',
        'TITLE_INVOICE_MAIL': 'orders',
        'BUTTON_CREATE_PACKING_SLIP': 'orders',
        'TITLE_ORDER': 'orders',
        'TITLE_SEND_ORDER': 'orders',
        'TEXT_CREATE_WITHDRAWAL': 'orders',
        'TXT_PARCEL_TRACKING_SENDBUTTON_TITLE': 'parcel_services',
        'BUTTON_DHL_LABEL': 'orders',
        'MAILBEEZ_OVERVIEW': 'orders',
        'MAILBEEZ_NOTIFICATIONS': 'orders',
        'MAILBEEZ_CONVERSATIONS': 'orders',
        'BUTTON_MULTI_CANCEL': 'orders',
        'BUTTON_MULTI_CHANGE_ORDER_STATUS': 'orders',
        'BUTTON_MULTI_DELETE': 'orders',
        'BUTTON_HERMES': 'orders',
        'get_labels': 'iloxx'
    };

    /**
     * Defines target selectors
     *
     * @type {object}
     * @private
     */
    var _selectorMapping = {
        'TEXT_SHOW': '.contentTable .infoBoxContent a.btn-details',
        'TEXT_GM_STATUS': '.contentTable .infoBoxContent a.btn-update_order_status',
        'delete': '.contentTable .infoBoxContent a.btn-delete',
        'BUTTON_GM_CANCEL': '.contentTable .infoBoxContent .GM_CANCEL',
        'BUTTON_CREATE_INVOICE': '.contentTable .infoBoxContent a.btn-invoice',
        'TITLE_INVOICE_MAIL': '.contentTable .infoBoxContent .GM_INVOICE_MAIL',
        'BUTTON_CREATE_PACKING_SLIP': '.contentTable .infoBoxContent a.btn-packing_slip',
        'TITLE_SEND_ORDER': '.contentTable .infoBoxContent .GM_SEND_ORDER',
        'TEXT_CREATE_WITHDRAWAL': '.contentTable .infoBoxContent a.btn-create_withdrawal',
        'TXT_PARCEL_TRACKING_SENDBUTTON_TITLE': '.contentTable .infoBoxContent a.btn-add_tracking_code',
        'BUTTON_DHL_LABEL': '.contentTable .infoBoxContent a.btn-dhl_label',
        'MAILBEEZ_OVERVIEW': '.contentTable .infoBoxContent a.context_view_button.btn_left',
        'MAILBEEZ_NOTIFICATIONS': '.contentTable .infoBoxContent a.context_view_button.btn_middle',
        'MAILBEEZ_CONVERSATIONS': '.contentTable .infoBoxContent a.context_view_button.btn_right',
        'BUTTON_MULTI_CANCEL': '.contentTable .infoBoxContent a.btn-multi_cancel',
        'BUTTON_MULTI_CHANGE_ORDER_STATUS': '.contentTable .infoBoxContent a.btn-update_order_status',
        'BUTTON_MULTI_DELETE': '.contentTable .infoBoxContent a.btn-multi_delete',
        'BUTTON_HERMES': '.contentTable .infoBoxContent a.btn-hermes',
        'get_labels': '#iloxx_orders'
    };

    var _getActionCallback = function _getActionCallback(action) {
        switch (action) {
            case 'TEXT_SHOW':
                return _showOrderCallback;
            case 'TEXT_GM_STATUS':
                return _changeOrderStatusCallback;
            case 'delete':
                return _deleteCallback;
            case 'BUTTON_GM_CANCEL':
                return _cancelCallback;
            case 'BUTTON_CREATE_INVOICE':
                return _invoiceCallback;
            case 'TITLE_INVOICE_MAIL':
                return _emailInvoiceCallback;
            case 'BUTTON_CREATE_PACKING_SLIP':
                return _packingSlipCallback;
            case 'TITLE_ORDER':
                return _orderConfirmationCallback;
            case 'TITLE_SEND_ORDER':
                return _sendOrderConfirmationCallback;
            case 'TEXT_CREATE_WITHDRAWAL':
                return _withdrawalCallback;
            case 'TXT_PARCEL_TRACKING_SENDBUTTON_TITLE':
                return _addTrackingCodeCallback;
            case 'BUTTON_DHL_LABEL':
                return _dhlLabelCallback;
            case 'MAILBEEZ_OVERVIEW':
                return _mailBeezOverviewCallback;
            case 'MAILBEEZ_NOTIFICATIONS':
                return _mailBeezNotificationsCallback;
            case 'MAILBEEZ_CONVERSATIONS':
                return _mailBeezConversationsCallback;
            case 'BUTTON_MULTI_CANCEL':
                return _multiCancelCallback;
            case 'BUTTON_MULTI_CHANGE_ORDER_STATUS':
                return _multiChangeOrderStatusCallback;
            case 'BUTTON_MULTI_DELETE':
                return _multiDeleteCallback;
            case 'BUTTON_HERMES':
                return _hermesCallback;
            case 'get_labels':
                return _iloxxCallback;
        }
    };

    var _showOrderCallback = function _showOrderCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.TEXT_SHOW).attr('href');
        window.open(url.replace(/oID=(.*)&/, 'oID=' + orderId + '&'), '_self');
    };

    var _changeOrderStatusCallback = function _changeOrderStatusCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        $('#gm_order_id').val(orderId);
        $('.gx-orders-table .single-checkbox').removeClass('checked');
        $('.gx-orders-table input:checkbox').prop('checked', false);
        $(event.target).parents('tr').eq(0).find('.single-checkbox').addClass('checked');
        $(event.target).parents('tr').eq(0).find('input:checkbox').prop('checked', true);
        $(_selectorMapping.TEXT_GM_STATUS).click();
    };

    var _deleteCallback = function _deleteCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $delete = $(_selectorMapping.delete);
        $delete.data('order_id', orderId);
        $delete.get(0).click();
    };

    var _cancelCallback = function _cancelCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        $('#gm_order_id').val(orderId);
        $('.gx-orders-table .single-checkbox').removeClass('checked');
        $('.gx-orders-table input:checkbox').prop('checked', false);
        $(event.target).parents('tr').eq(0).find('.single-checkbox').addClass('checked');
        $(event.target).parents('tr').eq(0).find('input:checkbox').prop('checked', true);
        $(_selectorMapping.BUTTON_MULTI_CANCEL).click();
    };

    var _invoiceCallback = function _invoiceCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.BUTTON_CREATE_INVOICE).attr('href');
        window.open(url.replace(/oID=(.*)&/, 'oID=' + orderId + '&'), '_blank');
    };

    var _emailInvoiceCallback = function _emailInvoiceCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        $('#gm_order_id').val(orderId);
        $('.GM_INVOICE_MAIL').click();
    };

    var _packingSlipCallback = function _packingSlipCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.BUTTON_CREATE_PACKING_SLIP).attr('href');
        window.open(url.replace(/oID=(.*)&/, 'oID=' + orderId + '&'), '_blank');
    };

    var _orderConfirmationCallback = function _orderConfirmationCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.TITLE_ORDER).attr('href');
        window.open(url.replace(/oID=(.*)&/, 'oID=' + orderId + '&'), '_blank');
    };

    var _sendOrderConfirmationCallback = function _sendOrderConfirmationCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        $('#gm_order_id').val(orderId);
        $('.GM_SEND_ORDER').click();
    };

    var _withdrawalCallback = function _withdrawalCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.TEXT_CREATE_WITHDRAWAL).attr('href');
        window.open(url.replace(/order=[^&]*/, 'order_id=' + orderId), '_blank');
    };

    var _addTrackingCodeCallback = function _addTrackingCodeCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $target = $(_selectorMapping.TXT_PARCEL_TRACKING_SENDBUTTON_TITLE);
        $target.data('order_id', orderId);
        $target.get(0).click();
    };

    var _dhlLabelCallback = function _dhlLabelCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var url = $(_selectorMapping.BUTTON_DHL_LABEL).attr('href');
        window.open(url.replace(/oID=(.*)/, 'oID=' + orderId), '_blank');
    };

    var _mailBeezOverviewCallback = function _mailBeezOverviewCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $target = $(_selectorMapping.MAILBEEZ_OVERVIEW);
        var url = $target.attr('onclick');
        url = url.replace(/oID=(.*)&/, 'oID=' + orderId + '&');
        $target.attr('onclick', url);
        $target.get(0).click();
    };

    var _mailBeezNotificationsCallback = function _mailBeezNotificationsCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $target = $(_selectorMapping.MAILBEEZ_NOTIFICATIONS);
        var url = $target.attr('onclick');
        url = url.replace(/oID=(.*)&/, 'oID=' + orderId + '&');
        $target.attr('onclick', url);
        $target.get(0).click();
    };

    var _mailBeezConversationsCallback = function _mailBeezConversationsCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $target = $(_selectorMapping.MAILBEEZ_CONVERSATIONS);
        var url = $target.attr('onclick');
        url = url.replace(/oID=(.*)&/, 'oID=' + orderId + '&');
        $target.attr('onclick', url);
        $target.get(0).click();
    };

    var _hermesCallback = function _hermesCallback(event) {
        var orderId = $(event.target).parents('tr').data('row-id');
        var $target = $(_selectorMapping.BUTTON_HERMES);
        var url = $target.attr('href');
        url = url.replace(/orders_id=(.*)/, 'orders_id=' + orderId);
        $target.attr('href', url);
        $target.get(0).click();
    };

    var _iloxxCallback = function _iloxxCallback(event) {
        var $target = $(_selectorMapping.get_labels);
        $target.click();
    };

    var _multiChangeOrderStatusCallback = function _multiChangeOrderStatusCallback(event) {
        $(_selectorMapping.BUTTON_MULTI_CHANGE_ORDER_STATUS).get(0).click();
    };

    var _multiDeleteCallback = function _multiDeleteCallback(event) {
        $(_selectorMapping.BUTTON_MULTI_DELETE).get(0).click();
    };

    var _multiCancelCallback = function _multiCancelCallback(event) {
        $(_selectorMapping.BUTTON_MULTI_CANCEL).get(0).click();
    };

    /**
     * Map table actions to bottom dropdown button.
     *
     * @private
     */
    var _mapTableActions = function _mapTableActions() {
        var $dropdown = $('#orders-table-dropdown');

        _bindEventHandler($dropdown, 'BUTTON_MULTI_CHANGE_ORDER_STATUS');

        if ($(_selectorMapping.get_labels).length) {
            _bindEventHandler($dropdown, 'get_labels');
        }

        _bindEventHandler($dropdown, 'BUTTON_MULTI_DELETE');
        _bindEventHandler($dropdown, 'BUTTON_MULTI_CANCEL');
    };

    /**
     * Map actions for every row in the table generically.
     *
     * This method will use the action_mapper library to map the actions for each
     * row of the table. It maps only those buttons, that haven't already explicitly
     * mapped by the _mapRowActions function.
     *
     * @private
     */
    var _mapUnmappedRowActions = function _mapUnmappedRowActions($this) {
        var unmappedRowActions = [];
        $('.action_buttons .extended_single_actions a,' + '.action_buttons .extended_single_actions button,' + '.action_buttons .extended_single_actions input[type="button"],' + '.action_buttons .extended_single_actions input[type="submit"]').each(function () {
            if (!_alreadyMapped($(this))) {
                unmappedRowActions.push($(this));
            }
        });

        var orderId = $this.data('row-id'),
            $dropdown = $this.find('.js-button-dropdown');

        $.each(unmappedRowActions, function () {
            var $button = $(this);
            var callback = function callback() {
                if ($button.prop('href') !== undefined) {
                    $button.prop('href', $button.prop('href').replace(/oID=(.*)\d(?=&)?/, 'oID=' + orderId));
                }
                $button.get(0).click();
            };

            jse.libs.button_dropdown.mapAction($dropdown, $button.text(), '', callback);
            mappedButtons.push($button);
        });
    };

    var _mapUnmappedMultiActions = function _mapUnmappedMultiActions() {
        var unmappedMultiActions = [];
        $('.action_buttons .extended_multi_actions a,' + '.action_buttons .extended_multi_actions button,' + '.action_buttons .extended_multi_actions input[type="button"],' + '.action_buttons .extended_multi_actions input[type="submit"]').each(function () {
            if (!_alreadyMapped($(this))) {
                unmappedMultiActions.push($(this));
            }
        });

        var $dropdown = $('#orders-table-dropdown');
        $.each(unmappedMultiActions, function () {
            var $button = $(this);
            var callback = function callback() {
                $button.get(0).click();
            };

            jse.libs.button_dropdown.mapAction($dropdown, $button.text(), '', callback);
            mappedButtons.push($button);
        });
    };

    /**
     * Checks if the button was already mapped
     *
     * @private
     */
    var _alreadyMapped = function _alreadyMapped($button) {
        for (var index in mappedButtons) {
            if ($button.is(mappedButtons[index])) {
                return true;
            }
        }
        return false;
    };

    /**
     * Add Button to Mapped Array
     *
     * @param buttonSelector
     * @returns {boolean}
     *
     * @private
     */
    var _addButtonToMappedArray = function _addButtonToMappedArray(buttonSelector) {
        if (mappedButtons[buttonSelector] !== undefined) {
            return true;
        }
        mappedButtons[buttonSelector] = $(buttonSelector);
    };

    /**
     * Bind Event handler
     *
     * @param $dropdown
     * @param action
     * @param customRecentButtonSelector
     *
     * @private
     */
    var _bindEventHandler = function _bindEventHandler($dropdown, action, customRecentButtonSelector) {
        var targetSelector = _selectorMapping[action],
            section = _sectionMapping[action],
            callback = _getActionCallback(action),
            customElement = $(customRecentButtonSelector).length ? $(customRecentButtonSelector) : $dropdown;
        if ($(targetSelector).length) {
            _addButtonToMappedArray(targetSelector);
            jse.libs.button_dropdown.mapAction($dropdown, action, section, callback, customElement);
        }
    };

    /**
     * Fix for row selection controls.
     *
     * @private
     */
    var _fixRowSelectionForControlElements = function _fixRowSelectionForControlElements() {
        $('input.checkbox[name="gm_multi_status[]"]').add('.single-checkbox').add('a.action-icon').add('.js-button-dropdown').add('tr.dataTableRow a').on('click', function (event) {
            event.stopPropagation();
            _toggleMultiActionButton();
        });
    };

    // ------------------------------------------------------------------------
    // INITIALIZATION
    // ------------------------------------------------------------------------

    module.init = function (done) {
        // Wait until the buttons are converted to dropdown for every row.
        var interval = setInterval(function () {
            if ($('.js-button-dropdown').length) {
                clearInterval(interval);

                _mapTableActions();
                _mapUnmappedMultiActions();

                var tableActions = mappedButtons;

                // Remove Mailbeez conversations badge.
                _addButtonToMappedArray('.contentTable .infoBoxContent a.context_view_button.btn_right');

                $('.gx-orders-table tr').not('.dataTableHeadingRow').each(function () {
                    mappedButtons = [];

                    for (var index in tableActions) {
                        mappedButtons[index] = tableActions[index];
                    }

                    _mapRowAction($(this));
                    _mapUnmappedRowActions($(this));
                });

                _fixRowSelectionForControlElements();

                // Initialize checkboxes
                _toggleMultiActionButton();
            }
        }, 300);

        // Check for selected checkboxes also
        // before all rows and their dropdown widgets have been initialized.
        _toggleMultiActionButton();

        done();
    };

    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm9yZGVycy9vcmRlcnNfdGFibGVfY29udHJvbGxlci5qcyJdLCJuYW1lcyI6WyJneCIsImNvbXBhdGliaWxpdHkiLCJtb2R1bGUiLCJzb3VyY2UiLCJkYXRhIiwiJHRoaXMiLCIkIiwiZGVmYXVsdHMiLCJvcHRpb25zIiwiZXh0ZW5kIiwibWFwcGVkQnV0dG9ucyIsIm1hcHBlciIsImpzZSIsImxpYnMiLCJhY3Rpb25fbWFwcGVyIiwiX3RvZ2dsZU11bHRpQWN0aW9uQnV0dG9uIiwiJGNoZWNrZWQiLCJwcm9wIiwibGVuZ3RoIiwiX21hcFJvd0FjdGlvbiIsIiR0aGF0IiwiJGRyb3Bkb3duIiwiZmluZCIsIl9tYXBSb3dCdXR0b25Ecm9wZG93biIsImFjdGlvbnMiLCJpbmRleCIsIl9iaW5kRXZlbnRIYW5kbGVyIiwiX3NlY3Rpb25NYXBwaW5nIiwiX3NlbGVjdG9yTWFwcGluZyIsIl9nZXRBY3Rpb25DYWxsYmFjayIsImFjdGlvbiIsIl9zaG93T3JkZXJDYWxsYmFjayIsIl9jaGFuZ2VPcmRlclN0YXR1c0NhbGxiYWNrIiwiX2RlbGV0ZUNhbGxiYWNrIiwiX2NhbmNlbENhbGxiYWNrIiwiX2ludm9pY2VDYWxsYmFjayIsIl9lbWFpbEludm9pY2VDYWxsYmFjayIsIl9wYWNraW5nU2xpcENhbGxiYWNrIiwiX29yZGVyQ29uZmlybWF0aW9uQ2FsbGJhY2siLCJfc2VuZE9yZGVyQ29uZmlybWF0aW9uQ2FsbGJhY2siLCJfd2l0aGRyYXdhbENhbGxiYWNrIiwiX2FkZFRyYWNraW5nQ29kZUNhbGxiYWNrIiwiX2RobExhYmVsQ2FsbGJhY2siLCJfbWFpbEJlZXpPdmVydmlld0NhbGxiYWNrIiwiX21haWxCZWV6Tm90aWZpY2F0aW9uc0NhbGxiYWNrIiwiX21haWxCZWV6Q29udmVyc2F0aW9uc0NhbGxiYWNrIiwiX211bHRpQ2FuY2VsQ2FsbGJhY2siLCJfbXVsdGlDaGFuZ2VPcmRlclN0YXR1c0NhbGxiYWNrIiwiX211bHRpRGVsZXRlQ2FsbGJhY2siLCJfaGVybWVzQ2FsbGJhY2siLCJfaWxveHhDYWxsYmFjayIsImV2ZW50Iiwib3JkZXJJZCIsInRhcmdldCIsInBhcmVudHMiLCJ1cmwiLCJURVhUX1NIT1ciLCJhdHRyIiwid2luZG93Iiwib3BlbiIsInJlcGxhY2UiLCJ2YWwiLCJyZW1vdmVDbGFzcyIsImVxIiwiYWRkQ2xhc3MiLCJURVhUX0dNX1NUQVRVUyIsImNsaWNrIiwiJGRlbGV0ZSIsImRlbGV0ZSIsImdldCIsIkJVVFRPTl9NVUxUSV9DQU5DRUwiLCJCVVRUT05fQ1JFQVRFX0lOVk9JQ0UiLCJCVVRUT05fQ1JFQVRFX1BBQ0tJTkdfU0xJUCIsIlRJVExFX09SREVSIiwiVEVYVF9DUkVBVEVfV0lUSERSQVdBTCIsIiR0YXJnZXQiLCJUWFRfUEFSQ0VMX1RSQUNLSU5HX1NFTkRCVVRUT05fVElUTEUiLCJCVVRUT05fREhMX0xBQkVMIiwiTUFJTEJFRVpfT1ZFUlZJRVciLCJNQUlMQkVFWl9OT1RJRklDQVRJT05TIiwiTUFJTEJFRVpfQ09OVkVSU0FUSU9OUyIsIkJVVFRPTl9IRVJNRVMiLCJnZXRfbGFiZWxzIiwiQlVUVE9OX01VTFRJX0NIQU5HRV9PUkRFUl9TVEFUVVMiLCJCVVRUT05fTVVMVElfREVMRVRFIiwiX21hcFRhYmxlQWN0aW9ucyIsIl9tYXBVbm1hcHBlZFJvd0FjdGlvbnMiLCJ1bm1hcHBlZFJvd0FjdGlvbnMiLCJlYWNoIiwiX2FscmVhZHlNYXBwZWQiLCJwdXNoIiwiJGJ1dHRvbiIsImNhbGxiYWNrIiwidW5kZWZpbmVkIiwiYnV0dG9uX2Ryb3Bkb3duIiwibWFwQWN0aW9uIiwidGV4dCIsIl9tYXBVbm1hcHBlZE11bHRpQWN0aW9ucyIsInVubWFwcGVkTXVsdGlBY3Rpb25zIiwiaXMiLCJfYWRkQnV0dG9uVG9NYXBwZWRBcnJheSIsImJ1dHRvblNlbGVjdG9yIiwiY3VzdG9tUmVjZW50QnV0dG9uU2VsZWN0b3IiLCJ0YXJnZXRTZWxlY3RvciIsInNlY3Rpb24iLCJjdXN0b21FbGVtZW50IiwiX2ZpeFJvd1NlbGVjdGlvbkZvckNvbnRyb2xFbGVtZW50cyIsImFkZCIsIm9uIiwic3RvcFByb3BhZ2F0aW9uIiwiaW5pdCIsImRvbmUiLCJpbnRlcnZhbCIsInNldEludGVydmFsIiwiY2xlYXJJbnRlcnZhbCIsInRhYmxlQWN0aW9ucyIsIm5vdCJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7Ozs7Ozs7OztBQVVBOzs7Ozs7O0FBT0FBLEdBQUdDLGFBQUgsQ0FBaUJDLE1BQWpCLENBQ0kseUJBREosRUFHSSxDQUNJRixHQUFHRyxNQUFILEdBQVkscUJBRGhCLEVBRUlILEdBQUdHLE1BQUgsR0FBWSx1QkFGaEIsQ0FISjs7QUFRSTs7QUFFQSxVQUFVQyxJQUFWLEVBQWdCOztBQUVaOztBQUVBO0FBQ0E7QUFDQTs7QUFFQTtBQUNJOzs7OztBQUtBQyxZQUFRQyxFQUFFLElBQUYsQ0FOWjs7O0FBUUk7Ozs7O0FBS0FDLGVBQVcsRUFiZjs7O0FBZUk7Ozs7O0FBS0FDLGNBQVVGLEVBQUVHLE1BQUYsQ0FBUyxJQUFULEVBQWUsRUFBZixFQUFtQkYsUUFBbkIsRUFBNkJILElBQTdCLENBcEJkOzs7QUFzQkk7Ozs7O0FBS0FNLG9CQUFnQixFQTNCcEI7OztBQTZCSTs7Ozs7QUFLQUMsYUFBU0MsSUFBSUMsSUFBSixDQUFTQyxhQWxDdEI7OztBQW9DSTs7Ozs7QUFLQVosYUFBUyxFQXpDYjs7QUEyQ0E7QUFDQTtBQUNBOztBQUVBOzs7OztBQUtBLFFBQUlhLDJCQUEyQixTQUEzQkEsd0JBQTJCLEdBQVk7QUFDdkMsWUFBSUMsV0FBV1YsRUFBRSxnREFBRixDQUFmO0FBQ0FBLFVBQUUsNEJBQUYsRUFBZ0NXLElBQWhDLENBQXFDLFVBQXJDLEVBQWlELENBQUNELFNBQVNFLE1BQTNEO0FBQ0gsS0FIRDs7QUFLQTs7Ozs7Ozs7QUFRQSxRQUFJQyxnQkFBZ0IsU0FBaEJBLGFBQWdCLENBQVVDLEtBQVYsRUFBaUI7QUFDakM7Ozs7QUFJQSxZQUFJQyxZQUFZRCxNQUFNRSxJQUFOLENBQVcscUJBQVgsQ0FBaEI7O0FBRUEsWUFBSUQsVUFBVUgsTUFBZCxFQUFzQjtBQUNsQkssa0NBQXNCRixTQUF0QjtBQUNIO0FBQ0osS0FWRDs7QUFZQSxRQUFJRSx3QkFBd0IsU0FBeEJBLHFCQUF3QixDQUFVRixTQUFWLEVBQXFCO0FBQzdDLFlBQUlHLFVBQVUsQ0FDVixXQURVLEVBRVYsZ0JBRlUsRUFHVixRQUhVLEVBSVYsa0JBSlUsRUFLVix1QkFMVSxFQU1WLG9CQU5VLEVBT1YsNEJBUFUsRUFRVixhQVJVLEVBU1Ysa0JBVFUsRUFVVix3QkFWVSxFQVdWLHNDQVhVLEVBWVYsa0JBWlUsRUFhVixtQkFiVSxFQWNWLHdCQWRVLEVBZVYsd0JBZlUsRUFnQlYsZUFoQlUsQ0FBZDs7QUFtQkEsYUFBSyxJQUFJQyxLQUFULElBQWtCRCxPQUFsQixFQUEyQjtBQUN2QkUsOEJBQWtCTCxTQUFsQixFQUE2QkcsUUFBUUMsS0FBUixDQUE3QixFQUE2Qyx3QkFBN0M7QUFDSDtBQUNKLEtBdkJEOztBQXlCQTs7Ozs7O0FBTUEsUUFBSUUsa0JBQWtCO0FBQ2xCLHFCQUFhLFFBREs7QUFFbEIsMEJBQWtCLFFBRkE7QUFHbEIsa0JBQVUsU0FIUTtBQUlsQiw0QkFBb0IsUUFKRjtBQUtsQixpQ0FBeUIsUUFMUDtBQU1sQiw4QkFBc0IsUUFOSjtBQU9sQixzQ0FBOEIsUUFQWjtBQVFsQix1QkFBZSxRQVJHO0FBU2xCLDRCQUFvQixRQVRGO0FBVWxCLGtDQUEwQixRQVZSO0FBV2xCLGdEQUF3QyxpQkFYdEI7QUFZbEIsNEJBQW9CLFFBWkY7QUFhbEIsNkJBQXFCLFFBYkg7QUFjbEIsa0NBQTBCLFFBZFI7QUFlbEIsa0NBQTBCLFFBZlI7QUFnQmxCLCtCQUF1QixRQWhCTDtBQWlCbEIsNENBQW9DLFFBakJsQjtBQWtCbEIsK0JBQXVCLFFBbEJMO0FBbUJsQix5QkFBaUIsUUFuQkM7QUFvQmxCLHNCQUFjO0FBcEJJLEtBQXRCOztBQXVCQTs7Ozs7O0FBTUEsUUFBSUMsbUJBQW1CO0FBQ25CLHFCQUFhLDZDQURNO0FBRW5CLDBCQUFrQix5REFGQztBQUduQixrQkFBVSw0Q0FIUztBQUluQiw0QkFBb0IsMENBSkQ7QUFLbkIsaUNBQXlCLDZDQUxOO0FBTW5CLDhCQUFzQixnREFOSDtBQU9uQixzQ0FBOEIsa0RBUFg7QUFRbkIsNEJBQW9CLDhDQVJEO0FBU25CLGtDQUEwQix1REFUUDtBQVVuQixnREFBd0MsdURBVnJCO0FBV25CLDRCQUFvQiwrQ0FYRDtBQVluQiw2QkFBcUIsOERBWkY7QUFhbkIsa0NBQTBCLGdFQWJQO0FBY25CLGtDQUEwQiwrREFkUDtBQWVuQiwrQkFBdUIsa0RBZko7QUFnQm5CLDRDQUFvQyx5REFoQmpCO0FBaUJuQiwrQkFBdUIsa0RBakJKO0FBa0JuQix5QkFBaUIsNENBbEJFO0FBbUJuQixzQkFBYztBQW5CSyxLQUF2Qjs7QUFzQkEsUUFBSUMscUJBQXFCLFNBQXJCQSxrQkFBcUIsQ0FBVUMsTUFBVixFQUFrQjtBQUN2QyxnQkFBUUEsTUFBUjtBQUNJLGlCQUFLLFdBQUw7QUFDSSx1QkFBT0Msa0JBQVA7QUFDSixpQkFBSyxnQkFBTDtBQUNJLHVCQUFPQywwQkFBUDtBQUNKLGlCQUFLLFFBQUw7QUFDSSx1QkFBT0MsZUFBUDtBQUNKLGlCQUFLLGtCQUFMO0FBQ0ksdUJBQU9DLGVBQVA7QUFDSixpQkFBSyx1QkFBTDtBQUNJLHVCQUFPQyxnQkFBUDtBQUNKLGlCQUFLLG9CQUFMO0FBQ0ksdUJBQU9DLHFCQUFQO0FBQ0osaUJBQUssNEJBQUw7QUFDSSx1QkFBT0Msb0JBQVA7QUFDSixpQkFBSyxhQUFMO0FBQ0ksdUJBQU9DLDBCQUFQO0FBQ0osaUJBQUssa0JBQUw7QUFDSSx1QkFBT0MsOEJBQVA7QUFDSixpQkFBSyx3QkFBTDtBQUNJLHVCQUFPQyxtQkFBUDtBQUNKLGlCQUFLLHNDQUFMO0FBQ0ksdUJBQU9DLHdCQUFQO0FBQ0osaUJBQUssa0JBQUw7QUFDSSx1QkFBT0MsaUJBQVA7QUFDSixpQkFBSyxtQkFBTDtBQUNJLHVCQUFPQyx5QkFBUDtBQUNKLGlCQUFLLHdCQUFMO0FBQ0ksdUJBQU9DLDhCQUFQO0FBQ0osaUJBQUssd0JBQUw7QUFDSSx1QkFBT0MsOEJBQVA7QUFDSixpQkFBSyxxQkFBTDtBQUNJLHVCQUFPQyxvQkFBUDtBQUNKLGlCQUFLLGtDQUFMO0FBQ0ksdUJBQU9DLCtCQUFQO0FBQ0osaUJBQUsscUJBQUw7QUFDSSx1QkFBT0Msb0JBQVA7QUFDSixpQkFBSyxlQUFMO0FBQ0ksdUJBQU9DLGVBQVA7QUFDSixpQkFBSyxZQUFMO0FBQ0ksdUJBQU9DLGNBQVA7QUF4Q1I7QUEwQ0gsS0EzQ0Q7O0FBNkNBLFFBQUluQixxQkFBcUIsU0FBckJBLGtCQUFxQixDQUFVb0IsS0FBVixFQUFpQjtBQUN0QyxZQUFJQyxVQUFVOUMsRUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCbEQsSUFBOUIsQ0FBbUMsUUFBbkMsQ0FBZDtBQUNBLFlBQUltRCxNQUFNakQsRUFBRXNCLGlCQUFpQjRCLFNBQW5CLEVBQThCQyxJQUE5QixDQUFtQyxNQUFuQyxDQUFWO0FBQ0FDLGVBQU9DLElBQVAsQ0FBWUosSUFBSUssT0FBSixDQUFZLFdBQVosRUFBeUIsU0FBU1IsT0FBVCxHQUFtQixHQUE1QyxDQUFaLEVBQThELE9BQTlEO0FBQ0gsS0FKRDs7QUFNQSxRQUFJcEIsNkJBQTZCLFNBQTdCQSwwQkFBNkIsQ0FBVW1CLEtBQVYsRUFBaUI7QUFDOUMsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQUUsVUFBRSxjQUFGLEVBQWtCdUQsR0FBbEIsQ0FBc0JULE9BQXRCO0FBQ0E5QyxVQUFFLG1DQUFGLEVBQXVDd0QsV0FBdkMsQ0FBbUQsU0FBbkQ7QUFDQXhELFVBQUUsaUNBQUYsRUFBcUNXLElBQXJDLENBQTBDLFNBQTFDLEVBQXFELEtBQXJEO0FBQ0FYLFVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QlMsRUFBOUIsQ0FBaUMsQ0FBakMsRUFBb0N6QyxJQUFwQyxDQUF5QyxrQkFBekMsRUFBNkQwQyxRQUE3RCxDQUFzRSxTQUF0RTtBQUNBMUQsVUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCUyxFQUE5QixDQUFpQyxDQUFqQyxFQUFvQ3pDLElBQXBDLENBQXlDLGdCQUF6QyxFQUEyREwsSUFBM0QsQ0FBZ0UsU0FBaEUsRUFBMkUsSUFBM0U7QUFDQVgsVUFBRXNCLGlCQUFpQnFDLGNBQW5CLEVBQW1DQyxLQUFuQztBQUNILEtBUkQ7O0FBVUEsUUFBSWpDLGtCQUFrQixTQUFsQkEsZUFBa0IsQ0FBVWtCLEtBQVYsRUFBaUI7QUFDbkMsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQSxZQUFJK0QsVUFBVTdELEVBQUVzQixpQkFBaUJ3QyxNQUFuQixDQUFkO0FBQ0FELGdCQUFRL0QsSUFBUixDQUFhLFVBQWIsRUFBeUJnRCxPQUF6QjtBQUNBZSxnQkFBUUUsR0FBUixDQUFZLENBQVosRUFBZUgsS0FBZjtBQUNILEtBTEQ7O0FBT0EsUUFBSWhDLGtCQUFrQixTQUFsQkEsZUFBa0IsQ0FBVWlCLEtBQVYsRUFBaUI7QUFDbkMsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQUUsVUFBRSxjQUFGLEVBQWtCdUQsR0FBbEIsQ0FBc0JULE9BQXRCO0FBQ0E5QyxVQUFFLG1DQUFGLEVBQXVDd0QsV0FBdkMsQ0FBbUQsU0FBbkQ7QUFDQXhELFVBQUUsaUNBQUYsRUFBcUNXLElBQXJDLENBQTBDLFNBQTFDLEVBQXFELEtBQXJEO0FBQ0FYLFVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QlMsRUFBOUIsQ0FBaUMsQ0FBakMsRUFBb0N6QyxJQUFwQyxDQUF5QyxrQkFBekMsRUFBNkQwQyxRQUE3RCxDQUFzRSxTQUF0RTtBQUNBMUQsVUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCUyxFQUE5QixDQUFpQyxDQUFqQyxFQUFvQ3pDLElBQXBDLENBQXlDLGdCQUF6QyxFQUEyREwsSUFBM0QsQ0FBZ0UsU0FBaEUsRUFBMkUsSUFBM0U7QUFDQVgsVUFBRXNCLGlCQUFpQjBDLG1CQUFuQixFQUF3Q0osS0FBeEM7QUFDSCxLQVJEOztBQVVBLFFBQUkvQixtQkFBbUIsU0FBbkJBLGdCQUFtQixDQUFVZ0IsS0FBVixFQUFpQjtBQUNwQyxZQUFJQyxVQUFVOUMsRUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCbEQsSUFBOUIsQ0FBbUMsUUFBbkMsQ0FBZDtBQUNBLFlBQUltRCxNQUFNakQsRUFBRXNCLGlCQUFpQjJDLHFCQUFuQixFQUEwQ2QsSUFBMUMsQ0FBK0MsTUFBL0MsQ0FBVjtBQUNBQyxlQUFPQyxJQUFQLENBQVlKLElBQUlLLE9BQUosQ0FBWSxXQUFaLEVBQXlCLFNBQVNSLE9BQVQsR0FBbUIsR0FBNUMsQ0FBWixFQUE4RCxRQUE5RDtBQUNILEtBSkQ7O0FBTUEsUUFBSWhCLHdCQUF3QixTQUF4QkEscUJBQXdCLENBQVVlLEtBQVYsRUFBaUI7QUFDekMsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQUUsVUFBRSxjQUFGLEVBQWtCdUQsR0FBbEIsQ0FBc0JULE9BQXRCO0FBQ0E5QyxVQUFFLGtCQUFGLEVBQXNCNEQsS0FBdEI7QUFDSCxLQUpEOztBQU1BLFFBQUk3Qix1QkFBdUIsU0FBdkJBLG9CQUF1QixDQUFVYyxLQUFWLEVBQWlCO0FBQ3hDLFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0EsWUFBSW1ELE1BQU1qRCxFQUFFc0IsaUJBQWlCNEMsMEJBQW5CLEVBQStDZixJQUEvQyxDQUFvRCxNQUFwRCxDQUFWO0FBQ0FDLGVBQU9DLElBQVAsQ0FBWUosSUFBSUssT0FBSixDQUFZLFdBQVosRUFBeUIsU0FBU1IsT0FBVCxHQUFtQixHQUE1QyxDQUFaLEVBQThELFFBQTlEO0FBQ0gsS0FKRDs7QUFNQSxRQUFJZCw2QkFBNkIsU0FBN0JBLDBCQUE2QixDQUFVYSxLQUFWLEVBQWlCO0FBQzlDLFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0EsWUFBSW1ELE1BQU1qRCxFQUFFc0IsaUJBQWlCNkMsV0FBbkIsRUFBZ0NoQixJQUFoQyxDQUFxQyxNQUFyQyxDQUFWO0FBQ0FDLGVBQU9DLElBQVAsQ0FBWUosSUFBSUssT0FBSixDQUFZLFdBQVosRUFBeUIsU0FBU1IsT0FBVCxHQUFtQixHQUE1QyxDQUFaLEVBQThELFFBQTlEO0FBQ0gsS0FKRDs7QUFNQSxRQUFJYixpQ0FBaUMsU0FBakNBLDhCQUFpQyxDQUFVWSxLQUFWLEVBQWlCO0FBQ2xELFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0FFLFVBQUUsY0FBRixFQUFrQnVELEdBQWxCLENBQXNCVCxPQUF0QjtBQUNBOUMsVUFBRSxnQkFBRixFQUFvQjRELEtBQXBCO0FBQ0gsS0FKRDs7QUFNQSxRQUFJMUIsc0JBQXNCLFNBQXRCQSxtQkFBc0IsQ0FBVVcsS0FBVixFQUFpQjtBQUN2QyxZQUFJQyxVQUFVOUMsRUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCbEQsSUFBOUIsQ0FBbUMsUUFBbkMsQ0FBZDtBQUNBLFlBQUltRCxNQUFNakQsRUFBRXNCLGlCQUFpQjhDLHNCQUFuQixFQUEyQ2pCLElBQTNDLENBQWdELE1BQWhELENBQVY7QUFDQUMsZUFBT0MsSUFBUCxDQUFZSixJQUFJSyxPQUFKLENBQVksYUFBWixFQUEyQixjQUFjUixPQUF6QyxDQUFaLEVBQStELFFBQS9EO0FBQ0gsS0FKRDs7QUFNQSxRQUFJWCwyQkFBMkIsU0FBM0JBLHdCQUEyQixDQUFVVSxLQUFWLEVBQWlCO0FBQzVDLFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0EsWUFBSXVFLFVBQVVyRSxFQUFFc0IsaUJBQWlCZ0Qsb0NBQW5CLENBQWQ7QUFDQUQsZ0JBQVF2RSxJQUFSLENBQWEsVUFBYixFQUF5QmdELE9BQXpCO0FBQ0F1QixnQkFBUU4sR0FBUixDQUFZLENBQVosRUFBZUgsS0FBZjtBQUNILEtBTEQ7O0FBT0EsUUFBSXhCLG9CQUFvQixTQUFwQkEsaUJBQW9CLENBQVVTLEtBQVYsRUFBaUI7QUFDckMsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQSxZQUFJbUQsTUFBTWpELEVBQUVzQixpQkFBaUJpRCxnQkFBbkIsRUFBcUNwQixJQUFyQyxDQUEwQyxNQUExQyxDQUFWO0FBQ0FDLGVBQU9DLElBQVAsQ0FBWUosSUFBSUssT0FBSixDQUFZLFVBQVosRUFBd0IsU0FBU1IsT0FBakMsQ0FBWixFQUF1RCxRQUF2RDtBQUNILEtBSkQ7O0FBTUEsUUFBSVQsNEJBQTRCLFNBQTVCQSx5QkFBNEIsQ0FBVVEsS0FBVixFQUFpQjtBQUM3QyxZQUFJQyxVQUFVOUMsRUFBRTZDLE1BQU1FLE1BQVIsRUFBZ0JDLE9BQWhCLENBQXdCLElBQXhCLEVBQThCbEQsSUFBOUIsQ0FBbUMsUUFBbkMsQ0FBZDtBQUNBLFlBQUl1RSxVQUFVckUsRUFBRXNCLGlCQUFpQmtELGlCQUFuQixDQUFkO0FBQ0EsWUFBSXZCLE1BQU1vQixRQUFRbEIsSUFBUixDQUFhLFNBQWIsQ0FBVjtBQUNBRixjQUFNQSxJQUFJSyxPQUFKLENBQVksV0FBWixFQUF5QixTQUFTUixPQUFULEdBQW1CLEdBQTVDLENBQU47QUFDQXVCLGdCQUFRbEIsSUFBUixDQUFhLFNBQWIsRUFBd0JGLEdBQXhCO0FBQ0FvQixnQkFBUU4sR0FBUixDQUFZLENBQVosRUFBZUgsS0FBZjtBQUNILEtBUEQ7O0FBU0EsUUFBSXRCLGlDQUFpQyxTQUFqQ0EsOEJBQWlDLENBQVVPLEtBQVYsRUFBaUI7QUFDbEQsWUFBSUMsVUFBVTlDLEVBQUU2QyxNQUFNRSxNQUFSLEVBQWdCQyxPQUFoQixDQUF3QixJQUF4QixFQUE4QmxELElBQTlCLENBQW1DLFFBQW5DLENBQWQ7QUFDQSxZQUFJdUUsVUFBVXJFLEVBQUVzQixpQkFBaUJtRCxzQkFBbkIsQ0FBZDtBQUNBLFlBQUl4QixNQUFNb0IsUUFBUWxCLElBQVIsQ0FBYSxTQUFiLENBQVY7QUFDQUYsY0FBTUEsSUFBSUssT0FBSixDQUFZLFdBQVosRUFBeUIsU0FBU1IsT0FBVCxHQUFtQixHQUE1QyxDQUFOO0FBQ0F1QixnQkFBUWxCLElBQVIsQ0FBYSxTQUFiLEVBQXdCRixHQUF4QjtBQUNBb0IsZ0JBQVFOLEdBQVIsQ0FBWSxDQUFaLEVBQWVILEtBQWY7QUFDSCxLQVBEOztBQVNBLFFBQUlyQixpQ0FBaUMsU0FBakNBLDhCQUFpQyxDQUFVTSxLQUFWLEVBQWlCO0FBQ2xELFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0EsWUFBSXVFLFVBQVVyRSxFQUFFc0IsaUJBQWlCb0Qsc0JBQW5CLENBQWQ7QUFDQSxZQUFJekIsTUFBTW9CLFFBQVFsQixJQUFSLENBQWEsU0FBYixDQUFWO0FBQ0FGLGNBQU1BLElBQUlLLE9BQUosQ0FBWSxXQUFaLEVBQXlCLFNBQVNSLE9BQVQsR0FBbUIsR0FBNUMsQ0FBTjtBQUNBdUIsZ0JBQVFsQixJQUFSLENBQWEsU0FBYixFQUF3QkYsR0FBeEI7QUFDQW9CLGdCQUFRTixHQUFSLENBQVksQ0FBWixFQUFlSCxLQUFmO0FBQ0gsS0FQRDs7QUFTQSxRQUFJakIsa0JBQWtCLFNBQWxCQSxlQUFrQixDQUFVRSxLQUFWLEVBQWlCO0FBQ25DLFlBQUlDLFVBQVU5QyxFQUFFNkMsTUFBTUUsTUFBUixFQUFnQkMsT0FBaEIsQ0FBd0IsSUFBeEIsRUFBOEJsRCxJQUE5QixDQUFtQyxRQUFuQyxDQUFkO0FBQ0EsWUFBSXVFLFVBQVVyRSxFQUFFc0IsaUJBQWlCcUQsYUFBbkIsQ0FBZDtBQUNBLFlBQUkxQixNQUFNb0IsUUFBUWxCLElBQVIsQ0FBYSxNQUFiLENBQVY7QUFDQUYsY0FBTUEsSUFBSUssT0FBSixDQUFZLGdCQUFaLEVBQThCLGVBQWVSLE9BQTdDLENBQU47QUFDQXVCLGdCQUFRbEIsSUFBUixDQUFhLE1BQWIsRUFBcUJGLEdBQXJCO0FBQ0FvQixnQkFBUU4sR0FBUixDQUFZLENBQVosRUFBZUgsS0FBZjtBQUNILEtBUEQ7O0FBU0EsUUFBSWhCLGlCQUFpQixTQUFqQkEsY0FBaUIsQ0FBVUMsS0FBVixFQUFpQjtBQUNsQyxZQUFJd0IsVUFBVXJFLEVBQUVzQixpQkFBaUJzRCxVQUFuQixDQUFkO0FBQ0FQLGdCQUFRVCxLQUFSO0FBQ0gsS0FIRDs7QUFLQSxRQUFJbkIsa0NBQWtDLFNBQWxDQSwrQkFBa0MsQ0FBVUksS0FBVixFQUFpQjtBQUNuRDdDLFVBQUVzQixpQkFBaUJ1RCxnQ0FBbkIsRUFBcURkLEdBQXJELENBQXlELENBQXpELEVBQTRESCxLQUE1RDtBQUNILEtBRkQ7O0FBSUEsUUFBSWxCLHVCQUF1QixTQUF2QkEsb0JBQXVCLENBQVVHLEtBQVYsRUFBaUI7QUFDeEM3QyxVQUFFc0IsaUJBQWlCd0QsbUJBQW5CLEVBQXdDZixHQUF4QyxDQUE0QyxDQUE1QyxFQUErQ0gsS0FBL0M7QUFDSCxLQUZEOztBQUlBLFFBQUlwQix1QkFBdUIsU0FBdkJBLG9CQUF1QixDQUFVSyxLQUFWLEVBQWlCO0FBQ3hDN0MsVUFBRXNCLGlCQUFpQjBDLG1CQUFuQixFQUF3Q0QsR0FBeEMsQ0FBNEMsQ0FBNUMsRUFBK0NILEtBQS9DO0FBQ0gsS0FGRDs7QUFJQTs7Ozs7QUFLQSxRQUFJbUIsbUJBQW1CLFNBQW5CQSxnQkFBbUIsR0FBWTtBQUMvQixZQUFJaEUsWUFBWWYsRUFBRSx3QkFBRixDQUFoQjs7QUFFQW9CLDBCQUFrQkwsU0FBbEIsRUFBNkIsa0NBQTdCOztBQUVBLFlBQUlmLEVBQUVzQixpQkFBaUJzRCxVQUFuQixFQUErQmhFLE1BQW5DLEVBQTJDO0FBQ3ZDUSw4QkFBa0JMLFNBQWxCLEVBQTZCLFlBQTdCO0FBQ0g7O0FBRURLLDBCQUFrQkwsU0FBbEIsRUFBNkIscUJBQTdCO0FBQ0FLLDBCQUFrQkwsU0FBbEIsRUFBNkIscUJBQTdCO0FBQ0gsS0FYRDs7QUFhQTs7Ozs7Ozs7O0FBU0EsUUFBSWlFLHlCQUF5QixTQUF6QkEsc0JBQXlCLENBQVVqRixLQUFWLEVBQWlCO0FBQzFDLFlBQUlrRixxQkFBcUIsRUFBekI7QUFDQWpGLFVBQUUsZ0RBQ0Usa0RBREYsR0FFRSxnRUFGRixHQUdFLCtEQUhKLEVBR3FFa0YsSUFIckUsQ0FHMEUsWUFBWTtBQUNsRixnQkFBSSxDQUFDQyxlQUFlbkYsRUFBRSxJQUFGLENBQWYsQ0FBTCxFQUE4QjtBQUMxQmlGLG1DQUFtQkcsSUFBbkIsQ0FBd0JwRixFQUFFLElBQUYsQ0FBeEI7QUFDSDtBQUNKLFNBUEQ7O0FBU0EsWUFBSThDLFVBQVUvQyxNQUFNRCxJQUFOLENBQVcsUUFBWCxDQUFkO0FBQUEsWUFDSWlCLFlBQVloQixNQUFNaUIsSUFBTixDQUFXLHFCQUFYLENBRGhCOztBQUdBaEIsVUFBRWtGLElBQUYsQ0FBT0Qsa0JBQVAsRUFBMkIsWUFBWTtBQUNuQyxnQkFBSUksVUFBVXJGLEVBQUUsSUFBRixDQUFkO0FBQ0EsZ0JBQUlzRixXQUFXLFNBQVhBLFFBQVcsR0FBWTtBQUN2QixvQkFBSUQsUUFBUTFFLElBQVIsQ0FBYSxNQUFiLE1BQXlCNEUsU0FBN0IsRUFBd0M7QUFDcENGLDRCQUFRMUUsSUFBUixDQUFhLE1BQWIsRUFBcUIwRSxRQUFRMUUsSUFBUixDQUFhLE1BQWIsRUFBcUIyQyxPQUFyQixDQUE2QixrQkFBN0IsRUFBaUQsU0FBU1IsT0FBMUQsQ0FBckI7QUFDSDtBQUNEdUMsd0JBQVF0QixHQUFSLENBQVksQ0FBWixFQUFlSCxLQUFmO0FBQ0gsYUFMRDs7QUFPQXRELGdCQUFJQyxJQUFKLENBQVNpRixlQUFULENBQXlCQyxTQUF6QixDQUFtQzFFLFNBQW5DLEVBQThDc0UsUUFBUUssSUFBUixFQUE5QyxFQUE4RCxFQUE5RCxFQUFrRUosUUFBbEU7QUFDQWxGLDBCQUFjZ0YsSUFBZCxDQUFtQkMsT0FBbkI7QUFDSCxTQVhEO0FBWUgsS0ExQkQ7O0FBNEJBLFFBQUlNLDJCQUEyQixTQUEzQkEsd0JBQTJCLEdBQVk7QUFDdkMsWUFBSUMsdUJBQXVCLEVBQTNCO0FBQ0E1RixVQUFFLCtDQUNFLGlEQURGLEdBRUUsK0RBRkYsR0FHRSw4REFISixFQUdvRWtGLElBSHBFLENBR3lFLFlBQVk7QUFDakYsZ0JBQUksQ0FBQ0MsZUFBZW5GLEVBQUUsSUFBRixDQUFmLENBQUwsRUFBOEI7QUFDMUI0RixxQ0FBcUJSLElBQXJCLENBQTBCcEYsRUFBRSxJQUFGLENBQTFCO0FBQ0g7QUFDSixTQVBEOztBQVNBLFlBQUllLFlBQVlmLEVBQUUsd0JBQUYsQ0FBaEI7QUFDQUEsVUFBRWtGLElBQUYsQ0FBT1Usb0JBQVAsRUFBNkIsWUFBWTtBQUNyQyxnQkFBSVAsVUFBVXJGLEVBQUUsSUFBRixDQUFkO0FBQ0EsZ0JBQUlzRixXQUFXLFNBQVhBLFFBQVcsR0FBWTtBQUN2QkQsd0JBQVF0QixHQUFSLENBQVksQ0FBWixFQUFlSCxLQUFmO0FBQ0gsYUFGRDs7QUFJQXRELGdCQUFJQyxJQUFKLENBQVNpRixlQUFULENBQXlCQyxTQUF6QixDQUFtQzFFLFNBQW5DLEVBQThDc0UsUUFBUUssSUFBUixFQUE5QyxFQUE4RCxFQUE5RCxFQUFrRUosUUFBbEU7QUFDQWxGLDBCQUFjZ0YsSUFBZCxDQUFtQkMsT0FBbkI7QUFDSCxTQVJEO0FBU0gsS0FyQkQ7O0FBdUJBOzs7OztBQUtBLFFBQUlGLGlCQUFpQixTQUFqQkEsY0FBaUIsQ0FBVUUsT0FBVixFQUFtQjtBQUNwQyxhQUFLLElBQUlsRSxLQUFULElBQWtCZixhQUFsQixFQUFpQztBQUM3QixnQkFBSWlGLFFBQVFRLEVBQVIsQ0FBV3pGLGNBQWNlLEtBQWQsQ0FBWCxDQUFKLEVBQXNDO0FBQ2xDLHVCQUFPLElBQVA7QUFDSDtBQUNKO0FBQ0QsZUFBTyxLQUFQO0FBQ0gsS0FQRDs7QUFTQTs7Ozs7Ozs7QUFRQSxRQUFJMkUsMEJBQTBCLFNBQTFCQSx1QkFBMEIsQ0FBVUMsY0FBVixFQUEwQjtBQUNwRCxZQUFJM0YsY0FBYzJGLGNBQWQsTUFBa0NSLFNBQXRDLEVBQWlEO0FBQzdDLG1CQUFPLElBQVA7QUFDSDtBQUNEbkYsc0JBQWMyRixjQUFkLElBQWdDL0YsRUFBRStGLGNBQUYsQ0FBaEM7QUFDSCxLQUxEOztBQU9BOzs7Ozs7Ozs7QUFTQSxRQUFJM0Usb0JBQW9CLFNBQXBCQSxpQkFBb0IsQ0FBVUwsU0FBVixFQUFxQlMsTUFBckIsRUFBNkJ3RSwwQkFBN0IsRUFBeUQ7QUFDN0UsWUFBSUMsaUJBQWlCM0UsaUJBQWlCRSxNQUFqQixDQUFyQjtBQUFBLFlBQ0kwRSxVQUFVN0UsZ0JBQWdCRyxNQUFoQixDQURkO0FBQUEsWUFFSThELFdBQVcvRCxtQkFBbUJDLE1BQW5CLENBRmY7QUFBQSxZQUdJMkUsZ0JBQWdCbkcsRUFBRWdHLDBCQUFGLEVBQThCcEYsTUFBOUIsR0FBdUNaLEVBQUVnRywwQkFBRixDQUF2QyxHQUNaakYsU0FKUjtBQUtBLFlBQUlmLEVBQUVpRyxjQUFGLEVBQWtCckYsTUFBdEIsRUFBOEI7QUFDMUJrRixvQ0FBd0JHLGNBQXhCO0FBQ0EzRixnQkFBSUMsSUFBSixDQUFTaUYsZUFBVCxDQUF5QkMsU0FBekIsQ0FBbUMxRSxTQUFuQyxFQUE4Q1MsTUFBOUMsRUFBc0QwRSxPQUF0RCxFQUErRFosUUFBL0QsRUFBeUVhLGFBQXpFO0FBQ0g7QUFDSixLQVZEOztBQVlBOzs7OztBQUtBLFFBQUlDLHFDQUFxQyxTQUFyQ0Esa0NBQXFDLEdBQVk7QUFDakRwRyxVQUFFLDBDQUFGLEVBQ0txRyxHQURMLENBQ1Msa0JBRFQsRUFFS0EsR0FGTCxDQUVTLGVBRlQsRUFHS0EsR0FITCxDQUdTLHFCQUhULEVBSUtBLEdBSkwsQ0FJUyxtQkFKVCxFQUtLQyxFQUxMLENBS1EsT0FMUixFQUtpQixVQUFVekQsS0FBVixFQUFpQjtBQUMxQkEsa0JBQU0wRCxlQUFOO0FBQ0E5RjtBQUNILFNBUkw7QUFTSCxLQVZEOztBQVlBO0FBQ0E7QUFDQTs7QUFFQWIsV0FBTzRHLElBQVAsR0FBYyxVQUFVQyxJQUFWLEVBQWdCO0FBQzFCO0FBQ0EsWUFBSUMsV0FBV0MsWUFBWSxZQUFZO0FBQ25DLGdCQUFJM0csRUFBRSxxQkFBRixFQUF5QlksTUFBN0IsRUFBcUM7QUFDakNnRyw4QkFBY0YsUUFBZDs7QUFFQTNCO0FBQ0FZOztBQUVBLG9CQUFJa0IsZUFBZXpHLGFBQW5COztBQUVBO0FBQ0EwRix3Q0FBd0IsK0RBQXhCOztBQUVBOUYsa0JBQUUscUJBQUYsRUFBeUI4RyxHQUF6QixDQUE2QixzQkFBN0IsRUFBcUQ1QixJQUFyRCxDQUEwRCxZQUFZO0FBQ2xFOUUsb0NBQWdCLEVBQWhCOztBQUVBLHlCQUFLLElBQUllLEtBQVQsSUFBa0IwRixZQUFsQixFQUFnQztBQUM1QnpHLHNDQUFjZSxLQUFkLElBQXVCMEYsYUFBYTFGLEtBQWIsQ0FBdkI7QUFDSDs7QUFFRE4sa0NBQWNiLEVBQUUsSUFBRixDQUFkO0FBQ0FnRiwyQ0FBdUJoRixFQUFFLElBQUYsQ0FBdkI7QUFDSCxpQkFURDs7QUFXQW9HOztBQUVBO0FBQ0EzRjtBQUNIO0FBQ0osU0E1QmMsRUE0QlosR0E1QlksQ0FBZjs7QUE4QkE7QUFDQTtBQUNBQTs7QUFFQWdHO0FBQ0gsS0FyQ0Q7O0FBdUNBLFdBQU83RyxNQUFQO0FBQ0gsQ0FsaUJMIiwiZmlsZSI6Im9yZGVycy9vcmRlcnNfdGFibGVfY29udHJvbGxlci5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gb3JkZXJzX3RhYmxlX2NvbnRyb2xsZXIuanMgMjAyNC0wMS0xM1xuIEdhbWJpbyBHbWJIXG4gaHR0cDovL3d3dy5nYW1iaW8uZGVcbiBDb3B5cmlnaHQgKGMpIDIwMjQgR2FtYmlvIEdtYkhcbiBSZWxlYXNlZCB1bmRlciB0aGUgR05VIEdlbmVyYWwgUHVibGljIExpY2Vuc2UgKFZlcnNpb24gMilcbiBbaHR0cDovL3d3dy5nbnUub3JnL2xpY2Vuc2VzL2dwbC0yLjAuaHRtbF1cbiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICovXG5cbi8qKlxuICogIyMgT3JkZXJzIFRhYmxlIENvbnRyb2xsZXJcbiAqXG4gKiBUaGlzIGNvbnRyb2xsZXIgY29udGFpbnMgdGhlIG1hcHBpbmcgbG9naWMgb2YgdGhlIG9yZGVycyB0YWJsZS5cbiAqXG4gKiBAbW9kdWxlIENvbXBhdGliaWxpdHkvb3JkZXJzX3RhYmxlX2NvbnRyb2xsZXJcbiAqL1xuZ3guY29tcGF0aWJpbGl0eS5tb2R1bGUoXG4gICAgJ29yZGVyc190YWJsZV9jb250cm9sbGVyJyxcblxuICAgIFtcbiAgICAgICAgZ3guc291cmNlICsgJy9saWJzL2FjdGlvbl9tYXBwZXInLFxuICAgICAgICBneC5zb3VyY2UgKyAnL2xpYnMvYnV0dG9uX2Ryb3Bkb3duJ1xuICAgIF0sXG5cbiAgICAvKiogIEBsZW5kcyBtb2R1bGU6Q29tcGF0aWJpbGl0eS9vcmRlcnNfdGFibGVfY29udHJvbGxlciAqL1xuXG4gICAgZnVuY3Rpb24gKGRhdGEpIHtcblxuICAgICAgICAndXNlIHN0cmljdCc7XG5cbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgICAgIC8vIFZBUklBQkxFUyBERUZJTklUSU9OXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgICAgIHZhclxuICAgICAgICAgICAgLyoqXG4gICAgICAgICAgICAgKiBNb2R1bGUgU2VsZWN0b3JcbiAgICAgICAgICAgICAqXG4gICAgICAgICAgICAgKiBAdmFyIHtvYmplY3R9XG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgICR0aGlzID0gJCh0aGlzKSxcblxuICAgICAgICAgICAgLyoqXG4gICAgICAgICAgICAgKiBEZWZhdWx0IE9wdGlvbnNcbiAgICAgICAgICAgICAqXG4gICAgICAgICAgICAgKiBAdHlwZSB7b2JqZWN0fVxuICAgICAgICAgICAgICovXG4gICAgICAgICAgICBkZWZhdWx0cyA9IHt9LFxuXG4gICAgICAgICAgICAvKipcbiAgICAgICAgICAgICAqIEZpbmFsIE9wdGlvbnNcbiAgICAgICAgICAgICAqXG4gICAgICAgICAgICAgKiBAdmFyIHtvYmplY3R9XG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIG9wdGlvbnMgPSAkLmV4dGVuZCh0cnVlLCB7fSwgZGVmYXVsdHMsIGRhdGEpLFxuXG4gICAgICAgICAgICAvKipcbiAgICAgICAgICAgICAqIEFycmF5IG9mIG1hcHBlZCBidXR0b25zXG4gICAgICAgICAgICAgKlxuICAgICAgICAgICAgICogQHZhciBBcnJheVxuICAgICAgICAgICAgICovXG4gICAgICAgICAgICBtYXBwZWRCdXR0b25zID0gW10sXG5cbiAgICAgICAgICAgIC8qKlxuICAgICAgICAgICAgICogVGhlIG1hcHBlciBsaWJyYXJ5XG4gICAgICAgICAgICAgKlxuICAgICAgICAgICAgICogQHZhciB7b2JqZWN0fVxuICAgICAgICAgICAgICovXG4gICAgICAgICAgICBtYXBwZXIgPSBqc2UubGlicy5hY3Rpb25fbWFwcGVyLFxuXG4gICAgICAgICAgICAvKipcbiAgICAgICAgICAgICAqIE1vZHVsZSBPYmplY3RcbiAgICAgICAgICAgICAqXG4gICAgICAgICAgICAgKiBAdHlwZSB7b2JqZWN0fVxuICAgICAgICAgICAgICovXG4gICAgICAgICAgICBtb2R1bGUgPSB7fTtcblxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gUFJJVkFURSBNRVRIT0RTXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBEaXNhYmxlL0VuYWJsZSB0aGUgYnV0dG9ucyBvbiB0aGUgYm90dG9tIGJ1dHRvbi1kcm9wZG93blxuICAgICAgICAgKiBkZXBlbmRlbnQgb24gdGhlIGNoZWNrYm94ZXMgc2VsZWN0aW9uXG4gICAgICAgICAqIEBwcml2YXRlXG4gICAgICAgICAqL1xuICAgICAgICB2YXIgX3RvZ2dsZU11bHRpQWN0aW9uQnV0dG9uID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgdmFyICRjaGVja2VkID0gJCgndHJbZGF0YS1yb3ctaWRdIGlucHV0W3R5cGU9XCJjaGVja2JveFwiXTpjaGVja2VkJyk7XG4gICAgICAgICAgICAkKCcuanMtYm90dG9tLWRyb3Bkb3duIGJ1dHRvbicpLnByb3AoJ2Rpc2FibGVkJywgISRjaGVja2VkLmxlbmd0aCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIE1hcCBhY3Rpb25zIGZvciBldmVyeSByb3cgaW4gdGhlIHRhYmxlLlxuICAgICAgICAgKlxuICAgICAgICAgKiBUaGlzIG1ldGhvZCB3aWxsIG1hcCB0aGUgYWN0aW9ucyBmb3IgZWFjaFxuICAgICAgICAgKiByb3cgb2YgdGhlIHRhYmxlLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgdmFyIF9tYXBSb3dBY3Rpb24gPSBmdW5jdGlvbiAoJHRoYXQpIHtcbiAgICAgICAgICAgIC8qKlxuICAgICAgICAgICAgICogUmVmZXJlbmNlIHRvIHRoZSByb3cgYWN0aW9uIGRyb3Bkb3duXG4gICAgICAgICAgICAgKiBAdmFyIHtvYmplY3QgfCBqUXVlcnl9XG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIHZhciAkZHJvcGRvd24gPSAkdGhhdC5maW5kKCcuanMtYnV0dG9uLWRyb3Bkb3duJyk7XG5cbiAgICAgICAgICAgIGlmICgkZHJvcGRvd24ubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgX21hcFJvd0J1dHRvbkRyb3Bkb3duKCRkcm9wZG93bik7XG4gICAgICAgICAgICB9XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF9tYXBSb3dCdXR0b25Ecm9wZG93biA9IGZ1bmN0aW9uICgkZHJvcGRvd24pIHtcbiAgICAgICAgICAgIHZhciBhY3Rpb25zID0gW1xuICAgICAgICAgICAgICAgICdURVhUX1NIT1cnLFxuICAgICAgICAgICAgICAgICdURVhUX0dNX1NUQVRVUycsXG4gICAgICAgICAgICAgICAgJ2RlbGV0ZScsXG4gICAgICAgICAgICAgICAgJ0JVVFRPTl9HTV9DQU5DRUwnLFxuICAgICAgICAgICAgICAgICdCVVRUT05fQ1JFQVRFX0lOVk9JQ0UnLFxuICAgICAgICAgICAgICAgICdUSVRMRV9JTlZPSUNFX01BSUwnLFxuICAgICAgICAgICAgICAgICdCVVRUT05fQ1JFQVRFX1BBQ0tJTkdfU0xJUCcsXG4gICAgICAgICAgICAgICAgJ1RJVExFX09SREVSJyxcbiAgICAgICAgICAgICAgICAnVElUTEVfU0VORF9PUkRFUicsXG4gICAgICAgICAgICAgICAgJ1RFWFRfQ1JFQVRFX1dJVEhEUkFXQUwnLFxuICAgICAgICAgICAgICAgICdUWFRfUEFSQ0VMX1RSQUNLSU5HX1NFTkRCVVRUT05fVElUTEUnLFxuICAgICAgICAgICAgICAgICdCVVRUT05fREhMX0xBQkVMJyxcbiAgICAgICAgICAgICAgICAnTUFJTEJFRVpfT1ZFUlZJRVcnLFxuICAgICAgICAgICAgICAgICdNQUlMQkVFWl9OT1RJRklDQVRJT05TJyxcbiAgICAgICAgICAgICAgICAnTUFJTEJFRVpfQ09OVkVSU0FUSU9OUycsXG4gICAgICAgICAgICAgICAgJ0JVVFRPTl9IRVJNRVMnXG4gICAgICAgICAgICBdO1xuXG4gICAgICAgICAgICBmb3IgKHZhciBpbmRleCBpbiBhY3Rpb25zKSB7XG4gICAgICAgICAgICAgICAgX2JpbmRFdmVudEhhbmRsZXIoJGRyb3Bkb3duLCBhY3Rpb25zW2luZGV4XSwgJy5zaW5nbGUtb3JkZXItZHJvcGRvd24nKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogRGVmaW5lcyB0aGUgbGFuZ3VhZ2Ugc2VjdGlvbiBmb3IgZWFjaCB0ZXh0IHRpbGVcbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge29iamVjdH1cbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfc2VjdGlvbk1hcHBpbmcgPSB7XG4gICAgICAgICAgICAnVEVYVF9TSE9XJzogJ29yZGVycycsXG4gICAgICAgICAgICAnVEVYVF9HTV9TVEFUVVMnOiAnb3JkZXJzJyxcbiAgICAgICAgICAgICdkZWxldGUnOiAnYnV0dG9ucycsXG4gICAgICAgICAgICAnQlVUVE9OX0dNX0NBTkNFTCc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9DUkVBVEVfSU5WT0lDRSc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ1RJVExFX0lOVk9JQ0VfTUFJTCc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9DUkVBVEVfUEFDS0lOR19TTElQJzogJ29yZGVycycsXG4gICAgICAgICAgICAnVElUTEVfT1JERVInOiAnb3JkZXJzJyxcbiAgICAgICAgICAgICdUSVRMRV9TRU5EX09SREVSJzogJ29yZGVycycsXG4gICAgICAgICAgICAnVEVYVF9DUkVBVEVfV0lUSERSQVdBTCc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ1RYVF9QQVJDRUxfVFJBQ0tJTkdfU0VOREJVVFRPTl9USVRMRSc6ICdwYXJjZWxfc2VydmljZXMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9ESExfTEFCRUwnOiAnb3JkZXJzJyxcbiAgICAgICAgICAgICdNQUlMQkVFWl9PVkVSVklFVyc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ01BSUxCRUVaX05PVElGSUNBVElPTlMnOiAnb3JkZXJzJyxcbiAgICAgICAgICAgICdNQUlMQkVFWl9DT05WRVJTQVRJT05TJzogJ29yZGVycycsXG4gICAgICAgICAgICAnQlVUVE9OX01VTFRJX0NBTkNFTCc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9NVUxUSV9DSEFOR0VfT1JERVJfU1RBVFVTJzogJ29yZGVycycsXG4gICAgICAgICAgICAnQlVUVE9OX01VTFRJX0RFTEVURSc6ICdvcmRlcnMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9IRVJNRVMnOiAnb3JkZXJzJyxcbiAgICAgICAgICAgICdnZXRfbGFiZWxzJzogJ2lsb3h4J1xuICAgICAgICB9O1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBEZWZpbmVzIHRhcmdldCBzZWxlY3RvcnNcbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge29iamVjdH1cbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfc2VsZWN0b3JNYXBwaW5nID0ge1xuICAgICAgICAgICAgJ1RFWFRfU0hPVyc6ICcuY29udGVudFRhYmxlIC5pbmZvQm94Q29udGVudCBhLmJ0bi1kZXRhaWxzJyxcbiAgICAgICAgICAgICdURVhUX0dNX1NUQVRVUyc6ICcuY29udGVudFRhYmxlIC5pbmZvQm94Q29udGVudCBhLmJ0bi11cGRhdGVfb3JkZXJfc3RhdHVzJyxcbiAgICAgICAgICAgICdkZWxldGUnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5idG4tZGVsZXRlJyxcbiAgICAgICAgICAgICdCVVRUT05fR01fQ0FOQ0VMJzogJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IC5HTV9DQU5DRUwnLFxuICAgICAgICAgICAgJ0JVVFRPTl9DUkVBVEVfSU5WT0lDRSc6ICcuY29udGVudFRhYmxlIC5pbmZvQm94Q29udGVudCBhLmJ0bi1pbnZvaWNlJyxcbiAgICAgICAgICAgICdUSVRMRV9JTlZPSUNFX01BSUwnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgLkdNX0lOVk9JQ0VfTUFJTCcsXG4gICAgICAgICAgICAnQlVUVE9OX0NSRUFURV9QQUNLSU5HX1NMSVAnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5idG4tcGFja2luZ19zbGlwJyxcbiAgICAgICAgICAgICdUSVRMRV9TRU5EX09SREVSJzogJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IC5HTV9TRU5EX09SREVSJyxcbiAgICAgICAgICAgICdURVhUX0NSRUFURV9XSVRIRFJBV0FMJzogJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IGEuYnRuLWNyZWF0ZV93aXRoZHJhd2FsJyxcbiAgICAgICAgICAgICdUWFRfUEFSQ0VMX1RSQUNLSU5HX1NFTkRCVVRUT05fVElUTEUnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5idG4tYWRkX3RyYWNraW5nX2NvZGUnLFxuICAgICAgICAgICAgJ0JVVFRPTl9ESExfTEFCRUwnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5idG4tZGhsX2xhYmVsJyxcbiAgICAgICAgICAgICdNQUlMQkVFWl9PVkVSVklFVyc6ICcuY29udGVudFRhYmxlIC5pbmZvQm94Q29udGVudCBhLmNvbnRleHRfdmlld19idXR0b24uYnRuX2xlZnQnLFxuICAgICAgICAgICAgJ01BSUxCRUVaX05PVElGSUNBVElPTlMnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5jb250ZXh0X3ZpZXdfYnV0dG9uLmJ0bl9taWRkbGUnLFxuICAgICAgICAgICAgJ01BSUxCRUVaX0NPTlZFUlNBVElPTlMnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5jb250ZXh0X3ZpZXdfYnV0dG9uLmJ0bl9yaWdodCcsXG4gICAgICAgICAgICAnQlVUVE9OX01VTFRJX0NBTkNFTCc6ICcuY29udGVudFRhYmxlIC5pbmZvQm94Q29udGVudCBhLmJ0bi1tdWx0aV9jYW5jZWwnLFxuICAgICAgICAgICAgJ0JVVFRPTl9NVUxUSV9DSEFOR0VfT1JERVJfU1RBVFVTJzogJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IGEuYnRuLXVwZGF0ZV9vcmRlcl9zdGF0dXMnLFxuICAgICAgICAgICAgJ0JVVFRPTl9NVUxUSV9ERUxFVEUnOiAnLmNvbnRlbnRUYWJsZSAuaW5mb0JveENvbnRlbnQgYS5idG4tbXVsdGlfZGVsZXRlJyxcbiAgICAgICAgICAgICdCVVRUT05fSEVSTUVTJzogJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IGEuYnRuLWhlcm1lcycsXG4gICAgICAgICAgICAnZ2V0X2xhYmVscyc6ICcjaWxveHhfb3JkZXJzJ1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfZ2V0QWN0aW9uQ2FsbGJhY2sgPSBmdW5jdGlvbiAoYWN0aW9uKSB7XG4gICAgICAgICAgICBzd2l0Y2ggKGFjdGlvbikge1xuICAgICAgICAgICAgICAgIGNhc2UgJ1RFWFRfU0hPVyc6XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBfc2hvd09yZGVyQ2FsbGJhY2s7XG4gICAgICAgICAgICAgICAgY2FzZSAnVEVYVF9HTV9TVEFUVVMnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX2NoYW5nZU9yZGVyU3RhdHVzQ2FsbGJhY2s7XG4gICAgICAgICAgICAgICAgY2FzZSAnZGVsZXRlJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9kZWxldGVDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdCVVRUT05fR01fQ0FOQ0VMJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9jYW5jZWxDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdCVVRUT05fQ1JFQVRFX0lOVk9JQ0UnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX2ludm9pY2VDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdUSVRMRV9JTlZPSUNFX01BSUwnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX2VtYWlsSW52b2ljZUNhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ0JVVFRPTl9DUkVBVEVfUEFDS0lOR19TTElQJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9wYWNraW5nU2xpcENhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ1RJVExFX09SREVSJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9vcmRlckNvbmZpcm1hdGlvbkNhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ1RJVExFX1NFTkRfT1JERVInOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX3NlbmRPcmRlckNvbmZpcm1hdGlvbkNhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ1RFWFRfQ1JFQVRFX1dJVEhEUkFXQUwnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX3dpdGhkcmF3YWxDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdUWFRfUEFSQ0VMX1RSQUNLSU5HX1NFTkRCVVRUT05fVElUTEUnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX2FkZFRyYWNraW5nQ29kZUNhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ0JVVFRPTl9ESExfTEFCRUwnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX2RobExhYmVsQ2FsbGJhY2s7XG4gICAgICAgICAgICAgICAgY2FzZSAnTUFJTEJFRVpfT1ZFUlZJRVcnOlxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gX21haWxCZWV6T3ZlcnZpZXdDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdNQUlMQkVFWl9OT1RJRklDQVRJT05TJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9tYWlsQmVlek5vdGlmaWNhdGlvbnNDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdNQUlMQkVFWl9DT05WRVJTQVRJT05TJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9tYWlsQmVlekNvbnZlcnNhdGlvbnNDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdCVVRUT05fTVVMVElfQ0FOQ0VMJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9tdWx0aUNhbmNlbENhbGxiYWNrO1xuICAgICAgICAgICAgICAgIGNhc2UgJ0JVVFRPTl9NVUxUSV9DSEFOR0VfT1JERVJfU1RBVFVTJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9tdWx0aUNoYW5nZU9yZGVyU3RhdHVzQ2FsbGJhY2s7XG4gICAgICAgICAgICAgICAgY2FzZSAnQlVUVE9OX01VTFRJX0RFTEVURSc6XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiBfbXVsdGlEZWxldGVDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdCVVRUT05fSEVSTUVTJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9oZXJtZXNDYWxsYmFjaztcbiAgICAgICAgICAgICAgICBjYXNlICdnZXRfbGFiZWxzJzpcbiAgICAgICAgICAgICAgICAgICAgcmV0dXJuIF9pbG94eENhbGxiYWNrO1xuICAgICAgICAgICAgfVxuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfc2hvd09yZGVyQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICB2YXIgdXJsID0gJChfc2VsZWN0b3JNYXBwaW5nLlRFWFRfU0hPVykuYXR0cignaHJlZicpO1xuICAgICAgICAgICAgd2luZG93Lm9wZW4odXJsLnJlcGxhY2UoL29JRD0oLiopJi8sICdvSUQ9JyArIG9yZGVySWQgKyAnJicpLCAnX3NlbGYnKTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX2NoYW5nZU9yZGVyU3RhdHVzQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICAkKCcjZ21fb3JkZXJfaWQnKS52YWwob3JkZXJJZCk7XG4gICAgICAgICAgICAkKCcuZ3gtb3JkZXJzLXRhYmxlIC5zaW5nbGUtY2hlY2tib3gnKS5yZW1vdmVDbGFzcygnY2hlY2tlZCcpO1xuICAgICAgICAgICAgJCgnLmd4LW9yZGVycy10YWJsZSBpbnB1dDpjaGVja2JveCcpLnByb3AoJ2NoZWNrZWQnLCBmYWxzZSk7XG4gICAgICAgICAgICAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5lcSgwKS5maW5kKCcuc2luZ2xlLWNoZWNrYm94JykuYWRkQ2xhc3MoJ2NoZWNrZWQnKTtcbiAgICAgICAgICAgICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmVxKDApLmZpbmQoJ2lucHV0OmNoZWNrYm94JykucHJvcCgnY2hlY2tlZCcsIHRydWUpO1xuICAgICAgICAgICAgJChfc2VsZWN0b3JNYXBwaW5nLlRFWFRfR01fU1RBVFVTKS5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfZGVsZXRlQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICB2YXIgJGRlbGV0ZSA9ICQoX3NlbGVjdG9yTWFwcGluZy5kZWxldGUpO1xuICAgICAgICAgICAgJGRlbGV0ZS5kYXRhKCdvcmRlcl9pZCcsIG9yZGVySWQpO1xuICAgICAgICAgICAgJGRlbGV0ZS5nZXQoMCkuY2xpY2soKTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX2NhbmNlbENhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICB2YXIgb3JkZXJJZCA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmRhdGEoJ3Jvdy1pZCcpO1xuICAgICAgICAgICAgJCgnI2dtX29yZGVyX2lkJykudmFsKG9yZGVySWQpO1xuICAgICAgICAgICAgJCgnLmd4LW9yZGVycy10YWJsZSAuc2luZ2xlLWNoZWNrYm94JykucmVtb3ZlQ2xhc3MoJ2NoZWNrZWQnKTtcbiAgICAgICAgICAgICQoJy5neC1vcmRlcnMtdGFibGUgaW5wdXQ6Y2hlY2tib3gnKS5wcm9wKCdjaGVja2VkJywgZmFsc2UpO1xuICAgICAgICAgICAgJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZXEoMCkuZmluZCgnLnNpbmdsZS1jaGVja2JveCcpLmFkZENsYXNzKCdjaGVja2VkJyk7XG4gICAgICAgICAgICAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5lcSgwKS5maW5kKCdpbnB1dDpjaGVja2JveCcpLnByb3AoJ2NoZWNrZWQnLCB0cnVlKTtcbiAgICAgICAgICAgICQoX3NlbGVjdG9yTWFwcGluZy5CVVRUT05fTVVMVElfQ0FOQ0VMKS5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfaW52b2ljZUNhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICB2YXIgb3JkZXJJZCA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmRhdGEoJ3Jvdy1pZCcpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICQoX3NlbGVjdG9yTWFwcGluZy5CVVRUT05fQ1JFQVRFX0lOVk9JQ0UpLmF0dHIoJ2hyZWYnKTtcbiAgICAgICAgICAgIHdpbmRvdy5vcGVuKHVybC5yZXBsYWNlKC9vSUQ9KC4qKSYvLCAnb0lEPScgKyBvcmRlcklkICsgJyYnKSwgJ19ibGFuaycpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfZW1haWxJbnZvaWNlQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICAkKCcjZ21fb3JkZXJfaWQnKS52YWwob3JkZXJJZCk7XG4gICAgICAgICAgICAkKCcuR01fSU5WT0lDRV9NQUlMJykuY2xpY2soKTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX3BhY2tpbmdTbGlwQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICB2YXIgdXJsID0gJChfc2VsZWN0b3JNYXBwaW5nLkJVVFRPTl9DUkVBVEVfUEFDS0lOR19TTElQKS5hdHRyKCdocmVmJyk7XG4gICAgICAgICAgICB3aW5kb3cub3Blbih1cmwucmVwbGFjZSgvb0lEPSguKikmLywgJ29JRD0nICsgb3JkZXJJZCArICcmJyksICdfYmxhbmsnKTtcbiAgICAgICAgfTtcbiAgICAgICAgXG4gICAgICAgIHZhciBfb3JkZXJDb25maXJtYXRpb25DYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgdmFyIG9yZGVySWQgPSAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5kYXRhKCdyb3ctaWQnKTtcbiAgICAgICAgICAgIHZhciB1cmwgPSAkKF9zZWxlY3Rvck1hcHBpbmcuVElUTEVfT1JERVIpLmF0dHIoJ2hyZWYnKTtcbiAgICAgICAgICAgIHdpbmRvdy5vcGVuKHVybC5yZXBsYWNlKC9vSUQ9KC4qKSYvLCAnb0lEPScgKyBvcmRlcklkICsgJyYnKSwgJ19ibGFuaycpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfc2VuZE9yZGVyQ29uZmlybWF0aW9uQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICAkKCcjZ21fb3JkZXJfaWQnKS52YWwob3JkZXJJZCk7XG4gICAgICAgICAgICAkKCcuR01fU0VORF9PUkRFUicpLmNsaWNrKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF93aXRoZHJhd2FsQ2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJChldmVudC50YXJnZXQpLnBhcmVudHMoJ3RyJykuZGF0YSgncm93LWlkJyk7XG4gICAgICAgICAgICB2YXIgdXJsID0gJChfc2VsZWN0b3JNYXBwaW5nLlRFWFRfQ1JFQVRFX1dJVEhEUkFXQUwpLmF0dHIoJ2hyZWYnKTtcbiAgICAgICAgICAgIHdpbmRvdy5vcGVuKHVybC5yZXBsYWNlKC9vcmRlcj1bXiZdKi8sICdvcmRlcl9pZD0nICsgb3JkZXJJZCksICdfYmxhbmsnKTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX2FkZFRyYWNraW5nQ29kZUNhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICB2YXIgb3JkZXJJZCA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmRhdGEoJ3Jvdy1pZCcpO1xuICAgICAgICAgICAgdmFyICR0YXJnZXQgPSAkKF9zZWxlY3Rvck1hcHBpbmcuVFhUX1BBUkNFTF9UUkFDS0lOR19TRU5EQlVUVE9OX1RJVExFKTtcbiAgICAgICAgICAgICR0YXJnZXQuZGF0YSgnb3JkZXJfaWQnLCBvcmRlcklkKTtcbiAgICAgICAgICAgICR0YXJnZXQuZ2V0KDApLmNsaWNrKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF9kaGxMYWJlbENhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICB2YXIgb3JkZXJJZCA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmRhdGEoJ3Jvdy1pZCcpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICQoX3NlbGVjdG9yTWFwcGluZy5CVVRUT05fREhMX0xBQkVMKS5hdHRyKCdocmVmJyk7XG4gICAgICAgICAgICB3aW5kb3cub3Blbih1cmwucmVwbGFjZSgvb0lEPSguKikvLCAnb0lEPScgKyBvcmRlcklkKSwgJ19ibGFuaycpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfbWFpbEJlZXpPdmVydmlld0NhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICB2YXIgb3JkZXJJZCA9ICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCd0cicpLmRhdGEoJ3Jvdy1pZCcpO1xuICAgICAgICAgICAgdmFyICR0YXJnZXQgPSAkKF9zZWxlY3Rvck1hcHBpbmcuTUFJTEJFRVpfT1ZFUlZJRVcpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICR0YXJnZXQuYXR0cignb25jbGljaycpO1xuICAgICAgICAgICAgdXJsID0gdXJsLnJlcGxhY2UoL29JRD0oLiopJi8sICdvSUQ9JyArIG9yZGVySWQgKyAnJicpO1xuICAgICAgICAgICAgJHRhcmdldC5hdHRyKCdvbmNsaWNrJywgdXJsKTtcbiAgICAgICAgICAgICR0YXJnZXQuZ2V0KDApLmNsaWNrKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF9tYWlsQmVlek5vdGlmaWNhdGlvbnNDYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgdmFyIG9yZGVySWQgPSAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5kYXRhKCdyb3ctaWQnKTtcbiAgICAgICAgICAgIHZhciAkdGFyZ2V0ID0gJChfc2VsZWN0b3JNYXBwaW5nLk1BSUxCRUVaX05PVElGSUNBVElPTlMpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICR0YXJnZXQuYXR0cignb25jbGljaycpO1xuICAgICAgICAgICAgdXJsID0gdXJsLnJlcGxhY2UoL29JRD0oLiopJi8sICdvSUQ9JyArIG9yZGVySWQgKyAnJicpO1xuICAgICAgICAgICAgJHRhcmdldC5hdHRyKCdvbmNsaWNrJywgdXJsKTtcbiAgICAgICAgICAgICR0YXJnZXQuZ2V0KDApLmNsaWNrKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF9tYWlsQmVlekNvbnZlcnNhdGlvbnNDYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgdmFyIG9yZGVySWQgPSAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5kYXRhKCdyb3ctaWQnKTtcbiAgICAgICAgICAgIHZhciAkdGFyZ2V0ID0gJChfc2VsZWN0b3JNYXBwaW5nLk1BSUxCRUVaX0NPTlZFUlNBVElPTlMpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICR0YXJnZXQuYXR0cignb25jbGljaycpO1xuICAgICAgICAgICAgdXJsID0gdXJsLnJlcGxhY2UoL29JRD0oLiopJi8sICdvSUQ9JyArIG9yZGVySWQgKyAnJicpO1xuICAgICAgICAgICAgJHRhcmdldC5hdHRyKCdvbmNsaWNrJywgdXJsKTtcbiAgICAgICAgICAgICR0YXJnZXQuZ2V0KDApLmNsaWNrKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgdmFyIF9oZXJtZXNDYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgdmFyIG9yZGVySWQgPSAkKGV2ZW50LnRhcmdldCkucGFyZW50cygndHInKS5kYXRhKCdyb3ctaWQnKTtcbiAgICAgICAgICAgIHZhciAkdGFyZ2V0ID0gJChfc2VsZWN0b3JNYXBwaW5nLkJVVFRPTl9IRVJNRVMpO1xuICAgICAgICAgICAgdmFyIHVybCA9ICR0YXJnZXQuYXR0cignaHJlZicpO1xuICAgICAgICAgICAgdXJsID0gdXJsLnJlcGxhY2UoL29yZGVyc19pZD0oLiopLywgJ29yZGVyc19pZD0nICsgb3JkZXJJZCk7XG4gICAgICAgICAgICAkdGFyZ2V0LmF0dHIoJ2hyZWYnLCB1cmwpO1xuICAgICAgICAgICAgJHRhcmdldC5nZXQoMCkuY2xpY2soKTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX2lsb3h4Q2FsbGJhY2sgPSBmdW5jdGlvbiAoZXZlbnQpIHtcbiAgICAgICAgICAgIHZhciAkdGFyZ2V0ID0gJChfc2VsZWN0b3JNYXBwaW5nLmdldF9sYWJlbHMpO1xuICAgICAgICAgICAgJHRhcmdldC5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfbXVsdGlDaGFuZ2VPcmRlclN0YXR1c0NhbGxiYWNrID0gZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICAkKF9zZWxlY3Rvck1hcHBpbmcuQlVUVE9OX01VTFRJX0NIQU5HRV9PUkRFUl9TVEFUVVMpLmdldCgwKS5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfbXVsdGlEZWxldGVDYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgJChfc2VsZWN0b3JNYXBwaW5nLkJVVFRPTl9NVUxUSV9ERUxFVEUpLmdldCgwKS5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfbXVsdGlDYW5jZWxDYWxsYmFjayA9IGZ1bmN0aW9uIChldmVudCkge1xuICAgICAgICAgICAgJChfc2VsZWN0b3JNYXBwaW5nLkJVVFRPTl9NVUxUSV9DQU5DRUwpLmdldCgwKS5jbGljaygpO1xuICAgICAgICB9O1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBNYXAgdGFibGUgYWN0aW9ucyB0byBib3R0b20gZHJvcGRvd24gYnV0dG9uLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgdmFyIF9tYXBUYWJsZUFjdGlvbnMgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB2YXIgJGRyb3Bkb3duID0gJCgnI29yZGVycy10YWJsZS1kcm9wZG93bicpO1xuXG4gICAgICAgICAgICBfYmluZEV2ZW50SGFuZGxlcigkZHJvcGRvd24sICdCVVRUT05fTVVMVElfQ0hBTkdFX09SREVSX1NUQVRVUycpO1xuXG4gICAgICAgICAgICBpZiAoJChfc2VsZWN0b3JNYXBwaW5nLmdldF9sYWJlbHMpLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIF9iaW5kRXZlbnRIYW5kbGVyKCRkcm9wZG93biwgJ2dldF9sYWJlbHMnKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgX2JpbmRFdmVudEhhbmRsZXIoJGRyb3Bkb3duLCAnQlVUVE9OX01VTFRJX0RFTEVURScpO1xuICAgICAgICAgICAgX2JpbmRFdmVudEhhbmRsZXIoJGRyb3Bkb3duLCAnQlVUVE9OX01VTFRJX0NBTkNFTCcpO1xuICAgICAgICB9O1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBNYXAgYWN0aW9ucyBmb3IgZXZlcnkgcm93IGluIHRoZSB0YWJsZSBnZW5lcmljYWxseS5cbiAgICAgICAgICpcbiAgICAgICAgICogVGhpcyBtZXRob2Qgd2lsbCB1c2UgdGhlIGFjdGlvbl9tYXBwZXIgbGlicmFyeSB0byBtYXAgdGhlIGFjdGlvbnMgZm9yIGVhY2hcbiAgICAgICAgICogcm93IG9mIHRoZSB0YWJsZS4gSXQgbWFwcyBvbmx5IHRob3NlIGJ1dHRvbnMsIHRoYXQgaGF2ZW4ndCBhbHJlYWR5IGV4cGxpY2l0bHlcbiAgICAgICAgICogbWFwcGVkIGJ5IHRoZSBfbWFwUm93QWN0aW9ucyBmdW5jdGlvbi5cbiAgICAgICAgICpcbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfbWFwVW5tYXBwZWRSb3dBY3Rpb25zID0gZnVuY3Rpb24gKCR0aGlzKSB7XG4gICAgICAgICAgICB2YXIgdW5tYXBwZWRSb3dBY3Rpb25zID0gW107XG4gICAgICAgICAgICAkKCcuYWN0aW9uX2J1dHRvbnMgLmV4dGVuZGVkX3NpbmdsZV9hY3Rpb25zIGEsJyArXG4gICAgICAgICAgICAgICAgJy5hY3Rpb25fYnV0dG9ucyAuZXh0ZW5kZWRfc2luZ2xlX2FjdGlvbnMgYnV0dG9uLCcgK1xuICAgICAgICAgICAgICAgICcuYWN0aW9uX2J1dHRvbnMgLmV4dGVuZGVkX3NpbmdsZV9hY3Rpb25zIGlucHV0W3R5cGU9XCJidXR0b25cIl0sJyArXG4gICAgICAgICAgICAgICAgJy5hY3Rpb25fYnV0dG9ucyAuZXh0ZW5kZWRfc2luZ2xlX2FjdGlvbnMgaW5wdXRbdHlwZT1cInN1Ym1pdFwiXScpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGlmICghX2FscmVhZHlNYXBwZWQoJCh0aGlzKSkpIHtcbiAgICAgICAgICAgICAgICAgICAgdW5tYXBwZWRSb3dBY3Rpb25zLnB1c2goJCh0aGlzKSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIHZhciBvcmRlcklkID0gJHRoaXMuZGF0YSgncm93LWlkJyksXG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duID0gJHRoaXMuZmluZCgnLmpzLWJ1dHRvbi1kcm9wZG93bicpO1xuXG4gICAgICAgICAgICAkLmVhY2godW5tYXBwZWRSb3dBY3Rpb25zLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdmFyICRidXR0b24gPSAkKHRoaXMpO1xuICAgICAgICAgICAgICAgIHZhciBjYWxsYmFjayA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgaWYgKCRidXR0b24ucHJvcCgnaHJlZicpICE9PSB1bmRlZmluZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICRidXR0b24ucHJvcCgnaHJlZicsICRidXR0b24ucHJvcCgnaHJlZicpLnJlcGxhY2UoL29JRD0oLiopXFxkKD89Jik/LywgJ29JRD0nICsgb3JkZXJJZCkpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgICRidXR0b24uZ2V0KDApLmNsaWNrKCk7XG4gICAgICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5tYXBBY3Rpb24oJGRyb3Bkb3duLCAkYnV0dG9uLnRleHQoKSwgJycsIGNhbGxiYWNrKTtcbiAgICAgICAgICAgICAgICBtYXBwZWRCdXR0b25zLnB1c2goJGJ1dHRvbik7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX21hcFVubWFwcGVkTXVsdGlBY3Rpb25zID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgdmFyIHVubWFwcGVkTXVsdGlBY3Rpb25zID0gW107XG4gICAgICAgICAgICAkKCcuYWN0aW9uX2J1dHRvbnMgLmV4dGVuZGVkX211bHRpX2FjdGlvbnMgYSwnICtcbiAgICAgICAgICAgICAgICAnLmFjdGlvbl9idXR0b25zIC5leHRlbmRlZF9tdWx0aV9hY3Rpb25zIGJ1dHRvbiwnICtcbiAgICAgICAgICAgICAgICAnLmFjdGlvbl9idXR0b25zIC5leHRlbmRlZF9tdWx0aV9hY3Rpb25zIGlucHV0W3R5cGU9XCJidXR0b25cIl0sJyArXG4gICAgICAgICAgICAgICAgJy5hY3Rpb25fYnV0dG9ucyAuZXh0ZW5kZWRfbXVsdGlfYWN0aW9ucyBpbnB1dFt0eXBlPVwic3VibWl0XCJdJykuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgaWYgKCFfYWxyZWFkeU1hcHBlZCgkKHRoaXMpKSkge1xuICAgICAgICAgICAgICAgICAgICB1bm1hcHBlZE11bHRpQWN0aW9ucy5wdXNoKCQodGhpcykpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICB2YXIgJGRyb3Bkb3duID0gJCgnI29yZGVycy10YWJsZS1kcm9wZG93bicpO1xuICAgICAgICAgICAgJC5lYWNoKHVubWFwcGVkTXVsdGlBY3Rpb25zLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdmFyICRidXR0b24gPSAkKHRoaXMpO1xuICAgICAgICAgICAgICAgIHZhciBjYWxsYmFjayA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgJGJ1dHRvbi5nZXQoMCkuY2xpY2soKTtcbiAgICAgICAgICAgICAgICB9O1xuXG4gICAgICAgICAgICAgICAganNlLmxpYnMuYnV0dG9uX2Ryb3Bkb3duLm1hcEFjdGlvbigkZHJvcGRvd24sICRidXR0b24udGV4dCgpLCAnJywgY2FsbGJhY2spO1xuICAgICAgICAgICAgICAgIG1hcHBlZEJ1dHRvbnMucHVzaCgkYnV0dG9uKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9O1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBDaGVja3MgaWYgdGhlIGJ1dHRvbiB3YXMgYWxyZWFkeSBtYXBwZWRcbiAgICAgICAgICpcbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfYWxyZWFkeU1hcHBlZCA9IGZ1bmN0aW9uICgkYnV0dG9uKSB7XG4gICAgICAgICAgICBmb3IgKHZhciBpbmRleCBpbiBtYXBwZWRCdXR0b25zKSB7XG4gICAgICAgICAgICAgICAgaWYgKCRidXR0b24uaXMobWFwcGVkQnV0dG9uc1tpbmRleF0pKSB7XG4gICAgICAgICAgICAgICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgICAgIHJldHVybiBmYWxzZTtcbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogQWRkIEJ1dHRvbiB0byBNYXBwZWQgQXJyYXlcbiAgICAgICAgICpcbiAgICAgICAgICogQHBhcmFtIGJ1dHRvblNlbGVjdG9yXG4gICAgICAgICAqIEByZXR1cm5zIHtib29sZWFufVxuICAgICAgICAgKlxuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgdmFyIF9hZGRCdXR0b25Ub01hcHBlZEFycmF5ID0gZnVuY3Rpb24gKGJ1dHRvblNlbGVjdG9yKSB7XG4gICAgICAgICAgICBpZiAobWFwcGVkQnV0dG9uc1tidXR0b25TZWxlY3Rvcl0gIT09IHVuZGVmaW5lZCkge1xuICAgICAgICAgICAgICAgIHJldHVybiB0cnVlO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgbWFwcGVkQnV0dG9uc1tidXR0b25TZWxlY3Rvcl0gPSAkKGJ1dHRvblNlbGVjdG9yKTtcbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogQmluZCBFdmVudCBoYW5kbGVyXG4gICAgICAgICAqXG4gICAgICAgICAqIEBwYXJhbSAkZHJvcGRvd25cbiAgICAgICAgICogQHBhcmFtIGFjdGlvblxuICAgICAgICAgKiBAcGFyYW0gY3VzdG9tUmVjZW50QnV0dG9uU2VsZWN0b3JcbiAgICAgICAgICpcbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfYmluZEV2ZW50SGFuZGxlciA9IGZ1bmN0aW9uICgkZHJvcGRvd24sIGFjdGlvbiwgY3VzdG9tUmVjZW50QnV0dG9uU2VsZWN0b3IpIHtcbiAgICAgICAgICAgIHZhciB0YXJnZXRTZWxlY3RvciA9IF9zZWxlY3Rvck1hcHBpbmdbYWN0aW9uXSxcbiAgICAgICAgICAgICAgICBzZWN0aW9uID0gX3NlY3Rpb25NYXBwaW5nW2FjdGlvbl0sXG4gICAgICAgICAgICAgICAgY2FsbGJhY2sgPSBfZ2V0QWN0aW9uQ2FsbGJhY2soYWN0aW9uKSxcbiAgICAgICAgICAgICAgICBjdXN0b21FbGVtZW50ID0gJChjdXN0b21SZWNlbnRCdXR0b25TZWxlY3RvcikubGVuZ3RoID8gJChjdXN0b21SZWNlbnRCdXR0b25TZWxlY3RvcikgOlxuICAgICAgICAgICAgICAgICAgICAkZHJvcGRvd247XG4gICAgICAgICAgICBpZiAoJCh0YXJnZXRTZWxlY3RvcikubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgX2FkZEJ1dHRvblRvTWFwcGVkQXJyYXkodGFyZ2V0U2VsZWN0b3IpO1xuICAgICAgICAgICAgICAgIGpzZS5saWJzLmJ1dHRvbl9kcm9wZG93bi5tYXBBY3Rpb24oJGRyb3Bkb3duLCBhY3Rpb24sIHNlY3Rpb24sIGNhbGxiYWNrLCBjdXN0b21FbGVtZW50KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogRml4IGZvciByb3cgc2VsZWN0aW9uIGNvbnRyb2xzLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgdmFyIF9maXhSb3dTZWxlY3Rpb25Gb3JDb250cm9sRWxlbWVudHMgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAkKCdpbnB1dC5jaGVja2JveFtuYW1lPVwiZ21fbXVsdGlfc3RhdHVzW11cIl0nKVxuICAgICAgICAgICAgICAgIC5hZGQoJy5zaW5nbGUtY2hlY2tib3gnKVxuICAgICAgICAgICAgICAgIC5hZGQoJ2EuYWN0aW9uLWljb24nKVxuICAgICAgICAgICAgICAgIC5hZGQoJy5qcy1idXR0b24tZHJvcGRvd24nKVxuICAgICAgICAgICAgICAgIC5hZGQoJ3RyLmRhdGFUYWJsZVJvdyBhJylcbiAgICAgICAgICAgICAgICAub24oJ2NsaWNrJywgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICAgICAgICAgIGV2ZW50LnN0b3BQcm9wYWdhdGlvbigpO1xuICAgICAgICAgICAgICAgICAgICBfdG9nZ2xlTXVsdGlBY3Rpb25CdXR0b24oKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgfTtcblxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gSU5JVElBTElaQVRJT05cbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgbW9kdWxlLmluaXQgPSBmdW5jdGlvbiAoZG9uZSkge1xuICAgICAgICAgICAgLy8gV2FpdCB1bnRpbCB0aGUgYnV0dG9ucyBhcmUgY29udmVydGVkIHRvIGRyb3Bkb3duIGZvciBldmVyeSByb3cuXG4gICAgICAgICAgICB2YXIgaW50ZXJ2YWwgPSBzZXRJbnRlcnZhbChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgaWYgKCQoJy5qcy1idXR0b24tZHJvcGRvd24nKS5sZW5ndGgpIHtcbiAgICAgICAgICAgICAgICAgICAgY2xlYXJJbnRlcnZhbChpbnRlcnZhbCk7XG5cbiAgICAgICAgICAgICAgICAgICAgX21hcFRhYmxlQWN0aW9ucygpO1xuICAgICAgICAgICAgICAgICAgICBfbWFwVW5tYXBwZWRNdWx0aUFjdGlvbnMoKTtcblxuICAgICAgICAgICAgICAgICAgICB2YXIgdGFibGVBY3Rpb25zID0gbWFwcGVkQnV0dG9ucztcblxuICAgICAgICAgICAgICAgICAgICAvLyBSZW1vdmUgTWFpbGJlZXogY29udmVyc2F0aW9ucyBiYWRnZS5cbiAgICAgICAgICAgICAgICAgICAgX2FkZEJ1dHRvblRvTWFwcGVkQXJyYXkoJy5jb250ZW50VGFibGUgLmluZm9Cb3hDb250ZW50IGEuY29udGV4dF92aWV3X2J1dHRvbi5idG5fcmlnaHQnKTtcblxuICAgICAgICAgICAgICAgICAgICAkKCcuZ3gtb3JkZXJzLXRhYmxlIHRyJykubm90KCcuZGF0YVRhYmxlSGVhZGluZ1JvdycpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgbWFwcGVkQnV0dG9ucyA9IFtdO1xuXG4gICAgICAgICAgICAgICAgICAgICAgICBmb3IgKHZhciBpbmRleCBpbiB0YWJsZUFjdGlvbnMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBtYXBwZWRCdXR0b25zW2luZGV4XSA9IHRhYmxlQWN0aW9uc1tpbmRleF07XG4gICAgICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgICAgIF9tYXBSb3dBY3Rpb24oJCh0aGlzKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBfbWFwVW5tYXBwZWRSb3dBY3Rpb25zKCQodGhpcykpO1xuICAgICAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgICAgICBfZml4Um93U2VsZWN0aW9uRm9yQ29udHJvbEVsZW1lbnRzKCk7XG5cbiAgICAgICAgICAgICAgICAgICAgLy8gSW5pdGlhbGl6ZSBjaGVja2JveGVzXG4gICAgICAgICAgICAgICAgICAgIF90b2dnbGVNdWx0aUFjdGlvbkJ1dHRvbigpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0sIDMwMCk7XG5cbiAgICAgICAgICAgIC8vIENoZWNrIGZvciBzZWxlY3RlZCBjaGVja2JveGVzIGFsc29cbiAgICAgICAgICAgIC8vIGJlZm9yZSBhbGwgcm93cyBhbmQgdGhlaXIgZHJvcGRvd24gd2lkZ2V0cyBoYXZlIGJlZW4gaW5pdGlhbGl6ZWQuXG4gICAgICAgICAgICBfdG9nZ2xlTXVsdGlBY3Rpb25CdXR0b24oKTtcblxuICAgICAgICAgICAgZG9uZSgpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHJldHVybiBtb2R1bGU7XG4gICAgfSk7XG4iXX0=
