@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Edit Your Profile</h3>
                </div>
                @include('includes.alert')

                <div class="panel-body">
                    {{Form::open(['route'=>'user.doProfile', 'method'=> 'put','role'=>'form'])}}
                    <fieldset>

                        <div class="form-group">
                            {{ Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'Name', 'autofocus')) }}
                        </div>

                        <div class="form-group">
                            {{Form::password('password',['class'=>'form-control','placeholder'=>'New Password'])}}
                        </div>

                        <div class="form-group">
                            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        {{Form::submit('Edit Profile',['class'=> 'btn btn-lg btn-success btn-block'])}}
                    </fieldset>

                    {{Form::close()}}
                </div>



            </div>
        </div>
    </div>
@stop