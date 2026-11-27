<?php
get_header();
?>
<div class="container">
	<div class="row">
	

		<?php

			$args = [
				'post_type'			=> 'whatsup_article',
				'posts_per_page'	=> -1,
				'orderby'			=> 'rand'
			];

			if( isset( $_GET['location'] ) ) {
				$args['meta_key'] = 'location';
				$args['meta_value'] = strtolower( $_GET['location'] );
			}

			if( isset( $_GET['keywords'] ) ) {
				$args['tax_query'] = [
					[
						'taxonomy' => 'post_tag',
						'field' => 'slug',
						'terms' => strtolower( $_GET['keywords'] )

					]
				];
			}

			$myposts = get_posts( $args );

			foreach( $myposts as $post ) :
				$image = get_the_post_thumbnail_url( $post->ID );
			?>

			<div class="col-md-4 d-flex" style="background-image: url(<?php echo $image ? $image : 'http://placehold.it/300x300'; ?>); height: 300px; background-size: cover; background-position: center;">
		    	<a style="margin: auto;" href="<?php echo get_the_permalink( $post->ID ); ?>"><?php echo $post->post_title; ?></a>
		    </div> <!-- end col -->

		<?php endforeach; ?>
		
		
	</div> <!-- end row -->


	<form method="get" action="<?php bloginfo('url'); ?>/" class="form-inline">

		<select name="location" class="custom-select">
			<option selected>All</option>
			<option value="dagupan">Dagupan City</option>
			<option value="baguio">Baguio City</option>
			<option value="lingayen">Lingayen</option>
		</select>

		<input class="text" name="keywords" class="form-control" value="<?php echo $_GET['keywords']; ?>" />

		<button type="submit" class="btn btn-primary">Go</button>
	</form>

</div> <!-- end container -->











		<!--<?php
	//$args = array( 'post_type' => 'whatsup_article' );
	//$loop = new WP_Query( $args );
	//while ( $loop->have_posts() ) : $loop->the_post();
  	//the_title();
  	//echo '<div class="entry-content">';
  	//the_content();
  	//echo '</div>';
	//endwhile;
		?> -->