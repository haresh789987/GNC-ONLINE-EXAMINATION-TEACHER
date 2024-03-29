<?php
// Start a session
session_start();
include "conn.php";
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password are valid
if ($username == 'bca123' && $password == 'bca123@') {
    // Set the user role to admin
    $_SESSION['department'] = 'bca';

    // Redirect to the admin page
    header('Location: bca.php');
} elseif ($username == 'bsccs123' && $password == 'bsccs123@') {
    // Set the user role to user
    $_SESSION['department'] = 'bsccs';

    // Redirect to the user page
    header('Location: bsccs.php');
} 

elseif ($username == 'bscit123' && $password == 'bscit123@') {
    // Set the user role to user
    $_SESSION['department'] = 'bscit';

    // Redirect to the user page
    header('Location: bscit.php');
} 
elseif ($username == 'bscda123' && $password == 'bscda123@') {
    // Set the user role to user
    $_SESSION['department'] = 'bscda';

    // Redirect to the user page
    header('Location: bscda.php');
} 


elseif ($username == 'bcomism123' && $password == 'bcomism123@') {
    // Set the user role to user
    $_SESSION['department'] = 'bcomism123@';

    // Redirect to the user page
    header('Location: bcomism.php');
} 


elseif ($username == 'bcomca123' && $password == 'bcomca123@') {
    // Set the user role to user
    $_SESSION['department'] = 'bcomca';

    // Redirect to the user page
    header('Location: bcomca.php');
} 




else {
    // Display an error message
    echo 'Invalid username or password.';
}
?>