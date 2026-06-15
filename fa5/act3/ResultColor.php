<?php
session_start();
 
$_SESSION['color1'] = $_POST['color1'];
$_SESSION['color2'] = $_POST['color2'];
$_SESSION['color3'] = $_POST['color3'];
$_SESSION['color4'] = $_POST['color4'];
$_SESSION['color5'] = $_POST['color5'];
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>My Favorite Colors</title>
 
    <style>
 
        body{
            font-family:Arial;
            background:#eef2f5;
            text-align:center;
        }
 
        .container{
            width:500px;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
 
        .colorBox{
            margin:10px;
            padding:15px;
            border-radius:10px;
            color:white;
            font-size:20px;
            font-weight:bold;
        }
 
    </style>
</head>
<body>
 
<div class="container">
 
<h2>My Favorite Colors</h2>
 
<?php
 
$colors = [
    $_SESSION['color1'],
    $_SESSION['color2'],
    $_SESSION['color3'],
    $_SESSION['color4'],
    $_SESSION['color5']
];
 
foreach($colors as $color)
{
    echo "<div class='colorBox' style='background:$color;'>";
    echo strtoupper($color);
    echo "</div>";
}
 
?>
 
</div>
 
</body>
</html>