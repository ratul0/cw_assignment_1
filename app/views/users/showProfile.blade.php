@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">Your Profile</h3>

                </div>


                @include('includes.alert')

                <div class="panel-body">


                    <div class="row text-center">
                        <p>Your Username: {{$user->name}}</p>
                    </div>
                    <div class="row text-center">
                        <p>Email : {{$user->email}}</p>
                    </div>

                    <div class="row text-center">
                        <a href="{{route('user.profile.update')}}" class="btn btn-lg btn-success">Edit Your Profile</a>
                    </div>


                </div>



            </div>

            <span class="pull-right">
                    <em>Last Updated: {{$user->updated_at->diffForHumans()}} </em>
            </span>
        </div>
    </div>
@stop