<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gla1";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
die('Could not connect:)'.my_sqli_error());
}

$name=$_POST['n'];
$setapass=$_POST['sap'];
$sql="SELECT * from registration where name='$name' and password='$setapass'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) {
while($row=mysqli_fetch_assoc($result)){
echo "name:" .$row['name'] . '<br />' ;
header("location:First Page.html");
}
}else{
echo'<script type="text/javascript">
window.onload=function(){
alert("ID OR PASSWORD INNCORECT");
window.location="index.html";
}
</script>';
}
mysqli_close($conn);
?>
</body>
</html>