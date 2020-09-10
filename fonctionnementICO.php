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
          <h1 style="color:white">Le fonctionnement d'une interface cerveau-ordinateur</h1><br><br>
          <p> Cécile MACAIRE & Marion OTHÉGUY</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Banner Area -->

  <!-- Start post-content Area -->
  <section class="post-content-area single-post-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 posts-list">
          <div class="single-post row">
            <div class="col-lg-12">
              <div class="quotes">
                <h5>Résumé</h5><br>
                <p class="excert">
                  <i>Les interfaces cerveau-ordinateur fonctionnent sur un système en boucle que l'on peut découper en 6 étapes : la mesure de l'activité cérébrale par capteurs, le prétraitement du signal, l'extraction des caractéristiques du signal, la classification des signaux,
                    la traduction en une commande et enfin le retour perceptif à l'utilisateur. </i>
                  </p>
                </div>
                <div class="quotes">
                  <div class="feature-img">
                    <img class="img-fluid" src="img/schema_ICOLotte2012.jpg" alt="">
                  </div>
                  <p class="excert"> Les interfaces cerveau-ordinateur sont des systèmes en boucle fermée entre le cerveau et l'interface. On peut décomposer cette boucle en 6 étapes, <a href="bibliographie.php#lotte12">(Lotte, 2012)</a> :
                  </p>
                  <p class="excert">
                    <strong>- la mesure de l'activité cérébrale à l'aide de capteurs. </strong><br>
                    Deux méthodes sont disponibles, les non invasives, c'est-à-dire qui ne nécessitent pas d'interventions chirurgicales (EEG par exemple) et les méthodes invasives (comme l'électrocorticographie (ECoG), qui enregistre l'activité cérébrale avec des électrodes intracrâniennes).
                    L'EEG est la méthode la plus utilisée à ce jour car cette méthode est non invasive, peu coûteuse et facile à mettre en place.
                  </p>
                  <p class="excert">
                    <strong>- le prétraitement du signal.</strong><br>
                    Cela consiste à "nettoyer" les signaux afin de récupérer les informations pertinentes. Par exemple, une personne peut effectuer des mouvements parasites qui génèrent des signaux électriques inutiles qu'il faut donc supprimer (utilisation de filtres fréquentiels, spatiaux, ...).
                    Par exemple, si l'EEG est utilisé ici, les signaux enregistrés sont facilement perturbés par les mouvements de l'utilisateur.
                    De plus, si l'utilisateur doit réaliser une tâche mentale ciblée (par exemple, un mouvement), les signaux enregistrés peuvent être masqués par les autres activités cérébrales enregistrées au même moment.
                  </p>
                  <p class="excert">
                    <strong>- l'extraction des caractéristiques </strong>, c'est à dire extraire les caractéristiques pour décrire signaux obtenus par leur puissance, leur localisation, ...
                  </p>
                  <p class="excert">
                    <strong>- la classification des signaux .</strong><br>
                    Cette étape va attribuer une classe à l'ensemble des caractéristiques obtenues précédemment. Cette classe correspond au type de mental identifié. <br>
                    On utilise différents types d'algorithmes. Pour les interfaces cerveau-ordinateur, on retrouve les réseaux de neurones, ou encore des analyses linéaires discriminantes.
                  </p>
                  <p class="excert">
                    <strong>- la traduction en une commande </strong> pour ensuite contrôler une application donnée (robot, interface, ...). <br>
                    En effet, une fois l'état mental identifié grâce à l'étape précédente, la commande associée va permettre à l'utilisateur d'effectuer une tâche précise sur l'application.
                  </p>
                  <p class="excert">
                    <strong>- le retour perceptif (feedback). </strong> <br>
                    Le retour perceptif permet à l'utilisateur d'avoir une idée de ce qu'il a réalisé. Il peut prendre plusieurs formes : visuel, sonore, ... et peut être discret ou continu.
                  </p>
                </div>
              </div>
            </div>
            <a href="typesICO.php" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn success radius">Page suivante</a>
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
                  <strong>Electroencéphalogramme (EEG)</strong> : dispositif qui mesure et enregistre l'activité électrique du cerveau à l'aide d'électrodes à la surface du cuir chevelu.
                </p>
                <p style="text-align:justify">
                  <strong>Electrocorticographie (ECoG)</strong> : enregistrement de l'activité neuronale à l'aide d'électrodes installées directement sur le cortex cérébral.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    include('footer.php')
    ?>
  </body>
  </html>
