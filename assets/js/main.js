$('.modal-trigger').click(function () {
    var ModalId = $(this).data('target');
    $(ModalId).removeClass("modal")
    $(".overlay").show();
});

$("#OpenNav").click(function () {
    $(".mobile-nav").addClass("mobile-show")
    $(".overlay").show();
})