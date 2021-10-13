<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <!-- <img src="./image/illustration2.jpg"> -->
        <h1 class="text-center bg-light p-3 mb-5 text-muted">Tourism Site</h1>
        <div class="container">
            <div class="row">
            <div class="container col-4 bg-light">
                <h3>Click form following as per your choice</h3>
                <ul style="list-style-type: none;" class="lh-lg fs-3">
                    <li style="font-family: poppins;"><a class="text-decoration-none" href="./10add.php">Add Information</a></li>
                    <li style="font-family: poppins;"><a class="text-decoration-none" href="./10delete.php">Delete Information</a></li>
                </ul>
            </div>
            <div class="container col-8">
                <?php
                    $server="localhost:3306";
                    $username="root";
                    $password="";
                    $database="tourism";
                    $connection=new mysqli($server,$username,$password,$database);
                    $mysql="SELECT * FROM info";
                    $result=$connection->query($mysql);
                ?>
                <table class="table table-striped">
                    <tr><td>Sr.no</td><td>Tourist name</td><td>Email Id</td><td>Phone Number</td><td>Place</td><td>Edit</td></tr>
                <?php
                    while($row=$result->fetch_assoc()){
                        $id=$row['srno'];
                        echo "<tr><td>".$id."</td><td>".$row['tname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['place']."</td><td><a class='text-decoration-none' href='10edit-form.php?id=$id'>Edit Record</a></td></tr>";
                    }
                ?>
                </table>
            </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>