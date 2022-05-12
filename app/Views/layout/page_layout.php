<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metrokil</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <!-- Custom CSS -->	
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head>

<body>

    <?= $this->include('layout/navbar') ?>
    <?= $this->include('layout/header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layout/footer') ?>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>