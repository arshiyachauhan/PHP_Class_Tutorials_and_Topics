<!-- create a calculator using GET method that performs addition, subtraction, multiplication or division based on user input
create a form for input of 2 numbers and a dropdown to select operation, use GET to send data, display the result after operation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operation'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                $operationSymbol = '+';
                break;
            case 'subtract':
                $result = $num1 - $num2;
                $operationSymbol = '-';
                break;
            case 'multiply':
                $result = $num1 * $num2;
                $operationSymbol = '×';
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $operationSymbol = '÷';
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
        }

        if (is_numeric($result)) {
            echo "<h3>Result: {$num1} {$operationSymbol} {$num2} = {$result}</h3>";
        } else {
            echo "<h3>{$result}</h3>"; // Error for division by zero
        }
    }
    ?>
</body>
</html>
