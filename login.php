<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">

    <style>
        .wrap {
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="wrap border rounded p-4 mt-5">
            <h3 class="text-center text-uppercase text-secondary mb-4">Login</h3>
            <?php if (isset($_GET["incorrect"])) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Incorrect Email or Password
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <?php if (isset($_GET["registered"])) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Account Create Successfully.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <?php if (isset($_GET["suspended"])) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Your Are Account is Suspended.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif ?>
            <form action="_actions/login.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fs-5">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" aria-describedby="emailHelp" name="email">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fs-5">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
            <p class="mt-3 fs-6">Don't have account ? <a href="register.php" class="text-primary">Register</a> </p>
        </div>
    </div>

    <script src="styles/js/bootstrap.min.js"></script>
</body>

</html>