@if(isset($employee))
    {!! Form::model($employee, ['url' => "employee/$employee->id", 'method' => 'put', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
@else
    {!! Form::open(['url' => 'employee', 'method' => 'post', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
@endif
<div class="required form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name', 'autocomplete' => 'off', 'required', 'autofocus']) !!}
        <span class="text-danger">
            {{ $errors->first('name') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('joining_date') ? 'has-error' : ''}}">
    {!! Form::label('joining_date', 'Joining Date', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('joining_date', null, ['class' => 'form-control', 'placeholder' => 'DD/MM/YYYY', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('joining_date') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    {!! Form::label('salary', 'Salary', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('salary', null, ['onkeypress' => 'validate(event)', 'salary', 'class' => 'form-control', 'placeholder' => 'Enter Salary', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('salary') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('basic_salary') ? 'has-error' : ''}}">
    {!! Form::label('basic_salary', 'Basic Salary', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('basic_salary', null, ['onkeypress' => 'validate(event)', 'basic_salary', 'class' => 'form-control', 'placeholder' => 'Enter Basic Salary', 'autocomplete' => 'off', 'required', 'readOnly', 'tabindex' => '-1']) !!}
        <span class="text-danger">
            {{ $errors->first('basic_salary') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('food_allowance') ? 'has-error' : ''}}">
    {!! Form::label('food_allowance', 'Food Allowance', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('food_allowance', null, ['onkeypress' => 'validate(event)', 'food_allowance', 'class' => 'form-control', 'placeholder' => 'Enter Food Allowance', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('food_allowance') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('medical_allowance') ? 'has-error' : ''}}">
    {!! Form::label('medical_allowance', 'Medical Allowance', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('medical_allowance', null, ['onkeypress' => 'validate(event)', 'medical_allowance', 'class' => 'form-control', 'placeholder' => 'Enter Medical Allowance', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('medical_allowance') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('conveyance_allowance') ? 'has-error' : ''}}">
    {!! Form::label('conveyance_allowance', 'Conveyance Allowance', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('conveyance_allowance', null, ['onkeypress' => 'validate(event)', 'conveyance_allowance', 'class' => 'form-control', 'placeholder' => 'Enter Convention Allowance', 'autocomplete' => 'off', 'required']) !!}
        <span class="text-danger">
            {{ $errors->first('conveyance_allowance') }}
        </span>
    </div>
</div>
<div class="required form-group {{ $errors->has('home_allowance') ? 'has-error' : ''}}">
    {!! Form::label('home_allowance', 'Home Allowance', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('home_allowance', null, ['onkeypress' => 'validate(event)', 'home_allowance', 'class' => 'form-control', 'placeholder' => 'Enter Home Allowance', 'autocomplete' => 'off', 'required', 'readOnly', 'tabindex' => '-1']) !!}
        <span class="text-danger">
            {{ $errors->first('home_allowance') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('salary_increment') ? 'has-error' : ''}}">
    {!! Form::label('salary_increment', 'Salary Increment', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('salary_increment', null, ['onkeypress' => 'validate(event)', 'class' => 'form-control', 'placeholder' => 'Enter Increase Salary', 'autocomplete' => 'off']) !!}
        <span class="text-danger">
            {{ $errors->first('salary_increment') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
    {!! Form::label('mobile_no', 'Mobile No.', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('mobile_no', null, ['class' => 'form-control', 'placeholder' => 'Enter Mobile No.', 'autocomplete' => 'off']) !!}
        <span class="text-danger">
            {{ $errors->first('mobile_no') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter Address', 'autocomplete' => 'off']) !!}
        <span class="text-danger">
            {{ $errors->first('address') }}
        </span>
    </div>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-9">
        {!! Form::file('image', ['class' => 'form-control',  'onchange' => 'readURL(this)', 'placeholder' => 'Enter Image', 'autocomplete' => 'off']) !!}
        <span class="help-block text-danger">
            {{ $errors->first('image') }}
        </span>
        <div>
            {{ Html::image('#', 'your image',['id' => 'blah']) }}
        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}

@section('script')
    <script src="{{ asset('js/image-show.js') }}"></script>
    <script src="{{ asset('js/datepicker-show.js') }}"></script>
    <script src="{{ asset('js/employee.js') }}"></script>
    <script src="{{ asset('js/text-to-number.js') }}"></script>
@endsection


