
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style/CGU.css">
      <link rel="stylesheet" href="style/bandeau_prepafly.css"/>
      <link rel="stylesheet" href="style/bandeau_profil.css"/>
      <link rel="stylesheet" href="style/nav_simple.css" />
      <link rel="stylesheet" href="style/footer.css" />
	<title>PrepaFly - C.G.U.</title>
</head>

	<body>

      <?php 
      if (isset($_SESSION['mail'])) {
            require 'vues/bandeau_profil.php';
      }
      else {
            require 'vues/bandeau_prepafly.php';
      }

      include("vues/nav_simple.php"); 
      ?>
		
	<br><h3 id="cgu"> CONDITIONS GÉNÉRALES D'UTILISATION</h3>

      <div class="all">
		    <span class="lien"><a href="#Article1">Article 1 : Qui sommes-nous ?</a></span> 
		    <span class="lien"><br /><a href="#Article2">Article 2 : Utilisation des applications</a> </span> 
		    <span class="lien"><br /><a href="#Article3">Article 3 : Achat des abonnement</a> </span> 
		    <span class="lien"><br /><a href="#Article4">Article 4 : Offre de démonstration</a> </span> 
		    <span class="lien"><br /><a href="#Article5">Article 5 : Limitation de responsabilité</a> </span> 
		    <span class="lien"><br /><a href="#Article6">Article 6 : Propriété intellectuelle</a> </span> 
		    <span class="lien"><br /><a href="#Article7">Article 7 : Litiges</a> </span>

		    <span class="lien"><br /><a href="#Article8">Article 8 : Acceptation</a> </span> 

		    <span class="lien"><br /><a href="#Article9">Article 9 : Droit applicable</a> </span> <br /><br /><br>

            <h2 id="Article1"><a href="#cgu"><em>Article 1 - Qui sommes nous ?</em></a></h2>
            <p><span class="intro"> DataFly </span> exerce en qualité de sous-traitant à l’entreprise <span class="intro"> Infinite Measures</span>. Domiciliée à Paris, <span class="intro"> DataFly</span> fournit des sites web spécialisés dans les tests d’aptitudes pour divers domaines. Ici, le site web vise les compagnies aériennes, et est accessible par les pilotes des compagnies clientes et leurs managers, appartenant à ces mêmes compagnies.<br /> 
            <br /><span class="intro"> DataFly </span> permet, sur son site web, de s'entraîner, s’évaluer en tant que pilote; mais aussi d'évaluer son équipe lorsque l’on est manager, à des exercices psychotechniques. Toute personne ayant les identifiants nécessaires à la connexion, préalablement fourni par le manager, possède un droit d’accès aux  tests proposés sur le site. 
            <br />Vous pouvez acheter des Abonnements par le billet d’un contrat établi entre l’entreprise <span class="intro"> Infinite Measures </span> et la compagnie aérienne, (ci-après dénommés « les Abonnements »). Cela permet de débloquer l'accès à des sélections d'exercices (aussi appelés « tests ») utilisables dans le site, pendant une période déterminée.
            <br />L’utilisation du site est soumise aux présentes Conditions Générales et à la Politique de Confidentialité (ci-après dénommées les « Conditions Générales »). En accédant à notre site, vous prenez acte et reconnaissez avoir lu, compris et accepté les Conditions Générales de Vente. Si vous n’êtes pas d’accord avec ces conditions, veuillez ne pas utiliser notre site ou le quitter.</p>

            <br />

            <h2 id="Article2"><a href="#cgu"><em>Article 2 : Utilisation des applications</em></a></h2>

            <h4>Durée</h4>
            <p>Pendant toute la durée des Abonnements, vous êtes libres d'utiliser le site internet ainsi que les tests autant de fois que vous le souhaitez.</p>

            <h4>Compte</h4>
            <p>L'utilisation du site requiert la création d'un compte par la compagnie aérienne. Vos résultats sont donnés sur le site dans une page qui y est dédiée.</p>

            <h4>Contraintes d'utilisations</h4>
            <p>L'Utilisateur doit prendre note des restrictions d'utilisation suivantes :</p>
            <ul>
                <li>Vous ne pouvez créer qu'un seul compte par personne.</li>
		    	<li>Vous ne pouvez pas partager votre compte avec un autre Utilisateur, cela pourrait fausser les résultats.</li>
		    </ul>
		    <p>Information : Nous avons pris ces mesures afin d'endiguer l'utilisation frauduleuse du programme (partage de comptes) ainsi que l'abus de l'offre de démonstration.</p>

            <h4>Résultats</h4>
            <p>À la fin de chaque test, le site vous présentera le résultat sous forme de tableaux.
            <br />Ces résultats sont fournis à titre indicatif et permettent une visualisation du niveau du pilote par le manager.</p>

            <h4>Mises à jour obligatoires</h4>
            <p>Des mises à jour sont faites régulièrement afin d’améliorer l’expérience de l’utilisateur sur le site.</p>

            <h4>Coûts d'accès</h4>
            <p>Tous les coûts d’accès aux tests (par exemple les frais d’accès à Internet ou les frais liés aux données mobiles) incombent à l’utilisateur.</p>

            <br />

            <h2 id="Article3"><a href="#cgu"><em>Article 3 : Achat et abonnement</em></a></h2>
        
            <h4>Prix</h4>
            <p>Les prix des Abonnements sont affichés dans la Boutique.</p>

            <h4>Modalités de paiement</h4>
            <p>Les paiements peuvent se faire par Paypal, par virement bancaire SEPA ou par cheque. PayPal accepte également les paiements par carte bancaire.</p>

            <h4>Délais de livraison</h4>
            <p>Nous ajoutons les abonnements sur votre compte immédiatement après réception de votre paiement.</p>
            <p>Dans le cas d'un paiement par virement bancaire, notez que le paiement par virement standard peut mettre quelques jours avant d'être visible sur nos comptes bancaires.</p> 

            <h4>Remboursement</h4>
            <p>Comme l'indique <a id="lien" href="https://www.legifrance.gouv.fr/codes/id/LEGIARTI000006292052/2005-12-01/" target="_blanck">l'Article L121-20-2 du Code de la Consommation</a> alinéa 4, nous ne sommes pas en possibilité de vous proposer de délai de réflexion ou de rétractation, dès lors qu'au moins l'un des test a été utilisé. Si, toutefois, vous n'avez pas utilisé l'un de nos tests dans les 7 jours suivant le paiement, nous sommes en mesure de vous rembourser, sur demande de votre part, via le moyen de paiement utilisé lors de l'achat. Ce remboursement aura lieu dans un délai de 7 jours ouvrés.</p>
            <p>Vous êtes tenus d'utiliser la période d'essai gratuite afin de vous assurer de la pleine compatibilité des Applications avec votre matériel. Des problèmes d'incompatibilité ne sauraient être un prétexte à un remboursement.</p>

            <br />

            <h2 id="Article4"><a href="#cgu"><em>Article 4 : Offre de démonstration</em></a></h2>

            <p>Afin qu'il n'y ait aucune ambigüité sur le contenu du site, nous offrons la possibilité à chacun de nos Clients de tester gratuitement une partie de nos tests, pendant une durée de 48 heures. Cette offre ne peut pas être renouvelée.</p>

            <br />

            <h2 id="Article5"><a href="#cgu"><em>Article 5 : Limitation de responsabilité</em></a></h2>

            <h4>Délai de livraison</h4>
            <p>Nous ne sommes aucunement affiliés à l'ENAC ou à Air France, et nous ne pourrions être responsables d'un changement dans le déroulement des tests d’aptitudes pour les pilotes, voire de la suppression de ces épreuves.</p>
            <p>Nous prenons des mesures pour veiller à ce que le site soit libre de virus informatiques et autres programmes malicieux grâce aux pare-feux mis en place. Toutefois, compte tenu de la nature du réseau, nous ne pouvons pas nous engager sur ce point et vous conseillons de vous prémunir  d’un antivirus contre tous virus informatiques ou autres programmes malicieux qui pourraient être transmis à votre ordinateur, suite à votre utilisation du site.</p>
            <p>Vous convenez que nous serons contraints de mettre le site hors ligne lorsque nous pensons cela nécessaire à des fins de maintenance ou de mis à jour du système.</p>

            <br />

            <h2 id="Article6"><a href="#cgu"><em>Article 6 : Propriété intellectuelle</em></a></h2>
            <p>L’accès au site ne vous confère aucun droit de propriété intellectuelle relatif au site autre que celui de les utiliser conformément aux présentes Conditions Générales.</p>
            <p>Vous ne pouvez, en aucun cas, reproduire, représenter, modifier, transmettre, publier, adapter, sur quelque support que ce soit, par quelque moyen que ce soit, ou exploiter de quelque manière que ce soit, tout ou partie du site sans autorisation. Toute exploitation, à quelque titre que ce soit, de tout ou partie du site pourra faire l’objet d’une poursuite en justice.</p>

            <br />

            <h2 id="Article7"><a href="#cgu"><em>Article 7 : Litiges</em></a></h2>
            <p>Si nous constatons un manquement aux présentes Conditions Générales, nous enverrons un avertissement au client concerné par courrier électronique. En cas de récidive, le compte du client sera fermé, et aucun remboursement ne pourra se faire.</p>
            <p>Tous les litiges auxquels les présentes pourraient donner lieu, concernant tant leur validité, leur interprétation, leur exécution, leur résiliation, leurs conséquences et leurs suites devront faire l’objet d’une communication préalable à « Infinite Measures » dans le but d’obtenir une solution à l’amiable. Ceux qui n’auraient pu être résolus de cette manière seront soumis aux tribunaux compétents dans les conditions de droit commun.</p>

            <br />

            <h2 id="Article8"><a href="#cgu"><em>Article 8 : Acceptation</em></a></h2>
            <p>Vous reconnaissez avoir eu connaissance, préalablement à votre inscription au Site et à l'achat de vos Abonnements, d’une manière lisible et compréhensible, des présentes Conditions Générales.</p>
            <p>En utilisant le site ainsi que les tests qui le composent suite à un achat ou tout type d’abonnement adhère et accepte en pleine connaissance de cause les présentes Conditions Générales.</p>
            <p>Les Conditions Générales pouvant faire l’objet de modifications ultérieures, la version applicable à votre achat est celle en vigueur sur le site à la date où vous passez la commande. Nous vous demanderons de confirmer au moment de votre achat si vous acceptez la version la plus récente des présentes Conditions Générales. Si vous n’êtes pas d’accord avec les changements que nous apportons aux présentes Conditions Générales, vous devez immédiatement arrêter d’utiliser le site ainsi que nous le signaler.</p>

            <br />

            <h2 id="Article9"><a href="#cgu"><em>Article 9 : Droit applicable</em></a></h2>
            <p>Les présentes Conditions Générales sont soumises au droit français, sans préjudice des dispositions impératives de la loi du pays du domicile du consommateur.</p>
        </div>

      <?php include("vues/footer.php"); ?>

	</body>
</html>