<?php
if (isset($HTTP_POST_VARS["no induk"]))
{
    setcookie("cookie no induk",$HTTP_POST_VARS["no induk"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
<body>
    <h2>PENGUNAAN COOKIE</h2>
    <pre>
        <form action="cookie.php" method="post">
            No. induk : <input type="text" name="no induk" size="10"> <input type="submit name="go" value="GO">
        </form>
        <?php
        if(isset($HTTP_POST_VARS["no induk"]))
        {
            echo("Klik <A href=\"cek_cookie.php\">disini</a> untuk melihat data cookies");
        }
        ?>           
    </pre>
</body>
</html>