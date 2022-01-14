<?php 
// Template Name: Главная
?>

<?php get_header(); 
$baseDir = get_template_directory_uri();
?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="main-slide-1 carousel-item active"
                            style="background: url('<?php echo $baseDir;?>/img/main-banner-list-1.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <div class="container">
                                <div>
                                    <h1>НАГРАДА КОНКУРСА «ПРОФ-IT.2021»</h1>
                                    <p>Инновационный проект “Цифровизация ветеринарной отрасли и АПК на основе
                                        автоматизированной системы учета и регистрации животных АС «REGAGRO» наших
                                        партнеров,
                                        компания “Агросервис”, занял 1 место в номинации «Идентификация и
                                        аутентификация». </p>
                                    <p>23 сентября, 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-slide-1 carousel-item"
                            style="background: url('<?php echo $baseDir;?>/img/main-banner-list-2.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <div class="container">
                                <div>
                                    <h1>МЕЖДУНАРОДНЫЙ ПОТЕНЦИАЛ "REGAGRO : ПАСЕКА"</h1>
                                    <p>Пчела как экологическое и экономическое благополучие человека – такова
                                        центральная тема 47-го конгресса Международной федерации пчеловодческих
                                        ассоциаций Apimondia, который состоится 22-27 августа 2022 года в Уфе, столице
                                        Башкортостана.</p>
                                    <p>13 августа, 2021</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-slide-1 carousel-item"
                            style="background: url('<?php echo $baseDir;?>/img/main-banner-list-3.jpg'); background-repeat: no-repeat; background-size: cover;">
                            <div class="container">
                                <div>
                                    <h1>СИСТЕМА УПРАВЛЕНИЯ СТАДОМ "МОЛОЧНАЯ ФЕРМА"</h1>
                                    <p>Анимационный ролик рассказывает о мобильном приложении "Молочная ферма", которое
                                        представляет собой систему управления молочным стадом и предназначена для
                                        специалистов и руководителей товарных и племенных предприятий молочного
                                        направления.</p>
                                    <p>17 июня, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-section slider-wrapper mark-slider-block" style="overflow: hidden;">
        <div class="base"></div>
        <div class="container">
            <div class="row">
                <div class="mb-5">
                    <h4 class="mb-0">Средства маркирования</h4>
                </div>
                <div class="col-auto">
                    <a href="#">
                        <div class="mark-block">
                            <div>
                                <img class="svg-mark-block" src="<?php echo $baseDir;?>/img/cow.svg">
                                <svg class="arrow-mark-block" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z"
                                        fill="#3B3B3B" />
                                </svg>
                            </div>
                            <p>Крупный рогатый скот</p>
                            <img class="img-mark-block" src="<?php echo $baseDir;?>/img/cow-bg.png">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container">
        <div class="map-stats-block">
            <h1>Статистика</h1>
            <img src="<?php echo $baseDir;?>/img/2584009377424.svg">
        </div>
    </div>
</section>

<section class="news my-4">
    <div class="container-section slider-wrapper" style="overflow: hidden;">
        <div class="base"></div>
        <div class="container">
            <div class="row">
                <div class="more-news-title d-flex align-items-center mb-5">
                    <a href="<?php echo $baseDir;?>/news/">
                        <h4 class="mb-0">Полезные новости</h4>
                    </a>
                    <svg width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z"
                            fill="#3B3B3B" />
                    </svg>
                </div>
                <div class="owl-carousel owl-theme">
                    <?php $query = new WP_Query(['posts_per_page' => 3]);
                    while ( $query->have_posts() ) :
                        $query->the_post();
                ?>

                    <div class="col-auto">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-card-block"
                                style="background: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover;">
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>