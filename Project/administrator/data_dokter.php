<?php
require_once 'navbar.html';
require_once 'sidebar.php';
require_once 'koneksi.php';
$query = "SELECT paramedik.*, unit_kerja.nama as nama_unit_kerja
FROM paramedik
LEFT JOIN unit_kerja ON paramedik.unit_kerja_id = unit_kerja.id";
$paramediks = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Dokter | Puskesmas Jatijajar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Dokter</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Dokter</h3>

                            <div class="card-tools">

                                <div class="input-group input-group-sm" style="width: 100px;">
                                    <div class="input-group-append">

                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            <a href="#" class="text-light"><i class="fas fa-plus"></i> Tambah</a>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Dokter</th>
                                        <th>Gender</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kategori</th>
                                        <th>No.Handphone</th>
                                        <th>Alamat</th>
                                        <th>Unit Kerja</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($paramediks as $paramedik) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $paramedik['nama']; ?></td>
                                            <td><?= $paramedik['gender']; ?></td>
                                            <td><?= $paramedik['tmp_lahir']; ?></td>
                                            <td><?= $paramedik['tgl_lahir']; ?></td>
                                            <td><?= $paramedik['kategori']; ?></td>
                                            <td><?= $paramedik['telpon']; ?></td>
                                            <td><?= $paramedik['alamat']; ?></td>
                                            <td><?= $paramedik['nama_unit_kerja']; ?></td>
                                            <td>
                                                <a href="form_dokter.php?id=<?= $paramedik['id']; ?>" class="edit-form btn btn-warning btn-sm my-1"><i class="fas fa-edit"></i> Edit</a>
                                                <a href="proses_dokter.php?idx=<?= $paramedik['id']; ?>&proses_paramedik=Hapus" class="type-warning btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Dokter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing data -->
                        <form method="POST" action="proses_dokter.php" id="register-form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Nama Dokter :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" id="editnama" placeholder="Enter Code ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="gender" value="L" id="editgender">
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="gender" value="P" id="editgender">
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
                                        <input type="text" class="form-control" name="tmp_lahir" id="edit_tmp_lahir" placeholder="Enter City ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="tgl_lahir" id="edit_tgl_lahir" placeholder="Enter Date ...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Kategori :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="kategori" value="Kepala Puskesmas">
                                            <label class="form-check-label">Kepala Puskesmas</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Gigi">
                                            <label class="form-check-label">Poli Gigi</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Umum">
                                            <label class="form-check-label">Poli Umum</label>
                                        </div>
                                        <div class="form-check pe-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Rehabilitasi">
                                            <label class="form-check-label">Poli Rehabilitasi Medik</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="kategori" value="Poli Gizi">
                                            <label class="form-check-label">Poli Gizi</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email">No. Handphone :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="number" class="form-control" name="telpon" id="telpon" placeholder="Enter Number Handphone ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-location-dot"></i></span>
                                        </div>
                                        <textarea class="form-control" name="alamat" id="editalamat" rows="3" placeholder="Enter Address..."></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="unit_kerja">Unit Kerja :</label>
                                    <select class="form-control" name="unit_kerja" id="edit_unit_kerja">
                                        <?php
                                        $sql_unit_kerja = "SELECT * FROM unit_kerja";
                                        $stmt_unit_kerja = $dbh->prepare($sql_unit_kerja);
                                        $stmt_unit_kerja->execute();
                                        $result_unit_kerja = $stmt_unit_kerja->fetchAll();
                                        foreach ($result_unit_kerja as $row_unit_kerja) {
                                            $selected = (['unit_kerja_id'] == $row_unit_kerja['id']) ? 'selected' : '';
                                            echo "<option value='{$row_unit_kerja['id']}' $selected>{$row_unit_kerja['nama']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="proses_paramedik" value="Simpan">
                                <input type="reset" class="btn btn-danger" name="proses" value="Batal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

</section>
<!-- /.content -->
</div>





<?php
require_once 'footer.html';
?>