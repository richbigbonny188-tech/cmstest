'use strict';

/* --------------------------------------------------------------
 admin_search.js 2024-01-10
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2024 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * ## Admin Search Extension
 *
 * Extension for search in orders, customers and categories in the admin panel
 *
 * @module Admin/Extension/admin_search
 * @requires jQueryUI
 * @ignore
 */
gx.extensions.module('admin_search', ['user_configuration_service', 'url_arguments', 'loading_spinner'], function (data) {

    'use strict';

    // ------------------------------------------------------------------------
    // VARIABLE DEFINITION
    // ------------------------------------------------------------------------

    // Elements.

    var $this = $(this),
        $button = $(data.button),
        $dropdown = $('ul.searchable:first'),
        recentSearch = $.trim(decodeURIComponent(jse.libs.url_arguments.getUrlParameters(location.href).search || ''));

    // Current search area.
    var searchArea;

    // Text labels.
    var labels = {
        searchIn: jse.core.lang.translate('admin_search_in_label', 'admin_labels'),
        searchInAlternative: jse.core.lang.translate('admin_search_in_label_alternative', 'admin_labels'),
        orders: jse.core.lang.translate('admin_search_orders', 'admin_labels'),
        invoices: jse.core.lang.translate('admin_search_invoices', 'admin_labels'),
        customers: jse.core.lang.translate('admin_search_customers', 'admin_labels'),
        categories: jse.core.lang.translate('admin_search_categories', 'admin_labels'),
        configurations: jse.core.lang.translate('admin_search_configurations', 'admin_labels'),
        manual: jse.core.lang.translate('admin_search_manual', 'admin_labels'),
        forum: jse.core.lang.translate('admin_search_forum', 'admin_labels')
    };

    // Key code map.
    var keyMap = {
        ESC: 27,
        ARROW_UP: 38,
        ARROW_DOWN: 40,
        ENTER: 13
    };

    // Library access shortcuts.
    var userConfigurationService = jse.libs.user_configuration_service,
        urlArguments = jse.libs.url_arguments;

    // Configuration settings for UserConfigurationService.
    var configurationContainer = {
        userId: data.customer_id,
        configurationKey: 'recent_search_area'
    };

    // Module object (JSEngine).
    var module = {};

    // ------------------------------------------------------------------------
    // METHODS
    // ------------------------------------------------------------------------

    /**
     * Refreshes the search area variable
     *
     * Shows the new search area in the button
     * @private
     */
    var _refreshSearchArea = function _refreshSearchArea() {
        // Abort if no new search area is provided
        if (!$('.search-item.active').length) {
            console.error('No active list item!');
        }

        // Assign new search area
        searchArea = $('.search-item.active').data('searchArea');
        $this.trigger('refresh:search-area');
    };

    // ------------------------------------------------------------------------
    // INITIALIZATION
    // ------------------------------------------------------------------------

    var _initializeInput = function _initializeInput() {

        // Click event
        $this.parent('*').on('click', function () {
            $this.trigger('refresh:search-area');
            if ($this.val() === '') {
                $this.val(recentSearch);
            }
            $dropdown.trigger('show:dropdown');
            $this.trigger('focus');
        });

        // Keyboard events
        $this.on('keyup', function (event) {
            switch (event.which) {

                // Perform search if enter key is pressed
                case keyMap.ENTER:
                    $this.trigger('perform:search');
                    break;

                // Close dropdown if escape key is pressed
                case keyMap.ESC:
                    $dropdown.trigger('hide:dropdown');
                    return;

                // Navigate up in dropdown
                case keyMap.ARROW_UP:
                    $dropdown.trigger('select:item:previous');
                    break;
                case keyMap.ARROW_DOWN:
                    $dropdown.trigger('select:item:next');
                    break;
            }
            $dropdown.trigger('refresh:search-item');
        });

        // Search events
        $this.on('perform:search', function () {
            var inputValue = encodeURIComponent($this.val()),
                openMode = '_self',
                url;

            switch (searchArea) {
                case 'customers':
                    url = ['customers', '?search=', inputValue].join('');
                    break;
                case 'categories':
                    url = ['categories.php', '?search=', inputValue].join('');
                    break;
                case 'configurations':
                    url = ['configurations', '?query=', inputValue].join('');
                    break;
                case 'orders':
                    url = ['admin.php', '?', $.param({
                        do: 'OrdersOverview',
                        filter: {
                            number: inputValue
                        }
                    })].join('');
                    break;
                case 'invoices':
                    url = ['admin.php', '?', $.param({
                        do: 'InvoicesOverview',
                        filter: {
                            invoiceNumber: inputValue
                        }
                    })].join('');
                    break;
                case 'manual':
                    url = ['admin.php', '?', $.param({
                        do: 'DirectHelpProxy/GoToManual',
                        search: inputValue
                    })].join('');
                    openMode = '_blank';
                    $dropdown.trigger('hide:dropdown');
                    break;
                case 'forum':
                    url = ['admin.php', '?', $.param({
                        do: 'DirectHelpProxy/GoToForum',
                        number: Math.floor(Math.random() * 99999999 + 1),
                        search: inputValue
                    })].join('');
                    openMode = '_blank';
                    $dropdown.trigger('hide:dropdown');
                    break;
            }

            // Display loading spinner.
            var $spinner = jse.libs.loading_spinner.show($dropdown, '9999');

            userConfigurationService.set({
                data: $.extend(configurationContainer, {
                    configurationValue: searchArea
                }),
                onSuccess: function onSuccess() {
                    window.open(url, openMode);
                    jse.libs.loading_spinner.hide($spinner);
                },
                onError: function onError() {
                    window.open(url, openMode);
                    jse.libs.loading_spinner.hide($spinner);
                }
            });
        });

        // Remove placeholder when input is inactive
        $this.on('blur', function () {
            $dropdown.trigger('hide:dropdown');
        });
    };

    var _initializeButton = function _initializeButton() {
        $button.on('click', function () {
            $this.trigger('refresh:search-area');
            $this.val(recentSearch);
            $dropdown.trigger('show:dropdown');
            $this.trigger('focus');
        });
    };

    var _initializeDropdown = function _initializeDropdown() {
        // Select item
        $dropdown.on('select:item', function () {
            $dropdown.find('li[data-search-area=' + searchArea + ']').addClass('active');
        });

        // Show event
        $dropdown.on('show:dropdown', function () {
            $dropdown.fadeIn();
            $dropdown.trigger('select:item');
            $dropdown.trigger('refresh:search-item');
        });

        // Select first item
        $dropdown.on('select:item:first', function () {
            var $activeListItem = $dropdown.find('li.search-item.active');
            var $firstListItem = $dropdown.find('li.search-item:first');
            $activeListItem.removeClass('active');
            $firstListItem.addClass('active');
            _refreshSearchArea();
            $dropdown.trigger('select:item');
        });

        $dropdown.on('select:item:last', function () {
            var $activeListItem = $dropdown.find('li.search-item.active');
            var $lastListItem = $dropdown.find('li.search-item:last');
            $activeListItem.removeClass('active');
            $lastListItem.addClass('active');
            _refreshSearchArea();
            $dropdown.trigger('select:item');
        });

        // Select previous item event
        $dropdown.on('select:item:previous', function () {
            var $activeListItem = $dropdown.find('li.search-item.active');
            var $prev = $activeListItem.prev();

            if ($prev.length) {
                $activeListItem.removeClass('active');
                $prev.addClass('active');
                _refreshSearchArea();
                $dropdown.trigger('select:item');
            } else {
                $dropdown.trigger('select:item:last');
            }
        });

        // Select previous item event
        $dropdown.on('select:item:next', function () {
            var $activeListItem = $dropdown.find('li.search-item.active');
            var $next = $activeListItem.next();

            if ($next.length) {
                $activeListItem.removeClass('active');
                $next.addClass('active');
                _refreshSearchArea();
                $dropdown.trigger('select:item');
            } else {
                $dropdown.trigger('select:item:first');
            }
        });

        // Hide event
        $dropdown.on('hide:dropdown', function () {
            $dropdown.fadeOut();
        });

        // Item click event
        $dropdown.on('click', function (event) {
            event.stopPropagation();

            $dropdown.find('li').removeClass('active');

            var $elementToActivate = $(event.target).is('span') ? $(event.target).parents('li:first') : $(event.target);

            $elementToActivate.addClass('active');

            _refreshSearchArea();
            $dropdown.trigger('hide:dropdown');
            $this.trigger('perform:search');
        });

        // Item search event
        $dropdown.on('refresh:search-item', function () {
            $('.search-item').each(function () {
                // Update search query
                $(this).find('.search-query-item').text($this.val());

                // Update search description
                var searchAreaText = [labels.searchIn, labels[$(this).data('searchArea')]].join(' ');

                if ($(this).attr('data-search-area') === 'manual' || $(this).attr('data-search-area') === 'forum') {
                    searchAreaText = [labels.searchInAlternative, labels[$(this).data('searchArea')]].join(' ');
                }

                $(this).find('.search-query-description').text(searchAreaText);
            });
        });
    };

    var _initializeRecentSearch = function _initializeRecentSearch() {
        $(document).on('JSENGINE_INIT_FINISHED', function () {
            if (recentSearch != '') {
                $this.prop('value', recentSearch);
                $dropdown.trigger('refresh:search-item');
            }
        });
    };

    /**
     * Initialize method of the extension, called by the engine.
     */
    module.init = function (done) {
        _initializeInput();
        _initializeDropdown();
        _initializeButton();
        _initializeRecentSearch();

        searchArea = data.recentSearchArea || 'categories';
        $dropdown.trigger('select:item');

        done();
    };

    // Return data to module engine.
    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFkbWluX3NlYXJjaC5qcyJdLCJuYW1lcyI6WyJneCIsImV4dGVuc2lvbnMiLCJtb2R1bGUiLCJkYXRhIiwiJHRoaXMiLCIkIiwiJGJ1dHRvbiIsImJ1dHRvbiIsIiRkcm9wZG93biIsInJlY2VudFNlYXJjaCIsInRyaW0iLCJkZWNvZGVVUklDb21wb25lbnQiLCJqc2UiLCJsaWJzIiwidXJsX2FyZ3VtZW50cyIsImdldFVybFBhcmFtZXRlcnMiLCJsb2NhdGlvbiIsImhyZWYiLCJzZWFyY2giLCJzZWFyY2hBcmVhIiwibGFiZWxzIiwic2VhcmNoSW4iLCJjb3JlIiwibGFuZyIsInRyYW5zbGF0ZSIsInNlYXJjaEluQWx0ZXJuYXRpdmUiLCJvcmRlcnMiLCJpbnZvaWNlcyIsImN1c3RvbWVycyIsImNhdGVnb3JpZXMiLCJjb25maWd1cmF0aW9ucyIsIm1hbnVhbCIsImZvcnVtIiwia2V5TWFwIiwiRVNDIiwiQVJST1dfVVAiLCJBUlJPV19ET1dOIiwiRU5URVIiLCJ1c2VyQ29uZmlndXJhdGlvblNlcnZpY2UiLCJ1c2VyX2NvbmZpZ3VyYXRpb25fc2VydmljZSIsInVybEFyZ3VtZW50cyIsImNvbmZpZ3VyYXRpb25Db250YWluZXIiLCJ1c2VySWQiLCJjdXN0b21lcl9pZCIsImNvbmZpZ3VyYXRpb25LZXkiLCJfcmVmcmVzaFNlYXJjaEFyZWEiLCJsZW5ndGgiLCJjb25zb2xlIiwiZXJyb3IiLCJ0cmlnZ2VyIiwiX2luaXRpYWxpemVJbnB1dCIsInBhcmVudCIsIm9uIiwidmFsIiwiZXZlbnQiLCJ3aGljaCIsImlucHV0VmFsdWUiLCJlbmNvZGVVUklDb21wb25lbnQiLCJvcGVuTW9kZSIsInVybCIsImpvaW4iLCJwYXJhbSIsImRvIiwiZmlsdGVyIiwibnVtYmVyIiwiaW52b2ljZU51bWJlciIsIk1hdGgiLCJmbG9vciIsInJhbmRvbSIsIiRzcGlubmVyIiwibG9hZGluZ19zcGlubmVyIiwic2hvdyIsInNldCIsImV4dGVuZCIsImNvbmZpZ3VyYXRpb25WYWx1ZSIsIm9uU3VjY2VzcyIsIndpbmRvdyIsIm9wZW4iLCJoaWRlIiwib25FcnJvciIsIl9pbml0aWFsaXplQnV0dG9uIiwiX2luaXRpYWxpemVEcm9wZG93biIsImZpbmQiLCJhZGRDbGFzcyIsImZhZGVJbiIsIiRhY3RpdmVMaXN0SXRlbSIsIiRmaXJzdExpc3RJdGVtIiwicmVtb3ZlQ2xhc3MiLCIkbGFzdExpc3RJdGVtIiwiJHByZXYiLCJwcmV2IiwiJG5leHQiLCJuZXh0IiwiZmFkZU91dCIsInN0b3BQcm9wYWdhdGlvbiIsIiRlbGVtZW50VG9BY3RpdmF0ZSIsInRhcmdldCIsImlzIiwicGFyZW50cyIsImVhY2giLCJ0ZXh0Iiwic2VhcmNoQXJlYVRleHQiLCJhdHRyIiwiX2luaXRpYWxpemVSZWNlbnRTZWFyY2giLCJkb2N1bWVudCIsInByb3AiLCJpbml0IiwiZG9uZSIsInJlY2VudFNlYXJjaEFyZWEiXSwibWFwcGluZ3MiOiI7O0FBQUE7Ozs7Ozs7Ozs7QUFVQTs7Ozs7Ozs7O0FBU0FBLEdBQUdDLFVBQUgsQ0FBY0MsTUFBZCxDQUNJLGNBREosRUFHSSxDQUFDLDRCQUFELEVBQStCLGVBQS9CLEVBQWdELGlCQUFoRCxDQUhKLEVBS0ksVUFBVUMsSUFBVixFQUFnQjs7QUFFWjs7QUFFQTtBQUNBO0FBQ0E7O0FBRUE7O0FBQ0EsUUFBSUMsUUFBUUMsRUFBRSxJQUFGLENBQVo7QUFBQSxRQUNJQyxVQUFVRCxFQUFFRixLQUFLSSxNQUFQLENBRGQ7QUFBQSxRQUVJQyxZQUFZSCxFQUFFLHFCQUFGLENBRmhCO0FBQUEsUUFHSUksZUFBZUosRUFBRUssSUFBRixDQUFPQyxtQkFBbUJDLElBQUlDLElBQUosQ0FBU0MsYUFBVCxDQUF1QkMsZ0JBQXZCLENBQXdDQyxTQUFTQyxJQUFqRCxFQUF1REMsTUFBdkQsSUFBaUUsRUFBcEYsQ0FBUCxDQUhuQjs7QUFLQTtBQUNBLFFBQUlDLFVBQUo7O0FBRUE7QUFDQSxRQUFJQyxTQUFTO0FBQ1RDLGtCQUFVVCxJQUFJVSxJQUFKLENBQVNDLElBQVQsQ0FB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QWIsTUFBcUMsUUFBckMsSUFBaURqRyxFQUFFLElBQUYsRUFBUWlHLElBQVIsQ0FBYSxrQkFBYixNQUFxQyxPQUExRixFQUFtRztBQUMvRkQscUNBQWlCLENBQ2JqRixPQUFPSyxtQkFETSxFQUViTCxPQUFPZixFQUFFLElBQUYsRUFBUUYsSUFBUixDQUFhLFlBQWIsQ0FBUCxDQUZhLEVBR2Z5RCxJQUhlLENBR1YsR0FIVSxDQUFqQjtBQUlIOztBQUVEdkQsa0JBQUUsSUFBRixFQUNLNkUsSUFETCxDQUNVLDJCQURWLEVBRUtrQixJQUZMLENBRVVDLGNBRlY7QUFHSCxhQXRCRDtBQXVCSCxTQXhCRDtBQXlCSCxLQW5IRDs7QUFxSEEsUUFBSUUsMEJBQTBCLFNBQTFCQSx1QkFBMEIsR0FBWTtBQUN0Q2xHLFVBQUVtRyxRQUFGLEVBQVlwRCxFQUFaLENBQWUsd0JBQWYsRUFBeUMsWUFBWTtBQUNqRCxnQkFBSTNDLGdCQUFnQixFQUFwQixFQUF3QjtBQUNwQkwsc0JBQU1xRyxJQUFOLENBQVcsT0FBWCxFQUFvQmhHLFlBQXBCO0FBQ0FELDBCQUFVeUMsT0FBVixDQUFrQixxQkFBbEI7QUFDSDtBQUNKLFNBTEQ7QUFNSCxLQVBEOztBQVNBOzs7QUFHQS9DLFdBQU93RyxJQUFQLEdBQWMsVUFBVUMsSUFBVixFQUFnQjtBQUMxQnpEO0FBQ0ErQjtBQUNBRDtBQUNBdUI7O0FBRUFwRixxQkFBYWhCLEtBQUt5RyxnQkFBTCxJQUF5QixZQUF0QztBQUNBcEcsa0JBQVV5QyxPQUFWLENBQWtCLGFBQWxCOztBQUVBMEQ7QUFDSCxLQVZEOztBQVlBO0FBQ0EsV0FBT3pHLE1BQVA7QUFDSCxDQWxYTCIsImZpbGUiOiJhZG1pbl9zZWFyY2guanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuIGFkbWluX3NlYXJjaC5qcyAyMDI0LTAxLTEwXG4gR2FtYmlvIEdtYkhcbiBodHRwOi8vd3d3LmdhbWJpby5kZVxuIENvcHlyaWdodCAoYykgMjAyNCBHYW1iaW8gR21iSFxuIFJlbGVhc2VkIHVuZGVyIHRoZSBHTlUgR2VuZXJhbCBQdWJsaWMgTGljZW5zZSAoVmVyc2lvbiAyKVxuIFtodHRwOi8vd3d3LmdudS5vcmcvbGljZW5zZXMvZ3BsLTIuMC5odG1sXVxuIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gKi9cblxuLyoqXG4gKiAjIyBBZG1pbiBTZWFyY2ggRXh0ZW5zaW9uXG4gKlxuICogRXh0ZW5zaW9uIGZvciBzZWFyY2ggaW4gb3JkZXJzLCBjdXN0b21lcnMgYW5kIGNhdGVnb3JpZXMgaW4gdGhlIGFkbWluIHBhbmVsXG4gKlxuICogQG1vZHVsZSBBZG1pbi9FeHRlbnNpb24vYWRtaW5fc2VhcmNoXG4gKiBAcmVxdWlyZXMgalF1ZXJ5VUlcbiAqIEBpZ25vcmVcbiAqL1xuZ3guZXh0ZW5zaW9ucy5tb2R1bGUoXG4gICAgJ2FkbWluX3NlYXJjaCcsXG5cbiAgICBbJ3VzZXJfY29uZmlndXJhdGlvbl9zZXJ2aWNlJywgJ3VybF9hcmd1bWVudHMnLCAnbG9hZGluZ19zcGlubmVyJ10sXG5cbiAgICBmdW5jdGlvbiAoZGF0YSkge1xuXG4gICAgICAgICd1c2Ugc3RyaWN0JztcblxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gVkFSSUFCTEUgREVGSU5JVElPTlxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAgICAgICAvLyBFbGVtZW50cy5cbiAgICAgICAgdmFyICR0aGlzID0gJCh0aGlzKSxcbiAgICAgICAgICAgICRidXR0b24gPSAkKGRhdGEuYnV0dG9uKSxcbiAgICAgICAgICAgICRkcm9wZG93biA9ICQoJ3VsLnNlYXJjaGFibGU6Zmlyc3QnKSxcbiAgICAgICAgICAgIHJlY2VudFNlYXJjaCA9ICQudHJpbShkZWNvZGVVUklDb21wb25lbnQoanNlLmxpYnMudXJsX2FyZ3VtZW50cy5nZXRVcmxQYXJhbWV0ZXJzKGxvY2F0aW9uLmhyZWYpLnNlYXJjaCB8fCAnJykpO1xuXG4gICAgICAgIC8vIEN1cnJlbnQgc2VhcmNoIGFyZWEuXG4gICAgICAgIHZhciBzZWFyY2hBcmVhO1xuXG4gICAgICAgIC8vIFRleHQgbGFiZWxzLlxuICAgICAgICB2YXIgbGFiZWxzID0ge1xuICAgICAgICAgICAgc2VhcmNoSW46IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdhZG1pbl9zZWFyY2hfaW5fbGFiZWwnLCAnYWRtaW5fbGFiZWxzJyksXG4gICAgICAgICAgICBzZWFyY2hJbkFsdGVybmF0aXZlOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX2luX2xhYmVsX2FsdGVybmF0aXZlJywgJ2FkbWluX2xhYmVscycpLFxuICAgICAgICAgICAgb3JkZXJzOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX29yZGVycycsICdhZG1pbl9sYWJlbHMnKSxcbiAgICAgICAgICAgIGludm9pY2VzOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX2ludm9pY2VzJywgJ2FkbWluX2xhYmVscycpLFxuICAgICAgICAgICAgY3VzdG9tZXJzOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX2N1c3RvbWVycycsICdhZG1pbl9sYWJlbHMnKSxcbiAgICAgICAgICAgIGNhdGVnb3JpZXM6IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdhZG1pbl9zZWFyY2hfY2F0ZWdvcmllcycsICdhZG1pbl9sYWJlbHMnKSxcbiAgICAgICAgICAgIGNvbmZpZ3VyYXRpb25zOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX2NvbmZpZ3VyYXRpb25zJywgJ2FkbWluX2xhYmVscycpLFxuICAgICAgICAgICAgbWFudWFsOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX21hbnVhbCcsICdhZG1pbl9sYWJlbHMnKSxcbiAgICAgICAgICAgIGZvcnVtOiBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnYWRtaW5fc2VhcmNoX2ZvcnVtJywgJ2FkbWluX2xhYmVscycpLFxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEtleSBjb2RlIG1hcC5cbiAgICAgICAgdmFyIGtleU1hcCA9IHtcbiAgICAgICAgICAgIEVTQzogMjcsXG4gICAgICAgICAgICBBUlJPV19VUDogMzgsXG4gICAgICAgICAgICBBUlJPV19ET1dOOiA0MCxcbiAgICAgICAgICAgIEVOVEVSOiAxM1xuICAgICAgICB9O1xuXG4gICAgICAgIC8vIExpYnJhcnkgYWNjZXNzIHNob3J0Y3V0cy5cbiAgICAgICAgdmFyIHVzZXJDb25maWd1cmF0aW9uU2VydmljZSA9IGpzZS5saWJzLnVzZXJfY29uZmlndXJhdGlvbl9zZXJ2aWNlLFxuICAgICAgICAgICAgdXJsQXJndW1lbnRzID0ganNlLmxpYnMudXJsX2FyZ3VtZW50cztcblxuICAgICAgICAvLyBDb25maWd1cmF0aW9uIHNldHRpbmdzIGZvciBVc2VyQ29uZmlndXJhdGlvblNlcnZpY2UuXG4gICAgICAgIHZhciBjb25maWd1cmF0aW9uQ29udGFpbmVyID0ge1xuICAgICAgICAgICAgdXNlcklkOiBkYXRhLmN1c3RvbWVyX2lkLFxuICAgICAgICAgICAgY29uZmlndXJhdGlvbktleTogJ3JlY2VudF9zZWFyY2hfYXJlYSdcbiAgICAgICAgfTtcblxuICAgICAgICAvLyBNb2R1bGUgb2JqZWN0IChKU0VuZ2luZSkuXG4gICAgICAgIHZhciBtb2R1bGUgPSB7fTtcblxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAgICAgLy8gTUVUSE9EU1xuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAgICAgICAvKipcbiAgICAgICAgICogUmVmcmVzaGVzIHRoZSBzZWFyY2ggYXJlYSB2YXJpYWJsZVxuICAgICAgICAgKlxuICAgICAgICAgKiBTaG93cyB0aGUgbmV3IHNlYXJjaCBhcmVhIGluIHRoZSBidXR0b25cbiAgICAgICAgICogQHByaXZhdGVcbiAgICAgICAgICovXG4gICAgICAgIHZhciBfcmVmcmVzaFNlYXJjaEFyZWEgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAvLyBBYm9ydCBpZiBubyBuZXcgc2VhcmNoIGFyZWEgaXMgcHJvdmlkZWRcbiAgICAgICAgICAgIGlmICghJCgnLnNlYXJjaC1pdGVtLmFjdGl2ZScpLmxlbmd0aCkge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoJ05vIGFjdGl2ZSBsaXN0IGl0ZW0hJyk7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC8vIEFzc2lnbiBuZXcgc2VhcmNoIGFyZWFcbiAgICAgICAgICAgIHNlYXJjaEFyZWEgPSAkKCcuc2VhcmNoLWl0ZW0uYWN0aXZlJykuZGF0YSgnc2VhcmNoQXJlYScpO1xuICAgICAgICAgICAgJHRoaXMudHJpZ2dlcigncmVmcmVzaDpzZWFyY2gtYXJlYScpO1xuICAgICAgICB9O1xuXG4gICAgICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgICAgICAvLyBJTklUSUFMSVpBVElPTlxuICAgICAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAgICAgICB2YXIgX2luaXRpYWxpemVJbnB1dCA9IGZ1bmN0aW9uICgpIHtcblxuICAgICAgICAgICAgLy8gQ2xpY2sgZXZlbnRcbiAgICAgICAgICAgICR0aGlzLnBhcmVudCgnKicpLm9uKCdjbGljaycsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAkdGhpcy50cmlnZ2VyKCdyZWZyZXNoOnNlYXJjaC1hcmVhJyk7XG4gICAgICAgICAgICAgICAgaWYgKCR0aGlzLnZhbCgpID09PSAnJykge1xuICAgICAgICAgICAgICAgICAgICAkdGhpcy52YWwocmVjZW50U2VhcmNoKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ3Nob3c6ZHJvcGRvd24nKTtcbiAgICAgICAgICAgICAgICAkdGhpcy50cmlnZ2VyKCdmb2N1cycpO1xuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vIEtleWJvYXJkIGV2ZW50c1xuICAgICAgICAgICAgJHRoaXMub24oJ2tleXVwJywgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICAgICAgc3dpdGNoIChldmVudC53aGljaCkge1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIFBlcmZvcm0gc2VhcmNoIGlmIGVudGVyIGtleSBpcyBwcmVzc2VkXG4gICAgICAgICAgICAgICAgICAgIGNhc2Uga2V5TWFwLkVOVEVSOlxuICAgICAgICAgICAgICAgICAgICAgICAgJHRoaXMudHJpZ2dlcigncGVyZm9ybTpzZWFyY2gnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIENsb3NlIGRyb3Bkb3duIGlmIGVzY2FwZSBrZXkgaXMgcHJlc3NlZFxuICAgICAgICAgICAgICAgICAgICBjYXNlIGtleU1hcC5FU0M6XG4gICAgICAgICAgICAgICAgICAgICAgICAkZHJvcGRvd24udHJpZ2dlcignaGlkZTpkcm9wZG93bicpO1xuICAgICAgICAgICAgICAgICAgICAgICAgcmV0dXJuO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIE5hdmlnYXRlIHVwIGluIGRyb3Bkb3duXG4gICAgICAgICAgICAgICAgICAgIGNhc2Uga2V5TWFwLkFSUk9XX1VQOlxuICAgICAgICAgICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ3NlbGVjdDppdGVtOnByZXZpb3VzJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgICAgICAgICAgY2FzZSBrZXlNYXAuQVJST1dfRE9XTjpcbiAgICAgICAgICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbTpuZXh0Jyk7XG4gICAgICAgICAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ3JlZnJlc2g6c2VhcmNoLWl0ZW0nKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBTZWFyY2ggZXZlbnRzXG4gICAgICAgICAgICAkdGhpcy5vbigncGVyZm9ybTpzZWFyY2gnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdmFyIGlucHV0VmFsdWUgPSBlbmNvZGVVUklDb21wb25lbnQoJHRoaXMudmFsKCkpLFxuICAgICAgICAgICAgICAgICAgICBvcGVuTW9kZSA9ICdfc2VsZicsXG4gICAgICAgICAgICAgICAgICAgIHVybDtcblxuICAgICAgICAgICAgICAgIHN3aXRjaCAoc2VhcmNoQXJlYSkge1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdjdXN0b21lcnMnOlxuICAgICAgICAgICAgICAgICAgICAgICAgdXJsID0gW1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdjdXN0b21lcnMnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc/c2VhcmNoPScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRWYWx1ZVxuICAgICAgICAgICAgICAgICAgICAgICAgXS5qb2luKCcnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdjYXRlZ29yaWVzJzpcbiAgICAgICAgICAgICAgICAgICAgICAgIHVybCA9IFtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnY2F0ZWdvcmllcy5waHAnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc/c2VhcmNoPScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRWYWx1ZVxuICAgICAgICAgICAgICAgICAgICAgICAgXS5qb2luKCcnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdjb25maWd1cmF0aW9ucyc6XG4gICAgICAgICAgICAgICAgICAgICAgICB1cmwgPSBbXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2NvbmZpZ3VyYXRpb25zJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnP3F1ZXJ5PScsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgaW5wdXRWYWx1ZVxuICAgICAgICAgICAgICAgICAgICAgICAgXS5qb2luKCcnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdvcmRlcnMnOlxuICAgICAgICAgICAgICAgICAgICAgICAgdXJsID0gW1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICdhZG1pbi5waHAnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICc/JyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkLnBhcmFtKHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZG86ICdPcmRlcnNPdmVydmlldycsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGZpbHRlcjoge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYmVyOiBpbnB1dFZhbHVlXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgICAgICAgICAgXS5qb2luKCcnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdpbnZvaWNlcyc6XG4gICAgICAgICAgICAgICAgICAgICAgICB1cmwgPSBbXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2FkbWluLnBocCcsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJz8nLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICQucGFyYW0oe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBkbzogJ0ludm9pY2VzT3ZlcnZpZXcnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBmaWx0ZXI6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGludm9pY2VOdW1iZXI6IGlucHV0VmFsdWVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICBdLmpvaW4oJycpO1xuICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgICAgICAgICAgICAgIGNhc2UgJ21hbnVhbCc6XG4gICAgICAgICAgICAgICAgICAgICAgICB1cmwgPSBbXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgJ2FkbWluLnBocCcsICc/JywgJC5wYXJhbSh7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIGRvOiAnRGlyZWN0SGVscFByb3h5L0dvVG9NYW51YWwnLFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBzZWFyY2g6IGlucHV0VmFsdWVcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgICAgICAgICAgICAgXS5qb2luKCcnKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIG9wZW5Nb2RlID0gJ19ibGFuayc7XG4gICAgICAgICAgICAgICAgICAgICAgICAkZHJvcGRvd24udHJpZ2dlcignaGlkZTpkcm9wZG93bicpO1xuICAgICAgICAgICAgICAgICAgICAgICAgYnJlYWs7XG4gICAgICAgICAgICAgICAgICAgIGNhc2UgJ2ZvcnVtJzpcbiAgICAgICAgICAgICAgICAgICAgICAgIHVybCA9IFtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnYWRtaW4ucGhwJywgJz8nLCAkLnBhcmFtKHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgZG86ICdEaXJlY3RIZWxwUHJveHkvR29Ub0ZvcnVtJyxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgbnVtYmVyOiBNYXRoLmZsb29yKChNYXRoLnJhbmRvbSgpICogOTk5OTk5OTkpICsgMSksXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHNlYXJjaDogaW5wdXRWYWx1ZVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgICAgICAgICBdLmpvaW4oJycpO1xuICAgICAgICAgICAgICAgICAgICAgICAgb3Blbk1vZGUgPSAnX2JsYW5rJztcbiAgICAgICAgICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdoaWRlOmRyb3Bkb3duJyk7XG4gICAgICAgICAgICAgICAgICAgICAgICBicmVhaztcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAvLyBEaXNwbGF5IGxvYWRpbmcgc3Bpbm5lci5cbiAgICAgICAgICAgICAgICBjb25zdCAkc3Bpbm5lciA9IGpzZS5saWJzLmxvYWRpbmdfc3Bpbm5lci5zaG93KCRkcm9wZG93biwgJzk5OTknKTtcblxuICAgICAgICAgICAgICAgIHVzZXJDb25maWd1cmF0aW9uU2VydmljZS5zZXQoe1xuICAgICAgICAgICAgICAgICAgICBkYXRhOiAkLmV4dGVuZChjb25maWd1cmF0aW9uQ29udGFpbmVyLCB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25maWd1cmF0aW9uVmFsdWU6IHNlYXJjaEFyZWFcbiAgICAgICAgICAgICAgICAgICAgfSksXG4gICAgICAgICAgICAgICAgICAgIG9uU3VjY2VzczogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICAgICAgd2luZG93Lm9wZW4odXJsLCBvcGVuTW9kZSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBqc2UubGlicy5sb2FkaW5nX3NwaW5uZXIuaGlkZSgkc3Bpbm5lcik7XG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIG9uRXJyb3I6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHdpbmRvdy5vcGVuKHVybCwgb3Blbk1vZGUpO1xuICAgICAgICAgICAgICAgICAgICAgICAganNlLmxpYnMubG9hZGluZ19zcGlubmVyLmhpZGUoJHNwaW5uZXIpO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBSZW1vdmUgcGxhY2Vob2xkZXIgd2hlbiBpbnB1dCBpcyBpbmFjdGl2ZVxuICAgICAgICAgICAgJHRoaXMub24oJ2JsdXInLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ2hpZGU6ZHJvcGRvd24nKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfaW5pdGlhbGl6ZUJ1dHRvbiA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICRidXR0b24ub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICR0aGlzLnRyaWdnZXIoJ3JlZnJlc2g6c2VhcmNoLWFyZWEnKTtcbiAgICAgICAgICAgICAgICAkdGhpcy52YWwocmVjZW50U2VhcmNoKTtcbiAgICAgICAgICAgICAgICAkZHJvcGRvd24udHJpZ2dlcignc2hvdzpkcm9wZG93bicpO1xuICAgICAgICAgICAgICAgICR0aGlzLnRyaWdnZXIoJ2ZvY3VzJyk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfTtcblxuICAgICAgICB2YXIgX2luaXRpYWxpemVEcm9wZG93biA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIC8vIFNlbGVjdCBpdGVtXG4gICAgICAgICAgICAkZHJvcGRvd24ub24oJ3NlbGVjdDppdGVtJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICRkcm9wZG93blxuICAgICAgICAgICAgICAgICAgICAuZmluZCgnbGlbZGF0YS1zZWFyY2gtYXJlYT0nICsgc2VhcmNoQXJlYSArICddJylcbiAgICAgICAgICAgICAgICAgICAgLmFkZENsYXNzKCdhY3RpdmUnKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBTaG93IGV2ZW50XG4gICAgICAgICAgICAkZHJvcGRvd24ub24oJ3Nob3c6ZHJvcGRvd24nLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duLmZhZGVJbigpO1xuICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbScpO1xuICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdyZWZyZXNoOnNlYXJjaC1pdGVtJyk7XG5cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBTZWxlY3QgZmlyc3QgaXRlbVxuICAgICAgICAgICAgJGRyb3Bkb3duLm9uKCdzZWxlY3Q6aXRlbTpmaXJzdCcsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgJGFjdGl2ZUxpc3RJdGVtID0gJGRyb3Bkb3duLmZpbmQoJ2xpLnNlYXJjaC1pdGVtLmFjdGl2ZScpO1xuICAgICAgICAgICAgICAgIHZhciAkZmlyc3RMaXN0SXRlbSA9ICRkcm9wZG93bi5maW5kKCdsaS5zZWFyY2gtaXRlbTpmaXJzdCcpO1xuICAgICAgICAgICAgICAgICRhY3RpdmVMaXN0SXRlbS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgJGZpcnN0TGlzdEl0ZW0uYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuICAgICAgICAgICAgICAgIF9yZWZyZXNoU2VhcmNoQXJlYSgpO1xuICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbScpO1xuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICRkcm9wZG93bi5vbignc2VsZWN0Oml0ZW06bGFzdCcsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgJGFjdGl2ZUxpc3RJdGVtID0gJGRyb3Bkb3duLmZpbmQoJ2xpLnNlYXJjaC1pdGVtLmFjdGl2ZScpO1xuICAgICAgICAgICAgICAgIHZhciAkbGFzdExpc3RJdGVtID0gJGRyb3Bkb3duLmZpbmQoJ2xpLnNlYXJjaC1pdGVtOmxhc3QnKTtcbiAgICAgICAgICAgICAgICAkYWN0aXZlTGlzdEl0ZW0ucmVtb3ZlQ2xhc3MoJ2FjdGl2ZScpO1xuICAgICAgICAgICAgICAgICRsYXN0TGlzdEl0ZW0uYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuICAgICAgICAgICAgICAgIF9yZWZyZXNoU2VhcmNoQXJlYSgpO1xuICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbScpO1xuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgIC8vIFNlbGVjdCBwcmV2aW91cyBpdGVtIGV2ZW50XG4gICAgICAgICAgICAkZHJvcGRvd24ub24oJ3NlbGVjdDppdGVtOnByZXZpb3VzJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIHZhciAkYWN0aXZlTGlzdEl0ZW0gPSAkZHJvcGRvd24uZmluZCgnbGkuc2VhcmNoLWl0ZW0uYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgdmFyICRwcmV2ID0gJGFjdGl2ZUxpc3RJdGVtLnByZXYoKTtcblxuICAgICAgICAgICAgICAgIGlmICgkcHJldi5sZW5ndGgpIHtcbiAgICAgICAgICAgICAgICAgICAgJGFjdGl2ZUxpc3RJdGVtLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcbiAgICAgICAgICAgICAgICAgICAgJHByZXYuYWRkQ2xhc3MoJ2FjdGl2ZScpO1xuICAgICAgICAgICAgICAgICAgICBfcmVmcmVzaFNlYXJjaEFyZWEoKTtcbiAgICAgICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ3NlbGVjdDppdGVtJyk7XG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICAgICAgICAgJGRyb3Bkb3duLnRyaWdnZXIoJ3NlbGVjdDppdGVtOmxhc3QnKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgLy8gU2VsZWN0IHByZXZpb3VzIGl0ZW0gZXZlbnRcbiAgICAgICAgICAgICRkcm9wZG93bi5vbignc2VsZWN0Oml0ZW06bmV4dCcsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICB2YXIgJGFjdGl2ZUxpc3RJdGVtID0gJGRyb3Bkb3duLmZpbmQoJ2xpLnNlYXJjaC1pdGVtLmFjdGl2ZScpO1xuICAgICAgICAgICAgICAgIHZhciAkbmV4dCA9ICRhY3RpdmVMaXN0SXRlbS5uZXh0KCk7XG5cbiAgICAgICAgICAgICAgICBpZiAoJG5leHQubGVuZ3RoKSB7XG4gICAgICAgICAgICAgICAgICAgICRhY3RpdmVMaXN0SXRlbS5yZW1vdmVDbGFzcygnYWN0aXZlJyk7XG4gICAgICAgICAgICAgICAgICAgICRuZXh0LmFkZENsYXNzKCdhY3RpdmUnKTtcbiAgICAgICAgICAgICAgICAgICAgX3JlZnJlc2hTZWFyY2hBcmVhKCk7XG4gICAgICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbScpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbTpmaXJzdCcpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBIaWRlIGV2ZW50XG4gICAgICAgICAgICAkZHJvcGRvd24ub24oJ2hpZGU6ZHJvcGRvd24nLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgJGRyb3Bkb3duLmZhZGVPdXQoKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBJdGVtIGNsaWNrIGV2ZW50XG4gICAgICAgICAgICAkZHJvcGRvd24ub24oJ2NsaWNrJywgZnVuY3Rpb24gKGV2ZW50KSB7XG4gICAgICAgICAgICAgICAgZXZlbnQuc3RvcFByb3BhZ2F0aW9uKCk7XG5cbiAgICAgICAgICAgICAgICAkZHJvcGRvd25cbiAgICAgICAgICAgICAgICAgICAgLmZpbmQoJ2xpJylcbiAgICAgICAgICAgICAgICAgICAgLnJlbW92ZUNsYXNzKCdhY3RpdmUnKTtcblxuICAgICAgICAgICAgICAgIHZhciAkZWxlbWVudFRvQWN0aXZhdGUgPSAkKGV2ZW50LnRhcmdldCkuaXMoJ3NwYW4nKSA/XG4gICAgICAgICAgICAgICAgICAgICQoZXZlbnQudGFyZ2V0KS5wYXJlbnRzKCdsaTpmaXJzdCcpIDpcbiAgICAgICAgICAgICAgICAgICAgJChldmVudC50YXJnZXQpO1xuXG4gICAgICAgICAgICAgICAgJGVsZW1lbnRUb0FjdGl2YXRlLmFkZENsYXNzKCdhY3RpdmUnKTtcblxuICAgICAgICAgICAgICAgIF9yZWZyZXNoU2VhcmNoQXJlYSgpO1xuICAgICAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdoaWRlOmRyb3Bkb3duJyk7XG4gICAgICAgICAgICAgICAgJHRoaXMudHJpZ2dlcigncGVyZm9ybTpzZWFyY2gnKTtcbiAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAvLyBJdGVtIHNlYXJjaCBldmVudFxuICAgICAgICAgICAgJGRyb3Bkb3duLm9uKCdyZWZyZXNoOnNlYXJjaC1pdGVtJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICQoJy5zZWFyY2gtaXRlbScpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICAvLyBVcGRhdGUgc2VhcmNoIHF1ZXJ5XG4gICAgICAgICAgICAgICAgICAgICQodGhpcylcbiAgICAgICAgICAgICAgICAgICAgICAgIC5maW5kKCcuc2VhcmNoLXF1ZXJ5LWl0ZW0nKVxuICAgICAgICAgICAgICAgICAgICAgICAgLnRleHQoJHRoaXMudmFsKCkpO1xuXG4gICAgICAgICAgICAgICAgICAgIC8vIFVwZGF0ZSBzZWFyY2ggZGVzY3JpcHRpb25cbiAgICAgICAgICAgICAgICAgICAgdmFyIHNlYXJjaEFyZWFUZXh0ID0gW1xuICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWxzLnNlYXJjaEluLFxuICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWxzWyQodGhpcykuZGF0YSgnc2VhcmNoQXJlYScpXVxuICAgICAgICAgICAgICAgICAgICBdLmpvaW4oJyAnKTtcblxuICAgICAgICAgICAgICAgICAgICBpZiAoJCh0aGlzKS5hdHRyKCdkYXRhLXNlYXJjaC1hcmVhJykgPT09ICdtYW51YWwnIHx8ICQodGhpcykuYXR0cignZGF0YS1zZWFyY2gtYXJlYScpID09PSAnZm9ydW0nKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBzZWFyY2hBcmVhVGV4dCA9IFtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsYWJlbHMuc2VhcmNoSW5BbHRlcm5hdGl2ZSxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBsYWJlbHNbJCh0aGlzKS5kYXRhKCdzZWFyY2hBcmVhJyldXG4gICAgICAgICAgICAgICAgICAgICAgICBdLmpvaW4oJyAnKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgICQodGhpcylcbiAgICAgICAgICAgICAgICAgICAgICAgIC5maW5kKCcuc2VhcmNoLXF1ZXJ5LWRlc2NyaXB0aW9uJylcbiAgICAgICAgICAgICAgICAgICAgICAgIC50ZXh0KHNlYXJjaEFyZWFUZXh0KTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9O1xuXG4gICAgICAgIHZhciBfaW5pdGlhbGl6ZVJlY2VudFNlYXJjaCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICQoZG9jdW1lbnQpLm9uKCdKU0VOR0lORV9JTklUX0ZJTklTSEVEJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgIGlmIChyZWNlbnRTZWFyY2ggIT0gJycpIHtcbiAgICAgICAgICAgICAgICAgICAgJHRoaXMucHJvcCgndmFsdWUnLCByZWNlbnRTZWFyY2gpO1xuICAgICAgICAgICAgICAgICAgICAkZHJvcGRvd24udHJpZ2dlcigncmVmcmVzaDpzZWFyY2gtaXRlbScpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9O1xuXG4gICAgICAgIC8qKlxuICAgICAgICAgKiBJbml0aWFsaXplIG1ldGhvZCBvZiB0aGUgZXh0ZW5zaW9uLCBjYWxsZWQgYnkgdGhlIGVuZ2luZS5cbiAgICAgICAgICovXG4gICAgICAgIG1vZHVsZS5pbml0ID0gZnVuY3Rpb24gKGRvbmUpIHtcbiAgICAgICAgICAgIF9pbml0aWFsaXplSW5wdXQoKTtcbiAgICAgICAgICAgIF9pbml0aWFsaXplRHJvcGRvd24oKTtcbiAgICAgICAgICAgIF9pbml0aWFsaXplQnV0dG9uKCk7XG4gICAgICAgICAgICBfaW5pdGlhbGl6ZVJlY2VudFNlYXJjaCgpO1xuXG4gICAgICAgICAgICBzZWFyY2hBcmVhID0gZGF0YS5yZWNlbnRTZWFyY2hBcmVhIHx8ICdjYXRlZ29yaWVzJztcbiAgICAgICAgICAgICRkcm9wZG93bi50cmlnZ2VyKCdzZWxlY3Q6aXRlbScpO1xuXG4gICAgICAgICAgICBkb25lKCk7XG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gUmV0dXJuIGRhdGEgdG8gbW9kdWxlIGVuZ2luZS5cbiAgICAgICAgcmV0dXJuIG1vZHVsZTtcbiAgICB9KTtcbiJdfQ==
