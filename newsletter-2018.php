<!-- HEAD & HEADER -->
<?php 
$pageTitle ="March - November 2018 Newsletter | Newsletters";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <div class="column column-left cell small-12 medium-8">
        <section class="mod">
            <!-- Main Newsletter Content -->
            <?php
                $articleImg="https://placehold.it/1000x450/999?text=Article-IMG";
                $articleImgAlt="Bill interviewing at Goomalling";
                $articleHeading="March - November 2018 Newsletter";
                $articleAuthor="Edited by Jennie Carter";
                $articleDate="01.11.2018";
                $articleDesc="Our November 2018 Meeting: Bill Bunbury presents 'You Can Hear the Ants Breathing: The Power of Memory, Land, and Language, and the Aboriginal and European Sense of Country.'";
                $articleContent="<div class='PDF-reader'>PDF Reader Plugin Goes Here</div>";
                include 'modules/mod-section-text.php';
            ?>
        </section>

        <section class="mod">
            <?php 
                $cellDownload="#";
                include 'modules/mod-section-download.php';
            ?>
        </section>

        <!-- More Articles -->
        <section class="mod">
            <h1>More Newsletters</h1>
            <div class="mod-section-readmore cell small-12">
                <!-- Reflections on the Health of Perth -->
                <?php
                    $readMoreHref="#";
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="March - November 2017 Newsletter";
                    $readMoreHeader="March - November 2017 Newsletter";
                    $readMoreAuthor="Jennie Carter";
                    $readMoreDate="01.11.2017";
                    include 'modules/mod-section-readmore.php';
                ?>
                <!-- Super-VC and Two Croix de Guerre -->
                <?php
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="March - November 2016 Newsletter";
                    $readMoreHeader="March - November 2016 Newsletter";
                    $readMoreAuthor="Jennie Carter";
                    $readMoreDate="01.11.2016";
                    include 'modules/mod-section-readmore.php';
                ?>
            </div> <!-- end .mod-section-readmore --> 
        </section>        

    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell medium-4">
        <!-- search bar -->
        <section class="mod">
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
            <div>
                <p>Contributions to the newsletter are greatly appreciated. The deadlines for each edition are:
                <br>10th February, 10th June, 10th October.</p>

                <p>Please <a href="#">email the editor</a> for further information.</p>
            </div>
        </section>

        <!-- newsletters by year -->
        <section class="mod cell small-12">
            <h1>Newsletters by Year</h1>
            <?php include 'modules/mod-section-sb-accordion.php'?>
        </section>

    </div> <!-- end .column-right -->
</main> <!-- end .grid-x -->

<!-- FOOTER -->
<?php include 'templates/footer.php';?>