<?php
$title = isset($_GET['item']) ? ucwords($_GET['item']) : '';
include_once("./inc/header.php");
include_once("./inc/navigation.php");
if ($category == 'doctor')
    include_once("./weights/doctor_search.php");
else if ($category == 'hospital')
    include_once("./weights/hospital_search.php");
else if ($category == 'blood_donation')
    include_once("./weights/blood_search.php");
?>



<!-- product section -->
<section class="items">
    <div class="item-section">
        <?php
        for ($i = 0; $i < 10; $i++) {
            if ($category == 'doctor') {
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
            } else if ($category == 'hospital') {
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
            } else if ($category == 'blood_donation') {
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
            } else if ($category == 'help_post') {
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
        }
        ?>
    </div>
</section>

<!-- pagination section -->
<ul class="pagi-group">
    <li class="pagi-item">
        <a href="" class="pagi-link">1</a>
    </li>
    <li class="pagi-item">
        <a href="" class="pagi-link">2</a>
    </li>
    <li class="pagi-item">
        ...
    </li>
    <li class="pagi-item">
        <a href="" class="pagi-link">99</a>
    </li>
</ul>

<?php
include_once('./inc/footer.php');
?>