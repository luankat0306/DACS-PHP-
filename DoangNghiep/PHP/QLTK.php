<?php 
  include 'default.php';
  include 'config.php'; 
?>
<?php
$pass = '';
$tenCT = '';
$sdt = '';
$email = '';
$username = '';
$web = '';
$nameContact= '';
$address = '';
$image = '';
/* **************************** SHOW INFO **************************** */
		if (isset( $_SESSION['id'])) {
			$id =  $_SESSION['id'];
			$update = true;
	
			$sql =("SELECT * FROM congty WHERE id_CongTy =$id");
			$query = $connect->query($sql) or die($connect -> error());
	
			while ($row =$query->fetch_array()) {
				$pass = $row['Password'];
				$tenCT = $row['TenCongTy'];
				$sdt = $row['SDT'];
				$email = $row['Email'];
        $username = $row['TenNguoiDung'];
        $nameContact = $row['TenNguoiLienHe'];
        $web = $row['Website'];
        $address = $row['DiaChi'];
        $description = $row['MoTa'];
        $image = $row['Image'];
			}
    }

/* **************************** CHANGE PASSWORD **************************** */
if (isset($_POST['submit-pass'])){
  $pass = $_POST['psw'];
  $sql = ("UPDATE congty SET Password = '$pass' WHERE id_CongTy =$id");
  $query = $connect -> query($sql);
  $alert="Đổi mật khẩu thành công";
}

/* **************************** CHANGE INFO **************************** */
    if (isset($_POST['submit-info'])){
      $id = $_SESSION['id'];
      $tenCT = $_POST['fullname'];
      $nameContact= $_POST['nameContact'];
      $web= $_POST['web'];
      $sdt = $_POST['phone'];
      $address = $_POST['address'];
      if($_POST['description'] != ""){
          $description = nl2br($_POST['description']);
      }


      $sql = ("UPDATE congty SET TenCongTy = '$tenCT', TenNguoiLienHe = '$nameContact', Website = '$web', SDT = '$sdt', DiaChi = '$address', MoTa='$description'  WHERE id_CongTy =$id");
      $query = $connect -> query($sql);
      $alert="Thay đổi thông tin công ty thành công";
    }
/* **************************** CHANGE AVATAR **************************** */
    if(isset($_POST['submit-avatar'])){
      $image = 'logo' . '-' . $_FILES['avatar']['name'];
      $target = '../IMG/Avatar/' .$image;
      move_uploaded_file($_FILES['avatar']['tmp_name'], $target);

      $sql = ("UPDATE congty SET Image = '$image' WHERE id_CongTy = $id");
      $query = $connect -> query($sql);
      $alert="Đổi logo công ty thành công";
    }
?> 
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">
  
  <h2 class="h2">QUẢN LÝ TÀI KHOẢN</h2>
  <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
  <hr>

<div class="wrapper">
  <div class="left">
    <div class = "imgAva"><img width="100%" src="../IMG/Avatar/<?php echo $image; ?>"></div>
      
      <h4><?php echo $tenCT; ?></h4>
      <button onclick="document.getElementById('id3').style.display='block'" class="avatarbtn"><b>Đổi Ảnh Đại Diện</b></button>
      <button class="logoutbtn"><a style="text-decoration:none;color:white" href="logout.php"><b>Đăng Xuất</b></a></button>
  </div>

  <div class="right">
      <div class="info">
          <h3>THÔNG TIN TÀI KHOẢN</h3>
          <div class="info_data">
            <div class="data">
              <h4>Email</h4>
              <p><?php echo $email; ?></p>
            </div>
            <div class="data">
              <h4>Tên Người Dùng</h4>
              <p><?php echo $username; ?></p>
            </div>
            <div class="data">
              <h4>Mật Khẩu <button onclick="document.getElementById('id1').style.display='block'" class="pswchangebtn"><b>
                Đổi mật khẩu</b></button></h4>
              <p><?php echo $pass; ?></p>
            </div>  
          </div> 
      </div>
    
      <div class="personalinfo">
        <h3>THÔNG TIN CÁ NHÂN <button onclick="document.getElementById('id2').style.display='block'" class="infoeditbtn"><b>
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sửa</b></button> </h3>
        <div class="personalinfo_data">
             
             <div class="data">
               <h4>Người Liên Hệ</h4>
                <p><?php echo $nameContact; ?></p>
              </div>
             
              <div class="data">
                <h4>SĐT</h4>
                <p><?php echo $sdt; ?></p>
              </div>
              
              <div class="data">
                <h4>Địa Chỉ</h4>
                <p><?php echo $address; ?></p>
              </div>

              <div class="data">
                <h4>Website</h4>
                <a href="<?php echo $web; ?>" style="color: black;" target="_blank"><?php echo $web; ?></a>
              </div>
        </div>
        <div class="personalinfo_data">
            <div class="data" style="
    width: 100%;">
              <h4>Mô Tả:</h4> 
              <p><?php echo $description; ?></p>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- ************************************** CHANGE PASSWORD ************************************** -->
<div id="id1" class="modal">
  <form class="modalbox" action="" method = "POST">
    <div class="container">
      <img src="../IMG/password_change.png" class="pswchangeimg">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;" >ĐỔI MẬT KHẨU</h3>
      <p>Bạn vui lòng nhập mật khẩu mới để đổi mật khẩu.</p>
      <hr>
      <!-- password -->
      <label for="psw"><b>Mật Khẩu</b></label>
      <input class="form-control" type="password" placeholder="Nhập Mật Khẩu Mới" name="psw" minlength="5" required>
      <div class="clearfix">
        <button name="submit-pass" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>
</form>

<!-- ************************************** EDIT INFO ************************************** -->
<div id="id2" class="modal">
  <form class="modalbox" action="" method="POST">
    <div class="container">
      <img src="../IMG/profile_edit.png" class="editimg">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">THAY ĐỔI THÔNG TIN CÔNG TY</h3>
      <p>Bạn vui lòng điền thông tin bên dưới để đổi thông tin công ty.</p>
      <hr>
      
      <label for="fullname"><b>Tên Công Ty</b></label>
      <input class="form-control" type="text" placeholder="Nhập tên công ty" name="fullname" value="<?php echo $tenCT; ?>" required>
      
      <label for="dob"><b>Tên Người Liên Hệ</b></label>
      <input class="form-control" type="text" name="nameContact" value="<?php echo $nameContact; ?>" required>
      
      <label for="phone"><b>Số Điện Thoại</b></label>
      <input class="form-control" type="tel" placeholder="Nhập Vào số điện thoại" name="phone" pattern="[0-9]{10}" value="<?php echo $sdt; ?>" required>

      <label for="address"><b>Địa Chỉ</b></label>
      <input class="form-control" type="text" placeholder="Nhập địa chỉ" name="address" value="<?php echo $address; ?>" required>

      <label for="address"><b>Website</b></label>
      <input class="form-control" type="text" placeholder="Nhập website" name="web" value="<?php echo $web; ?>" required>

      <label for="address"><b>Mô Tả</b></label> <br>
      <textarea class="form-control" name="description" id="description" style="border-radius: 12px;"  rows="10"></textarea>
      <div class="clearfix">
        <button name="submit-info" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id2').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>
<!-- ************************************** CHANGE AVATAR ************************************** -->
<div id="id3" class="modal">
  <form  method="POST" class="modalbox" action="QLTK.php" enctype="multipart/form-data">
    <div class="container">
      <img src="../IMG/avatar_change.png" class="avatarimg">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">ĐỔI ẢNH ĐẠI DIỆN</h3>
      <p>Bạn vui lòng chọn một ảnh mới để đổi ảnh đại diện.</p>
      <hr>
        <input name="avatar" class="form-control" type="file" accept="image/*">
        <button name="submit-avatar" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id3').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>
