<?php require_once "class_nilaimahasiswa.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ujian Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <body>
            <div class="container">
                <h2>Form Nilai Ujian</h2>
                <form method="POST">
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label>
                        <div class="col-8">
                            <input id="nim" name="nim" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matakuliah" class="col-4 col-form-label">Pilih Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matakuliah" name="matakuliah" class="custom-select" required="required">
                                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="User Interface & User Experience">User Interface & User Experience</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai" class="col-4 col-form-label">Nilai</label>
                        <div class="col-8">
                            <input id="number" name="nilai" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $nim = $_POST['nim'];
                    $matakuliah = $_POST['matakuliah'];
                    $nilai = $_POST['nilai'];

                    $nilai1 = new NilaiMahasiswa($nim, $matakuliah, $nilai);

                ?>

                    <table class="table table-bordered">
                        <tr class="table table-primary">
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Nilai</th>
                            <th>Hasil Ujian</th>
                            <th>Grade</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?= $nilai1->nim ?> </td>
                            <td><?= $nilai1->matakuliah ?></td>
                            <td><?= $nilai1->nilai ?></td>
                            <td><?= $nilai1->grade() ?></td>
                            <td><?= $nilai1->hasil() ?></td>
                        </tr>
                        <tr></tr>
                    </table>

                <?php  } ?>
            </div>
        </body>

</html>