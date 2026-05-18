<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
 
    <style>
 
        body{
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }
 
        .container{
            width:500px;
            background:white;
            padding:25px;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,0.2);
        }
 
        h1{
            text-align:center;
            color:#333;
            margin-bottom:20px;
        }
 
        table{
            width:100%;
            border-collapse: collapse;
            overflow:hidden;
            border-radius:10px;
        }
 
        th{
            background:#4CAF50;
            color:white;
            padding:15px;
            font-size:18px;
        }
 
        td{
            padding:12px;
            text-align:center;
            border-bottom:1px solid #ddd;
        }
 
        tr:nth-child(even){
            background:#f9f9f9;
        }
 
        tr:hover{
            background:#f1f1f1;
        }
 
        .operation{
            font-weight:bold;
            color:#333;
        }
 
        .result{
            color:#4CAF50;
            font-weight:bold;
        }
 
    </style>
</head>
 
<body>
 
<div class="container">
 
<h1>User Defined Function</h1>
 
<?php
 
function myFunction($a, $b, $c){
 
    $addition = $a + $b + $c;
    $subtraction = $a - $b - $c;
    $multiplication = $a * $b * $c;
    $division = $a / $b / $c;
 
    echo "<table>";
 
    echo "<tr>";
    echo "<th colspan='2'>My Parameter Values: $a, $b, $c</th>";
    echo "</tr>";
 
    echo "<tr>";
    echo "<td class='operation'>Addition</td>";
    echo "<td class='result'>$addition</td>";
    echo "</tr>";
 
    echo "<tr>";
    echo "<td class='operation'>Subtraction</td>";
    echo "<td class='result'>$subtraction</td>";
    echo "</tr>";
 
    echo "<tr>";
    echo "<td class='operation'>Multiplication</td>";
    echo "<td class='result'>$multiplication</td>";
    echo "</tr>";
 
    echo "<tr>";
    echo "<td class='operation'>Division</td>";
    echo "<td class='result'>$division</td>";
    echo "</tr>";
 
    echo "</table>";
}
 
myFunction(25, 13, 6);
 
?>
 
</div>
 
</body>
</html>
 