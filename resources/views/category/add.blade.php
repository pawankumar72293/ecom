@extends('layouts.admin')
@section('body')
<div class="container">
  <h2>Form</h2>
  {{ link_to_route('categoryList','Back','',['class'=>'btn btn-danger','id'=>''])}}
  {{ Form::open(['route'=>['saveCategory'],'files'=>true]) }}
    <div class="form-group">
      {{-- Form::select('category_id',$category,'',['class'=>'clsname','id'=>'dss','placeholder'=>'Select Category']) --}}

      {{ Form::label('name','Name:')}}
      
      {{ Form::text('name','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter name']) }}
      <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group">
      {{ Form::label('category_type','CategoryType:')}}
     
      {{ Form::text('category_type','',['class'=>'form-control','id'=>'dss','placeholder'=>'CategoryType']) }}
      <span class="text-danger">{{ $errors->first('category_type') }}</span>
    </div>
    <div class="form-group">
      {{ Form::label('gender','Gender:')}}
      {{ Form::radio('gender', 'male', true, ['class'=>'form-check-input', 'id' => 'inlineRadio1']) }}
      {{ Form::label('inlineRadio1', 'Male', ['class' => 'form-check-label']) }}

      {{ Form::radio('gender','female', '', ['class'=>'form-check-input', 'id' => 'inlineRadio2']) }}
      {{ Form::label('inlineRadio2', 'Female', ['class' => 'form-check-label']) }}
    </div>
    <div class="form-group">
      {{ Form::label('workday','workday:')}}
      <br> 
      {!! Form::label('monday', 'Monday') !!}
      {!! Form::checkbox('workday[]', 'monday') !!}
      <br>
      {!! Form::label('tuesday', 'Tuesday') !!}
      {!! Form::checkbox('workday[]', 'tuesday') !!}
      <br>
      {!! Form::label('wednesday', 'Wednesday') !!}
      {!! Form::checkbox('workday[]', 'wednesday') !!}
      <br>
      {!! Form::label('thursday', 'Thursday') !!}
      {!! Form::checkbox('workday[]', 'thursday') !!}
      <br>
      {!! Form::label('friday', 'Friday') !!}
      {!! Form::checkbox('workday[]', 'friday') !!}
      <br>
      {!! Form::label('saturday', 'Saturday') !!}
      {!! Form::checkbox('workday[]', 'saturday') !!}
      <label for="chk">jhfu</label>
      <input type="checkbox" id="chk" name="dfdf">
      <br>
      {!! Form::label('sunday', 'Sunday') !!}
      {!! Form::checkbox('workday[]', 'sunday') !!}
    </div>
    {{ Form::button('Save',['class'=>'clsname','id'=>'shthe','type'=>'submit']) }}
    {{ Form::button('Reset',['class'=>'clsname','id'=>'shthe','type'=>'reset']) }}
 
  {{ Form::close() }}
</div>
@endsection
