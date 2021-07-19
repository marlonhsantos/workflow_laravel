$('#btn-aprovar').on('click', function () {
    console.log('Aprovar');
})

$('#btn-reprovar').on('click', function () {
    console.log('reprovar');
})


$(document).ready(function () {
    $.getJSON('/api/workflows/' + id, function (data) {
        $('#description').html(data[0].refund.description);
        $('#value').html(data[0].refund.value);
        $('#requester_name').html(data[0].refund.requester_name);
    });
});