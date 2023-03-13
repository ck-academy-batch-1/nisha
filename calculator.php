<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>CALCULATOR</h1>
<form method="POST" action="">
    <label for="number1"></label>
    <input type="text" id="number1" name="number1" value="number1">
    <label for="number2"></label>
    <input type="text" id="number2" name="number2" value="number2"><br><br>
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/"><br><br>
    <label for="anwser" name="operation">answer</label>
    <input readonly="readonly" name="result" value="<?php echo $result; ?>">
   
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];
$answer = $_POST["answer"];
$result= " ";
if(isset ($number1) && isset($number2))
{
    switch($answer)
    {
        case "+";
        $result = $num1 + $num2;
        break;
        case "-";
        $result = $num1 + $num2;
        break;
        case "*";
        $result = $num1 + $num2;
        break;
        case "/";
        $result = $num1 + $num;
        break;
    }
}
}
?>
</body>
</html>
