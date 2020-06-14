<?php
    $hoTen = '';
    $sdt = '';
    $email = '';
    $date = '';
    $gender = '';
    $address = '';
    $pass = '';

    $update = false;
    $id = 0;

/* Thêm  */
    if (isset($_POST['add'])) {
        $hoTen = $_POST['hoTen'];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $gender = strtolower($_POST["gender"]);
        $address = $_POST["address"];
        $pass = md5($_POST["pass"]);

        
        $sql = "INSERT INTO nguoitimviec (HoTen, SDT, Email, NgaySinh, GioiTinh, DiaChi, Password) VALUES ('$hoTen', '$sdt', '$email', '$date', '$gender', '$address', '$pass')";
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Thêm Thành Công";
        $_SESSION['msg_type'] = "primary";

        
        header('Location: index.php?tab=ung-vien');
    }

/* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM nguoitimviec WHERE id = $id";
        $query = $conn->query($sql);
        if($query!=0){
            $_SESSION['message'] = "Xóa Thành Công";
            $_SESSION['msg_type'] = "danger";
        } else{
            $_SESSION['message'] = "Không thể xóa ứng viên đã nộp hồ sơ";
            $_SESSION['msg_type'] = "danger";
        }
        header('Location: index.php?tab=ung-vien');
    }
 
    /* Sửa */
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql =("SELECT * FROM nguoitimviec WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $pass = $row['Password'];
            $hoTen = $row['HoTen'];
            $sdt = $row['SDT'];
            $email = $row['Email'];
            $date = $row['NgaySinh'];
            $gender = $row['GioiTinh'];
            $address = $row['DiaChi'];
        }
    }
    

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $hoTen = $_POST['hoTen'];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $date = $_POST["date"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $pass = md5($_POST["pass"]);

        $sql = ("UPDATE nguoitimviec SET HoTen = '$hoTen', SDT = '$sdt', Email = '$email', NgaySinh = '$date', GioiTinh = '$gender', DiaChi = '$address', Password = '$pass' WHERE id =$id");
        $query = $conn -> query($sql);

        if($query!=0){
            $_SESSION['message'] = "Xóa Thành Công";
            $_SESSION['msg_type'] = "success";
        } else{
            $_SESSION['message'] = "Không thể xóa ứng viên đã nộp hồ sơ";
            $_SESSION['msg_type'] = "success";
        }

        header('Location: index.php?tab=ung-vien');
    }

   

?>
            <div class = "search">
                <form class="form-search" action="" method = "POST" >
                    <input class = "search-txt" id = "key" onkeyup = "search()" type="text" placeholder="Tìm Kiếm..."  required>
                    <button class = "search-btn"  type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <div class = "add">

                <div class="add-label">
                <?php
                if ($update == true):
                ?>
                    <h1 class = "form-label" >Chỉnh sửa ứng viên:</h1>

                <?php else: ?>

                    <h1 class = "form-label" >Thêm ứng viên:</h1>
                
                <?php endif ; ?>
                </div>
                
                <form action=""  method = "POST">
                    <input type="hidden" name="id" value = "<?php echo $id;?>">
                    <div class = "form-add">
                            <div class = "label-item">
                                <label>Họ Tên:</label><br>
                                <input type="text" name="hoTen" value = "<?php echo $hoTen; ?>" id="hoTen">
                            </div>

                            <div class = "label-item">
                                <label>SĐT:</label><br>
                                <input type="tel" name="sdt" value = "<?php echo $sdt; ?>" id="phone">
                            </div> 

                            <div class = "label-item">
                                <label>Email:</label><br>
                                <input type="export default class className extends baseclassName {
                                
                                };" placeholder="abc@gmail.com" value = "<?php echo $email; ?>" name="email" id="email">
                            </div>
                            
                            <div class = "label-item">
                                <label>Ngày Sinh:</label><br>
                                <input type="date" name="date" value = "<?php echo $date; ?>" id="date" >
                            </div>
                            
                            <div class = "label-item">
                                <label class="gender">Giới tính:</label><br>
                                    <label>Nam:</label>
                                        <input type="radio" name="gender" value="Nam">
                                    <label>Nữ :</label>
                                        <input type="radio" name="gender" value="Nữ">
                            </div>
                            
                            <div class = "label-item">
                                <label>Địa Chỉ</label><br>
                                <input type="text" name="address" value = "<?php echo $address; ?>" id="address">
                            </div>
                            
                            <div class = "label-item">
                                <label>Password:</label><br>
                                <input type="password" name="pass" value = "<?php echo $pass; ?>" id="pass">
                            </div>
                    
                    </div>
                    
                    <div class="button">

                    <?php 
                    if ($update == true):
                    ?>
                        <input class="submit-btn" type="submit" name = "update" value="Lưu"></input>

                    <?php else: ?>

                        <input class="submit-btn" type="submit" name = "add" value="Thêm"></input>

                    <?php endif; ?>
                    </div>

                </form>

            </div>

            <div class = "show-data">

                <table id="table">
                    <thead>                      
                            <tr>
                                    <th>ID</th>
                                    <th>Họ Tên</th>
                                    <th>SĐT</th>
                                    <th>Email</th>
                                    <th>Ngày Sinh</th>
                                    <th>Giới tính</th>
                                    <th>Địa Chỉ</th>  
                                    <th colspan="2">Chỉnh Sửa</th>                       
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                           $sql = "SELECT * FROM nguoitimviec ";
                           $query = $conn -> query($sql);         
                            while($row = $query -> fetch_assoc()):?>

                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['HoTen'];?></td>
                                <td><?php echo $row['SDT'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['NgaySinh'];?></td>
                                <td><?php echo $row['GioiTinh'];?></td>
                                <td><?php echo $row['DiaChi'];?></td>
                                
                                <td>
                                    <a class="edit" href="?tab=<?php echo $tab; ?>&edit=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                                </td>
                                
                                <td>
                                    <a class="delete" href="?tab=<?php echo $tab; ?>&delete=<?php echo $row['id']; ?>"><i class="fas fa-minus"></i></a>   
                                </td>
                            </tr>
                                <?php endwhile; ?>
                    </tbody>
                </table>

            </div>