@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-2">
            <div class="pull-left">
                {{ Html::image('/images/rs logo.jpg', 'alt', ['width' => 150, 'height' => 150]) }}
            </div>
        </div>
        <div class="col-xs-9">
            <h1 class="text-center">Riverstar Fashion Wear Limited</h1>
            <h4 class="text-center">Gandharbapur, Murapara, Rupgonj, Narayangonj</h4>
            <h3 class="text-center">Salary Information List</h3>
        </div>
    </div>
    <hr>
    {{--<h1>--}}
        {{--<i class="fa fa-list-ul"></i>--}}
        {{--Salary Information List--}}

        {{--<a href="{{ url('salary/create') }}" class="btn btn-primary pull-right">--}}
            {{--<i class="fa fa-plus"></i> Salary Create--}}
        {{--</a>--}}
    {{--</h1>--}}
    {{--<hr>--}}
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>SL</th>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Month</th>
            <th>Days of Month</th>
            <th>Days of Attendance</th>
            <th>Year</th>
            <th>Salary Earn</th>
            <th>Hours of Overtime</th>
            <th>Overtime Earn</th>
            <th>Gross Salary</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $totalSalaryEarn = 0;
            $totalOvertime = 0;
            $totalOvertimeEarn = 0;
            $totalGrossSalary = 0;
        ?>
        @foreach($salaries as $salary)
            <tr>
                <td>{{ $salary->id }}</td>
                <td>{{ $salary->employee->id }}</td>
                <td>{{ $salary->employee->name }}</td>
                <td>{{ $salary->month->name }}</td>
                <td>{{ $salary->days_of_month }}</td>
                <td>{{ $salary->days_of_attendance }}</td>
                <td>{{ $salary->year->year }}</td>
                <td class="text-right">{{ number_format($salary->salary_earn, 2) }}</td>
                <td class="text-right">{{ number_format($salary->hours_of_overtime, 2) }}</td>
                <td class="text-right">{{ number_format($salary->overtime_earn, 2) }}</td>
                <td class="text-right">{{ number_format($salary->gross_salary, 2) }}</td>
                <td>{!! Html::link("salary/$salary->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-success']) !!}</td>
            </tr>
            <?php
                $totalSalaryEarn += $salary->salary_earn;
                $totalOvertime += $salary->hours_of_overtime;
                $totalOvertimeEarn += $salary->overtime_earn;
                $totalGrossSalary += $salary->gross_salary;
            ?>
        @endforeach
        <tr>
            <td colspan="3" class="text-right"><b>Total</b></td>
            <td colspan="5" class="text-right"><b>{{ number_format($totalSalaryEarn, 2) }}</b></td>
            <td class="text-right"><b>{{ number_format($totalOvertime, 2) }}</b></td>
            <td class="text-right"><b>{{ number_format($totalOvertimeEarn, 2) }}</b></td>
            <td class="text-right"><b>{{ number_format($totalGrossSalary, 2) }}</b></td>
        </tr>
        </tbody>
    </table>
    <p>Salary in word: <b>{{ convert_number_to_words($totalGrossSalary) }} Taka</b></p>
@endsection