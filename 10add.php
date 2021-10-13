<?php
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="tourism";
    if(isset($_POST['srno']))
    {
    $srno=$_POST['srno'];
    $tname=$_POST['tname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $place=$_POST['place'];
    $connection=new mysqli($server,$username,$password,$database);
    $mysql="INSERT INTo info VALUES($srno,'$tname','$email',$phone,'$place')";
    if($connection->query($mysql)===true){
        echo "Info Added successfully";
        header("Location: ./10index.php");
        exit();
    }
    else{
        echo $connection->error;
    }
    $connection->close();
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center bgc-light p-2 mb-4 text-muted">Fill information to add</h1>
            <div class="row">
                <div class="col-4 bg-light">
                    <form action="10add.php" method="POST">
                        <label class="form-label">Sr.no</label><input type="number" class="form-control" name="srno"></br>
                        <label class="form-label">Tourist Name</label><input type="text" class="form-control" name="tname"></br>
                        <label class="form-label">Tourist Email Id</label><input type="email" class="form-control" name="email"></br>
                        <label class="form-label">Tourist Phone Number</label><input type="phone" class="form-control" name="phone"></br>
                        <label class="form-label">Place</label><input type="text" class="form-control" name="place"></br>
                        <input type="submit" class="form-control btn btn-primay text-success fs-3" value="Add Information">
                    </form>
                </div>
                <div class="col-8">
                    <?php
                        $server="localhost:3306";
                        $username="root";
                        $password="";
                        $database="tourism";
                        $connect=new mysqli($server,$username,$password,$database);
                        $mysqlii="SELECT * FROM info";
                        $relt=$connect->query($mysqlii);
                    ?>
                    <table class="table table-striped">
                    <tr><td>Sr no</td><td>Tourist name</td><td>Tourist Email Id</td><td>Tourist Phone Number</td><td>Place</td></tr>
                    <?php
                        while($r=$relt->fetch_assoc()){
                            echo "<tr><td>".$r['srno']."</td><td>".$r['tname']."</td><td>".$r['email']."</td><td>".$r['phone']."</td><td>".$r['place']."</td></tr>";       
                        }
                    ?>
                    </table> 
                </div>
            </div>
        
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
