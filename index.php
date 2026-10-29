<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>main page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php require __DIR__ . '/components/header.php'; ?>

	<main>
		<section class="mainInfo">
			<div class="container">
				<h1 class="titleOfPage">Tableau de bord</h1>
				<ul class="mainInfo__list">
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Promotion :</span>
						<span class="mainInfo__text">SIO1 – 2026/2027</span>
					</li>
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Nombre d'étudiants :</span>
						<span class="mainInfo__text">14</span>
					</li>
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Nombre d'évaluations :</span>
						<span class="mainInfo__text">6</span>
					</li>
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Moyenne générale :</span>
						<span class="mainInfo__text">13,8 / 20</span>
					</li>
				</ul>
			</div>
		</section>

		<section class="examsTable mt-big">
			<div class="container">
				<h2 class="preTitle">Dernières évaluations</h2>

				<div class="table-container">
					<?php require __DIR__ . '/components/examsTable.php'; ?>
			</div>
		</section>
	</main>
	
</body>
</html>