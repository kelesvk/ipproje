<?php
$title = "Kritik20";
require("inc/header.php");

?>

<body>
    <header id='header'>
        <?php include 'inc/navbar.php' ?>
    </header>
    <div class="container container-border pb-5">
        <!-- Slide -->
        <div class="container-lg pb-0 px-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php

                    $sql = "SELECT * FROM slider";
                    $select_all_slider = mysqli_query($conn, $sql);
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($select_all_slider)) {
                        $slider_id = $row['s_id'];
                        $slider_text = $row['s_text'];
                        $slider_link = $row['s_link'];

                        if ($i == 0) {
                            echo "<div class='carousel-item active'>";
                            $i = 5;
                        } else {
                            echo "<div class='carousel-item'>";
                        }
                    ?>

                        <img src="<?php echo $slider_link; ?>" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p><?php echo $slider_text; ?></p>
                        </div>
                </div>
            <?php
                    }
            ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <hr />
        <!--        içerik         -->
        <section id='content'>
            <h2 class="text-start">Yeni Makaleler</h2>
            <div class='row justify-content-evenly'>

                <?php
                $sql = "SELECT * FROM articles ORDER BY a_date DESC LIMIT 3";
                $select_newest = mysqli_query($conn, $sql);


                while ($row = mysqli_fetch_assoc($select_newest)) {
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

            </div>
            <hr />
            <!-- Alt -->
            <h2 class="text-start">Popüler Makaleler</h2>
            <div class='row justify-content-evenly'>
                <?php
                $sql = "SELECT * FROM articles ORDER BY a_view DESC LIMIT 3";
                $select_popular = mysqli_query($conn, $sql);


                while ($row = mysqli_fetch_assoc($select_popular)) {
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
            </div>

        </section>


    </div>
    </div>
    <?php include 'inc/footer.php'; ?>




</body>

</html>