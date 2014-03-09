<?php 
	foreach($contenu as $row)
{ ?>
<div class="Post">
	<div class="PostTitle"><?php echo $row['id'].$row['titre']; ?></div>
	<img src="<?php echo $row['lien']; ?>" />
	<div class="PostText"><?php echo $row['description'];  ?></div>
</div>
<?php } ?>