<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
</head>

<body>

    <div class="container">
        <div class="title text-center fs-4">Upload Files with PHP</div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="formFileLg" class="form-label">Selecciona un archivo para subir</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="uploadedFile">
            </div>

            <div class="d-grid gap-2">
                <input class="btn btn-primary mt-2" type="submit" value="Upload"></input>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>