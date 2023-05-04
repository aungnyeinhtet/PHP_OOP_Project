<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <h3 class="text-center text-uppercase text-secondary">Register</h3>
            <form action="_actions/register.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Name" aria-describedby="nameHelp" name="name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" aria-describedby="emailHelp" name="email">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPhone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Phone" aria-describedby="phoneHelp" name="phone">

                </div>
                <div class="mb-3">
                    <label for="exampleInputAddress" class="form-label">Address</label>
                    <input type="tel" class="form-control" id="exampleInputAddress" placeholder="Address" aria-describedby="addressHelp" name="address">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-primary w-100">Create Account</button>
            </form>
        </div>
    </div>

    <script src="styles/js/bootstrap.min.js"></script>
</body>

</html>