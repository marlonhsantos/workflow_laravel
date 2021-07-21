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
    var obj;
    $.getJSON('/api/workflows/' + id, function (data) {
        obj = data[0];
        $('#description').html(obj.refund.description);
        $('#value').html(obj.refund.value);
        $('#requester_name').html(obj.refund.requester_name);
        $('#btn-aprovar').data('next_step', obj.step.next_step_id);
        if (obj.step.end == 1) {
            $('#btn-aprovar').hide();
            $('#btn-reprovar').hide();
        }
    });
});