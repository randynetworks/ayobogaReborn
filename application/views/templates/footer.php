<!--Footer-->
<footer class="page-footer text-center text-white text-md-left pt-4">

	<!--Footer Links-->
	<div class="container-fluid">
		<div class="p-2 row pt-3">

			<!--First column-->
			<div class="col-md-3 mx-auto text-center">
				<h5 class="text-uppercase font-weight-bold mb-4">Tentang Ayoboga.com</h5>
				<p>Ayoboga adalah website pembelajaran online tentang jasaboga, alasan dibuatnya ayoboga,
					karena melihat jarang sekali website pembelajaran lengkap mulai dari awal hingga expert untuk belajar masak,
					selain dari itu, ayoboga dibuat untuk mengajak generasi milenial yang faktanya sangat malas untuk memasak.<br><br>

					<a href="https://randynetworks.club/" class="text-white">Randy Ramadhan</a><br>
					Co-Founder ayoboga.com
				</p>
			</div>
			<!--/.First column-->

			<hr class="w-100 clearfix d-md-none">

			<!--Second column-->
			<div class="col-md-3  mx-auto text-center">
				<h5 class="text-uppercase font-weight-bold mb-4">Belajar</h5>
				<ul class="list-unstyled ">
					<li><a href="<?= base_url('belajar/belajar_masak'); ?>" class="text-white " id="hover-link">Kelas Memasak</a></li>
					<hr>
					<li><a href="<?= base_url('belajar/belajar_service'); ?>" class="text-white " id="hover-link">Kelas Service</a></li>
				</ul>
			</div>
			<!--/.Second column-->

			<hr class="w-100 clearfix d-md-none">

			<!--Third column-->
			<div class="col-md-3 mx-auto text-center">
				<h5 class="text-uppercase font-weight-bold mb-4">Kontak Kita</h5>
				<ul class="list-unstyled">
					<li><a href="#!" class="text-white" id="hover-link"><i class="fas fa-envelope" style="font-weight: normal;"> support@ayoboga.com</i> </a></li>
					<hr>
					<li><a href="#!" class="text-white" id="hover-link"><i class="fab fa-instagram"> @ayoboga</i></a></li>
					<hr>
					<li><a href="#!" class="text-white" id="hover-link">Join Us!</a></li>
				</ul>
			</div>
			<!--/.Third column-->

			<hr class="w-100 clearfix d-md-none">

			<!--Fourth column-->
			<!-- 
			<div class="col-md-2 mx-auto text-center">
				<h5 class="text-uppercase font-weight-bold mb-4">Akun kamu</h5>
				<ul class="list-unstyled">
					<li><a href="#!" class="text-white " id="hover-link">Masuk di sini!</a></li>
					<hr>
					<li><a href="#!" class="text-white " id="hover-link">Mendaftar!</a></li>
					<hr>
					<li><a href="#!" class="text-white " id="hover-link">Profil Kamu!</a></li>
				</ul>
			</div>
			/.Fourth column -->

		</div>
	</div>
	<!--/.Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright py-3 text-center">
		<div class="container-fluid">
			Copyright &copy; ayoboga.com <?= date('Y'); ?>

		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->

</body>

<script src="https://use.fontawesome.com/eee41407f2.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
	// SideNav Initialization
	$(".button-collapse").sideNav();

	new WOW().init();

	const splash = document.querySelector('.splash');
	document.addEventListener('DOMContentLoaded', (e) => {
		setTimeout(() => {
			splash.classList.add('display-none');
		}, 2000);
	})
</script>
</body>

</html>
