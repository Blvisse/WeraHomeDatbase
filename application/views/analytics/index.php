<h2><?=$title ?></h2>
<!-- <p>Client List</p> -->
<?php foreach ($testing as $client): ?> 
<h3><?php echo $client['id'];?> </h3>
<small class="profit">Profit Gained: <?php echo $client['profit'];?></small><br>
Amount Purchased:<?php echo $client['purchase']; ?><br>
Sales Made<?php echo $client['sale']; ?><br><br>
<!-- <p><a class="btn btn-default" href="<?php echo site_url('/graphs/graphs.php'); ?>"> More Info</a></p> -->
<br>
<br>

<?php endforeach; ?>
<br>
<br>