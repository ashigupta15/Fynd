<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gla1";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$name=$_POST['n'];
$e_mail=$_POST['ed'];
$mobileno=$_POST['mn'];
$setapass=$_POST['sap'];

$sql="insert into registration(name,email,mobileno,password) values('$name','$e_mail','$mobileno','$setapass')";

if($conn->query($sql)==TRUE){
echo'<script type="text/javascript">
window.onload=function(){
alert("welcome to fynd");
window.location="index.html";
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
