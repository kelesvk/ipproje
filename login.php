<?php 
$title = "Giriş Yap";
require ("inc/header.php"); 
?>
<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5 vh-100">
        <!-- Form -->

        <section id="loginform">
            <div class="position-absolute top-50 start-50 translate-middle vw-50">
                <form>
                    <hr />
                    <div class="mb-3 ">
                        <label for="username" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Giriş Yap</button>
                    </div>
                </form>
                <hr />
                <div class="d-flex justify-content-center">
                <a class ="btn btn-danger px-4" href="./register.php">Kayıt Ol</a>
                </div>
            </div>
        </section>







    </div>
    <?php include 'inc/footer.php'; ?>

 

</body>

</html>