<nav class="uk-navbar">
  	<a class="uk-navbar-brand uk-hidden-small" href="<?= home_url('/'); ?>">
  		<img src="<?= imgpath('logo-jgbnd-small-shadow.jpg') ?>" title="<?php bloginfo('name') ?>" class="logo">
  	</a>
  	<div class="uk-navbar-flip uk-hidden-small">
  	 	<ul class="uk-navbar-nav" data-uk-scrollspy-nav="{
  	 		closest: 'li', smoothscroll: {offset: 50}}">
      	<?php include('nav-lists.php'); ?>
 		</ul>
        <div class="uk-navbar-content">
            <?php inc('partials/search-form'); ?>
        </div>
 	</div>

  	<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
  	<div class="uk-navbar-brand uk-navbar-center uk-visible-small">
  		<img src="<?= imgpath('logo-jgbnd-small-shadow.jpg') ?>" title="<?php bloginfo('name') ?>" class="logo">
  	</div>
</nav>