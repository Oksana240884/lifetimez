<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>
	<div class="container">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
	<div class="services-single">
		<div class="container">
			<div class="title-sec wow fadeInRight">
				<span><?php the_title();?></span>
			</div>
			<div class="row">
				<div class="col-md-6 wow fadeInLeft">
					<?php the_content();?>
				</div>
				<div class="col-md-6 wow fadeInRight">
					<?php the_post_thumbnail();?>
				</div>
			</div>
			<?php if(get_field('примеры_работ_из_категории')) :?>
				<div class="single-title">
					примеры работ
				</div>
				<div class="slider j-slider">
					<?php 
					query_posts(array(
						'cat' => get_field('примеры_работ_из_категории')
					));

					while(have_posts()) : the_post(); ?>
						<div class="slider__item">
							<?php
							$image = get_sub_field('изображение');
							?>
							<a href="<?php the_permalink();?>" class="slider__inner">
								<?php the_post_thumbnail('primer');?>
							</a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata();; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="services line" id="services">
		<div class="services__top">
			<div class="container">
				<ul class="services__tab j-tab">
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
		</div>
		<div class="container">
			<div id="tab1" class="services__wrap-tab active">
				<div class="row justify-content-center">
					<?php 
					$arr = array(
						'posts_per_page' => -1,
						'post_type' => 'services',
						'tax_query' => array(
							array(
								'taxonomy' => 'services_cat',
								'field'    => 'id',
								'terms'    => array(3)
							)
						)
					);

					$query = new WP_Query($arr);

					while($query->have_posts()) : $query->the_post(); ?>
						<div class="col-md-4 col-sm-6">
							<a href="<?php the_permalink();?>" class="services__item">
								<div class="services__img">
									<?php $image = get_field('иконка');?>
									<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
								</div>
								<div class="services__title">
									<?php the_title();?>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div id="tab2" class="services__wrap-tab">
				<div class="row justify-content-center">
					<?php 
					$arr2 = array(
						'posts_per_page' => -1,
						'post_type' => 'services',
						'tax_query' => array(
							array(
								'taxonomy' => 'services_cat',
								'field'    => 'id',
								'terms'    => array(4)
							)
						)
					);

					$query2 = new WP_Query($arr2);

					while($query2->have_posts()) : $query2->the_post(); ?>
						<div class="col-md-4 col-sm-6">
							<a href="<?php the_permalink();?>" class="services__item">
								<div class="services__img">
									<?php $image = get_field('иконка');?>
									<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
								</div>
								<div class="services__title">
									<?php the_title();?>
								</div>
							</a>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="contacts" style="background: none;">
		<div class="container">
			<div class="title-sec">
				<span>Наши контакты</span>
			</div>
			<div class="contacts__info">
				<a href="mailto:<?php echo get_option('email');?>" class="phone">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri();?>/img/email.svg#icon"/>
					</svg>
					<?php echo get_option('email');?>
				</a>
				<a href="tel:<?php echo get_option('site_telephone');?>" class="phone">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri();?>/img/phone.svg#icon"/>
					</svg>
					<?php echo get_option('site_telephone');?>
				</a>
			</div>
			<?php echo do_shortcode('[contact-form-7 id="51" title="Контакты"]');?>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer();?>