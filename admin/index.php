<?php
$title = "Dashboard";
include_once('./inc/header.php');
?>

<section class="right-section">
  <header class="header">
    <img src="./assets/images/doctor_1.jpeg" alt="" class="admin-img" />
    <ul class="admin-nav">
      <li class="admin-item">
        <a href="" class="admin-link">
          <i class="fa-regular fa-user"></i>
          <span>profile</span>
        </a>
      </li>
      <li class="admin-item">
        <a href="" class="admin-link">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>
          <span>logout</span>
        </a>
      </li>
    </ul>
  </header>
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