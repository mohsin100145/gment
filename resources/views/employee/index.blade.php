@extends('layouts.app')

@section('content')

    <h1>
        <i class="fa fa-list-ul"></i>
        Employee Information List

        @can('admin-access')
            <a href="{{ url('employee/create') }}" class="btn btn-primary pull-right">
                <i class="fa fa-plus"></i> Add Employee
            </a>
        @endcan
    </h1>
    <hr>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Basic Salary</th>
            <th>Image</th>
            <th>Edit</th>
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
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection