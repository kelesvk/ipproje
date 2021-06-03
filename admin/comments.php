<?php $title = "Yorumlar";
include "inc/adminheader.php"; ?>

<?php include "inc/adminsidebar.php"; ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Yorumlar</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>


<table class="table table-bordered">
    <thead class="bg-dark text-white text-center">
        <tr>
            <th>ID</th>
            <th>Article ID</th>
            <th>Author</th>
            <th>Text</th>
            <th>Date</th>
            <th>Status</th>
            <th>Düzenle - Sil</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM comments";
        $select_all_comments = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($select_all_comments)) {
            $comments_id = $row["com_id"];
            $comments_a_id = $row["com_article_id"];
            $comments_author = $row["com_author"];
            $comments_text = $row["com_text"];
            $comments_date = date("d-m-Y", strtotime($row["com_date"]));
            $comments_status = $row["com_status"];
            $article_name = mysqli_fetch_array(mysqli_query($conn, "SELECT a_title FROM articles WHERE a_id='$comments_a_id'"));
        ?>
            <tr>
                <td>
                    <div class="text-center py-2"><?php echo $comments_id; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $article_name[0]; ?></div>
                </td>
                <td>
                    <div class="text-center py-2"><?php echo $comments_author; ?></div>
                </td>
                <td class="">
                    <div class="text-center py-2"><?php echo $comments_text; ?></div>
                </td>
                <td class="">
                    <div class="text-center py-2"><?php echo $comments_date; ?></div>
                </td>
                <td class="">
                    <div class="text-center py-2"><?php echo $comments_status; ?></div>
                </td>
                <td class="w-25 ">
                    <div class="input-group ">
                        <?php if($comments_status != "Onaylanmış"){?>
                        <button class="btn w-50 btn-success" id="com_approve" data-id="<?php echo $comments_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#approve_modal'>Onayla</button>
                        <?php }?>
                        <button class="btn w-50 btn-danger" id="com_delete" data-id="<?php echo $comments_id; ?>" type="button" data-bs-toggle='modal' data-bs-target='#delete_modal'>Kaldır</button>

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
                <h5 class="modal-title" id="exampleModalLabel">Yorum Kaldır</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    Bu yorumu silmek istiyor musunuz?
                    <div class="form-group pb-3">
                        <input type="hidden" name="comment_id" id="comment_id" value="">

                    </div>

                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="submit" class="btn btn-primary" name="delete_comment">Onayla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["delete_comment"])) {
    $delete_comment_id = $_POST["comment_id"];

    $sql = "DELETE FROM comments WHERE com_id='$delete_comment_id'";
    mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<!-- Approve Modal -->
<div class="modal fade" id="approve_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yorum Onayla</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    Bu yorumu onaylamak istiyor musunuz?
                    <div class="form-group pb-3">
                        <input type="hidden" name="comment_id" id="comment_id" value="">

                    </div>

                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Vazgeç</button>
                        <button type="submit" class="btn btn-primary" name="approve_comment">Onayla</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["approve_comment"])) {
    $approve_comment_id = $_POST["comment_id"];

    $sql = "UPDATE comments SET com_status='Onaylanmış' WHERE com_id='$approve_comment_id'";
    mysqli_query($conn, $sql);
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php include "inc/adminfooter.php"; ?>