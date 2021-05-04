<?php
include "inc/db.php";
$category_id = $_GET["c_id"];
$sql_category_name = "SELECT c_name FROM categories WHERE c_id='$category_id'";
$select_category = mysqli_query($conn, $sql_category_name);
$get_category = mysqli_fetch_assoc($select_category);
$title = $get_category['c_name'];
include("inc/header.php");
?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5">

        <!--        içerik         -->
        <section id='content ' class='vh-100'>
            <h2 class="text-start py-4"><?php echo  $get_category['c_name']; ?></h2>
            <?php include 'inc/sidebar.php' ?>
            <div class='row justify-content-start w-75'>


                <?php
                $category_id = $_GET["c_id"];

                $sql = "SELECT * FROM articles WHERE a_cid='$category_id'";
                $select_all_articles = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($select_all_articles)) {
                    $article_id = $row["a_id"];
                    $article_name = $row["a_title"];
                    $article_summary = $row["a_summary"];
                    $article_author = $row["a_author"];
                    $article_cid = $row["a_cid"];

                ?>
                    <div class='col-md-4 mb-4'>
                        <div class=" container content-border">
                            <h3 class="text-center mt-2"><a class="text-decoration-none text-dark" href="<?php echo "./aread.php?a_id={$article_id}"; ?>"><?php echo $article_name; ?></a> </h3>
                            <p class=""><?php echo substr($article_summary, 0, 200); ?>... <a href="<?php echo "./aread.php?a_id={$article_id}"; ?>">Devamını Oku</a></p>

                            <hr>
                            <div class="text-center pb-3"><b><?php echo $article_author; ?></b></div>
                        </div>
                    </div>
                <?php } ?>




            </div>



        </section>


    </div>

    <?php include 'inc/footer.php'; ?>

    <!-- JavaScript -->

    <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>