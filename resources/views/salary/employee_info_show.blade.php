<div style="margin-left: 292px;">
    {{--<p>{!! 'Employee Name: <strong>'.$employee->name. '</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salary: <strong>'.$employee->salary. '</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Basic Salary: <strong>'.$employee->basic_salary. '</strong>' !!}</p>--}}
    <table class="table">
        <tr>
            <td style="border: none;">Employee Name: <b>{{ $employee->name }}</b></td>
            <td style="border: none;">Salary: <b>{!! number_format($employee->salary, 2) !!} Taka</b></td>
            <td style="border: none;">Basic Salary: <b>{!! number_format($employee->basic_salary, 2) !!} Taka</b></td>
        </tr>
    </table>
</div>