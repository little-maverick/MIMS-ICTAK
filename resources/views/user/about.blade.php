<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ICTAK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>1st Floor, Garden City Mall, Nairobi</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0797 481272 / 0734 298771</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@ictak.or.ke</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/ictak/"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://ke.linkedin.com/in/ictak-ict-association-of-kenya-672552ba"><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/watch?v=0RCuyFW8TaM"><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <img src="https://www.ictak.or.ke/wp-content/uploads/2021/05/ictak-logo-5.png" alt="Logo"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="/membership" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Membership</a>
                        <div class="dropdown-menu m-0">
                            <a href="/benefits" class="dropdown-item">Benefits</a>
                            <a href="/requirements" class="dropdown-item">Requirements</a>
                            <a href="/categories" class="dropdown-item">Categories</a>
                            <a href="/membershipregistration" class="dropdown-item">Registration</a>
                        </div>
                    </div>
                    <a href="/media" class="nav-item nav-link">Media</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                @if(Route::has('login'))

                @auth

                    <x-app-layout>
  
                    </x-app-layout>

                @else   

                    <li class="nav-item"><a href="{{route('login')}}" class="btn btn-primary rounded-pill py-2 px-4">Login</a></li>

                     <li class="nav-item"> <a href="{{route('register')}}" class="btn btn-primary rounded-pill py-2 px-4">Register</a></li>

                @endauth

                @endif 
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Membership Information Management System</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Information Communication Technology Association of Kenya</p>
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Online Registation">
                            <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


<!-- about start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="https://pbs.twimg.com/media/CVykTa0U4AEA0BP?format=jpg&name=4096x4096" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4"><span class="text-primary">Our History</span></h1>
                <p class="mb-4">~ The Information and Communication Technology Association of Kenya (ICTAK) was established under the provisions of Cap 108 of the laws of Kenya as the public voice of the ICT profession and the guardian of professional ethics and standards in the ICT industry, with a commitment to the wider community to ensure the beneficial use of ICT.</p>
                <p class="mb-4">~ The Association's origin is credited to a group of young and dynamic scholars and ICT professionals.</p>
                <p class="mb-4">~ We represent a wide variety of information technology players and stakeholders who provide consulting, implementation, support, training, strategic planning, and business analysis services.</p>
                <p class="mb-4">~ The primary purpose of the organization is to elevate the standards of the ICT profession and industry in Kenya. Any person over the age of 18 with appropriate formal training in the ICT discipline shall be eligible for the membership of the association .</p>                 
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4"><span class="text-primary">Our Vision</span></h1>
                <p class="mb-4">~ To envisage the empowerment, development and enhancement of a dynamic and vibrant society through the harnessment and strategic application of information systems.</p>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4"><span class="text-primary">Our Mission</span></h1>
                <p class="mb-4">~ To develop, enhance and promote globally acceptable standards of professionalism and exploitation of information communication technology resources in ways that are dynamic and responsive to challenges within the fraternity.</p>
            </div>
        </div>
    </div>
</div> 
<!-- about end -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>