<!-- HEAD & HEADER -->
<?php 
$pageTitle ="Home";
include 'templates/header.php';?>

<main class="grid-x">
<!-- ABOUT -->
    <!-- About Section -->
    <section class="mod mod-section-about cell small-12">
        <?php
        $fwTxt ="<p><b>The Friends of Battye Library (Inc.)</b> was inaugurated on the 6th of July 1981 to support the J. S. Battye Library of West Australian History and the State Archives (now known as the State Records Office of Western Australia).</p>
        <p>Sir Paul Hasluck was the Friends of Battye Library's first President and since then many distinguished historians, researchers and philanthropists have accepted the role of President and Patron of the organisation.</p>
        <p>Our aims are to assist with the acquisition, preservation and use of archival and documentary materials.</p>";
        $fwImgMob = "https://placehold.it/450x250/999?text=About-IMG";
        $fwImg ="https://placehold.it/300x350/999?text=About-IMG";
        $fwImgAlt = "Portrait of J. S. Battye";
        include 'modules/mod-section-fw.php';
        ?>
    </section>


<!-- LEFT COLUMN -->
<div class="column column-left cell small-12 medium-8">
    <!-- Meetings Section -->
    <section class="mod cell small-12">
        <h1>Upcoming Meetings & Events</h1>
        <?php include 'modules/mod-section-events.php';?>
        <a href="events.php" class="button">View events for <?php echo date("Y"); ?></a>
    </section>

    <!-- Membership Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Membership</h1>
        <?php include 'modules/mod-section-membership.php';?>
        <a href="membership.php" class="button">Become a Member</a>
    </section>

    <!-- Articles Section -->
    <section class="mod cell small-12">
        <h1>Latest Articles</h1>
        <div class="mod-section-articles grid-x">
            <!-- Reflections on the Health of Perth -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
            $cellImgAlt="Article Image";
            $cellTitle="Reflections on the Health of Perth Through the Lives of Those Buried at East Perth Cemetery";
            $cellText="East Perth Cemeteries is where our earliest pioneers and ancestors are buried; their lives and how they died can tell us much about the colony in which they lived.";
            include 'modules/mod-section-articles.php';
            ?>

            <!-- Tales of the Inhabitants of Cemetery Hill -->
            <?php
            $cellHref="article-cemeteryhill.php";
            $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
            $cellImgAlt="Article Image";
            $cellTitle="Tales of the Inhabitants of Cemetery Hill";
            $cellText="The following tales are derived from the inhabitants of the seven cemeteries at East Perth; as such there are no happy endings.";
            include 'modules/mod-section-articles.php';
            ?>

            <!-- Super-VC and Two Croix de Guerre -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
            $cellImgAlt="Article Image";
            $cellTitle="Super-VC and Two Croix de Guerre - The Life of Lt. Lawrence Dominic McArthy VC";
            $cellText="Just inside the entrance to the Town Hall at York, Western Australia, there is an honour board containing the names of all the young men of York who served in the armed forces for Australia in World War I. One name listed is 'L D McCarthy VC.'";
            include 'modules/mod-section-articles.php';
            ?>

            <!-- Lorem Ipsum Dolor sit Amet -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/600x350/999?text=Article-IMG";
            $cellImgAlt="Article Image";
            $cellTitle="Lorem Ipsum Dolor sit Amet, Consectetur Adipiscing Elit";
            $cellText="Jut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor. Excepteur sint occaecat cupidatat non proident.";
            include 'modules/mod-section-articles.php';
            ?>
        </div> <!-- end .mod-section-articles -->
    </section>

    <!-- Publications Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Publications</h1>
        <div class="mod-section-sb-imgtxt">
            <!-- Australia's Last Convicts -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Australia's Last Convicts";
            $cellTitle="Australia's Last Convicts";
            $cellText="This publication contains 74 photographs of West Australian Convicts.";
            include 'modules/mod-section-sb-img-textcell.php';
            ?>
            <!-- Convict Records of Western Australia -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Convict Records of Western Australia";
            $cellTitle="Convict Records of Western Australia";
            $cellText="Suggested steps for tracing convict records in Western Australia.";
            include 'modules/mod-section-sb-img-textcell.php';
            ?>
        <a href="shop.php" class="button">View Publications</a>
        </div> <!-- end .mod-section-sb-imgtxt -->
    </section>

    <!-- Further Reading Section -->
    <section class="mod cell small-12">
        <h1>Further Reading</h1>
        <div class="mod-section-publications mod-section-readings-index">
        <!-- Bicentennial Dictionary of Western Australians -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/700x350/999?text=Article-IMG";
            $cellImgAlt="Article Image";
            $cellTitle="Bicentennial Dictionary of Western Australians";
            $cellText="<b>Pre 1829 - 1888, Volumes I through IV.</b><br>This Dictionary has been scanned by volunteers. Lorem ipsum dolor sit amet, conse  sit adipi elit, sed do eiusmod tempor scing ipsum sit amet, conse  sit adipi...";
            include 'modules/mod-section-img-textcell.php';
            ?>
        </div>

        <div class="mod-section-textcell grid-x">
            <!-- Bibliography of Western Australian History -->
                <?php
                $cellHref="#";
                $cellTitle="Bibliography of Western Australian History";
                $cellText="A compilation of books and articles relating to the history of Western Australia.";
                include 'modules/mod-section-textcell.php'
                ?>
            <!-- Past Newsletters -->
                <?php
                $cellHref="newsletters.php";
                $cellTitle="Past Newsletters";
                $cellText="The newsletter is published three times per year.";
                include 'modules/mod-section-textcell.php'
                ?>
            <!-- Jack's Back -->
                <?php
                $cellHref="#";
                $cellTitle="Jack's Back";
                $cellText="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
                include 'modules/mod-section-textcell.php'
                ?>
            <!-- Related Links -->
                <?php
                $cellHref="#";
                $cellTitle="Related Links";
                $cellText="A compilation of links and articles relating to the history of Western Australia.";
                include 'modules/mod-section-textcell.php'
                ?>
            </div>
    </section>

    <!-- Current Projects Section (Mobile Only) -->
    <section class="mod cell small-12 hide-for-medium">
        <h1>Current Projects</h1>
        <div class="mod-section-sb-textcell">
            <!-- East Perth Cemeteries -->
            <?php
            $cellHref="#";
            $cellTitle="East Perth Cemeteries";
            $cellText="The graves of East Perth Cemeteries are a record of the first 70 years of European migration to what is now Perth, Western Australia.";
            include 'modules/mod-section-sb-textcell.php';
            ?>
            <!-- Perth Metro Plans Project -->
            <?php
            $cellHref="#";
            $cellTitle="Perth Metro Plans Project";
            $cellText="Digitising and geo-referencing Perth's historical Sewerage Plans to provide a fresh perspective on the past hundred years of metropolitan development.";
            include 'modules/mod-section-sb-textcell.php';
            ?>
            <a href="projects.php" class="button">View Projects</a>
        </div> <!-- end .mod-section-sb-textcell -->
    </section>

</div> <!-- end .column-left -->


<!-- RIGHT COLUMN -->
<div class="column column-right cell show-for-medium medium-4">
    <!-- Membership Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Membership</h1>
        <?php include 'modules/mod-section-membership.php';?>
        <a href="membership.php" class="button">Become a Member</a>
    </section>

    <!-- Publications Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Publications</h1>
        <div class="mod-section-sb-imgtxt">
            <!-- Australia's Last Convicts -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Australia's Last Convicts";
            $cellTitle="Australia's Last Convicts";
            $cellText="This publication contains 74 photographs of West Australian Convicts.";
            include 'modules/mod-section-sb-img-textcell.php';
            ?>
            <!-- Convict Records of Western Australia -->
            <?php
            $cellHref="#";
            $cellImg="https://placehold.it/300x400/999?text=Publication-IMG";
            $cellImgAlt="Convict Records of Western Australia";
            $cellTitle="Convict Records of Western Australia";
            $cellText="Suggested steps for tracing convict records in Western Australia.";
            include 'modules/mod-section-sb-img-textcell.php';
            ?>
        <a href="shop.php" class="button">View Publications</a>
        </div> <!-- end .mod-section-sb-imgtxt -->
    </section>

    <!-- Current Projects Section -->
    <section class="mod cell medium-12 show-for-medium">
        <h1>Current Projects</h1>
        <div class="mod-section-sb-textcell">
            <!-- East Perth Cemeteries -->
            <?php
            $cellHref="#";
            $cellTitle="East Perth Cemeteries";
            $cellText="The graves of East Perth Cemeteries are a record of the first 70 years of European migration to what is now Perth, Western Australia.";
            include 'modules/mod-section-sb-textcell.php';
            ?>
            <!-- Perth Metro Plans Project -->
            <?php
            $cellHref="#";
            $cellTitle="Perth Metro Plans Project";
            $cellText="Digitising and geo-referencing Perth's historical Sewerage Plans to provide a fresh perspective on the past hundred years of metropolitan development.";
            include 'modules/mod-section-sb-textcell.php';
            ?>
            <a href="projects.php" class="button">View Projects</a>
        </div> <!-- end .mod-section-sb-textcell -->
    </section>

</div> <!-- end .column-right -->
</main>

<!-- FOOTER -->
<?php include 'templates/footer.php';?>