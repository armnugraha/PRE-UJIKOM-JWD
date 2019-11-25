<!--*
    * @Author Arman Nugraha
    * JWD
    * Since 20 November 2019
    * Tugas Simulasi Uji Kompetensi
    * buat db sekolah dan tabel siswa dg kolom: id, nis, nama, alamat, tgl_lahir
    * buat app untuk crud
    * terdapat fitur search berdasarkan nis dan nama
    * seluruh input harus tervalidasi dan tidak boleh kosong
    *-->

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Pendidikan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!-- END META SECTION -->

        <style type="text/css">
            #tb-siswa {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #tb-siswa td, #tb-siswa th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #tb-siswa tr:nth-child(even){background-color: #f2f2f2;}

            #tb-siswa tr:hover {background-color: #ddd;}

            #tb-siswa th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>

    <body>

        <p>
            <a href="index.php">Home</a>
            <a href="index.php?page=views/home/create">Tambah Data</a>
        </p>