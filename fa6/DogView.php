<?php
include("db.php");

$result = $conn->query("SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
<title>Dog Records</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

table{
    width:90%;
    margin:auto;
    background:white;
    border-collapse:collapse;
}

th{
    background:#007bff;
    color:white;
}

th,td{
    border:1px solid #ddd;
    padding:10px;
    text-align:center;
}

h2{
    text-align:center;
}

</style>

</head>
<body>

<h2>Dog Information Records</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Breed</th>
<th>Age</th>
<th>Address</th>
<th>Color</th>
<th>Height</th>
<th>Weight</th>
</tr>

<?php

while($row = $result->fetch_assoc()){

echo "
<tr>
<td>{$row['id']}</td>
<td>{$row['name']}</td>
<td>{$row['breed']}</td>
<td>{$row['age']}</td>
<td>{$row['address']}</td>
<td>{$row['color']}</td>
<td>{$row['height']}</td>
<td>{$row['weight']}</td>
</tr>
";

}

?>

</table>

</body>
</html>