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
          <h1 style="color:white">Modèle prédictif des interfaces cerveau-ordinateur</h1><br><br>
          <p> Cécile MACAIRE & Marion OTHÉGUY</p>
        </div>
      </div>
    </section>
    <!-- End Banner Area -->
    <section class="post-content-area single-post-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 posts-list">
            <div class="quotes">
              <h5>Résumé</h5><br>
              <p class="excert">
                Dans cette section <i>Modèle prédictif de l'acceptabilité des interfaces cerveau-ordinateur</i>, nous vous présentons l'intérêt de construire un modèle pour prédire l'utilisabilité des interfaces cerveau-ordinateur. Nous enchainerons par une introduction aux réseaux bayésiens, pour finalement vous présentez notre méthodologie pour la mise en place d'un tel réseau.
              </p>
            </div>
            <div class="quotes">
              La description des facteurs d'acceptabilité nous a permis de construire un questionnaire afin d'observer comment ces variables sont liées.
              Le projet de ce TER était de traiter les données recueillies par notre questionnaire pour créer un modèle de prédiction. Nous n'avons malheureusement pas eu le temps. <br><br>
              L'enjeu dans la construction de ce modèle était de pouvoir, à partir de certains traits et caractéristiques de l'individu, estimer la qualité de la performance résultante.
              En effet, dans le cadre de thérapies, il serait intéressant d'améliorer les facteurs ayant une influence positive sur la performance et de minimiser ceux qui ont une influence négative.
              Il n'y aurait pas d'intérêt à réaliser une thérapie ICO à une personne qui en aurait une mauvaise expérience.
              Bien évidemment, notre étude ne s'est pas faite accompagnée d'exercices ICO, donc la notion de performance n'a pas pu être étudiée. Mais les critères d'utilité perçue et la notion "prêt à essayer l'outil" permettent de mettre en évidence les traits des individus potentiellement motivés et donc à risque d'avoir une meilleure performance. <br><br>
              Pour réaliser un modèle de prédiction, nous nous sommes intéressées aux réseaux bayésiens.
              Les réseaux bayésiens s'appuient sur la théorie des graphes et des probabilités. Ils peuvent être mis en place pour souligner des causalités, et classer les comportements (variables) qui se ressemblent.
              La construction de ce réseau dépend de la table de probabilité conditionnelles des variables étudiées.
              Cette table repose sur le théorème de Bayes : ∀ i, j P(X<sub>i</sub>|X<sub>j</sub>)=P(X<sub>i</sub>,X<sub>j</sub>)/P(X<sub>j</sub>).
              Ou plus généralement, ∀ k P(X<sub>1</sub>,X<sub>2</sub>,...,X<sub>k-1</sub>,X<sub>k</sub>)=P(X<sub>1</sub>)P(X<sub>2</sub>,X<sub>1</sub>)P(X<sub>3</sub>,X<sub>2</sub>)...P(X<sub>k</sub>,X<sub>k-1</sub>).
            </br>En effet, nous cherchons à déterminer les probabilités liant une variable (ci-dessus X<sub>1</sub>) à un sous ensemble k de variables (ci dessus X<sub>i</sub> ∀i∈{2;k} ).
            <br><br>
            Afin d'identifier le réseau le plus optimal, il nous aurait fallu allier les théories de probabilités conditionnelles et théories des graphes.
            <br><br>
            Une méthode pour la construction de notre réseau est de partir de l'arbre issu de nos hypothèses. <br>
            Les hypothèses émises sont les suivantes :
            <ul class="unordered-list">
              <li>L’âge a une influence sur la sensibilité aux nouvelles technologies et sur les facteurs cognitifs et psychologiques.</li>
              <li>La taille de l’agglomération peut être liée à la notion d’urbain et de rural. Nous pouvons imaginer qu’en milieu urbain, la promotion des nouvelles technologies est plus importante.</li>
              <li>De même, il est possible que dans certains pays, la promotion des technologies sensibilise plus les individus à celle-ci.</li>
              <li>Les individus les plus diplômés ont plus de chances d’avoir appris à manipuler un ordinateur.</li>
              <li>Les facteurs liés à l'apprentissage sont témoins de stratégies cognitives et résultent de l’éducation.</li>
              <li>La connaissance d’un individu ayant subi un AVC rendrait le sujet plus sensible à la thérapie.</li>
              <li>Le stress peut être lié à la dépression et affecter les relations de l’individus avec les nouvelles technologies (computer anxiety).</li>
              <li>La dépression affecterait l’estime de soi et le sentiment d’auto-efficacité.</li>
              <li>L’estime de soi, tout comme le sentiment d’auto-efficacité, affecteraient la notion de contrôle de l’individu sur l’interface et donc l’intention d’utilisation. Le locus de contrôle interne serait lié au sentiment d’auto-efficacité.</li>
              <li>La sensibilité aux nouvelles technologies affecterait la motivation vis-à-vis de l’outil informatique et la facilité de l’utilisation perçue pour les nouvelles technologies.</li>
              <li>La notion de computer anxiety affecterait la facilité de l’utilisation perçue.</li>
              <li>La facilité de l’utilisation perçue aurait un impact sur l’utilité perçue ainsi que sur l’intention d’utilisation.</li>
              <li>La motivation vis-à-vis de l’outil et l’utilité perçue influencerait l’intention d’utilisation.</li>
              <li>L’efficacité perçue aurait un impact sur l’utilité perçue et l’intention d’utilisation.</li>
              <li>La qualité de la prise en charge thérapeutique peut jouer sur le stress, la sensibilisation à la thérapie et l’intention d’utilisation.</li>
              <li>La sensibilisation à la thérapie peut avoir un impact sur l’utilité perçue et l’intention d’utilisation.</li>
            </ul>
            Nous faisons la remarque que les facteurs proposés ici peuvent être influencés par d’autres variables non citées et non étudiés dans ce travail.
            De plus, cet arbre présente des cycles or les réseaux bayésiens sont des graphes acycliques : il nous aurait donc fallu travailler sur la table des probabilités conjointes et la notion de causalité (lien 1-1) afin de trouver la configuration qui garantit l'hypothèse d'indépendance des variables et potentiellement construire le réseau.
            <br><br>
            <center><img src="img/modeleprediction/graph.JPG"></center>
            Légende :
            <center><img src="img/modeleprediction/legend.JPG" width="387" height="190"></center>
            <br>
            <br>
            Nous notons toutefois que le réseau résultant n'aurait pas été très fin pour discriminer les variables "utilité perçue" et "intention d'utilisation" étant donné que plus de 90% des sujets interrogés seraient prêts à utiliser cette technologie et la juge utile.
          </div>
          <div class="quotes">
            Nous aurions pu aussi étudier des modèles d'algorithmes pour la construction de ces réseaux tel que les algorithmes de descente de gradient (ou "Hill-climbing") et les algorithmes de type Grow-shrink.
            L'algorithme de descente de gradient permet à partir d'un arbre quelconque, d'obtenir un arbre maximisant un score. C'est un algorithme qui de manière locale et itérative à partir d'un arbre initial, construit un nouvel arbre : on garde l'arbre avec la meilleure configuration  <a href="bibliographie.php#bride16">(Bridé, 2016)</a>.
            L'algorithme de type Grow-Shirk construit l'arbre de manière locale : pour chaque variable, définir les causalités qui les lient aux autres variables tout en gardant la notion d'indépendance. <a href="bibliographie.php#bride16">(Bridé, 2016).</a></br><br>
          </div>
        </div>
        <div class="col-lg-4 sidebar-widgets">
          <div class="widget-wrap">
            <div class="single-sidebar-widget newsletter-widget">
              <h4 class="newsletter-title">Bibliographie</h4>
              <p>
                <a href="bibliographie.php">Accéder à la bibliographie</a>
              </p>
            </div>
            <div class="single-sidebar-widget newsletter-widget">
              <h4 class="newsletter-title">Vocabulaire</h4>
              <p style="text-align:justify">
                <strong>Interface cerveau-ordinateur (ICO)</strong> : système de communication entre un être vivant et un outil externe.
              </p>
              <p style="text-align:justify">
                <strong>Modèle de prédiction</strong> : outil exploitant des données pour mettre en relation différents facteurs et étudier leurs interactions.
              </p>
              <p style="text-align:justify">
                <strong>Réseaux Bayésiens</strong> : modèle probabiliste graphique décrivant les relations entre les variables afin de décrire un phénomène.
              </p>
              <p style="text-align:justify">

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Post-content Area -->

  <?php
  include('footer.php')
  ?>
</body>
</html>
3
