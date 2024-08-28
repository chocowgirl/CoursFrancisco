<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "./IPayEtRembourse.php";
    include "./CAPaymentMethod.php";

    include "./CCarteCredit.php";
    include "./CBancontact.php";

    use Interfaces\Bancontact;
    use Interfaces\CarteCredit;

    $carte1 = new CarteCredit();
    $carte1->affichertype();
    $carte1->payer();
    $carte1->paymentConfirmationIndicator();
    $carte1->rembourser();

    echo "<br>";

    $carte2 = new Bancontact();
    $carte2->affichertype();
    $carte2->paymentConfirmationIndicator();



    ?>
</body>
</html>