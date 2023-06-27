<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class MemberController extends Controller
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
    public function add_member()
    {
        $this->AuthLoGin();
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        return view('admin.add_member')->with('work',$work);
    }
    public function all_member()
    {
        $this->AuthLoGin();

        $all_member = DB::table('tbl_member')->orderby('member_id','asc')->get();
    	$menage_member = view('admin.all_member')->with('all_member',$all_member);
    	return view('admin_layout')->with('admin.all_member',$menage_member);
    }
    public function save_member(Request $request)
    {
    	$data = array();
    	$data['work_id'] = $request->use_work_id;
        $data['member_name'] = $request->member_name;
        $data['member_company'] = $request->member_company;
        $data['member_phone'] = $request->member_phone;
        $data['member_email'] = $request->member_email;
        $data['member_bookstore'] = $request->member_bookstore;
        $data['member_content'] = $request->member_content;
        $data['member_local'] = $request->member_local;
        $get_img = $request->file('member_image',);
        $get_logo = $request->file('member_logo');

        if($get_img && $get_logo){

            $get_name_image = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_img = $name_image.rand(0,300).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/upload/member',$new_img);

            $get_name_logo = $get_logo->getClientOriginalName();
            $name_logo = current(explode('.', $get_name_logo ));
            $new_logo = $name_logo.rand(0,300).'.'.$get_logo->getClientOriginalExtension();
            $get_logo->move('public/upload/logo',$new_logo);

            $data['member_logo'] = $new_logo;
            $data['member_image'] = $new_img;
            DB::table('tbl_member')->insert($data);
            session::put('message_member','Thêm thành viên thành công!!');
            return Redirect::to('All-member');
        }
        $data['member_logo'] = '';
    	$data['member_image'] = '';
    	DB::table('tbl_user')->insert($data);
    	session::put('message1','Thêm thành viên thành công!!');
        return Redirect::to('Add-member');

    }
    public function edit_member($member_id){
        $this->AuthLoGin();
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        $edit_member = DB::table('tbl_member')->where('member_id',$member_id)->get();
        $menage_member = view('admin.edit_member')->with('edit_member',$edit_member)->with('work',$work);
    	return view('admin_layout')->with('admin.edit_member',$menage_member);
    }
     public function update_member(Request $request,$member_id){
        $data = array();
    	$data['work_id'] = $request->use_work_id;
        $data['member_name'] = $request->member_name;
        $data['member_company'] = $request->member_company;
        $data['member_phone'] = $request->member_phone;
        $data['member_email'] = $request->member_email;
        $data['member_bookstore'] = $request->member_bookstore;
        $data['member_content'] = $request->member_content;
        $data['member_local'] = $request->member_local;
        $get_image = $request->file('member_image',);
        $get_logo = $request->file('member_logo');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,300).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/member',$new_image);
            $data['member_image'] = $new_image;
            
            DB::table('tbl_member')->where('member_id',$member_id)->update($data);
            session::put('message_member','Cập nhật thành viên thành công!!');
            return Redirect::to('All-member');
        }
        else if( $get_logo){
            $get_name_logo = $get_logo->getClientOriginalName();
            $name_logo = current(explode('.', $get_name_logo ));
            $new_logo = $name_logo.rand(0,300).'.'.$get_logo->getClientOriginalExtension();
            $get_logo->move('public/upload/logo',$new_logo);

            $data['member_logo'] = $new_logo;
            DB::table('tbl_member')->where('member_id',$member_id)->update($data);
            session::put('message_member','Cập nhật thành viên thành công!!');
            return Redirect::to('All-member');
        }
        DB::table('tbl_member')->where('member_id',$member_id)->update($data);
        session::put('update','Cập nhật danh mục thành công!!');
        return Redirect::to('All-member');

     }
    public function delete_member($member_id){
        DB::table('tbl_member')->where('member_id',$member_id)->delete();
    	session::put('update','Xóa danh mục thành công!!');
        return Redirect::to('All-member');
    }
}
