<?php
$dbhost="localhost";
$dbuser="root";
$dbpassword= "";
$db= "trial";

$con= mysqli_connect('localhost','root','','trial');
if (!$con){
 	die("Connection failed: %s\n" .$connect->error );

 }
 else{
 
// echo"Database connected successfully";

}
if (isset($_POST['age'])) {

	//var_dump($_POST);
	//die();
$txtidnum=    $_POST['idnum'];
$txtfname=    $_POST['firstname'];
$txtlname=    $_POST['lastname'];
$txtage=      $_POST['age'];
$txtgender=   $_POST['gender'];
$txtemail=    $_POST['email'];
$txtnumber=   $_POST['phone'];
$txtlocation= $_POST['location'];


/*$sql= "INSERT INTO 'contact'('idnum','fname','lname', 'age','gender','email','number','location')
 values('$txtidnum','$txtfname','$txtlname','$txtage,'$txtgender','$txtemail','$txtnumber','$txtlocation')";*/

$sql= "INSERT INTO `contact`(`idnum`, `fname`, `lname`, `age`, `gender`, `email`, `number`, `location`) 
		VALUES ('$txtidnum','$txtfname','$txtlname','$txtage','$txtgender','$txtemail','$txtnumber','$txtlocation')";

$rs = mysqli_query($con, $sql);
if($rs)
{
	//echo "Contact Records Inserted";

	header('location:index.php');
}
else{
	echo "errpr while pocwssing";
}

}
else{
	echo "enter correct values";
}
