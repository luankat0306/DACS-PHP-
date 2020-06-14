<?php
    $tenHoTro = '';
    $sdt = '';

    $update = false;
    $id = 0;

    /* Thêm  */
    if (isset($_POST['add'])) {
        $tenHoTro = $_POST['tenHoTro'];
        $sdt = $_POST["sdt"];


        
        $sql = "INSERT INTO hotro (TenHoTro, SDT) VALUES ('$tenHoTro', '$sdt')";
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Thêm Thành Công";
        $_SESSION['msg_type'] = "primary";

        
        header('Location: index.php?tab=ho-tro');
    }

    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM hotro WHERE id = $id";
        $query = $conn->query($sql);

        $_SESSION['message'] = "Xóa Thành Công";
        $_SESSION['msg_type'] = "danger";

        header('Location: index.php?tab=ho-tro');
    }
 
    /* Sửa */
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql =("SELECT * FROM hotro WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $tenHoTro = $row['TenHoTro'];
            $sdt = $row["SDT"];
        }
    }
    

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $tenHoTro = $_POST['tenHoTro'];
        $sdt = $_POST["sdt"];

        $sql = ("UPDATE hotro SET TenHoTro = '$tenHoTro', SDT = '$sdt' WHERE id =$id");
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Sửa Thành Công";
        $_SESSION['msg_type'] = "success";

        header('Location: index.php?tab=ho-tro');
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
                            <h1 class = "form-label" >Chỉnh sửa người hỗ trợ:</h1>
                        
                        <?php else: ?>
                        
                            <h1 class = "form-label" >Thêm hỗ trợ:</h1>
                        
                        <?php endif ; ?>
            </div>

                <form method = "POST">
                <input type="hidden" name="id" value = "<?php echo $id;?>">
                    <div class = "form-add">
                            <div class = "label-item">
                                <label>Tên Người Hỗ Trợ:</label><br>
                                <input type="text" name = "tenHoTro" value = "<?php echo $tenHoTro; ?>" id = "ten-ho-tro">
                            </div>

                            <div class = "label-item">
                                <label>SĐT Hỗ Trợ:</label><br>
                                <input type="text" name="sdt" value = "<?php echo $sdt; ?>" id="phone-ho-tro">
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
                                <th> ID</th>
                                <th>Tên Người Hỗ Trợ</th>
                                <th>SĐT</th>     
                                <th colspan="2">Chỉnh Sửa</th>                  
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                           $sql = "SELECT * FROM hotro";
                           $query = $conn -> query($sql);         
                            while($row = $query -> fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['TenHoTro'];?></td>
                                <td><?php echo $row['SDT'];?></td>
                                
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