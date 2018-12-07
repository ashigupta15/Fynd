<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gla1";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die('Could not connect:)'.my_sqli_error());
}
$name1=$_POST['name'];
$email1=$_POST['email'];
$subject1=$_POST['subject'];
$message1=$_POST['message'];

$sql="insert into contact(name,email,subject,message) values('$name1','$email1','$subject1','$message1')";

if($conn->query($sql)==TRUE){
echo'<script type="text/javascript">
window.onload=function(){
alert("You will be contacted Soon...");
window.location="First Page.html";
}

</script>';
}
else{
echo "Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>
<html>
<head>
</head>
<body>
</body>
</html>
