<nav class="navigation">
    <ul class="nav-group">
        <li class="nav-item">
            <a href="./index.php" class="nav-link <?php if(pageName() == 'index') { echo 'nav-active';} ?>">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="./category.php" class="nav-link <?php if(pageName() == 'category') { echo 'nav-active';} ?>">Category</a>
        </li>
        <li class="nav-item">
            <a href="./donor.php" class="nav-link <?php if(pageName() == 'donor') { echo 'nav-active';} ?>">donor</a>
        </li>
        <li class="nav-item">
            <a href="./admins.php" class="nav-link <?php if(pageName() == 'admins') { echo 'nav-active';} ?>">admins</a>
        </li>
        <li class="nav-item">
            <a href="./districts.php" class="nav-link <?php if(pageName() == 'districts') { echo 'nav-active';} ?>">districts</a>
        </li>
        <li class="nav-item">
            <a href="./areas.php" class="nav-link <?php if(pageName() == 'areas') { echo 'nav-active';} ?>">areas</a>
        </li>
        <li class="nav-item">
            <a href="./blood.php" class="nav-link <?php if(pageName() == 'blood') { echo 'nav-active';} ?>">blood group</a>
        </li>
    </ul>
</nav>