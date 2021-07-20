$('#btn-aprovar').on('click', function () {
    console.log('Aprovar');
    var next_step = $(this).data('next_step');
    if (next_step !== '') {
        $.ajax({
            url: '/api/workflows/' + id,
            type: 'PUT',
            data: "step_id=" + next_step,
            success: function() {
                window.location.href = '/inbox';
            }
        });
    } else {
        alert('Aguarde o carregamento completo');
    }
    
})

$('#btn-reprovar').on('click', function () {
    console.log('reprovar');
    var next_step = 3;
    if (next_step !== '') {
        $.ajax({
            url: '/api/workflows/' + id,
            type: 'PUT',
            data: "step_id=" + next_step,
            success: function() {
                window.location.href = '/inbox';
            }
        });
    } else {
        alert('Aguarde o carregamento completo');
    }
})


$(document).ready(function () {
    $.getJSON('/api/workflows/' + id, function (data) {
        $('#description').html(data[0].refund.description);
        $('#value').html(data[0].refund.value);
        $('#requester_name').html(data[0].refund.requester_name);
        $('#btn-aprovar').data('next_step', data[0].step.next_step_id);
    });
});