<!DOCTYPE html>
<html>

<head>
    <title>Stories</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #bfd8de 0%, #99d0ee 100%);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            color: #4a4a4a;
            line-height: 1.6;
        }

        #header {
            background-color: #ffffff;
            color: #6b7280;
            text-align: center;
            padding: 40px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        #header h1 {
            font-size: 2.2rem;
            font-weight: 300;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: #202224;
        }

        #main {
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 28px;
            padding: 50px 20px;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            width: 200px;
            background-color: #ffffff;
            color: #6b7280;
            padding: 32px 22px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            border: 1px solid #f0ebe5;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            border-color: #e5d5c5;
        }

        .card h3 {
            font-size: 1.4rem;
            font-weight: 400;
            margin-bottom: 18px;
            color: #1f1e1e;
            letter-spacing: 1px;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #f0ebe5;
            margin-bottom: 16px;
            transition: border-color 0.3s ease;
        }

        .card:hover img {
            border-color: #d4c4b8;
        }

        .card .zodiac {
            font-size: 0.85rem;
            color: #a8a29e;
            margin-bottom: 18px;
            font-style: italic;
            letter-spacing: 0.5px;
        }

        .card .story {
            font-size: 0.9rem;
            color: #78716c;
            line-height: 1.7;
            font-weight: 300;
        }

        #foot {
            background-color: #faf9f7;
            color: #a8a29e;
            text-align: center;
            padding: 25px;
            font-size: 0.85rem;
            border-top: 1px solid #f0ebe5;
            margin-top: auto;
        }
    </style>
</head>

<body>

<div id="header">
    <h1>STORIES</h1>
</div>

<div id="main">

    <?php include('ashlee.php'); ?>
    <?php include('akhel.php'); ?>
    <?php include('taylorswift.php'); ?>
    <?php include('juliana.php'); ?>
    <?php include('lei.php'); ?>

</div>

<div id="foot">
    <p>© 2026 Angelika S. Magandingan</p>
</div>

</body>
</html>