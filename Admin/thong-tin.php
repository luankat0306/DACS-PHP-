<?php
    $hoTen = '';
    $sdt = '';
    $email = '';
    $username = '';
	$pass = '';

    $update = false;
    $id = 0;
	    /* Sửa */
		if (isset( $_SESSION['id'])) {
			$id =  $_SESSION['id'];
			$update = true;
	
			$sql =("SELECT * FROM admin WHERE id =$id");
			$query = $conn->query($sql) or die($conn -> error());
	
			while ($row =$query->fetch_assoc()) {
				$passCheck = $row['Password'];
				$hoTen = $row['HoTen'];
				$sdt = $row['SDT'];
				$email = $row['Email'];
				$username = $row['Username'];
				$image = $row['Image'];
			}
			
			if (isset($_POST['update'])) {
				$id = $_POST['id'];
				$hoTen = $_POST['hoTen'];
				$sdt = $_POST["sdt"];
				$email = $_POST["email"];
				$username = $_POST["username"];
				$pass = md5($_POST["pass"]);
				if (isset($_POST['profileImg'])){
					/* cái profileImg là name của inputinput */
					$image = $_FILES['profileImg']['name'];
	
					$target = 'image/ ' .$image;
	
					move_uploaded_file($_FILES['profileImg']['tmp_name'], $target); 
				}
				
				if($pass != $passCheck){
					$_SESSION['message'] = "Mật Khẩu Không Đúng Mời Nhập Lại!";
					$_SESSION['msg_type'] = "danger";
				} else {
					$sql = ("UPDATE admin SET HoTen = '$hoTen', SDT = '$sdt', Email = '$email', Username = '$username', Image = '$image' WHERE id =$id");
					$query = $conn -> query($sql);
				
					$_SESSION['message'] = "Sửa Thành Công";
					$_SESSION['msg_type'] = "success";
				}

			
				header('Location: index.php?tab=thong-tin');
			}
		}
?>
<div class = "add">

<div class="add-label">
	<h1 class = "form-label" >Thông tin:</h1>
</div>

<form method = "POST" enctype="multipart/form-data">
<input type="hidden" name="id" value = "<?php echo $id;?>">
<!-- Avatar -->
	<div class = "form-group text-center">
			<img src="image/ <?php echo $image; ?>" onclick = "triggerClick()" id = "profileDisplay">
			<input type="file" name="profileImg" onchange="displayImg(this)" id = "profileImg"  style = "display: none;">
	</div>
	<div class = "form-add">

			<div class = "label-item">
				<label>Họ Tên:</label><br>
				<input type = "text" name = "hoTen" value = "<?php echo $hoTen; ?>">
			</div> 

			<div class = "label-item">
				<label>SĐT:</label><br>
				<input type = "tel" name = "sdt"  pattern="[0-9]{10}" value = "<?php echo $sdt; ?>">
			</div>  

			<div class = "label-item">
				<label>Email:</label><br>
				<input type="export default class className extends baseclassName {
				
				};" placeholder="abc@gmail.com" name="email" value = "<?php echo $email; ?>">
			</div>
			
			<div class = "label-item">
				<label>Username:</label><br>
				<input type="text" name="username" value = "<?php echo $username; ?>"  >
			</div>
			
			<div class = "label-item">
				<label>Password:</label><br>
				<input type="password" placeholder="Nhập mật khẩu xác nhận " name="pass" reqired>
			</div>

			

	</div>
   

	<div class="button">
			<input class="submit-btn" type="submit" name = "update" value="Lưu"></input>
	</div>

</form>

</div>