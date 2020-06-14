<?php session_start();?>
<?php include('config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Người Tìm Việc</title>
<link rel="shortcut icon" href="../IMG/Logo.png"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../CSS/default.php">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"></head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="">
<!-- page default -->
<div class="headerimg">
  <img class="img-fluid" src="../IMG/Logo.png" alt="Logo" width="140" height="80">
  <h1>TRANG NGƯỜI TÌM VIỆC</h1>
</div>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
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
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a id="nav-link" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      <i class="fas fa-search"></i> Tìm Kiếm Công Việc
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="CorpSearch.php">Tìm kiếm theo tên công ty</a>
        <a class="dropdown-item" href="OccSearch.php">Tìm kiếm theo ngành nghề</a>
        <a class="dropdown-item" href="PlaceSearch.php">Tìm kiếm theo tỉnh thành</a>
        <a class="dropdown-item" href="TitleSearch.php">Tìm kiếm theo tiêu đề</a>
        <a class="dropdown-item" href="SalSearch.php">Tìm kiếm theo mức lương</a>
      </div>
    </li>
    <li class="nav-item">
    <?php
     if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="HSDN.php"><i class="fas fa-file-import"></i> Hồ Sơ Đã Nộp</a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="HSDN.php"><i class="fas fa-file-import"></i> Hồ Sơ Đã Nộp</a>
    <?php endif; ?>
    </li>

    <li class="nav-item">
    <?php
    if(isset($_SESSION['id'])):
    ?>
      <a id="nav-link" class="nav-link" href="CVDL.php"><i class="fas fa-archive"></i> Công Việc Đã Lưu</a>
    <?php else: ?>
      <a id="nav-link" class="nav-link disabled" href="CVDL.php"><i class="fas fa-archive"></i> Công Việc Đã Lưu</a>
    <?php endif; ?>
    </li>

</nav>
<br>
</body>
</html>
