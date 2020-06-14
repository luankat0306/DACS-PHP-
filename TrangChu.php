<?php
session_start();
session_unset();
session_destroy();
    $server_username = "root";
    $server_password = "";
    $server_host = "localhost";
    $database = 'vietjobs';
    
    $conn = new  mysqli($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Trang chủ</title>
<link rel="shortcut icon" href="./image/logo.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./css/TrangChu.php">
</head>
<body>
    <header>
      <img class="logo" src="./image/logo.png" alt="logo">

      <div class="page">
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__group"><a href="" class="menu__link"><i class="fas fa-home"></i>  Trang chủ</a></li>
            <li class="menu__group"><a href="./NguoiTimViec/PHP/CorpSearch.php?search=&submit-search=" class="menu__link"><i class="fas fa-briefcase"></i>  Việc làm</a></li>
            <li class="menu__group"><a href="./NguoiTimViec/PHP/TaiKhoan.php" class="menu__link"><i class="fas fa-user-tie"></i>  Tài khoản</a></li>
          </ul>
        </nav>
      </div>
      <div class="button-NTD">
        <a href="./DoangNghiep/PHP/TaiKhoan.php">Nhà tuyển dụng</a>
      </div>
    </header>

    <div  class="main">
      
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="./image/1.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="./image/2.jpg" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="./image/3.jpg" style="width:100%">
          
        </div>
        
        <div class="box-searrch">
          <h1>Tìm kiếm công việc mơ ước</h1> 
          <div class="background-search">
            <form class="form-search" action="./NguoiTimViec/PHP/TitleSearch.php" method="GET" >
              <input type="text" name="search">
              <button type="submit" name="submit-search"><i class="fas fa-search" ></i>Tìm Kiếm</button>
            </form>
          </div>

        </div>
      </div>
        
      <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
      </div>

      <div class="top-company">
          <h1>-Các công ty hàng đầu-</h1>
          <div class="company">
          <?php 
            $sql ="SELECT * FROM congty LIMIT 4";
            $query = $conn ->query($sql);
            while($row = $query -> fetch_assoc()): 
            ?>
            
              <a href="./NguoiTimViec/PHP/ShowInfo.php?cong-ty=<?php echo $row['id_CongTy'] ?>">
                  <div class="box-logo">
                      <img src="./DoangNghiep/IMG/Avatar/<?php echo $row['Image'] ?>" style  = "width: 100%;" alt="LG">
                  </div>
              </a>
              
            
            <?php endwhile; ?> 
          </div>
        </div>
          
      </div>
        



    </div>
    <footer>
      <div class="column-footer">
        <ul>  Vietjobs
          <li><a href="#">Liên Hệ</a></li>
          <li><a href="#">Hỏi Đáp</a></li>
          <li><a href="#">Thỏa Thuận Sử Dụng </a></li>
          <li><a href="#">Quy Định Bảo Mật</a></li>
        </ul>
      </div>

      <div class="column-footer">
        <ul> Việc làm theo tỉnh thành
          <li><a href="./NguoiTimViec/PHP/PlaceSearch.php?search=TP.HCM&submit-search=">Hồ Chí Minh</a></li>
          <li><a href="./NguoiTimViec/PHP/PlaceSearch.php?search=Hà Nội&submit-search=">Hà Nội</a></li>
          <li><a href="./NguoiTimViec/PHP/PlaceSearch.php?search=Đà Nẵng&submit-search=">Đà Nẵng</a></li>
          <li><a href="./NguoiTimViec/PHP/PlaceSearch.php?search=Khánh Hòa&submit-search=">Khánh Hòa</a></li>
        </ul>
      </div>

      <div class="column-footer">
        <ul> Việc làm theo ngành nghề 
          <li><a href="./NguoiTimViec/PHP/OccSearch.php?search=Kế+toán&submit-search=">Kế toán</a></li>
          <li><a href="./NguoiTimViec/PHP/OccSearch.php?search=IT+Phần+mềm&submit-search=">IT- Phần mềm</a></li>
          <li><a href="./NguoiTimViec/PHP/OccSearch.php?search=Giáo+dục&submit-search=">Giáo duc - Đào tạo</a></li>
          <li><a href="./NguoiTimViec/PHP/OccSearch.php?search=Ngân+hàng&submit-search=">Ngân Hàng</a></li>
        </ul>
      </div>
      <div class="column-footer">
        <ul>Hỗ trợ
        <?php 
          $sql = "SELECT * FROM hotro";
          $query = $conn -> query($sql);
          while($row = $query->fetch_array()):
        ?>
          <li>Hotline: <?php echo $row['SDT']; ?> ~ <?php echo $row['TenHoTro']; ?> </li>
          <?php endwhile; ?>
        </ul>   
      </div>
    </footer>
    <script src="https://kit.fontawesome.com/5903e79095.js" crossorigin="anonymous"></script>
    <script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2500); // Change image every 2 seconds
      }
      </script>
</body>
</html>