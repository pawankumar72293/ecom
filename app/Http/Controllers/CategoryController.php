<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Session;
use Crypt;
class CategoryController extends Controller
{
    function __construct($foo = null)
    {
        $this->paginate = 14;
    }

    public function dashboard($value=null)
    {
        //$details = array('name' => 'Sonu','Girlfriend'=>'Soni');

//          $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
// $details = 'dfd';
// $email = 'pawanchhapola72293@gmail.com';
//  $data = \Mail::to($email)->send(new \App\Mail\TestMail($details));
// die;
        return view('adminDashboard');
    }
    public function add($value='')
    {
        //$category=Category::pluck('name','id');
        return view('category.add');
    }
    public function insert(CategoryRequest $request)
    {
        //$request->validate(['name'=>'required','category_type'=>'required']);
        $data=new Category;
        $data->name=$request->name;
        $data->category_type=$request->category_type;
        $data->gender=$request->gender;
        $data->workday=json_encode($request->workday);
        if($data->save()){
            return redirect()->route('categoryList')->with('success','Data saved successfully');
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
    }
    public function edit($id=null)
    {
        //$category=Category::pluck('name','id');
        $data=Category::where('id',$id)->first();
        if ($data) {
            return view('category.edit',compact('data'));
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
        
    }
    public function update(CategoryRequest $request,$id=null)
    {
       $data=Category::where('id',$id)->first();
       if ($data) {
            $data->name=$request->name;
            $data->category_type=$request->category_type;
            if($data->save()){
                return redirect()->route('categoryList')->with('success','Data updated successflly');
            }else{
                return redirect()->back()->with('failed','Failed ! Try again.');
            }
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
    }
    public function list(Request $request, $value='')
    {   
        if(isset($request->start_Date) && isset($request->end_Date)){
            $from = date($request->start_Date);
            $to = date($request->end_Date);
            $data=Category::whereBetween('created_at', [$from, $to])->orderBy('id','desc');
            $total=$data->count();
            $data=$data->paginate($this->paginate);
            $page=$data->perPage()*($data->currentPage()-1);
        }
        elseif(isset($request->date_type))
        {
            $requested_days = date('Y-m-d',strtotime('-'.$request->date_type.' day'));
            $to_date = date('Y-m-d');

            $data=Category::whereBetween('created_at', [$requested_days, $to_date])->orderBy('id','desc');
            $total=$data->count();
            $data=$data->paginate($this->paginate);
            $page=$data->perPage()*($data->currentPage()-1);
        }
        else
        {
            $data=Category::orderBy('id','desc');
            $total=$data->count();
            $data=$data->paginate($this->paginate);
            $page=$data->perPage()*($data->currentPage()-1);
        }


        return view('category.list',compact('data','total','page'));
        
    }

    public function delete($id=null)
    {
        $data=Category::where('id',$id)->first();
        if ($data->delete()) {
            return redirect()->route('categoryList')->with('success','Data deleted successfully');
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
        
    }

    public function deletedList($value='')
    {
        $data=Category::orderBy('id','desc')->onlyTrashed();
        $total=$data->count();
        $data=$data->paginate($this->paginate);
        $page=$data->perPage()*($data->currentPage()-1);
        return view('category.deletedList',compact('data','total','page')); 
    }
    public function restore($id='')
    {
        $data=Category::where('id',$id)->withTrashed()->first();
        if ($data->restore()) {
            return redirect()->route('deletedCategoryList')->with('success','Data deleted successflly');
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
    }

    public function permanentDelete($id='')
    {
        $data=Category::where('id',$id)->withTrashed()->first();
        if ($data->forceDelete()) {
            return redirect()->route('deletedCategoryList')->with('success','Data Permanent deleted successflly');
        }else{
            return redirect()->back()->with('failed','Failed ! Try again.');
        }
    }
    public function deleteCheckedStudents(Request $request)
    {
        $ids = $request->ids;
        Category::whereIn('id',$ids)->forceDelete();
       return response()->json(['success'=>"successfully"]);
    }

   
}
