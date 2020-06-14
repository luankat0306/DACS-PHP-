<?php
    if (isset( $_SESSION['id'])) {
        $id =  $_SESSION['id'];

        $sql =("SELECT * FROM admin WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $image = $row['Image'];
        }
    }
?>
<div class = "left-sidebar" >

    <div class = "admin">
        <div class = "img-Admin">
                <a href="?tab=thong-tin"><img class="avatar" src="image/ <?php echo $image; ?>" alt="avatar"></a> <br> 
                <a href="logout.php">Logout</a>
        </div>
               
        <img class = "logo" src="image/logo.png" alt="logo">
    </div>

    <ul>
        <?php $activePage = $_GET['tab'];?>
        
        <li class ="<?= ($activePage == 'thong-ke') ? 'active':''; ?>"><a href="?tab=thong-ke"><i class="fas fa-chart-line"></i>Thống kê</a></li>
        <li class ="<?= ($activePage == 'thong-tin') ? 'active':''; ?>"><a href="?tab=thong-tin"><i class="fas fa-pen-nib"></i>Thông tin</a></li>
        <li class ="<?= ($activePage == 'ung-vien') ? 'active':''; ?>"><a href="?tab=ung-vien"><i class="fas fa-user-tie"></i>Thông tin ứng viên</a></li>
        <li class ="<?= ($activePage == 'doanh-nghiep') ? 'active':''; ?>"><a href="?tab=doanh-nghiep"><i class="fas fa-landmark"></i>Thông tin doanh nghiệp</a></li>
        <li class ="<?= ($activePage == 'nganh-nghe') ? 'active':''; ?>"><a href="?tab=nganh-nghe"><i class="fas fa-briefcase"></i> Ngành nghề</a></li>
<!--  <li class ="<?= ($activePage == 'tinh-thanh') ? 'active':''; ?>"><a href="?tab=tinh-thanh"><i class="fas fa-city"></i>Tỉnh/Thành phố</a></li>  -->
<!--  <li class ="<?= ($activePage == 'bai-viet') ? 'active':''; ?>"><a href="?tab=bai-viet"><i class="fas fa-newspaper"></i>Bài viết (Beta)</a></li> -->
        <li class ="<?= ($activePage == 'ho-tro') ? 'active':''; ?>"><a href="?tab=ho-tro"><i class="fas fa-headset"></i>Hỗ trợ trực tuyến</a></li>
    </ul>
</div>

<div class = "content">

    

