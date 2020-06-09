<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Mandala - Relax, millennials</title>
	<meta name="description" content="">

	<!--add favicon-->
	<?php include 'favicon.php'; ?>
	<link rel="icon" type="image/x-icon" href="<?php echo ($favicon); ?>" />

	<!--Adapt to any device-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="<?php echo ($favicon); ?>" />

	<!--mandala branch bar-->
	<link rel="stylesheet" href="css/branch-bar.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--Fonts-->
	<link href="css/font.css" rel='stylesheet' type='text/css'>

	<!--owl-carousel css-->
	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color1.css">

	<!--mahare-->
	<link rel="stylesheet" href="css/canvas.css">
	<script src="js/jQuery.js"></script>
	<script src="js/canvasdraw.js"></script>
	<script src="js/canvas.js"></script>

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="page-top">
	<!-- Preloader -->
	<div class="preloader"></div>

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
				</ul>
			</div>
			<div id="google_translate_element" style="position:absolute;bottom:20px;right:10px;z-index:2000;opacity:0.7"></div>
			<div id="lang-change" onclick="cleartrans()" style="position:absolute;bottom:0px;right:10px;z-index:2000;opacity:0.7"><a href="">Original</a></div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<div id="page_header">
		<div class="page_title">
			<h3> Mandala</h3>
			<ol class="breadcrumb" style="margin-left: -4%;">
				<li><a href="index.php">Home</a></li>
				<li class="active">Mandala</li>
			</ol>
		</div>
	</div>

	<div class="container-fluid  bg-light-gray" style="margin:40px; padding:8px">
		<br>
		<div class="col-md-12">
			<div class="why-right">
				<div class="content-area">
					<p style="text-align: center; font-size:150%;">
						Structured coloring of a reasonably complex geometric pattern may induce a meditative state that<br>
						benefits individuals suffering from anxiety (Nancy & Tim, 2005) <br><br>
						Coloring a mandala reduces anxiety to a significantly greater degree than coloring on a plaid design <br>
						or coloring on a blank paper. (Renée & Susan, 2012)
					</p>

				</div>
			</div>
		</div>
	</div>

	<script>
		function highlight(x) {
			x.style.boxShadow = "0 0 20px #00CCFF";
		}

		function normal(x) {
			x.style.boxShadow = "none";
		}
	</script>

	<!--selection bar: learn from https://blog.csdn.net/q36835109/article/details/51727499-->
	<div class="branch_bar">
		<h4 class="page-header">Select your favorite Mandala and start painting!</h4>
		<ul class="branch" id="branchs">
			<span class="prev" id="prev">«Prev</span>
			<li id="1" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/1.png"></a></li>
			<li id="2" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/2.png"></a></li>
			<li id="3" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/3.png"></a></li>
			<li id="4" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/4.png"></a></li>
			<li id="5" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/5.png"></a></li>
			<li id="6" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/6.png"></a></li>
			<li id="7" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/7.png"></a></li>
			<li id="8" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/8.png"></a></li>
			<li id="9" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/9.png"></a></li>
			<li id="10" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/10.png"></a></li>
			<li id="11" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/11.png"></a></li>
			<li id="12" onmouseover="highlight(this)" onmouseout="normal(this)" class="mandala-item"><a href="#next"><img src="images/mandala/12.png"></a></li>
			<span class="next" id="next">Next»</span>
		</ul>
	</div>

	<!--painting: learn from https://download.csdn.net/download/qq_34119024/10213902-->
	<!--hide and show div: learn from https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp-->
	<!--sidebar for painting tool-->

	<div id="painting" style="display: none;">
		<div style="margin-left: 10%; margin-bottom:-2%; font-size:120%;">(Click brush to start)</div>
		<ul class="menu">
			<li class="parent tool">
				<div>Brush</div>
			</li>

			<!--choose size of the tool-->
			<li class="parent size">
				<div>Brush Size</div>
				<ul class="son">
					<!--<li>small</li>-->
					<!--<li>medium</li>-->
					<!--<li>large</li>-->
					<li>
						<input style="padding:10%;" type="range" id="range" min="1" max="30" value="10"></li>
				</ul>
			</li>

			<!--choose eraser size-->
			<li class="parent xpc">
				<div>Eraser</div>
				<ul class="son">
					<li data-role="5">Small</li>
					<li data-role="36">Medium</li>
					<li data-role="100">Large</li>
				</ul>
			</li>
		</ul>

		<!--choose color to paint-->
		<div class="color-group">
			<ul>
				<li id="red" class="color-item active" style="background-color: #FF3333;"></li>
				<li id="deepred" class="color-item" style="background-color: #FF5E33;"></li>
				<li id="orange" class="color-item" style="background-color: orange;"></li>
				<li id="yellow" class="color-item" style="background-color: #FFFF33;"></li>
				<li id="green" class="color-item" style="background-color: #33CC66;"></li>
				<li id="lightgreen" class="color-item" style="background-color: lightgreen;"></li>
				<li id="blue" class="color-item" style="background-color: #0066FF;"></li>
				<li id="lightblue" class="color-item" style="background-color: lightblue;"></li>
				<li id="purple" class="color-item" style="background-color: #c603fc;"></li>
				<li id="pink" class="color-item" style="background-color: pink;"></li>
			</ul>
		</div>

		<!--put mandala picutre-->
		<div id="drawing" class="draw_container">
			<div id="picture" class="box" style="width: 640px; height: 640px;">
				<div class="xp"></div>
				<div class="copy"></div>
				<div class="transparency">
					<canvas></canvas>
				</div>
			</div>
		</div>
		<button class="shot" onclick="takeScreenShot()">Save</button>
		<div style="margin-left: 79.5%; margin-top:-13%; margin-bottom:10%; font-size:120%;">(Don't forget to save it!)</div>
	</div>

	<div class="why-choose-us ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="section-heading">About Mandala</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid  bg-light-gray">
		<div class="row">
			<div class="col-md-6 picture-border">
				<div class="row">
					<img src="images/mandala.jpg" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="why-right">

					<div class="mandala-content-area">
						<p style="text-align: justify;font-size:130%;">Even if what you are doing here seems simple,
							it is actually helping you to return to the centre of your own being and your true nature,
							nothing in the mandala is out of place, everything you put in here is a unique way of expressing
							yourself transforming stress and difficult emotions into something beautiful.</p><br>
						<p style="text-align: justify;font-size:130%;">We encourage you to see life as a mandala, a broad and limitless space for you to be
							yourself. Whatever it is you are feeling at the moment it’s okay. Finally, we want you
							to think about fully leaving in the present, our stress often comes about worrying
							about the future or thinking about the past. Today we encourage to live right now and
							this moment.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-12">
						<div style="display:inline; margin-right:-50%;"><a href="#page-top" class="page-scroll btn btn-primary">Back to top</a></div>
						<div style="display:inline; margin-right:-40%;"><span class="copyright"> <em>Copyright &copy; 2019. GenerationWhy.<a target="_blank"></a></em></span></div>
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

	<!--selection bar: learn from https://blog.csdn.net/q36835109/article/details/51727499-->
	<script type="text/javascript">
		$(function() {
			$(".next").click(function() {
				if (!$(".branch li:first").is(":animated")) {
					$(".branch li:first").animate({
						'marginLeft': '-=550px'
					}, 500, function() {
						$(".branch li:first").css('marginLeft', 0);
						$('.branch').append($(".branch li:first"));
					});
				}
			});

			$(".prev").click(function() {
				if (!$(".branch li:first").is(":animated")) {
					$('.branch').prepend($(".branch li:last"));
					$('.branch li:first').css({
						'marginLeft': '-550px'
					});
					$(".branch li:first").animate({
						'marginLeft': '+=550px'
					}, 500, function() {
						$(".branch li:first").css('marginLeft', '0px');
					});
				}
			});
		});
	</script>

	<script>
		document.getElementById("prev").addEventListener("mouseover", mouseOver1);
		document.getElementById("prev").addEventListener("mouseout", mouseOut1);

		function mouseOver1() {
			document.getElementById("prev").style.color = "orange";
		}

		function mouseOut1() {
			document.getElementById("prev").style.color = "black";
		}

		document.getElementById("next").addEventListener("mouseover", mouseOver2);
		document.getElementById("next").addEventListener("mouseout", mouseOut2);

		function mouseOver2() {
			document.getElementById("next").style.color = "orange";
		}

		function mouseOut2() {
			document.getElementById("next").style.color = "black";
		}
	</script>

	<script>
		//learn from https://stackoverflow.com/questions/42828187/how-to-take-a-screenshot-in-html-with-javascript
		var takeScreenShot = function() {
			html2canvas(document.getElementById("picture"), {
				onrendered: function(canvas) {
					var tempcanvas = document.createElement('canvas');
					tempcanvas.width = 680;
					tempcanvas.height = 680;
					var context = tempcanvas.getContext('2d');
					var rect = tempcanvas.getBoundingClientRect();
					context.drawImage(canvas, rect.left - 20, rect.top - 30, 680, 680, 0, 0, 680, 680);
					var link = document.createElement("a");
					link.href = tempcanvas.toDataURL('image/jpg'); //function blocks CORS
					link.download = 'Your Mandala.jpg';
					link.click();
				}
			});
		}
	</script>

	<script>
		var picture1 = document.getElementById("1");
		picture1.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/1.png); width: 640px; height: 640px;"
		}

		var picture2 = document.getElementById("2");
		picture2.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/2.png); width: 640px; height: 640px;"
		}

		var picture3 = document.getElementById("3");
		picture3.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/3.png); width: 640px; height: 572px;"
		}

		var picture4 = document.getElementById("4");
		picture4.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/4.png); width: 640px; height: 640px;"
		}

		var picture5 = document.getElementById("5");
		picture5.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/5.png); width: 640px; height: 640px;"
		}

		var picture6 = document.getElementById("6");
		picture6.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/6.png); width: 640px; height: 640px;"
		}

		var picture7 = document.getElementById("7");
		picture7.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/7.png); width: 630px; height: 640px;"
		}

		var picture8 = document.getElementById("8");
		picture8.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/8.png); width: 560px; height: 640px;"
		}

		var picture9 = document.getElementById("9");
		picture9.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/9.png); width: 640px; height: 640px;"
		}

		var picture10 = document.getElementById("10");
		picture10.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/10.png); width: 640px; height: 640px;"
		}

		var picture11 = document.getElementById("11");
		picture11.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/11.png); width: 640px; height: 640px;"
		}

		var picture12 = document.getElementById("12");
		picture12.onclick = function() {
			document.getElementById("painting").style.display = "block";
			document.getElementById("picture").style = "background-image: url(images/mandala/12.png); width: 639px; height: 640px;"
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
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript"></script>
</body>

</html>