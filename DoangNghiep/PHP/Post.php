<?php include 'default.php';?>
<?php 
/* INSERT jOBS  */
 if (isset($_POST['submit-file'])){
    $id = $_SESSION['id'];
    $tieuDe = $_POST['tieuDe'];
    $idNganhNghe = $_POST['nganhNghe'];
    $viTriTD = $_POST['viTriTD'];
    $place = $_POST['place'];
    $soLuong = $_POST['soLuong'];
    $date = $_POST['date'];
    $description =nl2br($_POST['description']);
    $mucLuong = $_POST['mucLuong'];
    $sql = ("INSERT INTO dangtincongviec ( id_CongTy, TieuDe, id_NganhNghe, ViTriTD, TinhThanh, SoLuong, HanNop, MoTa, MucLuong)
      VALUES ('$id', '$tieuDe', '$idNganhNghe','$viTriTD','$place','$soLuong','$date','$description', '$mucLuong' )");

    $query = $connect -> query($sql);
    $alert="Đăng tin việc làm thành công";
 }

    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM dangtincongviec WHERE id_DangTinCongViec = $id";
        $query = $connect->query($sql);
        $alert="Xóa thành công";
    }
?>
<link rel="stylesheet" type="text/css" href="../CSS/CVDL.php">
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">

    <h2 class="h2">CÔNG VIỆC ĐÃ ĐĂNG <button onclick="document.getElementById('id1').style.display='block'" class="jobaddbtn"><b>
          <i class="fas fa-file-upload" aria-hidden="true"></i> Đăng tin việc làm </b></button></h2>
    <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
    <hr>
<?php
/*************************** SHOW INFO **************************** */
    if (isset($_SESSION['id'])):
        $id = $_SESSION['id'];

        $sql = ("SELECT * FROM dangtincongviec WHERE id_CongTy = $id");
        $query = $connect->query($sql);
        if($query->num_rows > 0): 
?>
<div class="savedbox">
      <?php  while ($row =$query->fetch_array()): 
                    $idCV = $row['id_DangTinCongViec'];
                                      
        ?>
        
            <div class="boxcontent">
                <button type="button" class="close" aria-label="Close" style="
    width: 1%;">
                    <span aria-hidden="true"><a style="text-decoration: none; color: black;" href="?delete=<?php echo $idCV; ?>">&times;</a></span>
                </button>
                <p style="font-weight: 700; font-size:17px;" class="item-title"><?php echo $row['TieuDe']; ?></p>
                <p><b>Vị Trí TD</b>: <?php echo $row['ViTriTD']; ?></p>
                <p><b>Tỉnh Thành</b>: <?php echo $row['TinhThanh']; ?></p>
                <p><b>Số Lượng</b>: <?php echo $row['SoLuong']; ?></p>
                <p><b>Mức lương</b>: <?php echo $row['MucLuong']; ?></p>
                <p><b>Hạn nộp</b>: <?php echo $row['HanNop']; ?></p>
                <p><b>Mô Tả</b>:<br><?php echo $row['MoTa']; ?></p>
            </div>
            <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>

    <!-- ************************************** ADD JOB ************************************** -->
<div id="id1" class="modal">
  <form class="modalbox" action="" method="POST">
    <div class="container">
      <img src="../IMG/profile_edit.png" class="editimg">
      <h3 style="font-size: x-large; font-weight:bolder; color: #4CAF50;">THÔNG TIN CÔNG VIỆC</h3>
      <p>Bạn vui lòng điền thông tin bên dưới để đổi thông tin công việc.</p>
      <hr>

      <label><b>Tiêu Đề</b></label>
      <input class="form-control" type="text"  name="tieuDe" required>
      <!-- Vị Trí Tuyển Dụng -->
      <label><b>Vị trí tuyển dụng</b></label>
      <input class="form-control" type="text"  name="viTriTD" required>
      <!-- Ngành Nghề -->
      <label for="dob"><b>Ngành Nghề</b></label>
      <select name="nganhNghe" class="place form-control">
        <option value="">Chọn Ngành Nghề</option>
      <?php 
      $sql =("SELECT * FROM nganhnghe");
      $query = $connect->query($sql) or die($connect -> error());
      while ($row =$query->fetch_array()):
      ?>
        <option  value="<?php echo $row['id_NganhNghe']; ?>"><?php echo $row['NganhNghe']; ?></option>
      <?php endwhile; ?>
      </select>
      <!-- Tỉnh Thành -->
      <label for="place"><b>Tỉnh Thành</b></label>
      <select name="place" class="place form-control"  required>
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

      <label><b> Số Lượng</b></label>
      <input class="form-control" type="number" min="1"  name="soLuong" required>

      <!-- Hạn Nộp -->
      <label><b> Hạn Nộp</b></label>
      <input class="form-control" type="date"  name="date" required>
      
      <label for="address"><b>Mô Tả</b></label> <br>
      <textarea class="form-control" name="description" id="description" style="border-radius: 12px;"  rows="10"></textarea>

      <!-- Mức Lương -->
      <label><b>Mức Lương</b></label>
      <div style="display: flex;">
        <input class="form-control" type="number" min="1"  name="mucLuong" value="<?php echo $mucLuong; ?>" style="flex: 7;" required>
        <select name="donVi" class="place form-control"  style="flex: 3;" required>
          <option value="Triệu (VNĐ)">Triệu (VNĐ)</option>
          <option value="$">$</option>
        </select>
      </div>
      
      <div class="clearfix">
        <button name="submit-file" type="submit" class="confirmbtn"><b>Xác Nhận</b></button>
        <button type="button" onclick="document.getElementById('id1').style.display='none'" class="cancelbtn"><b>Hủy</b></button>
      </div>
    </div>
  </form>
</div>