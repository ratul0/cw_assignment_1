@extends('layouts.default')

@section('content')
    @include('includes.alert')
    <?php 
    	$user = Auth::user();
     ?>
    <div style="padding:20px;">
    	@if($user->photo == null)
    	<img src="{{'http://localhost:8000/usersImage/none.jpg'}}">
    	@else
    	<img src="{{'http://localhost:8000/'.$user->photo}}">
    	@endif
    </div>
@stop