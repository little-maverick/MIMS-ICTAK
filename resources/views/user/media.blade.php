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


<!-- Media Starts -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Media</h6>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="data:image/jpeg;base64,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" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">ICT Value Awards(ICTVA)</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSssY65MH3fKBv_IebTeUqSVa9-WRvMm_dy1y_onMtVCAPHhK1h5zrwD0Qpx5KIz0_bMOU&usqp=CAU" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">The ICT Value Awards seek to recognize, promote and commend innovation , creativity, the excellent and outstanding achievements of  Kenyan ICT professionals and organizations.</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="https://media.licdn.com/dms/image/D4D22AQHcOscHCK0B1A/feedshare-shrink_800/0/1693742020295?e=2147483647&v=beta&t=ZrStdM0ahpbKoQhpwEQSeK5Byf5CMMb_YNTynfdgAoc" alt="">
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">In collaboration with public and private sector actors designed the CyberSecurity Associate Certification that covers how to assure secure digital environment in organizations</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- charter Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Our Charter</h6>
                    <h1 class="text-white mb-4">WE THE MEMBERS OF THE INFORMATION COMMUNICATION TECHNOLOGY PROFESSSION AND INDUSTRY IN KENYA “DETERMINED”</h1>
                    <p class="mb-4">~ To promote good ethical conduct and professional values within the ICT fraternity,</p>
                    <p class="mb-4">~ To liaise with government and Public Bodies in deliberation and formulation of policies generally in regard to Information Communication Technology related issues,</p>
                    <p class="mb-4">~ To collate and disseminate information as regards the ICT environment, impact, consequences of neglect of policy and measures to reverse such trends,</p>
                    <p class="mb-4">~ To sensitize and educate the public within ICT business participation on their roles in ensuring responsible use of ICT resources,</p>
                    <p class="mb-4">~ To educate the various stakeholders on proper ICT principles and methods of operating businesses profitably by making use of modern technologies,</p>
                    <p class="mb-4">~ To participate in the deliberation of ICT driven ways of poverty alleviation at the grass root level from where the chain of events starts,</p>
                    <p class="mb-4">~ To promote Export activities through efficient and proper harnessing of ICT resources,</p>
                    <p class="mb-4">~ To formulate a code of conduct for professionals within the sector in respect of protocol, etiquette procedures and modus operandi in performance of duties.</p>
                    <p class="mb-4">~ To promote competitive local ICT service delivery in a liberalized market</p>
                    <p class="mb-4">~ To spearhead the info systemization process in Kenya and to play a leading role in shaping and developing an appropriate strategy for a similar process in the greater regional economy,</p>
                    <p class="mb-4">~ To provide and make available relevant business information services to our members,</p>
                    <p class="mb-4">~ To promote participation in ICT fairs and exhibitions in order to identify new opportunities and expand existing ones,</p>
                    <p class="mb-4">~ To enhance members’ understanding of the implications of global and regional ICT agreements,</p>
                    <p class="mb-4">~ To promote fair ICT and business practices, environmentally friendly undertakings and socially responsible employment,</p>
                    <p class="mb-4">~ To develop advanced policy research and training in ICT,</p>
                    <p class="mb-4">~ To educate & inform Business Entities where possible on prevailing laws & regulations and their need to comply</p>
                </div>
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">“AND FOR THESE ENDS”</h6>
                    <h1 class="text-white mb-4">WE THE MEMBERS OF THE INFORMATION COMMUNICATION TECHNOLOGY PROFESSSION AND INDUSTRY IN KENYA “DETERMINED”</h1>

                    <p class="mb-4">~ To create mutual understanding amongst our members,</p>
                    <p class="mb-4">~ To Collaborate with other professional bodies and trainers, share ideas and experiences and participate in curriculum development for ICT related courses,</p>
                    <p class="mb-4">~ To raise funds, lobby local, international charitable organizations and aid agencies to participate in the provision of technological services for social transformation,</p>
                    <p class="mb-4">~ To organize conferences and workshops that address issues of development using holistic organization processes to achieve goals that contribute towards capacity building in the ICT sector,</p>
                    <p class="mb-4">~ To establish branches of the association,</p>
                    <p class="mb-4">~ To appeal to local and foreign donors for funding of projects related to improving the information economy, especially with regard to the youth plight</p>
                    <p class="mb-4">~ To seek faster delivery of services at Government offices especially to information service providers,</p>
                    <p class="mb-4">~ To foster contacts, co-ordination, and the exchange of experience and ideas among stakeholders,</p>
                    <p class="mb-4">~ To consider questions of national interest and concern and expresses views on such issues in order to bring about action from relevant sectors,</p>
                    <p class="mb-4">~ To contribute to the awareness and promotion of ICT use - an essential factor of social-economic progress and development,</p>
                    <p class="mb-4">~ To contribute to better knowledge of the working of the profession and industry and to the strengthening and development of their means of action,</p>
                    <p class="mb-4">~ To employ national machinery for the promotion of ICT for the economic and social advancement of all peoples and</p>
                    <p class="mb-4">~ To ensure, by the acceptance of principles and the institution of methods, that ICT shall not be used, save in the common interest</p>
                    <h5 class="mb-3">“HAVE RESOLVED TO COMBINE OUR EFFORTS TO ACCOMPLISH THESE AIMS.”</h5>
                </div>
                <p><strong>Accordingly, having agreed to the present Charter do hereby establish an organization to be known as the;</strong></p>
                    <h1>INFORMATION COMMUNICATION TECHNOLOGY ASSOCIATION OF KENYA(ICTAK)</h1>
                    <p><strong>All Members, in order to ensure to all of them the rights and benefits resulting from membership, shall fulfill in good faith the obligations assumed by them in accordance with the Charter.</strong></p>
            </div>
        </div>
    </div>
</div>
<!-- Media End -->


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