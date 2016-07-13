<footer>
	<?php if(zo_get_data_theme_options('footer_row_1')){ ?>
		<div class="yeah-footer-row-1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<?php if (is_active_sidebar('footer-1-left')) : ?><?php dynamic_sidebar('footer-1-left'); ?><?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<?php if (is_active_sidebar('footer-1-right')) : ?><?php dynamic_sidebar('footer-1-right'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if(zo_get_data_theme_options('footer_row_2')){ ?>
		<div class="yeah-footer-row-2">
			<div class="container">
				<div class="row">				
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php if (is_active_sidebar('footer-2-item-1')) : ?><?php dynamic_sidebar('footer-2-item-1'); ?><?php endif; ?>
					</div>			
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php if (is_active_sidebar('footer-2-item-2')) : ?><?php dynamic_sidebar('footer-2-item-2'); ?><?php endif; ?>
					</div>			
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php if (is_active_sidebar('footer-2-item-3')) : ?><?php dynamic_sidebar('footer-2-item-3'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if(zo_get_data_theme_options('footer_row_3')){ ?>
		<div class="yeah-footer-row-3">
			<div class="container">
				<div class="row">				
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-3-item-1')) : ?><?php dynamic_sidebar('footer-3-item-1'); ?><?php endif; ?>
					</div>			
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-3-item-2')) : ?><?php dynamic_sidebar('footer-3-item-2'); ?><?php endif; ?>
					</div>			
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-3-item-3')) : ?><?php dynamic_sidebar('footer-3-item-3'); ?><?php endif; ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						<?php if (is_active_sidebar('footer-3-item-4')) : ?><?php dynamic_sidebar('footer-3-item-4'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if(zo_get_data_theme_options('footer_banners')){ ?>
		<div class="yeah-footer-banners">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php if (is_active_sidebar('footer-banners')) : ?><?php dynamic_sidebar('footer-banners'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<?php if(zo_get_data_theme_options('footer_bottom')){ ?>
		<div class="yeah-footer-bottom">
			<div class="container">
				<div class="row">				
					<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="" src="<?php echo esc_url(zo_footer_logo()); ?>"></a>
					</div>
					<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
						<?php if (is_active_sidebar('footer-bottom-text')) : ?><?php dynamic_sidebar('footer-bottom-text'); ?><?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
</footer><!-- #site-footer -->