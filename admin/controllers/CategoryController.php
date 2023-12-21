<?php
include_once("../inc/conn.php");

/**
 * Data insert
 */
if (isset($_POST["insert"])) {
    $category = $_POST["category"];
    $slug = $_POST["slug"];

    $sql = $conn->query("INSERT INTO `categories` (`category`, `slug`) VALUES ('$category', '$slug')");

    if ($sql) {
?>
        <script>
            alert("Category insert successfully.");
            window.location.replace("../category.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../category.php");
        </script>
    <?php
    }
}
/**
 * Update insert
 */
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $category = $_POST["category"];
    $slug = $_POST["slug"];

    $sql = $conn->query("UPDATE `categories` SET `category` = '$category', `slug` = '$slug' WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Category update successfully.");
            window.location.replace("../category.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../category.php");
        </script>
    <?php
    }
}
/**
 * status update
 */
if (isset($_POST["status"])) {
    echo $id = $_POST["id"];
    echo $status = $_POST["status"] == 1? 0 : 1;
    $sql = $conn->query("UPDATE `categories` SET `status` = '$status' WHERE `id` = '$id'");
    header('Location: ../category.php');
}


/**
 * Delete insert
 */
if (isset($_POST["delete"])) {
    $id = $_POST["delete"];

    $sql = $conn->query("DELETE FROM `categories` WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Category delete successfully.");
            window.location.replace("../category.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../category.php");
        </script>
<?php
    }
}
