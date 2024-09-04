<?php get_header();?>
<?php while(have_posts()) : the_post(); ?>
	<?php while(have_rows('баннер')) : the_row();?>
		<div class="banner" id="home">
			<div class="container">
				<div class="row">
					<div class="col col-md-7">
						<h1 class="banner__title wow fadeInLeft">
							<?php the_sub_field('заголовок'); ?>
						</h1>
						<div class="banner__desc wow fadeInLeft">
							<?php the_sub_field('описание'); ?>
						</div>
						<div class="banner__btn wow fadeInUp">
							<a href="#zakaz" class="btn" data-fancybox>
								Жми сюда
							</a>
							<span class="banner__arrow">
								<svg>
									<use xlink:href="<?php echo get_template_directory_uri();?>/img/share.svg#icon"/>
								</svg>
								Ты этого хочешь!
							</span>
						</div>
					</div>
					<div class="banner__img">
						<?php $image = get_sub_field('изображение');?>
						<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="wow fadeInRight">
						<div class="banner__plashka1 banner__plashka wow fadeInRight">
							<?php the_sub_field('плашка_1'); ?>
						</div>
						<div class="banner__plashka2 banner__plashka wow fadeInUp">
							<?php the_sub_field('плашка_2'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
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
	<div class="why">
		<div class="container">
			<div class="title-sec wow fadeInLeft">
				<span>
					Почему мы
				</span>
			</div>
			<div class="row">
				<?php 
				$count = 1;
				while(have_rows('почему_мы')) : the_row();?>
					<div class="col-lg-4 col-md-6 col-sm-6  j-why-item">
						<div class="why__inner">
							<div class="why__number">
								<span>0<?php echo $count++;?></span>
								<img src="<?php echo get_template_directory_uri();?>/img/why-item.png" alt="">
							</div>
							<div class="why__text">
								<div class="why__title">
									<?php the_sub_field('заголовок');?>
								</div>
								<div class="why__desc">
									<?php the_sub_field('описание');?>	
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;  wp_reset_query();?>
			</div>
		</div>
	</div>
	<div class="etap line">
		<div class="container">
			<div class="title-sec wow fadeInRight">
				<span>Схема работы</span>
			</div>
			<div class="etap__wrapper">
				<?php 
				$countStep = 1;

				while(have_rows('схема_работы')) : the_row(); $countStep++;?>
					<?php if($countStep == 5) : ?>
						<div class="etap__item">
							<div class="etap__img">
								<?php $image = get_sub_field('иконка');?>
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
							</div>
							<div class="etap__desc">
								<div class="j-text-more">
									<?php the_sub_field('описание');?>
								</div>
								<div class="j-text-more-btn link">
									Показать еще
								</div>
							</div>
						</div>
					<?php else : ?>
						<div class="etap__item">
							<div class="etap__img">
								<?php $image = get_sub_field('иконка');?>
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
							</div>
							<div class="etap__desc">
								<?php the_sub_field('описание');?>
							</div>
						</div>
					<?php endif; ?>
				
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<div class="contacts">
		<div class="container">
			<div class="title-sec wow fadeInLeft">
				<span>Наши контакты</span>
			</div>
			<div class="contacts__info">
				<a href="mailto:<?php echo get_option('email');?>" class="phone wow fadeInLeft">
					<svg>
						<use xlink:href="<?php echo get_template_directory_uri();?>/img/email.svg#icon"/>
					</svg>
					<?php echo get_option('email');?>
				</a>
				<a href="tel:<?php echo get_option('site_telephone');?>" class="phone wow fadeInRight">
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