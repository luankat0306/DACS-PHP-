<?php include 'default.php';?>

<link rel="stylesheet" type="text/css" href="../CSS/CVDL.php">
<link rel="stylesheet" type="text/css" href="../CSS/QLTK.php">

    <h2 class="h2">KIỂM DUYỆT HỒ SƠ</h2>
    <hr>

    <div class = "show-data">
                <table id = "table">
                    <thead>
                            <tr >
                                <th>ID</th>
                                <th>Tiêu Đề Bài Đăng</th>     
                                <th>Họ Tên</th>
                                <th>SĐT</th>     
                                <th>Email</th>               
                                <th>Chi Tiết</th>                
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                          $id = $_SESSION['id'];

                          $sql = ("SELECT * FROM trangthaihoso INNER JOIN dangtincongviec ON trangthaihoso.id_DangTinCongViec = dangtincongviec.id_DangTinCongViec 
                                                                                       INNER JOIN hoso ON trangthaihoso.id_HoSo = hoso.id_HoSo
                                                                                       INNER JOIN nguoitimviec ON hoso.id_NguoiTimViec = nguoitimviec.id
                                      
                                      WHERE id_CongTy = $id And TrangThai = 'Đang Chờ'
                                      ORDER BY TieuDe");
                          $query = $connect->query($sql);
                          if($query->num_rows > 0): 
                      ?>
                  
                        <?php  while ($row =$query->fetch_array()): 
                                      $id = $row['id_TrangThai'];?>
                            <tr>
                                <td><?php echo $row['id_TrangThai'];?></td>
                                <td><?php echo $row['TieuDe'];?></td>
                                <td><?php echo $row['HoTen'];?></td>
                                <td><?php echo $row['SDT'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                
                                <td>
                                    <a class="edit" href="./ShowInfo.php?id=<?php echo $id; ?>"><i class="fas fa-info-circle"></i> Chi tiết</a>
                                </td>
                              
                            </tr>
                                <?php endwhile; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
             </div>
