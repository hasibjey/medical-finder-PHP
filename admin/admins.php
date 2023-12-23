<?php
$title = "Admins";
include_once('./inc/header.php');
$admins = $conn->query("SELECT * FROM `admins`");
$id = null;
$name = null;
$email = null;
$btnTitle = 'insert';

if (isset($_GET["edit"])) {
    $eid = $_GET['edit'];
    $sql = $conn->query("SELECT * FROM `admins` WHERE `id` = '$eid'");
    if ($sql->num_rows > 0) {
        while ($admin = mysqli_fetch_assoc($sql)) {
            $id = $admin['id'];
            $name = $admin['name'];
            $email = $admin['email'];
            $btnTitle = "update";
        }
    }
}
?>

<section class="right-section">
    <?php include_once("./inc/top.php"); ?>
    <section class="admin-container">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header fst-italic">Admins</div>
                    <div class="card-body">
                        <table class="table table-striped" id="admins-table">
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if ($admins->num_rows > 0) {
                                $i = 1;
                                while ($adm = mysqli_fetch_assoc($admins)) {
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $adm['name']; ?></td>
                                        <td><?php echo $adm['email']; ?></td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="./controllers/AdminController.php" method="post">
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
                    <div class="card-header fst-italic"><?php echo $btnTitle; ?> Admins</div>
                    <div class="card-body">
                        <form action="./controllers/AdminController.php" method="post">
                            <input type="text" name="id" value="<?php echo $id ?>" hidden>
                            <div class="mb-3">
                                <label class="label">name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                            </div>
                            <div class="mb-3">
                                <label class="label">email</label>
                                <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                            </div>
                            <div class="my-4 text-center">
                                <button class="btn btn-sm btn-danger px-4" type="reset">Clear</button>
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