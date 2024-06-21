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
    
    function tableDeMultiplication (int $num1) : void { //since is only supposed to print
        for($i=1; $i <=12; $i++){
            print("<br>" . $num1 . " times " . $i . " equals " . ($i * $num1) . "<br>");
        }
    }

    tableDeMultiplication(7);
// to define the limit of the table, we can add as a 2nd argument: int $limite = 10 (if no limit given limit is 10)

    ?>


</body>
</html>