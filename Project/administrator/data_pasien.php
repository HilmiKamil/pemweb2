<?php
require_once 'navbar.html';
require_once 'sidebar.php';
require_once 'koneksi.php';
$query = "SELECT pasien.*, kelurahan.nama as nama_kelurahan
FROM pasien
LEFT JOIN kelurahan ON pasien.kelurahan_id = kelurahan.id";
$pasiens = $dbh->query($query);
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pasien | Puskesmas Jatijajar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pasien</li>
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
                            <h3 class="card-title">Data Pasien</h3>

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
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pasien</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($pasiens as $pasien) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $pasien['kode']; ?></td>
                                            <td><?= $pasien['nama']; ?></td>
                                            <td><?= $pasien['gender']; ?></td>
                                            <td><?= $pasien['tmp_lahir']; ?></td>
                                            <td><?= $pasien['tgl_lahir']; ?></td>
                                            <td><?= $pasien['nama_kelurahan']; ?></td>
                                            <td>
                                                <a href="form_pasien.php?id=<?= $pasien['id']; ?>" class="edit-form btn btn-warning btn-sm my-1"><i class="fas fa-edit"></i> Edit</a>
                                                <button type="submit" class="type-warning btn btn-danger btn-sm"><a href="proses_pasien.php?idx=<?= $pasien['id']; ?>&proses=Hapus" style="color:white;"><i class="fas fa-trash"></i> Hapus</a></button>
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
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing data -->
                        <form method="POST" action="proses_pasien.php" id="register-form">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Kode :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="kode" id="kode" placeholder="Enter Code ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pasien :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Name ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmp_lahir">Tempat Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hospital-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" placeholder="Enter City ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-days"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Enter Date ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin :</label>
                                    <div class="input-group mb-3">
                                        <div class=" form-check pe-3">
                                            <input class="form-check-input" type="radio" name="gender" value="L">
                                            <label class="form-check-label">Laki-Laki</label>
                                        </div>
                                        <div class="form-check mx-2">
                                            <input class="form-check-input" type="radio" name="gender" value="P">
                                            <label class="form-check-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kelurahan">Kelurahan :</label>

                                    <select class="form-control" name="kelurahan" id="kelurahan">
                                        <?php
                                        $query = "SELECT * FROM kelurahan";
                                        $kelurahans = $dbh->query($query);
                                        ?>
                                        <?php foreach ($kelurahans as $kelurahan) { ?>
                                            <option value="<?php echo $kelurahan['id']; ?>"><?php echo $kelurahan['nama']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email ...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-location-dot"></i></span>
                                        </div>
                                        <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Enter Address..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="proses" value="Simpan">
                                <input type="reset" class="btn btn-danger" name="proses" value="Batal">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--- Modal Tambah End --->



    </section>
    <!-- /.content -->
</div>


<?php
require_once 'footer.html';
?>