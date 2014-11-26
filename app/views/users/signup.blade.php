@extends('master')

@section('pageContent')
<div class="">

    {{ Form::open(array('url' => 'login')) }}
    <table class="col-lg-offset-4" id="signupTable">
        <tbody>
            <tr>
                <td>{{ Form::label('email', 'E-Mail Address') }}</td>
                <td>{{ Form::email('email', null) }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('password', 'Password') }}</td>
                <td>{{ Form::password('password', null) }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('passwordConfirm', 'Confirm Password') }}</td>
                <td>{{ Form::password('passwordConfirm', null) }}</td>
            </tr>
        </tbody>
    </table>
    {{ Form::close() }}
</div>
@stop