<?php
    require_once('__project_config.php');
    $data = isset($project_config[$project]) ? $project_config[$project] : null;

    if($data) {
?>

<div class="showcase_carousel image-num-<?php echo $data['image_num'] ?>">

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
    
    <div class="pip_container">

        <?php for($i = 0; $i < $data['image_num']; $i++) { ?>
    	<a href="#" class="pip<?php if($i == 0) { ?> active<?php } ?>"><img src="images/pip.png" alt="*" /></a>
    	<?php } ?>
    		

    </div>
</div>

<?php
    }
?>