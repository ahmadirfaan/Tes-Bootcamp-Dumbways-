<?php

include("config.php");
$result = mysqli_query($mysqli,"SELECT b.name as judul_buku,
c.name as kategori, w.name as penulis, b.publication_year as tahun_terbit, b.img as gambar
from book_tb as b
join category_tb as c
on b.category_id = c.id
join writer_tb as w
on b.writer_id = w.id
ORDER BY b.name");


?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">        
        <title>Add New Book</title>
    </head>
    <body>
        <a class="btn btn-primary" href="add_buku.php" role="button">Add New Book</a>
        <a class="btn btn-primary" href="add_category.php" role="button">Add New Category</a>
        <a class="btn btn-primary" href="add_writer.php" role="button">Add New Writer</a>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Judul Buku</th>
                <th scope="col">Kategori</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Gambar</th>
              </tr>
            </tbody>
            <?php
                while($buku_data = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" .$buku_data['judul_buku']. "</td>";
                echo "<td>" .$buku_data['kategori']. "</td>";
                echo "<td>" .$buku_data['penulis']. "</td>";
                echo "<td>" .$buku_data['tahun_terbit']. "</td>";
                echo "<td>" .$buku_data['gambar']. "</td>";
                echo "</tr>";
            }

            ?>
          </table>
        <script type="text/js" src="js/bootstrap.min.js" ></script>
    </body>
</html>