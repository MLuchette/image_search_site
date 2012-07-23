<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<style type='text/css'>
		body
		{
			font-family: Arial;
			font-size: 14px;
		}
		a {
			color: blue;
			text-decoration: none;
			font-size: 14px;
		}
		a:hover
		{
			text-decoration: underline;
		}
	</style>
</head>
<body>
	Hi, <strong><?php echo $username; ?></strong>! You are logged in now. <?php echo anchor('/auth/logout/', 'Logout'); ?>
	<div>
		<a href='<?php echo site_url('main/index')?>'>Edit Businesses</a> |
		<a href='<?php echo site_url('main/editImages/22')?>'>Edit Images</a> |
		<?php foreach($rows as $r) : ?>		
		<a href='<?php echo site_url('main/editImages/'echo $r->id;)?>'><?php echo $r->name;?></a>
		<?php endforeach ?>
	</div>
	<div style='height:20px;'></div>  
    <div>
    </div>
</body>
</html>
