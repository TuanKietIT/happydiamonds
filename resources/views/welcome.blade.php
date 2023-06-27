<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('public/fontend/css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('public/fontend/css/user.css')}}" > 
    <link rel="stylesheet" href="{{asset('public/fontend/css/infor.css')}}" > 
    <link rel="stylesheet" href="{{asset('public/fontend/css/main.css')}}" > 
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     <script src="https://kit.fontawesome.com/0dc07ae90e.js" crossorigin="anonymous"></script>
    <!--<title>Responsive Navigation Menu Bar</title>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="header">
      <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <span class="logo navLogo">
                <a href="#">
                    <img style="width:50px; height: auto;" src="{{asset('public/fontend/images/logo.jpg')}}" alt="">
                </a>
            </span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo">
                        <a href="#">
                           <img src="{{asset('public/fontend/images/logo.jpg')}}" style="width:50px; height: auto;" alt="">
                        </a>
                    </span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>

                <ul class="nav-links">
                    <li><a href="{{URL::to('/trang-chu')}}">Trang chủ</a></li>
                    <li><a href="#gioithieu">Giới thiệu</a></li>
                    <li><a href="#bandieuhanh">Ban điều hành</a></li>
                    <li><a href="#thanhvien">Thành viên</a></li>
                    <li><a href="#tintuc">Tin tức</a></li>
                    <li><a href="#lienhe">Liên hệ</a></li>
                    <li><a href="#logo">Logo</a></li>
                </ul>
            </div>

            <div class="darkLight-searchBox">
                <div class="dark-light">
                    <i class='bx bx-moon moon'></i>
                    <i class='bx bx-sun sun'></i>
                </div>

                <div class="searchBox">
                   <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class="fa-solid fa-magnifying-glass"></i>
                   </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>

                </div>
                    
                </div>
            </div>
            <div class="button">
                <div id="button" class="btn btn-white" href="">Đăng ký tham gia </div>
           </div>
        </div>
      </nav>
    </div>
    @yield('content')
    <footer>
            <div class="rows">
                <div class="col">
                    <img class="logo-1" src="{{asset('public/fontend/images/logo.jpg')}}" alt="">
                    <h4 style="font-weight: bold;font-size: 18px;padding-left: 20px;line-height: 30px">
                        Địa chỉ: 257 Điện Biên Phủ,quận 3, Thành phố Hồ Chí Minh 
                    </4>
                </div>
                <div class="col">
                    <h3><div class="underline"><span></span></div>Giới thiệu</h3>
                    <p>
                        Happy Diadmons cho đi trong yêu thương
                    </p>
                    <p> 
                        Kinh doanh trong hạnh phúc
                    </p>
                    <p> 
                        Thời gian họp: 06:45-09:00  
                    </p>
                    <p> 
                        Thứ tư hàng tuần    
                    </p>
                </div>
                <div class="col">
                    <h3><div class="underline"><span></span></div> Danh mục</h3>
                   <li class="footer-menu"><a class="a" href="">Trang chủ</a></li>
                   <li class="footer-menu"><a class="a" href="">Giới thiệu</a></li>
                   <li class="footer-menu"><a class="a" href="">Thành viên</a></li>
                   <li class="footer-menu"><a class="a" href="">Tin tức</a></li>
                   <li class="footer-menu"><a class="a" href="">Liên hệ</a></li>
                </div>
                <div class="col">
                    <h3><div class="underline"><span></span></div>Bản tin</h3>
                    <form>
                        <i class="fa-solid fa-square-envelope"></i>
                        <input type="email" placeholder=" Email....." required>
                        <button type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                    </form>
                    <div class="social-icons">
                        <a href="" ><i class="fav fa-brands fa-facebook-f"></i></a>
                        <a href="" ><i class="fav fa-brands fa-instagram"></i></a>
                        <a href="" ><i class="fav fa-regular fa-envelope"></i></a>
                        <a href="" ><i class="fav fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </footer>
<script>
const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

      let getMode = localStorage.getItem("mode");
          if(getMode && getMode === "dark-mode"){
            body.classList.add("dark");
          }

// js code to toggle dark and light mode
      modeToggle.addEventListener("click" , () =>{
        modeToggle.classList.toggle("active");
        body.classList.toggle("dark");

        // js code to keep user selected mode even page refresh or file reopen
        if(!body.classList.contains("dark")){
            localStorage.setItem("mode" , "light-mode");
        }else{
            localStorage.setItem("mode" , "dark-mode");
        }
      });

// js code to toggle search box
        searchToggle.addEventListener("click" , () =>{
        searchToggle.classList.toggle("active");
      });
 
      
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
    nav.classList.add("active");
});

body.addEventListener("click" , e =>{
    let clickedElm = e.target;

    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});

</script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function () {
            $('.a').parent('li').addClass('has-child');
        })
    </script>
     <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if($(this).scrollTop()){
                   $('.bg-modal').addClass('sticky');
                }
                else{
                   $('.bg-modal').addClass('sticky');
                }
            });
        });
    </script>
    <script>
        document.getElementById('button').addEventListener('click',function(){
          document.querySelector('.bg-modal').style.display = 'flex';
        })
        document.getElementById('close').addEventListener('click',function(){
          document.querySelector('.bg-modal').style.display = 'none';
        })
    </script>
    <script src="{{asset('public/fontend/js/app.js')}}"></script>
</body>
</html>
