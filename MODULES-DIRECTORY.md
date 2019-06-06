### Modules Directory

## Text Modules
    module-name.php
        -   Module description
        -   Pages using this module
        ----
        Instructions for use



    mod-section-articles.php
        -   Module for list of articles
            - index.php


    mod-section-articles-list.php
    -   Article module with an image, <h1>, author & date, text, and Read More link
    -   articles.php, newsletters.php
    ----
    Include in destination file section:
        ```
        <!-- Article Name -->
        <div class="mod-section-articlelist">
            <?php
            $cellImg="";
            $cellImgAlt="";
            $cellTitle="";
            $cellAuthor="";
            $cellDate="";
            $cellText="";
            include 'modules/mod-section-articles-list.php';
            ?>
        </div> <!-- end .mod-section-articlelist -->
        ```
    Repeat php within <div class="mod-section-articlelist"> for additional articles


    mod-section-events.php
        -   Module for events
            - index.php, events.php


    mod-section-fw.php
        -   Full width section containing text and an image
            - index.php (Intro), about.php (About, Committee)


    mod-section-textcell.php
        -   Small text cells with a <h2>, text, and Read More link
            - index.php (Current Projects)


    mod-section-img-textcell.php
        -   Small text cells with an image, <h2>, text, and Read More link
            - index.php (Publications)


    mod-section-membership.php
        -   A list of membership options in the sidebar
            - used on index.php


    mod-section-publications.php
        -   A list of publications by Battye Library
            - used on index.php


    mod-section-reading.php
        -   One primary link with an image & desc, with four links & desc underneath
            - used on index.php


    mod-section-text.php
        -   For long-form text such as articles
            - used on article-'articlename'.php, newsletter-'newslettername'.php


    mod-section-download.php
        -   File download link
            - used on article-'articlename'.php, newsletter-'newslettername'.php


    mod-section-readmore.php
        -   Further reading links
            - used on article-'articlename'.php, newsletter-'newslettername'.php
        Include in destination file section:
            ````
            <div class="mod-section-readmore cell small-12">
                <!-- Article Name -->
                <?php
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="Reflections on the Health of Perth";
                    $readMoreHeader="Reflections on the Health of Perth Through the Lives of Those Buried at East Perth Cemetery";
                    $readMoreAuthor="Lorraine Clarke & Cherie Strickland";
                    $readMoreDate="01.08.2014";
                    include 'modules/mod-section-readmore.php';
                ?>
            </div>
            ````
        Repeat php within <div class="mod-section-readmore"> for additional articles


    mod-form-search.php
        -   search bar for sidebar
            - used on articles.php, newsletters.php, article-'articlename'.php, newsletter-'newslettername'.php

