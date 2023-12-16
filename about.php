<?php
$title = "About";
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

<?php
include_once('./inc/footer.php');
?>