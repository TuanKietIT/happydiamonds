<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ManageController extends Controller
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
    public function add_manage()
    {
    	$this->AuthLoGin();
    	return view('admin.add_manage');

    }
    public function all_manage()
    {
        $this->AuthLoGin();
        $all_manage = DB::table('tbl_manage')->get();
    	$menage_manage = view('admin.all_manage')->with('all_manage',$all_manage);
    	return view('admin_layout')->with('admin.all_manage',$menage_manage);
    }
    public function save_manage(Request $request)
    {
    	$data = array();
        $data['manage_name'] = $request->manage_name;
        $data['manage_local'] = $request->manage_local;
        $data['manage_company'] = $request->manage_company;
        $get_image = $request->file('manage_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,300).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/member',$new_image);
            $data['manage_image'] = $new_image;
            
            DB::table('tbl_manage')->insert($data);
            session::put('message_post','Cập nhật thành viên thành công!!');
            return Redirect::to('add-manage');
        }
    	$data['manage_image'] = '';
    	DB::table('tbl_manage')->insert($data);
    	session::put('message1','Thêm thành viên thành công!!');
        return Redirect::to('add-manage');

    }
    public function edit_manage($manage_id){
        $this->AuthLoGin();
        $edit_manage = DB::table('tbl_manage')->where('manage_id',$manage_id)->get();
        $menage_manage = view('admin.edit_manage')->with('edit_manage',$edit_manage);
    	return view('admin_layout')->with('admin.edit_manage',$menage_manage);
    }
    public function update_manage(Request $request,$manage_id){
        $data = array();
        $data['manage_name'] = $request->manage_name;
        $data['manage_local'] = $request->manage_local;
        $data['manage_company'] = $request->manage_company;
        $get_image = $request->file('manage_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,300).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/member',$new_image);
            $data['manage_image'] = $new_image;
            
            DB::table('tbl_manage')->where('manage_id',$manage_id)->update($data);
            session::put('message_manage','Cập nhật thành viên thành công!!');
            return Redirect::to('all-manage');
        }
    	$data['manage_image'] = '';
    	DB::table('tbl_manage')->where('manage_id',$manage_id)->update($data);
    	session::put('update','Cập nhật danh mục thành công!!');
        return Redirect::to('all-manage');

     }
}
