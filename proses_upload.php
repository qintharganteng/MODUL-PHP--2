<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPLOAD</title>
</head>
<body>
    <h2>PENGGUNAAN UPLOAD</h2>
    <?php
    $nama_file=$HTTP_POST_FILES["file1"]["name"];
    $tmp_dir=$HTTP_POST_FILES["file1"]["tmp_name"];
    copy($tmp_dir,"c:/upload_dir/$nama_file");
    echo("Nama File : <b>$nama_file</b>");
    ?>
</body>
</html>