<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>User Information</h2>

<div class="info">

<p><strong>First Name:</strong> <?php echo $user['firstname']; ?></p>

<p><strong>Middle Name:</strong> <?php echo $user['middlename']; ?></p>

<p><strong>Last Name:</strong> <?php echo $user['lastname']; ?></p>

<p><strong>Username:</strong> <?php echo $user['username']; ?></p>

<p><strong>Birthday:</strong> <?php echo $user['birthday']; ?></p>

<p><strong>Email:</strong> <?php echo $user['email']; ?></p>

<p><strong>Contact:</strong> <?php echo $user['contact']; ?></p>

</div>

<br>

<a href="resetPassword.php">
<button>Reset Password</button>
</a>

<br><br>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

</body>
</html>