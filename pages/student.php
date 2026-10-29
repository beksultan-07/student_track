<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php
		$appName = 'Studentrack';
		$currentPromotion = 'SIO1';
		$schoolYear = '2026-2027';
	?>
	
	<?php require __DIR__ . '/../components/header.php'; ?>
	

	<main>
		<section class="students">
			<div class="container">
				<nav class="breadcrumbs">
					<a href="./index.html" class="breadcrumbs__link">Tableau de bord</a>
					<span class="breadcrumbs__separator">/</span>
					<a href="./students.html" class="breadcrumbs__link">Étudiants</a>
					<span class="breadcrumbs__separator">/</span>
					<span class="breadcrumbs__current">Lucas MARTIN</span>
				</nav>
				<h1 class="titleOfPage">Lucas MARTIN</h1>


				<ul class="mainInfo__list">
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Promotion :</span>
						<span class="mainInfo__text">
							<?php echo $currentPromotion; ?> – <?php echo $schoolYear; ?></span>
					</li>
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Email: </span>
						<span class="mainInfo__text">lucas.martin@example.fr</span>
					</li>
					<li class="mainInfo__list__item">
						<span class="mainInfo__text">Moyenne :</span>
						<span class="mainInfo__text">15 / 20</span>
					</li>
				</ul>
			</div>
		</section>

		<section class="examsTable">
			<div class="container">
				<h2 class="preTitle">Les résultats</h2>

				<div class="table-container">
					<table class="table exams-table">
						<tr>
							<th>Évaluation</th>
							<th>Matière</th>
							<th>Note</th>
						</tr>
						<tr>
							<td>HTML – Structure d'une page</td>
							<td>TC2 Web</td>
							<td>16 / 20</td>
						</tr>
						<tr>
							<td>CSS – Sélecteurs</td>
							<td>TC2 Web</td>
							<td>14 / 20</td>
						</tr>
						<tr>
							<td>Introduction SQL</td>
							<td>D4</td>
							<td>15 / 20</td>
						</tr>
					</table>
				</div>

			</div>
		</section>
	</main>
	
</body>
</html>