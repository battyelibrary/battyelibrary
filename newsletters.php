<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Newsletters";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <!-- articles -->
    <div class="column column-left cell small-12 medium-8">

        <section class="mod cell small-12">
            <h1>Newsletters</h1>
            <div class="mod-section-articlelist">
                <!-- March 2019 Newsletter -->
                <?php
                $cellHref="#";
                $cellDownload="#";
                $cellImg="https://placehold.it/700x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="March 2019 Newsletter";
                $cellAuthor="Friends of Battye Library";
                $cellDate="01.03.2019";
                $cellText="<b>Our March 2019 Meeting:</b> Andrew Green presents 'Paradise Defiled, Paradise Defiant: British and Australian Soldiers’ Visions of Great War Pastoral Landscapes.'";
                include 'modules/mod-section-articles-list.php';
                ?>                
            </div> <!-- end .mod-section-articlelist -->
        </section>

        <section class="mod cell small-12">
            <div class="mod-section-articles grid-x">
                <!-- November 2018 Newsletter -->
                <?php
                $cellHref="newsletter-2018.php";
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="November 2018 Newsletter";
                $cellText="<b>Our November 2018 Meeting:</b> Bill Bunbury presents 'You Can Hear the Ants Breathing: The Power of Memory, Land, and Language, and the Aboriginal and European Sense of Country.'";
                include 'modules/mod-section-articles.php';
                ?>

                <!-- July 2018 Newsletter -->
                <?php
                $cellHref="#";                
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="July 2018 Newsletter";
                $cellText="<b>Our July 2018 Meeting:</b> Dr Fiona Bush OAM presents 'St. Ronan’s Well: When Fiction Becomes Historical Fact.'";
                include 'modules/mod-section-articles.php';
                ?>

                <!-- March 2018 Newsletter -->
                <?php
                $cellHref="#";                
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellHref="newsletter-march2018.php";
                $cellTitle="March 2018 Newsletter";
                $cellText="<b>Our March 2018 Meeting:</b> Dr Fiona Bush OAM presents 'St. Ronan’s Well: When Fiction Becomes Historical Fact.'";
                include 'modules/mod-section-articles.php';
                ?>

                <!-- November 2017 Newsletter -->
                <?php
                $cellHref="#";
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="November 2017 Newsletter";
                $cellText="<b>Our November 2017 Meeting:</b> Dr Fiona Bush OAM presents 'St. Ronan’s Well: When Fiction Becomes Historical Fact.'";
                include 'modules/mod-section-articles.php';
                ?>

                <!-- July 2017 Newsletter -->
                <?php
                $cellHref="#";
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="July 2017 Newsletter";
                $cellText="<b>Our March 2018 Meeting:</b> Dr Fiona Bush OAM presents 'St. Ronan’s Well: When Fiction Becomes Historical Fact.'";
                include 'modules/mod-section-articles.php';
                ?>

                <!-- March 2017 Newsletter -->
                <?php
                $cellHref="#";
                $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="March 2017 Newsletter";
                $cellText="<b>Our November 2017 Meeting:</b> Dr Fiona Bush OAM presents 'St. Ronan’s Well: When Fiction Becomes Historical Fact.'";
                include 'modules/mod-section-articles.php';
                ?>

            </div>
        </section>

    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell small-12 medium-4">
        <!-- search bar -->
        <section class="mod cell small-12">
            <h1>Search Newsletters</h1>
            <?php include 'modules/mod-form-search.php'?>
        </section>

        <!-- about newsletters -->
        <section class="mod cell small-12">
            <h1>About the Newsletter</h1>
            <p>
                The Friends of Battye Library Newsletter is published three times per year, in March, July, and November.
                <br>Views expressed in the newsletter are not neccessarily the views of the Friends of Battye Library Committee.
            </p>
        </section>

        <!-- contributions -->
        <section class="mod cell small-12">
            <h1>Contributions</h1>
            <p>
                Contributions to the newsletter are greatly appreciated. The deadlines for each edition are:
                <br>10th February, 10th June, 10th October.
                <br>Please email the editor for further information.
            </p>
        </section>

        <!-- newsletters by year -->
        <section class="mod cell small-12">
            <h1>Newsletters by Year</h1>
            <?php include 'modules/mod-section-sb-accordion.php'?>
        </section>

    </div> <!-- end .column-right -->

</main>
<!-- FOOTER -->
<?php include 'templates/footer.php';?>
