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
                        echo "<a href='./category.php?c_id={$category_id}' class='list-group-item'>{$category_name}<span class='float-end badge badge-light round bg-k20secondary'>{$result}</span> </a>";
                    }
                    ?>
                    <!--<a href="#" class="list-group-item">Kategori 1<span
                                            class="float-end badge badge-light round bg-k20secondary">12</span> </a>
                                    <a href="#" class="list-group-item">Kategori 2<span
                                            class="float-end badge badge-light round bg-k20secondary">65</span> </a>
                                    <a href="" class="list-group-item">Kategori 3<span
                                            class="float-end badge badge-light round bg-k20secondary">90</span> </a>
                                    <a href="#" class="list-group-item">Kategori 4<span
                                            class="float-end badge badge-light round bg-k20secondary">15</span> </a>
                                -->
                </div>
            </div>
        </article>

    </div>
</aside>