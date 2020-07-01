<div class="top-bar" id="top-bar-menu">
	<!-- .top-bar-left removed -->
	<div class="float-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<!-- .top-bar-right removed -->
	<div class="float-right show-for-large">
		<?php joints_top_nav(); ?>	
	</div>
	<!-- .top-bar-right removed -->
	<div class="float-right hide-for-large" style="float:right;">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>