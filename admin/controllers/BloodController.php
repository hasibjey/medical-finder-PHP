<?php
include_once("../inc/conn.php");

/**
 * Data insert
 */
if (isset($_POST["insert"])) {
    $blood = $_POST["blood"];

    $sql = $conn->query("INSERT INTO `bloods` (`blood`) VALUES ('$blood')");

    if ($sql) {
?>
        <script>
            alert("Blood group insert successfully.");
            window.location.replace("../blood.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../blood.php");
        </script>
    <?php
    }
}
/**
 * Update insert
 */
if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $blood = $_POST["blood"];

    $sql = $conn->query("UPDATE `bloods` SET `blood` = '$blood' WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Bloods group update successfully.");
            window.location.replace("../blood.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../blood.php");
        </script>
    <?php
    }
}

/**
 * Delete insert
 */
if (isset($_POST["delete"])) {
    $id = $_POST["delete"];

    $sql = $conn->query("DELETE FROM `bloods` WHERE `id` = '$id'");

    if ($sql) {
    ?>
        <script>
            alert("Blood group delete successfully.");
            window.location.replace("../blood.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Opss!");
            window.location.replace("../blood.php");
        </script>
<?php
    }
}
