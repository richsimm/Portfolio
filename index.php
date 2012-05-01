<?php 
    $pageID = 'home';
    include('__header.php');
?>
<div id="container">
    <div id="container_inner">
        <section>
            <h3>
                Featured work
            </h3>
            <article class="showcase_container">
                <div class="showcase_menu">
                    <div class="showcase_menu_group active">
                        <div class="showcase_menu_group_header">
                            Web
                        </div>
                        <a href="web#web_rajar" data-key="web_rajar" class="showcase_menu_item active"><img src="images/work/web/rajar/thumb.jpg" width="50" height="50" border="0" alt="Rajar" /></a>
                        <a href="web#web_events" data-key="web_events" class="showcase_menu_item"><img src="images/work/web/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="web#web_barb" data-key="web_barb" class="showcase_menu_item"><img src="images/work/web/cc/thumb.jpg" width="50" height="50" border="0" /></a>
                    </div>
                    <div class="showcase_menu_group">
                        <div class="showcase_menu_group_header">
                            Brand
                        </div>
                        <a href="#" class="showcase_menu_item"><img src="images/work/brand/cc/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="#" class="showcase_menu_item"><img src="images/work/brand/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="#" class="showcase_menu_item"><img src="images/work/brand/procurus/thumb.jpg" width="50" height="50" border="0" /></a>
                    </div>
                    <div class="showcase_menu_group">
                        <div class="showcase_menu_group_header">
                            Print
                        </div>
                        <a href="#" class="showcase_menu_item"><img src="images/work/print/morgana/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="#" class="showcase_menu_item"><img src="images/work/print/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="#" class="showcase_menu_item"><img src="images/work/print/mediatel/thumb.jpg" width="50" height="50" border="0" /></a>
                    </div>
                </div>
                <?php
                    $project = 'web_rajar';
                    include('__carousel.php');
                ?>
            </article>
        </section>
    </div>
    <div class="panel_outer">
        <div class="panel">
            <div class="panel_inner">
                <div class="content_info">
                <div class="content_logo">
                    <img src="images/work/logos/rajar/logo_r.png" border="0" />
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
            </div>
        </div>
    </div>
</div>

<?php
    include('__footer.php');
?>