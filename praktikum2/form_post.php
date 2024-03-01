<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


    <div class="card text-center m-3">
        <div class="card-header">
            <h1>Form Login</h1>
        </div>
        <div class="card-body">
            <form action="submit_post.php" method="POST">
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Username</label>
                    <div class="col-4">
                        <input id="text2" name="username" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Password</label>
                    <div class="col-4">
                        <input id="text3" name="password" type="password" class="form-control" required>
                    </div>
                </div>
        </div>
        <div class="card-footer text-muted">
            <div class="form-group row">
                <div class="offset-4 col-7">
                    <button name="submit" type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <br>


</body>

</html>