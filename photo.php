<?php 
	$pageActive = "photo";
	$pageTitle = "Wilde's Chateau | Photos";
	include('inc/header.php');
	include('inc/photo_array.php');
?>

<div class="container">
<section>
	<h1 class="center" id="photo_head">Photos</h1>
</section>
<section class="album clearfix">
	<h2 class="fancy"><?php echo $party_pics[0] ['title']; ?></h2>
	<?php foreach($party_pics as $party_pic) { ?>	
		<ul>
			<li><img src="<?php echo $party_pic['img'] . "-thm.jpg"; ?>" alt="<?php echo $party_pic['alt']?>"</li>
		</ul>
	<?php } ?>
</section>
<section class="album clearfix">
	<h2 class="fancy"><?php echo $prideNight_pics[0] ['title']; ?></h2>
	<?php foreach($prideNight_pics as $prideNight_pic) { ?>	
		<ul>
			<li><img src="<?php echo $prideNight_pic['img'] . "-thm.jpg"; ?>" alt="<?php echo $prideNight_pic['alt']?>"</li>
		</ul>
	<?php } ?>
</section>
<section class="album clearfix">
	<h2 class="fancy"><?php echo $halloween_pics[0] ['title']; ?></h2>
	<?php foreach($halloween_pics as $halloween_pic) { ?>	
		<ul>
			<li><img src="<?php echo $halloween_pic['img'] . "-thm.jpg"; ?>" alt="<?php echo $halloween_pic['alt']?>"</li>
		</ul>
	<?php } ?>
</section>
<section class="album clearfix">
	<h2 class="fancy"><?php echo $talent_pics[0] ['title']; ?></h2>
	<?php foreach($talent_pics as $talent_pic) { ?>
		<ul>
			<li><img src="<?php echo $talent_pic['img'] . "-thm.jpg"; ?>" alt="<?php echo $talent_pic['alt']?>"</li>
		</ul>
	<?php } ?>
</section>
<section class="album clearfix">
	<h2 class="fancy"><?php echo $prideProm_pics[0] ['title']; ?></h2>
	<?php foreach($prideProm_pics as $prideProm_pic) { ?>	
		<ul>
			<li><img src="<?php echo $prideProm_pic['img'] . "-thm.jpg"; ?>" alt="<?php echo $prideProm_pic['alt']?>"</li>
		</ul>
	<?php } ?>
</section>
</div>

<?php include('inc/footer.php'); ?>