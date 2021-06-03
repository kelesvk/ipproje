<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Ana Sayfa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categories.php">
              <span data-feather="file"></span>
              Kategoriler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="articles.php">
              <span data-feather="file"></span>
              Makaleler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comments.php">
              <span data-feather="file"></span>
              Yorumlar
            </a>
          </li>
          <li class="nav-item">
            <?php
              if ($_SESSION["perm"] == 2) {         
            ?>
            <a class="nav-link" href="users.php">
              <span data-feather="file"></span>
              Kullanıcılar
            </a>
          </li>
          <?php } ?>
        </ul>



      </div>
    </nav>