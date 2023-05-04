<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Upload</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
</head>
<style>
    .wrap {
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
    }
</style>

<body>
    <div class="wrap mt-5 border p-3 rounded">
        <h3 class="mb-4 text-center">Upload Profile</h3>
        <?php if (isset($_GET["error"])) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Err!</strong> Cannot File Upload
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>
        <form action="_actions/upload.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputFile" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleInputFile" name="upload">
                <button type="submit" class="w-100 bg-primary text-white btn-lg btn mt-4">Submit</button>
            </div>
        </form>
    </div>
    <script src="styles/js/bootstrap.min.js"></script>
</body>

</html>