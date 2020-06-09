<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Feelings - Relax, millennials</title>

	<!--add favicon-->
	<?php include 'favicon.php'; ?>
	<link rel="icon" type="image/x-icon" href="<?php echo ($favicon); ?>" />

	<!--Adapt to any device-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="<?php echo ($favicon); ?>" />

	<title>Relax, millennials - Story</title>
	<meta name="description" content="">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--Fonts-->
	<link href="css/font.css" rel='stylesheet' type='text/css'>

	<!--owl-carousel css-->
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

	<!--CSS for Progress Bars-->
	<link href="css/progress_animate.css" rel="stylesheet">
	<link href="css/progress_style.css" rel="stylesheet">
	<link href="css/progress_responsive.css" rel="stylesheet">


	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color1.css">

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="page-top" class="index about_body">
	<!-- Preloader -->
	<div class="preloader"></div>
	<header>
		<!-- Navigation -->
		<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav text-center">

						<li><a href="index.php">Home</a></li>
						<li><a href="mandala.php">Mandala</a></li>
						<li><a href="activity.php">Activity</a></li>
						<li><a href="story.php">Story</a></li>
						<li><a href="share.php">Feelings</a></li>
						</li>
					</ul>
				</div>
				<div id="google_translate_element" style="position:absolute;bottom:20px;right:10px;z-index:2000;opacity:0.7"></div>
				<div id="lang-change" onclick="cleartrans()" style="position:absolute;bottom:0px;right:10px;z-index:2000;opacity:0.7"><a href="">Original</a></div>
			</div>
		</nav>

		<div id="page_header">
			<div class="page_title">
				<h3>Shared feelings</h3>
				<ol class="breadcrumb" style="margin-left: -4%;">
					<li><a href="index.php">Home</a></li>
					<li class="active">Feelings</li>
				</ol>
			</div>
		</div>
	</header>

	<section>
		<div class="container-fluid  bg-light-gray" style="width:80%; font-size:140%; min-height:400px;">
			<div class="col-md-12">
				<div class="why-right">
					<div class="content-area" style="text-align: align">
						<div id="wrap">
							<div id="main">
								<div id="allspace" class="all_space"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		window.onload = function() {
			check();
			scroll();
		}

		function check() {
			var xmlhttp;

			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("allspace").innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open("POST", "get_feelings.php?", true);
			xmlhttp.send();

			setTimeout("check()", 1000)
		}
	</script>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
						<div style="display:inline; margin-right:-60%;"><a href="#page-top" class="page-scroll btn btn-primary">Back to top</a></div>
						<div style="display:inline; margin-right:-50%;"><span class="copyright"> <em>Copyright &copy; 2019. GenerationWhy.<a target="_blank"></a></em></span></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script>
		//translate
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'en',
					includedLanguages: 'en,zh-CN,hr,cs,da,nl,fr,de,el,iw,hu,ga,it,ja,ko,pt,ro,ru,sr,es,th,vi',
					layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
					autoDisplay: false,
				},
				'google_translate_element'
			);
		}

		//back to original language
		function cleartrans() {
			delCookie("googtrans");
			window.location.reload();
		}

		function getCookie(name) {
			var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
			if (arr = document.cookie.match(reg)) {
				return unescape(arr[2]);
			} else
				return null;
		}

		function delCookie(name) {
			var Days = 30;
			var exp = new Date();
			exp.setTime(exp.getTime() - Days * 24 * 60 * 60 * 30);

			var domain = document.domain;
			var domainIsIp = false;
			var dd = domain.split(".");
			if (dd.length == 4) {
				domainIsIp = true;
			}
			document.cookie = name + "='';path=/;expires=" + exp.toUTCString();
			if (domainIsIp == false) {
				domain = "." + dd[1] + "." + dd[2];
				document.cookie = name + "='';domain=" + domain + ";expires=" + exp.toGMTString() + ";path=/";
			}
		}
	</script>

	<!-- jQuery -->
	<script src="js/vendor/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/vendor/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/vendor/jquery.easing.min.js"></script>
	<script src="js/language.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="js/vendor/jqBootstrapValidation.js"></script>
	<script src="js/vendor/owl.carousel.min.js"></script>
	<script src="js/vendor/prettify.js"></script>
	<script type="text/javascript" src="js/vendor/css3-animate-it.js"></script>

	<!-- Theme JavaScript -->
	<script src="js/vendor/agency.min.js"></script>
	<script src="js/vendor/jquery.mixitup.js"></script>
	<script src="js/vendor/wow.min.js"></script>
	<script src="js/vendor/gmaps.js"></script>
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

</body>

</html>