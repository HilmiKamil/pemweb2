<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Nilai Semester</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="card text-center">
        <div class="card-header">
            <h3>Form Nilai Semester</h3>
        </div>
        <div class="card-body">
            <form action="submit_get1.php" method="GET">
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="text1" name="nama" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="select" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="select" name="matkul" class="custom-select">
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Database">Database</option>
                            <option value="User Interface & User Experience">User Interface & User Experience</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-3">
                        <input id="text" name="nilai_uts" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-3">
                        <input id="text2" name="nilai_uas" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                    <div class="col-3">
                        <input id="text3" name="nilai_tugas" type="number" class="form-control" required>
                    </div>
                </div>
        </div>
        <div class="card-footer text-muted">
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</body>

</html>