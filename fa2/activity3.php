<?php
$combinations = [];
for ($i = 0; $i <= 99; $i++) {
    $combinations[] = sprintf("%02d", $i);  
}
$output = implode(", ", $combinations);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Digit Decimal Combinations</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        body {
            font-family: 'Courier New', Courier, monospace;
            background: linear-gradient(135deg, #0d1117 0%, #161b22 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
 
        .container {
            background: rgba(22, 27, 34, 0.9);
            border: 1px solid #30363d;
            border-radius: 16px;
            padding: 40px;
            width: 100%;
            max-width: 700px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.6);
        }
 
        .header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #30363d;
        }
 
        .dots {
            display: flex;
            gap: 6px;
        }
 
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
 
        .dot.red   { background: #ff5f57; }
        .dot.yellow { background: #febc2e; }
        .dot.green { background: #28c840; }
 
        h1 {
            color: #58a6ff;
            font-size: 1rem;
            font-weight: 400;
            letter-spacing: 1px;
        }
 
        .info-bar {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }
 
        .info-item {
            background: rgba(88,166,255,0.1);
            border: 1px solid rgba(88,166,255,0.2);
            border-radius: 6px;
            padding: 8px 14px;
            color: #58a6ff;
            font-size: 0.8rem;
        }
 
        .info-item span {
            color: #f0f6fc;
            font-weight: bold;
        }
 
        .output-box {
            background: #0d1117;
            border: 1px solid #30363d;
            border-radius: 10px;
            padding: 24px;
            line-height: 2;
            color: #c9d1d9;
            font-size: 0.95rem;
            word-break: break-all;
        }
 
        .output-box .num {
            color: #79c0ff;
            transition: color 0.2s;
        }
 
        .output-box .num:hover {
            color: #ff7b72;
        }
 
        .output-box .sep {
            color: #6e7681;
        }
 
        .footer {
            margin-top: 20px;
            color: #6e7681;
            font-size: 0.78rem;
            text-align: right;
        }
 
        .code-block {
            margin-top: 24px;
            background: #161b22;
            border: 1px solid #30363d;
            border-radius: 10px;
            overflow: hidden;
        }
 
        .code-header {
            background: #21262d;
            padding: 8px 16px;
            color: #8b949e;
            font-size: 0.78rem;
            border-bottom: 1px solid #30363d;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
 
        .code-body {
            padding: 16px;
            color: #c9d1d9;
            font-size: 0.85rem;
            line-height: 1.8;
        }
 
        .kw  { color: #ff7b72; }  /* keywords */
        .fn  { color: #d2a8ff; }  /* functions */
        .str { color: #a5d6ff; }  /* strings */
        .var { color: #ffa657; }  /* variables */
        .cmt { color: #6e7681; }  /* comments */
        .num-c { color: #79c0ff; }  /* numbers */
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <div class="dots">
            <div class="dot red"></div>
            <div class="dot yellow"></div>
            <div class="dot green"></div>
        </div>
        <h1>task3_combinations.php &mdash; Two-Digit Decimal Combinations</h1>
    </div>
 
    <div class="info-bar">
        <div class="info-item">Total: <span>100</span> combinations</div>
        <div class="info-item">Range: <span>00 – 99</span></div>
        <div class="info-item">Format: <span>Comma-delimited</span></div>
    </div>
 
    <div class="output-box">
        <?php
        for ($i = 0; $i <= 99; $i++) {
            $num = sprintf("%02d", $i);
            echo "<span class='num'>{$num}</span>";
            if ($i < 99) echo "<span class='sep'>, </span>";
        }
        ?>
    </div>
 
    <div class="footer">
        Applications Development and Emerging Technologies &nbsp;|&nbsp; Page 13 of 15
    </div>
 
   
</div>
</body>
</html>

 