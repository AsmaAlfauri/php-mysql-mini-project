<?php
/*$server_name="localhost";
$user_name="root";
$password="Password@123";
$my_DB="my_DB";

//connect to database
$conn= mysqli_connect($server_name,$user_name,$password,$my_DB);

//check the connection

if(!$conn){
    echo  "Connection error". mysqli_connect_error();
}

// write query for all data
//$sql='SELECT fname,lname,username,email,password FROM login';

$first_name= ($_POST["firstName"]);
$last_name= ($_POST["lastName"]);
$user_name= ($_POST["userName"]);
$email= ($_POST["email"]);
$password= ($_POST["password"]);
$email1=($_POST['email1']);
$password1= ($_POST["password1"]);




$sql = "INSERT INTO login (fname,lname,username,email,password)
VALUES('$first_name','$last_name','$user_name','$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//if i wanna some column from table:
$sql1='SELECT email,password FROM login';

//2- make query & get result
$result= mysqli_query($conn,$sql1);

//3- convert the data to array (fetch the resulting rows as an array)
$my_data= mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close the connection
mysqli_close($conn);

print_r($my_data);


// SELECT * FROM login WHERE email = 'dsl@dl.com' AND password = 'Password@123';
// SELECT * FROM login WHERE email = 'dsadf@shd.com' AND password = 'Password@123';

$sql = "SELECT * FROM login WHERE email = '$email1' AND password = '$password1'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";


        header("Location: ./home.php");
    }
} else {
    echo "0 results";
}




/// login check function
if(isset($email,$password)) {
    function check_login($email, $password)
    {
        global $my_data;
        foreach ($my_data as $data) {
            if ($data['email'] == $email && $data['password'] == $password) {
                echo 'match';
            } else {
                echo "not match";
            }
        }
    }

    check_login($email1, $password1);
}
*/?><!--





<?php /*include('../templates/header.php') */?>



    <div id="login">
        <h1>Welcome Back!</h1>

        <form action="home.php" method="post">

            <div class="field-wrap">
                <label>
                    Email Address<span class="req">*</span>
                </label>
                <label>
                    <input type="email" name="email1" required autocomplete="off"/>
                </label>
            </div>

            <div class="field-wrap">
                <label>
                    Password<span class="req">*</span>
                </label>
                <label>
                    <input type="password" name="password1" required autocomplete="off"/>
                </label>
            </div>



            <button class="button button-block">Log In</button>

        </form>

    </div>




-->
<?php /*include('../templates/footer.php') */?>