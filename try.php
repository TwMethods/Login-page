
<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="monika95";
$dbname="Users";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

if(!empty($_POST['user'])){

echo "kor";
}


$query1 = "Select Username from Users";
if ($stmt = $con->prepare($query1)) {
    $stmt->execute();
    $stmt->bind_result($Username);
    while ($stmt->fetch()) {
        printf("%s\n", $Username);
    }
    $stmt->close();
}


?>

