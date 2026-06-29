<?php

session_start();

if(isset($_SESSION['user_id'])){
    header("Location: home.php");
    exit();
}

include("db.php");
$message = "";
$result = "";

if(isset($_POST['register'])){

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = $_POST['password'];
    $confirm = $_POST['confirm_password'];
    $birthday = $_POST['birthday'];
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $contact = mysqli_real_escape_string($conn,$_POST['contact']);

    if($password != $confirm){
        $message = "<p class='error'>Password and Confirm Password are not the same.</p>";
    }
    else{

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $check = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");

        if(mysqli_num_rows($check) > 0){

            $message = "<p class='error'>Username already exists.</p>";

        }else{

            $sql = "INSERT INTO users
            (firstname,middlename,lastname,username,password,birthday,email,contact)
            VALUES
            ('$firstname','$middlename','$lastname','$username','$hashedPassword','$birthday','$email','$contact')";

            if(mysqli_query($conn,$sql)){
                $message = "<p class='success'>Registration Successful!</p>";
                $result = "
                <div class='info'>
                <p><strong>Full Name:</strong> $firstname $middlename $lastname</p>
                <p><strong>Username:</strong> $username</p>
                <p><strong>Password:</strong> $password</p>
                <p><strong>Birthday:</strong> $birthday</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Contact Number:</strong> $contact</p>
                </div>";
            }else{
                $message = "<p class='error'>Error: ".mysqli_error($conn)."</p>";
            }

        }

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Form</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>My Personal Information</h2>

<?php echo $message; ?>

<form method="POST">

<label>First Name</label>
<input type="text" name="firstname" required>

<label>Middle Name</label>
<input type="text" name="middlename" required>

<label>Last Name</label>
<input type="text" name="lastname" required>

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm_password" required>

<label>Birthday</label>
<input type="date" name="birthday" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Contact Number</label>
<input type="text" name="contact" required>

<button type="submit" name="register">Submit</button>

</form>

<?php echo $result; ?>

<br>

<center>

Already have an account?

<br><br>

<a href="login.php">Login Here</a>

</center>

</div>

</body>
</html>