<?php
session_start();
include("db.php");

$message = "";

if(isset($_POST['login'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_assoc($result);

        if(password_verify($password,$user['password'])){

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['firstname'] = $user['firstname'];

            if(isset($_POST['remember'])){

                setcookie("username",$username,time()+86400*30,"/");
                setcookie("password",$password,time()+86400*30,"/");

            }else{

                setcookie("username","",time()-3600,"/");
                setcookie("password","",time()-3600,"/");

            }

            header("Location: home.php");
            exit();

        }else{

            $message = "<p class='error'>Invalid Password!</p>";

        }

    }else{

        $message = "<p class='error'>Username not found!</p>";

    }

}

$username = $_COOKIE['username'] ?? "";
$password = $_COOKIE['password'] ?? "";
?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Login Form</h1>

<?php echo $message; ?>

<form method="POST">

<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>" required>

<label>Password</label>
<input type="password" name="password" value="<?php echo $password; ?>" required>

<br><br>

<input type="checkbox" name="remember" style="width:auto;"> Remember Me

<br><br>

<button type="submit" name="login">Login</button>

</form>

<br>

<center>

Don't have an account?

<br><br>

<a href="register.php">Register Here</a>

</center>

</div>

</body>
</html>