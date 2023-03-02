<?php
/*
*
* Template name: home
*
*/
?>
<?php get_header(); ?>

<?php get_template_part( 'templates/header/slider' ); ?>

<?php get_template_part( 'templates/header/quote' ); ?>

<?php get_template_part( 'templates/header/about' ); ?>

<?php get_template_part( 'templates/content/postSlider' ); ?>


<!-- dodanie sekcji content -->

<!-- koniec sekcji content -->
<div class="social">
	<a href="https://www.facebook.com/profile.php?id=100084814310863"target="_blanck"><h4>	widgety dla socialmedia
	</h4></a>
	<span>
		tutaj !
	</span>
	
</div>


<!-- Testy wypisywania listy za pomocą pętli w PHP -->
<section id="test">
	<div class="lista">

		<ul class="czapeczki">
			
			<?php 
						$licznik=15;
							for($i=0; $i<=$licznik; $i++)   {
								if ($i<$licznik){
									echo '<li>'.$i.'</li>';
								} else {
									echo '<li>'.$i.'= koniec'.'</li>';
								}

							};
			?>
		</ul>
	</div>
</section>
<!-- koniec sekcji z lista PHP dynamiczna -->

<!-- kolejna sekcja strony -->
<section id="product">
	<div class="container-fluid">
		<div class="container">
			<div class="row worcar-row">

				<div class="col-3">
					<h2><?php echo bloginfo('name'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, mollitia? Numquam dolorum, optio, atque provident architecto voluptas illum nulla dicta repellat aut quam sed dolores ut. Eaque fugit aut asperiores?</p>
				</div>
				<div class="col-3">
				<h2><?php echo bloginfo('name'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, mollitia? Numquam dolorum, optio, atque provident architecto voluptas illum nulla dicta repellat aut quam sed dolores ut. Eaque fugit aut asperiores?</p>
				</div>
				<div class="col-3">
				<h2><?php echo bloginfo('name'); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, mollitia? Numquam dolorum, optio, atque provident architecto voluptas illum nulla dicta repellat aut quam sed dolores ut. Eaque fugit aut asperiores?</p>
				</div>
			</div>
			
			
		</div>
	</div>
</section>

<?php claculator_bmi(); ?>						
	
					
		<section id="posts">
			<?php 
			if (have_posts()){
				while (have_posts()){
					the_post();
					the_title('<h1>','</h1>');
					the_content();
				}
			}
			else {
				echo "nie ma nic";
			}
			
			?>
		</section>	
	



<p>testowy adres dynamiczny<a href="<?php echo home_url(); ?>" rel="nofollow">TUTAJ!</a></p>
<?php get_footer(); ?>