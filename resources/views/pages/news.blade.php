@extends('welcome')
@section('content')
   <div class="banner-post">
        <div class="banner-post-image">
            <img src="../public/fontend/images/onana.jpg">
        </div>
    </div>
   <main>
            @foreach($details_post as $key => $pot)
            <section class = "main-container-left">
                <h2 style=" color:red;text-transform:uppercase;font-weight:700">{{$pot->post_title}}
                </h2>
                <div class = "container-top-left">
                    <article>
                        <img src ="../public/upload/member/{{$pot->post_image}}">

                        <div>
                            <h4>
                                  {{$pot->post_desc}}
                            </h4>
                            <p>{!!$pot->post_content!!}</p>

                        </div>
                    </article>
                </div>

                <div class = "container-bottom-left">
                    <article>
                        <div>
                            <h3 style="color:#FF8C00;text-transform:uppercase;font-weight:700">
                                Bình luận
                            </h3>
                            <p>
                                 <form role="form" action="{{URL::to('/Register')}}" id="formDemo" method="post" enctype="multipart/form-data">
                                   {{csrf_field()}}   
                                  <div class="form-team">
                                     <input class="form-c" placeholder="Tên email" id="exampleInputEmail1" name="post_title">
                                  </div>
                                  <div class="form-team">
                                    <input  class="form-c" placeholder="Tiêu đề" type="text" id="exampleInputEmail1" name="post_title">  
                                  </div>
                                  <div class="form-team">
                                     <textarea style="resize: none" rows="5" class="form-c" id="exampleInputPassword1" placeholder="Nội dung" name="work_desc"></textarea>
                                  </div>
                                   <button type="submit" name="" class="btn-post">
                                       Gửi
                                   </button>
                                </form>
                            </p>
                        </div>
                    </article>

                </div>
            </section>
            @endforeach
            <section class = "main-container-right">
                @foreach($all_post as $key => $all_p)
                 <a href="{{URL::to('/chi-tiet-tin-tuc/'.$all_p->post_id)}}" class="btn-blue">
                <article>
                    <h4><img src= "../public/upload/member/{{$all_p->post_image}}"> 
                    </h4>
                    <div>
                        <h2 style="font-weight:500">{{$pot->post_title}}</h2>

                        <p> {{$pot->post_desc}}</p>

                        <div class="blog-view">
                      </div>
                    </div>
                </article>
                </a>
                 @endforeach
            </section>
           
        </main>
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

@endsection