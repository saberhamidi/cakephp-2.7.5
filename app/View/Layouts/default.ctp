<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body <?php if($this->params['action'] =='home') echo "style='background-image:url(img/background.png);'";?> >
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		
		<div id="footer">
		</div>
	</div>
</body>
</html>
