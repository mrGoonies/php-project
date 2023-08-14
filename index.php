<?php

	if(file_exists("contact.json")) {
		$contacts[] = json_decode(file_get_contents("contact.json"), true);
	} else {
		$contacts = [];
	}

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
							<a class="nav-link" href="./add.php">Add Contact</a>
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
				<?php if(count($contacts) != 0){ ?>
					<?php foreach($contacts as $contact): ?>
						<div class="col-md-4 mb-3">
							<div class="card text-center">
								<div class="card-body">
									<h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
									<p class="m-2"><?= $contact["phone_number"] ?></p>
									<a href="#" class="btn btn-secondary mb-2">Edit Contact</a>
									<a href="#" class="btn btn-danger mb-2">Delete Contact</a>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				<?php } else { ?>
					<div class="col-md-4 mx-auto">
							<div class="card text-center">
								<div class="card-body">
									<h3 class="card-title text ">You no have a contact in storage!</h3>
									<p class="m-2"><a href="./add.php">Add one!</a></p>
								</div>
							</div>
					</div>
				<?php } ?>

			</div>
		</div>
	</main>
</body>
</html>
