<?php
    $tenCT = '';
    $sdt = '';
    $email = '';
    $tenLH = '';
    $website = '';
    $address = '';
    $pass = '';

    $update = false;
    $id = 0;

    /* Thêm  */
    if (isset($_POST['add'])) {
        $tenCT = $_POST['TenCTy'];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $tenLH = $_POST["TenLH"];
        $website = ($_POST["website"]);
        $address = $_POST["address"];
        $pass = $_POST["pass"];

        
        $sql = "INSERT INTO congty (TenCongTy, TenNguoiLienHe, SDT, Email, DiaChi, Website, Password) VALUES ('$tenCT', '$tenLH', '$sdt', '$email', '$address', '$website', '$pass')";
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Thêm Thành Công";
        $_SESSION['msg_type'] = "primary";

        
        header('Location: index.php?tab=doanh-nghiep');
    }

    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM congty WHERE id = $id";
        $query = $conn->query($sql);

         if($query!=0){
            $_SESSION['message'] = "Xóa Thành Công";
            $_SESSION['msg_type'] = "danger";
        } else{
            $_SESSION['message'] = "Không thể xóa ứng viên đã nộp hồ sơ";
            $_SESSION['msg_type'] = "danger";
        }

        header('Location: index.php?tab=doanh-nghiep');
    }
 
    /* Sửa */
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql =("SELECT * FROM congty WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $tenCT = $row['TenCongTy'];
            $sdt = $row["SDT"];
            $email = $row["Email"];
            $tenLH = $row["TenNguoiLienHe"];
            $website = $row["Website"];
            $address = $row["DiaChi"];
            $pass = $row["Password"];
        }
    }
    

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $tenCT = $_POST['TenCTy'];
        $sdt = $_POST["sdt"];
        $email = $_POST["email"];
        $tenLH = $_POST["TenLH"];
        $website = $_POST["website"];
        $address = $_POST["address"];
        $pass = md5($_POST["pass"]);

        $sql = ("UPDATE congty SET TenCongTy = '$tenCT', SDT = '$sdt', Email = '$email', TenNguoiLienHe = '$tenLH', Website = '$website', DiaChi = '$address', Password = '$pass' WHERE id =$id");
        $query = $conn -> query($sql);

        if($query!=0){
            $_SESSION['message'] = "Xóa Thành Công";
            $_SESSION['msg_type'] = "success";
        } else{
            $_SESSION['message'] = "Không thể xóa ứng viên đã nộp hồ sơ";
            $_SESSION['msg_type'] = "success";
        }

        header('Location: index.php?tab=doanh-nghiep');
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
                            <h1 class = "form-label" >Chỉnh sửa doanh nghiệp:</h1>
                        
                        <?php else: ?>
                        
                            <h1 class = "form-label" >Thêm doanh nghiệp:</h1>
                        
                        <?php endif ; ?>
                </div>

                <form action = "" method = "POST" >
                <input type="hidden" name="id" value = "<?php echo $id;?>">
                    <div class = "form-add">

                            <div class = "label-item">
                                <label>Tên Công Ty:</label><br>
                                <input type = "text" name = "TenCTy" value = "<?php echo $tenCT; ?>" id = "TenCTy">
                            </div> 

                            <div class = "label-item">
                                <label>SĐT:</label><br>
                                <input type = "tel" name = "sdt" value = "<?php echo $sdt; ?>" id = "phone">
                            </div>  

                            <div class = "label-item">
                                <label>Email:</label><br>
                                <input type="export default class className extends baseclassName {
                                
                                };" placeholder="abc@gmail.com" name="email" value = "<?php echo $email; ?>" id="email">
                            </div>
                            
                            <div class = "label-item">
                                <label>Tên Người LH:</label><br>
                                <input type="text" name="TenLH" value = "<?php echo $tenLH; ?>" id="TenLH" >
                            </div>
                            
                            <div class = "label-item">
                                <label>Website:</label><br>
                                <input type="text" id="website" name="website" value = "<?php echo $website; ?>" >
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
                <table id = "table">
                    <thead>
                            <tr >
                                <th>ID</th>
                                <th>Tên Công Ty</th>
                                <th>Tên Người Liên Hệ</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Địa Chỉ</th>
                                <th>Website</th>    
                                <th colspan="2">Chỉnh Sửa</th>                           
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                           $sql = "SELECT * FROM congty";
                           $query = $conn -> query($sql);         
                            while($row = $query -> fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['id_CongTy'];?></td>
                                <td><?php echo $row['TenCongTy'];?></td>
                                <td><?php echo $row['TenNguoiLienHe'];?></td>
                                <td><?php echo $row['SDT'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['DiaChi'];?></td>
                                <td><?php echo $row['Website'];?></td>
                                
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