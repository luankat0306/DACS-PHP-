<?php
    $tenTinhThanh = '';

    $update = false;
    $id = 0;

    /* Thêm  */
    if (isset($_POST['add'])) {
        $tenTinhThanh = $_POST['tenTinhThanh'];
        
        $sql = "INSERT INTO tinhthanh (TinhThanh) VALUES ('$tenTinhThanh')";
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Thêm Thành Công";
        $_SESSION['msg_type'] = "primary";

        
        header('Location: index.php?tab=tinh-thanh');
    }

    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM tinhthanh WHERE id = $id";
        $query = $conn->query($sql);

        $_SESSION['message'] = "Xóa Thành Công";
        $_SESSION['msg_type'] = "danger";

        header('Location: index.php?tab=tinh-thanh');
    }
 
    /* Sửa */
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql =("SELECT * FROM tinhthanh WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $tenTinhThanh = $row['TinhThanh'];
        }
    }
    

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $tenTinhThanh = $_POST['tenTinhThanh'];

        $sql = ("UPDATE tinhthanh SET TinhThanh = '$tenTinhThanh' WHERE id =$id");
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Sửa Thành Công";
        $_SESSION['msg_type'] = "success";

        header('Location: index.php?tab=tinh-thanh');
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
                    <h1 class = "form-label" >Thêm Tỉnh Thành:</h1>
                </div>

                <form method = "POST" >
                <input type="hidden" name="id" value = "<?php echo $id;?>">
                    <div class = "form-add">
                            <div class = "label-item">
                                <label>Tên Tỉnh Thành :</label><br>
                                <input type="text" name="tenTinhThanh" value = "<?php echo $tenTinhThanh; ?>" id="tinh-thanh">
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
                                <th>Tỉnh Thành</th>  
                                <th colspan="2">Chỉnh Sửa</th>                     
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                           $sql = "SELECT * FROM tinhthanh";
                           $query = $conn -> query($sql);         
                            while($row = $query -> fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['TinhThanh'];?></td>
                                
                                <td>
                                    <a class="edit" href="?tab=<?php echo $tab; ?>&edit=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i></a>
                                </>
                                
                                <td>
                                    <a class="delete" href="?tab=<?php echo $tab; ?>&delete=<?php echo $row['id']; ?>"><i class="fas fa-minus"></i></a>   
                                </td>
                            </tr>
                                <?php endwhile; ?>
                    </tbody>
                </table>
            </div>