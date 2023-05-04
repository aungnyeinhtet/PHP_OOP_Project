<?php
session_start();
include("../vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;


$email = $_POST["email"];
$password = md5($_POST["password"]);

$table = new UsersTable(new MYSQL());
$user = $table->fetchEmailAndPassword($email, $password);

if ($user) {
    if ($user->suspended === 1) {
        HTTP::redirect("/login.php", "suspended=1");
    }
    $_SESSION["user"] = $user;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/login.php", "incorrect=true");
}
