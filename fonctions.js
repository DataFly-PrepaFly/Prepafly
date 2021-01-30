 
    //fonction qui verifie que le champ est composé de chiffres uniquement
function VerifNss(){
    var nbr=document.getElementById("nss").value;
    var msg = document.getElementById("msg_code");
    if (isNaN(nbr)){
        msg.innerHTML=" Entrez des chiffres uniquement";
    }
    else {
        msg.innerHTML="";
    }
}

var nss = document.getElementById("nss");
nss.onchange = function () {
    VerifNss();
    }


function VerifMail() {
    var mail = document.getElementById("mail");
    var mailconf = document.getElementById("mailconf");
    var verifmail = document.getElementById("verifmail");

    if (mail.value==mailconf.value && mail.value!=""){
        verifmail.innerHTML="OK";
        verifmail.style.color="green";
    }
    else {
        verifmail.innerHTML="X";
        verifmail.style.color="red";
    }
}

var mailconf = document.getElementById("mailconf");
mailconf.onchange = function () {
    VerifMail();
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