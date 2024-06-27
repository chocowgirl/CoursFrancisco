<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button id="btn1">Click me 1!</button>
    <button id="btn2">Click me 2!</button>


    <script>


        let btn1 = document.getElementById("btn1");
        document.addEventListener("click", function(event) {
            // console.log("btn1 click!!!");
            // //l'element où on clique
            // console.log(event.target);
            // //L'element auquel on a rajouté le listener
            // console.log(event.currentTarget);
            console.log("On clique sur le document, n'importe où");

                    // DELECATION
        if(event.target.id === "btn1"){
            console.log("on clique sur le btn1");
            btn1.textContent = "Je change...";
        }
        else if(event.target.id === "btn2"){
            console.log("on clique sur le btn2");
            btn2.textContent = "Allons faire la pause";
            // on peut agir sur tout le DOM
            btn1.textContent = "On change aussi btn1";
        }

        console.log('target :>> ', event.target);

        console.log('currentTarget :>> ', event.currentTarget);
        });

        // btn1.addEventListener("click", (event)=>{
        //     console.log("on clique sur le btn1");
        //     btn1.textContent ="Je change...";
        // })






    </script>
</body>
</html>