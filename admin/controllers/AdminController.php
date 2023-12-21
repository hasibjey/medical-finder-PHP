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
    $name = $_POST["name"];
    $email = $_POST["email"];

    $sql = $conn->query("UPDATE `admins` SET `name` = '$name', `email` = '$email' WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Admin update successfully.");
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
 * Delete insert
 */
if (isset($_POST["delete"])) {
    $id = $_POST["delete"];

    $sql = $conn->query("DELETE FROM `admins` WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Admin delete successfully.");
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
