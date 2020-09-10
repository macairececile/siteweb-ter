<?php
include('header.php')
?>
<!-- Start Banner Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center text-center banner-content">
      <div class="col-lg-12">
        <h3 style="color:white;padding-bottom: 5px; padding-top:45px">
          Travail d'Etude et de Recherche : </h3>
          <h2 style="color:white">
            Étude et Modélisation des Facteurs d'Acceptabilité <br>
            des Interfaces Cerveau-Ordinateur (ICO) <br>
            dans la rééducation post-AVC
          </h2><br><br>
          <h1 style="color:white">Résultats de l'analyse qualitative</h1><br><br>
          <p> Cécile MACAIRE & Marion OTHÉGUY</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->
  <!-- Start post-content Area -->
  <section class="post-content-area single-post-area section-gap">
    <div class="container">
      <div class="quotes">
        <h5>Résumé</h5><br>
        <p class="excert">
          <i>Notre questionnaire a collecté des données qualitatives. Afin de mettre en évidence les liens entre les modalités de chaque variable, nous avons choisi d’utiliser l’analyse des correspondances multiples <a href="bibliographie.php#chavent14">(Chavent, 2014)</a>, <a href="bibliographie.php#reboul">(Reboul)</a>. Elle reprend des concepts vu cette année en Analyse de données avec l’Analyse de Composantes Principales.
            Vous trouverez notre code R en <a href="acm-questionnaire.R" download>le téléchargeant ici</a>.
          </i>
        </p>
      </div>
      <div class="quotes">
        <h3 class="mt-20 mb-20">Analyse de composantes multiples à 34 variables</h3>
        <p class="excert">
          Pour réaliser cette analyse par composantes multiples, nous avons retiré les individus ayant présentés une réponse « Ne souhaite pas répondre » car ces données devenaient des caractéristiques des axes étudiées. Le tableau de données ici est de 56 individus pour 34 variables.
          <br>Pour cette première analyse, nous avons utilisé Rstudio et la librairie « ade4 » <a href="bibliographie.php#analyser">(analyse-R)</a>.
        </p>
        <br>
        <p class="excert">
          L’inertie totale est de 2,735 et l’axe 1 en explique 5,9%. L’inertie projeté cumulée des deux premiers axes est de 11,1%.
          <br>La projection des variables sur le premier axe factoriel est difficilement interprétable :
        </p>
        <p class="excert">
        <div class="feature-img">
          <center><img class="img-fluid" src="img/resultats/cercle-corre-tot.JPG" alt="" ></center>
        </div>
        </p>
        <p class="excert">
          En effet, le nombre de modalités de variables est très important, rendant difficile l’interprétation.</br> Cherchons à déterminer quelles sont les variables caractérisant le plus chaque axe.
        </p>
        <br>
        <p class="excert"> <h5>Axe 1</h5>
        </p>
        <p class="excert">
        <div class="feature-img">
          <center><img class="img-fluid" src="img/resultats/axe1-corr.png" alt="" ></center>
        </div>
        <center><i>Histogramme des corrélations des modalités avec la première composante</i></center>
        </p>
        <p class="excert">
        <div class="feature-image">
          <center><img class="img-fluid" src="img/resultats/axe1-repartition.JPG" alt="" >
          </center>
        </div>
        <center><i>Répartition des modalités selon le premier axe</i></center>
      </p>
        <p class="excert">
          La première composante principale est moyennement liée (cor>0.3) avec : l’âge, la catégorie socio-professionnelle, l’activité sportive présente, l’anxiété générale, la connaissance d’une personne ayant eu un AVC, la notion d’esthétique de la thérapie et la notion d’informations lié à la thérapie.
        </br>En conséquence, plus un individu sera à droite sur le plan factoriel, plus il sera jeune (18-24ans), moins il fera du sport, il sera anxieux, il sera en accord avec la notion d’esthétique pour la thérapie, plus il aura besoin d’informations sur la thérapie. Plus un individu sera à gauche, il fera plutôt parti de la catégorie d’âge 65 et plus, retraité, moins il sera anxieux, moins il sera en accord avec la notion d’esthétique pour la thérapie.
      </p>
    </br>
    <p class="excert"> <h5>Axe 2</h5>
    </p>
    <p class="excert">
      <div class="feature-img">
      <center><img class="img-fluid" src="img/resultats/axe2-cor.png" alt="" ></center>
      </div>
      <center><p><i>Histogramme des corrélations des modalités avec la seconde composante</i></p></center>
    </p>
    <p class="excert">
    <div class="feature-image">
      <center><img class="img-fluid" src="img/resultats/axe2-repartition.JPG" alt="" ></center>
    </div>
    <center><p><i>Répartition des modalités selon le second axe</i></p></center>
  </p>
    <br>
    <p class="excert">
      La seconde composante principale est liée moyennement (cor>0.3) avec : l’âge, les catégories socio-démographiques, les jeux vidéo, la notion d’esthétique de la thérapie ainsi que la notion de résultats rapides.
    </br>En conséquence, plus un individu sera en haut sur le plan factoriel, plus il sera jeune, étudiant, jouera aux jeux vidéo, ne sera pas en accord avec la notion d’esthétique pour la thérapie et attendra des résultats rapides pour la thérapie. Plus un individu sera en bas, il sera plutôt agriculteur et en accord avec la notion d’esthétique pour la thérapie.
  </p>
  <br>
  <p class="excert">
    Recommençons cette ACM avec les variables mises en évidence dans l’ACM précédente : l’âge, la catégorie socio-démographique, l’activité sportive actuelle, l’esthétique de la thérapie, l’anxiété générale, la connaissance d’une personne ayant eu un AVC, les résultats rapides de la thérapie, la notion "jouer aux jeux vidéo", l’anxiété générale. Nous garderons aussi la variable utilité perçue.
  </br>Pour cette seconde analyse, nous avons utilisé Rstudio et la librairie « FactoMineR » <a href="bibliographie.php#analyser">(analyse-R)</a>.
</p>
<h3 class="mt-20 mb-20">Analyse de composantes multiple à 14 variables</h3>
</br>
<p class="excert">
  Nous réalisons une ACM à 56 individus et 10 variables. Le premier plan factoriel explique 17,2% de l’inertie.
</p>
<div class="feature-img">
  <center><img class="img-fluid" src="img/resultats/acm2.png" alt="" >
    <p><i>Inertie des modalités des variables étudiées sur le premier plan factoriel</i></p>
    <img class="img-fluid" src="img/resultats/acm2-ind.png" alt="" >
    <p><i>Inertie des individus sur le premier plan factoriel</i></p></center>
  </div>
  <p class="excert">
    Quelles sont les valeurs qui contribuent à ces axes ? Les tests T sont réalisés modalité par modalité et permettent de voir les variables ayant un effet significatif sur la dimension.
  </p>
  <p class="excert">
  <div class="feature-img">
    <center><img class="img-fluid" src="img/resultats/dim1-acm2.JPG" alt="" ></center>
    </div>
  </p>
  <p class="excert">
  <div class="feature-img">
    <center><img class="img-fluid" src="img/resultats/dim2-acm2.JPG" alt="" ></center>
  </div>
</p>
    <p class="excert">
      Ainsi, l’axe 1 est lié positivement avec les conditions suivantes : « retraités », « 65 ans et plus » , « Pas d’anxiété générale » , « Utilité perçue efficace », « Ne joue pas aux jeux vidéo », « Pratique actuellement plusieurs sports pas semaine », « Connaissance d’une personne ayant eu un AVC, dans le cadre professionnel ou professionnel et personnel », « Donner des informations sur la thérapie n’a pas d’affect », « Des résultats visibles rapidement est très important », « l’aspect esthétique de la thérapie n’est pas important.</br>
      <br>
      L’axe 1 est lié négativement avec les conditions suivantes : « Ni d’accord ni en désaccord avec résultats rapides », « Explications simples », « Connaissance d’une personne proche ayant eu un AVC », « Jouer aux jeux vidéo plusieurs fois par jour » , « Utilité perçue possible », « Beaucoup d’informations vis-à-vis de la thérapie », « Etudiants », « Pas de sports actuellement », « 18-24ans » et « anxiété générale ».</br><br>
      L’axe 2 est lié positivement avec les conditions suivantes : « Esthétique de la thérapie très importante », « ArtisantsCommerçantsChefDEntreprise », « Jeux vidéo une fois par semaine », « 50-64 ans », Cadres et Professions supérieures », « Explications du déroulement de la thérapie simple », « 25-34 ans », « Pas de sports actuellement ». Ainsi, plus une personne sera en haut sur ce plan factoriel et plus elle aura de chance de présenter ces valeurs.</br><br>
      L’axe 2 est lié négativement avec les conditions suivantes : « Pratiquer du sport une fois par semaine », « Jeux vidéo une fois par jour », « Jeux vidéo une fois par mois », « Donner des informations sur la thérapie n’a pas d’affect », « Ni en accord, ni en désaccord avec la notion pour l’esthétique de la thérapie », « Importance des résultats rapides de la thérapie », « Etudiants » et « 18-24 ans ». Ainsi, plus une personne sera en bas sur le plan factoriel et plus elle représentera ces modalités.
    </p>
  </div>
</div>
</section>



<?php
include('footer.php')
?>
</body>
</html>
