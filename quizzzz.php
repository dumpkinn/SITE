<!DOCTYPE html>
<html class="no-js vlt-is--service-single vlt-is--header-fullscreen vlt-is--footer-style-1 vlt-is--footer-fixed" lang="en">
<?php session_start(); ?>
<head>
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
    width: 100%;
}
.container3 img{
  width: 200px;

}
.container3 figcaption{
  text-align: center;
}
.container3{
  width: 850px;
  margin: auto;
}

button:hover {
    background-color: #0056b3;
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
    </style>
</head>

<body>
	<!--Site preloader-->
	<div class="vlt-site-preloader" data-animate-to="M0 0h202v66H0z"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="204" height="68">
			<defs>
				<path id="a" d="M22.0458984 53.046875c.4101563 0 1.1279297-.0455729 2.1533204-.1367188h.2392578c.797526-.0911458 1.6748046-.2278645 2.6318359-.4101562 1.9596354-.3645833 4.0445964-1.1165365 6.2548828-2.2558594 2.2786458-1.1621094 4.1927083-2.8597005 5.7421875-5.0927734 1.4811198-2.2558594 2.2216797-5.0585938 2.2216797-8.4082031 0-2.9850261-.5126953-5.3434245-1.5380859-7.0751953-1.0253907-1.686198-2.5179037-3.0647787-4.4775391-4.1357422-2.0052083-1.0253907-4.921875-1.9824219-8.75-2.8710938l-4.8876953-1.2646484-7.1435547-1.7431641c-2.6660156-.8430989-3.9990234-2.5634765-3.9990234-5.1611328 0-1.8684896.8886718-3.2926432 2.6660156-4.2724609C14.9365234 9.23990885 16.9417318 8.75 19.1748047 8.75c6.5397135 0 10.0374349 2.4951172 10.4931641 7.4853516h10.0830078c0-.9342448-.0911459-1.8457032-.2734375-2.734375-.1367188-.6608073-.444336-1.640625-.9228516-2.9394532-.7063802-1.91406246-1.7773437-3.66861975-3.2128906-5.26367184-1.389974-1.54947916-3.4407552-2.82552083-6.1523438-3.828125C26.6145833.48990886 23.4814453 0 19.7900391 0c-3.9192709 0-7.3030599.60384115-10.15136722 1.81152344-2.8483073 1.16210937-5.01302084 2.96223958-6.49414063 5.40039062C1.59505208 9.62727865.8203125 12.3046875.8203125 15.2441406c0 3.3496094.72916667 6.0384115 2.1875 8.0664063 1.34440104 1.9596354 3.21289062 3.4749349 5.60546875 4.5458984 2.48372395 1.1165365 5.35481775 1.9710287 8.61328125 2.5634766l4.8193359 1.1279297 5.3320313 1.4697265c.9798177.3190104 1.8570963.8772787 2.6318359 1.6748047.7519532.7519531 1.1279297 1.9026693 1.1279297 3.4521484 0 4.1015626-3.680013 6.1523438-11.0400391 6.1523438-1.7317708 0-3.3496093-.2848307-4.8535156-.8544922-1.5494791-.6152344-2.7571614-1.5152995-3.6230468-2.7001953-.9798178-1.2076823-1.4697266-2.734375-1.4697266-4.5800781H0c0 5.5143229 1.89127604 9.7184245 5.67382812 12.6123047 3.69140626 2.8483073 9.14876298 4.2724609 16.37207028 4.2724609zm36.6064454-1.4013672V39.8876953l4.1357421-4.2724609 8.8867188 16.0302734h11.7578125l-13.569336-22.8320312 13.1591797-14.4921875H70.9570312l-12.3046874 14.21875V1.29882812h-9.8779297V51.6455078h9.8779297zm38.1103515.991211c1.7317708 0 3.2812497-.2392579 4.6484377-.7177735 1.344401-.5240885 2.597656-1.1507161 3.759765-1.8798828 1.116537-.7519531 2.1875-1.6861979 3.212891-2.8027344 0 .6608073.148112 1.5266927.444336 2.5976563.045573.1367187.136719.4329427.273437.8886718.136719.3645834.227865.6722006.273438.9228516h10.493164v-1.4697266c-.888672-.2734374-1.469726-.9000651-1.743164-1.8798828-.273438-.9798177-.410156-2.290039-.410156-3.930664v-20.234375c0-1.4355469-.307617-2.9280599-.922852-4.4775391-.615234-1.640625-2.084961-3.1103515-4.40918-4.4091797-2.278645-1.2532552-5.662434-1.8798828-10.151367-1.8798828-1.640625 0-3.2014971.1367188-4.6826169.4101563-1.5494791.2734375-2.836914.6266276-3.8623047 1.0595703-2.1875.8886718-3.9078776 2.3128255-5.1611328 4.2724609-1.2076823 1.9140625-1.9596354 4.3863932-2.2558594 7.4169922h9.4677735c.2278646-2.0507813.8544922-3.4521484 1.8798828-4.2041016 1.1165365-.7063802 2.6546225-1.0595703 4.6142575-1.0595703 3.919271 0 5.878907 1.5152995 5.878907 4.5458985 0 1.5039062-1.070964 2.4153645-3.212891 2.734375l-9.0234376 1.3330078c-3.1217448.4557291-5.7080078 1.6520182-7.758789 3.5888672-2.0735677 1.891276-3.1103516 4.7054036-3.1103516 8.4423828 0 2.5292969.6380208 4.6142578 1.9140625 6.2548828 1.2076823 1.7317708 2.6774089 2.8938802 4.4091797 3.4863281 1.8229167.6608073 3.6344401.991211 5.4345703.991211zm2.8710938-7.006836c-1.389974 0-2.5292969-.3759766-3.4179688-1.1279297-.8886719-.7063802-1.3330078-1.7317708-1.3330078-3.0761719 0-1.6861979.4671224-2.9508463 1.4013672-3.7939453.9342448-.797526 2.1305338-1.3557942 3.5888672-1.6748047L104.555664 35c1.526693-.3190104 2.711589-.8317057 3.554688-1.5380859V38.28125c0 1.5950521-.467123 2.9736328-1.401368 4.1357422-.934244 1.0709635-2.027994 1.8570963-3.28125 2.3583984-.843099.3190104-1.515299.5354818-2.016601.6494141-.455729.1367187-1.048177.2050781-1.7773439.2050781zm36.5380859 20.5078125l.136719-19.2431641c.31901.5696615.694987 1.1279297 1.127929 1.6748047.136719.2278646.478516.6266276 1.025391 1.1962891.797526.797526 1.879883 1.4697266 3.24707 2.0166016 1.344401.5696614 3.019206.8544922 5.024414.8544922 3.645834 0 6.63086-.9570313 8.955079-2.8710938 2.369791-1.9140625 4.078776-4.4091797 5.126953-7.4853516.524088-1.595052.911458-3.1901041 1.162109-4.7851562.273438-1.640625.42155-3.2470703.444336-4.819336 0-3.1673177-.421549-5.970052-1.264648-8.4082031-.843099-2.4837239-1.959636-4.5117187-3.34961-6.0839843-1.435547-1.5950521-3.098958-2.8027344-4.990234-3.6230469-2.005209-.7975261-3.964844-1.1962891-5.878906-1.1962891-1.253256 0-2.347006.2506511-3.28125.7519531-.888672.5696615-1.86849 1.4127605-2.939454 2.5292969-1.02539 1.0709636-1.891276 1.8912761-2.597656 2.4609375-.615234.4557292-1.355794.6835938-2.221679.6835938h-.307618v-5.46875h-9.228515v51.8164062h9.80957zm8.032227-21.6357422c-2.757162 0-4.876303-1.0253906-6.357422-3.0761719-1.503907-2.0507812-2.25586-4.5686848-2.25586-7.5537109 0-8.0208333 2.779948-12.03125 8.339844-12.03125 2.985026 0 5.126953 1.0709636 6.425781 3.2128906 1.298828 2.1419271 1.959636 4.8876953 1.982422 8.2373047 0 2.8027344-.626627 5.3776042-1.879883 7.7246094-1.344401 2.3242188-3.429362 3.4863281-6.254882 3.4863281zm40.742187 8.1347657c2.529297 0 4.933268-.4671224 7.211914-1.4013672 2.1875-.9342448 4.078776-2.2900391 5.673828-4.0673828 1.549479-1.686198 2.711589-3.828125 3.486328-6.4257813h-10.083007c-.319011 1.1165365-1.082357 2.0621745-2.29004 2.8369141-1.207682.797526-2.54069 1.196289-3.999023 1.196289-2.802734 0-4.978841-.7861328-6.52832-2.3583984-1.595052-1.5494792-2.381185-3.8167318-2.358399-6.8017578h25.668946v-1.7431641c0-3.6914062-.558269-7.0979818-1.674805-10.2197265-1.116537-3.1217448-2.96224-5.616862-5.537109-7.4853516-2.57487-1.8684896-6.004232-2.8027344-10.288086-2.8027344-4.05599 0-7.462565.8886719-10.219727 2.6660156-2.711588 1.7317709-4.671224 4.0559896-5.878906 6.9726563-1.207682 2.9622396-1.811524 6.0498047-1.811524 9.2626953 0 13.5807292 6.20931 20.3710938 18.62793 20.3710938zm6.699219-23.2421876h-15.175781c.70638-5.3092447 3.24707-7.9752604 7.62207-7.9980468 2.050781 0 3.782552.7063802 5.195312 2.1191406 1.389974 1.5494792 2.176107 3.5091146 2.358399 5.8789062z" />
			</defs>
			<g fill="none" fill-rule="evenodd" transform="translate(1 1)">
				<mask id="b" fill="#fff">
					<use xlink:href="#a" />
				</mask>
				<use fill="#FFF" fill-opacity="0" fill-rule="nonzero" stroke="currentColor" xlink:href="#a" />
				<path id="vlt-site-preloader-path" fill="currentColor" d="M0 0h0v66H0z" mask="url(#b)" />
			</g>
		</svg>
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
<ul class="sf-menu" data-back-text="Back">
								<li ><a href="index.html"><span>Home</span></a>
									
								</li>
								<li ><a href="blog-grid-4-col.php"><span>Cursos</span></a></li>
									
								<li ><a href="service-single.php"><span>Calculadora</span></a></li>
								<li ><a href="quizzzz.php"><span>Quiz</span></a></li>
								<li ><a href="blog-grid-1-col.html"><span>Mapa</span></a></li>
								<li ><a href="blog-grid-1-col.html"><span>Curriculo</span></a></li>
									
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
    <div class="container2">
    <div class="container3">
    <div class="accordion-body">Para cada uma das questões escolhe a opção que apresenta a situação em que preferias estar e a opção que menos gostarias de vivenciar. Quando submeteres as tuas respostas será assinalado um tipo de personalidade e terás a opção de veres os cursos que nós achamos que deves escolher. Para saberes que cursos tens média para entrar <a href="calculadora.php"> calcula-a aqui.</a></div>
    <br><br><br>
<form action="quiz.php" id="myForm" method="post">
<h1>Questão 1</h1><br>
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
          </div><br>
          <br><br><br><br><br>
<h1>Questão 2</h1><br>     
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
  </div><br>
  <br><br><br><br><br>   
<h1>Questão 3</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 4</h1><br>
<div class="img_div"><figcaption>Trabalhador Social</figcaption><img src="quizimg/q41.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q4" id="visa12" value="-1"/>
  <label class="drinkcard-cc visa"  for="visa12"></label>
  <input type="radio" name="u4" id="mastercard12" value="1" />
  <label class="drinkcard-cc mastercard"  for="mastercard12"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Admistrador</figcaption><img src="quizimg/q42.png"><br><br>
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
  </div><br>
  <br><br><br><br><br>
  
<h1>Questão 5</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 6</h1><br>  
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
  <div class="img_div"><figcaption>Ajuda defecientes</figcaption><img src="quizimg/q63.png"><br><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 7</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 8</h1><br> 
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 9</h1><br>
<div class="img_div"><figcaption>CEO</figcaption><img src="quizimg/q91.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" id="visa33" value="-2"/>
  <label class="drinkcard-cc visa"  for="visa33"></label>
  <input type="radio" name="u9" id="mastercard33" value="2" />
  <label class="drinkcard-cc mastercard"  for="mastercard33"></label>
  </div>
  </div>
  <div class="img_div"><figcaption>Admistração</figcaption><img src="quizimg/q92.png"><br><br>
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
  <div class="img_div"><figcaption>Arquitétura e terreno</figcaption><img src="quizimg/q94.png"><br><br>
  <div class="cc-selector">
  <input type="radio" name="q9" value="-1" id="visa36"/>
  <label class="drinkcard-cc visa"  for="visa36"></label>
  <input type="radio" name="u9" value="1" id="mastercard36"/>
  <label class="drinkcard-cc mastercard"  for="mastercard36"></label>
  </div>
  </div><br>
  <br><br><br><br><br>
<h1>Questão 10</h1><br>
<div class="img_div"><figcaption>Tecníco Dental</figcaption><img src="quizimg/q101.png"><br><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 11</h1><br>
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
  <div class="img_div"><figcaption>Analista de infromção</figcaption><img src="quizimg/q113.png"><br><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 12</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 13</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 14</h1><br>
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
  </div><br>
  <br><br><br><br><br>
<h1>Questão 15</h1><br>
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
  </div><br>
  <br><br><br><br><br>

<button width="100%" type="submit" id="popupButton">Submeter</button>
</div>
</form>
</div>
</div>
 <div class="overlay" id="overlay">
<div class="sadfsdag" id="popup">
    <h2>Tu és <?php echo isset($_SESSION['rf']) ? $_SESSION['rf'] : ''; ?>!</h2>
    <p>Os teus traços são <?php echo isset($_SESSION['rd']) ? $_SESSION['rd'] : ''; ?>, se quiseres ver os cursos que te recomendamos, <a href="cursos.php?filter=<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">Clica aqui.</a></p>
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