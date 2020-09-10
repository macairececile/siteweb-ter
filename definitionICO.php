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
					<h1 style="color:white">Définition d'une interface cerveau-ordinateur</h1><br><br>
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
									<i>Nous vous présentons, dans cette section, une définition de ce qu'est une interface cerveau-ordinateur. De plus, vous pourrez trouver une chronologie dans la recherche autour de ces interfaces.</i>
								</p>
							</div>
							<div class="quotes">
								<h3 class="mt-20 mb-20">Qu'est-ce qu'une interface cerveau-ordinateur ?</h3>
								<p class="excert">Lorsque nous parlons d'ICO, nous faisons référence aux interfaces cerveau-ordinateur. Dans la littérature, l'acronyme anglophone BCI pour Brain-Computer Interface est aussi utilisé.</p>
								<center><iframe width="560" height="315" src="videos/ICO.mp4" type="video/mp4" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center><br>
							</div>
							<div class="quotes">
								<p class="excert">
									Pour comprendre ce que sont les interfaces cerveau-ordinateur, faisons un petit point "histoire" : <br>
								</p>
								<p class="excert">
									En 1924, Hans Berger, psychiatre et neurologue, réalise le premier enregistrement électroencéphalographique sur l'Homme afin de décrire les ondes électriques du cerveau. C'est ainsi que naît l'électroencéphalographie (EEG), qui est une méthode permettant de récupérer une mesure de l'activité cérébrale à l'aide d'électrodes placées sur la surface du crâne. <br>
								</p>
								<p class="excert">
									En 1958, Dr. Joe Kamiya a mené une étude utilisant des capteurs EEG, associée à un système de récompense simple, pour déterminer si les personnes pouvaient apprendre à modifier leurs modèles d'ondes cérébrales. C'est ainsi que pour la toute première fois, un entraînement de neurofeedback en EEG s'est déroulé. Le but de cette technique est de contrôler différentes ondes cérébrales impliquées dans des pathologies pour obtenir un état donné et le maintenir.
								</p>
								<p class="excert">
									C'est en 1973 qu'est introduite la notion d'interface cerveau-ordinateur pour désigner la communication entre un être humain ou un animal et un outil externe (prothèses, ordinateur, fauteuils roulants, ...) directement basée sur l'activité cérébrale, <a href="bibliographie.php#vidal73">(Vidal, 1973)</a>. Lorsque l'on parle d'interface cerveau-ordinateur, il n'est pas peu courant d'entendre le terme d'EEG. En effet, cette méthode non-invasive est aujourd'hui utilisé par les interfaces cerveau-ordinateur ou de neurofeedback qui permet d'indiquer au sujet un comportement à corriger.
								</p>
								<p class="excert">
									Ainsi, les années 80 - 90 ont connu le développement des interfaces cerveau-ordinateur notamment dans le domaine de la thérapie et de la rééducation post-lésions cérébrales. En effet, le but des interfaces cerveau-ordinateur est d'améliorer les capacités cognitives ou motrices, ou encore diminuer des symptômes cliniques.<br>
									Puis les années 2000, la recherche ICO a été reprise par des ingénieurs informaticiens, afin de perfectionner les outils informatiques impliqués dans le traitement de l'information électrique cérébrale.<br>
									Depuis, le début des années 2010, la recherche ICO se détourne de cet aspect informatique dont les limites de performances se voient atteintes pour étudier avec les facteurs propres à l'individu pouvant interférer avec la performance, on parlera de facteurs d'acceptabilité.<br>
								</p>
								<p class="excert">
									Ainsi, nous notons une dichotomie dans le champ de recherche autour des interfaces cerveau-ordinateur avec les études du signal cérébral, les études du système informatique mais aussi l'étude des facteurs d'acceptabilité. L'étude de ces différents domaines, associativement, est nécessaire pour améliorer la performance.
								</p>
							</div>
						</div>
					</div>
					<a href="fonctionnementICO.php" style="position:inherit;width: 40%;margin-left: 30%;margin-right: 30%;margin-top: 20px;margin-bottom: 20px" class="genric-btn success radius">Page suivante</a>
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('footer.php') ?>
</body>
</html>
