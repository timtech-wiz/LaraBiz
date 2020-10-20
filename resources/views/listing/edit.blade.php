@extends('layouts.app')


@section('content')
 <h3><a class="btn btn-default" href="../home">Go Back</a></h3>
  <h1>Edit Listing</h1>
      
        {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
        <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{Form::text('name', $listing->name, ['class' => 'form-control', 'placeholder' => 'Enter Company Name'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('address', 'Address') }}
        {{Form::text('address', $listing->address, ['class' => 'form-control', 'placeholder' => 'Enter Company Address'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('website', 'Website') }}
        {{Form::text('website', $listing->website, ['class' => 'form-control', 'placeholder' => 'Enter Website'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{Form::text('email', $listing->email, ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('phone', 'Phone') }}
        {{Form::text('phone', $listing->phone, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number'])}}
        </div>
        
        <div class="form-group">
        {{ Form::label('bio', 'Biography') }}
        {{Form::textarea('bio', $listing->bio, ['class' => 'form-control', 'placeholder' => 'What Should We Know About You'])}}
        </div>
        
        <div class="form-group">
        {{ Form::hidden('_method', 'PUT') }}
         {{Form::submit('Update',['class' => 'btn btn-primary'])}}
        </div>
        
        
        {!! Form::close() !!}
@endsection