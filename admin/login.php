<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <section class="admin-login-section">
        <div class="admin-login">
            <div class="admin-login-title">Admin login</div>
            <form action="" method="post">
                <div class="admin-login-group">
                    <label>email</label>
                    <input type="email" class="admin-login-control">
                </div>
                <div class="admin-login-group">
                    <label>password</label>
                    <input type="password" class="admin-login-control">
                </div>
                <div class="admin-login-group">
                    <button class="admin-login-btn">login</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="./assets/js/admin.js"></script>
</body>

</html>