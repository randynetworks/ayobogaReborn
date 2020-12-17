<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= $desc; ?>">
	<title><?= $title; ?></title>


	<script src="https://kit.fontawesome.com/d7573f2700.js" crossorigin="anonymous"></script>
	<link rel="icon" href="<?= base_url('assets/img/') ?>ay.png">

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		.container {
			border-radius: 15px;
		}

		.content {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

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

		.title-card {
			color: #23374d;
		}

		.splash {
			position: fixed;
			top: 50%;
			left: 50%;
			/* bring your own prefixes */
			transform: translate(-50%, -50%);
			width: 100%;
			height: 100%;
			background: #03a9f4;
			z-index: 200;
			color: #eeeeee;
			text-align: center;
			line-height: 90vh;
		}

		.splash h1 {
			position: fixed;
			top: 50%;
			left: 50%;
			/* bring your own prefixes */
			transform: translate(-50%, -50%);
		}

		@keyframes fadeIn {
			to {
				opacity: 1;
			}
		}

		.fade-in {
			opacity: 0;
			animation: fadeIn ease-in forwards;
		}

		.my-custom-scrollbar {
			position: relative;
			height: 400px;
			overflow: auto;
		}

		.table-wrapper-scroll-y {
			display: block;
		}

		.scroll {
			max-height: 400px;
			overflow-y: auto;
		}
	</style>

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="<?= base_url(); ?>">Ayoboga.com</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Belajar
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?= base_url('belajar/belajar_masak'); ?>">Kelas Masak</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('dashboard'); ?>" class="nav-link">Dashboard</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('welcome/about'); ?>" class="nav-link">Tentang</a>
				</li>
			</ul>
		</div>
	</nav>
