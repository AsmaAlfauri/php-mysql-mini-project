<?php
$server_name = "localhost";
$user_name = "root";
$password = "Password@123";
$my_DB = "my_DB";

//connect to database
$conn = mysqli_connect($server_name, $user_name, $password, $my_DB);

//check the connection
if (!$conn) {
    echo "Connection error" . mysqli_connect_error();
} else {
    echo "connected to db... <br>";
}

var_dump(($_POST));
if (isset($_POST['signup'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);  // best practice
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO login(fname, lname, username, email, password)
                VALUES  ('$fname', '$lname', '$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

        // save username in a variable to use it in the other page (home.php) // props
        session_start();
        $_SESSION['user'] = $fname . " " . $lname;

        echo "You are logged";
        // redirect to home.php
        header("Location: ./home.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php include('../templates/header.php') ?>
<div id="signup">
    <h1>Sign Up for Free</h1>

    <form method="POST">

        <div class="top-row">
            <div class="field-wrap">
                <label>
                    First Name<span class="req">*</span>
                </label>
                <label>
                    <input type="text" name="fname" autocomplete="off"/>
                </label>
            </div>
            <div class="field-wrap">
                <label>
                    Last Name<span class="req">*</span>
                </label>
                <label>
                    <input name="lname" type="text" autocomplete="off"/>
                </label>
            </div>
            <div class="field-wrap">
                <label>
                    User Name<span class="req">*</span>
                </label>
                <label>
                </label>
                <input type="text" name="username" autocomplete="off"/>
            </div>
        </div>
        <div class="field-wrap">
            <label>
                Email Address<span class="req">*</span>
            </label>
            <label>
                <input type="email" name="email" autocomplete="off"/>
            </label>
        </div>
        <div class="field-wrap">
            <label>
                Set A Password<span class="req">*</span>
            </label>
            <label>
                <input type="password" name="password" autocomplete="off"/>
            </label>
        </div>
        <button name="signup" type="submit" class="button button-block">SIGN-UP</button>
    </form>
</div>

<?php //echo $fname . " hello  " . $lname; ?>

<?php include('../templates/footer.php') ?>
