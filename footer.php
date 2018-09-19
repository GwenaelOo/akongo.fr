<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="assets/img/logo/bravana-default.png" alt="Bravana logo" class="logo-footer">
						<br>
						<br>
						<p style="text-align: justify;">L’équipe d’AKONGO accompagne les professionnels des parcs zoologiques qui ont à cœur d’améliorer sans cesse leurs établissements, les conditions d’hébergement et d’élevage des animaux, ainsi que de remplir au mieux les missions de conservation et d’éducation du public en assurant formations, conseils et expertise dans la gestion et le bien-être animal. </p>
						
						<br>
						<address class="contact-info">
							<p><i class="icon icon_pin_alt ico-styled text-primary"></i>Bureau d'étude AKONGO - 83 Boulevard Sainte Hélène</br>
							83000 Toulon, FRANCE</p>
								<p><i class="icon icon_phone ico-styled text-primary"></i> 06 63 80 04 59</p>
							<p><i class="icon icon_mail_alt ico-styled text-primary"></i> <a href="http://www.akongo.fr/about/contact.php">contact@akongo.fr</a></p>
						</address>
					</div>
					<div class="col-md-4">
						<h4 class="footer-heading">NOS DERNIERES NOUVELLES</h4>
						<ul class="list-unstyled latest-news-footer" style="padding-left:- 50px;">

								

							   <?php require('../akongo.fr/wordpress/wp-blog-header.php');
							 
								$args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
								$postslist = get_posts( $args );
								
								 foreach ($postslist as $post) :  setup_postdata($post);
							   ?>

							   	<li class="news-item">
								<h5 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
								<span><?php the_date(); ?></span>
								</li>

							   <?php endforeach; ?>

							   </ul>

					</div>
					<div class="col-md-4">
					<center><img src="http://www.akongo.fr/assets/img/eaza/eaza-footer.png" class="img-responsive" alt="Logo EAZA Akongo formation soigneur" style="height: 200px;">
					<hr class="light-sep">
						<h4 class="footer-heading">RESTONS CONNECTES</h4>
						<ul class="list-inline social-icons social-icons-small">
							<li><a href="https://www.facebook.com/AkongoConseil/"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.youtube.com/channel/UCbAZP7TaSgIgpI_H5RfAs5Q"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/in/am%C3%A9lie-romain-12a35aa3/"><i class="fa fa-linkedin"></i></a></li>
						</ul>

						<!--

						<div class="margin-bottom-50"></div>
						<h4 class="footer-heading">NEWSLETTER</h4>
						<p>Get the latest update from us by subscribing to our newsletter.</p>
						<form class="newsletter-form" method="post">
							<div class="input-group input-group-lg">
								<input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
								<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
								</span>
							</div>
							<div class="alert"></div>
						</form>
					</div>
				</div>

				--> 


				<div class="footer-bottom">
					<p class="copyright-text left">&copy;2018 AKONGO </p>
					<nav class="right">
						<ul class="list-inline">
								<li><a href="http://www.akongo.fr/">Accueil</a></li>
							<li><a href="http://www.akongo.fr/about/contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</footer>