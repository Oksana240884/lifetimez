<?php 
/* Template name: Контакты */
get_header();?>
<?php while(have_posts()) : the_post(); ?>
	<div class="container">
		<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	</div>
	<div class="contacts" style="background: none;">
		<div class="container">
			<div class="title-sec wow fadeInLeft" style="margin-top: 0;">
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