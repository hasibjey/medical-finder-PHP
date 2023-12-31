<?php
$title = "Dashboard";
include_once('./inc/header.php');
$bloods = $conn->query("SELECT * FROM `bloods`");
$id = null;
$blood = null;
$btnTitle = "insert";

if(isset($_GET['edit'])) {
    $eid = $_GET['edit'];
    $sql = $conn->query("SELECT * FROM `bloods` WHERE `id` = '$eid' ");
    if($sql->num_rows > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $id = $row["id"];
            $blood = $row["blood"];
            $btnTitle = "update";
        }
    }
}
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

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">blood groups</div>
                    <div class="card-body">
                        <table class="table table-striped" id="blood-table">
                            <tr>
                                <th>#</th>
                                <th>blood group</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if ($bloods->num_rows > 0) {
                                $i = 1;
                                while ($adm = mysqli_fetch_assoc($bloods)) {
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $adm['blood']; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="./controllers/BloodController.php" method="post">
                                                    <button class="btn btn-sm btn-danger" name="delete" value="<?php echo $adm['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                <form action="" method="get">
                                                    <button class="btn btn-sm btn-success" name="edit" value="<?php echo $adm['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                            <?php }
                                $i++;
                            } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header"><?php echo $btnTitle; ?> blood group</div>
                    <div class="card-body">
                        <form action="./controllers/BloodController.php" method="post">
                            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                            <div class="mb-3">
                                <label class="label">blood group</label>
                                <input type="text" class="form-control" name="blood" value="<?php echo $blood; ?>">
                            </div>
                            <div class="my-4 text-center">
                                <?php
                                if($btnTitle == 'insert')
                                    echo '<button class="btn btn-sm btn-danger px-4" type="reset">Clear</button>';
                                else
                                    echo '<a href="./blood.php" class="btn btn-sm btn-danger px-4">Clear</a>';
                                ?>
                                <button class="btn btn-sm btn-success px-4 text-capitalize" type="submit" name="<?php echo $btnTitle; ?>"><?php echo $btnTitle; ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
</section>

<?php
include_once('./inc/footer.php');
?>