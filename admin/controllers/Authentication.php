<?php
include_once("../inc/conn.php");
session_start();

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = $conn->query("SELECT * FROM `admins` WHERE `email` = '$email'");

    if ($sql->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $hashPassword = $row["password"];
            $user = [];
            $user["name"] = $row["name"];
            $user["email"] = $row["email"];

            if (password_verify($password, $hashPassword)) {
                $_SESSION["logging"] = true;
                $_SESSION["user"] = $user;
                header("location: ../index.php");
            } else {
?>
                <script>
                    alert("Credentials not match.");
                    window.location.replace("../login.php");
                </script>
        <?php
            }
        }
    } else {
        ?>
        <script>
            alert("Credentials not matchs.");
            window.location.replace("../login.php");
        </script>
<?php
    }
}
