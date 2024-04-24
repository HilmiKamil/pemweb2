<?php
require_once 'navbar.html';
require_once 'sidebar.html';
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

                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah">
                                            <a href="tambah_pasien.php" class="text-light"><i class="fas fa-plus"></i> Tambah</a>
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
                                                <a href="proses_pasien.php?idx=<?= $pasien['id']; ?>&proses=Hapus" class=" type-warning btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
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
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Ruangan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Form for editing data -->
                        <form id="editForm">
                            <div class="form-group">
                                <label for="editNamaRuangan">Nama Ruangan :</label>
                                <input type="text" class="form-control" id="editNamaRuangan">
                            </div>
                            <div class="form-group">
                                <label for="editLokasi">Lokasi :</label>
                                <input type="text" class="form-control" id="editLokasi">
                            </div>
                            <div class="form-group">
                                <label for="editFasilitas">Fasilitas :</label>
                                <input type="text" class="form-control" id="editFasilitas">
                            </div>
                            <div class="form-group">
                                <label for="editKategoriRuangan">Kategori Ruangan :</label>
                                <input type="text" class="form-control" id="editKategoriRuangan">
                            </div>
                            <!-- Add more input fields as needed -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="confirm-data btn btn-primary">Save changes</button>
                        </form>
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