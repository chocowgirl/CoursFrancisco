<?php
declare (strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
        // function addition (float $v1, float $v2): float {
        //     return (v1 + v2);
        // }
        // print("<br> L'addition est: " . addition(4, 6)); 
        
        // function switchvalues(string $v1, string $v2) : void {
        //     $one = $v2;
        //     $two = $v1;
        //     $v2 = $one;
        //     $v1 = $two;
        // }  
    // This function ^^ will not work for reversing values to the vars, b/c it copies the variables to work them to 
    // make it work with the REAL variable values, we have to put an & sign in front of them in the function declaration

        function switchvalues(string &$n1, string &$n2) : void {
            $autre = $n1; // autre takes the value of n1 (jenny)
            $n1 = $n2;// n1 now takes on the value of n2 (emilie)
            $n2 = $autre; // now n2 takes on the value of autre (jenny)
        }

        $nom1 = "jenny";
        $nom2 = "emilie";
        switchvalues($nom1, $nom2); //w our function we can't use a literal like ("jenny", "emilie")
        print("<br> " . $nom1);     //b/c the function has to accept VARIABLES.

        // or in function 
    ?>
</body>
</html>