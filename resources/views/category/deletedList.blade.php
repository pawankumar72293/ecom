@extends('layouts.admin')
@section('body')
<div class="container">
  <h2>Deleted Total : {{ $total }}</h2>
  {{ link_to_route('categoryList','Back','',['class'=>'btn btn-primary','id'=>''])}}         
  <table class="table">
    <thead>
      <tr>
        <th>Sr:</th>
        <th>Name</th>
        <th>Type</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse($data as $key => $val)
      <tr>
        <td>{{ ++$page }}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->category_type}}</td>
        <td>
            {!! Html::decode(link_to_route('restoreCategory','Restore',$val->id,['class'=>'btn btn-primary','id'=>''])) !!} 
            {!! Html::decode(link_to_route('permanentDltCategory','Delete',$val->id,['class'=>'btn btn-danger','id'=>''])) !!} 
            
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
    {{ $data->links()}}
  </div>
</div>
@endsection