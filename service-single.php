<!DOCTYPE html>
<html class="no-js vlt-is--service-single vlt-is--header-fullscreen vlt-is--footer-style-1 vlt-is--footer-fixed" lang="en">
<?php session_start(); ?>
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
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
					<h1 class="vlt-page-title__title lax" data-lax-translate-y="0 0, vh (vw*0.25)" data-lax-opacity="1 1, (vh*0.5) 0" data-lax-anchor=".vlt-page-title">Calculadora
					</h1>
				</div>
			</div>
			<div id="content"></div>
			<!--Section-->
			<style type="text/css">
.container2 {
    max-width: 600px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: auto;
    position: relative;
}
.container2:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;   
    bottom: 0;
    z-index: -1; 
    box-shadow: 0 0 100px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}
.hugs{
  width: 100%;
  vertical-align: middle;
  background-color: #f02c34;
  border-radius: 10px 10px 0px 0px;
}
.hugs h1{
  color: white;
  text-align: center;
  margin: auto;
}
.calc h2 {
    margin-bottom: 10px;
}
.popup button {
    display: block;
    width: 100%;
    padding: 10px;

    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.popup button:hover {

}
.cima{
  margin-top: 280px;
}
.cfg{
  margin-left: 200px;
}
.container3 figcaption{
  text-align: center;
}
.cererr img{
  width: 50px;
}
/* Popup css */
.popup {
  position: relative;
  cursor: pointer;
}
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s
}
    .two-number-input {
        width: 400px; /* Adjust width as needed */
        padding: 5px;
        font-size: 16px;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .two-number-input input {
        width: calc(25% - 2.5px); /* Subtracting padding and border width */
        display: inline-block;
        box-sizing: border-box;
        border-color: #f02c34;
        text-align: center;

    }
</style>

			</style>
   <div class="vlt-gap-120"></div>
   <div class="form-container">
    <div class="container2">
        <div class="hugs"><h1>Introduz as classificações</h1></div><br>
        <form action="calc.php" id="myForm" method="post" class="jhk">
            <div class="category">
                <h2 class="calc">Português</h2>
                <div class="two-number-input">
                <input type="number" name="por10" min="0" max="20" step="1"required>
                <input type="number" name="por11" min="0" max="20" step="1"required>
                <input type="number" name="por12" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Ed. Física</h2>
                <div class="two-number-input">
                <input type="number" name="mat10" min="0" max="20" step="1"required>
                <input type="number" name="mat11" min="0" max="20" step="1"required>
                <input type="number" name="mat12" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Opção de curso</h2>
                <div class="two-number-input">
                <input type="number" name="edf10" min="0" max="20" step="1"required>
                <input type="number" name="edf11" min="0" max="20" step="1"required>
                <input type="number" name="edf12" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Filosofia</h2>
                <div class="two-number-input">
                <input type="number" name="fil10" min="0" max="20" step="1"required>
                <input type="number" name="fil11" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Inglês</h2>
                <div class="two-number-input">
                <input type="number" name="ing10" min="0" max="20" step="1"required>
                <input type="number" name="ing11" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Opção 1</h2>
                <div class="two-number-input">
                <input type="number" name="fq10" min="0" max="20" step="1"required>
                <input type="number" name="fq11" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Opção 2</h2>
                <div class="two-number-input">
                <input type="number" name="bi10" min="0" max="20" step="1"required>
                <input type="number" name="bi11" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Opção 12º</h2>
                <div class="two-number-input">
                <input type="number" name="op1" min="0" max="20" step="1"required>
                </div>
            </div>

            <div class="category">
                <h2 class="calc">Opção 12º</h2>
                <div class="two-number-input">
                <input type="number" name="op2" min="0" max="20" step="1"required>
                </div>
            </div>
            <hr>
            <div class="category">
                <h2 class="calc">Exame</h2>
                <div class="two-number-input">
                <input type="number" name="ex1" min="0" max="20" step="1">
                <input type="number" name="ex2" min="0" max="20" step="1">
                <input type="number" name="ex3" min="0" max="20" step="1">
                </div>
                <h6>(deixa vazio as caixas do exame que não precisas)</h6>
            </div>
            <div class="popup" ><button type="submit" id="fixrafada" class="vlt-btn vlt-btn--secondary vlt-btn--lg">Submeter</button>
            <span class="popuptext" id="myPopup">A tua média é <?php echo isset($_SESSION['media']) ? $_SESSION['media'] : ''; ?>
            </span>
            </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
         $('#myForm').submit(function(e){
          //e.preventDefault();
           /*$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            
        });*/
        });
        });
        </script>
    </div>
    </div>
<script>
  function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }

  function doesUrlContainSubstring(substring) {
        // Get the current URL
        var url = window.location.href;
        
        // Check if the URL contains the substring
        if (url.indexOf(substring) !== -1) {
            // Substring found in the URL
            return true;
        } else {
            // Substring not found in the URL
            return false;
        }
  }

  if (doesUrlContainSubstring('media')) {
    myFunction();
  }
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