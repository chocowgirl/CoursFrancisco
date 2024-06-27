

let btn1 = document.getElementById("btn1");
btn1.addEventListener("click", function(){
    // console.log("click");
let resultat = document.getElementById("resultat");



    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function (){
        if(xhr.readyState === 4){
            console.log("on a fini");
            //xhr response text
            // resultat.innerText = xhr.responseText;
            let arrayObjets = JSON.parse(xhr.responseText);
            console.log(arrayObjets);

            //afficher un resultat:
            // resultat.innerText = "Hello " + arrayObjets[1].prenom + " " + arrayObjets[1]['nom'];

            //afficher la liste de noms dans un ul à l'intérieur du div

            //vider le div avant de rajouter
            resultat.innerHTML = "";

            let ul = document.createElement("ul");
            
            for (let i in arrayObjets){
                let li = document.createElement("li");
                li.textContent = arrayObjets[i]['prenom'];

                ul.appendChild(li);
                // console.log(arrayObjets[i]);
            }
            resultat.appendChild(ul);
        }
    };

    xhr.open("GET", "exemple2T.php");
    xhr.send();
});