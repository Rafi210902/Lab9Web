<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "latihan1"; 

$conn = mysqli_connect($host, $user, $pass, $db); 
if ($conn == false) 
{ 
    echo "Koneksi ke server gagal."; 
    die(); 
}   #else echo "Koneksi berhasil";
?>

<nav>
        <style>
            nav{  
            color:white;  
            background-color:aqua;  
            padding:15px;  
            }  
            p{  
            color:white;  
            }       
        </style>
        <style>
            nav a{  
            color:green;  
            background-color:aqua;  
            display:inline-block;
            font-size:22px;
            padding:7px 20px;  
            font-weight:bold;
            }  
            p{  
            color:green;  
            }       
        </style>
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="kontak.php">Kontak</a>
        </nav>