@extends('master')

@section('pageContent')

<div>

    {{ Form::open(array('url' => 'signup', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'loginFormContainer')) }}

    <div class="text-center"><h2>Sign Up for MyCart</h2></div>
    <br/>

    <div class="form-group">
        <div class="col-md-5 col-xs-4">
            {{ Form::label('email', 'E-Mail Address', array('class' => 'control-label pull-right')) }}
        </div>
        <div class="col-md-4 col-xs-6">
            {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'johnsmith@gmail.com')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-xs-4">
            {{ Form::label('password', 'Password', array('class' => 'control-label pull-right')) }}
        </div>
        <div class="col-md-4 col-xs-6">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => '**********')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-xs-4">
            {{ Form::label('password', 'Confirm Password', array('class' => 'control-label pull-right')) }}
        </div>
        <div class="col-md-4 col-xs-6">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => '**********')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-5 col-xs-4">
        </div>
        <div class="col-md-4 col-xs-6">
            {{ Form::submit('Sign Up', array('class' => 'btn btn-primary col-xs-6')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>
@stop