<body class="vertical  dark  ">
	<div class="wrapper">
		<nav class="topnav navbar navbar-light">
			<button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
				<i class="fe fe-menu navbar-toggler-icon"></i>
			</button>
			<form class="form-inline mr-auto searchform text-muted">
				<input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
			</form>
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
						<i class="fe fe-sun fe-16"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
						<span class="fe fe-grid fe-16"></span>
					</a>
				</li>
				<li class="nav-item nav-notif">
					<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
						<span class="fe fe-bell fe-16"></span>
						<span class="dot dot-md bg-success"></span>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="avatar avatar-sm mt-2">
							<img src="<?= base_url('template') ?>/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="#">Settings</a>
						<a class="dropdown-item" href="#">Activities</a>
						<a class="dropdown-item" href="<?= base_url() ?>Login/logout">Log Out</a>
					</div>
				</li>
			</ul>
		</nav>
		<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
			<a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
				<i class="fe fe-x"><span class="sr-only"></span></i>
			</a>
			<nav class="vertnav navbar navbar-light">
				<!-- nav bar -->
				<div class="w-100 mb-4 d-flex">
					<a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
						<svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
							<g>
								<polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
								<polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
								<polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
							</g>
						</svg>
					</a>
				</div>


				<?php if ($this->session->userdata('level') == "Admin") { ?>
					<ul class="navbar-nav flex-fill w-100 mb-2">
						<li class="nav-item">
							<a href="<?= base_url('admin') ?>" class=" nav-link">
								<i class="fe fe-home fe-16"></i>
								<span class="ml-3 item-text">Dashboard</span>
							</a>
						</li>
					</ul>
					<p class="text-muted nav-heading mt-4 mb-1">
						<span>Data Master</span>
					</p>
					<ul class="navbar-nav flex-fill w-100 mb-2">
						<li class="nav-item">
							<a href="<?= base_url('admin/matalomba') ?>" class=" nav-link">
								<i class="fe fe-calendar fe-16"></i>
								<span class="ml-3 item-text">Mata Lomba</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/matalomba') ?>" class=" nav-link">
								<i class="fe fe-user fe-16"></i>
								<span class="ml-3 item-text">Kelola Akun</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
								<i class="fe fe-grid fe-16"></i>
								<span class="ml-3 item-text">Tables</span>
							</a>
							<ul class="collapse list-unstyled pl-4 w-100" id="tables">
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
								</li>
							</ul>
						</li>
					</ul>
				<?php } elseif ($this->session->userdata('level') == "koordinator" && $this->session->userdata('validasi') == "Sudah") { ?>
					<ul class="navbar-nav flex-fill w-100 mb-2">
						<li class="nav-item">
							<a href="<?= base_url('admin') ?>" class=" nav-link">
								<i class="fe fe-home fe-16"></i>
								<span class="ml-3 item-text">Dashboard</span>
							</a>
						</li>
					</ul>
					<p class="text-muted nav-heading mt-4 mb-1">
						<span>Data Master</span>
					</p>
					<ul class="navbar-nav flex-fill w-100 mb-2">
						<li class="nav-item">
							<a href="<?= base_url('admin/matalomba') ?>" class=" nav-link">
								<i class="fe fe-calendar fe-16"></i>
								<span class="ml-3 item-text">Mata Lomba</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
								<i class="fe fe-grid fe-16"></i>
								<span class="ml-3 item-text">Tables</span>
							</a>
							<ul class="collapse list-unstyled pl-4 w-100" id="tables">
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
								</li>
								<li class="nav-item">
									<a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
								</li>
							</ul>
						</li>
					</ul>
				<?php } ?>


			</nav>
		</aside>
