<?php
$title = "Makaleler";
require("inc/header.php");
?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5">

        <!--        içerik         -->
        <section id='content' class=''>
            <h2 class="text-start pt-4">Makaleler</h2>
            <hr>
            <?php include 'inc/sidebar.php' ?>
            <div class='row  w-75'>


                <?php
                $page_limit = 6;
                if (isset($_GET["page"])) {
                    $page = $_GET["page"];
                } else {
                    $page = 1;
                }

                if ($page == "" || $page == 1) {
                    $start_post = 0;
                } else {
                    $start_post = ($page * $page_limit) - $page_limit;
                }

                $sqlc = "SELECT * FROM articles";
                $all_articles = mysqli_query($conn, $sqlc);
                $all_articles_count = mysqli_num_rows($all_articles);

                $page_number = ceil($all_articles_count / $page_limit);



                $sql = "SELECT * FROM articles LIMIT $start_post,$page_limit";
                $select_all_articles = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($select_all_articles)) {
                    $article_id = $row["a_id"];
                    $article_name = $row["a_title"];
                    $article_summary = $row["a_summary"];
                    $article_author = $row["a_author"];
                    $article_cid = $row["a_cid"];
                    $article_date = date("d-m-Y", strtotime($row["a_date"]));
                    $article_view = $row["a_view"]

                ?>
                    <div class='col-md-4 mb-4'>
                        <div class=" container content-border">
                            <h3 class="text-center mt-2"><a class="text-decoration-none text-dark" href="<?php echo "./aread.php?a_id={$article_id}"; ?>"><?php echo $article_name; ?></a> </h3>
                            <p class=""><?php echo substr($article_summary, 0, 200); ?>... <a href="<?php echo "./aread.php?a_id={$article_id}"; ?>">Devamını Oku</a></p>

                            <hr>
                            <div class="text-center pb-3"><b><?php echo "{$article_author} | {$article_date} | {$article_view}"; ?></b></div>
                        </div>
                    </div>
                <?php } ?>




                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php
                        $previous = $page - 1;
                        if ($start_post == 0) {
                            echo "<li class='page-item disabled'>";
                        } else {
                            echo "<li class='page-item'>";
                        }
                        ?>
                        <a class="page-link text-dark" href="<?php echo "article.php?page={$previous}"; ?>">Previous</a>
                        </li>
                        <?php
                        for ($i = 1; $i <= $page_number; $i++) {
                            if ($page == $i) {
                                echo "<li class='page-item'><a class='page-link text-white bg-k20secondary' href='article.php?page={$i}'>{$i}</a></li>";
                            } else {
                                echo "<li class='page-item'><a class='page-link text-dark' href='article.php?page={$i}'>{$i}</a></li>";
                            }
                        }
                        ?>
                        <?php
                        $next = $page + 1;
                        if ($page == $page_number) {
                            echo "<li class='page-item disabled'>";
                        } else {
                            echo "<li class='page-item'>";
                        }
                        ?>
                        <a class="page-link text-dark" href="<?php echo "article.php?page={$next}"; ?>">Next</a>
                        </li>
                    </ul>
                </nav>


            </div>



        </section>


    </div>

    <?php include 'inc/footer.php'; ?>



</body>

</html>