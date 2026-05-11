<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f8f8f8;
        }

        h2{
            text-align: center;
            color: darkred;
        }

        table{
            margin: auto;
            border-collapse: collapse;
        }

        td{
            width: 50px;
            height: 50px;
            text-align: center;
            font-weight: bold;
            border: 1px solid black;
        }

    </style>
</head>

<body>

<h2>Multiplication Table</h2>

<table>

<?php

for($row = 1; $row <= 10; $row++){

    echo "<tr>";

    for($col = 1; $col <= 10; $col++){

        $answer = $row * $col;

        if(($row + $col) % 2 == 0){
            $color = "#8f6cae";
        }
        else{
            $color = "#d870b0";
        }

        echo "<td style='background-color:$color'>$answer</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>