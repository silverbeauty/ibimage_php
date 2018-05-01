
$(function() {
    $('.message').click(function() {
        $(this).fadeOut('slow');
    });


    $('[data-toggle="popover"]').popover();
    $('[data-toggle="tooltip"]').tooltip();
});

function getFormDataAsJson($form) {
    var data = {};
    $form.serializeArray().map(function(x){data[x.name] = x.value;});
    return data;
}