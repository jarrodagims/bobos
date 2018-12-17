<?php get_header(); ?>
<section id="main">
	<div class="container">
		<div class="row">
			<?php
			if(is_page('specials')){
			echo'<div class="<?=FULLWIDTH?>">
			<a style="display: block;margin-top: 3em;" href="http://bobosfun.com/wp-content/uploads/2018/11/TurkeyDay.2018.pdf" target="_blank"><img src="http://bobosfun.com/wp-content/uploads/2018/11/thanksgiving-special.jpg" alt="" /></a>
			</div>';
			}
			?>
			<div class="<?=FULLWIDTH?>">				
				<?php get_template_part('template-parts/content', 'page'); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>