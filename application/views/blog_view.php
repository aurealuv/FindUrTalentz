<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>FindUrTalentZ - Blogs</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="" name="keywords" />
		<meta content="" name="description" />

		<!-- Favicon -->
		<link href="<?= base_url(); ?>assets/img/favicon.ico" rel="icon" />

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
			<a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
				<img class="w-25" src="<?= base_url(); ?>assets/img/Logo.png" />
			</a>
			<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<div class="navbar-nav ms-auto p-4 p-lg-0">
					<a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
					<a href="<?= base_url(); ?>home/introduction" class="nav-item nav-link">Introduction</a>
					<a href="<?= base_url(); ?>home/blog" class="nav-item nav-link active">Blogs</a>
					<a href="<?= base_url(); ?>home/contact" class="nav-item nav-link">Contact</a>
				</div>
				<a href="<?= base_url(); ?>authentication" class="btn btn-primary p-md-4 py-5 px-lg-5 d-none d-lg-block">Take a Test<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
		</nav>
		<!-- Navbar End -->

		<!-- Header Start -->
		<div class="container-fluid bg-primary py-5 mb-5 page-header">
			<div class="container py-5">
				<div class="row justify-content-center">
					<div class="col-lg-10 text-center">
						<h1 class="display-3 text-white animated slideInDown">Blogs</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb justify-content-center">
								<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
								<li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
								<li class="breadcrumb-item text-white active" aria-current="page">Blogs</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->

		<!-- Categories Start -->
		<div class="container-xxl py-5 category">
			<div class="container">
				<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
					<h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
					<h1 class="mb-5">Blogs Categories</h1>
				</div>
				<div class="row g-3">
					<div class="col-lg-7 col-md-6">
						<div class="row g-3">
							<div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
								<a class="position-relative d-block overflow-hidden" href="">
									<img class="img-fluid" src="<?= base_url(); ?>assets/img/cat-1.jpg" alt="" />
									<div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
										<h5 class="m-0">Tes Minat</h5>
										<small class="text-primary"></small>
									</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
								<a class="position-relative d-block overflow-hidden" href="">
									<img class="img-fluid" src="<?= base_url(); ?>assets/img/cat-2.jpg" alt="" />
									<div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
										<h5 class="m-0">Tes Bakat</h5>
										<small class="text-primary"></small>
									</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
								<a class="position-relative d-block overflow-hidden" href="">
									<img class="img-fluid" src="<?= base_url(); ?>assets/img/cat-3.jpg" alt="" />
									<div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
										<h5 class="m-0">Tes Kemampuan</h5>
										<small class="text-primary"></small>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px">
						<a class="position-relative d-block h-100 overflow-hidden" href="">
							<img class="img-fluid position-absolute w-100 h-100" src="<?= base_url(); ?>assets/img/cat-4.jpg" alt="" style="object-fit: cover" />
							<div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px">
								<h5 class="m-0">Psikotes</h5>
								<small class="text-primary"></small>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Categories Start -->

		

		<!-- Testimonial Start -->
		<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
			<div class="container">
				<div class="text-center">
					<h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
					<h1 class="mb-5">Our Students Say!</h1>
				</div>
				<div class="owl-carousel testimonial-carousel position-relative">
					<div class="testimonial-item text-center">
						<img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url(); ?>assets/img/testimonial-1.jpg" style="width: 80px; height: 80px" />
						<h5 class="mb-0">Syifa M.</h5>
						<p> </p>
						<div class="testimonial-text bg-light text-center p-4">
							<p class="mb-0">Aku suka banget materi blog di FindU yang seru! Aku jadi mudah paham sama diri sendiri.</p>
						</div>
					</div>
					<div class="testimonial-item text-center">
						<img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url(); ?>assets/img/testimonial-2.jpg" style="width: 80px; height: 80px" />
						<h5 class="mb-0">Mayca L.</h5>
						<p> </p>
						<div class="testimonial-text bg-light text-center p-4">
							<p class="mb-0">Aku bisa baca lagi materi blognya berulang-ulang sampe bener-bener ngerti.</p>
						</div>
					</div>
					<div class="testimonial-item text-center">
						<img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url(); ?>assets/img/testimonial-3.jpg" style="width: 80px; height: 80px" />
						<h5 class="mb-0">Shofia I.</h5>
						<p> </p>
						<div class="testimonial-text bg-light text-center p-4">
							<p class="mb-0">Gak nyesel pake FindU.Bantu banget buat nge-remind yang baru kita pelajari dalam hidup sehari-hari.</p>
						</div>
					</div>
					<div class="testimonial-item text-center">
						<img class="border rounded-circle p-2 mx-auto mb-3" src="<?= base_url(); ?>assets/img/testimonial-4.jpg" style="width: 80px; height: 80px" />
						<h5 class="mb-0">Alicia</h5>
						<p> </p>
						<div class="testimonial-text bg-light text-center p-4">
							<p class="mb-0">FindU jadi pilihan paling tepat banget buat aku yang anaknya susah menemukan minat dan bakat yang ada pada diri sendiri. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonial End -->

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
