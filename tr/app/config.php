<?php
session_start();
 if(!isset($_SESSION['gbtoken'])){
    $_SESSION['gbtoken'] =  md5( uniqid( mt_rand(), true ) );
 }
?>