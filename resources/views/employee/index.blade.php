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
            <h3 class="text-center">Employee Information List</h3>
        </div>
    </div>
    <hr>
    {{--<h1>--}}
        {{--<i class="fa fa-list-ul"></i>--}}
        {{--Employee Information List--}}

        {{--@can('admin_access')--}}
            {{--<a href="{{ url('employee/create') }}" class="btn btn-primary pull-right">--}}
                {{--<i class="fa fa-plus"></i> Add Employee--}}
            {{--</a>--}}
        {{--@endcan--}}
    {{--</h1>--}}
    {{--<hr>--}}
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Basic Salary</th>
            <th>Image</th>
            <th>Edit</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->basic_salary }}</td>
                <td>{{ Html::image('uploads/'.$employee->image, 'alt', ['width' => 70, 'height' => 70]) }}</td>
                <td>{!! Html::link("employee/$employee->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-success']) !!}</td>
                <td>{!! Html::link("employee/$employee->id",' View', ['class' => 'fa fa-edit btn btn-info']) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection