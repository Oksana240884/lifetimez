	<footer class="header footer">
		<div class="container">
			<div class="footer__row">
				<div class="row">
					<div class="col header__logo">
						<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
					</div>
					<div class="col header__menu">
						<ul class="header__list">
							<li>
								<a href="<?php echo home_url();?>#home" class="current" data-scroll="home">
									<span class="absolute">Главная</span>
									<span class="relative">Главная</span>
								</a>
							</li>
							<li>
								<a href="<?php echo home_url();?>#services" data-scroll>
									<span class="absolute">Услуги</span>
									<span class="relative">Услуги</span>
								</a>
							</li>
							<li>
								<a href="<?php echo get_category_link(12);?>">
									<span class="absolute">Портфолио</span>
									<span class="relative">Портфолио</span>
								</a>
							</li>
							<li>
								<a href="<?php echo get_permalink(14);?>">
									<span class="absolute">Контакты</span>
									<span class="relative">Контакты</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="col header__soc">
						<ul class="soc">
							<li>
								<a href="<?php echo get_option('instagram');?>">
									<svg>
										<use xlink:href="<?php echo get_template_directory_uri();?>/img/insta.svg#icon"/>
									</svg>
								</a>
							</li>
							<li>
								<a href="<?php echo get_option('facebook');?>">
									<svg>
										<use xlink:href="<?php echo get_template_directory_uri();?>/img/facebook.svg#icon"/>
									</svg>
								</a>
							</li>
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
					<div class="col header__copyrite">
						<?php echo get_option('copyrite');?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php wp_footer();?>
	<div class="modal" id="zakaz">
		<?php echo do_shortcode('[contact-form-7 id="152" title="Заявка"]');?>
	</div>
	<div class="modal" id="ok">
		<div class="modal__title">
			Спасибо вам!
		</div>
		<div class="modal__desc">
			С вами свяжется наш менеджер. <br>
			Ожидайте звонка в ближайшее время
		</div>
	</div>
	<script src="<?php echo get_template_directory_uri();?>/libs/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/slick-carousel/slick/slick.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/libs/mask.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
</body>
</html>