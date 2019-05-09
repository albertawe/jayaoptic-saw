<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Jaya Optical</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="/css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="/css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="/css/shop.css" type="text/css" />
	<link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="/css/owl.theme.css" type="text/css" media="all">
	<link href="/css/style.css" rel='stylesheet' type='text/css' />
	<link href="/css/fontawesome-all.css" rel="stylesheet">
	<link href="fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<div class="col-md-3 top-info text-left mt-lg-4">
					<h6>Cari kami</h6>
					<ul>
						<li>
							<i class="fas fa-phone"></i> Call</li>
						<li class="number-phone mt-3">123123123</li>
					</ul>
				</div>
				<div class="col-md-6 logo-w3layouts text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="index.html">
							Jaya Optical </a>
					</h1>
				</div>
			</div>
			<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav nav-mega mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="/">Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/genk">Pemilihan Kacamata</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/gensl">Pemilihan softlens</a>
						</li>
                        @if (!\Auth::user())
                        <li class="nav-item">
							<a class="nav-link" href="/login">login</a>
						</li>
                        @else
                        <li class="nav-item">
							<a class="nav-link" href="/addk">Add Kacamata</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="/editkc">edit kriteria Kacamata</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/addsl">Add softlens</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="/editsl">edit kriteria softlens</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }} </form>
						</li>
                        @endif

					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
        @yield('content')
        <!--footer -->
        <footer class="py-lg-5 py-3">
                <div class="container-fluid px-lg-5 px-3">
                    <div class="row footer-top-w3layouts">
                        <div class="col-lg-3 footer-grid-w3ls">
                            <div class="footer-title">
                                <h3>Tentang Kami</h3>
                            </div>
                            <div class="footer-text">
                                <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at
                                    tellus. Nulla porttitor accumsana tincidunt.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 footer-grid-w3ls">
                            <div class="footer-title">
                                <h3>Temukan Kami</h3>
                            </div>
                            <div class="contact-info">
                                <h4>Location :</h4>
                                <p>0926k 4th block building, king Avenue, New York City.</p>
                                <div class="phone">
                                    <h4>Contact :</h4>
                                    <p>Phone : +121 098 8907 9987</p>
                                    <p>Email :
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 footer-grid-w3ls">
                            <div class="footer-title">
                                <h3>Quick Links</h3>
                            </div>
                            <ul class="links">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <a href="404.html">Error</a>
                                </li>
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="copyright-w3layouts mt-4">
                        <p class="copy-right text-center ">&copy; 2019 Jaya Optical
                        </p>
                    </div>
                </div>
            </footer>
            <!-- //footer -->

            <!--jQuery-->
            <script src="/js/jquery-2.2.3.min.js"></script>
            <!-- newsletter modal -->
            <!--search jQuery-->
            <script src="/js/modernizr-2.6.2.min.js"></script>
            <script src="/js/classie-search.js"></script>
            <script src="/js/demo1-search.js"></script>
            <!--//search jQuery-->
            <script>
                $(document).ready(function () {
                    $(".button-log a").click(function () {
                        $(".overlay-login").fadeToggle(200);
                        $(this).toggleClass('btn-open').toggleClass('btn-close');
                    });
                });
                $('.overlay-close1').on('click', function () {
                    $(".overlay-login").fadeToggle(200);
                    $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
                    open = false;
                });
            </script>
            <!-- carousel -->
            <!-- dropdown nav -->
            <script>
                $(document).ready(function () {
                    $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                    );
                });
            </script>
            <!-- //dropdown nav -->
            <script src="/js/move-top.js"></script>
            <script src="/js/easing.js"></script>
            <script>
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event) {
                        event.preventDefault();
                        $('html,body').animate({
                            scrollTop: $(this.hash).offset().top
                        }, 900);
                    });
                });
            </script>
            <script>
                $(document).ready(function() {
                    /*
                                            var defaults = {
                                                containerID: 'toTop', // fading element id
                                                containerHoverID: 'toTopHover', // fading element hover id
                                                scrollSpeed: 1200,
                                                easingType: 'linear'
                                            };
                                            */

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
            </script>
            <!--// end-smoth-scrolling -->


            <script src="/js/bootstrap.js"></script>
            <!-- js file -->
        </body>

        </html>
