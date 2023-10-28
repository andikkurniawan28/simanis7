
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
      KEBUN LAWANG    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/old/simanis.jpg?v=231028" rel="icon">
    <link href="/old/simanis.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/old/front/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/old/front/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/old/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/old/front/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/old/front/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
    <link href="/old/front/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/old/fontawesome-free/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="/old/front/assets/css/style.css" rel="stylesheet">
    <script src="/old/notika/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/old/file.js"></script>


    <style>

    .head-name{
      margin-left: 18px;
    }

    @media screen and (max-width:600px){
      .head-name{
        margin-top: 10px;
        margin-left: 0;
        display: block;
        font-size: 20px;
      }
    }

    </style>

    <!-- =======================================================
  * Template Name: Butterfly - v2.2.1
  * Template URL: https://bootstrapmade.com/butterfly-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<style>

.btn-sky-blue:hover{
  background-color: #49a4d6;
}

.btn-sky-blue{
  background-color: #49b5e7;
  padding: 10px 24px;
  border: none;
  outline: none;
  border-radius: 10px;
  transition: 0.4s;
  color: #fff;
}

.sky-blue{
  background: #fdfdfd !important;
}

.sky-blue .logo a{
  color: #333333 !important;
}

.sky-blue .nav-menu a{
  color: #333333;
}

#hero h1, #hero h2 ,#hero h3{
  color: #333333 !important;
}

</style>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top sky-blue">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="{{ route("home") }}"><img src="/old/simanis.jpg" style="height: 80px; width: auto;"><span class="head-name">KEBUN LAWANG</span></a></h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="{{ route("home") }}">Home</a></li>
                <li><a href="{{ route("login") }}">Login</a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<style>

	#hero{
		background-image: url('https://grahaanggreksimanis.com/assets/bg.png');
		min-height: 100vh;
		background-repeat: no-repeat;
		background-position: center center;
	}

	.img-x{
		width: 100% !important;
		float: left;
		margin: 10px;
	}


</style>

@yield("content")

<!-- ======= Footer ======= -->



<footer id="footer">
    <div class="footer-top ">
        <div class="container ">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Simanis Orchides Nursery (CV. Graha Anggrek Simanis).</h3>
                    <p>
                        <strong>Alamat:</strong> JL. PUNGKUR ARGO NO. 1 - LAWANG<br>
                        <strong>Phone:</strong> 081 1360869<br>
                        <strong>Email:</strong> -<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route("login") }}">Login</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://validdatasolusi.co.id/contact-us/">Tentang Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media</h4>
                    <p>Kunjungi sosial media kami.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; copyright by validdatasolusi.co.id        </div>
        <div class="credits">
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/old/front/assets/vendor/jquery/jquery.min.js"></script>
<script src="/old/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/old/front/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="/old/front/assets/vendor/php-email-form/validate.js"></script>
<script src="/old/front/assets/vendor/venobox/venobox.min.js"></script>
<script src="/old/front/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="/old/front/assets/vendor/counterup/counterup.min.js"></script>
<script src="/old/front/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/old/front/assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="/old/front/assets/js/main.js"></script>

</body>

</html>
