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
            <article class="content_item">
                <div class="content_info">
                    <div class="content_logo">
                        <img src="images/work/logos/mediatel/logo_p.png" alt="MediaTel" />
                    </div>
                    <div class="content_copy">
                        <p>
                            MediaTel is the UK's largest media research and data system. Serving 94%
                            of the media agency market, as well as over 50 major media owners, it is
                            now the most popular media planning and research tool on the market.
                        </p>
                        <p>
                            <strong>
                                Brief
                            </strong>
                        </p>
                        <ul>
                            <li>
                                Display vast amounts of data effectively.
                            </li>
                            <li>
                                Increase usage through improved UI.
                            </li>
                            <li>
                                Declutter, compartmentalise and modernise.
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                    $carouselImagePath = 'images/work/web/rajar/';
                    $carouselLength = 5;
                    $carouselAlt = 'Rajar screen';
                    
                    include('__carousel.php');
                ?>
            </article>
            <article class="content_item">
                <div class="content_info">
                    <div class="content_logo">
                        <img src="images/work/logos/events/logo_p.png" alt="MediaTel Group Events"
                        />
                    </div>
                    <div class="content_copy">
                        <p>
                            MediaTel is the UK's largest media research and data system. Serving 94%
                            of the media agency market, as well as over 50 major media owners, it is
                            now the most popular media planning and research tool on the market.
                        </p>
                        <p>
                            <strong>
                                Brief
                            </strong>
                        </p>
                        <ul>
                            <li>
                                Display vast amounts of data effectively.
                            </li>
                            <li>
                                Increase usage through improved UI.
                            </li>
                            <li>
                                Declutter, compartmentalise and modernise.
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                    $carouselImagePath = 'images/work/web/events/';
                    $carouselLength = 4;
                    $carouselAlt = 'Events screen';
                    
                    include('__carousel.php');
                ?>
            </article>
        </section>
    </div>
</div>

<?php
    include('__footer.php');
?>