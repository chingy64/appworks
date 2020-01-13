@extends('layouts.admin')

@section('content')


<div class="row">

<div class="col-sm-3">


<img src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/400

C/O https://placeholder.com/'}}" alt="" class="img-responsive img-rounded">


</div>


<div class="col-sm-9">
<h1>Edit User</h1>

{!! Form::model($user, ['method'=>'PATCH', 'action'=> ['adminUsersController@update', $user->id],'files'=>true]) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! Form::select('role_id',  $roles , null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('is_active', 'Status:') !!}
    {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control'])!!}
</div>


<div class="form-group">
    {!! Form::label('photo_id', 'Photo:') !!}
    {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class'=>'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
</div>

  @include('includes.error')

{!! Form::close() !!}

</div>

</div>
@stop




