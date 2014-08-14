<div class="recNew">
    <h1>Наши новости</h1>
<?php
wp_reset_query();
// The Query
global $wp_query;
$args = array( 'post_type' => 'post', 'limit' => '2' ) ;
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();?>
    <div class="recent-news">
            <h2><?php the_title();?></h2>
            <div class="date"><?php the_date();?></div>
        <div class="content"><?php the_excerpt();?></div>
        <a href="<?php the_permalink(); ?>" class="next">Подробнее ></a>
    </div>

<?php endwhile; ?>

<?php
wp_reset_query();
?></div><div class="banner"></div>