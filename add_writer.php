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
            <h2>Form New Writer</h2>
        </div>
        <a class="btn btn-secondary" href="index.php" role="button">Go Back</a> <br><br>
        <div class="container-fluid">
            <form action="add_writer.php" method="POST" name="form_writer">
                <div class="form-group">
                  <label for="formGroupExampleInput">Nama</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="name">
                </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Address</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="address">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="mx-auto" style="width: 200px;">
                <button type="submit" class="btn btn-primary" name="Submit">Submit</button>
              </div>      
            </form>
            <?php
                //Insert Data dan Dicheck
                if(isset($_POST['Submit'])){
                    $name = $_POST['name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                //Include Data base dan config
                include("config.php");
                //
                $result = mysqli_query($mysqli, "INSERT INTO writer_tb(name,address,email) VALUES ('$name','$address','$email')");

                //Message
                echo "Writer Added Succesfully. <a href='index.php'>View Data Buku</a>";
                }
            ?>
        </div>
        <script type="text/js" src="js/bootstrap.min.js" ></script>
    </body>
</html>