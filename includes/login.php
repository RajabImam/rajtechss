<?php include "connection.php"; ?>
<?php session_start(); ?>

<?php

if (isset($_POST['login'])) {
	 $email = $_POST['email'];
	 $password = $_POST['pwd'];

$email = mysqli_real_escape_string($connection, $email);
$password = mysqli_real_escape_string($connection, $password);


$query = "SELECT * FROM users WHERE email = '{$email}' ";
$select_user_query = mysqli_query($connection,$query);

if (!$select_user_query) {
	die("QUERY FAILED" .mysqli_error($connection));
}

while ($row = mysqli_fetch_array($select_user_query)) {
	
	$id = $row['id'];
	$user_name = $row['name'];
	$user_email = $row['email'];
	$user_password = $row['password'];
	$user_address = $row['address'];
	$user_role = $row['role'];

}

$password = crypt($password, $user_password);

if ($email !== $user_email && $password !== $user_password) {
	
	header("Location: ../index.php ");

} else if ($email == $user_email && $password == $user_password) {

	$_SESSION['email'] = $user_email;
	$_SESSION['name'] = $user_name;
	$_SESSION['role'] = $user_role;
	$_SESSION['address'] = $user_address;


	header("Location: ../order.php");

} else {

	header("Location: ../index.php");
}



}





?>