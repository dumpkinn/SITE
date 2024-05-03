<!DOCTYPE html>
<html class="no-js vlt-is--service-single vlt-is--header-fullscreen vlt-is--footer-style-1 vlt-is--footer-fixed" lang="en">
<?php session_start(); ?>
<head>
	<script src="https://kit.fontawesome.com/e686372ebd.js" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/da9e2d50d8.js" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Quiz</title>
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
    <style type="text/css">
.meco {
    float: right;
    max-width: 20px;
    margin-top: 1.2%;
    margin-right: 18%;
}

/* Media query for small devices */
@media only screen and (max-width: 768px) {
    .meco {
        margin-top: 2.3%;
        margin-right: 28%;
    }
}

/* Media query for medium devices */
@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .meco {
        margin-top: 1.5%;
        margin-right: 19%;
    }
}

/* Media query for large devices */
@media only screen and (min-width: 1025px) {
    .meco {
        margin-top: 1.2%;
        margin-right: 18%;
    }
}


.mico{
	background-color: #101010;
	max-width: 900px;
	height: 80px;
}
.maco{
	float: left;
}
    button {
    display: block;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
    width: 96%;
}
.container3 img{
  max-width: 200px;
  justify-content: center;
  margin: auto;

}
.container3 figcaption{
  text-align: center;
}
.container3{
  max-width: 850px;
  margin: auto;
}

button:hover {
   
}
        .img_div { float: left; }
        [type=radio] { 
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}
[type=radio] img {
  cursor: pointer;
}
[type=radio]:checked img {
  outline: 2px solid #f00;
}
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.cc-selector-2 input{
    position:absolute;
    z-index:999;
}
.cc-selector-2 input:active +.drinkcard-cc, .cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector-2 input:checked +.drinkcard-cc, .cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.cc-selector-2 input{ margin: 5px 0 0 12px; }
.cc-selector-2 label{ margin-left: 7px; }
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.8) grayscale(1) opacity(.7);
       -moz-filter: brightness(1.8) grayscale(1) opacity(.7);
            filter: brightness(1.8) grayscale(1) opacity(.7);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}
.visa{background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3_-obTn0DZXkN1gEqr15R0Od_Icndc__lKLE88hBjjg&s);}
.mastercard{background-image:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRq6HyM_SlUH34PMKesxgDd3WTMh_db7rvsD6r7Uisf1Q&s);}

.vlt-swiper-button-next:hover{color: #e82e31;
}
.vlt-swiper-button-prev:hover{color: #e82e31;
}
.vlt-swiper-button-next{color: #ffffff;
}
.vlt-swiper-button-prev{color: #ffffff;
}
.vrmh:hover{color: #e82e31;
}
.vrmh{transition: 0.3s;}
    </style>
</head>
<body>
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
  left: -140;
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
   background-image: url('pre.svg'); /* SVG data for a black square */
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
			<div class="vlt-page-title vlt-page-title--style-2 jarallax"><img class="jarallax-img" src="assets/img/service-image-08.png" alt="" loading="lazy">
				<div class="vlt-page-title__overlay"></div>
				<div class="container">
					<h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)" data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Quiz
					</h1>
				</div>
			</div>
			<div id="content"></div>
			<!--Section-->
			<style type="text/css">


			</style>
   <div class="vlt-gap-120"></div>
   <div class="form-container">
	<div class="row">
	<div class="col-md-6 offset-md-3 text-center">
    <div class="vlt-section-title vlt-section-title--style-1"><p class="vlt-section-title__text">Para cada uma das questões escolhe a opção que apresenta a situação em que preferias estar e a opção que menos gostarias de vivenciar. Quando submeteres as tuas respostas será assinalado um tipo de personalidade e terás a opção de veres os cursos que nós achamos que deves escolher. Para saberes que cursos tens média para entrar <a href="service-single.php"> calcula-a aqui.</a></p></div></div></div>
    <br><br><br>
    <div class="container3">
<form action="quiz.php" id="myForm" method="post">
<!--Content slider-->
									<div class="vlt-content-slider " data-navigation-anchor=".vlt-careers-single-slider-anchor" data-gap="" data-loop="" data-speed="" data-autoplay="" data-autoplay-speed="" data-slides-centered="" data-slide-settings="{}" data-free-mode="" data-slider-offset="" data-mousewheel="">
										<div class="swiper-container">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 1</h1><br>
          <div class="img_div"><figcaption>Ir para o escritório</figcaption><img src="quizimg/q11.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" id="visa" value="-1"/>
          <label class="drinkcard-cc visa"  for="visa"></label>
          <input type="radio" name="u1" id="mastercard" value="1" />
          <label class="drinkcard-cc mastercard"  for="mastercard"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Investigador</figcaption><img src="quizimg/q12.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="2" id="visa1"/>
          <label class="drinkcard-cc visa" for="visa1"></label>
          <input type="radio" name="u1" value="-2" id="mastercard1"/>
          <label class="drinkcard-cc mastercard"  for="mastercard1"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Arquiteto e Engenheiro</figcaption><img src="quizimg/q13.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="1" id="visa2"/>
          <label class="drinkcard-cc visa"  for="visa2"></label>
          <input type="radio" name="u1" value="-1" id="mastercard2"/>
          <label class="drinkcard-cc mastercard"  for="mastercard2"></label>
          </div>
          </div>
          <div class="img_div"><figcaption>Fotografia Creativa</figcaption><img src="quizimg/q14.png"><br><br>
          <div class="cc-selector">
          <input type="radio" name="q1" value="-2" id="visa3"/>
          <label class="drinkcard-cc visa"  for="visa3"></label>
          <input type="radio" name="u1" value="2" id="mastercard3"/>
          <label class="drinkcard-cc mastercard"  for="mastercard3"></label>
          </div>
          </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 2</h1><br>     
<div class="img_div"><figcaption>Leiloeiro</figcaption><img src="quizimg/q21.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" id="visa4" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa4"></label>
  <input type="radio" name="u2" id="mastercard4" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard4"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Professor</figcaption><img src="quizimg/q22.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="-1" id="visa5"/>
  <label class="drinkcard-cc visa" for="visa5"></label>
  <input type="radio" name="u2" value="1" id="mastercard5"/>
  <label class="drinkcard-cc mastercard"  for="mastercard5"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Mecânico</figcaption><img src="quizimg/q23.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="1" id="visa6"/>
  <label class="drinkcard-cc visa"  for="visa6"></label>
  <input type="radio" name="u2" value="-1" id="mastercard6"/>
  <label class="drinkcard-cc mastercard"  for="mastercard6"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Químico</figcaption><img src="quizimg/q24.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q2" value="2" id="visa7"/>
  <label class="drinkcard-cc visa"  for="visa7"></label>
  <input type="radio" name="u2" value="-2" id="mastercard7"/>
  <label class="drinkcard-cc mastercard"  for="mastercard7"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 3</h1><br>
<div class="img_div"><figcaption>Monitoriza e regista</figcaption><img src="quizimg/q31.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" id="visa8" value="2"/>
  <label class="drinkcard-cc visa"  for="visa8"></label>
  <input type="radio" name="u3" id="mastercard8" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard8"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Vende e convence</figcaption><img src="quizimg/q32.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="1" id="visa9"/>
  <label class="drinkcard-cc visa" for="visa9"></label>
  <input type="radio" name="u3" value="-1" id="mastercard9"/>
  <label class="drinkcard-cc mastercard"  for="mastercard9"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Desenha e pinta</figcaption><img src="quizimg/q33.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="-2" id="visa10"/>
  <label class="drinkcard-cc visa"  for="visa10"></label>
  <input type="radio" name="u3" value="2" id="mastercard10"/>
  <label class="drinkcard-cc mastercard"  for="mastercard10"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ajuda</figcaption><img src="quizimg/q34.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q3" value="-1" id="visa11"/>
  <label class="drinkcard-cc visa"  for="visa11"></label>
  <input type="radio" name="u3" value="1" id="mastercard11"/>
  <label class="drinkcard-cc mastercard"  for="mastercard11"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 4</h1><br>
<div class="img_div"><figcaption>Trabalhador Social</figcaption><img src="quizimg/q41.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" id="visa12" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa12"></label>
  <input type="radio" name="u4" id="mastercard12" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard12"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Administrador</figcaption><img src="quizimg/q42.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="2" id="visa13"/>
  <label class="drinkcard-cc visa" for="visa13"></label>
  <input type="radio" name="u4" value="-    2" id="mastercard13"/>
  <label class="drinkcard-cc mastercard"  for="mastercard13"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Bombeiro</figcaption><img src="quizimg/q43.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="1" id="visa14"/>
  <label class="drinkcard-cc visa"  for="visa14"></label>
  <input type="radio" name="u4" value="-1" id="mastercard14"/>
  <label class="drinkcard-cc mastercard"  for="mastercard14"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Gerente</figcaption><img src="quizimg/q44.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" value="-2" id="visa15"/>
  <label class="drinkcard-cc visa"  for="visa15"></label>
  <input type="radio" name="u4" value="2" id="mastercard15"/>
  <label class="drinkcard-cc mastercard"  for="mastercard15"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 5</h1><br>
<div class="img_div"><figcaption>Criação de joalharia</figcaption><img src="quizimg/q51.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" id="visa16" value="1"/>
  <label class="drinkcard-cc visa"  for="visa16"></label>
  <input type="radio" name="u5" id="mastercard16" value="-1" />
  <label class="drinkcard-cc mastercard"  for="mastercard16"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Guiar crianças</figcaption><img src="quizimg/q52.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="-2" id="visa17"/>
  <label class="drinkcard-cc visa" for="visa17"></label>
  <input type="radio" name="u5" value="2" id="mastercard17"/>
  <label class="drinkcard-cc mastercard"  for="mastercard17"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Diagnósticos</figcaption><img src="quizimg/q53.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="2" id="visa18"/>
  <label class="drinkcard-cc visa"  for="visa18"></label>
  <input type="radio" name="u5" value="-2" id="mastercard18"/>
  <label class="drinkcard-cc mastercard"  for="mastercard18"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Tirar notas</figcaption><img src="quizimg/q54.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q5" value="-1" id="visa19"/>
  <label class="drinkcard-cc visa"  for="visa19"></label>
  <input type="radio" name="u5" value="1" id="mastercard19"/>
  <label class="drinkcard-cc mastercard"  for="mastercard19"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 6</h1><br>  
<div class="img_div"><figcaption>Esboça e desenha</figcaption><img src="quizimg/q61.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" id="visa20" value="1"/>
  <label class="drinkcard-cc visa"  for="visa20"></label>
  <input type="radio" name="u6" id="mastercard20" value="-1" />
  <label class="drinkcard-cc mastercard"  for="mastercard20"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Mecânico</figcaption><img src="quizimg/q62.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="2" id="visa21"/>
  <label class="drinkcard-cc visa" for="visa21"></label>
  <input type="radio" name="u6" value="-2" id="mastercard21"/>
  <label class="drinkcard-cc mastercard"  for="mastercard21"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ajuda deficientes</figcaption><img src="quizimg/q63.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="-2" id="visa22"/>
  <label class="drinkcard-cc visa"  for="visa22"></label>
  <input type="radio" name="u6" value="2" id="mastercard22"/>
  <label class="drinkcard-cc mastercard"  for="mastercard22"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Gerente de negócios</figcaption><img src="quizimg/q64.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q6" value="-1" id="visa23"/>
  <label class="drinkcard-cc visa"  for="visa23"></label>
  <input type="radio" name="u6" value="1" id="mastercard23"/>
  <label class="drinkcard-cc mastercard"  for="mastercard23"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 7</h1><br>
<div class="img_div"><figcaption>Estudar</figcaption><img src="quizimg/q71.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" id="visa24" value="2"/>
  <label class="drinkcard-cc visa"  for="visa24"></label>
  <input type="radio" name="u7" id="mastercard24" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard24"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Estilista e decorar</figcaption><img src="quizimg/q72.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="-2" id="visa25"/>
  <label class="drinkcard-cc visa" for="visa25"></label>
  <input type="radio" name="u1" value="2" id="mastercard25"/>
  <label class="drinkcard-cc mastercard"  for="mastercard25"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Faz negócios</figcaption><img src="quizimg/q73.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="-1" id="visa26"/>
  <label class="drinkcard-cc visa"  for="visa26"></label>
  <input type="radio" name="u7" value="1" id="mastercard26"/>
  <label class="drinkcard-cc mastercard"  for="mastercard26"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arranja</figcaption><img src="quizimg/q74.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q7" value="1" id="visa28"/>
  <label class="drinkcard-cc visa"  for="visa28"></label>
  <input type="radio" name="u7" value="-2" id="mastercard28"/>
  <label class="drinkcard-cc mastercard"  for="mastercard28"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 8</h1><br> 
<div class="img_div"><figcaption>Conselheiro Social</figcaption><img src="quizimg/q81.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" id="visa29" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa29"></label>
  <input type="radio" name="u8" id="mastercard29" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard29"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Cientista molecular</figcaption><img src="quizimg/q82.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="2" id="visa30"/>
  <label class="drinkcard-cc visa" for="visa30"></label>
  <input type="radio" name="u8" value="-2" id="mastercard30"/>
  <label class="drinkcard-cc mastercard"  for="mastercard30"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Contabilista</figcaption><img src="quizimg/q83.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="-1" id="visa31"/>
  <label class="drinkcard-cc visa"  for="visa31"></label>
  <input type="radio" name="u8" value="1" id="mastercard31"/>
  <label class="drinkcard-cc mastercard"  for="mastercard31"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Veterinário</figcaption><img src="quizimg/q84.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q8" value="1" id="visa32"/>
  <label class="drinkcard-cc visa"  for="visa32"></label>
  <input type="radio" name="u8" value="-1" id="mastercard32"/>
  <label class="drinkcard-cc mastercard"  for="mastercard32"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 9</h1><br>
<div class="img_div"><figcaption>CEO</figcaption><img src="quizimg/q91.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" id="visa33" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa33"></label>
  <input type="radio" name="u9" id="mastercard33" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard33"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Administração</figcaption><img src="quizimg/q92.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="1" id="visa34"/>
  <label class="drinkcard-cc visa" for="visa34"></label>
  <input type="radio" name="u9" value="-1" id="mastercard34"/>
  <label class="drinkcard-cc mastercard"  for="mastercard34"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ganhar conhecimento</figcaption><img src="quizimg/q93.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="2" id="visa35"/>
  <label class="drinkcard-cc visa"  for="visa35"></label>
  <input type="radio" name="u9" value="-2" id="mastercard35"/>
  <label class="drinkcard-cc mastercard"  for="mastercard35"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arquitetura e terreno</figcaption><img src="quizimg/q94.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="-1" id="visa36"/>
  <label class="drinkcard-cc visa"  for="visa36"></label>
  <input type="radio" name="u9" value="1" id="mastercard36"/>
  <label class="drinkcard-cc mastercard"  for="mastercard36"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 10</h1><br>
<div class="img_div"><figcaption>Mécnico dentário</figcaption><img src="quizimg/q101.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" id="visa37" value="2"/>
  <label class="drinkcard-cc visa"  for="visa37"></label>
  <input type="radio" name="u10" id="mastercard37" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard37"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Anfitrião</figcaption><img src="quizimg/q102.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="-2" id="visa38"/>
  <label class="drinkcard-cc visa" for="visa38"></label>
  <input type="radio" name="u10" value="2" id="mastercard38"/>
  <label class="drinkcard-cc mastercard"  for="mastercard38"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Desenha</figcaption><img src="quizimg/q103.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="1" id="visa39"/>
  <label class="drinkcard-cc visa"  for="visa39"></label>
  <input type="radio" name="u10" value="-1" id="mastercard39"/>
  <label class="drinkcard-cc mastercard"  for="mastercard39"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Secretário de Informação</figcaption><img src="quizimg/q104.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q10" value="-1" id="visa40"/>
  <label class="drinkcard-cc visa"  for="visa40"></label>
  <input type="radio" name="u10" value="1" id="mastercard40"/>
  <label class="drinkcard-cc mastercard"  for="mastercard40"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 11</h1><br>
<div class="img_div"><figcaption>Controlador</figcaption><img src="quizimg/q111.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" id="visa41" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa41"></label>
  <input type="radio" name="u11" id="mastercard41" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard41"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Corretor de bolsa</figcaption><img src="quizimg/q112.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="-2" id="visa42"/>
  <label class="drinkcard-cc visa" for="visa42"></label>
  <input type="radio" name="u11" value="2" id="mastercard42"/>
  <label class="drinkcard-cc mastercard"  for="mastercard42"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Analista de informação</figcaption><img src="quizimg/q113.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="1" id="visa43"/>
  <label class="drinkcard-cc visa"  for="visa43"></label>
  <input type="radio" name="u11" value="-1" id="mastercard43"/>
  <label class="drinkcard-cc mastercard"  for="mastercard43"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Engenheiro</figcaption><img src="quizimg/q114.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q11" value="2" id="visa44"/>
  <label class="drinkcard-cc visa"  for="visa44"></label>
  <input type="radio" name="u11" value="-2" id="mastercard44"/>
  <label class="drinkcard-cc mastercard"  for="mastercard44"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 12</h1><br>
<div class="img_div"><figcaption>Ciência</figcaption><img src="quizimg/q121.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" id="visa45" value="2"/>
  <label class="drinkcard-cc visa"  for="visa45"></label>
  <input type="radio" name="u12" id="mastercard45" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard45"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ferramentas</figcaption><img src="quizimg/q122.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="1" id="visa46"/>
  <label class="drinkcard-cc visa" for="visa46"></label>
  <input type="radio" name="u12" value="-1" id="mastercard46"/>
  <label class="drinkcard-cc mastercard"  for="mastercard46"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Suporte médico</figcaption><img src="quizimg/q123.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="-1" id="visa47"/>
  <label class="drinkcard-cc visa"  for="visa47"></label>
  <input type="radio" name="u12" value="1" id="mastercard47"/>
  <label class="drinkcard-cc mastercard"  for="mastercard47"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Teatro e arte</figcaption><img src="quizimg/q124.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q12" value="-2" id="visa48"/>
  <label class="drinkcard-cc visa"  for="visa48"></label>
  <input type="radio" name="u12" value="2" id="mastercard48"/>
  <label class="drinkcard-cc mastercard"  for="mastercard48"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 13</h1><br>
<div class="img_div"><figcaption>Pensamento lógico</figcaption><img src="quizimg/q131.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" id="visa49" value="2"/>
  <label class="drinkcard-cc visa"  for="visa49"></label>
  <input type="radio" name="u13" id="mastercard49" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard49"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ordenar e organizar</figcaption><img src="quizimg/q132.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="1" id="visa50"/>
  <label class="drinkcard-cc visa" for="visa50"></label>
  <input type="radio" name="u13" value="-1" id="mastercard50"/>
  <label class="drinkcard-cc mastercard"  for="mastercard50"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Dar direções</figcaption><img src="quizimg/q133.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="-1" id="visa51"/>
  <label class="drinkcard-cc visa"  for="visa51"></label>
  <input type="radio" name="u13" value="1" id="mastercard51"/>
  <label class="drinkcard-cc mastercard"  for="mastercard51"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Ensinar e explicar</figcaption><img src="quizimg/q134.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q13" value="-2" id="visa52"/>
  <label class="drinkcard-cc visa"  for="visa52"></label>
  <input type="radio" name="u13" value="2" id="mastercard52"/>
  <label class="drinkcard-cc mastercard"  for="mastercard52"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 14</h1><br>
<div class="img_div"><figcaption>Cuida dos idosos</figcaption><img src="quizimg/q141.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" id="visa53" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa53"></label>
  <input type="radio" name="u14" id="mastercard53" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard53"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Agente imobiliário</figcaption><img src="quizimg/q142.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="1" id="visa60"/>
  <label class="drinkcard-cc visa" for="visa60"></label>
  <input type="radio" name="u14" value="-1" id="mastercard60"/>
  <label class="drinkcard-cc mastercard"  for="mastercard60"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Fashion Designer</figcaption><img src="quizimg/q143.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="-2" id="visa54"/>
  <label class="drinkcard-cc visa"  for="visa54"></label>
  <input type="radio" name="u14" value="2" id="mastercard54"/>
  <label class="drinkcard-cc mastercard"  for="mastercard54"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Resolver problemas</figcaption><img src="quizimg/q144.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q14" value="2" id="visa55"/>
  <label class="drinkcard-cc visa"  for="visa55"></label>
  <input type="radio" name="u14" value="-2" id="mastercard55"/>
  <label class="drinkcard-cc mastercard"  for="mastercard55"></label>
  </div>
  </div>
												</div>
												<div class="swiper-slide">
													<h1 class="vrmh">Questão 15</h1><br>
<div class="img_div"><figcaption>Eletrónicos</figcaption><img src="quizimg/q151.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" id="visa56" value="2"/>
  <label class="drinkcard-cc visa"  for="visa56"></label>
  <input type="radio" name="u15" id="mastercard56" value="-2" />
  <label class="drinkcard-cc mastercard"  for="mastercard56"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Escrita creativa</figcaption><img src="quizimg/q152.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="-2" id="visa57"/>
  <label class="drinkcard-cc visa" for="visa57"></label>
  <input type="radio" name="u15" value="2" id="mastercard57"/>
  <label class="drinkcard-cc mastercard"  for="mastercard57"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Arquivar</figcaption><img src="quizimg/q153.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="1" id="visa58"/>
  <label class="drinkcard-cc visa"  for="visa58"></label>
  <input type="radio" name="u15" value="-1" id="mastercard58"/>
  <label class="drinkcard-cc mastercard"  for="mastercard58"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Vendedor</figcaption><img src="quizimg/q154.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q15" value="-1" id="visa59"/>
  <label class="drinkcard-cc visa"  for="visa59"></label>
  <input type="radio" name="u15" value="1" id="mastercard59"/>
  <label class="drinkcard-cc mastercard"  for="mastercard59"></label>
  </div>
  </div>
												</div>
											</div>
										</div>
									</div>				
  					                <!--Slider controls-->
  					                <div class="swiper-container">
  					                							  <div class="meco">
	                      <button type="submit" id="popupButton" class="vlt-btn vlt-btn--secondary vlt-btn--lg">Submeter</button>
                          </div>
  					                <div class="mico">
									<div class="maco">
									<div class="vlt-slider-controls vlt-slider-controls--style-3 vlt-careers-single-slider-anchor has-white-color has-black-background-color">
										<div class="vlt-swiper-button-prev"><i class="fa-solid fa-arrow-left" ></i></i>
										</div><span class="sep">|</span>
										<div class="vlt-swiper-button-next"><i class="fa-solid fa-arrow-right" ></i>
										</div>
									</div>
									</div>
                          </div>
							</div>
							</div>
							</div>

							<div class="vlt-gap-120"></div>
						</div>
						<div class="col-md-5 offset-md-1">
</div>
</form>
</div>
</div>
 <div class="overlay" id="overlay">
<div class="sadfsdag" id="popup">
    <h2>Tu és <?php echo isset($_SESSION['rf']) ? $_SESSION['rf'] : ''; ?>!</h2>
    <p>Os teus traços são <?php echo isset($_SESSION['rd']) ? $_SESSION['rd'] : ''; ?>, se quiseres ver os cursos que te recomendamos, <a href="blog-grid-4-col.php?filter=<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">Clica aqui.</a></p>
    <button id="closeButton">Fechar</button>
    </div>
</div>
</div>
</form>
</div>
<style type="text/css">
    .sub{
        width: 100%;
    }
    .overlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 999;
}

.sadfsdag {
  background-color: white;
  width: 400px;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}
.sadfsdag button{
    width: 100%;
    float: center;
}
</style>
<script type="text/javascript">
    const popupButton = document.getElementById('popupButton');
const overlay = document.getElementById('overlay');
const popup = document.getElementById('popup');
const closeButton = document.getElementById('closeButton');

function doesUrlContainSubstring(substring) {
  var url = window.location.href;
  if (url.indexOf(substring) !== -1) {
      return true;
  } else {
      return false;
  }
}

if (doesUrlContainSubstring('result')) {
  overlay.style.display = 'block';
}

closeButton.addEventListener('click', () => {
  overlay.style.display = 'none';
});
</script>

	</main>
	<div class="vlt-gap-120"></div>
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