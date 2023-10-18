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


<!-- Categories Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Membership Categories</h6>
            <h1 class="mb-5">They include!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">ASSOCIATE</h5>
                <p>To be eligible as an Associate an applicant must:</p>
                <p class="mt-2 mb-0">~ Qualify for Provisional Associate</p>
                <p class="mt-2 mb-0">~ Have at least 2 years’ relevant post-qualification associate professional experience in ICT.</p>
                <p class="mt-2 mb-0">~ Have completed an Advanced Diploma in Information Technology.</p>
                <p class="mt-2 mb-0">~ Have knowledge of the Society Code of Ethics and Code of Professional Conduct and Professional Practice</p>
                <p class="mt-2 mb-0">~ Qualify for Provisional Associate</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">PROVISIONAL ASSOCIATE</h5>
                <p>To be eligible, one must:</p>
                <p class="mt-2 mb-0">~ Complete an Associate Level Course.</p>
                <p class="mt-2 mb-0">~ Acquiring a Diploma or Advanced Diploma in Information Technology delivered by a Training Authority accredited to deliver such courses.</p>
                <p class="mt-2 mb-0">~ Applicants with vendor qualifications MCSE, MCSD, CLP CNE with experience</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">SENIOR MEMBER</h5>
                <p>To be eligible, one who:</p>
                <p class="mt-2 mb-0">~ Has proven management achievement over a period of not less than three years or more in a senior management position such as CEO, GM, CIO or CTO</p>
                <p class="mt-2 mb-0">~ Delegates authority to several other managers who hold positions of work that would normally require professional ICT qualifications and membership of ICTAK</p>
                <p class="mt-2 mb-0">~ Have a prescribe amount of courses relevant to the professional development of an ICT professional</p>
                <p>Their characteristics:</p>
                <p class="mt-2 mb-0">~ Defined responsibility and authority for decision-making or an advisory function, having a direct bearing on the ICT work of an undertaking or major function. </p>
                <p class="mt-2 mb-0">~ A technical background of sufficient depth and width to be able to recognize and successfully exploit opportunities for effective development or usage of ICT and guide fully experienced technical specialists and/or reporting managers.</p>
                <p class="mt-2 mb-0">~ Plays a major part in formulating ICT strategy and policy across employer’s undertaking or significant organizational unit.</p> 
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">MEMBER</h5>
                <p>To be eligible, one must:</p>
                <p class="mt-2 mb-0">~ Provide evidence of their experience in Information and Communications Technology.</p>
                <p class="mt-2 mb-0">~ Have time spent on formal postgraduate courses in Information and Communications Technology will count as relevant experience.</p>
                <p class="mt-2 mb-0">~ Have experience in coding, implementation and maintenance of computer programs, Database design and administration, Network design and communication technology, Systems programming, Hardware engineering and maintenance as well as Systems analysis and design e.t.c</p>
                <p class="mt-2 mb-0">~ Have full-time involvement in appropriate Information and Communications Technology activities is considered, however part-time work may be counted at a pro-rata basis.</p>
                <p class="mt-2 mb-0">~ Have fifty percent of time spent in the position of trainee programmer, designer or analyst prior to completion of a recognized degree in Information Technology may also be considered as relevant experience.</p>
            </div>    
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">PROVISIONAL MEMBER</h5>
                <p>To be eligible, one must:</p>
                <p class="mt-2 mb-0">~ Have some tertiary education</p>
                <p class="mt-2 mb-0">~ Satisfy the Society that they have acquired the Core Body of Knowledge through experience and professional development.</p>
                <p class="mt-2 mb-0">~ Have a degree at Bachelor level and above, among other requirements</p>
                <p class="mt-2 mb-0">~ Where the course is accredited by ICTAK the applicant need only provide proof of completion.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <h5 class="mb-0">FELLOW</h5>
                <p>To be eligible, one who:</p>
                <p class="mt-2 mb-0">~ Is a student from a recognized institution can qualify to apply for the fellow membership.</p>
                <p class="mt-2 mb-0">~ Have made a distinguished contribution to the field of information and communications technology in Kenya</p>
                <p class="mt-2 mb-0">~  Present their applications and referee reports and provide sufficient evidence to allow a decision to be made.</p>
            </div>
        </div>
    </div>
</div>
<!-- Categories End -->


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

</html>hp