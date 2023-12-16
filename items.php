<?php
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
            include("./inc/item.php");
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