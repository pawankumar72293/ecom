<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Task;
class TaskController extends Controller
{
    function __construct($foo = null)
    {
    	$this->foo = $foo;
    }
    public function ajax($value='')
	{
	    return view('category.ajax');
	}
	public function insert(TaskRequest $request)
    {
     //print_r($request->Schoolname);die;
    foreach($request->Schoolname as $key => $name) {

	  $data =new Task;
	  $data->Schoolname = $name;
	  $data->Major = $request->Major[$key];
	  $data->Degree = $request->Degree[$key];
      //print_r($data);       
      $data->save();
          
   }
}
}
