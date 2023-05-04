<?php
include("../vendor/autoload.php");

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;
use PDOException;


$auth = Auth::check();

$name = $_FILES["coverPhoto"]["name"];
$tmp_name = $_FILES["coverPhoto"]["tmp_name"];
$type = $_FILES["coverPhoto"]["type"];
$error = $_FILES["coverPhoto"]["error"];

$table = new UsersTable(new MYSQL());

try {
    if ($error) {
        HTTP::redirect("upload-cover-photo.php", "error=file");
    }
    if ($type === "image/jpeg" || $type === "image/jpg" || $type === "png") {
        $table->uploadCoverPhoto($auth->id, $name);
        move_uploaded_file($tmp_name, "../public/assets/background/$name");
        $auth->coverPhoto = $name;
        HTTP::redirect("/profile.php");
    } else {
        HTTP::redirect("/upload-cover-photo.php", "error=type");
    }
} catch (PDOException $e) {
    return $e->getMessage();
}
