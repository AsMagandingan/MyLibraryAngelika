<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$message = "";

if(isset($_POST['reset'])){

    $current = $_POST['current_password'];
    $new = $_POST['new_password'];
    $confirm = $_POST['confirm_password'];

    $id = $_SESSION['user_id'];

    $query = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
    $user = mysqli_fetch_assoc($query);

    if(!password_verify($current,$user['password'])){

        $message = "<p class='error'>Current password is not the same with the old password.</p>";

    }elseif($new != $confirm){

        $message = "<p class='error'>New password and Re-enter new password should be the same.</p>";

    }else{

        $hashedPassword = password_hash($new, PASSWORD_DEFAULT);

        mysqli_query($conn,"UPDATE users SET password='$hashedPassword' WHERE id='$id'");

        $message = "<p class='success'>Password successfully updated!</p>";

    }

}
?>

<!DOCTYPE html>
<html>
<head>

<title>Reset Password</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Reset Password</h2>

<?php echo $message; ?>

<form method="POST">

<label>Current Password</label>
<input type="password" name="current_password" required>

<label>New Password</label>
<input type="password" name="new_password" required>

<label>Re-enter New Password</label>
<input type="password" name="confirm_password" required>

<button type="submit" name="reset">
Reset Password
</button>

</form>

<br>

<a href="home.php">
<button>Back to Home</button>
</a>

</div>

</body>
</html>