<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-code"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Ayoboga Dashboard</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Admin
	</div>

	<!-- Nav Item - Dashboard -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Admin Management
	</div>
	<!-- Nav Item - list admin account -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('dashboard/me'); ?>">
			<i class="fas fa-fw fa-user"></i>
			<span>Admin Profile</span></a>
	</li>

	<!-- Nav Item - list admin account -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('dashboard/admin_list'); ?>">
			<i class="fas fa-fw fa-users-cog"></i>
			<span>List Admin Account</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Input Data
	</div>

	<!-- Nav Item - Pages Collapse Menu -->
	<li class="nav-item">
		<a class="nav-link" href="" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span>
		</a>
		<div id="collapsePages" class="collapse hide" aria-labelledby="headingPages" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('dashboard/menus'); ?>">Manage Menu</a>
				<a class="collapse-item" href="<?= base_url('dashboard/materials'); ?>">Manage Material</a>
			</div>
		</div>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Nav Item - logout account -->
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
			<i class="fas fa-sign-out-alt"></i>
			<span>logout</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
