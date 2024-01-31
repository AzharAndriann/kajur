<!-- bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datepicker.min.css">

<div class="row mt-5 ms-3">
    <div class="col-md-12 mt-4">
        <div class="page-header">
            <h4>
                <i class='bi bi-pencil-square text-primary'></i>
                Input Detail Barang
            </h4>
        </div> <!-- page header -->

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="../controller/proses_simpan_data_penjual.php">
                    <div class="form-group mb-2 mt-4">
                        <label class="col-sm-2 control-label">Kode Penjualan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="kd_penjualan" maxlength="5"
                            autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 ">
                        <label class="col-sm-2 control-label">Kode Barang</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kd_barang" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 ">
                        <label class="col-sm-2 control-label">Jumlah Jual</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="jumlah_jual" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group mb-2 ">
                        <label class="col-sm-2 control-label">Sub total Harga</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="sub_total_harga" autocomplete="off" required>
                        </div>
                    </div>
                    

                    <hr/>
                    <div class="form-group mb-2 ">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary text-light btn-submit" name="simpan_data_penjual" value="simpan_detail">
                            <a href="../partials/data_penjual.php" class="btn btn-danger btn-reset">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>