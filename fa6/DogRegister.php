<?php
include("db.php");

if(isset($_POST['save'])){

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs(name,breed,age,address,color,height,weight)
            VALUES('$name','$breed','$age','$address','$color','$height','$weight')";

    if($conn->query($sql)){
        echo "<script>alert('Dog Added Successfully!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dog Registration</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
}

.container{
    width:500px;
    margin:auto;
    margin-top:40px;
    background:white;
    padding:20px;
    border-radius:10px;
}

input{
    width:100%;
    padding:10px;
    margin:5px 0;
}

button{
    background:#28a745;
    color:white;
    border:none;
    padding:10px;
    width:100%;
}

a{
    text-decoration:none;
}

</style>
</head>
<body>

<div class="container">

<h2>Dog Registration Form</h2>

<form method="POST">

<input type="text" name="name" placeholder="Name" required>

<input type="text" name="breed" placeholder="Breed" required>

<input type="number" name="age" placeholder="Age" required>

<input type="text" name="address" placeholder="Address" required>

<input type="text" name="color" placeholder="Color" required>

<input type="number" step="0.01" name="height" placeholder="Height" required>

<input type="number" step="0.01" name="weight" placeholder="Weight" required>

<button name="save">Save Dog</button>

</form>

<br>

<a href="DogView.php">View All Dogs</a>

</div>

</body>
</html>