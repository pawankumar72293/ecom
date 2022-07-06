@extends('layouts.admin')
@section('body')
<div class="container">
  @csrf
  <h2>Active Total : {{ $total }}</h2>
  {{ link_to_route('addcategory','Add','',['class'=>'btn btn-primary','id'=>''])}} 
  {{ link_to_route('deletedCategoryList','Deleted','',['class'=>'btn btn-danger','id'=>''])}}

   <button type="button" class="btn btn-success" id="deleteAllSelectedRecords">DeleteAll</button>
      <form action="{{route('categoryList')}}" method="get">
        <select class="form-control col-lg-4" name="date_type" onchange="date_select_(this)" aria-label="Default select example">
          <option value="0">Open this select menu</option>
          <option value="7">Week</option>
          <option value="30">Month</option>
          <option value="120">Qtr</option>
        </select> 
      </form>
      <form action="{{route('categoryList')}}" method="get">
        <div class="row grid-margin align-items-center">
            <div class="col-md-2">
                <div class="form-group">
                 <label>FROM DATE</label>
                 <input type="date" class="form-control" name="start_Date" value="<?php if(isset($_GET['start_Date'])){ echo $_GET['start_Date'];}?>" required>
               </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>TO DATE</label>
                    <input type="date" class="form-control" name="end_Date" value="<?php if(isset($_GET['end_Date'])){ echo $_GET['end_Date'];}?>" required>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-sm active" type="submit">Search</button>
            </div>
        </div>
      </form>
      <a  class="btn btn-outline-info" href="{{route('categoryList')}}"><i class="menu-icon mdi mdi-filter"></i>RESET FILTER</a>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th><input type="checkbox" name="" id="chkCheckAll" />ALL Selected</th>
        <th>Sr:</th>
        <th>Name</th>
        <th>Category</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse($data as $key => $val)
      <tr id="sid{{$val->id}}">
        <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$val->id}}" /></td>
        <td>{{ ++$page }}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->category_type}}</td>
        <td>
          {!! Html::decode(link_to_route('editCategory','Edit',$val->id,['class'=>'btn btn-primary','id'=>''])) !!} 
          {!! Html::decode(link_to_route('removeCategory','Remove',$val->id,['class'=>'btn btn-danger','id'=>''])) !!} 
        </td>
      </tr>
      @empty
        <tr>
        <td colspan="4">Data not found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="col-md-12">
    {{$data->appends($_GET)->links()}}
  </div>
</div>
<script>
  $(function(e) {
    $("#chkCheckAll").click(function(){
$(".checkBoxClass").prop('checked',$(this).prop('checked'));
    });
    $("#deleteAllSelectedRecords").click(function(e){
e.preventDefault();
var allids =[];
$("input:checkbox[name=ids]:checked").each(function(){
allids.push($(this).val());
});
$.ajax({
  url:"{{route('removeCategoryall')}}",
  type:'DELETE',
  data:{
    ids:allids,
    _token:'{{csrf_token()}}'
  },
  beforeSend:function(){
    $('.loader').show();
  },
  success:function(response){
    $.each(allids,function(key,val){
      $('#sid'+val).remove();
    });
    $('.loader').hide();
  }
});
    });
  });
</script>
<script>
  function date_select_(item) 
  {
    if(item.value!="0"){
      item.form.submit();
    }
  }
</script>
@endsection