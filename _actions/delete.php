<?php

include("../vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
use Helpers\Auth;

$auth = Auth::check();

$id = $_GET['id'];

$table = new UsersTable(new MYSQL());
$table->deleteUser($id);
HTTP::redirect("/admin.php");
