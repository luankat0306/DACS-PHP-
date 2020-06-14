<?php
	    /* Shơhơ */
		if ( $_GET['tab'] == 'thong-ke') {
	
			$sql_ungvien =("SELECT COUNT(id) AS ungvien FROM nguoitimviec");
            $ungvien_query = $conn->query($sql_ungvien) or die($conn -> error());
            
            $sql_doanhnghiep =("SELECT COUNT(id_CongTy) AS doanhnghiep FROM congty");
            $doangnghiep_query = $conn->query($sql_doanhnghiep) or die($conn -> error());
            
            $sql_vieclam =("SELECT COUNT(id_DangTinCongViec) AS vieclam FROM dangtincongviec");
            $vieclam_query = $conn->query($sql_vieclam) or die($conn -> error());

            $sql_ungtuyen =("SELECT COUNT(id_TrangThai) AS ungtuyen FROM trangthaihoso WHERE TrangThai = 'Đã Chấp Thuận' ");
            $ungtuyen_query = $conn->query($sql_ungtuyen) or die($conn -> error());

            $row =[ $ungvien_query -> fetch_assoc(),  $doangnghiep_query -> fetch_assoc(), $vieclam_query -> fetch_assoc(), $ungtuyen_query -> fetch_assoc() ] ;

		}
		

?>

<div class = "thongke">

    <div class = "grid-item" id="dashboard-ung-vien">
        <i class="fas fa-user"></i>
        <label>Ứng viên</label>
        <p><?php echo $row[0]['ungvien'];?></p>
    </div>
    
    <div class = "grid-item"  id="dashboard-doanh-nghiep">
        <i class="fas fa-landmark"></i>
        <label>Doanh nghiệp</label>
        <p><?php echo $row[1]['doanhnghiep'];?></p>
    </div>
    
    <div class = "grid-item"  id="dashboard-viec-lam">
        <i class="fas fa-briefcase"></i>
        <label>Việc làm</label>
        <p><?php echo $row[2]['vieclam'];?></p>
    </div>
    
    <div class = "grid-item"  id="dashboard-ung-tuyen">
        <i class="fas fa-user-check"></i>
        <label>Ứng tuyển</label>
        <p><?php echo $row[3]['ungtuyen'];?></p>
    </div>

</div>    