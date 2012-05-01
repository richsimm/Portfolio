<?php
    // Sanity check if not defined by parent template
    if(!$pageID) {
        $pageID = '';
    }
?>
<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <title>
            Richard Simmonds
        </title>
        <meta name="description" content="Richard Simmonds is a London-based, early-adopting, dot-com surviving, decade-experienced, multi-disciplined interactive designer with a high level of experience in web design and authoring, alongside print and animation creation. He has worked within the UK and Australia at communications studios and web-based software houses creating solutions for telecoms, health and media sectors.">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="fonts/fonts.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js">
            </script>
        <![endif]-->
    </head>
    
    <body id="<?php echo $pageID ?>">
        <header>
            <nav>
                <ul>
                    <li class="contact">
                        <a href="contact">Contact</a>
                    </li>
                    <li class="about">
                        <a href="about">About</a>
                    </li>
                    <li class="work">
                        <a href="web">Work</a>
                    </li>
                    <li class="home">
                        <a href="index">Home</a>
                    </li>
                </ul>
            </nav>
            <hgroup>
                <div class="header_content">
                    <div class="header_content_inner">
                        <div class="emblem">
                            <img src="images/RS_emblem.png" />
                        </div>
                        <div class="header_text">
                            <h1>
                                Richard Simmonds
                            </h1>
                            <h2>
                                design, usability, authoring
                            </h2>

                            <?php if($pageID == 'home') { ?>
                            <div class="strap">
                                Early-adopting, dot-com surviving, decade-experienced, multi-disciplined
                                interactive designer
                            </div>
                            <div class="pdf_link">
                                <a href="#">Download Richard's CV</a>
                            </div>
                            <?php } ?>
                        </div>

                        <?php if($pageID == 'home') { ?>
                        <div class="links">
                            <a href="http://www.linkedin.com/profile?viewProfile=&amp;key=3979285"
                            target="_blank"><img src="images/linkedin.png" alt="Richard Simmonds on LinkedIn" border="0"></a>
                            <a href="http://www.imdb.com/name/nm3773386/" target="_blank"><img src="images/imdb.png" alt="Richard Simmonds on IMDB" border="0"></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </hgroup>
        </header>