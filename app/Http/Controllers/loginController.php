<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use Session;
use Crypt;

class loginController extends Controller
{
    public function register($value='')
    {
        return view('category.register');
    } 
    public function added(Request $request)
    {
        
        //$request->validate(['name'=>'required','category_type'=>'required']);
        $data=new login;
        $data->name=$request->name;
        $data->mobile=$request->mobile;
        $data->email=$request->email;
        $data->password=Crypt::encrypt($request->password);
      
        if($data->save()){
            return redirect()->route('addRegister')->with('success','Data saved successfully');
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
    }
    public function login($value='')
    {
        return view('category.login');
    } 
}
