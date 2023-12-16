<!-- main navigation -->
<?php
    $url = isset($_GET['item'])? $_GET['item'] : '';
?>
<nav class="main-nav">
    <ul class="main-nav-group">
        <li class="main-nav-item <?php if($url == null){echo 'active';} ?>">
            <a href="./index.php" class="main-nav-link">Home</a>
        </li>
        <li class="main-nav-item <?php if($url == 'doctor'){echo 'active';} ?>">
            <a href="./items.php?item=doctor" class="main-nav-link">Doctor</a>
        </li>
        <li class="main-nav-item <?php if($url == 'hospital'){echo 'active';} ?>">
            <a href="./items.php?item=hospital" class="main-nav-link">Hospital</a>
        </li>
        <li class="main-nav-item <?php if($url == 'blood_donation'){echo 'active';} ?>">
            <a href="./items.php?item=blood_donation" class="main-nav-link">Blood Donation</a>
        </li>
        <li class="main-nav-item">
            <a href="" class="main-nav-link">about</a>
        </li>
    </ul>
</nav>