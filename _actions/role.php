<?php
include("../vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();
$id = $_GET["id"];
$role = $_GET["role"];

$table = new UsersTable(new MYSQL());

$table->changeRole($id, $role);
HTTP::redirect("/admin.php");
