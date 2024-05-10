<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | ePuskesmas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="icon" type="image/png" href="assets/admin/img/logo1.png" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/admin/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/admin/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/admin/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <img src="assets/admin/img/logo2.png" style="max-width: 40vh;" alt="" srcset="">
            </div>
            <div class="card-body">

                <form action="proses_admin.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa-solid fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </form>
                <!-- /.social-auth-links -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->



    <!-- jQuery -->
    <script src="assets/admin/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/admin/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/admin/js/adminlte.min.js"></script>
</body>

</html>