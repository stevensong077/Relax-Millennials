<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset='utf-8' />
  <title>Activity - Relax, millennials</title>
  <meta name='robots' content='noindex, nofollow'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet'>
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.2.1/mapbox-gl.css' rel='stylesheet' />

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
  <!--<link rel="stylesheet" href="css/animations.css">-->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/color1.css">
  <link rel="stylesheet" href="css/activity.css" charset="utf-8">
  <link rel="stylesheet" href="css/drop_down.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <!--add search box-->
  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.min.js'></script>
  <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.1/mapbox-gl-geocoder.css' type='text/css' />
</head>

<body id="page-top" class="index about_body">

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
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>

    <div id="page_header">
      <div class="page_title">
        <h3>Venue</h3>
        <ol class="breadcrumb" style="margin-left: -4%;">
          <li><a href="index.php">Home</a></li>
          <li class="active">Activity</li>
        </ol>
      </div>
    </div>

    <div class="container-fluid  bg-light-gray" style="margin:30px; padding:6px; font-family: 'Josefin Sans', sans-serif; font-weight:600">
      <br>
      <div class="col-md-12">
        <div class="why-right">
          <div class="content-area" style="text-align: center">
            <p style="font-size:150%;">
              We have prepared detailed information about three kinds of activity places for you <br>
              Selecting your favorite one by clicking the button below <br>
            </p>
            <p style="font-size:110%;">
              (If you want more information about the location, click the link in the list to find more information)
            </p>
          </div>
        </div>
      </div>
    </div>

  </header>
  <section class="price-plan text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-heading">Select one Category</h3>
        </div>
      </div>
      <div class="row"><a href="#service-heading">
          <div class="col-md-3 col-md-offset-1 minus">
            <div id="location1" class="pricing-box">
              <div class="circle"><img src="images/phone.png">
              </div>
              <h4 class="service-heading">Sports</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div id="location2" class="pricing-box">
              <div class="circle"><img src="images/marketing.png">
              </div>
              <h4 class="service-heading">Entertainment <br> (Live shows)</h4>
            </div>
          </div>
          <div class="col-md-3">
            <div id="location3" class="pricing-box">
              <div class="circle"><img src="images/brand.png">
              </div>
              <h4 id="service-heading" class="service-heading">Worship</h4>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>


  <div class='sidebar'>
    <div class='heading drop-box'>
      <h1 id=bar_title class="txt">Lists</h1>
      <ul class="menu">
        <li sort="0" id="location11">Sports</li>
        <li sort="1" id="location22">Entertainment</li>
        <li sort="2" id="location33">Worship</li>
      </ul>
    </div>
    <div id='listings' class='listings' style='scroll-behavior:smooth;'></div>
  </div>
  <div id='map' class='map'> </div>

  <?php include 'get_sports.php';
  include 'get_live.php';
  include 'get_church.php';
  ?>

  <script>
    // This will let you use the .remove() function later on
    if (!('remove' in Element.prototype)) {
      Element.prototype.remove = function() {
        if (this.parentNode) {
          this.parentNode.removeChild(this);
        }
      };
    }

    //add access token
    <?php include 'accessToken.php'; ?>
    mapboxgl.accessToken = "<?php echo ($accessToken); ?>";

    // This adds the map
    var map = new mapboxgl.Map({
      // container id specified in the HTML
      container: 'map',
      // style URL
      style: 'mapbox://styles/mapbox/streets-v11',
      // initial position in [long, lat] format
      center: ["144.96681", "-37.818078"],
      // initial zoom
      zoom: 13,
      scrollZoom: true
    });

    var geocoder = new MapboxGeocoder({
      accessToken: mapboxgl.accessToken,
      language: 'en',
      mapboxgl: mapboxgl
    });

    //add search box
    map.addControl(geocoder, 'top-left');

    // Add geolocate control to the map.
    map.addControl(new mapboxgl.GeolocateControl({
      positionOptions: {
        enableHighAccuracy: true
      },
      trackUserLocation: true
    }));

    var place1 = <?php echo ($final_sports); ?>;
    var place2 = <?php echo ($final_live); ?>;
    var place3 = <?php echo ($final_church); ?>;

    //first category shown on the map
    var locationDiv1 = document.getElementById("location1");
    var locationDiv11 = document.getElementById("location11");
    var locationArr1 = [locationDiv1, locationDiv11];

    for (j = 0; locationArr1[j] != null; j++) {
      locationArr1[j].onclick = function() {

        var barTitle = document.getElementById("bar_title");
        document.getElementById("bar_title").innerHTML = "Sports Venue"
        //call back the map size and recenter
        callback();

        //remove the popup
        var re = document.getElementsByClassName('mapboxgl-popup');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        //remove the list
        var re = document.getElementsByClassName('item');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        buildLocationList1(place1);

        // This adds the data to the map
        map.on('load', function(e) {
          // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
          map.addSource("places", {
            "type": "geojson",
            "data": place1
          });
          // Initialize the list
          buildLocationList1(place1);
        });

        //remove the marker
        var re = document.getElementsByClassName('marker2 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        //remove the marker
        var re = document.getElementsByClassName('marker3 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        // This is where your interactions with the symbol layer used to be
        // Now you have interactions with DOM markers instead
        place1.features.forEach(function(marker1, i) {
          // Create an img element for the marker
          var el = document.createElement('div');
          el.id = "marker1-" + i;
          el.className = 'marker1';
          // Add markers to the map at all points
          new mapboxgl.Marker(el, {
              offset: [0, -23]
            })
            .setLngLat(marker1.geometry.coordinates)
            .addTo(map);

          el.addEventListener('click', function(e) {
            // 1. Fly to the point
            flyToStore(marker1);

            // 2. Close all other popups and display popup for clicked place
            createPopUp1(marker1);

            // 3. Highlight listing in sidebar (and remove highlight for all other listings)
            var activeItem = document.getElementsByClassName('active');

            e.stopPropagation();
            if (activeItem[0]) {
              activeItem[0].classList.remove('active');
            }

            var listing = document.getElementById('listing-' + i);
            listing.classList.add('active');

            flyToList(listing);
          });
        });
      }
    }

    //second category shown on the map
    var locationDiv2 = document.getElementById("location2");
    var locationDiv22 = document.getElementById("location22");
    var locationArr2 = [locationDiv2, locationDiv22];
    for (j = 0; locationArr2[j] != null; j++) {
      locationArr2[j].onclick = function() {

        var barTitle = document.getElementById("bar_title");
        document.getElementById("bar_title").innerHTML = "Entertainment"

        //call back the map size and recenter
        callback();


        //remove the popup
        var re = document.getElementsByClassName('mapboxgl-popup');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        var re = document.getElementsByClassName('item');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        buildLocationList2(place2);
        // This adds the data to the map
        map.on('load', function(e) {
          // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
          map.addSource("places", {
            "type": "geojson",
            "data": place2
          });
          // Initialize the list
          buildLocationList2(place2);
        });

        //remove the marker
        var re = document.getElementsByClassName('marker1 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        //remove the marker
        var re = document.getElementsByClassName('marker3 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        // This is where your interactions with the symbol layer used to be
        // Now you have interactions with DOM markers instead
        place2.features.forEach(function(marker2, i) {
          // Create an img element for the marker
          var el = document.createElement('div');
          el.id = "marker2-" + i;
          el.className = 'marker2';
          // Add markers to the map at all points
          new mapboxgl.Marker(el, {
              offset: [0, -23]
            })
            .setLngLat(marker2.geometry.coordinates)
            .addTo(map);

          el.addEventListener('click', function(e) {
            // 1. Fly to the point
            flyToStore(marker2);

            // 2. Close all other popups and display popup for clicked place
            createPopUp2(marker2);

            // 3. Highlight listing in sidebar (and remove highlight for all other listings)
            var activeItem = document.getElementsByClassName('active');

            e.stopPropagation();
            if (activeItem[0]) {
              activeItem[0].classList.remove('active');
            }

            var listing = document.getElementById('listing-' + i);
            listing.classList.add('active');

            flyToList(listing);
          });
        });
      }
    }

    //third category shown on the map
    var locationDiv3 = document.getElementById("location3");
    var locationDiv33 = document.getElementById("location33");
    var locationArr3 = [locationDiv3, locationDiv33];
    for (j = 0; locationArr3[j] != null; j++) {
      locationArr3[j].onclick = function() {

        var barTitle = document.getElementById("bar_title");
        document.getElementById("bar_title").innerHTML = "Church"

        //call back the map size and recenter
        callback();

        //remove the popup
        var re = document.getElementsByClassName('mapboxgl-popup');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        var re = document.getElementsByClassName('item');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }
        buildLocationList3(place3);

        // This adds the data to the map
        map.on('load', function(e) {
          // This is where your '.addLayer()' used to be, instead add only the source without styling a layer
          map.addSource("places", {
            "type": "geojson",
            "data": place3
          });
          // Initialize the list
          buildLocationList3(place3);
        });

        //remove the marker
        var re = document.getElementsByClassName('marker1 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        //remove the marker
        var re = document.getElementsByClassName('marker2 mapboxgl-marker mapboxgl-marker-anchor-center');
        for (var i = re.length - 1; i >= 0; i--) {
          re[i].remove();
          console.log(i);
        }

        // This is where your interactions with the symbol layer used to be
        // Now you have interactions with DOM markers instead
        place3.features.forEach(function(marker3, i) {
          // Create an img element for the marker
          var el = document.createElement('div');
          el.id = "marker3-" + i;
          el.className = 'marker3';
          // Add markers to the map at all points
          new mapboxgl.Marker(el, {
              offset: [0, -23]
            })
            .setLngLat(marker3.geometry.coordinates)
            .addTo(map);

          el.addEventListener('click', function(e) {
            // 1. Fly to the point
            flyToStore(marker3);

            // 2. Close all other popups and display popup for clicked place
            createPopUp3(marker3);

            // 3. Highlight listing in sidebar (and remove highlight for all other listings)
            var activeItem = document.getElementsByClassName('active');

            e.stopPropagation();
            if (activeItem[0]) {
              activeItem[0].classList.remove('active');
            }

            var listing = document.getElementById('listing-' + i);
            listing.classList.add('active');

            flyToList(listing);
          });
        });
      }
    }

    //focus on the point that user select
    function flyToStore(currentFeature) {
      map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 17
      });
    }

    //focus on the location from list that user selected from map
    function flyToList(list) {
      list.scrollIntoViewIfNeeded({
        behavior: "smooth"
      });
    }

    //call back the map size, and recenter
    function callback() {
      map.flyTo({
        center: ["144.96681", "-37.818078"],
        zoom: 13.5
      });
    }

    function createPopUp1(currentFeature) {
      var popUps = document.getElementsByClassName('mapboxgl-popup');
      if (popUps[0]) popUps[0].remove();


      var popup = new mapboxgl.Popup({
          closeOnClick: false
        })
        .setLngLat(currentFeature.geometry.coordinates)
        .setHTML('<h4>' + currentFeature.properties.Venue + '</h4>' +
          '<h5>' + currentFeature.properties.Opening_hours + '</h5>')
        .addTo(map);
    }

    function buildLocationList1(data) {
      for (i = 0; i < data.features.length; i++) {
        var currentFeature = data.features[i];
        var prop = currentFeature.properties;

        var listings = document.getElementById('listings');
        var listing = listings.appendChild(document.createElement('div'));
        listing.className = 'item';
        listing.id = "listing-" + i;

        var link = listing.appendChild(document.createElement('a'));
        link.href = '#service-heading';
        link.className = 'title';
        link.dataPosition = i;
        link.innerHTML = prop.Venue;

        var details = listing.appendChild(document.createElement('div'));
        details.innerHTML = "<p>" + "<img src='images/call.png' width='15' height='15'>" + "&nbsp" + "&nbsp" + "Phone: " + prop.Phone + "<br>" + "<img src='images/map.png' width='15' height='15'>" + "&nbsp" + "&nbsp" + "<a href=" + prop.Websites + " target=_blank>Website links</a>" + "</p>";
        if (prop.phone) {
          details.innerHTML += ' &middot; ' + prop.phoneFormatted;
        }

        link.addEventListener('click', function(e) {
          // Update the currentFeature to the place associated with the clicked link
          var clickedListing = data.features[this.dataPosition];

          // 1. Fly to the point
          flyToStore(clickedListing);

          // 2. Close all other popups and display popup for clicked place
          createPopUp1(clickedListing);

          // 3. Highlight listing in sidebar (and remove highlight for all other listings)
          var activeItem = document.getElementsByClassName('active');

          if (activeItem[0]) {
            activeItem[0].classList.remove('active');
          }
          this.parentNode.classList.add('active');

        });
      }
    }

    function createPopUp2(currentFeature) {
      var popUps = document.getElementsByClassName('mapboxgl-popup');
      if (popUps[0]) popUps[0].remove();


      var popup = new mapboxgl.Popup({
          closeOnClick: false
        })
        .setLngLat(currentFeature.geometry.coordinates)
        .setHTML('<h4>' + currentFeature.properties.Venue + '</h4>' +
          '<h5>' + currentFeature.properties.Address + '</h5>')
        .addTo(map);
    }

    function buildLocationList2(data) {
      for (i = 0; i < data.features.length; i++) {
        var currentFeature = data.features[i];
        var prop = currentFeature.properties;

        var listings = document.getElementById('listings');
        var listing = listings.appendChild(document.createElement('div'));
        listing.className = 'item';
        listing.id = "listing-" + i;

        var link = listing.appendChild(document.createElement('a'));
        link.href = '#service-heading';
        link.className = 'title';
        link.dataPosition = i;
        link.innerHTML = prop.Venue;

        var details = listing.appendChild(document.createElement('div'));
        details.innerHTML = "<p>" + "<img src='images/map.png' width='15' height='15'>" + "&nbsp" + "&nbsp" + "<a href=" + prop.Websites + " target=_blank>Website links</a>" + "</p>";
        if (prop.phone) {
          details.innerHTML += ' &middot; ' + prop.phoneFormatted;
        }

        link.addEventListener('click', function(e) {
          // Update the currentFeature to the place associated with the clicked link
          var clickedListing = data.features[this.dataPosition];

          // 1. Fly to the point
          flyToStore(clickedListing);

          // 2. Close all other popups and display popup for clicked place
          createPopUp2(clickedListing);

          // 3. Highlight listing in sidebar (and remove highlight for all other listings)
          var activeItem = document.getElementsByClassName('active');

          if (activeItem[0]) {
            activeItem[0].classList.remove('active');
          }
          this.parentNode.classList.add('active');

        });
      }
    }

    function createPopUp3(currentFeature) {
      var popUps = document.getElementsByClassName('mapboxgl-popup');
      if (popUps[0]) popUps[0].remove();


      var popup = new mapboxgl.Popup({
          closeOnClick: false
        })
        .setLngLat(currentFeature.geometry.coordinates)
        .setHTML('<h4>' + currentFeature.properties.Venue + '</h4>' +
          '<h5>' + currentFeature.properties.Opening_hours + '</h5>')
        .addTo(map);
    }

    function buildLocationList3(data) {
      for (i = 0; i < data.features.length; i++) {
        var currentFeature = data.features[i];
        var prop = currentFeature.properties;

        var listings = document.getElementById('listings');
        var listing = listings.appendChild(document.createElement('div'));
        listing.className = 'item';
        listing.id = "listing-" + i;

        var link = listing.appendChild(document.createElement('a'));
        link.href = '#service-heading';
        link.className = 'title';
        link.dataPosition = i;
        link.innerHTML = prop.Venue;

        var details = listing.appendChild(document.createElement('div'));
        details.innerHTML = "<p>" + "<img src='images/pray.png' width='15' height='15'>" + "&nbsp" + "&nbsp" + "Type:  " + prop.Type + "<br>" + "<img src='images/call.png' width='15' height='15'>" + "&nbsp" + "&nbsp" + "Phone:  " + prop.Phone + "</p>";
        if (prop.phone) {
          details.innerHTML += ' &middot; ' + prop.phoneFormatted;
        }

        link.addEventListener('click', function(e) {
          // Update the currentFeature to the place associated with the clicked link
          var clickedListing = data.features[this.dataPosition];

          // 1. Fly to the point
          flyToStore(clickedListing);

          // 2. Close all other popups and display popup for clicked place
          createPopUp3(clickedListing);

          // 3. Highlight listing in sidebar (and remove highlight for all other listings)
          var activeItem = document.getElementsByClassName('active');

          if (activeItem[0]) {
            activeItem[0].classList.remove('active');
          }
          this.parentNode.classList.add('active');

        });
      }
    }
  </script>

  <footer id="footer" style="margin-top:-3%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div style="margin-right:-90%;margin-bottom:-3%;"><a href="#page-top" class="page-scroll btn btn-primary">Back to top</a></div>
          <div><span class="copyright" style="display:inline-block; margin-right:0%;"> <em>Copyright &copy; 2019. GenerationWhy.<a target="_blank"></a></em></span></div>
          <div>©Icons made by <a href="https://www.flaticon.com/authors/surang" title="surang">surang</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            &nbsp &nbsp ©Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
          <div>©Icons made by <a href="https://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            &nbsp &nbsp ©Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
            &nbsp &nbsp ©Icons made by <a href="https://www.flaticon.com/authors/yannick" title="Yannick">Yannick</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
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