<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Qoduby - Admin & Dashboard template by tempload.">
	<meta name="keywords" content="qoduby, tempload, bootstrap, bootstrap 5, admin, template, dashboard, theme, admin themes, admin, templates">
	<meta name="author" content="tempload">	
	<title>Qoduby - Admin & Dashboard Template</title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/media/logo/favicon.png">	

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
	<link href="../../../css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Global CSS -->
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- Light-Dark Mode & Theme Direction Selector -->
	<script src="assets/js/theme.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="app-root d-flex flex-column">
		<!-- ***** Sidebar Start ***** -->
		<div class="app-sidebar">
			<!-- ***** Logo Start ***** -->
			<div class="sidebar-logo d-flex justify-content-center">
				<a href="index.html">
					<img src="assets/media/logo/logo-default.svg" height="30" alt="Qoduby">
				</a>
			</div>
			<!-- ***** Logo End ***** -->

			<!-- ***** Sidebar Menu Start ***** -->
			<div class="sidebar-menu custom-scroll pt-4">
				<!-- ***** Dashboards Menu Start ***** -->
				<ul class="menu-group m-0 px-4 mb-4">
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="home" stroke-width="1.5" height="20" class="me2"></i>
								<span>Dashboards</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="index.html"><span>Default</span></a></li>
							<li><a href="dashboards-ecommerce.html"><span>eCommerce</span></a></li>
							<li><a href="dashboards-projects.html"><span>Projects</span></a></li>
							<li><a href="dashboards-website-analytics.html"><span>Website Analytics</span></a></li>
							<li><a href="dashboards-crypto.html"><span>Crypto</span></a></li>
							<li><a href="dashboards-car-rental.html"><span>Car Rental</span></a></li>
						</ul>
					</li>
				</ul>
				<!-- ***** Dashboards Menu End ***** -->

				<!-- ***** Projects Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>PAGES</small>
				</div>
				<ul class="menu-group m-0 px-4 mb-4">
					<li class="single-menu">
						<a href="projects-car-rental-car-list.html" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Liste De Voiture</span>
							</div>
						</a>
					</li>

					<li class="single-menu">
						<a href="projects-car-rental-car-details.html" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Detail Voiture</span>
							</div>
						</a>
					</li>

					<li class="single-menu">
						<a href="projects-car-rental-reservations.html" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Reservations</span>
							</div>
						</a>
					</li>
					<li class="single-menu">
						<a href="projects-car-rental-reservation-details.html" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="alert-circle" stroke-width="1.5" height="18" class="me2"></i>
								<span>Details Reservations</span>
							</div>
						</a>
					</li>

				</ul>
				<!-- ***** Projects Menu End ***** -->

				<!-- ***** pages Menu Start ***** -->
				<div class="menu-title mb-2">
					<small>PAGES</small>
				</div>
				<ul class="menu-group m-0 px-4 mb-4">
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="user" stroke-width="1.5" height="18" class="me2"></i>
								<span>Compte</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="pages-account-user-settings.html"><span>Admin</span></a></li>
							<li><a href="pages-account-user-security.html"><span>Manager</span></a></li>
						</ul>
					</li>
					<li class="sub-menu">
						<a href="javascript:;" class="d-flex align-items-center justify-content-between">
							<div class="d-flex align-items-center">
								<i data-feather="key" stroke-width="1.5" height="18" class="me2"></i>
								<span>Authentication</span>
							</div>
							<i class="arrow" data-feather="chevron-right" height="14"></i>
						</a>
						<ul class="sub-menu-group">
							<li><a href="pages-authentication-sign-in.html"><span>Sign-in</span></a></li>
							<li><a href="pages-authentication-sign-up.html"><span>Sign-up</span></a></li>
							<li><a href="pages-authentication-reset-password.html"><span>Reset Password</span></a></li>
							<li><a href="pages-authentication-new-password.html"><span>New Password</span></a></li>
						</ul>
					</li>
				</ul>
				<!-- ***** pages Menu End ***** -->
			</div>
			<!-- ***** Sidebar Menu End ***** -->

			<!-- ***** Sidebar Footer Start ***** -->
			<div class="sidebar-footer d-flex align-items-center justify-content-center">
				<a href="../../../../documentation/index.html" class="sidebar-footer-button">Parametre</a>
			</div>
			<!-- ***** Sidebar Footer End ***** -->
		</div>
		<!-- ***** Sidebar End ***** -->

		<!-- ***** Responsive Menu Backdrop Start ***** -->
		<div class="menu-backdrop"></div>
		<!-- ***** Responsive Menu Backdrop End ***** -->
		
		<!-- ***** Main Start ***** -->
		<main class="app-main">
			<!-- ***** Header Start ***** -->
			<header class="main-header d-flex justify-content-between">
				<!-- ***** Sidebar Menu Open Button Start ***** -->
				<a href="javascript:;" class="sidebar-menu-trigger"><span>Menu</span></a>
				<!-- ***** Sidebar Menu Open Button End ***** -->

				<!-- ***** Navbar Start ***** -->
				<nav class="top-nav">
					<ul class="menu-group">
						<!-- ***** Dashboards Menu Start ***** -->
						<li class="sub-menu open-mega-menu">
							<a class="menu-link" href="javascript:;">
								Dashboards
								<i class="arrow" data-feather="chevron-down" width="14"></i>
							</a>
							<div class="mega-menu-wrapper">
								<div class="mega-menu">
									<div class="container-fluid">
										<div class="row g-0 align-items-center">
											<div class="col-lg-7 mb-sm-1">
												<div class="cover">
													<img src="assets/media/menu/1.jpg" class="img-fluid w-100" alt="">
													<div class="text p-3 d-flex align-items-center justify-content-center">
														<div class="text-center">
															<h6 class="text-white mb-1">Want to see an overview?</h6>
															<p class="text-white mb-4">See all the pages at once.</p>
															<a href="#" class="btn btn-success">View All Pages</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-5">
												<div class="menu-content ps6 sm-p-0">
													<strong class="text-heading d-block mb-2">DASHBOARDS</strong>
													<ul class="mega-sub-menu">
														<li><a class="hover-primary" href="index.html">Default</a></li>
														<li><a class="hover-primary" href="dashboards-car-rental.html">Car Rental</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!-- ***** Dashboards Menu End ***** -->
					</ul>
				</nav>
				<!-- ***** Navbar End ***** -->

				<div class="header-tools d-flex align-items-center">
					<!-- ***** Search Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="search" stroke-width="2" height="22" class="text-secondary"></i>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="p3">
								<div class="w-100 position-relative d-flex align-items-center">
									<i data-feather="search" stroke-width="2" height="22" class="text-body-tertiary position-absolute"></i>
									<input type="text" class="form-control border-0 outline-none input-reset ps6 bg-transparent" placeholder="Search...">
								</div>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5 d-flex flex-row justify-content-between">
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-primary-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="message-circle" stroke-width="2" height="36" class="text-primary"></i>
									</div>
									<span>Chat</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-info-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="folder" stroke-width="2" height="36" class="text-info"></i>
									</div>
									<span>Files</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-success-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="mail" stroke-width="2" height="36" class="text-success"></i>
									</div>
									<span>Inbox</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-warning-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="check-circle" stroke-width="2" height="36" class="text-warning"></i>
									</div>
									<span>Tasks</span>
								</a>
								<a href="#" class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-body">
									<div class="rounded-circle width-50 height-50 bg-danger-subtle d-flex align-items-center justify-content-center mb2">
										<i data-feather="pie-chart" stroke-width="2" height="36" class="text-danger"></i>
									</div>
									<span>CRM</span>
								</a>
							</div>
							<div class="bg-light p5 pt3 pb3">Recently Searched:</div>
							<div class="height-350 overflow-hidden search-scroll ss-container">
								<div class="p5">
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="calendar" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Calendar</span>
										<span class="text-heading">"birthday"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="message-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Chat</span>
										<span class="text-heading">"october invoice"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="mail" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Inbox</span>
										<span class="text-heading">"project files"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="phone" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Contacts</span>
										<span class="text-heading">"justin case"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="database" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Projects</span>
										<span class="text-heading">"mobile app sketch file"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Tasks</span>
										<span class="text-heading">"seo report"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="columns" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Kanban Board</span>
										<span class="text-heading">"design assets"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">ToDo</span>
										<span class="text-heading">"shopping list"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="pie-chart" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">CRM</span>
										<span class="text-heading">"barry tone"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="calendar" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Calendar</span>
										<span class="text-heading">"birthday"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="message-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Chat</span>
										<span class="text-heading">"october invoice"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="mail" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Inbox</span>
										<span class="text-heading">"project files"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="phone" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Contacts</span>
										<span class="text-heading">"justin case"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="database" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Projects</span>
										<span class="text-heading">"mobile app sketch file"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check-circle" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Tasks</span>
										<span class="text-heading">"seo report"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="columns" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">Kanban Board</span>
										<span class="text-heading">"design assets"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="check" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">ToDo</span>
										<span class="text-heading">"shopping list"</span>
									</a>
									<a href="#" class="d-flex align-items-center pt2 pb2 text-decoration-none">
										<i data-feather="pie-chart" stroke-width="2" height="20" class="text-body-tertiary me3"></i>
										<span class="me3 text-body">CRM</span>
										<span class="text-heading">"barry tone"</span>
									</a>
								</div>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Search Dropdown End ***** -->

					<!-- ***** Chat Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-disablescrolling="false">
							<i data-feather="message-square" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-danger position-absolute scale-70 top-0 end-0">3</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Chat Content Start ***** -->
						<div class="offcanvas offcanvas-end offcanvas-chat" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
							<div class="offcanvas-header p6">
								<div class="d-flex">
									<div class="d-flex align-items-center">
										<div class="position-relative">
											<div class="img-fix rounded-circle me3 height-40 width-40">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="badge rounded-pill text-bg-success position-absolute scale-70 bottom-0 end-0">&nbsp;</span>
										</div>
										<h6 class="mb0">Justin Case</h6>
									</div>
								</div>
								<div class="d-flex">
									<div class="dropdown">
										<button type="button" class="border-0 bg-transparent p0 outline-none me2 dropdown-toggle arrow-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
											<i data-feather="more-horizontal" stroke-width="2" height="22" class="text-body"></i>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="archive" stroke-width="1.5" height="14" class="text-body me1"></i>
													Archive
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center" href="#">
													<i data-feather="mic-off" stroke-width="1.5" height="16" class="text-body me1"></i>
													Muted
												</a>
											</li>
											<li>
												<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
													<div class="d-flex align-items-center">
														<i data-feather="trash-2" stroke-width="1.5" height="16" class="text-body me1"></i>
														Delete
													</div>
													<i data-feather="info" stroke-width="2" height="12" class="text-body me1" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="qd-tooltip" data-bs-title="If you delete it, this action cannot be undone."></i>
												</a>
											</li>
										</ul>
  									</div>
									<button type="button" class="border-0 bg-transparent p0 outline-none" data-bs-dismiss="offcanvas" aria-label="Close">
										<i data-feather="x" stroke-width="2" height="22" class="text-body"></i>
									</button>
								</div>
							</div>
							<div class="offcanvas-body p0 overflow-hidden">
								<div class="p6 pt3 pb3 chat-scroll ss-container" style="height: 100%;">
									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>48 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Hi, can you send me the files of the new project by email?</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>46 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">I don't have all the files. I can only send documents.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-start mb6">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>43 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Okey send.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-end mb6">
										<div class="d-flex align-items-center mb3">
											<span>40 min.</span>
											<span class="text-heading ms3">You</span>
											<div class="img-fix rounded-circle me3 height-30 width-30 ms3">
												<img src="assets/media/avatars/6.jpg" alt="">
											</div>
										</div>
										<div class="p4 mb1 bg-light rounded">
											<a href="#" class="text-heading d-flex align-items-center text-decoration-none">
												<i data-feather="file" stroke-width="1.5" height="22" class="text-heading me2"></i>
												New Project.docx
											</a>
										</div>
										<div class="p4 bg-light rounded">
											<span class="text-heading">This file contains all the information.</span>
										</div>
									</div>

									<div class="d-flex flex-column align-items-start">
										<div class="d-flex align-items-center mb3">
											<div class="img-fix rounded-circle me3 height-30 width-30 me3">
												<img src="assets/media/avatars/12.jpg" alt="">
											</div>
											<span class="text-heading me3">Justin Case</span>
											<span>38 min.</span>
										</div>
										<div class="p4 bg-info-subtle rounded">
											<span class="text-heading">Thank you very much. I owe you lunch 😁</span>
										</div>
									</div>
								</div>
							</div>
							<div class="p6 bg-light">
								<div class="bg-chat border p1 rounded d-flex align-items-center justify-content-between">
									<div>
										<a href="#" class="bg-light width-40 height-40 rounded d-flex align-items-center justify-content-center">
											<i data-feather="paperclip" stroke-width="1.5" height="18" class="text-body"></i>
										</a>
									</div>
									<div class="w-100">
										<input type="text" class="form-control border-0 outline-none input-reset bg-transparent" placeholder="Type your message here">
									</div>
									<div>
										<a href="#" class="width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="send" stroke-width="1.5" height="22" class="text-body"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- ***** Chat Content Start ***** -->
					</div>
					<!-- ***** Chat End ***** -->

					<!-- ***** Notification Dropdown Start ***** -->
					<div class="dropdown me3">
						<!-- ***** Icon Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown bg-secondary-subtle rounded d-flex align-items-center justify-content-center position-relative overflow-auto outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<i data-feather="bell" stroke-width="2" height="22" class="text-secondary"></i>
							<span class="badge rounded-pill text-bg-info position-absolute scale-70 top-0 end-0">2</span>
						</a>
						<!-- ***** Icon End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-350 p0">
							<!-- ***** Content Start ***** -->
							<div class="d-flex justify-content-between align-items-center p5">
								<h6 class="mb0">Notifications</h6>
								<span class="badge rounded-pill badge-soft text-bg-primary">4 New</span>
							</div>
							<hr class="opacity-20 m0">
							<div class="p5">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img src="assets/media/avatars/1.jpg" alt="">
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Congratulations Barry! 🥳</strong>
										<span class="mb1 text-body">You've been the top seller this month.</span>
										<span class="badge rounded-pill badge-soft text-bg-info">16 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-primary-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="dollar-sign" stroke-width="1.5" height="22" class="text-primary"></i>
										</div>
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Qoduby has been sold 🤑</strong>
										<span class="mb1 text-body">You earned $40 from this sale.</span>
										<span class="badge rounded-pill badge-soft text-bg-primary">22 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="me3">
										<div class="rounded-circle bg-success-subtle width-40 height-40 d-flex align-items-center justify-content-center">
											<i data-feather="bar-chart-2" stroke-width="1.5" height="22" class="text-success"></i>
										</div>
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">Monthly Report 👨‍💻</strong>
										<span class="mb1 text-body">The monthly report was uploaded.</span>
										<span class="badge rounded-pill badge-soft text-bg-success">27 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a href="#" class="d-flex justify-content-start text-decoration-none">
									<div class="img-fix width-40 height-40 rounded-circle me3">
										<img class="rounded-circle" src="assets/media/avatars/8.jpg" alt="">
									</div>
									<div class="d-flex flex-column align-items-start">
										<strong class="text-heading me1">New message received 👋🏻</strong>
										<span class="mb1 text-body">You have 7 unread messages.</span>
										<span class="badge rounded-pill badge-soft text-bg-info">48 minutes ago</span>
									</div>
								</a>
								<hr class="opacity-20 border-dashed">
								<a class="btn btn-primary btn-soft btn-sm d-block" href="#" role="button">Read All Notifications</a>
							</div>
							<!-- ***** Content End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Notification Dropdown End ***** -->

					<!-- ***** Profile Dropdown Start ***** -->
					<div class="dropdown">
						<!-- ***** Profile Image Start ***** -->
						<a href="javascript:;" class="dropdown-toggle header-dropdown outline-none" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="img-fix width-40 height-40 rounded">
								<img src="assets/media/avatars/6.jpg" alt="">
							</div>
						</a>
						<!-- ***** Profile Image End ***** -->

						<!-- ***** Dropdown Content Start ***** -->
						<div class="dropdown-menu width-250 p0">
							<!-- ***** Content Info Start ***** -->
							<div class="d-flex justify-content-start mb3 p5 pb0">
								<div class="img-fix width-40 height-40 me3 rounded">
									<img src="assets/media/avatars/6.jpg" alt="">
								</div>
								<div class="d-flex flex-column text-start">
									<div class="d-flex flex-row align-items-center">
										<strong class="text-heading me1">Barry Tone</strong>
										<span class="badge badge-soft rounded-pill text-bg-success">Pro</span>
									</div>
									<small>@QodubyTheme</small>
								</div>
							</div>
							<!-- ***** Content Info End ***** -->

							<!-- ***** Balance Start ***** -->
							<div class="p5 pt0">
								<div class="bg-secondary-subtle p3 rounded d-flex justify-content-between">
									<span>Balance</span>
									<strong class="text-heading">$3.754,45</strong>
								</div>
							</div>
							<hr class="opacity-20 mt0">
							<!-- ***** Balance End ***** -->

							<!-- ***** Menu Start ***** -->
							<div class="p5 pt0 pb0">
								<ul class="nav flex-column text-start p0">
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-overview.html">My Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="apps-file-manager-files.html">My Files</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-project.html">My Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-statements.html">My Statements</a>
									</li>
								</ul>
							</div>
							<hr class="opacity-20">
							<!-- ***** Menu End ***** -->

							<!-- ***** Settings Start ***** -->
							<div class="p5 pt0">
								<ul class="nav flex-column text-start p0">
									<li class="nav-item">
										<div class="dropdown">
											<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none" data-bs-toggle="dropdown" aria-expanded="false" href="#">
												Language
												<span class="badge badge-soft rounded-pill text-bg-primary">English</span>
											</a>
											<ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center" href="#">
														English
														<i data-feather="check" stroke-width="1.5" height="22" class="text-success"></i>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">Spanish</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">French</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0" href="#">Japanese</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<div class="dropdown">
											<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center dropdown-toggle outline-none" data-bs-toggle="dropdown" aria-expanded="false" href="#">
												Theme
												<span class="badge badge-soft rounded-pill text-bg-light" id="current-theme">Light</span>
											</a>
											<ul class="dropdown-menu width-200 flex-column p5 pt4 pb4 text-start">
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-light" href="#">
														Light
														<i data-feather="check" stroke-width="1.5" height="22" class="text-success"></i>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-heading hover-primary ps0 pe0 d-flex justify-content-between align-items-center theme-change-dark" href="#">Dark</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-account-user-settings.html">Account Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-heading hover-primary ps0" href="pages-authentication-sign-in.html">Sign Out</a>
									</li>
								</ul>
							</div>
							<!-- ***** Settings End ***** -->
						</div>
						<!-- ***** Dropdown Content Start ***** -->
					</div>
					<!-- ***** Profile Dropdown End ***** -->

					<!-- ***** Header Menu Open Button Start ***** -->
					<a class="header-menu-trigger ms3"><span>Menu</span></a>
					<!-- ***** Header Menu Open Button End ***** -->
				</div>
			</header>
			<!-- ***** Header End ***** -->

			<!-- ***** Content Start ***** -->
			<div class="app-content p6 pb2 smp1">
				<div class="container p0">
					<!-- Page Top Start -->
					<div class="row mb6 align-items-center">
						<div class="col-md-6 mobile-bottom-fix">
							<h1 class="page-title mb2">Reservation - #2179</h1>
							<nav class="breadcrumb-nav" aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Reservations</a></li>
									<li class="breadcrumb-item active" aria-current="page">#2179</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 text-start text-md-end">
							<!-- Buttons Start-->
							<button class="btn btn-danger btn-soft btn-sm me2">Decline</button>
							<button class="btn btn-success btn-sm">Accept</button>
							<!-- Buttons End-->
						</div>
					</div>
					<!-- Page Top End -->

					<!-- Info Cards Start -->
					<div class="row">
						<!-- General Information Start -->
						<div class="col-xxl-4 mb6">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb2">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0">General Information</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="table-responsive text-nowrap">
											<table class="table qd-table align-middle mb0">
												<tbody>
													<tr>
														<td>
															<span>Reservation ID</span>
														</td>
														<td>
															<strong class="text-heading">#2179</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Customer</span>
														</td>
														<td>
															<strong class="text-heading">Dylan Meringue</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Car</span>
														</td>
														<td>
															<strong class="text-heading">Volkswagen - Golf TSI 2017</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Pick-Up</span>
														</td>
														<td>
															<strong class="text-heading">Apr 9, 2023 - 13:00pm</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Drop-Off</span>
														</td>
														<td>
															<strong class="text-heading">Apr 12, 2023 - 14:00pm</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Price</span>
														</td>
														<td>
															<strong class="text-primary">$256,32</strong>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<!-- General Information End -->

						<!-- Customer Address Start -->
						<div class="col-xxl-4 mb6">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb2">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0">Customer Address</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="table-responsive text-nowrap">
											<table class="table qd-table align-middle mb0">
												<tbody>
													<tr>
														<td>
															<span>Street</span>
														</td>
														<td>
															<strong class="text-heading">3542 Bryan Avenue</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>City</span>
														</td>
														<td>
															<strong class="text-heading">Eagan</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>State</span>
														</td>
														<td>
															<strong class="text-heading">Minnesota</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Phone Number</span>
														</td>
														<td>
															<strong class="text-heading">+1 651-406-5337</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Zip code</span>
														</td>
														<td>
															<strong class="text-heading">55121</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Country</span>
														</td>
														<td>
															<strong class="text-heading">United States</strong>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<!-- Customer Address End -->

						<!-- Billing Address Start -->
						<div class="col-xxl-4 mb6">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb2">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0">Billing Address</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="table-responsive text-nowrap">
											<table class="table qd-table align-middle mb0">
												<tbody>
													<tr>
														<td>
															<span>Street</span>
														</td>
														<td>
															<strong class="text-heading">512 Lowes Alley</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>City</span>
														</td>
														<td>
															<strong class="text-heading">Rio Grande</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>State</span>
														</td>
														<td>
															<strong class="text-heading">Ohio</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Phone Number</span>
														</td>
														<td>
															<strong class="text-heading">+1 740-245-8779</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Zip code</span>
														</td>
														<td>
															<strong class="text-heading">45674</strong>
														</td>
													</tr>
													<tr>
														<td>
															<span>Country</span>
														</td>
														<td>
															<strong class="text-heading">United States</strong>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<!-- Billing Address End -->
					</div>
					<!-- Info Cards End -->

					<!-- Map Start -->
					<div class="row mb6">
						<div class="col-12">
							<div class="card shadow-card p6">
								<div id="map" class="w-100 height-400 rounded"></div>
							</div>
						</div>
					</div>
					<!-- Map End -->

					<!-- Info Start -->
					<div class="row">
						<!-- Left Rows Start -->
						<div class="col-xxl-8 mb6">
							<!-- Info Card Start -->
							<div class="card shadow-card p6">
								<div class="row align-items-center">
									<div class="col-md-7 mobile-bottom-fix">
										<div class="w-100 height-280 img-fix rounded">
											<img src="assets/media/cars/1.jpg" alt="">
										</div>
									</div>
									<div class="col-md-5">
										<div class="row mb6">
											<div class="col-5">
												<span>Brand</span>
											</div>
											<div class="col-7">
												<strong class="text-heading">Volkswagen</strong>
											</div>
										</div>
										<div class="row mb6">
											<div class="col-5">
												<span>Model</span>
											</div>
											<div class="col-7">
												<strong class="text-heading">Golf TSI 2017</strong>
											</div>
										</div>
										<div class="row mb6">
											<div class="col-5">
												<span>Year</span>
											</div>
											<div class="col-7">
												<strong class="text-heading">2017</strong>
											</div>
										</div>
										<div class="row mb6">
											<div class="col-5">
												<span>License Plate</span>
											</div>
											<div class="col-7">
												<div class="border border-dark width-160 rounded overflow-hidden d-flex" dir="ltr">
													<div class="bg-primary width-40 height-30 d-flex align-items-center justify-content-center text-white">D</div>
													<div class="w-100 d-flex align-items-center justify-content-center bg-white">
														<h6 class="mb0 text-dark">KA PA 777</h6>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-5">
												<span>Status</span>
											</div>
											<div class="col-7">
												<span class="badge rounded-pill badge-soft text-bg-success">Published</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Info Card End -->
						</div>
						<!-- Left Rows End -->

						<!-- Documents Start -->
						<div class="col-xxl-4 mb6">
							<div class="card shadow-card p6">
								<div class="row align-items-center mb4">
									<div class="col d-flex flex-row justify-content-between align-items-center">
										<h6 class="mb0">Documents</h6>
									</div>
								</div>
								<div class="row">
									<div class="col-12 mb3">
										<a href="#" class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
											<div class="d-flex align-items-center justify-content-start">
												<div class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
													<i data-feather="file" stroke-width="2" height="22" class="text-body"></i>
												</div>
												<span class="text-heading">Reservation agreement</span>
											</div>
											<span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
										</a>
									</div>
									<div class="col-12 mb3">
										<a href="#" class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
											<div class="d-flex align-items-center justify-content-start">
												<div class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
													<i data-feather="file" stroke-width="2" height="22" class="text-body"></i>
												</div>
												<span class="text-heading">Travel insurance</span>
											</div>
											<span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
										</a>
									</div>
									<div class="col-12 mb3">
										<a href="#" class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
											<div class="d-flex align-items-center justify-content-start">
												<div class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
													<i data-feather="image" stroke-width="2" height="22" class="text-body"></i>
												</div>
												<span class="text-heading">Driver's license</span>
											</div>
											<span class="badge rounded-pill badge-soft text-bg-info">JPG</span>
										</a>
									</div>
									<div class="col-12">
										<a href="#" class="border border-dashed rounded overflow-hidden d-flex align-items-center justify-content-between text-decoration-none pe4">
											<div class="d-flex align-items-center justify-content-start">
												<div class="height-50 width-50 d-flex align-items-center justify-content-center bg-light me4">
													<i data-feather="file-text" stroke-width="2" height="22" class="text-body"></i>
												</div>
												<span class="text-heading">Car driving instructions</span>
											</div>
											<span class="badge rounded-pill badge-soft text-bg-info">PDF</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Documents End -->
					</div>
					<!-- Info End -->
				</div>
			</div>
			<!-- ***** Content End ***** -->

			<!-- ***** Footer Start ***** -->
			<footer class="p6 pt5 pb5">
				<div class="container-fluid p0">
					<div class="row">
						<div class="col-sm-6 text-center text-lg-start mb-sm-1">
							<span>2023©</span>
							<span class="text-heading">Qoduby</span>
						</div>
						<div class="col-sm-6">
							<ul class="list-inline m0 text-center text-lg-end">
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Support</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">License</a></li>
								<li class="list-inline-item"><a href="#" class="text-body text-decoration-none hover-primary">Documentation</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- ***** End Start ***** -->
		</main>
		<!-- ***** Main End ***** -->
	</div>

	<!-- Plugin Bundle -->
	<script src="assets/js/plugins.bundle.js" crossorigin="anonymous"></script>
	<!-- Common Javascript -->
	<script src="assets/js/app.js" crossorigin="anonymous"></script>
	<!-- Page Specific Javascript -->
	<script src="assets/js/pages/projects/car-rental/reservation-details.js" crossorigin="anonymous"></script>
</body>
</html>