<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- 10) Toujours à partir de deux tableaux existants, écrivez un algorithme
    qui calcule le schtroumpf des deux tableaux. Pour calculer le
    schtroumpf, il faut multiplier chaque élément du tableau 1 par
    chaque élément du tableau 2, et additionner le tout. Par exemple si
    l\'on a: 
**Tableau 1 :**
  --- ---
  3   6
  --- ---

**Tableau 2 :**
  --- --- --- ----
  4   8   7   12
  --- --- --- ----

**Le Schtroumpf sera :**

3 \* 4 + 3 \* 8 + 3 \* 7 + 3 \* 12 + 6 \* 4 + 6 \* 8 + 6 \* 7 + 6 \* 12
= 279-->
    <?php
    $tableau1 = [3,6];
    $tableau2 = [4,8,7,12];
    $tableau3 = [];

    for ($i = 0; $i <= count($tableau1)-1; $i++) {
        foreach($tableau2 as $value){
            $result = $tableau1[$i]*$value;
            $tableau3[] = $result;
        }
    }
    $total = 0;
    // print_r($tableau3);
    for ($i =0; $i <= count($tableau3)-1; $i++){
        $total += $tableau3[$i];
        // print($total);
    }
    print_r($tableau1);
    print_r($tableau2);
    print("\n" . "Toute chiffre en tableau1 multiplié par toute chiffre en tableau2 =" . $total);
    ?>
</body>

</html>