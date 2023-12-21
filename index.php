<?php
$title = "Medi Finder";
include_once("./inc/header.php");
include_once("./inc/navigation.php");
include_once("./inc/slider.php");
include_once("./weights/main_search.php");
?>

<!-- product section -->
<!-- donner wanted -->
<section class="items">
    <h2 class="item-title">help post</h2>
    <div class="item-section">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <div class="item-box">
                <div class="donner-wanted">
                    <h2 class="donner-want-name">Md hasibur Rahman</h2>
                    <p class="donner-want-info">Blood group: O+</p>
                    <p class="donner-want-info">needed within: 30-Dec-2099</p>
                    <p class="hospital-info">Hospital Info:</p>
                    <p class="donner-want-info">IBN SINA</p>
                    <p class="donner-want-info">21 Mirpur Rd, Dhaka 1207</p>
                    <p class="contact-info">Contact:</p>
                    <h2 class="donner-want-name">Md hasibur Rahman</h2>
                    <p class="donner-want-info">01945907007</p>
                </div>
            </div>
        <?php
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
<!-- donner -->
<section class="items">
    <h2 class="item-title">blood donner</h2>
    <div class="item-section">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_1.jpeg" alt="" />
                    </a>
                </div>
                <div class="item-footer">
                    <h2 class="donner-name">Md hasibur Rahman</h2>
                    <p class="donner-info">01945907007</p>
                    <p class="donner-info">Blood group: O+</p>
                    <p class="donner-info address">belgachi railgate, chuadanga</p>
                </div>
            </div>
        <?php
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
        <img src="./assets/images/doctors/doctor_1.jpeg" alt="" />
    </div>
    <div class="add-details">
        <h1 class="add-title">Dr. Name Jani Na</h1>
        <h2 class="add-sub-title">MBBS, MCPS (Medicine), MD(Neurology)</h2>
        <h2 class="add-sub-title">Neuro Medicine Specialist</h2>
        <div class="add-text">
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated they
            live in Bookmarksgrove right at the coast of the Semantics, a large
            language ocean. A small river named Duden flows by their place and
            supplies it with the necessary regelialia. It is a paradisematic
            country, in which roasted parts of sentences fly into your mouth.
        </div>
    </div>
</section>

<!-- doctors -->
<section class="items">
    <h2 class="item-title">doctors</h2>
    <div class="item-section">
        <?php
        for ($i = 0; $i < 4; $i++) {
        ?>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/doctors/doctor_1.jpeg" alt="" />
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h2 class="name">Dr. Shamma Binte Hafiz</h2>
                    </a>
                    <h3 class="designation">
                        Aesthetic Dermatologist And Laser Specialist
                    </h3>
                </div>
            </div>
        <?php
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
        ?>
            <div class="item-box">
                <div class="item-img">
                    <a href="">
                        <img src="./assets/images/hospitals/IBN_SINA.png" alt="" />
                    </a>
                </div>
                <div class="item-footer">
                    <a href="">
                        <h2 class="name">IBN SINA</h2>
                    </a>
                </div>
            </div>
        <?php
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
<section class="row counter-section">
    <div class="col-2 counter-box">
        <div class="counter">100</div>
        <div class="counter-title">Doctors</div>
    </div>
    <div class="col-2 counter-box">
        <div class="counter">100</div>
        <div class="counter-title">hospitals</div>
    </div>
</section>

<?php
include_once('./inc/footer.php');
?>