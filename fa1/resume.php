<?php
$fullname = "Angelika Magandingan";
$location = "Bulacan, Philippines";
$email = "asmagandingan@gmail.com";
$phone = "09254839483";

$objective = "Motivated BSIT student specializing in Cybersecurity seeking opportunities to apply skills in programming, digital forensics, and system security.";

$school = "FEU Institute of Technology";
$course = "Bachelor of Science in Information Technology with specialization in Cybersecurity";

$skills = ["C++", "PHP (Basic)", "HTML", "CSS", "Cybersecurity Fundamentals", "Digital Forensics"];

$subjects = [
    "Applications Development",
    "Digital Forensics",
    "Ethical Hacking",
    "Data Structures"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Resume</title>

<style>
body {
    font-family: 'Inter', Arial, sans-serif;
    background: linear-gradient(180deg, #f6efff 0%, #ede2ff 100%);
    margin: 0;
    color: #342e4d;
}

.container {
    width: 88%;
    max-width: 1040px;
    margin: 40px auto;
    background: rgba(255, 255, 255, 0.98);
    padding: 32px 36px;
    border-radius: 24px;
    box-shadow: 0 25px 60px rgba(102, 73, 181, 0.15);
}

.header-row {
    display: flex;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    border-bottom: 1px solid rgba(107, 77, 182, 0.18);
    padding-bottom: 22px;
}

.eyebrow {
    text-transform: uppercase;
    letter-spacing: 0.2em;
    font-size: 12px;
    color: #8e72c7;
}

h1 {
    color: #4f3e8e;
    font-size: 42px;
    margin: 6px 0 0;
}

.headline {
    max-width: 600px;
    margin-top: 12px;
    color: #544974;
    font-size: 16px;
    line-height: 1.8;
}

.contact-block {
    text-align: right;
    font-size: 14px;
    line-height: 1.8;
}

.layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 28px;
    margin-top: 32px;
}

.sidebar {
    background: rgba(242, 231, 255, 0.85);
    padding: 24px;
    border-radius: 20px;
}

.section {
    margin-bottom: 28px;
}

.section h2 {
    color: #5e3f97;
    font-size: 18px;
    margin-bottom: 16px;
}

.section p,
.section li {
    font-size: 15px;
    color: #4f4272;
}

ul {
    padding-left: 18px;
    margin: 0;
}

.summary {
    background: #f8f2ff;
    border-left: 5px solid #9b76d6;
    padding: 20px;
    border-radius: 16px;
}

/* BADGES */
.badges-section {
    margin-top: 40px;
}

.badge-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
    gap: 22px;
    margin-top: 20px;
}

.badge-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 18px;
    text-align: center;
    border: 1px solid rgba(107, 77, 182, 0.18);
    box-shadow: 0 10px 24px rgba(123, 95, 193, 0.08);
}

.badge-card img {
    width: 100%;
    max-width: 150px;
}

@media (max-width: 860px) {
    .layout {
        grid-template-columns: 1fr;
    }
    .contact-block {
        text-align: left;
    }
}
</style>
</head>

<body>

<div class="container">

<div class="header-row">
    <div>
        <p class="eyebrow">Resume</p>
        <h1><?php echo $fullname; ?></h1>
        <p class="headline"><?php echo $objective; ?></p>
    </div>
    <div class="contact-block">
        <p><?php echo $location; ?></p>
        <p><?php echo $email; ?></p>
        <p><?php echo $phone; ?></p>
    </div>
</div>

<div class="layout">

<aside class="sidebar">
    <div class="section">
        <h2>Education</h2>
        <p><?php echo $course; ?><br><strong><?php echo $school; ?></strong></p>
    </div>

    <div class="section">
        <h2>Skills</h2>
        <ul>
            <?php foreach($skills as $skill) echo "<li>$skill</li>"; ?>
        </ul>
    </div>
</aside>

<div class="main-content">
    <div class="section summary">
        <h2>Profile</h2>
        <p><?php echo $objective; ?></p>
        <p>A detail‑oriented student eager to gain real‑world experience in cybersecurity, digital forensics, and system security.</p>
    </div>

    <div class="section">
        <h2>Relevant Coursework</h2>
        <ul>
            <?php foreach($subjects as $sub) echo "<li>$sub</li>"; ?>
        </ul>
    </div>
</div>

</div>


<div class="section badges-section">
    <h2>Badges & Certifications</h2>

    <div class="badge-grid">
        <div class="badge-card">
            <img src="images/badges/network-defense.png" alt="Network Defense">
        </div>
        <div class="badge-card">
            <img src="images/badges/junior-cybersecurity-analyst-career-path.1.png" alt="Junior Cybersecurity Analyst">
        </div>
        <div class="badge-card">
            <img src="images/badges/introduction-to-cybersecurity.png" alt="Intro to Cybersecurity">
        </div>
        <div class="badge-card">
            <img src="images/badges/ccna-introduction-to-networks.png" alt="CCNA Introduction to Networks">
        </div>
        <div class="badge-card">
            <img src="images/badges/it-specialist-python.png" alt="IT Specialist Python">
        </div>
        <div class="badge-card">
            <img src="images/badges/it-specialist-java.png" alt="IT Specialist Java">
        </div>
    </div>
</div>

</div>

</body>
</html>
