<!-- HEAD & HEADER -->
<?php 
$pageTitle ="March to November 2018 Newsletter";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <div class="column column-left cell small-12 medium-8">
        <section class="mod">
            <!-- Main Newsletter Content -->
            <?php
                $newsletterImg="https://placehold.it/1000x450/999?text=Article-IMG";
                $newsletterImgAlt="Bill interviewing at Goomalling";
                $newsletterHeading="March-November 2018 Newsletter";
                $newsletterEditor="Edited By Ms Jennie Carter";
                $newsletterDate="March 2018";
                $newsletterContent="
                <div class='mod-section-text-content-section'>
                    <h2>March 2018-You can hear the ants breathing</h2>
                    <p>Speaker | Bill Bunbury</p>
                    <p>Bill discusses the power of memory, land and language and the
                    Aboriginal and European sense of country. Expressed through Oral
                    History, allowing us to hear and share personal experience, and, in this
                    context, attachment and response to land, which, for both original and
                    more recent Australians, is deeply interwoven into both our past and our
                    present.</p>
                </div>
                <div class='mod-section-text-content-section'>
                    <h2>July 2018-Poison Plants and Swan River Personalities</h2>
                    <p>Speaker | Neville Marchant</p>
                    <p>
                    One notable aspect of the rich plant diversity of south west Australia is
                    the unusually high number of toxic species that have evolved in response
                    to animal grazing pressures over many millions of years. The first
                    European settlers to the Swan River in 1829 were not only confronted
                    by an unfamiliar environment, they also had inexplicable stock losses.
                    There are around 40 species of the legume genus Gastrolobium alone
                    that are now thought to be toxic at certain times of the year. Two species
                    of this genus were responsible for stock losses around Guildford, and
                    a number of other species caused problems in certain seasons on the
                    York Road.</p>
                </div>
                <div class='mod-section-text-content-section'>
                    <h2>November 2018-Soilders of the Western Front</h2>
                    <p>Speaker | Neville Marchant</p>
                    <p>
                    Shannon will be speaking about
                    the Western Front Dead from
                    Western Australia and touch on
                    similarities between this project
                    and her earlier one, Gallipoli
                    Dead from Western Australia. </p>
                </div>
                ";
                include 'modules/mod-section-text-newsletters.php';
            ?>
        </section>

        <section class="mod">
            <?php 
                $cellDownload="etc/newsletters/Newsletter 2018.pdf";
                include 'modules/mod-section-download-newsletters.php';
            ?>
        </section>

        <!-- More Articles -->
        <section class="mod">
            <h1>More Newsletters</h1>
            <div class="mod-section-readmore cell small-12">
                <!-- March-November 2017 -->
                <?php
                    $readMoreHref="#";
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="March-November 2017";
                    $readMoreHeader="March-November 2017";
                    $readMoreAuthor="Ms Jennie Carter";
                    $readMoreDate="01.03.2017";
                    include 'modules/mod-section-readmore.php';
                ?>
                <!-- Super-VC and Two Croix de Guerre -->
                <?php
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="March-November 2016";
                    $readMoreHeader="March-November 2016";
                    $readMoreAuthor="Robert K. O'Connor QC";
                    $readMoreDate="01.03.2016";
                    include 'modules/mod-section-readmore.php';
                ?>
            </div> <!-- end .mod-section-readmore --> 
        </section>        

    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <!-- search bar -->
        <section class="mod">
            <h1>Search Newsletters</h1>
            <?php include 'modules/mod-form-search.php'?>
        </section>

        <!-- latest Newsletters -->
        <section class="mod cell small-12">
            <h1>Latest Newsletters</h1>

        </section>

    </div> <!-- end .column-right -->
</main> <!-- end .grid-x -->

<!-- FOOTER -->
<?php include 'templates/footer.php';?>