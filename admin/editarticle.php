<?php

$article_id = $_GET["a_id"];

$title = "Makale Düzenle";
include "inc/adminheader.php"; ?>

<?php include "inc/adminsidebar.php"; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Makale Düzenle</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle='modal' data-bs-target='#add_modal'>Ekle</button>
        </div>
    </div>
</div>
<?php
$sql = "SELECT * FROM articles WHERE a_id='$article_id'";
$select_article = mysqli_query($conn, $sql);
$get_article = mysqli_fetch_array($select_article);
$title = $get_article['a_title'];
$content = $get_article['a_content'];
?>
<form action="" method="post" class="needs-validation" novalidate>
    Makale Başlığı

    <div class="form-group pb-3">
        <input type="text" class="form-control w-25" name="article_name" id="article_name" value="<?php echo $title; ?>" required>
        <div class="invalid-feedback">
            Boş bırakmayanız
        </div>
        <hr>
        Kategori
        <select class="form-select w-25" name="article_cid" id="article_cid " aria-label="Kategori" required>
            <?php
            $a_category = $get_article['a_cid'];

            $sql2 = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($conn, $sql2);

            while ($row = mysqli_fetch_assoc($select_all_categories)) {
                $category_id = $row["c_id"];
                $category_name = $row["c_name"];
                if ($a_category == $category_id) {
                    echo "<option value='{$category_id}' selected>$category_name</option>";
                } else {
                    echo "<option value='{$category_id}'>$category_name</option>";
                }
            }
            ?>


        </select>
        <hr>
        İçerik:
        <input id="x" type="hidden" name="content" value="<?php echo $content; ?>" required>
        <div class="invalid-feedback">
            Boş bırakmayanız
        </div>
        <trix-editor input="x" required><?php echo $content; ?></trix-editor>
        <div class="invalid-feedback">
            Boş bırakmayanız
        </div>
        <hr>
    </div>
    <button type="submit" class="btn btn-primary" name="edit_article">Onayla</button>

</form>
<?php
if (isset($_POST["edit_article"])) {
    if ($_POST['article_name'] != "" || !(empty($_POST['article_name']))) {
        if ($_POST['content'] != "" || !(empty($_POST['content']))){
        $sql = "UPDATE articles SET a_title='" . $_POST['article_name'] . "', a_content='" . $_POST['content'] . "', a_cid='" . $_POST['article_cid'] . "' WHERE a_id='" . $article_id . "'";
        mysqli_query($conn, $sql);
        header("Location: ./articles.php");
        }
    }
}



?>



<?php include "inc/adminfooter.php";
?>