<?php 
$title = "Kayıt Ol";
require ("inc/header.php"); 
?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5 vh-100">
        <!-- Form -->

        <section id="loginform">
            <div class="position-absolute top-50 start-50 translate-middle w-25">
                <form>
                    <hr />
                    <div class="mb-3 ">
                        <label for="username" class="form-label">Kullanıcı Adı</label>
                        <input type="text" class="form-control" id="username">

                    </div>
                    <div class="mb-3 ">
                        <label for="name" class="form-label">İsim</label>
                        <input type="text" class="form-control" id="name">

                    </div>
                    <div class="mb-3 ">
                        <label for="surname" class="form-label">Soyisim</label>
                        <input type="text" class="form-control" id="surname">

                    </div>
                    <div class="mb-3 ">
                        <label for="email" class="form-label">Mail</label>
                        <input type="text" class="form-control" id="email">

                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="repassword" class="form-label">Şifre Tekrar</label>
                        <input type="password" class="form-control" id="repassword">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary">Kayıt Ol</button>
                    </div>
                </form>
                <hr />

            </div>
        </section>







    </div>
    <?php include 'inc/footer.php'; ?>



</body>

</html>