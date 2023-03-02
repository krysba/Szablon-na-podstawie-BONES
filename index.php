<?php get_header(); ?>
<?php echo "to jest index.php";?>
			<div id="content">
				<?php echo "to jest conterner na spis wpisów";?>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<!-- dodanie własnej klasy by zarządzać wyglądem listy -->
							<div class="worcar">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf abc' ); ?> role="article">
								<?php echo "to jest wpis blogowy";?>
	
									<header class="article-header">
	
										<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<p class="byline entry-meta vcard">
																			
										</p>
	
									</header>
	
									<section class="entry-content cf">
										<?php the_content(); ?>
									</section>
	
									<footer class="article-footer cf">
										<p class="footer-comment-count">
											<?php echo "footer"; ?>
											<!-- <?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?> -->
										</p>
	
	                     
					  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
	
	
									</footer>
	
								</article>

								<?php endwhile; ?>
								
							</div>

                               <!-- wyświetlanie nawigacji -->
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
