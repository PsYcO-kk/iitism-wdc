<?php
	error_reporting(0);
	include_once('../includes/config.php');
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
				<div style="text-align: right;">
					<h5 class="footer__department-name">DEPARTMENT OF</h5>
					<h3 class="footer__department-name">ENVIRONMENTAL SCIENCE AND ENGINEERING</h3>
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
						<a href="">About</a>
					</li>
					<li>
						<a href="">Programs</a>
					</li>
					<li>
						<a href="">Research</a>
					</li>
					<li>
						<a href="">People</a>
						<ul class="nested-menu-links">
							<li><a href="faculty.php"><i class="fas fa-caret-right"></i> &nbsp; Faculty</a></li>
							<li><a href=""><i class="fas fa-caret-right"></i> &nbsp; Alumni</a></li>
						</ul>
					</li>
					<li>
						<a href="">Activities</a>
					</li>
					<li>
						<a href="">Facilities</a>
					</li>
					<li>
						<a href="">Society</a>
					</li>
				</ul>
			</div>
			<div class="bottom-header">
				<div class="menu-item hvr-dropdown" onclick="location='<?php echo BASE_URL . 'institute'; ?>'">
					About
				</div>
				<div class="menu-item hvr-dropdown">
					Programs
				</div>
				<div class="menu-item hvr-dropdown" onclick="location='<?php echo BASE_URL . 'academics'; ?>'">
					Research
				</div>
				<div class="menu-item hvr-dropdown">
					People
					<div class="hvr-dropdown__menu">
						<a href="faculty.php" class="hvr-dropdown__menu-item">Faculty</a>
						<a href="" class="hvr-dropdown__menu-item">Alumni</a>
					</div>
				</div>
				<div class="menu-item hvr-dropdown">
					Activities
				</div>
				<div class="menu-item hvr-dropdown">
					Facilities
				</div>
				<div class="menu-item hvr-dropdown">
					Society
				</div>
			</div>
		</div>
	</div>
</nav>
