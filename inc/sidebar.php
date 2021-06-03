<aside class="w-25 float-end">
 
    <div class="card">
        <article class="card-group-item">
            <header class="card-header">
                <h6 class="title text-center">Kategoriler</h6>
            </header>
            <div class="filter-content">
                <div class="list-group list-group-flush">
                    <?php
                    $sql = "SELECT * FROM categories";
                    $select_all_categories = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($select_all_categories)) {
                        $category_id = $row["c_id"];
                        $sql_count = mysqli_query($conn, "SELECT count(*) FROM articles WHERE a_cid='$category_id'");
                        $count = mysqli_fetch_array($sql_count);
                        $result = $count[0];
                        $category_name = $row["c_name"];
                        if($result != 0)
                        echo "<a href='./category.php?c_id={$category_id}' class='list-group-item'>{$category_name}<span class='float-end badge badge-light round bg-k20secondary'>{$result}</span> </a>";
                        else
                        echo "<a  class='list-group-item'>{$category_name}<span class='float-end badge badge-light round bg-danger'>{$result}</span> </a>";
                    }
                    ?>

                </div>
            </div>
        </article>

    </div>
    <form action="search.php" method="post">
    <div class="input-group mt-3">
        <input type="text" class="form-control" placeholder="Aranalıcak kelime" aria-label="Arama" name="search">
        <button class="btn btn-outline-secondary" type="submit" name="searchbutton" id="searchbutton">Arama</button>
        </form>
    </div>
</aside>