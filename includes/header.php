<?php
	error_reporting(0);
	include_once('config.php');
?>

<nav class="header">
	<div class="top-header">
		<span>
			<a href="cdcdcdc">MIS</a>
		</span>|
		<span>
			<a href="cdcdcdc">Mail</a>
		</span>|
		<span>
			<a href="cdcdcd">Faculty</a>
		</span>|
		<span>
			<a href="cdcdcd">Alumni</a>
		</span>
	</div>
	<div class="shadow-effect-1">
		<div class="container">
			<div class="middle-header">
				<div class="header-logo__container">
					<a href="<?php echo BASE_URL . 'index.php'; ?>"><img src="<?php echo BASE_URL . 'assets/images/logo.png'; ?>" class="img-fluid" alt="logo" /></a>
				</div>
				<div class="institute-name">
					<h4>भारतीय प्रौद्योगिकी संस्थान (भारतीय खनि विद्यापीठ) धनबाद</h4>
					<h5>Indian Institute of Technology (Indian School of Mines) Dhanbad</h5>
				</div>
			</div>
			<div class="collapsed-container collapsed-header">
				<div id="navbar-menu-toggler" class="menu-toggle">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<div class="cross">
						<span></span>
						<span></span>
					</div>
					<h4 class="label hidden">MENU</h4>
				</div>
				<ul class="menu-links inactive">
					<li>
						<a href="<?php echo BASE_URL . 'institute'; ?>">Institute</a>
						<ul class="nested-menu-links">
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Overview</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Map</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Facts & Statistics</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Vision & Mission</a></li>
						</ul>
					</li>
					<li>
						<a href="">Admissions</a>
					</li>
					<li>
						<a href="<?php echo BASE_URL . 'academics'; ?>">Academics</a>
						<ul class="nested-menu-links">
							<li><a href="<?php echo BASE_URL . 'academics/departments.php'; ?>"><i class="fas fa-caret-right"></i> &nbsp; Departments</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Courses</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Centres</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Academic Calendar</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Central Library</a></li>
						</ul>
					</li>
					<li>
						<a href="">Administration</a>
					</li>
					<li>
						<a href="">Research</a>
					</li>
					<li>
						<a href="">Campus Life</a>
					</li>
				</ul>
			</div>
			<div class="bottom-header">
				<div class="menu-item hvr-dropdown" onclick="location='<?php echo BASE_URL . 'institute'; ?>'">
					Institute
					<div class="hvr-dropdown__menu">
						<a href="" class="hvr-dropdown__menu-item">Overview</a>
						<a href="" class="hvr-dropdown__menu-item">Map</a>
						<a href="" class="hvr-dropdown__menu-item">Facts & Statistics</a>
						<a href="" class="hvr-dropdown__menu-item">Vision & Mission</a>
					</div>
				</div>
				<div class="menu-item hvr-dropdown">
					Admissions
				</div>
				<div class="menu-item hvr-dropdown" onclick="location='<?php echo BASE_URL . 'academics'; ?>'">
					Academics
					<div class="hvr-dropdown__menu">
						<a href="<?php echo BASE_URL . 'academics/departments.php'; ?>" class="hvr-dropdown__menu-item">Departments</a>
						<a href="" class="hvr-dropdown__menu-item">Courses</a>
						<a href="" class="hvr-dropdown__menu-item">Centres</a>
						<a href="" class="hvr-dropdown__menu-item">Academic Calendar</a>
						<a href="" class="hvr-dropdown__menu-item">Central Library</a>
					</div>
				</div>
				<div class="menu-item hvr-dropdown">
					Administration
				</div>
				<div class="menu-item hvr-dropdown">
					Research
				</div>
				<div class="menu-item hvr-dropdown">
					Campus Life
				</div>
			</div>
		</div>
	</div>
</nav>
