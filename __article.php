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
    <div class="showcase_carousel">
        <a href="#" class="arrow action left"></a>
        <ol>
        <?php
            for($i = 1; $i < $data['image_num'] + 1; $i++) {
        ?>
            <li<?php if($i == 1) { echo ' class="active"'; } ?>>
                <img class="action" src="<?php echo $data['image_path'] . $i . '.jpg'; ?>" width="800" height="450" border="0"
                alt="<?php echo $data['image_alt'] ?>" />
            </li>
        <?php
            }
        ?>
        </ol>
        <a href="#" class="arrow action right"></a>
    </div>
</article>

<?php
    }
?>