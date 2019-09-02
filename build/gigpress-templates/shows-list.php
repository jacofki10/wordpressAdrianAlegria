<?php
/*
	STOP! DO NOT MODIFY THIS FILE!
	If you wish to customize the output, you can safely do so by COPYING this file into a new folder called 'gigpress-templates' in your 'wp-content' directory	and then making your changes there. When in place, that file will load in place of this one.

	This template displays all of our individual show data in the main shows listing (upcoming and past).

	If you're curious what all variables are available in the $showdata array, have a look at the docs: http://gigpress.com/docs/
*/
?>
<div class="row px-0 py-4 gigs klanimate" data-duration="3" data-delay="0.5">
	<a href="" class="row col-12 col-lg-9 p-0">
		<div class="row col-12 col-lg-4 justify-content-center mb-2 m-0">
			<div class="p-1 dia mb-2"><span><?php echo $showdata['date']; ?></span></div>
			<div class="p-1 mes mb-2"><span><?php echo $showdata['date_long']; ?></span><span><?php echo $showdata['date_long2']; ?></span></div>
		</div>
		<div class="col-12 col-lg-8 align-self-center font-weight-bold">
			<h4><?php echo $showdata['venue']; ?>, <?php echo $showdata['city']; ?>(<?php echo $showdata['country']; ?>)</h4>
		</div>
	</a>
	<a class="col-12 col-lg-3 align-self-center"><i class="fas fa-angle-double-right "></i><?php echo $showdata['ticket_link'] ?></a>
</div>
