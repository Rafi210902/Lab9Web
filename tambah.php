<?php 
error_reporting(E_ALL); 
include_once 'koneksi.php';

if (isset($_POST['submit'])) 
{ 
    $nama = $_POST['nama']; 
    $kategori = $_POST['kategori']; 
    $harga_jual = $_POST['harga_jual']; 
    $harga_beli = $_POST['harga_beli']; 
    $stok = $_POST['stok']; 
    $file_gambar = $_FILES['file_gambar']; 
    $gambar = null; 
    if ($file_gambar['error'] == 0)
    { 
        $filename = str_replace(' ', '_',$file_gambar['name']); 
        $destination = dirname(__FILE__) . '/gambar/' . $filename; 
        if(move_uploaded_file($file_gambar['tmp_name'], $destination)) 
        { 
            $gambar = 'gambar/' . $filename;; 
        }
    } 
    $sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli, stok, gambar) '; 
    $sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')"; 
    $result = mysqli_query($conn, $sql); 
    header('location: index.php'); 
}    

?> 
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> <link href="style.css" rel="stylesheet" type="text/css" /> 
    <title>Tambah Barang</title> 
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
        </nav>
</head> 
<body>
<div class="container"> 
    <h1>Tambah Barang</h1> 
    <div class="main">
        <form method="post" action="tambah.php" enctype="multipart/form-data">
        <table cellpadding="8">
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama barang"></td>
            </tr>
                <td>Kategori</td>
                <td>
                <select>
                    <option value="Komputer">Komputer</option> 
                    <option value="Elektronik">Elektronik</option> 
                    <option value="Hand Phone">Hand Phone</option>
                </td>
                </select>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <td>File Gambar</td>
            <td>
                <input type="file" name="file_gambar" /> 
            </td>
        </table>

            <input type="submit" value="Simpan">
        </form> 
    </div>
    <style>
            footer{  
                color:blue;  
                clear:both;
                background-color:violet;  
                padding:5px;  
                font-size:15px;
                }  
                p{  
                color:blue;  
                }       
        </style>
        <footer>
            <p>&copy; 2021, Informatika, Universitas Pelita Bangsa</p>
        </footer>
</div> 
</body> 
</html>