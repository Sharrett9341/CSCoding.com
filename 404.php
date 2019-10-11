<?php get_header(); ?>

      
   
<div class="container-404">
	<h2 class="page-heading">
		Oh! What?? 404?
	</h2>

	<img src="http://source.unsplash.com/640x480/?cats">
	<h3>Sorry Friend, I think you're lost. Plz try to the following links</h3>

		<ul>
			<li><a href="<?php echo site_url('/blog')?>">Blog List</li>
			<li><a href="<?php echo site_url('/projects')?>">Projects List</li>
			<li><a href="<?php echo site_url('/about')?>">About Me</li>
			<li><a href="<?php echo site_url('')?>">Home List</li>
		</ul>
	</div>

	<?php get_footer() ?>