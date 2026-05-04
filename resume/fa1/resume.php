<?php
$fullname = "Angelika Magandingan";
$location = "Bulacan, Philippines";
$email = "asmagandingan.email@gmail.com";
$phone = "0990907090";
 
$objective = "Motivated BSIT student specializing in Cybersecurity seeking opportunities to apply skills in programming, digital forensics, and system security.";
 
$school = "FEU Institute of Technology";
$course = "Bachelor of Science in Information Technology with specialization in Cybersecurity";
 
$skills = ["C++", "PHP (Basic)", "HTML", "CSS", "Cybersecurity Fundamentals", "Digital Forensics"];
 
$projects = [
    "Portfolio Website using PHP, HTML, CSS",
    "Student Weekly Planner System"
];
 
$subjects = [
    "Applications Development",
    "Digital Forensics",
    "Ethical Hacking",
    "Data Structures"
];
 
$achievement = "Presidential Scholarship (50% Tuition Discount)";
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Resume</title>
 
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
        }
 
        .container {
            width: 70%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
 
        h1 {
            color: #2c3e50;
        }
 
        h2 {
            color: #34495e;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
        }
 
        p {
            color: #555;
        }
 
        ul {
            padding-left: 20px;
        }
 
        li {
            margin-bottom: 5px;
        }
 
        .header {
            text-align: center;
        }
 
        .contact {
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
 
<body>
 
<div class="container">
 
    <div class="header">
        <h1><?php echo $fullname; ?></h1>
        <p class="contact">
            <?php echo $location; ?> |
            <?php echo $email; ?> |
            <?php echo $phone; ?>
        </p>
    </div>
 
    <h2>Objective</h2>
    <p><?php echo $objective; ?></p>
 
    <h2>Education</h2>
    <p>
        <?php echo $course; ?><br>
        <?php echo $school; ?>
    </p>
 
    <h2>Skills</h2>
    <ul>
        <?php
        foreach($skills as $skill){
            echo "<li>$skill</li>";
        }
        ?>
    </ul>
 
    <h2>Projects</h2>
    <ul>
        <?php
        foreach($projects as $proj){
            echo "<li>$proj</li>";
        }
        ?>
    </ul>
 
    <h2>Relevant Coursework</h2>
    <ul>
        <?php
        foreach($subjects as $sub){
            echo "<li>$sub</li>";
        }
        ?>
    </ul>
 
    <h2>Achievements</h2>
    <p><?php echo $achievement; ?></p>
 
</div>
 
</body>
</html>

 