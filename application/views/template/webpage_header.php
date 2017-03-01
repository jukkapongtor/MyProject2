<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $page_title; ?></title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/mystyle.css">
	</head>
	<body >
		<div class="container-fluid IndHeader">
			<div class="container-fluid">
				<div class="col-md-8 col-md-offset-2">
					<div class="col-md-3 IndIcon">
						<a href="<?php echo base_url(); ?>">MUMFERN</a>
					</div>
					<div class="col-md-3 col-md-offset-6 IndMenu">
						<?php
							switch($page_title){
								case "รายการสินค้า" : $mu_head1="";$mu_head2="IndMenu_Active"; break;
								default : $mu_head1="IndMenu_Active";$mu_head2=""; break;
							}
						?>
						<a href="<?php echo base_url(); ?>"><div class="IndMenu_Home <?php echo $mu_head1?>">หน้าหลัก</div></a>
						<a href="<?php echo base_url('product/list_product'); ?>"><div class="IndMenu_Pro <?php echo $mu_head2?>">สินค้า</div></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-md-8 col-md-offset-2 IndMain">
				
			