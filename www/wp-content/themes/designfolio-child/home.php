<?php global $pc_theme_object; /* Reference theme framework class */ ?>
<?php get_header(); ?>

<?php PC_Hooks::pc_after_get_header(); /* Framework hook wrapper */ ?>

	<div id="container">

		<?php PC_Hooks::pc_after_container(); /* Framework hook wrapper */ ?>

		<div id="contentwrap" <?php echo PC_Utility::contentwrap_layout_classes(); ?>>
		
			<?php PC_Hooks::pc_before_content(); /* Framework hook wrapper */ ?>

			<div class="<?php echo PC_Utility::content_layout_classes_primary(); ?>">

				<?php PC_Hooks::pc_after_content_open(); /* Framework hook wrapper */ ?>

				<div class="dense-home-featured-image">
					<img width="712" height="320" src="/wp-content/themes/designfolio-child/images/amstudio4.jpg" class="attachment-full wp-post-image" alt="cd"> 
				</div>

				<div>
					<p>
						Regarded as a lyrical, powerful, and emotionally raw performer, new music violinist ADRIANNA MATEO has appeared as a soloist at The Stone, on tour in Europe, and at the Metropolitan Museum of Art in collaboration with its Artist-in-Residence, Paul Miller/DJ Spooky that Subliminal Kid. She will be performing solo at the American Museum of Natural History in April 2013.
					</p>
					<p>
						This last year (2012-2013) has been an active one for Ms. Mateo: in addition to the above performances, she was profiled in the TimesLedger's QGuide, appearing on its front cover; was interviewed by NTD TV for international broadcast; performed at Carnegie Hall and recorded with Grammy Award-winning producer David Starobin as a member of the Mimesis Ensemble Orchestra; recorded solo violin for two short films; was featured by the Savona News (Italy); and toured her composer collaboration project, {NUE|LUSH}, in Italy, France, and in New York. In Summer 2013, she will be taking the project to Australasia.
					</p>
					<p>
						Ms. Mateo will be graduating in May 2013 (music performance major/French minor) from the Aaron Copland School of Music, where she recently performed Chausson's Poème for violin and orchestra as the winner of ACSM's 2012 concerto competition.
					</p>
					<p>
						In master classes and coachings, Adrianna has played for artists Cho Liang Lin, Robert Mealy, Aaron Rosand, Bright Sheng, and Pinchas Zukerman, as well as musicians from Bang on a Can and the Orpheus Chamber and New York City Ballet orchestras. She has also performed in master classes held by members of the Claremont Trio and the Juilliard, Orion, and Shanghai String Quartets. Adrianna was accepted to both the Bang on A Can Summer Institute and Fontainebleau for musical studies for Summer 2012.
					</p>
					<p>
						In her spare time, Adrianna likes to write; a published poet, she has appeared on public television reading a portfolio of her work and was recognized by the Random House Creative Writing Competition.
					</p>
				</div>

			</div><!-- .content -->
			  
	  		<?php PC_Hooks::pc_after_content(); /* Framework hook wrapper */ ?>
		  
		</div><!-- #contentwrap -->
			
	</div><!-- #container -->

<?php get_footer(); ?>