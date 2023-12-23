<?php
$title = "Categories";
include_once('./inc/header.php');
$categories = $conn->query("SELECT * FROM `categories`");
$btnTitle = 'insert';
$id = null;
$cate = null;
$slug = null;
if (isset($_GET['edit'])) {
    $eid = $_GET['edit'];
    $sql = $conn->query("SELECT * FROM `categories` WHERE `id` = '$eid'");
    if ($sql->num_rows > 0) {
        while ($cat = mysqli_fetch_assoc($sql)) {
            $id = $cat['id'];
            $cate = $cat['category'];
            $slug = $cat['slug'];
            $btnTitle = 'update';
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
                    <div class="card-header fst-italic">Categories</div>
                    <div class="card-body">
                        <table class="table table-striped" id="category-table">
                            <tr>
                                <th>#</th>
                                <th>category</th>
                                <th>slug</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            if ($categories->num_rows > 0) {
                                $i = 1;
                                while ($category = mysqli_fetch_assoc($categories)) {
                            ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $category['category']; ?></td>
                                        <td><?php echo $category['slug']; ?></td>
                                        <td>
                                            <form action="./controllers/CategoryController.php" method="post">
                                                <input type="text" name="id" value="<?php echo $category['id'];  ?>" hidden>
                                                <button name="status" value="<?php echo $category['status'];  ?>" class="btn btn-sm w-100 <?php if ($category['status'] == 1) echo "btn-success";
                                                                                                                                        else echo "btn-danger"; ?>">
                                                    <?php if ($category['status'] == 1) echo "Active";
                                                    else echo "Deactive"; ?>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-between">
                                                <form action="./controllers/CategoryController.php" method="post">
                                                    <button class="btn btn-sm btn-danger" name="delete" value="<?php echo $category['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                <form action="" method="get">
                                                    <button class="btn btn-sm btn-success" name="edit" value="<?php echo $category['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></button>
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
                    <div class="card-header fst-italic"><?php echo $btnTitle; ?> category</div>
                    <div class="card-body">
                        <form action="./controllers/CategoryController.php" method="post">
                            <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                            <div class="mb-3">
                                <label class="label">Category</label>
                                <input type="text" class="form-control" name="category" oninput="makeSlug(this)" value="<?php echo $cate; ?>">
                            </div>
                            <div class="mb-3">
                                <label class="label">slug</label>
                                <input type="text" class="form-control" name="slug" id="slug" value="<?php echo $slug; ?>">
                            </div>
                            <div class="my-4 text-center">
                                <?php
                                if ($btnTitle == 'insert')
                                    echo '<button class="btn btn-sm btn-danger px-4" type="reset">Clear</button>';
                                else
                                    echo '<a href="./category.php" class="btn btn-sm btn-danger px-4">Clear</a>';
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