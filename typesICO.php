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
          <h1 style="color:white">Les différents types d'interfaces cerveau-ordinateur</h1><br><br>
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
                  <i>Cette partie vous présente les différents types d'interface cerveau-ordinateur.
                  </i>
                </p>
              </div>
              <div class="quotes">
                <p class="excert">
                  Il existe trois types d'interfaces cerveau-ordinateur (ICO) : les ICO actives, les ICO réactives et les ICO passives.
                </p>
                <ul class="unordered-list">
                  <li><strong>Les ICO actives,</strong>
                    <blockquote class="generic-blockquote">Les ICO actives permettent à l'utilisateur d'envoyer des commandes directement à une interface en effectuant une tâche mentale particulière. Nous pouvons prendre comme exemple le contrôle direct d'une main virtuelle, ou d'un fauteuil roulant. La notion de contrôle peut être asynchrone car le sujet prend la décision de l'action, il génère de manière active des signaux cérébraux.<a href="bibliographie.php#ahn14">(Ahn et al., 2014)</a>
                      <center><img src="img/typesICO/wheelchair.jpg"</center>
                      <center>Fauteuil roulant contrôlé par ICO</center>
                    </blockquote>
                  </li>
                  <li><strong>Les ICO réactives,</strong>
                    <blockquote class="generic-blockquote"> Contrairement aux ICO actives, les ICO réactives ne génèrent pas toujours un signal cérébral spontané. Dans le cas des ICO réactives, les informations relatives à l'intention de l'utilisateur sont intégrées au signal de réponse à la stimulation. <a href="bibliographie.php#ahn14">(Ahn et al., 2014)</a>
                      L'utilisateur a l'obligation d'attendre la machine pour effectuer une commande, on parle de contrôle synchrone.
                      Ce dispositif utilise les potentiels évoqués positifs (P300), ce sont une modulation d'activité cérébrale générée suite à l'apparition d'un stimulus possédant des caractéristiques spécifiques. Si la personne ne porte pas attention au stimulus, il n'y aura donc pas de potentiels.
                      Un exemple d'ICO réactive est le P300 speller. <br>
                      <center><img src="img/typesICO/P300.png" width="249" height="250"</center>
                      <center>Clavier P300 speller</center><br>
                    </blockquote>
                  </li>
                  <li><strong>Les ICO passives </strong>
                    <blockquote class="generic-blockquote">Les ICO passives désignent une interface cerveau-ordinateur dans laquelle l'utilisateur ne tente pas de contrôler son activité cérébrale, c'est à dire un processus d'interaction qui ne repose pas sur une action directe, explicite ou volontaire de l'utilisateur, mais davantage sur son état dans un contexte particulier <a href="bibliographie.php#george10">(George et Lecuyer, 2010}</a>. Ainsi, l’activité cérébrale est assimilée à une entrée et peut être utilisée pour adapter l’application à l’état mental de l’utilisateur.
                    </blockquote>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <a href="interetICO.php" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn success radius">Page suivante</a>
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
                <strong>Synchrone</strong> : se dit des mouvements qui se font dans un même temps.
              </p>
              <p style="text-align:justify">
                <strong>Asynchrone</strong> : se dit d'une machine dans laquelle le passage d'une opération à une autre s'effectue sous le contrôle d'un signal déclenché lors de la fin d'exécution de la première opération.
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
