<html>
	



<?php get_header();?>


<body <?php body_class(); ?>>

<body <?php body_class(); ?>>

	<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>
<div class="bar">
<div class="tab">
<div class="wrapper">


<br style="clear:both" />
</div>
</div>

<div class="wrapper">

<h1>The <b>BOSS</b> Auto Group</h1>
<h2>We $ave You <b>MONEY & TIME</b></h2>
<button class="btn">Make An Appointment</button>
</div>
</div>



<div class="bar2">
<div class="wrapper">
<h3><?php bloginfo('web'); ?>The Boss Auto Group- Used car dealer in Huntington, NY</h3>
<p><?php bloginfo('description'); ?>Until 1994, Mercedes-Benz utilized an alphanumeric system for categorizing their vehicles, consisting of a number sequence approximately equal to the engine's displacement in liters multiplied by 100, followed by an arrangement of alphabetical suffixes, indicating body style and engine type.</p>
<p>Mercedes-Benz traces its origins to Karl Benz's creation of the first petrol-powered car, the Benz Patent Motorwagen, financed by Bertha Benz and patented in January 1886 and Gottlieb Daimler and engineer Wilhelm Maybach's conversion of a stagecoach by the addition of a petrol engine later that year. The Mercedes automobile was first marketed in 1901 by Daimler-Motoren-Gesellschaft (Daimler Motors Corporation).</p>
</div>
</div>
<div class="bar3">
<div class="wrapper">
<h4><?php bloginfo('web'); ?>As seen in:</h4>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car.jpg">
</div>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car1.jpg">
</div>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car4.jpg">
</div>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car5.jpeg">
</div>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car6.jpg">
</div>
<div class="column">
<img src="<?php bloginfo('template_url')?>/car7.jpg">
</div>
<br style="clear:both" />
<button class="b">Visit Our Website</button>
</div>
</div>




<?php get_footer();?>
	
</html>