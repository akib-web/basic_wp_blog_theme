
                <article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        
                        <div class="entry__thumb slider">
                            <div class="slider__slides">
                                <div class="slider__slide">
                                <?php the_post_thumbnail( "arblog_post_square_image" ); ?>  
                                </div>
                                <div class="slider__slide">
                                <?php the_post_thumbnail( "arblog_post_square_image" ); ?>
                                </div>
                                <div class="slider__slide">
                                <?php the_post_thumbnail( "arblog_post_square_image" ); ?>
                                </div>
                            </div>
                        </div>
        
                        <?php get_template_part("template-parts/common/post/posts-content"); ?>
        
                    </article> <!-- end article -->