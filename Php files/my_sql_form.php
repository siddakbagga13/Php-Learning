<?php 
$hostname = "localhost";
$userid = "root";
$pass = "siddaksk";
$dbname = "test";
$conn = new mysqli($hostname,$userid,$pass,$dbname);

if(!$conn){
    echo "error in getting connection";
}
else{
    echo "connection successfull";
}
echo "<br>";

$uname='arun';
$password='arun';
$sql = " select *
from persons 
where FirstName = '$uname'
and Password = '$password'";

$result = mysqli_query($conn,$sql);
$count = mysqli_num_rows($result);
echo "Number of rows = " . $count;
echo "<br>";

?>