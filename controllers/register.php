<?php 
// Include connection file
include 'connection.php';

//signup or register code 

//Inserting signup info into database

// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['passw']);
 
// Attempt insert query execution
$sql = "INSERT INTO users_table (username, password, email) VALUES ('$username', '$email', '$password')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} 


// Close connection
$conn->close();

?>