@extends('welcome')
@section('content')
@foreach($details_member as $key => $value)
<section class="product-container">
        <div class="product-left">
            <div class="profileText">
                <div class="image">
                    <img src="../public/upload/member/{{$value->member_image}}" alt="" width="100%">
                </div>
                <h2>{{$value->member_name}}</h2>
                <span class="logo1">
                    <img src="../public/upload/logo/{{$value->member_logo}}" alt="">
                </span>
            </div>
            <div class="box-1">
                <div class="heading">
                    <h3 class="title-tile">Thông tin liên hệ</h3>
                </div>
                <p class="p1">
                    <i class="fa-solid fa-user"></i>
                    {{$value->member_local}}
                </p>
                <p class="p1">
                    <i class="fa-solid fa-square-phone"></i>
                    (+84) {{$value->member_phone}}
                </p>
                <p class="p1">
                    <i class="fa-solid fa-envelope"></i>
                    {{$value->member_email}}
                </p>
                <p class="p1">
                    <i class="fa-solid fa-building"></i>
                    {{$value->member_company}}
                </p>
                <p class="p1">
                    <i class="fa-brands fa-facebook"></i>
                    {{$value->member_name}}
                </p>
                <p class="p1">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$value->member_bookstore}}
                </p>
             </div>
             <div class="box-1">
                <div class="heading">
                    <h3 class="title-tile">Nhóm ngành nghề</h3>
                </div>
                <p class="p1">
                     <i class="fa-solid fa-people-group"></i>
                    {{$value->work_name}}
                </p>
                
             </div>
        </div>
        <div class="product-right">
            <div class="profileText">
                <span class="logo">
                    <img src="{{asset('public/fontend/images/logo_new.png')}}" alt="">
                </span>
            </div>
            <div class="about-info">
                <p> {!!$value->member_content!!}</p>
            </div>
           
        </div>
    </section> 
     <div class="bg-modal">
      <div class="modal-content">
          <div id="close" class="close"><i class="fa-solid fa-xmark"></i></div>
        <img src="{{asset('public/fontend/images/dang.jpg')}}" width="100px">
        <h3>Đăng ký tham gia</h3>
        <form role="form" action="{{URL::to('/Register')}}" id="formDemo" method="post" enctype="multipart/form-data">
           {{csrf_field()}}   
           <input type="text" name="register_name"  placeholder="Điền Họ & Tên" required>
           <input type="text" name="register_company" placeholder="Chức vụ">
           <input type="text" name="register_local" placeholder="Tên công ty">
           <input type="text" name="register_field" placeholder="Lĩnh vực hoạt động">
           <input type="text" name="register_phone" placeholder="Số điện thoại">
           <input type="email" name="register_email" placeholder="email">
           <input type="text" name="register_presenter" placeholder="người giới thiệu">
           <button type="submit" name="index" class="btn btn-info">Đăng ký tham gia</button>
        </form>
      </div>
   </div>
    <div class="clear">
      
    </div>

  @endforeach
@endsection