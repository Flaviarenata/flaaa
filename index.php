<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar RWD</title>
    <!-- Memanggil file css bootstrap -->
     <!-- online -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!-- offline -->
     <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body> 
<div class="container-fluid">
    <!------------------ Header ------------------>
	<div class="row">
		<div class="col-md-12">
			<?php include_once 'header.php'; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
            <?php include_once 'navbar.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<?php include_once 'sidebar.php'; ?>
		</div>
		<div class="col-md-4">
			<?php include_once 'main.php'; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
				<?php include_once 'footer.php'; ?>
		</div>
	</div>
</div>
</body>
<!-- Memanggil file js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>