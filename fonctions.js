function Reponse(N) {
    var x = document.getElementById("deroulant"+N);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else { 
        x.style.display = "none";
    }
}  

function Inverse() {
    var y = document.getElementById("fermer");
    if (y.style.display === "block") {
        y.style.display = "none";
    } else {
        y.style.display = "block";
    }
}   