
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style/F.A.Q.css" />
        <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
        <link rel="stylesheet" href="style/bandeau_profil.css"/>
        <link rel="stylesheet" href="style/nav_simple.css" />
        <link rel="stylesheet" href="style/footer.css" />
        <title>PrepaFly - F.A.Q.</title>

    </head>

    <script>

/*
        function SelectResponses() {
            for (var i = Things.length - 1; i >= 0; i--) {
                Things[i]
            }
        }*/


        function Reponse1() {
            var x = document.getElementById("deroulant1");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else { 
                x.style.display = "none";
            }
        }  

        
        function Reponse2() {
            var x = document.getElementById("deroulant2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }  

        function Reponse3() {
            var x = document.getElementById("deroulant3");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }  


        function Reponse4() {
            var x = document.getElementById("deroulant4");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }  

        
        function Reponse5() {
            var x = document.getElementById("deroulant5");
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

    </script> 
        <!-- Fin du Java Script -->

    <body>

        <h3><br>F.A.Q.</h3>

            <div class="container">
                <div class="question">
                    <div class="visible" onclick="Reponse1()">

                        <a href="#"><?php echo $infos[0][1];?><img class="deroulant" src="images/icons8_plus.png"></a>
                        
                    </div>
                    <div id="deroulant1" class="reponse" style="display: none;">
                        <p><?php echo $infos[0][2];?></p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse2()">
                        <a href="#"><?php echo $infos[1][1];?><img class="deroulant" src="images/icons8_plus.png"></a>
                    </div>
                    <div id="deroulant2" class="reponse" style="display: none;">
                        <p><?php echo $infos[1][2] ?></p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse3()">
                        <a href="#">Question 3 <img class="deroulant" src="images/icons8_plus.png"></a>
                    </div>
                    <div id="deroulant3" class="reponse" style="display: none;">
                        <p>Réponse 3</p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse4()">
                        <a href="#">Question 4 <img class="deroulant" src="images/icons8_plus.png"></a>
                    </div>
                    <div id="deroulant4" class="reponse" style="display: none;">
                        <p>Réponse 4</p>
                    </div>
                </div>
                <div class="question">
                    <div class="visible" onclick="Reponse5()">
                        <a href="#">Question 5 <img class="deroulant" src="images/icons8_plus.png"></a>
                    </div>
                    <div id="deroulant5" class="reponse" style="display: none;">
                        <p>Réponse 5</p>
                    </div>    
                </div>
            </div>
    </body>

</html>