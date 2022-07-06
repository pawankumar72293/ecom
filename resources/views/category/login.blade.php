@extends('layouts.admin')
@section('body')
<div class="container">
  <h2>Login Form</h2>
 
  {{ Form::open(['route'=>['loginForm'],'files'=>true]) }}
    
      <div class="form-group">
        {{-- Form::select('category_id',$category,'',['class'=>'clsname','id'=>'dss','placeholder'=>'Select Category']) --}}
  
        {{ Form::label('email','E-mail:')}}
        
        {{ Form::text('email','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter E-mail']) }}
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>
    <div class="form-group">
      {{ Form::label('password','Password:')}}
     
      {{ Form::text('password','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter password']) }}
      <span class="text-danger">{{ $errors->first('password') }}</span>
    </div>

    {{ Form::button('Login',['class'=>'btn btn-outline-primary"','id'=>'shthe','type'=>'submit']) }}
    
  {{ Form::close() }}
</div>
@endsection

