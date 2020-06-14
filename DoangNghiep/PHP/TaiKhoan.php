<?php include 'default.php';?>
<link rel="stylesheet" type="text/css" href="../CSS/TaiKhoan.php">
<link rel="stylesheet" type="text/css" href="../CSS/register.php">
<!-- Account -->
<div class="box">
  <form class="form-background" action="TaiKhoan.php" method="post" >
    <div class="imgcontainer">
      <img src="../IMG/Login.png" class="imglogin" alt="Login">
      <h2><b>Đăng Nhập</b></h2>
    </div>
    <div class="container"></div>
      <label for="uname" style="font-size: large; color: black;"><b>Tên Người Dùng</b></label>
      <div class="input-container">
        <input class="form-control" type="text" placeholder="Nhập Tên Người Dùng" name="uname" required>
      </div>
      <label for="psw" style="font-size: large; color: black;"><b>Mật Khẩu</b></label>
      <div class="input-container">
        <input class="form-control" type="password" placeholder="Nhập Mật Khẩu" name="psw" required>
      </div>
      <button type="submit" name="login" style="width: 20%; margin-left: 32%; font-weight: bolder;">Đăng Nhập</button>
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
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">ĐĂNG KÝ</h3> 
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
      <input class="form-control" type="password" placeholder="Nhập Vào Mật Khẩu" name="psw" minlength="5" required>
      <label for="psw"><b>Nhập Lại Mật Khẩu</b></label>
      <input class="form-control" type="password" placeholder="Nhập Vào Mật Khẩu" name="pswCheck" id="confirm_psw" minlength="5" required>
      <!-- full name -->
      <label for="fullname"><b>Tên Công Ty</b></label>
      <input class="form-control" type="text" placeholder="Nhập Vào Tên Công TyTy" name="fullname" required>
      <!-- phone number -->
      <label for="phone"><b>Số Điện Thoại</b></label>
      <input class="form-control" type="tel" placeholder="Nhập Vào Số Điện Thoại" name="phone" pattern="[0-9]{10}" required>

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
  $TenCT = $_POST['fullname'];
  $SDT = $_POST['phone'];
  $DiaChi = $_POST['address'];
  if( $TenNguoiDung==""|| $Password==""|| $Email==""|| $TenCT==""|| $SDT=="" || $DiaChi==""){
    echo"<p>Mời nhập đầy đủ thông tin người dùng</p>";
  }
  else{
    $sql = "INSERT INTO `congty`( `TenCongTy`, `SDT`, `Email`, `DiaChi`, `Password`, `TenNguoiDung`)
     VALUES ('$TenCT','$SDT','$Email','$DiaChi','$Password','$TenNguoiDung')";
               
    $query=mysqli_query($connect,$sql);

    if($query!=0)
    {
      echo'<div class="box alert alert-success"><p style="text-align:center; font-weight:bold; font-size:large;">Đăng Ký Thành Công!</p></div>';
          
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
        $sql=" SELECT  * FROM `congty` WHERE Password='$password' and TenNguoiDung='$username'";
        $query= mysqli_query($connect,$sql);
        $num_rows=mysqli_num_rows($query);
        if($num_rows!=0)
        {
          while($data = mysqli_fetch_array($query)) {
            $_SESSION['id'] = $data['id_CongTy'];
            $_SESSION['Checked'] = $data['Checked'];
          }
          echo "<script> location.href='./QLTK.php'; </script>";

        }

        else{
          echo'<div class="box alert alert-danger"><p style="text-align:center; font-weight:bold; font-size:large;">Sai Thông Tin Đăng Nhập, Bạn Vui Lòng Nhập Lại.</p></div>';
        }

   }
 }
?>