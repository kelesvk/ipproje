<?php $title = "Kategoriler";
include "inc/adminheader.php"; ?>




<?php include "inc/adminsidebar.php"; ?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Kategoriler</h1>
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
                  <th>Kategori İsmi</th>
                  <th>Düzenle - Sil</th>
            </tr>
      </thead>
      <tbody>

            <?php
            $sql = "SELECT * FROM categories";
            $select_all_categories = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($select_all_categories)) {
                  $category_id = $row["c_id"];
                  $category_name = $row["c_name"];
            ?>
                  <tr>
                        <td>
                              <div class="text-center py-2"><?php echo $category_id; ?></div>
                        </td>
                        <td>
                              <div class="text-center py-2"><?php echo $category_name; ?></div>
                        </td>
                        <td class="w-25 mx-auto">
                              <div class="input-group mx-auto">

                                    <button class="btn w-50 btn-outline-secondary" id="c_change" data-id="<?php echo $category_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#change_modal'>Düzenle</button>

                                    <button class="btn w-50 btn-danger" id="c_delete" data-id="<?php echo $category_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#delete_modal'>Kaldır</button>
                              </div>
                        </td>
                  </tr>
            <?php } ?>
      </tbody>
</table>



<!-- Add Modal -->
<div class="modal fade" id="add_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post" class="needs-validation" novalidate>
                              Kategori ismi:
                              <div class="form-group pb-3">
                                    <input type="text" class="form-control" name="category_name" required>
                                    <div class="invalid-feedback">
                                          Lütfen bir isim giriniz
                                    </div>
                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="submit" class="btn btn-primary" name="add_category">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<?php
if (isset($_POST["add_category"])) {
      $add_category_name = $_POST["category_name"];

      if ($add_category_name != "" || !(empty($add_category_name))) {
            $sql = "INSERT INTO categories(c_name) VALUE('$add_category_name')";
            $add_category = mysqli_query($conn, $sql);
            echo "<meta http-equiv='refresh' content='0'>";
      }
}

?>
<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kategori Kaldır</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post">
                              Bu kategoriyi kaldırmak istiyor musunuz?
                              <div class="form-group pb-3">
                                    <input type="hidden" name="category_id" id="category_id" value="">

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="delete_category">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
<?php
if (isset($_POST["delete_category"])) {
      $delete_category_id = $_POST["category_id"];

      $sql = "DELETE FROM categories WHERE c_id='$delete_category_id'";
      $delete_category = mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}

?>
<!-- Change Modal -->
<div class="modal fade" id="change_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kategori Değiştir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post" class="needs-validation" novalidate>
                              Değiştirmek istediğiniz isim:
                              <div class="form-group pb-3">
                                    <input type="hidden" name="category_id" id="category_id" value="">
                                    <input type="text" class="form-control" name="category_name" id="category_name" required>
                                    <div class="invalid-feedback">
                                          Lütfen bir isim giriniz
                                    </div>

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="change_category">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<?php
if (isset($_POST["change_category"])) {
      $category_id = $_POST["category_id"];

      $category_name = $_POST["category_name"];

      $sql = "UPDATE categories SET c_name='$category_name' WHERE c_id='$category_id'";
      $change_category = mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}

?>

<?php include "inc/adminfooter.php"; ?>