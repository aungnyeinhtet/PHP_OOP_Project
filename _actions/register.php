<?php
include("../vendor/autoload.php");

use Helpers\HTTP;
use Libs\Database\MYSQL;
use Libs\Database\UsersTable;

$data = [
    'name' => $_POST["name"] ?? "Unknown",
    'email' => $_POST["email"] ?? "Unknown",
    'phone' => $_POST["phone"] ?? "Unknown",
    'address' => $_POST["address"] ?? "Unknown",
    'password' => md5($_POST["password"]) ?? "Unknown",
    'role_id' => 1

];
$table = new UsersTable(new MYSQL());
$table->insert($data);
HTTP::redirect("/login.php", "registered=true");
