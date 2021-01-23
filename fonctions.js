 
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