@if(Session::has('success'))
<div class="alert alert-success">
  <strong>Success!</strong> {{ Session::get('success') }}
</div>
@elseif(Session::has('failed'))
<div class="alert alert-danger">
  <strong>Danger!</strong> {{ Session::get('failed') }}
</div>
@else
@endif