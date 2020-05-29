<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Ayoboga adalah website pembelajaran online tentang jasaboga, alasan dibuatnya ayoboga,
					karena melihat jarang sekali website pembelajaran lengkap mulai dari awal hingga expert untuk belajar masak,
					selain dari itu, ayoboga dibuat untuk mengajak generasi milenial yang faktanya sangat malas untuk memasak.
					ayoboga dibuat dengan sistem mengajar yang seru dan fun! sehingga teman teman semua bisa belajar sambil bermain">
	<title>Ayoboga.com | Website belajar Masak Online</title>

	<script src="https://kit.fontawesome.com/d7573f2700.js" crossorigin="anonymous"></script>
	<link rel="icon" href="<?= base_url('assets/img/') ?>ay.png">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		/* Only for snippet */
		.double-nav .breadcrumb-dn {
			color: #fff;

		}

		@media only screen and (min-width: 600px) and (max-width: 800px) {
			.judul {
				font-size: 70px;
			}
		}

		@media only screen and (max-width: 300px) {
			.judul {
				font-size: 30px;
			}
		}

		@media only screen and (min-width: 900px) {
			.judul {
				font-size: 90px;
			}
		}

		hr {
			height: 2px;
			background-color: #fff;
			border: none;
		}

		#hover-link:hover {
			font-size: 20px;
			text-decoration: none;
		}

		.navbar-brand {
			font-size: 25px;
		}

		body {
			background-color: #1089ff;
		}

		.navbar,
		.ban,
		.page-footer {
			background: #23374d;
		}

		.main-page {
			color: #eeeeee;
		}
	</style>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
		<a class="navbar-brand" href="<?= base_url(); ?>">Ayoboga.com</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>">Menu Utama</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Belajar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('belajar/belajar_masak'); ?>">Kelas Masak</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item disable" href="<?= base_url('belajar/belajar_service'); ?>">Kelas Service</a>
					</div>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#">Profil</a>
				</li> -->
			</ul>
			<!-- <form class="form-inline my-2 my-lg-0">
				<button class="btn btn-success my-2 my-sm-0 ml-2" type="submit">Masuk!</button>
				<button class="btn btn-danger my-2 my-sm-0 ml-2" type="submit">Daftar!</button>
			</form> -->
		</div>
	</nav>
