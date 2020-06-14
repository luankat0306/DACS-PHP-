<?php include 'default.php';?>
<?php 
/* Chấp Thuận */
if(isset($_POST['accept'])) {
    $id = $_POST['idTT'];
    $sql = ("UPDATE trangthaihoso SET TrangThai = 'Đã Chấp Thuận' WHERE id_TrangThai=$id ");
    $query = $connect -> query($sql);
    $alert="Tiếp Nhận Hồ Sơ Thành Công";
}
/* Từ Chối */
if(isset($_POST['deny'])) {
    $id = $_POST['idTT'];
    $sql = ("UPDATE trangthaihoso SET TrangThai = 'Bị Từ Chối' WHERE id_TrangThai=$id ");
    $query = $connect -> query($sql);
    $alert="Từ Chối Thành Công";
}
?>
<link rel="stylesheet" type="text/css" href="../CSS/CVDL.php">
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">

    <h2 class="h2">THÔNG TIN HỒ SƠ</h2>
    <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
    <hr>
<?php

/*************************** SHOW INFO **************************** */
    if (isset($_GET['id'])):
        $id = $_GET['id'];

        $sql = ("SELECT * FROM trangthaihoso INNER JOIN dangtincongviec ON trangthaihoso.id_DangTinCongViec = dangtincongviec.id_DangTinCongViec 
                                                                     INNER JOIN hoso ON trangthaihoso.id_HoSo = hoso.id_HoSo
                                                                     INNER JOIN nguoitimviec ON hoso.id_NguoiTimViec = nguoitimviec.id
                    
                    WHERE id_TrangThai = $id AND TrangThai!='Bị Từ Chối'
                    ORDER BY TieuDe");
        $query = $connect->query($sql);
        if($query->num_rows > 0): ?>


      <?php  while ($row =$query->fetch_array()): 
                    $id = $row['id_TrangThai'];
                    
                                      
        ?>
    <div class="wrapper" style="position: static; margin: auto;">
        <div class="left" style="background: linear-gradient(45deg, #48c6ef, #6f86d6);">
            <div class = "imgAva"><img width="100%" height="100%"  style="border-radius: 10px" src="../../NguoiTimViec/IMG/Avatar/<?php echo $row['Image']; ?>"></div>
      
            <h4><?php echo $row['HoTen']; ?></h4>
            <div class="social_media">
                  <ul>
                    <li><a id="id01" href="<?php echo $row['FB']; ?>" target="_blank">
                      <i class="fab fa-facebook-f" style="font-size: 25px;"></i></a></li>
                    <li><a id="id02" href="<?php echo $row['IG']; ?>" target="_blank">
                      <i class="fab fa-instagram" style="font-size: 25px;"></i></a></li>
                  </ul>
              </div>
        </div>

        <div class="right">
            <div class="personalinfo">
                <h3><?php echo $row['TieuDe']; ?></h3>
            </div>
            <div class="personalinfo">
                <div class="personalinfo_data">
                     <div class="data">
                        <h4>Trình Độ</h4>
                        <p><?php echo $row['TrinhDo']; ?></p>
                     </div>
                     <div class="data">
                       <h4>Kinh Nghiệm</h4>
                        <p><?php echo $row['KinhNghiem']; ?></p>
                      </div>
                      <div class="data">
                        <h4>Hình Thức</h4>
                        <p><?php echo $row['HinhThuc']; ?></p>
                      </div>
                      <div class="data">
                        <h4>Ngoại Ngữ</h4>
                        <p><?php echo $row['NgoaiNgu']; ?></p>
                      </div>
                      <div class="data">
                        <h4>Mức Lương</h4>
                        <p><?php echo $row['MucLuong']; ?></p>
                      </div>
                </div>
            </div>

            <div class="personalinfo">
                <h3>THÔNG TIN ỨNG VIÊN </h3>
                <div class="personalinfo_data">
                      <div class="data">
                        <h4>Giới Tính</h4>
                        <p><?php echo $row['GioiTinh']; ?></p>
                      </div>

                      <div class="data">
                        <h4>SĐT</h4>
                        <p><?php echo $row['SDT']; ?></p>
                      </div>

                      <div class="data">
                        <h4>Ngày Sinh</h4>
                        <p><?php echo $row['NgaySinh']; ?></p>
                      </div>

                      <div class="data">
                        <h4>Địa Chỉ</h4>
                        <p><?php echo $row['DiaChi']; ?></p>
                      </div>
                      
                      <div class="data">
                        <h4>Email</h4>
                        <p><?php echo $row['Email']; ?></p>
                      </div>

                </div>
            </div>
            <form action="" method="POST" style="display: flex; justify-content: center;">
                <input type="hidden" name="idTT" value = "<?php echo $row['id_TrangThai']; ?>">
                <?php if($row['TrangThai'] != 'Đã Chấp Thuận'):?>    
                <button type="submit" class="infoeditbtn" style="width: 15%; margin: 0px 20px; background: green;" name="accept">Tiếp Nhận</button>
                <?php endif; ?>
                <button type="submit" class="infoeditbtn"style="width: 15%; margin: 0px 20px; background: red;" name="deny">Từ Chối</button>
            </form>
            
        </div>
    </div>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>