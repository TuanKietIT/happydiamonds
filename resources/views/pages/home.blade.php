@extends('welcome')
@section('content')
    <section class="big-image">
        <div class="big-image-content">
           <img src="public/fontend/images/banner.jpg" alt="">
        </div>
    </section>
    <div id="gioithieu" class="introduct">
            <div class="introduct-left">

            </div>
            <div class="introduct-right">
               <div class="title-infor">
                    <h1>Đôi nét Happy Diamonds</h1>
                </div>
                <div class="content">
                   <p>Happy Diamonds là Chapter Online thứ 176 tại Việt Nam, được ra mắt vào ngày 29/12/2021. Hiện nay Chapter có 37 thành viên là chủ doanh nghiệp trên toàn quốc. 
                     </p>
                    <p>Trở thành thành viên của BNI Happy Diamonds Chapter, bạn sẽ có cơ hội kết nối vào mạng lưới BNI Việt nam với hơn 8,000 Doanh nghiệp  và BNI Global với 280.000 Doanh nghiệp tại 10,500 Chapter trên thế giới.</p>
                
                    <p>Số lượng thành viên tham gia BNI® đang tăng mỗi Số lượng thành viên tham gia BNI® đang tăng mỗi ngày sẽ giúp bạn có một môi trường kết nối kinh doanh ngày càng rộng lớn, bạn sẽ sẽ có thêm nhiều cơ hội phát triển những mối quan hệ chất lượng, tin cậy và liên tục phát triển.</p>
                    <div>
                        <div id="button" class="btn" href="">Xem thêm</div>
                    </div>
                </div>
            </div>
    </div>
   <section class="section-skills">
            <div class="section-box">
                <div class="skill-box">
                    <i  class="skill-bo_icon fa-solid fa-eye"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Tầm nhìn</h3>
                    <div class="skill-bo_text">
                            Tạo nên những nhà lãnh đạo thành công trong hạnh phúc, có chỉ số hạnh phúc cao
                    </div>
                </div>
            </div>
            <div class="section-box">
                <div class="skill-box">
                    <i class="skill-bo_icon fa-brands fa-sketch"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Sứ mệnh</h3>
                    <div class="skill-bo_text">
                            Lan tỏa giá trị, hạnh phúc trong cộng đồng BNI và những người xung quanh
                    </div>
                </div>
            </div>
            <div class="section-box">
                <div class="skill-box">
                    <i class="skill-bo_icon fa-solid fa-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Giá trị cốt lỗi </h3>
                    <div class="skill-bo_text">
                            Cho đi trong yêu thương. kinh doanh trong hạnh phúc
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section class="group">
       <div id="bandieuhanh" class="list-group">
        <div class="container  ">
            <div class="section-header">
                <h3 class="title" >Ban điều hành</h3>
                <div class="oth-sub-header-home">
                   <span></span>
                   <span>Thành viên ban điều hành</span>
                   <span></span>
                </div>
            </div>
            <div class="row">
               @foreach($all_manage as $key => $manager)
               {{csrf_field()}}
               <div class="col-md-4 profile text-center">
                  <div class="img-box">
                        <img src="public/upload/member/{{$manager->manage_image}}" alt="" class="img-responsive">
                            <ul>
                                <li><a href=""><i style="font-size: 26px" class="fa-brands fa-facebook"></i></a></li>
                                <li><a href=""><i style="font-size: 26px" class="fa-brands fa-twitter-square"></i></a></li>
                                <li><a href=""><i style="font-size: 26px" class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                  </div>    
                  <h2>{{$manager->manage_name}}</h2> 
                  <h3>{{$manager->manage_local}}</h3>
                  <p></p>
               </div>
               @endforeach
            </div>
            <hr/>
        </div>
        <div class="static-list ">
            <div class="static-content container-group">
                <div class="box">
                    <span>
                        <h2>37</h2>
                        <i class="fa-solid fa-handshake"></i>
                        <h4>Thành viên</h4>
                    </span>
                </div>
                 <div class="box">
                    <span>
                        <h2>2000</h2>
                        <i class="fa-solid fa-handshake"></i>
                        <h4>Referrals trao đi</h4>
                    </span>
                </div>
                 <div class="box">
                    <span>
                        <h2>176</h2>
                        <i class="fa-solid fa-book-open"></i>
                        <h4>Chapter tại VN</h4>
                    </span>
                </div>
                 <div class="box">
                    <span>
                        <h2>13 tỷ</h2>
                        <i class="fa-solid fa-sack-dollar"></i>
                        <h4>Doanh số</h4>
                    </span>
                </div>
            </div>
        </div>
           </div>
    </section>
    <section id="thanhvien" class="portfolio section" id="portfolio">
            <div class="background-bg">   
                <div class="container color-container">
                    <div class="section-heades">
                        <h3 class="title-user" >Thành viên nhóm</h3>
                        <p class="text-user"> Danh sách thành viên</p>
                    </div>

                    <div class="section-body containered">
                        <ul class="product-list">
                          @foreach($all_member as $key => $member)
                          {{csrf_field()}}
                             <li>  
                                <div class="image">
                                    <img src="public/upload/member/{{$member->member_image}}" alt="">
                                </div>
                                <div class="media-icons">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-solid fa-square-envelope"></i>
                                    <i class="fa-solid fa-square-phone"></i>
                                </div>

                                <div class="name-profession">
                                    <span class="name">{{$member->member_name}}</span>
                                    <span class="conpany">{{$member->member_company}}</span>
                                </div>
                                <div class="rating">
                                    <div class="rating">
                                    <i class="fav fas fa-star"></i>
                                    <i class="fav fas fa-star"></i>
                                    <i class="fav fas fa-star"></i>
                                    <i class="fav fas fa-star"></i>
                                    <i class="fav fas fa-star"></i>
                                </div>
                                </div>
                                <div class="butt">
                                    <button class="inf" type="">
                                       <a href="{{URL::to('/chi-tiet-thanh-vien/'.$member->member_id)}}" title="">Thông tin cá nhân </a>
                                     <i class="fa-solid fa-caret-right"></i>
                                    </button>
                                </div>
                           </li>
                         @endforeach
                       </ul>
                    </div>
                </div>
            </div>
    </section>  
    <section class="service section" id="services">
           <div id="tintuc" class="list-group">
            <div class="container">
              <div class="section-header">
                <h3 class="title" >Tin tức</h3>
                <div class="oth-sub-header-home">
                   <span></span>
                   <span>Tin tức mới</span>
                   <span></span>
                </div>
              </div>
                <div class="cards">
                    @foreach($post as $key => $post_news)
                       {{csrf_field()}}
                    <div class="card-wrap">
                        <div class="card" >
                            <div class="card-content">
                                <img src="public/upload/member/{{$post_news->post_image}}" class="icon">
                                <h3 class="title-sm">{{$post_news->post_title}}</h3>
                                <p class="text">{{$post_news->post_desc}}</p>
                                <a href="{{URL::to('/chi-tiet-tin-tuc/'.$post_news->post_id)}}" class="btn-new  small">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
          </div>
        </section>
        <section class="contact" id="contact">
            <div id="lienhe" class="list-group">
            <div class="container">
             <div class="section-header">
                  <h3 class="title" >Liên hệ</h3>
                  <div class="oth-sub-header-home">
                     <span></span>
                     <span>Kết nối với chúng tôi</span>
                     <span></span>
                  </div>
                </div>
                <div class="contact-box">
                    <div class="contact-info">
                        <h3 class="title-none">Hãy giữ liên lạc</h3>
                        <p class="text-none">
                           Cảm ơn bạn đã liên hệ đến BNI!! Chúng tôi sẽ sớm nhận được nội dung liên hệ từ bạn
                        </p>
                        <p class="text-none">
                          Chúc bạn có một ngày tốt lành!!
                        </p>
                        <div class="information-wrap">
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fes fas fa-map-marker-alt"></i>
                                </div>
                                <p class="info-text">257 Điện Biên Phủ,quận 3, Thành phố Hồ Chí Minh</p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fes fas fa-envelope"></i>
                                </div>
                                <p class="info-text">TRƯƠNG THỊ NGỌC MAI</p>
                            </div>
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fes fas fa-phone-alt"></i>
                                </div>
                                <p class="info-text">TRƯƠNG THỊ NGỌC MAI</p>
                            </div>
                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fes fas fa-users"></i>
                                </div>
                                <p class="info-text">Hỗ trợ khách mời </p>
                            </div>

                            <div class="information">
                                <div class="contact-icon">
                                    <i class="fes fas fa-phone-alt"></i>
                                </div>
                                <p class="info-text">(+84) 908982739</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <span class="circle one"></span>
                        <span class="circle two"></span>

                        <form action="index.html" autocomplete="off">
                          <h3 class="title-one">Liên hệ với chúng tôi</h3>
                          <div class="input-container">
                            <input type="text" name="name" class="input" />
                            <label for="">Username</label>
                            <span>Username</span>
                          </div>
                          <div class="input-container">
                            <input type="email" name="email" class="input" />
                            <label for="">Email</label>
                            <span>Email</span>
                          </div>
                          <div class="input-container">
                            <input type="tel" name="phone" class="input" />
                            <label for="">Phone</label>
                            <span>Phone</span>
                          </div>
                          <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                          </div>
                          <input type="submit" value="Gửi" class="btn-not" />
                        </form>
                      </div>
                    </div>
                </div>
            </div>
            </div>
        </section>  
        <section  class="group-all">
           <div id="logo" class="list-group">
            <div class="container">
                <div class="section-header">
                  <h3 class="title" >Logo</h3>
                  <div class="oth-sub-header-home">
                     <span></span>
                     <span>Logo doanh nghiệp</span>
                     <span></span>
                  </div>
                </div>
                <div class="row">
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv1.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv2.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv3.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv4.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv5.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv6.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv7.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv8.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv9.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv10.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv11.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv12.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv3.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv14.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv15.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv16.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv17.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv18.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv19.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv20.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv21.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv22.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv23.jpg" alt="" class="img-respon">
                  </div>    
               </div>
               <div class="col-md-2 text-center">
                  <div class="img-box">
                        <img src="public/fontend/images/logotv24.jpg" alt="" class="img-respon">
                  </div>    
               </div>
            </div>
            </div>
            </div>
        </section>
        <section  id="testimonials">
            <div class="container">
                  <div class="section-header">
                  <h3 class="title" >Chia sẻ</h3>
                  <div class="oth-sub-header-home">
                     <span></span>
                     <span>Chia sẻ từ thành viên</span>
                     <span></span>
                  </div>
                </div>
            <!-- testimonial-container --->
             <div class="testimonial-container">
                 <div class="testimonial-box">
                    <!-- top --->
                    <div class="testimonial-box-top">
                      <!-- profile --->
                      <div class="box-profile">
                          <div class="box-profile-image">
                            <img src="public/upload/member/cn1188.jpg" alt="">
                          </div>
                          <div class="name-user">
                              <strong>Nguyễn Lâm Thảo</strong>
                              <span>thao@onetech.vn</span>
                          </div>
                      </div>
                      <div class="box-review">
                      <!-- review --->
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                    
                      </div>
                    </div>
                    <div class="box-comment">
                           <p>Nhờ BNI tôi đã phát triển bản thân rất nhiều, được học tập nhiều hơn nhờ kinh nghiệm của anh chị thành viên trong BNI. </p>
                      </div>
                 </div>
                 <div class="testimonial-box">
                    <!-- top --->
                    <div class="testimonial-box-top">
                      <!-- profile --->
                      <div class="box-profile">
                          <div class="box-profile-image">
                            <img src="public/upload/member/cn1188.jpg" alt="">
                          </div>
                          <div class="name-user">
                              <strong>Nguyễn Lâm Thảo</strong>
                              <span>thao@onetech.vn</span>
                          </div>
                      </div>
                      <div class="box-review">
                      <!-- review --->
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                    
                      </div>
                    </div>
                    <div class="box-comment">
                           <p>Nhờ BNI tôi đã phát triển bản thân rất nhiều, được học tập nhiều hơn nhờ kinh nghiệm của anh chị thành viên trong BNI. </p>
                      </div>
                 </div>
                 <div class="testimonial-box">
                    <!-- top --->
                    <div class="testimonial-box-top">
                      <!-- profile --->
                      <div class="box-profile">
                          <div class="box-profile-image">
                            <img src="public/upload/member/ht1.png" alt="">
                          </div>
                          <div class="name-user">
                              <strong>TRẦN THÙY DƯƠNG</strong>
                              <span>thuyduong.vinsuccess@gmail.com</span>
                          </div>
                      </div>
                      <div class="box-review">
                      <!-- review --->
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                    
                      </div>
                    </div>
                    <div class="box-comment">
                           <p>Vào BNI là quyết định đúng đắn của tôi. Ở đây có rất nhiều điều cho tôi học hỏi và đặc biệt những anh chị thành viên rất nhiệt tình, vui vẻ. </p>
                      </div>
                 </div>
                 <div class="testimonial-box">
                    <!-- top --->
                    <div class="testimonial-box-top">
                      <!-- profile --->
                      <div class="box-profile">
                          <div class="box-profile-image">
                            <img src="public/upload/member/anh1033.jpg" alt="">
                          </div>
                          <div class="name-user">
                              <strong>ĐOÀN THỊ NGỌC THANH</strong>
                              <span>dtnthanh@gmail.com</span>
                          </div>
                      </div>
                      <div class="box-review">
                      <!-- review --->
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                    
                      </div>
                    </div>
                    <div class="box-comment">
                           <p>Vào BNI là quyết định đúng đắn của tôi. Ở đây chúng tôi có thể kết hợp các doanh nghiệp có ngành nghề khác nhau và có cơ hội hợp tác với nhau. </p>
                      </div>
                 </div>
                 
                 </div>
            </div>
         </section>

   <div class="bg-modal">
      <div class="modal-content">
          <div id="close" class="close"><i class="fa-solid fa-xmark"></i></div>
        <img src="./public/fontend/images/dang.jpg" width="100px">
        <h3>Đăng ký tham gia</h3>
        <form role="form" action="{{URL::to('/Register')}}" method="POST" enctype="multipart/form-data">
           {{csrf_field()}}   
           <input type="text" name="register_name"  placeholder="Điền Họ & Tên" required>
           <input type="text" name="register_company" placeholder="Tên công ty">
           <input type="text" name="register_local" placeholder="Chức vụ">
           <input type="text" name="register_field" placeholder="Lĩnh vực hoạt động">
           <input type="text" name="register_phone" placeholder="Số điện thoại">
           <input type="email" name="register_email" placeholder="email">
           <input type="text" name="register_presenter" placeholder="người giới thiệu">
           <button type="submit" name="index" class="btn btn-info">Đăng ký tham gia</button>
        </form>
      </div>
   </div>
@endsection