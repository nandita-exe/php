<?php
$insert= false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password);
if(!$con){
    die("connection failed due to".mysqli_connect());
}
//echo "Connection succesful";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];
$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone no.`, `information`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql)== true){
    //echo "Successfully inserted";
    $insert= true;
}else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to US Trip confirmation page</h3>
        <p>Enter your details</p>
        <?php
        /*if($insert== true){
            echo "Thanks for submitting";
        }*/
        ?>
        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter email">
            <input type="tel" name="phone" id="phone" placeholder="phone no.">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter other information"></textarea>
            <button class="btn">Submit</button>
            <!-- INSERT INTO `trip` (`sr. no.`, `name`, `age`, `gender`, `email`, `phone no.`, `information`, `date`) VALUES ('1', 'test', '20', 'female', 'this@this.com', '1234567890', 'my admin msg', current_timestamp()); -->
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>