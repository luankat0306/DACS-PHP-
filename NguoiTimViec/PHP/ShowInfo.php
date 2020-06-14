<?php include 'default.php';?>

<?php 
$search ='';
/* SAVE JOB */
if(isset($_POST['save-congviec'])) {
    $idUser = $_SESSION['id'];
    $idCV = $_POST['idCV'];
    $sql = ("INSERT INTO luucongviec (id_NguoiTimViec, id_DangTinCongViec, Luu)  VALUES ('$idUser', '$idCV', 'Lưu')");
    $query = $connect -> query($sql);
    $alert = "Lưu Thành Công";
    $alert_color = "success";
    $alert_icon = "check";
}
/* ****************************SUBMIT HỒ SƠ **************************** */
if (isset( $_POST['submit-congviec'])) {
    $id =  $_SESSION['id'];

    $sql =("SELECT * FROM hoso WHERE id_NguoiTimViec =$id");
    $query = $connect->query($sql) or die($connect -> error());
    if($query->num_rows > 0){
        while ($row =$query->fetch_array()) { 
            $idHS = $row['id_HoSo'];
        }    
        
            $idCV = $_POST['idCV'];
            $sql = ("INSERT INTO trangthaihoso (id_HoSo, id_DangTinCongViec, TrangThai)  VALUES ('$idHS', '$idCV','Đang Chờ')");
            $query = $connect -> query($sql);
            if($query != 0){
                $alert = "Nộp Hồ Sơ Thành Công";
                $alert_color = "success";
                $alert_icon = "check";
            }
    }else {
        $alert = "Không thể nộp hồ sơ. Vui lòng tạo hồ sơ tại trang Quản Lý Tài Khoản";
        $alert_color = "danger";
        $alert_icon = "exclamation";
   }
}
 
?>
<link rel="stylesheet" type="text/css" href="../CSS/Search.php">
<?php if(isset($alert)):?>        
    <div class="alert alert-<?php echo $alert_color?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-<?php echo $alert_icon?>"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
<?php 
/* SHOW INFO JOB */
    if(isset($_GET['cong-viec'])):
       $idCV = $_GET['cong-viec'];
       $sql =("SELECT * FROM congty INNER JOIN dangtincongviec ON congty.id_CongTy = dangtincongviec.id_CongTy  INNER JOIN nganhnghe ON nganhnghe.id_NganhNghe = dangtincongviec.id_NganhNghe WHERE id_DangTinCongViec = $idCV");
       $query = $connect->query($sql) or die($connect -> error());
?>
       <div class="job-info-box">
       <?php  while ($row =$query->fetch_array()): ?>
            <form action=""   method="POST">
                <input type="hidden" name="idCV" value = "<?php echo $row['id_DangTinCongViec']; ?>">
                <a style="font-weight: 700; font-size:30px;" class="item-title" href="?cong-viec=<?php echo $row['id_DangTinCongViec'] ?>"><?php echo $row['TieuDe']; ?><hr></a> 
                <a style="font-weight: 500; font-size:20px;" class="item-name"  href="?cong-ty=<?php echo $row['id_CongTy']; ?>" ><?php echo $row['TenCongTy']; ?><hr></a>

                <p><b><i class="fas fa-briefcase"></i> Ngành Nghề</b>: <?php echo $row['NganhNghe']; ?></p>
                <p><b><i class="fas fa-city"></i> Tỉnh Thành</b>: <?php echo $row['TinhThanh']; ?></p>

                <p><b><i class="fas fa-hand-point-right"></i> Vị Trí TD</b>: <?php echo $row['ViTriTD']; ?></p>
                <p><b><i class="fas fa-child"></i> Số Lượng</b>: <?php echo $row['SoLuong']; ?></p>

                <p><b><i class="fas fa-hand-holding-usd"></i> Mức Lương</b>: <?php echo $row['MucLuong']; ?></p>
                <p><b><i class="far fa-clock"></i> Hạn nộp</b>: <?php echo  date("d-m-Y", strtotime($row['HanNop']) ); ?></p>
          
                <p class="item-detail"><b><i class="fas fa-info-circle"></i> Mô Tả: <br> </b><?php echo $row['MoTa']; ?></p>
                <!-- CHECK USER -->
                <?php   if (isset($_SESSION['id'])): ?>
                <button class="btnContent submit" type="submit" style="outline: none;" name="submit-congviec" >Nộp Hồ Sơ</button>

                <button class="btnContent save" type="submit" style="outline: none;" name="save-congviec">Lưu</button>
                <?php endif; ?>
            </form>
                <?php endwhile; ?>
        </div>
    <?php endif; ?>
  
<!-- SHOW COMPANY -->
<?php
if(isset($_GET['cong-ty'])):
    $idCT = $_GET['cong-ty'];
    $sql = ("SELECT * FROM congty WHERE id_CongTy=$idCT");
    $query = $connect->query($sql) or die($connect -> error());
    
?>
    <div class=corp-info-box>
        <?php  while ($row =$query->fetch_array()): ?>
        <div class="imgcontainer">
            <div class = "imgCT">
            <img src="../../DoangNghiep/IMG/Avatar /<?php echo $row['Image']; ?>" >
            </div>      
        </div>
        <div class=corp-content>
            <h2><?php echo $row['TenCongTy']; ?></h2>
            <hr>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i><p class="info">Địa Chỉ:</p>
              <?php echo $row['DiaChi']; ?> 
              </li>
              <li><i class="fas fa-globe"></i><p class="info">Website:</p>
              <a href="<?php echo $row['Website']; ?> " target="_blank"><?php echo $row['Website']; ?>  </a>
              </li>
              <li><i class="fas fa-info-circle"></i><p class="info">Mô Tả:</p><br>
              <?php echo $row['MoTa']; ?> 
              </li>
            </ul>
        </div>
        <?php endwhile; ?>
</div>

<?php endif; ?>



