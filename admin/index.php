<?php
$title = "Dashboard";
include_once('./inc/header.php');
?>

<section class="right-section">
  <?php include_once("./inc/top.php"); ?>
  <section class="admin-container">
    <div class="dash-info">
      <div class="dash-info-box">
        <div class="center">
          <div class="number">1000</div>
          <span class="title">doctors</span>
        </div>
        <img src="./assets/images/doctor.png" alt="" class="dash-img">
      </div>
      <div class="dash-info-box">
        <div class="center">
          <div class="number">1000</div>
          <span class="title">hospitals</span>
        </div>
        <img src="./assets/images/hospital.png" alt="" class="dash-img">
      </div>
      <div class="dash-info-box">
        <div class="center">
          <div class="number">1000</div>
          <span class="title">Blood Donner</span>
        </div>
        <img src="./assets/images/iv-pole.png" alt="" class="dash-img">
      </div>
      <div class="dash-info-box">
        <div class="center">
          <div class="number">1000</div>
          <span class="title">Help post</span>
        </div>
        <img src="./assets/images/helping.png" alt="" class="dash-img">
      </div>
    </div>
  </section>
</section>

<?php
include_once('./inc/footer.php');
?>