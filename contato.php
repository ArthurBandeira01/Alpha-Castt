<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Alpha Castt</title>
	<!-- Meta tags, SEO e links -->
	<meta charset="utf-8">
	<meta name="author" content="Arthur Bandeira">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta name="keywords" content="Agência,website,construção de sites,sistemas">
	<meta name="description" content="Alpha Castt é uma empresa que além de desenvolver sites sistemas oferece os melhores serviços ao cliente!">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/slick.css"/>
	<link rel="stylesheet" href="css/slick-theme.css"/>
	<script src="https://kit.fontawesome.com/a7cf753026.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon" type="image-x/png" href="icon.ico">
	<link rel="stylesheet" href="css/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167513347-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-167513347-1');
	</script>

</head>

<body>
	
<base base="<?php echo INCLUDE_PATH; ?>" /> 
	<!--
	<div class="sucesso">Enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="images/ajax-loader (1).gif">
	</div>overlay-loading-->

<!-- Header do site -->

	<header class="home">
		<div class="container">
			<div class="contato-header">
			<div class="logo log2">
				<a href="index.php"><img src="images/alphaazul.png"></a>
				<a href="index.php"><h2>Alpha.Castt</h2></a>	
			</div><!--logo-->

			<nav class="desktop">
				<div class="desktop-contato">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="ecommerce.php">Produtos</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="btn3"><a href="contato.php">Contato</a></li>
				</ul>
				</div><!--desktop-contato-->
			</nav><!--desktop-->

			<nav class="mobile">
				<div class="botao-menu-mobile">
				<h3><i class="fas fa-bars"></i></h3>
				</div><!--botão-menu-mobile-->
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="ecommerce.php">Produtos</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="btn3"><a href="contato">Contato</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div>
			</div><!--contato-header-->
		</div><!--container-->
	</header>

	<!-- Fim do header -->

	<!-- Bradcumb -->
	
	<section class="color">

	<div class="breadcumb">
		<h2>Você está em: <a href="index.php">Home</a> <i class="fas fa-angle-double-right"></i> Contato</h2>
	</div><!--breadcumb-->
		
	<!-- Fim breadcumb -->

	<!-- Início form -->
	<?php 
						if(isset($_POST['acao']) && $_POST['identificador'] == 'form_home'){
							//Enviei o formulário
							if($_POST['email'] != ''){
								$email = $_POST['email'];
								if(filter_var($email, FILTER_VALIDATE_EMAIL)){
									//TUDO CERTO, É UM E-MAIL
									//SÓ ENVIAR
									$mail = new Email('alphacastt.com.br', 'contato@alphacastt.com.br', '1277-Arthur', 'Arthur');
									$mail->addAdress('teste@alphacastt.com.br', 'Arthur');
									$corpo = "Esse foi um e-mail teste!!<hr>$email";
									$info = array('assunto'=>'Um novo e-mail cadastrado','corpo'=>$corpo);
									//$info = ['assunto'=>'Um novo e-mail cadastrado','corpo'=>$email];
									$mail->formatarEmail($info);
									if($mail->enviarEmail()){
										echo '<script>alert("Enviado com sucesso")</script>';
									}else{
										echo '<script>alert("Deu errado")</script>';
									}

								}else{
									echo '<script>alert("não é válido!!")</script>';
								}
							}else{
								echo '<script>alert("vazio!!")</script>';
							}
						}else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_contato'){
							/*
							$nome = $_POST['nome'];
							$email = $_POST['email'];
							$telefone = $_POST['telefone'];
							$mensagem = $_POST['mensagem'];
							*/
							$assunto = 'Nova mensagem do site';
							$corpo = '';
							foreach ($_POST as $key => $value) {
								$corpo.=ucfirst($key).": ".$value;
								$corpo.="<hr>";
							}
							$info = array('assunto'=>$assunto, 'corpo'=>$corpo);
							$mail = new Email('alphacastt.com.br', 'contato@alphacastt.com.br', '1277-Arthur', 'Arthur');
							$mail->addAdress('teste@alphacastt.com.br', 'Arthur');
							$mail->formatarEmail($info);
								if($mail->enviarEmail()){
									echo '<script>alert("Enviado com sucesso")</script>';
								}else{
									echo '<script>alert("Deu errado")</script>';
								}
						}	

	?>						

	<section class="form">
		<div class="container">
			<div class="form-single">
				<div class="line-cont"></div>
				<h2>Entre em contato:</h2>
				<form method="post" action="">
					<input type="text" name="nome" required="" placeholder="Seu nome...">
					<input type="text" name="email" required="" placeholder="Seu e-mail...">
					<input type="text" name="telefone" required="" placeholder="Seu telefone...">
					<textarea placeholder="Sua mensagem..." name="mensagem"></textarea>
					<input type="hidden" name="identificador" value="form_contato">
					<input type="submit" name="acao" value="Enviar">
				</form>
			</div><!--form-single-->
		</div><!--container-->
	</section><!--form-->

	<!-- Fim form -->

</section>

	<section class="socials">
		<div class="socials-single1">
			<a href="https://www.facebook.com/AlphaCastt-102620431471446"><i class="fab fa-facebook-square"></i></a>
		</div><!--socials-single-->
		<br>
		<br>
		<div class="socials-single2">	
			<a href="https://www.instagram.com/alpha_castt/"><i class="fab fa-instagram"></i></a>
		</div><!--socials-single-->
	</section><!--socials-->

	<!-- Início footer -->

	<footer class="footer-contato">
		<div class="container">
			<a href="index.php"><img src="images/alphaazul.png"></a>
			<p>Alpha Castt - Todos os direitos reservados @2020</p>
		</div><!--container-->		
	</footer>

	<!-- Fim footer -->

	<!-- Scripts -->

	<script src="js/jquery.js"></script>
	<script src="js/responsivo.js"></script>
	<!--<script src="js/form.js"></script>-->

</body>

</html>
