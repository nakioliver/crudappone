<?php
define("hostname","localhost");
define("username","root");
define("password","");
define("database","crudone");

// creating a connection to the database
$conn = mysqli_connect(hostname,username,password,database);
// checking for connection
if(!$conn){
    echo"connection failed";
}
// else{
//     echo"connection made";
// }


?>