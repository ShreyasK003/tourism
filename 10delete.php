<?php
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="tourism";
    if(isset($_POST['srno']))
    {
    $srno=$_POST['srno'];
    $connection=new mysqli($server,$username,$password,$database);
    $mysql="DELETE FROm info WHERE srno=$srno";
    if($connection->query($mysql)===true){
        echo "Info deleted successfully";
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
            <h1>Fill information to delete</h1>
            <div class="row">
                <div class="col-4 bg-light">
                <!-- <?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> -->
                <!-- <?php echo phpversion(); ?>
                <?php echo $_SERVER['PHP_SELF']; ?> -->
                
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <label class="form-label">Sr.no</label><input type="number" class="form-control" name="srno"></br>
                        <input type="submit" class="form-control btn btn-primay text-success fs-3" value="Delete Information">
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
