const btnRecherche = document.getElementById("btnRecherche");
const termRecherche = document.getElementById("termRecherche");
const formHTML = document.getElementById("formHTML");


termRecherche.addEventListener("keyup", function (){
    // const terme = termRecherche.value;

    //l'objet formData contient les donnees du form choisi
    let formData = new FormData(formHTML);

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4){
            console.log("fini");
            let arrayFilms = JSON.parse(xhr.responseText);
            //ici on devra generer l'HTML pour chaque film dans le DOM
            console.log(arrayFilms);

        }
    }


    xhr.open("POST", "filmRechercheAJAXT.php");
    xhr.send (formData); //on envoie l'objet formData, avant on était en train d'envoyer null


})