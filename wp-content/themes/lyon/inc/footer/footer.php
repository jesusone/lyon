<footer id="yeah-footer">
	<?php if(yeah_get_data_theme_options('footer_main')){ ?>
		<div class="yeah-footer-main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
						<div class="footer-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_footer_logo()); ?>"></a>
						</div>
						<div class="footer-text">
							<?php if(yeah_get_data_theme_options('contact_phone')):?>
								<i class="zmdi zmdi-phone zmdi-hc-fw"></i>
								<span><?php echo esc_html__('Hoteline: ','lyon'); echo esc_html(yeah_get_data_theme_options('contact_phone'));?></span>
							<?php endif; ?>
							<?php if(yeah_get_data_theme_options('contact_email')):?>
								<i class="zmdi zmdi-email zmdi-hc-fw"></i>
								<span><?php echo esc_html__('Email: ','lyon'); echo esc_html(yeah_get_data_theme_options('contact_email'));?></span>
							<?php endif; ?>
						</div>
						<div class="yeah-footer-social">
							<?php  yeah_footer_social(); ?>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<?php if (is_active_sidebar('footer-1-right')) : ?><?php dynamic_sidebar('footer-1-right'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>

	<?php if(yeah_get_data_theme_options('footer_copyright')){ ?>
		<div class="yeah-footer-copyright">
			<div class="container">
				<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 copy-sidebar">
						<?php if (is_active_sidebar('footer-copyright')) : ?><?php dynamic_sidebar('footer-copyright'); ?><?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 yeah-copyright-text">
						<?php echo html_entity_decode(yeah_get_data_theme_options('footer_copyright_text')); ?>
					</div>

				</div>
			</div>
		</div>
	<?php }?>
</footer><!-- #site-footer -->