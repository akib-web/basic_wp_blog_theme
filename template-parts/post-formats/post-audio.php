
                <article class="masonry__brick entry format-audio" data-aos="fade-up">

<div class="entry__thumb">
    <a href="single-audio.html" class="entry__thumb-link">
    <?php the_post_thumbnail( "arblog_post_square_image" ); ?>    
    </a>
    <div class="audio-wrap">
        <audio id="player" src="<?php echo get_theme_file_uri(); ?>/assets/media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%" height="42" controls="controls"></audio>
    </div>
</div>

<?php get_template_part("template-parts/common/post/posts-content"); ?>

</article> <!-- end article -->