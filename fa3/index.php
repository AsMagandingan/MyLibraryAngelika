<!DOCTYPE html>
<html>
<head>
    <title>My Library - Angelika</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .menu {
            list-style: none;
        }
        .menu li {
            margin: 15px 0;
        }
        .menu a {
            display: block;
            padding: 15px 20px;
            background: #e8f4f8;
            color: #2c3e50;
            text-decoration: none;
            border-radius: 8px;
            border-left: 4px solid #3498db;
            transition: all 0.3s;
        }
        .menu a:hover {
            background: #d4e6f1;
            border-left-color: #2980b9;
            transform: translateX(5px);
        }
        .menu a strong {
            display: block;
            margin-bottom: 3px;
        }
        .menu a small {
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
 
<div class="container">
    <h1>📚 My Library</h1>
    <p class="subtitle">Angelika - Formative Assessment 3</p>
    
    <ul class="menu">
        <li>
            <a href="act1.php">
                <strong>Activity 1</strong>
                <small>Student Information - Using Arrays</small>
            </a>
        </li>
        <li>
            <a href="act2.php">
                <strong>Activity 2</strong>
                <small>Array Operations</small>
            </a>
        </li>
        <li>
            <a href="act3.php">
                <strong>Activity 3</strong>
                <small>User Defined Functions</small>
            </a>
        </li>
    </ul>
</div>
 
</body>
</html>
 