<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
 
    <style>
        body{
            font-family: Arial;
            background:#eef2f5;
            text-align:center;
        }
 
        .container{
            width:400px;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
 
        input{
            width:90%;
            padding:10px;
            margin:8px;
        }
 
        input[type=submit]{
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }
    </style>
</head>
<body>
 
<div class="container">
 
<h2>Enter Your 5 Favorite Colors</h2>
 
<form action="ResultColor.php" method="post">
 
<input type="text" name="color1" placeholder="Color 1" required>
 
<input type="text" name="color2" placeholder="Color 2" required>
 
<input type="text" name="color3" placeholder="Color 3" required>
 
<input type="text" name="color4" placeholder="Color 4" required>
 
<input type="text" name="color5" placeholder="Color 5" required>
 
<input type="submit" value="Send Colors">
 
</form>
 
</div>
 
</body>
</html>