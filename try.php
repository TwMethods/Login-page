
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

//$con->close();

session_start();
$query1 = "Select Username,Password from Users where Username = '$_POST[user]' and Password = '$_POST[pass]'";
if ($result = $con->query($query1)){
    $row = $result -> fetch_row();
        //printf("%s,%s\n",$row[0],$row[1]);
    }
if(!empty($row[0])&& !empty($row[1])){
    $_SESSION[0] = $row[1];
    echo"Success\n";
    $query = "Select * from Users,User_Information where Users.Username ='$_POST[user]' and  Users.UserID = User_Information.User_id";
    if($result1 = $con->query($query)){
        $row1 = $result1 -> fetch_row();
        printf("Name: %s, Surname: %s, Address: %s, Email: %s\n", $row1[7],$row1[8],$row1[3],$row1[5]);
    }
    
 }else{
    echo "Wrong username or password !";
}


?>

