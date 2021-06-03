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
                <div class="col-9 content-border">
                    <article>
                        <h1 class="text-center pt-1"><?php echo $get_article['a_title']; ?></h1>
                        <hr />
                        <p>
                            <?php echo $get_article['a_content']; ?>

                        </p>
                        <hr>
                        <div class="row">
                            <div class="col-4 text-center">
                                Yazar: <b><?php echo $get_article['a_author'] ?></b>
                            </div>
                            <div class="col-4 text-center">
                                ------: <b><?php echo '------'; ?></b>
                            </div>
                            <div class="col-4 text-center">
                                Görüntülenme: <b><?php echo $showview; ?></b>
                            </div>
                        </div>
                        <br>
                    </article>

                </div>

                <?php include 'inc/sidebar.php' ?>

                <div class="col-9 mt-2 content-border">
                    <h6 class="display-6 text-center pt-1">Yorum Yap</h6>
                    <hr>

                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">İsminiz: </label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
                            <div id="nameHelp" class="form-text">Yorumda gözükecek olan isim.</div>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Yorumunuz: </label>
                            <textarea type="text" class="form-control" id="text" name="text" aria-describedby="textHelp"></textarea>
                            <div id="textHelp" class="form-text">Yorumunuz onaylandıktan sonra gözükecektir.</div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3" name="add_comment">Gönder</button>
                    </form>



                </div>

                <div class="col-9 mt-2 content-border">
                    <h6 class="display-6 text-center pt-1">Yorumlar</h6>
                    <hr>
                    <?php
                    $sql = "SELECT * FROM comments WHERE com_article_id='$article_id' ";
                    $select_all_comments = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($select_all_comments)) {
                        $comments_author = $row["com_author"];
                        $comments_text = $row["com_text"];
                        $comments_date = date("d-m-Y", strtotime($row["com_date"]));
                        $comments_status = $row["com_status"];
                        if ($comments_status == "Onaylanmış") {
                    ?>
                            <div class="border mb-2 ps-2">
                                <b><?php echo $comments_author; ?>: </b>
                                <p><?php echo $comments_text; ?></p>
                            </div>
                    <?php }
                    }
                    ?>
                    
                </div>
            </div>
    </div>
    </section>
    </div>


    <?php include 'inc/footer.php'; ?>

    <?php
    if (isset($_POST["add_comment"])) {
        $add_comment_author = $_POST["name"];
        $add_comment_text = $_POST["text"];
        $add_comment_date = date("Y-m-d H:i:s");
        $sql = "INSERT INTO comments(com_article_id, com_date, com_author, com_text, com_Status) VALUE('$article_id','$add_comment_date','$add_comment_author','$add_comment_text','Onaylanmamış')";
        mysqli_query($conn, $sql);
        echo "<meta http-equiv='refresh' content='0'>";
    }

    ?>

</body>

</html>