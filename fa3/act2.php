<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            min-height: 100vh;
            padding: 40px 20px;
            color: #334155;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            color: #1e293b;
            font-size: 1.5rem;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .array-section {
            background: #f1f5f9;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            text-align: center;
        }

        .array-section h3 {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 12px;
            font-weight: 500;
        }

        .numbers {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            justify-content: center;
        }

        .num {
            background: #e2e8f0;
            color: #334155;
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .results {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .result {
            padding: 18px;
            border-radius: 12px;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            text-align: center;
            transition: border-color 0.2s;
        }

        .result:hover {
            border-color: #94a3b8;
        }

        .result-label {
            font-size: 0.85rem;
            color: #64748b;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .result-value {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1e293b;
        }

        @media (max-width: 600px) {
            .results {
                grid-template-columns: 1fr;
            }
            
            .card {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">
        <h2>Array Operations</h2>

        <?php
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        echo "<div class='array-section'>";
        echo "<h3>Array list: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</h3>";
        echo "<div class='numbers'>";
        
        foreach($numbers as $num){
            echo "<span class='num'>" . $num . "</span>";
        }
        
        echo "</div></div>";

        $sum = array_sum($numbers);

        $difference = $numbers[0];
        for($i=1; $i<count($numbers); $i++){
            $difference -= $numbers[$i];
        }

        $product = 1;
        foreach($numbers as $num){
            $product *= $num;
        }

        $quotient = $numbers[0];
        for($i=1; $i<count($numbers); $i++){
            $quotient /= $numbers[$i];
        }

        echo "<div class='results'>";
        
        echo "<div class='result'>";
        echo "<div class='result-label'>Addition</div>";
        echo "<div class='result-value'>" . $sum . "</div>";
        echo "</div>";

        echo "<div class='result'>";
        echo "<div class='result-label'>Subtraction</div>";
        echo "<div class='result-value'>" . $difference . "</div>";
        echo "</div>";

        echo "<div class='result'>";
        echo "<div class='result-label'>Multiplication</div>";
        echo "<div class='result-value'>" . $product . "</div>";
        echo "</div>";

        echo "<div class='result'>";
        echo "<div class='result-label'>Division</div>";
        echo "<div class='result-value'>" . str_replace('E-0', 'E-', sprintf('%.14E', $quotient)) . "</div>";
        echo "</div>";
        
        echo "</div>";
        ?>
    </div>
</div>

</body>
</html>