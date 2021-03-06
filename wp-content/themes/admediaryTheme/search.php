<?php get_header();  ?>

<div id="primary">
	<div id="main">
		<div class="container">
			 <h1>Search Results<div class="lineFade-all"></div></h1>
			<?php 

			while( have_posts() ):
				the_post();
				get_template_part( 'template-parts/content', 'search' );

				// Display a comment form if this post is open to comments
				if( comments_open() || get_comments_number() ):
					// Display the default comments form, or a custom form (type the custom filename inside the parenthesis).
					// Example: comments_template( 'filename.php' );
					comments_template();
				endif;

			endwhile;

			?>

		</div>
	</div>
</div>

<?php get_footer(); ?>