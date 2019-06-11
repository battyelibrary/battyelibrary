<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Tales of the Inhabitants of Cemetery Hill | Articles";
include 'templates/header.php';?>

<main class="grid-x">
    <!-- LEFT COLUMN -->
    <div class="column column-left cell small-12 medium-8">
        <section class="mod">
            <!-- Main Article Content -->
            <?php
                $articleImg="https://placehold.it/1000x450/999?text=Article-IMG";
                $articleImgAlt="Portrait of John Joseph Bryan";
                $articleHeading="Tales of the Inhabitants of Cemetery Hill";
                $articleAuthor="Lorraine Clarke & Cherie Strickland";
                $articleDate="19.11.2013";
                $articleDesc="The following tales are derived from the inhabitants of the seven cemeteries at East Perth; as such, there are no happy endings.";
                $articleContent="
                <div class='mod-section-text-content-section'>
                    <b>Presentation given at the Friends of Battye Library Inc, on November 19, 2013.</b>
                    <p>When Lorraine and I were asked to speak about our work on the East Perth Cemeteries database it was suggested that we talk about the problems, errors, and challenges that we encountered during our research.</p>
                    <p>Of these the list is wide and varied, from: Finding the names of children listed on headstones only as 'the infant children of!!' — Finding the Christian names for all the wives only known as MRS — Correcting the death dates on headstones that were erected some years after the death — or knowing that a certain person should be in the cemeteries, so where is that one piece of information to tell you that they are buried in East Perth?</p>
                    <p>But we thought it would be much more interesting to share with you some of the fascinating stories that we uncovered during this 3½ year project.</p>
                </div>
                <div class='mod-section-text-content-section'>
                    <h2>Dying to be buried at the East Perth Cemeteries</h2>
                    <p>As mentioned earlier, <b>John Joseph Bryan</b>, or Thomas as he was known, was the catalyst for this project.</p>
                    <p>John Joseph Bryan was born 24/06/1862 Dinapur India, son of Deborah nee Phillips, of Tasmania and Sergeant Thomas Bryan of the 96th Regiment. John Joseph arrived in the Swan River Colony aboard the Clyde in 1863 with his parents, his father was an Enrolled Pensioner Guard and respected military musician.
                    <br>In 1878 John married Annie Louise Buggins in Fremantle, he was a member of the Fremantle Volunteers Band, Perth Volunteers Band and he took over the role of Band master of the Headquarters Band when his father retired in 1878.
                    <br>A printer by trade, he was apprenticed to Mr Edmund Stirling, and worked at the Inquirer, Daily News, Herald and WA Record, he then went on to start his own well respected printing business.</p>
                    <p><b>Sir Luke Samuel Leake</b> travelled 20438kms just to be memorialised on Cemetery Hill.
                    <br>Sir Luke Leake arrived in the Colony as a 4 year old in 1833 with his mother and older brother. He became a successful business man, promoting immigration and public works, Director and Chairman of the Western Australian Bank, Chairman of the Perth Town Trust, Vice President and subsequently President of the Swan River Mechanics Institute. In 1870 he was elected to the Legislative Council where he was made Speaker, he was
                    honoured for his devotion to the Colony by being made a Knight in 1876, and then granted a coat of arms in 1877.</p>
                </div>
                <div class='mod-section-text-content-section'>
                    <h2>Prominent Family Interesting Tale</h2>
                    <p>Whilst all deaths in families are heartbreaking, most do not have a story like this behind them.</p>
                    <p>A beautiful summer’s day in the January of 1894 was to turn the city on its head. Three siblings went crabbing near the William Street Jetty. Only two returned home.
                    <br><b>Victoria Hilda Chipper</b>, known as Hilda, was found drowned at one o’clock the following morning, what tragic events had taken place?
                    <br>Hilda was the daughter of John Charles Chipper and Grace Gertrude nee Albert, their daughter was only 7 years of age when she sadly died on the 20th January 1894. The story of her death filled the papers in the colony for some months to come.</p>
                </div>
                ";
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
            <h1>More Articles</h1>
            <div class="mod-section-readmore cell small-12">
                <!-- Reflections on the Health of Perth -->
                <?php
                    $readMoreHref="#";
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="Reflections on the Health of Perth";
                    $readMoreHeader="Reflections on the Health of Perth Through the Lives of Those Buried at East Perth Cemetery";
                    $readMoreAuthor="Lorraine Clarke & Cherie Strickland";
                    $readMoreDate="01.08.2014";
                    include 'modules/mod-section-readmore.php';
                ?>
                <!-- Super-VC and Two Croix de Guerre -->
                <?php
                    $readMoreImg="https://placehold.it/400x250/999?text=Article-IMG";
                    $readMoreImgAlt="Super-VC and Two Croix de Guerre";
                    $readMoreHeader="Super-VC and Two Croix de Guerre - The Life of Lt. Lawrence Dominic McArthy VC";
                    $readMoreAuthor="Robert K. O'Connor QC";
                    $readMoreDate="09.11.2012";
                    include 'modules/mod-section-readmore.php';
                ?>
            </div> <!-- end .mod-section-readmore --> 
        </section>        

    </div> <!-- end .column-left -->

    <!-- RIGHT COLUMN -->
    <div class="column column-right cell show-for-medium medium-4">
        <!-- search bar -->
        <section class="mod">
            <h1>Search Articles</h1>
            <?php include 'modules/mod-form-search.php'?>
        </section>

        <!-- latest articles -->
        <section class="mod cell small-12">
            <h1>Latest Articles</h1>

        </section>

    </div> <!-- end .column-right -->
</main> <!-- end .grid-x -->

<!-- FOOTER -->
<?php include 'templates/footer.php';?>