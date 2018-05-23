<?php get_header(); ?>

<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
</form>

<?php //echo $wp_query->found_posts;	//Result Count ?>
<?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"

<?php if ( have_posts() ) : ?>
	<ul>
    	<?php while ( have_posts() ) : the_post(); ?>
	       <li>
	         <h3><a href="<?php echo get_permalink(); ?>">
	           <?php the_title();  ?>
	         </a></h3>

	         <?php  the_post_thumbnail('medium') ?>
	         
	         <?php echo substr(get_the_excerpt(), 0,200); ?>

	         <a href="<?php the_permalink(); ?>">Read More</a>

	       </li>
    	<?php endwhile; ?>
	</ul>

	<?php echo paginate_links(); ?>

<?php endif; ?>

<?php get_footer(); ?>