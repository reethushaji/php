<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="wtl";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
/*$sql = "CREATE DATABASE wtlnew";
$sql = "CREATE TABLE student(
    id int(5) PRIMARY KEY,
    name varchar(20),
    age int(5))";
    


$sql = "INSERT INTO student VALUES(1,'ria',23);";
$sql .= "INSERT INTO student VALUES(2,'ann',22);";
$sql .= "INSERT INTO student VALUES(3,'ron',20);";
$sql .= "INSERT INTO student VALUES(4,'emiline',23);";
*/

$sql="UPDATE student Set name='dilijit' where id=4";
if($conn->multi_query($sql)==TRUE){
    try{
        throw new Exception("Already exists");
        }
        catch(Exception $e){
            echo $e-> getMessage();
        }
}else{
    echo "Database not created";
}
/*if ($conn->query($sql) === TRUE) {
  echo "Rows inserted successfully";
} else {
  echo "Error inserting: " . $conn->error;
}*/

$conn->close();
?>

