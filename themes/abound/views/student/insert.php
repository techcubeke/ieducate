<?php
$con=mysqli_connect("localhost","root","root","sc");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$studentID = mysqli_real_escape_string($con, $_POST['studentID']);
$academicsessionID = mysqli_real_escape_string($con, $_POST['academicsessionID']);
$classID = mysqli_real_escape_string($con, $_POST['classID']);
$dormID = mysqli_real_escape_string($con, $_POST['dormID']);
$adminno = mysqli_real_escape_string($con, $_POST['adminno']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$middlename = mysqli_real_escape_string($con, $_POST['middlename']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$dateofbirth = mysqli_real_escape_string($con, $_POST['dateofbirth']);
$citizenship = mysqli_real_escape_string($con, $_POST['citizenship']);
$parentname = mysqli_real_escape_string($con, $_POST['parentname']);
$photoimage = mysqli_real_escape_string($con, $_POST['photoimage']);
$emergencynumber = mysqli_real_escape_string($con, $_POST['emergencynumber']);
$postaladress = mysqli_real_escape_string($con, $_POST['postaladress']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$admindate = mysqli_real_escape_string($con, $_POST['admindate']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$religion = mysqli_real_escape_string($con, $_POST['religion']);

$sql="INSERT INTO student (studentID, academicsessionID, classID,dormID,adminno,firstname,middlename,lastname,dateofbirth,citizenship,parentname,photoimage,emergencynumber,postaladress,email,admindate,gender,religion)
VALUES ('$studentID','$academicsessionID','$classID','$dormID','$adminno','$firstname' ,'$middlename','$lastname', '$dateofbirth','$citizenship','$parentname','$photoimage','$emergencynumber','$postaladress','$email','$admindate','$gender','$religion')";

if (!mysqli_query($con,$sql)) {
	die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>