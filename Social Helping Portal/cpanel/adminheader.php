
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="../lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
  
<!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
             
            <a href="login.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
                    <img class="img-fluid" src="../img/give-love.png" alt="">
                <span class="text-primary">SOCIAL HELPING PORTAL</span>
            </a>
           
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="dash.php" class="nav-item nav-link">Home</a>
                    <a href="donor_view.php" class="nav-item nav-link">ViewDonor</a>
                    <a href="user_view.php" class="nav-item nav-link">ViewUser</a>
                    <a href="volunteer_view.php" class="nav-item nav-link">ViewVolunteer</a>
                    <a href="contact_view.php" class="nav-item nav-link">ViewEnquiry</a>
                     <div class="nav-item dropdown">
                           <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Register Now</a>    
                          <div class="dropdown-menu rounded-0 m-0">
                              <a href="user_register.php?cat=c1" class="dropdown-item">For Foods Item </a>
                              <a href="user_register.php?cat=c2" class="dropdown-item">For Cloths</a>
                              <a href="user_register.php?cat=c3" class="dropdown-item">For Books</a>
                             
                              <a href="user_register.php?cat=c4" class="dropdown-item">For Domestic Product</a>
                              <a href="fund.php?cat=c5" class="dropdown-item">For Funds</a>
                           </div>
                        </div> 
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="reset.php" class="dropdown-item">Reset Password</a>
                            <a href="../index.php" class="dropdown-item">Logout</a>
                        </div>
                    </div>
                  
                </div>
               
            </div>
        </nav>
    </div>
    <!-- Navbar End -->