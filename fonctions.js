    //fonction qui verifie que le champ est composé de chiffres uniquement
function VerifCode(){
    var nbr=document.getElementById("code_postal").value;
    var msg = document.getElementById("msg_code");
    if (isNaN(nbr)){
        msg.innerHTML=" Entrez des chiffres uniquement";
    }
    else {
        msg.innerHTML="";
    }
}

var code_postal = document.getElementById("code_postal");
code_postal.onchange = function () {
    VerifCode();
    }


//fonction pour réinitialiser le formulaire
function resetForm() {
        document.getElementById("form").reset();
    }

//fonction de popup pour confirmer la validation du formulaire
function confirmation() {
    var confirmation = confirm("Voulez-vous vraiment soumettre ces modifications ?");
    return confirmation;
}