<?php
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="tourism";
    $srno=$_GET['id'];
    $connection=new mysqli($server,$username,$password,$database);
    $mysqli="SELECT * FROM info WHERE srno=$srno";
    $result=$connection->query($mysqli);
    if($rows=$result->fetch_assoc()){
        $id = $rows['srno'];
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <h1 class="text-center mb-2 p-3 bg-light" style="font-family: poppins">Edit Information</h1>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <form action="10edit.php" method="POST">
                        <label class="form-label">Sr.no</label><input type="number" class="form-control" value="<?php echo $id ?>" name="srno"></br>
                        <label class="form-label">Tourist Name</label><input type="text" class="form-control" value="<?php echo $rows['tname']; ?>" name="tname"></br>
                        <label class="form-label">Tourist Email Id</label><input type="email" class="form-control" value="<?php echo $rows['email']; ?>" name="email"></br>
                        <label class="form-label">Tourist Phone Number</label><input type="phone" class="form-control" value="<?php echo $rows['phone']; ?>" name="phone"></br>
                        <label class="form-label">Place</label><input type="text" class="form-control" value="<?php echo $rows['place']; ?>" name="place"></br>
                        <input type="submit" class="form-control btn btn-primay text-success fs-3" value="Edit Information">
                    </form>
                </div>
                <div class="col-8">
                    <div class="img float-end 25%">
                        <img src="./images/illustration1.jpg" style="width:600px; height:600px">
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
<?php
    }
    $connection->close();
?>











