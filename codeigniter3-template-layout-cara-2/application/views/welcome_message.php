<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
</head>
<body>
	<nav class="mt-2 navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid text-center">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('welcome');?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('welcome/about');?>">About</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<?= $contents; ?>

</body>
</html>
