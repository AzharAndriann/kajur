<?php 
if (isset($_POST['cari'])){
    $cari = $_POST['cari'];
}else{
    $cari = '';
}
?>
<div class="row mt-4">
    <div class="col-md-12 mt-5 float-right">
        <div class="page-header">
            <h4 class="mb-3">Data Penjualan</h4>
                <div class="pull-right btn-tambah">
                    <form class="form-inline" method="POST" action="tampil_data_penjualan.php">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-addon me-3">
                                <i class="bi bi-search" style="font-size:24px"></i>
                                </div>
                                <input type="text" name="cari" class="form-control" placeholder="Cari.." autocomplete="off" value="<?php echo $cari; ?>">
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
        if (empty($_GET['alert'])){
            echo '';
        } elseif ($_GET['alert'] == 1){
        echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                <strong><i class='glyphicon glyphicon-alert'></i>Gagal!</strong> Terjadi Kesalahan.
            </div>";
        } elseif ($_GET['alert'] == 2){
        echo "<div class='alert alert-success alert-dismissible' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                <strong><i class='glyphicon glyphicon-ok-circle'></i>Sukses!</strong> Data Barang berhasil disimpan.
            </div>";

        } elseif ($_GET['alert'] == 3){
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                <strong><i class='glyphicon glyphicon-ok-circle'></i>Sukses!</strong> Data Barang berhasil diubah.
            </div>";
        } elseif ($_GET["alert"] == 4){
            echo "<div class='alert alert-success alert-dismissible' role='alert'>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>
                </button>
                <strong><i class='glyphicon glyphicon-ok-circle'></i>Sukses!</strong> Data Barang berhasil dihapus.
            </div>";
        }
        ?>
       
    <!-- panel -->
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4>Data Detail Jual
                    <a class="btn btn-info" href="tambah_data_penjualan.php">
                        <i class="glyphicon glyphicon-plus"></i> Tambah
                    </a>
                </h4>
                <hr>
                <div class="container mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kode Penjualan</th>
                                    <th>Tanggal Jual</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($db, "SELECT tb_penjualan.kd_penjualan, tb_penjualan.tanggal_jual, tb_penjualan.total_harga
                                FROM tb_penjualan
                                WHERE NOT EXISTS (SELECT 1 FROM tb_detail_jual WHERE tb_detail_jual.kd_penjualan = tb_penjualan.kd_penjualan)")
                                or die('Ada kesalahan pada query barang: ' . mysqli_error($db));
   
                       

                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo "<tr>
                                    <td width='50' class='center'>$no</td>
                                    <td width='150'> $data[kd_penjualan]</td>
                                    <td width='150'> $data[tanggal_jual]</td>
                                    <td width='150'> $data[total_harga]</td>
                                    <td width='100'>
                                        <div class=''>
                                         <a data-toggle='tooltip' data-placement='top' title='Ubah'
                                         style='margin-right:5px' class = 'btn btn-info btn-sm'
                                         href='?page=ubah&id=$data[kd_penjualan]'>
                                         <i class='bi bi-pencil-square text-light'></i></a>";
                            ?>

                                        <a data-toggle="tooltip" data-placement="top" title="Hapus"
                                        class="btn btn-danger btn-sm" href="../controller/proses_hapus_penjualan.php?id=<?php echo $data['kd_penjualan'];?>" onclick="return confirm('Anda yakin ingin menghapus barang <?php echo $data['kd_penjualan'];?>?');">
                                        <i class="bi bi-trash-fill text-light"></i>
                                        </a>
                                <?php
                                echo "
                                        </div>
                                    </td>
                                </tr>";
                                $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!--//col -->
</div> <!--//row -->