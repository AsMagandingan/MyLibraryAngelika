<?php
// ==========================================
//  CHANGE YOUR NAME AND GRADE HERE ONLY
$name  = "Angelika S. Magandingan";
$grade = 67;
// ==========================================
 
function getGradeRanking($grade) {
    if ($grade >= 93) return "A";
    elseif ($grade >= 90) return "A-";
    elseif ($grade >= 87) return "B+";
    elseif ($grade >= 83) return "B";
    elseif ($grade >= 80) return "B-";
    elseif ($grade >= 77) return "C+";
    elseif ($grade >= 73) return "C";
    elseif ($grade >= 70) return "C-";
    elseif ($grade >= 67) return "D+";
    elseif ($grade >= 63) return "D";
    elseif ($grade >= 60) return "D-";
    else return "F";
}
 
$ranking = getGradeRanking($grade);
 
// if-else to assign meme image based on ranking
if ($ranking == "A") {
    $memeUrl = "http://localhost/fa2/images/A-.jpg";        
} elseif ($ranking == "A-") {
    $memeUrl = "http://localhost/fa2/images/A.jpg";       
} elseif ($ranking == "B+") {
    $memeUrl = "http://localhost/fa2/images/B+.png";       
} elseif ($ranking == "B") {
    $memeUrl = "http://localhost/fa2/images/B.jpg";       
} elseif ($ranking == "B-") {
    $memeUrl = "http://localhost/fa2/images/B-.png";        
} elseif ($ranking == "C+") {
    $memeUrl = "http://localhost/fa2/images/C+.jpg";       
} elseif ($ranking == "C") {
    $memeUrl = "http://localhost/fa2/images/C.jpg";        
} elseif ($ranking == "C-") {
    $memeUrl = "http://localhost/fa2/images/C-.jpg";       
} elseif ($ranking == "D+") {
    $memeUrl = "http://localhost/fa2/images/D+.webp";      
} elseif ($ranking == "D") {
    $memeUrl = "http://localhost/fa2/images/D.jpg";         
} elseif ($ranking == "D-") {
    $memeUrl = "http://localhost/fa2/images/D-.jpg";      
} else {
    $memeUrl = "http://localhost/fa2/images/F.jpg";       
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranking</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
 
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1a1a2e, #0f3460);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
 
        .card {
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 20px;
            padding: 36px 32px;
            width: 100%;
            max-width: 380px;
            text-align: center;
            color: white;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
 
        h2 {
            color: #e94560;
            font-size: 1.5rem;
            margin-bottom: 6px;
            letter-spacing: 1px;
        }
 
        .student-name {
            color: rgba(255,255,255,0.6);
            font-size: 0.95rem;
            margin-bottom: 24px;
        }
 
        .result-boxes {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin-bottom: 20px;
        }
 
        .box {
            flex: 1;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 16px 10px;
        }
 
        .box .lbl {
            font-size: 0.72rem;
            color: rgba(255,255,255,0.5);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
        }
 
        .box .val {
            font-size: 2rem;
            font-weight: 700;
            color: #e94560;
        }
 
        .meme-img {
            width: 100%;
            border-radius: 12px;
            border: 2px solid rgba(233,69,96,0.4);
        }
    </style>
</head>
<body>
<div class="card">
    <h2>🎓 Grade Ranking</h2>
    <p class="student-name"><?= htmlspecialchars($name) ?></p>
 
    <div class="result-boxes">
        <div class="box">
            <div class="lbl">Grade</div>
            <div class="val"><?= $grade ?></div>
        </div>
        <div class="box">
            <div class="lbl">Rank</div>
            <div class="val"><?= $ranking ?></div>
        </div>
    </div>
 
    <img class="meme-img" src="<?= $memeUrl ?>" alt="Meme for <?= $ranking ?>">
</div>
</body>
</html>
 