<?php
include('header.php')
?>

<script>
function onClick(id, border) {
  var e = document.getElementById(id);
  var b = document.getElementById(border);
  if(e.style.display === 'block'){
    e.style.display = 'none';
    b.style.border = '0';
  }
  else{
    e.style.display = 'block';
    b.style.border = '1px solid #192633';
  }
}
</script>
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
          <h1 style="color:white">Les facteurs d'acceptabilité des interfaces cerveau-ordinateur</h1><br><br>
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
          <div class="quotes">Ici, vous serons présentés les différents facteurs identifiés comme facteurs d'acceptabilité des interfaces cerveau-ordinateur dans la littérature, accompagnés d'hypothèses que nous avons émises.
            <br><br>Nous avons cherché à identifier ces termes en les catégorisant. Puis, nous avons étudié leur potentiel valeur dans l'acceptabilité de cette technologie en construisant un <a href="questionnaire.pdf">questionnaire</a>.
            <br><br>Certains facteurs n'ont pas été évalués dans le questionnaire car les tests pour les mesurer étaient trop conséquents ou difficiles à quantifier.  De plus, nous ne voulions pas que le questionnaire dure plus de 15 min pour des raisons d'efficacité.
            <br><br>Enfin, pour évaluer les facteurs cognitifs comme l'humeur, la dépression, ... nous avons utilisé des tests psychologiques existants. Il a fallu en raccourcir certains pour ne pas dépasser la limite de temps sans pour autant erroner leur conclusion.
            <br><br>En cliquant sur le bouton "Evaluation du facteur", vous pourrez trouver la question utilisée pour évaluer le facteur. <br><br>
            <ul class="unordered-list">
              <li><a href="#criteressocio">Les critères socio-démographiques</a><br></li>
              <li><a href="#vie">Les expériences personnelles de vie</a><br></li>
              <li><a href="#cognitifs">Les facteurs cognitifs et psychologiques</a></li>
              <li><a href="#relations">Les relations de l'individu avec les nouvelles technologies</a></li>
              <li><a href="#soins">Le rapport aux soins</a></li>
            </div>
            <div class="single-post row">
              <div class="col-lg-12">
                <div class="quotes">
                  <h3 class="mt-20 mb-20" id='criteressocio'>Les critères socio-démographiques</h3>
                  <p class="excert">Nous distinguons en premier les facteurs d'acceptabilité liés aux critères socio-démographiques :</p>
                  <ul class="unordered-list">
                    <li><strong>le sexe,</strong>
                      <blockquote class="generic-blockquote">
                        En effet, les femmes performeraient mieux que les hommes, <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>
                        <a href="bibliographie.php#randolph12">(Randolph, 2012)</a>. <br>
                        <button href="#question2" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question2', 'border2')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border2">
                          <p id="question2" style="display: none;margin:15px">
                            Vous identifiez vous comme : <br>
                            - Une Femme <br>
                            - Un Homme <br>
                            - Autre <br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                    </li>
                    <li><strong>l'âge,</strong>
                      <blockquote class="generic-blockquote">
                        Nous pouvons poser comme hypothèse que le fait d'être jeune est un facteur favorisant la performance. Nous partons du fait qu'une personne plus jeune aura été sensibilisée aux nouvelles technologies. De ce fait, cette jeune personne pourrait montrer une maîtrise de l'instrument et une confiance en l'instrument meilleure qu'une personne plus âgée. <br>
                        De plus, nous pourrions penser que les capacités cognitives des jeunes les mèneraient à être plus performant pour utiliser une ICO que leurs aînés. <br>
                        Enfin, une personne jeune, sensibilisée aux technologies et malade pourrait porter plus d'espoir dans ces thérapies utilisant une ICO que leur aîné, ici se dégage une notion de confiance en l'outil.<br>
                        <button href="#question1" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question1', 'border1')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border1">
                          <p id="question1" style="display: none;margin:15px">
                            Dans quel tranche d'âge vous situez-vous ? <br>
                            - 18-24 ans <br>
                            - 25-34 ans <br>
                            - 35-49 ans <br>
                            - 50-64 ans <br>
                            - 65 ans et plus <br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                    </li>
                    <li><strong>le milieu social,</strong>
                      <blockquote class="generic-blockquote">
                        Nous pouvons distinguer les personnes issues d'un milieu rural et d'un milieu urbain. En milieu urbain, la promotion et l'accessibilité des nouvelles technologies peuvent être plus facilement mises en avant. <br>
                        <button href="#question3" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question3', 'border3')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border3">
                          <p id="question3" style="display: none;margin:15px">
                            Dans quel type d'agglomération avez-vous majoritairement vécu au cours des 10 dernières années ? <br>
                            - Moins de 1000 habitants <br>
                            - 1000 à 2000 habitants <br>
                            - 2000 à 5000 habitants <br>
                            - 5000 à 10 000 habitants <br>
                            - 10 000 à moins de 20 000 habitants <br>
                            - 20 000 à moins de 50 000 habitants <br>
                            - 50 000 à moins de 100 000 habitants <br>
                            - 100 000 à moins de 300 000 habitants <br>
                            - 10 000 à moins de 20 000 habitants <br>
                            - 300 000 habitants et plus <br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                    </li>
                    <li><strong>l'éducation,</strong>
                      <blockquote class="generic-blockquote">
                        Les personnes ayant eu une éducation promouvant les technologies accepteraient plus d'utiliser une interface cerveau-ordinateur et seraient plus apte à l'utilisation.
                        <button href="#question5" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question5', 'border5')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border5">
                          <p id="question5" style="display: none;margin:15px">
                            Quelle est votre catégorie socio-professionnelle ? <br>
                            - Agriculteurs exploitants <br>
                            - Artisans, commerçants, chefs d'entreprise <br>
                            - Cadres et professions intellectuelles supérieures <br>
                            - Professions intermédiaires (professeur des écoles, secrétaire de direction, agent de maîtrise, ...) <br>
                            - Employés <br>
                            - Ouvriers <br>
                            - Retraités <br>
                            - Etudiants <br>
                            - Sans activité professionnelle <br>
                            - Je ne souhaite pas répondre <br><br>
                            Quel est votre plus haut diplôme obtenu ? <br>
                            - Brevet des collèges ou équivalent <br>
                            - CAP, BEP ou équivalent <br>
                            - DUT/BTS ou équivalent (Bac +2) <br>
                            - Licence ou équivalent (Bac +3) <br>
                            - Master ou équivalent (Bac +5) <br>
                            - Doctorat ou éuivalent (Bac +8) <br>
                            - Autre <br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                    </li>
                    <li><strong>l'environnement.</strong>
                      <blockquote class="generic-blockquote">
                        Nous pouvons nous poser la question du lieu de vie de la personne. Par exemple, une personne vivant aux États-Unis dont la culture met en avant les outils technologiques par le biais des formations, mais aussi des séries, films, ... aura accès et sera sensibilisée à plus d'outils technologiques qu'un individu vivant en pays sous-développé, ou en guerre (nous pouvons prendre comme exemple un pays tel que le Soudan). <br>
                        <button href="#question4" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question4', 'border4')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border4">
                          <p id="question4" style="display: none;margin:15px">
                            Dans quel pays avez-vous majoritairement vécu au cours des 10 dernières années ?
                          </p>
                        </div>
                      </blockquote>
                    </li>
                  </ul>
                </div>
                <div class="quotes">
                  <h3 class="mt-20 mb-20" id="vie">Les expériences personnelles de vie</h3>
                  <p class="excert">Nous distinguons ensuite les expériences personnelles de vie :</p>
                  <ul class="unordered-list">
                    <li><strong>les facteurs liés à l'apprentissage,</strong>
                      <blockquote class="generic-blockquote">
                        Les facteurs liés à l'apprentissage sont témoins de stratégies cognitives de l'individu.
                        Ils comprennent la capacité de jouer d'un instrument, pratiquer plusieurs sports, taper sur un clavier, jouer aux jeux vidéos, avoir la capacité de faire deux choses en même temps et enfin, avoir la capacité de bouger l'ensemble de son corps <a href="bibliographie.php#jeunet16">(Jeunet, 2016)</a>,<a href="randolph10"> (Randolph, 2010)</a>.<br>
                        <button href="#question6" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question6', 'border6')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border6">
                          <p id="question6" style="display: none;margin:15px">
                            Avez-vous appris à jouer d'un instrument de musique ? <br>
                            - Oui, et je joue tous les jours <br>
                            - Oui, et je joue plusieurs fois par semaine <br>
                            - Oui, et je joue au moins une fois par semaine <br>
                            - Oui, et je joue quelque fois par an <br>
                            - Oui, mais je ne joue plus <br>
                            - Non <br>
                            - Je ne souhaite pas répondre <br><br>
                            Pratiquez-vous un sport ?<br>
                            - Oui, et plusieurs fois par semaine <br>
                            - Oui, et une fois par semaine <br>
                            - Non <br>
                            - Je ne souhaite pas répondre <br><br>
                            Avez vous pratiqué ou pratiquez vous PLUSIEURS sports en MEME temps ? <br>
                            - Oui, et 2 sports à la fois <br>
                            - Oui, et 3 sports à la fois <br>
                            - Oui, et 4 sports ou plus <br>
                            - Non, j'ai pratiqué ou je pratique qu'un seul sport à la fois <br>
                            - Non, je n'ai ou je ne fais pas de sport <br>
                            - Je ne souhaite pas répondre <br><br>
                            Avez-vous l’habitude d’utiliser un ordinateur dans la vie de tous les jours ? <br>
                            - Oui, constamment <br>
                            - Oui, régulièrement <br>
                            - Oui, mais rarement <br>
                            - Non, pas du tout <br>
                            - Je ne souhaite pas répondre<br><br>
                            Jouez-vous aux jeux vidéos (sur des outils de type console, smartphone, ordinateur)?<br>
                            - Oui, plusieurs fois par jour<br>
                            - Oui, une fois par jour<br>
                            - Oui, plusieurs fois par semaine<br>
                            - Oui, une fois par semaine<br>
                            - Oui, une fois par mois<br>
                            - Non<br>
                            - Je ne souhaite pas répondre<br><br>
                            Pensez-vous avoir la capacité de faire deux choses en même temps, par exemple cuisiner tout en ayant une conversation au téléphone ?<br>
                            - Oui<br>
                            - Non<br>
                            - Je ne souhaite pas répondre<br><br>
                            Êtes-vous en capacité de bouger l'intégralité de votre corps ?<br>
                            - Oui<br>
                            - Non<br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                      <p class="excert"></p>
                    </li>
                    <li><strong>les dépendances,</strong>
                      <blockquote class="generic-blockquote">
                        Ici, ce sont les dépendances aux drogues qui ont été explorées <a href="bibliographie.php#jeunet16">(Jeunet, 2016)</a>, <a href="bibliographie.php#randolph10">(Randolph, 2010)</a>.<br>
                        <button href="#question7" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question7', 'border7')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="sample-text" id="border7">
                          <p id="question7" style="display: none;margin:15px">
                            Êtes-vous dépendant à une ou plusieurs substances (englobe également le tabac et l'alcool) ? <br>
                            - Oui <br>
                            - Non <br>
                            - Je ne souhaite pas répondre
                          </p>
                        </div>
                      </blockquote>
                      <p class="excert"></p>
                    </li>
                    <li><strong>la faculté cognitive.</strong>
                      <blockquote class="generic-blockquote">
                        Il est notamment important d'étudier cette faculté cognitive à l'issue d'une maladie.
                        Par exemple, un AVC peut être à l'origine de perte de fonctions cognitives telles que les troubles de la mémoire, la désinhibition ou encore l'aphasie (trouble du langage), l'héminégligence (troubles visuo-spatiaux)...
                      </blockquote>
                    </li>
                  </ul>
                </div>
                <div class="quotes">
                  <h3 class="mt-20 mb-20" id="cognitifs">Les facteurs cognitifs et psychologiques</h3>
                  <p class="excert">La catégorie suivante concerne les facteurs cognitifs et psychologiques, <a href='bibliographie.php/#jeunet16'>(Jeunet et al., 2016)</a>.</p>
                  <ul class="unordered-list">
                    <li><strong>l'humeur,</strong>
                      <blockquote class="generic-blockquote">
                        L'humeur reflète l'état émotionnel de l'individu. Il a été montré qu'il affecte les performances, <a href="bibliographie.php#nijboer08">(Nijboer et al., 2008)</a>.<br>
                        <button href="#question8" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question8', 'border8')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                        <div class="feature-img" id="question8" style="display: none">
                          <img class="img-fluid" src="img/facteurs/facteur1.PNG" alt="" >
                          <img class="img-fluid" src="img/facteurs/facteur21.PNG" alt="">
                          <img class="img-fluid" src="img/facteurs/facteur22.PNG" alt="">
                        </div>
                      </blockquote>
                    </li>
                    <li><strong>l'état cognitif : </strong>
                      <ul>
                        <li>l'attention <a href="bibliographie.php#grosse12">(Grosse-Wentrup and Schölkopf, 2012)</a>, <a href="bibliographie.php#hammer12">(Hammer et al., 2012)</a>,</li>
                        <li>la motivation <a href="bibliographie.php#nijboer08">(Nijboer et al., 2008)</a>,
                          <blockquote class="generic-blockquote">
                            <button href="#question9" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question9', 'border9')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                            <div class="feature-img" id="question9" style="display: none">
                              <img class="img-fluid" src="img/facteurs/autoefficacite.PNG" alt="" >
                            </div>
                          </blockquote>
                        </li>
                        <li>la confiance en soi <a href="bibliographie.php#nijboer08">(Nijboer et al., 2008)</a>,
                          <blockquote class="generic-blockquote">
                            <button href="#question10" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question10', 'border10')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                            <div class="feature-img" id="question10" style="display: none">
                              <img class="img-fluid" src="img/facteurs/estimedesoi1.PNG" alt="" >
                              <img class="img-fluid" src="img/facteurs/estimedesoi2.PNG" alt="" >
                            </div>
                          </blockquote>
                        </li>
                        <li>le stress,
                          <blockquote class="generic-blockquote">
                            <button href="#question11" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question11', 'border11')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                            <div class="feature-img" id="question11" style="display: none">
                              <img class="img-fluid" src="img/facteurs/anxiete1.PNG" alt="" >
                              <img class="img-fluid" src="img/facteurs/anxiete2.PNG" alt="" >
                            </div>
                          </blockquote>
                        </li>
                        <li>le locus de contrôle
                          <blockquote class="generic-blockquote">
                            Le locus de contrôle (LOC) est un concept de Rotter (1966). C'est un concept de la psychologie sociale, qui correspond à la croyance "généralisé" qu'un individu a vis à vis de la nature d'un événement et de son issue. <br>
                            En effet, on distingue le LOC externe du LOC interne. <br>
                            Le LOC externe correspond à la croyance qu'ont certains individus que tout événement survenant dans leur vie est dépendant des "autres tous puissants" (dieux, destin...). <br>
                            A contrario, un LOC interne correspond aux individus qui pensent que cet événement résultera de leur action (capacités, stratégies... mises en place). Parallèlement, d'autres attribuent la nature de ces évènements au hasard.<br>
                            Il semblerait que le LOC interne soit impliqué dans une meilleure implication de l'individu dans la manipulation de l'interface cerveau-ordinateur. <br>
                            <button href="#question12" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question12', 'border12')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                            <div class="feature-img" id="question12" style="display: none">
                              <img class="img-fluid" src="img/facteurs/locinterne.PNG" alt="" >
                            </div>
                          </blockquote>
                        </li>
                      </ul>
                    </li>
                    <li><strong>la capacité d'imagination </strong><a href="bibliographie.php#jeunet15">(Jeunet et al., 2015)</a>,
                    </li>
                    <li><strong>la capacité de rotation mentale </strong><a href="bibliographie.php#jeunet15">(Jeunet et al., 2015)</a>,
                      <blockquote class="generic-blockquote">
                        La capacité de rotation mentale correspond à l'habilité d'imaginer un objet dans différents plans de l'espace.
                      </blockquote>
                      <div class="feature-img">
                        <img class="img-fluid" src="img/rotation.png" alt="">
                        <p class="excert">
                          <center>Exemple d'objets selon des rotations différentes, <a href="bibliographie.php#shepard71">(Shepard, 1971) <br>
                            A : différence de rotation de 80° sur le plan, <br>
                            B : différence de rotation de 80° en profondeur.
                          </center></p>
                        </div>
                      </li>
                      <li><strong>la capacité d'apprentissage rapide </strong><a href="bibliographie.php#jeunet15">(Jeunet et al., 2015)</a>,
                        <blockquote class="generic-blockquote">
                          Plus le sujet apprend rapidement, plus il présentera des facilités à manipuler l'interface.
                        </blockquote>
                      </li>
                      <li><strong>la capacité de mémoire </strong><a href="bibliographie.php#daum93">(Daum et al., 1993)</a>,
                        <blockquote class="generic-blockquote">
                          Des exercices travaillant sur la mémoire pré-application permettrait d'améliorer l'apprentissage et donc la performance, <a href="bibliographie.php#daum93">(Daum et al., 1993)</a>.
                        </blockquote>
                      </li>
                      <li><strong>l'attitude face au travail </strong><a href="bibliographie.php#hammer12">(Hammer et al., 2012)</a>,
                        <blockquote class="generic-blockquote">
                          Cette attitude face au travail est liée à la concentration.
                        </blockquote>
                      </li>
                      <li><strong>la concentration et la coordination visuo-motrice </strong><a href="bibliographie.php#hammer14">(Hammer et al., 2014)</a>,
                        <blockquote class="generic-blockquote">
                          C'est à dire l'accord entre l'information visuelle et le mouvement du corps.
                        </blockquote>
                      </li>
                      <li><strong>l'imagination kinésique et visuo-motrice </strong><a href="bibliographie.php#vuckovic13">(Vuckovic and Osuagwu, 2013)</a>,
                        <blockquote class="generic-blockquote">
                          C'est à dire la capacité à s'imaginer en train de faire des mouvements.
                        </blockquote>
                      </li>
                      <li><strong>la capacité d'autonomie </strong><a href="bibliographie.php#vuckovic13">(Vuckovic and Osuagwu, 2013)</a>.
                      </li>
                    </ul>
                  </div>
                  <div class="quotes">
                    <h3 class="mt-20 mb-20" id="relations">Les relations de l'individu avec les nouvelles technologies</h3>
                    <p class="excert">Les facteurs d'acceptabilité peuvent être également liés à la relation de l'individu avec les nouvelles technologies. </p>
                    <p class="excert">Nous distinguons tout d'abord ce qui concerne l'appréhension de l'utilisation de l'outil :</p>
                    <ul class="unordered-list">
                      <li><strong>la peur du système,</strong>
                        <blockquote class="generic-blockquote">Certains peuvent présenter un malaise à l'idée d'utiliser un outil informatisé <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>, <a href="bibliographie.php#nijboer10">(Nijboer et al. 2010)</a>, <a href="bibliographie.php#witte13">(Witte et al., 2013)</a>.
                        </blockquote>
                      </li>
                      <li><strong>la peur d'incompétence,</strong>
                        <blockquote class="generic-blockquote">
                          Il s'agir de la peur de ne pas réussir, <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>, <a href="bibliographie.php#nijboer08">(Nijboer et al. 2008)</a>.
                        </blockquote>
                      </li>
                      <li><strong>le stress,</strong>
                        <blockquote class="generic-blockquote">
                          Le stress, qu'il soit général ou face à l'ordinateur <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>.
                          <button href="#question14" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question14', 'border14')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="feature-img" id="question14" style="display: none">
                            <img class="img-fluid" src="img/facteurs/computeranxiety.PNG" alt="">
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>la confiance dans l'outil (sécurité), </strong>
                        <blockquote class="generic-blockquote">
                          <button href="#question13" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question13', 'border13')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border13">
                            <p id="question13" style="display: none;margin:15px">
                              Je fais généralement confiance aux technologies que j'utilise. <br>
                              - Toujours <br>
                              - La plupart du temps  <br>
                              - Souvent  <br>
                              -	Rarement  <br>
                              -	Jamais  <br>
                              -	Je ne souhaite pas répondre <br>
                              Citez les technologies dans lesquelles vous n'avez pas confiance : ___
                            </p>
                          </div>
                        </blockquote>
                      </li>
                    </ul>
                    <p class="excert">Ces derniers facteurs portent sur l'anxiété face à l'ordinateur ("computer anxiety") et présentent une corrélation négative avec la performance, <a href="bibliographie.php#jeunet15">(Jeunet et al., 2015)</a>.
                      <br/>De plus, des corrélations entre stress général, stress face à l'ordinateur, timidité et pessimisme ont été montrées, <a href="bibliographie.php#johnston95">(Johnston et al., 1995)</a>.
                    </p>
                    <p class="excert">
                      Ensuite, entre en jeu la notion de contrôle sur l'interface :
                    </p>
                    <ul class="unordered-list">
                      <li><strong>la confiance en soi,</strong>
                        <blockquote class="generic-blockquote">Ou l'estime que l'individu a de lui-même <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>, <a href="bibliographie.php#nijboer08">(Nijboer et al. 2008)</a>.
                        </blockquote>
                      </li>
                      <li><strong>le sentiment d’auto-efficacité,</strong> <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>, <a href="bibliographie.php#neumann03">(Neumann and Birbaumer, 2003)</a>,
                        <blockquote class="generic-blockquote">C’est un concept de Bandura (1977), qui correspond à la croyance qu’à un individu dans ses propres compétences pour réaliser une action spécifique, <a href="bibliographie.php#johnston95">(Johnston et al, 1995)</a>.Des corrélations entre l’auto-efficacité, le locus de contrôle interne, l’optimisme ont été montrées <a href="bibliographie.php#johnston95">(Johnston et al, 1995)</a>.
                        </blockquote>
                      </li>
                      <li><strong>les croyances </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                      </li>
                      <li><strong>l'intention de comportement </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                      </li>
                      <li><strong>le sentiment de contrôle,</strong>
                        <blockquote class="generic-blockquote"> Aussi connu sous le terme de "sens of agency", <a href="bibliographie.php#jeunet16">(Jeunet et al., 2016)</a>.
                        </blockquote>
                      </li>
                      <li><strong>la facilité d'utilisation </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                        <blockquote class="generic-blockquote">
                          <button href="#question15" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question15', 'border15')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border15">
                            <p id="question15" style="display: none;margin:15px">
                              Selon moi, la facilité d'utilisation d'un outil informatique (application mobile, logiciel, réseau social, ...) est importante : <br>
                              - Pas du tout d'accord <br>
                              - En désaccord <br>
                              - Ni d'accord, ni en désaccord <br>
                              - D'accord <br>
                              - Tout à fait d'accord  <br>
                              - Je ne souhaite pas répondre <br><br>
                              <img class="img-fluid" src="img/facteurs/questioncasque.PNG" alt="">
                              <img class="img-fluid" src="img/facteurs/facilite.PNG" alt="">
                            </p>
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>l'utilité perçue </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                        <blockquote class="generic-blockquote">Par exemple, dans une thérapie de type rééducation post-AVC, cela correspondrait à la croyance qu'a l'individu dans les bénéfices de cet outil.
                          <button href="#question16" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question16', 'border16')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border16">
                            <p id="question16" style="display: none;margin:15px">
                              Selon moi, l'utilisation d'un outil informatique me motive lorsque cela m'apporte satisfaction sociale ou intellectuelle : <br>
                              - Pas du tout d'accord <br>
                              -	Pas d'accord <br>
                              -	Ni d'accord, ni en désaccord  <br>
                              -	D'accord  <br>
                              -	Tout à fait d'accord  <br>
                              -	Je ne souhaite pas répondre
                            </p>
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>l'intention d'utilisation </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                      </li>
                      <li><strong>l'attitude face à l'outil </strong><a href="bibliographie.php#davis89">(Davis et al., 1989)</a>,
                        <blockquote class="generic-blockquote">En effet, l'attitude pourrait être modulée par l'anxiété face à l'ordinateur, l'intention d'utilisation...
                        </blockquote>
                      </li>
                    </ul>
                    <p class="excert">
                      Les croyances et l’intention de comportement sont des facteurs modélisés dans la Théorie de l’action raisonnée (TRA : Theory of Reasoned Action), <a href="bibliographie.php#davis89">(Davis et al., 1989)</a>.
                      Il s’agit de prédire le comportement à partir des facteurs d’intention de comportement.
                      La facilité d’utilisation, l’utilité perçue, l’intention d’utilisation et l’attitude face à l’outil sont liés au Modèle d’acceptation de la technologie (TAM : Technology Acceptance Model), (Davis et al., 1989).
                      En effet, à partir de ces facteurs est construit un modèle de prédiction de l’utilisation du système. Ce modèle est une variante du TRA.
                    </p>
                    <div class="feature-img">
                      <img class="img-fluid" src="img/tra.JPG" alt="">
                    </div>
                    <div class="feature-img">
                      <img class="img-fluid" src="img/tam.JPG" alt="">
                    </div>
                  </div>
                  <div class="quotes">
                    <h3 class="mt-20 mb-20" id="soins">Le rapport aux soins</h3>
                    <p class="excert">
                      Nous étudierons enfin les facteurs dépendant de la prise en charge :
                    </p>
                    <ul class="unordered-list">
                      <li><strong>la sensibilisation à la thérapie,</strong>
                        <blockquote class="generic-blockquote">
                          Le fait d’avoir un proche malade ou d’être malade pourrait avoir des conséquences sur l’acceptation de la thérapie. Cette sensibilisation est aussi dépendante du rapport entre l’individu et la technologie (être anxieux, ...).
                          <button href="#question17" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question17', 'border17')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border17">
                            <p id="question17" style="display: none;margin:15px">
                              Connaissez-vous des personnes ayant subi un AVC ? <br>
                              - Non <br>
                              - Oui, j'ai moi même subi un AVC  <br>
                              - Oui, personne dont je suis proche  <br>
                              - Oui, parmi mes proches (famille ou amis)  <br>
                              - Oui, dans le cadre professionnel  <br>
                              - Je ne souhaite pas répondre  <br>
                            </p>
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>la qualité de la prise en charge</strong> de la personne lors de la thérapie,
                        <blockquote class="generic-blockquote">
                          Cette qualité de la prise en charge peut dépendre de différents points : environnement, explications, contact humain, ...
                          <button href="#question18" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question18', 'border18')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border18">
                            <p id="question18" style="display: none;margin:15px">
                              Selon vous, le lieu où la thérapie se déroule est-il un facteur important ? <br>
                              -	Oui, je préfère la réaliser chez moi  <br>
                              -	Oui, je préfère la réaliser à l'hôpital ou dans un autre centre de soins  <br>
                              -	Non, ce n'est pas important  <br>
                              -	Je ne souhaite pas répondre  <br><br>
                              Selon vous, le contact humain avec le personnel soignant affecte votre expérience ? <br>
                              - Oui, j'ai besoin d'être soutenu(e)  <br>
                              - Non, je préfère être seul(e)  <br>
                              - Ni l'un, ni l'autre  <br>
                              - Je ne souhaite pas répondre  <br><br>
                              De manière générale, que vous inspire le personnel soignant ? <br>
                              -	Je ne fais pas confiance au personnel soignant <br>
                              -	J'ai totalement confiance dans le personnel soignant <br>
                              -	Je fais confiance selon la situation <br>
                              -	Je ne souhaite pas répondre  <br><br>
                              De même, la qualité des explications fournies est-elle importante pour que vous acceptiez la thérapie ? <br>
                              -	Oui, j'ai besoin de beaucoup d'informations pour me sentir rassuré(e)   <br>
                              -	Oui, j'ai besoin que l'on m'explique simplement les choses   <br>
                              -	Non, les explications m'angoissent   <br>
                              -	Non, cela ne m'affecte pas  <br>
                              -	Je ne souhaite pas répondre
                            </p>
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>la croyance dans la thérapie,</strong>
                        <blockquote class="generic-blockquote">
                          <button href="#question20" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question20', 'border20')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="feature-img" id="question20" style="display: none">
                            <img class="img-fluid" src="img/facteurs/questioncasque.PNG" alt="">
                            <img class="img-fluid" src="img/facteurs/resultattherapie.PNG" alt="">
                          </div>
                        </blockquote>
                      </li>
                      <li><strong>le statut de patient et stigmatisation,</strong>
                        <blockquote class="generic-blockquote"> En effet, pour entrer dans cet échange avec l'ordinateur, le sujet doit porter un dispositif, invasif ou non, permettant de capter les signaux cérébraux.
                          Ce port de matériel peut être vu comme une représentation physique du statut de malade. <br>
                          Nous avons décidé d'étudier ce facteur car cette stigmatisation pourrait être un frein à l'utilisation de l'outil ou pourrait venir perturber l'individu lors de l'exercice.
                          Afin d'explorer ce facteur, nous avons établi les items suivants :
                          <button href="#question19" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn info circle arrow" style="" onclick="onClick('question19', 'border19')">Évaluation du facteur<span class="lnr lnr-arrow-right"></span></button>
                          <div class="sample-text" id="border19">
                            <p id="question19" style="display: none;margin:15px">
                              La thérapie utilise un casque composé d'électrodes qui sera disposé sur votre cuir chevelu. Seriez-vous prêt(e) à essayer la thérapie ? <br>
                              -	Oui, totalement  <br>
                              -	Oui, pourquoi pas  <br>
                              -	Non, l'idée de porter un casque m'angoisse  <br>
                              -	Non, je n'aime pas l'idée d'utiliser un ordinateur  <br>
                              -	Autre :  <br>
                              -	Je ne sais pas  <br>
                              -	Je ne souhaite pas répondre <br><br>
                              <img class="img-fluid" src="img/facteurs/casqueestetique.PNG" alt="">
                            </p>
                          </div>
                        </blockquote>
                      </li>
                    </ul>
                  </div>
                </div>
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
                    <strong>Facteurs d'acceptabilité</strong> : caractéristiques que présente l’individu qui lui permettraient un meilleur rapport avec l’interface (on parle aussi d’utilisabilité).
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
