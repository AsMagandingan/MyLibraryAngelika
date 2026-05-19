<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>

    <style>

        body{
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table{
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
        }

        th, td{
            border: 1px solid gray;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: #eaeaea;
        }

        img{
            width: 120px;
            height: 100px;
            object-fit: cover;
        }

        h1{
            text-align: center;
        }

    </style>

</head>
<body>

<?php

$fruits = [

[
    "name" => "Apple",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/1/15/Red_Apple.jpg",
    "description" => "Color Red",
    "facts" => "Apples are rich in fiber and vitamins."
],

[
    "name" => "Banana",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/8/8a/Banana-Single.jpg",
    "description" => "Color Yellow",
    "facts" => "Bananas are healthy and rich in potassium."
],

[
    "name" => "Cherry",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/b/bb/Cherry_Stella444.jpg",
    "description" => "Color Red",
    "facts" => "Cherries contain antioxidants."
],

[
    "name" => "Grapes",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/b/bb/Table_grapes_on_white.jpg",
    "description" => "Color Purple",
    "facts" => "Grapes can be used to make wine."
],

[
    "name" => "Kiwi",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/d/d3/Kiwi_aka.jpg",
    "description" => "Color Green",
    "facts" => "Kiwi is rich in Vitamin C."
],

[
    "name" => "Mango",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/9/90/Hapus_Mango.jpg",
    "description" => "Color Yellow",
    "facts" => "Mango is the national fruit of the Philippines."
],

[
    "name" => "Orange",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/c/c4/Orange-Fruit-Pieces.jpg",
    "description" => "Color Orange",
    "facts" => "Oranges help boost immunity."
],

[
    "name" => "Pineapple",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/c/cb/Pineapple_and_cross_section.jpg",
    "description" => "Color Yellow",
    "facts" => "Pineapple contains bromelain."
],

[
    "name" => "Strawberry",
    "image" => "https://upload.wikimedia.org/wikipedia/commons/2/29/PerfectStrawberry.jpg",
    "description" => "Color Red",
    "facts" => "Strawberries are rich in antioxidants."
],

[
    "name" => "Watermelon",
    "image" => "data:image/jpeg;base64,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",
    "description" => "Color Green",
    "facts" => "Watermelon helps keep the body hydrated."
]

];

?>

<h1><b>MY FRUITS</b></h1>

<table>

<tr>
    <th>Image</th>
    <th>Name</th>
    <th>Description</th>
    <th>Facts</th>
</tr>

<?php foreach($fruits as $fruit){ ?>

<tr>

    <td>
        <img src="<?php echo $fruit['image']; ?>">
    </td>

    <td>
        <?php echo $fruit['name']; ?>
    </td>

    <td>
        <?php echo $fruit['description']; ?>
    </td>

    <td>
        <?php echo $fruit['facts']; ?>
    </td>

</tr>

<?php } ?>

</table>

</body>
</html>