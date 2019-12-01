<?php 
// Include connection file
include("dbconfig.php");

//signup or register code 

//Inserting signup info into database

// Escape user inputs for security
$username = mysqli_real_escape_string($db, $_REQUEST['uname']);
$password = mysqli_real_escape_string($db, $_REQUEST['passw']);
$email = mysqli_real_escape_string($db, $_REQUEST['email']);

 
// Attempt insert query execution
$sql = "INSERT INTO users_table (username, passcode, email) VALUES ('$username', '$password', '$email')";
if(mysqli_query($db, $sql)){
    header("Location: ../ui/login.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
} 


// Close connection 
$db->close();

?>