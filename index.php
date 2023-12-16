<?php
include_once("./inc/header.php");
include_once("./inc/navigation.php");
include_once("./inc/slider.php");
include_once("./weights/main_search.php");
?>

<!-- product section -->
<!-- doctors -->
<section class="items">
    <h2 class="item-title">doctors</h2>
    <div class="item-section">
        <?php
            for ($i = 0; $i < 4; $i++) {
                include("./inc/item.php");
            }
        ?>
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
        <?php
        for ($i = 0; $i < 4; $i++) {
            include("./inc/item.php");
        }
        ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://kit.fontawesome.com/2f7a0c449d.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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