<?php
$mysqlsunucu = "localhost:3308";
$mysqlkullanici = "root";
$mysqlsifre = "";
try {
    $conn = new PDO("mysql:host=$mysqlsunucu;dbname=proje;charset=utf8", $mysqlkullanici, $mysqlsifre); 
    }
catch(PDOException $e)
    {
    echo "Bağlantı hatası: " . $e->getMessage();
    }


  ?>