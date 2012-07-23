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
		<a href='<?php echo site_url('images_examples/')?>'>Edit Images</a> |
	</div>
	<div style='height:20px;'></div>  
    <div>
    </div>
</body>
</html>
