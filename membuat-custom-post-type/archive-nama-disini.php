<?php get_header(); ?>

<section class="section-main news-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title pb-4">
                    <span>
                        Nama Disini
                    </span>
                    <h1>Nama Disini</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            $args = array( 'post_type' => 'nama-disini', 'posts_per_page' => -1 );
            $the_query = new WP_Query( $args ); 
            ?>

            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;" class="news-image">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-content">
                            <span><?php the_time('F jS, Y'); echo " at "; the_time(); ?></span>
                            <h2><?php the_title(); ?></h2>
                            <div class="news-excerpt">
                                <?php the_excerpt(); ?> 
                            </div>
                            <div class="news-button-main">
                                <a class="main-button news-button" href="<?php echo get_the_permalink(); ?>">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
            wp_reset_postdata(); ?>

            <?php else:  ?>

            <div class="col-md-12">
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>

            <?php endif; ?>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>
