<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
  .center {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
          }
          .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
             position: absolute;
              top: 50%;
              left: 50%;
          }

          /* Safari */
          @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
          }

          @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
          }
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active">{{ link_to_route('dashboard','HOME','',['class'=>'btn btn-primary ','id'=>''])}}</li>
      <li>
      	 <li class="active">{{ link_to_route('addcategory','ADD','',['class'=>'btn btn-primary','id'=>''])}}</li>  
      </li>
      <li>
         <li class="active">{{ link_to_route('ajaxcategory','Form','',['class'=>'btn btn-primary','id'=>''])}}</li>  
      </li>
      <li>
        <li class="active">{{ link_to_route('addRegister','Register','',['class'=>'btn btn-primary','id'=>''])}}</li>  
     </li>
     <li>
      <li class="active">{{ link_to_route('loginForm','Login','',['class'=>'btn btn-primary','id'=>''])}}</li>  
   </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
  <h1 style="display: none;" class="loader center"></div></h1>
  @include('layouts.adminError')
	@yield('body')
</div>

</body>
</html>
