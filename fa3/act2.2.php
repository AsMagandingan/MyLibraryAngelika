<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
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
            max-width: 900px;
            margin: 0 auto;
        }

        .main-box {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            animation: fadeIn 0.8s ease;
        }

        h2 {
            text-align: center;
            color: #667eea;
            font-size: 2rem;
            margin-bottom: 30px;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .array-display {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
        }

        .array-display h3 {
            color: #555;
            font-size: 1.1rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .numbers-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .number-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            animation: bounceIn 0.6s ease;
            transition: transform 0.3s ease;
        }

        .number-box:hover {
            transform: translateY(-5px) scale(1.1);
        }

        .results-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .result-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: 3px solid transparent;
        }

        .result-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }

        .result-card.sum {
            border-color: #4CAF50;
        }

        .result-card.difference {
            border-color: #FF9800;
        }

        .result-card.product {
            border-color: #2196F3;
        }

        .result-card.quotient {
            border-color: #9C27B0;
        }

        .icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.8rem;
        }

        .sum .icon {
            background: linear-gradient(135deg, #4CAF50, #8BC34A);
            color: white;
        }

        .difference .icon {
            background: linear-gradient(135deg, #FF9800, #FFC107);
            color: white;
        }

        .product .icon {
            background: linear-gradient(135deg, #2196F3, #03A9F4);
            color: white;
        }

        .quotient .icon {
            background: linear-gradient(135deg, #9C27B0, #E91E63);
            color: white;
        }

        .result-label {
            color: #666;
            font-size: 0.95rem;
            font-weight: 600;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .result-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: #333;
            word-break: break-all;
        }

        .sum .result-value { color: #4CAF50; }
        .difference .result-value { color: #FF9800; }
        .product .result-value { color: #2196F3; }
        .quotient .result-value { color: #9C27B0; }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                transform: scale(1);
            }
        }

        @media (max-width: 768px) {
            .main-box {
                padding: 25px;
            }

            h2 {
                font-size: 1.5rem;
            }

            .number-box {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .results-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="main-box">
        <h2><i class="fas fa-calculator"></i> Array Operations</h2>

        <?php
        $numbers = array(10, 5, 2, 8, 4, 6, 3, 9, 7, 1);

        echo "<div class='array-display'>";
        echo "<h3><i class='fas fa-list'></i> Numbers in Array:</h3>";
        echo "<div class='numbers-container'>";
        
        foreach($numbers as $index => $num){
            echo "<div class='number-box' style='animation-delay: " . ($index * 0.1) . "s'>" . $num . "</div>";
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

        echo "<div class='results-grid'>";
        
        echo "<div class='result-card sum'>";
        echo "<div class='icon'><i class='fas fa-plus'></i></div>";
        echo "<div class='result-label'>Sum</div>";
        echo "<div class='result-value'>" . $sum . "</div>";
        echo "</div>";

        echo "<div class='result-card difference'>";
        echo "<div class='icon'><i class='fas fa-minus'></i></div>";
        echo "<div class='result-label'>Difference</div>";
        echo "<div class='result-value'>" . $difference . "</div>";
        echo "</div>";

        echo "<div class='result-card product'>";
        echo "<div class='icon'><i class='fas fa-times'></i></div>";
        echo "<div class='result-label'>Product</div>";
        echo "<div class='result-value'>" . $product . "</div>";
        echo "</div>";

        echo "<div class='result-card quotient'>";
        echo "<div class='icon'><i class='fas fa-divide'></i></div>";
        echo "<div class='result-label'>Quotient</div>";
        echo "<div class='result-value'>" . number_format($quotient, 6) . "</div>";
        echo "</div>";
        
        echo "</div>";
        ?>
    </div>
</div>

</body>
</html>