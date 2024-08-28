(function ($) {
    /************************************************* jauery pagination plugin */
    $.fn.popover = function (options) {
        // This is the easiest way to have default options.
        var settings = $.extend(
            {
                shown: false,
                show: function () {},
                hide: function () {},
            },
            options
        );

        var $this = $(this);
        return $this;
    };
})(jQuery);
