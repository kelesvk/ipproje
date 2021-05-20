<?php $title = "Makaleler";
include "inc/adminheader.php"; ?>

<?php include "inc/adminsidebar.php"; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Makaleler</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle='modal' data-bs-target='#add_modal'>Ekle</button>
            </div>
      </div>
</div>

<table class="table table-bordered">
      <thead class="bg-dark text-white text-center">
            <tr>
                  <th>ID</th>
                  <th>Görüntülenme</th>
                  <th>Kategori</th>
                  <th>Makale İsmi</th>
                  <th>Düzenle - Sil</th>
            </tr>
      </thead>
      <tbody>

            <?php
            $sql = "SELECT * FROM articles";
            $select_all_articles = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($select_all_articles)) {
                  $articles_id = $row["a_id"];
                  $articles_title = $row["a_title"];
                  $a_cid = $row["a_cid"];
                  $articles_view = $row["a_view"];
                  $category_name = mysqli_fetch_array(mysqli_query($conn, "SELECT c_name FROM categories WHERE c_id='$a_cid'"));
            ?>
                  <tr>
                        <td>
                              <div class="text-center py-2"><?php echo $articles_id; ?></div>
                        </td>
                        <td>
                              <div class="text-center py-2"><?php echo $articles_view; ?></div>
                        </td>
                        <td>
                              <div class="text-center py-2"><?php

                                                            echo $category_name[0];
                                                            ?></div>
                        </td>
                        <td class="w-50">
                              <div class="text-center py-2"><?php echo $articles_title; ?></div>
                        </td>
                        <td class="w-25 mx-auto">
                              <div class="input-group mx-auto">

                                    <button class="btn w-50 btn-outline-secondary" id="c_change" data-id="<?php echo $articles_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#change_modal'>Düzenle</button>

                                    <button class="btn w-50 btn-danger" id="a_delete" data-id="<?php echo $articles_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#delete_modal'>Kaldır</button>
                              </div>
                        </td>
                  </tr>
            <?php } ?>
      </tbody>
</table>


<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post">
                              Bu kategoriyi kaldırmak istiyor musunuz?
                              <div class="form-group pb-3">
                                    <input type="hidden" name="article_id" id="article_id" value="">

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="delete_article">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
<?php
if (isset($_POST["delete_article"])) {
      $delete_article_id = $_POST["article_id"];

      $sql = "DELETE FROM articles WHERE a_id='$delete_article_id'";
      $delete_article = mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}

?>

<?php include "inc/adminfooter.php"; ?>