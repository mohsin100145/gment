@extends('layouts.app')

@section('content')

    <?php

    echo convert_number_to_words(123456);
    ?>

    <h1>
        <i class="fa fa-pencil"></i>
        Salary Information Create
    </h1>
    @include('salary._form')
@endsection