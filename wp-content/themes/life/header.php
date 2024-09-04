<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name');?> <?php wp_title();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/fancybox/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/bootstrap/css.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/libs/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<div class="header-relative">
		<header class="header j-header">
			<div class="container">
				<div class="header__row">
					<div class="row">
						<div class="col header__logo">
							<a href="<?php echo home_url();?>">
								<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
							</a>
						</div>
						<div class="col header__menu j-mobile">
							<ul class="header__list j-menu">
								<li>
									<a href="<?php echo home_url();?>#home" class="<?php echo is_front_page() ? 'current' : '';?>" data-scroll="home">
										<span class="absolute">Главная</span>
										<span class="relative">Главная</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url();?>#services" data-scroll class="<?php echo is_singular('services') ? 'current' : '';?>">
										<span class="absolute">Услуги</span>
										<span class="relative">Услуги</span>
									</a>
								</li>
								<li>
									<a href="<?php echo get_category_link(12);?>" class="<?php if(is_category(12) || is_singular('post')) { echo 'current';} ?>
									">
										<span class="absolute">Портфолио</span>
										<span class="relative">Портфолио</span>
									</a>
								</li>
								<li>
									<a href="<?php echo get_permalink(14);?>" class="<?php echo is_page(14) ? 'current' : '';?>">
										<span class="absolute">Контакты</span>
										<span class="relative">Контакты</span>
									</a>
								</li>
							</ul>
							<div class="tire"></div>
						</div>
						<div class="col header__soc">
							<ul class="soc">
								<li>
									<a href="<?php echo get_option('viber');?>">
										<svg>
											<use xlink:href="<?php echo get_template_directory_uri();?>/img/viber.svg#icon"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="<?php echo get_option('telegram');?>">
										<svg>
											<use xlink:href="<?php echo get_template_directory_uri();?>/img/telegram.svg#icon"/>
										</svg>
									</a>
								</li>
							</ul>
						</div>
						<div class="col header__phone">
							<a href="tel:<?php echo get_option('site_telephone');?>" class="phone">
								<svg>
									<use xlink:href="<?php echo get_template_directory_uri();?>/img/phone.svg#icon"/>
								</svg>
								<?php echo get_option('site_telephone');?>
							</a>
						</div>
						<div class="header__toggle j-toggle">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>