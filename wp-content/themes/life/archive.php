<?php get_header();?>
	<div class="container">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
	<div class="services-single">
		<div class="container">
			<div class="title-sec wow fadeInLeft" style="margin-top: 0;">
				<span>Портфолио</span>
			</div>
			<div class="container">
				<ul class="services__tab j-tab tab-portfolio">
					<li>
						<a href="#tab1" class="active">
							Копирайтинг
						</a>
					</li>
					<li>
						<a href="#tab2">
							Дизайн
						</a>
					</li>
				</ul>
			</div>
			<br>
			<div id="tab1" class="services__wrap-tab active">
				<div class="row">
					<?php 
					query_posts(array(
						'cat' => array(5)
					));

					while(have_posts()) : the_post(); ?>
						<div class="col-lg-4 col-md-6 col-sm-6 mb-30">
							<a href="<?php the_permalink();?>" class="portfolio-item2">
								<?php the_post_thumbnail('primer');?>
								<span class="portfolio-item2__content">
									<span class="portfolio-item2__title">
										<?php the_title();?>
									</span>
									<span class="portfolio-item2__desc">
										<?php 
										$i = 0;
										$categories = get_the_category();
										$len = count($categories);
										foreach($categories as $category){
											 if ($i == $len - 1) {
										        echo $category->name. '.';
										    } else {
										    	echo $category->name. ', ';
										    }
										    // …
										    $i++;
										}
										?>
									</span>
									<span class="portfolio-item2__search"></span>
								</span>
							</a>
						</div>
					<?php endwhile;?>
					<?php if (  $wp_query->max_num_pages > 1 ) : ?>
						<script>
						var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
						var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
						var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
						var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
						</script>
						<div class="loadmore">
							<div class="btn btn--trans j-more">
								показать еще
							</div>
						</div>
					<?php endif; ?>
					<?php wp_reset_postdata();; ?>
				</div>
			</div>
			<div id="tab2" class="services__wrap-tab">
				<div class="row">
					<?php 
					query_posts(array(
						'cat' => array(13)
					));

					while(have_posts()) : the_post(); ?>
						<div class="col-lg-4 col-md-6 col-sm-6 mb-30">
							<a href="<?php the_permalink();?>" class="portfolio-item2">
								<?php the_post_thumbnail('primer');?>
								<span class="portfolio-item2__content">
									<span class="portfolio-item2__title">
										<?php the_title();?>
									</span>
									<span class="portfolio-item2__desc">
										<?php 
										$i = 0;
										$categories = get_the_category();
										$len = count($categories);
										foreach($categories as $category){
											 if ($i == $len - 1) {
										        echo $category->name. '.';
										    } else {
										    	echo $category->name. ', ';
										    }
										    // …
										    $i++;
										}
										?>
									</span>
									<span class="portfolio-item2__search"></span>
								</span>
							</a>
						</div>
					<?php endwhile;?>
					<?php if (  $wp_query->max_num_pages > 1 ) : ?>
						<script>
						var ajaxurl2 = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
						var true_posts2 = '<?php echo serialize($wp_query->query_vars); ?>';
						var current_page2 = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
						var max_pages2 = '<?php echo $wp_query->max_num_pages; ?>';
						</script>
						<div class="loadmore">
							<div class="btn btn--trans j-more2">
								показать еще
							</div>
						</div>
					<?php endif; ?>
					<?php wp_reset_postdata();; ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>