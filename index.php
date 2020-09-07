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
	<meta name="keywords" content="Agência,website,construção de sites,sistemas, manutenção de computadores">
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

	<div class="sucesso">Enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="images/ajax-loader (1).gif">
	</div><!--overlay-loading-->

	<!-- Header do site -->

	<header class="home">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/alphaazul.png"></a>
				<a href="index.php"><h2>Alpha.Castt</h2></a>	
			</div>


			<nav class="desktop">
				<ul>
					<li><a title="Home" href="index.php">Home</a></li>
					<li><a title="Sobre" href="#Sobre">Sobre</a></li>
					<li><a title="Serviços" href="#Serviços">Serviços</a></li>
					<li><a title="Ebooks" href="#Ebooks">Ebooks</a></li>
					<li><a title="Depoimentos" href="#Depoimentos">Depoimentos</a></li>
					<li><a title="Produtos" href="ecommerce.php">Produtos</a></li>
					<li><a title="Blog" href="blog.php">Blog</a></li>
					<li class="btn"><a title="Contato" href="contato.php">Contato</a></li>
				</ul>
			</nav><!--desktop-->

			<nav class="mobile">
				<div class="botao-menu-mobile">
				<h3><i class="fas fa-bars"></i></h3>
				</div><!--botão-menu-mobile-->
				<ul>
					<li><a title="Home" href="index.php">Home</a></li>
					<li><a title="Sobre" href="#Sobre">Sobre</a></li>
					<li><a title="Serviços" href="#Serviços">Serviços</a></li>
					<li><a title="Ebooks" href="#Ebooks">Ebooks</a></li>
					<li><a title="Depoimentos" href="#Depoimentos">Depoimentos</a></li>
					<li><a title="Produtos" href="ecommerce.php">Produtos</a></li>
					<li><a title="Blog" href="blog.php">Blog</a></li>
					<li title="Contato" class="btn"><a href="contato.php">Contato</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div>
		</div><!--container-->
	</header>

	<!-- Fim do header -->

	<!-- Sessão saiba mais -->
		<section id="Home" class="saiba-mais">
			<div class="container">
				<div class="saiba-titulo">
					<h2>Você vendendo mais com <b>automação<b></h2>
					<p>Desenvolvemos os melhores sites e sistemas para trazer segurança e retorno aos clientes.<br/>Entre em contato conosco para ficar por dentro das novidades:</p>
					
					<form method="post">
						<input type="email" name="email" placeholder="Seu E-mail..">
						<input type="hidden" name="identificador" value="form_home">
						<input type="submit" name="acao" value="SAIBA MAIS">
					</form>
				</div><!--saiba-titulo-->
				<div class="clear"></div>
			</div><!--container-->
		</section><!--saiba-mais-->

		<div class="arrow"></div>
	<!-- Fim sessão -->

	<!-- Sessão chamada -->

	<section class="chamada">
		<div class="container">
			<div class="chamada-single">
				<h2>Seja bem-vindo!</h2>
				<p>A Alpha Castt tem como objetivo levar ao cliente o que ele mais deseja:<br/> "A sua felicidade de conquistar seus objetivos!"</p>
			</div><!--chamada-single-->	

			<div class="chamada-two">
				<div class="chamada-icon">
					<i class="far fa-check-circle"></i>
					<p>Foco no cliente</p>
				</div><!--chamada-icon-->

				<div class="chamada-icon">
					<i class="fas fa-shield-alt"></i>
					<p>Garantia de segurança</p>
				</div><!--chamada-icon-->

				<div class="chamada-icon">
					<i class="fas fa-tachometer-alt"></i>
					<p>Otimização de qualidade</p>
				</div><!--chamada-icon-->

				<div class="chamada-icon">
					<i class="far fa-thumbs-up"></i>
					<p>Seriedade e comprometimento</p>
				</div><!--chamada-icon-->

				<div class="chamada-icon">
					<i class="fas fa-users-cog"></i>
					<p>Serviços conforme suas necessidades</p>
				</div><!--chamada-icon-->

				<div class="chamada-icon">
					<i class="fas fa-user-tie"></i>
					<p>Desenvolvimento profissional e capacitado</p>
				</div><!--chamada-icon-->

			</div><!--chamada-two-->

			<div class="clear"></div>
		</div><!--container-->
	</section><!--chamada-->

	<!-- Fim chamada-->

	<!-- Sessão sobre -->

	<section id="Sobre" class="sobre">
		<div class="container">
			<div class="sobre-one">
				<div class="line"></div>
				<h2>Sobre o Alpha Castt</h2>
				<p>A Agência Alpha Castt foi criada para atender serviços de criação de sites e sistemas com qualidade e otimização. O que mais prezamos é o comprometimento com o cliente e a relação de negócios com o mesmo, pois se o cliente está feliz nós também estaremos!</p>
			</div><!--sobre-one-->
			
			<div class="sobre-two"> 
				<div class="sobre-autor">
					<img alt="Arthur" title="Arthur" src="images/arthur.png">
					<h2>Arthur Bandeira - CEO</h2>
					<p>Tecnólogo em Sistemas para Internet e Técnico em Informática, Arthur é o responsável pela Agência Alpha Castt que atende os clientes com satisfação 100% no mercado, trazendo consigo as melhores tecnologias que se adequam a cada usuário.</p>
				</div><!--sobre-autor-->
			</div><!--sobre-two-->
			<div class="clear"></div>
		</div><!--container-->
	</section><!--sobre-->

	<!-- Sobre responsivo -->
<!--
	<section class="sobre-one-responsivo">
		<div class="container">
			<div class="line"></div>
				<h2>Sobre o Alpha Castt</h2>
				<p>A Agência Alpha Castt foi criada para atender serviços de criação de sites e sistemas com qualidade e otimização. O que mais prezamos é o comprometimento com o cliente e a relação de negócios com o mesmo, pois se o cliente está feliz nós também estaremos!</p>
			<div class="clear"></div>	
		</div>
	</section>

-->

	<section class="sobre-two-responsivo">
		<div class="container">

				<div class="sobre-autor-1">
					<img alt="Arthur" title="Arthur" src="images/arthur.png">
					<h2>Arthur Bandeira - CEO</h2>
					<p>Tecnólogo em Sistemas para Internet e Técnico em Informática, Arthur é o responsável pela Agência Alpha Castt que atende os clientes com satisfação 100% no mercado, trazendo consigo as melhores tecnologias que se adequam a cada usuário.</p>
					<div class="socials">
						<h2><a href="https://www.facebook.com/arthur.silva3/"><i class="fab fa-facebook-square"></i> arthur.silva/facebook.com</a><h2>
						<br />	
						<h2><a href="https://www.instagram.com/arthur_bandeira66/"><i class="fab fa-instagram"></i> arthur.silva/instagram.com</a><h2> 
					</div><!--socials-->
					<div class="clear"></div>
				</div><!--sobre-autor-->

				<div class="sobre-autor">
					<img alt="Leonardo" title="Leonardo" src="images/léo.jpeg">
					<h2>Leonardo Rotta - Técnico</h2>
					<p>Técnico em Informática, Leonardo é um dos responsáveis em fazer manutenções de hardware e software da Alpha Castt. Um bom profissional é a peça fundamental para prestar um excelente serviço.</p>
					<div class="socials">
						<h2><a href="https://www.facebook.com/search/top/?q=leonardo%20rotta"><i class="fab fa-facebook-square"></i> leonardorotta/facebook.com</a><h2>
						<br/>
						<h2><a href="https://www.instagram.com/rottaleo/"><i class="fab fa-instagram"></i> leonardorotta/instagram.com</a><h2>
					</div><!--socials-->
					<div class="clear"></div>
				</div><!--sobre-autor-->

				<div class="sobre-autor sbaut">
					<img alt="João" title="João" src="images/gugel.jpg">
					<h2>João Gugel - Técnico</h2>
					<p>Técnico em Informática, João atua no setor de manutenção de hardware e software da Alpha Castt.</p>
					<div class="socials">
						<h2><a href="https://www.facebook.com/joao.Mgugel"><i class="fab fa-facebook-square"></i> joaogugel/facebook.com</a><h2>
						<br/>
						<h2><a href="https://www.instagram.com/joao__gugel/"><i class="fab fa-instagram"></i> joaogugel/instagram.com</a><h2>
					</div><!--socials-->
					<div class="clear"></div>
				</div><!--sobre-autor-->

				<div class="sobre-autor sbaut">
					<img alt="Luan" title="Luan" src="images/luan.jpg">
					<h2>Luan Fortes - Técnico</h2>
					<p>Técnico em Redes e Professor de TI, Luan é o responsável por todas as manutenções de redes.</p>
					<div class="socials">
						<h2><a href="https://www.facebook.com/luan.frost"><i class="fab fa-facebook-square"></i> luanfortes/facebook.com</a><h2>
						<br/>
						<h2><a href="https://www.instagram.com/luanfrost/"><i class="fab fa-instagram"></i> luanfortes/instagram.com</a><h2>
					</div><!--socials-->
					<div class="clear"></div>
				</div><!--sobre-autor-->
				
		<div class="clear"></div>		
		</div><!--container-->		
	</section><!--sobre-two-responsivo-->

	<!-- Fim sobre responsivo --> 

	<!-- Fim sobre -->

	<!-- Sessão serviços -->

	<section id="Serviços" class="servicos">
		<div class="container">
			
			<div class="servicos-info">
				<h2>Confira nossos serviços</h2>
				<i class="fas fa-angle-down"></i>
			</div><!--servicos-info-->

		<div class="clear"></div>	
			</div><!--container-->
		</section><!--servicos-->		
			
			<section class="servicos2">
				<div class="container">

			<div class="servicos-single">
				<div class="servico-img" style="order: 2;background-image: url('images/template.jpg');"></div>
				<div class="servicos-single-descricao">
				<h2>Pacote Light</h2>
				<p><i class="far fa-check-circle"></i>Mini Site</p>
				<p><i class="far fa-check-circle"></i>Site com até 3 páginas</p>
				<p><i class="far fa-check-circle"></i>Simples e objetivo</p>
				<p><i class="far fa-check-circle"></i>Desenvolvimento de portfólio</p>
				<p><i class="far fa-check-circle"></i>Possui dados institucionais e serviços prestados</p>
				<button>R$ 499,90 a R$ 999,90</button>
				</div><!--servicos--single-descricao-->
			</div><!--servicos-single-->

			<div class="servicos-single">
				<div class="servico-img" style="background-image: url('images/template2.jpg');"></div>
				<div class="servicos-single-descricao">
				<h2>Pacote Alpha</h2>
				<p><i class="far fa-check-circle"></i>Site Comercial</p>
				<p><i class="far fa-check-circle"></i>Não possui limites de páginas</p>
				<p><i class="far fa-check-circle"></i>Focado em serviços comerciais da empresa</p>
				<p><i class="far fa-check-circle"></i>E-mail marketing 2 vezes ao mês</p>
				<p><i class="far fa-check-circle"></i>Possui dados institucionais</p>
				<button>R$ 999,90 a R$ 2.499,90</button>
				</div><!--servicos--single-descricao-->
			</div><!--servicos-single-->

			<div class="servicos-single">
				<div class="servico-img" style="order: 2;background-image: url('images/template4.jpg');"></div>
				<div class="servicos-single-descricao">
				<h2>Pacote Turbo Alpha</h2>
				<p><i class="far fa-check-circle"></i>Site Empresarial</p>
				<p><i class="far fa-check-circle"></i>Não possui limites de páginas</p>
				<p><i class="far fa-check-circle"></i>Oferece serviços da corporação e mostra dados institucionais</p>
				<p><i class="far fa-check-circle"></i>E-mail marketing até 4 vezes ao mês</p>
				<p><i class="far fa-check-circle"></i>Desenvolvimento complexo do sistema e focado em otimização e automação de alta performance</p>
				<button>R$ 2.499,90 a R$9.999,90</button>
				</div><!--servicos--single-descricao-->
			</div><!--servicos-single-->

			</div><!--container-->
		</section><!--servicos2-->

	<!-- Fim serviços -->

	<!-- Ebooks -->

	<section id="Ebooks" class="ebook">
		<div class="container">
			<div class="line-cont"></div>
			<h2>Ebooks gratuitos da Alpha Castt</h2>
			<div class="ebook-single">

				<div class="ebook-solo">
					<img alt="Ebook" title="Ebook" src="images/ebook-junho.ico">
					<a href="images/ebook.pdf" download="ebook">Baixar ebook edição de junho/2020</a>
				</div><!--ebook-solo-->
			
				<div class="ebook-solo">
					<img alt="Ebook" title="Ebook" src="images/ebook.ico">
					<a href="images/ebook2.pdf" download="ebook">Baixar ebook edição de julho/2020</a>
				</div><!--ebook-solo-->

				<div class="ebook-solo">
					<img alt="Ebook" title="Ebook" src="images/ebook3.ico">
					<a href="images/ebook3.pdf" download="ebook">Baixar ebook edição de agosto/2020</a>
				</div><!--ebook-solo-->
			</div><!--ebook-single-->
		</div><!--container-->
	</section><!--ebook-->

	<!-- Fim Ebooks -->

	<!-- Depoimentos -->

	<section id="Depoimentos" class="depoimentos">
		<div class="line-cont"></div>
			<h2>DEPOIMENTOS</h2>
			<div class="container">

			<div class="depoimento-single">
				<quote>
					"Ótimo trabalho de vocês, ao contrário de outros profissionais que demoram muito para entregar o serviço, o de vocês foi além de rápido, muito bom. Recomendo a todos o trabalho!" 
					<br>
					<br>
					<br>
					15/06/2020
					<br>
					<br>
				</quote>
				<div class="nome-depoimento">
					<img src="images/andre.jpg"/>
					<span>André Escobar</span>
				</div><!--nome-depoimento-->	
			</div><!--depoimento-single-->

			<div class="depoimento-single">
				<quote>
					"Valeu muito o investimento, ficou outro computador. Ficou top!"
					<br>
					<br>
					<br>
					 20/05/2020 
					<br>
					<br>
				</quote>
				<div class="nome-depoimento">
					<img src="images/cliente.jpeg"/>
					<span>Gustavo Carvalho</span>
				</div><!--nome-depoimento-->	
			</div><!--depoimento-single-->

			<div class="depoimento-single">
				<quote>
					"Eu me apaixonei pela plataforma no momento em que vi, seu design limpo demonstra a qualidade do serviço de excelência prestado por esta agência."
					<br>
					<br>
					<br>
					( 19/06/2020 )
					<br>
					<br>
				</quote>
				<div class="nome-depoimento">
					<img src="images/lucas.jpg"/>
					<span>Lucas Lara</span>
				</div><!--nome-depoimento-->	
			</div><!--depoimento-single-->

			<div class="depoimento-single">
				<quote>
					"Indico demais!" 
					<br>
					<br>
					<br>
					24/07/2020
					<br>
					<br>
				</quote>
				<div class="nome-depoimento">
					<img src="images/fernando.jpg"/>
					<span>Fernando Kudrna</span>
				</div><!--nome-depoimento-->	
			</div><!--depoimento-single-->
			
			<div class="depoimento-single">
				<quote>
					"Recomendo a todos!!" 
					<br>
					<br>
					<br>
					20/06/2020
					<br>
					<br>
				</quote>
				<div class="nome-depoimento">
					<img src="images/nicholas.jpg"/>
					<span>Nicholas Matos</span>
				</div><!--nome-depoimento-->	
			</div><!--depoimento-single-->
		</div><!--container-->
	</section><!--depoimentos-->

	<!-- Fim depoimentos -->

	<!-- Sessão contato -->

	<section id="Contato" class="contato">
		<div class="container">
			<div class="line-cont"></div>
			<h2>Entre em contato conosco</h2>

			<form method="post" action="">
			<input type="text" name="nome" required="" placeholder="Seu nome...">
			<input type="text" name="email" required="" placeholder="Seu e-mail...">
			<input type="text" name="telefone" required="" placeholder="Seu telefone...">
			<textarea placeholder="Sua mensagem..." name="mensagem"></textarea>
			<input type="hidden" name="identificador" value="form_contato">
			<input type="submit" name="acao" value="Enviar">
			</form>
		</div><!--contato-->
	</section><!--contato-->

	<!-- Fim contato -->

	<div class="btn2">Subir</div>

	<!-- Sessão footer -->

	<footer>
		<div class="container">
			<div class="footer-block">
				<h2><i class="far fa-envelope"></i> Endereço</h2>
				<p>Rua Mario Godoy Ilha, 234, Cachoeira do Sul - RS</p>
				<p>contato@alphacastt.com.br</p>
				<p>arthurbandeirafc@gmail.com</p>
			</div><!--footer-block-->

			<div class="footer-block">
				<h2><i class="fas fa-phone-alt"></i> Horário de atendimento</h2>
				<p>De segunda a sábado</p>
				<p>Das 09:00 as 12:00 e das 14:30 as 19:00</p>
				<p>Telefone: (51) 99204-7788</p>
			</div><!--footer-block-->

			<div class="footer-block">
				<h2><i class="fas fa-share-alt"></i> Redes Sociais</h2>
				<p><a href="https://www.facebook.com/AlphaCastt-102620431471446"><i class="fab fa-facebook-square"></i> AlphaCastt@facebook.com</a></p>
				<p><a href="https://www.instagram.com/alpha_castt/"><i class="fab fa-instagram"></i> AlphaCastt@instagram.com</a></p>
				<p><a href="https://twitter.com/AlphaCastt"><i class="fab fa-twitter"></i> AlphaCastt@twitter.com</a></p>
			</div><!--footer-block-->

			<div class="clear"></div>
		</div><!--container-->
	</footer>

	<div class="rodapé bot">
		<div class="container">
			<img src="images/alphaazul.png">
			<p>Alpha Castt - Todos os direitos reservados @2020</p>
		</div><!--container-->		
	</div><!--rodapé-->

	<!-- Fim footer -->



	<!-- Scripts do site -->

	<script src="js/jquery.js"></script>
	<script src="js/menuScroll.js"></script>
	<script src="js/responsivo.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/form.js"></script>
	<script src="js/constants.js"></script>

	<!--<script>
		$('nav.mobile h3').click(function(){
			$('nav.mobile').find('ul').slideToggle();
		});
	</script>
	-->
	<!-- Fim Scripts --> 

</body>

</html>