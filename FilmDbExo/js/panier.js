// alert();
const divPanier = document.querySelector(".divPanier");
const btnRajouterPanier = document.getElementById("btnRajouterPanier");
btnRajouterPanier.addEventListener("click", function(){
    //recuperer la velur de quantité qui se trouve dans le select 'quantité'
    let quantite = document.getElementById("selectQuantite").value;
    let idFilm = document.getElementById("selectQuantite").dataset.idfilm;

    // console.log("quantite: " + quantite);
    // console.log("idFilm: " + idFilm); nous avions ça pour tester

//pour remplir le panier sans recharger la page, appel AJAX:
    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if(xhr.readyState == 4){
            if(xhr.status === 200 || xhr.status === 304){
                //afficher la reponse
                console.log("response: ");
                // console.log(xhr.responseText);
                // divPanier.textContent = xhr.responseText;
                let response = JSON.parse(xhr.responseText);
                console.log(response);
                divPanier.textContent = response.quantiteTotale;
            }
            else if(xhr.status === 404){
                console.log("Not found");
                // window.location.href = "./pageIntrouvable.php";
//the above line would direct to a 'not found' page (we haven't created)
            }
        }
    }

    let formData = new FormData();
    formData.append ("idFilm", idFilm);
    formData.append ("quantite", quantite);
    console.log(formData);

    xhr.open("POST" , "./rajouterPanier.php");
    xhr.send(formData);
    
});




// idFilm=>quantite