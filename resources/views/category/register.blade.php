@extends('layouts.admin')
@section('body')
<div class="container">
  <h2>Register Form</h2>
 
  {{ Form::open(['route'=>['saveRegister'],'files'=>true]) }}
    <div class="form-group">
      {{-- Form::select('category_id',$category,'',['class'=>'clsname','id'=>'dss','placeholder'=>'Select Category']) --}}

      {{ Form::label('name','Name:')}}
      
      {{ Form::text('name','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter name']) }}
      <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group">
        {{-- Form::select('category_id',$category,'',['class'=>'clsname','id'=>'dss','placeholder'=>'Select Category']) --}}
  
        {{ Form::label('mobile','Mobile:')}}
        
        {{ Form::text('mobile','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter mobile']) }}
        <span class="text-danger">{{ $errors->first('mobile') }}</span>
      </div>
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

    {{ Form::button('Save',['class'=>'button btn outline-primary','id'=>'shthe','type'=>'submit']) }}
    {{ Form::button('Reset',['class'=>'button btn btn-danger','id'=>'shthe','type'=>'reset']) }}
 
  {{ Form::close() }}
</div>
@endsection

