<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Navbar</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Customize logo padding */
        .logo img {
            padding: 0 50px;
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <!-- Optional header content -->
    </div>

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light1">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand logo" href="index.php">
                <img src="images/logo.png" alt="Logo"  style="width: 100%">
            </a>

            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Our Services</a></li>

                    <!-- Location Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Location
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="home-care-nursing-services-lajpat-nagar.php">Lajpat Nagar</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-laxmi-nagar.php">Laxmi Nagar</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-greater-kailash.php">Greater Kailash</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-model-town.php">Model Town</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-saket.php">Saket</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-preet-vihar.php">Preet Vihar</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-gurugram.php">Gurugram</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-malviya-nagar.php">Malviya Nagar</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-viswa-vidyalaya.php">Viswa Vidyalaya</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-noida-extension.php">Noida Extension</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-greater-noida.php">Greater Noida</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-dwarka.php">Dwarka</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-south-delhi.php">South Delhi</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-delhi-ncr.php">Delhi NCR</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-ghaziabad.php">Ghaziabad</a></li>
                            <li><a class="dropdown-item" href="home-care-nursing-services-noida.php">Noida</a></li>
                        </ul>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="nursing-services.php">Nursing Services</a></li>
                            <li><a class="dropdown-item" href="icu-services.php">ICU Services</a></li>
                            <li><a class="dropdown-item" href="critical-patient-care-at-home.php">Critical Patient Care At Home</a></li>
                            <li><a class="dropdown-item" href="tracheostomy-services-at-home.php">Tracheostomy Services At Home</a></li>
                            <li><a class="dropdown-item" href="dementia-patient-services-at-home.php">Dementia Patient Services At Home</a></li>
                            <li><a class="dropdown-item" href="neuro-patients-services-at-home.php">Neuro Patients Services At Home</a></li>
                            <li><a class="dropdown-item" href="accidental-patients-care-services-at-home.php">Accidental Patients Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="coma-patient-care-services-at-home.php">Coma Patient Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="medical-attendant-care-at-home.php">Medical Attendant Care At Home</a></li>
                            <li><a class="dropdown-item" href="elder-care-services-at-home.php">Elder Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="old-age-care-services-at-home.php">Old Age Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="senior-citizen-services-care-at-home.php">Senior Citizen Services Care At Home</a></li>
                            <li><a class="dropdown-item" href="baby-care-services-at-home.php">Baby Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="cancer-patient-care-services-at-home.php">Cancer Patient Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="paralysis-patient-care-services-at-home.php">Paralysis Patient Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="bed-ridden-patient-care-services-at-home.php">Bed Ridden Patient Care Services At Home</a></li>
                            <li><a class="dropdown-item" href="medical-equipment-on-rent.php">Medical Equipment on rent</a></li>
                            <li><a class="dropdown-item" href="home-care-services-at-home.php">Home Care services at Home</a></li>
                            <li><a class="dropdown-item" href="alzhelmer-patient-care-at-home.php">Alzhelmer patient care at Home</a></li>
                            <li><a class="dropdown-item" href="ambulance-services-24x7.php">Ambulance Services 24X7</a></li>
                            <li><a class="dropdown-item" href="certificate.php">Certificate</a></li>
                            <li><a class="dropdown-item" href="career.php">Career</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="enquiry.php">Enquiry Now</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
</header>

<!-- Bootstrap 5 JS bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
