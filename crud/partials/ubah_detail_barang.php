<div class="row mt-4">
    <div class="col-md-12 mt-5">
        <div class="page-header">
            <h4>
                <i class='bi bi-pencil-square text-primary'></i>
                Ubah Detail Barang
            </h4>
        </div> <!-- page-header -->
        <?php
        if(isset($_GET['id'])) {
            $kd_penjualan = $_GET['id'];
            $query = mysqli_query($db, "SELECT * FROM tb_detail_barang WHERE kd_penjualan='$kd_penjualan'") or
                die('Query Error : '.mysqli_error($db));
            while($data_detail = mysqli_fetch_assoc($query)) {
                $kd_penjualan = $data['kd_penjualan'];
                $kd_barang = $data['kd_barang'];
                $jumlah_jual = $data['jumlah_jual'];
                $sub_total_harga = $data['sub_total_harga'];
            }
        }      
        ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="../controller/proses_ubah_detail_barang.php">
                    <div class="form-group mb-2 mt-4">
                        <label class="col-sm-2 control-label">Kode Penjualan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="kd_penjualan" value="<?php echo $kd_penjualan; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-sm-2 control-label">Kode Barang</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kd_barang" autocomplete="off" value="<?php echo $kd_barang; ?>" required>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-sm-2 control-label">Jumlah Jual</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="jumlah_jual" autocomplete="off" value="<?php echo $jumlah_jual; ?>" required>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-sm-2 control-label">Sub Total</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="sub_total_harga" autocomplete="off" value="<?php echo $sub_total_harga; ?>" required>
                        </div>
                    </div>

                    <hr/>
                    <div class="form-group mb-2">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary text-light btn-submit" name="ubah" value="Simpan">
                            <a href="../partials/tampil_data_penjual.php" class="btn btn-danger btn-reset">Batal</a>
                        </div>
                    </div>
                </form>
            </div> <!-- panel-body -->
        </div> <!-- panel- -->
    </div> <!-- col -->
</div> <!-- row -->