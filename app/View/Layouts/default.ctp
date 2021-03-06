<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-theme.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body <?php if($this->params['action'] =='home') echo "style='background-image:url(img/background.png)'"; ?>>
	<div id="container">
		<a href="restaurants/logout" class="btn btn-success" role="button">Logout</a>
		<div id="header">
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
