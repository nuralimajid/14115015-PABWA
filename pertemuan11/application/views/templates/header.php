<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?= $judul; ?></title>
		<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
	</head>
	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
		  <a class="navbar-brand" href="#">CI PABW</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="<?= base_url();?>">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?= base_url();?>mahasiswa">Mahasiswa</a>
		      <a class="nav-item nav-link" href="#">About</a>
		    </div>
		  </div>
			</div>
		</nav>
