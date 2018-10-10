@extends('layouts.app')

@section('content')
    <h1>Account Information</h1>
    <?php
        $user_info = $user->user_info;
        $user_data = $user->user_data[0];
    ?>

    {!! Form::open(['action'=> 'ProfileAccountController@update', 'method' => 'POST' ]) !!}
    
    <div class="form-group">
        {{ Form::label('first_name', 'First Name :')}}
        {{ Form::text('first_name', $user_data->first_name, ['class' => 'form-control', 'placeholder' => 'First Name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('last_name', 'Last Name :')}}
        {{ Form::text('last_name', $user_data->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address1', 'Address Line 1 :')}}
        {{ Form::text('address2', $user_data->address1, ['class' => 'form-control', 'placeholder' => 'Address Line 1']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address2', 'Address Line 2 :')}}
        {{ Form::text('address2', $user_data->address2, ['class' => 'form-control', 'placeholder' => 'Address Line 2']) }}
    </div>

    <div class="form-group">
        {{ Form::label('cellular', 'Cellular :')}}
        {{ Form::text('cellular', $user_data->cellular, ['class' => 'form-control', 'placeholder' => 'Cellular']) }}
    </div>

    <div class="form-group">
        {{ Form::label('phone', 'Phone :')}}
        {{ Form::text('phone', $user_data->phone, ['class' => 'form-control', 'placeholder' => 'Phone']) }}
    </div>

    <div class="form-group">
        {{ Form::label('website', 'Website :')}}
        {{ Form::text('website', $user_data->website, ['class' => 'form-control', 'placeholder' => 'Website']) }}
    </div>
    
    {{ Form::hidden('identifier', $user_info->id) }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}

@endsection