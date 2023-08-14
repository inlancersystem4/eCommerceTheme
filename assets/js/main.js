$('.modal-trigger').click(function () {
    var ModalId = $(this).data('target');
    $(ModalId).removeClass("modal")
    $(".overlay").show();
});

$("#OpenNav").click(function () {
    $(".mobile-nav").addClass("mobile-show")
    $(".overlay").show();
})


$(".overlay").click(function () {
    $(".mobile-nav").removeClass("mobile-show")
    $(".product-drawer").removeClass("product-drawer-show")
    $(this).hide()
})

$("#Mobile_Hide").click(function () {
    $(".mobile-nav").removeClass("mobile-show")
    $(".overlay").hide();
})


$(".openDrawer").click(function () {
    $(".product-drawer").addClass("product-drawer-show")
    $(".overlay").show();
})

$('.increment').click(function () {
    var input = $(this).siblings('input');
    var currentValue = parseInt(input.val());
    if (currentValue < 99) {
        input.val(currentValue + 1);
    }
});

$('.decrement').click(function () {
    var input = $(this).siblings('input');
    var currentValue = parseInt(input.val());
    if (currentValue > 1) {
        input.val(currentValue - 1);
    }
});
