$(function() {
    $(document).on('keyup', '#salary', function(){
        var salary  = parseFloat($('#salary').val());
        var basicSalaryCal = (salary * 60) / 100;
        var basicSalary = parseFloat($('#basic_salary').val(basicSalaryCal));
    });
});

$(function() {
    $(document).on('keyup', '#food_allowance', function() {
        var conveyanceAllowance  = parseFloat($('#conveyance_allowance').val(0));
        var medicalAllowance  = parseFloat($('#medical_allowance').val(0));
        var salary  = parseFloat($('#salary').val());
        var basicSalary  = parseFloat($('#basic_salary').val());
        var foodAllowance  = parseFloat($('#food_allowance').val());
        var homeAllowanceCal = parseFloat(salary - (basicSalary + foodAllowance));
        if(homeAllowanceCal > 0) {
            parseFloat($('#home_allowance').val(homeAllowanceCal));
        } else {
            parseFloat($('#home_allowance').val(null));
        }
    });
});

$(function() {
    $(document).on('keyup', '#medical_allowance', function() {
        var conveyanceAllowance  = parseFloat($('#conveyance_allowance').val(0));
        var salary  = parseFloat($('#salary').val());
        var basicSalary  = parseFloat($('#basic_salary').val());
        var foodAllowance  = parseFloat($('#food_allowance').val());
        var medicalAllowance  = parseFloat($('#medical_allowance').val());
        var homeAllowanceCal = parseFloat(salary - (basicSalary + foodAllowance + medicalAllowance));
        if(homeAllowanceCal > 0) {
            parseFloat($('#home_allowance').val(homeAllowanceCal));
        } else {
            parseFloat($('#home_allowance').val(null));
        }
    });
});

$(function() {
    $(document).on('keyup', '#conveyance_allowance', function() {
        var salary  = parseFloat($('#salary').val());
        var basicSalary  = parseFloat($('#basic_salary').val());
        var foodAllowance  = parseFloat($('#food_allowance').val());
        var medicalAllowance  = parseFloat($('#medical_allowance').val());
        var conveyanceAllowance  = parseFloat($('#conveyance_allowance').val());
        var homeAllowanceCal = parseFloat(salary - (basicSalary + foodAllowance + medicalAllowance + conveyanceAllowance));
        if(homeAllowanceCal > 0) {
            parseFloat($('#home_allowance').val(homeAllowanceCal));
        } else {
            parseFloat($('#home_allowance').val(null));
        }
    });
});