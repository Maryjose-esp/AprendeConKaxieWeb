<?php 
        session_start();
        if(!isset($_SESSION['Usuario'])){
            include('navbar.php');

        }else{
            include('navbarSS.php');
        }
        
?>