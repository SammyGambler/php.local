var baseUrl = 'http://localhost/7L%20PHP/25-ui/';
$(document).ready(function () {

// Ajax Request !!! (for security reseons : put it in separate file !!!)
    $(".qManage .qm").click(function (e) {
        var thisElement = $(this);
        var reqURL = baseUrl + "inc/ajax.php?action=qm";
        thisElement.parent().find('.result').fadeIn(10);
        thisElement.parent().find('.result').html('...');
        $.ajax({
            type: 'POST',
            url: reqURL,
            data: {qmStr: thisElement.attr('id')},
            success: function (response) {
                thisElement.parent().find('.result').html(response);
                thisElement.parent().find('.result').fadeIn(500);
                // refresh page after 1 second
                setTimeout("location.href='" + window.location.href + "'", 1000);
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            }
        });
    });

    $(".qManage .qmr").click(function (e) {
        $(this).parent().parent().find('.r').fadeToggle(500);
    });

});