<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wemoney - Dashboard</title>
    <!-- font awesome icons -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts"/>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <script src="{{ asset('assets/js/style.js') }}"></script>
</head>
<body>
     
    <div class = "dashboard-pg text-grey-blue">
        <nav class = "navigation-bar d-flex align-items-center">
            <div class = "container">
                <div class = "row align-items-center">
                    <div class = "navigation-bar-left col-6 d-flex align-items-center">
                        <button type = "button" class = "navbar-open-btn text-grey-blue me-3">
                            <i class = "fas fa-bars"></i>
                        </button>
                        <div class = "navbar-logo">
                            <img src = "assets/images/logo.png" alt = "site logo">
                        </div>
                    </div>

                    <div class = "navigation-bar-right col-6 d-flex align-items-center justify-content-end">
                        <a href = "#" class = "profile-btn bg-blue text-white btn-circle me-3">
                            <i class = "fas fa-user"></i>
                        </a>
                        <button type = "button" class = "notification-btn text-grey-blue">
                            <i class = "fa-regular fa-bell"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div class = "navigation-overlay position-fixed"></div>

        <div class = "navigation-sidebar bg-light-grey">
            <div class = "navbar-sb-head d-flex justify-content-between align-items-center px-4">
                <img src = "assets/images/logo.png">
                <button class = "navbar-close-btn text-grey-blue">
                    <i class = 'fas fa-arrow-left'></i>
                </button>
            </div>

            <div class = "navbar-sb-list p-4">
                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">priority</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-solid fa-gauge"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">dashboard</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">Fitur</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fas fa-award"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Tabungan Dreams</span>
                                </div>
                                <span class = "badge text-uppercase text-blue">hot</span>
                            </a>
                        </li>
                    </ul>
                </div>



                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">account</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-regular fa-circle-user"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Akun</span>
                                </div>
                            </a>
                        </li>
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center custom-spacing">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fa-solid fa-clock-rotate-left"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">Ganti Password</span>
                                </div>
                            </a>
                        </li>

        
                    </ul>
                </div>

                <div class = "navbar-sb-item mb-5">
                    <h5 class = "text-uppercase text-grey navbar-sb-item-title fs-12 ls-1">misc pages</h5>
                    <ul class = "navbar-sb-links p-0 list-unstyled">
                        <li class = "navbar-sb-link my-3">
                            <a href = "#" class = "text-decoration-none d-flex align-items-center justify-content-between">
                                <div class = "text-light-blue d-flex align-items-center">
                                    <span class = "navbar-sb-icon me-3">
                                        <i class = "fas fa-lock"></i>
                                    </span>
                                    <span class = "navbar-sb-text fs-14 fw-5 text-capitalize">logout</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class = "dashboard-main">
            <div class = "container">

@yield('content')

            </div>
        </div>
    </div>





    <!-- jquery -->
    <script src = "assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>