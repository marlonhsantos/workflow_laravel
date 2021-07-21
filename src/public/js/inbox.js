$(document).ready(function () {
    $.getJSON('/api/workflows/', function (data) {
        //console.log(data);
        var $list;
        var $open_list = $('#open').find('.list-group');
        var $closed_list = $('#closed').find('.list-group');

        $open_list.html('');
        $closed_list.html('');

        //console.log(data);
        $.each(data, function(index, obj){
            if (obj.step.end == 1) {
                $list = $closed_list;
            } else {
                $list = $open_list;
            }

            $list.append("<a href='/workflow/" + obj.id + "' class='list-group-item'>"+
            "<span>#" + obj.id + "</span> " +
            "<span class='name label label-info' style='min-width: 120px;" +
            "    display: inline-block;'>" + obj.step.step_name + "</span> <span class=''>" + obj.refund.requester_name + " - " + obj.refund.value + "</span>" +
            "<span class='text-muted' style='font-size: 11px;'>- " + obj.refund.description + "</span> <span class='badge'>" + obj.created_at + "</span> <span class='pull-right'>" +
            "</span></span></a>");
        });

        var no_data = 
        "<div class='list-group-item'>" +
        "    <span class='text-center'>Sem registros.</span>" +
        "</div>";

        if ($open_list.html() == '') $open_list.append(no_data);
        if ($closed_list.html() == '') $closed_list.append(no_data);
    });
});