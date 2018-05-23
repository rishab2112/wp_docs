<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php the_post(); ?>

	<h1>
		<a href="<?php echo get_permalink(); ?>">
           <?php the_title();  ?>
        </a>
    </h1>

    <?php //the_post_thumbnail('medium') ?>
         
    <?php the_content(); ?>
    
<?php endif; ?>

<?php get_footer(); ?>