<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="text-white"><span class="text-dark"></span></h1>
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration & LogIn                            
                        </a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('registration') }}" class="dropdown-item">Registration</a>
                        </div>

                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('login') }}" class="dropdown-item">LogIn  </a>
                        </div>
                    </div> --}}


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Registration & LogIn                      </a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="{{ route('registration') }}" class="dropdown-item">Registration</a>
                            <a href="{{ route('login') }}" class="dropdown-item">LogIn </a>
                        </div>
                    </div>
                    
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('list') }}" class="nav-item nav-link">List</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="project.html" class="nav-item nav-link">Projects</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light mt-2">
                            <a href="feature.html" class="dropdown-item">Features</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="faq.html" class="dropdown-item">FAQs</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <button type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
