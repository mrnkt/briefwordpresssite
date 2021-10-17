<!DOCTYPE html>
<html lang="fr">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>Happy Cats</title> -->
	<meta name="description" content="Il s'agit d'un site de mise en relation entre les éleveurs de chats de race et les acheteurs. Une partie est dédiée à la vente de jouet pour chats connectés">
	<meta name="keywords" content="chat, chaton">
	<meta name="author" content="Francois">
	<!-- <link rel="shortcut icon" href="assets/images/footer/favicon2.png" type="image/x-icon"> -->

	<?php wp_head(); ?>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
	<div class="container-fluid">
		<!-- <a class="navbar-brand" href="#">Le cocon</a> -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php wp_nav_menu(['theme_location' => 'header', 
		'container' => false, 
		'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0']) ?>
		<!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown
			</a>
			<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			</ul>
			</li>
			<li class="nav-item">
			<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
		</ul> -->
		</div>
	</div>
	</nav>