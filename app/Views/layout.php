<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<header>
		<nav class="blue-grey darken-1">
			<div class="container">
				<div class="row">
					<a href="<?php echo base_url() ?>" class="brand-logo">Meu Blog</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="<?php echo base_url('post/create') ?>">Novo Post</a></li>
					</ul>
				</div>
			</div>
		</nav>	
	</header>
	
	<main>
		<div class="container">
			<?php echo $this->renderSection('conteudo') ?>
		</div>
	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>