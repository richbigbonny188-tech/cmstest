'use strict';

/* --------------------------------------------------------------
 image_map.js 2024-03-25
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2024 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * Controller Module For Slide Image Map Modal.
 *
 * Public methods:
 *  - 'show' shows the dropdown.
 */
gx.controllers.module('image_map', [jse.source + '/vendor/jquery-canvas-area-draw/jquery.canvasAreaDraw.min.js'], function () {
    'use strict';

    // --------------------------------------------------------------------
    // VARIABLES
    // --------------------------------------------------------------------

    /**
     * Module element (modal element).
     *
     * @type {jQuery}
     */

    var $this = $(this);

    /**
     * CSS Class Map
     *
     * @type {Object}
     */
    var classes = {
        // Hidden class.
        hidden: 'hidden',

        // New inserted option.
        newOption: 'new'
    };

    /**
     * CSS ID Map
     *
     * @type {Object}
     */
    var ids = {
        canvas: 'canvas'
    };

    /**
     * Element Map
     *
     * @type {Object}
     */
    var elements = {
        // Canvas extension element.
        extension: $this.find('#' + ids.canvas),

        // Container elements.
        containers: {
            // Image container.
            image: $this.find('.row.image'),

            // Canvas container.
            canvas: $this.find('.row.canvas'),

            // Action buttons container.
            actionButtons: $this.find('.row.actions')
        },

        // Form inputs.
        inputs: {
            // Link area dropdown.
            area: $this.find('#image-map-area'),

            // Link title.
            linkTitle: $this.find('#image-map-link-title'),

            // Link URL.
            linkUrl: $this.find('#image-map-link-url'),

            // Link target.
            linkTarget: $this.find('#image-map-link-target')
        },

        // Buttons.
        buttons: {
            // Close modal.
            close: $this.find('.btn.action-close'),

            // Create image area.
            create: $this.find('.btn.action-create'),

            // Abort edit.
            abort: $this.find('.btn.action-abort'),

            // Delete image area.
            delete: $this.find('.btn.action-delete'),

            // Apply image area changes.
            apply: $this.find('.btn.action-apply'),

            // Reset path.
            reset: $this.find('.btn-default.action-reset')
        },

        // Alerts
        alerts: {
            info: $this.find('.alert')
        }
    };

    /**
     * Value Map
     *
     * @type {Object}
     */
    var values = {
        // Empty string.
        empty: '',

        // 'Please select' value.
        nil: '',

        // Open in same window.
        sameWindowTarget: '_self'
    };

    /**
     * Module Instance
     *
     * @type {Object}
     */
    var module = {};

    /**
     * Data container list.
     *
     * @type {jQuery|null}
     */
    var $list = null;

    /**
     * Slide image URL.
     *
     * @type {String|null}
     */
    var imageUrl = null;

    // --------------------------------------------------------------------
    // FUNCTIONS
    // --------------------------------------------------------------------

    /**
     * Fills the area dropdown with the data container list items.
     */
    function _fillAreaDropdown() {
        /**
         * Transfers the data from the data container list item to the area dropdown.
         *
         * @param {Number} index Iteration index.
         * @param {Element} element Iteration element.
         */
        var _transferToAreaDropdown = function _transferToAreaDropdown(index, element) {
            // Create new option element.
            var $option = $('<option>');

            // Set text content and value and append option to area dropdown.
            $option.text(element.dataset.linkTitle).val(index).appendTo(elements.inputs.area);
        };

        // Delete all children, except the first one.
        elements.inputs.area.children().not(':first').remove();

        // Transfer data container list items to area dropdown.
        $list.children().each(_transferToAreaDropdown);
    }

    /**
     * Switches to the default view.
     */
    function _switchToDefaultView() {
        // Image tag.
        var $image = $('<img src="' + imageUrl + '">');

        // Enable area dropdown.
        elements.inputs.area.prop('disabled', false);

        // Disable and empty the link title input.
        elements.inputs.linkTitle.prop('disabled', true).val(values.empty);

        // Disable and empty the link URL title input.
        elements.inputs.linkUrl.prop('disabled', true).val(values.empty);

        // Disable and empty the link target title input.
        elements.inputs.linkTarget.prop('disabled', true).val(values.sameWindowTarget);

        // Hide button container.
        elements.containers.actionButtons.addClass(classes.hidden);

        // Show and empty image container and append image.
        elements.containers.image.empty().removeClass(classes.hidden).append($image);

        // Hide canvas container.
        elements.containers.canvas.addClass(classes.hidden);

        // Empty extension element.
        elements.extension.empty();

        // Show create button.
        elements.buttons.create.removeClass(classes.hidden);

        // Hide reset button.
        elements.buttons.reset.addClass(classes.hidden);

        // Hide information alert-box.
        elements.alerts.info.addClass('hidden');
    }

    /**
     * Switches to the new image area view.
     */
    function _switchToNewView() {
        // Create new draw extension element.
        var $extension = $('<div\n\t\t\t\tid="' + ids.canvas + '"\n\t\t\t\tdata-gx-extension="canvas_area_draw"\n\t\t\t\tdata-canvas_area_draw-image-url="' + imageUrl + '">');

        // Enable link title input.
        elements.inputs.linkTitle.prop('disabled', false);

        // Enable link URL input.
        elements.inputs.linkUrl.prop('disabled', false);

        // Enable the link target input and set the value to 'self'.
        elements.inputs.linkTarget.prop('disabled', false).val(values.sameWindowTarget);

        // Disable the area dropdown.
        elements.inputs.area.prop('disabled', true);

        // Hide create button.
        elements.buttons.create.addClass(classes.hidden);

        // Show apply button.
        elements.buttons.apply.removeClass(classes.hidden);

        // Show abort button.
        elements.buttons.abort.removeClass(classes.hidden);

        // Hide delete button.
        elements.buttons.delete.addClass(classes.hidden);

        // Show action button container.
        elements.containers.actionButtons.removeClass(classes.hidden);

        // Hide image container.
        elements.containers.image.addClass(classes.hidden);

        // Show canvas container.
        elements.containers.canvas.removeClass(classes.hidden);

        // Remove existing canvas element.
        elements.extension.remove();

        // Add newly created canvas extension element.
        elements.containers.canvas.append($extension);

        // Assign new element reference.
        elements.extension = $extension;

        // Initialize extension.
        gx.extensions.init($extension);

        // Insert text into link title input and focus to that element.
        elements.inputs.linkTitle.val(jse.core.lang.translate('NEW_LINKED_AREA', 'sliders')).trigger('focus').trigger('select');

        // Show reset button.
        elements.buttons.reset.removeClass(classes.hidden);

        // Display information alert-box.
        elements.alerts.info.removeClass('hidden');
    }

    /**
     * Switches to the image area edit view.
     */
    function _switchToEditView() {
        // Index of the selected option (subtracted 1 to be compatible with data container list element).
        var optionIndex = elements.inputs.area.find('option:selected').index() - 1;

        // Corresponding list item in the data container list element.
        var $listItem = $list.children().eq(optionIndex);

        // Create new draw extension element.
        var $extension = $('<div\n\t\t\t\tid="' + ids.canvas + '"\n\t\t\t\tdata-gx-extension="canvas_area_draw"\n\t\t\t\tdata-canvas_area_draw-image-url="' + imageUrl + '"\n\t\t\t\tdata-canvas_area_draw-coordinates="' + $listItem.data('coordinates') + '"\n\t\t\t>');

        // Enable the link title input element and assign value.
        elements.inputs.linkTitle.prop('disabled', false).val($listItem.data('linkTitle'));

        // Enable the link URL input element and assign value.
        elements.inputs.linkUrl.prop('disabled', false).val($listItem.data('linkUrl'));

        // Enable the link target input element and assign value.
        elements.inputs.linkTarget.prop('disabled', false).val($listItem.data('linkTarget'));

        // Disable area dropdown.
        elements.inputs.area.prop('disabled', true);

        // Show apply button.
        elements.buttons.apply.removeClass(classes.hidden);

        // Show abort button.
        elements.buttons.abort.removeClass(classes.hidden);

        // Show delete button.
        elements.buttons.delete.removeClass(classes.hidden);

        // Hide create button.
        elements.buttons.create.addClass(classes.hidden);

        // Show action button container.
        elements.containers.actionButtons.removeClass(classes.hidden);

        // Hide image container.
        elements.containers.image.addClass(classes.hidden);

        // Show canvas container.
        elements.containers.canvas.removeClass(classes.hidden);

        // Remove existing canvas element.
        elements.extension.remove();

        // Add newly created canvas extension element.
        elements.containers.canvas.append($extension);

        // Assign new element reference.
        elements.extension = $extension;

        // Initialize extension.
        gx.extensions.init($extension);

        // Show reset button.
        elements.buttons.reset.removeClass(classes.hidden);

        // Display information alert-box.
        elements.alerts.info.removeClass('hidden');
    }

    /**
     * Handles the 'input' event on the link title input field.
     */
    function _onLinkTitleInput() {
        // Link title input value.
        var linkTitle = elements.inputs.linkTitle.val();

        // Transfer link title value to option text.
        elements.inputs.area.find('option:selected').text(linkTitle);
    }

    /**
     * Switches to a specific image map view, depending on the area dropdown selection.
     */
    function _onSwitchArea() {
        // Selected option element.
        var $selectedOption = elements.inputs.area.find('option:selected');

        // Is the 'please select' selected?
        var isDefaultValueSelected = !$selectedOption.index();

        // Is a newly added option selected?
        var isNewOptionSelected = $selectedOption.hasClass(classes.newOption);

        // If option is selected, then switch to default view.
        // Or if the a new option is selected, switch to new area view.
        // Otherwise switch to edit view.
        if (isDefaultValueSelected) {
            _switchToDefaultView();
        } else if (isNewOptionSelected) {
            _switchToNewView();
        } else {
            _switchToEditView();
        }
    }

    /**
     * Creates a new image area.
     */
    function _onCreate() {
        // Create new option with random value.
        var $option = $('<option>', {
            class: classes.newOption,
            value: Math.random() * Math.pow(10, 5) ^ 1,
            text: jse.core.lang.translate('NEW_LINKED_AREA', 'sliders')
        });

        // Add new option to input.
        elements.inputs.area.append($option);

        // Select new option in dropdown.
        elements.inputs.area.val($option.val());

        // Trigger change event in area dropdown to switch to image area.
        elements.inputs.area.trigger('change');
    }

    /**
     * Handles the 'click' event on the apply button.
     */
    function _onApply() {
        // Selected option.
        var $selected = elements.inputs.area.find('option:selected');

        // Index of the selected option (subtracted 1 to be compatible with data container list element).
        var optionIndex = $selected.index() - 1;

        // Is the image area new?
        var isNewImageArea = $selected.hasClass(classes.newOption);

        // Image map coordinates.
        var coordinates = elements.extension.find(':hidden').val();
        var isMinPointsCoordinates = _haveCoordinatesMinPoints(coordinates);

        // Create new list item element.
        var $listItem = $('<li\n\t\t\t\tdata-id="0"\n\t\t\t\tdata-link-title="' + elements.inputs.linkTitle.val() + '"\n\t\t\t\tdata-link-url="' + elements.inputs.linkUrl.val() + '"\n\t\t\t\tdata-link-target="' + elements.inputs.linkTarget.val() + '"\n\t\t\t\tdata-coordinates="' + coordinates + '"\n\t\t\t>');

        // Trimmed link title value.
        var linkTitle = elements.inputs.linkTitle.val().trim();

        // Abort and show modal, if link title or coordinates are empty.
        if (!coordinates || !linkTitle) {
            jse.libs.modal.showMessage(jse.core.lang.translate('MISSING_PATH_OR_LINK_TITLE_MODAL_TITLE', 'sliders'), jse.core.lang.translate('MISSING_PATH_OR_LINK_TITLE_MODAL_TEXT', 'sliders'));

            return;
        }

        // Abort and show modal, if coordinates have less than 3 points.
        if (isMinPointsCoordinates === false) {
            jse.libs.modal.showMessage(jse.core.lang.translate('PATH_NEED MINIMUM_3_POINTS_MODAL_TITLE', 'sliders'), jse.core.lang.translate('PATH_NEED MINIMUM_3_POINTS_MODAL_TEXT', 'sliders'));

            return;
        }

        // Add list item, if the selected image area is new.
        // Otherwise replace the already listed item.
        if (isNewImageArea) {
            // Remove new option class.
            $selected.removeClass(classes.newOption);

            // Add list item to data container list element.
            $list.append($listItem);
        } else {
            // Replace data container list item with created one.
            $list.children().eq(optionIndex).replaceWith($listItem);
        }

        // Select 'please select' dropdown item.
        elements.inputs.area.val(values.nil);

        // Trigger 'change' event to get to the default view.
        elements.inputs.area.trigger('change');
    }

    /**
     * Handles the 'click' event on the abort button.
     */
    function _onAbort() {
        // Selected option.
        var $selected = elements.inputs.area.find('option:selected');

        // Is the image area new?
        var isNewImageArea = $selected.hasClass(classes.newOption);

        // Remove option from area dropdown, if the selected image area is new.
        // Otherwise the area dropdown will be refilled.
        if (isNewImageArea) {
            $selected.remove();
        } else {
            _fillAreaDropdown();
        }

        // Select 'please select' dropdown item.
        elements.inputs.area.val(values.nil);

        // Trigger 'change' event to get to the default view.
        elements.inputs.area.trigger('change');
    }

    /**
     * Handles the 'click' event on the delete button.
     */
    function _onDelete() {
        // Selected option.
        var $selected = elements.inputs.area.find('option:selected');

        // Index of the selected option (subtracted 1 to be compatible with data container list element).
        var optionIndex = $selected.index() - 1;

        // Delete data container list item.
        $list.children().eq(optionIndex).remove();

        // Syncronize area dropdown.
        _fillAreaDropdown();

        // Select 'please select' dropdown item.
        elements.inputs.area.val(values.nil);

        // Trigger 'change' event to get to the default view.
        elements.inputs.area.trigger('change');
    }

    /**
     * Handles the 'click' event on the reset button.
     */
    function _onReset() {
        // Trigger the 'reset' event to clear the path.
        elements.extension.trigger('reset');
    }

    /**
     * Handles the 'show' event.
     *
     * @param {jQuery.Event} event Triggered event.
     * @param {jQuery} $listParameter Data container list element.
     * @param {String} imageUrlPath URL to slide image.
     */
    function _onShow(event, $listParameter, imageUrlPath) {
        // Show modal.
        $this.modal('show');

        // Assign data container list element value.
        $list = $listParameter;

        // Assign image URL value.
        imageUrl = imageUrlPath;
    }

    /**
     * Handles the 'click' event.
     *
     * @param {jQuery.Event} event Triggered event.
     */
    function _onClick(event) {
        // Check, whether the create button is clicked.
        if (elements.buttons.create.is(event.target)) {
            _onCreate();
            return;
        }

        // Check, whether the apply button is clicked.
        if (elements.buttons.apply.is(event.target)) {
            _onApply();
            return;
        }

        // Check, whether the abort button is clicked.
        if (elements.buttons.abort.is(event.target)) {
            _onAbort();
            return;
        }

        // Check, whether the delete button is clicked.
        if (elements.buttons.delete.is(event.target)) {
            _onDelete();
            return;
        }

        // Check, whether the reset button is clicked.
        if (elements.buttons.reset.is(event.target)) {
            _onReset();
            return;
        }
    }

    /**
     * Handles the 'change' event.
     *
     * @param {jQuery.Event} event Triggered event.
     */
    function _onChange(event) {
        // Check, whether the area dropdown is changed.
        if (elements.inputs.area.is(event.target)) {
            _onSwitchArea();
        }
    }

    /**
     * Handles the modal shown event, which is triggered by the bootstrap modal plugin.
     */
    function _onModalShown() {
        // Fill the area dropdown with the values from the data container list.
        _fillAreaDropdown();

        // Select 'please select' dropdown item and trigger 'change' event to get to the default view.
        elements.inputs.area.val(values.nil).trigger('change');
    }

    /**
     * Handles the modal hidden event, which is triggered by the bootstrap modal plugin.
     */
    function _onModalHidden() {
        // Select 'please select' dropdown item and trigger 'change' event to get to the default view.
        elements.inputs.area.val(values.nil).trigger('change');
    }

    /**
     * Handles the 'input' event.
     *
     * @param {jQuery.Event} event Triggered event.
     */
    function _onInput(event) {
        // Check, whether the link title is the changed element.
        if (elements.inputs.linkTitle.is(event.target)) {
            _onLinkTitleInput();
        }
    }

    /**
     * Check the min length of coordinates
     *
     * @param {string} coordinates
     * @private
     */
    function _haveCoordinatesMinPoints(coordinates) {
        // coordinates needs min 3 points
        // example: x1,y1,x2,y2,x3,y3
        var coordinatesArray = coordinates.split(',');
        if (coordinatesArray.length >= 6) {
            return true;
        } else {
            return false;
        }
    }

    // --------------------------------------------------------------------
    // INITIALIZATION
    // --------------------------------------------------------------------

    module.init = function (done) {
        // Bind event handlers.
        $this.on('click', _onClick).on('change', _onChange).on('shown.bs.modal', _onModalShown).on('hidden.bs.modal', _onModalHidden).on('show', _onShow).on('input', _onInput);

        // Finish initialization.
        done();
    };

    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNsaWRlcnMvZGV0YWlscy9tb2RhbHMvaW1hZ2VfbWFwLmpzIl0sIm5hbWVzIjpbImd4IiwiY29udHJvbGxlcnMiLCJtb2R1bGUiLCJqc2UiLCJzb3VyY2UiLCIkdGhpcyIsIiQiLCJjbGFzc2VzIiwiaGlkZGVuIiwibmV3T3B0aW9uIiwiaWRzIiwiY2FudmFzIiwiZWxlbWVudHMiLCJleHRlbnNpb24iLCJmaW5kIiwiY29udGFpbmVycyIsImltYWdlIiwiYWN0aW9uQnV0dG9ucyIsImlucHV0cyIsImFyZWEiLCJsaW5rVGl0bGUiLCJsaW5rVXJsIiwibGlua1RhcmdldCIsImJ1dHRvbnMiLCJjbG9zZSIsImNyZWF0ZSIsImFib3J0IiwiZGVsZXRlIiwiYXBwbHkiLCJyZXNldCIsImFsZXJ0cyIsImluZm8iLCJ2YWx1ZXMiLCJlbXB0eSIsIm5pbCIsInNhbWVXaW5kb3dUYXJnZXQiLCIkbGlzdCIsImltYWdlVXJsIiwiX2ZpbGxBcmVhRHJvcGRvd24iLCJfdHJhbnNmZXJUb0FyZWFEcm9wZG93biIsImluZGV4IiwiZWxlbWVudCIsIiRvcHRpb24iLCJ0ZXh0IiwiZGF0YXNldCIsInZhbCIsImFwcGVuZFRvIiwiY2hpbGRyZW4iLCJub3QiLCJyZW1vdmUiLCJlYWNoIiwiX3N3aXRjaFRvRGVmYXVsdFZpZXciLCIkaW1hZ2UiLCJwcm9wIiwiYWRkQ2xhc3MiLCJyZW1vdmVDbGFzcyIsImFwcGVuZCIsIl9zd2l0Y2hUb05ld1ZpZXciLCIkZXh0ZW5zaW9uIiwiZXh0ZW5zaW9ucyIsImluaXQiLCJjb3JlIiwibGFuZyIsInRyYW5zbGF0ZSIsInRyaWdnZXIiLCJfc3dpdGNoVG9FZGl0VmlldyIsIm9wdGlvbkluZGV4IiwiJGxpc3RJdGVtIiwiZXEiLCJkYXRhIiwiX29uTGlua1RpdGxlSW5wdXQiLCJfb25Td2l0Y2hBcmVhIiwiJHNlbGVjdGVkT3B0aW9uIiwiaXNEZWZhdWx0VmFsdWVTZWxlY3RlZCIsImlzTmV3T3B0aW9uU2VsZWN0ZWQiLCJoYXNDbGFzcyIsIl9vbkNyZWF0ZSIsImNsYXNzIiwidmFsdWUiLCJNYXRoIiwicmFuZG9tIiwicG93IiwiX29uQXBwbHkiLCIkc2VsZWN0ZWQiLCJpc05ld0ltYWdlQXJlYSIsImNvb3JkaW5hdGVzIiwiaXNNaW5Qb2ludHNDb29yZGluYXRlcyIsIl9oYXZlQ29vcmRpbmF0ZXNNaW5Qb2ludHMiLCJ0cmltIiwibGlicyIsIm1vZGFsIiwic2hvd01lc3NhZ2UiLCJyZXBsYWNlV2l0aCIsIl9vbkFib3J0IiwiX29uRGVsZXRlIiwiX29uUmVzZXQiLCJfb25TaG93IiwiZXZlbnQiLCIkbGlzdFBhcmFtZXRlciIsImltYWdlVXJsUGF0aCIsIl9vbkNsaWNrIiwiaXMiLCJ0YXJnZXQiLCJfb25DaGFuZ2UiLCJfb25Nb2RhbFNob3duIiwiX29uTW9kYWxIaWRkZW4iLCJfb25JbnB1dCIsImNvb3JkaW5hdGVzQXJyYXkiLCJzcGxpdCIsImxlbmd0aCIsIm9uIiwiZG9uZSJdLCJtYXBwaW5ncyI6Ijs7QUFBQTs7Ozs7Ozs7OztBQVVBOzs7Ozs7QUFNQUEsR0FBR0MsV0FBSCxDQUFlQyxNQUFmLENBQ0ksV0FESixFQUdJLENBQUlDLElBQUlDLE1BQVIsa0VBSEosRUFLSSxZQUFZO0FBQ1I7O0FBRUE7QUFDQTtBQUNBOztBQUVBOzs7Ozs7QUFLQSxRQUFNQyxRQUFRQyxFQUFFLElBQUYsQ0FBZDs7QUFFQTs7Ozs7QUFLQSxRQUFNQyxVQUFVO0FBQ1o7QUFDQUMsZ0JBQVEsUUFGSTs7QUFJWjtBQUNBQyxtQkFBVztBQUxDLEtBQWhCOztBQVFBOzs7OztBQUtBLFFBQU1DLE1BQU07QUFDUkMsZ0JBQVE7QUFEQSxLQUFaOztBQUlBOzs7OztBQUtBLFFBQU1DLFdBQVc7QUFDYjtBQUNBQyxtQkFBV1IsTUFBTVMsSUFBTixPQUFlSixJQUFJQyxNQUFuQixDQUZFOztBQUliO0FBQ0FJLG9CQUFZO0FBQ1I7QUFDQUMsbUJBQU9YLE1BQU1TLElBQU4sQ0FBVyxZQUFYLENBRkM7O0FBSVI7QUFDQUgsb0JBQVFOLE1BQU1TLElBQU4sQ0FBVyxh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QixtQkFBTyxJQUFQO0FBQ0gsU0FGRCxNQUVPO0FBQ0gsbUJBQU8sS0FBUDtBQUNIO0FBQ0o7O0FBRUQ7QUFDQTtBQUNBOztBQUVBM0csV0FBTzBELElBQVAsR0FBYyxnQkFBUTtBQUNsQjtBQUNBdkQsY0FDS3lHLEVBREwsQ0FDUSxPQURSLEVBQ2lCVixRQURqQixFQUVLVSxFQUZMLENBRVEsUUFGUixFQUVrQlAsU0FGbEIsRUFHS08sRUFITCxDQUdRLGdCQUhSLEVBRzBCTixhQUgxQixFQUlLTSxFQUpMLENBSVEsaUJBSlIsRUFJMkJMLGNBSjNCLEVBS0tLLEVBTEwsQ0FLUSxNQUxSLEVBS2dCZCxPQUxoQixFQU1LYyxFQU5MLENBTVEsT0FOUixFQU1pQkosUUFOakI7O0FBUUE7QUFDQUs7QUFDSCxLQVpEOztBQWNBLFdBQU83RyxNQUFQO0FBQ0gsQ0FwdEJMIiwiZmlsZSI6InNsaWRlcnMvZGV0YWlscy9tb2RhbHMvaW1hZ2VfbWFwLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiBpbWFnZV9tYXAuanMgMjAyNC0wMy0yNVxuIEdhbWJpbyBHbWJIXG4gaHR0cDovL3d3dy5nYW1iaW8uZGVcbiBDb3B5cmlnaHQgKGMpIDIwMjQgR2FtYmlvIEdtYkhcbiBSZWxlYXNlZCB1bmRlciB0aGUgR05VIEdlbmVyYWwgUHVibGljIExpY2Vuc2UgKFZlcnNpb24gMilcbiBbaHR0cDovL3d3dy5nbnUub3JnL2xpY2Vuc2VzL2dwbC0yLjAuaHRtbF1cbiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICovXG5cbi8qKlxuICogQ29udHJvbGxlciBNb2R1bGUgRm9yIFNsaWRlIEltYWdlIE1hcCBNb2RhbC5cbiAqXG4gKiBQdWJsaWMgbWV0aG9kczpcbiAqICAtICdzaG93JyBzaG93cyB0aGUgZHJvcGRvd24uXG4gKi9cbmd4LmNvbnRyb2xsZXJzLm1vZHVsZShcbiAgICAnaW1hZ2VfbWFwJyxcblxuICAgIFtgJHtqc2Uuc291cmNlfS92ZW5kb3IvanF1ZXJ5LWNhbnZhcy1hcmVhLWRyYXcvanF1ZXJ5LmNhbnZhc0FyZWFEcmF3Lm1pbi5qc2BdLFxuXG4gICAgZnVuY3Rpb24gKCkge1xuICAgICAgICAndXNlIHN0cmljdCc7XG5cbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gVkFSSUFCTEVTXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIE1vZHVsZSBlbGVtZW50IChtb2RhbCBlbGVtZW50KS5cbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge2pRdWVyeX1cbiAgICAgICAgICovXG4gICAgICAgIGNvbnN0ICR0aGlzID0gJCh0aGlzKTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogQ1NTIENsYXNzIE1hcFxuICAgICAgICAgKlxuICAgICAgICAgKiBAdHlwZSB7T2JqZWN0fVxuICAgICAgICAgKi9cbiAgICAgICAgY29uc3QgY2xhc3NlcyA9IHtcbiAgICAgICAgICAgIC8vIEhpZGRlbiBjbGFzcy5cbiAgICAgICAgICAgIGhpZGRlbjogJ2hpZGRlbicsXG5cbiAgICAgICAgICAgIC8vIE5ldyBpbnNlcnRlZCBvcHRpb24uXG4gICAgICAgICAgICBuZXdPcHRpb246ICduZXcnXG4gICAgICAgIH07XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIENTUyBJRCBNYXBcbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge09iamVjdH1cbiAgICAgICAgICovXG4gICAgICAgIGNvbnN0IGlkcyA9IHtcbiAgICAgICAgICAgIGNhbnZhczogJ2NhbnZhcydcbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogRWxlbWVudCBNYXBcbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge09iamVjdH1cbiAgICAgICAgICovXG4gICAgICAgIGNvbnN0IGVsZW1lbnRzID0ge1xuICAgICAgICAgICAgLy8gQ2FudmFzIGV4dGVuc2lvbiBlbGVtZW50LlxuICAgICAgICAgICAgZXh0ZW5zaW9uOiAkdGhpcy5maW5kKGAjJHtpZHMuY2FudmFzfWApLFxuXG4gICAgICAgICAgICAvLyBDb250YWluZXIgZWxlbWVudHMuXG4gICAgICAgICAgICBjb250YWluZXJzOiB7XG4gICAgICAgICAgICAgICAgLy8gSW1hZ2UgY29udGFpbmVyLlxuICAgICAgICAgICAgICAgIGltYWdlOiAkdGhpcy5maW5kKCcucm93LmltYWdlJyksXG5cbiAgICAgICAgICAgICAgICAvLyBDYW52YXMgY29udGFpbmVyLlxuICAgICAgICAgICAgICAgIGNhbnZhczogJHRoaXMuZmluZCgnLnJvdy5jYW52YXMnKSxcblxuICAgICAgICAgICAgICAgIC8vIEFjdGlvbiBidXR0b25zIGNvbnRhaW5lci5cbiAgICAgICAgICAgICAgICBhY3Rpb25CdXR0b25zOiAkdGhpcy5maW5kKCcucm93LmFjdGlvbnMnKVxuICAgICAgICAgICAgfSxcblxuICAgICAgICAgICAgLy8gRm9ybSBpbnB1dHMuXG4gICAgICAgICAgICBpbnB1dHM6IHtcbiAgICAgICAgICAgICAgICAvLyBMaW5rIGFyZWEgZHJvcGRvd24uXG4gICAgICAgICAgICAgICAgYXJlYTogJHRoaXMuZmluZCgnI2ltYWdlLW1hcC1hcmVhJyksXG5cbiAgICAgICAgICAgICAgICAvLyBMaW5rIHRpdGxlLlxuICAgICAgICAgICAgICAgIGxpbmtUaXRsZTogJHRoaXMuZmluZCgnI2ltYWdlLW1hcC1saW5rLXRpdGxlJyksXG5cbiAgICAgICAgICAgICAgICAvLyBMaW5rIFVSTC5cbiAgICAgICAgICAgICAgICBsaW5rVXJsOiAkdGhpcy5maW5kKCcjaW1hZ2UtbWFwLWxpbmstdXJsJyksXG5cbiAgICAgICAgICAgICAgICAvLyBMaW5rIHRhcmdldC5cbiAgICAgICAgICAgICAgICBsaW5rVGFyZ2V0OiAkdGhpcy5maW5kKCcjaW1hZ2UtbWFwLWxpbmstdGFyZ2V0JylcbiAgICAgICAgICAgIH0sXG5cbiAgICAgICAgICAgIC8vIEJ1dHRvbnMuXG4gICAgICAgICAgICBidXR0b25zOiB7XG4gICAgICAgICAgICAgICAgLy8gQ2xvc2UgbW9kYWwuXG4gICAgICAgICAgICAgICAgY2xvc2U6ICR0aGlzLmZpbmQoJy5idG4uYWN0aW9uLWNsb3NlJyksXG5cbiAgICAgICAgICAgICAgICAvLyBDcmVhdGUgaW1hZ2UgYXJlYS5cbiAgICAgICAgICAgICAgICBjcmVhdGU6ICR0aGlzLmZpbmQoJy5idG4uYWN0aW9uLWNyZWF0ZScpLFxuXG4gICAgICAgICAgICAgICAgLy8gQWJvcnQgZWRpdC5cbiAgICAgICAgICAgICAgICBhYm9ydDogJHRoaXMuZmluZCgnLmJ0bi5hY3Rpb24tYWJvcnQnKSxcblxuICAgICAgICAgICAgICAgIC8vIERlbGV0ZSBpbWFnZSBhcmVhLlxuICAgICAgICAgICAgICAgIGRlbGV0ZTogJHRoaXMuZmluZCgnLmJ0bi5hY3Rpb24tZGVsZXRlJyksXG5cbiAgICAgICAgICAgICAgICAvLyBBcHBseSBpbWFnZSBhcmVhIGNoYW5nZXMuXG4gICAgICAgICAgICAgICAgYXBwbHk6ICR0aGlzLmZpbmQoJy5idG4uYWN0aW9uLWFwcGx5JyksXG5cbiAgICAgICAgICAgICAgICAvLyBSZXNldCBwYXRoLlxuICAgICAgICAgICAgICAgIHJlc2V0OiAkdGhpcy5maW5kKCcuYnRuLWRlZmF1bHQuYWN0aW9uLXJlc2V0JylcbiAgICAgICAgICAgIH0sXG5cbiAgICAgICAgICAgIC8vIEFsZXJ0c1xuICAgICAgICAgICAgYWxlcnRzOiB7XG4gICAgICAgICAgICAgICAgaW5mbzogJHRoaXMuZmluZCgnLmFsZXJ0JylcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcblxuICAgICAgICAvKipcbiAgICAgICAgICogVmFsdWUgTWFwXG4gICAgICAgICAqXG4gICAgICAgICAqIEB0eXBlIHtPYmplY3R9XG4gICAgICAgICAqL1xuICAgICAgICBjb25zdCB2YWx1ZXMgPSB7XG4gICAgICAgICAgICAvLyBFbXB0eSBzdHJpbmcuXG4gICAgICAgICAgICBlbXB0eTogJycsXG5cbiAgICAgICAgICAgIC8vICdQbGVhc2Ugc2VsZWN0JyB2YWx1ZS5cbiAgICAgICAgICAgIG5pbDogJycsXG5cbiAgICAgICAgICAgIC8vIE9wZW4gaW4gc2FtZSB3aW5kb3cuXG4gICAgICAgICAgICBzYW1lV2luZG93VGFyZ2V0OiAnX3NlbGYnXG4gICAgICAgIH07XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIE1vZHVsZSBJbnN0YW5jZVxuICAgICAgICAgKlxuICAgICAgICAgKiBAdHlwZSB7T2JqZWN0fVxuICAgICAgICAgKi9cbiAgICAgICAgY29uc3QgbW9kdWxlID0ge307XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIERhdGEgY29udGFpbmVyIGxpc3QuXG4gICAgICAgICAqXG4gICAgICAgICAqIEB0eXBlIHtqUXVlcnl8bnVsbH1cbiAgICAgICAgICovXG4gICAgICAgIGxldCAkbGlzdCA9IG51bGw7XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIFNsaWRlIGltYWdlIFVSTC5cbiAgICAgICAgICpcbiAgICAgICAgICogQHR5cGUge1N0cmluZ3xudWxsfVxuICAgICAgICAgKi9cbiAgICAgICAgbGV0IGltYWdlVXJsID0gbnVsbDtcblxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgICAgICAvLyBGVU5DVElPTlNcbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAgICAgICAvKipcbiAgICAgICAgICogRmlsbHMgdGhlIGFyZWEgZHJvcGRvd24gd2l0aCB0aGUgZGF0YSBjb250YWluZXIgbGlzdCBpdGVtcy5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9maWxsQXJlYURyb3Bkb3duKCkge1xuICAgICAgICAgICAgLyoqXG4gICAgICAgICAgICAgKiBUcmFuc2ZlcnMgdGhlIGRhdGEgZnJvbSB0aGUgZGF0YSBjb250YWluZXIgbGlzdCBpdGVtIHRvIHRoZSBhcmVhIGRyb3Bkb3duLlxuICAgICAgICAgICAgICpcbiAgICAgICAgICAgICAqIEBwYXJhbSB7TnVtYmVyfSBpbmRleCBJdGVyYXRpb24gaW5kZXguXG4gICAgICAgICAgICAgKiBAcGFyYW0ge0VsZW1lbnR9IGVsZW1lbnQgSXRlcmF0aW9uIGVsZW1lbnQuXG4gICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIGNvbnN0IF90cmFuc2ZlclRvQXJlYURyb3Bkb3duID0gKGluZGV4LCBlbGVtZW50KSA9PiB7XG4gICAgICAgICAgICAgICAgLy8gQ3JlYXRlIG5ldyBvcHRpb24gZWxlbWVudC5cbiAgICAgICAgICAgICAgICBjb25zdCAkb3B0aW9uID0gJCgnPG9wdGlvbj4nKTtcblxuICAgICAgICAgICAgICAgIC8vIFNldCB0ZXh0IGNvbnRlbnQgYW5kIHZhbHVlIGFuZCBhcHBlbmQgb3B0aW9uIHRvIGFyZWEgZHJvcGRvd24uXG4gICAgICAgICAgICAgICAgJG9wdGlvblxuICAgICAgICAgICAgICAgICAgICAudGV4dChlbGVtZW50LmRhdGFzZXQubGlua1RpdGxlKVxuICAgICAgICAgICAgICAgICAgICAudmFsKGluZGV4KVxuICAgICAgICAgICAgICAgICAgICAuYXBwZW5kVG8oZWxlbWVudHMuaW5wdXRzLmFyZWEpO1xuICAgICAgICAgICAgfTtcblxuICAgICAgICAgICAgLy8gRGVsZXRlIGFsbCBjaGlsZHJlbiwgZXhjZXB0IHRoZSBmaXJzdCBvbmUuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMuYXJlYVxuICAgICAgICAgICAgICAgIC5jaGlsZHJlbigpXG4gICAgICAgICAgICAgICAgLm5vdCgnOmZpcnN0JylcbiAgICAgICAgICAgICAgICAucmVtb3ZlKCk7XG5cbiAgICAgICAgICAgIC8vIFRyYW5zZmVyIGRhdGEgY29udGFpbmVyIGxpc3QgaXRlbXMgdG8gYXJlYSBkcm9wZG93bi5cbiAgICAgICAgICAgICRsaXN0LmNoaWxkcmVuKClcbiAgICAgICAgICAgICAgICAuZWFjaChfdHJhbnNmZXJUb0FyZWFEcm9wZG93bik7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogU3dpdGNoZXMgdG8gdGhlIGRlZmF1bHQgdmlldy5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9zd2l0Y2hUb0RlZmF1bHRWaWV3KCkge1xuICAgICAgICAgICAgLy8gSW1hZ2UgdGFnLlxuICAgICAgICAgICAgY29uc3QgJGltYWdlID0gJChgPGltZyBzcmM9XCIke2ltYWdlVXJsfVwiPmApO1xuXG4gICAgICAgICAgICAvLyBFbmFibGUgYXJlYSBkcm9wZG93bi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhXG4gICAgICAgICAgICAgICAgLnByb3AoJ2Rpc2FibGVkJywgZmFsc2UpO1xuXG4gICAgICAgICAgICAvLyBEaXNhYmxlIGFuZCBlbXB0eSB0aGUgbGluayB0aXRsZSBpbnB1dC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5saW5rVGl0bGVcbiAgICAgICAgICAgICAgICAucHJvcCgnZGlzYWJsZWQnLCB0cnVlKVxuICAgICAgICAgICAgICAgIC52YWwodmFsdWVzLmVtcHR5KTtcblxuICAgICAgICAgICAgLy8gRGlzYWJsZSBhbmQgZW1wdHkgdGhlIGxpbmsgVVJMIHRpdGxlIGlucHV0LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmxpbmtVcmxcbiAgICAgICAgICAgICAgICAucHJvcCgnZGlzYWJsZWQnLCB0cnVlKVxuICAgICAgICAgICAgICAgIC52YWwodmFsdWVzLmVtcHR5KTtcblxuICAgICAgICAgICAgLy8gRGlzYWJsZSBhbmQgZW1wdHkgdGhlIGxpbmsgdGFyZ2V0IHRpdGxlIGlucHV0LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmxpbmtUYXJnZXRcbiAgICAgICAgICAgICAgICAucHJvcCgnZGlzYWJsZWQnLCB0cnVlKVxuICAgICAgICAgICAgICAgIC52YWwodmFsdWVzLnNhbWVXaW5kb3dUYXJnZXQpO1xuXG4gICAgICAgICAgICAvLyBIaWRlIGJ1dHRvbiBjb250YWluZXIuXG4gICAgICAgICAgICBlbGVtZW50cy5jb250YWluZXJzLmFjdGlvbkJ1dHRvbnNcbiAgICAgICAgICAgICAgICAuYWRkQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGFuZCBlbXB0eSBpbWFnZSBjb250YWluZXIgYW5kIGFwcGVuZCBpbWFnZS5cbiAgICAgICAgICAgIGVsZW1lbnRzLmNvbnRhaW5lcnMuaW1hZ2VcbiAgICAgICAgICAgICAgICAuZW1wdHkoKVxuICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcyhjbGFzc2VzLmhpZGRlbilcbiAgICAgICAgICAgICAgICAuYXBwZW5kKCRpbWFnZSk7XG5cbiAgICAgICAgICAgIC8vIEhpZGUgY2FudmFzIGNvbnRhaW5lci5cbiAgICAgICAgICAgIGVsZW1lbnRzLmNvbnRhaW5lcnMuY2FudmFzXG4gICAgICAgICAgICAgICAgLmFkZENsYXNzKGNsYXNzZXMuaGlkZGVuKTtcblxuICAgICAgICAgICAgLy8gRW1wdHkgZXh0ZW5zaW9uIGVsZW1lbnQuXG4gICAgICAgICAgICBlbGVtZW50cy5leHRlbnNpb24uZW1wdHkoKTtcblxuICAgICAgICAgICAgLy8gU2hvdyBjcmVhdGUgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5jcmVhdGVcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBIaWRlIHJlc2V0IGJ1dHRvbi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbnMucmVzZXRcbiAgICAgICAgICAgICAgICAuYWRkQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBIaWRlIGluZm9ybWF0aW9uIGFsZXJ0LWJveC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmFsZXJ0cy5pbmZvLmFkZENsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBTd2l0Y2hlcyB0byB0aGUgbmV3IGltYWdlIGFyZWEgdmlldy5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9zd2l0Y2hUb05ld1ZpZXcoKSB7XG4gICAgICAgICAgICAvLyBDcmVhdGUgbmV3IGRyYXcgZXh0ZW5zaW9uIGVsZW1lbnQuXG4gICAgICAgICAgICBjb25zdCAkZXh0ZW5zaW9uID0gJChgPGRpdlxuXHRcdFx0XHRpZD1cIiR7aWRzLmNhbnZhc31cIlxuXHRcdFx0XHRkYXRhLWd4LWV4dGVuc2lvbj1cImNhbnZhc19hcmVhX2RyYXdcIlxuXHRcdFx0XHRkYXRhLWNhbnZhc19hcmVhX2RyYXctaW1hZ2UtdXJsPVwiJHtpbWFnZVVybH1cIj5gKTtcblxuICAgICAgICAgICAgLy8gRW5hYmxlIGxpbmsgdGl0bGUgaW5wdXQuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMubGlua1RpdGxlXG4gICAgICAgICAgICAgICAgLnByb3AoJ2Rpc2FibGVkJywgZmFsc2UpO1xuXG4gICAgICAgICAgICAvLyBFbmFibGUgbGluayBVUkwgaW5wdXQuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMubGlua1VybFxuICAgICAgICAgICAgICAgIC5wcm9wKCdkaXNhYmxlZCcsIGZhbHNlKTtcblxuICAgICAgICAgICAgLy8gRW5hYmxlIHRoZSBsaW5rIHRhcmdldCBpbnB1dCBhbmQgc2V0IHRoZSB2YWx1ZSB0byAnc2VsZicuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMubGlua1RhcmdldFxuICAgICAgICAgICAgICAgIC5wcm9wKCdkaXNhYmxlZCcsIGZhbHNlKVxuICAgICAgICAgICAgICAgIC52YWwodmFsdWVzLnNhbWVXaW5kb3dUYXJnZXQpO1xuXG4gICAgICAgICAgICAvLyBEaXNhYmxlIHRoZSBhcmVhIGRyb3Bkb3duLlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWFcbiAgICAgICAgICAgICAgICAucHJvcCgnZGlzYWJsZWQnLCB0cnVlKTtcblxuICAgICAgICAgICAgLy8gSGlkZSBjcmVhdGUgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5jcmVhdGVcbiAgICAgICAgICAgICAgICAuYWRkQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGFwcGx5IGJ1dHRvbi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbnMuYXBwbHlcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGFib3J0IGJ1dHRvbi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbnMuYWJvcnRcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBIaWRlIGRlbGV0ZSBidXR0b24uXG4gICAgICAgICAgICBlbGVtZW50cy5idXR0b25zLmRlbGV0ZVxuICAgICAgICAgICAgICAgIC5hZGRDbGFzcyhjbGFzc2VzLmhpZGRlbik7XG5cbiAgICAgICAgICAgIC8vIFNob3cgYWN0aW9uIGJ1dHRvbiBjb250YWluZXIuXG4gICAgICAgICAgICBlbGVtZW50cy5jb250YWluZXJzLmFjdGlvbkJ1dHRvbnNcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBIaWRlIGltYWdlIGNvbnRhaW5lci5cbiAgICAgICAgICAgIGVsZW1lbnRzLmNvbnRhaW5lcnMuaW1hZ2VcbiAgICAgICAgICAgICAgICAuYWRkQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGNhbnZhcyBjb250YWluZXIuXG4gICAgICAgICAgICBlbGVtZW50cy5jb250YWluZXJzLmNhbnZhc1xuICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcyhjbGFzc2VzLmhpZGRlbik7XG5cbiAgICAgICAgICAgIC8vIFJlbW92ZSBleGlzdGluZyBjYW52YXMgZWxlbWVudC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmV4dGVuc2lvblxuICAgICAgICAgICAgICAgIC5yZW1vdmUoKTtcblxuICAgICAgICAgICAgLy8gQWRkIG5ld2x5IGNyZWF0ZWQgY2FudmFzIGV4dGVuc2lvbiBlbGVtZW50LlxuICAgICAgICAgICAgZWxlbWVudHMuY29udGFpbmVycy5jYW52YXNcbiAgICAgICAgICAgICAgICAuYXBwZW5kKCRleHRlbnNpb24pO1xuXG4gICAgICAgICAgICAvLyBBc3NpZ24gbmV3IGVsZW1lbnQgcmVmZXJlbmNlLlxuICAgICAgICAgICAgZWxlbWVudHMuZXh0ZW5zaW9uID0gJGV4dGVuc2lvbjtcblxuICAgICAgICAgICAgLy8gSW5pdGlhbGl6ZSBleHRlbnNpb24uXG4gICAgICAgICAgICBneC5leHRlbnNpb25zLmluaXQoJGV4dGVuc2lvbik7XG5cbiAgICAgICAgICAgIC8vIEluc2VydCB0ZXh0IGludG8gbGluayB0aXRsZSBpbnB1dCBhbmQgZm9jdXMgdG8gdGhhdCBlbGVtZW50LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmxpbmtUaXRsZVxuICAgICAgICAgICAgICAgIC52YWwoanNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ05FV19MSU5LRURfQVJFQScsICdzbGlkZXJzJykpXG4gICAgICAgICAgICAgICAgLnRyaWdnZXIoJ2ZvY3VzJylcbiAgICAgICAgICAgICAgICAudHJpZ2dlcignc2VsZWN0Jyk7XG5cbiAgICAgICAgICAgIC8vIFNob3cgcmVzZXQgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5yZXNldFxuICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcyhjbGFzc2VzLmhpZGRlbik7XG5cbiAgICAgICAgICAgIC8vIERpc3BsYXkgaW5mb3JtYXRpb24gYWxlcnQtYm94LlxuICAgICAgICAgICAgZWxlbWVudHMuYWxlcnRzLmluZm8ucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIFN3aXRjaGVzIHRvIHRoZSBpbWFnZSBhcmVhIGVkaXQgdmlldy5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9zd2l0Y2hUb0VkaXRWaWV3KCkge1xuICAgICAgICAgICAgLy8gSW5kZXggb2YgdGhlIHNlbGVjdGVkIG9wdGlvbiAoc3VidHJhY3RlZCAxIHRvIGJlIGNvbXBhdGlibGUgd2l0aCBkYXRhIGNvbnRhaW5lciBsaXN0IGVsZW1lbnQpLlxuICAgICAgICAgICAgY29uc3Qgb3B0aW9uSW5kZXggPSBlbGVtZW50cy5pbnB1dHMuYXJlYS5maW5kKCdvcHRpb246c2VsZWN0ZWQnKS5pbmRleCgpIC0gMTtcblxuICAgICAgICAgICAgLy8gQ29ycmVzcG9uZGluZyBsaXN0IGl0ZW0gaW4gdGhlIGRhdGEgY29udGFpbmVyIGxpc3QgZWxlbWVudC5cbiAgICAgICAgICAgIGNvbnN0ICRsaXN0SXRlbSA9ICRsaXN0XG4gICAgICAgICAgICAgICAgLmNoaWxkcmVuKClcbiAgICAgICAgICAgICAgICAuZXEob3B0aW9uSW5kZXgpO1xuXG4gICAgICAgICAgICAvLyBDcmVhdGUgbmV3IGRyYXcgZXh0ZW5zaW9uIGVsZW1lbnQuXG4gICAgICAgICAgICBjb25zdCAkZXh0ZW5zaW9uID0gJChgPGRpdlxuXHRcdFx0XHRpZD1cIiR7aWRzLmNhbnZhc31cIlxuXHRcdFx0XHRkYXRhLWd4LWV4dGVuc2lvbj1cImNhbnZhc19hcmVhX2RyYXdcIlxuXHRcdFx0XHRkYXRhLWNhbnZhc19hcmVhX2RyYXctaW1hZ2UtdXJsPVwiJHtpbWFnZVVybH1cIlxuXHRcdFx0XHRkYXRhLWNhbnZhc19hcmVhX2RyYXctY29vcmRpbmF0ZXM9XCIkeyRsaXN0SXRlbS5kYXRhKCdjb29yZGluYXRlcycpfVwiXG5cdFx0XHQ+YCk7XG5cbiAgICAgICAgICAgIC8vIEVuYWJsZSB0aGUgbGluayB0aXRsZSBpbnB1dCBlbGVtZW50IGFuZCBhc3NpZ24gdmFsdWUuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMubGlua1RpdGxlXG4gICAgICAgICAgICAgICAgLnByb3AoJ2Rpc2FibGVkJywgZmFsc2UpXG4gICAgICAgICAgICAgICAgLnZhbCgkbGlzdEl0ZW0uZGF0YSgnbGlua1RpdGxlJykpO1xuXG4gICAgICAgICAgICAvLyBFbmFibGUgdGhlIGxpbmsgVVJMIGlucHV0IGVsZW1lbnQgYW5kIGFzc2lnbiB2YWx1ZS5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5saW5rVXJsXG4gICAgICAgICAgICAgICAgLnByb3AoJ2Rpc2FibGVkJywgZmFsc2UpXG4gICAgICAgICAgICAgICAgLnZhbCgkbGlzdEl0ZW0uZGF0YSgnbGlua1VybCcpKTtcblxuICAgICAgICAgICAgLy8gRW5hYmxlIHRoZSBsaW5rIHRhcmdldCBpbnB1dCBlbGVtZW50IGFuZCBhc3NpZ24gdmFsdWUuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMubGlua1RhcmdldFxuICAgICAgICAgICAgICAgIC5wcm9wKCdkaXNhYmxlZCcsIGZhbHNlKVxuICAgICAgICAgICAgICAgIC52YWwoJGxpc3RJdGVtLmRhdGEoJ2xpbmtUYXJnZXQnKSk7XG5cbiAgICAgICAgICAgIC8vIERpc2FibGUgYXJlYSBkcm9wZG93bi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhXG4gICAgICAgICAgICAgICAgLnByb3AoJ2Rpc2FibGVkJywgdHJ1ZSk7XG5cbiAgICAgICAgICAgIC8vIFNob3cgYXBwbHkgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5hcHBseVxuICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcyhjbGFzc2VzLmhpZGRlbik7XG5cbiAgICAgICAgICAgIC8vIFNob3cgYWJvcnQgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5hYm9ydFxuICAgICAgICAgICAgICAgIC5yZW1vdmVDbGFzcyhjbGFzc2VzLmhpZGRlbik7XG5cbiAgICAgICAgICAgIC8vIFNob3cgZGVsZXRlIGJ1dHRvbi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbnMuZGVsZXRlXG4gICAgICAgICAgICAgICAgLnJlbW92ZUNsYXNzKGNsYXNzZXMuaGlkZGVuKTtcblxuICAgICAgICAgICAgLy8gSGlkZSBjcmVhdGUgYnV0dG9uLlxuICAgICAgICAgICAgZWxlbWVudHMuYnV0dG9ucy5jcmVhdGVcbiAgICAgICAgICAgICAgICAuYWRkQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGFjdGlvbiBidXR0b24gY29udGFpbmVyLlxuICAgICAgICAgICAgZWxlbWVudHMuY29udGFpbmVycy5hY3Rpb25CdXR0b25zXG4gICAgICAgICAgICAgICAgLnJlbW92ZUNsYXNzKGNsYXNzZXMuaGlkZGVuKTtcblxuICAgICAgICAgICAgLy8gSGlkZSBpbWFnZSBjb250YWluZXIuXG4gICAgICAgICAgICBlbGVtZW50cy5jb250YWluZXJzLmltYWdlXG4gICAgICAgICAgICAgICAgLmFkZENsYXNzKGNsYXNzZXMuaGlkZGVuKTtcblxuICAgICAgICAgICAgLy8gU2hvdyBjYW52YXMgY29udGFpbmVyLlxuICAgICAgICAgICAgZWxlbWVudHMuY29udGFpbmVycy5jYW52YXNcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBSZW1vdmUgZXhpc3RpbmcgY2FudmFzIGVsZW1lbnQuXG4gICAgICAgICAgICBlbGVtZW50cy5leHRlbnNpb25cbiAgICAgICAgICAgICAgICAucmVtb3ZlKCk7XG5cbiAgICAgICAgICAgIC8vIEFkZCBuZXdseSBjcmVhdGVkIGNhbnZhcyBleHRlbnNpb24gZWxlbWVudC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmNvbnRhaW5lcnMuY2FudmFzXG4gICAgICAgICAgICAgICAgLmFwcGVuZCgkZXh0ZW5zaW9uKTtcblxuICAgICAgICAgICAgLy8gQXNzaWduIG5ldyBlbGVtZW50IHJlZmVyZW5jZS5cbiAgICAgICAgICAgIGVsZW1lbnRzLmV4dGVuc2lvbiA9ICRleHRlbnNpb247XG5cbiAgICAgICAgICAgIC8vIEluaXRpYWxpemUgZXh0ZW5zaW9uLlxuICAgICAgICAgICAgZ3guZXh0ZW5zaW9ucy5pbml0KCRleHRlbnNpb24pO1xuXG4gICAgICAgICAgICAvLyBTaG93IHJlc2V0IGJ1dHRvbi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbnMucmVzZXRcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5oaWRkZW4pO1xuXG4gICAgICAgICAgICAvLyBEaXNwbGF5IGluZm9ybWF0aW9uIGFsZXJ0LWJveC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmFsZXJ0cy5pbmZvLnJlbW92ZUNsYXNzKCdoaWRkZW4nKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIHRoZSAnaW5wdXQnIGV2ZW50IG9uIHRoZSBsaW5rIHRpdGxlIGlucHV0IGZpZWxkLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uTGlua1RpdGxlSW5wdXQoKSB7XG4gICAgICAgICAgICAvLyBMaW5rIHRpdGxlIGlucHV0IHZhbHVlLlxuICAgICAgICAgICAgY29uc3QgbGlua1RpdGxlID0gZWxlbWVudHMuaW5wdXRzLmxpbmtUaXRsZS52YWwoKTtcblxuICAgICAgICAgICAgLy8gVHJhbnNmZXIgbGluayB0aXRsZSB2YWx1ZSB0byBvcHRpb24gdGV4dC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhLmZpbmQoJ29wdGlvbjpzZWxlY3RlZCcpLnRleHQobGlua1RpdGxlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBTd2l0Y2hlcyB0byBhIHNwZWNpZmljIGltYWdlIG1hcCB2aWV3LCBkZXBlbmRpbmcgb24gdGhlIGFyZWEgZHJvcGRvd24gc2VsZWN0aW9uLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uU3dpdGNoQXJlYSgpIHtcbiAgICAgICAgICAgIC8vIFNlbGVjdGVkIG9wdGlvbiBlbGVtZW50LlxuICAgICAgICAgICAgY29uc3QgJHNlbGVjdGVkT3B0aW9uID0gZWxlbWVudHMuaW5wdXRzLmFyZWEuZmluZCgnb3B0aW9uOnNlbGVjdGVkJyk7XG5cbiAgICAgICAgICAgIC8vIElzIHRoZSAncGxlYXNlIHNlbGVjdCcgc2VsZWN0ZWQ/XG4gICAgICAgICAgICBjb25zdCBpc0RlZmF1bHRWYWx1ZVNlbGVjdGVkID0gISRzZWxlY3RlZE9wdGlvbi5pbmRleCgpO1xuXG4gICAgICAgICAgICAvLyBJcyBhIG5ld2x5IGFkZGVkIG9wdGlvbiBzZWxlY3RlZD9cbiAgICAgICAgICAgIGNvbnN0IGlzTmV3T3B0aW9uU2VsZWN0ZWQgPSAkc2VsZWN0ZWRPcHRpb24uaGFzQ2xhc3MoY2xhc3Nlcy5uZXdPcHRpb24pO1xuXG4gICAgICAgICAgICAvLyBJZiBvcHRpb24gaXMgc2VsZWN0ZWQsIHRoZW4gc3dpdGNoIHRvIGRlZmF1bHQgdmlldy5cbiAgICAgICAgICAgIC8vIE9yIGlmIHRoZSBhIG5ldyBvcHRpb24gaXMgc2VsZWN0ZWQsIHN3aXRjaCB0byBuZXcgYXJlYSB2aWV3LlxuICAgICAgICAgICAgLy8gT3RoZXJ3aXNlIHN3aXRjaCB0byBlZGl0IHZpZXcuXG4gICAgICAgICAgICBpZiAoaXNEZWZhdWx0VmFsdWVTZWxlY3RlZCkge1xuICAgICAgICAgICAgICAgIF9zd2l0Y2hUb0RlZmF1bHRWaWV3KCk7XG4gICAgICAgICAgICB9IGVsc2UgaWYgKGlzTmV3T3B0aW9uU2VsZWN0ZWQpIHtcbiAgICAgICAgICAgICAgICBfc3dpdGNoVG9OZXdWaWV3KCk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIF9zd2l0Y2hUb0VkaXRWaWV3KCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogQ3JlYXRlcyBhIG5ldyBpbWFnZSBhcmVhLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uQ3JlYXRlKCkge1xuICAgICAgICAgICAgLy8gQ3JlYXRlIG5ldyBvcHRpb24gd2l0aCByYW5kb20gdmFsdWUuXG4gICAgICAgICAgICBjb25zdCAkb3B0aW9uID0gJCgnPG9wdGlvbj4nLCB7XG4gICAgICAgICAgICAgICAgY2xhc3M6IGNsYXNzZXMubmV3T3B0aW9uLFxuICAgICAgICAgICAgICAgIHZhbHVlOiBNYXRoLnJhbmRvbSgpICogTWF0aC5wb3coMTAsIDUpIF4gMSxcbiAgICAgICAgICAgICAgICB0ZXh0OiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnTkVXX0xJTktFRF9BUkVBJywgJ3NsaWRlcnMnKVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vIEFkZCBuZXcgb3B0aW9uIHRvIGlucHV0LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWEuYXBwZW5kKCRvcHRpb24pO1xuXG4gICAgICAgICAgICAvLyBTZWxlY3QgbmV3IG9wdGlvbiBpbiBkcm9wZG93bi5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhLnZhbCgkb3B0aW9uLnZhbCgpKTtcblxuICAgICAgICAgICAgLy8gVHJpZ2dlciBjaGFuZ2UgZXZlbnQgaW4gYXJlYSBkcm9wZG93biB0byBzd2l0Y2ggdG8gaW1hZ2UgYXJlYS5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhLnRyaWdnZXIoJ2NoYW5nZScpO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIEhhbmRsZXMgdGhlICdjbGljaycgZXZlbnQgb24gdGhlIGFwcGx5IGJ1dHRvbi5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9vbkFwcGx5KCkge1xuICAgICAgICAgICAgLy8gU2VsZWN0ZWQgb3B0aW9uLlxuICAgICAgICAgICAgY29uc3QgJHNlbGVjdGVkID0gZWxlbWVudHMuaW5wdXRzLmFyZWEuZmluZCgnb3B0aW9uOnNlbGVjdGVkJyk7XG5cbiAgICAgICAgICAgIC8vIEluZGV4IG9mIHRoZSBzZWxlY3RlZCBvcHRpb24gKHN1YnRyYWN0ZWQgMSB0byBiZSBjb21wYXRpYmxlIHdpdGggZGF0YSBjb250YWluZXIgbGlzdCBlbGVtZW50KS5cbiAgICAgICAgICAgIGNvbnN0IG9wdGlvbkluZGV4ID0gJHNlbGVjdGVkLmluZGV4KCkgLSAxO1xuXG4gICAgICAgICAgICAvLyBJcyB0aGUgaW1hZ2UgYXJlYSBuZXc/XG4gICAgICAgICAgICBjb25zdCBpc05ld0ltYWdlQXJlYSA9ICRzZWxlY3RlZC5oYXNDbGFzcyhjbGFzc2VzLm5ld09wdGlvbik7XG5cbiAgICAgICAgICAgIC8vIEltYWdlIG1hcCBjb29yZGluYXRlcy5cbiAgICAgICAgICAgIGNvbnN0IGNvb3JkaW5hdGVzID0gZWxlbWVudHMuZXh0ZW5zaW9uLmZpbmQoJzpoaWRkZW4nKS52YWwoKTtcbiAgICAgICAgICAgIGNvbnN0IGlzTWluUG9pbnRzQ29vcmRpbmF0ZXMgPSBfaGF2ZUNvb3JkaW5hdGVzTWluUG9pbnRzKGNvb3JkaW5hdGVzKTtcbiAgICAgICAgICAgIFxuICAgICAgICAgICAgLy8gQ3JlYXRlIG5ldyBsaXN0IGl0ZW0gZWxlbWVudC5cbiAgICAgICAgICAgIGNvbnN0ICRsaXN0SXRlbSA9ICQoYDxsaVxuXHRcdFx0XHRkYXRhLWlkPVwiMFwiXG5cdFx0XHRcdGRhdGEtbGluay10aXRsZT1cIiR7ZWxlbWVudHMuaW5wdXRzLmxpbmtUaXRsZS52YWwoKX1cIlxuXHRcdFx0XHRkYXRhLWxpbmstdXJsPVwiJHtlbGVtZW50cy5pbnB1dHMubGlua1VybC52YWwoKX1cIlxuXHRcdFx0XHRkYXRhLWxpbmstdGFyZ2V0PVwiJHtlbGVtZW50cy5pbnB1dHMubGlua1RhcmdldC52YWwoKX1cIlxuXHRcdFx0XHRkYXRhLWNvb3JkaW5hdGVzPVwiJHtjb29yZGluYXRlc31cIlxuXHRcdFx0PmApO1xuXG4gICAgICAgICAgICAvLyBUcmltbWVkIGxpbmsgdGl0bGUgdmFsdWUuXG4gICAgICAgICAgICBjb25zdCBsaW5rVGl0bGUgPSBlbGVtZW50cy5pbnB1dHMubGlua1RpdGxlLnZhbCgpLnRyaW0oKTtcblxuICAgICAgICAgICAgLy8gQWJvcnQgYW5kIHNob3cgbW9kYWwsIGlmIGxpbmsgdGl0bGUgb3IgY29vcmRpbmF0ZXMgYXJlIGVtcHR5LlxuICAgICAgICAgICAgaWYgKCFjb29yZGluYXRlcyB8fCAhbGlua1RpdGxlKSB7XG4gICAgICAgICAgICAgICAganNlLmxpYnMubW9kYWwuc2hvd01lc3NhZ2UoXG4gICAgICAgICAgICAgICAgICAgIGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdNSVNTSU5HX1BBVEhfT1JfTElOS19USVRMRV9NT0RBTF9USVRMRScsICdzbGlkZXJzJyksXG4gICAgICAgICAgICAgICAgICAgIGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdNSVNTSU5HX1BBVEhfT1JfTElOS19USVRMRV9NT0RBTF9URVhUJywgJ3NsaWRlcnMnKVxuICAgICAgICAgICAgICAgICk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC8vIEFib3J0IGFuZCBzaG93IG1vZGFsLCBpZiBjb29yZGluYXRlcyBoYXZlIGxlc3MgdGhhbiAzIHBvaW50cy5cbiAgICAgICAgICAgIGlmIChpc01pblBvaW50c0Nvb3JkaW5hdGVzID09PSBmYWxzZSkge1xuICAgICAgICAgICAgICAgIGpzZS5saWJzLm1vZGFsLnNob3dNZXNzYWdlKFxuICAgICAgICAgICAgICAgICAgICBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnUEFUSF9ORUVEIE1JTklNVU1fM19QT0lOVFNfTU9EQUxfVElUTEUnLCAnc2xpZGVycycpLFxuICAgICAgICAgICAgICAgICAgICBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnUEFUSF9ORUVEIE1JTklNVU1fM19QT0lOVFNfTU9EQUxfVEVYVCcsICdzbGlkZXJzJylcbiAgICAgICAgICAgICAgICApO1xuICAgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgLy8gQWRkIGxpc3QgaXRlbSwgaWYgdGhlIHNlbGVjdGVkIGltYWdlIGFyZWEgaXMgbmV3LlxuICAgICAgICAgICAgLy8gT3RoZXJ3aXNlIHJlcGxhY2UgdGhlIGFscmVhZHkgbGlzdGVkIGl0ZW0uXG4gICAgICAgICAgICBpZiAoaXNOZXdJbWFnZUFyZWEpIHtcbiAgICAgICAgICAgICAgICAvLyBSZW1vdmUgbmV3IG9wdGlvbiBjbGFzcy5cbiAgICAgICAgICAgICAgICAkc2VsZWN0ZWQucmVtb3ZlQ2xhc3MoY2xhc3Nlcy5uZXdPcHRpb24pO1xuXG4gICAgICAgICAgICAgICAgLy8gQWRkIGxpc3QgaXRlbSB0byBkYXRhIGNvbnRhaW5lciBsaXN0IGVsZW1lbnQuXG4gICAgICAgICAgICAgICAgJGxpc3QuYXBwZW5kKCRsaXN0SXRlbSk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIC8vIFJlcGxhY2UgZGF0YSBjb250YWluZXIgbGlzdCBpdGVtIHdpdGggY3JlYXRlZCBvbmUuXG4gICAgICAgICAgICAgICAgJGxpc3QuY2hpbGRyZW4oKS5lcShvcHRpb25JbmRleCkucmVwbGFjZVdpdGgoJGxpc3RJdGVtKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgLy8gU2VsZWN0ICdwbGVhc2Ugc2VsZWN0JyBkcm9wZG93biBpdGVtLlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWEudmFsKHZhbHVlcy5uaWwpO1xuXG4gICAgICAgICAgICAvLyBUcmlnZ2VyICdjaGFuZ2UnIGV2ZW50IHRvIGdldCB0byB0aGUgZGVmYXVsdCB2aWV3LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWEudHJpZ2dlcignY2hhbmdlJyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgJ2NsaWNrJyBldmVudCBvbiB0aGUgYWJvcnQgYnV0dG9uLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uQWJvcnQoKSB7XG4gICAgICAgICAgICAvLyBTZWxlY3RlZCBvcHRpb24uXG4gICAgICAgICAgICBjb25zdCAkc2VsZWN0ZWQgPSBlbGVtZW50cy5pbnB1dHMuYXJlYS5maW5kKCdvcHRpb246c2VsZWN0ZWQnKTtcblxuICAgICAgICAgICAgLy8gSXMgdGhlIGltYWdlIGFyZWEgbmV3P1xuICAgICAgICAgICAgY29uc3QgaXNOZXdJbWFnZUFyZWEgPSAkc2VsZWN0ZWQuaGFzQ2xhc3MoY2xhc3Nlcy5uZXdPcHRpb24pO1xuXG4gICAgICAgICAgICAvLyBSZW1vdmUgb3B0aW9uIGZyb20gYXJlYSBkcm9wZG93biwgaWYgdGhlIHNlbGVjdGVkIGltYWdlIGFyZWEgaXMgbmV3LlxuICAgICAgICAgICAgLy8gT3RoZXJ3aXNlIHRoZSBhcmVhIGRyb3Bkb3duIHdpbGwgYmUgcmVmaWxsZWQuXG4gICAgICAgICAgICBpZiAoaXNOZXdJbWFnZUFyZWEpIHtcbiAgICAgICAgICAgICAgICAkc2VsZWN0ZWQucmVtb3ZlKCk7XG4gICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgIF9maWxsQXJlYURyb3Bkb3duKCk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC8vIFNlbGVjdCAncGxlYXNlIHNlbGVjdCcgZHJvcGRvd24gaXRlbS5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhLnZhbCh2YWx1ZXMubmlsKTtcblxuICAgICAgICAgICAgLy8gVHJpZ2dlciAnY2hhbmdlJyBldmVudCB0byBnZXQgdG8gdGhlIGRlZmF1bHQgdmlldy5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhLnRyaWdnZXIoJ2NoYW5nZScpO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIEhhbmRsZXMgdGhlICdjbGljaycgZXZlbnQgb24gdGhlIGRlbGV0ZSBidXR0b24uXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25EZWxldGUoKSB7XG4gICAgICAgICAgICAvLyBTZWxlY3RlZCBvcHRpb24uXG4gICAgICAgICAgICBjb25zdCAkc2VsZWN0ZWQgPSBlbGVtZW50cy5pbnB1dHMuYXJlYS5maW5kKCdvcHRpb246c2VsZWN0ZWQnKTtcblxuICAgICAgICAgICAgLy8gSW5kZXggb2YgdGhlIHNlbGVjdGVkIG9wdGlvbiAoc3VidHJhY3RlZCAxIHRvIGJlIGNvbXBhdGlibGUgd2l0aCBkYXRhIGNvbnRhaW5lciBsaXN0IGVsZW1lbnQpLlxuICAgICAgICAgICAgY29uc3Qgb3B0aW9uSW5kZXggPSAkc2VsZWN0ZWQuaW5kZXgoKSAtIDE7XG5cbiAgICAgICAgICAgIC8vIERlbGV0ZSBkYXRhIGNvbnRhaW5lciBsaXN0IGl0ZW0uXG4gICAgICAgICAgICAkbGlzdC5jaGlsZHJlbigpLmVxKG9wdGlvbkluZGV4KS5yZW1vdmUoKTtcblxuICAgICAgICAgICAgLy8gU3luY3Jvbml6ZSBhcmVhIGRyb3Bkb3duLlxuICAgICAgICAgICAgX2ZpbGxBcmVhRHJvcGRvd24oKTtcblxuICAgICAgICAgICAgLy8gU2VsZWN0ICdwbGVhc2Ugc2VsZWN0JyBkcm9wZG93biBpdGVtLlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWEudmFsKHZhbHVlcy5uaWwpO1xuXG4gICAgICAgICAgICAvLyBUcmlnZ2VyICdjaGFuZ2UnIGV2ZW50IHRvIGdldCB0byB0aGUgZGVmYXVsdCB2aWV3LlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRzLmFyZWEudHJpZ2dlcignY2hhbmdlJyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgJ2NsaWNrJyBldmVudCBvbiB0aGUgcmVzZXQgYnV0dG9uLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uUmVzZXQoKSB7XG4gICAgICAgICAgICAvLyBUcmlnZ2VyIHRoZSAncmVzZXQnIGV2ZW50IHRvIGNsZWFyIHRoZSBwYXRoLlxuICAgICAgICAgICAgZWxlbWVudHMuZXh0ZW5zaW9uLnRyaWdnZXIoJ3Jlc2V0Jyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgJ3Nob3cnIGV2ZW50LlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcGFyYW0ge2pRdWVyeS5FdmVudH0gZXZlbnQgVHJpZ2dlcmVkIGV2ZW50LlxuICAgICAgICAgKiBAcGFyYW0ge2pRdWVyeX0gJGxpc3RQYXJhbWV0ZXIgRGF0YSBjb250YWluZXIgbGlzdCBlbGVtZW50LlxuICAgICAgICAgKiBAcGFyYW0ge1N0cmluZ30gaW1hZ2VVcmxQYXRoIFVSTCB0byBzbGlkZSBpbWFnZS5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9vblNob3coZXZlbnQsICRsaXN0UGFyYW1ldGVyLCBpbWFnZVVybFBhdGgpIHtcbiAgICAgICAgICAgIC8vIFNob3cgbW9kYWwuXG4gICAgICAgICAgICAkdGhpcy5tb2RhbCgnc2hvdycpO1xuXG4gICAgICAgICAgICAvLyBBc3NpZ24gZGF0YSBjb250YWluZXIgbGlzdCBlbGVtZW50IHZhbHVlLlxuICAgICAgICAgICAgJGxpc3QgPSAkbGlzdFBhcmFtZXRlcjtcblxuICAgICAgICAgICAgLy8gQXNzaWduIGltYWdlIFVSTCB2YWx1ZS5cbiAgICAgICAgICAgIGltYWdlVXJsID0gaW1hZ2VVcmxQYXRoO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIEhhbmRsZXMgdGhlICdjbGljaycgZXZlbnQuXG4gICAgICAgICAqXG4gICAgICAgICAqIEBwYXJhbSB7alF1ZXJ5LkV2ZW50fSBldmVudCBUcmlnZ2VyZWQgZXZlbnQuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25DbGljayhldmVudCkge1xuICAgICAgICAgICAgLy8gQ2hlY2ssIHdoZXRoZXIgdGhlIGNyZWF0ZSBidXR0b24gaXMgY2xpY2tlZC5cbiAgICAgICAgICAgIGlmIChlbGVtZW50cy5idXR0b25zLmNyZWF0ZS5pcyhldmVudC50YXJnZXQpKSB7XG4gICAgICAgICAgICAgICAgX29uQ3JlYXRlKCk7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAvLyBDaGVjaywgd2hldGhlciB0aGUgYXBwbHkgYnV0dG9uIGlzIGNsaWNrZWQuXG4gICAgICAgICAgICBpZiAoZWxlbWVudHMuYnV0dG9ucy5hcHBseS5pcyhldmVudC50YXJnZXQpKSB7XG4gICAgICAgICAgICAgICAgX29uQXBwbHkoKTtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC8vIENoZWNrLCB3aGV0aGVyIHRoZSBhYm9ydCBidXR0b24gaXMgY2xpY2tlZC5cbiAgICAgICAgICAgIGlmIChlbGVtZW50cy5idXR0b25zLmFib3J0LmlzKGV2ZW50LnRhcmdldCkpIHtcbiAgICAgICAgICAgICAgICBfb25BYm9ydCgpO1xuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgLy8gQ2hlY2ssIHdoZXRoZXIgdGhlIGRlbGV0ZSBidXR0b24gaXMgY2xpY2tlZC5cbiAgICAgICAgICAgIGlmIChlbGVtZW50cy5idXR0b25zLmRlbGV0ZS5pcyhldmVudC50YXJnZXQpKSB7XG4gICAgICAgICAgICAgICAgX29uRGVsZXRlKCk7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAvLyBDaGVjaywgd2hldGhlciB0aGUgcmVzZXQgYnV0dG9uIGlzIGNsaWNrZWQuXG4gICAgICAgICAgICBpZiAoZWxlbWVudHMuYnV0dG9ucy5yZXNldC5pcyhldmVudC50YXJnZXQpKSB7XG4gICAgICAgICAgICAgICAgX29uUmVzZXQoKTtcbiAgICAgICAgICAgICAgICByZXR1cm47XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgJ2NoYW5nZScgZXZlbnQuXG4gICAgICAgICAqXG4gICAgICAgICAqIEBwYXJhbSB7alF1ZXJ5LkV2ZW50fSBldmVudCBUcmlnZ2VyZWQgZXZlbnQuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25DaGFuZ2UoZXZlbnQpIHtcbiAgICAgICAgICAgIC8vIENoZWNrLCB3aGV0aGVyIHRoZSBhcmVhIGRyb3Bkb3duIGlzIGNoYW5nZWQuXG4gICAgICAgICAgICBpZiAoZWxlbWVudHMuaW5wdXRzLmFyZWEuaXMoZXZlbnQudGFyZ2V0KSkge1xuICAgICAgICAgICAgICAgIF9vblN3aXRjaEFyZWEoKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIHRoZSBtb2RhbCBzaG93biBldmVudCwgd2hpY2ggaXMgdHJpZ2dlcmVkIGJ5IHRoZSBib290c3RyYXAgbW9kYWwgcGx1Z2luLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uTW9kYWxTaG93bigpIHtcbiAgICAgICAgICAgIC8vIEZpbGwgdGhlIGFyZWEgZHJvcGRvd24gd2l0aCB0aGUgdmFsdWVzIGZyb20gdGhlIGRhdGEgY29udGFpbmVyIGxpc3QuXG4gICAgICAgICAgICBfZmlsbEFyZWFEcm9wZG93bigpO1xuXG4gICAgICAgICAgICAvLyBTZWxlY3QgJ3BsZWFzZSBzZWxlY3QnIGRyb3Bkb3duIGl0ZW0gYW5kIHRyaWdnZXIgJ2NoYW5nZScgZXZlbnQgdG8gZ2V0IHRvIHRoZSBkZWZhdWx0IHZpZXcuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dHMuYXJlYVxuICAgICAgICAgICAgICAgIC52YWwodmFsdWVzLm5pbClcbiAgICAgICAgICAgICAgICAudHJpZ2dlcignY2hhbmdlJyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgbW9kYWwgaGlkZGVuIGV2ZW50LCB3aGljaCBpcyB0cmlnZ2VyZWQgYnkgdGhlIGJvb3RzdHJhcCBtb2RhbCBwbHVnaW4uXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25Nb2RhbEhpZGRlbigpIHtcbiAgICAgICAgICAgIC8vIFNlbGVjdCAncGxlYXNlIHNlbGVjdCcgZHJvcGRvd24gaXRlbSBhbmQgdHJpZ2dlciAnY2hhbmdlJyBldmVudCB0byBnZXQgdG8gdGhlIGRlZmF1bHQgdmlldy5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0cy5hcmVhXG4gICAgICAgICAgICAgICAgLnZhbCh2YWx1ZXMubmlsKVxuICAgICAgICAgICAgICAgIC50cmlnZ2VyKCdjaGFuZ2UnKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIHRoZSAnaW5wdXQnIGV2ZW50LlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcGFyYW0ge2pRdWVyeS5FdmVudH0gZXZlbnQgVHJpZ2dlcmVkIGV2ZW50LlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uSW5wdXQoZXZlbnQpIHtcbiAgICAgICAgICAgIC8vIENoZWNrLCB3aGV0aGVyIHRoZSBsaW5rIHRpdGxlIGlzIHRoZSBjaGFuZ2VkIGVsZW1lbnQuXG4gICAgICAgICAgICBpZiAoZWxlbWVudHMuaW5wdXRzLmxpbmtUaXRsZS5pcyhldmVudC50YXJnZXQpKSB7XG4gICAgICAgICAgICAgICAgX29uTGlua1RpdGxlSW5wdXQoKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgICAgICBcbiAgICAgICAgLyoqXG4gICAgICAgICAqIENoZWNrIHRoZSBtaW4gbGVuZ3RoIG9mIGNvb3JkaW5hdGVzXG4gICAgICAgICAqXG4gICAgICAgICAqIEBwYXJhbSB7c3RyaW5nfSBjb29yZGluYXRlc1xuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX2hhdmVDb29yZGluYXRlc01pblBvaW50cyhjb29yZGluYXRlcyl7XG4gICAgICAgICAgICAvLyBjb29yZGluYXRlcyBuZWVkcyBtaW4gMyBwb2ludHNcbiAgICAgICAgICAgIC8vIGV4YW1wbGU6IHgxLHkxLHgyLHkyLHgzLHkzXG4gICAgICAgICAgICBsZXQgY29vcmRpbmF0ZXNBcnJheSA9IGNvb3JkaW5hdGVzLnNwbGl0KCcsJylcbiAgICAgICAgICAgIGlmIChjb29yZGluYXRlc0FycmF5Lmxlbmd0aCA+PSA2KSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIHRydWVcbiAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuIGZhbHNlXG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICAgICAgXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgICAgIC8vIElOSVRJQUxJWkFUSU9OXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgbW9kdWxlLmluaXQgPSBkb25lID0+IHtcbiAgICAgICAgICAgIC8vIEJpbmQgZXZlbnQgaGFuZGxlcnMuXG4gICAgICAgICAgICAkdGhpc1xuICAgICAgICAgICAgICAgIC5vbignY2xpY2snLCBfb25DbGljaylcbiAgICAgICAgICAgICAgICAub24oJ2NoYW5nZScsIF9vbkNoYW5nZSlcbiAgICAgICAgICAgICAgICAub24oJ3Nob3duLmJzLm1vZGFsJywgX29uTW9kYWxTaG93bilcbiAgICAgICAgICAgICAgICAub24oJ2hpZGRlbi5icy5tb2RhbCcsIF9vbk1vZGFsSGlkZGVuKVxuICAgICAgICAgICAgICAgIC5vbignc2hvdycsIF9vblNob3cpXG4gICAgICAgICAgICAgICAgLm9uKCdpbnB1dCcsIF9vbklucHV0KTtcblxuICAgICAgICAgICAgLy8gRmluaXNoIGluaXRpYWxpemF0aW9uLlxuICAgICAgICAgICAgZG9uZSgpO1xuICAgICAgICB9O1xuXG4gICAgICAgIHJldHVybiBtb2R1bGU7XG4gICAgfSk7Il19
