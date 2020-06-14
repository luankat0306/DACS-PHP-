<?php
session_start();

if($_SESSION['username']!='admin') {
        header('Location: loginAdmin.php');
}
include('./includes/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <link rel="stylesheet" type="text/css" href="./css/admin.php">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/5903e79095.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "admin-wrapper">
        <?php include('./includes/left-sidebar.php'); ?>

        <?php
            if (isset( $_SESSION['message'])):
        ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>" >
                <?php
                    echo $_SESSION['message'];
                    
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>
            
            <?php
                if(isset ($_GET['tab']))
                    $tab = $_GET['tab'];
                if($tab != '') {
                    switch($tab) {

                        case 'thong-ke':
                            include('./thong-ke.php');
                            break;
    
                        case 'thong-tin':
                            include('./thong-tin.php');
                            break;
    
                        case 'ung-vien':
                            include('./ung-vien.php');
                            break;
    
                        case 'doanh-nghiep':
                            include('./doanh-nghiep.php');
                            break;
    
                        case 'nganh-nghe':
                            include('./nganh-nghe.php');
                            break;
    
                        case 'tinh-thanh':
                            include('./tinh-thanh.php');
                            break;
    
                        case 'bai-viet':
                            include('./bai-viet.php');
                            break;
                        
                        case 'tao-bai-viet':
                            include('./tao-bai-viet.php');
                            break;
    
                        case 'ho-tro':
                            include('./ho-tro.php');
                            break;
                    }

                }
                
            ?>
           
        </div>
            
    </div>
   <script src = "./js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>