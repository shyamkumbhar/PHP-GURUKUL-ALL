<?php

/* print_r($_POST['email']); */
$email = $_POST['email'];
$password = $_POST['password'];
if ($email =="scott@gmail.com" AND $password == "123"){
    // echo "User is Valied!";
    session_start(); //crete file at server  location
    /* to store data in session file */

    $_SESSION['session_id']=session_id();  
    $_SESSION['user']="shyam";  

    /* redirect the user */
    header("location:welcome.php");
} else {
    echo "User is InValied!";
}


?>
