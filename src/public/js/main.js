$(document).ready(function () {
    $('#logout_link').on('click', function(event) {
        console.log('logout');
        event.preventDefault(); 
        $('#logout_form').submit();
    });

    $.getJSON('/api/workflows/', function (data) {
        $('#count_workflows').html(data.length);
    });
});