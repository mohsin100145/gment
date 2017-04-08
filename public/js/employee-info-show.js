$(function() {
    $(document).on('click', '#employee_id_search', function(){
        var employeeId = $('#employee_id').val();
        console.log(employeeId);
        var url  =$(this).attr('data-url') + "?employee_id="+ employeeId;
        console.log(url);
        $.get(url, function (data) {
            $('#employee_info_show').html(data);
        });
    });
});