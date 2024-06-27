// console.log("coucou");

let btn1 = document.getElementById("btn1");
btn1.addEventListener("click", function(){
    console.log("btn1 click");

    let xhr = new XMLHttpRequest();

    // on se prépare pou les consequences de ce qu'on va faire (appel au serveur)
    xhr.onreadystatechange = function (){
        // console.log("changement état");
        // console.log(xhr.readyState);

        if(xhr.readyState === 4){
            console.log("appel complet, état 4");
            console.log("le resultat " + xhr.responseText);
        }
    }

    //c'est *ici* qu'on appel au serveur:
    // APRES avoir préparé ici pour des consequences
    //cet appel est non-bloquant (car AJAX)
    xhr.open ("GET", "exemple1T.php");
    xhr.send();

    console.log("on continue");
});



