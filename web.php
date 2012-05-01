<?php 
    $pageID = 'work';
    include('__header.php');
?>
<div id="container">
    <div id="container_inner">
        <section>
            <h3>
                My web work
            </h3>
                <nav class="work_menu">
                        <a href="#" class="work_menu_item active">
                            Web
                        </a>
                        <a href="#" class="work_menu_item">
                            Brand
                        </a>
                        <a href="#" class="work_menu_item">
                            Print
                        </a>
                </nav>
                
            <?php
                $project = 'web_rajar';
                include('__article.php');

                $project = 'web_events';
                include('__article.php');

                $project = 'web_ess';
                include('__article.php');

                $project = 'web_cc';
                include('__article.php');

                $project = 'web_mediatel';
                include('__article.php');

                $project = 'web_barb';
                include('__article.php');
            ?>

        </section>
    </div>
</div>

<?php
    include('__footer.php');
?>