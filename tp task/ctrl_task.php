<?php 
    include './view/view_header.php';


    session_start();
    
    if($_SESSION['connected']){
        $format
        echo '<script> navbarConnected(%s)</script>';
    }
?>