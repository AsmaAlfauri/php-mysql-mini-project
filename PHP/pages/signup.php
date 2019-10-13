<?php
$server_name = "localhost";
$user_name = "root";
$password = "Password@123";
$my_DB = "my_DB";

//connect to database
$conn = mysqli_connect($server_name, $user_name, $password, $my_DB);
$s
//check the connection
if (!$conn) {
    echo "Connection error" . mysqli_connect_error();
}

if (isset($_POST['signup'])) {

    echo "fname" . $_POST['fname'];

    $fname = mysqli_real_escape_string($conn, $_POST('fname'));  // best practice
    $lname = $_POST('lname');
    $username = $_POST('username');
    $email = $_POST('email');
    $password = $_POST('password');

    echo $fname . "<br>";
    echo $lname . "<br>";
    echo $username . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";


//    $sql= "INSERT INTO login(fname, lname, username, email, password)
//                VALUES  ('$fname', '$lname', '$username', '$email', '$password')";


//    if ($conn->query($sql) === TRUE) {
//        echo "New record created successfully";
//
//        // save username in a variable to use it in the other page (home.php) // props
//        session_start();
//        $_SESSION['user'] =  $fname . " " . $lname;
//
//        echo "You are logged";
//        // redirect to home.php
//        header("Location: ./home.php");
//
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
}

$conn->close();
