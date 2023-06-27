<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class RegisterController extends Controller
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
    public function all_register()
    {
        $this->AuthLoGin();
        $all_register = DB::table('tbl_register')->get();
        $menage_register = view('admin.All_register')->with('all_register',$all_register);
        return view('admin_layout')->with('admin.All_register',$menage_register);
    }
     public function edit_register($register_id){
        $this->AuthLoGin();
        $edit_register = DB::table('tbl_register')->where('register_id',$register_id)->get();
        $menage_register = view('admin.edit_register')->with('edit_register',$edit_register);
        return view('admin_layout')->with('admin.edit_register',$menage_register);
    }
     public function update_register(Request $request,$register_id){
        $data = array();
        $data['register_name'] = $request->register_name;
        $data['register_company'] = $request->register_company;
        $data['register_local'] = $request->register_local;
        $data['register_field'] = $request->register_field;
        $data['register_phone'] = $request->register_phone;
        $data['register_email'] = $request->register_email;
        $data['register_presenter'] = $request->register_presenter;

        DB::table('tbl_register')->where('register_id',$register_id)->update($data);
        session::put('updates','Cập nhật danh mục thành công!!');
        return Redirect::to('All-register');
     }
    public function delete_register($register_id){
        DB::table('tbl_register')->where('register_id',$register_id)->delete();
        session::put('update','Xóa danh mục thành công!!');
        return Redirect::to('All-register');
    }
}
