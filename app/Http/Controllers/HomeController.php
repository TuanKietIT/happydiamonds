<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {
        $all_member = DB::table('tbl_member')->orderby('member_id','asc')->get();
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        $post = DB::table('tbl_post')->orderby('post_id','desc')->get();
        $all_manage = DB::table('tbl_manage')->orderby('manage_id','asc')->get();
    	return view('pages.home')->with('post',$post)->with('work',$work)->with('all_member',$all_member)->with('all_manage',$all_manage);
    }
    public function save_home(Request $request)
    {
        $data = array();
        $data['register_name'] = $request->register_name;
        $data['register_company'] = $request->register_company;
        $data['register_local'] = $request->register_local;
        $data['register_field'] = $request->register_field;
        $data['register_phone'] = $request->register_phone;
        $data['register_email'] = $request->register_email;
        $data['register_presenter'] = $request->register_presenter;
        DB::table('tbl_register')->insert($data);
        return Redirect::to('trang-chu');
    }
    
    public function user()
    {   
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        $all_user = DB::table('tbl_user')->orderby('user_id','desc')->get();
    	return view('pages.user')->with('work',$work)->with('all_user',$all_user);
    }
    public function news()
    {
    	return view('pages.news');
    }


     public function show_post_home($post_id)
    {
        $all_post = DB::table('tbl_post')->orderby('post_id','desc')->get();
        $details_post = DB::table('tbl_post')->where('tbl_post.post_id',$post_id)->get();
        return view('pages.news')->with('details_post',$details_post)->with('all_post',$all_post);
    }

    public function member()
    {   
        $work = DB::table('tbl_work')->orderby('work_id','asc')->get();
        $all_member = DB::table('tbl_member')->orderby('member_id','asc')->get();
        return view('pages.member')->with('work',$work)->with('all_member',$all_member);
    }
    public function show_member_home($member_id)
    {
        
       $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        $details_member = DB::table('tbl_member')->join('tbl_work','tbl_member.work_id','=','tbl_work.work_id')->where('tbl_member.member_id',$member_id)->get();
        return view('pages.infor')->with('work',$work)->with('details_member',$details_member);
    }
     public function search(Request $request){
        $work = DB::table('tbl_work')->orderby('work_id','desc')->get();
        $keyword = $request->keyword_submit;
        $search_member = DB::table('tbl_member')->where('member_name','like','%'.$keyword.'%')->get();
        return view('pages.search')->with('work',$work)->with('search_member', $search_member);
     }
}
