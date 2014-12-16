<?php
/*/ Database connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Get values from form
//$name=$_POST['name'];

$varName0 = $_POST['name1'];
$varName1 = $_POST['intro'];
$varname2 = $_POST['name2'];
$varname3 = $_POST['name3'];
$varname4 = $_POST['name4'];
$varname5 = $_POST['txtPhone'];
$varname6 = $_POST['txtMobile'];

$sql = "INSERT INTO Intitute_registration_detail (institute_name, Intro_text, Coordinator_name, coordinator_desig, coordinator_email,  	coordinator_phone, coordinator_mobile) VALUES ('$varName0', '$varName1', '$varname2', '$varname3', '$varname4', '$varname5', '$varname6')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
$errorMessage = "";

$varMovie = $_POST['name1'];
$varName = $_POST['intro'];
$varname2 = $_POST['name2'];
$varname3 = $_POST['name3'];
$varname4 = $_POST['name4'];
$varname5 = $_POST['txtPhone'];
$varname6 = $_POST['txtMobile'];

$varName7 = $_POST['course_id'];
$varname8 = $_POST['course_uni'];
$varname9 = $_POST['course_title'];
$varname11 = $_POST['birthday'];
$varname12 = $_POST['birthday1'];
$varname13 = $_POST['co_des'];
$varname14 = $_POST['PE'];
$varname15 = $_POST['BCD'];

$varname16 = $_POST['course_fa'];
$varname17 = $_POST['course_title1'];
$varname18 = $_POST['CFB'];
$varname19 = $_POST['faq'];
$varname20 = $_POST['co_name'];
$varname21 = $_POST['BCD1'];





	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$varMovie . ", " . $varName . ", " . $varname2 . ", " . $varname3 . ", " . $varname4 . 
", " . $varname5 . ", " . $varname6 . ", " . $varName7 . ", " . $varname8 . ", " . $varname9 . ", " . $varname10 . 
", " . $varname11 . ", " . $varName12 . ", " . $varname13 . ", " . $varname14 . ", " . $varname15 . ", " . $varname16 . 
", " . $varName17 . ", " . $varname18 . ", " . $varname19 . ", " . $varname20 . ", " . $varname21 . "\n");
		fclose($fs);
		
		//header("Location: thankyou.html");
		//exit;
	}

/*
$uploaddir = '/var/www/phpfile/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile1 = $uploaddir . basename($_FILES['userfile1']['name']);

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "Data inserted successfully\n";
} else {
   echo "Upload failed";
}

if (move_uploaded_file($_FILES['userfile1']['tmp_name'], $uploadfile1)) {
  echo "...\n";
} else {
   echo "Upload failed";*/
}
header("Location: page1.php");

?> 

