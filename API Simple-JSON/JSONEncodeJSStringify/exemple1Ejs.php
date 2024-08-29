<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <Script>
        console.log("Exemple de stringify");
        //encoder un array JS en JSON
        let arr = ['Pauline', 'Louise', 'Stephanie'];
        let arrJson = JSON.stringify(arr);
        console.log (arrJson);

        //encoder un objet JS en JSON
        let objPersonne = {
            "nom":"Pauline",
            "hobby":"jouer"
        };
        let objPersonneJson = JSON.stringify(objPersonne);
        console.log(objPersonneJson);
        // let onscreen = document.querySelector



    </Script>

</body>
</html>