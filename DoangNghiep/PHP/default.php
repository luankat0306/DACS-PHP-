<?php session_start();?>
<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Doanh Nghiệp</title>
<link rel="shortcut icon" href="../IMG/Logo.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/default.php">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="">
<!-- page default -->
<div class="headerimg" >
  <img class="img-fluid" src="../IMG/Logo.png" alt="Logo" width="140" height="80" style="border-radius: 12px; box-shadow: 2px 3px 6px rgba(0, 0, 0, 0.5);">
  <h1 style="font-size: 30px;">CỔNG THÔNG TIN DOANH NGHIỆP</h1>
</div>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark" style="
    background-color: #0b3b24!important;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a id="nav-link" class="nav-link" href="../../TrangChu.php"><i class="fas fa-home"></i> Trang Chủ</a>
    </li>

    <li class="nav-item">  
    <?php
    if(isset($_SESSION['id'])):
    ?>
       <a id="nav-link" class="nav-link disabled" href="TaiKhoan.php"><i class="fas fa-user"></i> Tài Khoản</a>
    <?php else: ?>
      <a id="nav-link" class="nav-link" href="TaiKhoan.php"><i class="fas fa-user"></i> Tài Khoản</a>
    <?php endif; ?>
    </li>
    
    <li class="nav-item">
    <?php
    if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="QLTK.php"><i class="fas fa-user-cog"></i> Quản Lý Tài Khoản</a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="QLTK.php"><i class="fas fa-user-cog"></i> Quản Lý Tài Khoản</a>
    <?php endif; ?>
    </li>

    <li class="nav-item">
    <?php
    if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="Post.php"><i class="fas fa-address-card"></i> Đăng Tin Việc Làm </a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="Post.php"><i class="fas fa-address-card"></i> Đăng Tin Việc Làm </a>
    <?php endif; ?>
    </li>

    <li class="nav-item">
    <?php
    if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="KDHS.php"><i class="fas fa-user-check"></i> Kiểm Duyệt Hồ Sơ </a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="KDHS.php"><i class="fas fa-user-check"></i> Kiểm Duyệt Hồ Sơ </a>
    <?php endif; ?>
    </li>

    <li class="nav-item">
    <?php
    if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="AcceptedCV.php"><i class="fas fa-user-check"></i> Hồ Sơ Đã Nhận </a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="AcceptedCV.php"><i class="fas fa-user-check"></i> Hồ Sơ Đã Nhận </a>
    <?php endif; ?>
    </li>

  </ul> 
</nav>
<br>
</body>
</html>