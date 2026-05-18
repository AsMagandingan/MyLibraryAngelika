<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            margin-bottom: 50px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            animation: fadeInDown 0.8s ease;
        }

        .students-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            animation: fadeInUp 0.6s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .card-header {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            gap: 20px;
        }

        .image-container {
            position: relative;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #667eea;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .status-indicator {
            position: absolute;
            bottom: 5px;
            right: 5px;
            width: 15px;
            height: 15px;
            background: #4CAF50;
            border-radius: 50%;
            border: 3px solid white;
        }

        .student-info h2 {
            color: #333;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .student-number {
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .details {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .detail-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .detail-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .detail-item i {
            color: #667eea;
            font-size: 1.1rem;
            width: 20px;
        }

        .detail-item span {
            color: #555;
            font-size: 0.95rem;
            flex: 1;
        }

        .detail-item strong {
            color: #333;
            font-weight: 500;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .students-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <h1><i class="fas fa-users"></i> Student Information</h1>

    <div class="students-grid">

<?php

$students = array(
    array(
        "name"=>"Angelika",
        "image"=>"https://i.pravatar.cc/150?img=1",
        "age"=>20,
        "birthday"=>"January 10, 2006",
        "contact"=>"09123456781"
    ),
    array(
        "name"=>"Bryan",
        "image"=>"https://i.pravatar.cc/150?img=2",
        "age"=>21,
        "birthday"=>"February 12, 2005",
        "contact"=>"09123456782"
    ),
    array(
        "name"=>"Charles",
        "image"=>"https://i.pravatar.cc/150?img=3",
        "age"=>22,
        "birthday"=>"March 15, 2004",
        "contact"=>"09123456783"
    ),
    array(
        "name"=>"Diana",
        "image"=>"https://i.pravatar.cc/150?img=4",
        "age"=>19,
        "birthday"=>"April 18, 2007",
        "contact"=>"09123456784"
    ),
    array(
        "name"=>"Ethan",
        "image"=>"https://i.pravatar.cc/150?img=5",
        "age"=>20,
        "birthday"=>"May 11, 2006",
        "contact"=>"09123456785"
    ),
    array(
        "name"=>"Faith",
        "image"=>"https://i.pravatar.cc/150?img=6",
        "age"=>21,
        "birthday"=>"June 20, 2005",
        "contact"=>"09123456786"
    ),
    array(
        "name"=>"Gabriel",
        "image"=>"https://i.pravatar.cc/150?img=7",
        "age"=>22,
        "birthday"=>"July 25, 2004",
        "contact"=>"09123456787"
    ),
    array(
        "name"=>"Hannah",
        "image"=>"https://i.pravatar.cc/150?img=8",
        "age"=>20,
        "birthday"=>"August 30, 2006",
        "contact"=>"09123456788"
    ),
    array(
        "name"=>"Ivan",
        "image"=>"https://i.pravatar.cc/150?img=9",
        "age"=>23,
        "birthday"=>"September 5, 2003",
        "contact"=>"09123456789"
    ),
    array(
        "name"=>"Julia",
        "image"=>"https://i.pravatar.cc/150?img=10",
        "age"=>19,
        "birthday"=>"October 1, 2007",
        "contact"=>"09123456790"
    )
);

usort($students, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

$counter = 1;
foreach($students as $student){
    echo "<div class='card'>";
    
    echo "<div class='card-header'>";
    echo "<div class='image-container'>";
    echo "<img src='".$student['image']."' alt='".$student['name']."'>";
    echo "<div class='status-indicator'></div>";
    echo "</div>";
    echo "<div class='student-info'>";
    echo "<h2>".$student['name']."</h2>";
    echo "<span class='student-number'>Student #".$counter."</span>";
    echo "</div>";
    echo "</div>";
    
    echo "<div class='details'>";
    echo "<div class='detail-item'>";
    echo "<i class='fas fa-birthday-cake'></i>";
    echo "<span><strong>Age:</strong> ".$student['age']." years old</span>";
    echo "</div>";
    
    echo "<div class='detail-item'>";
    echo "<i class='fas fa-calendar-alt'></i>";
    echo "<span><strong>Birthday:</strong> ".$student['birthday']."</span>";
    echo "</div>";
    
    echo "<div class='detail-item'>";
    echo "<i class='fas fa-phone'></i>";
    echo "<span><strong>Contact:</strong> ".$student['contact']."</span>";
    echo "</div>";
    echo "</div>";
    
    echo "</div>";
    
    $counter++;
}
?>

    </div>
</div>

</body>
</html>