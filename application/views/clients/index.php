<h2><?=$title ?></h2>
<!-- <p>Client List</p> -->
<?php foreach ($clients as $client): ?> 
<h3><?php echo $client['name'];?> </h3>
<small class="post-date">Orderd on: <?php echo $client['order_at'];?></small><br>
<?php echo $client['slug']; ?><br>
<?php echo $client['body']; ?><br><br>
<p><a class="btn btn-default" href="<?php echo site_url('/clients/'.$client['slug']); ?>"> More Info</a></p>
<br>
<br>

<?php endforeach; ?>
<br>
<br>