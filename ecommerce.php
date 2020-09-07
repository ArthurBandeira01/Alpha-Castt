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
    <!-- Header do site -->

	<header class="ecommerce">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/alphaazul.png"></a>
				<a href="index.php"><h2>Alpha.Castt</h2></a>	
			</div>


			<nav class="desktop">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="ecommerce.php">Produtos</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="btn"><a href="contato.php">Contato</a></li>
				</ul>
			</nav><!--desktop-->

			<nav class="mobile">
				<div class="botao-menu-mobile">
				<h3><i class="fas fa-bars"></i></h3>
				</div><!--botão-menu-mobile-->
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="ecommerce.php">Produtos</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li class="btn"><a href="contato.php">Contato</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div>
		</div><!--container-->
	</header>

    <!-- Fim do header -->
    
    <!-- Scripts do site -->
    <script src="js/jquery.js"></script>
    <script src="js/responsivo.js"></script>
    <!-- fim dos scripts -->
</body>
</html>