<!-- main navigation -->
<?php
    $category = isset($_GET['item'])? $_GET['item'] : pageName();
?>
<nav class="main-nav">
    <ul class="main-nav-group">
        <li class="main-nav-item <?php if($category == 'index'){echo 'active';} ?>">
            <a href="./index.php" class="main-nav-link">Home</a>
        </li>
        <li class="main-nav-item <?php if($category == 'doctor'){echo 'active';} ?>">
            <a href="./items.php?item=doctor" class="main-nav-link">Doctor</a>
        </li>
        <li class="main-nav-item <?php if($category == 'hospital'){echo 'active';} ?>">
            <a href="./items.php?item=hospital" class="main-nav-link">Hospital</a>
        </li>
        <li class="main-nav-item <?php if($category == 'blood_donation'){echo 'active';} ?>">
            <a href="./items.php?item=blood_donation" class="main-nav-link">Blood Donation</a>
        </li>
        <li class="main-nav-item <?php if($category == 'about'){echo 'active';} ?>">
            <a href="./about.php" class="main-nav-link">about</a>
        </li>
    </ul>
</nav>