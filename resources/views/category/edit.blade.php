@extends('layouts.admin')
@section('body')
<div class="container">
  <h2>Update Category</h2>
  {{ link_to_route('categoryList','Back','',['class'=>'btn btn-primary','id'=>''])}}
  {{ Form::open(['route'=>['updateCategory',$data->id],'files'=>true]) }}
  
    <div class="form-group">
      {{-- Form::select('category_id',$category,$data->id,['class'=>'clsname','id'=>'dss','placeholder'=>'Select Category']) --}}
      {{ Form::label('name','Name:')}}
      
      {{ Form::text('name',$data->name,['class'=>'form-control','id'=>'dss','placeholder'=>'Enter name']) }}
      <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group">
      {{ Form::label('category_type','CategoryType:')}}
     
      {{ Form::text('category_type',$data->category_type,['class'=>'form-control','id'=>'dss','placeholder'=>'CategoryType']) }}
      <span class="text-danger">{{ $errors->first('category_type') }}</span>
    </div>
   
    {{ Form::button('Update',['class'=>'clsname','id'=>'shthe','type'=>'submit']) }}
    {{ link_to_route('categoryList','Back','',['class'=>'btn btn-primary','id'=>''])}}
  </form>
  {{ Form::close() }}
</div>
@endsection
