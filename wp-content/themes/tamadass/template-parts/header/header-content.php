<div class="headerWrapper">
	<div class="headerTop">
		<div class="fixedHeader border-b1">
			<div class="head_wrapper out_wrapper">	
				<div class="logo_box">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?=get_theme_file_uri( '/assets/img/logo.png' )?>" class="logo_img">
				  	</a>
				</div>
				<div class="head_menu_box pc_992">
					<?php if ( has_nav_menu( 'header' ) ) : ?>	
						<?php get_template_part( 'template-parts/navigation/navigation', 'header' ); ?>
					<?php endif; ?>
				</div>
				<div class="head_contact_box">
					<a href="tel:0338352441" class="head_tel pc_992">
						<div class="head_tel_box pc_992">
							<span class="head_tel_num ">03-3835-2441</span>
							<span class="head_tel_time ">受付時間／月〜金 9:00〜18:00</span>
						</div>
					</a>	
					<a href="#" class="header_mail pc_992">
						<div class="header_mail_box pc_992">
							<p>お問い合わせ</p>						
						</div>
					</a>
					<a href="" class="sp_head_envelope">
						<div class="sp_992 sp_envelope">
							<img src="<?=get_theme_file_uri( '/assets/img/envelope.png' )?>">
						</div>
					</a>
					<a href="tel:0338352441" class="sp_head_tel sp_992">
						<div class="sp_992 sp_phone">
							<img src="<?=get_theme_file_uri( '/assets/img/phone.png' )?>">
						</div>
					</a>
				</div>
				<div class="sp_992 sp_menu">
					<div class="menuBtn menuBtnAction" onclick="hamburger()">
						<div class="menuBtnInner">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
		<div class="sp_992" id="hamburger_link">
			<?php wp_nav_menu( array(
			      'theme_location'=>'header',
			      'container'     =>'',
			      'menu_class'    =>'',
			      'items_wrap'    =>'<ul id="hamburger-nav" class="menu">%3$s</ul>'));
			?>
		</div>
	</div>
</div>

