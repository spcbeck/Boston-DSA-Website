<?php
/**
 * Template Name: Political Education Posts Page Template
 *
 * Template for displaying the Press Releases page.
 *
 * @package understrap
 */
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="hero basic-hero jumbotron">
<h1><?php the_title(''); ?></h1>
</div>

<div class="wrapper basic-page" id="full-width-page-wrapper">

	<div class="fluid-container" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<div class="row">
						<div class="col-md-10 main-content offset-md-1">
							<?php the_content(); ?>
							<p class="intro">
								Below are posts from the Boston Political Education Working Group.
							</p>

							<?php
					          $args = array(
					            'post_type' => 'political_education',
					          );
					        
					          $blogposts = new WP_Query($args);
					          while ( $blogposts->have_posts() ) : $blogposts->the_post(); 
					      ?>
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<p>
								<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
								</p>

								<a href="<?php $link = the_permalink(); $perma_link = substr($link, 47) ?>" class="btn btn-primary">Read</a>

								<hr>

							<?php endwhile; ?>
						</div>
					</div>
				</main>

			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>