<?php
require_once 'koneksi.php';

$_idx = $_GET['id'];

if ($_idx) {
    $sql = "SELECT * FROM periksa WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idx]);
    $row = $st->fetch();
}

require_once 'navbar.html';
require_once 'sidebar.php';

$query = "SELECT * FROM periksa";
$kelurahans = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Pemeriksaan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pemeriksaan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Pemeriksaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="proses_periksa.php" id="register-form">
                            <div class="card-body">
                                <div class="form-group">

                                    <label for="tanggal">Tanggal :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tanggal" value='<?= $row['tanggal']; ?>' id="tanggal">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="berat">Berat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-weight-scale"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="berat" id="berat" value="<?= $row['berat'] ?>" placeholder="Enter Weight ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tinggi">Tinggi :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-child"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tinggi" value="<?= $row['tinggi'] ?>" id="tinggi" placeholder="Enter Height ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tensi">Tensi :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-head-side-virus"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tensi" value="<?= $row['tensi'] ?>" id="tensi" placeholder="Enter Tensi ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-circle-info"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="keterangan" value="<?= $row['keterangan'] ?>" id="keterangan" placeholder="Enter Keterangan ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pasien_id">Nama Pasien :</label>
                                    <select class="form-control" id="pasien_id" name="pasien_id" required>
                                        <option value="">Pilih Pasien</option>
                                        <?php
                                        $sql_pasien_id = "SELECT * FROM pasien";
                                        $stmt_pasien_id = $dbh->prepare($sql_pasien_id);
                                        $stmt_pasien_id->execute();
                                        $result_pasien_id = $stmt_pasien_id->fetchAll();
                                        foreach ($result_pasien_id as $pasien_id) {
                                            $selected = ($pasien_id['id'] == $row['pasien_id']) ? 'selected' : '';
                                            echo "<option value='{$pasien_id['id']}' $selected>{$pasien_id['nama']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dokter_id">Nama Dokter :</label>
                                    <select class="form-control" id="dokter_id" name="dokter_id" required>
                                        <option value="">Pilih Dokter</option>
                                        <?php
                                        $sql_dokter_id = "SELECT * FROM paramedik";
                                        $stmt_dokter_id = $dbh->prepare($sql_dokter_id);
                                        $stmt_dokter_id->execute();
                                        $result_dokter_id = $stmt_dokter_id->fetchAll();
                                        foreach ($result_dokter_id as $dokter_id) {
                                            $selected = ($dokter_id['id'] == $row['dokter_id']) ? 'selected' : '';
                                            echo "<option value='{$dokter_id['id']}' $selected>{$dokter_id['nama']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <?php if ($_idx) { ?>
                                    <input type="hidden" name="idx" value="<?= $_idx; ?>">
                                <?php } ?>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="proses_periksa" value="Edit">
                                <input type="reset" class="btn btn-danger" name="proses" value="Batal">
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php
require_once 'footer.html';
?>