<?php
session_start();
$conn = new mysqli("localhost", "root", "", "pet adoption");

// check connection
if ($conn === false){
  die("ERROR: could not connect. " . $mysqli -> connect_error);
}
echo "Connected successfully";
$sql= "insert into Billing (firstname,email,address,cardname,cardnumber,expyear,cvv) values ('george','geolegacy2@gmail.com','15506','George Ruto','0123456789','2020','664')";
$query=mysqli_query($con,$sql);
if($query)
	echo 'Data inserted successfully'
$name = $conn->real_escape_string($_REQUEST['firstname']);
$mail = $conn->real_escape_string($_REQUEST['email']);
$address = $conn->real_escape_string($_REQUEST['address']);
$cardName = $conn->real_escape_string($_REQUEST['cardname']);
$cardNo = $conn->real_escape_string($_REQUEST['cardnumber']);
$ExpYear = $conn->real_escape_string($_REQUEST['expyear']);
$CVV = $conn->real_escape_string($_REQUEST['cvv']);

$query = "SELECT * FROM checkout WHERE Email='$mail'";
$result = mysqli_query($conn, $query);

if($result->num_rows > 0){//user found
    $logged_in_user = $result->fetch_assoc();
    if($logged_in_user['Email'] === $emailUser){

        $_SESSION['profName'] = $logged_in_user['Email'];
        $_SESSION['success'] = "You are now logged in";
        header('location: user/homepageUser.php');
    }
}

?>