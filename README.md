                                                                    LAPORAN PRAKTIKUM 9
                                                                        PHP MODULAR
                                                                      PEMROGRAMAN WEB
Nama		: Rafi Hanif Rabbani
NIM		: 312010358
Kelas		: TI.20.A.2
Mata Kuliah	: Pemrograman Web

PENDAHULUAN
Segala Puji bagi Tuhan Yang telah memberikan kita berbagai macam ni’mat seperti Ni’mat Islam, Ni’mat Iman serta Ni’mat Sehat Wal ‘Afiat sehingga saya bisa menyusun Laporan Praktikum 9 ini. Dan tak lupa pula kepada Bapak Dosen Pak Agung Nugroho yang telah memberikan Materi dan Instruksi Praktikum 9 ini agar mahasiswa dapat mengikuti yang diberikan oleh Bapak Dosen. Pada Laporan Praktikum ini saya akan memaparkan cara-cara dalam membuat Program Modular Sederhana serta cara mengimplementasikannya seperti dibawah ini.

TUJUAN
1.	Mahasiswa mampu memahami konsep dasar Modularisasi Program.
2.	Mahasiswa mampu memahami konsep dasar Fungsi pada PHP.
3.	Mahasiswa mampu membuat program Modular sederhana menggunakan PHP.
4.	Mahasiswa mampu mengimplementasikan penggunaan fungsi pada PHP

LANDASAN TEORI
Teori dalam Instruksi Praktikum ini berisi tentang konsep-konsep dasar modularisasi dengan PHP dan modularisasi ini dapat juga diimplementasikan dengan file database yang berformat php pada Visual Studio Code. Dan dalam pembelajaran ini mahasiswa juga diajarkan dengan menggunakan Instruksi Praktikum yang telah diberikan oleh Dosen Pengampu dan dipelajari agar lebih memahami tentang PHP Modular.
BAHAN-BAHAN
-	Xampp
-	Visual Studio Code
-	Google Chrome

CARA-CARA
1.	Pertama-tama saya membuka Xampp dan mengaktifkan Apache dengan MySQL seperti dibawah ini.
 ![image](https://user-images.githubusercontent.com/102600434/170875013-ca4239c5-5cd5-44dd-af90-6b6ebe3899cb.png)


2.	Kemudian buatlah folder dengan nama lab9_php_modular seperti dibawah ini pada file htdocs di Xampp.
  ![image](https://user-images.githubusercontent.com/102600434/170875039-fdb40fc4-71e7-495f-aff2-9ca3d1801e3b.png)


3.	Lalu saya membuka software Visual Studio Code dan saya membuat file yang bernama header.php seperti dibawah ini.
 ![image](https://user-images.githubusercontent.com/102600434/170875057-07594973-c8f4-4748-80ac-67564854326a.png)


![image](https://user-images.githubusercontent.com/102600434/170875068-79d22e6b-4984-42ae-9b80-9a00d150a2fd.png)


![image](https://user-images.githubusercontent.com/102600434/170875075-b9e7f848-9bcc-4cd1-8566-fdde65f8cc05.png)


![image](https://user-images.githubusercontent.com/102600434/170875084-d74444ba-9433-4771-add1-9869560f503c.png)


![image](https://user-images.githubusercontent.com/102600434/170875092-ee122d68-5604-4401-aefa-50b1d9a95e25.png)


![image](https://user-images.githubusercontent.com/102600434/170875232-9ecd513b-0661-4934-8714-50d645ec6f49.png)


 
Setelah itu save file header.php dan lanjut untuk membuat file baru.

4.	Buatlah file baru yang kedua yang bernama footer.php seperti dibawah ini.
![image](https://user-images.githubusercontent.com/102600434/170875243-eeeeb1be-9b25-436e-b87c-1ae7f105ab68.png)


![image](https://user-images.githubusercontent.com/102600434/170875248-28efdd55-9e60-49dd-a83b-9e5593e2a170.png)


![image](https://user-images.githubusercontent.com/102600434/170875253-6ef2a9bf-e640-4854-8001-12e02e4234a7.png)


![image](https://user-images.githubusercontent.com/102600434/170875261-e2fbe167-0c19-4d04-a6d7-3f3aef3d80fe.png)


![image](https://user-images.githubusercontent.com/102600434/170875268-9bd2ec10-dd62-438e-a4a8-49d04d4009b7.png)


 
Setelah itu save file footer.php dan lanjut untuk membuat file baru.

5.	Buatlah file baru yang ketiga yang bernama home.php seperti dibawah ini.
 ![image](https://user-images.githubusercontent.com/102600434/170875282-e5b05c4e-82e9-4994-be43-befee57734b7.png)


 ![image](https://user-images.githubusercontent.com/102600434/170875298-fe65e7f6-1e97-4d6d-9b0e-79191700cee9.png)


 ![image](https://user-images.githubusercontent.com/102600434/170875318-c8db132e-70b0-4a58-b620-384bd7ddb5a6.png)

 
 ![image](https://user-images.githubusercontent.com/102600434/170875341-1203fe28-2ae8-4bfe-8b64-ca18c4860f74.png)


![image](https://user-images.githubusercontent.com/102600434/170875353-acaf11fd-f4d2-4ea7-b64b-753eff6d5d85.png)


Setelah itu save file home.php dan lanjut untuk membuat file baru.

6.	Buatlah file baru yang keempat atau terakhir yang bernama about.php seperti dibawah ini.
![image](https://user-images.githubusercontent.com/102600434/170875378-332b1f0a-58f7-408b-8b70-68baee8ff463.png)


![image](https://user-images.githubusercontent.com/102600434/170875394-e7627808-950d-4d06-adc5-08f39bc017f9.png)


![image](https://user-images.githubusercontent.com/102600434/170875398-19cfa44b-4c67-46e4-9849-3b34099e418c.png)


![image](https://user-images.githubusercontent.com/102600434/170875401-989bada1-822e-4b68-9544-b08d3bb96acd.png)


![image](https://user-images.githubusercontent.com/102600434/170875409-9f51c741-854f-42f8-ad70-8615c614f210.png)



Setelah itu save file about.php.

TUGAS
Disini saya akan mengimplementasikan bagaimana jika PHP Modularisasi ini digabung dengan file-file yang berada di dalam folder lab8_php_database.

1.	Pertama-tama saya menggabungkan kode header.php pada file koneksi.php yang berada di dalam folder lab8_php_database.
 ![image](https://user-images.githubusercontent.com/102600434/170875432-e4c8504f-4915-48f8-a791-e67e9da14dd7.png)


Lalu save dengan menggunakan shortcut keyboard CTRL+S, dan lihat hasilnya pada browser seperti ini.
 ![image](https://user-images.githubusercontent.com/102600434/170875451-34a376e2-d14f-48d5-b3b6-c3f79e3704d6.png)


2.	Saya juga melakukan hal yang sama seperti cara diatas dengan menggunakan kode header.php dan footer.php pada file index.php yang berada di dalam folder lab8_php_database seperti dibawah ini.
 ![image](https://user-images.githubusercontent.com/102600434/170875466-d0397b29-e3c6-4849-9dd3-e31c448ba5bc.png)


![image](https://user-images.githubusercontent.com/102600434/170875570-b7479152-bd83-4b14-91d9-8ade3113df38.png)


Lalu save dengan menggunakan shortcut keyboard CTRL+S, dan lihat hasilnya pada browser seperti ini.
![image](https://user-images.githubusercontent.com/102600434/170875581-1da1aede-9d96-4f49-b1ef-c4a0413ebb08.png)
 

3.	Kemudian lakukan dengan cara yang sama dengan mengcopy paste kode dari header.php dan footer.php dan masukkan ke dalam file tambah.php seperti berikut.
 ![image](https://user-images.githubusercontent.com/102600434/170875589-336d7d82-f9d3-40a5-abe8-caa371f7003b.png)


 ![image](https://user-images.githubusercontent.com/102600434/170875600-cf241c13-5de6-4926-858c-69c636dd0f68.png)
 

Lalu save dengan menggunakan shortcut keyboard CTRL+S, dan lihat hasilnya pada browser seperti ini.
![image](https://user-images.githubusercontent.com/102600434/170875612-d6ab59f1-a09d-4d78-b0f5-382446c7048a.png)
 

4.	Lalu lakukan cara yang sama juga seperti diatas untuk file ubah.php seperti dibawah ini.
![image](https://user-images.githubusercontent.com/102600434/170875631-f14a5362-3494-4675-9117-2371b189e338.png)


![image](https://user-images.githubusercontent.com/102600434/170875647-32bf6e6d-f226-4c96-898f-dfc1a0265dde.png)


Lalu save dengan menggunakan shortcut keyboard CTRL+S, dan lihat hasilnya pada browser seperti ini.
![image](https://user-images.githubusercontent.com/102600434/170875662-c5c1d82c-6731-4e9c-a0e2-11ffd9127a5a.png)
 

KESIMPULAN
Jadi, dalam penyusunan cara-cara membuat PHP Modular, mahasiswa diperuntukkan untuk mempelajarinya dan mempraktikannya serta mengetahui cara untuk mengimplementasikannya dengan file database PHP yang lain agar file tersebut bisa terintegrasi dengan template dari PHP Modular dan diharapkan mahasiswa untuk bisa memahaminya.


