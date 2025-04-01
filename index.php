<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA SIGMA 💪</title>
    <style>
        body {
            background: black;
            font-family: 'Courier New', monospace;
            text-align: center;
            color: white;
        }
        .container {
            margin: 50px auto;
            padding: 20px;
            width: 350px;
            background: #222;
            border-radius: 15px;
            box-shadow: 0px 0px 10px rgba(255, 0, 0, 0.8);
        }
        input[type='text'] {
            width: 90%;
            height: 40px;
            font-size: 1.5em;
            text-align: right;
            border-radius: 10px;
            margin-bottom: 10px;
            background: black;
            color: #0f0;
            border: 2px solid red;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 5px;
        }
        button {
            padding: 15px;
            font-size: 1.2em;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            background: red;
            color: white;
            font-weight: bold;
        }
        button:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>💪CALCULADORA💪</h1>
        <input type="text" id="expression" readonly>
        <div class="buttons">
            <button onclick="insert('7')">7</button>
            <button onclick="insert('8')">8</button>
            <button onclick="insert('9')">9</button>
            <button onclick="insert('+')">+</button>
            
            <button onclick="insert('4')">4</button>
            <button onclick="insert('5')">5</button>
            <button onclick="insert('6')">6</button>
            <button onclick="insert('-')">-</button>
            
            <button onclick="insert('1')">1</button>
            <button onclick="insert('2')">2</button>
            <button onclick="insert('3')">3</button>
            <button onclick="insert('*')">×</button>
            
            <button onclick="insert('0')">0</button>
            <button onclick="insert('(')">(</button>
            <button onclick="insert(')')">)</button>
            <button onclick="insert('/')">÷</button>
            
            <button onclick="insert('Math.sqrt(')">√</button>
            <button onclick="insert('**')">^</button>
            <button onclick="clearExpression()">C</button>
            <button onclick="calculate()">=</button>
        </div>
    </div>
    <script>
        function insert(value) {
            document.getElementById("expression").value += value;
        }
        
        function clearExpression() {
            document.getElementById("expression").value = "";
        }
        
        function backspace() {
            let exp = document.getElementById("expression").value;
            document.getElementById("expression").value = exp.substring(0, exp.length - 1);
        }
        
        function calculate() {
            try {
                let exp = document.getElementById("expression").value;
                exp = exp.replace(/\^/g, '**'); // Corrige a potenciação
                document.getElementById("expression").value = eval(exp);
            } catch {
                document.getElementById("expression").value = "Erro";
            }
        }
    </script>
</body>
</html>
