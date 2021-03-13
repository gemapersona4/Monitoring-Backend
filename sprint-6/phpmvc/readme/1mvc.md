MVC(salah satu tujuan) => Memisahkan antara tampilan data dan proses. 

 MVC =>  
"Pola arsitektur pada perancangan perangkat lunak berorientasi objek."


kurang baik menyimpan semua code di satu file(kayak procedural di php dasar),
di mvc akan menjadi 3 komponen utama

MVC => Model(Data), View(Tampilan), Controller(Proses)

controller adalah komponen utama

kenapa mvc?

1. Organisasi dan struktur kode
   maksudnya organisasi, tempat menyimpan file atau struktur kode
2. Pemisahan logic dan tampilan
3. Perawatan Kode
   mempermudah maintenance kode
4. Implementasi konsep OOP yang sudah dipelajari
5. Digunakan oleh banyak Web Application Framework
   Framework MVC
        1. PHP => CodeIgniter, Laravel, Yii, Symfony, cakePHP, dll
        2. Java => Spring MVC, JSF, Struts, dll
        3. Python => Django, CherryPy, dll
        4. Ruby => Ruby on Rails, Sinatra, dll
        5. Javascript => AngularJS, React, Backbone.js, dll

apa yang akan kita buat?	
MVC SEDERHANA (tujuan tau cara implementasi mvc-nya)

1.  waktu buka folder MVC, halaman menampilkan "Controller default" yang memanggil
    "method default", controller default "home", method default "index"
2.  ada htaccess untuk mengelola request yang dikirim via url
3.  kalo dipencet sembarang di url artinya program akan mencari controller yang 
    namanya dipencet ada ga diprogram kita, kalo ga ada ke controller default
4.  kalo controller ada, tapi method juga ga ada, dipanggil method default
5.  kalo controller ada, method lain ada, maka akan ditampilkan isi method cobanya 
6.  kalo controller lain ada, method ga ada, maka akan ditampilkan method dari 
    controller default tersebut
7.  kalo controller ada, method ada, tinggal tampilin view yang akan ditampilin
8.  keren juga, kita bisa kirim data(parameter) ke method yang dipanggil
9.  kalo kita ga kirim parameter, maka yang dikirim parameter default
    (Sandhika, Dosen)
10. sekarang jadi (Erik, Gamer)
11. kalo punya controller baru contoh mahasiswa, punya method get, terus parameternya 
    10 bisa aja nanti mahasiswa yang tampil adalah id mahasiswa

MVC
1. Model
    1.1 Representasi Pengetahuan
    2.2 Mengelola Data
    2.3 Logika Bisnis
2. View
    2.1 Output, apa yang dilihat oleh user
    2.2 Representasi visual dari model
    2.3 Lapisan Presentasi
3. Controller 
    3.1 Perantara antara model dan view
    3.2 Menangani pemrosesan pada aplikasi
    3.3 Menangani aksi dari user
    
ini komponen dasar, framework yang menerapkan mvc sebenernya punya arsitektur yang 
lebih kompleks

APPLICATION FLOW PADA CODEIGNITER
CI => index.php => Routing (controller mana yang diakses) => security(membersihkan 
request yang dikirimkan routing(sesuatu yang jahat), kalo aman lanjut) => application 
controller(apakah saya butuh model, library, dll) => view(view mana yang digunakan) => 
caching(aplikasi jadi lebih cepat kalo data sudah dikirim dengan cepat)=> index.php 
(user lagi).

APPLICATION FLOW YANG AKAN KITA BUAT
index.php => routing(request yang bertanggung jawab yang mana) => controller => models 
=> controller => view => index.php
