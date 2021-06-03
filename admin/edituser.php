<?php
$user_id = $_GET["u_id"];

$title = "Kullanıcı Düzenle";
include "inc/adminheader.php"; ?>

<?php include "inc/adminsidebar.php"; ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kullanıcı Düzenle</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<?php
$sql = "SELECT * FROM users WHERE u_id='$user_id'";
$select_user = mysqli_query($conn, $sql);
$get_user = mysqli_fetch_array($select_user);
$user_name = $get_user['u_name'];
$user_uname = $get_user['u_uname'];
$user_password = $get_user['u_password'];
$user_email = $get_user['u_email'];
$user_perm = $get_user['u_perm'];

?>
<form action="" method="post" class="needs-validation" novalidate>


    <div class="form-group pb-3">
        İsim:
        <input type="text" class="form-control" name="user_name" value="<?php echo $user_name; ?>" required>
        <div class="invalid-feedback">
            Lütfen boş bırakmayınız!
        </div>
        <hr>
        Kullanıcı adı:
        <input type="text" class="form-control" name="user_uname" value="<?php echo  $user_uname; ?>" required>
        <div class="invalid-feedback">
            Lütfen boş bırakmayınız!
        </div>
        <hr>
        Şifre:
        <input type="text" class="form-control" name="user_password" value="<?php echo $user_password; ?>" required>
        <div class="invalid-feedback">
            Lütfen boş bırakmayınız!
        </div>
        <hr>
        E-mail:
        <input type="text" class="form-control" name="user_email" value="<?php echo $user_email; ?>" required>
        <div class="invalid-feedback">
            Lütfen boş bırakmayınız!
        </div>
        <hr>
        Yetki:

        <select class="form-select w-25" name="user_perm" id="user_perm" aria-label="Yetki" required>
            <?php
        

            if ($user_perm == 1) {
                echo "<option value='1' selected>Yazar</option>";
                echo "<option value='2'>Yönetici</option>";
            } else if ($user_perm == 2) {
                echo "<option value='1'>Yazar</option>";
                echo "<option value='2' selected>Yönetici</option>";
            }

            ?>


        </select>
        <hr>


    </div>
    <button type="submit" class="btn btn-primary" name="edit_user">Onayla</button>

</form>
<?php
if (isset($_POST["edit_user"])) {
    $edit_user_name = $_POST["user_name"];
    $edit_user_uname = $_POST["user_uname"];
    $edit_user_password = $_POST["user_password"];
    $edit_user_email = $_POST["user_email"];
    $edit_user_perm = $_POST["user_perm"];

    if (
        $edit_user_name != "" || !(empty($edit_user_name)) ||
        $edit_user_uname != "" || !(empty($edit_user_uname)) ||
        $edit_user_password != "" || !(empty($edit_user_password)) ||
        $edit_user_email != "" || !(empty($edit_user_email)) ||
        $edit_user_perm != "" || !(empty($edit_user_perm))
    ) {
        $sql = "UPDATE users SET u_name='$edit_user_name', u_uname='$edit_user_uname', u_password='$edit_user_password', u_email='$edit_user_email', u_perm='$edit_user_perm' WHERE u_id='$user_id'";
        $sorgu =mysqli_query($conn, $sql) or die(mysqli_error($conn));;
        header("Location: ./users.php");
    }
}




?>



<?php include "inc/adminfooter.php";
 ?>