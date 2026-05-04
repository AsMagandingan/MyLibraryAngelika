<!DOCTYPE html>
<html>
<head>
    <title>Length Conversion System</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 20px;
        }
 
        .container {
            max-width: 920px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
 
        .worksheet-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            padding: 14px 18px;
            border: 2px solid #2c3e50;
            border-radius: 14px;
            background: #f8f9fb;
        }

        .worksheet-info {
            display: flex;
            gap: 32px;
            color: #2c3e50;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 0.95rem;
        }

        .worksheet-info span {
            display: inline-flex;
            gap: 5px;
        }

        .worksheet-info span::before {
            content: attr(data-label) ": ";
            font-weight: 700;
            color: #2c3e50;
        }

        .worksheet-title {
            text-align: center;
            color: #1f3a93;
            margin: 25px 0 20px;
            font-size: 1.5rem;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .brand-badge {
            background: #2c3e50;
            color: white;
            padding: 10px 16px;
            border-radius: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            box-shadow: 0 6px 14px rgba(0,0,0,0.12);
        }

        .header-brand {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .header-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 16px;
            border: 2px solid #2c3e50;
            box-shadow: 0 8px 14px rgba(0,0,0,0.12);
            background: #f5f5f5;
        }

        h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }
 
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }
 
        th {
            background: #f1c40f;
            padding: 10px;
            text-align: left;
        }
 
        td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
 
        .form-box {
            text-align: center;
            margin-top: 20px;
        }
 
        input, select {
            padding: 10px;
            margin: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
 
        button {
            padding: 10px 20px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
 
        button:hover {
            background: #5a67d8;
        }
 
        .result {
            margin-top: 15px;
            font-weight: bold;
            font-size: 16px;
        }

        .grade-meme {
            margin-top: 20px;
            text-align: center;
        }

        .grade-meme img {
            max-width: 200px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>
 
<div class="container">
    <div class="worksheet-header">
        <div class="worksheet-info">
            <span data-label="Name">______________________</span>
            <span data-label="Date">________________</span>
        </div>
        <div class="header-brand">
            <img class="header-img" src="https://cdn.shopify.com/s/files/1/0568/2298/8958/files/sanrio_characters_cinnamoroll_3.png?v=1750757067" alt="APIC Picture">
        </div>
    </div>

    <h2 class="worksheet-title">Measure Conversion Chart - Lengths (UK)</h2>
 
    <!-- TABLE -->
    <table>
        <tr><th colspan="4">Metric Conversions</th></tr>
        <tr><td>1 centimetre</td><td>=</td><td>10 millimetres</td><td>1 cm = 10 mm</td></tr>
        <tr><td>1 decimetre</td><td>=</td><td>10 centimetres</td><td>1 dm = 10 cm</td></tr>
        <tr><td>1 metre</td><td>=</td><td>100 centimetres</td><td>1 m = 100 cm</td></tr>
        <tr><td>1 kilometre</td><td>=</td><td>1000 metres</td><td>1 km = 1000 m</td></tr>
 
        <tr><th colspan="4">Imperial Conversions</th></tr>
        <tr><td>1 foot</td><td>=</td><td>12 inches</td><td>1 ft = 12 in</td></tr>
        <tr><td>1 yard</td><td>=</td><td>3 feet</td><td>1 yd = 3 ft</td></tr>
        <tr><td>1 mile</td><td>=</td><td>1760 yards</td><td>1 mi = 1760 yd</td></tr>
 
        <tr><th colspan="4">Metric → Imperial</th></tr>
        <tr><td>1 metre</td><td>=</td><td>3.28084 feet</td><td>1 m = 3.28084 ft</td></tr>
        <tr><td>1 kilometre</td><td>=</td><td>0.62137 miles</td><td>1 km = 0.62137 mi</td></tr>
 
        <tr><th colspan="4">Imperial → Metric</th></tr>
        <tr><td>1 inch</td><td>=</td><td>2.54 centimetres</td><td>1 in = 2.54 cm</td></tr>
        <tr><td>1 foot</td><td>=</td><td>30.48 centimetres</td><td>1 ft = 30.48 cm</td></tr>
        <tr><td>1 mile</td><td>=</td><td>1.60934 kilometres</td><td>1 mi = 1.60934 km</td></tr>
    </table>
 
    <!-- CONVERTER -->
    <div class="form-box">
        <h3>🔄 Convert Length</h3>
 
        <form method="post">
            <input type="number" name="value" placeholder="Enter value" required>
 
            <select name="type">
                <option value="m_cm">Meter → Centimeter</option>
                <option value="cm_m">Centimeter → Meter</option>
                <option value="km_m">Kilometer → Meter</option>
                <option value="m_km">Meter → Kilometer</option>
                <option value="ft_cm">Feet → Centimeter</option>
                <option value="in_cm">Inch → Centimeter</option>
            </select>
 
            <button type="submit" name="convert">Convert</button>
        </form>
 
        <div class="result">
        <?php
        if (isset($_POST['convert']) && isset($_POST['value'], $_POST['type'])) {
            $v = $_POST['value'];
            $t = $_POST['type'];
            $result_val = null;
 
            switch ($t) {
                case "m_cm":
                    $result_val = $v * 100;
                    echo "$v m = " . $result_val . " cm";
                    break;
                case "cm_m":
                    $result_val = $v / 100;
                    echo "$v cm = " . $result_val . " m";
                    break;
                case "km_m":
                    $result_val = $v * 1000;
                    echo "$v km = " . $result_val . " m";
                    break;
                case "m_km":
                    $result_val = $v / 1000;
                    echo "$v m = " . $result_val . " km";
                    break;
                case "ft_cm":
                    $result_val = $v * 30.48;
                    echo "$v ft = " . $result_val . " cm";
                    break;
                case "in_cm":
                    $result_val = $v * 2.54;
                    echo "$v in = " . $result_val . " cm";
                    break;
            }

            // Display grade meme based on result value
            if ($result_val !== null) {
                $grade_image = null;
                $result_val = floatval($result_val);
                
                if ($result_val >= 93) {
                    $grade_image = 'C:\xampp\htdocs\fa2\images';
                } elseif ($result_val >= 90) {
                    $grade_image = 'images/A-.jpg';
                } elseif ($result_val >= 87) {
                    $grade_image = 'images/B+.png';
                } elseif ($result_val >= 83) {
                    $grade_image = 'images/B.jpg';
                } elseif ($result_val >= 80) {
                    $grade_image = 'images/B-.png';
                } elseif ($result_val >= 77) {
                    $grade_image = 'images/C+.jpg';
                } elseif ($result_val >= 73) {
                    $grade_image = 'images/C.jpg';
                } elseif ($result_val >= 70) {
                    $grade_image = 'images/C-.jpg';
                } elseif ($result_val >= 67) {
                    $grade_image = 'images/D+.webp';
                } elseif ($result_val >= 63) {
                    $grade_image = 'images/D.jpg';
                } elseif ($result_val >= 60) {
                    $grade_image = 'images/D-.jpg';
                } else {
                    $grade_image = 'images/F.jpg';
                }

                if ($grade_image && file_exists($grade_image)) {
                    echo '<div class="grade-meme"><img src="' . $grade_image . '" alt="Grade Meme"></div>';
                }
            }
        }
        ?>
        </div>
    </div>
 
</div>
 
</body>
</html>