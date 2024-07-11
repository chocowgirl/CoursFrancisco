<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once"./Personne.php";
    include_once"./Societe.php";

    $p = new Personne ("George", "george@gmail.com");
    $p2 = new Personne ("Lucas", "lucas@gmail.com");
    $s = new Societe ("The Coca Cola Company", "A Street, 9990");

// rajouter un employé à la société
    $s->addEmploye ($p);
    $s->addEmploye ($p2);

    $s->removeEmploye($p2);

    var_dump($p);
    var_dump($p2);
    // print("<br><br>");
    var_dump($s);

    ?>
</body>
</html>