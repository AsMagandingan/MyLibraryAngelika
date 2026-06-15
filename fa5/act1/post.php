<?php
if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    if(!preg_match("/^[a-zA-Z]+$/", $fname)){
        echo "<p style='color:red;'>First Name must contain letters only</p>";
    }
    elseif(!preg_match("/^[a-zA-Z]+$/", $mname)){
        echo "<p style='color:red;'>Middle Name must contain letters only</p>";
    }
    elseif(!preg_match("/^[a-zA-Z]+$/", $lname)){
        echo "<p style='color:red;'>Last Name must contain letters only</p>";
    }
    elseif(empty($dob)){
        echo "<p style='color:red;'>Please select a date of birth</p>";
    }
    elseif(!preg_match("/^[a-zA-Z0-9\s,.-]+$/", $address)){
        echo "<p style='color:red;'>Address contains invalid characters</p>";
    }
    else{
        echo "<hr>";
        echo "First Name: $fname <br>";
        echo "Middle Name: $mname <br>";
        echo "Last Name: $lname <br>";
        echo "Date of Birth: $dob <br>";
        echo "Address: $address <br>";
    }
}
?>