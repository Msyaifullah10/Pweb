<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=divice-width",initial-sca]>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="bgambar">
        <nav class="navigasi">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="Galery.php">Galery</a></li>
                <li><a href="http://localhost/CobaPweb/form_upload.php">Upload Gambar</a></li>
            </ul>
        </nav>
            <header class="badan-utama"></header>
            <table>
                <center>
                <a href="https://web.facebook.com/ipul.brandal.39/"><img src="sosmed/Fb.png" width="50px;"></a>
                <a href="#"><img src="sosmed/Ig.png" width="50px;"></a>
                <a href="https://www.youtube.com/feed/my_videos"><img src="sosmed/Yt.png" width="50px;"></a>
                </center>
            </table>
        <footer>
            @Copyright 2020 || M.S
        </footer>
    </body>
</html>