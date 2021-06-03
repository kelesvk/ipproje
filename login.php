<?php
$title = "Giriş Yap";
require("inc/header.php");
session_start();
if (isset($_SESSION["username"])) {
    header("Location: admin/index.php");
}
?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5 vh-100">
        <!-- Form -->
        <?php
        $error = "";
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $username = mysqli_real_escape_string($conn, $username);
            $password = mysqli_real_escape_string($conn, $password);

            $sql = "SELECT * FROM users WHERE u_uname='{$username}'";
            $select_user = mysqli_query($conn, $sql);

            if (mysqli_num_rows($select_user) == 0) {
                $error = "Kullanıcı adı bulunamadı!";
            } else {

                $get_user = mysqli_fetch_array($select_user);
                $u_id = $get_user['u_id'];
                $u_name = $get_user['u_name'];
                $u_username = $get_user['u_uname'];
                $u_password = $get_user['u_password'];
                $u_email = $get_user['u_email'];
                $u_perm = $get_user['u_perm'];

                if ($u_password != $password) {
                    $error = "Şifre yanlış!";
                } else if ($u_password == $password) {
                    $_SESSION["id"] = $u_id;
                    $_SESSION["name"] = $u_name;
                    $_SESSION["username"] = $u_username;
                    $_SESSION["password"] = $u_password;
                    $_SESSION["email"] = $u_email;
                    $_SESSION["perm"] = $u_perm;

                    header("Location: admin/index.php");
                } else {
                    $error = "Bilinmeyen bir hata ile karşılaştık!";
                }
            }
        }
        ?>
        <section id="loginform">
            <div class="position-absolute top-50 start-50 translate-middle vw-50">
                <form action="" method="post">
                    <hr />
                    <div class="my-3 ">

                        <label for="username" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username" name="username">

                    </div>
                    <div class="my-2">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-danger text-center"><?php echo $error; ?></div>
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-secondary my-2" name="login">Giriş Yap</button>
                    </div>
                </form>
                <hr />

            </div>
        </section>

    </div>


    <?php include 'inc/footer.php'; ?>



</body>

</html>