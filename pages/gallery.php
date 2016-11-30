<?php include($_SERVER['DOCUMENT_ROOT'].'/scripts/tools.php') ?>
<!-- Optinnal auth Protect -->
<?php
	$limit = 5;
	$nb_montage = Montage::get_nb_montage();
	$last_page = ceil($nb_montage / $limit);
	if (!isset($_GET['page']) || $_GET['page'] < 1) {
		$page = 1;
	}
	else if ($_GET['page'] > $last_page) {
		$page = $last_page;
	}
	else {
		$page = $_GET['page'];
	}
	$offset = $page * $limit - $limit;
	$montages = Montage::get_montage_paginated($limit, $offset);
	/* STUFF TO CONTINUE  */
?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/htmlBlocks/head.php') ?>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/htmlBlocks/header.php') ?>
	<div class="container center">
    <!-- get all images -->
    <?php
      foreach ($montages as $montage ) {
        include($_SERVER['DOCUMENT_ROOT'].'/htmlBlocks/galleryDiv.php');
      }
     ?>
	</div>
		<?php if ($page > 1) { ?>
			<a href='?page=<?php echo ($page - 1) ?>'>prev</a>
		<?php } ?>
		<?php for ($i=1; $i <= $last_page; $i++) { ?>
			<a href='?page=<?php echo ($i) ?>'><?php echo ($i) ?></a>
		<?php } ?>
		<?php if ($page < $last_page) { ?>
			<a href='?page=<?php echo ($page + 1) ?>'>next</a>
		<?php } ?>
	<div>
	</div>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/htmlBlocks/footer.php') ?>
</body>
</html>