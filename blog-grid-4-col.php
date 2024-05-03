	<!DOCTYPE html>
<html class="no-js vlt-is--blog-grid-4-col vlt-is--header-fullscreen vlt-is--footer-style-1 vlt-is--footer-fixed" lang="en">
<?php
session_start();
?>
<head>
<style>
        .gr{
            color: green;
        }
        .re{
            color: red;
        }
    </style>
	<meta charset="utf-8">
	<title>Cursos</title>
	<meta name="description" content="Creative &amp; Modern Agency HTML5 Template">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--Favicon-->
	<link rel="icon" type="image/svg" href="assets/img/root/favicon.svg">
	<!--Framework-->
	<link rel="stylesheet" href="assets/css/framework/bootstrap.min.css">
	<!--Fonts-->
	<link rel="stylesheet" href="assets/fonts/Swansea/style.css">
	<link rel="stylesheet" href="assets/fonts/Skape/style.css">
	<link rel="stylesheet" href="assets/fonts/Socicons/socicon.css">
	<!--Plugins-->
	<link rel="stylesheet" href="assets/css/vlt-plugins.min.css">
	<!--Style-->
	<link rel="stylesheet" href="assets/css/vlt-main.min.css">
	<!--Custom-->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
		<!--Site preloader-->
		<!--Site preloader-->
	<div class="vlt-site-preloader" data-animate-to="M0 0h202v66H0z">
		<style type="text/css">
.kosa {
    position: relative;
    width: 900px; /* Adjusted from 900px to 90% */
    height: 100px;
    left: 10%;
    transform: translateX(-10%);
}

/* Media query for small devices */
@media only screen and (max-width: 768px) {
    .kosa {
        width: 0px; /* Adjusted width for small devices */
    }
    .kosa::before {
    animation: drawSquare 0s forwards;
    }
}

/* Media query for medium devices */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .kosa {
        width: 0px; /* Adjusted width for medium devices */
    }
    .kosa::before {
    animation: drawSquare 0s forwards;
    }
}

.kul{
    position: relative;
}
.svg1{
  position: absolute;
  top: 0;
  left: 0;
}
.kul svg {
        position: absolute;
        top: 0;
        left: 0;
}
.kosa::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background-image: url( 'pre.svg' ); /* SVG data for a black square */
  background-size: auto 100%; /* Ensure the background image covers the height of the container */
  background-repeat: no-repeat;
  background-position: left center; /* Start the square from the left edge */
  animation: drawSquare 2s forwards; /* Apply the animation */
}

@keyframes drawSquare {
  0% {
    width: 0; /* Start with no width */
  }
  100% {
    width: 100%; /* End with full width */
  }
}
</style>
<div class="kosa">
</div>
</div>
	<!--Header-->
	<div class="d-none d-lg-block">
		<header class="vlt-header vlt-header--fullscreen">
			<div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top">
				<div class="container">
					<div class="vlt-navbar-inner">
						<div class="vlt-navbar-inner--left">
							<div class="d-flex align-items-center justify-content-center h-100">
								<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img class="black" src="assets/img/root/logo-black.png" alt="" style="height: 25px;" loading="lazy"><img class="white" src="assets/img/root/logo-white.png" alt="" style="height: 25px;" loading="lazy"></a>
							</div>
						</div>
						<div class="vlt-navbar-inner--right">
							<div class="d-flex align-items-center justify-content-center h-100">
								<!--Buttons-->
								<div class="vlt-navbar-buttons d-flex align-items-center"><a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span class="line-one"></span><span class="line-two"></span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav class="vlt-nav vlt-nav--fullscreen" data-submenu-effect="style-1">
			<div class="vlt-nav--fullscreen__mask"><svg xmlns="http://www.w3.org/2000/svg" width="895" height="267">
					<path fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="2" d="M376.98 63.08c22.08 0 39.72 4.8 52.92 14.4 13.2 9.6 22.68 22.44 28.44 38.52 5.76 16.08 8.64 33.6 8.64 52.56h0v9H334.86c0 15.36 4.08 27 12.24 34.92 7.92 8.16 19.08 12.24 33.48 12.24 7.44 0 14.28-2.04 20.52-6.12s10.2-9 11.88-14.76h51.84c-4.08 13.44-10.08 24.48-18 33.12-8.16 9.12-17.88 16.08-29.16 20.88-11.76 4.8-24.12 7.2-37.08 7.2-63.84 0-95.76-34.92-95.76-104.76 0-16.56 3.12-32.4 9.36-47.52 6.24-15.12 16.32-27.12 30.24-36 14.16-9.12 31.68-13.68 52.56-13.68zM81.06 1.16l46.44 204.12L174.66 1.16h78.12V260h-50.76V43.28l-.72.72-47.88 216h-53.28L52.98 43.28l-.72.72v216H1.5V1.16h79.56zm295.2 103.32c-22.56 0-35.64 13.68-39.24 41.04h78.12c-.96-12.24-5.04-22.32-12.24-30.24-7.2-7.2-16.08-10.8-26.64-10.8zM550.86 260V150.2c0-12 3.12-22.44 9.36-31.32 6.24-8.64 16.2-12.96 29.88-12.96 14.4 0 23.52 3.36 27.36 10.08 3.84 6.72 5.76 16.08 5.76 28.08V260h50.76V127.16c0-13.44-2.64-24.96-7.92-34.56-5.28-9.36-12.96-16.68-23.04-21.96-10.32-5.04-22.32-7.56-36-7.56-25.92 0-45.36 11.04-58.32 33.12V68.12h-48.6V260h50.76zm235.44 5.04c12.96 0 24.24-2.64 33.84-7.92 9.6-5.28 18-13.2 25.2-23.76V260h47.88V68.12h-50.04V179c0 10.56-1.92 18.96-5.76 25.2-3.84 6.72-8.88 11.4-15.12 14.04-6.48 2.88-12.6 4.32-18.36 4.32-21.6 0-32.4-11.88-32.4-35.64V68.12h-50.76v126.36c0 23.04 6 40.56 18 52.56s27.84 18 47.52 18z" />
				</svg>
			</div>
			<div class="vlt-nav-table">
				<div class="vlt-nav-row">
					<div class="vlt-nav--fullscreen__header">
						<div class="container">
							<div class="d-flex align-items-center justify-content-between">
								<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img src="assets/img/root/logo-black.png" alt="" style="height: 25px;" loading="lazy"></a><a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span class="line-one"></span><span class="line-two"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="vlt-nav-row vlt-nav-row--full vlt-nav-row--center">
					<div class="container">
						<div class="vlt-nav--fullscreen__navigation">
							<!--Navigation-->
							<!--Menu-->
							<ul class="sf-menu" data-back-text="Voltar">
								<li ><a href="index.html"><span>Início</span></a>
									
								</li>
								<li ><a href="blog-grid-4-col.php"><span>Cursos</span></a></li>
									
								<li ><a href="service-single.php"><span>Calculadora</span></a></li>
								<li ><a href="quizzzz.php"><span>Quiz</span></a></li>
								<li ><a href="contact-02.html"><span>Mapa</span></a></li>
								<li ><a href="curriculo.html"><span>Currículo</span></a></li>
									
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="d-lg-none d-sm-block">
		<header class="vlt-header vlt-header--fullscreen">
			<div class="vlt-navbar vlt-navbar--main vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top vlt-navbar--transparent vlt-navbar--sticky vlt-navbar--white-text-on-top">
				<div class="container">
					<div class="vlt-navbar-inner">
						<div class="vlt-navbar-inner--left">
							<div class="d-flex align-items-center justify-content-center h-100">
								<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img class="black" src="assets/img/root/logo-black.png" alt="" style="height: 25px;" loading="lazy"><img class="white" src="assets/img/root/logo-white.png" alt="" style="height: 25px;" loading="lazy"></a>
							</div>
						</div>
						<div class="vlt-navbar-inner--right">
							<div class="d-flex align-items-center justify-content-center h-100">
								<!--Buttons-->
								<div class="vlt-navbar-buttons d-flex align-items-center"><a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span class="line-one"></span><span class="line-two"></span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<nav class="vlt-nav vlt-nav--fullscreen" data-submenu-effect="style-1">
			<div class="vlt-nav--fullscreen__mask"><svg xmlns="http://www.w3.org/2000/svg" width="895" height="267">
					<path fill="none" fill-rule="nonzero" stroke="currentColor" stroke-width="2" d="M376.98 63.08c22.08 0 39.72 4.8 52.92 14.4 13.2 9.6 22.68 22.44 28.44 38.52 5.76 16.08 8.64 33.6 8.64 52.56h0v9H334.86c0 15.36 4.08 27 12.24 34.92 7.92 8.16 19.08 12.24 33.48 12.24 7.44 0 14.28-2.04 20.52-6.12s10.2-9 11.88-14.76h51.84c-4.08 13.44-10.08 24.48-18 33.12-8.16 9.12-17.88 16.08-29.16 20.88-11.76 4.8-24.12 7.2-37.08 7.2-63.84 0-95.76-34.92-95.76-104.76 0-16.56 3.12-32.4 9.36-47.52 6.24-15.12 16.32-27.12 30.24-36 14.16-9.12 31.68-13.68 52.56-13.68zM81.06 1.16l46.44 204.12L174.66 1.16h78.12V260h-50.76V43.28l-.72.72-47.88 216h-53.28L52.98 43.28l-.72.72v216H1.5V1.16h79.56zm295.2 103.32c-22.56 0-35.64 13.68-39.24 41.04h78.12c-.96-12.24-5.04-22.32-12.24-30.24-7.2-7.2-16.08-10.8-26.64-10.8zM550.86 260V150.2c0-12 3.12-22.44 9.36-31.32 6.24-8.64 16.2-12.96 29.88-12.96 14.4 0 23.52 3.36 27.36 10.08 3.84 6.72 5.76 16.08 5.76 28.08V260h50.76V127.16c0-13.44-2.64-24.96-7.92-34.56-5.28-9.36-12.96-16.68-23.04-21.96-10.32-5.04-22.32-7.56-36-7.56-25.92 0-45.36 11.04-58.32 33.12V68.12h-48.6V260h50.76zm235.44 5.04c12.96 0 24.24-2.64 33.84-7.92 9.6-5.28 18-13.2 25.2-23.76V260h47.88V68.12h-50.04V179c0 10.56-1.92 18.96-5.76 25.2-3.84 6.72-8.88 11.4-15.12 14.04-6.48 2.88-12.6 4.32-18.36 4.32-21.6 0-32.4-11.88-32.4-35.64V68.12h-50.76v126.36c0 23.04 6 40.56 18 52.56s27.84 18 47.52 18z" />
				</svg>
			</div>
			<div class="vlt-nav-table">
				<div class="vlt-nav-row">
					<div class="vlt-nav--fullscreen__header">
						<div class="container">
							<div class="d-flex align-items-center justify-content-between">
								<!--Logo--><a class="vlt-navbar-logo" href="index.html"><img src="assets/img/root/logo-black.png" alt="" style="height: 25px;" loading="lazy"></a><a class="vlt-menu-burger js-fullscreen-menu-toggle" href="#"><span class="line-one"></span><span class="line-two"></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="vlt-nav-row vlt-nav-row--full vlt-nav-row--center">
					<div class="container">
						<div class="vlt-nav--fullscreen__navigation">
							<!--Navigation-->
							<!--Menu-->
								<ul class="sf-menu" data-back-text="Voltar">
								<li class="menu-item-has-children"><a href="index.html"><span>Início</span></a>
									<ul class="sub-menu">
										<li><a href="index.html"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="blog-grid-4-col.php"><span>Cursos</span></a>
									<ul class="sub-menu">
										<li><a href="blog-grid-4-col.php"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="service-single.php"><span>Calculadora</span></a>
									<ul class="sub-menu">
										<li><a href="service-single.php"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="quizzzz.php"><span>Quiz</span></a>
									<ul class="sub-menu">
										<li><a href="quizzzz.php"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="contact-02.html"><span>Mapa</span></a>
									<ul class="sub-menu">
										<li><a href="contact-02.html"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
								<li class="menu-item-has-children"><a href="curriculo.html"><span>Currículo</span></a>
									<ul class="sub-menu">
										<li><a href="curriculo.html"><span>Prosseguir</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="vlt-nav-row">
					<div class="vlt-gap-60"></div>
				</div>
			</div>
		</nav>
	</div>
	<!--Site overlay-->
	<div class="vlt-site-overlay"></div>
	<!--Main-->
	<main class="vlt-main">
		<!--Page content-->
		<div class="vlt-page-content">
			<!--Page title-->
			<div class="vlt-page-title vlt-page-title--style-2 jarallax"><img class="jarallax-img" src="assets/img/projects-title-01.png" alt="" loading="lazy">
				<div class="vlt-page-title__overlay"></div>
				<div class="container">
					<h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)" data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Cursos
					</h1>
				</div>
			</div>
			<div id="content"></div>
			<!--Section-->
			<section>
				<div class="vlt-gap-120"></div>
				<div class="container">
					<div class="text-center">
						<ul class="vlt-isotope-filters" id="vlt-filter-blog-04">
							<li class="active" data-filter="*"><span>Todos</span></li>
							<li data-filter=".real" id="real"><span>Realista</span></li>
							<li data-filter=".inv" id="inv"><span>Investigação</span></li>
							<li data-filter=".art" id="art"><span>Artístico</span></li>
							<li data-filter=".soc" id="soc"><span>Social</span></li>
							<li data-filter=".ent" id="ent"><span>Enterprising</span></li>
							<li data-filter=".conv" id="con"><span>Convencional</span></li>
						</ul>
					</div>
					<script>
  var linkId = "<?php echo $_SESSION['id']; ?>";
    window.onload = function() {
        var link = document.getElementById(linkId);
        link.click();
    };
</script>
					<div class="vlt-gap-90"></div>
					<div class="vlt-isotope-grid" data-columns="4" data-layout="masonry" data-x-gap="30|30" data-y-gap="70|70" data-controls="#vlt-filter-blog-04" data-load-more-selector="#vlt-load-more-blog-04">
						<div class="grid-sizer"></div>
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Informática.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IS. Técnico</span><span>18.1</span>
										</div>
										<span id="textToHighlight"><h3 class="vlt-post-title"><a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-informatica-e-de-computadores/">Engenharia Informática</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight');
                                        if (s >= 18.1) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 18.1) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
								</div>
							</article>
						</div>
						
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Arquitetura.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>17.7</span>
										</div>
										<span id="textToHighlight1"><h3 class="vlt-post-title"><a href="https://www.eaad.uminho.pt/pt/Ensino/Licenciaturas_e_Mestrados_Integrados/Mestrado-Integrado-em-Arquitetura/Paginas/default.aspx">Arquitetura</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight1');
                                        if (s >= 17.7) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.7) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						
						<div class=" grid-item ent">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Gestão.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>18.1</span>
										</div>
										<span id="textToHighlight2"><h3 class="vlt-post-title"><a href="https://sigarra.up.pt/fep/pt/cur_geral.cur_view?pv_curso_id=1046">Gestão</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight2');
                                        if (s >= 18.1) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 18.1) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item soc">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Psicologia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>17.9</span>
										</div>
										<span id="textToHighlight3"><h3 class="vlt-post-title"><a href="https://sigarra.up.pt/fpceup/pt/cur_geral.cur_view?pv_curso_id=22381">Psicologia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight3');
                                        if (s >= 17.9) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.9) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Desenho.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>17.6</span>
										</div>
										<span id="textToHighlight4"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/desenho">Desenho</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight4');
                                        if (s >= 17.6) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.6) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Mecânica.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>17.8</span>
										</div>
										<span id="textToHighlight5"><h3 class="vlt-post-title"><a href="https://sigarra.up.pt/feup/pt/cur_geral.cur_view?pv_curso_id=22882">Engenharia Mecânica</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight5');
                                        if (s >= 17.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia de materias.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>15.0</span>
										</div>
										<span id="textToHighlight6"><h3 class="vlt-post-title"><a href="https://sigarra.up.pt/feup/pt/cur_geral.cur_view?pv_curso_id=22902">Engenharia de Materiais</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight6');
                                        if (s >= 15) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 15) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item conv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia de Polímeros.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>13.4</span>
										</div>
										<span id="textToHighlight7"><h3 class="vlt-post-title"><a href="https://www.eng.uminho.pt/pt/estudar/_layouts/15/uminho.portaisuoei.ui/pages/catalogocursodetail.aspx?itemid=4372&catid=13">Engenharia de Polímeros</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight7');
                                        if (s >= 13.4) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 13.4) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item ent">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Gestão de Marketing.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IU. Lisboa</span><span>16.7</span>
										</div>
										<span id="textToHighlight8"><h3 class="vlt-post-title"><a href="https://www.iscte-iul.pt/curso/59/licenciatura-gestao-de-marketing">Gestão de Marketing</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight8');
                                        if (s >= 16.7) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16.7) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Design de Equipamento.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>16.0</span>
										</div>
										<span id="textToHighlight9"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/design-de-equipamento">Design de Equipamento</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight9');
                                        if (s >= 16) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia do Ambiente.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IS. Técnico</span><span>14.9</span>
										</div>
										<span id="textToHighlight10"><h3 class="vlt-post-title"><a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-do-ambiente/">Engenharia do Ambiente</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight10');
                                        if (s >= 14.9) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 14.9) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item soc">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Educação e Formação.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>13.8</span>
										</div>
										<span id="textToHighlight11"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/educacao-e-formacao">Educação e Formação</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight11');
                                        if (s >= 13.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 13.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item soc">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Administração Pública.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>16.0</span>
										</div>
										<span id="textToHighlight12"><h3 class="vlt-post-title"><a href="https://www.eeg.uminho.pt/pt/estudar/Licenciaturas/Paginas/administracao-publica.aspx">Administração Pública</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight12');
                                        if (s >= 16) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item soc">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Direito.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. NOVA Lisboa</span><span>17.6</span>
										</div>
										<span id="textToHighlight13"><h3 class="vlt-post-title"><a href="https://novalaw.unl.pt/licenciatura/">Direito</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight13');
                                        if (s >= 17.6) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.6) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Biologia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>16.7</span>
										</div>
										<span id="textToHighlight14"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/biologia">Biologia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight14');
                                        if (s >= 16.7) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16.7) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Física.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>17.0</span>
										</div>
										<span id="textToHighlight15"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/fisica">Física</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight15');
                                        if (s >= 17) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Química.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>12.8</span>
										</div>
										<span id="textToHighlight16"><h3 class="vlt-post-title"><a href="https://www.ecum.uminho.pt/pt/Ensino/Paginas/licenciaturas/Licenciatura-em-Quimica.aspx">Química</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight16');
                                        if (s >= 12.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 12.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Geologia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>14.4</span>
										</div>
										<span id="textToHighlight17"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/geologia">Geologia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight17');
                                        if (s >= 17.9) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.9) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Medicina.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>18.6</span>
										</div>
										<span id="textToHighlight18"><h3 class="vlt-post-title"><a href="https://www.med.uminho.pt/pt/Medicina">Medicina</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight18');
                                        if (s >= 18.6) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 18.6) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Design de Cominicação.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>17.1</span>
										</div>
										<span id="textToHighlight19"><h3 class="vlt-post-title"><a href="https://sigarra.up.pt/fbaup/pt/cur_geral.cur_view?pv_curso_id=1314">Design de Comunicação</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight19');
                                        if (s >= 17.1) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.1) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Arte Multimédia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>17.1</span>
										</div>
										<span id="textToHighlight20"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/arte-multimedia">Arte Multimédia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight20');
                                        if (s >= 17.1) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.1) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item conv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Mecânica.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>11.7</span>
										</div>
										<span id="textToHighlight21"><h3 class="vlt-post-title"><a href="https://www.eng.uminho.pt/pt/estudar/_layouts/15/uminho.portaisuoei.ui/pages/catalogocursodetail.aspx?itemid=3554&catid=10">Engenharia Têxtil</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight21');
                                        if (s >= 11.7) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 11.7) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item ent">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Contabilidade.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>16.8</span>
										</div>
										<span id="textToHighlight22"><h3 class="vlt-post-title"><a href="https://www.eeg.uminho.pt/pt/estudar/Licenciaturas/Paginas/contabilidade.aspx">Contabilidade</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight22');
                                        if (s >= 16.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Civil.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Beira Interior</span><span>15.2</span>
										</div>
										<span id="textToHighlight23"><h3 class="vlt-post-title"><a href="https://www.ubi.pt/curso/9">Engenharia Civil</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight23');
                                        if (s >= 15.2) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 15.2) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						
						<div class=" grid-item ent">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Economia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>17.4</span>
										</div>
										<span id="textToHighlight24"><h3 class="vlt-post-title"><a href="https://cursos.fep.up.pt/licenciaturas/economia-licenciaturas/">Economia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight24');
                                        if (s >= 17.4) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.4) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Matemática.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>16.0</span>
										</div>
										<span id="textToHighlight25"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/matematica">Matemática</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight25');
                                        if (s >= 16) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Biomédica.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IS. Técnico</span><span>17.8</span>
										</div>
										<span id="textToHighlight26"><h3 class="vlt-post-title"><a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-biomedica/">Engenharia Biomédica</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight26');
                                        if (s >= 17.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 17.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						
						<div class=" grid-item soc">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Sociologia.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. NOVA Lisboa</span><span>15.1</span>
										</div>
										<span id="textToHighlight27"><h3 class="vlt-post-title"><a href="https://www.fcsh.unl.pt/cursos/licenciatura_em_sociologia/">Sociologia</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight27');
                                        if (s >= 15.1) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 15.1) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item inv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Física e Tecnologica.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IS. Técnico</span><span>18.8</span>
										</div>
										<span id="textToHighlight29"><h3 class="vlt-post-title"><a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-fisica-tecnologica/">Engenharia Física e Tecnológica</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight29');
                                        if (s >= 18.8) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 18.8) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item conv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia e Gestão Industrial.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Porto</span><span>18.7</span>
										</div>
										<span id="textToHighlight30"><h3 class="vlt-post-title"><a href="https://fe.up.pt/estudar/cursos/licenciatura-engenharia-gestao-industrial/">Enegenharia e Gestão Industrial</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight30');
                                        if (s >= 18.7) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 18.7) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item conv">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia e Gestão de Sistemas de Informação.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Minho</span><span>14.2</span>
										</div>
										<span id="textToHighlight31"><h3 class="vlt-post-title"><a href="https://www.uminho.pt/pt/ensino/oferta-educativa/cursos-conferentes-a-grau/_layouts/15/uminho.portalum.ui/pages/catalogocursodetail.aspx?itemid=4078&catid=12">Engenharia e Gestão de Sistemas de Informação</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight31');
                                        if (s >= 14.2) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 14.2) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item art">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Ciências da Arte e do Património.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>U. Lisboa</span><span>15.4</span>
										</div>
										<span id="textToHighlight32"><h3 class="vlt-post-title"><a href="https://www.ulisboa.pt/curso/licenciatura/ciencias-da-arte-e-do-patrimonio">Ciências da Arte e do Património</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight32');
                                        if (s >= 15.4) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 15.4) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
						<div class=" grid-item real">
							<!--Blog item-->
							<article class="vlt-post vlt-post--style-2">
								<div class="vlt-post__media"><a class="vlt-post__link" href="#"></a><img src="cursosimg/Engenharia Naval e Oceânica.png" alt="" loading="lazy">
								</div>
								<div class="vlt-post__content">
									<header class="vlt-post__header">
										<div class="vlt-post-meta"><span>IS. Técnico</span><span>16.6</span>
										</div>
										<span id="textToHighlight33"><h3 class="vlt-post-title"><a href="https://tecnico.ulisboa.pt/pt/ensino/cursos/licenciaturas/engenharia-naval-e-oceanica/">Engenharia Naval e Oceânica</a>
										</h3></span>
                                        <script>
                                        var s = <?php echo $_SESSION['media']; ?>;

                                        var textElement = document.getElementById('textToHighlight33');
                                        if (s >= 16.6) {
                                        textElement.classList.add('gr');
                                        }
                                        else if (s < 16.6) {
                                        textElement.classList.add('re');
                                        }
                                        else {

                                        }
                                        </script>
									</header>
									
								</div>
							</article>
						</div>
					</div>
					<div class="vlt-gap-100"></div>
					<div class="text-center">					</div>
				</div>
				<div class="vlt-gap-120"></div>
			</section>
		</div>
	</main>
	<!--Footer-->
	<footer class="vlt-footer vlt-footer--style-1 vlt-footer--fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<!--Widget-->
					<div class="vlt-widget vlt-widget--html vlt-widget--white"><a href="index.html"><img src="assets/img/root/logo-white.png" alt="" style="height: 30px;" loading="lazy"></a></div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<!--Widget-->
					<div class="vlt-widget vlt-widget--text vlt-widget--white">
						<ul>
							<li>Todos os direitos </li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<!--Widget-->
					<div class="vlt-widget vlt-widget--text vlt-widget--white">
						<ul>
							<li>Code Crusaders Lda.</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<!--Widget-->
					<div class="vlt-widget vlt-widget--text vlt-widget--white">
						<p>32 Américo Rodrigues Barbosa
					</div>
				</div>
				<div class="col-lg-2 col-sm-6">
					<!--Widget-->
					<div class="vlt-widget vlt-widget--text vlt-widget--white"><a href="mailto:codeecrusaders@gmail.com">codeecrusaders@gmail.com</a></div>
				</div>
			</div>
		</div>
	</footer>
	<!--Cursor-->
	<div class="vlt-cursor">
		<div class="outer">
			<div class="circle"></div>
		</div>
		<div class="inner">
			<div class="icon"><i class="icon-arrow-top-right"></i></div>
		</div>
	</div>
	<!--Libs-->
	<script src="assets/vendors/jquery-3.5.1.min.js"></script>
	<script src="assets/scripts/vlt-plugins.min.js"></script>
	<script src="assets/scripts/vlt-helpers.js"></script>
	<script src="assets/scripts/vlt-controllers.min.js"></script>
</body>

</html>
<style type="text/css">
	#textToHighlight h3.vlt-post-title {
        color: inherit !important;
    }
    #textToHighlight1 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight2 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight3 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight4 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight5 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight6 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight7 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight8 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight9 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight10 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight11 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight12 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight13 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight14 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight15 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight16 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight17 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight18 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight19 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight20 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight21 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight22 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight23 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight24 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight25 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight26 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight27 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight28 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight29 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight30 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight31 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight32 h3.vlt-post-title {
        color: inherit !important;
    }

    #textToHighlight33 h3.vlt-post-title {
        color: inherit !important;
    }
</style>