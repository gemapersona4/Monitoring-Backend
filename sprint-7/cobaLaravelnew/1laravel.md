BISMILLAHIRRAHMANIIRAHIIM

15 Maret 2020
Mas David
Sprint-7 
Perkenalan Framework Laravel

1. cd Desktop
2. composer create-project --prefer-dist laravel/laravel:^7.24 belajar-laravel
3. buat database CREATE DATABASE belajarLaravel
4. edit file .env di folder belajar-laravel, ganti jadi seperti di bawah,
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=belajarLaravel
    DB_USERNAME=gema
    DB_PASSWORD=gemapersona4
5. cek php artisan serve
6. kalo ada error ketika install problem.....
    install plugin sudo php7.4-mbstring php7.4-bcmath

----------- hapus direktori kosong rmdir, kalo ada isinya kan ga bisa, pake rm, rm buat hapus file, bisa juga hapus direktori pake rm -r => recursive(semua yang di dalam dihancurin)
            kalo langsung di enter ada pop up konfirmasi, rm -r -rf => tanpa pop-up konfimarsi dan langsung dihapus

7. laravel hanya bisa dipakai di satu project
8. kalo mau buat project baru install lagi
    composer create-project --prefer-dist laravel/laravel:^7.24 belajar-laravel

    ini untuk install laravel terbaru
    composer create-project --prefer-dist laravel/laravel belajar-laravel

    laravel/laravel => vendor/package_name
9. php artisan down, setelah itu php artisan serve => itu untuk down server 503|unavailable => buat maintenance
10. balikinnya php artisan up, setelah itu php artisan serve
11. api.php untuk penghubung route API 
12. channels.php aplikasi fitur chat, nah ini buat fitur khusus
13. web.phpuntuk routekan web biasa
00. callback function => pengembalian nilai
00. buat controller baru
     php artisan make:controller HelloController
00. Universal Resource Identifier (URI)
00. Uniform Resource Locator (URL)
00. laravel 7 pake bootstrap
00  ketika ingin membuat laravel yang dia baca .blade-nya

