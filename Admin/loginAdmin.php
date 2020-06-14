<?php
session_start();

require_once("includes/connection.php");
    
if (isset($_POST["submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $show_alert = '<script>$("#formSignin .alert").removeClass("hidden");</script>';
    $hide_alert = '<script>$("#formSignin .alert").addClass("hidden");</script>';
    $success = '<script>$("#formSignin .alert").attr("class", "alert alert-success");</script>';
    
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo "username hoặc password bạn không được để trống!";
    }else{
        $sql = "select * from admin where Username = '$username' and Password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            $_SESSION['message'] = "Tài khoản hoặc mật khẩu không đúng";
            $_SESSION['msg_type'] = "danger";
        }else{
            // Lấy ra thông tin người dùng và lưu vào session
            while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["id"] = $data["id"];
				$_SESSION['username'] = $data["Username"];
				$_SESSION["email"] = $data["Email"];
	    	}
                header('Location: index.php?tab=thong-ke');
            }
            
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="./css/loginAdmin.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div>
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
            <div class = "formLogin">
                <form action="loginAdmin.php" id="formSignin" method="POST">
                    <h2>Admin Login</h2>

                    <div class="input-group">
                        <input type="text" id="username" name="username" required>
                        <label for="username">Username</label>
                    </div>

                    <div class="input-group">
                        <input type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <button type="submit"  name = "submit">Login</button>
                </form>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>