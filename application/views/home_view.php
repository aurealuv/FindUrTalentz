<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindUrTalentZ - Home</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="keywords" />
		<meta content="" name="description" />

		<!-- Favicon -->
		<link href="img/favicon.ico" rel="icon" />

		<!-- Google Web Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet" />

		<!-- Icon Font Stylesheet -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

		<!-- Libraries Stylesheet -->
		<link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet" />
		<link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

		<!-- Customized Bootstrap Stylesheet -->
		<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Template Stylesheet -->
		<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
	</head>

	<body>
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		<!-- Spinner End -->

		<!-- Navbar Start -->
		<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
			<a href="index.html" class="navbar-brand d-flex align-items-center px-5 px-lg-5">
				<img class="w-25" src="<?= base_url(); ?>assets/img/Logo.png" />
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="<?= base_url(); ?>" class="nav-item nav-link active">Home</a>
					<a href="<?= base_url(); ?>home/introduction" class="nav-item nav-link">Introduction</a>
					<a href="<?= base_url(); ?>home/blog" class="nav-item nav-link">Blogs</a>
					<a href="<?= base_url(); ?>home/contact" class="nav-item nav-link">Contact</a>
				</div>
				<a href="<?= base_url(); ?>authentication" class="btn btn-primary p-md-4 py-5 px-lg-5 d-none d-lg-block">Take a Test<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->

		<!-- Carousel Start -->
		<div class="container-fluid p-0 mb-5">
			<div class="owl-carousel header-carousel position-relative">
				<div class="owl-carousel-item position-relative">
					<img class="img-fluid" src="<?= base_url(); ?>assets/img/carousel-1.jpg" alt="" />
					<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, 0.7)">
						<div class="container">
							<div class="row justify-content-start">
								<div class="col-sm-10 col-lg-8">
									<h5 class="text-primary text-uppercase mb-3 animated slideInDown">FIND YOUR TALENT</h5>
									<h1 class="display-3 text-white animated slideInDown">Best Talent Platform</h1>
									<p class="fs-5 text-white mb-4 pb-2">FindUrTalentz merupakan website yang di tujukan untuk  membantu menentukan minat bakat dari Generasi Z ini dan melihat potensi mereka terhadap bakat  yang mereka miliki.</p>
									<a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
									<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="owl-carousel-item position-relative">
					<img class="img-fluid" src="<?= base_url(); ?>assets/img/carousel-2.jpg" alt="" />
					<div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, 0.7)">
						<div class="container">
							<div class="row justify-content-start">
								<div class="col-sm-10 col-lg-8">
									<h5 class="text-primary text-uppercase mb-3 animated slideInDown">FIND YOUR TALENT</h5>
									<h1 class="display-3 text-white animated slideInDown">Best Talent Platform</h1>
									<p class="fs-5 text-white mb-4 pb-2">Semua manusia terlahir dengan bakat masing-masing. Temukan bakatmu sekarang juga!</p>
									<a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
									<a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Carousel End -->

		<!-- Service Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="row g-4">
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="service-item text-center pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
								<h5 class="mb-3">Skilled Instructors</h5>
								<p>Dibantu oleh tenaga profesional dalam bidangnya</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
						<div class="service-item text-center pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-globe text-primary mb-4"></i>
								<h5 class="mb-3">Online Test</h5>
								<p>Tes online dengan bimbingan tenaga profesional</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
						<div class="service-item text-center pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-home text-primary mb-4"></i>
								<h5 class="mb-3">Home Projects</h5>
								<p>Project mandiri untuk mengasah minat dan bakat </p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
						<div class="service-item text-center pt-3">
							<div class="p-4">
								<i class="fa fa-3x fa-book-open text-primary mb-4"></i>
								<h5 class="mb-3">Interesting Blogs</h5>
								<p>Explore lebih banyak minat dan bakat kamu</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Service End -->

		<!-- Introduction Start -->
		<div class="container-xxl py-5">
			<div class="container">
				<div class="row g-5">
					<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
						<div class="position-relative h-100">
							<img class="img-fluid position-absolute w-100 h-100" src="<?= base_url(); ?>assets/img/introduction.jpg" alt="" style="object-fit: cover" />
						</div>
					</div>
					<div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
						<h6 class="section-title bg-white text-start text-primary pe-3">Introduction Us</h6>
						<h1 class="mb-4">Welcome to FindUrTalentZ</h1>
						<p class="mb-4">FindUrTalentz merupakan website yang di tujukan untuk  membantu menentukan minat bakat dari Generasi Z ini dan melihat potensi mereka terhadap bakat  yang mereka miliki.</p>
						<p class="mb-4"></p>
						<div class="row gy-2 gx-4 mb-4">
							<div class="col-sm-6">
								<p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
							</div>
							<div class="col-sm-6">
								<p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Test</p>
							</div>
							<div class="col-sm-6">
								<p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
							</div>
							<div class="col-sm-6">
								<p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Home Projects</p>
							</div>
							<div class="col-sm-6">
								<p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Interesting Blogs</p>
							</div>
						
						</div>
						<a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Introduction End -->

		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container">
				<div class="row g-5">
					<div class="col-lg-3 col-md-6">
						<h4 class="text-white mb-3">Contact</h4>
						<p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Sekolah Vokasi IPB</p>
						<p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62891919191</p>
						<p class="mb-2"><i class="fa fa-envelope me-3"></i>info@findurtalentz.com</p>
						
					</div>
				</div>
			</div>
			<div class="container">
				<div class="copyright">
					<div class="row">
						<div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">FindUrTalentZ</a>, All Right Reserved.</div>
						<div class="col-md-6 text-center text-md-end">
			
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

		<!-- JavaScript Libraries -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
		<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

		<!-- Template Javascript -->
		<script src="<?= base_url(); ?>assets/js/main.js"></script>
	</body>
</html>