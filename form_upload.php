<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        if ($file_size < 2048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $keterangan = $_POST['keterangan'];
            mysqli_query($koneksi,"insert into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$image','$file_name','$file_type','$file_size','$keterangan')");
            header("location:Galery.php");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuruan File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>
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
        <link rel="stylesheet" type="text/css" href="styleslide.css">
    </head>
    <body class="bgambar">
        <nav class="navigasi">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="galery.php">Galery</a></li>
                <li><a class="active" href="http://localhost/CobaPweb/form_upload.php">Upload Gambar</a></li>
            </ul>
        </nav>
        <section class="background-color">
        <form method="post" action="" enctype="multipart/form-data">
            <center>
        <table>
            <tr>
                <td><b style="color: white">Gambar</b></td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td><b style="color: white">Keterangan</b></td>
                <td><textarea name="keterangan" class="garis-tepi"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol" class="tombol" /></td>
            </tr>
        </table>
        </center>
        </form>
        </section>
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
<html>