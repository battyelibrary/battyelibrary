### Modules Directory

## Text Modules
    module-name.php
        -   Module description
        -   Pages using this module
        ----
        Instructions for use



    mod-section-articles.php
        -   Module for list of articles
            - index.php, newsletters.php
        ----
        Include in destination file <section>:
            ````
            <div class="mod-section-articles grid-x">
            <!-- Article Name -->
            <?php
            $cellHref="#";
            $cellImg="img url";
            $cellImgAlt="";
            $cellTitle="";
            $cellText="";
            include 'modules/mod-section-articles.php';
            ?>
            </div>
            ````
        Repeat <?php ;?> for additional articles


    mod-section-articles-list.php
        -   Article module with an image, <h1>, author & date, text, and Read More link
        -   articles.php, newsletters.php
        ----
        Include in destination file <section>:
            ```
            <div class="mod-section-articlelist">
                <!-- Article Name -->
                <?php
                $cellHref="#";
                $cellDownload="#";
                $cellImg="Image URL";
                $cellImgAlt="";
                $cellTitle="";
                $cellAuthor="";
                $cellDate="DD.MM.YYYY";
                $cellText="";
                include 'modules/mod-section-articles-list.php';
                ?>
            </div> <!-- end .mod-section-articlelist -->
            ```
        Repeat <?php ;?> for additional articles


    mod-section-events.php
        -   Module for events
            - index.php, events.php

    mod-section-fw.php
        -   Full width section containing text and an image
            - index.php (Intro), about.php (About, Committee)
        ----
        Include in destination file <section>:
            ````
            <?php
            $fwTxt ="";
            $fwImgMob = "Img URL";
            $fwImg ="Img URL";
            $fwImgAlt = "";
            include 'modules/mod-section-fw.php';
            ?>
            ````


    mod-section-sb-textcell.php
        -   Small sidebar text cells with a <h2>, text, and Read More link
            - index.php (Current Projects)
        ----
        Include in destination file <section>:
            ```
            <div class="mod-section-sb-textcell">
                <!-- Cell title -->
                <?php
                $cellHref="#";
                $cellTitle="East Perth Cemeteries";
                $cellText="The graves of East Perth Cemeteries are a record of the first 70 years of European migration to what is now Perth, Western Australia.";
                include 'modules/mod-section-sb-textcell.php';
                ?>
            </div>
            ```
        Repeat <?php ;?> for additional articles


    mod-section-sb-img-textcell.php
        -   Small text cells with an image, <h2>, text, and Read More link
            - index.php (Publications)
        ----
        Include in destination file <section>:
            ```
            <div class="mod-section-sb-imgtxt">
                <!-- Cell title -->
                <?php
                $cellHref="#";
                $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
                $cellImgAlt="Australia's Last Convicts";
                $cellTitle="Australia's Last Convicts";
                $cellText="This publication contains 74 photographs of West Australian Convicts.";
                include 'modules/mod-section-sb-img-textcell.php';
                ?>
            </div>
            ```
        Repeat <?php ;?> for additional articles


    mod-section-membership.php
        -   A list of membership options in the sidebar
            - used on index.php


    mod-section-publications.php
        -   A list of publications by Battye Library
            - used on index.php


    mod-section-text.php
        -   For long-form text such as articles
            - used on article-'articlename'.php, newsletter-'newslettername'.php


    mod-section-download.php
        -   File download link
            - used on article-'articlename'.php, newsletter-'newslettername'.php
        Include in destination file <section>:
            ````
            <?php 
                $cellDownload="#";
                include 'modules/mod-section-download.php';
            ?>
            ````

    mod-section-readmore.php
        -   Further reading links
            - used on article-'articlename'.php, newsletter-'newslettername'.php
        Include in destination file <section>:
            ````
            <div class="mod-section-readmore cell small-12">
                <!-- Article Name -->
                <?php
                    $readMoreHref="#";
                    $readMoreImg="Image URL";
                    $readMoreImgAlt="";
                    $readMoreHeader="";
                    $readMoreAuthor="";
                    $readMoreDate="DD.MM.YYYY";
                    include 'modules/mod-section-readmore.php';
                ?>
            </div>
            ````
        Repeat <?php ;?> for additional articles


    mod-form-search.php
        -   search bar for sidebar
            - used on articles.php, newsletters.php, article-'articlename'.php, newsletter-'newslettername'.php

