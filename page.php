<?php get_header(); ?>
<main>
	<div class="company">
		<div class="container">
			<div class="company-title">
				<h2><?php the_title(); ?></h2>
				<?php if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>

		</div>
	</div>
</main>
<?php get_footer(); ?>  