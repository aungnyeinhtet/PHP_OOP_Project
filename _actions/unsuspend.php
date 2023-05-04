<?php

include("../vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();

$id = $_GET["id"];

$table = new UsersTable(new MYSQL());

$table->unsuspend($id);
HTTP::redirect("/admin.php");
