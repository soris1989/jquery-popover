$(document).ready(function () {
    var $btn_trigger = $("#btn-trigger");

    var tooltipInst = $btn_trigger.customTooltip({
        itemAt: "top right",
        targetAt: "bottom right",
        flip: "both",
        trigger: "click",
        onShow: function () {
            console.log("show");
        },
        onHide: function () {
            console.log("hide");
        },
    });

    $("#btn-click").on("click", function () {
        tooltipInst.hide();
    });
});
