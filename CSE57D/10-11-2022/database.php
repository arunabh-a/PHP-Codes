<?php
// $database="Company";
$conn=mysqli_connect("localhost","root","");
if(!conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "connection successful";
$sql="CREATE DATABASE Company";
if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "ERROR: could not able to execute $sql.".mysqli_error($conn);
}
mysqli_close($conn);
?>