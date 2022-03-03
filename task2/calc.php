<?php
    echo "<br />";
    
        
    switch ($_POST["operation"]) {
        case "+":
            echo "Сумма чисел равна ".($_POST["num1"] + $_POST["num2"]);
            break;
        case "-":
            echo "Разность чисел равна ".($_POST["num1"] - $_POST["num2"]);
            break;
        case "*":
            echo "Произведение чисел равно ".($_POST["num1"] * $_POST["num2"]);
            break;
        case "/":
            if (!$_POST["num2"] == 0){
            echo "Частное чисел равно ".($_POST["num1"] / $_POST["num2"]);
            } else echo "на ноль делить нельзя!";
            break;
    }
    echo "<br />";
    echo "<h3><a href=index.html>назад<a/></h3>";
?>