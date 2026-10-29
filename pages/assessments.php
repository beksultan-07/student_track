<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assessments</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<?php require __DIR__ . '/../components/header.php'; ?>

	<main>
		<section class="examsTable">
			<div class="container">
				<nav class="breadcrumbs">
					<a href="./index.html" class="breadcrumbs__link">Tableau de bord</a>
					<span class="breadcrumbs__separator">/</span>
					<span class="breadcrumbs__current">Évaluations</span>
				</nav>

				<h1 class="titleOfPage">Évaluations</h1>

				<div class="table-container">
					<?php require __DIR__ . '/../components/examsTable.php'; ?>
				</div>
				

			</div>
		</section>
	</main>

	
</body>
</html>