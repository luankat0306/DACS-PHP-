<?php include 'default.php';?>
<link rel="stylesheet" type="text/css" href="../CSS/TaiKhoan.php">
<link rel="stylesheet" type="text/css" href="../CSS/register.php">
<!-- Account -->
<div class="boxlogin">
  <form class="form-background" action="TaiKhoan.php" method="post" >
    <div class="imgcontainer">
      <img src="../IMG/login.png" class="avatar" alt="Login">
    </div>
    <h2><b>Đăng Nhập</b></h2>
    <div class="container"></div>
      <label for="uname" style="font-size: medium; color: whitesmoke;"><b>Tên Người Dùng</b></label>
      <div class="input-container">
        <input class="form-control" type="text" placeholder="Nhập Tên Người Dùng" name="uname" required>
      </div>
      <label for="psw" style="font-size: medium; color: whitesmoke;"><b>Mật Khẩu</b></label>
      <div class="input-container">
        <input class="form-control" type="password" placeholder="Nhập Mật Khẩu" name="psw" required>
      </div>
      <button type="submit" name="login" style="width: 20%; margin-left: 32%; font-weight: bolder;">
      Đăng Nhập</button>
      <button onclick="location.href='../../TrangChu.php'" class="cancelbtn1" type="button"><b>Hủy</b></button>
      <button onclick="document.getElementById('id01').style.display='block'" class="signupbtn1" type="button"><b>Bạn Chưa Có Tài Khoản?</b></button>
    </div>
  </form>
</div>
<!-- *************************************************** REGISTER *************************************************** -->
<div id="id01" class="modal ">
  <form class="modalbox"  action="TaiKhoan.php" method="post">
    <div class="container">
      <img src="../IMG/Signup.png"  class="signup">
      <h3 style="font-size:x-large; font-weight:bolder; color: #4CAF50;">ĐĂNG KÝ</h3> 
      <p>Bạn vui lòng điền thông tin bên dưới để tạo tài khoản mới.</p>
      <hr>
      <!-- username -->
      <label for="uname"><b>Tên Người Dùng</b></label>
      <input class="form-control" type="text" placeholder="Nhập Vào Tên Người Dùng" name="uname" required>
      <!-- Email -->
      <label for="email"><b>Email</b></label>
      <input class="form-control" type="email" placeholder="Nhập Vào Email" name="email" required>
      <!-- password -->
      <label for="psw"><b>Mật Khẩu</b></label>
      <input class="form-control" type="password" placeholder="Nhập Vào Mật Khẩu" name="psw" id="psw" minlength="5" required>
      <label for="psw"><b>Nhập Lại Mật Khẩu</b></label>
      <input class="form-control" type="password" placeholder="Nhập Lại Mật Khẩu" name="pswCheck" id="confirm_psw" minlength="5" required>
      <!-- full name -->
      <label for="fullname"><b>Họ Và Tên</b></label>
      <input class="form-control" type="text" placeholder="Nhập Vào Họ Và Tên" name="fullname" required>
      <!-- phone number -->
      <label for="phone"><b>Số Điện Thoại</b></label>
      <input class="form-control" type="tel" placeholder="Nhập Vào Số Điện Thoại" name="phone" pattern="[0-9]{10}" required>
     <!-- Place -->
     <label for="place"><b>Tỉnh Thành</b></label>
      <select name="place" class="place form-control" required>
        <option value="">Chọn Tỉnh Thành</option>
        <option  value="TP.HCM">TP.HCM</option>
        <option  value="Hà Nội">Hà Nội</option>
        <option  value="An Giang">An Giang</option>
        <option  value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
        <option  value="Bắc Giang">Bắc Giang</option>
        <option  value="Bắc Kạn">Bắc Kạn</option>
        <option  value="Bạc Liêu">Bạc Liêu</option>
        <option  value="Bắc Ninh">Bắc Ninh</option>
        <option  value="Bến Tre">Bến Tre</option>
        <option  value="Bình Định">Bình Định</option>
        <option  value="Bình Dương">Bình Dương</option>
        <option  value="Bình Phước">Bình Phước</option>
        <option  value="Bình Thuận">Bình Thuận</option>
        <option  value="Cà Mau">Cà Mau</option>
        <option  value="Cần Thơ">Cần Thơ</option>
        <option  value="Cao Bằng">Cao Bằng</option>
        <option  value="Cửu Long">Cửu Long</option>
        <option  value="Đà Nẵng">Đà Nẵng</option>
        <option  value="Đắc Lắc">Đắc Lắc</option>
        <option  value="Đắc Nông">Đắc Nông</option>
        <option  value="Điện Biên">Điện Biên</option>
        <option  value="Đồng Nai">Đồng Nai</option>
        <option  value="Đồng Tháp">Đồng Tháp</option>
        <option  value="Gia Lai">Gia Lai</option>
        <option  value="Hà Giang">Hà Giang</option>
        <option  value="Hà Nam">Hà Nam</option>
        <option  value="Hà Tĩnh">Hà Tĩnh</option>
        <option  value="Hải Dương">Hải Dương</option>
        <option  value="Hải Phòng">Hải Phòng</option>
        <option  value="Hậu Giang">Hậu Giang</option>
        <option  value="Hòa Bình">Hòa Bình</option>
        <option  value="Hưng Yên">Hưng Yên</option>
        <option  value="Khánh Hòa">Khánh Hòa</option>
        <option  value="Kiên Giang">Kiên Giang</option>
        <option  value="Kon Tum">Kon Tum</option>
        <option  value="Lai Châu">Lai Châu</option>
        <option  value="Lâm Đồng">Lâm Đồng</option>
        <option  value="Lạng Sơn">Lạng Sơn</option>
        <option  value="Lào Cai">Lào Cai</option>
        <option  value="Long An">Long An</option>
        <option  value="Nam Định">Nam Định</option>
        <option  value="Nghệ An">Nghệ An</option>
        <option  value="Ninh Bình">Ninh Bình</option>
        <option  value="Ninh Thuận">Ninh Thuận</option>
        <option  value="Phú Thọ">Phú Thọ</option>
        <option  value="Phú Yên">Phú Yên</option>
        <option  value="Quảng Bình">Quảng Bình</option>
        <option  value="Quảng Nam">Quảng Nam</option>
        <option  value="Quảng Ngãi">Quảng Ngãi</option>
        <option  value="Quảng Ninh">Quảng Ninh</option>
        <option  value="Quảng Trị">Quảng Trị</option>
        <option  value="Sóc Trăng">Sóc Trăng</option>
        <option  value="Sơn La">Sơn La</option>
        <option  value="Tây Ninh">Tây Ninh</option>
        <option  value="Thái Bình">Thái Bình</option>
        <option  value="Thái Nguyên">Thái Nguyên</option>
        <option  value="Thanh Hóa">Thanh Hóa</option>
        <option  value="Thừa Thiên Huế">Thừa Thiên Huế</option>
        <option  value="Tiền Giang">Tiền Giang</option>
        <option  value="Trà Vinh">Trà Vinh</option>
        <option  value="Tuyên Quang">Tuyên Quang</option>
        <option  value="Vĩnh Long">Vĩnh Long</option>
        <option  value="Vĩnh Phúc">Vĩnh Phúc</option>
        <option  value="Yên Bái">Yên Bái</option>
      </select>

      <!-- address -->
      <label for="address"><b>Địa Chỉ</b></label>
      <input class="form-control" type="text" placeholder="Nhập Vào Địa Chỉ" name="address" required>

      <div class="clearfix">
      <button onclick="location.href='TaiKhoan.php'" class="cancelbtn2" type="button"><b>Hủy</b></button>
      <button name="signup" type="submit" class="signupbtn2"><b>Đăng Ký</b></button>
      </div>
    </div>
  </form>
</div>
<script>
  var password = document.getElementById("psw")
  , confirm_password = document.getElementById("confirm_psw");

  function validatePassword(){
    if(password.value != confirm_password.value) {
      confirm_password.setCustomValidity("Mật khẩu không trùng khớp");
    } else {
      confirm_password.setCustomValidity('');
    }
}

  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
</script>

<?php
include 'config.php';
if (isset($_POST['signup'])) {
  $TenNguoiDung =$_POST['uname'];
  $Password =$_POST['psw'];
  $Email = $_POST['email'];
  $HoTen = $_POST['fullname'];
  $SDT = $_POST['phone'];
  $DiaChi = $_POST['address'];
  $TinhThanh = $_POST['place'];
  if( $TenNguoiDung==""|| $Password==""|| $Email==""|| $HoTen==""|| $SDT=="" || $DiaChi=="" || $TinhThanh==""){
    echo"<p>Mời nhập đầy đủ thông tin người dùng</p>";
  } else{
    $sql = "INSERT INTO `nguoitimviec`( `HoTen`, `SDT`, `Email`, `DiaChi`, `Password`, `TenNguoiDung`,`TinhThanh`)
     VALUES ('$HoTen','$SDT','$Email','$DiaChi','$Password','$TenNguoiDung', '$TinhThanh' )";
               
    $query=mysqli_query($connect,$sql);

    if($query!=0)
    {   
       
      echo'<div class="boxlogin alert alert-success"><p style="text-align:center; font-weight:bold; font-size:large;">Đăng Ký Thành Công!</p></div>';
          
    }
  }
}

?>
<!-- *************************************************** LOGIN *************************************************** -->
<?php 
 include 'config.php';
 if(isset($_POST['login']))  
 {
   $username=$_POST['uname'];
   $password=$_POST['psw'];
   if($username==""|| $password=="")
   {
     echo'<p> mời nhâp đầy đủ thông tin </p>';
   }
   else{
        $sql=" SELECT  * FROM `nguoitimviec` WHERE Password='$password' and TenNguoiDung='$username'";
        $query= mysqli_query($connect,$sql);
        $num_rows=mysqli_num_rows($query);
        if($num_rows!=0)
        {
          while($data = mysqli_fetch_array($query)) {
            $_SESSION['id'] = $data['id'];
            $_SESSION['Checked'] = $data['Checked'];
          }
         
         echo "<script> location.href='./QLTK.php'; </script>";

        }

        else{
          echo'<div class="boxlogin alert alert-danger"><p style="text-align:center; font-weight:bold; font-size:large;">Sai Thông Tin Đăng Nhập, Bạn Vui Lòng Nhập Lại.</p></div>';
        }

   }
 }
?>