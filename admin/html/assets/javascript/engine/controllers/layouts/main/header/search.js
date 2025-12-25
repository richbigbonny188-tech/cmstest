'use strict';

/* --------------------------------------------------------------
 search.js 2024-01-10
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2024 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * Global Search Controller Module
 */
gx.controllers.module('search', ['user_configuration_service', 'loading_spinner', gx.source + '/libs/search', gx.source + '/libs/shortcuts'], function (data) {

    'use strict';

    // --------------------------------------------------------------------
    // VARIABLES
    // --------------------------------------------------------------------

    // Module element, which represents the info box.

    var $this = $(this);

    // Module default parameters.
    var defaults = {
        // Recent search area.
        recentSearchArea: 'categories',

        // Hyperlink open mode.
        openMode: '_self'
    };

    // Module options.
    var options = $.extend(true, {}, defaults, data);

    // Elements.
    var elements = {
        // Search term input.
        input: $this.find('.input'),

        // Search area list.
        list: $this.find('.list'),

        // Search area list item.
        listItems: $this.find('.list-item'),

        // Search input trigger button.
        button: $('.actions .search')
    };

    // Element selector strings.
    var selectors = {
        // List item search term placeholder selector string.
        placeholder: '.placeholder'
    };

    // Attributes.
    var attributes = {
        // Data attributes.
        data: { searchArea: 'searchArea' }
    };

    // Event key codes.
    var keyCodes = {
        esc: 27,
        arrowUp: 38,
        arrowDown: 40,
        enter: 13
    };

    // Module object.
    var module = {
        bindings: { input: elements.input }
    };

    // Current selected search area.
    var searchArea = null;

    // --------------------------------------------------------------------
    // FUNCTIONS
    // --------------------------------------------------------------------

    /**
     * Sets the search area and activates the respective list item element.
     *
     * @param {String} area Search area name.
     */
    function _setSearchArea(area) {
        // Active list item CSS class.
        var activeClass = 'active';

        // Set internal area value.
        searchArea = area;

        // Set class.
        elements.listItems.removeClass(activeClass).filter('li[data-search-area="' + area + '"]').addClass(activeClass);
    }

    /**
     * Handles event for the click action on the input field.
     */
    function _onInputClick() {
        _fillTermInListItems();
        _toggleDropdown(true);
    }

    /**
     * Handles event for the key up press action within the input field.
     *
     * @param {jQuery.Event} event Event fired.
     */
    function _onInputKeyUp(event) {
        switch (event.which) {
            // Hide search bar on escape key.
            case keyCodes.esc:
                _toggleDropdown(false);
                elements.input.trigger('blur');
                break;

            // Start the search on return key.
            case keyCodes.enter:
                _performSearch();
                break;

            // Cycle selection through search entity list items on vertical arrow keys.
            case keyCodes.arrowUp:
            case keyCodes.arrowDown:
                // Direction.
                var isUp = event.which === keyCodes.arrowUp;

                // Current search area list item
                var $currentItem = elements.listItems.filter('.active');

                // First search area list item.
                var $firstItem = elements.listItems.first();

                // Last search area list item.
                var $lastItem = elements.listItems.last();

                // Determine the next selected element.
                var $followingItem = isUp ? $currentItem.prev() : $currentItem.next();

                // If there is no next element, then the first/last element is selected.
                if (!$followingItem.length) {
                    $followingItem = isUp ? $lastItem : $firstItem;
                }

                // Fetch search area from next list item.
                var area = $followingItem.data(attributes.data.searchArea);

                // Set entity value and select entity on the list item and set placeholder.
                _setSearchArea(area);

                break;

            // Fill search term into dropdown list items on letter keypress.
            default:
                if ($(elements.input).val().length) {
                    $(this).parent().addClass('searching');
                } else {
                    $(this).parent().removeClass('searching');
                }
                _toggleDropdown(true);
                _fillTermInListItems();
        }
    }

    /**
     * Handles event for the click action outside of the controller area.
     *
     * @param {jQuery.Event} event Event fired.
     */
    function _onOutsideClick(event) {
        // Clicked target element.
        var $target = event.target;

        // Target element verifiers.
        var isNotTargetSearchArea = !$this.has($target).length;
        var isNotTargetSearchButton = !elements.button.has($target).length;

        // Clear the placeholder and hide dropdown,
        // if clicked target is not within search area.
        if (isNotTargetSearchArea && isNotTargetSearchButton) {
            _toggleDropdown(false);
            elements.input.trigger('blur');
        }
    }

    /**
     * Handles event for the click action on a dropdown list item.
     *
     * @param {jQuery.Event} event Event fired.
     */
    function _onListClick(event) {
        // Get entity from list item.
        var area = $(event.currentTarget).data(attributes.data.searchArea);

        _setSearchArea(area);
        _performSearch();
    }

    /**
     * Handles event for the button click action.
     *
     * @private
     */
    function _onButtonClick() {
        // Proxy click and focus to the search input field.
        elements.input.trigger('click').trigger('focus');
    }

    /**
     * Handles event for window inactivation.
     */
    function _onWindowBlur() {
        _toggleDropdown(false);
        elements.input.trigger('blur');
    }

    /**
     * Handles the set input value custom event method.
     *
     * @param {jQuery.Event} event Triggered event.
     * @param {String} value Desired input value.
     * @param {Boolean} doFocus Do focus on the input field?
     */
    function _onSetValue(event, value) {
        // Set admin search input value.
        elements.input.val(value);
    }

    /**
     * Handles JSEngine finish event.
     */
    function _onEngineFinished() {
        // Set search entity.
        _setSearchArea(options.recentSearchArea);
    }

    /**
     * Prepends the current search term into the dropdown list items.
     */
    function _fillTermInListItems() {
        elements.list.find(selectors.placeholder).each(function (index, element) {
            return $(element).text(module.bindings.input.get());
        });
    }

    /**
     * Shows and hides the dropdown.
     *
     * @param {Boolean} doShow Show the dropdown?
     */
    function _toggleDropdown(doShow) {
        // Class for visible dropdown.
        var ACTIVE_CLASS = 'active';

        // Toggle dropdown dependent on the provided boolean value.
        elements.list[doShow ? 'addClass' : 'removeClass'](ACTIVE_CLASS);
    }

    /**
     * Saves the search entity to the user configuration and performs the search.
     */
    function _performSearch() {
        // Set default search area if non provided.
        searchArea = searchArea || defaults.recentSearchArea;

        // Check search area URL availability.
        if (!Object.keys(jse.libs.search.urls).includes(searchArea)) {
            throw new Error('No URL for search area "' + searchArea + '" found.');
        }

        // Display loading spinner.
        var $spinner = jse.libs.loading_spinner.show(elements.list, '9999');

        // Compose search URL with search term.
        var url = jse.libs.search.urls[searchArea] + encodeURIComponent(module.bindings.input.get());

        // Save selected entity to server via user configuration service.
        jse.libs.user_configuration_service.set({
            data: {
                userId: jse.core.registry.get('userId'),
                configurationKey: jse.libs.search.configurationKey,
                configurationValue: searchArea
            },
            onSuccess: function onSuccess() {
                window.open(url, searchArea !== 'manual' && searchArea !== 'forum' ? options.openMode : '_blank');
                jse.libs.loading_spinner.hide($spinner);
            },
            onError: function onError() {
                window.open(url, searchArea !== 'manual' && searchArea !== 'forum' ? options.openMode : '_blank');
                jse.libs.loading_spinner.hide($spinner);
            }
        });
    }

    // --------------------------------------------------------------------
    // INITIALIZATION
    // --------------------------------------------------------------------

    module.init = function (done) {
        // Bind list item event handler.
        elements.listItems.on('click', _onListClick);

        // Bind button event handler.
        elements.button.on('click', _onButtonClick);

        // Bind input event handlers.
        elements.input.on('click', _onInputClick).on('keyup', _onInputKeyUp);

        // Bind window event handlers.
        $(window).on('click', _onOutsideClick).on('blur', _onWindowBlur);

        // Bind set input value event handler.
        $this.on('set:value', _onSetValue);

        // Bind JSEngine ready state event handler.
        $(document).on('JSENGINE_INIT_FINISHED', _onEngineFinished);

        // Finish initialization.
        done();
    };

    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImxheW91dHMvbWFpbi9oZWFkZXIvc2VhcmNoLmpzIl0sIm5hbWVzIjpbImd4IiwiY29udHJvbGxlcnMiLCJtb2R1bGUiLCJzb3VyY2UiLCJkYXRhIiwiJHRoaXMiLCIkIiwiZGVmYXVsdHMiLCJyZWNlbnRTZWFyY2hBcmVhIiwib3Blbk1vZGUiLCJvcHRpb25zIiwiZXh0ZW5kIiwiZWxlbWVudHMiLCJpbnB1dCIsImZpbmQiLCJsaXN0IiwibGlzdEl0ZW1zIiwiYnV0dG9uIiwic2VsZWN0b3JzIiwicGxhY2Vob2xkZXIiLCJhdHRyaWJ1dGVzIiwic2VhcmNoQXJlYSIsImtleUNvZGVzIiwiZXNjIiwiYXJyb3dVcCIsImFycm93RG93biIsImVudGVyIiwiYmluZGluZ3MiLCJfc2V0U2VhcmNoQXJlYSIsImFyZWEiLCJhY3RpdmVDbGFzcyIsInJlbW92ZUNsYXNzIiwiZmlsdGVyIiwiYWRkQ2xhc3MiLCJfb25JbnB1dENsaWNrIiwiX2ZpbGxUZXJtSW5MaXN0SXRlbXMiLCJfdG9nZ2xlRHJvcGRvd24iLCJfb25JbnB1dEtleVVwIiwiZXZlbnQiLCJ3aGljaCIsInRyaWdnZXIiLCJfcGVyZm9ybVNlYXJjaCIsImlzVXAiLCIkY3VycmVudEl0ZW0iLCIkZmlyc3RJdGVtIiwiZmlyc3QiLCIkbGFzdEl0ZW0iLCJsYXN0IiwiJGZvbGxvd2luZ0l0ZW0iLCJwcmV2IiwibmV4dCIsImxlbmd0aCIsInZhbCIsInBhcmVudCIsIl9vbk91dHNpZGVDbGljayIsIiR0YXJnZXQiLCJ0YXJnZXQiLCJpc05vdFRhcmdldFNlYXJjaEFyZWEiLCJoYXMiLCJpc05vdFRhcmdldFNlYXJjaEJ1dHRvbiIsIl9vbkxpc3RDbGljayIsImN1cnJlbnRUYXJnZXQiLCJfb25CdXR0b25DbGljayIsIl9vbldpbmRvd0JsdXIiLCJfb25TZXRWYWx1ZSIsInZhbHVlIiwiX29uRW5naW5lRmluaXNoZWQiLCJlYWNoIiwiaW5kZXgiLCJlbGVtZW50IiwidGV4dCIsImdldCIsImRvU2hvdyIsIkFDVElWRV9DTEFTUyIsIk9iamVjdCIsImtleXMiLCJqc2UiLCJsaWJzIiwic2VhcmNoIiwidXJscyIsImluY2x1ZGVzIiwiRXJyb3IiLCIkc3Bpbm5lciIsImxvYWRpbmdfc3Bpbm5lciIsInNob3ciLCJ1cmwiLCJlbmNvZGVVUklDb21wb25lbnQiLCJ1c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZSIsInNldCIsInVzZXJJZCIsImNvcmUiLCJyZWdpc3RyeSIsImNvbmZpZ3VyYXRpb25LZXkiLCJjb25maWd1cmF0aW9uVmFsdWUiLCJvblN1Y2Nlc3MiLCJ3aW5kb3ciLCJvcGVuIiwiaGlkZSIsIm9uRXJyb3IiLCJpbml0Iiwib24iLCJkb2N1bWVudCIsImRvbmUiXSwibWFwcGluZ3MiOiI7O0FBQUE7Ozs7Ozs7Ozs7QUFVQTs7O0FBR0FBLEdBQUdDLFdBQUgsQ0FBZUMsTUFBZixDQUNJLFFBREosRUFHSSxDQUNJLDRCQURKLEVBRUksaUJBRkosRUFHT0YsR0FBR0csTUFIVixtQkFJT0gsR0FBR0csTUFKVixxQkFISixFQVVJLFVBQVVDLElBQVYsRUFBZ0I7O0FBRVo7O0FBRUE7QUFDQTtBQUNBOztBQUVBOztBQUNBLFFBQU1DLFFBQVFDLEVBQUUsSUFBRixDQUFkOztBQUVBO0FBQ0EsUUFBTUMsV0FBVztBQUNiO0FBQ0FDLDBCQUFrQixZQUZMOztBQUliO0FBQ0FDLGtCQUFVO0FBTEcsS0FBakI7O0FBUUE7QUFDQSxRQUFNQyxVQUFVSixFQUFFSyxNQUFGLENBQVMsSUFBVCxFQUFlLEVBQWYsRUFBbUJKLFFBQW5CLEVBQTZCSCxJQUE3QixDQUFoQjs7QUFFQTtBQUNBLFFBQU1RLFdBQVc7QUFDYjtBQUNBQyxlQUFPUixNQUFNUyxJQUFOLENBQVcsUUFBWCxDQUZNOztBQUliO0FBQ0FDLGNBQU1WLE1BQU1TLElBQU4sQ0FBVyxPQUFYLENBTE87O0FBT2I7QUFDQUUsbUJBQVdYLE1BQU1TLElBQU4sQ0FBVyxZQUFYLENBUkU7O0FBVWI7QUFDQUcsZ0JBQVFYLEVBQUUsa0JBQUY7QUFYSyxLQUFqQjs7QUFj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c2VhcmNoLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiBzZWFyY2guanMgMjAyNC0wMS0xMFxuIEdhbWJpbyBHbWJIXG4gaHR0cDovL3d3dy5nYW1iaW8uZGVcbiBDb3B5cmlnaHQgKGMpIDIwMjQgR2FtYmlvIEdtYkhcbiBSZWxlYXNlZCB1bmRlciB0aGUgR05VIEdlbmVyYWwgUHVibGljIExpY2Vuc2UgKFZlcnNpb24gMilcbiBbaHR0cDovL3d3dy5nbnUub3JnL2xpY2Vuc2VzL2dwbC0yLjAuaHRtbF1cbiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICovXG5cbi8qKlxuICogR2xvYmFsIFNlYXJjaCBDb250cm9sbGVyIE1vZHVsZVxuICovXG5neC5jb250cm9sbGVycy5tb2R1bGUoXG4gICAgJ3NlYXJjaCcsXG5cbiAgICBbXG4gICAgICAgICd1c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZScsXG4gICAgICAgICdsb2FkaW5nX3NwaW5uZXInLFxuICAgICAgICBgJHtneC5zb3VyY2V9L2xpYnMvc2VhcmNoYCxcbiAgICAgICAgYCR7Z3guc291cmNlfS9saWJzL3Nob3J0Y3V0c2BcbiAgICBdLFxuXG4gICAgZnVuY3Rpb24gKGRhdGEpIHtcblxuICAgICAgICAndXNlIHN0cmljdCc7XG5cbiAgICAgICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gVkFSSUFCTEVTXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgLy8gTW9kdWxlIGVsZW1lbnQsIHdoaWNoIHJlcHJlc2VudHMgdGhlIGluZm8gYm94LlxuICAgICAgICBjb25zdCAkdGhpcyA9ICQodGhpcyk7XG5cbiAgICAgICAgLy8gTW9kdWxlIGRlZmF1bHQgcGFyYW1ldGVycy5cbiAgICAgICAgY29uc3QgZGVmYXVsdHMgPSB7XG4gICAgICAgICAgICAvLyBSZWNlbnQgc2VhcmNoIGFyZWEuXG4gICAgICAgICAgICByZWNlbnRTZWFyY2hBcmVhOiAnY2F0ZWdvcmllcycsXG5cbiAgICAgICAgICAgIC8vIEh5cGVybGluayBvcGVuIG1vZGUuXG4gICAgICAgICAgICBvcGVuTW9kZTogJ19zZWxmJ1xuICAgICAgICB9O1xuXG4gICAgICAgIC8vIE1vZHVsZSBvcHRpb25zLlxuICAgICAgICBjb25zdCBvcHRpb25zID0gJC5leHRlbmQodHJ1ZSwge30sIGRlZmF1bHRzLCBkYXRhKTtcblxuICAgICAgICAvLyBFbGVtZW50cy5cbiAgICAgICAgY29uc3QgZWxlbWVudHMgPSB7XG4gICAgICAgICAgICAvLyBTZWFyY2ggdGVybSBpbnB1dC5cbiAgICAgICAgICAgIGlucHV0OiAkdGhpcy5maW5kKCcuaW5wdXQnKSxcblxuICAgICAgICAgICAgLy8gU2VhcmNoIGFyZWEgbGlzdC5cbiAgICAgICAgICAgIGxpc3Q6ICR0aGlzLmZpbmQoJy5saXN0JyksXG5cbiAgICAgICAgICAgIC8vIFNlYXJjaCBhcmVhIGxpc3QgaXRlbS5cbiAgICAgICAgICAgIGxpc3RJdGVtczogJHRoaXMuZmluZCgnLmxpc3QtaXRlbScpLFxuXG4gICAgICAgICAgICAvLyBTZWFyY2ggaW5wdXQgdHJpZ2dlciBidXR0b24uXG4gICAgICAgICAgICBidXR0b246ICQoJy5hY3Rpb25zIC5zZWFyY2gnKVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEVsZW1lbnQgc2VsZWN0b3Igc3RyaW5ncy5cbiAgICAgICAgY29uc3Qgc2VsZWN0b3JzID0ge1xuICAgICAgICAgICAgLy8gTGlzdCBpdGVtIHNlYXJjaCB0ZXJtIHBsYWNlaG9sZGVyIHNlbGVjdG9yIHN0cmluZy5cbiAgICAgICAgICAgIHBsYWNlaG9sZGVyOiAnLnBsYWNlaG9sZGVyJ1xuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEF0dHJpYnV0ZXMuXG4gICAgICAgIGNvbnN0IGF0dHJpYnV0ZXMgPSB7XG4gICAgICAgICAgICAvLyBEYXRhIGF0dHJpYnV0ZXMuXG4gICAgICAgICAgICBkYXRhOiB7c2VhcmNoQXJlYTogJ3NlYXJjaEFyZWEnfVxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEV2ZW50IGtleSBjb2Rlcy5cbiAgICAgICAgY29uc3Qga2V5Q29kZXMgPSB7XG4gICAgICAgICAgICBlc2M6IDI3LFxuICAgICAgICAgICAgYXJyb3dVcDogMzgsXG4gICAgICAgICAgICBhcnJvd0Rvd246IDQwLFxuICAgICAgICAgICAgZW50ZXI6IDEzXG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gTW9kdWxlIG9iamVjdC5cbiAgICAgICAgY29uc3QgbW9kdWxlID0ge1xuICAgICAgICAgICAgYmluZGluZ3M6IHtpbnB1dDogZWxlbWVudHMuaW5wdXR9XG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gQ3VycmVudCBzZWxlY3RlZCBzZWFyY2ggYXJlYS5cbiAgICAgICAgbGV0IHNlYXJjaEFyZWEgPSBudWxsO1xuXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgICAgIC8vIEZVTkNUSU9OU1xuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBTZXRzIHRoZSBzZWFyY2ggYXJlYSBhbmQgYWN0aXZhdGVzIHRoZSByZXNwZWN0aXZlIGxpc3QgaXRlbSBlbGVtZW50LlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcGFyYW0ge1N0cmluZ30gYXJlYSBTZWFyY2ggYXJlYSBuYW1lLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX3NldFNlYXJjaEFyZWEoYXJlYSkge1xuICAgICAgICAgICAgLy8gQWN0aXZlIGxpc3QgaXRlbSBDU1MgY2xhc3MuXG4gICAgICAgICAgICBjb25zdCBhY3RpdmVDbGFzcyA9ICdhY3RpdmUnO1xuXG4gICAgICAgICAgICAvLyBTZXQgaW50ZXJuYWwgYXJlYSB2YWx1ZS5cbiAgICAgICAgICAgIHNlYXJjaEFyZWEgPSBhcmVhO1xuXG4gICAgICAgICAgICAvLyBTZXQgY2xhc3MuXG4gICAgICAgICAgICBlbGVtZW50cy5saXN0SXRlbXNcbiAgICAgICAgICAgICAgICAucmVtb3ZlQ2xhc3MoYWN0aXZlQ2xhc3MpXG4gICAgICAgICAgICAgICAgLmZpbHRlcihgbGlbZGF0YS1zZWFyY2gtYXJlYT1cIiR7YXJlYX1cIl1gKVxuICAgICAgICAgICAgICAgIC5hZGRDbGFzcyhhY3RpdmVDbGFzcyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyBldmVudCBmb3IgdGhlIGNsaWNrIGFjdGlvbiBvbiB0aGUgaW5wdXQgZmllbGQuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25JbnB1dENsaWNrKCkge1xuICAgICAgICAgICAgX2ZpbGxUZXJtSW5MaXN0SXRlbXMoKTtcbiAgICAgICAgICAgIF90b2dnbGVEcm9wZG93bih0cnVlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIGV2ZW50IGZvciB0aGUga2V5IHVwIHByZXNzIGFjdGlvbiB3aXRoaW4gdGhlIGlucHV0IGZpZWxkLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcGFyYW0ge2pRdWVyeS5FdmVudH0gZXZlbnQgRXZlbnQgZmlyZWQuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25JbnB1dEtleVVwKGV2ZW50KSB7XG4gICAgICAgICAgICBzd2l0Y2ggKGV2ZW50LndoaWNoKSB7XG4gICAgICAgICAgICAgICAgLy8gSGlkZSBzZWFyY2ggYmFyIG9uIGVzY2FwZSBrZXkuXG4gICAgICAgICAgICAgICAgY2FzZSBrZXlDb2Rlcy5lc2M6XG4gICAgICAgICAgICAgICAgICAgIF90b2dnbGVEcm9wZG93bihmYWxzZSk7XG4gICAgICAgICAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0LnRyaWdnZXIoJ2JsdXInKTtcbiAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG5cbiAgICAgICAgICAgICAgICAvLyBTdGFydCB0aGUgc2VhcmNoIG9uIHJldHVybiBrZXkuXG4gICAgICAgICAgICAgICAgY2FzZSBrZXlDb2Rlcy5lbnRlcjpcbiAgICAgICAgICAgICAgICAgICAgX3BlcmZvcm1TZWFyY2goKTtcbiAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG5cbiAgICAgICAgICAgICAgICAvLyBDeWNsZSBzZWxlY3Rpb24gdGhyb3VnaCBzZWFyY2ggZW50aXR5IGxpc3QgaXRlbXMgb24gdmVydGljYWwgYXJyb3cga2V5cy5cbiAgICAgICAgICAgICAgICBjYXNlIGtleUNvZGVzLmFycm93VXA6XG4gICAgICAgICAgICAgICAgY2FzZSBrZXlDb2Rlcy5hcnJvd0Rvd246XG4gICAgICAgICAgICAgICAgICAgIC8vIERpcmVjdGlvbi5cbiAgICAgICAgICAgICAgICAgICAgY29uc3QgaXNVcCA9IGV2ZW50LndoaWNoID09PSBrZXlDb2Rlcy5hcnJvd1VwO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIEN1cnJlbnQgc2VhcmNoIGFyZWEgbGlzdCBpdGVtXG4gICAgICAgICAgICAgICAgICAgIGNvbnN0ICRjdXJyZW50SXRlbSA9IGVsZW1lbnRzLmxpc3RJdGVtcy5maWx0ZXIoJy5hY3RpdmUnKTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBGaXJzdCBzZWFyY2ggYXJlYSBsaXN0IGl0ZW0uXG4gICAgICAgICAgICAgICAgICAgIGNvbnN0ICRmaXJzdEl0ZW0gPSBlbGVtZW50cy5saXN0SXRlbXMuZmlyc3QoKTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBMYXN0IHNlYXJjaCBhcmVhIGxpc3QgaXRlbS5cbiAgICAgICAgICAgICAgICAgICAgY29uc3QgJGxhc3RJdGVtID0gZWxlbWVudHMubGlzdEl0ZW1zLmxhc3QoKTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBEZXRlcm1pbmUgdGhlIG5leHQgc2VsZWN0ZWQgZWxlbWVudC5cbiAgICAgICAgICAgICAgICAgICAgbGV0ICRmb2xsb3dpbmdJdGVtID0gaXNVcCA/ICRjdXJyZW50SXRlbS5wcmV2KCkgOiAkY3VycmVudEl0ZW0ubmV4dCgpO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIElmIHRoZXJlIGlzIG5vIG5leHQgZWxlbWVudCwgdGhlbiB0aGUgZmlyc3QvbGFzdCBlbGVtZW50IGlzIHNlbGVjdGVkLlxuICAgICAgICAgICAgICAgICAgICBpZiAoISRmb2xsb3dpbmdJdGVtLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgJGZvbGxvd2luZ0l0ZW0gPSBpc1VwID8gJGxhc3RJdGVtIDogJGZpcnN0SXRlbTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIC8vIEZldGNoIHNlYXJjaCBhcmVhIGZyb20gbmV4dCBsaXN0IGl0ZW0uXG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGFyZWEgPSAkZm9sbG93aW5nSXRlbS5kYXRhKGF0dHJpYnV0ZXMuZGF0YS5zZWFyY2hBcmVhKTtcblxuICAgICAgICAgICAgICAgICAgICAvLyBTZXQgZW50aXR5IHZhbHVlIGFuZCBzZWxlY3QgZW50aXR5IG9uIHRoZSBsaXN0IGl0ZW0gYW5kIHNldCBwbGFjZWhvbGRlci5cbiAgICAgICAgICAgICAgICAgICAgX3NldFNlYXJjaEFyZWEoYXJlYSk7XG5cbiAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG5cbiAgICAgICAgICAgICAgICAvLyBGaWxsIHNlYXJjaCB0ZXJtIGludG8gZHJvcGRvd24gbGlzdCBpdGVtcyBvbiBsZXR0ZXIga2V5cHJlc3MuXG4gICAgICAgICAgICAgICAgZGVmYXVsdDpcbiAgICAgICAgICAgICAgICAgICAgaWYoJChlbGVtZW50cy5pbnB1dCkudmFsKCkubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLnBhcmVudCgpLmFkZENsYXNzKCdzZWFyY2hpbmcnKTtcbiAgICAgICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQodGhpcykucGFyZW50KCkucmVtb3ZlQ2xhc3MoJ3NlYXJjaGluZycpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIF90b2dnbGVEcm9wZG93bih0cnVlKTtcbiAgICAgICAgICAgICAgICAgICAgX2ZpbGxUZXJtSW5MaXN0SXRlbXMoKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIGV2ZW50IGZvciB0aGUgY2xpY2sgYWN0aW9uIG91dHNpZGUgb2YgdGhlIGNvbnRyb2xsZXIgYXJlYS5cbiAgICAgICAgICpcbiAgICAgICAgICogQHBhcmFtIHtqUXVlcnkuRXZlbnR9IGV2ZW50IEV2ZW50IGZpcmVkLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uT3V0c2lkZUNsaWNrKGV2ZW50KSB7XG4gICAgICAgICAgICAvLyBDbGlja2VkIHRhcmdldCBlbGVtZW50LlxuICAgICAgICAgICAgY29uc3QgJHRhcmdldCA9IGV2ZW50LnRhcmdldDtcblxuICAgICAgICAgICAgLy8gVGFyZ2V0IGVsZW1lbnQgdmVyaWZpZXJzLlxuICAgICAgICAgICAgY29uc3QgaXNOb3RUYXJnZXRTZWFyY2hBcmVhID0gISR0aGlzLmhhcygkdGFyZ2V0KS5sZW5ndGg7XG4gICAgICAgICAgICBjb25zdCBpc05vdFRhcmdldFNlYXJjaEJ1dHRvbiA9ICFlbGVtZW50cy5idXR0b24uaGFzKCR0YXJnZXQpLmxlbmd0aDtcblxuICAgICAgICAgICAgLy8gQ2xlYXIgdGhlIHBsYWNlaG9sZGVyIGFuZCBoaWRlIGRyb3Bkb3duLFxuICAgICAgICAgICAgLy8gaWYgY2xpY2tlZCB0YXJnZXQgaXMgbm90IHdpdGhpbiBzZWFyY2ggYXJlYS5cbiAgICAgICAgICAgIGlmIChpc05vdFRhcmdldFNlYXJjaEFyZWEgJiYgaXNOb3RUYXJnZXRTZWFyY2hCdXR0b24pIHtcbiAgICAgICAgICAgICAgICBfdG9nZ2xlRHJvcGRvd24oZmFsc2UpO1xuICAgICAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0LnRyaWdnZXIoJ2JsdXInKTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIGV2ZW50IGZvciB0aGUgY2xpY2sgYWN0aW9uIG9uIGEgZHJvcGRvd24gbGlzdCBpdGVtLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcGFyYW0ge2pRdWVyeS5FdmVudH0gZXZlbnQgRXZlbnQgZmlyZWQuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfb25MaXN0Q2xpY2soZXZlbnQpIHtcbiAgICAgICAgICAgIC8vIEdldCBlbnRpdHkgZnJvbSBsaXN0IGl0ZW0uXG4gICAgICAgICAgICBjb25zdCBhcmVhID0gJChldmVudC5jdXJyZW50VGFyZ2V0KS5kYXRhKGF0dHJpYnV0ZXMuZGF0YS5zZWFyY2hBcmVhKTtcblxuICAgICAgICAgICAgX3NldFNlYXJjaEFyZWEoYXJlYSk7XG4gICAgICAgICAgICBfcGVyZm9ybVNlYXJjaCgpO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIEhhbmRsZXMgZXZlbnQgZm9yIHRoZSBidXR0b24gY2xpY2sgYWN0aW9uLlxuICAgICAgICAgKlxuICAgICAgICAgKiBAcHJpdmF0ZVxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uQnV0dG9uQ2xpY2soKSB7XG4gICAgICAgICAgICAvLyBQcm94eSBjbGljayBhbmQgZm9jdXMgdG8gdGhlIHNlYXJjaCBpbnB1dCBmaWVsZC5cbiAgICAgICAgICAgIGVsZW1lbnRzLmlucHV0XG4gICAgICAgICAgICAgICAgLnRyaWdnZXIoJ2NsaWNrJylcbiAgICAgICAgICAgICAgICAudHJpZ2dlcignZm9jdXMnKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIGV2ZW50IGZvciB3aW5kb3cgaW5hY3RpdmF0aW9uLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uV2luZG93Qmx1cigpIHtcbiAgICAgICAgICAgIF90b2dnbGVEcm9wZG93bihmYWxzZSk7XG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dC50cmlnZ2VyKCdibHVyJyk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogSGFuZGxlcyB0aGUgc2V0IGlucHV0IHZhbHVlIGN1c3RvbSBldmVudCBtZXRob2QuXG4gICAgICAgICAqXG4gICAgICAgICAqIEBwYXJhbSB7alF1ZXJ5LkV2ZW50fSBldmVudCBUcmlnZ2VyZWQgZXZlbnQuXG4gICAgICAgICAqIEBwYXJhbSB7U3RyaW5nfSB2YWx1ZSBEZXNpcmVkIGlucHV0IHZhbHVlLlxuICAgICAgICAgKiBAcGFyYW0ge0Jvb2xlYW59IGRvRm9jdXMgRG8gZm9jdXMgb24gdGhlIGlucHV0IGZpZWxkP1xuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX29uU2V0VmFsdWUoZXZlbnQsIHZhbHVlKSB7XG4gICAgICAgICAgICAvLyBTZXQgYWRtaW4gc2VhcmNoIGlucHV0IHZhbHVlLlxuICAgICAgICAgICAgZWxlbWVudHMuaW5wdXRcbiAgICAgICAgICAgICAgICAudmFsKHZhbHVlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBIYW5kbGVzIEpTRW5naW5lIGZpbmlzaCBldmVudC5cbiAgICAgICAgICovXG4gICAgICAgIGZ1bmN0aW9uIF9vbkVuZ2luZUZpbmlzaGVkKCkge1xuICAgICAgICAgICAgLy8gU2V0IHNlYXJjaCBlbnRpdHkuXG4gICAgICAgICAgICBfc2V0U2VhcmNoQXJlYShvcHRpb25zLnJlY2VudFNlYXJjaEFyZWEpO1xuICAgICAgICB9XG5cbiAgICAgICAgLyoqXG4gICAgICAgICAqIFByZXBlbmRzIHRoZSBjdXJyZW50IHNlYXJjaCB0ZXJtIGludG8gdGhlIGRyb3Bkb3duIGxpc3QgaXRlbXMuXG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfZmlsbFRlcm1Jbkxpc3RJdGVtcygpIHtcbiAgICAgICAgICAgIGVsZW1lbnRzLmxpc3RcbiAgICAgICAgICAgICAgICAuZmluZChzZWxlY3RvcnMucGxhY2Vob2xkZXIpXG4gICAgICAgICAgICAgICAgLmVhY2goKGluZGV4LCBlbGVtZW50KSA9PiAkKGVsZW1lbnQpLnRleHQobW9kdWxlLmJpbmRpbmdzLmlucHV0LmdldCgpKSk7XG4gICAgICAgIH1cblxuICAgICAgICAvKipcbiAgICAgICAgICogU2hvd3MgYW5kIGhpZGVzIHRoZSBkcm9wZG93bi5cbiAgICAgICAgICpcbiAgICAgICAgICogQHBhcmFtIHtCb29sZWFufSBkb1Nob3cgU2hvdyB0aGUgZHJvcGRvd24/XG4gICAgICAgICAqL1xuICAgICAgICBmdW5jdGlvbiBfdG9nZ2xlRHJvcGRvd24oZG9TaG93KSB7XG4gICAgICAgICAgICAvLyBDbGFzcyBmb3IgdmlzaWJsZSBkcm9wZG93bi5cbiAgICAgICAgICAgIGNvbnN0IEFDVElWRV9DTEFTUyA9ICdhY3RpdmUnO1xuXG4gICAgICAgICAgICAvLyBUb2dnbGUgZHJvcGRvd24gZGVwZW5kZW50IG9uIHRoZSBwcm92aWRlZCBib29sZWFuIHZhbHVlLlxuICAgICAgICAgICAgZWxlbWVudHMubGlzdFtkb1Nob3cgPyAnYWRkQ2xhc3MnIDogJ3JlbW92ZUNsYXNzJ10oQUNUSVZFX0NMQVNTKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBTYXZlcyB0aGUgc2VhcmNoIGVudGl0eSB0byB0aGUgdXNlciBjb25maWd1cmF0aW9uIGFuZCBwZXJmb3JtcyB0aGUgc2VhcmNoLlxuICAgICAgICAgKi9cbiAgICAgICAgZnVuY3Rpb24gX3BlcmZvcm1TZWFyY2goKSB7XG4gICAgICAgICAgICAvLyBTZXQgZGVmYXVsdCBzZWFyY2ggYXJlYSBpZiBub24gcHJvdmlkZWQuXG4gICAgICAgICAgICBzZWFyY2hBcmVhID0gc2VhcmNoQXJlYSB8fCBkZWZhdWx0cy5yZWNlbnRTZWFyY2hBcmVhO1xuXG4gICAgICAgICAgICAvLyBDaGVjayBzZWFyY2ggYXJlYSBVUkwgYXZhaWxhYmlsaXR5LlxuICAgICAgICAgICAgaWYgKCFPYmplY3Qua2V5cyhqc2UubGlicy5zZWFyY2gudXJscykuaW5jbHVkZXMoc2VhcmNoQXJlYSkpIHtcbiAgICAgICAgICAgICAgICB0aHJvdyBuZXcgRXJyb3IoYE5vIFVSTCBmb3Igc2VhcmNoIGFyZWEgXCIke3NlYXJjaEFyZWF9XCIgZm91bmQuYCk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC8vIERpc3BsYXkgbG9hZGluZyBzcGlubmVyLlxuICAgICAgICAgICAgY29uc3QgJHNwaW5uZXIgPSBqc2UubGlicy5sb2FkaW5nX3NwaW5uZXIuc2hvdyhlbGVtZW50cy5saXN0LCAnOTk5OScpO1xuXG4gICAgICAgICAgICAvLyBDb21wb3NlIHNlYXJjaCBVUkwgd2l0aCBzZWFyY2ggdGVybS5cbiAgICAgICAgICAgIGNvbnN0IHVybCA9IGpzZS5saWJzLnNlYXJjaC51cmxzW3NlYXJjaEFyZWFdICsgZW5jb2RlVVJJQ29tcG9uZW50KG1vZHVsZS5iaW5kaW5ncy5pbnB1dC5nZXQoKSk7XG5cbiAgICAgICAgICAgIC8vIFNhdmUgc2VsZWN0ZWQgZW50aXR5IHRvIHNlcnZlciB2aWEgdXNlciBjb25maWd1cmF0aW9uIHNlcnZpY2UuXG4gICAgICAgICAgICBqc2UubGlicy51c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZS5zZXQoe1xuICAgICAgICAgICAgICAgIGRhdGE6IHtcbiAgICAgICAgICAgICAgICAgICAgdXNlcklkOiBqc2UuY29yZS5yZWdpc3RyeS5nZXQoJ3VzZXJJZCcpLFxuICAgICAgICAgICAgICAgICAgICBjb25maWd1cmF0aW9uS2V5OiBqc2UubGlicy5zZWFyY2guY29uZmlndXJhdGlvbktleSxcbiAgICAgICAgICAgICAgICAgICAgY29uZmlndXJhdGlvblZhbHVlOiBzZWFyY2hBcmVhXG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICBvblN1Y2Nlc3MoKSB7XG4gICAgICAgICAgICAgICAgICAgIHdpbmRvdy5vcGVuKHVybCwgKHNlYXJjaEFyZWEgIT09ICdtYW51YWwnICYmIHNlYXJjaEFyZWEgIT09ICdmb3J1bScpID8gb3B0aW9ucy5vcGVuTW9kZSA6ICdfYmxhbmsnKTtcbiAgICAgICAgICAgICAgICAgICAganNlLmxpYnMubG9hZGluZ19zcGlubmVyLmhpZGUoJHNwaW5uZXIpO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgb25FcnJvcigpIHtcbiAgICAgICAgICAgICAgICAgICAgd2luZG93Lm9wZW4odXJsLCAoc2VhcmNoQXJlYSAhPT0gJ21hbnVhbCcgJiYgc2VhcmNoQXJlYSAhPT0gJ2ZvcnVtJykgPyBvcHRpb25zLm9wZW5Nb2RlIDogJ19ibGFuaycpO1xuICAgICAgICAgICAgICAgICAgICBqc2UubGlicy5sb2FkaW5nX3NwaW5uZXIuaGlkZSgkc3Bpbm5lcik7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cbiAgICAgICAgXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgICAgIC8vIElOSVRJQUxJWkFUSU9OXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgICAgICAgbW9kdWxlLmluaXQgPSBkb25lID0+IHtcbiAgICAgICAgICAgIC8vIEJpbmQgbGlzdCBpdGVtIGV2ZW50IGhhbmRsZXIuXG4gICAgICAgICAgICBlbGVtZW50cy5saXN0SXRlbXMub24oJ2NsaWNrJywgX29uTGlzdENsaWNrKTtcblxuICAgICAgICAgICAgLy8gQmluZCBidXR0b24gZXZlbnQgaGFuZGxlci5cbiAgICAgICAgICAgIGVsZW1lbnRzLmJ1dHRvbi5vbignY2xpY2snLCBfb25CdXR0b25DbGljayk7XG5cbiAgICAgICAgICAgIC8vIEJpbmQgaW5wdXQgZXZlbnQgaGFuZGxlcnMuXG4gICAgICAgICAgICBlbGVtZW50cy5pbnB1dFxuICAgICAgICAgICAgICAgIC5vbignY2xpY2snLCBfb25JbnB1dENsaWNrKVxuICAgICAgICAgICAgICAgIC5vbigna2V5dXAnLCBfb25JbnB1dEtleVVwKTtcblxuICAgICAgICAgICAgLy8gQmluZCB3aW5kb3cgZXZlbnQgaGFuZGxlcnMuXG4gICAgICAgICAgICAkKHdpbmRvdylcbiAgICAgICAgICAgICAgICAub24oJ2NsaWNrJywgX29uT3V0c2lkZUNsaWNrKVxuICAgICAgICAgICAgICAgIC5vbignYmx1cicsIF9vbldpbmRvd0JsdXIpO1xuXG4gICAgICAgICAgICAvLyBCaW5kIHNldCBpbnB1dCB2YWx1ZSBldmVudCBoYW5kbGVyLlxuICAgICAgICAgICAgJHRoaXMub24oJ3NldDp2YWx1ZScsIF9vblNldFZhbHVlKTtcblxuICAgICAgICAgICAgLy8gQmluZCBKU0VuZ2luZSByZWFkeSBzdGF0ZSBldmVudCBoYW5kbGVyLlxuICAgICAgICAgICAgJChkb2N1bWVudCkub24oJ0pTRU5HSU5FX0lOSVRfRklOSVNIRUQnLCBfb25FbmdpbmVGaW5pc2hlZCk7XG5cbiAgICAgICAgICAgIC8vIEZpbmlzaCBpbml0aWFsaXphdGlvbi5cbiAgICAgICAgICAgIGRvbmUoKTtcbiAgICAgICAgfTtcblxuICAgICAgICByZXR1cm4gbW9kdWxlO1xuICAgIH0pO1xuIl19
