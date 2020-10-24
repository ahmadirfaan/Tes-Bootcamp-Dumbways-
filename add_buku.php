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
        <div class="mx-auto" style="width: 400px;">
            <h2>Form New Book</h2>
        </div>
        <a class="btn btn-secondary" href="index.php" role="button">Go Back</a> <br><br>
        <div class="container-fluid">
            <form method="POST" name="form_category">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="name">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Category Id</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="categoryId">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput">Writer Id</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="writerId">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Tahun Publikasi</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tahun Publikasi" name="publication">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Gambar Buku</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                </div>
                <div class="mx-auto" style="width: 200px;">
                  <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
                </div>
            </form>
            <?php
                //Insert Data dan Dicheck
                if(isset($_POST['Submit'])){
                    $name = $_POST['name'];
                    $categoryId = $_POST['categoryId'];
                    $writerId = $_POST['writerId'];
                    $publication = $_POST['publication'];
                    $gambar = $_POST['gambar'];
                //Include Data base dan config
                include("config.php");
                //
                $result = mysqli_query($mysqli, "INSERT INTO book_tb(name,category_id,writer_id,publication_year,img) 
                VALUES ('$name','$categoryId','$writerId','$publication', '$gambar')");

                //Message
                echo "Writer Added Succesfully. <a href='index.php'>View Data Buku</a>";
                }
            ?>
        </div>
        <script type="text/js" src="js/bootstrap.min.js" ></script>
    </body>
</html>