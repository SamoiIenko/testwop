<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package regagro
 */

get_header();
the_post();
$baseDir = get_template_directory_uri();
?>

	<section class="open-news">	
        <div class="container-xl">
			<div class="row">
				<div class="col-12 col-lg-9">
					<p class="open-news-date"><?php echo get_the_date('j F Y'); ?></p>
					<h1 class="open-news-title"><?php echo get_the_title(); ?></h1>

					<div class="open-news__content">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-12 col-lg-3 sidebar-line">
					<?php get_sidebar('links') ?>
				</div>
			</div>  
        </div>
    </section>

<?php
get_sidebar();
get_footer();
