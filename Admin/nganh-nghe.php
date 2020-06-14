<?php
    $tenNganhNghe = '';

    $update = false;
    $id = 0;

    /* Thêm  */
    if (isset($_POST['add'])) {
        $tenNganhNghe = $_POST['tenNganhNghe'];
        
        $sql = "INSERT INTO nganhnghe (NganhNghe) VALUES ('$tenNganhNghe')";
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Thêm Thành Công";
        $_SESSION['msg_type'] = "primary";

        
        header('Location: index.php?tab=nganh-nghe');
    }

    /* Xóa  */
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql = "DELETE FROM nganhnghe WHERE id = $id";
        $query = $conn->query($sql);

        $_SESSION['message'] = "Xóa Thành Công";
        $_SESSION['msg_type'] = "danger";

        header('Location: index.php?tab=nganh-nghe');
    }
 
    /* Sửa */
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;

        $sql =("SELECT * FROM nganhnghe WHERE id =$id");
        $query = $conn->query($sql) or die($conn -> error());

        while ($row =$query->fetch_array()) {
            $tenNganhNghe = $row['NganhNghe'];
        }
    }
    

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $tenNganhNghe = $_POST['tenNganhNghe'];

        $sql = ("UPDATE nganhnghe SET NganhNghe = '$tenNganhNghe' WHERE id =$id");
        $query = $conn -> query($sql);

        $_SESSION['message'] = "Sửa Thành Công";
        $_SESSION['msg_type'] = "success";

        header('Location: index.php?tab=nganh-nghe');
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
                            <h1 class = "form-label" >Chỉnh sửa ngành nghề:</h1>
                        
                        <?php else: ?>
                        
                            <h1 class = "form-label" >Thêm ngành nghề:</h1>
                        
                        <?php endif ; ?>
                </div>

                <form method = "POST" >
                <input type="hidden" name="id" value = "<?php echo $id;?>">
                    <div class = "form-add">
                            <div class = "label-item">
                                <label>Tên Ngành Nghề :</label><br>
                                <input type="text" name="tenNganhNghe" value = "<?php echo $tenNganhNghe; ?>" id="nganh-nghe">
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
                                <th>Ngành Nghề</th>       
                                <th colspan="2">Chỉnh Sửa</th>                
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                           $sql = "SELECT * FROM nganhnghe";
                           $query = $conn -> query($sql);         
                            while($row = $query -> fetch_assoc()):?>
                            <tr>
                                <td><?php echo $row['id_NganhNghe'];?></td>
                                <td><?php echo $row['NganhNghe'];?></td>
                                
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