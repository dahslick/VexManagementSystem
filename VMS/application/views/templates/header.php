<html>

<head>
	<title>Vms</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/cyborg/bootstrap.min.css">
	<link rel="stylesheet" href="./application/assets/css/headerFooter.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	 crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
	 crossorigin="anonymous"></script>

</head>
<body>
	<style>
		.dropdown:hover>.dropdown-menu{
			display: block;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="<?php echo base_url(); ?>home">VMS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link text-success" href="<?php echo base_url(); ?>quickLook">QuickLook <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-success" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">Request</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-success" href="<?php echo base_url(); ?>requestForm">New Request</a>
						<a class="dropdown-item text-success" href="<?php echo base_url(); ?>requests">Last Requested</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-success" id="navbarDropdown" role="button" data-toggle="dropdown"
					 aria-haspopup="true" aria-expanded="false">Parts</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-success" href="<?php echo base_url(); ?>partsList">Parts list</a>
						<a class="dropdown-item text-success" href="<?php echo base_url(); ?>kitEditor">Kit editior</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link text-success" href="<?php echo base_url(); ?>about">About</a>
				</li>
			</ul>
			<!--button type="button" class="btn btn-danger float-right"> Logout</button>-->
		</div>
	</nav>
