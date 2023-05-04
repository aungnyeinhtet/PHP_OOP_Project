<?php
include("./vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles/css/profile.css">
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
</head>


<body>
    <section>
        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary fs-3">
                    PHP
                </a>
                <div class="d-flex">
                    <a href="_actions/logout.php" class="px-3 py-1 bg-danger btn text-white">Logout</a>
                </div>
            </div>
        </nav>

        <div class="py-5">
            <div class="container">
                <h3 class="mb-4 text-secondary">Profile</h3>
                <div class="row">
                    <div class="col-12 col-lg-3">

                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="admin.php" class="text-primary ">Manage Users>></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="col-12">
                            <div class="relative">

                                <a href="upload-cover-photo.php" class="d-block">
                                    <img src="./public/assets/background/<?= $auth->coverPhoto ?? "unknown.jpg" ?>" class="bg-image" alt="Cover Photo" />
                                </a>
                                <div class="profile mx-auto">
                                    <div class="d-flex ">
                                        <a href="upload.php">
                                            <img src="./public/assets/profile/<?= $auth->photo ??  "unknown.jpg" ?>" alt="Profile Image" />
                                        </a>
                                        <div class="mt-3">
                                            <span class="fw-500 fs-5 fw-semibold"><?= $auth->name ?></span>
                                            <p class="fs-6 text-secondary">A <?= $auth->role ?></p>
                                        </div>
                                    </div>
                                    <div class="bg-success text-white px-3 rounded">
                                        <?= $auth->suspended === 0 ? "Active" : "" ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-5">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <b>Name : </b> <i><?= $auth->name ?></i>
                                </li>
                                <li class="list-group-item">
                                    <b>Email : </b> <i><?= $auth->email ?></i>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone : </b> <i><?= $auth->phone ?></i>
                                </li>
                                <li class="list-group-item">
                                    <b>Address : </b> <i><?= $auth->address ?></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="src/styles/js/bootstrap.min.js"></script>
</body>