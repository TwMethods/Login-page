<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="monika95";
$dbname="Users";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

if ($con->connect_errno){
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['user'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "INSERT INTO Users VALUES ('NULL','$username','$pass')";
$query1 = "INSERT INTO User_Information VALUES('$address','$dob','$email','NULL','$name','$surname')";

$insert = $con->query($query);
$insert1 = $con->query($query1);

if($insert && $insert1){
    echo "Your registration is completed";

}else{echo "fail";}

?>
<html>
    <a href = "login.html"> Log In</a>

</html>