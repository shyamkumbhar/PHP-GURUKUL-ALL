<?php

/* Type of cookies:
    1. inmemory cookies 
    2. persistent cookies */


/* 1.inmemory cookie */

setcookie("city","nagpur");
echo $_COOKIE['city'];  //print cookies
echo "<br>"; 


/* 2.persistent cookie */

setcookie("moible","Nokia",time()+3600); //
echo $_COOKIE['moible'];  //print cookies
?>