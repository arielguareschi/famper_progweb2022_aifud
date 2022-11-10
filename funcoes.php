<?php
    function validaLogin(){
        if(empty($_SESSION['id'])){
            header('location:login.php');
        }
        return true;
    }
