<!-- heafer -->

<?php include './views/layout/header.php'; ?>

<!-- end-header -->


<!-- Navbar -->
<?php include './views/layout/navbar.php'; ?>
<!-- end-navbar -->

<!-- Main Sidebar Container -->
<?php include './views/layout/sidebar.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thông tin khách hàng</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-4">

                    <img src="<?= BASE_URL . $khachHang['anh_dai_dien'] ?>" style="width: 70%" alt="" onerror="this.onerror=null
                       this.src='https://png.pngtree.com/png-vector/20190710/ourmid/pngtree-user-vector-avatar-png-image_1541962.jpg'">



                </div>
                <div class="col-6">
                    <div class="container">
                        <table class="table table-borderless">



                            <tbody style="font-size: large">

                                <tr>
                                    <th>Họ tên:</th>
                                    <td><?= $khachHang['ho_ten'] ?? '' ?></td>
                                </tr>

                                <tr>
                                    <th>Ngày sinh:</th>
                                    <td><?= $khachHang['ngay_sinh'] ?? '' ?></td>
                                </tr>

                                <tr>
                                    <th>Email:</th>
                                    <td><?= $khachHang['email'] ?? '' ?></td>
                                </tr>

                                <tr>
                                    <th>Số điện thoại:</th>
                                    <td><?= $khachHang['so_dien_thoai'] ?? '' ?></td>
                                </tr>

                                <tr>
                                    <th>Giới tính:</th>
                                    <td><?= $khachHang['gioi_tinh'] == 1 ? 'Nam' : 'Nữ'; ?></td>
                                </tr>

                                <tr>
                                    <th>Địa chỉ:</th>
                                    <td><?= $khachHang['dia_chi'] ?? '' ?></td>
                                </tr>
                                <tr>
                                    <th>Địa chỉ:</th>
                                    <td><?= $khachHang['trang_thai'] ? 'Active' : 'Inactive' ?></td>
                                </tr>


                            </tbody>


                        </table>
                    </div>
                </div>

                <div class="col-12">
                    <h2>Thông tin mua hàng</h2>
                    <div class="">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên người nhận</th>
                                    <th>Số điện thoại</th>
                                    <th>Ngày đặt</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listDonHang as $key => $donHang): ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $donHang['ma_don_hang'] ?> </td>
                                        <td><?= $donHang['ten_nguoi_nhan'] ?> </td>
                                        <td><?= $donHang['sdt_nguoi_nhan'] ?> </td>
                                        <td><?= $donHang['ngay_dat'] ?> </td>
                                        <td><?= $donHang['tong_tien'] ?> </td>
                                        <td><?= $donHang['ten_trang_thai'] ?> </td>
                                        <td>
                                            <a href="<?= BASE_URL_ADMIN . '?act=chi-tiet-don-hang&id_don_hang=' . $donHang['id'] ?>">
                                                <button class="btn btn-primary"><i class="fas fa-eye"></i></button>
                                            </a>
                                            <a href="<?= BASE_URL_ADMIN . '?act=form-sua-don-hang&id_don_hang=' . $donHang['id'] ?>">
                                                <button class="btn btn-warning "><i class="fas fa-cogs"></i> Sửa</button>
                                            </a>


                                        </td>
                                    </tr>
                                <?php endforeach ?>

                        </table>
                    </div>

                </div>

                
            </div>



    </section>

    <!-- Footer -->
    <?php include './views/layout/footer.php'; ?>
    <!-- end footer -->


    </body>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
     
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
    </html>