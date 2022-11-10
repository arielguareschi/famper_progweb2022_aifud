<?php
    $dbHost = "127.0.0.1";
    $dbUser = "root";
    $dbPass = "";
    $dbSchema =  "famper_aifud";

    $conexao = null;
    session_start();
    try {
        $strCon = "mysql:host=" . $dbHost . ";dbname=".$dbSchema;
        $conexao = new PDO($strCon, $dbUser, $dbPass);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "ERRO AO CONECTAR! " . $e->getMessage();
    }
