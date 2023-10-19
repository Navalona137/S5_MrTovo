<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>RH</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	</head>

	<body>
		<?php foreach ($services as $s) { ?>
            <div>
				<button><a href="<?php echo base_url().'cservice/login'?>/<?php echo $s->id; ?>" style="text-decoration: none; color: black;"><?php echo $s->nom; ?></a></button>
			</div>
        <?php  } ?>
	</body>
</html>

