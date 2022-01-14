<?php 
// Template Name: News
?>
<?php get_header(); 
$baseDir = get_template_directory_uri();
?>
    <section class="page-news">
        <div class="container-xl">
            <div class="row">
                <div class="col-12">
                    <div class="news-field">
                        <h1 class="mb-4">Новости</h1>
                        <div class="row">
                    <?php 
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $query = new WP_Query(['category_name' => 'news', 'paged' => $paged]);
                    while ( $query->have_posts() ) :
                        $query->the_post();
                    ?>
                    <div class="col-12 col-sm-6 mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-card-block" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover;">
                                <div class="news-card-block-text">
                                    <p class="news-date"><?php echo get_the_date('j F Y'); ?></p>
                                    <p class="news-title"><?php the_title(); ?></p>
                                    <p class="news-text"><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    endwhile;
                    ?>
                    <div class="d-flex justify-content-center news-pagination">
                    <?php previous_posts_link( 'Предыдущая' , $query->max_num_pages ); ?>
                    <?php next_posts_link( 'Следующая' , $query->max_num_pages ); ?>
                    </div>
                    </div>

                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>