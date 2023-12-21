<?php
include_once("../inc/conn.php");

/**
 * Data insert
 */
if (isset($_POST["insert"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash(1234, PASSWORD_DEFAULT);

    $sql = $conn->query("INSERT INTO `admins` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')");

    if ($sql) {
?>
        <script>
            alert("Admin insert successfully.");
            window.location.replace("../admins.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../admins.php");
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
    echo $status = $_POST["status"] == 1 ? 0 : 1;
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
