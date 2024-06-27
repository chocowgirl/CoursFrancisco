<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <button id="btn1">Start timer de 5s</button>
    <button id="btn2">Afficher bonjour dans la console</button>

    <script>
        let btn1 = document.getElementById("btn1");
        btn1.addEventListener("click", ()=>{
            setTimeout(function(){
                btn1.textContent = "C'est fini!!";
                console.log("fin de timer");
            },5000);
        });
        

        //ce bout de code ne va pas attendre les 5 secondes
        console.log("on continue ou pas?");


        let btn2 = document.getElementById("btn2");
        btn2.addEventListener("click", function (){
            console.log("On clique sur le btn2");
        })




    </script>
</body>
</html>