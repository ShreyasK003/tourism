<?php
    $server="localhost:3306";
    $username="root";
    $password="";
    $database="tourism";
    if (isset($_POST['srno'])){
    $srn=$_POST['srno'];
    $tname=$_POST['tname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $place=$_POST['place'];
    $connect=new mysqli($server,$username,$password,$database);
    $query="UPDATE info set tname='$tname', email='$email', phone='$phone', place='$place' where srno=$srn";
    if($connect->query($query)===true){
        header("Location: ./10index.php");
        exit();
    }
    else{
        echo $connect->error;
    }
    $connect->close();
}

?>