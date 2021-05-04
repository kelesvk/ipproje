<aside class="col-3">                    
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
                                
                                while($row = mysqli_fetch_assoc($select_all_categories))
                                {
                                    $category_name = $row["c_name"];                                
                                    echo "<a href='#' class='list-group-item'>{$category_name}<span class='float-end badge badge-light round bg-k20secondary'>X</span> </a>"; 
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