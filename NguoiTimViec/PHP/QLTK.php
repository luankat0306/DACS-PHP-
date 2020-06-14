<?php 
  include 'default.php';
  include 'config.php'; 
?>
<?php
$pass = '';
$hoTen = '';
$sdt = '';
$email = '';
$username = '';
$date = '';
$gender = '';
$address = '';
$place = '';
$fb = '';
$ig = '';
$image = '';

$NganhNghe ='';
$viTriTD = '';
$trinhDo = '';
$kinhNghiem = '';
$hinhThuc = '';
$ngoaiNgu = '';
$Luong = '';

/* **************************** SHOW INFO **************************** */
		if (isset( $_SESSION['id'])) {
			$id =  $_SESSION['id'];
			$update = true;
	
			$sql =("SELECT * FROM nguoitimviec WHERE id =$id");
			$query = $connect->query($sql) or die($connect -> error());
	
			while ($row =$query->fetch_array()) {
				$pass = $row['Password'];
				$hoTen = $row['HoTen'];
				$sdt = $row['SDT'];
				$email = $row['Email'];
        $username = $row['TenNguoiDung'];
        $date = $row['NgaySinh'];
        $gender = $row['GioiTinh'];
        $address = $row['DiaChi'];
        $place = $row['TinhThanh'];
        $image = $row['Image'];
        $fb = $row['FB'];
        $ig = $row['IG'];
			}
    }
/* **************************** SHOW HỒ SƠ **************************** */
		if (isset( $_SESSION['id'])) {
			$id =  $_SESSION['id'];
	
			$sql =("SELECT * FROM hoso INNER JOIN nganhnghe ON nganhnghe.id_NganhNghe = hoso.id_NganhNghe WHERE id_NguoiTimViec =$id");
			$query = $connect->query($sql) or die($connect -> error());
	
			while ($row =$query->fetch_array()) {
        $_SESSION['idHS'] =$row['id_HoSo'];
        $idNganhNghe = $row['id_NganhNghe'];
        $NganhNghe = $row['NganhNghe'];
        $viTriTD = $row['ViTriTD'];
        $trinhDo = $row['TrinhDo'];
        $kinhNghiem = $row['KinhNghiem'];
        $hinhThuc = $row['HinhThuc'];
        $ngoaiNgu = $row['NgoaiNgu'];
        $Luong = $row['MucLuong'];
			}
    }

/* **************************** CHANGE PASSWORD **************************** */
if (isset($_POST['submit-pass'])){
  $pass = $_POST['psw'];
  $sql = ("UPDATE nguoitimviec SET Password = '$pass' WHERE id =$id");
  $query = $connect -> query($sql);
  $alert = 'Đổi mật khẩu thành công';
  
}

/* **************************** CHANGE INFO **************************** */
    if (isset($_POST['submit-info'])){
      $hoTen = $_POST['fullname'];
      $date= $_POST['dob'];
      $gender= $_POST['radio'];
      $sdt = $_POST['phone'];
      $address = $_POST['address'];
      $place = $_POST['place'];
      $fb = $_POST['fb'];
      $ig = $_POST['ig'];

      $sql = ("UPDATE nguoitimviec SET HoTen = '$hoTen', NgaySinh = '$date', GioiTinh = '$gender', 
      SDT = '$sdt', DiaChi = '$address', TinhThanh='$place', FB='$fb', IG='$ig'   
      WHERE id =$id");
      $query = $connect -> query($sql);
      $alert = 'Đổi thông tin cá nhân thành công';
      
    }
/* **************************** CHANGE AVATAR **************************** */
    if(isset($_POST['submit-avatar'])){
      $image = time() . '_' . $_FILES['avatar']['name'];
      $target = '../IMG/Avatar/' .$image;
      move_uploaded_file($_FILES['avatar']['tmp_name'], $target);

      $sql = ("UPDATE nguoitimviec SET Image = '$image' WHERE id = $id");
      $query = $connect -> query($sql);
      $alert = 'Đổi ảnh đại diện thành công';
      
    }

  /* **************************** CHANGE CV **************************** */
    if (isset($_POST['submit-file'])){
        $id = $_SESSION['id'];
        $idNganhNghe = $_POST['nganhNghe'];
        $viTriTD = $_POST['viTriTD'];
        $trinhDo = $_POST['trinhDo'];
        $kinhNghiem = $_POST['kinhNghiem'];
        $hinhThuc = $_POST['hinhThuc'];
        $ngoaiNgu = $_POST['ngoaiNgu'];
        $mucLuong = $_POST['mucLuong'];
        $donVi = $_POST['donVi'];
        $sql = ("SELECT * FROM hoso WHERE id_NguoiTimViec = $id");

        $query = $connect -> query($sql);
        $data = mysqli_num_rows($query);

        if ($data == 0 ){
          $sql = ("INSERT INTO hoso ( id_NguoiTimViec, id_NganhNghe, ViTriTD, TrinhDo, KinhNghiem, HinhThuc, NgoaiNgu,MucLuong)
          VALUES ('$id','$idNganhNghe','$viTriTD','$trinhDo','$kinhNghiem','$hinhThuc','$ngoaiNgu', '$mucLuong $donVi' )");
        } else {
          $sql = ("UPDATE hoso SET id_NganhNghe = '$idNganhNghe', ViTriTD = '$viTriTD', TrinhDo = '$trinhDo', KinhNghiem = '$kinhNghiem', HinhThuc = '$hinhThuc', NgoaiNgu = '$ngoaiNgu', MucLuong='$mucLuong $donVi' WHERE id_NguoiTimViec=$id ");
        }
      
      $query = $connect -> query($sql);
      $alert = 'Đổi hồ sơ thành công';
      header("Refresh:1");
    }
?> 
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">
  
  <h2 class="h2">QUẢN LÝ TÀI KHOẢN</h2> 
  <hr>

<div class="wrapper">
  <div class="left">
    <img class="imgAva" width="200" height="200" src="../IMG/Avatar/<?php echo $image; ?>">
      <h4><?php echo $hoTen; ?></h4>
       <p style="font-size:medium;"><?php echo $NganhNghe; ?></p>
       <div class="social_media">
        <ul>
          <li><a id="id01" href="<?php echo $fb; ?>" target="_blank">
          <i class="fab fa-facebook-f"></i></a></li>
          <li><a id="id02" href="<?php echo $ig; ?>" target="_blank">
          <i class="fab fa-instagram"></i></a></li>
      </ul>
      </div>
      <button onclick="document.getElementById('id3').style.display='block'" class="avatarbtn"><b>
      <i class="far fa-file-image"></i> Đổi Ảnh Đại Diện</b></button>
      <button class="logoutbtn"><a style="text-decoration:none;color:white" href="logout.php"><b>
      Đăng Xuất <i class="fas fa-sign-out-alt"></i></b></a></button>
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
              <i class="fas fa-key"></i> Đổi mật khẩu</b></button></h4>
              <p><?php echo $pass; ?></p>
            </div>  
          </div> 
      </div>
    
      <div class="personalinfo">
        <h3>THÔNG TIN CÁ NHÂN <button onclick="document.getElementById('id2').style.display='block'" class="infoeditbtn"><b>
        <i class="far fa-edit"></i> Sửa</b></button></h3>

        <div class="personalinfo_data">
             <div class="data">
                <h4>Họ Và Tên</h4>
                <p><?php echo $hoTen; ?></p>
             </div>
             <div class="data">
               <h4>Ngày Sinh</h4>
                <p><?php echo  date("d-m-Y", strtotime($date) ); ?></p>
              </div>
              <div class="data">
                <h4>Giới Tính</h4>
                <p><?php echo $gender; ?></p>
              </div>
              <div class="data">
                <h4>SĐT</h4>
                <p><?php echo $sdt; ?></p>
              </div>
              <div class="data">
                <h4>Tỉnh Thành</h4>
                <p><?php echo $place; ?></p>
              </div>
              <div class="data">
                <h4>Địa Chỉ</h4>
                <p><?php echo $address; ?></p>
              </div>
        </div>
    </div>
    <div class="cv">
        <h3>HỒ SƠ <button onclick="document.getElementById('id4').style.display='block'" class="cvbtn"><b>
        <i class="fas fa-id-card"></i> Hồ Sơ</b></button></h3>
        <div class="cv_data">
             <div class="data">
                <h4>Vị Trí</h4>
                <p><?php echo $viTriTD; ?></p>
             </div>
             <div class="data">
               <h4>Ngành Nghề</h4>
                <p><?php echo $NganhNghe; ?></p>
              </div>
              <div class="data">
                <h4>Trình Độ</h4>
                <p><?php echo $trinhDo; ?></p>
              </div>
              <div class="data">
                <h4>Kinh Nghiệm</h4>
                <p><?php echo $kinhNghiem; ?></p>
              </div>
              <div class="data">
                <h4>Hình Thức</h4>
                <p><?php echo $hinhThuc; ?></p>
              </div>
              <div class="data">
                <h4>Ngoại Ngữ</h4>
                <p><?php echo $ngoaiNgu; ?></p>
              </div>
              <div class="data">
                <h4>Mức Lương</h4>
                <p><?php echo $Luong; ?></p>
              </div>
        </div>
    </div>
    <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
  </div>
</div>

<!-- ************************************** CHANGE PASSWORD ************************************** -->
<div id="id1" class="modal">
  <form class="modalbox" action="" method = "POST">
    <div class="container">
      <img src="../IMG/password_change.png" class="form-icon">
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
      <img src="../IMG/profile_edit.png" class="form-icon">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">THAY ĐỔI THÔNG TIN CÁ NHÂN</h3>
      <p>Bạn vui lòng điền thông tin bên dưới để đổi thông tin cá nhân.</p>
      <hr>
      <!-- full name -->
      <label for="fullname"><b>Họ Và Tên</b></label>
      <input class="form-control" type="text" placeholder="Nhập họ và tên" name="fullname" value="<?php echo $hoTen; ?>" required>
      <!-- date of birth -->
      <label for="dob"><b>Ngày Sinh</b></label>
      <input class="form-control" type="date" name="dob" value="<?php echo $date; ?>" required>
      <!-- gender -->
      <label for="gender"><b>Giới Tính</b></label>
      <div class="gender form-control">
      <label class="radiocontainer ">Nam
        <input type="radio" name="radio" value="Nam" required>
        <span class="checkmark "></span>
      </label>
      <label class="radiocontainer">Nữ
        <input  type="radio" name="radio" value="Nữ" required >
        <span class="checkmark"></span>
      </label>
      </div>
      <!-- phone -->
      <label for="phone"><b>Số Điện Thoại</b></label>
      <input class="form-control" type="tel" placeholder="Nhập Vào số điện thoại" name="phone" pattern="[0-9]{10}" value="<?php echo $sdt; ?>" required>
      <label for="place"><b>Tỉnh Thành</b></label>
      <select name="place" class="place form-control"  required>
        <option value="<?php echo $place; ?>"><?php echo $place; ?></option>
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
      <!--address  -->
      <label for="address"><b>Địa Chỉ</b></label>
      <input class="form-control" type="text" placeholder="Nhập vào địa chỉ" name="address" value="<?php echo $address; ?>" required>
      <!-- social media -->
      <label for="fblink"><b>Trang Facebook Cá Nhân</b></label>
      <input class="form-control" type="text" placeholder="Nhập vào link Facebook của bạn (không bắt buộc)" name="fb" value="<?php echo $fb; ?>">
      <label for="iglink"><b>Trang Instagram Cá Nhân</b></label>
      <input class="form-control" type="text" placeholder="Nhập vào link Instagram của bạn (không bắt buộc)" name="ig" value="<?php echo $ig; ?>">
      <div class="clearfix">
        <button name="submit-info" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id2').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>
<!-- ************************************** EDIT CV ************************************** -->
<div id="id4" class="modal">
  <form class="modalbox" action="" method="POST">
    <div class="container">
      <img src="../IMG/cvicon.png" class="form-icon">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">THAY ĐỔI THÔNG TIN HỒ SƠ</h3>
      <p>Bạn vui lòng điền thông tin bên dưới để đổi thông tin hồ sơ.</p>
      <hr>
      <!-- Vị Trí Tuyển Dụng -->
      <label><b>Vị trí mong muốn</b></label>
      <input class="form-control" type="text"  name="viTriTD" placeholder="Nhân viên" value="<?php echo $viTriTD; ?>" required>
      <!-- Ngành Nghề -->
      <label for="dob"><b>Ngành Nghề</b></label>
      <select name="nganhNghe" class="place form-control"  required>
      <option value="<?php echo $idNganhNghe; ?>"><?php echo $NganhNghe; ?></option>
      <?php 
      $sql =("SELECT * FROM nganhnghe");
      $query = $connect->query($sql) or die($connect -> error());
      while ($row =$query->fetch_array()):
      ?>
        <option  value="<?php echo $row['id_NganhNghe']; ?>"><?php echo $row['NganhNghe']; ?></option>
      <?php endwhile; ?>
      </select>
      <!-- Trình Độ -->
      <label><b>Trình Độ</b></label>
      <select name="trinhDo" class="place form-control"  style="flex: 3;" required>
          <option value="<?php echo $trinhDo; ?>"><?php echo $trinhDo; ?></option>
          <optgroup label="Chọn trình độ">
              <option value="Chứng Chỉ Nghề">Chứng Chỉ Nghề</option>
              <option value="Trung Cấp">Trung Cấp</option>
              <option value="Trung Học">Trung Học</option>
              <option value="Cao Đẳng">Cao Đẳng</option>
              <option value="Đại Học">Đại Học</option>
              <option value="Trên Đại Học">Trên Đại Học</option>
          </optgroup>
      </select>
      <!-- Kinh Nghiệm -->
      <label><b>Kinh Nghiệm</b></label>
      <select name="kinhNghiem" class="place form-control"  style="flex: 3;" required>
          <option value="<?php echo $kinhNghiem; ?>"><?php echo $kinhNghiem; ?></option>
          <optgroup label="Chọn số năm kinh nghiệm">
              <option value="Chưa Có">Chưa Có</option>
              <option value="Dưới 1 năm">Dưới 1 năm</option>
              <option value="1 năm">1 năm</option>
              <option value="2 năm">2 năm</option>
              <option value="3 năm">3 năm</option>
              <option value="4 năm">4 năm</option>
              <option value="5 năm">5 năm</option>
              <option value="Trên 5 năm">Trên 5 năm</option>
          </optgroup>
      </select>
      <!-- Hình Thức -->
      <label><b>Hình Thức Làm Việc</b></label>
      <select name="hinhThuc" class="place form-control"  style="flex: 3;" required>
          <option value="<?php echo $hinhThuc; ?>"><?php echo $hinhThuc; ?></option>
          <optgroup label="Chọn hình thức làm việc">
              <option value="Toàn thời gian">Toàn thời gian</option>
              <option value="Bán thời gian">Bán thời gian</option>
              <option value="Theo hợp đồng">Theo hợp đồng</option>
              <option value="Thực tập">Thực tập</option>
          </optgroup>
      </select>
      <!-- Ngoại Ngữ -->
      <label><b>Ngoại Ngữ</b></label>
      <select name="ngoaiNgu" class="place form-control"  style="flex: 3;" required>
          <option value="<?php echo $ngoaiNgu; ?>"><?php echo $ngoaiNgu; ?></option>
          <optgroup label="Chọn ngoại ngữ">
              <option value="Tiếng Anh">Tiếng Anh</option>
              <option value="Tiếng Trung">Tiếng Trung</option>
              <option value="Tiếng Nhật">Tiếng Nhật</option>
              <option value="Tiếng Pháp">Tiếng Pháp</option>
              <option value="Tiếng Nga">Tiếng Nga</option>
              <option value="Tiếng Hàn">Tiếng Hàn</option>
              <option value="Tiếng Đức">Tiếng Đức</option>
              <option value="Tiếng Ý">Tiếng Ý</option>
              <option value="Ngoại Ngữ Khác">Ngoại Ngữ Khác</option>
          </optgroup>
      </select>
      <!-- Mức Lương -->
      <label><b>Mức Lương mong muốn</b></label>
      <div style="display: flex;">
        <input class="form-control" type="number" min="1"  name="mucLuong" value="<?php echo $mucLuong; ?>" style="flex: 7;" required>
        <select name="donVi" class="place form-control"  style="flex: 3;" required>
          <option value="Triệu (VNĐ)">Triệu (VNĐ)</option>
          <option value="$">$</option>
        </select>
      </div>
      
      <div class="clearfix">
        <button name="submit-file" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id4').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>
<!-- ************************************** CHANGE AVATAR ************************************** -->
<div id="id3" class="modal">
  <form  method="POST" class="modalbox" action="QLTK.php" enctype="multipart/form-data">
    <div class="container">
      <img src="../IMG/avatar_change.png" class="form-icon">
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
