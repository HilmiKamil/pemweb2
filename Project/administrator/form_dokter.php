<?php
require_once 'koneksi.php';

$_idx = $_GET['id'];

if ($_idx) {
    $sql = "SELECT * FROM paramedik WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idx]);
    $row = $st->fetch();
}

require_once 'navbar.html';
require_once 'sidebar.php';

$query = "SELECT * FROM paramedik";
$paramediks = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Dokter</li>
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
                            <h3 class="card-title">Edit Dokter</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="proses_dokter.php" id="register-form">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="nama">Nama Dokter :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" value='<?= $row['nama']; ?>' id="nama" placeholder="Enter Code ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="gender" value="L" <?= $row['gender'] == 'L' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="gender" value="P" <?= $row['gender'] == 'P' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hospital-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" value="<?= $row['tmp_lahir'] ?>" placeholder="Enter City ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>" id="tgl_lahir" placeholder="Enter Date ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelurahan">Kategori :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="kategori" value="Kepala Puskesmas" <?= $row['kategori'] == 'Kepala Puskesmas' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Kepala Puskesmas</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Gigi" <?= $row['kategori'] == 'Poli Gigi' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Poli Gigi</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Umum" <?= $row['kategori'] == 'Poli Umum' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Poli Umum</label>
                                        </div>
                                        <div class="form-check pe-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Rehabilitasi Medik" <?= $row['kategori'] == 'Poli Rehabilitasi Medik' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Poli Rehabilitasi Medik</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Gizi" <?= $row['kategori'] == 'Poli Gizi' ? 'checked' : ''; ?>>
                                            <label class="form-check-label">Poli Gizi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="telpon">No. Handphone :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="telpon" id="telpon" value="<?= $row['telpon'] ?>" placeholder="Your Number ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-location-dot"></i></span>
                                        </div>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Enter Address..."><?= htmlspecialchars($row['alamat']); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="unit_kerja">Unit Kerja :</label>
                                    <?php
                                    $query_unit = "SELECT * FROM unit_kerja";
                                    $unit = $dbh->query($query_unit);
                                    $selectedUnitId = isset($row['unit_kerja']) ? $row['unit_kerja'] : ''; // Cek apakah elemen 'unit_kerja' ada atau tidak
                                    ?>
                                    <select id="unit_kerja" name="unit_kerja" class="custom-select">
                                        <?php
                                        foreach ($unit as $units) {
                                            $selected = ($units['id'] == $selectedUnitId) ? 'selected' : '';
                                            echo "<option value='{$units['id']}' {$selected}>{$units['nama']}</option>";
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
                                <input type="submit" class="btn btn-primary" name="proses_paramedik" value="Edit">
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