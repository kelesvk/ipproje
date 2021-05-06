<!-- Görüntülenme Sayacı -->
<?php
    $user_ip=$_SERVER['REMOTE_ADDR'];
    $article_id = $_GET["a_id"];
    $check_ip = mysqli_query($conn, "SELECT v_userip FROM articlesview WHERE v_aid='$article_id' AND v_userip='$user_ip'");
    if(mysqli_num_rows($check_ip)>=1)
    {
      
    }
    else
    {
      $insertview = mysqli_query($conn, "INSERT INTO articlesview VALUES('','$article_id','$user_ip')");
      $updateview = mysqli_query($conn, "UPDATE articles SET a_view = a_view + 1 WHERE a_id='$article_id' ");
    }


    $totalview = mysqli_fetch_row(mysqli_query($conn, "SELECT a_view FROM articles WHERE a_id='$article_id'"));
    $showview = $totalview[0];

  ?>

<!----------------------->