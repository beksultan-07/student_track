<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Students</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<?php 
		require __DIR__ . '/../components/header.php'; 
		
		$students = [
			[
				"id" => 1,
				"lastname" => "Martin",
				"firstname" => "Lucas",
				"email" => "lucas.martin@example.fr",
				"promotion" => "SIO1"
			],
			[
				"id" => 2,
				"lastname" => "Bernard",
				"firstname" => "Emma",
				"email" => "emma.bernard@example.fr",
				"promotion" => "SIO1"
			],
			[
				"id" => 3,
				"lastname" => "Dubois",
				"firstname" => "Hugo",
				"email" => "hugo.dubois@example.fr",
				"promotion" => "SIO1"
			],
			[
				"id" => 4,
				"lastname" => "Robert",
				"firstname" => "Clara",
				"email" => "clara.robert@example.fr",
				"promotion" => "SIO1"
			],
			[
				"id" => 5,
				"lastname" => "Petit",
				"firstname" => "Nathan",
				"email" => "nathan.petit@example.fr",
				"promotion" => "SIO1"
			],
			[
				"id" => 6,
				"lastname" => "Leroy",
				"firstname" => "Jade",
				"email" => "jade.leroy@example.fr",
				"promotion" => "SIO1"
			]
		];

	?>

	<main>
		<section class="students">
			<div class="container">
				<nav class="breadcrumbs">
					<a href="./index.html" class="breadcrumbs__link">Tableau de bord</a>
					<span class="breadcrumbs__separator">/</span>
					<span class="breadcrumbs__current">Étudiants</span>
				</nav>
				<h1 class="titleOfPage">Étudiants</h1>


				<form class="search-form">
					<input type="text" class="search__input" placeholder="Que cherchiez-vous ?">
					<button class="btn search-btn">Recherche</button>
				</form>
				
				<div class="table-container">

				<?php if (count($students) > 0): ?>

					<table class="table students-table">
						<tr>
							<th>Nom</th>
							<th>Promotion</th>
							<th>Email</th>
						</tr>

						<?php
							foreach ($students as $student) {
								echo "<tr>
										<td>
											<a href='/pages/student.php?id={$student['id']}'>
												{$student['lastname']}
												{$student['firstname']}
											</a>
										</td>
										<td>{$student['promotion']}</td>
										<td>{$student['email']}</td>
									</tr>";
							}
							?>

					</table>

					<?php else: ?>

						<p>Aucun étudiant enregistré.</p>

					<?php endif; ?>
				</div>
			</div>
		</section>
	</main>
	
</body>
</html>