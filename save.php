<div id="choix">
        <div id="ajout">
            <a href="#">Ajouter une nouvelle question</a>
        </div>
        <div id="modif">
            <a href="#">Modifier une question existante</a>
        </div>
    </div>



    //fonction qui verifie que le champ est composé de chiffres uniquement
function VerifCode(){
    var nbr=document.getElementById("code_postal").value;
    var msg = document.getElementById("msg_code");
    if (isNaN(nbr)){
        msg.innerHTML=" Entrez des chiffres uniquement";
    }
    else {
        if (msg.innerHTML = )
        msg.innerHTML="";
    }
}

var code_postal = document.getElementById("code_postal");
code_postal.onchange = function () {
    VerifCode();
    }