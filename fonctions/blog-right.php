<div class="widget">
								
							
								<h4 class="widget-title">Nos dernières actualités</h4>
								<ul class="list-unstyled recommended-posts">
									<li>


								   <?php require('../../akongo.fr/wordpress/wp-blog-header.php');
							 
								$args = array( 'numberposts' => 3, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
								$postslist = get_posts( $args );
							
								 foreach ($postslist as $post) :  setup_postdata($post);
							   ?>


										<div class="post-entry-sidebar clearfix">
											<a href="<?php the_permalink(); ?>" class="left"><img style="height: 80px; width: 80px;" src="<?php  the_post_thumbnail_url(); ?>" alt="Formation aménagement enclos"></a>
											<div class="right">
												<h4 class="media-heading post-title"><a href="../formations/formation-bien-etre-animal.php"><?php the_title(); ?></a></h4><span class="timestamp"><?php the_date(); ?></span>
											</div>
										</div>

										</br>

										<?php endforeach; ?>

								</div>
										</li>
										</ul>
							
							</div>