$(document).ready(function () {
    $('#logout_link').on('click', function(event) {
        console.log('logout');
        event.preventDefault(); 
        $('#logout_form').submit();
    });
});