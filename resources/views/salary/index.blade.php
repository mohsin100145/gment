@extends('layouts.app')

@section('content')

    <h1>
        <i class="fa fa-list-ul"></i>
        Salary Information List

        <a href="{{ url('salary/create') }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus"></i> Salary Create
        </a>
    </h1>
    <hr>
    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($salaries as $salary)
            <tr>
                <td>{{ $salary->id }}</td>
                <td>{{ $salary->employee_id }}</td>
                <td>{!! Html::link("salary/$salary->id/edit",' Edit', ['class' => 'fa fa-edit btn btn-success']) !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection