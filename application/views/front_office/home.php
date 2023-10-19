 

<aside id="fh5co-hero" class="js-fullheight">
	<div class="flexslider js-fullheight" style="background-color: lightgrey">
		<ul class="slides">
		<?php foreach ($besoin as $b) { ?>	
	   	<li>
	   		<div class="container">
	   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
	   				<div class="slider-text-inner">
	   					<div class="desc" style="background-color: white">
	   						<span class="price">RH.</span>
	   						<h2>Annonce 1</h2>
	   						<p><?php echo $b->description; ?></p>
	   						<button><a href="<?php echo base_url().'crecrutement/home'?>" style="text-decoration: none; color: black">Inscription</a></button>
	   					</div>
	   				</div>
	   			</div>
	   		</div>
	   	</li>
	   	<?php  } ?>
	  	</ul>
  	</div>
</aside>
