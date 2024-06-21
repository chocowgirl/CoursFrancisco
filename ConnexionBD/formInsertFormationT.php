<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //dans cette page on insère les données coming from the form
    var_dump ($_POST);
    $cours = $_POST['cours'];
    $description = $_POST['description'];

    include("./db/config.php");

    $cnx = new PDO (DSN, USERNAME, PASSWORD);

    $sql = "INSERT INTO formation (id, cours, description) VALUES (null, '" . $cours . "','" . $description. "')";

    $stmt = $cnx->prepare ($sql);

    $stmt->execute();




    ?>
</body>
</html>