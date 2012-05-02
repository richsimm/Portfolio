<?php 
    $pageID = 'work';
    include('__header.php');
?>
<div id="container">
    <div id="container_inner">
        <section>
            <h3>
                My brand work
            </h3>
                <nav class="work_menu">
                        <a href="web" class="work_menu_item">
                            Web
                        </a>
                        <a href="brand" class="work_menu_item active">
                            Brand
                        </a>
                        <a href="print" class="work_menu_item">
                            Print
                        </a>
                </nav>
                
            <?php
                $project = 'brand_events';
                include('__article.php');

                $project = 'brand_cc';
                include('__article.php');

                $project = 'brand_ems';
                include('__article.php');

                $project = 'brand_procurus';
                include('__article.php');

                $project = 'brand_mediatel';
                include('__article.php');
            ?>

        </section>
    </div>
</div>

<?php
    include('__footer.php');
?>