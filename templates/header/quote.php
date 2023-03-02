	<!-- Cytaty na stronę -->
	<?php 
	
	    if (function_exists('worcar_teksty_random_quote')) {
		        worcar_teksty_random_quote();
			} else {
			echo "nie włączona wtyczka";
		};

		?>
		<!--  calkulator na stronie -->
	<?php 
			if (function_exists('claculator_bmi')) {
				claculator_bmi();
			} else {
			echo "nie włączona wtyczka calkulatora";
				};
	
	?>

	
	<!-- Testy wypisywania listy za pomocą pętli w PHP -->
<section id="test">
	<div class="lista">

		<ul class="czapeczki">
			
					<?php 
								if (function_exists('dodaj_liste')) {
									dodaj_liste();
								} else {
								echo "nie włączona dodaj_liste";
									};
					?>


				<?php 
							if (function_exists('wypisz_liste')) {
								wypisz_liste();
							} else {
							echo "nie włączona wypisz_liste";
								};
				?>
		</ul>
	</div>
</section>
	<!-- <?php echo wypisz_liste(); ?> -->
