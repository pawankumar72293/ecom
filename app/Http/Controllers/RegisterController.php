<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterModel;
class RegisterController extends Controller
{
    public function index(Request $request){
        $request->validate(
            [
                'name' => 'required', 
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8'
            ],[
                'name.required' => 'Name is required',
                'username.required' => 'Username is required',
                'email.required' => 'E-Mail is required',
                'password.required' => 'Password is required'
        ]);
        $register = new RegisterModel;
        $register->name = $request['name'];
        $register->username = $request['username'];
        $register->email = $request['email'];
        $register->password = md5($request['password']);
        $register->save();
        return redirect('category.registerd_users');
    }

    public function show(){
        $users = RegisterModel::all();
        $data = compact('users');
        return view('category.registerd_users')->with($data);
    }

    public function destroy($id){
        $user = RegisterModel::find($id);
        if(!is_null($user)){
            $user->delete();
        }
        return redirect('category.registerd_users');
    }

    public function edit($id){
       $user  = RegisterModel::find($id);
       if(is_null($user)){
        return redirect('category.registerd_users');
       }
       else{
            $title = "Update User";
            $url = url('/update').'/'.$id;
            $data = compact('user','url', 'title');
            return view('category.register')->with($data);
       }
    }

    public function update(Request $request , $id){
        $register = RegisterModel::find($id);
        $register->name = $request['name'];
        $register->username = $request['username'];
        $register->email = $request['email'];
        $register->save();
        return redirect('category.registerd_users');
    }


}
