<?php

session_start();
session_destroy();
// header("refresh: 0; url:girisyap.php");
echo '<meta http-equiv="refresh" content="0;URL=girisyap.php" >';


/*
if(isset($_SESSION["pg1926"]) == FALSE){
    session_destroy();
    unset($_SESSION["pg1926"]);
}
*/

// echo '<meta http-equiv="refresh" content="2;URL=hosgeldiniz.php" >';
