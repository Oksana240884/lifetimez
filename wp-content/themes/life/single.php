<?php 
get_header();?>
<?php while(have_posts()) : the_post(); ?>
	<div class="container">
		<div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
			<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="<?php echo home_url();?>" itemprop="item"><span itemprop="name">Главная</span></a>
				<meta itemprop="position" content="1">
			</span>
			<span class="breadcrumbs__separator"> / </span>
			<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="<?php echo get_category_link(12);?>" itemprop="item"><span itemprop="name">Портфолио</span></a>
				<meta itemprop="position" content="2">
			</span>
			<span class="breadcrumbs__separator"> / </span>
			<span class="breadcrumbs__current"><?php the_title();?></span>
		</div>
	</div>
	<div class="services-single">
		<div class="container">
			<div class="row">
				<?php while(have_rows('галерея')) : the_row(); ?>
					<div class="col-sm-6 col-md-4">
						<?php $image = get_sub_field('изображение'); ?>
						<a href="<?php echo wp_get_attachment_url($image);?>" class="portfolio-item slider__inner" data-fancybox="image">
							<?php echo wp_get_attachment_image($image, 'portfolio');?>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer();?>