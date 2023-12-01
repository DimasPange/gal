<?php
    if(isset($_GET['url'])){
        switch($_GET['url'])
        {
            case 'tambah_foto';
            include 'tambah_foto.php';
            break;

            case 'lihat_foto';
            include 'lihat_foto.php';
            break;

            case 'detail_foto';
            include 'detail_foto.php';
            break;

            case 'lihat_galeri';
            include 'galeri.php';
            break;

            case 'hapus_foto';
            include 'hapus_foto.php';
            break;

            case 'edit_foto';
            include 'edit_foto.php';
            break;


            default:
                echo "Halaman Tidak Ditemukan";
                break;
            
        }
    }

    else{
       echo "Selamat Datang Di Aplikasi Galeri Foto, Dimana Aplikasi ini dibuat untuk melihat tindakan yang menyimpung dari ketentuan.<br>";
       echo "Anda Login Sebagai : " .$_SESSION['nama'];
    }
