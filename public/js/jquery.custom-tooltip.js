(function ($) {
    /************************************************* jauery popover plugin */
    $.fn.customTooltip = function (options) {
        // This is the easiest way to have default options.
        var settings = $.extend(
            {
                itemAt: "top left",
                targetAt: "bottom left",
                flip: "both",
                trigger: "click",
                onShow: function () {},
                onHide: function () {},
            },
            options
        );

        var $this = $(this);
        var tooltip_id = $this.attr("data-content-id");
        var $tooltip = $("#" + tooltip_id).addClass("tooltip-modal");

        var is_shown = false;

        function showTooltip(e) {
            var options = {
                itemAt: settings.itemAt,
                targetAt: settings.targetAt,
                flip: settings.flip,
            };
            options.item = $tooltip;
            options.target = $this[0];

            $tooltip.show().css({
                top: 0,
                left: 0,
            });

            var calculator = new $.PositionCalculator(options);
            var posResult = calculator.calculate();

            $tooltip.css({
                top: posResult.moveBy.y + "px",
                left: posResult.moveBy.x + "px",
            });

            is_shown = true;
        }

        if (settings.trigger === "hover" && $(window).width() >= 768) {
            $this.on("mouseenter", function (e) {
                show(e);
            });

            $this.on("mouseleave", function (e) {
                hide();
            });

            $tooltip.on("mouseenter", function (e) {
                show(e);
            });

            $tooltip.on("mouseleave", function (e) {
                hide();
            });
        } else {
            // if settings.trigger === "click" || $(window).width() < 768
            $this.on("click", function (e) {
                show(e);
            });

            $(window).on("click", function (e) {
                hide();
            });
        }

        // $this.on("click", function (e) {
        //     show(e);
        // });

        // $(window).on("click", function (e) {
        //     hide();
        // });

        $tooltip.on("click", function (e) {
            e.stopPropagation();
        });

        $(window).on("scroll", function (e) {
            if (is_shown) {
                showTooltip(e);
            }
        });

        $(window).on("resize", function (e) {
            if (is_shown) {
                showTooltip(e);
            }
        });

        function show(e) {
            e.stopPropagation();
            showTooltip(e);
            settings.onShow();
        }

        function hide() {
            $tooltip.hide();
            is_shown = false;
            settings.onHide();
        }

        return {
            this: $this,
            hide: hide,
        };
    };
})(jQuery);
