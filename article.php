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
        <section id='content '>
            <h2 class="text-start py-4">Makaleler</h2>
            <?php include 'inc/sidebar.php' ?> 
            <div class='row justify-content-between w-75'>
            
            
                <?php 
                $sql = "SELECT * FROM articles";
                $select_all_articles = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($select_all_articles)) {
                    $article_name = $row["a_title"];
                    $article_summary = $row["a_summary"];
                    $article_author = $row["a_author"];
                
                ?>
                <div class='col-4 pb-4'>
                    <div class=" container content-border">
                        <h3 class="text-center mt-2"><?php echo $article_name; ?> </h3>
                        <p class=""><?php echo $article_summary; ?></p>
                        <div class="float-start"> <?php echo $article_author; ?></div>
                        <div class="text-end mb-2"><a href="./aread.php" class="btn btn-secondary">Devamını Oku</a></div>
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