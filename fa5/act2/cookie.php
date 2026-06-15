<?php
setcookie("fname", "Angelika", time()+10);
setcookie("mname", "Siervo", time()+20);
setcookie("lname", "Magandingan", time()+30);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Example</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(to right, #e1b9f8, #3656e2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .info {
            font-size: 18px;
            margin: 10px 0;
        }

        .waiting {
            color: red;
            font-style: italic;
        }

        .ready {
            color: green;
            font-weight: bold;
        }

        .refresh {
            margin-top: 20px;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .refresh:hover {
            background: #0056b3;
        }
    </style>


</head>
<body>

<div class="container">
    <h2>Cookies Information</h2>

    <?php
    if(isset($_COOKIE['fname'])){
        echo "<div class='info ready'>First Name: " . $_COOKIE['fname'] . "</div>";
    }else{
        echo "<div class='info waiting'>First Name Cookie not available yet.</div>";
    }

    if(isset($_COOKIE['mname'])){
        echo "<div class='info ready'>Middle Name: " . $_COOKIE['mname'] . "</div>";
    }else{
        echo "<div class='info waiting'>Middle Name Cookie not available yet.</div>";
    }

    if(isset($_COOKIE['lname'])){
        echo "<div class='info ready'>Last Name: " . $_COOKIE['lname'] . "</div>";
    }else{
        echo "<div class='info waiting'>Last Name Cookie not available yet.</div>";
    }
    ?>
</div>

</body>
</html>