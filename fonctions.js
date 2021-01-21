
//fonction pour questions deroulantes de FAQ
function Reponse(N) {
    var x = document.getElementById("deroulant"+N);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else { 
        x.style.display = "none";
    }
}  

//fonction pour refermer les réponses de FAQ
function Inverse() {
    var y = document.getElementById("fermer");
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        y.style.display = "block";
    }
}   

//fonction qui verifie que le champ est composé de chiffres uniquement
function VerifCode(){
    var nbr=document.form.code_postal.value;
    if (isNaN(nbr)){
        document.getElementById("msg_code").innerHTML="Entrez des chiffres uniquement";
        return false;
    }
    else {
        document.getElementById("msg_code").innerHTML="";
        return true;
    }
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