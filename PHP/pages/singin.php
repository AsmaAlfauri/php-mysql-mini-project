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

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SELECT * FROM login WHERE email = 'dsl@dl.com' AND password = 'Password@123';
    // SELECT * FROM login WHERE email = 'dsadf@shd.com' AND password = 'Password@123';

    $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["fname"] . " " . $row["lname"] . "<br>";

            // save username in a variable to use it in the other page (home.php) // props
            session_start();
            $_SESSION['user'] =  $row["fname"] . " " . $row["lname"];

            echo "You are logged";
            // redirect to home.php
            header("Location: ./home.php");
        }
    } else {
        echo "email and password do not match";
    }
}
?>


<?php include('../templates/header.php') ?>
    <div id="login">
        <h1>Welcome Back!</h1>
        <form method="post">
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
                    Password<span class="req">*</span>
                </label>
                <label>
                    <input type="password" name="password" required autocomplete="off"/>
                </label>
            </div>
            <button type="submit" name="login" class="button button-block">Log In</button>
        </form>
    </div>
<?php include('../templates/footer.php') ?>