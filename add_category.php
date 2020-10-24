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
            <h2>Form New Category</h2>
        </div>
        <a class="btn btn-secondary" href="index.php" role="button">Go Back</a> <br><br>
        <div class="container-fluid">
            <form action="add_category.php" method="POST" name="form_category">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama Kategori</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="name">
                </div>
                <div class="mx-auto" style="width: 200px;">
                    <button type="Submit" class="btn btn-primary" value="add_category" name="Submit">Submit</button>
                </div>    
            </form>
            <?php
                //Insert Data dan Dicheck
                if(isset($_POST['Submit'])){
                    $name = $_POST['name'];

                //Include Data base dan config
                include("config.php");
                //
                $result = mysqli_query($mysqli, "INSERT INTO category_tb(name) VALUES ('$name')");

                //Message
                echo "Category Added Succesfully. <a href='index.php'>View Data Buku</a>";
                }
            ?>      
        </div>
        <script type="text/js" src="js/bootstrap.min.js" ></script>
    </body>
</html>