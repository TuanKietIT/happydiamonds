<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class WorkController extends Controller
{
    public function AuthLoGin()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }
        else{
             return Redirect::to('admin')->send();
        }
    }
     public function add_work()
    {
        $this->AuthLoGin();
    	return view('admin.add_work');
    }
    public function all_work()
    {
        $this->AuthLoGin();
    	$all_work = DB::table('tbl_work')->get();
    	$menage_work = view('admin.all_work')->with('all_work',$all_work);
    	return view('admin_layout')->with('admin.all_work',$menage_work);
    }
    public function save_work(Request $request)
    {
        $this->AuthLoGin();
    	$data = array();
    	$data['work_name'] = $request->work_name;
    	$data['work_desc'] = $request->work_desc;
    	$data['work_status'] = $request->work_status;

    	
    	DB::table('tbl_work')->insert($data);
    	session::put('messages','Thêm danh mục thành công!!');
        return Redirect::to('Add-work');

    }
    public function edit_work($work_id){
        $this->AuthLoGin();
      $edit_work = DB::table('tbl_work')->where('work_id',$work_id)->get();
    	$menage_work = view('admin.edit_work')->with('edit_work',$edit_work);
    	return view('admin_layout')->with('admin.edit_work',$menage_work);
    }
     public function update_work(Request $request,$work_id){
     	$data = array();
    	$data['work_name'] = $request->work_name;
    	$data['work_desc'] = $request->work_desc;

    	DB::table('tbl_work')->where('work_id',$work_id)->update($data);
    	session::put('update','Cập nhật danh mục thành công!!');
        return Redirect::to('All-work');
     }
    public function delete_work($work_id){
        DB::table('tbl_work')->where('work_id',$work_id)->delete();
    	session::put('update','Xóa danh mục thành công!!');
        return Redirect::to('All-work');
    }



    //end function
    public function show_work_home($work_id){
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();

        $work_by_id = DB::table('tbl_member')->join('tbl_work','tbl_member.work_id','=','tbl_work.work_id')->where('tbl_work.work_id',$work_id)->get();
        return view('pages.show_work')->with('work',$work)->with('work_by_id',$work_by_id);
    }
}
