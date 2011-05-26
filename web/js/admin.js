$(document).ready(function() {
    if($('#trapial_employee_team').val()!=1)   
        $('#employee-nivel').hide();
    $("#trapial_employee_team").change(function() {
        if($(this).val()==1)$('#employee-nivel').show();
        else $('#employee-nivel').hide();
    });
});
