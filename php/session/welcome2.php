<?php
session_start();

/* fetch current page sesstion page id */
$session_id = session_id(); 


if ($session_id ==  $_SESSION['session_id']) {
    echo "Welcome User";
} else {
/*     echo "InValid User";*/
session_destroy();
header("Location:index.php");
}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome Page</title>
</head>
<body>
    <p>welcome page</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>