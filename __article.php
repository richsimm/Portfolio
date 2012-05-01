<?php
    require_once('__project_config.php');
    $data = isset($project_config[$project]) ? $project_config[$project] : null;

    if($data) {
?>

<!-- Project internal anchor -->
<a name="<?php echo $project ?>"></a>

<article class="content_item">
    <div class="content_info">
        <div class="content_logo">
            <img src="<?php echo $data['logo'] ?>" alt="<?php echo $data['logo_alt'] ?>" />
        </div>
        <div class="content_copy">
            <p><?php echo $data['description'] ?></p>
            <p>
                <strong>
                    Brief
                </strong>
            </p>
            <ul>
                <?php foreach($data['bullets'] as $bullet) { ?>
                <li><?php echo $bullet ?></li>
                <?php } ?>
            </ul>
        </div>   
    </div>
    <?php include('__carousel.php'); ?>
</article>

<?php
    }
?>