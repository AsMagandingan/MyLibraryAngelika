<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume of Shapes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #333;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .shape-name {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Volume of Shapes Calculator</h1>
        
        <?php
        
        function volumeCube($s) {
            return pow($s, 3);
        }
        
        
        function volumeRectangularPrism($length, $width, $height) {
            return $length * $width * $height;
        }
        
        
        function volumeCylinder($radius, $height) {
            return pi() * pow($radius, 2) * $height;
        }
        
         
        function volumePyramid($baseArea, $height) {
            return (1/3) * $baseArea * $height;
        }
        
        
        function volumeCone($radius, $height) {
            return (1/3) * pi() * pow($radius, 2) * $height;
        }
        
        
        function volumeSphere($radius) {
            return (4/3) * pi() * pow($radius, 3);
        }
        
        // Test values
        $cubeSide = 5;
        $prismLength = 4;
        $prismWidth = 3;
        $prismHeight = 6;
        $cylinderRadius = 3;
        $cylinderHeight = 7;
        $pyramidBaseArea = 16;
        $pyramidHeight = 9;
        $coneRadius = 4;
        $coneHeight = 10;
        $sphereRadius = 5;
        
        // Calculate volumes
        $cubeVol = volumeCube($cubeSide);
        $prismVol = volumeRectangularPrism($prismLength, $prismWidth, $prismHeight);
        $cylinderVol = volumeCylinder($cylinderRadius, $cylinderHeight);
        $pyramidVol = volumePyramid($pyramidBaseArea, $pyramidHeight);
        $coneVol = volumeCone($coneRadius, $coneHeight);
        $sphereVol = volumeSphere($sphereRadius);
        ?>
        
        <table>
            <thead>
                <tr>
                    <th colspan="3">Volume of Shapes</th>
                </tr>
                <tr>
                    <th>Shape & Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="shape-name">Cube<br>s = <?php echo $cubeSide; ?></td>
                    <td>V = s³</td>
                    <td><?php echo number_format($cubeVol, 2); ?></td>
                </tr>
                <tr>
                    <td class="shape-name">Right Rectangular Prism<br>l = <?php echo $prismLength; ?>, w = <?php echo $prismWidth; ?>, h = <?php echo $prismHeight; ?></td>
                    <td>V = l × w × h</td>
                    <td><?php echo number_format($prismVol, 2); ?></td>
                </tr>
                <tr>
                    <td class="shape-name">Cylinder<br>r = <?php echo $cylinderRadius; ?>, h = <?php echo $cylinderHeight; ?></td>
                    <td>V = π × r² × h</td>
                    <td><?php echo number_format($cylinderVol, 2); ?></td>
                </tr>
                <tr>
                    <td class="shape-name">Pyramid<br>Base Area = <?php echo $pyramidBaseArea; ?>, h = <?php echo $pyramidHeight; ?></td>
                    <td>V = (1/3) × B × h</td>
                    <td><?php echo number_format($pyramidVol, 2); ?></td>
                </tr>
                <tr>
                    <td class="shape-name">Cone<br>r = <?php echo $coneRadius; ?>, h = <?php echo $coneHeight; ?></td>
                    <td>V = (1/3) × π × r² × h</td>
                    <td><?php echo number_format($coneVol, 2); ?></td>
                </tr>
                <tr>
                    <td class="shape-name">Sphere<br>r = <?php echo $sphereRadius; ?></td>
                    <td>V = (4/3) × π × r³</td>
                    <td><?php echo number_format($sphereVol, 2); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>