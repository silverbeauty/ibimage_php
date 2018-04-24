
$(function() {
    $('.message').click(function() {
        $(this).fadeOut('slow');
    });


    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
});