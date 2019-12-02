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
    //alert box
    echo '<script type="text/javascript">';
echo ' alert("Account created successfully. You may login and you will receive an email notification. ")';  //not showing an alert box.
echo '</script>';
// redirect to login page
header( "refresh:1;url=../ui/login.php" ); 
// This is the mail function
$to = "$email";
    $subject = "Dressqo New Account";
    $txt = "Hello $username, thank you for joining DRESSQO. We are looking forward to having a good time with you. We will inform you of any updated that happen. You can also reset your password using email notifications you receive upon prompting the reset link <br> <br> Regards <br> DRESSQO";
    $headers = "From: accounts@dressqo.com" . "\r\n";

mail($to,$subject,$txt,$headers);
}else{
    echo "Account already exists";
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
} 


// Close connection 
$db->close();

?>