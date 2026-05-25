<?php
$result = "";
$display = "";

if(isset($_POST['operator'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

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
    elseif($operator == "clear"){
        $result = "";
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
            font-family: 'Segoe UI', Arial, sans-serif;
            display: flex;
            justify-content: center;            align-items: center;
            height: 100vh;
        }

        .calculator{
            width: 320px;
            background: #000;
            padding: 20px;
            border-radius: 30px;
        }

        .display{
            width: 100%;
            height: 120px;
            background: #000;
            color: white;
            font-size: 48px;
            text-align: right;
            padding: 20px;
            margin-bottom: 20px;
            border: none;
            outline: none;
            font-weight: 300;
        }

        .buttons{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(5, 1fr);
            gap: 12px;
        }

        button{
            padding: 25px;
            border: none;
            border-radius: 50%;
            background: #333;
            color: white;
            font-size: 24px;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 500;
        }

        button:hover{
            background: #444;
            transform: scale(1.05);
        }

        button:active{            transform: scale(0.95);
        }

        .operator{
            color: #4d7cff;
            font-size: 28px;
        }

        .blue{
            background: #4d7cff;
            color: white;
        }

        .blue:hover{
            background: #3d6cef;
        }

        .equals{
            grid-row: span 2;
            border-radius: 50px;
            background: #4d7cff;
            color: white;
            font-size: 32px;
        }

        .equals:hover{
            background: #3d6cef;
        }

        .zero{
            grid-column: span 2;
            border-radius: 50px;
            text-align: left;
            padding-left: 35px;
        }

        .clear{
            color: #4d7cff;
        }

        .backspace{
            color: #4d7cff;
            font-size: 20px;
        }

    </style>
</head>
<body>

<div class="calculator">    <form method="POST" id="calcForm">
        <input 
            type="text" 
            class="display" 
            name="display" 
            id="display" 
            value="<?php echo htmlspecialchars($result); ?>" 
            readonly
        >
        
        <input type="hidden" name="num1" id="num1" value="">
        <input type="hidden" name="num2" id="num2" value="">
        <input type="hidden" name="operator" id="operator" value="">

        <div class="buttons">
            <button type="button" class="clear" onclick="clearDisplay()">C</button>
            <button type="button" class="backspace" onclick="backspace()">⌫</button>
            <button type="button" class="operator" onclick="appendOperator('%')">%</button>
            <button type="button" class="operator" onclick="appendOperator('/')">÷</button>

            <button type="button" onclick="appendNumber('7')">7</button>
            <button type="button" onclick="appendNumber('8')">8</button>
            <button type="button" onclick="appendNumber('9')">9</button>
            <button type="button" class="operator" onclick="appendOperator('*')">×</button>

            <button type="button" onclick="appendNumber('4')">4</button>
            <button type="button" onclick="appendNumber('5')">5</button>
            <button type="button" onclick="appendNumber('6')">6</button>
            <button type="button" class="operator" onclick="appendOperator('-')">−</button>

            <button type="button" onclick="appendNumber('1')">1</button>
            <button type="button" onclick="appendNumber('2')">2</button>
            <button type="button" onclick="appendNumber('3')">3</button>
            <button type="button" class="operator" onclick="appendOperator('+')">+</button>

            <button type="button" class="zero" onclick="appendNumber('0')">0</button>
            <button type="button" onclick="appendNumber('.')">.</button>
            <button type="button" class="equals" onclick="calculate()">=</button>
        </div>
    </form>
</div>

<script>
    let currentInput = '';
    let firstNumber = '';
    let operation = '';

    function updateDisplay(){
        document.getElementById('display').value = currentInput || '0';
    }
    function appendNumber(num){
        if(num === '.' && currentInput.includes('.')) return;
        currentInput += num;
        updateDisplay();
    }

    function appendOperator(op){
        if(currentInput === '') return;
        firstNumber = currentInput;
        operation = op;
        currentInput = '';
    }

    function clearDisplay(){
        currentInput = '';
        firstNumber = '';
        operation = '';
        updateDisplay();
    }

    function backspace(){
        currentInput = currentInput.slice(0, -1);
        updateDisplay();
    }

    function calculate(){
        if(firstNumber === '' || currentInput === '') return;
        
        const num1 = parseFloat(firstNumber);
        const num2 = parseFloat(currentInput);
        let result;

        switch(operation){
            case '+':
                result = num1 + num2;
                break;
            case '-':
                result = num1 - num2;
                break;
            case '*':
                result = num1 * num2;
                break;
            case '/':
                result = num2 !== 0 ? num1 / num2 : 'Error';
                break;
            case '%':
                result = num1 % num2;
                break;
            default:                result = currentInput;
        }

        currentInput = result.toString();
        firstNumber = '';
        operation = '';
        updateDisplay();
    }

    // Keyboard support
    document.addEventListener('keydown', function(e){
        if(e.key >= '0' && e.key <= '9') appendNumber(e.key);
        if(e.key === '.') appendNumber('.');
        if(e.key === '+' || e.key === '-' || e.key === '*' || e.key === '/') appendOperator(e.key);
        if(e.key === 'Enter' || e.key === '=') calculate();
        if(e.key === 'Escape') clearDisplay();
        if(e.key === 'Backspace') backspace();
    });
</script>

</body>
</html>