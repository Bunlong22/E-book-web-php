<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="row justify-content-center my-5">
        <div class="col-lg-4 col-md-6 col-sm-10 col-xs-12">
            <div class="card rounded-0 shadow">
                <div class="card-header">
                    <div class="card-title text-center h4 fw-bolder">Login</div>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <form method="post" action="login.php">
                            <div class="mb-3">
                                <label for="name" class="control-label ">Username</label>
                                <input type="text" name="name" class="form-control rounded-0">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="control-label ">Password</label>
                                <input type="password" name="pass" class="form-control rounded-0">
                            </div>
                            <div class="mb-3 d-grid">
                                <input type="submit" name="submit" value="Login" class="btn btn-success rounded-0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>