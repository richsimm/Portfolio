<div class="showcase_carousel">
    <a href="#" class="arrow action left"></a>
    <ol>
    <?php
        for($i = 1; $i < $carouselLength + 1; $i++) {
    ?>
        <li<?php if($i == 1) { echo ' class="active"'; } ?>>
            <img class="action" src="<?php echo $carouselImagePath . $i . '.jpg'; ?>" width="800" height="450" border="0"
            alt="<?php echo $carouselAlt; ?>" />
        </li>
    <?php
        }
    ?>
    </ol>
    <a href="#" class="arrow action right"></a>
</div>