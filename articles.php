<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Articles";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <!-- articles -->
    <div class="column column-left cell small-12 medium-8">

        <section class="mod cell small-12">
            <h1>Articles</h1>
            <div class="mod-section-articlelist">
                <!-- Reflections on the Health of Perth -->
                <?php
                $cellImg="https://placehold.it/700x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="Reflections on the Health of Perth Through the Lives of Those Buried at East Perth Cemetery";
                $cellAuthor="Lorraine Clarke & Cherie Strickland";
                $cellDate="01.08.2014";
                $cellText="East Perth Cemeteries is where our earliest pioneers and ancestors are buried; their lives and how they died can tell us much about the colony in which they lived.";
                include 'modules/mod-section-articles-list.php';
                ?>

                <!-- Tales of the Inhabitants of Cemetery Hill -->
                <?php
                $cellImg="https://placehold.it/700x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="Tales of the Inhabitants of Cemetery Hill";
                $cellAuthor="Lorraine Clarke & Cherie Strickland";
                $cellDate="19.11.2013";
                $cellText="The following tales are derived from the inhabitants of the seven cemeteries at East Perth; as such, there are no happy endings.";
                include 'modules/mod-section-articles-list.php';
                ?>

                <!-- Super-VC and Two Croix de Guerre -->
                <?php
                $cellImg="https://placehold.it/700x350/999?text=Article-IMG";
                $cellImgAlt="Article Image";
                $cellTitle="Super-VC and Two Croix de Guerre - The Life of Lt. Lawrence Dominic McArthy VC";
                $cellAuthor="Robert K. O'Connor QC";
                $cellDate="09.11.2012";
                $cellText="Just inside the entrance to the Town Hall at York, Western Australia, there is an honour board containing the names of all the young men of York who served in the armed forces for Australia in World War I. One name listed is 'L D McCarthy VC.'";
                include 'modules/mod-section-articles-list.php';
                ?>
                
            </div> <!-- end .mod-section-articlelist -->
        </section>

    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <!-- search bar -->
        <section class="mod cell small-12">
            <h1>Search Articles</h1>
            <?php include 'modules/mod-form-search.php'?>
        </section>

        <!-- latest articles -->
        <section class="mod cell small-12">
            <h1>Latest Articles</h1>

        </section>

    </div> <!-- end .column-right -->

</main>
<!-- FOOTER -->
<?php include 'templates/footer.php';?>
