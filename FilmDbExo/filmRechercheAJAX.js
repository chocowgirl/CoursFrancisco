const btnRecherche = document.getElementById("btnRecherche");
const termRecherche = document.getElementById("termRecherche");
const formHTML = document.getElementById("formHTML");
const divFilms = document.getElementById("divFilms");

termRecherche.addEventListener("keyup", function (){
    // const terme = termRecherche.value;


//a chaque recherche on vide le div
    // divFilms.innerHTML="";


    if(termRecherche.value.length == 0){
        divFilms.innerHTML="";
        return;
    }


    //l'objet formData contient les donnees du form choisi
    let formData = new FormData(formHTML);

    let xhr = new XMLHttpRequest();


    //Here we tell the program what we'll do once the server is put in play
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4){
            console.log("fini");
            let arrayFilms = JSON.parse(xhr.responseText);
            //ici on devra generer l'HTML pour chaque film dans le DOM
            console.log(arrayFilms);
            // divFilms.innerHTML += "coco";

            //on parcourt les films, chaque film est un objet
            arrayFilms.forEach(objetFilm => {
                // divFilms.innerHTML += objetFilm.titre;
                divFilms.innerHTML +=`<div class="card" style="width: 18rem;">
                <img class="card-img-top" width ="150px" src="./uploads/${objetFilm.image}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a href="./detailFilm.php?idFilm=${objetFilm.id}">${objetFilm.titre}</a></h5>
                    <p class="card-text">${objetFilm.description}</p>
                </div>
            </div>
            <br>`
            });







        }
    }

    //Here we put the server into play
    xhr.open("POST", "filmRechercheAJAXT.php");
    xhr.send (formData); //on envoie l'objet formData (objet pre-existant), avant on était en train d'envoyer null


})