<?php 
    $pageID = 'work';
    include('__header.php');
?>
<div id="container">
    <div id="container_inner">
        <section>
            <h3>
                My work
            </h3>

            <?php
                $project = 'rajar';
                include('__article.php');

                $project = 'events';
                include('__article.php');
            ?>

        </section>
    </div>
</div>

<?php
    include('__footer.php');
?>