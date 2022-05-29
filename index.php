<?php 
include("koneksi.php"); 

// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> 
    <link href="style.css" rel="stylesheet" type="text/css" />
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
        <h1>Data Barang</h1> 
        <a href="form_simpan.php">Tambah Barang</a><br>
            <table border="1" width="45%"><br>
</head> 
<body> 
    <div class="container"> 
        <div class="main"> 
            <tr> 
                <th>Gambar</th> 
                <th>Nama Barang</th> 
                <th>Kategori</th> 
                <th>Harga Beli</th> 
                <th>Harga Jual</th> 
                <th>Stok</th> 
                <th colspan="2">Aksi</th> 
            </tr>
            <?php if($result): ?> 
            <?php while($row = mysqli_fetch_array($result)): ?> 
                <tr> 
                    <td><?= $row['nama'];?></td>
                    <td><?= $row['nama'];?></td> 
                    <td><?= $row['kategori'];?></td> 
                    <td><?= $row['harga_beli'];?></td> 
                    <td><?= $row['harga_jual'];?></td> 
                    <td><?= $row['stok'];?></td> 
                    <td><a href="form_simpan.php"><?= $rowcolspan="Ubah";?></a></td> 
                    <td><a href="form_simpan.php"><?= $rowcolspan="Hapus";?></a></td> 
                </tr>
                <?php endwhile; else: ?> 
                <?php endif; ?>   
            </table>          
        </div> 
    </div> 
</body> 
</html>
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
