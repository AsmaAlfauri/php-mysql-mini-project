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
}
$fname=$_POST('fname');
$lname=$_POST('lname');
$username=$_POST('username');
$email=$_POST('email');
$password=$_POST('password');

$sql = "INSERT INTO login (fname, lname,username, email,password)
VALUES ('$fname', '$lname', '$username','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php include('../templates/header.php') ?>

<!--<div class="tab-content">-->
    <div id="signup">
        <h1>Sign Up for Free</h1>

        <form action="home.php" method="post">

            <div class="top-row">
                <div class="field-wrap">
                    <label>
                        First Name<span class="req">*</span>
                    </label>
                    <label>
                        <input type="text"   name="fname" required autocomplete="off" />
                    </label>
                </div>

                <div class="field-wrap">
                    <label>
                        Last Name<span class="req">*</span>
                    </label>
                    <label>
                        <input   name="lname"   type="text"required autocomplete="off"/>
                    </label>
                </div>
                <div class="field-wrap">
                    <label>
                        User Name<span class="req">*</span>
                    </label>
                    <label>
                        <input type="text"  name="userName" required autocomplete="off"/>
                    </label>
                </div>
            </div>

            <div class="field-wrap">
                <label>
                    Email Address<span class="req">*</span>
                </label>
                <label>
                    <input type="email" name="email" required autocomplete="off"/>
                </label>
            </div>

            <div class="field-wrap">
                <label>
                    Set A Password<span class="req">*</span>
                </label>
                <label>
                    <input type="password" name="password" required autocomplete="off"/>
                </label>
            </div>

         <button type="submit" class="button button-block">Get Started</button>
        </form>
    </div>
<?php include('../templates/footer.php') ?>
