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

    <h2 class="h2" style="color:#4CAF50">TÌM KIẾM THEO NGÀNH NGHỀ</h2>
    <?php if(isset($alert)):?>        
    <div class="alert alert-<?php echo $alert_color?> alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-<?php echo $alert_icon?>"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
    <hr>

<div class="box">
    <h3 style="color:#4CAF50" class="otherh">Nhập ngành nghề để tìm kiếm</h3>
    <form class="example" action="" method="GET">
        <input class="form-control" type="text" placeholder="Tìm Kiếm..." name="search">
        <button class="occ" type="submit"  name="submit-search"><i class="fa fa-search"></i></button>
    </form>
</div>
<?php
/*************************** SHOW INFO **************************** */
    if (isset($_GET['submit-search'])):
        $search =  $_GET['search'];

        $sql =("SELECT * FROM congty INNER JOIN dangtincongviec ON congty.id_CongTy = dangtincongviec.id_CongTy  INNER JOIN nganhnghe ON nganhnghe.id_NganhNghe = dangtincongviec.id_NganhNghe WHERE NganhNghe LIKE '%$search%' ");
        $query = $connect->query($sql) or die($connect -> error());
        if($query->num_rows > 0): 
?>
    <div class="searchbox">
      <?php  while ($row =$query->fetch_array()): 
        ?>
        <form action=""   method="POST">
            <input type="hidden" name="idCV" value = "<?php echo $row['id_DangTinCongViec']; ?>">
            <div class="content">
                
                    <a style="font-weight: 700; font-size:17px;" class="item-title" href="./ShowInfo.php?cong-viec=<?php echo $row['id_DangTinCongViec']; ?>""><?php echo $row['TieuDe']; ?></a>
                    <a style="font-weight: 500; font-size:15px;" class="item-name" href="./ShowInfo.php?cong-ty=<?php echo $row['id_CongTy']; ?>"><?php echo $row['TenCongTy']; ?></a>

                    <p><i class="fas fa-briefcase"></i> <b>Ngành nghề: </b><?php echo $row['NganhNghe']; ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <b>Tỉnh Thành: </b><?php echo $row['TinhThanh']; ?></p>

                    <p><i class="fas fa-dollar-sign"></i> <b>Mức lương:: </b> <?php echo $row['MucLuong']; ?></p>
                    <p><i class="far fa-clock"></i> <b>Hạn nộp: </b> <?php echo  date("d-m-Y", strtotime($row['HanNop']) ); ?></p>
            
                    <?php if(isset($_SESSION['id'])): ?>   
                    <button class="btnContent submit" type="submit" style="outline: none;" name="submit-congviec" >Nộp Hồ Sơ</button>

                    <button class="btnContent save" type="submit" style="outline: none;" name="save-congviec">Lưu</button>
                    <?php endif; ?>   
            </div>
        </form>
            <?php endwhile; ?>
    </div>
        
            <?php else: ?>
                <div class="boxlogin alert alert-danger"><p style="text-align:center; font-weight:bold; font-size:x-large;">Không có kết quả!</p></div>
        <?php endif; ?>
    <?php endif; ?>