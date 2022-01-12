<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Comentários | PHP e AJAX</title>

	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<section class="content">
		<div class="box_form">
			<h1>Deixe seu Comentário:</h1>
			<form id="form1">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="name"/><br><br>

				<label for="comment">Comentário</label><br>
				<textarea name="comment" id="comment"></textarea><br><br>

				<input type="submit" form="form1" class="btn-sub" value="Enviar Comentário"/><br><br>
			</form>
		</div>
		<div class="box_comment">
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>