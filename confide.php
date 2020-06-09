<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Express your feelings - Relax, millennials</title>

	<!--add favicon-->
	<?php include 'favicon.php'; ?>
	<link rel="icon" type="image/x-icon" href="<?php echo ($favicon); ?>" />

	<!--Adapt to any device-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="<?php echo ($favicon); ?>" />

	<meta name="description" content="">
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

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="page-top">
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
					<a style="display: none" class="navbar-brand page-scroll" href="#page-top"><img src="images/logos/GY.png" alt=""></a>
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
				<h3>Express your feelings</h3>
				<ol class="breadcrumb" style="margin-left: -4%;">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a href="story.php">Story</a></li>
					<li class="active">Express your feelings</li>
				</ol>
			</div>
		</div>
	</header>

	<section id="contact">
		<div class="container" style="margin:2.5%; margin-left:5%; min-width:90%;">
			<form id="myform" onsubmit="check(this);" method="post" validate>
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<div class="form-holder">
							<div class="form-group">
								<canvas style="display:none;" id="bubble" width="1000px" height="250px"></canvas>
								<div id="disgust" style="display:inline-block; color: #4CAF50; font-size:150%;"></div>
								<div id="surprise" style="color: #CD8E76; font-size:130%;"></div>
								<div id="neutral"></div>
								<div id="anger"></div>
								<div id="sad"></div>
								<div id="happy"></div>
								<div id="fear"></div>
								<textarea name="content" class="form-control" placeholder="You can write everything here" id="message" required data-validation-required-message onpropertychange="if(this.scrollHeight>80) this.style.posHeight=this.scrollHeight+5"></textarea>
								<p class="help-block text-danger"></p>
							</div>
							<button type="button" class="btn btn-primary" onclick="goBack();">Leave it behind</button>
							<button type="button" class="btn btn-primary" onclick="sensor();">Emotion sensor</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>

	<script>
		function goBack() {
			window.location.href = 'story.php';
		}

		<?php include 'get_bad.php'; ?>
		var bad = <?php echo ($json_bad); ?>;

		function check(form) {
			var html = document.getElementById('message').value;
			var decision;

			for (var i = 0; i < bad.length; i++) {
				var obj = bad[i].word;
				// learn from https://stackoverflow.com/questions/5379365/match-exact-string-in-a-sentence
				var myPattern = "\\b" + obj.replace(" ", "\\b \\b") + "\\b";
				var myPattern2 = myPattern.replace("*", "\\*");
				var myPattern3 = myPattern2.replace("(", "\\(");
				var myPattern4 = myPattern3.replace(")", "\\)");

				if (html.toLowerCase().match(myPattern4.toLowerCase()) == null) {
					decision = 1;
				} else {
					decision = 2;
					i = bad.length;
				}
			}
			if (decision == 1) {
				form.action = "transfer.php";
			} else {
				alert("Please do not use any improper word!");
			}
		}

		<?php include 'get_emotions.php'; ?>
		var emotion = <?php echo ($json_emotion); ?>;

		//learn from https://blog.csdn.net/cc_fys/article/details/77725696
		function sensor() {
			document.getElementById("disgust").innerHTML = "";
			document.getElementById("surprise").innerHTML = "(Pop these negative feelings and have a good day!)";
			var sentence = document.getElementById('message').value;
			var disgust = 0;
			var surprise = 0;
			var anger = 0;
			var sad = 0;
			var happy = 0;
			var fear = 0;

			for (var i = 0; i < emotion.length; i++) {
				var object = emotion[i].word;
				var pattern = "\\b" + object.replace(" ", "\\b \\b") + "\\b";
				var pattern2 = pattern.replace("*", "\\*");
				var pattern3 = pattern2.replace("(", "\\(");
				var pattern4 = pattern3.replace(")", "\\)");

				if (sentence.toLowerCase().match(pattern4.toLowerCase()) != null) {
					disgust += parseFloat(emotion[i].disgust);
					surprise += parseFloat(emotion[i].surprise);
					anger += parseFloat(emotion[i].anger);
					sad += parseFloat(emotion[i].sad);
					happy += parseFloat(emotion[i].happy);
					fear += parseFloat(emotion[i].fear);
				}
			}

			document.getElementById('disgust').value = disgust;
			document.getElementById('surprise').value = surprise;
			document.getElementById('anger').value = anger;
			document.getElementById('sad').value = sad;
			document.getElementById('happy').value = happy;
			document.getElementById('fear').value = fear;

			document.getElementById('bubble').style = "display:inline-block;";

			draw();

			total = disgust + surprise + anger + sad + happy + fear;

			if (total != 0) {
				p1 = (disgust / total) * 100;
				p2 = (surprise / total) * 100;
				p3 = (anger / total) * 100;
				p4 = (sad / total) * 100;
				p5 = (happy / total) * 100;
				p6 = (fear / total) * 100;

				//learn from https://blog.csdn.net/Archimelan/article/details/83017518
				pp1 = "Disgust: " + p1.toFixed(2).toString() + "%";
				pp2 = "Surprise: " + p2.toFixed(2).toString() + "%";
				pp3 = "Anger: " + p3.toFixed(2).toString() + "%";
				pp4 = "Sad: " + p4.toFixed(2).toString() + "%";
				pp5 = "Happy: " + p5.toFixed(2).toString() + "%";
				pp6 = "Fear: " + p6.toFixed(2).toString() + "%";
			}
		}

		var canvas = document.getElementById('bubble');
		var ctx = canvas.getContext('2d');
		var w = ctx.canvas.width;
		var h = ctx.canvas.height;
		var color = ['#dbd270', '#ff9900', '#eb5959', '#5eb0f7', '#2bed3e', '#9370db'];
		var value = [];
		temp1 = {};
		temp2 = {};
		temp3 = {};
		temp4 = {};
		temp5 = {};
		temp6 = {};
		r1 = 0;
		r2 = 0;
		r3 = 0;
		r4 = 0;
		r5 = 0;
		r6 = 0;
		pp1 = "Disgust: 0%";
		pp2 = "Surprise: 0%";
		pp3 = "Anger: 0%";
		pp4 = "Sad: 0%";
		pp5 = "Happy: 0%";
		pp6 = "Fear: 0%";
		//draw bubble
		function drawBubble(x, y, r, n, opa) {
			ctx.save();
			var i = n % (color.length);
			ctx.globalAlpha = opa;
			ctx.strokeStyle = 'rgba(0,0,0,0.5)';
			ctx.lineWidth = 1;
			ctx.fillStyle = color[i];
			ctx.beginPath();
			ctx.moveTo(x, y);
			ctx.arc(x, y, r, 0, 2 * Math.PI, true);
			ctx.stroke();
			ctx.closePath();

			ctx.fill();
			//add aperture
			ctx.beginPath();
			ctx.strokeStyle = 'rgba(255,255,255,0.5)';
			ctx.lineCap = 'round';
			ctx.lineWidth = 3;
			ctx.arc(x, y, r / 2, (Math.PI * 2) / 0.9, (Math.PI * 2), true);
			ctx.stroke();
			ctx.restore();
		}
		//insert data
		function putValue1(x, y, mx, my) {
			temp1.color = 0;
			temp1.opa = 0.95;
			temp1.x = x;
			temp1.y = y;
			temp1.movex = mx;
			temp1.movey = my;
			value.push(temp1);
		}

		function putValue2(x, y, mx, my) {

			temp2.color = 1;
			temp2.opa = 0.95;
			temp2.x = x;
			temp2.y = y;
			temp2.movex = mx;
			temp2.movey = my;
			value.push(temp2);
		}

		function putValue3(x, y, mx, my) {

			temp3.color = 2;
			temp3.opa = 0.95;
			temp3.x = x;
			temp3.y = y;
			temp3.movex = mx;
			temp3.movey = my;
			value.push(temp3);
		}

		function putValue4(x, y, mx, my) {

			temp4.color = 3;
			temp4.opa = 0.95;
			temp4.x = x;
			temp4.y = y;
			temp4.movex = mx;
			temp4.movey = my;
			value.push(temp4);
		}

		function putValue5(x, y, mx, my) {

			temp5.color = 4;
			temp5.opa = 0.95;
			temp5.x = x;
			temp5.y = y;
			temp5.movex = mx;
			temp5.movey = my;
			value.push(temp5);
		}

		function putValue6(x, y, mx, my) {

			temp6.color = 5;
			temp6.opa = 0.95;
			temp6.x = x;
			temp6.y = y;
			temp6.movex = mx;
			temp6.movey = my;
			value.push(temp6);
		}

		//move
		function move(r, item, opa) {
			var newx = item.x + item.movex * 5;
			var newy = item.y + item.movey * 5;
			//determine whether is reach border
			if (newx > r && newx < (w - r) && newy > r && newy < (h - r)) {
				drawBubble(newx, newy, r, item.color, item.opa);
				item.x = newx;
				item.y = newy;
			} else if ((newx >= (w - r) && newy >= (h - r)) || (newx >= (w - r) && newy < r) || (newx < r && newy < r) || (newx < r && newy > (h - r))) //corner
			{
				drawBubble(newx, newy, r, item.color, item.opa);
				item.x = newx;
				item.y = newy;
				item.movex = 0 - item.movex;
				item.movex = 0 - item.movex;
			} else if (newx >= (w - r) || newx < r) //left and right border
			{
				drawBubble(newx, newy, r, item.color, item.opa);
				item.x = newx;
				item.y = newy;
				item.movex = 0 - item.movex;
			} else if (newy >= (h - r) || newy < r) //top and bottom border
			{
				drawBubble(newx, newy, r, item.color, item.opa);
				item.x = newx;
				item.y = newy;
				item.movey = 0 - item.movey;
			}
		}

		function draw1(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue1(x, y, Math.random() - 0.2, Math.random() - 0.2);
		}

		function draw2(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue2(x, y, Math.random() - 0.5, Math.random() - 0.5);
		}

		function draw3(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue3(x, y, Math.random() - 0.3, Math.random() - 0.3);
		}

		function draw4(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue4(x, y, Math.random() - 0.1, Math.random() - 0.1);
		}

		function draw5(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue5(x, y, Math.random() - 0.7, Math.random() - 0.7);
		}

		function draw6(x, y, r, n) {
			drawBubble(x, y, r, n);
			putValue6(x, y, Math.random() - 0.6, Math.random() - 0.6);
		}

		function draw() {
			//bubble radius
			r1 = document.getElementById('disgust').value * 35;
			r2 = document.getElementById('surprise').value * 35;
			r3 = document.getElementById('anger').value * 35;
			r4 = document.getElementById('sad').value * 35;
			r5 = document.getElementById('happy').value * 35;
			r6 = document.getElementById('fear').value * 35;

			ctx.clearRect(0, 0, canvas.width, canvas.height);
			ctx.fillStyle = 'rgb(223, 238, 240)';
			ctx.fillRect(0, 0, w, h);

			draw1(w - 100, h / 2, r1, 0);
			draw2(w - 200, h / 2, r2, 1);
			draw3(w - 300, h / 2, r3, 2);
			draw4(w - 400, h / 2, r4, 3);
			draw5(w - 500, h / 2, r5, 4);
			draw6(w - 600, h / 2, r6, 5);
		}

		//set intervel timer
		setInterval(function() {
			ctx.clearRect(0, 0, w, h);
			ctx.fillStyle = 'rgb(223, 238, 240)';
			ctx.fillRect(0, 0, w, h);
			move(r1, temp1);
			move(r2, temp2);
			move(r3, temp3);
			move(r4, temp4);
			move(r5, temp5);
			move(r6, temp6);
			canvas.style.width = "500px";
			canvas.style.height = "125px";
			ctx.font = "35px Microsoft YaHei";
			ctx.fillStyle = "#dbd270";
			ctx.fillText(pp1, 3, 30);
			ctx.fillStyle = "#ff9900";
			ctx.fillText(pp2, 3, 70);
			ctx.fillStyle = "#eb5959";
			ctx.fillText(pp3, 3, 110);
			ctx.fillStyle = "#5eb0f7";
			ctx.fillText(pp4, 3, 150);
			ctx.fillStyle = "#2bed3e";
			ctx.fillText(pp5, 3, 190);
			ctx.fillStyle = "#9370db";
			ctx.fillText(pp6, 3, 230);
		}, 100);

		canvas.addEventListener('click', function(event) {
			var rect = canvas.getBoundingClientRect();

			if (((temp1.x - r1) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp1.x + r1)) && ((temp1.y - r1) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp1.y + r1))) {
				interval1 = setInterval(function() {
					r1++; //increase radius
					temp1.opa -= 0.1; //decrease opacity
					if (temp1.opa <= 0) {
						r1 = 0;
						clearInterval(interval1);
					}
				}, 13);
			}
			if (((temp2.x - r2) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp2.x + r2)) && ((temp2.y - r2) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp2.y + r2))) {
				interval2 = setInterval(function() {
					r2++; //increase radius
					temp2.opa -= 0.1; //decrease opacity
					if (temp2.opa <= 0) {
						r2 = 0;
						clearInterval(interval2);
					}
				}, 13);
			}
			if (((temp3.x - r3) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp3.x + r3)) && ((temp3.y - r3) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp3.y + r3))) {
				interval3 = setInterval(function() {
					r3++; //increase radius
					temp3.opa -= 0.1; //decrease opacity
					if (temp3.opa <= 0) {
						r3 = 0;
						clearInterval(interval3);
					}
				}, 13);
			}
			if (((temp4.x - r4) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp4.x + r4)) && ((temp4.y - r4) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp4.y + r4))) {
				interval4 = setInterval(function() {
					r4++; //increase radius
					temp4.opa -= 0.1; //decrease opacity
					if (temp4.opa <= 0) {
						r4 = 0;
						clearInterval(interval4);
					}
				}, 13);
			}
			if (((temp5.x - r5) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp5.x + r5)) && ((temp5.y - r5) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp5.y + r5))) {
				document.getElementById("disgust").innerHTML = "Happiness will always be with you!";
			}
			if (((temp6.x - r6) <= ((event.clientX - rect.left) * 2) && ((event.clientX - rect.left) * 2) <= (temp6.x + r6)) && ((temp6.y - r6) <= ((event.clientY - rect.top) * 2) && ((event.clientY - rect.top) * 2) <= (temp6.y + r6))) {
				interval6 = setInterval(function() {
					r6++; //increase radius
					temp6.opa -= 0.1; //decrease opacity
					if (temp6.opa <= 0) {
						r6 = 0;
						clearInterval(interval6);
					}
				}, 13);
			}
		}, false)
	</script>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><em>Copyright &copy; 2019. GenerationWhy.<a target="_blank"></a></em></span>
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
	<script type="text/javascript">
	</script>
</body>

</html>