<h1>Dokumentasi Projek Ulangan Tengah Semester Back End</h1>

Nama    : Anak Agung Gde Weida Ksatriawarma<br>
NIM     : 230010002<br>
Kelas   : DI231<br>



Projek ini saya awali dengan membuat struktur folder sesuai dengan intruksi dan menjalankan XAMPP, didalam XAMPP aktifkan apache dan juga sql, dan juga mengimport file database db_xyz, untuk struktur filenya akan seperti ini:

~~~
/uts-backend-webdev
|--public
|···|--index.php
|
|--src
|···|--Controller
|···|···|--CustomerController.php
|···|···|--SalesController.php
|···|···|--PurchaseController.php
|···|
|···|--Model
|···|···|--Customers.php
|···|···|--Sales.php
|···|···|--Purchases.php
|
|--config
|···|--database.php
~~~

<br>
Kemudian setelah saya membuat struktur folder tersebut, saya push ke repository github saya melalui terminal visual studio code saya. Berikut penjelasan dalam struktur folder tersebut:

~~~
=>> Folder public
Berisi index.php.
- index.php: berfungsi sebagai halaman untuk akses para pengguna, sesuai intruksi untuk saat ini hanya berisikan sebuah header.

=>> Folder src
Folder src berisi folder Controller dan juga Model.

=> Folder Controller
File Controller-controller ini bertugas mengelola operasi CRUD (Create, Read, Update, Delete) sesuai dengan bagian-bagiannya seperti Customer, Purchase dan juga Sales.
- CustomerController.php
- PurchaseController.php
- SalesController.php

=> Folder Model
- Customers.php:
File ini bertanggung jawab untuk mengeksekusi query berdasarkan informasi yang diterima dari Controller CustomerController.php.
- Purchases.php:
File ini bertanggung jawab untuk mengeksekusi query berdasarkan informasi yang diterima dari Controller PurchaseController.php. 
- Sales.php:
File ini bertanggung jawab untuk mengeksekusi query berdasarkan informasi yang diterima dari Controller SalesController.php.

=>> Folder Model
Berisi file database.php.
- database.php: Berfungsi  untuk konfigurasi hubungan ke database.
~~~

<br>
<h1>Refleksi Diri</h1>
<h3>Tantangan dan Kesulitan</h3>
Dalam projek ini saya mengalami beberapa kesulitan terutama pada membuat program yang sudah ditetapkan dalam struktur folder dan file pathnya, selain itu saya juga sedikit bingung di dalam function dan juga class OOP.

<h3>Solusi Cara Mengatasinya</h3>
Untuk mengatasi hal tersebut saya beberapa kali mencari beberapa sumber di internet, seperti course, youtube video, dan juga artikel/dokumentasi yang tersedia di internet.
