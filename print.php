<?php 
    $pageID = 'work';
    include('__header.php');
?>
<div id="container">
    <div id="container_inner">
        <section>
            <h3>
                My print work
            </h3>
                <nav class="work_menu">
                        <a href="web" class="work_menu_item">
                            Web
                        </a>
                        <a href="brand" class="work_menu_item">
                            Brand
                        </a>
                        <a href="print" class="work_menu_item active">
                            Print
                        </a>
                </nav>
                
            <?php
                $project = 'print_morgana';
                include('__article.php');

                $project = 'print_events';
                include('__article.php');

                $project = 'print_mediatel';
                include('__article.php');

                $project = 'print_ems';
                include('__article.php');

                $project = 'print_cc';
                include('__article.php');
            ?>

        </section>
    </div>
</div>

<?php
    include('__footer.php');
?>