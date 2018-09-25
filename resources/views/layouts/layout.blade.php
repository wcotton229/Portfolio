<!doctype html>
<html lang="{{ app()->getLocale() }}">
     <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="description" content="Personal profile page - ZikZak" />
  <meta name="keywords" content="profile, theme, css, html, jquery, transition, transform" />
  <meta name="robots" content="noindex, follow" />
  <title>William Cotton</title>
  <!--CSS Stylesheet-->
  <link rel='stylesheet' type='text/css' href='/css/blue.css'/>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  {{-- <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'> --}}
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  {{-- <link rel='stylesheet' type='text/css' href='/js/magnific-popup/magnific-popup.css'/>   --}}
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/animate.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
  <script type="text/javascript" src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type='text/javascript' src="/js/script.js"></script>  
  <script src="js/modernizr.custom.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
  <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
  {{-- <script type='text/javascript' src='magnific-popup/jquery.magnific-popup.min.js'></script>  --}}
  {{-- <script src="js/magnific-popup/jquery.magnific-popup.js"></script>  --}}
  <script src="js/jquery.backstretch.min.js"></script>  
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7pzfO-VrdHJYKeg6N3jOSDULWiKBcB6I"></script>
  {{-- Call to the google maps API --}}
  <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(30.0972,-95.6161),
                    scrollwheel: false, 

                    styles: [{stylers:[{hue:'#2c3e50'},{saturation:250}]},{featureType:'road',elementType:'geometry',stylers:[{lightness:50},{visibility:'simplified'}]},{featureType:'road',elementType:'labels',stylers:[{visibility:'off'}]}]
                };

                var mapElement = document.getElementById('map');

                var map = new google.maps.Map(mapElement, mapOptions);
                
                 var marker = new google.maps.Marker({
                            position: map.getCenter(),
                            map: map,
                            title: 'Click to zoom'
                            });
            }
  </script>
  </head>  
  <body>
  <div id="preloader">
      <div id="status">&nbsp;</div>
  </div>
{{-- Nav bar --}}
  <div id="navigation">
    <div class="navigation-wrapper">
    <span id="navigation-name">WILLIAM COTTON</span>  
    <span id="item_1">ABOUT ME</span>
    <span id="item_2">RESUME</span>
    <span id="item_3">MY WORK</span>
    <span id="item_4">CONTACT</span>
    </div>
  </div>
    <div id="form1" runat="server">
    <div id="header-headlines">
        <p>Hello, my name is</p>
        <!--CHANGE YOUR NAME-->
        <span>William Cotton</span>
        <!--CHANGE YOUR PROFESSION-->
        <p>I am a Full Stack Web Developer</p>
    </div>   
        <div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
        <!--CHANGE "#" TO YOUR TWITTER URL, FACEBOOK URL AND LINKEDIN URL-->
        <a href="https://github.com/wcotton229" class="hi-icon hi-icon-mobile"><i class="fa fa-github"></i></a>
        {{-- <a href="https://stackoverflow.com/users/9116203/william-cotton" class="hi-icon hi-icon-screen"><i class="fa fa-stack-overflow"></i></a> --}}
        <a href="https://www.linkedin.com/in/williamwcotton/" class="hi-icon hi-icon-earth"><i class="fa fa-linkedin"></i></a>
        </div>
    <div class="arrow animated bounce">
    <img width="20" height="20" alt="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyDQoJbDE4OS45OTktMTkwYzIwLjE3OC0yMC4xNzgsNTMuMTY0LTE5LjkxMyw3My42NzIsMC41OTVsMCwwYzIwLjUwOCwyMC41MDksMjAuNzcyLDUzLjQ5MiwwLjU5NSw3My42NzFMMjkzLjc1MSw0NTUuODY4eiIvPg0KPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTIyMC4yNDksNDU1Ljg2OGMyMC4xOCwyMC4xNzksNTMuMTY0LDE5LjkxMyw3My42NzItMC41OTVsMCwwYzIwLjUwOS0yMC41MDgsMjAuNzc0LTUzLjQ5MywwLjU5Ni03My42NzINCglsLTE5MC0xOTBjLTIwLjE3OC0yMC4xNzgtNTMuMTY0LTE5LjkxMy03My42NzEsMC41OTVsMCwwYy0yMC41MDgsMjAuNTA5LTIwLjc3Miw1My40OTItMC41OTUsNzMuNjcxTDIyMC4yNDksNDU1Ljg2OHoiLz4NCjwvc3ZnPg0K" />
    </div>     
    <div id="header">   
        <div class="backstretch" id='home-screen'>
        <div id='overlay-black'></div>
        </div>
    </div>
    <div id="main">
        <div id="content">
          <div id="about">
            <div class="headlines" id="headlines-about">ABOUT <p>ME</p>
              <!--UPLOAD YOUR PHOTO TO FOLDER "IMG" WITH SAME NAME - profile-photo.png. THE PHOTO SIZE IS 196 x 196 px-->
              <img id="my_photo" src="/img/portfolio-image.jpg">
            </div>
            <!--CHANGE TEXT ABOUT YOU-->
            <div id="about-me-box">Hi, my name is William Cotton and I am a Full Stack Web Developer with a background in geographic information systems. I graduated from the University of Texas at Austin with a Bachelor's degree in Geography. I have experience in HTML5, CSS3, Bootstrap, ES6, JavaScript, jQuery, Firebase, Node JS, Express, MySQL, MongoDB, Handlebars JS, React, and PHP with experience in RESTful and MVC frameworks. 
              <br>
              <br>
              A little about myself. I enjoy learning new things, which led me to having many hobbies - rock climbing, scuba diving, woodworking, martial arts and hiking to name a few. I enjoy traveling to see new places and learning about their culture. I am a husband to a wonderful wife and a father to my beautiful daughter. I love my family, coding and the outdoors and am a huge fan of The Lord of the Rings triology. Please check out some of my projects below.
              <!--HERE YOU CAN EDIT SKILLS. CHANGE ONLY TEXT BETWEEN <span>-->
              <!--THE VALUTE CHANGE IN FILE script.js-->
              <p class="skills-line" id="line-1"><span>Full Stack</span></p>
              <p class="skills-line" id="line-2"><span>Front-End</span></p>
              <p class="skills-line" id="line-3"><span>Back-End</span></p> 
            </div>
          </div>     
        </div>
        <div id="content1">
            <div id="resume">
              <div class="headlines" id="headlines-resume">RESUME</div>
              <div id="resume-box">
                <div class="selection-resume">
                <div class="icons"><i class="fa fa-leaf"></i></div>
                <!--CHANGE YOUR EMPLOYMENT-->  
                <p class="company">Freelancer</p>
                <!--CHANGE YOUR STATUS--> 
                <p class="position">Full Stack Web Developer</p>
                <!--CHANGE TEXT ABOUT EMPLOYMENT-->
                <p class="description">Recent graduated</p>
                </div>
                <div class="selection-resume">
                <div class="icons"><i class="fa fa-users"></i></div>
                <!--CHANGE YEAR--> 
                <div class="year">Present</div> 
                <p class="company">Thomas Land Surveying</p>
                <p class="position">AutoCAD Draftsman</p>
                <p class="description">Collaborate with engineers, project managers, and clients regarding design parameters.
                <br>
                <br>
                Create detailed technical drawings of Land Surveys according to specifications for residential and commercial projects.
                <br>
                <br>
                Draw sketches to accurate scale showing relation of proposed and existing Right of Ways exact specifications and dimensions.</p>
                </div>
                <div class="selection-resume">
                <div class="icons"><i class="fa fa-users"></i></div>  
                <div class="year">2017 - 2018</div> 
                <p class="company">CenterPoint Energy</p>
                <p class="position">GIS Technician</p>
                <p class="description">Digitized new survey polygons, using ArcGIS, for leak surveys of gas lines and created PDF maps for every area.
                <br>
                <br>
                QA/QC of polygons drawn by co-workers to minimize errors once the project went live.</p>
                </div>
                 <div class="selection-resume">
                <div class="icons"><i class="fa fa-users"></i></div>  
                <div class="year">2015 - 2017</div> 
                <p class="company">Apple, Inc</p>
                <p class="position">GIS Technician</p>
                <p class="description"> Analyze and validate data content and assemble new content from various sources, including databases, files/spreadsheets and websites. 
                <br>
                <br>
                Responsible for content analysis, validation, cleansing, collecting and reporting.
                <br>
                <br>
                QA/QC spatial information received from various vendors for implementation into Apple’s mapping software program.
                <br>
                <br>
                Develop in-depth knowledge of team’s primary software and data structure. </p>
                </div>
                <!--IF YOU NEED NEXT EMPLOYMENT, COPY SELECTION START'S "DIV SELECTION-RESUME" ... -->
                <div class="selection-resume last-selection">
                <div class="icons"><i class="fa fa-camera"></i></div>  
                <div class="year">2008 - 2012</div>   
                <p class="company">University of Texas</p>
                <p class="position">Bachelor of Arts</p>
                <p class="description last-description">I graduated in 2013 from the University of Texas with a bachelors degree in geography with a minor in communication. </p>
                </div>
                <!--AND END HERE-->
              </div>  
            </div>
        </div>
        <div id="content2">
              <div id="work">
              <div class="headlines" id="headlines-portfolio">MY <p>WORK</p>
                <ul id='filter'>
                  <!--EDIT PORTFOLIO CATEGORY NAME'S BETWEEN <li> AND </li>. The data-filter="..." WILL FILTER THE PORTFOLIO BLOCKS WITH CLASS "mix ...". ALL WILL FILTER ALL THE PORTFOLIO BLOCKS. -->
                  <li class="filter" data-filter="all">All</li>
                  {{-- <li class="filter" data-filter="design">Web Development</li>    --}}
                  <li class="filter" data-filter="projects">Projects</li>
                  <li class="filter" data-filter="activities">Activities</li>
                </ul> 
              </div>
              <div id='gallery'>
                <ul class="ch-grid" id='Grid'>
                	<li class="mix projects">
                    <!--IMAGES ARE STORED IN THE FOLDER "IMAGES". THUMBNAILS ARE MARKED WITH A NUMBER 1 TO 6. ORIGINAL SIZE HAVE A NUMBER AND "X".-->
                    <a class="test-popup-link" href="https://github.com/wcotton229/TakeAHike" target="_blank">
          						<div class="ch-item ch-img-1">
          							<div class="ch-info">
          								<h3>Take-A-Hike</h3>
          								<p>Project</p>
          							</div>
          						</div>
                    </a>
					        </li>
        					<li class="mix projects">
                    <a class="test-popup-link" href="https://github.com/KrisBierma/plantos" target="_blank">
          						<div class="ch-item ch-img-2">
          							<div class="ch-info">
          								<h3>Plantos</h3>
          								<p>Project</p>
          							</div>
          						</div>
                    </a>
        					</li>
        					<li class="mix activities">
                    <a class="test-popup-link" href="https://github.com/wcotton229/triviagame" target="_blank">
          						<div class="ch-item ch-img-3">
          							<div class="ch-info">
          								<h3>LOTR Trivia</h3>
          								<p>Activity</p>
          							</div>
          						</div>
                    </a>  
        					</li>
                  <li class="mix activities">
                    <a class="test-popup-link" href="https://github.com/wcotton229/ClickyGame" target="_blank">
                      <div class="ch-item ch-img-4">
                        <div class="ch-info">
                          <h3>Archer ClickyGame</h3>
                          <p>Activity</p>
                        </div>
                      </div>
                    </a> 
                  </li>
                  <li class="mix activities">
                    <a class="test-popup-link" href="https://github.com/wcotton229/MongoScraper" target="_blank">
                      <div class="ch-item ch-img-5">
                        <div class="ch-info">
                          <h3>NY Times Scrapper</h3>
                          <p>Activity</p>
                        </div>
                      </div>
                    </a>  
                  </li>
                  <li class="mix projects">
                    <a class="test-popup-link" href="https://github.com/lmcneel/stalks" target="_blank">
                      <div class="ch-item ch-img-6">
                        <div class="ch-info">
                          <h3>Stock Market Pets</h3>
                          <p>Project</p>
                        </div>
                      </div>
                    </a>   
                  </li>
                </ul>  
              </div>
              </div>
        </div>
        <div id="content3">
            <div id="contact">
              <div class="headlines" id="headlines-contact">GET<p>IN</p><p>TOUCH</p>
                <div>
                  <!--PHONE NUMBER-->
                  <p>832 392 1200 <i class="fa fa-phone"></i></p>
                  <!--EMAIL-->
                  <p>william@william-cotton.com <i class="fa fa-envelope "></i></p>
                  <!--WEBSITE-->
                  <p><a href="william-cotton.com">william-cotton.com</a> <i class="fa fa-globe  "></i></p>
                  <!--ADRESS-->
                  <p>Tomball, TX 77375, US <i class="fa fa-map-marker"></i></p>
                </div>
              </div>
              <div id="resume-box">
                <!--CHANGE TEXT ABOUT YOUR CONTACT-->
                <div class="selection-resume">
                Please contact me for any questions or inquieries
                </div>
                <div id='contact-form'>   
                <form id="contactform" method="post" name="contactform" action="">
                <p>
                <input class='input' type='text' name='name' class='input' placeholder='Your name'>
                </p>
                <p>
                <input class='input' type='text' name='email' class='input' placeholder='Your e-mail'>
                </p>
                <p>
                <textarea name="message" cols="88" rows="6" class="textarea" placeholder='Your message'></textarea>
                </p>
                <p id='p-submit'>
                <input id="submit"  type="submit" name="submit" value="Send your message" class="button">
                </p>
                <div id="success"></div>
                </form>  
                </div>
              </div>  
            </div>
        </div>
        <div id="map"></div>
        <div id="content4">
          <div id="selection-download">
          <!--CHANGE "#" - PASTE YOUR URL TO PDF FILE-->
          {{-- <div id="download"><a href="#">Download as .PDF</a></div> --}}
          <div id="socila-complet">
            <!--CHANGE "#" TO YOUR TWITTER URL, FACEBOOK URL ETC.-->
            {{-- <a href="#"><i class="fa fa-twitter"></i></a> --}}
            <a href="https://www.facebook.com/will.cotton.50"><i class="fa fa-facebook"></i></a>
            {{-- <a href="#"><i class="fa fa-dribbble"></i></a> --}}
            <a href="https://www.pinterest.com/mastrwilliam/"><i class="fa fa-pinterest"></i></a>
            {{-- <a href="#"><i class="fa fa-google-plus"></i></a>  --}}
            <a href="https://www.instagram.com/billywaynec/"><i class="fa fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/williamwcotton/"><i class="fa fa-linkedin"></i></a>
          </div>
          </div>
        </div>  
    </div>
    <p id="back-top">
		<a href="#top"><span><i class="fa fa-arrow-up"></i></span></a>
	  </p>    

    <script language="javascript">
        function autoResizeDiv()
        {
            document.getElementById('header').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>

    <script type="text/javascript">
    $(function(){
     
    $('#Grid').mixitup();
     
    });
    </script>
    {{-- <script type="text/javascript">
            $(document).ready(function() {
            $('.test-popup-link').magnificPopup({type:'image', gallery:{enabled:true}}); 
            });
  </script> --}}
  <script type="text/javascript">
        $(window).load(function() { 
            $('#status').fadeOut(); 
            $('#preloader').delay(350).fadeOut('slow'); 
            $('body').delay(350).css({'overflow':'visible'});
        })
</script> 
</body>
</html>