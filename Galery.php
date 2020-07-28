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

    <link href="responsive.css" rel="stylesheet">
    </head>
    <body class="bgambar">
        <nav class="navigasi">
            <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a href="Galery.php">Galery</a></li>
                <li><a class="active" href="http://localhost/CobaPweb/form_upload.php">Upload Gambar</a></li>
            </ul>
        </nav>
        <section>
            <div>
                <div class=slider>
                    <div class=isi-slider>
                        <img src="image/gambar10.jpg">
                        <img src="image/gambar9.jpg">
                        <img src="image/gambar8.jpg">
                        <img src="image/gambar7.jpg">

                <?php
                include('koneksi.php');
                $query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
                foreach ($query as $row) {
                    echo "<img src='image/".$row['nama_gambar']."'' alt='2k19'>";
                }


                ?>
                        
                    </div>
                </div>

                <?php
                include('koneksi.php');
                $query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
                foreach ($query as $row) {
                    echo "<img src='image/".$row['nama_gambar']."'' alt='2k19' width='250' height='200'>";
                }

                ?>
                <tr>
                    <td>
                        <a class="tombol" href="delete_gambar.php?id=<?php echo $row['nama_gambar'] ?>">Delete</a>
                    </td>
                </tr>
            </div>
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