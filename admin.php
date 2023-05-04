<?php
include("./vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\Auth;

$auth = Auth::check();
$table = new UsersTable(new MYSQL());
$users = $table->getAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
</head>

<body>
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
    <div class="container">
        <a href="profile.php" class="btn btn-md text-white my-3 bg-primary">Back</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><?= $user->email ?></td>
                        <td><?= $user->phone ?></td>
                        <td><?= $user->role ?></td>
                        <td>
                            <div class="flex w-100">
                                <?php if ($auth->value > 1) : ?>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                                            Change Role
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-dark">
                                            <a href="_actions/role.php?id=<?= $user->id ?>&role=1" class="dropdown-item">User</a>
                                            <a href="_actions/role.php?id=<?= $user->id ?>&role=2" class="dropdown-item">Web Developer</a>
                                            <a href="_actions/role.php?id=<?= $user->id ?>&role=3" class="dropdown-item">Mobile Developer</a>
                                            <a href="_actions/role.php?id=<?= $user->id ?>&role=4" class="dropdown-item">Project Manager</a>
                                            <a href="_actions/role.php?id=<?= $user->id ?>&role=5" class="dropdown-item">Admin</a>
                                        </div>
                                        <?php if ($user->suspended) : ?>
                                            <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-danger text-sm btn-sm">Suspended</a>
                                        <?php else : ?>
                                            <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-outline-success text-sm btn-sm">Active</a>
                                        <?php endif ?>
                                        <?php if ($user->id !== $auth->id) : ?>
                                            <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-outline-danger text-sm btn-sm" onClick="return confirm('Are you sure?')">Delete</a>
                                        <?php endif ?>
                                    </div>
                                <?php else : ?>
                                    #
                                <?php endif ?>


                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>

    <script src="styles/js/bootstrap.min.js"></script>
</body>

</html>