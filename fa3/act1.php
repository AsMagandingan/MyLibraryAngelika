<!DOCTYPE html>
<html>
<head>
    <title>Student Information Table</title>
 
    <style>
 
        body{
            font-family: Arial;
            background-color:#f2f2f2;
            padding:20px;
        }
 
        h1, h2 {
         text-align: center;
    }
 
        table{
            width:100%;
            border-collapse: collapse;
            background:white;
        }
 
        th{
            background:#4CAF50;
            color:white;
            padding:12px;
            border:1px solid #e9b4b4;
        }
 
        td{
            padding:10px;
            text-align:center;
            border:1px solid #a4f171;
        }
 
        img{
            width:100px;
            height:100px;
            border-radius:50%;
        }
 
    </style>
</head>
<body>
 
<h1>The 67 University</h1>
<h2>Student Information</h2>
 
<?php
 
$students = array(
 
array(
    "no"=>1,
    "name"=>"Ami Parxley",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/A-.jpg",
    "age"=>20,
    "birthday"=>"January 10, 2006",
    "contact"=>"09123456781"
),
 
array(
    "no"=>2,
    "name"=>"Bryan Brody",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/A.jpg",
    "age"=>21,
    "birthday"=>"February 12, 2005",
    "contact"=>"09123456782"
),
 
array(
    "no"=>3,
    "name"=>"Charles Chou",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/B+.png",
    "age"=>22,
    "birthday"=>"March 15, 2004",
    "contact"=>"09123456783"
),
 
array(
    "no"=>4,
    "name"=>"Diana Pharsa",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/B-.png",
    "age"=>19,
    "birthday"=>"April 18, 2007",
    "contact"=>"09123456784"
),
 
array(
    "no"=>5,
    "name"=>"Ethan Aamon",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/C+.jpg",
    "age"=>20,
    "birthday"=>"May 11, 2006",
    "contact"=>"09123456785"
),
 
array(
    "no"=>6,
    "name"=>"Faith Mellisa",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/C-.jpg",
    "age"=>21,
    "birthday"=>"June 20, 2005",
    "contact"=>"09123456786"
),
 
array(
    "no"=>7,
    "name"=>"Gabriel Fredrin",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/cinna.webp",
    "age"=>22,
    "birthday"=>"July 25, 2004",
    "contact"=>"09123456787"
),
 
array(
    "no"=>8,
    "name"=>"Hannah Montana",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/D-.jpg",
    "age"=>20,
    "birthday"=>"August 30, 2006",
    "contact"=>"09123456788"
),
 
array(
    "no"=>9,
    "name"=>"Ivan Zetian",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/D.jpg",
    "age"=>23,
    "birthday"=>"September 5, 2003",
    "contact"=>"09123456789"
),
 
array(
    "no"=>10,
    "name"=>"Julia Valentina",
    "image"=>"http://localhost/MyLibraryAngelika/MyLibraryAngelika/fa2/images/F.jpg",
    "age"=>19,
    "birthday"=>"October 1, 2007",
    "contact"=>"09123456790"
)
 
);
 
usort($students, function($a, $b){
    return strcmp($a['name'], $b['name']);
});
 
echo "<table>";
 
echo "<tr>";
echo "<th>No.</th>";
echo "<th>Name</th>";
echo "<th>Image</th>";
echo "<th>Age</th>";
echo "<th>Birthday</th>";
echo "<th>Contact Number</th>";
echo "</tr>";

$i = 1;
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>".$student['no']."</td>";
    echo "<td>".$student['name']."</td>";
    echo "<td><img src='".$student['image']."'></td>";
    echo "<td>".$student['age']."</td>";
    echo "<td>".$student['birthday']."</td>";
    echo "<td>".$student['contact']."</td>";
 
    echo "</tr>";
}
 
echo "</table>";
 
?>
 
</body>
</html>