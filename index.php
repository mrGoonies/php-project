<?php
$contacts = [
	["Name" => "Pepe", "Phone Number" => "9883256"],
	["Name" => "Federico", "Phone Number" => "9883256"],
	["Name" => "Roxana", "Phone Number" => "9883256"],
	["Name" => "Gabo", "Phone Number" => "9264448326"],
	["Name" => "Sandra", "Phone Number" => "9264448326"],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.3.1/darkly/bootstrap.min.css"
		integrity="sha512-TW3EkvQFl2hehLxEL4TSEmP960SIWeTAdT6MWTdhbRdRyBRmQjEiWpoDW5VpgZQRy5RJE2qhugkeISF3BtDd1w=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="./static/css/style.css">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid">
				<img class="logo-app" src="./static/img/php.png" alt="php-logo" />
				<a class="navbar-brand" href="#">Contact App</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link " aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./add.html">Add Contact</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<div class="container pt-4 p-3">
			<div class="row">


				<?php foreach($contacts as $contact): ?>
					<div class="col-md-4 mb-3">
						<div class="card text-center">
							<div class="card-body">
								<h3 class="card-title text-capitalize"><?= $contact["Name"] ?></h3>
								<p class="m-2"><?= $contact["Phone Number"] ?></p>
								<a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
								<a href="#" class="btn btn-danger mb-2">Delete Contact</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>


			</div>
		</div>
	</main>
</body>
</html>
