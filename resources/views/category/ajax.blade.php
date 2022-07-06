@extends('layouts.admin')
@section('body')
<div class="panel panel-default">
	<div class="panel-body">
		 {{ Form::open(['route'=>['savetask'],'files'=>true]) }}
		<div class="col-sm-4 nopadding">
			<div class="form-group">
			  {{ Form::text('Schoolname[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Schoolname']) }}
			</div>
		</div>
		<div class="col-sm-4 nopadding">
			<div class="form-group">
			  {{ Form::text('Major[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Major']) }}
			</div>
		</div>
		<div class="col-sm-3 nopadding">
			<div class="form-group">
			  {{ Form::text('Degree[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Degree']) }}
			</div>
		</div>
		<div>
		  <button class="btn btn-success" type="button"  onclick="education_fields();">Add More </button>
		</div>
		<div id="education_fields">

		</div>
		{{ Form::button('Save',['class'=>'clsname','id'=>'shthe','type'=>'submit','style' => 'margin: 28px']) }}
	    {{ Form::close() }}
	</div>
</div>
@endsection
<script type="text/javascript">
	var room = 1;
	function education_fields() 
	{
	    room++;
	    var objTo = document.getElementById('education_fields')
	    var divtest = document.createElement("div");
		divtest.setAttribute("class", "form-group removeclass"+room);
		var rdiv = 'removeclass'+room;
	    divtest.innerHTML = '<div class="col-sm-4 nopadding"><div class="form-group"> {{ Form::text('Schoolname[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Schoolname']) }}</div></div><div class="col-sm-4 nopadding"><div class="form-group"> {{ Form::text('Major[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Major']) }}</div></div><div class="col-sm-3 nopadding"><div class="form-group"> {{ Form::text('Degree[]','',['class'=>'form-control','id'=>'dss','placeholder'=>'Enter Degree']) }}</div></div><div class="col-sm-1"><div class="form-group"><button class="btn btn-danger" type="button"onclick="remove_education_fields('+ room +');">Remove</button></div></div><div class="clear"></div>';
	    
	    objTo.appendChild(divtest)
	}
	function remove_education_fields(rid) 
	{
	   $('.removeclass'+rid).remove();
	}
</script>
