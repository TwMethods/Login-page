
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

/*
$ID = $_POST['user'];
$Password = $_POST['password'];
*/
echo $_POST;
function SignIn(){
echo "kor";
session_start();
if(!empty($_POST['user'])){
	$query = mysql_query("SELECT * FROM Users where  Username = '$_POST[user]' AND password = '$_POST[Password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
if(!empty($row['Username']) AND !empty($row['Password'])) {
	$_SESSION['Username'] = $row['Password'];
	echo "SUCCESS!"


}else{
	echo "Sorry"
}
}
}
if(isset($_POST['submit'])){
	SignIn();
}


?>
