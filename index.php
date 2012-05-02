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
                <nav class="work_menu">
                        <a href="web" class="work_menu_item">
                            Web
                        </a>
                        <a href="web#web_rajar" data-key="web_rajar" class="work_menu_square active"><img src="images/work/web/rajar/thumb.jpg" width="50" height="50" border="0" alt="Rajar" /></a>
                        <a href="web#web_events" data-key="web_events" class="work_menu_square"><img src="images/work/web/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="web#web_cc" data-key="web_cc" class="work_menu_square"><img src="images/work/web/cc/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="brand" class="work_menu_item">
                            Brand
                        </a>
                        <a href="brand#brand_cc" data-key="brand_cc" class="work_menu_square"><img src="images/work/brand/cc/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="brand#brand_events" data-key="brand_events" class="work_menu_square"><img src="images/work/brand/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="brand#brand_procurus" data-key="brand_procurus" class="work_menu_square"><img src="images/work/brand/procurus/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="print" class="work_menu_item">
                            Print
                        </a>
                        <a href="print#print_morgana" data-key="print_morgana" class="work_menu_square"><img src="images/work/print/morgana/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="print#print_events" data-key="print_events" class="work_menu_square"><img src="images/work/print/events/thumb.jpg" width="50" height="50" border="0" /></a>
                        <a href="print#print_mediatel" data-key="print_mediatel" class="work_menu_square"><img src="images/work/print/mediatel/thumb.jpg" width="50" height="50" border="0" /></a>
                
                </nav>
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
                    <p>Radio Joint Audience Research is the official body in charge of measuring radio audiences within the UK. It is jointly owned by the BBC and the RadioCentre on behalf of the commercial sector.</p>
                    <p>
                        <strong>
                            Brief
                        </strong>
                    </p>
                    <ul>
                        <li>Take the very dated original and burn it.</li>
                        <li>Create a bold, content-rich online experience for industry and public use.</li>
                        <li>Make it easily updateable to handle many complex data releases.</li>
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