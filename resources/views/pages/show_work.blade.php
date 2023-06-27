@extends('welcome')
@section('content')
    <div id="main">
      <div class="sidebar">
          <ul class="list-sidebar">
            @foreach($work as $key => $work)
             <li><a href="{{URL::to('/danh-muc-thanh-vien/'.$work->work_id)}}">{{$work->work_name}}</a></li>
            @endforeach
          </ul>
      </div>
       <div class="main-content">
          <div class="product-search">
              <div class="pro-search">
                  <input class="input" type="text" placeholder="Nhập thông tin tìm kiếm" required>
                 <div class="btn-search">
                    <i class="fas fa-search"></i>
                 </div>
              </div>
            </div>
           <ul class="product-list">
               @foreach($work_by_id as $key => $member)
               <li>  
                    <div class="image">
                        <img src="../public/upload/member/{{$member->member_image}}" alt="">
                    </div>
                    <div class="media-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-solid fa-square-envelope"></i>
                        <i class="fa-solid fa-square-phone"></i>
                    </div>

                    <div class="name-profession">
                        <span class="name">{{$member->member_name}}</span>
                        <span class="profession">{{$member->member_local}}</span>
                        <span class="conpany">{{$member->member_company}}</span>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="butt">
                        <button class="inf" type="">
                          <a href="{{URL::to('/chi-tiet-thanh-vien/'.$member->member_id)}}" title="">Thông tin cá nhân <i class="fa-solid fa-caret-right"></i></a>
                        </button>
                    </div>
               </li>
            @endforeach
             
           </ul>
      </div>
    </div>
    <div class="clear">
      
    </div>


@endsection