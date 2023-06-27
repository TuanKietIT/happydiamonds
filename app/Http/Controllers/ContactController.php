<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class ContactController extends Controller
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
	public function contact()
    {
        return view('pages.contact');
    }
    public function save_contact(Request $request)
    {
        $data = array();
        $data['contact_name'] = $request->contact_name;
        $data['contact_email'] = $request->contact_email;
        $data['contact_phone'] = $request->contact_phone;
        $data['contact_content'] = $request->contact_content;

        DB::table('tbl_contact')->insert($data);
        return view('pages.contact');
    }
    public function all_contact()
    {
        $this->AuthLoGin();
        $all_contact = DB::table('tbl_contact')->orderby('id','desc')->get();
    	$menage_contact = view('admin.all_contact')->with('all_contact',$all_contact);
    	return view('admin_layout')->with('admin.all_contact',$menage_contact);
    }
}
