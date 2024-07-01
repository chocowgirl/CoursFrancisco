<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script rel="stylesheet" src="filmRechercheAJAX.js" defer></script> -->
    <script rel="stylesheet" src="./js/filmRechercheAJAX.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        include"./checkSession.php";
        include"./nav.php";

    ?>
    <form id="formHTML">
        <label for="termRecherche">Rechercher</label>
        <input type="text" id="termRecherche" name="termRecherche">
        <button id="btnRecherche">Recherche!</button>
    </form>

    <div id="divFilms">
    <!-- ici on afficerha les films -->

    </div>

</body>
</html>