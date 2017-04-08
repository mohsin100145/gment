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
            <h3 class="text-center">Employee Information</h3>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-3">
            <table class="table">
                <tr>
                    <td style="border: 0;">Employee ID:</td>
                    <td style="border: 0;"><strong>{{ $employee->id }}</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Employee Name:</td>
                    <td style="border: 0;"><strong>{{ $employee->name }}</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Salary:</td>
                    <td  style="border: 0;"><strong>{{ number_format($employee->salary, 2) }} Taka</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Basic Salary:</td>
                    <td style="border: 0;"><strong>{{ number_format($employee->basic_salary, 2) }} Taka</strong></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <table class="table">
                <tr>
                    <td style="border: 0;">Joining Date:</td>
                    <td style="border: 0;"><strong>{{ $employee->joining_date }}</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Home Allowance:</td>
                    <td style="border: 0;"><strong>{{ number_format($employee->home_allowance, 2) }} Taka</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Food Allowance:</td>
                    <td style="border: 0;"><strong>{{ number_format($employee->food_allowance, 2) }} Taka</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Conveyance Allowance:</td>
                    <td style="border: 0;"><strong>{{ number_format($employee->conveyance_allowance, 2) }} Taka</strong></td>
                </tr>
                <tr>
                    <td style="border: 0;">Salary Increment:</td>
                    <td style="border: 0;"><strong>{{ number_format($employee->salary_increment, 2) }} Taka</strong></td>
                </tr>
            </table>
        </div>
        <div class="col-xs-0"></div>
        <div class="col-xs-3">
            <div class="pull-right">
                {{ Html::image('/uploads/' . $employee->image, 'alt', ['width' => 150, 'height' => 150]) }}
            </div>
        </div>
    </div>
    <div class="row">
        Salary in word: <b>{{ convert_number_to_words($employee->salary) }} Taka</b>
    </div>
@endsection