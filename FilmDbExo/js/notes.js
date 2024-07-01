
//creation des étoiles dans le div
let divNote =document.getElementById("divNote");

let menuEtoiles = jSuites.rating(divNote, {
    value: divNote.dataset.moyenne ,
    tooltip:['Horrible', 'Moyen', 'Plutôt bien', 'Bon', 'Sublime']

});


//detecter le click dans divNote et obtenir le nombre d'"etoiles puis mettre a jour la note pour ce film de cet utilisateur
let divNoteUtilisateur =document.getElementById("divNoteUtilisateur");

let menuEtoilesUtilisateur = jSuites.rating(divNoteUtilisateur, {
    value: divNoteUtilisateur.dataset.valeur,
    tooltip:['Horrible', 'Moyen', 'Plutôt bien', 'Bon', 'Sublime'],
    onchange: stockerNote
    });


//faire appel AJAX pour inserer/mettre a jour la note de cet utilisateur pour ce film
    function stockerNote(){
        // console.log("appel"); used to check that console shows responsiveness until here

        //verifier s'il s'agit d'une nouvelle note
        let nouvelleNote = true;
        if(divNoteUtilisateur.dataset.valeur !== ""){
            nouvelleNote = false; //ce film est déjà noté par l'utilisateur
        }
        console.log("nouvelle note ?:" + nouvelleNote);

        let xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4){
                
                console.log("fini");
            }
        }

        // on doit envoyer: s'il s'agit d'une nouvelle note: la note


        let formData = new FormData();
        formData.append("idFilm", divNoteUtilisateur.dataset.idfilm);
        formData.append("valeur", menuEtoilesUtilisateur.getValue());
        formData.append("nouvelleNote", nouvelleNote);

        xhr.open("POST", "./noteUpdate.php");
        xhr.send(formData);

    }
