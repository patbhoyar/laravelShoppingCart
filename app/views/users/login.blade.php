@extends('master')

@section('pageContent')

<div>
    {{ Form::open(array('url' => 'login')) }}

        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::email('email', null) }}


        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        <br/>
        {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}

        <div>Not a member? {{ link_to('signup', 'Sign Up') }}</div>

    {{ Form::close() }}
</div>

@stop