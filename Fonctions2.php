<?php
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function sumOf2numbers (int|float $num1, int|float $num2) : float { //peut aussi mettre : void since is only supposed to print
        $total = $num1 + $num2;
        print($total);
        return $total; //return for this question is optional
    }

    sumOf2numbers(2.5, 5);


    ?>


</body>
</html>