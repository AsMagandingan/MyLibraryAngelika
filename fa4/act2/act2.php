<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f4f4f4;
            padding: 20px;
        }

        h2{
            text-align: center;
            margin-bottom: 20px;
        }

        table{
            width: 70%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
        }

        th, td{
            border: 1px solid #000;
            padding: 12px;
            text-align: center;
        }

        th{
            background-color: #333;
            color: white;
        }

        .names{
            font-weight: bold;
            padding: 20px;
            text-align: center;
            background-color: #f9f9f9;
        }

    </style>

</head>

<body>

<h2>PHP String Functions Activity</h2>

<?php

$names = array(
    "angelika",
    "john",
    "maria",
    "james",
    "charles",
    "mark",
    "ashlee",
    "carla",
    "akhel",
    "juliana",
    "lei",
    "aira",
    "yssa",
    "kim",
    "caleb",
    "yugen",
    "prince",
    "jamie",
    "megan",
    "christ"
);

echo "
<table>

<tr>
    <td colspan='6' class='names'>
        List of Names: ".implode(", ", $names)."
    </td>
</tr>

<tr>
    <th>Name</th>
    <th>Number of Characters</th>
    <th>Uppercase First Letter</th>
    <th>Replace Vowels with @</th>
    <th>Check Position of 'a'</th>
    <th>Reverse Name</th>
</tr>
";

foreach($names as $name){

    // number of characters
    $characters = strlen($name);

    // uppercase first letter
    $uppercase = ucwords($name);

    // replace vowels with @
    $replace = str_replace(
        array('a','e','i','o','u','A','E','I','O','U'),
        '@',
        $name
    );

    // position of letter a
    $position = strpos(strtolower($name), 'a');

    if($position === false){
        $position = "N/A";
    }

    // reverse name
    $reverse = strrev($name);

    echo "<tr>";

    echo "<td>$name</td>";
    echo "<td>$characters</td>";
    echo "<td>$uppercase</td>";
    echo "<td>$replace</td>";
    echo "<td>$position</td>";
    echo "<td>$reverse</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>