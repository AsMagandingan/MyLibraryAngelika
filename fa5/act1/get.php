<!DOCTYPE html>
<html>
<head>
    <title>Personal Information </title>

    <style>
        body {
            font-family: Arial;
            background: #eef2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 50px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px;
        }

        input[type="submit"] {
            background: green;
            color: white;
            border: none;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
<h2>Personal Info </h2>

<form method="get">
    First Name:
    <input type="text" name="fname">

    Middle Name:
    <input type="text" name="mname">

    Last Name:
    <input type="text" name="lname">

    Date of Birth:
    <input type="date" name="dob">

    Address:
    <input type="text" name="address">

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_GET['submit'])){

    $fname = $_GET['fname'];
    $mname = $_GET['mname'];
    $lname = $_GET['lname'];
    $dob = $_GET['dob'];
    $address = $_GET['address'];

    if(!preg_match("/^[a-zA-Z]+$/", $fname)){
        echo "First name must contain letters only<br>";
    }
    elseif(!preg_match("/^[a-zA-Z]+$/", $mname)){
        echo "Middle name must contain letters only<br>";
    }
    elseif(!preg_match("/^[a-zA-Z]+$/", $lname)){
        echo "Last name must contain letters only<br>";
    }
    elseif(empty($dob)){
        echo "Please select date of birth<br>";
    }
    elseif(!preg_match("/^[a-zA-Z0-9\s,.-]+$/", $address)){
        echo "Invalid address<br>";
    }
    else {
        echo "<hr>";

        echo "First Name: $fname <br>";
        echo "Middle Name: $mname <br>";
        echo "Last Name: $lname <br>";
        echo "Date of Birth: $dob <br>";
        echo "Address: $address <br>";
    }
}
?>

</div>

</body>
</html>