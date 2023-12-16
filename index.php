<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Medi Finder</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css"
        integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/css/styles.css">

</head>

<body>
    <!-- header section -->
    <header class="header">
        <div class="container p-0">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="logo">Medi Finder</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- main navigation -->
    <nav class="main-nav">
        <ul class="main-nav-group">
            <li class="main-nav-item active">
                <a href="./index.php" class="main-nav-link">Home</a>
            </li>
            <li class="main-nav-item">
                <a href="./items.php" class="main-nav-link">Doctor</a>
            </li>
            <li class="main-nav-item">
                <a href="" class="main-nav-link">Hospital</a>
            </li>
            <li class="main-nav-item">
                <a href="" class="main-nav-link">about</a>
            </li>
        </ul>
    </nav>

    <!-- main slider -->
    <section class="row main-slider">
        <div class="col-12">
            <img data-lazy="./assets/images/sliders/slider_1.jpeg" class="main-slider-img" />
        </div>
        <div class="col-12">
            <img data-lazy="./assets/images/sliders/slider_3.png" class="main-slider-img" />
        </div>
    </section>

    <!-- search section -->
    <section class="main-search-section">
        <div class="search-box">
            <h3 class="search-title">
                Search Doctor & Hospital
            </h3>
            <form>
                <div class="row">
                    <div class="col-12 col-md-6 p-2">
                        <select class="form-select search-form" onchange="searchType(this)">
                            <option value="" disabled selected>Select Service</option>
                            <option value="doctor">Doctor</option>
                            <option value="hospital">Hospital</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 p-2 search-doctor">
                        <select class="form-select search-form">
                            <option value="" disabled selected>Select Specialization</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <select class="form-select search-form">
                            <option value="" disabled selected>Distic</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <select class="form-select search-form">
                            <option value="" disabled selected>Area</option>
                        </select>
                    </div>
                    <div class="col-12 col-md-6 p-2 search-doctor">
                        <select class="form-select search-form">
                            <option value="" disabled selected>Hospital</option>
                            <option value="">Fardin</option>
                            <option value="">IBN Sina</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-md-6">
                        <button type="button" class="btn search-btn w-100">Search</button>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!-- product section -->
    <!-- doctors -->
    <section class="items">
        <h2 class="item-title">doctors</h2>
        <div class="item-section">
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_1.jpeg" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Dr. Shamma Binte Hafiz</h1>
                    </a>
                    <h2 class="designation">Aesthetic Dermatologist And Laser Specialist</h2>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_2.jpg" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Lloyd Wilson</h1>
                    </a>
                    <h2 class="designation">CHIEF MEDICAL OFFICER</h2>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_3.jpeg" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Professor Dr. Quazi tarikul islam Professor Dr. Quazi tarikul islam</h1>
                    </a>
                    <h2 class="designation">MEDICINE SPECIALIST</h2>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_4.jpg" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Dr. Nighat Ara</h1>
                    </a>
                    <h2 class="designation">Junior Consultant</h2>
                </div>
            </div>
            <div class="item-box">
                <div class="see-more-cart">
                    <a href="" class="see-more-center">
                        <div class="see-more-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <p class="see-more-title">See more</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- add section -->
    <section class="container add-section">
        <div class="add-img">
            <img src="./assets/images/doctors/doctor_1.jpeg" alt="">
        </div>
        <div class="add-details">
            <h1 class="add-title">Dr. Name Jani Na</h1>
            <h2 class="add-sub-title">MBBS, MCPS (Medicine), MD(Neurology)</h2>
            <h2 class="add-sub-title">Neuro Medicine Specialist</h2>
            <div class="add-text">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                the blind texts.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named
                Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                country, in which
                roasted parts of sentences fly into your mouth.
            </div>
        </div>
    </section>

    <!-- hospital -->
    <section class="items">
        <h2 class="item-title">hospitals</h2>
        <div class="item-section">
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/hospitals/IBN_SINA.png" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">IBN SINA</h1>
                    </a>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/hospitals/popular.jpeg" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Popular</h1>
                    </a>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/hospitals/square.png" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">Square</h1>
                    </a>
                </div>
            </div>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/hospitals/BRB.png" alt="">
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h1 class="name">BRB</h1>
                    </a>
                </div>
            </div>
            <div class="item-box">
                <div class="see-more-cart">
                    <a href="" class="see-more-center">
                        <div class="see-more-icon">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <p class="see-more-title">See more</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- add section -->
    <section class="container add-section">
        <div class="add-img">
            <img src="./assets/images/doctors/doctor_1.jpeg" alt="">
        </div>
        <div class="add-details">
            <h1 class="add-title">Dr. Name Jani Na</h1>
            <h2 class="add-sub-title">MBBS, MCPS (Medicine), MD(Neurology)</h2>
            <h2 class="add-sub-title">Neuro Medicine Specialist</h2>
            <div class="add-text">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                the blind texts.
                Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A
                small river named
                Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic
                country, in which
                roasted parts of sentences fly into your mouth.
            </div>
        </div>
    </section>

    <!-- counter section -->
    <section class="counter-section">
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 col-lg-2 counter-box">
                <div class="counter">100</div>
                <div class="counter-title">Doctors</div>
            </div>
            <div class="col-12 col-md-3 col-lg-2 counter-box">
                <div class="counter">100</div>
                <div class="counter-title">hospitals</div>
            </div>
        </div>
    </section>
    <!-- footer section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 p-4">
                    <h4 class="footer-logo">
                        <a href="">Doctors Finder</a>
                    </h4>
                    <h1 class="footer-about">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.
                    </h1>
                    <ul class="social-media">
                        <li class="social-media-item">
                            <a href="" class="social-media-link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="social-media-item">
                            <a href="" class="social-media-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="social-media-item">
                            <a href="" class="social-media-link">
                                <i class="fa-brands fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 p-4">
                    <h4 class="footer-title">service</h4>
                    <ul class="footer-link-group">
                        <li class="footer-nav-item">
                            <a href="" class="footer-nav-link">doctors</a>
                        </li>
                        <li class="footer-nav-item">
                            <a href="" class="footer-nav-link">hospitals</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 p-4">
                    <h4 class="footer-title">Contact information</h4>
                    <ul class="footer-link-group">
                        <li class="footer-nav-item info-item">
                            <span class="info-icon"><i class="fa-solid fa-location-dot"></i></span>
                            <div class="footer-nav-link">203 Fake St. Mountain View, San Francisco, California, USA
                            </div>
                        </li>
                        <li class="footer-nav-item info-item">
                            <span class="info-icon"><i class="fa-solid fa-phone"></i></span>
                            <a href="" class="footer-nav-link">+8801945907007</a>
                        </li>
                        <li class="footer-nav-item info-item">
                            <span class="info-icon"><i class="fa-regular fa-paper-plane"></i></span>
                            <a href="" class="footer-nav-link text-lowercase">demo@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="copy-write">Copyright &copy 2023 All rights reserved</p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"
        integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://kit.fontawesome.com/2f7a0c449d.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"
        integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="./assets/js/counter_up.js"></script> -->
    <script src="./assets/js/frontend.js"></script>
    <script>
        const searchTitle = new Typed('#search-title', {
            stringsElement: '#search-string',
            typeSpeed: 40,
            backSpeed: 0,
            loop: true
        });
    </script>

</body>

</html>