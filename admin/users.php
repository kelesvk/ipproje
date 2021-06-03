<?php $title = "Kullanıcılar";
include "inc/adminheader.php";

if ($_SESSION["perm"] != 2) {
    header("Location: ../index.php");
}


?>

<?php include "inc/adminsidebar.php"; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kullanıcılar</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <form action="" method="post">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle='modal' data-bs-target='#add_user'>Ekle</button>
            </form>
        </div>
    </div>
</div>


<table class="table table-bordered">
    <thead class="bg-dark text-white text-center">
        <tr>
            <th>ID</th>
            <th>İsim</th>
            <th>Kullanıcı Adı</th>
            <th>E-Mail</th>
            <th>Yetki</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM users";
        $select_all_users = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($select_all_users)) {
            $users_id = $row["u_id"];
            $users_name = $row["u_name"];
            $users_uname = $row["u_uname"];
            $users_email = $row["u_email"];
            $users_perm = $row["u_perm"];
        ?>
            <tr>
                <td>
                    <div class="text-center py-2"><?php echo $users_id; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $users_name; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $users_uname; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $users_email; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $users_perm; ?></div>
                </td>
                <td class="w-25 mx-auto">
                    <div class="input-group mx-auto">

                        <a class="btn w-50 btn-outline-secondary" id="u_edit" href='<?php echo "./edituser.php?u_id={$users_id}"; ?>' type="button">Düzenle</a>
                        <button class="btn w-50 btn-danger" id="u_delete" data-id="<?php echo $users_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#delete_modal'>Kaldır</button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<!-- Add Modal -->
<div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kullanıcı Ekle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" class="needs-validation" novalidate>

                    <div class="form-group pb-3">
                        İsim:
                        <input type="text" class="form-control" name="user_name" required>
                        <div class="invalid-feedback">
                            Lütfen boş bırakmayınız!
                        </div>
                        Kullanıcı adı:
                        <input type="text" class="form-control" name="user_uname" required>
                        <div class="invalid-feedback">
                            Lütfen boş bırakmayınız!
                        </div>
                        Şifre:
                        <input type="text" class="form-control" name="user_password" required>
                        <div class="invalid-feedback">
                            Lütfen boş bırakmayınız!
                        </div>
                        E-mail:
                        <input type="text" class="form-control" name="user_email" required>
                        <div class="invalid-feedback">
                            Lütfen boş bırakmayınız!
                        </div>
                        Yetki:
                        <select class="form-select w-25" name="user_perm" aria-label="Yetki" required>

                            <option value='1' selected>Yönetici</option>
                            <option value='2' selected>Yazar</option>
                        </select>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="submit" class="btn btn-primary" name="add_user">Onayla</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Kullanıcı Kaldır</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    Bu kullanıcıyı kaldırmak istiyor musunuz?
                    <div class="form-group pb-3">
                        <input type="hidden" name="user_id" id="user_id" value="">

                    </div>

                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="submit" class="btn btn-primary" name="delete_user">Onayla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["add_user"])) {
    $add_user_name = $_POST["user_name"];
    $add_user_uname = $_POST["user_uname"];
    $add_user_password = $_POST["user_password"];
    $add_user_email = $_POST["user_email"];
    $add_user_perm = $_POST["user_perm"];

    if (
        $add_user_name != "" || !(empty($$add_user_name)) ||
        $add_user_uname != "" || !(empty($add_user_uname)) ||
        $add_user_password != "" || !(empty($add_user_password)) ||
        $add_user_email != "" || !(empty($add_user_email)) ||
        $add_user_perm != "" || !(empty($add_user_perm))
    ) {
        $sql = "INSERT INTO users(u_name,u_uname,u_password,u_email,u_perm) VALUE('$add_user_name','$add_user_uname','$add_user_password','$add_user_email','$add_user_perm')";
        mysqli_query($conn, $sql);
        echo "<meta http-equiv='refresh' content='0'>";
    }
}

if (isset($_POST["delete_user"])) {
    $delete_user_id = $_POST["user_id"];

    $sql = "DELETE FROM users WHERE u_id='$delete_user_id'";
    mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
}

?>


<?php include "inc/adminfooter.php"; ?>