<?php
echo "<p></p>";

if (isset($_GET['calculate'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];


    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            // echo "<p>$result</p>";
            break;
        case '-':
            $result = $num1 - $num2;
            // echo "<p>$result</p>";
            break;
        case 'X':
            $result = $num1 * $num2;
            // echo "<p>$result</p>";
            break;
        case '/':
            $result = $num1 / $num2;
            // echo "<p>$result</p>";
            break;
        default:
            $result = "<p>Something went wrong here</p>";
    }
} else {
    $result = null;
    // echo "<p>$result</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator using FORM Method</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="GET">
        <fieldset>
            <legend>
                Calculator here

            </legend>

            <input type="number" name="num1" id="" placeholder="Enter your 1st operand" required>
            <select name="operator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="X">X</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="num2" id="" placeholder="Enter your 2nd operand" required>
            <input type="submit" value="Calculate" id="submitBtn" name='calculate'>
            <p class="result-display"><?= $result ?? "Output Here" ?></p>
        </fieldset>
    </form>
</body>

</html>