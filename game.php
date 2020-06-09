<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Chain Story - Relax, millennials</title>
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
	<script src="js/jQuery.js"></script>
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body id="page-top" class="contact-us">
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
		</div>
	</nav>

	<div id="page_header">
		<div class="page_title">
			<h3> Chain Story</h3>
			<ol class="breadcrumb" style="margin-left: -4%;">
				<li><a href="index.php">Home</a></li>
				<li class="active"><a href="story.php">Story</a></li>
				<li class="active"><a href="lobby.php">Lobby</a></li>
				<li class="active">Chain-story</li>
			</ol>
		</div>
	</div>

	<div class="container-fluid  bg-light-gray" style="margin:60px; padding:0px; margin-top:20px; margin-bottom:20px;" id="paragraph">
		<br>
		<div class="col-md-12">
			<div class="why-right">
				<div class="content-area">
					<p style="text-align: center; font-size:20px;">
						Everyone has three turns, with each turn you will be provided with three random words and 3min to compose<br>
						Press enter to submit your part and write a funny story by collaborating with others !<br><br>
						Please wait patiently, game will begin when the room is full<br>
						When the room is full, press ready to start the game<br>
						(You have 20 seconds to get ready)
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid  bg-light-gray" style="margin:60px; padding:15px; margin-top:30px; min-height:200px;" id="focus">
		<div class="col-md-12">
			<div class="why-right">
				<div class="content-area" style="text-align: left ">
					<input style="display:none;" id="name" type="text" value="<?php if (isset($_POST['username'])) {
																					echo $_POST['username'];
																				}; ?>"></input>
					<input style="display:none;" id="index" type="text"></input>
					<input style="display:none;" id="randomid" type="text"></input>
					<input style="display:none;" id="turnofnowid" type="text"></input>
					<input style="display:none;" id="address" type="text"></input>
					<input style="display:none;" id="round1" type="text"></input>
					<input style="display:none;" id="round2" type="text"></input>
					<input style="display:none;" id="round3" type="text"></input>

					<div id="count" style="font-size: 20px;"></div>

					<div id="wrap" style="padding-top:9px; display:inline;">
						<div id="main">
							<div id="allspace" class="all_space" style="font-size: 16px;">
							</div>
						</div>
					</div>

					<div id="random" style="display:none;">
						<div style="text-align: left ;font-size: 18px; padding-top:80px;">
							(Three words you have to use in this turn)
						</div>
						<div id="info1" style="text-align: left ;font-size: 18px;"></div>
						<div id="info2" style="text-align: left ;font-size: 18px;"></div>
						<div id="info3" style="text-align: left ;font-size: 18px;"></div>

						<div id="nani" style="margin-left:75%; font-size:115%;"></div>
						<div id="timeout" style="margin-left:75%; font-size:115%;"></div>

						<div class="send" id="sendmessage" style="height:38px">
							<div class="input-group" style="padding-top:10px;">
								<span class="input-group-addon" style="-webkit-app-region: drag;">Content</span>
								<input id="text" type="text" class="form-control" />
							</div>
						</div>
					</div>
					<button id="readybutton" onclick="goready()" style="display:none;" class="btn btn-primary">Ready</button>
				</div>
				<div id="over"></div>
			</div>
		</div>
	</div>

	<script type="application/javascript">
		//game rules
		var indexready = 10;
		var roundout = 0;
		var timeout = 20;

		//save input and send input
		window.onload = function() {
			groupindex();
			check();
			count();
			saveWords();
			scroll();
		}

		//recognise enter key and send text
		document.onkeydown = function() {
			var html = document.getElementById('text').value.trim();
			if (html) {
				if (window.event && window.event.keyCode == 13) {
					checkmsg();
				}
			}
		}

		//put user into a group
		function groupindex() {
			var xmlhttp;
			xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var myString = xmlhttp.responseText;
					var result = myString.split(",");
					document.getElementById("index").value = result[0];
					document.getElementById("randomid").value = result[1];
				}
			};
			xmlhttp.open("POST", "groupindex.php?username=" + document.getElementById('name').value + "&ip=" + document.getElementById('address').value, false);
			xmlhttp.send();
		}

		function checkHtml(htmlStr) {
			var reg = /<[^>]+>/g;
			return reg.test(htmlStr);
		}

		<?php include 'get_bad.php'; ?>
		var bad = <?php echo ($json_bad); ?>;

		//validation
		function checkmsg() {
			var html = document.getElementById('text').value;
			var decision;

			if (!checkHtml(html)) {
				for (var i = 0; i < bad.length; i++) {
					var obj = bad[i].word;
					// learn from https://stackoverflow.com/questions/5379365/match-exact-string-in-a-sentence
					myPattern = "\\b" + obj.replace(" ", "\\b \\b") + "\\b";
					myPattern2 = myPattern.replace("*", "\\*");
					myPattern3 = myPattern2.replace("(", "\\(");
					myPattern4 = myPattern3.replace(")", "\\)");

					slangPattern = "\\b" + slang.replace(" ", "\\b \\b") + "\\b";
					normalPattern1 = "\\b" + normal1.replace(" ", "\\b \\b") + "\\b";
					normalPattern2 = "\\b" + normal2.replace(" ", "\\b \\b") + "\\b";

					if (html.toLowerCase().match(myPattern4.toLowerCase()) == null) {
						decision = 1;
					} else {
						decision = 2;
						i = bad.length;
					}
				}

				if (decision == 1) {
					if (html.toLowerCase().match(slangPattern.toLowerCase()) == null ||
						html.toLowerCase().match(normalPattern1.toLowerCase()) == null ||
						html.toLowerCase().match(normalPattern2.toLowerCase()) == null) {
						alert("You must use the words provided to you!");
					} else {
						send();
					}
				} else {
					alert("Please do not use any improper word!");
				}
			};
		};

		//send user information
		function send() {
			var xmlhttp;
			var get = document.getElementById('text').value;
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}

			if (document.getElementById('text').value != "") {
				if (document.getElementById('name').value != "") {
					var team = document.getElementById('index').value;
					xmlhttp.open("POST", "./write.php?password=<?php echo wpassword; ?>&message=" + get + "&username=" + document.getElementById('name').value + "&index=" + team + "&randomid=" + document.getElementById("randomid").value, true);
					xmlhttp.send();
					document.getElementById('text').value = "";

					setTimeout("scroll()", 320);
				}
			}
		}

		//check the user information and status
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

			if (document.getElementById('name').value != "") {
				var nima = document.getElementById('index').value;
				xmlhttp.open("POST", "read.php?username=" + document.getElementById('name').value + "&index=" + nima, true);
				xmlhttp.send();
			} else {
				document.getElementById("allspace").innerHTML = "<center style=\"-webkit-app-region: drag;\"><font color=\"#C2C2DA\">Illegal Request</font></center>"
				document.getElementById("footer").style = "display:none";
			}
			setTimeout("check()", 1000)
		}

		//count number of user in the room
		function count() {
			getreadyindex = 0;

			var xmlhttp;
			var get = document.getElementById('index').value;
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					document.getElementById("count").value = xmlhttp.responseText;
					document.getElementById("count").innerHTML = "Number of players in room: " + xmlhttp.responseText + "/3";
				}
			};
			xmlhttp.open("POST", "count.php?id=" + document.getElementById('index').value, false);
			xmlhttp.send();
			if (document.getElementById("count").value != 3) {
				setTimeout("count()", 1000)
			} else {
				showbutton();
				ready()
			}
		}

		function ready() {
			var xmlhttp;
			var get = document.getElementById('index').value;
			xmlhttp = new XMLHttpRequest();
			var name = document.getElementById('name').value;
			var readyindex = 0;
			var wocao = 0;

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					readyindex = xmlhttp.responseText;
				}
			};
			xmlhttp.open("POST", "ready.php?id=" + document.getElementById('index').value + "&name=" + name, false);
			xmlhttp.send();
			if (readyindex == 3) {
				getallready()
			} else {
				if (getreadyindex == 20) {
					var xmlhttp;
					xmlhttp = new XMLHttpRequest();
					var name = document.getElementById('name').value;

					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							document.getElementById("count").value = xmlhttp.responseText;
							document.getElementById("count").innerHTML = xmlhttp.responseText;
						}
					};
					xmlhttp.open("POST", "rewait.php?id=" + document.getElementById('index').value + "&name=" + name, true);
					xmlhttp.send();

					alert("Please join a room again");
					window.location.href = 'lobby.php';

				} else {
					getreadyindex = getreadyindex + 1;
					setTimeout("ready()", 1000)
				}
			}
		}

		//ready for the game, start with random user, hide paragraph, assign turns
		function getallready() {
			document.getElementById('random').style = "display:inline";
			document.getElementById('readybutton').style = "display:none";
			document.getElementById('sendmessage').style = "display:none";
			document.getElementById("paragraph").style = "display:none";
			document.getElementById("count").style = "display:none";

			if (document.getElementById('randomid').value == 1) {
				var xmlhttp;
				xmlhttp = new XMLHttpRequest();
				var name = document.getElementById('name').value;
				xmlhttp.open("POST", "insertTurn.php?id=" + document.getElementById('index').value + "&name=" + name, false);
				xmlhttp.send();
			}
			setTimeout("turn()", 1500);
		}

		//return value if all the users click ready
		function goready() {
			document.getElementById('readybutton').style = "display:none";
			var xmlhttp;
			xmlhttp = new XMLHttpRequest();
			var name = document.getElementById('name').value;
			xmlhttp.open("POST", "goready.php?id=" + document.getElementById('index').value + "&name=" + name + "&ip=" + document.getElementById('address').value, false);
			xmlhttp.send();
		}

		//show the ready button when room is full
		function showbutton() {
			document.getElementById('readybutton').style = "display:inline";
		}

		//arrange turns
		function turn() {
			var xmlhttp;
			var get = document.getElementById('index').value;
			xmlhttp = new XMLHttpRequest();
			var name = document.getElementById('name').value;
			var rea = 0;
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					whoseturn(xmlhttp);
				}
			};
			xmlhttp.open("POST", "Turn.php?id=" + document.getElementById('index').value + "&name=" + name + "&randomid=" + document.getElementById("randomid").value, false);
			xmlhttp.send();
			if (roundout == 0) {
				setTimeout("turn()", 1000);
			}
		}

		//decide which turn it is, and inform user if they used up all the turns
		function whoseturn(xml) {
			var myString = xml.responseText;
			var result = myString.split(",");
			document.getElementById("nani").innerHTML = "(You have " + result[1] + " turns left)";
			document.getElementById("nani").value = result[1];
			document.getElementById("turnofnowid").value = result[2];
			getWords();
			if (result[1] <= 0) {
				roundout = 1;
				document.getElementById('sendmessage').style = "display:none";
				document.getElementById('random').style = "display:none";
				document.getElementById('over').innerHTML = "<br>You've run out of turns <br> The game ends when the last player finish writing <br> We hope you enjoy this game, have a nice day :)";
				document.getElementById('over').style = "display:inline; color: #CD8E76; font-size:130%;";

				gameover();
			} else if (document.getElementById("randomid").value == result[0]) {
				//show input area
				document.getElementById('sendmessage').style = "display:inline";
			} else {
				document.getElementById('sendmessage').style = "display:none";
			}
			timeoutcheck(result[0]);
		}

		//check the input time
		function timeoutcheck(nowid) {
			var xmlhttp;
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					alerttimeout(xmlhttp, nowid);
				}
			};
			xmlhttp.open("POST", "timeoutcheck.php?id=" + document.getElementById('index').value + "&randomid=" + nowid, false);
			xmlhttp.send();
		}

		//countdown timer
		function alerttimeout(xml, nowid) {
			document.getElementById("timeout").innerHTML = "Time left for this turn: " + xml.responseText + "s";
			document.getElementById("timeout").value = xml.responseText;
			if (document.getElementById("timeout").value <= 0) {
				var xmlhttp;
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("POST", "timeout.php?id=" + document.getElementById('index').value + "&randomid=" + nowid + "&turn=" + document.getElementById("turnofnowid").value, false);
				xmlhttp.send();
			}
		}

		//generate and save random words
		function saveWords() {
			var xmlhttp;
			xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					var myString = xmlhttp.responseText;
					var result = myString.split(";");
					document.getElementById("round1").value = result[0];
					document.getElementById("round2").value = result[1];
					document.getElementById("round3").value = result[2];
				}
			};
			xmlhttp.open("POST", "save_words.php?index=" + document.getElementById('index').value, false);
			xmlhttp.send();
		}

		//get and show random words
		function getWords() {
			var userid = document.getElementById("randomid").value;
			var turns = document.getElementById('nani').value;
			var round1Array = document.getElementById("round1").value;
			var round1 = round1Array.split(",");
			var round2Array = document.getElementById("round2").value;
			var round2 = round2Array.split(",");
			var round3Array = document.getElementById("round3").value;
			var round3 = round3Array.split(",");
			slang = "";
			normal1 = "";
			normal2 = "";
			if (userid == 1) {
				if (turns == 3) {
					slang = round1[0];
					normal1 = round1[1];
					normal2 = round1[2];
				} else if (turns == 2) {
					slang = round2[0];
					normal1 = round2[1];
					normal2 = round2[2];
				} else if (turns == 1) {
					slang = round3[0];
					normal1 = round3[1];
					normal2 = round3[2];
				}
			} else if (userid == 2) {
				if (turns == 3) {
					slang = round1[3];
					normal1 = round1[4];
					normal2 = round1[5];
				} else if (turns == 2) {
					slang = round2[3];
					normal1 = round2[4];
					normal2 = round2[5];
				} else if (turns == 1) {
					slang = round3[3];
					normal1 = round3[4];
					normal2 = round3[5];
				}
			} else if (userid == 3) {
				if (turns == 3) {
					slang = round1[6];
					normal1 = round1[7];
					normal2 = round1[8];
				} else if (turns == 2) {
					slang = round2[6];
					normal1 = round2[7];
					normal2 = round2[8];
				} else if (turns == 1) {
					slang = round3[6];
					normal1 = round3[7];
					normal2 = round3[8];
				}
			}

			//provide words
			document.getElementById("info1").innerHTML = "[Millennial word] - " + slang;
			document.getElementById("info2").innerHTML = "[Normal words] - " + normal1;
			document.getElementById("info3").innerHTML = "[Normal words] - " + normal2;
		}

		function gameover() {
			var xmlhttp;
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("POST", "gameover.php?id=" + document.getElementById('index').value, false);
			xmlhttp.send();
		}
	</script>

	<footer id="footer" style="margin-top:0%;">
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

	<!--https://ourcodeworld.com/articles/read/257/how-to-get-the-client-ip-address-with-javascript-only-->
	<script type="application/javascript">
		function getIP(json) {
			document.getElementById("address").innerHTML = json.ip;
			document.getElementById("address").value = json.ip;
		}
	</script>

	<script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
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

	</script>
</body>

</html>