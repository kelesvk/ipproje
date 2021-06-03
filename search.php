<?php
include "inc/db.php";
if (isset($_POST["searchbutton"])) {
    $search = $_POST["search"];
} else {
    header("Location:article.php");
}

$title = $search;
include("inc/header.php");
?>

<body class=>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5">

        <!--        içerik         -->
        <section id='content' >
            <h2 class="text-start pt-4"><?php echo 'Aranan: ' . $search; ?></h2>
            <hr>
            <?php include 'inc/sidebar.php' ?>
            <div class='row justify-content-start w-75'>


                <?php

                if ($search == "") {
                    header("Location:article.php");
                }
                $sql = "SELECT * FROM articles WHERE a_content LIKE '%$search%' ORDER BY a_id DESC";

                $select_all_articles = mysqli_query($conn, $sql);
                if(mysqli_num_rows($select_all_articles) == 0){?>

                    <div class="text-center display-4"><b>Sonuç Bulunumadı!</b></div>
                    

                <?php
                }else{
                while ($row = mysqli_fetch_array($select_all_articles)) {
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
                <?php }} ?>



            </div>



        </section>


    </div>

    <?php include 'inc/footer.php'; ?>



</body>

</html>