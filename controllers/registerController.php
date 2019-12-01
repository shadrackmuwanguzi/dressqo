<?php 
// Include connection file
include("dbconfig.php");

//signup or register code 

//Inserting signup info into database

// Escape user inputs for security
$username = mysqli_real_escape_string($db, $_REQUEST['uname']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);
$password = mysqli_real_escape_string($db, $_REQUEST['passw']);
 
// Attempt insert query execution
$sql = "INSERT INTO users_table (username, passcode, email) VALUES ('$username', '$email', '$password')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
} 

// Close connection 
$db->close();

?>