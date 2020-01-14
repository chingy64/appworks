@extends('layouts.admin')



@section('content')

<h1><b>Create Post</b></h1>

<div class="row">
         {!! Form::open(['method'=>'POST', 'action'=> 'adminPostsController@store', 'files'=>true]) !!}

           <div class="form-group">
                 {!! Form::label('title', 'Title:') !!}
                 {!! Form::text('title', null, ['class'=>'form-control'])!!}
           </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', [1=>'laravel',2=>'javascript'], null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null,['class'=>'form-control'])!!}
             </div>


            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control'])!!}
            </div>

             <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
             </div>
             
             @include('includes.error');

           {!! Form::close() !!}

    </div>


@stop