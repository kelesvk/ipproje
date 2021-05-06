<?php
include "inc/db.php";
$article_id = $_GET["a_id"];
$sql = "SELECT * FROM articles WHERE a_id='$article_id'";
$select_article = mysqli_query($conn, $sql);
$get_article = mysqli_fetch_array($select_article);
$title = $get_article['a_title'];;
include("inc/header.php");
include("inc/func.php");
?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5 ">
        <!-- aread -->

        <section id="loginform" class="container">
            <div class="row pt-4">
                <article class="col-9 content-border">
                    <h1 class="text-center pt-1"><?php echo $get_article['a_title']; ?></h1>
                    <hr />
                    <p>
                        <?php echo $get_article['a_content']; ?>

                    </p>
                </article>
                <?php include 'inc/sidebar.php' ?>
            </div>
        <?php echo $showview; ?>
        </section>


    </div>
    <?php include 'inc/footer.php'; ?>

    <!-- JavaScript -->

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>