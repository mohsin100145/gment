@if(isset($salary))
    {!! Form::model($salary, ['url' => "salary/$salary->id", 'method' => 'put', 'class' => 'form-horizontal']) !!}
@else
    {!! Form::open(['url' => 'salary', 'method' => 'post', 'class' => 'form-horizontal']) !!}
@endif
<div class="required form-group{{ $errors->has('employee_id') ? ' has-error' : '' }}">
    {!! Form::label('employee_id', 'Employee ID', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        <div class="required input-group">
            {!! Form::text('employee_id',null, ['id' => 'employee-id', 'class' =>'form-control', 'autocomplete' => 'off', 'placeholder' => 'Enter Employee ID', 'required' => 'required' ]) !!}
            <span class="input-group-btn">
                <button type="button" id="employee-id-search" data-url="{{url('/salary/employee-name-show')}}" class="btn btn-success"><i class="fa fa-search"></i> Search</button>
            </span>
        </div>
        <span class="help-block text-danger">
            {!! $errors->first('employee_id') !!}
        </span>
    </div>
</div>
<div>
    <span id="employee_name_show"></span>
</div>
<div class="required form-group" {{ $errors->has('year_id') ? 'has-error' : '' }}>
    {!! Form::label('year_id', 'Select Year', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::select('year_id', $yearList, null, ['class' => 'form-control chosen', 'placeholder' => 'Select Year', 'required']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('year_id') }}
        </span>
    </div>
</div>
<div class="required form-group" {{ $errors->has('month_id') ? 'has-error' : '' }}>
    {!! Form::label('month_id', 'Select Month', ['class' => 'control-label col-sm-3']) !!}
    <div class="col-sm-9">
        {!! Form::select('month_id', $monthList, null, ['class' => 'form-control chosen', 'placeholder' => 'Select Month', 'required']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('month_id') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('days_of_month') ? 'has-error' : ''}}">
    {!! Form::label('days_of_month', 'Days of Month', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::number('days_of_month', null, ['class' => 'form-control', 'placeholder' => 'Enter Days of Month', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('days_of_month') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('days_of_attendance') ? 'has-error' : ''}}">
    {!! Form::label('days_of_attendance', 'Days of Attendance', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::number('days_of_attendance', null, ['class' => 'form-control', 'placeholder' => 'Enter Days of Attendance', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('days_of_attendance') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('hours_of_overtime') ? 'has-error' : ''}}">
    {!! Form::label('hours_of_overtime', 'Hours of Overtime', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::number('hours_of_overtime', null, ['class' => 'form-control', 'placeholder' => 'Enter Hours of Overtime', 'autocomplete' => 'off']) !!}
        <span class="text-danger">
            {{ $errors->first('hours_of_overtime') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('remarks') ? 'has-error' : ''}}">
    {!! Form::label('remarks', 'Remarks', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('remarks', null, ['class' => 'form-control', 'placeholder' => 'Enter Remarks', 'autocomplete' => 'off']) !!}
        <span class="text-danger">
            {{ $errors->first('remarks') }}
        </span>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}