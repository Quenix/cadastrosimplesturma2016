<?php
session_start();
if(isset($_SESSION['email'])){
	
	header("Location: home.php");
	exit();
	
}

?>


<html>
	<head>
		<title>Sistema de Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	
	<body>
		<div>
			
			
<div class="container">
    <div class="form">
        <form action="validarLogin.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email" required autofocus>
                <small id="emailHelp" class="form-text text-muted">Nunca compartilhe seu email com outras pessoas!</small>
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="senha"  class="form-control" id="senha" placeholder="Senha" required autofocus>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembra-me</label>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Conectar</button>
        </form>
    </div>

</div>
		
		<?php if(isset($_GET['login'])): ?>
		
		<div>
			<p>Senha inválida!</p>
		</div>
		
		<?php endif ?>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/core.js"></script>
	</body>
</html>