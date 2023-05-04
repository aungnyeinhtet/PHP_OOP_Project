<?php

include("../vendor/autoload.php");

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MYSQL;
use Libs\Database\UsersTable;



$data = $_FILES["upload"];
$name = $data["name"];
$type = $data["type"];
$tmp_name = $data["tmp_name"];
$error = $data["error"];

$auth = Auth::check();
$table = new UsersTable(new MYSQL());
if ($error) {
    HTTP::redirect("/upload.php", "error=file");
}

if ($type === "image/jpeg" || $type === "image/png") {
    $table->uploadProfile($auth->id, $name);
    move_uploaded_file($tmp_name, "../public/assets/profile/$name");
    $auth->photo = $name;
    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/upload.php", "error=type");
}
