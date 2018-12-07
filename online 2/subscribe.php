<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gla1";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die('Could not connect:)'.my_sqli_error());
}
$subscribe=$_POST['sub'];

$sql="insert into subscribed(email) values('$subscribe')";

if($conn->query($sql)==TRUE){
echo'<script type="text/javascript">
window.onload=function(){
alert("You are now Subscribed");
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
