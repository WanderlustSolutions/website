<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://www.facebook.com/Katharrina" class="soc-icon fb" target="blank"></a>
					<a href="https://www.linkedin.com/in/katharinaroettenbacher/?locale=en_US" class="soc-icon ln" target="blank"></a>
					<a href="https://github.com/KatherineRoe" class="soc-icon gh" target="blank"></a>
					<a href="https://www.instagram.com/travel.l_o_v_e_r/" class="soc-icon in" target="blank"></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
