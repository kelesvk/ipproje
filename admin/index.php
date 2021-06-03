<?php $title = "Ana Sayfa";
include "inc/adminheader.php"; ?>



<?php include "inc/adminsidebar.php"; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Slider</h1>

</div>



<div class="row">
      <?php
      $sql = "SELECT * FROM slider";
      $select_all_slider = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($select_all_slider)) {
            $slider_id = $row['s_id'];
            $slider_text = $row['s_text'];
            $slider_link = $row['s_link'];
      ?>
            <div class="col-4 border my-2" style="max-height:40vh;" >
                  <form action="" method="post">
                        <img src="<?php echo $slider_link; ?>" class="img-fluid img-thumbnail rounded mx-auto d-block"  style="max-height:25vh;" alt="...">

                        <div class="btn-group w-100 my-2 d-flex align-items-end" role="group">
                              <button class="btn  btn-outline-secondary" id="s_change_img" data-id="<?php echo $slider_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#change_modal_img'>Resim Değiştir</button>
                              <button class="btn  btn-outline-secondary" id="change_text" data-id="<?php echo $slider_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#change_modal_text'>Yazı Değiştir</button>

                              <button class="btn  btn-danger" id="s_delete" data-id="<?php echo $slider_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#delete_modal'>Kaldır</button>

                        </div>
                  </form>
            </div>
      <?php
      }
      ?>
      <div class="col-4 border my-2 " style="min-height:33vh;">
            <form action="" method="post" class="h-100 py-2">
                  <button class="btn btn-outline-success w-100 h-100" id="add_slider" name="add_slider" type="submit">EKLE</button>
            </form>
      </div>

      <hr>
</div>
<?php
if (isset($_POST["add_slider"])) {
      $add_slider_link = "http://localhost/ip/admin/upload/1.jpg";

      $sql = "INSERT INTO slider(s_link) VALUE('$add_slider_link')";
      mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}
?>
<!-- Change Modal -->
<div class="modal fade" id="change_modal_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Resim Değiştir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

                              <div class="form-group pb-3">
                                    <input type="hidden" name="slider_id" id="slider_id" value="">
                                    <input type="file" class="form-control" accept="image/png, image/jpeg" name="image" />
                                    <div class="invalid-feedback">
                                          Lütfen bir adres giriniz
                                    </div>

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="change_link">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<!-- Change Modal Text -->
<div class="modal fade" id="change_modal_text" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yazıyı değiştir</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>

                              <div class="form-group pb-3">
                                    <input type="hidden" name="slider_id" id="slider_id" value="">
                                    <input type="text" class="form-control" name="slider_text" id="slider_text" required>
                                    <div class="invalid-feedback">
                                          Lütfen bir adres giriniz
                                    </div>

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="change_text">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kaldır</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        <form action="" method="post">
                              Kaldırmak istiyor musunuz?
                              <div class="form-group pb-3">
                                    <input type="hidden" name="slider_id" id="slider_id" value="">

                              </div>

                              <div class="modal-footer pb-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                                    <button type="submit" class="btn btn-primary" name="delete_slider">Onayla</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</div>
<?php
if (isset($_POST["delete_slider"])) {
      $slider_id = $_POST["slider_id"];

      $sql = "DELETE FROM slider WHERE s_id='$slider_id'";
      mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}


if (isset($_POST["change_link"])) {
      $errors = array();
      $file_name = $_FILES['image']['name'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file = dirname(__FILE__) . "/upload/";

      $filepath = $file . $file_name;
      function current_url()
      {
            $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $validURL = str_replace("&", "&amp", $url);
            return $validURL;
      }
      if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $filepath);
      } else {
            print_r($errors);
      }

      $slider_id = $_POST["slider_id"];
      $slider_link = current_url() . "/upload/" . $file_name;
      $sql = "UPDATE slider SET s_link='$slider_link' WHERE s_id='$slider_id'";
      mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}
if (isset($_POST["change_text"])) {
      $slider_id = $_POST["slider_id"];
      $slider_text = $_POST["slider_text"];
      $sql = "UPDATE slider SET s_text='$slider_text' WHERE s_id='$slider_id'";
      mysqli_query($conn, $sql);
      echo "<meta http-equiv='refresh' content='0'>";
}



?>





<?php include "inc/adminfooter.php"; ?>