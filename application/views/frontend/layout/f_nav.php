<body class="horizontal light  ">
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
			<div class="container-fluid">
				<a class="navbar-brand mx-lg-1 mr-0" href="welcome">
					<span class="avatar avatar-sm mt-2">
						<img src="<?= base_url('template') ?>/assets/foto/logo.png" alt="..." class="avatar-img rounded-circle">
					</span> </a>
				<button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
					<i class="fe fe-menu navbar-toggler-icon"></i>
				</button>

				<div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
					<a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
						<i class="fe fe-x"><span class="sr-only"></span></i>
					</a>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a href="welcome" id="dashboardDropdown" class="nav-link" role="button">
								<span class="ml-lg-2">Beranda</span><span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown">
							<a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="ml-lg-2">Mata Lomba</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">
								<a class="nav-link pl-lg-2" href="./ui-color.html"><span class="ml-1">Colors</span></a>
								<a class="nav-link pl-lg-2" href="./ui-typograpy.html"><span class="ml-1">Typograpy</span></a>
								<a class="nav-link pl-lg-2" href="./ui-icons.html"><span class="ml-1">Icons</span></a>
								<a class="nav-link pl-lg-2" href="./ui-buttons.html"><span class="ml-1">Buttons</span></a>
								<a class="nav-link pl-lg-2" href="./ui-notification.html"><span class="ml-1">Notifications</span></a>
								<a class="nav-link pl-lg-2" href="./ui-modals.html"><span class="ml-1">Modals</span></a>
								<a class="nav-link pl-lg-2" href="./ui-tabs-accordion.html"><span class="ml-1">Tabs &amp; Accordion</span></a>
								<a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="widgets.html">
								<span class="ml-lg-2">Berita</span>
								<span class="badge badge-pill badge-primary">New</span>
							</a>
						</li>


						<?php
						if ($this->session->userdata('level') == "pendamping" && $this->session->userdata('validasi') == "Sudah") { ?>
							<li class="nav-item dropdown">
								<a href="#" id="formsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="ml-lg-2">Pendaftaran</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="formsDropdown">
									<a class="nav-link pl-lg-2" href="./form_elements.html"><span class="ml-1"> Koordinator</span></a>
									<a class="nav-link pl-lg-2" href="./form_advanced.html"><span class="ml-1"> Peserta</span></a>
									<a class="nav-link pl-lg-2" href="./form_validation.html"><span class="ml-1">Validation</span></a>
								</div>
							</li>
						<?php }
						if ($this->session->userdata('level') == "peserta" && $this->session->userdata('validasi') == "Sudah") { ?>
							<li class="nav-item dropdown">
								<a href="#" id="formsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="ml-lg-2">Pendaftaran</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="formsDropdown">
									<a class="nav-link pl-lg-2" href="./form_elements.html"><span class="ml-1"> Koordinator</span></a>
									<a class="nav-link pl-lg-2" href="./form_advanced.html"><span class="ml-1"> Peserta</span></a>
									<a class="nav-link pl-lg-2" href="./form_validation.html"><span class="ml-1">Validation</span></a>
								</div>
							</li>
						<?php } ?>



						<li class="nav-item dropdown">
							<a href="#" id="tablesDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="ml-lg-2">Download</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="tablesDropdown">
								<a class="nav-link pl-lg-2" href="./table_basic.html"><span class="ml-1">Basic Tables</span></a>
								<a class="nav-link pl-lg-2" href="./table_advanced.html"><span class="ml-1">Advanced Tables</span></a>
								<a class="nav-link pl-lg-2" href="./table_datatables.html"><span class="ml-1">Data Tables</span></a>
							</div>
						</li>

						<li class="nav-item dropdown">
							<a class="dropdown-toggle nav-link pl-lg-3" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Apps </a>
							<ul class="dropdown-menu" aria-labelledby="appsDropdown">
								<li class="nav-item">
									<a class="nav-link pl-lg-2" href="./calendar.html">
										<span class="ml-1">Calendar</span>
									</a>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="ml-1">Contacts</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="contactDropdown">
										<a class="nav-link pl-lg-2" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
										<a class="nav-link pl-lg-2" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
										<a class="nav-link pl-lg-2" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="profileDropdown" aria-expanded="false">
										<span class="ml-1">Profile</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="profileDropdown">
										<a class="nav-link pl-lg-2" href="./profile.html"><span class="ml-1">Overview</span></a>
										<a class="nav-link pl-lg-2" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
										<a class="nav-link pl-lg-2" href="./profile-security.html"><span class="ml-1">Security</span></a>
										<a class="nav-link pl-lg-2" href="./profile-notification.html"><span class="ml-1">Notifications</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="fileDropdown" aria-expanded="false">
										<span class="ml-1">File Manager</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="fileDropdown">
										<a class="nav-link pl-lg-2" href="./files-list.html"><span class="ml-1">Files List</span></a>
										<a class="nav-link pl-lg-2" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="supportDropdown" aria-expanded="false">
										<span class="ml-1">Help Desk</span>
									</a>
									<ul class="dropdown-menu" aria-labelledby="supportDropdown">
										<a class="nav-link pl-lg-2" href="./support-center.html"><span class="ml-1">Home</span></a>
										<a class="nav-link pl-lg-2" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
										<a class="nav-link pl-lg-2" href="./support-ticket-detail.html"><span class="ml-1">Ticket Detail</span></a>
										<a class="nav-link pl-lg-2" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
					<input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
				</form>
				<ul class="navbar-nav d-flex flex-row">
					<li class="nav-item">
						<a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="dark">
							<i class="fe fe-sun fe-16"></i>
						</a>
					</li>
					<li class="nav-item nav-notif">
						<a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
							<i class="fe fe-bell fe-16"></i>
							<span class="dot dot-md bg-success"></span>
						</a>
					</li>
					<li class="nav-item dropdown ml-lg-0">
						<a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="avatar avatar-sm mt-2">
								<img src="<?= base_url('template') ?>/assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
							</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">

							<li class="nav-item">
								<?php if ($this->session->userdata('logged_in')): ?>
									<a href="<?= base_url() ?>Login/logout" class="dropdown-item">
										<i class="fe fe-lock mr-2"></i> Logout
									</a>
								<?php else: ?>
									<a href="<?= base_url('login') ?>" class="dropdown-item">
										<i class="fe fe-unlock mr-2"></i> Login
									</a>
								<?php endif; ?>
							</li>

							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
									<i class="fe fe-unlock mr-2"></i> Setting
								</a>
							</li>
							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
									<i class="fe fe-unlock mr-2"></i> Profil
								</a>
							</li>
							<li class="nav-item"><a href="<?= base_url('template') ?>/login" class="dropdown-item">
								</a><a class="nav-link pl-3" href="#"></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow"> -->

		<div class="content">
			<div class="container">
				<div class="content-header">
				<!-- <?php
var_dump($this->session->userdata('level')); // Untuk melihat nilai 'level'
?> -->
