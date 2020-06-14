<?php include 'default.php';?>
<?php 
    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM luucongviec WHERE id_LuuCongViec = $id";
        $query = $connect->query($sql);
        $alert = "Xóa Thành Công";
    }
?>
<link rel="stylesheet" type="text/css" href="../CSS/CVDL.php">

    <h2 class="h2">CÔNG VIỆC ĐÃ LƯU</h2>
    <?php if(isset($alert)):?>        
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $alert; ?>
    </div>
    <?php elseif(isset($_SESSION['alert'])): ?>      
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" style="width: auto; margin: 0;">&times;</button>
        <strong><i class="fas fa-check"></i></strong> <?php echo $_SESSION['alert']; ?>
    </div>
    <?php endif; ?>
    <hr>
<?php
/*************************** SHOW INFO **************************** */
    if (isset($_SESSION['id'])):
        $idUser = $_SESSION['id'];

        $sql =("SELECT * FROM luucongviec INNER JOIN dangtincongviec ON luucongviec.id_DangTinCongViec = dangtincongviec.id_DangTinCongViec  INNER JOIN congty ON congty.id_CongTy = dangtincongviec.id_CongTy WHERE id_NguoiTimViec = $idUser ");
        $query = $connect->query($sql) or die($connect -> error());
        if($query->num_rows > 0): 
?>
<div class="box">
      <?php  while ($row =$query->fetch_array()): 
                    $idCV = $row['id_DangTinCongViec'];
                    $idSave = $row['id_LuuCongViec'];
                    
        ?>
        
            <div class="boxcontent">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true"><a style="text-decoration: none; color: #eb0000;" href="?delete=<?php echo $idSave; ?>">&times;</a></span>
                </button>
                <a style="font-weight: 700; font-size:19px; color: black;" class="item-title" href="ShowInfo.php?cong-viec=<?php echo $row['id_DangTinCongViec'] ?>"><?php echo $row['TieuDe']; ?></a> <br>
                <a style="font-weight: 500; font-size:17px; color: black;" class="item-name"  href="ShowInfo.php?cong-ty=<?php echo $row['id_CongTy']; ?>" ><?php echo $row['TenCongTy']; ?></a> <br>

                <p><?php echo $row['TinhThanh']; ?></p>

                <p>Mức lương: <?php echo $row['MucLuong']; ?></p>
                <p>Hạn nộp: <?php echo  date("d-m-Y", strtotime($row['HanNop']) ); ?></p>

            </div>
            <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endif; ?>