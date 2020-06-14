<?php include 'default.php';?>
<?php 
    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM trangthaihoso WHERE id_TrangThai = $id";
        $query = $connect->query($sql);
        $alert = "Xóa Thành Công";
    }
?>
<link rel="stylesheet" type="text/css" href="../CSS/CVDL.php">
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">
    <h2 class="h2">HỒ SƠ ĐÃ NỘP</h2>
    <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php endif; ?>
    <hr>
<?php
/*************************** SHOW INFO **************************** */
    if (isset($_SESSION['idHS'])):
        $idUser = $_SESSION['id'];
        $idHS = $_SESSION['idHS'];
        $sql =("SELECT * FROM trangthaihoso INNER JOIN dangtincongviec ON trangthaihoso.id_DangTinCongViec = dangtincongviec.id_DangTinCongViec  INNER JOIN congty ON dangtincongviec.id_CongTy = congty.id_CongTy WHERE id_HoSo = $idHS ");
        $query = $connect->query($sql);
        if($query->num_rows > 0): 
?>

      <?php  while ($row =$query->fetch_array()): 
                    $idCV = $row['id_DangTinCongViec'];
                    $idHSDN=$row['id_TrangThai'];
        ?>
        
        <div class="wrapper" style="margin: auto; position: static;">
                <div class="left" style="background: linear-gradient(45deg, #48c6ef, #6f86d6);">
                    <div class = "imgAva"><img width="100%"  src="../../DoangNghiep/IMG/Avatar/<?php echo $row['Image']; ?>"></div>
                </div>

                <div class="right" style="padding: 5px 15px;">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true"><a style="text-decoration: none; color: #eb0000; float: right;" href="?delete=<?php echo $idHSDN; ?>">&times;</a></span>
                        </button>
                        <div class="personalinfo">
                            <?php if($row['TrangThai'] == 'Đã Chấp Thuận'):?>
                            <b style="color: limegreen; float: right;">Đã tiếp nhận <i class="fas fa-check"></i></b>
                            <?php elseif($row['TrangThai'] == 'Bị Từ Chối'): ?>
                            <b style="color: orangered; float: right;">Bị Từ Chối <i class="far fa-times-circle"></i></b>
                            <?php endif; ?>
                            <a style="font-weight: 700; font-size:19px; color: black;" class="item-title" href="ShowInfo.php?cong-viec=<?php echo $row['id_DangTinCongViec'] ?>"><?php echo $row['TieuDe']; ?></a> <br>
                        </div>
                        <div class="personalinfo">
                        <a style="font-weight: 500; font-size:17px; color: black;" class="item-name"  href="ShowInfo.php?cong-ty=<?php echo $row['id_CongTy']; ?>" ><?php echo $row['TenCongTy']; ?></a> <br>
                        </div>
                        <div class="personalinfo">
                            <div class="personalinfo_data">
                                 <div class="data">
                                    <h4>Tỉnh Thành:</h4>
                                    <p><?php echo $row['TinhThanh']; ?></p>
                                 </div>
                                 <div class="data">
                                   <h4>Mức Lương:</h4>
                                    <p><?php echo $row['MucLuong']; ?></p>
                                  </div>
                                  <div class="data">
                                    <h4>Hạn Nộp</h4>
                                    <p><?php echo  date("d-m-Y", strtotime($row['HanNop']) ); ?></p>
                                  </div>
                                  
                            </div>
                        </div>
                
                </div>
        </div>
        <hr>
                <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>