'use strict';

/* --------------------------------------------------------------
 email_order.js 2023-06-13
 Gambio GmbH
 http://www.gambio.de
 Copyright (c) 2023 Gambio GmbH
 Released under the GNU General Public License (Version 2)
 [http://www.gnu.org/licenses/gpl-2.0.html]
 --------------------------------------------------------------
 */

/**
 * Email Order Modal Controller
 */
gx.controllers.module('email_order', ['modal'], function (data) {

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
    var module = {
        bindings: {
            subject: $this.find('.subject'),
            emailAddress: $this.find('.email-address')
        }
    };

    // ------------------------------------------------------------------------
    // FUNCTIONS
    // ------------------------------------------------------------------------

    /**
     * Open preview of html order mail in a new browser tab
     *
     * @param event
     * @private
     */
    function _onPreviewClick(event) {
        var getParams = {
            oID: $this.data('orderId'),
            type: 'order'
        };
        var url = jse.core.config.get('appUrl') + '/admin/gm_send_order.php?' + $.param(getParams);

        window.open(url, '_blank');
    }

    /**
     * Send the modal data to the form through an AJAX call.
     *
     * @param {jQuery.Event} event
     */
    function _onSendClick(event) {
        var getParams = {
            oID: $this.data('orderId'),
            type: 'send_order'
        };
        var url = jse.core.config.get('appUrl') + '/admin/gm_send_order.php?' + $.param(getParams);
        var data = {
            gm_mail: module.bindings.emailAddress.get(),
            gm_subject: module.bindings.subject.get()
        };
        var $sendButton = $(event.target);

        $sendButton.addClass('disabled').prop('disabled', true);

        $.ajax({
            url: url,
            data: data,
            method: 'POST'
        }).done(function (response) {
            var message = jse.core.lang.translate('MAIL_SUCCESS', 'gm_send_order');
            var $tableRow = $('tbody tr#' + getParams.oID);

            // Remove the e-mail symbol
            $tableRow.find('td.actions i.tooltip-confirmation-not-sent').remove();

            // Show success message in the admin info box.
            jse.libs.info_box.addSuccessMessage(message);
        }).fail(function (jqxhr, textStatus, errorThrown) {
            var title = jse.core.lang.translate('error', 'messages');
            var content = jse.core.lang.translate('MAIL_UNSUCCESS', 'gm_send_order');

            // Show error message in a modal.
            jse.libs.modal.message({ title: title, content: content });
        }).always(function () {
            $this.modal('hide');
            $sendButton.removeClass('disabled').prop('disabled', false);
        });
    }

    // ------------------------------------------------------------------------
    // INITIALIZATION
    // ------------------------------------------------------------------------

    module.init = function (done) {
        $this.on('click', '.btn.preview', _onPreviewClick);
        $this.on('click', '.btn.send', _onSendClick);
        done();
    };

    return module;
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm9yZGVycy9tb2RhbHMvZW1haWxfb3JkZXIuanMiXSwibmFtZXMiOlsiZ3giLCJjb250cm9sbGVycyIsIm1vZHVsZSIsImRhdGEiLCIkdGhpcyIsIiQiLCJiaW5kaW5ncyIsInN1YmplY3QiLCJmaW5kIiwiZW1haWxBZGRyZXNzIiwiX29uUHJldmlld0NsaWNrIiwiZXZlbnQiLCJnZXRQYXJhbXMiLCJvSUQiLCJ0eXBlIiwidXJsIiwianNlIiwiY29yZSIsImNvbmZpZyIsImdldCIsInBhcmFtIiwid2luZG93Iiwib3BlbiIsIl9vblNlbmRDbGljayIsImdtX21haWwiLCJnbV9zdWJqZWN0IiwiJHNlbmRCdXR0b24iLCJ0YXJnZXQiLCJhZGRDbGFzcyIsInByb3AiLCJhamF4IiwibWV0aG9kIiwiZG9uZSIsInJlc3BvbnNlIiwibWVzc2FnZSIsImxhbmciLCJ0cmFuc2xhdGUiLCIkdGFibGVSb3ciLCJyZW1vdmUiLCJsaWJzIiwiaW5mb19ib3giLCJhZGRTdWNjZXNzTWVzc2FnZSIsImZhaWwiLCJqcXhociIsInRleHRTdGF0dXMiLCJlcnJvclRocm93biIsInRpdGxlIiwiY29udGVudCIsIm1vZGFsIiwiYWx3YXlzIiwicmVtb3ZlQ2xhc3MiLCJpbml0Iiwib24iXSwibWFwcGluZ3MiOiI7O0FBQUE7Ozs7Ozs7Ozs7QUFVQTs7O0FBR0FBLEdBQUdDLFdBQUgsQ0FBZUMsTUFBZixDQUFzQixhQUF0QixFQUFxQyxDQUFDLE9BQUQsQ0FBckMsRUFBZ0QsVUFBVUMsSUFBVixFQUFnQjs7QUFFNUQ7O0FBRUE7QUFDQTtBQUNBOztBQUVBOzs7Ozs7QUFLQSxRQUFNQyxRQUFRQyxFQUFFLElBQUYsQ0FBZDs7QUFFQTs7Ozs7QUFLQSxRQUFNSCxTQUFTO0FBQ1hJLGtCQUFVO0FBQ05DLHFCQUFTSCxNQUFNSSxJQUFOLENBQVcsVUFBWCxDQURIO0FBRU5DLDBCQUFjTCxNQUFNSSxJQUFOLENBQVcsZ0JBQVg7QUFGUjtBQURDLEtBQWY7O0FBT0E7QUFDQTtBQUNBOztB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ZSI6Im9yZGVycy9tb2RhbHMvZW1haWxfb3JkZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKiAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuIGVtYWlsX29yZGVyLmpzIDIwMjMtMDYtMTNcbiBHYW1iaW8gR21iSFxuIGh0dHA6Ly93d3cuZ2FtYmlvLmRlXG4gQ29weXJpZ2h0IChjKSAyMDIzIEdhbWJpbyBHbWJIXG4gUmVsZWFzZWQgdW5kZXIgdGhlIEdOVSBHZW5lcmFsIFB1YmxpYyBMaWNlbnNlIChWZXJzaW9uIDIpXG4gW2h0dHA6Ly93d3cuZ251Lm9yZy9saWNlbnNlcy9ncGwtMi4wLmh0bWxdXG4gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAqL1xuXG4vKipcbiAqIEVtYWlsIE9yZGVyIE1vZGFsIENvbnRyb2xsZXJcbiAqL1xuZ3guY29udHJvbGxlcnMubW9kdWxlKCdlbWFpbF9vcmRlcicsIFsnbW9kYWwnXSwgZnVuY3Rpb24gKGRhdGEpIHtcblxuICAgICd1c2Ugc3RyaWN0JztcblxuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICAgIC8vIFZBUklBQkxFU1xuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgLyoqXG4gICAgICogTW9kdWxlIFNlbGVjdG9yXG4gICAgICpcbiAgICAgKiBAdHlwZSB7alF1ZXJ5fVxuICAgICAqL1xuICAgIGNvbnN0ICR0aGlzID0gJCh0aGlzKTtcblxuICAgIC8qKlxuICAgICAqIE1vZHVsZSBJbnN0YW5jZVxuICAgICAqXG4gICAgICogQHR5cGUge09iamVjdH1cbiAgICAgKi9cbiAgICBjb25zdCBtb2R1bGUgPSB7XG4gICAgICAgIGJpbmRpbmdzOiB7XG4gICAgICAgICAgICBzdWJqZWN0OiAkdGhpcy5maW5kKCcuc3ViamVjdCcpLFxuICAgICAgICAgICAgZW1haWxBZGRyZXNzOiAkdGhpcy5maW5kKCcuZW1haWwtYWRkcmVzcycpXG4gICAgICAgIH1cbiAgICB9O1xuXG4gICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgLy8gRlVOQ1RJT05TXG4gICAgLy8gLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4gICAgXG4gICAgLyoqXG4gICAgICogT3BlbiBwcmV2aWV3IG9mIGh0bWwgb3JkZXIgbWFpbCBpbiBhIG5ldyBicm93c2VyIHRhYlxuICAgICAqXG4gICAgICogQHBhcmFtIGV2ZW50XG4gICAgICogQHByaXZhdGVcbiAgICAgKi9cbiAgICBmdW5jdGlvbiBfb25QcmV2aWV3Q2xpY2soZXZlbnQpIHtcbiAgICAgICAgY29uc3QgZ2V0UGFyYW1zID0ge1xuICAgICAgICAgICAgb0lEOiAkdGhpcy5kYXRhKCdvcmRlcklkJyksXG4gICAgICAgICAgICB0eXBlOiAnb3JkZXInXG4gICAgICAgIH07XG4gICAgICAgIGNvbnN0IHVybCA9IGpzZS5jb3JlLmNvbmZpZy5nZXQoJ2FwcFVybCcpICsgJy9hZG1pbi9nbV9zZW5kX29yZGVyLnBocD8nICsgJC5wYXJhbShnZXRQYXJhbXMpO1xuICAgICAgICBcbiAgICAgICAgd2luZG93Lm9wZW4odXJsLCdfYmxhbmsnKTtcbiAgICB9XG4gICAgXG4gICAgLyoqXG4gICAgICogU2VuZCB0aGUgbW9kYWwgZGF0YSB0byB0aGUgZm9ybSB0aHJvdWdoIGFuIEFKQVggY2FsbC5cbiAgICAgKlxuICAgICAqIEBwYXJhbSB7alF1ZXJ5LkV2ZW50fSBldmVudFxuICAgICAqL1xuICAgIGZ1bmN0aW9uIF9vblNlbmRDbGljayhldmVudCkge1xuICAgICAgICBjb25zdCBnZXRQYXJhbXMgPSB7XG4gICAgICAgICAgICBvSUQ6ICR0aGlzLmRhdGEoJ29yZGVySWQnKSxcbiAgICAgICAgICAgIHR5cGU6ICdzZW5kX29yZGVyJ1xuICAgICAgICB9O1xuICAgICAgICBjb25zdCB1cmwgPSBqc2UuY29yZS5jb25maWcuZ2V0KCdhcHBVcmwnKSArICcvYWRtaW4vZ21fc2VuZF9vcmRlci5waHA/JyArICQucGFyYW0oZ2V0UGFyYW1zKTtcbiAgICAgICAgY29uc3QgZGF0YSA9IHtcbiAgICAgICAgICAgIGdtX21haWw6IG1vZHVsZS5iaW5kaW5ncy5lbWFpbEFkZHJlc3MuZ2V0KCksXG4gICAgICAgICAgICBnbV9zdWJqZWN0OiBtb2R1bGUuYmluZGluZ3Muc3ViamVjdC5nZXQoKVxuICAgICAgICB9O1xuICAgICAgICBjb25zdCAkc2VuZEJ1dHRvbiA9ICQoZXZlbnQudGFyZ2V0KTtcblxuICAgICAgICAkc2VuZEJ1dHRvbi5hZGRDbGFzcygnZGlzYWJsZWQnKS5wcm9wKCdkaXNhYmxlZCcsIHRydWUpO1xuXG4gICAgICAgICQuYWpheCh7XG4gICAgICAgICAgICB1cmwsXG4gICAgICAgICAgICBkYXRhLFxuICAgICAgICAgICAgbWV0aG9kOiAnUE9TVCdcbiAgICAgICAgfSlcbiAgICAgICAgICAgIC5kb25lKGZ1bmN0aW9uIChyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgIGNvbnN0IG1lc3NhZ2UgPSBqc2UuY29yZS5sYW5nLnRyYW5zbGF0ZSgnTUFJTF9TVUNDRVNTJywgJ2dtX3NlbmRfb3JkZXInKTtcbiAgICAgICAgICAgICAgICBjb25zdCAkdGFibGVSb3cgPSAkKGB0Ym9keSB0ciMke2dldFBhcmFtcy5vSUR9YCk7XG5cbiAgICAgICAgICAgICAgICAvLyBSZW1vdmUgdGhlIGUtbWFpbCBzeW1ib2xcbiAgICAgICAgICAgICAgICAkdGFibGVSb3cuZmluZCgndGQuYWN0aW9ucyBpLnRvb2x0aXAtY29uZmlybWF0aW9uLW5vdC1zZW50JykucmVtb3ZlKCk7XG5cbiAgICAgICAgICAgICAgICAvLyBTaG93IHN1Y2Nlc3MgbWVzc2FnZSBpbiB0aGUgYWRtaW4gaW5mbyBib3guXG4gICAgICAgICAgICAgICAganNlLmxpYnMuaW5mb19ib3guYWRkU3VjY2Vzc01lc3NhZ2UobWVzc2FnZSk7XG4gICAgICAgICAgICB9KVxuICAgICAgICAgICAgLmZhaWwoZnVuY3Rpb24gKGpxeGhyLCB0ZXh0U3RhdHVzLCBlcnJvclRocm93bikge1xuICAgICAgICAgICAgICAgIGNvbnN0IHRpdGxlID0ganNlLmNvcmUubGFuZy50cmFuc2xhdGUoJ2Vycm9yJywgJ21lc3NhZ2VzJyk7XG4gICAgICAgICAgICAgICAgY29uc3QgY29udGVudCA9IGpzZS5jb3JlLmxhbmcudHJhbnNsYXRlKCdNQUlMX1VOU1VDQ0VTUycsICdnbV9zZW5kX29yZGVyJyk7XG5cbiAgICAgICAgICAgICAgICAvLyBTaG93IGVycm9yIG1lc3NhZ2UgaW4gYSBtb2RhbC5cbiAgICAgICAgICAgICAgICBqc2UubGlicy5tb2RhbC5tZXNzYWdlKHt0aXRsZSwgY29udGVudH0pO1xuICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIC5hbHdheXMoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICR0aGlzLm1vZGFsKCdoaWRlJyk7XG4gICAgICAgICAgICAgICAgJHNlbmRCdXR0b24ucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJykucHJvcCgnZGlzYWJsZWQnLCBmYWxzZSk7XG4gICAgICAgICAgICB9KTtcbiAgICB9XG5cbiAgICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiAgICAvLyBJTklUSUFMSVpBVElPTlxuICAgIC8vIC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gICAgbW9kdWxlLmluaXQgPSBmdW5jdGlvbiAoZG9uZSkge1xuICAgICAgICAkdGhpcy5vbignY2xpY2snLCAnLmJ0bi5wcmV2aWV3JywgX29uUHJldmlld0NsaWNrKTtcbiAgICAgICAgJHRoaXMub24oJ2NsaWNrJywgJy5idG4uc2VuZCcsIF9vblNlbmRDbGljayk7XG4gICAgICAgIGRvbmUoKTtcbiAgICB9O1xuXG4gICAgcmV0dXJuIG1vZHVsZTtcbn0pOyJdfQ==
