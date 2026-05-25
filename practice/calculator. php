<?php

$result = "";

if(isset($_POST['operator'])){

    // GET VALUES
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    // CALCULATIONS
    if($operator == "+"){
        $result = $num1 + $num2;
    }
    elseif($operator == "-"){
        $result = $num1 - $num2;
    }
    elseif($operator == "*"){
        $result = $num1 * $num2;
    }
    elseif($operator == "/"){

        if($num2 == 0){
            $result = "Cannot divide by zero";
        }
        else{
            $result = $num1 / $num2;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dark Calculator</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: black;
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator{
            width: 350px;
            background: #111;
            padding: 25px;
            border-radius: 25px;
        }

        h1{
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }

        input{
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 15px;
            background: #1f1f1f;
            color: white;
            font-size: 18px;
        }

        .buttons{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        button{
            padding: 20px;
            border: none;
            border-radius: 20px;
            background: #1f1f1f;
            color: #4d7cff;
            font-size: 28px;
            cursor: pointer;
        }

        button:hover{
            background: #2a2a2a;
        }

        .result{
            margin-top: 20px;
            background: #1f1f1f;
            padding: 20px;
            border-radius: 15px;
            color: white;
            text-align: center;
            font-size: 28px;
        }

    </style>

</head>

<body>

<div class="calculator">

    <h1>Calculator</h1>

    <form method="POST">

        <input 
            type="number"
            name="num1"
            placeholder="First Number"
            required
        >

        <input 
            type="number"
            name="num2"
            placeholder="Second Number"
            required
        >

        <div class="buttons">

            <button type="submit" name="operator" value="+">+</button>

            <button type="submit" name="operator" value="-">-</button>

            <button type="submit" name="operator" value="*">*</button>

            <button type="submit" name="operator" value="/">÷</button>

        </div>

    </form>

    <?php

    if($result !== ""){

        echo "
            <div class='result'>
                Result: $result
            </div>
        ";
    }

    ?>

</div>

</body>
</html>